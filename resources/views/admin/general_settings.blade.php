@extends('layouts.dashboard')

@section('title') @if(! empty($title)) {{$title}} @endif - @parent @endsection

@section('content')
    <section class="slide" style="background:#f2f2f2">
        <div class="content">
            <div class="container">
                <div class="wrap">

                    <div class="fix-8-12 text-black toCenter margin-top-10">
                        <h1 class="ae-1"><strong>Allgemeine Einstellungen</strong></h1>
                        <div class="ae-2 light small"><p>Hier dreht sich alles um dich. Dein Name, deine Adresse, dein
                                Profil.
                                Alles, was dein Leben einzigartig macht, kannst du hier perfekt verwalten.</p></div>
                    </div>


                        <div class="fix-10-12 name-67 ae-1">
                            {{ Form::open(['route'=>'save_settings', 'files' => true]) }}

                                <div class="form-group col-sm-12">
                                <label class="control-label">Website Name</label>
                                <input type="text" class="form-control" id="site_name" value="{{ old('site_name')? old('site_name') : get_option('site_name') }}" name="site_name" placeholder="@lang('app.site_name')">
                                {!! $errors->has('site_name')? '<p class="help-block">'.$errors->first('site_name').'</p>':'' !!}</div>

                                <div class="form-group col-sm-12">
                                <label class="control-label">Website Titel</label>
                                <input type="text" class="form-control" id="site_title" value="{{ old('site_title')? old('site_title') : get_option('site_title') }}" name="site_title" placeholder="@lang('app.site_title')">
                                {!! $errors->has('site_title')? '<p class="help-block">'.$errors->first('site_title').'</p>':'' !!}</div>

                                <div class="form-group col-sm-12">
                                <label class="control-label">Email</label>
                                <input type="text" class="form-control" id="email_address" value="{{ old('email_address')? old('email_address') : get_option('email_address') }}" name="email_address" placeholder="@lang('app.email_address')">
                                {!! $errors->has('email_address')? '<p class="help-block">'.$errors->first('email_address').'</p>':'' !!}
                                <p class="light micro text-red">Für administrative Zwecke</p></div>


                            <div class="form-group col-sm-12">
                                <label for="default_timezone" class="control-label">Zeitzone</label>
                                    <select class="form-control select2" name="default_timezone" id="default_timezone">
                                        @php $saved_timezone = get_option('default_timezone'); @endphp
                                        @foreach(timezone_identifiers_list() as $key=>$value)
                                            <option value="{{ $value }}" {{ $saved_timezone == $value? 'selected':'' }}>{{ $value }}</option>
                                        @endforeach

                                    </select>
                                    {!! $errors->has('default_timezone')? '<p class="help-block">'.$errors->first('default_timezone').'</p>':'' !!}
                                    <p class="light micro text-red">@lang('app.default_timezone_help_text')</p>
                            </div>



                            <div class="form-group col-sm-12">
                                <label for="email_address">Datum Format</label>
                                    <fieldset class="margin-1">
                                        @php $saved_date_format = get_option('date_format'); @endphp

                                        <label><input type="radio" value="F j, Y" name="date_format" {{ $saved_date_format == 'F j, Y'? 'checked':'' }}> {{ date('F j, Y') }}<code></code></label>
                                        <label><input type="radio" value="Y-m-d" name="date_format" {{ $saved_date_format == 'Y-m-d'? 'checked':'' }}> {{ date('Y-m-d') }}<code></code></label>

                                        <label><input type="radio" value="m/d/Y" name="date_format" {{ $saved_date_format == 'm/d/Y'? 'checked':'' }}> {{ date('m/d/Y') }}<code></code></label>

                                        <label><input type="radio" value="d/m/Y" name="date_format" {{ $saved_date_format == 'd/m/Y'? 'checked':'' }}> {{ date('d/m/Y') }}<code></code></label>

                                        <label><input type="radio" value="custom" name="date_format" {{ $saved_date_format == 'custom'? 'checked':'' }}> Custom:</label>
                                        <input type="text" value="{{ get_option('date_format_custom') }}" class="form-control margin-1" id="date_format_custom" name="date_format_custom" />
                                    </fieldset>
                            </div>

                            <div class="form-group col-sm-12">
                                <label for="email_address">Zeit Format</label>
                                    <fieldset class="margin-1">
                                        <label><input type="radio" value="g:i a" name="time_format" {{ get_option('time_format') == 'g:i a'? 'checked':'' }}> {{ date('g:i a') }}<code></code></label>
                                        <label><input type="radio" value="g:i A" name="time_format" {{ get_option('time_format') == 'g:i A'? 'checked':'' }}> {{ date('g:i A') }}<code></code></label>

                                        <label><input type="radio" value="H:i" name="time_format" {{ get_option('time_format') == 'H:i'? 'checked':'' }}> {{ date('H:i') }}<code></code></label>

                                        <label><input type="radio" value="custom" name="time_format" {{ get_option('time_format') == 'custom'? 'checked':'' }}> Custom:</label>
                                        <input type="text" value="{{ get_option('time_format_custom') }}" class="form-control margin-1" id="time_format_custom" name="time_format_custom" />
                                    </fieldset>
                            </div>

                            <div class="form-group col-sm-12">
                                <label for="currency_sign" class="control-label label-floating">Währung</label>
                                    <?php $current_currency = get_option('currency_sign'); ?>
                                    <select name="currency_sign" class="form-control select2">
                                        @foreach(get_currencies() as $code => $name)
                                            <option value="{{ $code }}"  {{ $current_currency == $code? 'selected':'' }}> {{ $code }} </option>
                                        @endforeach
                                    </select>
                            </div>

                            <div class="form-group col-sm-12">
                                <label for="email_address" class="control-label label-floating">@lang('app.verification_email_after_registration')</label>
                                    <fieldset class="margin-1">
                                        <label><input type="radio" value="1" name="verification_email_after_registration" {{ get_option('verification_email_after_registration') == '1'? 'checked':'' }}> @lang('app.yes') </label> <br />
                                        <label><input type="radio" value="0" name="verification_email_after_registration" {{ get_option('verification_email_after_registration') == '0'? 'checked':'' }}> @lang('app.no') </label> <br />
                                    </fieldset>
                            </div>


                            <button type="submit" id="settings_save_btn" class="ac-ln-button-2">Sichern</button>

                            {{ Form::close() }}
                        </div>


            </div>   <!-- /#wrapper -->


        </div> <!-- /#container -->
    </div>
    </section>
