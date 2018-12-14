<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-112338896-5"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-112338896-5');
    </script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
    <meta name="apple-mobile-web-app-capable" content="yes"/>
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('assets/img/apple-icon.png') }}"/>
    <link rel="icon" type="image/png" href="{{ asset('assets/img/favicon.png') }}"/>
    <link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet">
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Sunshine Wellness</title>
    @yield('meta-data')
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700|Material+Icons"
          rel="stylesheet" type="text/css"/>
    <link href="{{ asset('assets/css/slides.css') }}" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-2.2.4.min.js"
            integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
    <script src="{{ asset('assets/js/plugins.js') }}" type="text/javascript" name="plugins"></script>
    <script src="{{ asset('assets/js/slides.js') }}" type="text/javascript" name="main-scripts"></script>
    <script src="{{ asset('assets/js/custom.js') }}" type="text/javascript" name="plugins"></script>
    <!--  Material Dashboard CSS    -->
    <link href="{{ asset('assets/css/material-dashboard.css') }}" rel="stylesheet"/>
@yield('page-css')

<!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
</head>
<body class="slides scroll smoothScroll animateOnScroll">
{{ $slot }}
</body>
</html>


