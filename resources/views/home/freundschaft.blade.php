@extends('layouts.app')
@section('title') @if( ! empty($title)) {{ $title }} | @endif @parent @endsection

@section('content')


    <!-- TABS EXAMPLE -->
    <style>
        .pill.controller {
            font-size: 0;
            display: inline-block;
            border-radius: 6px;
        }
        .pill.controller li {
            padding: 10px 20px;
            display: inline-block;
            border: 1px solid #fff;
            font-size: initial;
            -webkit-transiton: 0.5s;
            transiton: 0.5s;
        }

        .pill.controller li:first-child {
            border-radius: 4px 0 0 4px;
        }
        .pill.controller li:last-child {
            border-radius: 0 4px 4px 0;
        }

        .pill.controller li.selected {
            background: #303030;
            color: #fff;
        }
        .background-red-pink{
            background: -webkit-linear-gradient(45deg, #eb6833 50%, #ea9043 50%);
            background: -webkit-linear-gradient(45deg, #eb6833 50%, #ea9043 50%);
        }
        .pad {
            padding: 8%;
            color: #303030;
            background: #fff;
            overflow: hidden;
        }
    </style>


    <section class="slide background-red-pink">
        <div class="content">
            <div class="container">
                <div class="wrap ">
                    <h1 class="ae-2 fix-6-12 bold margin-bottom-5">Ein Team auf das Sie sich verlassen können.</h1>

                    <div class="fix-10-12">
                        <ul class="pill controller margin-bottom-5 ae-1" data-slider-id="1">
                            <li class="selected">Geschäftsführung</li>
                            <li>Angestellte</li>
                            <li>Wir suchen dich!</li>
                        </ul>
                    </div>

                    <ul class="slider" data-slider-id="1">

                        <li class="selected">
                            <div class="fix-12-12">

                                <ul class="flex fixedSpaces later left">
                                    <li class="col-6-12 col-tablet-1-2 col-phone-1-1 ae-3">
                                        <img class="img-91 wide shadow" src="{{ asset('assets/img/sun-1.jpg') }}" alt="Video Thumbnail"/>
                                    </li>
                                    <li class="col-6-12 col-tablet-1-2 col-phone-1-1 ae-4">
                                        <div class="pad shadow center">

                                            <svg style="width:65px;height:65px">
                                                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#logo"></use>
                                            </svg>
                                            <h3 class="big">Suwarat Haag</h3>
                                            @if(Session::has('success'))
                                                <p class="text-ac">
                                                    {{ Session::get('success') }}
                                                </p>
                                            @endif
                                            <div class="gradient-line-3 gradient-left gradient-width-120 margin-bottom-2 margin-top-1"></div>
                                            <p class="micro">
                                                Mein Name ist Suwarat Haag aber mein Rufname lautet Amika!
                                                Ich habe mehr als 10 Jahre Erfahrung im Bereich Wellness, Spa und Gesundheit!</p>
                                            <p class="micro margin-top-1">
                                                In dieser Zeit war es mir möglich in den besten Spa Resorts in Thailand, in der
                                                Karibik und auf Mauritius zu arbeiten.</p>
                                            <p class="micro margin-top-1">
                                                Ausgebildet wurde ich im Bereich Ayurveda
                                                von dem weltbekannten Dr. Rajiv Marwah und Dr. Suchada. Des weiteren wurde ich in Reflexzonen Akupunkturmassage und Aromatherapie ausgebildet!</p>
                                            <p class="micro margin-top-1">
                                                Diese Erfahrung möchte ich nun an Sie weitergeben!
                                            </p>
                                        </div></li>
                                </ul>

                            </div>
                        </li>

                        <li>
                            <div class="fix-12-12">

                                <ul class="flex fixedSpaces later left">
                                    <li class="col-3-12 col-tablet-1-2 col-phone-1-1">
                                        <a class="margin-bottom-2"><img class="img-91 wide" src="{{ asset('assets/img/slider-2.jpg') }}" alt="Image Thumbnail"/></a>
                                        <h3>Daeng</h3>
                                        <p class="small">Masseurin</p>
                                    </li>
                                    <li class="col-3-12 col-tablet-1-2 col-phone-1-1">
                                        <a class="margin-bottom-2"><img class="img-91 wide" src="{{ asset('assets/img/slider-2.jpg') }}" alt="Image Thumbnail"/></a>
                                        <h3>Pam</h3>
                                        <p class="small">Masseurin</p>
                                    </li>
                                    <li class="col-3-12 col-tablet-1-2 col-phone-1-1">
                                        <a class="margin-bottom-2"><img class="img-91 wide" src="{{ asset('assets/img/slider-2.jpg') }}" alt="Image Thumbnail"/></a>
                                        <h3>Name Nachname</h3>
                                        <p class="small">Masseurin</p>
                                    </li>
                                    <li class="col-3-12 col-tablet-1-2 col-phone-1-1">
                                        <a class="margin-bottom-2"><img class="img-91 wide" src="{{ asset('assets/img/slider-2.jpg') }}" alt="Image Thumbnail"/></a>
                                        <h3>Name Nachname</h3>
                                        <p class="small">Masseurin</p>
                                    </li>
                                </ul>

                            </div>
                        </li>

                        <li>
                            <div class="fix-12-12">

                                <ul class="flex fixedSpaces later left">
                                    <li class="col-6-12 col-tablet-1-2 col-phone-1-1">
                                        <img class="img-91 wide shadow" src="{{ asset('assets/img/spa1.jpg') }}" alt="Video Thumbnail"/>
                                    </li>
                                    <li class="col-6-12 col-tablet-1-2 col-phone-1-1">
                                        <div class="pad shadow center">

                                            <svg style="width:65px;height:65px">
                                                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#logo"></use>
                                            </svg>
                                            <h3 class="big">Wir suchen Mitarbeiter!</h3>
                                            <div class="gradient-line-3 gradient-left gradient-width-120 margin-bottom-2 margin-top-1"></div>
                                            <p class="micro">
                                                Sie wollten schon immer im Bereich Spa und Wellness arbeiten und gleichzeitig
                                            von einem tollen Team umgeben sein?</p>
                                            <p class="micro margin-top-1">
                                                Wir bieten ihnen exakt diese Möglichkeit.
                                                Zusätzlich bilden wir Sie in den verschiedensten Massagen professionell aus.</p>
                                            <a class=" small margin-top-3 blue button" href="{{route('kontakt')}}">Kontakt aufnehmen</a>

                                        </div></li>
                                </ul>

                            </div>
                        </li>
                    </ul>

                </div>
            </div>
        </div>
    </section>
@endsection