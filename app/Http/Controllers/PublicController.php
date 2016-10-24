<?php

namespace App\Http\Controllers;

use App\Order;
use App\Subscription;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    protected $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function index()
    {
        return $this->home();
    }

    public function home() {
        if(\Auth::check() && ! (\Auth::user()->isCustomer()) ) {
            return view('dashboard');
        }
        return view('store.home', ['order' => new Order()]);
    }

    public function about() {
        return view('store.about');
    }

    public function blog() {
        return view('store.blog');
    }

    public function faq() {
        return view('store.faq');
    }

    public function subscribe() {
        $data = ['email' => $this->request->subscribe_email];
        Subscription::validator($data)->validate();
        Subscription::create($data);

        return view('subscriptions.success');
    }
}
