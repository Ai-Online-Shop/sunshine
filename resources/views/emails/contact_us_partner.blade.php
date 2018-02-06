@component('mail::message')

Wir haben eine Anfrage von {{$name}}
Hier sind alle wichtigen Daten:

## Telefonnummer
{{$telefonnummer}}

## Postleitzahl
{{$unternehmen}}

## Partnerschaft für {{$name}}
{{$anfrage}}


## Antworten an: {{$email}}


Viel Erfolg mit der Anfrage!<br>
Patric und Domenic.
@endcomponent
