@extends('layouts.app')
@section('title') @if( ! empty($title)) {{ $title }} | @endif @parent @endsection

@section('content')
    <section class="slide" style="background-color:#1a1a1a">
        <div class="content">
            <div class="container">
                <div class="wrap padding-left-0 padding-right-0">
                    <div class="fix-10-12 text-white center text-white ">

                        <h2 class="opacity-4 light margin-bottom-1 margin-top-10">Unsere Investments.</h2>
                        <h1 class="light"><strong>Sicher und zuverlässig.</strong></h1>
                        <p class="margin-top-3 light margin-bottom-6">Die Sicherheit unserer Anleger steht immer an erster Stelle. Deswegen investieren wir ausschließlich in die besten Gewerbeimmobilien. Wenn Sie mehr Einblick möchten, dann verschaffen Sie sich hier einen kurzen Einblick über unsere aktuellen Mieter  &amp; Objekte.</p>
                        <ul class="grid animated center">
                            <li class="col-4-12"> <i class="text-white  material-icons font-size-44">security</i>
                                <p class="light micro intro-icon-text margin-bottom-4">Fokus <br />
                                    Sicherheit</p>
                            </li>
                            <li class="col-4-12"> <i class="text-white  material-icons font-size-44">star</i>
                                <p class="light micro intro-icon-text margin-bottom-4">Beste<br />
                                    Gewerbeimmobilien</p>
                            </li>
                            <li class="col-4-12"> <i class="text-white  material-icons font-size-44">place</i>
                                <p class="light micro intro-icon-text margin-bottom-4">Portfolio<br />
                                    Deutschland</p>
                            </li>
                        </ul>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="slide showcase" style="background-color:#fafafa">
        <div class="content">
            <div class="container">
                <div class="wrap padding-left-0 padding-right-0">
                    <div class="fix-custom">
                        <h2 class="over-the-top text-black opacity-4 margin-bottom-1 margin-top-10">Ihr Einblick</h2>
                        <h1 class="text-black"><strong>Unser Portfolio</strong></h1>
                        <ul class="flex showcase-container popupTrigger margin-top-10 controller" data-popup-id="showcase" data-slider-id="showcase">

                            <!-- element -->
                            <li class="col-4-12 col-tablet-1-2 col-phablet-1-1">
                                <div class="sc" data-hover-text="Bayern">
                                    <div class="sc-img"><img src="{{ asset('assets/img/showcase-2.jpg') }}"/></div>
                                    <h2 class="over-the-top light small text-black center margin-bottom-1 margin-top-1"><strong>Norma</strong></h2>
                                    <p class="light micro  center text-black">1.240.000€ investiert</p>
                                </div>
                            </li>

                            <!-- element -->
                            <li class="col-4-12 col-tablet-1-2 col-phablet-1-1">
                                <div class="sc" data-hover-text="Bayern">
                                    <div class="sc-img"><img src="{{ asset('assets/img/showcase-3.jpg') }}"/></div>
                                    <h2 class="over-the-top light small text-black center margin-bottom-1 margin-top-1"><strong>Total</strong></h2>
                                    <p class="light micro  center text-black">1.350.000€ investiert</p>
                                </div>
                            </li>

                            <!-- element -->
                            <li class="col-4-12 col-tablet-1-2 col-phablet-1-1">
                                <div class="sc" data-hover-text="Baden Württemberg">
                                    <div class="sc-img"><img src="{{ asset('assets/img/showcase-1.jpg') }}"/></div>
                                    <h2 class="over-the-top light small text-black center margin-bottom-1 margin-top-1"><strong>Carglass</strong></h2>
                                    <p class="light micro center text-black">1.400.000€ investiert</p>
                                </div>
                            </li>

                            <!-- element -->
                            <li class="col-4-12 col-tablet-1-2 col-phablet-1-1">
                                <div class="sc" data-hover-text="Bayern">
                                    <div class="sc-img"><img src="{{ asset('assets/img/showcase-4.jpg') }}"/></div>
                                    <h2 class="over-the-top light small text-black center margin-bottom-1 margin-top-1"><strong>KiK</strong></h2>
                                    <p class="light micro center text-black">1.100.000€ investiert</p>
                                </div>
                            </li>

                            <!-- element -->
                            <li class="col-4-12 col-tablet-1-2 col-phablet-1-1">
                                <div class="sc" data-hover-text="Baden-Württemberg">
                                    <div class="sc-img"><img src="{{ asset('assets/img/showcase-5.jpg') }}"/></div>
                                    <h2 class="over-the-top light small text-black center margin-bottom-1 margin-top-1"><strong>Back Shop</strong></h2>
                                    <p class="light micro center text-black">1.200.000€ investiert</p>
                                </div>
                            </li>

                            <!-- element -->
                            <li class="col-4-12 col-tablet-1-2 col-phablet-1-1">
                                <div class="sc" data-hover-text="Bayern">
                                    <div class="sc-img"><img src="{{ asset('assets/img/showcase-6.jpg') }}"/></div>
                                    <h2 class="over-the-top light small text-black center margin-bottom-1 margin-top-1"><strong>ModeTreff</strong></h2>
                                    <p class="light micro center text-black">700.000€ investiert</p>
                                </div>
                            </li>
                        </ul>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection