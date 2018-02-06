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
    <!-- Slide #43 -->
    <section class="slide background-blue">
        <div class="content">
            <div class="container">
                <div class="wrap">

                    <div class="fix-4-12  center">
                        <div class="pad shadow selected ae-1 fromTopRight">
                            <form  role="form" method="POST" action="{{ route('password.request') }}">
                                {{ csrf_field() }}
                                <input type="hidden" name="token" value="{{ $token }}">


                                <img src="{{ asset('assets/svg/logoweis.svg') }}" class="ae-4 text-black fix-1-12" alt="App 2"/>
                                <h3 class="big ae-3">Passwort Reset</h3>
                                @if (session('status'))
                                    <p class="ac-text-red micro">
                                        {{ session('status') }}
                                    </p>
                                @endif
                                <div class="gradient-line-3 gradient-left gradient-width-120 margin-top-1 ae-4"></div>

                                <div class="col-lg-12 form-group ae-4{{ $errors->has('email') ? ' has-error' : '' }}">
                                    <label for="email" class="control-label">E-Mail</label>
                                    <input id="email" type="email" class="form-control" name="email" value="{{ $email or old('email') }}" required autofocus>
                                    @if ($errors->has('email'))
                                        <p class="text-ac-red micro"><strong>{{ $errors->first('email') }}</strong></p>
                                    @endif
                                </div>

                                <div class="col-lg-12 form-group ae-4{{ $errors->has('password') ? ' has-error' : '' }}">
                                    <label for="password" class="control-label">Neues Passwort</label>
                                    <input id="password" type="password" class="form-control" name="password" required>
                                    @if ($errors->has('password'))
                                        <p class="text-ac-red micro"><strong>{{ $errors->first('password') }}</strong></p>
                                    @endif
                                </div>

                                <div class="col-lg-12 form-group ae-4{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                                    <label for="password-confirm" class="control-label">Passwort bestätigen</label>
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                                    @if ($errors->has('password_confirmation'))
                                        <p class="text-ac-red micro"><strong>{{ $errors->first('password_confirmation') }}</strong></p>
                                    @endif
                                </div>
                                <button type="submit" class="ac-ln-button-2 ae-4 button">Passwort zurücksetzen</button>

                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>


@endsection