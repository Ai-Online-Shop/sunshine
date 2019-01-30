<!doctype html>
<html>
<body>
<meta http-equiv="Content-Type" content="charset=utf-8"/>
<style type="text/css">
    @font-face {
        font-family: Helvetica;
        font-weight: normal;
        font-style: normal;

    }

    body {
        font-family: Helvetica;
    }

    .center {
        text-align: left;
    }

    .margin {
        margin-top: 50px !important;
    }

    .margin-1 {
        position: absolute !important;
        bottom: 115px !important;
    }

    .margin-2 {
        padding-top: 15px !important;
    }

    .margin-4 {
        padding-left: 25px !important;
    }

    .margin-5 {
        padding-top: 35px !important;
    }

    .margin-7 {
        padding-top: 75px !important;
    }

    .float {
        float: right !important;
        text-align: right !important;
    }

    /*  Generic Styling, for Desktops/Laptops */
    table {
        width: 100%;
        border-collapse: collapse;
    }

    /* Zebra striping */
    tr:nth-of-type(odd) {
        background: #f5f5f5;
    }

    th {
        background: #333;
        color: white;
        font-weight: bold;
    }

    td, th {
        padding: 6px;
        border: 1px solid #ccc;
        text-align: left;
    }

    .bild1 {
        max-width: 6.4cm;
        text-align: right;
        margin: 0 !important;
        padding: 0 !important;
    }

    .bild2 {
        max-width: 7.4cm;
        text-align: left;
        margin: 0 !important;
        padding: 0 !important;
        position: absolute !important;
        bottom: 115px !important;
    }
</style>
<img class="bild1 float" src="http://sunshinewellness.de/assets/img/rechnung-header.jpg">
<p class="center margin-5"><b>Name: </b> {{$name}}</p>
<p class="center"><b>Adresse: </b> {{$adresse}}</p>
<p class="center"><b>PLZ: </b> {{$postleitzahl}}</p>
<p class="center"><b>Ort: </b> {{$stadt}}</p>
<p class="center"><b>Zahlart: </b> Vorkasse</p>
<p class="margin">
<h2 class="center margin-2"><strong>Rechnung</strong>
    <span class="margin-4">RE-Nr: {{$rechnungsnummer}}</span>
    <span class="margin-4">Datum: {{ $created_at_two }}</span></h2>
<table>
    <thead>
    <tr>
        <th>Anzahl</th>
        <th>Beschreibung</th>
        <th>Preis</th>
        <th>Gesamt</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td>1</td>
        <td>Gutschein Sunshine Wellness Crailsheim</td>
        <td>{{ $gutschein }} EUR</td>
        <td>{{ $gutschein }} EUR</td>
    </tr>
    <tr>
        <td>1</td>
        <td>Versandkosten</td>
        <td>{{ $versandart }} EUR</td>
        <td>{{ $versandart }} EUR</td>
    </tr>
    @if($versandart > 0)
        <tr>
            <td></td>
            <td></td>
            <td><b>GESAMT:</b></td>
            <td><b>{{$amount - $versandart}} EUR</b></td>
        </tr>
    @else
        <tr>
            <td></td>
            <td></td>
            <td><b>GESAMT:</b></td>
            <td><b>{{$amount}} EUR</b></td>
        </tr>
    @endif
    </tbody>
</table>
<p class="center">Wir bedanken uns für Ihre Bestellung und wünschen Ihnen viel Spaß & Erholung mit Ihrem Gutschein!</p>
<p class="center"><strong>Ihr Sunshine Wellness Team</strong></p>
<h2 class="center margin-7">Unsere Bankverbindung</h2>
<p class="center">IBAN: DE60622500300001872110</p>
<p class="center">Bank: Sparkasse</p>
<p class="center">BIC: SOLADES1SHA</p>
<p class="center">Verwendungszweck: {{$gutschein_id}}</p>
</body>
</html>
