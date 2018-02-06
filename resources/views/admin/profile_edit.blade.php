@extends('layouts.dashboard')

@section('content')
    <section class="slide" style="background:#f2f2f2">
        <div class="content">
            <div class="container">
                <div class="wrap">

                    <div class="fix-8-12 text-black toCenter">
                        <h1 class="ae-1"><strong>Profil bearbeiten</strong></h1>
                        <div class="ae-2 light small"><p>Hier dreht sich alles um dich. Dein Name, deine Adresse, dein
                                Profil.
                                Alles, was dein Leben einzigartig macht, kannst du hier perfekt verwalten.</p></div>
                    </div>
                    <div class="fix-9-12 margin-top-7 ae-4">
                        {!! Form::open([ 'files'=>'true']) !!}

                        <div class="name-67 ">

                            <div class="width-4 margin-bottom-7 margin-2 left">
                                <div class="gradient-blue"></div>
                                <h2 class=""><strong>Allgemeine Daten</strong></h2>
                                <p class="light micro">Bitte aktualisiere deine Daten und klicke anschließend auf den Button.</p>
                            </div>

                            <div class="fix-10-12">
                                <div class=" col-lg-3 col-md-6 col-sm-6 form-group label-floating" {{ $errors->has('vorname')? 'has-error':'' }}>
                                    <label class="control-label">Vorname</label>
                                    <input type="text" class="form-control" id="vorname"
                                           value="{{ old('vorname')? old('vorname') : $user->vorname }}"
                                           name="vorname"></div>
                                {!! $errors->has('vorname')? '<p class="help-block">'.$errors->first('vorname').'</p>':'' !!}

                                <div class="col-lg-3 col-md-6 col-sm-6 form-group label-floating"{{ $errors->has('nachname')? 'has-error':'' }}>
                                    <label class="control-label">Nachname</label>
                                    <input type="text" class="form-control" id="nachname"
                                           value="{{ old('nachname')? old('nachname') : $user->nachname }}"
                                           name="nachname">
                                    {!! $errors->has('nachname')? '<p class="help-block">'.$errors->first('nachname').'</p>':'' !!}
                                </div>

                                <div class="col-lg-3 col-md-6 col-sm-6 form-group label-floating"{{ $errors->has('email')? 'has-error':'' }}>
                                    <label class="control-label">Email</label>
                                    <input type="email" class="form-control" id="email"
                                           value="{{ old('email')? old('email') : $user->email }}" name="email">
                                    {!! $errors->has('email')? '<p class="help-block">'.$errors->first('email').'</p>':'' !!}
                                </div>

                                <div class="col-lg-3 col-md-6 col-sm-6 form-group label-floating"{{ $errors->has('telefonnummer')? 'has-error':'' }}>
                                    <label class="control-label">Telefonnummer</label>
                                    <input type="text" class="form-control" id="telefonnummer"
                                           value="{{ old('telefonnummer')? old('telefonnummer') : $user->telefonnummer }}"
                                           name="telefonnummer">
                                    {!! $errors->has('telefonnummer')? '<p class="help-block">'.$errors->first('telefonnummer').'</p>':'' !!}
                                </div>


                                <div class="col-lg-3 col-md-6 col-sm-6 form-group label-floating" {{ $errors->has('geburtstag')? 'has-error':'' }}>
                                    <label class="control-label">Geburtstag</label>
                                    <input type="text" class="form-control" id="geburtstag"
                                           value="{{ old('geburtstag')? old('geburtstag') : $user->geburtstag }}"
                                           name="geburtstag">
                                    {!! $errors->has('geburtstag')? '<p class="help-block">'.$errors->first('geburtstag').'</p>':'' !!}
                                </div>

                                <div class="col-lg-3 col-md-6 col-sm-6 form-group label-floating"{{ $errors->has('geburtsort')? 'has-error':'' }}>
                                    <label class="control-label">Geburtsort</label>
                                    <input type="text" class="form-control" id="geburtsort"
                                           value="{{ old('geburtsort')? old('geburtsort') : $user->geburtsort }}"
                                           name="geburtsort">
                                    {!! $errors->has('geburtsort')? '<p class="help-block">'.$errors->first('geburtsort').'</p>':'' !!}
                                </div>

                                <div class="col-lg-3 col-md-6 col-sm-6 form-group label-floating"{{ $errors->has('adresse')? 'has-error':'' }}>
                                    <label class="control-label">Adresse</label>
                                    <input type="text" class="form-control" id="straße"
                                           value="{{ old('adresse')? old('adresse') : $user->adresse }}"
                                           name="adresse">
                                    {!! $errors->has('adresse')? '<p class="help-block">'.$errors->first('adresse').'</p>':'' !!}
                                </div>

                                <div class="col-lg-3 col-md-6 col-sm-6 form-group label-floating"{{ $errors->has('postleitzahl')? 'has-error':'' }}>
                                    <label class="control-label">Postleitzahl</label>
                                    <input type="text" class="form-control" id="postleitzahl"
                                           value="{{ old('postleitzahl')? old('postleitzahl') : $user->postleitzahl }}"
                                           name="postleitzahl">
                                    {!! $errors->has('postleitzahl')? '<p class="help-block">'.$errors->first('postleitzahl').'</p>':'' !!}
                                </div>


                                <div class="col-lg-3 col-md-6 col-sm-6  form-group label-floating"{{ $errors->has('stadt')? 'has-error':'' }}>
                                    <label class="control-label">Stadt</label>
                                    <input type="text" class="form-control" id="stadt"
                                           value="{{ old('stadt')? old('stadt') : $user->stadt }}"
                                           name="stadt">
                                    {!! $errors->has('stadt')? '<p class="help-block">'.$errors->first('stadt').'</p>':'' !!}
                                </div>

                                <div class="col-lg-3 col-md-6 col-sm-6  form-group label-floating"{{ $errors->has('land')? 'has-error':'' }}>
                                    <label class="control-label">Land</label>
                                    <input type="text" class="form-control" id="steuer_nr"
                                           value="{{ old('land')? old('land') : $user->land }}"
                                           name="land">
                                    {!! $errors->has('land')? '<p class="help-block">'.$errors->first('land').'</p>':'' !!}
                                </div>

                                <div class="col-lg-3 col-md-6 col-sm-6  form-group label-floating"{{ $errors->has('ausweis')? 'has-error':'' }}>
                                    <label class="control-label">Ausweisnummer</label>
                                    <input type="text" class="form-control" id="familienstand"
                                           value="{{ old('ausweis')? old('ausweis') : $user->ausweis }}"
                                           name="ausweis">
                                    {!! $errors->has('ausweis')? '<p class="help-block">'.$errors->first('ausweis').'</p>':'' !!}
                                </div>

                                <div class="col-lg-3 col-md-6 col-sm-6  form-group label-floating"{{ $errors->has('behorde')? 'has-error':'' }}>
                                    <label class="control-label">Austellende Behörde</label>
                                    <input type="text" class="form-control" id="behorde"
                                           value="{{ old('behorde')? old('behorde') : $user->behorde }}"
                                           name="behorde">
                                    {!! $errors->has('behorde')? '<p class="help-block">'.$errors->first('behorde').'</p>':'' !!}
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-6  form-group label-floating"{{ $errors->has('name')? 'has-error':'' }}>
                                    <label class="control-label">Partner-ID</label>
                                    <input type="text" class="form-control" id="seller-id" disabled
                                           value="{{ old('name')? old('name') : $user->name }}"
                                           name="name">
                                    {!! $errors->has('name')? '<p class="help-block">'.$errors->first('name').'</p>':'' !!}
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-6  form-group label-floating"{{ $errors->has('erfahrung')? 'has-error':'' }}>
                                    <label class="control-label">Erfahrung</label>
                                    <input type="text" class="form-control" id="erfahrung" disabled
                                           value="{{ old('erfahrung')? old('erfahrung') : $user->erfahrung }}"
                                           name="erfahrung">
                                    {!! $errors->has('erfahrung')? '<p class="help-block">'.$errors->first('erfahrung').'</p>':'' !!}
                                </div>

                            <div class="margin-2 left">
                                 <div class="fileinput fileinput-new margin-top-5" data-provides="fileinput">
                                        <div class="fileinput-new thumbnail img-circle {{ $errors->has('photo')? 'has-error':'' }}">
                                            <img src="{{ $user->get_gravatar(100) }}">
                                        </div>
                                        <div class="fileinput-preview fileinput-exists thumbnail img-circle"></div>
                                        <div> <span> <input type="file" id="photo" name="photo" class="filestyle"> </span>
                                                        {!! $errors->has('photo')? '<p class="help-block">'.$errors->first('photo').'</p>':'' !!}                                                    </span>
                                        </div>
                                    </div>

                                    <button type="submit" class="ac-ln-button-2 margin-top-2">Profil aktualisieren
                                    </button>
                            </div>
                            </div>





                        {!! Form::close() !!}

                    </div>

                </div>
            </div>
        </div>
        </div>
    </section>

@endsection

