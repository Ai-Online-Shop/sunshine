@component('layouts.gelbinger')

    <style>
        .background-green{
            background: -webkit-linear-gradient(45deg, #eb6833 50%, #ea9043 50%);
            background: -webkit-linear-gradient(45deg, #eb6833 50%, #ea9043 50%);
        }
    </style>
    <section class="slide background-green">
        <div class="content">
            <div class="container">
                <div class="wrap">

                    <div class="fix-12-12  center">

                        <ul class="flex">

                            <li class="col-6-12 col-tablet-1-2 col-phablet-1-1 ae-1">


                                <div class="pad shadow selected ae-1 fromTopRight">

                                    <svg style="width:65px;height:65px">
                                        <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#logo"></use>
                                    </svg>
                                    <h3 class="big ae-3">Sunshine Wellness.</h3>

                                    <div class="gradient-line-3 gradient-left gradient-width-120 margin-bottom-5 margin-top-1 ae-4"></div>
                                    <h3 class="big ae-5">Suwarat Haag (Amika)</h3>
                                    <p class="big ae-5">Gelbinger Gasse 21,</p>
                                    <p class="big ae-6">74523 Schwäbisch Hall</p>
                                    <p class="margin-top-3 big ae-7">Tel.: 079197822547</p>
                                    <p class="big ae-7">Tel.: 01608379969</p>
                                    <p class="big ae-7">E-Mail: amikahaag@gmail.com</p>
                                </div>
                            </li>
                            <li class="col-6-12 col-tablet-1-2 col-phablet-1-1 ae-1">


                                <div class="pad shadow selected ae-1 fromTopRight">

                                    <form role="form" method="POST" action="{{ route('partner-sended') }}">
                                        {{ csrf_field() }}

                                        <svg style="width:65px;height:65px">
                                            <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#logo"></use>
                                        </svg>
                                        <h3 class="big ae-3">Kontakt-Formular</h3>
                                        @if(Session::has('success'))
                                            <p class="text-ac">
                                                Email wurde versandt.
                                            </p>
                                        @endif
                                        <div class="gradient-line-3 gradient-left gradient-width-120 margin-top-1 ae-4"></div>
                                        <div class="col-lg-12 form-group ae-4 label-floating">
                                            <label for="name" class="control-label">Dein Vor- und Nachname</label>
                                            <input id="name" type="text" class="form-control" name="name" required>
                                        </div>
                                        <div class="col-lg-12 form-group ae-4 label-floating">
                                            <label for="email" class="control-label">Deine Email</label>
                                            <input id="email" type="text" class="form-control" name="email" required>
                                        </div>
                                        <div class="col-lg-12 form-group ae-4 label-floating">
                                            <label for="telefonnummer" class="control-label">Deine Telefonnummer</label>
                                            <input id="telefonnummer" type="text" class="form-control" name="telefonnummer" required>
                                        </div>
                                        <div class="col-lg-12 form-group ae-4 label-floating">
                                            <label for="unternehmen" class="control-label">Deine Postleitzahl</label>
                                            <input id="unternehmen" type="text" class="form-control" name="unternehmen" required>
                                        </div>
                                        <div class="col-lg-12 form-group ae-5">
                                            <label for="anfrage" class="control-label">Anfrage</label>
                                            <select class="form-control select2" id="anfrage" name="anfrage" required>
                                                <option value="Ich möchte mehr wissen über Gelbinger Gasse">Anfrage</option>
                                                <option value="Termin vereinbaren Gelbinger Gasse" >Termin vereinbaren</option>
                                                <option value="Gutschein kaufen Gelbinger Gasse" >Gutschein kaufen</option>
                                                <option value="Informationen zu Wellness-Paketen Gelbinger Gasse" >Informationen zu Wellness-Paketen</option>
                                                <option value="Bewerbung als Mitarbeiter Gelbinger Gasse" >Bewerbung als Mitarbeiter</option>
                                                <option value="Fragen zu aktuellen Angeboten Gelbinger Gasse" >Fragen zu aktuellen Angeboten</option>
                                                <option value="Sonstige Anfrage Gelbinger Gasse" >Sonstige Anfrage</option>
                                            </select>
                                        </div>
                                        <button type="submit" class="ac-ln-button ae-4 button">Abschicken</button>
                                    </form>
                                </div>
                            </li>
                        </ul>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endcomponent