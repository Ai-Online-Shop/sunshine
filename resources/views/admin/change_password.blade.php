@extends('layouts.dashboard')

@section('content')
    <section class="slide autoHeight" style="background:#f2f2f2">
        <div class="content">
            <div class="container">
                <div class="wrap">

                    <div class="fix-8-12 text-black toCenter">
                        <h1 class="ae-1"><strong>Probleme beim Anmelden?</strong></h1>
                        <div class="ae-2 light small"><p>Hier kannst du dein bestehendes Passwort zurücksetzen. </p></div>
                    </div>
                    <div class="fix-9-12 margin-top-7 ae-4">


                        <div class="name-67 ">

                            <div class="width-4 margin-bottom-7 margin-2 left">
                                <div class="gradient-blue"></div>
                                <h2 class=""><strong>Passwort ändern</strong></h2>
                            </div>
                            <form>
                            <div class="fix-10-12">
                                <div class=" col-lg-3 col-md-6 col-sm-6 form-group label-floating" {{ $errors->has('old_password')? 'has-error' : '' }}>
                                    <label class="control-label">Altes Passwort</label>
                                    <input type="password" name="old_password" id="old_password" class="form-control" value="" autocomplete="off"/>
                                    {!! $errors->has('old_password')? '<p class="help-block"> '.$errors->first('old_password').' </p>':'' !!}
                                </div>

                                <div class=" col-lg-3 col-md-6 col-sm-6 form-group label-floating" {{ $errors->has('new_password')? 'has-error' : '' }}>
                                    <label class="control-label">Neues Passwort</label>
                                    <input type="password" name="new_password" id="new_password" class="form-control" value="" autocomplete="off" />
                                    {!! $errors->has('new_password')? '<p class="help-block"> '.$errors->first('new_password').' </p>':'' !!}
                                </div>

                                <div class=" col-lg-3 col-md-6 col-sm-6 form-group label-floating" {{ $errors->has('new_password_confirmation')? 'has-error' : '' }}>
                                    <label class="control-label">Neues Passwort bestätigen</label>
                                    <input type="password" name="new_password_confirmation" id="new_password_confirmation" class="form-control" value="" autocomplete="off"/>
                                    {!! $errors->has('new_password_confirmation')? '<p class="help-block"> '.$errors->first('new_password_confirmation').' </p>':'' !!}
                                </div>

                                        <button type="submit" class="ac-ln-button-2">Passwort ändern</button>
                            </div>

                        </form>
                        </div>
                    </div>
                </div>
            </div>
    </section>

@endsection