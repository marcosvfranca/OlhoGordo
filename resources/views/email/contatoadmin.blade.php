@component('vendor.mail.html.messagecontato')

Houve uma solicitação de contato no site {{ URL::to('/') }}

<b>Nome:</b> {{ $contato->name }}<br>
<b>E-mail:</b> {{ $contato->email }}<br>
<b>Telefone:</b> {{ $contato->phone }}<br>
<b>Mensagem:</b> {{ $contato->message }}<br>

@endcomponent
