@extends('layouts.app')
@section('title') @if( ! empty($title)) {{ $title }} | @endif @parent @endsection

@section('content')

    <style>
        .background-green{
            background: linear-gradient(0deg, #628742 50%, #7F9B64 50%);
            background: -webkit-linear-gradient(0deg, #628742 50%, #7F9B64 50%);
        }
    </style>

    @if(Auth::guest())
    @else

        <section class="slide autoHeight" style="background:#333">
            <div class="content">
                <div class="container">
                    <div class="wrap padding-left-0 padding-right-0 padding-top-0 padding-bottom-0">

                        <nav class="c-sub-navigation fix-8-12">
                            <ul>
                                <li class="ae-2 fromRight"><a class="c-sub-navigation__item c-sub-navigation__item-profiles"
                                                              href="{{route('verwaltung')}}"><i
                                                class="material-icons font-size-33 text-ac">picture_as_pdf</i><br/> <span>Gutschein Downlaod</span></a>
                                </li>
                                <li class="ae-3 fromRight"><a class="c-sub-navigation__item c-sub-navigation__item-profiles"
                                                              href="{{route('investieren')}}"><i
                                                class="material-icons font-size-33 text-ac">card_giftcard</i><br/> <span>Gutschein kaufen</span></a>
                                </li>
                                @php
                                    $auth_user = \Illuminate\Support\Facades\Auth::user();
                                @endphp
                                @if($auth_user->is_admin())
                                    <li class="ae-3 fromRight"><a
                                                class="c-sub-navigation__item c-sub-navigation__item-profiles"
                                                href="{{ route('payments') }}"><i
                                                    class="material-icons font-size-33 text-ac">assignment_ind</i><br/>
                                            <span>Administration</span></a></li>
                                @endif
                                <li class="ae-4 fromRight"><a class="c-sub-navigation__item c-sub-navigation__item-profiles"
                                                              href="{{ route('logout') }}" onclick="event.preventDefault();
                                          document.getElementById('logout-form').submit();"><iç
                                                class="material-icons font-size-33 text-ac">power_settings_new</iç><br/>
                                        <span>Logout</span></a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                          style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                            </ul>
                        </nav>

                    </div>
                </div>
            </div>
        </section>
    @endif

    <section class="slide background-green">
        <div class="content">
            <div class="container">
                <div class="wrap">

                    <div class="fix-12-12  center">

                        <ul class="flex">

                            <li class="col-6-12 col-tablet-1-2 col-phablet-1-1 ae-1">


                                <div class="pad shadow selected ae-1 fromTopRight">

                                    <svg style="width:65px;height:65px">
                                        <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#logo"></use>
                                    </svg>
                                    <h3 class="big ae-3">Sunshine Wellness</h3>
                                    @if(Session::has('success'))
                                        <p class="text-ac">
                                            {{ Session::get('success') }}
                                        </p>
                                    @endif
                                    <div class="gradient-line-3 gradient-left gradient-width-120 margin-bottom-5 margin-top-1 ae-4"></div>
                                    <h3 class="big ae-5">Suwarat Haag (Amika)</h3>
                                    <p class="big ae-5">Haller Straße 185</p>
                                    <p class="big ae-6">74564 Crailsheim</p>
                                    <p class="micro ae-6">(im Haus "CaRe" neben "Blumen und mehr")</p>
                                    <p class="margin-top-3 big ae-7">Tel.: 07951/2977641</p>
                                    <p class="big ae-7">E-Mail: amikahaag@gmail.com</p>


                                </div>
                            </li>
                            <li class="col-6-12 col-tablet-1-2 col-phablet-1-1 ae-1">


                                <div class="pad shadow selected ae-1 fromTopRight">

                                    <form role="form" method="POST" action="{{ route('partner-sended') }}">
                                        {{ csrf_field() }}

                                        <svg style="width:65px;height:65px">
                                            <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#logo"></use>
                                        </svg>
                                        <h3 class="big ae-3">Kontakt-Formular</h3>
                                        @if(Session::has('success'))
                                            <p class="text-ac">
                                                {{ Session::get('success') }}
                                            </p>
                                        @endif
                                        <div class="gradient-line-3 gradient-left gradient-width-120 margin-top-1 ae-4"></div>
                                        <div class="col-lg-12 form-group ae-4 label-floating">
                                            <label for="name" class="control-label">Dein Vor- und Nachname</label>
                                            <input id="name" type="text" class="form-control" name="name" required>
                                        </div>
                                        <div class="col-lg-12 form-group ae-4 label-floating">
                                            <label for="email" class="control-label">Deine Email</label>
                                            <input id="email" type="text" class="form-control" name="email" required>
                                        </div>
                                        <div class="col-lg-12 form-group ae-4 label-floating">
                                            <label for="telefonnummer" class="control-label">Deine Telefonnummer</label>
                                            <input id="telefonnummer" type="text" class="form-control" name="telefonnummer" required>
                                        </div>
                                        <div class="col-lg-12 form-group ae-4 label-floating">
                                            <label for="unternehmen" class="control-label">Deine Postleitzahl</label>
                                            <input id="unternehmen" type="text" class="form-control" name="unternehmen" required>
                                        </div>
                                        <div class="col-lg-12 form-group ae-5">
                                            <label for="anfrage" class="control-label">Meine Anfrage</label>
                                            <select class="form-control select2" id="anfrage" name="anfrage" required>
                                                <option value="Ich möchte mehr wissen über">Anfrage</option>
                                                <option value="Meine Provision" >Termin vereinbaren</option>
                                                <option value="Das Unternehmen" >Gutschein kaufen</option>
                                                <option value="Empfehlungsmanagement" >Informationen zu Wellness-Pakete</option>
                                                <option value="Großinvestitionen" >Bewerbung als Mitarbeiter</option>
                                                <option value="Einstiegshürden" >Fragen zu aktuellen Angeboten</option>
                                                <option value="Einstiegshürden" >Sonstige Anfrage</option>
                                            </select>
                                        </div>
                                        <button type="submit" class="ac-ln-button ae-4 button">Abschicken</button>
                                    </form>
                                </div>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection