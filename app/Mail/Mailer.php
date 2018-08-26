<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class Mailer extends Mailable
{
    use Queueable, SerializesModels;

    public $sender;
    public $content;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct( $sender, $content )
    {
        $this->sender   = $sender;
        $this->content  = $content;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from( $this->sender )
                    ->subject( 'New Mail: art.jordanalamilla.com' )
                    ->view('mail/mail');
    }
}
