<?php

namespace App\Mail;

use App\User;

class RegistrationRejected extends Mailable
{
    public $user;
    public $reasons;

    public function __construct(User $user, $reasons)
    {
        $this->view = 'mails.signup.registration_rejected';
        $this->text = 'mails.signup.registration_rejected_text';
        $this->user = $user;
        $this->reasons = $reasons;
    }
}
