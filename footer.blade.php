@if (Auth::guest())
    <section class="slide autoHeight" style="background:#0095ff">
    <div class="content">
        <div class="container">
            <div class="wrap">

                <div class="fix-10-12">

                    <div class="ae-2"><h1 class="text-white small"><strong>Bessere Investments. <br />Jetzt durchstarten.</strong></h1></div>
                    <a class="button stroke rounded ae-4 small white" href="{{route('register')}}">Kostenfrei registrieren</a>

                </div>
            </div>

        </div>
    </div>
</section>
    <section class="slide autoHeight" style="background-color:#000;">
    <div class="content">
        <div class="container">
            <div class="wrap">
                <ul class="flex fix-10-12 ae-1 nav-text text-white">
                    <li class="col-4-12"><p><a href="{{route('impressum')}}">Impressum</a></p></li>
                    <li class="col-4-12"><p><a href="{{route('datenschutz')}}">Datenschutzerklärung</a></p></li>
                    <li class="col-4-12"><p><a href="{{route('risiko')}}">Risiko-Hinweise</a></p></li>
                </ul>
                <div class="spread-bar-line2 ae-1 margin-bottom-4"></div>
                <ul class="flex margin-left-2 margin-right-2 text-white">
                    <li class="col-3-12 center ae-2">
                        <svg class="middle" style="width:120px;height:50px; fill:#fff;">
                            <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#logo"></use>
                        </svg>
                        <ul class="menu margin-top-1 nav-text">
                            <li><span>Copyright © 2017 ImmoFound <br>
                All rights reserved.</span></li>
                        </ul>
                        <ul class="menu margin-top-2 margin-bottom-2">
                            <a href="https://www.facebook.com/ImmoFound/" class="margin-right-1">
                                <svg style="width:25px;height:25px; fill:#fff;">
                                    <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#facebook"></use>
                                </svg>
                            </a> <a href="https://www.instagram.com/immofound/" class="margin-right-1">
                                <svg style="width:25px;height:25px; fill:#fff;">
                                    <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#instagram"></use>
                                </svg>
                            </a> <a href="https://medium.com/@immofound/">
                                <svg style="width:25px;height:25px; fill:#fff;">
                                    <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#medium"></use>
                                </svg>
                            </a>
                        </ul>
                    </li>
                    <li class="col-2-12 left col-tablet-1-2 nav-text ae-3">
                        <p class="margin-top-2"><strong>Über uns</strong></p>
                        <p><a href="{{route('idee')}}">Idee</a></p>
                        <p><a href="{{route('gründer')}}">Gründer</a></p>
                        <p><a href="{{route('partner')}}">Partner</a></p>
                        <p><a href="{{route('kunden')}}">Kunden</a></p>
                    </li>
                    <li class="col-2-12 left col-tablet-1-2 nav-text ae-3">
                        <p class="margin-top-2"><strong>Magazin</strong></p>
                        <p><a href="{{route('blog')}}">Blog</a></p>
                        <p><a href="{{route('wiki')}}">Wiki</a></p>
                        <p><a href="{{route('magazin')}}">Magazin</a></p>
                        <p><a href="{{route('ebook')}}">Ebook</a></p>
                    </li>
                    <li class="col-2-12 left col-tablet-1-2 nav-text ae-5">
                        <p class="margin-top-2"><strong>Investieren</strong></p>
                        <p><a href="{{route('funktionierts')}}">Step by Step</a></p>
                        <p><a href="{{route('direkt-investment')}}">Direkt-Invest</a></p>
                        <p><a href="{{route('sparpläne')}}">Sparpläne</a></p>
                        <p><a href="{{route('portfolio')}}">Portfolio</a></p>
                        <p><a href="{{route('hilfe-center')}}">Hilfe-Center</a></p>
                        <p><a href="{{route('welcome')}}">Zur App</a></p>
                    </li>
                    <li class="col-2-12 left col-tablet-1-2 nav-text ae-6">
                        <p class="margin-top-2"><strong>Social</strong></p>
                        <p><a href="https://www.facebook.com/ImmoFound/">Facebook</a></p>
                        <p><a href="https://www.youtube.com/channel/immofound">YouTube</a></p>
                        <p><a href="https://www.instagram.com/immofound/">Instagram</a></p>
                        <p><a href="https://de.pinterest.com/immofound/">Pinterest</a></p>
                        <p><a href="https://plus.google.com/+ImmoFound">Google Plus</a></p>
                        <p><a href="https://www.xing.com/profile/Immo_Found">Xing</a></p>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

    @else

    <section class="slide autoHeight" style="background-color:#000;">
        <div class="content">
            <div class="container">
                <div class="wrap">
                    <ul class="flex fix-10-12 ae-1 nav-text text-white">
                        <li class="col-4-12"><p><a href="{{route('impressum')}}">Impressum</a></p></li>
                        <li class="col-4-12"><p><a href="{{route('datenschutz')}}">Datenschutzerklärung</a></p></li>
                        <li class="col-4-12"><p><a href="{{route('risiko')}}">Risiko-Hinweise</a></p></li>
                    </ul>
                    <div class="spread-bar-line2 ae-1 margin-bottom-4"></div>
                    <ul class="flex margin-left-2 margin-right-2 text-white">
                        <li class="col-3-12 center ae-2">
                            <svg class="middle" style="width:120px;height:50px; fill:#fff;">
                                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#logo"></use>
                            </svg>
                            <ul class="menu margin-top-1 nav-text">
                                <li><span>Copyright © 2017 ImmoFound <br>
                All rights reserved.</span></li>
                            </ul>
                            <ul class="menu margin-top-2 margin-bottom-2">
                                <a href="https://www.facebook.com/ImmoFound/" class="margin-right-1">
                                    <svg style="width:25px;height:25px; fill:#fff;">
                                        <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#facebook"></use>
                                    </svg>
                                </a> <a href="https://www.instagram.com/immofound/" class="margin-right-1">
                                    <svg style="width:25px;height:25px; fill:#fff;">
                                        <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#instagram"></use>
                                    </svg>
                                </a> <a href="https://medium.com/@immofound/">
                                    <svg style="width:25px;height:25px; fill:#fff;">
                                        <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#medium"></use>
                                    </svg>
                                </a>
                            </ul>
                        </li>
                        <li class="col-2-12 left col-tablet-1-2 nav-text ae-3">
                            <p class="margin-top-2"><strong>Über uns</strong></p>
                            <p><a href="{{route('idee')}}">Idee</a></p>
                            <p><a href="{{route('gründer')}}">Gründer</a></p>
                            <p><a href="{{route('partner')}}">Partner</a></p>
                            <p><a href="{{route('kunden')}}">Kunden</a></p>
                        </li>
                        <li class="col-2-12 left col-tablet-1-2 nav-text ae-3">
                            <p class="margin-top-2"><strong>Magazin</strong></p>
                            <p><a href="{{route('blog')}}">Blog</a></p>
                            <p><a href="{{route('wiki')}}">Wiki</a></p>
                            <p><a href="{{route('magazin')}}">Magazin</a></p>
                            <p><a href="{{route('ebook')}}">Ebook</a></p>
                        </li>
                        <li class="col-2-12 left col-tablet-1-2 nav-text ae-5">
                            <p class="margin-top-2"><strong>Investieren</strong></p>
                            <p><a href="{{route('funktionierts')}}">Step by Step</a></p>
                            <p><a href="{{route('direkt-investment')}}">Direkt-Invest</a></p>
                            <p><a href="{{route('sparpläne')}}">Sparpläne</a></p>
                            <p><a href="{{route('portfolio')}}">Portfolio</a></p>
                            <p><a href="{{route('hilfe-center')}}">Hilfe-Center</a></p>
                            <p><a href="{{route('welcome')}}">Zur App</a></p>
                        </li>
                        <li class="col-2-12 left col-tablet-1-2 nav-text ae-6">
                            <p class="margin-top-2"><strong>Social</strong></p>
                            <p><a href="https://www.facebook.com/ImmoFound/">Facebook</a></p>
                            <p><a href="https://www.youtube.com/channel/immofound">YouTube</a></p>
                            <p><a href="https://www.instagram.com/immofound/">Instagram</a></p>
                            <p><a href="https://de.pinterest.com/immofound/">Pinterest</a></p>
                            <p><a href="https://plus.google.com/+ImmoFound">Google Plus</a></p>
                            <p><a href="https://www.xing.com/profile/Immo_Found">Xing</a></p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>



    @endif

    </body>
</html>
