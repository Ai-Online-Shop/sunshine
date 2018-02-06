@extends('layouts.dashboard')

@section('content')
    <section class="slide" style="background:#f2f2f2">
        <div class="content">
            <div class="container">
                <div class="wrap">

                    <div class="fix-8-12 text-black toCenter">
                        <h1 class="ae-1"><strong>{{ $user->vorname }} {{ $user->nachname }}</strong></h1>
                        <div class="ae-2 light small"><p>Hier dreht sich alles um dich. Dein Name, deine Adresse, dein Profil.
                                Alles, was dein Leben einzigartig macht, kannst du hier perfekt verwalten</p></div>
                    </div>

                    <div class="fix-12-12">
                        <ul class="grid later fixedSpaces equal left margin-top-5">
                            <li class="col-8-12 ae-3 fromCenter">
                                <div class="name-67 ">

                                    <div class="width-4 margin-bottom-7 margin-2 left">
                                        <div class="gradient-blue"></div>
                                        <h2 class=""><strong>Mein Profil</strong></h2>
                                    </div>

                                    <div class="margin-2">
                                        <table class="table">
                                            <tr>
                                                <th>Vorname</th>
                                                <td>{{ $user->vorname }}</td>
                                            </tr>
                                            <tr>
                                                <th>Nachname</th>
                                                <td>{{ $user->nachname }}</td>
                                            </tr>
                                            <tr>
                                                <th>Email</th>
                                                <td>{{ $user->email }}</td>
                                            </tr>
                                            <tr>
                                                <th>Telefonnummer</th>
                                                <td>{{ $user->telefonnummer }}</td>
                                            </tr>
                                            <tr>
                                                <th>Geburtstag</th>
                                                <td>{{ $user->geburtstag }}</td>
                                            </tr>
                                            <tr>
                                                <th>Geburtsort</th>
                                                <td>{{ $user->geburtsort }}</td>
                                            </tr>
                                            <tr>
                                                <th>Adresse</th>
                                                <td>{{ $user->adresse }}</td>
                                            </tr>
                                            <tr>
                                                <th>Postleitzahl</th>
                                                <td>{{ $user->postleitzahl }}</td>
                                            </tr>
                                            <tr>
                                                <th>Stadt</th>
                                                <td>{{ $user->stadt }}</td>
                                            </tr>
                                            <tr>
                                                <th>Land</th>
                                                <td>{{ $user->land }}</td>
                                            </tr>
                                            <tr>
                                                <th>Ausweisnummer</th>
                                                <td>{{ $user->ausweis }}</td>
                                            </tr>
                                            <tr>
                                                <th>Austellende Behörde</th>
                                                <td>{{ $user->behorde }}</td>
                                            </tr>
                                            <tr>
                                                <th>Investment Erfahrung</th>
                                                <td>{{ $user->erfahrung }}</td>
                                            </tr>
                                            <tr>
                                                <th>Partner-ID</th>
                                                <td>{{ $user->name }}</td>
                                            </tr>
                                        </table>

                                    </div>
                                </div>
                            </li>
                            <li class="col-4-12 ae-3 fromCenter">
                                <div class="name-68 text-white center">
                                    <div class="card-avatar">
                                        <img class="card-img" src="{{ $user->get_gravatar(100) }}" alt="" />
                                    </div>
                                    <h3 class="margin-top-2"><strong>{{ $user->vorname }} {{ $user->nachname }}</strong></h3>
                                    <div class="gradient-line gradient-left gradient-width-30 center"></div>


                                            <h3 class=" light micro"><strong>Meine Erfahrung</strong></h3>
                                            <p class="light micro">{{ $user->erfahrung }}</p>
                                    <div class="author-77-gradient">
                                        <p class="micro light">Du möchtest dein Profil aktualisieren?</p>
                                        <a href="{{ route('profile_edit') }}" class="ac-ln-button-2">Profil bearbeiten </a>
                                    </div>
                                            <div class="author-77-gradient">
                                                <p class="micro light">Sie möchten ihr Passwort ändern?</p>
                                                <a href="{{ route('change_password') }}" class="ac-ln-button-2">Passwort ändern</a>
                                            </div>

                                </div>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection