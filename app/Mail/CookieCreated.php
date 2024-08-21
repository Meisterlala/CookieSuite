<?php

namespace App\Mail;

use App\Models\Cookie;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class CookieCreated extends Mailable
{
    use SerializesModels;

    public $cookie;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Cookie $cookie)
    {
        $this->cookie = $cookie;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('New Cookie Created')
                    ->view('emails.cookie_created');
    }
}
