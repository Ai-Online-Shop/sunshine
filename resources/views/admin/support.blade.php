@extends('layouts.dashboard')

@section('content')
    <section class="slide" style="background:#f2f2f2">
        <div class="content">
            <div class="container">
                <div class="wrap">

                    <div class="fix-8-12 text-black toCenter">
                        <p class="small light text-ac ae-2">Unserer Support</p>
                        <h1 class="ae-1"><strong>Passt perfekt zu dir.</strong></h1>
                        <div class="ae-2 light small"><p>Du erwirbst mehr als unschlagbare Verzinsung: etwas Unbezahlbares,
                            den exklusiven Support von ImmoFound. Das bedeutet für dich Sorgenfreiheit, Sicherheit und Unabhängigkeit.
                            Mit anderen Worten: das gute Gefühl, mit ImmoFound zu investieren.</p></div>
                    </div>

                    <div class="fix-12-12">
                        <ul class="grid later fixedSpaces equal left margin-top-5">
                            <li class="col-7-12 ae-3 fromCenter">
                                <div class="name-67 ">

                                    <div class="width-4 margin-bottom-3 margin-2 left">
                                        <div class="gradient-blue"></div>
                                        <h2 class=""><strong>Support</strong></h2>
                                    </div>

                                    <div class="margin-2 micro light">
                                        <p><strong>Gerne beraten wir Sie persönlich</strong></p>
                                        <p>
                                            Kontaktieren Sie die ImmoFound Berater per Telefon 07951/4722667 E-Mail
                                            info@immofound.de oder finden Sie Ihre Vor-Ort Beratung:
                                        </p>
                                        <p class="margin-top-2">
                                            Gaildorferstraße 88
                                        </p>
                                        <p>
                                            74564 Crailsheim
                                        </p>
                                        <p class="margin-top-2"><strong>
                                                Bürozeiten:
                                            </strong>
                                        </p>
                                        <p>
                                            Mo. - Do. 08:30 - 18:00 Uhr
                                        </p>
                                        <p>
                                            Fr. 08:30 -14:00 Uhr
                                        </p>

                                        <p class="margin-top-2"><strong>
                                                Wichtige Downloads:
                                            </strong>
                                        </p>
                                        <a class="text-blue" href="/downloadImmo">- Anlagebedingung </a> <br />
                                        <a class="text-blue" href="/downloadImmo2">- Vermögensanlageinformationsblatt (VIB) </a>

                                    </div>
                                </div>
                            </li>
                            <li class="col-5-12 ae-3 fromCenter">
                                <div class="name-68 text-white center">
                                    <div class="card-avatar">
                                        <img class="card-img" src="{{ asset('assets/img/domenic.jpg') }}"/>
                                    </div>
                                    <h3 class="margin-top-2"><strong>Domenic Haag</strong></h3>
                                    <div class="gradient-line gradient-left gradient-width-30 center"></div>
                                    <h5>
                                        Sie möchten mehr als <strong>10.000€ </strong>investieren?
                                        Gerne berate ich Sie persönlich!
                                    </h5>
                                    <button class="ac-ln-button-2 button margin-top-2">+49 151 12294145</button>
                                </div>
                                <div class="name-67  margin-top-3 center">
                                    <h3 class="margin-top-3"><strong>Hilfe-Center</strong></h3>
                                    <div class="gradient-line gradient-left gradient-width-30 center"></div>
                                    <p class="light micro">
                                        Alle Fragen unsere bisherigen Investoren wurden von uns
                                        im Hilfe-Center mit den passenden Antworten hochgeladen.
                                    </p>
                                    <a class="ac-ln-button-2  margin-top-1" href="{{route('hilfe-center')}}">Zum Hilfe-Center</a>
                                </div>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection
