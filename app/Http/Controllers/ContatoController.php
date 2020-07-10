<?php

namespace App\Http\Controllers;

use App\Contato;
use App\Mail\MailContato;
use App\Mail\MailContatoAdm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContatoController extends Controller
{
    public function contato(Request $request)
    {
        $data = $request->all();
        $contato = new Contato($data);

        $resposta = json_decode(file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=6Ldz_a8ZAAAAAGSS75V5PeqjrxEIr8QdjGCQhS6X&response=" . $contato['g-recaptcha-response'] . "&remoteip=" . $_SERVER['REMOTE_ADDR']));
        if (isset($resposta->success) and !$resposta->success)
            return response()->json(['sucesso' => false, 'mensagem' => 'Confirme que você não é um robô']);

        try
        {
            Mail::to($contato->email)->send(new MailContato($contato));
            Mail::to(env('MAIL_FROM_ADDRESS'))->send(new MailContatoAdm($contato));
            return response()->json(['sucesso' => true, 'mensagem' => 'Sua mensagem foi enviada com sucesso, logo entraremos em contato']);
        } catch (\Swift_TransportException $e)
        {
            return response()->json(['sucesso' => false, 'mensagem' => 'Houve um erro ao enviar a mensagem. Por favor, tente novamente']);
        }
    }
}
