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

    .bild {
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
        bottom: 125px !important;
    }
    .margin-2 {
        padding-top: 35px !important;
    }
    .float {
        float: left !important;
        text-align: left !important;
    }

</style>
<img class="bild" src="http://sunshinewellness.de/assets/img/gutschein-pdf.jpg">
<p class="margin">
    <h1 class="center margin-2"><strong>{{$gutschein}} Euro</strong></h1>
    <p class="center"><strong>{{$gutschein_id}}</strong></p>
    <p class="center">{{$widmung}}</p>
    <p class="center"><strong>{{ $created_at_two }}</strong></p>
</p>
<img class="bild margin-1" src="http://sunshinewellness.de/assets/img/gutschein-pdf-2.jpg">
</body>
</html>
