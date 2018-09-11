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
    .orange{
        color: #FF9800;
    }
    .bild {
        max-width: 19.4cm;
        text-align: center;
        margin: 0 !important;
        padding: 0 !important;
    }

    .center {
        text-align: center;
    }

    .margin {
        margin-top: 0 !important;
    }
    .margin-1 {
        position: absolute !important;
        bottom: 125px !important;
    }
    .margin-2 {
        padding-top: 35px !important;
    }
    .margin-3 {
        padding-top: 25px !important;
    }
</style>
<img class="bild" src="http://sunshinewellness.de/assets/img/gutschein-top-{{ $user_id }}.jpg">
<p class="margin">
    <h1 class="center margin-2 orange"><strong>Gutscheinwert: {{$gutschein}} Euro</strong></h1>
    <p class="center orange">Ausstellungsdatum: {{ $created_at_two }}</p>
    <p class="center orange">_____</p>
    <p class="center orange margin-3">Ihre Gutschein Code lautet: <br/>{{$gutschein_id}}</p>
    <p class="center orange">{{$widmung}}</p>
</p>
</body>
</html>