@endsection


@section('page-js')
    <script>
        $(document).ready(function(){

            $('input[type="checkbox"], input[type="radio"]').click(function(){
                var input_name = $(this).attr('name');
                var input_value = 0;
                if ($(this).prop('checked')){
                    input_value = $(this).val();
                }
                $.ajax({
                    url : '{{ route('save_settings') }}',
                    type: "POST",
                    data: { [input_name]: input_value, '_token': '{{ csrf_token() }}' },
                });
            });


            $('input[name="date_format"]').click(function(){
                $('#date_format_custom').val($(this).val());
            });
            $('input[name="time_format"]').click(function(){
                $('#time_format_custom').val($(this).val());
            });

            /**
             * Send settings option value to server
             */
            $('#settings_save_btn').click(function(e){
                e.preventDefault();

                var this_btn = $(this);
                this_btn.attr('disabled', 'disabled');

                var form_data = this_btn.closest('form').serialize();
                $.ajax({
                    url : '{{ route('save_settings') }}',
                    type: "POST",
                    data: form_data,
                    success : function (data) {
                        if (data.success == 1){
                            this_btn.removeAttr('disabled');
                            toastr.success(data.msg, '@lang('app.success')', toastr_options);
                        }
                    }
                });
            });

        });
    </script>
@endsection