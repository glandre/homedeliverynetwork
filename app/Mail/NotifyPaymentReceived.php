<?php

namespace App\Mail;


class NotifyPaymentReceived extends Mailable
{
    /**
     * Create a new message instance.
     *
     */
    public function __construct($orderInfo)
    {
        $this->view = 'mails.orders.confirm_payment';
        $this->text = 'mails.orders.confirm_payment_text';
        $this->params = ['orderInfo' => $orderInfo];
    }
}