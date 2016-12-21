<?php

namespace App\Http\Controllers;

use App\Mail\OrderSuccessfullySubmitted;
use App\Order;
use App\Product;
use App\User;
use App\UserThatShouldBeNotified;
use Auth;
use DB;
use GuzzleHttp\Client;

class StoreController extends Controller
{

    protected $order;

    private function getOrder()
    {
        if(!$this->order) {
            if (\Auth::user()) {
                $this->order = Order::where('user_id', \Auth::user()->id)
                    ->where('status', 'Cart')->first();

                if (!$this->order) {
                    $this->order = Order::create([
                        'user_id' => \Auth::user()->id,
                    ]);
                }
            }
            else {
                $this->order = new Order();
            }
        }
        return $this->order;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('store.home', ['order' => $this->getOrder()]);
    }

    public function addToCart($productId)
    {
        $this->getOrder()->products()->attach($productId, ['quantity' => 1]);
        // return $this->index();
        return redirect('/catalog');
    }

    public function checkout()
    {
        if($this->getOrder()->status != 'Cart')
        {
            session()->flash('message_danger', "You can't update from {$this->getOrder()->status} to New!");
            return view('store.review');
        }

        if(count($this->getOrder()->products) == 0)
        {
            session()->flash('message_danger', "Can't submit an empty order.");
            return view('store.review');
        }

        $messages = $this->getOrder()->process('New');

        $this->flashMessagesToSession($messages, 'Submission failed!');

        $this->sendMails();

        return redirect('store')->with('message_success', 'Thank you for your order! Please check your email for notifications.');
    }

    public function increaseQuantity($productId) {
        $newQuantity = $this->getOrder()->product($productId)->pivot->quantity + 1;
        $this->getOrder()->products()->updateExistingPivot($productId, ['quantity' => $newQuantity]);
        // return response()->json(
        //     [
        //         'status' => 'success',
        //         'data' => [
        //             'products' => $this->getOrder()->products(),
        //             'total' => $this->getOrder()->total()
        //         ]
        //     ]);
        return view('store.review', ['order' => $this->getOrder()]);
    }

    public function decreaseQuantity($productId) {

        $newQuantity = $this->getOrder()->product($productId)->pivot->quantity - 1;

        if($newQuantity < 1) {
            $newQuantity = 1;
        }

        $this->getOrder()->products()->updateExistingPivot($productId, ['quantity' => $newQuantity]);
        // return response()->json(
        //     [
        //         'status' => 'success',
        //         'data' => [
        //             'products' => $this->getOrder()->products(),
        //             'total' => $this->getOrder()->total()
        //         ]
        //     ]);
        return view('store.review', ['order' => $this->getOrder()]);
    }

    public function removeFromCart($productId) {
        $this->getOrder()->products()->detach($productId);
        return back();
    }

    public function showCheckout()
    {
        $order = Order::where('user_id', \Auth::user()->id)->where('status', 'Cart')->first();
        $order->products = DB::table('order_product')->where('order_id', $order->id)->get();
        return view('checkout.show', compact('order'));
    }

    public function showItem($id)
    {
        $product = Product::find($id);
        return view('store.view', compact('product'));
    }

    public function showReviewOrder()
    {
        $messages = $this->getOrder()->validateProducts();
        $this->flashMessagesToSession($messages, '', false);
        $order = $this->getOrder();
        
        return view('store.review', ['order' => $order]);
    }

    public function submitOrder()
    {
        return redirect('checkout');
    }

    private function flashMessagesToSession($messages, $errorMessagePrefix = '', $showSuccess = true)
    {
        $errors = Order::reduceValidationMessages(
            "$errorMessagePrefix The following products are sold out:",
            $messages,
            'errors'
        );

        $warnings = Order::reduceValidationMessages(
            "Because the following products are currently not available in the inventory, your order may take longer to be shipped:",
            $messages,
            'warnings'
        );

        session()->flash('message_danger', $errors);
        session()->flash('message_warning', $warnings);

        if($messages['errors']->isEmpty() && $showSuccess) {
            session()->flash('message_success', "Order successfully submitted!");
        }
    }

    private function sendMails() {
        $user = Auth::user();
        $orderInfo = $this->getOrder()->getInfo();
        $client = new Client();
        $customer_message = array(
            'to' => 'garryhicks21@gmail.com',
            'from' => "BuyOnlineWeed <info@buyonlineweed.ca>",
            'subject' => 'Order Successfully Submitted',
            'html' => '<p>We received your order!</p><p>Payment can be sent via Interac E-transfer, 
                        and will be set for shipment within 24 hours</p><p>Cheers!</p>'
        );
        $staff_message = array(
            'to' => 'garryhicks21@gmail.com',
            'from' => "BuyOnlineWeed <info@buyonlineweed.ca>",
            'subject' => 'Order Successfully Submitted',
            'html' => '<p>A new Order was submitted:</p><p>Cheers!</p>'
        );
        $customer_res = $client->request('POST', 'https://hdnemailserver.herokuapp.com/registrations', ['form_params' => $customer_message]);
        $staff_res = $client->request('POST', 'https://hdnemailserver.herokuapp.com/registrations', ['form_params' => $staff_message]);

        // \Mail::to(\Auth::user())->send(new OrderSuccessfullySubmitted($orderInfo));
        // \Mail::to(UserThatShouldBeNotified::onOrderSubmitted())->send(new NotifyStaffOrderSuccessSubmitted($orderInfo));
    }

}
