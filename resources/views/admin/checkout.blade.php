@extends('layouts.app')
@section('content')

    <section class="slide background-blue">
        <div class="content">
            <div class="container">
                <div class="wrap">

                    <div class="ae-1 fix-6-12">
                        <div class="name-67">

                            {{ Form::open(['class' => 'form-horizontal', 'files' => true]) }}
                            <h2 class="big bold margin-top-1">Zusammenfassung</h2>
                            <div class="gradient-line-3 gradient-left gradient-width-120 margin-top-1"></div>
                            <div class="margin-2 cropTop">
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
                                    <a class="text-blue" target="_blank" href="{{route('agb')}}"> AGB</a> und der <a class="text-blue" target="_blank" href="{{route('datenschutz')}}"> Datenschutzerklärung</a> zu.</p>
                                <button type="submit" class="green rounded cropBottom wide button">Gutschein kaufen</button>
                            </div>
                            {{ Form::close() }}

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



