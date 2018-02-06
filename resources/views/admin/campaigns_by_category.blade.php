@extends('layouts.app')
@section('content')
    <!-- TABS EXAMPLE -->
    <style>
        .background-red-pink{
            background: -webkit-linear-gradient(45deg, #eb6833 50%, #ea9043 50%);
            background: -webkit-linear-gradient(45deg, #eb6833 50%, #ea9043 50%);
        }
    </style>


    <section class="slide background-red-pink">
        <div class="content">
            <div class="container">
                <li class="wrap fromBottomLeft">
                    @php
                        $campaigns = $category->campaigns()->orderBy('id', 'desc')->paginate(20);
                    @endphp

                    @if($campaigns->count() > 0)
                        @foreach($campaigns as $spc)

                            <ul class="grid later fix-12-12 left">
                                <li class="col-6-12 col-tablet-1-2 col-phone-1-1 ae-4">
                                    <div class="pad shadow center">
                                        @if($spc->min_amount)

                                        <svg style="width:65px;height:65px">
                                            <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#logo"></use>
                                        </svg>
                                        <h3 class="big">Gutscheinangebot</h3>
                                        <div class="gradient-line-3 gradient-left gradient-width-120 margin-bottom-2 margin-top-1"></div>
                                        <p class="small light"><i
                                                    class="material-icons margin-right-1 font-size-20 text-ac">done</i>Ab 20€ möglich</p>
                                        <p class="small light"><i
                                                    class="material-icons margin-right-1 font-size-20 text-ac">done</i>2 Jahre Zeit zum einlösen</p>
                                        <p class="small light"><i
                                                    class="material-icons margin-right-1 font-size-20 text-ac">done</i>Individuelle Widmung</p>
                                        <p class="small light"><i
                                                    class="material-icons margin-right-1 font-size-20 text-ac">done</i>Als PDF druckbar</p>


                                            <p class="light small margin-top-1">Auf der nächsten Seite können Sie
                                            die Höhe des Gutscheins nach ihren Wünschen anpassen.</p>
                                        <a href="{{route('campaign_single', [$spc->id, $spc->slug])}}"
                                           class="ac-ln-button margin-top-1">Auswählen</a>
                                        @endif

                                    </div></li>
                                @endforeach
                @endif

                <li class="col-6-12">

                    <div class="name-68 ae-7 text-white center">
                        <div class="card-avatar">
                            <img class="img" src="{{ asset('assets/img/sun-1.jpg') }}"/>
                        </div>
                        <h2 class="cropBottom margin-top-2"><strong>Suwarat Haag</strong></h2>
                        <p class="opacity-6 margin-top-1 light small">Geschäftsführung</p>
                        <div class="gradient-line gradient-left gradient-width-120 margin-top-2"></div>

                        <div class="margin-2">
                            <i class="material-icons">format_quote</i>
                            <p class="cropBottom light small">
                                Sie wissen noch nicht welches Angebot zu ihnen passt? Gerne berate ich Sie
                                persönlich!
                            </p>
                        </div>
                        <a class="ac-ln-button margin-top-1 margin-bottom-3">07951/2977641</a>
                    </div>
                </li>
                            </ul>
            </div>
        </div>
        </div>
    </section>
@endsection
