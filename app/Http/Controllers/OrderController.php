<?php

namespace App\Http\Controllers;

use App\Order;

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

    public function showCompletedOrders() {
        return $this->showOrders(Order::where('status', 'Complete')->get());
    }

    private function showOrders($orders) {
        return view('orders.list', ['orders' => $orders]);
    }

    public function show($orderId)
    {
        return view('orders.edit', ['order' => Order::findOrFail($orderId)]);
    }

    public function changeOrderStatusToPaid($orderId) {
        if(! (\Auth::user()->isSuper()) ) {
            abort(403, 'Your are not allowed to perform this action!');
        }
        $order = Order::find($orderId);
        $order->status = 'Paid';
        $order->save();

        session()->flash('message_success', 'Order successfully updated!');
        return $this->index();
    }

    public function changeOrderStatusToComplete($orderId) {
        if(! (\Auth::user()->isSuper()) ) {
            abort(403, 'Your are not allowed to perform this action!');
        }
        $order = Order::find($orderId);
        $order->status = 'Complete';
        $order->save();

        session()->flash('message_success', 'Order successfully updated!');
        return $this->index();
    }
}
