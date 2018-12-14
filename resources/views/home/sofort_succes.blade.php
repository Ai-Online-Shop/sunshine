@extends('layouts.app')

@section('content')


    <section class="slide" style="background:#1a1a1a">
        <div class="content">
            <div class="container">
                <div class="wrap">

                    <div class="fix-7-12 text-white">
                        <h1 class="ae-1 fromTopRight"><strong>Vielen Dank!<br/>
                                Ihr Gutschein wird in ca. 10 Minuten an ihre Email verschickt.</strong></h1>
                    </div>
                    <div class="fix-8-12 text-white">
                        <h4 class="ae-5 fromTopRight light">
                            Ihre Zahlung ist bei uns eingegangen. Ihr Gutschein ist gültig, und kann genutzt werden.
                            Erzählen Sie auch Ihren Freunden von unseren Gutscheinen! :)</h4>
                    </div>
                    <div class="margin-top-5">
                        <a href="{{route('home')}}" class="button ac-ln-button-green ae-7 fromTopRight">Zur Startseite</a>
                    </div>
                </div>

            </div>
        </div>
        </div>
    </section>



@endsection