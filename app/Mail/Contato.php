<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Http\UploadedFile;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Contato extends Mailable
{
    use Queueable, SerializesModels;

    /** @var array */
    public $data;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(array $data)
    {
        $this->data = $data;
        $this->subject = $data['assunto'] . ' - Site Diretriz.net';
        $this->data['file']['mime'] = empty($this->data['anexo']) ? null : $this->data['anexo']->getMimeType();
        $this->data['file']['as'] = empty($this->data['anexo']) ? null : "anexo." . $this->data['anexo']->extension();
        $this->data['file']['path'] = empty($this->data['anexo']) ? null : $this->data['anexo']->path();
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        if (!empty($this->data['anexo']))
            return $this->view('mail.contato')
                ->attach($this->data['file']['path'], [
                    'as' => $this->data['file']['as'],
                    'mime' => $this->data['file']['mime'],
                ]);
        return $this->view('mail.contato');
    }
}
