<?php

namespace App\Mail;

class NewRegistrationNotification extends Mailable
{

    /**
     * Create a new message instance.
     *
     */
    public function __construct()
    {
        $this->view = 'mails.signup.notify_staff';
        $this->text = 'mails.signup.notify_staff_text';
    }
}
