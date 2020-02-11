<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class emailRecuperarSenha extends Mailable
{
    use Queueable, SerializesModels;

    protected $nova_senha;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($nova_senha)
    {
        $this->nova_senha = $nova_senha;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $senha = $this->nova_senha;
        return $this->view('emails.emailRecuperarSenha', compact('senha'));
    }
}
