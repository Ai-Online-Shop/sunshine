@extends('layouts.app')

@section('content')
    <!-- TABS EXAMPLE -->
    <style>
        .background-red-pink{
            background: -webkit-linear-gradient(45deg, #ea9043 50%, #eb6833 50%);
            background: -webkit-linear-gradient(45deg, #ea9043 50%, #eb6833 50%);
        }
    </style>

    <section class="slide background-red-pink">
    <div class="content">
        <div class="container">
            <div class="wrap">

                <div class="fix-12-12">

                    <ul class="flex fixedSpaces later left">
                        <li class="col-6-12 col-tablet-1-2 col-phone-1-1 ae-3">
                            <img class="img-91 wide shadow" src="{{ asset('assets/img/sun-1.jpg') }}" alt="Video Thumbnail"/>
                        </li>
                        <li class="col-6-12 col-tablet-1-2 col-phone-1-1 ae-4">
                        @foreach($categories as $cat)
                                <div class="pad2 shadow rounded margin-left-3 margin-right-3 margin-bottom-2 center">
                                    <svg style="width:65px;height:65px">
                                        <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#logo"></use>
                                    </svg>
                                    <h3 class="big">{{ $cat->category_name }}</h3>
                                    <div class="gradient-line-3 gradient-left gradient-width-120 margin-bottom-2 margin-top-1"></div>
                                    <p class="micro">{{ $cat->image }}</p>
                                    <a href="{{route('single_category', [$cat->id, $cat->category_slug])}}"
                                       class="ac-ln-button">Jetzt loslegen</a>
                                </div>
                        @endforeach
                        </li>
                    </ul>

                </div>


            </div>
        </div>
    </div>

</section>
    @endsection