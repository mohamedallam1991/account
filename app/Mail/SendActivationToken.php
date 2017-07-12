<?php

namespace App\Mail;

use App\ActivationToken;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendActivationToken extends Mailable
{
    use Queueable, SerializesModels;
    /**
     * @var ActivationToken
     */
    public $token;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(ActivationToken $token)
    {
        //
        $this->token = $token;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Account Activation')->view('email.auth.activation');
    }
}
