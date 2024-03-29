<?php

namespace App\Mail;

use App\Contato;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class MailContato extends Mailable
{
    use Queueable, SerializesModels;

    public $contato;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Contato $contato)
    {
        $this->contato = $contato;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this
            ->subject('Olho Gordo - Recebemos sua mensagem de contato')
            ->markdown('email.contato');
    }
}
