@extends('layouts.app')

@section('content')
    <style>
        .background-red-pink {
            background: linear-gradient(45deg, #eb9c99 50%, #eeaead 50%);
            background: -webkit-linear-gradient(45deg, #eb9c99 50%, #eeaead 50%);
        }
    </style>
    <section class="slide autoHeight" style="background:#333">
        <div class="content">
            <div class="container">
                <div class="wrap padding-left-0 padding-right-0 padding-top-0 padding-bottom-0">

                    <nav class="c-sub-navigation fix-3-12">
                        <ul>
                            <li class="ae-1 fromRight"><a class="c-sub-navigation__item c-sub-navigation__item-profiles"
                                                          href="{{ route('logout') }}" onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();"><form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form><i class="material-icons font-size-33 text-ac">fingerprint</i><br /> <span>Ausloggen</span></a></li>
                            </ul>
                    </nav>

                </div>
            </div>
        </div>
    </section>
    <section class="slide background-red-pink">
        <div class="content">
            <div class="container">
                <div class="wrap">


                    <div class="col-md-12">
                        <div class="card ae-1">

                            <div class="margin-bottom-7 center">
                                <h2 class=""><strong>Sunshine Wellness Gutscheine</strong></h2>
                                <div class="gradient-line-3 gradient-left gradient-width-120 margin-top-4"></div>

                            </div>

                            <div class="material-datatables margin-bottom-2">
                                <table id="datatables" class="table table-striped table-no-bordered table-hover dataTable dtr-inline">
                                    <thead>
                                    <tr>
                                        <th>Gutschein</th>
                                        <th>Code</th>
                                        <th class="disabled-sorting">Widmung</th>

                                        <th>Versand</th>
                                        <th>Korb</th>
                                        <th class="disabled-sorting">Adresse</th>

                                        <th>Email</th>
                                        <th>Datum</th>
                                        <th>Status Bezahlung</th>
                                        <th>Status Gutschein</th>
                                    </tr>
                                    </thead>
                                    <tfoot>
                                    <tr>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                    </tfoot>
                                    <tbody>
                                    @foreach($payments as $payment)
                                        <tr>
                                            <td class="left">{{get_amount($payment->gutschein)}}</td>
                                            <td class="left">{{$payment->gutschein_id}}</td>
                                            <td class="left">{{$payment->widmung}}</td>
                                            <td class="left">{{$payment->versandart}}</td>
                                            <td class="left">{{$payment->upsale}}</td>
                                            <td class="left">{{$payment->name}}{{$payment->adresse}}<br />
                                                {{$payment->postleitzahl}}<br />
                                                {{$payment->stadt}}<br />
                                                {{$payment->land}}</td>
                                            <td class="left">{{$payment->email}}</td>
                                            <td class="left"><span data-toggle="tooltip"
                                                                        title="{{$payment->created_at->format('F d, Y h:i a')}}">{{$payment->created_at->format('F d, Y')}}</span>
                                            </td>
                                            <td class="left">

                                                @if($payment->status == 'success')
                                                    <span class="text-success" data-toggle="tooltip"
                                                          title="{{$payment->status}}"><i class="material-icons">done</i> </span>
                                                @else
                                                    <a href="{{route('status_change', [$payment->id, 'success'] )}}"
                                                       class="ac-ln-button-2">Zahlung erhalten </a>
                                                @endif
                                            </td>
                                            <td class="left">
                                                @if($payment->gutscheinstatus == 'success')
                                                    <a class="ac-ln-button-red">Abgelaufen </a>
                                                @else
                                                    <a href="{{route('status_change2', [$payment->id, 'success'] )}}"
                                                       class="ac-ln-button-2">Einlösen</a>
                                                @endif
                                            </td>
                                        </tr>
                                    @endforeach

                                    </tbody>
                                </table>
                            </div>
                            {!! $payments->links() !!}


                            <!-- end content-->
                        </div>
                    </div>
                    <!-- end col-md-12 -->
                </div>
            </div>
        </div>
    </section>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#datatables').DataTable({
                "pagingType": "full_numbers",
                "lengthMenu": [
                    [10, 25, 50, -1],
                    [10, 25, 50, "All"]
                ],
                language: {
                    search: "_INPUT_",
                    searchPlaceholder: "Detailierte Suche",
                }

            });


            var table = $('#datatables').DataTable();


            $('.card .material-datatables label').addClass('form-group');
            $('.card .material-datatables input').addClass('margin-bottom-2');

        });
    </script>
@endsection
