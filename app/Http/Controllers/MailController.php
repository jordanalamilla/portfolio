<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\Mailer;

class MailController extends Controller
{
    public function send( Request $request )
    {
        $sender     = $request->input( 'sender' );
        $content    = $request->input( 'content' );

        Mail::to( 'jordan.alamilla@gmail.com' )
            ->send( new Mailer( $sender, $content ) );

        return redirect( '/' )->with( 'success', 'Your message has been sent.' );
    }
}
