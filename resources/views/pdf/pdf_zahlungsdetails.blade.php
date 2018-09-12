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
        color: #333232;
    }
    .bild {
        max-width: 19.4cm;
        text-align: center;
        margin: 0 !important;
        padding: 0 !important;
    }
    .bildqr {
        max-width: 3.5cm;
        float: left;
        text-align: center;
    }
    .bild-2 {
        bottom: 1cm;
        max-width: 19.4cm;
        text-align: center;
        margin: 0 !important;
        padding: 0 !important;
    }

    .center {
        text-align: right;
    }

    .margin {
        margin-top: 0 !important;
    }
    .margin-1 {
        position: absolute !important;
        bottom: 35px !important;
    }
    .margin-2 {
        padding-top: 15px !important;
    }
    .margin-3 {
        padding-top: 15px !important;
    }
</style>
<img class="bild" src="http://sunshinewellness.de/assets/img/gutschein-pdf.jpg">
<p class="margin">
    <img class="bildqr margin-2" src="http://sunshinewellness.de/assets/img/qr_code.png">
    <h1 class="center margin-2 orange"><strong>{{$gutschein}} Euro</strong></h1>
    <p class="center orange">Ausstellungsdatum: {{ $created_at_two }} <br/>Gutschein Code: {{$gutschein_id}}</p>
<p>________________</p>
    <p class="center orange">{{$widmung}}</p>
</p>
<img class="bild-2" src="http://sunshinewellness.de/assets/img/gutschein-pdf-2.jpg">
</body>
</html>
