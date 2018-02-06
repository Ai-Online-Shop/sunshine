@extends('layouts.dashboard')

@section('title') @if(! empty($title)) {{$title}} @endif - @parent @endsection


@section('content')
    <!-- EXAMPLE: Tilt -->
    <script src="https://cdn.rawgit.com/gijsroge/tilt.js/38991dd7/dest/tilt.jquery.js"></script>
    <script>
        $(function(){
            $('.js-tilt').tilt({
                scale: 1.05
            });
        });
    </script>
    <section class="slide autoHeight" style="background:#f2f2f2">
        <div class="content">
            <div class="container">
                <div class="wrap">

                    <div class="fix-8-12 text-black toCenter">
                        <p class="small light text-ac ae-2">Dashboard</p>
                        <h1 class="ae-1"><strong>Herzlich Willkommen, <br />{{ $user->vorname }} {{ $user->nachname }}!</strong></h1>
                        <div class="ae-2 light small fix-7-12 margin-top-3"><p>
                                Hier dreht sich alles nur um dich. Entdecke eine Welt der Services, Angebote und Neuigkeiten, die dein Leben
                            auf faszinierende Weise erleichtern und bereichern werden. Fang direkt an und erkunde den Investmentbereich.</p></div>
                    </div>

                    <div class="fix-12-12">
                            <ul class="grid later fixedSpaces equal center margin-top-5  margin-bottom-10">
                                <li class="col-3-12 ae-1 fromRight">
                                    <a class="fix-5-12 crop" href="{{route('investieren')}}">
                                        <div class="pad js-tilt shadow" data-tilt-max="-3">
                                            <i class="material-icons margin-top-2 text-ac font-size-55">euro_symbol</i>

                                            <p class="small margin-top-2 light"><strong>Investmentbereich</strong></p>
                                        </div>
                                    </a>
                                </li>
                                <li class="col-3-12 ae-2 fromRight">
                                    <a class="fix-5-12 crop" href="{{route('verwaltung')}}">
                                        <div class="pad js-tilt shadow" data-tilt-max="-3">
                                            <i class="material-icons margin-top-2 text-ac font-size-55">donut_large</i>

                                            <p class="small margin-top-2 light"><strong>Verwaltung</strong></p>
                                        </div>
                                    </a>
                                </li>
                                <li class="col-3-12 ae-3 fromRight">
                                    <a class="fix-5-12 crop" href="{{route('profile')}}">
                                        <div class="pad js-tilt shadow" data-tilt-max="-3">
                                            <i class="material-icons margin-top-2 text-ac font-size-55">face</i>

                                            <p class="small margin-top-2 light"><strong>Profil</strong></p>
                                        </div>
                                    </a>
                                </li>
                                <li class="col-3-12 ae-4 fromRight">
                                    <a class="fix-5-12 crop" href="{{route('support')}}">
                                        <div class="pad js-tilt shadow" data-tilt-max="-3">
                                            <i class="material-icons margin-top-2 text-ac font-size-55">help_outline</i>

                                            <p class="small margin-top-2 light"><strong>Support</strong></p>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection