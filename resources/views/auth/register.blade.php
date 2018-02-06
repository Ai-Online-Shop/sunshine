@extends('layouts.app')

@section('content')
    <style>
        .background-red-pink {
            background: linear-gradient(45deg, #1C6361 50%, #3D8783 50%);
            background: -webkit-linear-gradient(45deg, #1C6361 50%, #3D8783 50%);
        }
    </style>
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

    <section class="slide background-red-pink">
        <div class="content">
            <div class="container">
                <div class="wrap">

                    <div class="fix-4-12  center">
                        <div class="pad shadow selected ae-1 fromTopRight">
                            <form role="form" method="POST"  action="{{ route('register') }}">
                                {{ csrf_field() }}

                                <svg style="width:65px;height:65px" class="ae-4">
                                    <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                         xlink:href="#logo"></use>
                                </svg>
                                <h3 class="big ae-3">Registrieren</h3>
                                <div class="gradient-line-3 gradient-left gradient-width-120 margin-top-1 ae-4"></div>

                                <div class="col-lg-12 form-group ae-4 {{ $errors->has('email') ? ' has-error' : '' }} label-floating">
                                    <label for="email" class="control-label">Email Adresse</label>
                                    <input id="email" type="email" class="form-control" name="email"
                                           value="{{ old('email') }}" required autofocus>
                                    @if ($errors->has('email'))<span
                                            class="help-block"><strong>{{ $errors->first('email') }}</strong></span>@endif
                                </div>
                                <div class="form-group col-lg-12 ae-4  {{ $errors->has('password') ? ' has-error' : '' }} label-floating">
                                    <label for="password" class="control-label">Passwort</label>
                                    <input id="password" type="password" class="form-control" name="password" required>
                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <div class="form-group col-lg-12 ae-4  {{ $errors->has('password') ? ' has-error' : '' }} label-floating">
                                    <label for="password" class="control-label">Passwort bestätigen*</label>
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                                </div>
                                <button type="submit" class="ac-ln-button ae-4 button">Konto erstellen</button>

                            </form>
                        </div>
                        <p class="light small text-white opaque ae-5 margin-top-2"><span class="opacity-5">Mit Konto erstellen, stimme ich den</span>
                            <a href="{{route('agb')}}"> AGB </a><span class="opacity-5">zu</span>
                        </p>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- Slide #42 -->
@endsection
