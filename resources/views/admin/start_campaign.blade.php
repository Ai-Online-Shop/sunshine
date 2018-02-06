@extends('layouts.dashboard')

@section('content')
    <section class="slide" style="background:#f2f2f2">
        <div class="content">
            <div class="container">
                <div class="wrap">

                    <div class="fix-8-12 text-black toCenter margin-top-10">
                        <h1 class="ae-1"><strong>Kampagne erstellen</strong></h1>
                    </div>

                    <div class="name-67 ae-1">

                        <div class="width-4 margin-bottom-4 margin-2 left">
                            <div class="gradient-blue"></div>
                            <h2 class=""><strong>Vorgehensweise</strong></h2>
                            <p class="light micro">Bitte aktualisiere deine Daten und klicke anschließend auf den Button.</p>
                        </div>

                        <hr> @include('admin.flash_msg')

                            {{ Form::open(['id'=>'startCampaignForm', 'class' => 'form-horizontal', 'files' => true]) }}

                                <div class="col-md-6">
                                    <div class="form-group  {{ $errors->has('category')? 'has-error':'' }}">
                                        <label for="category" class="control-label">Kategorie</label>
                                            <select class="form-control select2" name="category">
                                                <option value="">@lang('app.select_a_category')</option>
                                                @foreach($categories as $category)
                                                    <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                                                @endforeach
                                            </select>
                                            {!! $errors->has('category')? '<p class="help-block">'.$errors->first('category').'</p>':'' !!}
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group {{ $errors->has('title')? 'has-error':'' }}">
                                        <label for="title" class="control-label">Titel der Kampagne<span
                                                    class="field-required">*</span></label>
                                        <input type="text" class="form-control" id="title" value="{{ old('title') }}"
                                               name="title" placeholder="@lang('app.great_title_info')">
                                        {!! $errors->has('title')? '<p class="help-block">'.$errors->first('title').'</p>':'' !!}
                                    </div>
                                </div>

                                <div class="col-md-6">

                                    <div class="form-group {{ $errors->has('min_amount')? 'has-error':'' }}">
                                        <label for="min_amount" class="control-label">Direkt: Minimal Investment</label>
                                        <input type="text" class="form-control" id="min_amount"
                                               value="{{ old('min_amount') }}" name="min_amount"
                                               placeholder="@lang('app.min_amount')">
                                        {!! $errors->has('min_amount')? '<p class="help-block">'.$errors->first('min_amount').'</p>':'' !!}
                                    </div>
                                </div>
                                <div class="col-md-6">

                                    <div class="form-group {{ $errors->has('max_amount')? 'has-error':'' }}">
                                        <label for="max_amount" class="control-label">Direkt: Maximal Investment</label>
                                        <input type="text" class="form-control" id="max_amount"
                                               value="{{ old('max_amount') }}" name="max_amount"
                                               placeholder="@lang('app.max_amount')">
                                        {!! $errors->has('max_amount')? '<p class="help-block">'.$errors->first('max_amount').'</p>':'' !!}
                                    </div>
                                </div>


                                <div class="col-md-6">

                                    <div class="form-group {{ $errors->has('recommended_amount')? 'has-error':'' }}">
                                        <label for="recommended_amount"
                                               class="control-label">Direkt: Bestes Investment</label>
                                        <input type="text" class="form-control" id="recommended_amount"
                                               value="{{ old('recommended_amount') }}" name="recommended_amount"
                                               placeholder="@lang('app.recommended_amount')">
                                        {!! $errors->has('recommended_amount')? '<p class="help-block">'.$errors->first('recommended_amount').'</p>':'' !!}
                                    </div>
                                </div>
                                <div class="col-md-6">

                                    <div class="form-group {{ $errors->has('amount_prefilled')? 'has-error':'' }}">
                                        <label for="amount_prefilled"
                                               class="control-label">Direkt: Felder|250|750|1500</label>
                                        <input type="text" class="form-control" id="amount_prefilled"
                                               value="{{ old('amount_prefilled') }}" name="amount_prefilled"
                                               placeholder="@lang('app.amount_prefilled_info_text')">
                                        {!! $errors->has('amount_prefilled')? '<p class="help-block">'.$errors->first('amount_prefilled').'</p>':'' !!}
                                    </div>
                                </div>
                                <div class="col-md-6">

                                    <div class="form-group {{ $errors->has('amount_sparplan')? 'has-error':'' }}">
                                        <label for="amount_sparplan"
                                               class="control-label">Sparplan: Mtl. Rate</label>
                                        <input type="text" class="form-control" id="amount_sparplan"
                                               value="{{ old('amount_sparplan') }}" name="amount_sparplan"
                                               placeholder="250/415/830">
                                        {!! $errors->has('amount_sparplan')? '<p class="help-block">'.$errors->first('amount_sparplan').'</p>':'' !!}
                                    </div>
                                </div>
                                <div class="col-md-6">

                                    <div class="form-group {{ $errors->has('laufzeit_sparplan')? 'has-error':'' }}">
                                        <label for="laufzeit_sparplan"
                                               class="control-label">Sparplan: Laufzeit</label>
                                        <input type="text" class="form-control" id="laufzeit_sparplan"
                                               value="{{ old('laufzeit_sparplan') }}" name="laufzeit_sparplan"
                                               placeholder="Laufzeit">
                                        {!! $errors->has('laufzeit_sparplan')? '<p class="help-block">'.$errors->first('laufzeit_sparplan').'</p>':'' !!}
                                    </div>
                                </div>

                                <div class="col-md-6">

                                    <div class="form-group {{ $errors->has('zielsumme_sparplan')? 'has-error':'' }}">
                                        <label for="zielsumme_sparplan"
                                               class="control-label">Sparplan: Zielsumme</label>
                                        <input type="text" class="form-control" id="zielsumme_sparplan"
                                               value="{{ old('zielsumme_sparplan') }}" name="zielsumme_sparplan"
                                               placeholder="">
                                        {!! $errors->has('zielsumme_sparplan')? '<p class="help-block">'.$errors->first('zielsumme_sparplan').'</p>':'' !!}
                                    </div>
                                </div>
                                <div class="col-md-6">

                                    <div class="form-group {{ $errors->has('auszahlungssumme_sparplan')? 'has-error':'' }}">
                                        <label for="auszahlungssumme_sparplan"
                                               class="control-label">Sparplan: Auszahlungssumme</label>
                                        <input type="text" class="form-control" id="auszahlungssumme_sparplan"
                                               value="{{ old('auszahlungssumme_sparplan') }}" name="auszahlungssumme_sparplan"
                                               placeholder="">
                                        {!! $errors->has('auszahlungssumme_sparplan')? '<p class="help-block">'.$errors->first('auszahlungssumme_sparplan').'</p>':'' !!}
                                    </div>
                                </div>

                                <div class="col-md-6">

                                    <div class="form-group {{ $errors->has('zinsen_amount_sparplan')? 'has-error':'' }}">
                                        <label for="zinsen_amount_sparplan"
                                               class="control-label">Sparplan: Zinsen</label>
                                        <input type="text" class="form-control" id="zinsen_amount_sparplan"
                                               value="{{ old('zinsen_amount_sparplan') }}" name="zinsen_amount_sparplan"
                                               placeholder="">
                                        {!! $errors->has('zinsen_amount_sparplan')? '<p class="help-block">'.$errors->first('zinsen_amount_sparplan').'</p>':'' !!}
                                    </div>
                                </div>
                                <div class="col-md-6">

                                    <div class="form-group {{ $errors->has('zinssatz_sparplan')? 'has-error':'' }}">
                                        <label for="zinssatz_sparplan"
                                               class="control-label">Zinssatz</label>
                                        <input type="text" class="form-control" id="zinssatz_sparplan"
                                               value="{{ old('zinssatz_sparplan') }}" name="zinssatz_sparplan"
                                               placeholder="">
                                        {!! $errors->has('zinssatz_sparplan')? '<p class="help-block">'.$errors->first('zinssatz_sparplan').'</p>':'' !!}
                                    </div>
                                </div>

                                <div class="col-md-12">

                                    <div class="form-group {{ $errors->has('class')? 'has-error':'' }}">
                                        <label for="class"
                                               class="control-label">Popup Text</label>
                                        <input type="text" class="form-control" id="class"
                                               value="{{ old('class') }}" name="class"
                                               placeholder="">
                                        {!! $errors->has('class')? '<p class="help-block">'.$errors->first('class').'</p>':'' !!}
                                    </div>
                                </div>

                            <button type="submit" class="ac-ln-button-2">Neue Kampagne</button>

                            {{ Form::close() }}

                        </div>
                </div>
            </div>
        </div>
    </div>
    </section>
@endsection
