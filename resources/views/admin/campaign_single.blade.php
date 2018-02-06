@extends('layouts.app')
@section('content')
    <!-- TABS EXAMPLE -->
    <style>
        .background-red-pink {
            background: -webkit-linear-gradient(45deg, #eb6833 50%, #ea9043 50%);
            background: -webkit-linear-gradient(45deg, #eb6833 50%, #ea9043 50%);
        }

        .background-red-pink2 {
            background: #eb6833;
        }
    </style>


    <section class="slide background-red-pink">
        <div class="content">
            <div class="container">
                <div class="wrap fromBottomLeft">

                    @if($campaign->count() > 0)
                        <div class="fix-12-12">
                            <ul class="flex reverse">
                                <li class="col-6-12 left">
                                    <div class="name-67 ae-1">
                                        <div class="text-left">
                                            <div class="margin-2 center">
                                                <svg style="width:65px;height:65px">
                                                    <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                         xlink:href="#logo"></use>
                                                </svg>
                                                <h3 class="big">Bitte ausfüllen:</h3>
                                                <div class="gradient-line-3 gradient-left gradient-width-120 margin-bottom-2 margin-top-1"></div>

                                                @if($campaign->recommended_amount)
                                                    {{Form::open([ 'route' => 'add_to_cart', 'class' => 'form-horizontal'])}}

                                                    <input type="hidden" name="campaign_id"
                                                           value="{{$campaign->id}}"/>
                                                    <h3 class="margin-top-5 center"><strong>1. Gutscheinbetrag
                                                            eintragen</strong>
                                                    </h3>

                                                    <input type="number" step="1" min="20" max="10000"
                                                           name="amount" id="amount"
                                                           class="form-control"
                                                           value="{{$campaign->recommended_amount}}"/>

                                                    @if($campaign->amount_prefilled())
                                                        <h3 class="center margin-bottom-2"><strong>Häufig gewählte
                                                                Gutscheine</strong></h3>
                                                        <ul class="donate-amount ">
                                                            @foreach($campaign->amount_prefilled() as $amount_prefield)
                                                                <li class="center donate-amount-java col-lg-6 col-md-6 col-sm-6 col-xs-6"
                                                                    data-value="{{$amount_prefield}}">{{get_amount($amount_prefield)}}</li>
                                                            @endforeach
                                                        </ul>

                                                        <h3 class="left"><strong>2. Widmung eintragen (0,00€)</strong>
                                                        </h3>
                                                        <div class="form-group label-floating {{ $errors->has('ccv') ? ' has-error' : '' }}">
                                                            <input id="ccv" type="text" class="form-control"
                                                                   name="ccv" value="" required>

                                                            @if ($errors->has('ccv'))
                                                                <p class="text-ac-red micro">
                                                                    <strong>{{ $errors->first('ccv') }}</strong></p>
                                                            @endif
                                                        </div>

                                                        <h3 class="margin-top-1 left"><strong>3. Möchten Sie ein
                                                                Geschenkpaket?</strong>
                                                        </h3>


                                                        <select class="form-control select2" name="upsale" id="upsale"
                                                                required>
                                                            <option value="0">Bitte auswählen</option>
                                                            <option data-val='3.50' value="9.99">Wellness Paket
                                                                (9,99€)
                                                            </option>
                                                            <option value="0">Nein, Danke!</option>

                                                        </select>
                                                        <h3 class=" left"><strong>4. Bestimmen Sie die
                                                                Versandart</strong></h3>
                                                        <select class="form-control select2" name="versandart"
                                                                id="versandart" required>
                                                            <option value="0">Bitte auswählen</option>
                                                            <option value="0">Gutschein-PDF Download (0,00€)
                                                            </option>
                                                            <option value="3.50">DHL Versand (3,50€)</option>
                                                        </select>


                                                        <h3 class="margin-top-1 left"><strong>5. Informationen zum
                                                                Empfänger</strong></h3>
                                                        <p class="micro light left">(Bitte tragen Sie die Daten des
                                                            Empfängers
                                                            ein)</p>
                                                        <ul>
                                                            <div class="col-sm-12">
                                                                <div class="form-group label-floating {{ $errors->has('nachname') ? ' has-error' : '' }}">
                                                                    <li class="control-label">Name*</li>
                                                                    <input id="nachname" type="text"
                                                                           class="form-control"
                                                                           name="nachname" value="" required>
                                                                </div>
                                                                @if ($errors->has('nachname'))
                                                                    <p class="text-ac-red micro">
                                                                        <strong>{{ $errors->first('nachname') }}</strong>
                                                                    </p>
                                                                @endif
                                                            </div>
                                                            <div class="col-sm-12">
                                                                <div class="form-group label-floating {{ $errors->has('email') ? ' has-error' : '' }}">
                                                                    <li class="control-label">Email*</li>
                                                                    <input id="email" type="email"
                                                                           class="form-control"
                                                                           name="email" value="" required>
                                                                </div>
                                                                @if ($errors->has('email'))
                                                                    <p class="text-ac-red micro">
                                                                        <strong>{{ $errors->first('email') }}</strong>
                                                                    </p>
                                                                @endif
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <div class="form-group label-floating {{ $errors->has('adresse') ? ' has-error' : '' }}">
                                                                    <li class="control-label">Adresse*</li>
                                                                    <input id="adresse" type="text" class="form-control"
                                                                           name="adresse" value="" required>
                                                                </div>
                                                                @if ($errors->has('adresse'))
                                                                    <p class="text-ac-red micro">
                                                                        <strong>{{ $errors->first('adresse') }}</strong>
                                                                    </p>
                                                                @endif
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <div class="form-group label-floating {{ $errors->has('postleitzahl') ? ' has-error' : '' }}">
                                                                    <li class="control-label">Postleitzahl*</li>
                                                                    <input id="postleitzahl" type="number"
                                                                           class="form-control"
                                                                           name="postleitzahl" value=""
                                                                           required>
                                                                </div>
                                                                @if ($errors->has('postleitzahl'))
                                                                    <p class="text-ac-red micro">
                                                                        <strong>{{ $errors->first('postleitzahl') }}</strong>
                                                                    </p>
                                                                @endif
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <div class="form-group label-floating {{ $errors->has('stadt') ? ' has-error' : '' }}">
                                                                    <li class="control-label">Stadt*</li>
                                                                    <input id="stadt" type="text" class="form-control"
                                                                           name="stadt" value="" required>
                                                                </div>
                                                                @if ($errors->has('stadt'))
                                                                    <p class="text-ac-red micro">
                                                                        <strong>{{ $errors->first('stadt') }}</strong>
                                                                    </p>
                                                                @endif
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <div class="form-group label-floating {{ $errors->has('land') ? ' has-error' : '' }}">
                                                                    <li class="control-label">Land*</li>
                                                                    <input id="land" type="text" class="form-control"
                                                                           name="land" value="" required>
                                                                </div>
                                                                @if ($errors->has('land'))
                                                                    <p class="text-ac-red micro">
                                                                        <strong>{{ $errors->first('land') }}</strong>
                                                                    </p>
                                                                @endif
                                                            </div>
                                                        </ul>
                                                        <div class="left padding-top-2">
                                                            <button type="submit" class="green rounded small button">
                                                                Angebot
                                                                auswählen
                                                            </button>

                                                        </div>
                                                    @endif
                                                @endif
                                                {{Form::close()}}

                                            </div>
                                        </div>
                                    </div>

                                </li>
                                @endif
                                <li class="col-6-12">

                                    <div class="name-68 ae-3 text-white center">
                                        <svg class="margin-top-2" style="width:65px;height:65px">
                                            <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                 xlink:href="#logo"></use>
                                        </svg>
                                        <h3 class="big">Zusätzliche Informationen</h3>
                                        <div class="gradient-line-3 gradient-left gradient-width-120 margin-bottom-2 margin-top-1"></div>


                                        <h3 class="margin-top-5 center"><strong>Unser Bestseller: "Wellness
                                                Paket"</strong>
                                        </h3>
                                        <img src="{{ asset('assets/img/wellnesskorb.jpg') }}" class="margin-top-2"
                                             alt="Image"/>
                                        <h3 class="margin-top-2">Das ist im Wellness Paket (9,99€)</h3>

                                        <p class="small light">Set bestehend aus Bürste, Duschschwamm, Badeschwamm und
                                            Bimsstein.</p>
                                        <div class="gradient-line gradient-left gradient-width-120 margin-top-2"></div>


                                        <h3 class="margin-top-5 center"><strong>Ihre Gutschein Vorschau</strong>
                                            <p class="micro light">Das Design weicht vom Original ab!</p>
                                        </h3>
                                        <div>
                                            <div class="credit-card-box">
                                                <div class="flip">
                                                    <div class="front">
                                                        <div class="iban nachname">
                                                            <label></label>
                                                            <div></div>
                                                        </div>
                                                        <div class="account_name amount">
                                                            <label></label>
                                                            <div class="input-symbol-euro">{{$campaign->recommended_amount}}</div>
                                                        </div>
                                                    </div>
                                                    <div class="back">
                                                        <div class="strip"></div>
                                                        <div class="ccv">
                                                            <div class="small light"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <p class="small light">Sie können
                                            ihren Gutschein als PDF im
                                            Bereich "Gutschein
                                            Download" herunterladen.</p>


                                </li>
                            </ul>
                        </div>
                </div>
        </div>
        </div>
    </section>

    <section class="slide autoHeight background-red-pink2">
        <div class="content">
            <div class="container">
                <div class="wrap margin-top-0 padding-top-0 fromBottomLeft">

                    <div class="name-68 ae-7 margin-top-8 text-white center">
                        <div class="card-avatar">
                            <img class="img"
                                 src="{{ asset('assets/img/sun-1.jpg') }}"/>
                        </div>
                        <h2 class="cropBottom margin-top-2"><strong>Suwarat
                                Haag</strong></h2>
                        <p class="opacity-6 margin-top-1 light small">
                            Geschäftsführung</p>
                        <div class="gradient-line gradient-left gradient-width-120 margin-top-2"></div>

                        <div class="margin-2">
                            <i class="material-icons">format_quote</i>
                            <p class="cropBottom light fix-6-12 small">
                                Sie wissen noch nicht welches Angebot zu
                                ihnen passt? Gerne berate ich Sie
                                persönlich!
                            </p>
                        </div>
                        <a class="ac-ln-button margin-top-1 margin-bottom-3">07951/2977641</a>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <script>
        var category = document.getElementById('versandart');
        document.getElementById('upsale').onchange = function () {
            var optionSelected = this.options[this.selectedIndex];
            if (optionSelected.textContent != '-') {
                if (optionSelected.dataset.val === '3.50') {
                    category.value = '3.50';
                }
            }
        }
        $('#nachname').on('keyup change', function () {
            $t = $(this);
            $('.credit-card-box .nachname div').html($t.val());
        });

        $('#amount').on('keyup change', function () {
            $t = $(this);
            $('.credit-card-box .amount div').html($t.val());
        });


        $('#ccv').on('focus', function () {
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
