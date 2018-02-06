@extends('layouts.app')
@section('content')


    <section class="slide" style="background:#f2f2f2">
        <div class="content">
            <div class="container">
                <div class="wrap">
                    <div class="fix-12-12">
                        <div class="name-67 ae-1">

                            <div class="margin-2 gradient-blue-static fix-5-12"></div>
                            <div class="margin-bottom-5 col-md-8 col-sm-12 left ae-2">
                                <h2><strong>Ihr Gutschein im Überblick.</strong></h2>
                                <a class="ac-ln-button-green"
                                   href="{{action('PaymentController@downloadPDF')}}">Den Gutschein
                                    als PDF herunterladen</a>
                                @php
                                    $auth_user = \Illuminate\Support\Facades\Auth::user();
                                @endphp
                                @if($auth_user->is_admin())
                                    <a href="{{route('payments')}}" class="ac-ln-button-red">Neu laden</a>
                                @else
                                <a class="ac-ln-button-blue" href="{{route('verwaltung')}}">Zurück</a>
                                @endif

                            @if($payment->status != 'success')
                                    <a href="{{route('status_change', [$payment->id, 'success'] )}}"
                                       class="button ac-ln-button-2 ">Zahlung bestätigen</a>
                                @endif
                            </div>
                            <div class="card-content ae-3">
                                <div class="toolbar">
                                </div>
                                <div class="material-datatables margin-top-5">

                                    <table class="table left">
                                        <tr>
                                            <th>Rechnung</th>
                                            <td>{{$payment->campaign->title}}</td>
                                        </tr>
                                        <tr>
                                            <th>Rechnungsbetrag</th>
                                            <td>{{get_amount($payment->amount)}}</td>
                                        </tr>
                                        <tr>
                                            <th>Gutschein Höhe</th>
                                            <td>{{get_amount($payment->gutschein)}}</td>
                                        </tr>
                                        <tr>
                                            <th>Versandkosten</th>
                                            <td>{{get_amount($payment->versandart)}}</td>
                                        </tr>
                                        @if($payment->upsale > 1)
                                            <tr>
                                                <th>Wellness Paket</th>
                                                <td>{{get_amount($payment->upsale)}}</td>
                                            </tr>
                                        @endif
                                        <tr>
                                            <th>Email des Käufers</th>
                                            <td>{{$payment->email}}</td>
                                        </tr>
                                        <tr>
                                            <th>Für</th>
                                            <td>{{$payment->name}}</td>
                                        </tr>
                                        <tr>
                                            <th>Gekauft am</th>
                                            <td>{{$payment->created_at->format('d F, Y')}}</td>
                                        </tr>
                                        <tr>
                                            <th>Gültig bis</th>
                                            <td>{{$payment->created_at->addYears(2)->format('d F, Y')}}</td>
                                        </tr>
                                        <tr>
                                            <th>Gutschein-Code</th>
                                            <td>{{$payment->local_transaction_id}}</td>
                                        </tr>

                                        <tr>
                                            <th>Methode</th>
                                            @if($payment->payment_method == 'stripe')
                                                <td>Kartenzahlung</td>
                                            @endif
                                            @if($payment->payment_method == 'bank_transfer')
                                                <td>Bank Transfer</td>
                                            @endif
                                            @if($payment->payment_method == 'paypal')
                                                <td>PayPal</td>
                                            @endif
                                        </tr>

                                        @if($payment->payment_method == 'stripe')

                                            <tr>
                                                <th colspan="2">
                                                    <div class="width-4 margin-top-2 left margin-top-5">
                                                        <div class="gradient-blue"></div>
                                                    </div>
                                                    <h2><strong>Transaktionsinformationen</strong></h2>
                                                </th>
                                            </tr>
                                            <tr>
                                                <th>Letzten 4 Stellen</th>
                                                <td>{{$payment->card_last4}}</td>
                                            </tr>

                                            <tr>
                                                <th>Karten-ID</th>
                                                <td>{{$payment->card_id}}</td>
                                            </tr>

                                            <tr>
                                                <th>Kartenmarke</th>
                                                <td>{{$payment->card_brand}}</td>
                                            </tr>

                                            <tr>
                                                <th>Gültig bis</th>
                                                <td>{{$payment->card_exp_month}},{{$payment->card_exp_year}}</td>
                                            </tr>

                                        @endif

                                    </table>
                                    <table class="table left">

                                        @if($payment->payment_method == 'bank_transfer')

                                            <div class="margin-top-5 margin-bottom-3">
                                                <div class=" margin-2 left gradient-blue fix-5-12"></div>
                                                <h2 class="margin-2 left">
                                                    <strong>Bank Transfer Informationen</strong></h2>
                                            </div>
                                            <tr>
                                                <th>Verfahren</th>
                                                <td>@if($payment->account_number) {{$payment->account_number}} @else Sepa-Überweisung @endif</td>
                                            </tr>
                                            <tr>
                                                <th>BIC</th>
                                                <td>{{$payment->bank_swift_code}}</td>
                                            </tr>

                                            <tr>
                                                <th>Bank Name</th>
                                                <td>{{$payment->branch_name}}</td>
                                            </tr>

                                            <tr>
                                                <th>Bank Adresse</th>
                                                <td>{{$payment->branch_address}}</td>
                                            </tr>

                                            <tr>
                                                <th>Kontoinhaber</th>
                                                <td>{{$payment->account_name}}</td>
                                            </tr>

                                            <tr>
                                                <th>IBAN</th>
                                                <td>{{$payment->iban}}</td>
                                            </tr>
                                        @endif

                                        <tr>
                                            <th>Datum</th>
                                            <td>{{$payment->created_at->format('F d, Y h:i a')}}</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            <!-- end content-->
                        </div>
                        <!--  end card  -->
                    </div>
                    <!-- end col-md-12 -->
                </div>
            </div>
        </div>

@endsection