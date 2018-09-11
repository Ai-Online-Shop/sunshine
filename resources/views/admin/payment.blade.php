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
                                            <input type="email" id="email" value="{{ $domenic6 }}"
                                                   name="email" style="display: none !important;">
                                            <input type="hidden" name="no_note" value="1"/>
                                            <input type="hidden" name="lc" value="UK"/>
                                            <input type="hidden" name="currency_code"
                                                   value="{{get_option('currency_sign')}}"/>
                                            <input type="hidden" name="bn"
                                                   value="PP-BuyNowBF:btn_buynow_LG.gif:NonHostedGuest"/>
                                            <button type="submit"
                                                    class="blue button small">
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
                                            <button class="green button small"
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
                        <div class="ae-2"><p>Bestätigen Sie die Bezahlung und überweisen
                                Sie uns das Geld binnen 2 Werktagen.</p></div>

                    </div>

                    <ul class="grid later fixedSpaces equal left margin-top-5">
                        <li class="col-12-12 fromCenter">
                            <div class="name-67">

                                <h2 class=" text-black"><strong>Unsere Bankdaten</strong></h2>
                                <div id="bankTransferStatus"></div>
                                {{ Form::open(['route'=>'bank_transfer_submit', 'id'=>'bankTransferForm', 'class' => 'form-horizontal', 'files' => true]) }}
                                <input type="text" id="bank_swift_code"
                                       value="123" name="bank_swift_code" style="display: none !important;">
                                <input type="text" id="branch_name"
                                       value="123" name="branch_name" style="display: none !important;">
                                <input type="text" id="branch_address"
                                       value="123" name="branch_address" style="display: none !important;">
                                <input type="text" id="account_name"
                                       value="123" name="account_name" style="display: none !important;">
                                <input type="text" id="iban" value="123"
                                       name="iban" style="display: none !important;">
                                <input type="email" id="email" value="{{ $domenic6 }}"
                                       name="email" style="display: none !important;">
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
                                        <td>{{ $domenic7->gutschein_id }}</td>
                                    </tr>
                                </table>
                                <button type="submit" class="button blue">Jetzt kaufen
                                </button>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <script>
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
