@extends('layouts.dashboard')

@section('content')
    <section class="slide" style="background:#f2f2f2">
        <div class="content">
            <div class="container">
                <div class="wrap">

                <div class="col-md-12">
                    <div class="name-67 ae-1">

                        <div class="width-4 margin-bottom-4 margin-2 left">
                            <div class="gradient-blue"></div>
                            <h2 class=""><strong>Kategorie bearbeiten</strong></h2>
                            <p class="light micro">Bitte bearbeiten Sie ihre Kategorie hier.</p>
                        </div>

                            @include('admin.flash_msg')

                            {{ Form::open(['class' => 'form-horizontal', 'files' => true]) }}

                            <div class="col-md-12">
                                <div class="form-group {{ $errors->has('category_name')? 'has-error':'' }}">
                                    <label for="category_name" class="control-label">Kategorie Name</label>
                                        <input type="text" class="form-control" id="category_name" value="{{ $category->category_name }}" name="category_name" placeholder="@lang('app.category_name')">
                                        {!! $errors->has('category_name')? '<p class="help-block">'.$errors->first('category_name').'</p>':'' !!}
                                </div>
                            </div>

                            <button type="submit" id="settings_save_btn" class="ac-ln-button-2 margin-right-1">Einstellungen speichern</button>
                            <a href="{{ route('categories') }}" class="ac-ln-button-2">Zurück</a>

                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>
    </div>
    </section>
@endsection
