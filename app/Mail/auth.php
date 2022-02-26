<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class auth extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {

        $gen_code = session()->get('gen_code');;

        return $this->from('auth@ran-ch.com', 'Noxis')
                    ->view('mail.auth')->with('gen_code', $gen_code);

    }
}
