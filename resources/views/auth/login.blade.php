@extends('layouts.app')

@section('content')
    <style>
        .background-red-pink {
            background: linear-gradient(45deg, #eb9c99 50%, #eeaead 50%);
            background: -webkit-linear-gradient(45deg, #eb9c99 50%, #eeaead 50%);
        }
    </style>
    <!-- Slide #43 -->
    <section class="slide background-red-pink">
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
                                <h3 class="big ae-3">Einloggen</h3>
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
                                <button type="submit" class="ac-ln-button ae-4 button">Einloggen</button>
                                <p class="light micro ae-5"><a href="{{route('password.request')}}" class="text-ac"><b>Passwort vergessen?</b></a></p>

                            </form>
                        </div>
                        <p class="light small text-white opaque ae-5 margin-top-1"><span class="opacity-5">Nicht Registriert?</span><br><a href="{{route('register')}}"><b>Registrieren</b></a></p>
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection