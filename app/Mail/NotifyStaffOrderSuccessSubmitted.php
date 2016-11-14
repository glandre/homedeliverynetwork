<?php

namespace App\Mail;


class NotifyStaffOrderSuccessSubmitted extends Mailable
{
    /**
     * Create a new message instance.
     *
     */
    public function __construct($orderInfo)
    {
        $this->view = 'mails.orders.notify_staf_order_submitted';
        $this->text = 'mails.orders.notify_staf_order_submitted_text';
        $this->params = ['orderInfo' => $orderInfo];
    }
}