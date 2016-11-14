<?php
/**
 * Created by PhpStorm.
 * User: geraldo
 * Date: 11/14/16
 * Time: 5:13 AM
 */

namespace App;


class UserThatShouldBeNotified
{
    public static function onNewRegistration() {
        return User::whereIn(
            'role_id',
            [
                User::SUPER,
                User::ADMIN,
                User::FULLMENT,
                User::MARKETING
            ]
        )->get();
    }

    public static function onOrderSubmitted() {
        return User::whereIn('role_id', [
            User::SUPER,
            User::ADMIN,
            User::FULLMENT
        ])->get();
    }
}