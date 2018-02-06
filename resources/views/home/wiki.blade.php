@extends('layouts.app')
@section('title') @if( ! empty($title)) {{ $title }} | @endif @parent @endsection

@section('content')
    <section class="slide fade-2 kenBurns">
        <div class="content">
            <div class="container">
                <div class="wrap">

                    <div class="fix-10-12">
                        <h1 class=" ae-1 fromCenter text-white"><strong>Gerade in Überarbeitung!</strong></h1>
                    </div>

                </div>
            </div>
        </div>
        <div class="background" style="background-image:url(assets/img/eyecatcher-1.jpg)"></div>
    </section>
@endsection