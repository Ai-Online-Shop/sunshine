@extends('layouts.app')
@section('content')

    @if($campaign->min_amount)
        <section class="slide background-blue autoHeight">
            <div class="content">
                <div class="container">
                    <div class="wrap">

                        <ul class="grid fix-8-12 later fixedSpaces equal left">
                            <li class="col-6-12 fromCenter">
                                <div class="box-67">
                                    <div class="thumbnail-67">
                                        <img src="{{ asset('assets/svg/paypal-card.svg') }}"
                                             class="wide"/>
                                    </div>
                                    <div class="equalElement table wide">
                                        <div class="cell">
                                            <h2 class="light margin-top-2"><strong>PayPal</strong></h2>
                                            {{ Form::open(['route' => 'payment_paypal_receive']) }}
                                            <input type="hidden" name="cmd" value="_xclick"/>
                                            <input type="text" class=" text-center hidden " id="name" value="{{ $domenic4->nachname }}"
                                                   name="name">
                                            <input type="text" class=" text-center hidden " id="widmung"
                                                   value="{{ $domenic5->ccv }}" name="widmung">
                                            <input type="text" class=" text-center hidden" id="gutschein"
                                                   value="{{ $domenic3->amount }}"
                                                   name="gutschein">
                                            <input type="text" class=" text-center hidden " id="gutschein_id"
                                                   value="{{ $domenic7->gutschein_id }}" name="gutschein_id">
                                            <input type="text" class=" text-center hidden" id="versandart"
                                                   value="{{ $domenic2->versandart }}"
                                                   name="versandart">
                                            <input type="text" class="text-center hidden" id="email" value="{{ $domenic6->email }}"
                                                   name="email">
                                            <input type="text" class=" text-center hidden" id="adresse"
                                                   value="{{ $domenic8->adresse }}"
                                                   name="adresse">
                                            <input type="text" class=" text-center hidden" id="postleitzahl"
                                                   value="{{ $domenic9->postleitzahl }}"
                                                   name="postleitzahl">
                                            <input type="text" class=" text-center hidden" id="stadt"
                                                   value="{{ $domenic10->stadt }}"
                                                   name="stadt">
                                            <input type="text" class=" text-center hidden" id="land"
                                                   value="{{ $domenic11->land }}"
                                                   name="land">
                                            <input type="text" class=" text-center hidden" id="created_at_two"
                                                   value="{{ $domenic12->created_at }}"
                                                   name="created_at_two">

                                            <input type="hidden" name="no_note" value="1"/>
                                            <input type="hidden" name="lc" value="UK"/>
                                            <input type="hidden" name="currency_code"
                                                   value="{{get_option('currency_sign')}}"/>
                                            <input type="hidden" name="bn"
                                                   value="PP-BuyNowBF:btn_buynow_LG.gif:NonHostedGuest"/>
                                            <button type="submit"
                                                    class="ac-ln-button-2 button ">
                                                Auswählen
                                            </button>
                                            {{ Form::close() }}
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="col-6-12">
                                <div class="box-67">
                                    <div class="thumbnail-67">
                                        <img src="{{ asset('assets/svg/iban-card.svg') }}" class="wide"/>
                                    </div>
                                    <div class="equalElement table wide">
                                        <div class="cell">
                                            <h2 class="light margin-top-2"><strong>Vorkasse</strong></h2>
                                            <input type="hidden"  />
                                            <button class="ac-ln-button-green button"
                                                    id="bankTransferBtn">Auswählen
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            </div>
        </section>
    @endif

    <section class="slide bankPaymetWrap blue" style="display: none;">
        <div class="content">
            <div class="container">
                <div class="wrap">

                    <div class="fix-10-12">
                        <h1 class="ae-1"><strong>Anleitung</strong></h1>
                        <div class="ae-2"><p>Tragen Sie ihre Daten in das beiliegende Formular ein. Bestätigen Sie die Bezahlung und überweisen
                                Sie uns das Geld binnen 2 Werktagen.</p></div>

                    </div>

                    <ul class="grid later fixedSpaces equal left margin-top-5">
                        <li class="col-6-12 fromCenter">
                            <div class="name-67">

                                    <h2 class=" text-black"><strong>Unsere Bankdaten</strong></h2>


                                <table class="table text-black">
                                    <tr>
                                        <th>BIC</th>
                                        <td>{{get_option('bank_swift_code') }}</td>
                                    </tr>
                                    <tr>
                                        <th>Kontonummer</th>
                                        <td>{{get_option('account_number') }}</td>
                                    </tr>
                                    <tr>
                                        <th>Unsere Bank</th>
                                        <td>{{get_option('branch_name') }}</td>
                                    </tr>
                                    <tr>
                                        <th>Adresse der Bank</th>
                                        <td>{{get_option('branch_address') }}</td>
                                    </tr>
                                    <tr>
                                        <th>Zahlungsempfänger</th>
                                        <td>{{get_option('account_name') }}</td>
                                    </tr>
                                    <tr>
                                        <th>IBAN</th>
                                        <td>{{get_option('iban') }}</td>
                                    </tr>
                                    <tr>
                                        <th>Verwendungszweck</th>
                                        <td>Sun-Gutschein/2017</td>
                                    </tr>
                                </table>

                            </div>
                        </li>
                        <li class="col-6-12 fromCenter">
                            <div class="name-67">
                                <h2 class=" text-black"><strong>Ihre Bankdaten</strong></h2>
                                <div id="bankTransferStatus"></div>

                                {{ Form::open(['route'=>'bank_transfer_submit', 'id'=>'bankTransferForm', 'class' => 'form-horizontal', 'files' => true]) }}

                                <div class="form-group {{ $errors->has('bank_swift_code')? 'has-error':'' }}">
                                    <label for="bank_swift_code" class="control-label">
                                        BIC <span
                                                class="field-required">*</span></label>
                                    <input type="text" class="form-control" id="bank_swift_code"
                                           value="{{ old('bank_swift_code') }}" name="bank_swift_code"
                                           placeholder="BIC">
                                    {!! $errors->has('bank_swift_code')? '<p class="help-block">'.$errors->first('bank_swift_code').'</p>':'' !!}
                                </div>


                                <div class="form-group {{ $errors->has('branch_name')? 'has-error':'' }}">
                                    <label for="branch_name" class="control-label">Bank
                                        <span class="field-required">*</span></label>
                                    <input type="text" class="form-control" id="branch_name"
                                           value="{{ old('branch_name') }}" name="branch_name"
                                           placeholder="Bank">
                                    {!! $errors->has('branch_name')? '<p class="help-block">'.$errors->first('branch_name').'</p>':'' !!}
                                </div>

                                <div class="form-group {{ $errors->has('branch_address')? 'has-error':'' }}">
                                    <label for="branch_address"
                                           class=" control-label">Bank Adresse <span
                                                class="field-required">*</span></label>
                                    <input type="text" class="form-control" id="branch_address"
                                           value="{{ old('branch_address') }}" name="branch_address"
                                           placeholder="Bank Adresse">
                                    {!! $errors->has('branch_address')? '<p class="help-block">'.$errors->first('branch_address').'</p>':'' !!}
                                </div>

                                <div class="form-group {{ $errors->has('account_name')? 'has-error':'' }}">
                                    <label for="account_name"
                                           class="control-label">Kontoinhaber <span
                                                class="field-required">*</span></label>
                                    <input type="text" class="form-control" id="account_name"
                                           value="{{ old('account_name') }}" name="account_name"
                                           placeholder="Kontoinhaber">
                                    {!! $errors->has('account_name')? '<p class="help-block">'.$errors->first('account_name').'</p>':'' !!}
                                </div>

                                <div class="form-group {{ $errors->has('iban')? 'has-error':'' }}">
                                    <label for="iban" class="control-label">IBAN</label>
                                    <input type="text" class="form-control" id="iban" value="{{ old('iban') }}"
                                           name="iban" placeholder="IBAN">
                                    {!! $errors->has('iban')? '<p class="help-block">'.$errors->first('iban').'</p>':'' !!}
                                </div>
                                <input type="text" class=" text-center hidden " id="name" value="{{ $domenic4->nachname }}"
                                       name="name">
                                <input type="text" class=" text-center hidden " id="gutschein_id"
                                       value="{{ $domenic7->gutschein_id }}" name="gutschein_id">
                                <input type="text" class=" text-center hidden " id="widmung"
                                       value="{{ $domenic5->ccv }}" name="widmung">
                                <input type="text" class=" text-center hidden" id="gutschein"
                                       value="{{ $domenic3->amount }}"
                                       name="gutschein">
                                <input type="text" class=" text-center hidden" id="versandart"
                                       value="{{ $domenic2->versandart }}"
                                       name="versandart">
                                <input type="text" class="form-control text-center hidden" id="email" value="{{ $domenic6->email }}"
                                       name="email">

                                <input type="text" class=" text-center hidden" id="adresse"
                                       value="{{ $domenic8->adresse }}"
                                       name="adresse">
                                <input type="text" class=" text-center hidden" id="postleitzahl"
                                       value="{{ $domenic9->postleitzahl }}"
                                       name="postleitzahl">
                                <input type="text" class=" text-center hidden" id="stadt"
                                       value="{{ $domenic10->stadt }}"
                                       name="stadt">
                                <input type="text" class=" text-center hidden" id="land"
                                       value="{{ $domenic11->land }}"
                                       name="land">
                                <input type="text" class=" text-center hidden" id="created_at_two"
                                       value="{{ $domenic12->created_at }}"
                                       name="created_at_two">
                                <button type="submit" class="button blue">Jetzt Bankdaten hinterlegen
                                </button>
                                <p class="small text-black">Hinweis: Nachdem Sie "Jetzt Bankdaten hinterlegen" geklickt haben, dauert es ca. 10 Sekunden bis Sie weitergeleitet werden.</p>
                            </div>
                        </li>
                    </ul>

                </div>
            </div>
        </div>
    </section>
    <script>
        $(function () {
            $('.stripe-button').on('token', function (e, token) {
                $('#stripeForm').replaceWith('');
                $.ajax({
                    url: '{{route('payment_stripe_receive')}}',
                    type: "POST",
                    data: {stripeToken: token.id, _token: '{{ csrf_token() }}'},
                    success: function (data) {
                        if (data.success == 1) {
                            $('.checkout-wrap').html(data.response);
                            toastr.success(data.msg, '@lang('app.success')', toastr_options);
                        }
                    }
                });
            });
        });
        $('#bankTransferBtn').click(function () {
            $('.bankPaymetWrap').slideToggle();
        });
        $('.input-cart-iban').on('keyup change', function () {
            $t = $(this);
            if ($t.val().length > 3) {
                $t.next().focus();
            }
            var card_number = '';
            $('.input-cart-iban').each(function () {
                card_number += $(this).val() + ' ';
                if ($(this).val().length == 4) {
                    $(this).next().focus();
                }
            })
            $('.credit-card-box .iban').html(card_number);
        });
        $('#account_name').on('keyup change', function () {
            $t = $(this);
            $('.credit-card-box .account_name div').html($t.val());
        });
        $('#bank_swift_code').on('focus', function () {
            $('.credit-card-box').addClass('hover');
        }).on('blur', function () {
            $('.credit-card-box').removeClass('hover');
        }).on('keyup change', function () {
            $('.ccv div').html($(this).val());
        });
        /*--------------------
         CodePen Tile Preview
         --------------------*/
        setTimeout(function () {
            $('#bank_swift_code').focus().delay(1000).queue(function () {
                $(this).blur().dequeue();
            });
        }, 500);
    </script>
@endsection
