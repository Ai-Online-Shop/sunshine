@extends('layouts.dashboard')

@section('content')
    <section class="slide autoHeight" style="background:#f2f2f2">
        <div class="content">
            <div class="container">
                <div class="wrap">


                <div id="page-wrapper">
                        <div class="fix-8-12 text-black toCenter">
                            <h1 class="ae-1"><strong>Investoren Liste</strong></h1>
                            <div class="ae-2 light small"><p>
                                   Insgesamt hat ImmoFound {{number_format($users_count)}} angemeldete Investoren.</p></div>
                        </div>


                    <div class="row">
                        <div class="col-xs-12 pad ae-3">



                            @if($users->count() > 0)
                                <table class="table table-bordered table-striped">
                                    <tr>
                                        <td>Profilbild</td>
                                        <td>Name</td>
                                        <td>@lang('app.email')</td>
                                        <td>investiert</td>
                                        <td>@lang('app.actions')</td>
                                    </tr>

                                    @foreach($users as $user)
                                        <tr>
                                            <td>
                                                <img src="{{ $user->get_gravatar(30) }}" class="img-thumbnail img-circle" width="30" />
                                            </td>
                                            <td>{{ $user->vorname }} {{ $user->nachname }}
                                            </td>
                                            <td>{{$user->email}}</td>
                                            <td>
                                                1{{$payment_amount}}
                                            </td>

                                            <td>
                                                <a href="{{route('users_view', $user->id)}}" class="btn btn-default btn-sm"><i class="fa fa-eye"></i> </a>
                                                @if($user->active_status == 0)
                                                    <a href="{{route('user_status', [$user->id, 'approve'])}}" class="text-green" data-toggle="tooltip" title="@lang('app.approve')"><i class="material-icons">check_circle</i> </a>

                                                    <a href="{{route('user_status', [$user->id, 'block'])}}" class="text-red" data-toggle="tooltip" title="@lang('app.block')"><i class="material-icons">block</i> </a>

                                                @elseif($user->active_status == '1')
                                                    <a href="{{route('user_status', [$user->id, 'block'])}}" class="text-red" data-toggle="tooltip" title="@lang('app.block')"><i class="material-icons">block</i> </a>

                                                @elseif($user->active_status == 2)
                                                    <a href="{{route('user_status', [$user->id, 'approve'])}}" class="text-green" data-toggle="tooltip" title="@lang('app.approve')"><i class="material-icons">check_circle</i> </a>
                                                @endif

                                                <a href="{{route('users_edit', $user->id)}}" class="text-orange"><i class="material-icons">mode_edit</i> </a>
                                            </td>
                                        </tr>
                                    @endforeach

                                </table>

                                {!! $users->links() !!}

                            @else
                                <h3>@lang('app.there_is_no_user')</h3>
                            @endif

                        </div>
                    </div>


                </div>   <!-- /#page-wrapper -->




            </div>   <!-- /#wrapper -->


        </div> <!-- /#container -->
    </div> <!-- /#dashboard wrap -->
    </section>
@endsection

@section('page-js')

@endsection