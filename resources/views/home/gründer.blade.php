@extends('layouts.app')
@section('title') @if( ! empty($title)) {{ $title }} | @endif @parent @endsection

@section('content')
    <!-- CUSTOM HEIGHT EXAMPLE -->
    <style>
        .pill.controller {
            font-size: 0;
            border: 1px solid;
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
            background: #fff;
            color: #303030;
        }
        /* CUSTOM HEIGHT */
        .slider[data-slider-id="customHeight"] li {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            display: block;
            -webkit-transition: 0.5s;
            transition: 0.5s;
            /* before selected */
            opacity: 0;
        }

        /* selected */
        .slider[data-slider-id="customHeight"] li.selected { opacity: 1; }

        /* arrows */
        .leftControl,
        .rightControl {
            position: absolute;
            top: 50%;
            margin-top: -35px;
            margin-left: -100px;
            cursor: pointer;
            font-size: 0;
        }

        .rightControl {
            right: 0;
            margin-right: -100px;
        }

        .leftControl svg,
        .rightControl svg {
            width: 30px;
            height: 70px;
        }

        @media screen and (max-width:1180px) {
            .leftControl,
            .rightControl {
                display:none;
            }
        }

        .background-red-pink{
            background: -webkit-linear-gradient(45deg, #eb6833 50%, #ea9043 50%);
            background: -webkit-linear-gradient(45deg, #eb6833 50%, #ea9043 50%);
        }
    </style>
    <section class="slide background-red-pink">
        <div class="content">
            <div class="container">
                <div class="wrap">

                    <div class="fix-8-12">
                        <h1 class="ae-1 fromBottom margin-bottom-5"><strong>SunshineWellness. </br >Verschaffen Sie sich einen Einblick.</strong></h1>
                </div>

                    <div class="fix-8-12">

                    <div class="relative">
                                    <!-- arrows -->
                                    <div class="leftControl ae-2 fromRight" data-slider-id="customHeight" data-slider-action="prev">
                                        <svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#arrow-left"></use></svg>
                                    </div>
                                    <div class="rightControl ae-2 fromLeft" data-slider-id="customHeight" data-slider-action="next">
                                        <svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#arrow-right"></use></svg>
                                    </div>

                                    <!-- slider -->
                        <div class="ae-1 fromBlur">
                            <ul class="slider autoHeight clickable" data-slider-id="customHeight">
                                        <li class="selected"><img src="{{ asset('assets/img/slider-1.jpg') }}" class="wide shadow" alt="Image"/>
                                            <h2 class="big margin-top-4 bold">Herzlich Willkommen</h2>
                                        <p class="small">Für uns stehen Sie im Mittelpunkt!</p> </li>
                                        <li><img src="{{ asset('assets/img/slider-4.jpg') }}" class="wide shadow" alt="Image"/>
                                            <h2 class="big margin-top-4 bold ">Day Spa</h2>
                                            <p class="small">Perfekt zum Entspannen.</p> </li>
                                        <li><img src="{{ asset('assets/img/slider-5.jpg') }}" class="wide shadow" alt="Image"/>
                                            <h2 class="big margin-top-4 bold">Schokoladen Massage</h2>
                                            <p class="small">Eine sinnlich süße Behandlung.</p> </li>
                                <li><img src="{{ asset('assets/img/slider-6.jpg') }}" class="wide shadow" alt="Image"/>
                                    <h2 class="big margin-top-4 bold">Hamam</h2>
                                    <p class="small">Eine porentiefe Reinigung ihrer Haut.</p> </li>
                                <li><img src="{{ asset('assets/img/slider-7.jpg') }}" class="wide shadow" alt="Image"/>
                                    <h2 class="big margin-top-4 bold">Kleopatra Bad</h2>
                                    <p class="small">Genießen Sie ein königliches Bad in unserem Whirlpool.</p> </li>
                                <li><img src="{{ asset('assets/img/slider-8.jpg') }}" class="wide shadow" alt="Image"/>
                                    <h2 class="big margin-top-4 bold">Kosmetik</h2>
                                    <p class="small">Wir bieten Ihnen zahlreiche kosmetische Therapien.</p> </li>
                                <li><img src="{{ asset('assets/img/slider-9.jpg') }}" class="wide shadow" alt="Image"/>
                                    <h2 class="big margin-top-4 bold">Thai Massage</h2>
                                    <p class="small">Nach unserer Behandlung fühlen Sie sich wie neu geboren.</p> </li>
                                <li><img src="{{ asset('assets/img/slider-10.jpg') }}" class="wide shadow" alt="Image"/>
                                    <h2 class="big margin-top-4 bold">Thai Massage</h2>
                                    <p class="small">Nach unserer Behandlung fühlen Sie sich wie neu geboren.</p> </li>
                                <li><img src="{{ asset('assets/img/slider-11.jpg') }}" class="wide shadow" alt="Image"/>
                                    <h2 class="big margin-top-4 bold">Auch für Gruppen!</h2>
                                    <p class="small">Unser einzigartiger Spa Bereich ist auch für Gruppen geeignet.</p> </li>
                                <li><img src="{{ asset('assets/img/slider-12.jpg') }}" class="wide shadow" alt="Image"/>
                                    <h2 class="big margin-top-4 bold">Partnermassage</h2>
                                    <p class="small">Bei uns sind verschiedene Massagen zeitgleich verfügbar.</p> </li>
                                    </ul></div>

                        <!-- controller -->
                                    <ul class="controller dots big ae-3 fromTop margin-top-8 space" data-slider-id="customHeight">
                                        <li class="dot selected"></li>
                                        <li class="dot"></li>
                                        <li class="dot"></li>
                                        <li class="dot"></li>
                                        <li class="dot"></li>
                                        <li class="dot"></li>
                                        <li class="dot"></li>
                                        <li class="dot"></li>
                                        <li class="dot"></li>
                                        <li class="dot"></li>
                                    </ul>
                                </div>

                </div>

                </div>
            </div>
        </div>
    </section>

@endsection