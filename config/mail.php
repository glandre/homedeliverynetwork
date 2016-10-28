<?php
return array(
    "driver" => "smtp",
    "host" => "mailtrap.io",
    "port" => 2525,
    "from" => array(
        "address" => env('HDN_EMAIL'),
        "name" => env('HDN_NAME')
    ),
    "username" => env('MAIL_USERNAME'),
    "password" => env('MAIL_PASSWORD'),
    "sendmail" => "/usr/sbin/sendmail -bs",
    "pretend" => false
);