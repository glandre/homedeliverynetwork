<?php

namespace App\Http\Controllers;

use App\Mail\NotifyPaymentReceived;
use App\Mail\OrderSuccessfullySubmitted;
use App\Order;
use App\User;
use Auth;
use GuzzleHttp\Client;

class OrderController extends Controller
{
    public function index()
    {
        return $this->showOrders(Order::where('status', '<>', 'Cart')->get());
    }

    public function showNewOrders() {
        return $this->showOrders(Order::where('status', 'New')->get());
    }

    public function showPaidOrders() {
        return $this->showOrders(Order::where('status', 'Paid')->get());
    }

    public function showShippedOrders() {
        return $this->showOrders(Order::where('status', 'Shipped')->get());
    }

    private function showOrders($orders) {
        return view('orders.list', ['orders' => $orders]);
    }

    public function show($orderId)
    {
        $order = Order::findOrFail($orderId);

        if($order->status == 'Paid')
        {
            $messages = $order->validateProducts();
            if(!$messages['errors']->isEmpty() || !$messages['warnings']->isEmpty())
            {
                $this->flashMessagesToSession($messages, 'Submission failed! The following products are sold out:');
            }
        }

        return view('orders.edit', ['order' => $order]);
    }

    public function changeOrderStatusToPaid($orderId)
    {
        if(! (\Auth::user()->isSuper()) ) {
            abort(403, 'Your are not allowed to perform this action!');
        }

        $order = Order::find($orderId);
        if($order->status != 'New') {
            session()->flash('message_danger', "You can't update from {$order->status} to Paid!");
        }

        $order->status = 'Paid';
        $order->save();

        session()->flash('message_success', 'Order successfully updated!');
        $this->sendPaymentConfirmationMail($order);
        return redirect('orders');
    }

    public function changeOrderStatusToShipped($orderId)
    {
        if(! (\Auth::user()->isSuper()) )
        {
            abort(403, 'Your are not allowed to perform this action!');
        }

        $order = Order::find($orderId);
        if($order->status != 'Paid')
        {
            session()->flash('message_danger', "You can't update from {$order->status} to Shipped!");
            return back();
        }

        $messages = $order->process('Shipped', true);

        if(!$messages['errors']->isEmpty() || !$messages['warnings']->isEmpty())
        {
            $this->flashMessagesToSession($messages, 'Submission failed! The following products are sold out:');
        }
        else {
            session()->flash('message_success', "Order successfully submitted!");
            $this->sendShippedConfirmationMail($order);
        }

        return back();
    }

    private function flashMessagesToSession($messages, $errorMessagePrefix = '')
    {
        session()->flash(
            'message_danger',
            Order::reduceValidationMessages($errorMessagePrefix, $messages, 'errors') .
            Order::reduceValidationMessages('', $messages, 'warnings') .
            '.'
        );
    }

    private function sendPaymentConfirmationMail(Order $order) {
        $user = User::find($order->user_id);
        $client = new Client();
        $message = array(
            'to' => $user['email'],
            'from' => "BuyOnlineWeed <info@buyonlineweed.ca>",
            'subject' => 'Order Payment Received',
            'html' => '<p>The payment for your recent order was successfully received!</p><p>Cheers!</p>'
        );
        $res = $client->request('POST', 'https://hdnemailserver.herokuapp.com/registrations', ['form_params' => $message]);
        // \Mail::to(User::find($order->user_id))->send(new NotifyPaymentReceived($order->getInfo()));
    }

    private function sendShippedConfirmationMail(Order $order) {
        $user = User::find($order->user_id);
        $client = new Client();
        $message = array(
            'to' => $user['email'],
            'from' => "BuyOnlineWeed <info@buyonlineweed.ca>",
            'subject' => 'Order Payment Received',
            'html' => '<p>The following order was just shipped:</p><p>{{ $orderInfo }}</p><p>Cheers!</p>'
        );
        $res = $client->request('POST', 'https://hdnemailserver.herokuapp.com/registrations', ['form_params' => $message]);
        // \Mail::to(User::find($order->user_id))->send(new OrderSuccessfullySubmitted($order->getInfo()));
    }
}
