<?php

namespace App\Mail;

class SuccessfullySignedUp extends Mailable
{

    /**
     * Create a new message instance.
     *
     */
    public function __construct()
    {
        $this->view = 'mails.signup.register';
        $this->text = 'mails.signup.register_text';
    }
}
