@extends('layouts.app')
@section('title') @if( ! empty($title)) {{ $title }} | @endif @parent @endsection

@section('content')
    <section class="slide components autoHeight" style="background:#000">
        <div class="content">
            <div class="container">
                <div class="wrap fromRight">

                    <div class="fix-12-12 margin-top-3">
                        <ul class="flex verticalCenter reverse text-white">
                            <li class="col-5-12 left">
                                <h1 class="ae-1 fromLeft"><strong>Überzeugte Kunden.</strong></h1>
                                <div class="ae-2 margin-top-2"><p class="opaque-7 light">Wenn du unsere
                                        App einmal erlebt hast, wirst du verstehen, warum so viele User von
                                        ImmoFound begeistert sind!</p></div>
                                <ul class="flex components-grid later space-gray margin-top-6">
                                    <li class="col-6-12 col-tablet-1-3 col-phablet-1-2 relative ae-3">
                                        <i class="material-icons">assessment</i>
                                        <div class="padding-left-4">
                                            <h4><strong class="block">Sparpläne</strong></h4>
                                            <p class="small margin-bottom-2 light">Investieren - so flexibel wie noch
                                                nie.</p>
                                        </div>
                                    </li>
                                    <li class="col-6-12 col-tablet-1-3 col-phablet-1-2 relative ae-4">
                                        <i class="material-icons">people</i>
                                        <div class="padding-left-4">
                                            <h4><strong class="block">Beratung</strong></h4>
                                            <p class="small margin-bottom-2 light">Investiere mit Empfehlungen von
                                                Experten.</p>
                                        </div>
                                    </li>
                                    <li class="col-6-12 col-tablet-1-3 col-phablet-1-2 relative ae-5">
                                        <i class="material-icons">security</i>
                                        <div class="padding-left-4">
                                            <h4><strong class="block">Sicherheit</strong></h4>
                                            <p class="small margin-bottom-2 light">Durchdachte Technologie schützt deine
                                                Privatsphäre.</p>
                                        </div>
                                    </li>
                                    <li class="col-6-12 col-tablet-1-3 col-phablet-1-2 relative ae-6">
                                        <i class="material-icons">star</i>
                                        <div class="padding-left-4">
                                            <h4><strong class="block">Community</strong></h4>
                                            <p class="small margin-bottom-2 light">Unsere User ziehen an einem
                                                Strang.</p>
                                        </div>
                                    </li>
                                    <li class="col-6-12 col-tablet-1-3 col-phablet-1-2 relative ae-7">
                                        <i class="material-icons">get_app</i>
                                        <div class="padding-left-4">
                                            <h4><strong class="block new">App</strong></h4>
                                            <p class="small margin-bottom-2 light">Ganz neues Design. Ganz neue
                                                Möglichkeiten. </p>
                                        </div>
                                    </li>
                                    <li class="col-6-12 col-tablet-1-3 col-phablet-1-2 relative ae-8">
                                        <i class="material-icons">favorite</i>
                                        <div class="padding-left-4">
                                            <h4><strong class="block">Magazin</strong></h4>
                                            <p class="small margin-bottom-2 light">Hier gibt es großartige Storys.</p>
                                        </div>
                                    </li>
                                </ul>

                            </li>
                            <li class="col-1-12"></li>
                            <li class="col-6-12 left relative ae-1 fadeIn">
                                <img class="components-pics hideForTablet layer-1"
                                     src="{{ asset('assets/img/components-1.png') }}" width="772"
                                     alt="Components"/>
                                <img class="components-pics hideForTablet layer-2"
                                     src="{{ asset('assets/img/components-2.png') }}" width="1002"
                                     alt="Components"/>
                                <img class="components-pics hideForTablet layer-3"
                                     src="{{ asset('assets/img/components-3.png') }}" width="366"
                                     alt="Components"/>
                                <img class="components-mobile showForTablet" style="display:none"
                                     src="{{ asset('assets/img/components-mobile.png') }}" alt="Components"/>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </section>

@endsection