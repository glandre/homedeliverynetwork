<?php

namespace App\Mail;

use App\User;

class RegistrationApproved extends Mailable
{

    protected $user;

    public function __construct(User $user)
    {
        $this->view = 'mails.signup.registration_approved';
        $this->text = 'mails.signup.registration_approved_text';
        $this->user = $user;
    }
}
