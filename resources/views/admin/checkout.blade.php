@extends('layouts.app')
@section('content')

    <section class="slide background-blue">
        <div class="content">
            <div class="container">
                <div class="wrap">

                    <div class="ae-1 fix-6-12">
                        <div class="name-67">

                            {{ Form::open(['class' => 'form-horizontal', 'files' => true]) }}

                            <svg style="width:65px;height:65px">
                                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#logo"></use>
                            </svg>
                            <h3 class="big">Zusammenfassung</h3>
                            <div class="gradient-line-3 gradient-left gradient-width-120 margin-top-1"></div>

                            <div class="form-group ae-3 {{ $errors->has('full_name')? 'has-error':'' }}">
                                <div class="col-sm-12 text-center">
                                    <input type="text" class="form-control text-center hidden" id="name" value="{{ $domenic4->nachname }}"
                                           name="name">
                                    <input type="text" class="form-control text-center hidden" id="email" value="{{ $domenic6->email }}"
                                           name="email">
                                    <input type="text" class="form-control text-center hidden" id="gutschein_id" value="{{ $domenic7->gutschein_id }}"
                                           name="gutschein_id">
                                    <input type="text" class="form-control text-center hidden" id="widmung"
                                           value="{{ $domenic5->ccv }}" name="widmung">
                                    <input type="text" class="form-control text-center hidden" id="gutschein"
                                           value="{{ $domenic3->amount }}"
                                           name="gutschein">
                                    <input type="text" class="form-control text-center hidden" id="versandart"
                                           value="{{ $domenic2->versandart }}"
                                           name="versandart">
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
                                </div>
                            </div>

                            <div class="margin-2">
                                <table id="datatables"
                                       class="padding-bottom-3 left table table-striped table-no-bordered table-hover"
                                       cellspacing="0" width="100%" style="width:100%">

                                        <tr>
                                            <th>Gutscheinhöhe:</th>
                                            <td>{{get_amount($domenic3->amount)}}</td>
                                        </tr>

                                        <tr>
                                            <th>Versandkosten:</th>
                                            <td>{{ get_amount($domenic2->versandart) }}</td>
                                        </tr>

                                        <tr>
                                            <th>Total:</th>
                                            <td>{{ get_amount($total) }}</td>
                                        </tr>
                                </table>

                                <p class="bold">Durch Gutschein kaufen stimmen Sie unseren
                                    <a class="text-blue" href="{{route('agb')}}"> AGB</a> und der <a class="text-blue" href="{{route('datenschutz')}}"> Datenschutzerklärung</a> zu.</p>

                                <button type="submit" class="ac-ln-button-2 button">Gutschein kaufen</button>
                            </div>
                            {{ Form::close() }}

                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    <script>
        $(function () {
            $(document).on('click', '.donate-amount-placeholder ul li', function (e) {
                $(this).closest('form').find($('[name="amount"]')).val($(this).data('value'));
            });
        });
    </script>
@endsection



