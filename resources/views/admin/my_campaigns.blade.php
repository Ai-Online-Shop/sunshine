@extends('layouts.dashboard')

@section('content')
    <section class="slide" style="background:#f2f2f2">
        <div class="content">
            <div class="container">
                <div class="wrap">


                    <div class="fix-8-12 text-black toCenter margin-top-5">
                        <h1 class="ae-1"><strong>Kampagnen im Überblick</strong></h1>
                        <div class="ae-2 light small"><p>Hier dreht sich alles um dich. Dein Name, deine Adresse, dein Profil.
                                Alles, was dein Leben einzigartig macht, kannst du hier perfekt verwalten</p></div>
                    </div>

                <div class="col-md-12">
                    <div class="name-67 ae-1">
                        <div class="width-4 margin-bottom-4 margin-2 left">
                            <div class="gradient-blue"></div>
                            <h2 class=""><strong>Vorgehensweise</strong></h2>
                            <p class="light micro">Bitte aktualisiere deine Daten und klicke anschließend auf den Button.</p>
                        </div>
                        <div class="card-content">
                            <hr>  @include('admin.flash_msg')
                            <div class="toolbar">
                            </div>
                            <div class="material-datatables">
                                @if($my_campaigns->count() > 0)
                                    <table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                                        <thead>
                                        @foreach($my_campaigns as $campaign)
                                            <tr class="left">
                                            <th>Kampagne Title</th>
                                            <th class="disabled-sorting text-left">Aktionen</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="left">
                                                <td>{{$campaign->title}}</td>
                                                <td>
                                                    @if( ! $campaign->is_ended())
                                                    <a href="{{route('edit_campaign', $campaign->id)}}" class="text-orange"><i class="material-icons">build</i> </a>
                                                    @endif
                                                    <a href="{{route('campaign_single', [$campaign->id, $campaign->slug])}}" class="text-black"><i class="material-icons">eye</i> </a>
                                                </td>
                                            </tr>
                                        </tbody>
                                        @endforeach
                                    </table>
                                @else
                                    <div class="alert alert-info">
                                        @lang('app.no_campaigns_to_display') </div>
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
    </section>
@endsection
