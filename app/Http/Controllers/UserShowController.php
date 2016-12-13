<?php

namespace App\Http\Controllers;

use App\Mail\Mailable;
use App\Mail\RegistrationApproved;
use App\Mail\RegistrationRejected;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Order;
use App\User;

class UserShowController extends Controller
{
    public function __construct()
    {

    }

    public function show($id)
    {
        $model = User::find($id);
        $orders = User::find($id)->orders->where('cost', '>', '0.00');
        $title = 'Edit User';
        $url = 'localhost:8000/users/1';
        $method = 'PATCH';
        $readonly = 'readonly';
        $disabled = '';
        $saveEnabled = false;
        // dd($orders);
        return view('users.edit', compact('disabled', 'method', 'model', 'orders', 'readonly', 'saveEnabled', 'title', 'url'));
    }
}
