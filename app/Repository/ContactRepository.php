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
        $data['anexo'] = $request->anexo;
        if ($data['assunto'] == "ouvidoria")
            $to = "ouvidoria@diretriz.net";
        if ($data['assunto'] == "contato")
            $to = "comunicação@diretriz.net";
        if ($data['assunto'] == "recrutamento")
            $to = "recrutamento@diretriz.net";
        try {
            Mail::to($to)->send(new Contato($data));
            return 'E-mail enviado com sucesso!';
        } catch (\Exception $exception){
            abort(500, $exception->getMessage());
        }
    }
}
