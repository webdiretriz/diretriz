<?php

namespace App\Repository;

use App\Mail\Contato;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactRepository
{
    /**
     * Realiza a gestão de envio de e-mail do sistema
     * @param Request $request
     * @return string
     */
    public function manager(Request $request): string
    {
        $data = $request->validate([
            'nome' => 'required',
            'email' => 'email',
            'cidade' => 'required',
            'assunto' => 'required',
            'mensagem' => 'required',
            'lgpd'  => 'required'
        ]);
        //"recrutamento@diretriz.net"
        $to = $data['assunto'] == 'recrutamento' ? 'luizfernando.paula@diretriz.net' : "ouvidoria@diretriz.net";
        try {
            Mail::to($to)->send(new Contato($data));
            return 'E-mail enviado com sucesso!';
        } catch (\Exception $exception){
            abort(500, $exception->getMessage());
        }
    }
}
