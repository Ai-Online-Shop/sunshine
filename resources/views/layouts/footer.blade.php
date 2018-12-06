    <section class="slide autoHeight background-blue">
    <div class="content">
        <div class="container">
            <div class="wrap">

                <div class="fix-10-12">

                    <div class="ae-2"><h1 class="text-white small"><strong>Schenken Sie ihren Freunden <br /> dieses Jahr ein Erlebnis.<br /></strong></h1></div>
                    <a class="button stroke margin-top-2 rounded ae-4 small white" href="{{route('gutschein')}}">Jetzt Gutschein kaufen</a>

                </div>
            </div>

        </div>
    </div>
    </section>

    <section class="slide autoHeight" style="background-color:#000;">
            <div class="content">
                <div class="container">
                    <div class="wrap">
                        <ul class="flex fix-10-12 ae-1 light micro text-white">
                            <li class="col-3-12"><p><a href="{{route('sha')}}">Sunshine Wellness Schenkenseebad</a></p></li>
                            <li class="col-3-12"><p><a href="{{route('gelbinger')}}">Sunshine Wellness Gelbinger-Gasse</a></p></li>
                            <li class="col-3-12"><p><a href="{{route('impressum')}}">Impressum</a></p></li>
                            <li class="col-3-12"><p><a href="{{route('agb')}}">Allgemeine Geschäftsbedingungen</a></p></li>
                        </ul>
                        <div class="spread-bar-line2 ae-1 margin-bottom-4"></div>
                        <ul class="flex margin-left-2 margin-right-2 text-white">
                            <li class="col-3-12 center ae-2">
                                <a><svg class="middle" style="width:120px;height:50px; fill:#fff;">
                                        <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#logo"></use>
                                    </svg></a>
                                <ul class="menu margin-top-1 nav-text">
                                    <li><span>Copyright © 2018 <a href="https://wolf-gate.com">Wolf-Gate</a> <br>
                All rights reserved.</span></li>
                                </ul>
                            </li>
                            <li class="col-3-12 left col-tablet-1-1 nav-text ae-3">
                                <p class="margin-top-2"><strong>Navigation</strong></p>
                                <p><a href="{{route('home')}}">Start</a></p>
                                <p><a href="{{route('angebote')}}">Angebote</a></p>
                                <p><a href="{{route('impressionen')}}">Impressionen</a></p>
                                <p><a href="{{route('team')}}">Team</a></p>
                                <p><a href="{{route('kontakt')}}">Kontakt</a></p>
                            </li>
                            <li class="col-5-12 left col-tablet-1-1 nav-text ae-6">
                                <p class="margin-top-2"><strong>Besuchen Sie uns auf Facebook</strong></p>
                                <div class="fb-page" data-href="https://www.facebook.com/Sunshinecrailsheim/" data-small-header="false" data-adapt-container-width="false" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/Sunshinecrailsheim/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/Sunshinecrailsheim/">Sunshine Wellness</a></blockquote></div>                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
    <div class="dialogContainer bottom">
        <div class="dialog" data-dialog-id="dialog" data-set-cookie="30">
            <div class="close" data-dialog-action="close"></div>
            <div class="dialogContent">
                <div class="text center">
                    <p class="montserrat small bold">Neueröffnung Gelbinger-Gasse am 08.12.18</p>
                    <p class="micro montserrat">Kommen Sie Vorort zur Neueröffnung und erhalten Sie 10% auf alle Gutscheine und Anwendungen!</p>
                    <a href="{{ route('gelbinger/kontakt') }}" class="button wide orange crop"
                       data-dialog-action="close">Gelbinger Gasse Anfahrt</a>
                </div>
            </div>
        </div>
    </div>
</body>
    <!--   Core JS Files   -->
    <script src="{{ asset('assets/js/jquery-ui.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/js/material.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/js/perfect-scrollbar.jquery.min.js') }}" type="text/javascript"></script>
    <!-- Forms Validations Plugin -->
    <script src="{{ asset('assets/js/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('assets/js/material-bootstrap-wizard2.js') }}"></script>
    <!--  Plugin for Date Time Picker and Full Calendar Plugin-->
    <script src="{{ asset('assets/js/moment.min.js') }}"></script>
    <!--  Charts Plugin -->
    <!--  Plugin for the Wizard -->
    <script src="{{ asset('assets/js/jquery.datatables.js') }}"></script>

    <script src="{{ asset('assets/js/jquery.bootstrap-wizard.js') }}"></script>
    <!--  Notifications Plugin    -->
    <script src="{{ asset('assets/js/bootstrap-notify.js') }}"></script>
    <!-- Select Plugin -->
    <script src="{{ asset('assets/js/jquery.select-bootstrap.js') }}"></script>
    <!-- Sweet Alert 2 plugin -->
    <script src="{{ asset('assets/js/sweetalert2.js') }}"></script>
    <!-- TagsInput Plugin -->
    <script src="{{ asset('assets/js/jquery.tagsinput.js') }}"></script>
    <!-- Material Dashboard javascript methods -->
    <script src="{{ asset('assets/js/material-dashboard.js') }}"></script>
    <script src="{{ asset('assets/js/demo.js') }}"></script>

    <script type="text/javascript">
        $().ready(function() {
            demo.checkFullPageBackgroundImage();
            setTimeout(function() {
                // after 1000 ms we add the class animated to the login/register card
                $('.card').removeClass('card-hidden');
            }, 700)
        });
    </script>
</html>
