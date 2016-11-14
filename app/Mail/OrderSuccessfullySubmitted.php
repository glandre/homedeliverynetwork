<?php

namespace App\Mail;


class OrderSuccessfullySubmitted extends Mailable
{
    /**
     * Create a new message instance.
     *
     */
    public function __construct($orderInfo)
    {
        $this->view = 'mails.orders.order_successfully_submitted';
        $this->text = 'mails.orders.order_successfully_submitted_text';
        $this->params = ['orderInfo' => $orderInfo];
    }
}