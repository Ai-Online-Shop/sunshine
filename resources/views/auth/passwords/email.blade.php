@extends('layouts.app')

@section('content')
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
    <section class="slide background-blue">
        <div class="content">
            <div class="container">
                <div class="wrap">

                    <div class="fix-8-12">
                        <div class="margin-2 name-67 ae-3 center">
                            <div class="margin-bottom-4 margin-2 left">
                                <div class="gradient-blue width-4"></div>
                                <h2><strong>Passwort zurücksetzen <br>
                                        @if (session('status'))
                                            <p class="text-ac-red">
                                                {{ session('status') }}
                                            </p>
                                        @endif</strong></h2>
                                <p class="micro light width-5">Nachdem du deine Email eingetragen und abgeschickt hast senden
                                    wir dir innerhalb von 2 Minuten deinen Reset-Link.</p>
                            </div>
                            <form class="form-horizontal" role="form" method="POST"
                                  action="{{ route('password.email') }}">
                                {{ csrf_field() }}

                                <div class="col-lg-12 form-group label-floating" {{ $errors->has('email') ? ' has-error' : '' }}>
                                    <label class="control-label">E-Mail Adresse</label>
                                    <input id="email" type="email" class="form-control" name="email"
                                           value="{{ old('email') }}" required>

                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <div class="margin-1 left">
                                    <button type="submit" class="ac-ln-button button">
                                        Reset-Link zusenden
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
