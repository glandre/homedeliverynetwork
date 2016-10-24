<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    public function index()
    {
        return $this->home();
    }

    public function home() {
        if(\Auth::user()->isCustomer()) {
            return $this->store();
        }
        return $this->dashboard();
    }

    public function admin() {
        return $this->dashboard();
    }

    public function dashboard()
    {
        return view('dashboard');
    }
}
