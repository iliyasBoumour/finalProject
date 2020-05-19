@component('mail::message')
# Bonjour

Vous avez reçu un message de la part de {{$nom}}, identifie par l'adresse email :
{{$mail}} :

{{$cont}}

@component('mail::button', ['url' => "http://odco.ma/admin/contacts/$id"])
voir le message
@endcomponent

Merci,<br>
{{ config('app.name') }}
@endcomponent
