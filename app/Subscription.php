<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Validator;

class Subscription extends Model
{
    protected $fillable = [
        'email',
    ];

    public static function validator(array $data)
    {

        return Validator::make($data, [
            'email' => 'required|email|max:255|unique:subscriptions,email'
        ]);
    }
}
