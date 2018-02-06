@extends('layouts.app')
@section('title') @lang('app.not_found_404') | @parent @endsection

@section('content')

    <section class="slide background-blue">
        <div class="content">
            <div class="container">
                <div class="wrap">

                    <div class="fix-8-12 center">
                        <div class="pad shadow selected ae-1 fromTopRight">

                            <img src="{{ asset('assets/svg/logoweis.svg') }}" class="ae-4 text-black fix-2-12 margin-bottom-3" alt="App 2"/>
                            <div class="ae-1"><h1><strong>404</strong></h1></div>
                            <div class="ae-1"><p class="small light">&laquo;Technologische Entwicklungen vollziehen sich in Zyklen. Sie haben ihren Frühling, ihren Sommer und ihren Herbst. Und irgendwann werden sie beerdigt. Wir von ImmoFound versuchen uns mit Dingen zu beschäftigen, die gerade ihren Frühling erleben&raquo;</p></div>

                            <div class="fix-4-12">
                                <a href="https://de.wikipedia.org/wiki/Steve_Jobs" target="_blank" class="author block">
                                    <div class="ae-3"><p class="small margin-bottom-0">Zitat wurde abgewandelt.</p></div>
                                    <div class="ae-4"><p class="micro">-Steve Jobs</p></div>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>


@endsection
