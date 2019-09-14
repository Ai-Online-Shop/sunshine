@component('layouts.sha')
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
        .slider[data-slider-id="customHeight"] li.selected {
            opacity: 1;
        }

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

        @media screen and (max-width: 1180px) {
            .leftControl,
            .rightControl {
                display: none;
            }
        }

        .background-red-pink {
            background: -webkit-linear-gradient(45deg, #eb6833 50%, #ea9043 50%);
            background: -webkit-linear-gradient(45deg, #eb6833 50%, #ea9043 50%);
        }
    </style>
    <section class="slide background-red-pink">
        <div class="content">
            <div class="container">
                <div class="wrap">

                    <div class="fix-8-12">
                        <h1 class="ae-1 fromBottom margin-bottom-5"><strong>SunshineWellness. </br >Verschaffen Sie sich
                                einen Einblick.</strong></h1>
                    </div>

                    <div class="fix-8-12">

                        <div class="relative">
                            <!-- arrows -->
                            <div class="leftControl ae-2 fromRight" data-slider-id="customHeight"
                                 data-slider-action="prev">
                                <svg>
                                    <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#arrow-left"></use>
                                </svg>
                            </div>
                            <div class="rightControl ae-2 fromLeft" data-slider-id="customHeight"
                                 data-slider-action="next">
                                <svg>
                                    <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#arrow-right"></use>
                                </svg>
                            </div>

                            <!-- slider -->
                            <div class="ae-1 fromBlur">
                                <ul class="slider autoHeight clickable" data-slider-id="customHeight">
                                    <li class="selected"><img src="{{ asset('assets/img/sha-slider-1.jpg') }}"
                                                              class="wide shadow" alt="Image"/>
                                        <h2 class="big margin-top-4 bold">Herzlich Willkommen</h2>
                                        <p class="small">Für uns stehen Sie im Mittelpunkt!</p></li>
                                    <li><img src="{{ asset('assets/img/sha-slider-2.jpg') }}" class="wide shadow"
                                             alt="Sunshine Wellness Schenkenseebad Schwäbisch Hall"/>
                                        <h2 class="big margin-top-4 bold ">Partner Massage</h2>
                                        <p class="small">Bei uns sind Partner Massagen jederzeit möglich.</p></li>
                                    <li><img src="{{ asset('assets/img/sha-slider-3.jpg') }}" class="wide shadow"
                                             alt="Sunshine Wellness Schenkenseebad Schwäbisch Hal Partner Massage"/>
                                        <h2 class="big margin-top-4 bold">Sinnliche Massage</h2>
                                        <p class="small">Eine sinnlich süße Behandlung.</p></li>
                                    <li><img src="{{ asset('assets/img/sha-slider-4.jpg') }}" class="wide shadow"
                                             alt="Sunshine Wellness Schenkenseebad Schwäbisch Hal Sinnliche Massage"/>
                                        <h2 class="big margin-top-4 bold">Öl Massage</h2>
                                        <p class="small">Eine porentiefe Reinigung ihrer Haut.</p></li>
                                    <li><img src="{{ asset('assets/img/sha-slider-5.jpg') }}" class="wide shadow"
                                             alt="Sunshine Wellness Schenkenseebad Schwäbisch Hal Öl Massage"/>
                                        <h2 class="big margin-top-4 bold">Schenkenseebad</h2>
                                        <p class="small">Wir bieten Kombi Pakete mit dem Schwimmbad vom Schenkenseebad.</p></li>
                                </ul>
                            </div>

                            <!-- controller -->
                            <ul class="controller dots big ae-3 fromTop margin-top-8 space"
                                data-slider-id="customHeight">
                                <li class="dot selected"></li>
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
@endcomponent