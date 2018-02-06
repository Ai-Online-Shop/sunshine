@extends('layouts.app')
@section('title') @if( ! empty($title)) {{ $title }} | @endif @parent @endsection

@section('content')
    <section class="slide"  style="background:#1a1a1a">
        <div class="content">
            <div class="container">
                <div class="wrap">

                    <div class="fix-8-12 margin-top-7 text-white">
                        <h1 class="ae-3 fromTopRight margin-bottom-2"><strong>Grow up.</strong></h1>
                        <img class="ae-1 fromTopRight" src="{{ asset('assets/svg/sparplan2.svg') }}">
                        <h4 class="ae-5 fromTopRight light">Wer jetzt an Sicherheit, Freunde, ein Auto oder an Ausflüge am Wochenende denkt, kann ab sofort weiter denken. Nämlich daran, dass
                        man aus dieser Zeit die aufregendste des Lebens machen kann. Schreibe die Regeln um, die dir nicht gefallen. Es geht nicht darum, alles anders zu machen. Sondern vieles besser!
                        Wenn du gerade dabei bist, Sparmodelle von gestern hinter dir zu lassen: Schau dir doch mal unsere Interpretation zeitgemäßen Sparens an.</h4>
                        <a class="ae-6 margin-top-3 button blue small margin-bottom-5" href="{{route('welcome')}}">Kundenkonto einrichten</a>

                    </div>

                </div>
            </div>
        </div>
    </section>
    <section class="slide autoHeight" style="background:#0095ff">
        <div class="content">
            <div class="container">
                <div class="wrap padding-left-0 padding-right-0 padding-top-0 padding-bottom-0">

                    <ul class="grid later padding-right-5  padding-top-5 padding-bottom-8 padding-left-5 fixedSpaces equal center grid-73 text-white">
                        <li class="col-3-12">
                            <div class="cell-73 equalElement">
                                <i class="material-icons">class</i>
                                <p class="light small margin-bottom-3 opacity-10"><strong>Ein Vertrag</strong></p>
                                <p class="light micro">Alle wichtigen Komponenten deiner Geldanlage. In nur einem Vertrag.</p>
                            </div>
                        </li>
                        <li class="col-3-12">
                            <div class="cell-73 equalElement">
                                <i class="material-icons">trending_up</i>
                                <p class="light small margin-bottom-3 opacity-10"><strong>Hochleistungszins</strong></p>
                                <p class="light micro">3,4% fester Zinssatz. Wir verzinsen dein Investment ab Tag 1.</p>
                            </div>
                        </li>
                        <li class="col-3-12">
                            <div class="cell-73 equalElement">
                                <i class="material-icons">stars</i>
                                <p class="light small margin-bottom-3 opacity-10"><strong>Kein Tippfehler!</strong></p>
                                <p class="light micro">Wir garantieren dir unseren Zinssatz zu vollen 5 Jahren. Und ja das sind 60 Monate!</p>
                            </div>
                        </li>
                        <li class="col-3-12">
                            <div class="cell-73 equalElement last">
                                <i class="material-icons">lock</i>
                                <p class="light small margin-bottom-3 opacity-10"><strong>Sicher fahren</strong></p>
                                <p class="light micro">Mit unserer Geldanlage fährst du zu 100% sicher. Langfristige Mietverträge und solvente Mieter.</p>
                            </div>
                        </li>
                    </ul>

                </div>
            </div>
        </div>
    </section>
    <section class="slide autoHeight" style="background:#fafafa">
        <div class="content">
            <div class="container">
                <div class="wrap">

                    <div class="fix-8-12 text-black">
                        <h1><strong>Was wäre Sicherheit ohne ImmoFound?</strong></h1>
                        <h3 class="light">Das erste Investment für jeden besser und einfacher. Ohne wochenlange Papierkriege. Ohne Nervenverluste, weil unser Portfolio eine einzigartige Sicherheit bietet. Solvente Mieter verknüpft mit langfristigen Mietverträgen. Mache dir jetzt ein Bild von attraktiven Immobilien.</h3>
                        <a class=" small margin-top-3 blue button" href="{{route('portfolio')}}">Zum Portfolio</a>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="slide background-blue">
        <div class="content">
            <div class="container">
                <div class="wrap ">

                    <div class="fix-10-12 text-white">
                        <div class="fix-8-12 toCenter margin-bottom-10">
                            <h1 class="ae-1"><strong>Investment-of-the-art.</strong></h1>
                            <div class="ae-2 light small"><p>
                                    Intelligent und innovativ unterwegs - Unsere INVEST-Software lässt bezüglich
                                    Infotainment, Support und Kommunikation kaum Wünsche offen.
                                    Im Investmentprozess begeistern hochauflösende Popups und sorgen gleichzeitig für ein
                                    einmaliges Interaktionserlebnis.
                                    Mach dich bereit für exklusive Ratschläge, nützliche Rechnungen und vieles mehr.
                                </p></div>
                        </div>
                        <div class="col-lg-6">
                            <div class="pad ae-1">
                                <div class="text-left">
                                    <div class=" margin-bottom-3 left">
                                        <div class="width-5 gradient-blue"></div>
                                        <h2><strong>160€ Exclusive</strong></h2>
                                        <p class="small light"><i
                                                    class="material-icons margin-right-1 font-size-20 text-ac">done</i>Auszahlung
                                            nach 5 Jahren</p>
                                        <p class="small light"><i
                                                    class="material-icons margin-right-1 font-size-20 text-ac">done</i>Bis
                                            zu 10000€ nachinvestieren</p>
                                        <p class="small light"><i
                                                    class="material-icons margin-right-1 font-size-20 text-ac">done</i>Keine
                                            Vertragskosten</p>
                                        <p class="small light"><i
                                                    class="material-icons margin-right-1 font-size-20 text-ac">done</i>100%
                                            gebührenfrei</p>
                                    <table class="table font-size-12 cropBottom right">
                                        <tr>
                                            <th>Mtl. Sparrate:</th>
                                            <td>160€</td>
                                        </tr>
                                        <tr>
                                            <th>Laufzeit:</th>
                                            <td>5 Jahre</td>
                                        </tr>
                                        <tr>
                                            <th>Zinssatz:</th>
                                            <td>3,4% p.a.</td>
                                        </tr>
                                        <tr>
                                            <th>Zielsumme:</th>
                                            <td>9.600,00€</td>
                                        </tr>
                                        <tr>
                                            <th>Auszahlungssumme:</th>
                                            <td>10.464,61€</td>
                                        </tr>
                                        <tr>
                                            <th class="text-ac font-size-17">Zinsen:</th>
                                            <td class="text-ac font-size-17"><b>864,61€</b></td>
                                        </tr>
                                    </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="name-68 ae-7 text-white">
                                <div class="card-avatar">
                                    <img class="img" src="{{ asset('assets/img/domenic.jpg') }}"/>
                                </div>
                                <h2 class="cropBottom margin-top-2"><strong>Domenic Haag</strong></h2>
                                <p class="opacity-6 light small">Ceo + Founder</p>
                                <div class="gradient-line gradient-left gradient-width-120 margin-top-2"></div>


                                <i class="material-icons">format_quote</i>
                                <p class="cropBottom light small margin-3">
                                    Sie wissen noch nicht ob dieses Angebot zu ihnen passt? Gerne berate ich Sie
                                    persönlich!
                                </p>
                                <a class="ac-ln-button-2 margin-top-3 margin-bottom-3">07951/4722667</a>
                            </div>
                        </div>


                    </div>

                </div>
            </div>
        </div>
    </section>



    <section class="slide" style="background:#fafafa">
        <div class="content">
            <div class="container">
                <div class="wrap">

                    <div class="fix-10-12 toCenter">
                        <h1 class="ae-1"><strong>Zahlungsmethoden</strong></h1>
                        <div class="ae-2"><p>Diese Zahlungsmöglichkeiten liegen dir bei unseren Sparplänen vor.</p></div>
                    </div>
                    <div>
                        <ul class="grid grid-86 later equal left">
                            <li class="col-4-12">
                                <a href="http://mastercard.com" class="box-77 ae-4 fromCenter">
                                    <div class="thumbnail-77">
                                        <img src="{{ asset('assets/svg/mastercard-card.svg') }}" alt="Picture" class="wide"/>
                                    </div>
                                    <div class="details-77 equalElement">
                                        <div class="cell">
                                            <h5 class="light"><strong>Mastercard</strong></h5>
                                            <h5 class="light small">Beliebte, in 210 Ländern weltweit genutze  <br />Kreditkarte.</h5>
                                        </div>
                                        <div class="author-77">
                                            <h5 class="text-blue light text-left">Mehr erfahren</h5>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="col-4-12">
                                <a href="https://de.wikipedia.org/wiki/IBAN" class="box-77 ae-4 fromCenter">
                                    <div class="thumbnail-77">
                                        <img src="{{ asset('assets/svg/sepa-card.svg') }}" alt="Picture" class="wide"/>
                                    </div>
                                    <div class="details-77 equalElement">
                                        <div class="cell">
                                            <h5 class="light"><strong>SEPA-Lastschrift</strong></h5>
                                            <h5 class="light small">Die verfügbare Zahlungsmethode für Investoren in 34 Ländern.</h5>
                                        </div>
                                        <div class="author-77">
                                            <h5 class="text-blue light text-left">Mehr erfahren</h5>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="col-4-12">
                                <a href="http://visa.com" class="box-77 ae-4 fromCenter">
                                    <div class="thumbnail-77">
                                        <img src="{{ asset('assets/svg/visa-card.svg') }}" alt="Picture" class="wide"/>
                                    </div>
                                    <div class="details-77 equalElement">
                                        <div class="cell">
                                            <h5 class="light"><strong>Visa</strong></h5>
                                            <h5 class="light small">Global bevorzugte Kreditkarte mit über 2,5 Milliarden Karten im Umlauf.</h5>
                                        </div>
                                        <div class="author-77">
                                            <h5 class="text-blue light text-left">Mehr erfahren</h5>
                                        </div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <section class="slide parallax" style="background:#1a1a1a">
        <div class="content">
            <div class="container">
                <div class="wrap">

                    <div class="fix-5-12 text-white ae-2 fromCenter margin-top-10 margin-bottom-10">
                        <h1 class="margin-bottom-4"><strong>Antworten auf mögliche Fragen</strong></h1>
                        <a class="button blue small stroke" href="{{route('hilfe-center')}}">Zum Hilfe-Center</a>
                    </div>


                    <div class="fix-12-12 text-white">
                        <div class="spread-bar-line3 ae-4 text-black  margin-bottom-4"></div>
                        <ul class="flex left margin-top-6">
                            <li class="col-6-12 margin-bottom-1 ae-3">
                                <h3 class="sourceSans">Was ist ImmoFound?</h3>
                                <p class="light small">ImmoFound ist eine innovative Internetplattform aus Baden-Württemberg, über die Privatpersonen zu Investoren werden und sich bereits mit Beträgen ab 50 € monatlich oder 250 € einmalig an unserem attraktiven Immobilienportfolio mittels Crowdinvesting beteiligen können. Damit eröffnet dir ImmoFound einen Markt, der bisher vorwiegend Großanlegern vorbehalten war: das direkte Investieren in teure Gewerbe-Immobilien.</p>
                            </li>
                            <li class="col-6-12 margin-bottom-1 ae-4">
                                <h3 class="sourceSans">Was ist Crowdinvesting?</h3>
                                <p class="light small">Crowdinvesting setzt sich zusammen aus den englischen Worten „Crowd“ (Menschenmenge) und „Investing“ (investieren). Beim Crowdinvesting schließen 	sich viele Investoren über das Internet zusammen, um gemeinsam ein großes Projekt 	zu finanzieren und eine Rendite zu erzielen. Durch diesen Zusammenschluss kannst du als einzelner Investor an unserem Portfolio profitieren!</p>
                            </li>
                            <li class="col-6-12 margin-bottom-1 ae-5">
                                <h3 class="sourceSans">Welche Kosten fallen für dich bei ImmoFound an?</h3>
                                <p class="light small">ImmoFound ist für dich als nicht registrierter oder registrierter Investor komplett kostenfrei.
                                    Dein Investment wird mit keinen Kosten belastet es fließt direkt in unser Portfolio.</p>
                            </li>
                            <li class="col-6-12 margin-bottom-1 ae-6">
                                <h3 class="sourceSans">Welche Daten muss ich angeben?</h3>
                                <p class="light small">Für den Registrierungs- & Investitionsprozess benötigen wir folgende Daten von dir, um u. a. den gesetzlichen Identifizierungspflichten nach zukommen:<br />

                                    Vollständigen Namen, Adresse, Geburtsdatum und Geburtsort, Bankverbindung, Steueridentifikationsnummer, Email und Telefonnummer</p>

                            </li><li class="col-6-12 margin-bottom-1 ae-3">
                                <h3 class="sourceSans">Wie steht es mit dem Datenschutz?</h3>
                                <p class="light small">Deine Daten werden vertraulich gemäß in Deutschland geltender Datenschutzbestimmungen erfasst, verarbeitet und gespeichert. Insbesondere werden wir deine Daten niemals ohne deiner Zustimmung an Dritte weitergeben, veröffentlichen 	oder für andere Zwecke als die Bearbeitung deines Investments und die Bereitstellung von Informationen für Dich, z.B. in Form von Bestätigungs-Mails oder jederzeit abbestellbaren 	Newslettern, nutzen.</p>
                            </li>
                            <li class="col-6-12 margin-bottom-1 ae-4">
                                <h3 class="sourceSans">Wie kann ich mein Benutzerkonto bei ImmoFound löschen?</h3>
                                <p class="light small">Auch wenn wir dich ungern als Mitglied verlieren wollen hast du natürlich die Möglichkeit 	dein Konto aufzulösen. Der Nutzungsvertrag für die Plattform wird auf unbegrenzte Zeit geschlossen. Falls Du deine Registrierung und damit den Nutzungsvertrag für die Plattform beenden willst, schreibe uns bitte eine entsprechende E-Mail an info@immofound.de. Deine laufenden Investments werden durch die Kündigung nicht berührt. Du wirst dann zukünftig über alles Wichtige per Post informiert.
                                </p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection