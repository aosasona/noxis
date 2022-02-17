<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
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

    //generate numbers
    $gen = uniqid(rand(), false);
    $gen_c = substr($gen, 0, 3);
    $gen_d = substr($gen, -2);
    
    //generate alphabets
    $alph = array("a", "b", "c", "d", "e", "f", "g", "v", "z", "x", "m", "n", "p", "A", "Z", "V", "B", "C", "D", "E", "F", "G", "H", "M", "N", "K");
    $rand_keys = array_rand($alph, 4);

    $gen_code = $alph[$rand_keys[0]].$alph[$rand_keys[1]].$gen_c.$alph[$rand_keys[2]].$gen_d;

        return $this->from('auth@ran-ch.com', 'RanCh Auth Service')
                    ->view('mail.auth')->with('gen_code', $gen_code);

    }
}
