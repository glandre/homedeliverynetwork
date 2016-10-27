<?php
/**
 * Created by PhpStorm.
 * User: geraldo
 * Date: 27/10/16
 * Time: 03:50
 */

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;

class Mailable extends \Illuminate\Mail\Mailable
{
    protected $text;
    protected $view;

    use Queueable, SerializesModels;

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from([
            'address' => config('app.email'),
            'name' => config('app.name')
        ])
            ->view($this->view)
            ->text($this->text);
    }
}