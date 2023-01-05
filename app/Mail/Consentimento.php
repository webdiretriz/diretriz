<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Consentimento extends Mailable
{
    use Queueable, SerializesModels;

    /** @var string */
    public $nome;

    /** @var string */
    public $email;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(array $data)
    {
        $this->nome = $data['nome'];
        $this->email = $data['email'];
        $this->subject = "Termo de consentimento (Aceito) - " . $data['email'];
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mail.consentimento');
    }
}
