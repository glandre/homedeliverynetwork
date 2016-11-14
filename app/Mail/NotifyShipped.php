<?php

namespace App\Mail;


class NotifyShipped extends Mailable
{
    /**
     * Create a new message instance.
     *
     */
    public function __construct($orderInfo)
    {
        $this->view = 'mails.orders.notify_shipped';
        $this->text = 'mails.orders.notify_shipped_text';
        $this->params = ['orderInfo' => $orderInfo];
    }
}