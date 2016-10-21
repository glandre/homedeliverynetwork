<?php

namespace App\Http\Controllers;

use App\Order;

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

    public function addToCart($productId, $quantity)
    {
        $this->getOrder()->products()->attach($productId, ['quantity' => $quantity]);
        return $this->index();
    }

    public function updateQuantity($productId, $quantity) {
        $this->getOrder()->products()->updateExistingPivot($productId, ['quantity' => $quantity]);
        return response()->json(['status' => 'success', 'data' => $this->getOrder()->products()]);
    }

    public function removeFromCart($productId) {
        $this->getOrder()->products()->detach($productId);
        return response()->json(['status' => 'success', 'data' => $this->getOrder()->products()]);
    }

    public function showReviewOrder()
    {
        return view('store.review', ['order' => $this->getOrder()]);
    }

    public function submitOrder()
    {
        if($this->getOrder()->status != 'Cart')
        {
            session()->flash('message_danger', "Order status doesn't allow submission ({$this->getOrder()->status})");
            return view('store.review');
        }

        if(count($this->getOrder()->products) == 0) {
            session()->flash('message_danger', "Can't submit an empty order.");
            return view('store.review');
        }

        $this->getOrder()->status = 'New';
        $this->getOrder()->save();

        session()->flash('message_success', "Order successfully submitted!");
        return view('store.review');
    }
}
