<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class UserController extends Controller
{
    public function profile() {
        return view('user.profile');
    }

    public function settings() {
        return view('user.settings');
    }
}
