@component('layouts.start')
    <style>
        .slideshow .background {
            opacity: 0;
            visibility: hidden;
            -webkit-transition: 1s;
            transition: 1s;
        }

        .slideshow .background.shown {
            opacity: 1;
            visibility: visible;
        }
    </style>

    <!-- 2) copy scripts -->
    <script>
        $(function () {
            setInterval(function () {
                if ($('.slideshow').hasClass('selected')) {
                    $('.slideshow.selected .background.shown').removeClass('shown').nextOrFirst('.background').addClass('shown');
                }
            }, 4000); // <-- set your interval here
        });
    </script>

    <section class="slide scenic fade-4 slideshow">
        <div class="content">
            <div class="container">
                <div class="wrap">
                    <div class="article">
                        <h1 class="ae-1 text-white">Herzlich Willkommen im Sunshine Wellness!</h1>
                        <div class="ae-2 text-white"><p>Baden, Saunieren und Wellness an einem Ort! Der perfekte Platz
                                um den Alltag hinter sich zu lassen.</p></div>
                    </div>
                    <div class="fix-10-12">
                        <ul class="grid later equal">
                            <li class="col-6-12 margin-top-3">
                                <div class="fix-5-12 crop">
                                    <div class="pad shadow ae-3">
                                        <img src="{{ asset('assets/img/schenkenseebad-1.jpg') }}"
                                             class="ae-4 margin-bottom-2"
                                             alt="Sunshine Wellness Schenkenseestraße 67, 74523 Schwäbisch Hall"/>
                                        <p class="hero crop bold ae-5">Schwäbisch-Hall</p>
                                        <div class="ae-6 "><p class="small crop equalElement">Schenkenseestraße 67,
                                                74523 Schwäbisch Hall</p></div>
                                        <a href="{{ route('sha') }}" class="button orange uppercase wide crop ae-7">Zur
                                            Website</a>
                                    </div>
                                </div>
                            </li>
                            <li class="col-6-12 margin-top-3">
                                <div class="fix-5-12 crop">
                                    <div class="pad shadow ae-4">
                                        <img src="{{ asset('assets/img/slider-1.jpg') }}" class="ae-5 margin-bottom-2"
                                             alt="Sunshine Wellness Haller Straße 185, 74564 Crailsheim"/>
                                        <p class="hero crop bold ae-6">Crailsheim</p>
                                        <div class="ae-7"><p class="small crop equalElement">Haller Straße 185, <br/>74564
                                                Crailsheim</p></div>
                                        <a href="{{ route('home') }}" class="button uppercase orange wide crop ae-8">Zur
                                            Website</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
        <!-- your background images are here -->
        <div class="background shown"
             style="background-image:url({{ asset('assets/img/sunshine-wellness-1.jpg') }})"></div>
        <div class="background" style="background-image:url({{ asset('assets/img/sunshine-wellness-2.jpg') }})"></div>
        <div class="background" style="background-image:url({{ asset('assets/img/sunshine-wellness-3.jpg') }})"></div>
        <div class="background" style="background-image:url({{ asset('assets/img/sunshine-wellness-4.jpg') }})"></div>
        <div class="background" style="background-image:url({{ asset('assets/img/sunshine-wellness-5.jpg') }})"></div>
    </section>
@endcomponent

