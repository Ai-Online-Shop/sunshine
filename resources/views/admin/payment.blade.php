@extends('layouts.app')
@section('content')
    <section class="slide background-blue">
        <div class="content">
            <div class="container">
                <div class="wrap">
                    <div class="fix-6-12">
                        <div class="name-67">
                            <div class="margin-2">
                                <p class="fw-700 margin-bottom-1 text-green cropTop">
                                    🔒 SSL Verschlüsselter Checkout</p>
                                <button class="green button wide small popupTrigger cropBottom round"
                                        data-popup-id="vorkasse">Vorkasse
                                </button>
                                <p class="fw-700 margin-bottom-1 margin-top-1 text-green">oder</p>
                                {{ Form::open(['route'=>'sofort']) }}
                                <button class="button wide pink small round" type="submit">
                                    <em>SOFORT</em>
                                </button>
                                {{ Form::close() }}
                                <div id="paypal-button-container"></div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <div class="popup black" data-popup-id="vorkasse">
        <div class="content popupContent">
            <div class="container">
                <div class="wrap spaces">
                    <div class="fix-12-12 left">
                        <div class="fix-10-12">
                            <h1 class="ae-1"><strong>Anleitung</strong></h1>
                            <div class="ae-2"><p>Bestätigen Sie die Bezahlung und überweisen
                                    Sie uns das Geld binnen 2 Werktagen. Drücken Sie auf "Jetzt kaufen" um den Vorgang
                                    zu bestätigen.</p></div>
                        </div>

                        <ul class="grid later fixedSpaces equal left margin-top-5">
                            <li class="col-12-12 fromCenter">
                                <div class="name-67">

                                    <h2 class=" text-black"><strong>Unsere Bankdaten</strong></h2>
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
                                    <a href="{{ route('vorkasse_success') }}" class="button blue">Jetzt kaufen
                                    </a>
                                    <a class="button black" data-popup-action="close">Zurück</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://www.paypalobjects.com/api/checkout.js"></script>
    <script>
        paypal.Button.render({

            // Set your environment

            env: 'production', // sandbox | production

            // Specify the style of the button

            style: {
                layout: 'vertical',  // horizontal | vertical
                size: 'responsive',    // medium | large | responsive
                shape: 'pill',      // pill | rect
                color: 'gold'       // gold | blue | silver | black
            },

            // Specify allowed and disallowed funding sources
            //
            // Options:
            // - paypal.FUNDING.CARD
            // - paypal.FUNDING.CREDIT
            // - paypal.FUNDING.ELV

            funding: {
                allowed: [paypal.FUNDING.CARD],
                disallowed: []
            },

            // PayPal Client IDs - replace with your own
            // Create a PayPal app: https://developer.paypal.com/developer/applications/create

            client: {
                sandbox: 'AdDpHfxM96oBMBuVqZbnY9VWEeDPseloJRBXDtVObDvTdMMFJgzgrtWb3t7HOeTy_e6FNZeni63Ov9uZ',
                production: 'AQ0SvXtGvyqHscuJx4K9INxm44ul547cqZVgJglNCkRin8WmeRI5eiJY2ZLcOYlciHG2di1dyJHKC_50'
            },
            payment: function (data, actions) {
                return actions.payment.create({
                    payment: {
                        transactions: [
                            {
                                amount: {total: '{!! number_format(($total), 2, ".", "") !!}', currency: 'EUR'}
                            }
                        ],
                        redirect_urls: {
                            return_url: 'https://sunshinewellness.de/paypal-success',
                            cancel_url: 'https:sunshinewellness.de/checkout'
                        }
                    }
                });
            },
            onAuthorize: function (data, actions) {
                // Make a call to the REST API to execute the payment
                return actions.payment.execute().then(function () {
                        actions.redirect();
                    }
                );
            },
            onCancel: function (data, actions) {
                actions.redirect();
            },
        }, '#paypal-button-container');
    </script>

@endsection
