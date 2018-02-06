@extends('layouts.app')

@section('content')
    <!-- SubMenu -->
    <section class="slide autoHeight" style="background:#333">
        <div class="content">
            <div class="container">
                <div class="wrap padding-left-0 padding-right-0 padding-top-0 padding-bottom-0">

                    <nav class="c-sub-navigation fix-3-12">
                        <ul>
                            <li class="ae-1 fromRight"><a class="c-sub-navigation__item c-sub-navigation__item-profiles"
                                                          href="{{route('login')}}"><i class="material-icons font-size-33 text-ac">fingerprint</i><br /> <span>Login</span></a></li>
                            <li class="ae-2 fromRight"><a class="c-sub-navigation__item c-sub-navigation__item-profiles"
                                                          href="{{route('register')}}"><i class="material-icons font-size-33 text-ac">verified_user</i><br /> <span>Registrieren</span></a></li>
                        </ul>
                    </nav>

                </div>
            </div>
        </div>
    </section>
    <!-- Slide #42 -->
    <section class="slide background-blue">
        <div class="content">
            <div class="container">
                <div class="wrap">

                    <div class="fix-4-12  center">
                        <div class="pad shadow selected ae-1 fromTopRight">
                            <form role="form" method="POST" action="{{ route('login') }}">
                                {{ csrf_field() }}

                                <svg style="width:65px;height:65px" class="ae-4">
                                    <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                         xlink:href="#logo"></use>
                                </svg>
                                <h3 class="big ae-3">Email gesendet!</h3>
                                <div class="gradient-line-3 gradient-left gradient-width-120 margin-top-1 ae-4"></div>
                                <p class="ae-5 light small">Bitte überprüfe deine Email-Postfach. Wir haben dir eine Email mit Verifizierungscode geschickt.</p>

                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>@endsection