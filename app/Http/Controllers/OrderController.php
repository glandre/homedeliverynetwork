<?php

namespace App\Http\Controllers;

use App\Order;

class OrderController extends Controller
{
    public function index()
    {
        return view('orders.list', ['orders' => Order::all()]);
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
        return view('orders.list', ['orders' => Order::all()]);
    }

    public function changeOrderStatusToComplete($orderId) {
        if(! (\Auth::user()->isSuper()) ) {
            abort(403, 'Your are not allowed to perform this action!');
        }
        $order = Order::find($orderId);
        $order->status = 'Complete';
        $order->save();

        session()->flash('message_success', 'Order successfully updated!');
        return view('orders.list', ['orders' => Order::all()]);
    }
}
