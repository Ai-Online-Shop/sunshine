@extends('layouts.dashboard')

@section('content')
    <section class="slide" style="background:#f2f2f2">
        <div class="content">
            <div class="container">
                <div class="wrap">

                    <div class="fix-8-12 text-black toCenter margin-top-10">
                        <h1 class="ae-1"><strong>Investments</strong></h1>
                        <div class="ae-2 light small"><p>Hier dreht sich alles um dich. Dein Name, deine Adresse, dein Profil.
                                Alles, was dein Leben einzigartig macht, kannst du hier perfekt verwalten</p></div>
                    </div>


                <div class="col-md-12">
                    <div class="name-67">

                        <div class="width-4 margin-bottom-7 margin-2 left">
                            <div class="gradient-blue"></div>
                            <h2 class=""><strong>Vorgehensweise</strong></h2>
                            <p class="light small">Mit <i class="material-icons text-black font-size-17">remove_red_eye</i> kannst du zur Kampagnen-Vorschau. Und mit <i class="material-icons text-green font-size-17">alarm_add</i> kannst du die Kampagne starten und mit <i class="material-icons text-red font-size-17">do_not_disturb_on</i> blockieren.
                                <i class="material-icons text-green font-size-17">check_circle</i> bedeutet, dass die Kampagne aktiv ist.</p>
                        </div>

                        <div class="margin-2">
                            <div class="toolbar">
                                <!--        Here you can write extra buttons/actions for the toolbar              -->
                            </div>
                            <div class="material-datatables">
                                @if($campaigns->count() > 0)
                                    <table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                                        <thead>
                                        <tr>
                                            <th>Titel</th>
                                            <th>Getätigte Investments</th>
                                            <th>Aktionen</th>
                                        </tr>
                                        @foreach($campaigns as $campaign)
                                        </thead>
                                        <tbody>
                                        <tr class="left">
                                            <td>{{$campaign->title}}</td>
                                            <td>{{get_amount($campaign->success_payments->sum('amount'))}}</td>
                                            <td> <a href="{{route('campaign_single', [$campaign->id, $campaign->slug])}}" class="text-black" data-toggle="tooltip" title="View"><i class="material-icons">remove_red_eye</i> </a>

                                                @if($campaign->status == 0)
                                                    <a href="{{route('campaign_status', [$campaign->id, 'approve'])}}" class="text-green" data-toggle="tooltip" title="@lang('app.approve')"><i class="material-icons">alarm_add</i> </a>
                                                    <a href="{{route('campaign_status', [$campaign->id, 'block'])}}" class="text-red" data-toggle="tooltip" title="@lang('app.block')"><i class="material-icons">do_not_disturb_on</i> </a>


                                                @elseif($campaign->status == 1)

                                                    <a href="{{route('campaign_status', [$campaign->id, 'block'])}}" class="text-red" data-toggle="tooltip" title="@lang('app.block')"><i class="material-icons">do_not_disturb_on</i> </a>

                                                @elseif($campaign->status == 2)
                                                    <a href="{{route('campaign_status', [$campaign->id, 'approve'])}}" class="text-red" data-toggle="tooltip" title="@lang('app.approve')"><i class="material-icons">check_circle</i> </a>
                                                @endif</td>
                                        </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                    {!! $campaigns->links() !!}

                                @else

                                    @lang('app.no_campaigns_to_display')

                                @endif

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
        </div>
    </section>
@endsection