<?php

namespace App\Http\Controllers;

use App\Order;

class StoreController extends Controller
{

    protected $order;

    public function __construct()
    {
        if(\Auth::user()) {
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

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('store.home', ['order' => $this->order]);
    }

    public function addToCart($productId, $quantity)
    {
        $this->order->products()->attach($productId, ['quantity' => $quantity]);
        return response()->json(['status' => 'success', 'data' => $this->order->products()]);
    }

    public function updateQuantity($productId, $quantity) {
        $this->order->products()->updateExistingPivot($productId, ['quantity' => $quantity]);
        return response()->json(['status' => 'success', 'data' => $this->order->products()]);
    }

    public function removeFromCart($productId) {
        $this->order->products()->detach($productId);
        return response()->json(['status' => 'success', 'data' => $this->order->products()]);
    }

    public function showReviewOrder()
    {
        return view('store.review', ['order' => $this->order]);
    }

    public function submitOrder()
    {
        if($this->order->status != 'Cart')
        {
            session()->flash('message_danger', "Order status doesn't allow submission ({$this->order->status})");
            return view('store.review');
        }

        if(count($this->order->products) == 0) {
            session()->flash('message_danger', "Can't submit an empty order.");
            return view('store.review');
        }

        $this->order->status = 'New';
        $this->save();

        session()->flash('message_success', "Order successfully submitted!");
        return view('store.review');
    }
}
