<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class StoreController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('store.home');
    }

    public function home_v2() {
        return view('store.home-v2');
    }

    public function home_v3() {
        return view('store.home-v3');
    }
}
