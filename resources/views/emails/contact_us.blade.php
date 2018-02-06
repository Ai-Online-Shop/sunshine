@component('mail::message')

Wir haben eine GUTSCHEIN Anfrage von {{$name}}
Hier sind alle wichtigen Daten:

## (Geworben) NAME

{{$empfehlungsname}}

## (Geworben) ADRESSE

{{$empfehlungsadresse}}

## GUTSCHEIN für {{$name}}

{{$gutschein}}


## Antworten an: {{$email}}


Let´s make some money bro!,<br>
{{ get_option('site_name') }}
@endcomponent
