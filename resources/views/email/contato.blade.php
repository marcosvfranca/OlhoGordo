@component('vendor.mail.html.messagecontato')
Olá, {{ $contato->name }}.

Recebemos sua solicitação de contato.

Logo retornaremos sua solicitação.

@component('mail::button', ['url' => URL::to('/')])
Clique aqui para acessar o site
@endcomponent

Obrigado,<br>
Olho Gordo
@endcomponent
