@extends('layouts.app')
@section('content')
        <section class="slide background-blue autoHeight">
            <div class="content">
                <div class="container">
                    <div class="wrap">
                        <div class="ae-1 fix-6-12">
                            <div class="name-67">
                                <div class="margin-2">

                                    <p class="fw-700 fix-5-12 margin-bottom-1 text-green cropTop">
                                        🔒 SSL Verschlüsselter Checkout</p>
                                    {{ Form::open(['route'=>'sofort']) }}
                                    <button class="buttonpaypal3" type="submit">
                                        <img style="max-width: 115px;"
                                             src="{{ asset('assets/svg/pink.svg') }}"/>
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
    <script src="https://www.paypalobjects.com/api/checkout.js"></script>
    <script>
        paypal.Button.render({

            // Set your environment

            env: 'production', // sandbox | production

            // Specify the style of the button

            style: {
                layout: 'vertical',  // horizontal | vertical
                size: 'large',    // medium | large | responsive
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
                sandbox: 'AV3VtIp3puVkNRIl3SmbsPKr60-4Aa-kHTnExB3jxv1OGNy9Wmki8xnvk2JcHRh7QV7Eok69_SNKmjLX',
                production: 'AbtfZJYlwoiuQuzLEojHucjLjLQ1cVpMgRU9r6fvNU4387aDooWIuB6IFvkGxkl2bKMBJHkC-P-P93TZ'
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
                            cancel_url: 'https://sunshinewellness.de/checkout'
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
