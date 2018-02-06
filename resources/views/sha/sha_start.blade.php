@component('layouts.sha')
    <style>
        .scroll .fullscreenSlider {
            min-height: 100vh;
        }

        .scroll .fullscreenSlider .slider .background {
            position: fixed !important;
        }

        .scroll .fullscreenSlider .slider > li {
            overflow-y: scroll;
        }

        .fullscreenSlider > .slider,
        .fullscreenSlider > .slider > li {
            display: block;
            position: absolute;
            width: 100%;
            height: 100%;
            -webkit-transition: opacity 0.5s;
            transition: opacity 0.5s;
        }

        /* hide side navigation for the fullscreen slider */
        .slides .side {
            -webkit-transition: opacity 0.5s, -webkit-transform 0.5s;
            transition: opacity 0.5s, transform 0.5s;
        }
        .slides.firstSlide .side:not(.sliderArrows) {
            opacity: 0 !important;
            pointer-events: none;
            -webkit-transform: translateX(100%);
            transform: translateX(100%);
        }
    </style>
    <!-- EXAMPLE: Fullscreen Slider -->
    <!-- Fullscreen Example -->
    <section class="slide fade-4  scenic fullscreenSlider">
        <ul class="slider autoplay" data-slider-interval="4000" data-slider-id="fullscreen-slider">
            <li class="selected">
                <div class="content">
                    <div class="container">
                        <div class="wrap article">

                            <div class="fix-12-12 center">
                                <div class="fix-11-12 text-white">
                                    <h1><strong>Willkommen im Sunshine Wellness!</strong>
                                    </h1>
                                    <div class=" margin-bottom-5 hideForMobile ">
                                        <p class="hero">Für uns stehen Sie im Mittelpunkt!
                                            Wir sehen es als unsere Aufgabe Ihnen positive Energie zurück zu geben,
                                            Sie vom Alltag entspannen zu lassen und auf Ihre persönlichen Probleme einzugehen!
                                        </p>
                                    </div>
                                    <a class="button round white" href="{{route('sha/impressionen')}}">Impressionen</a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="background" style="background-image:url({{ asset('assets/img/schenkenseebad-1.jpg') }})"></div></li>
            </li>
            <li>
                <div class="content">
                    <div class="container">
                        <div class="wrap article">

                            <div class="fix-12-12 center">
                                <div class="fix-11-12 text-white">
                                    <h1><strong>Jetzt Neu im Schenkenseebad </strong>
                                    </h1>
                                    <div class=" margin-bottom-5 hideForMobile ">
                                        <p class="hero">Sie können jetzt online Termine reservieren und buchen</p>
                                    </div>
                                    <a class=" button round white" href="{{route('sha/termin')}}">Termin</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="background" style="background-image:url({{ asset('assets/img/slider-22.jpg') }})"></div></li>
            </li>
        </ul>

        <!-- arrow for navigation -->
        <nav class="side left sliderArrows pointer">
            <div class="navigation">
                <div class="cell">
                    <span data-slider-id="fullscreen-slider" data-slider-action="prev"><svg class="sideArrow"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#arrow-left"></use></svg></span>
                </div>
            </div>
        </nav>
        <nav class="side sliderArrows pointer">
            <div class="navigation">
                <div class="cell">
                    <span data-slider-id="fullscreen-slider" data-slider-action="next"><svg class="sideArrow"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#arrow-right"></use></svg></span>
                </div>
            </div>
        </nav>
    </section>

@endcomponent

