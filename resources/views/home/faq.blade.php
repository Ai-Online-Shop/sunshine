@extends('layouts.app')
@section('title') @if( ! empty($title)) {{ $title }} | @endif @parent @endsection

@section('content')
    <section class="slide parallax" style="background:#fafafa">
        <div class="content">
            <div class="container">
                <div class="wrap">

                    <div class="fix-7-12 margin-top-10 margin-bottom-10">
                        <h1 class=" ae-2 fromCenter  margin-bottom-4"><strong>Fragen & Antworten</strong></h1>
                    <!--
                        <form action="/search" method="POST" role="search" class="margin-top-5">
                            {{ csrf_field() }}
                                <input type="text" class="form-control ae-2 fromBlur center" name="q" placeholder="Was suchst du?">
                        </form>
                        -->
                    </div>


                    <div class="fix-12-12">
                        <div class="spread-bar-line3 ae-4 text-black  margin-bottom-4"></div>

                        <ul class="flex left margin-top-6">
                            <li class="col-6-12 margin-bottom-1 ae-3">
                                <h3 class="sourceSans">Was ist ImmoFound?</h3>
                                <p class="small">ImmoFound ist eine innovative Internetplattform aus Baden-Württemberg, über die Privatpersonen zu Investoren werden und sich bereits mit Beträgen ab 50 € monatlich oder 250 € einmalig an unserem attraktiven Immobilienportfolio mittels Crowdinvesting beteiligen können. Damit eröffnet dir ImmoFound einen Markt, der bisher vorwiegend Großanlegern vorbehalten war: das direkte Investieren in teure Gewerbe-Immobilien.</p>
                            </li>
                            <li class="col-6-12 margin-bottom-1 ae-4">
                                <h3 class="sourceSans">Was ist Crowdinvesting?</h3>
                                <p class="small">Crowdinvesting setzt sich zusammen aus den englischen Worten „Crowd“ (Menschenmenge) und „Investing“ (investieren). Beim Crowdinvesting schließen 	sich viele Investoren über das Internet zusammen, um gemeinsam ein großes Projekt 	zu finanzieren und eine Rendite zu erzielen. Durch diesen Zusammenschluss kannst du als einzelner Investor an unserem Portfolio profitieren!</p>
                            </li>
                            <li class="col-6-12 margin-bottom-1 ae-5">
                                <h3 class="sourceSans">Welche Kosten fallen für dich bei ImmoFound an?</h3>
                                <p class="small">ImmoFound ist für dich als nicht registrierter oder registrierter Investor komplett kostenfrei.
                                    Dein Investment wird mit keinen Kosten belastet es fließt direkt in unser Portfolio.</p>
                            </li>
                            <li class="col-6-12 margin-bottom-1 ae-6">
                                <h3 class="sourceSans">Welche Daten muss ich angeben?</h3>
                                <p class="small">Für den Registrierungs- & Investitionsprozess benötigen wir folgende Daten von dir, um u. a. den gesetzlichen Identifizierungspflichten nach zukommen:<br />

                                    Vollständigen Namen, Adresse, Geburtsdatum und Geburtsort, Bankverbindung, Steueridentifikationsnummer, Email und Telefonnummer</p>

                            </li><li class="col-6-12 margin-bottom-1 ae-3">
                                <h3 class="sourceSans">Wie steht es mit dem Datenschutz?</h3>
                                <p class="small">Deine Daten werden vertraulich gemäß in Deutschland geltender Datenschutzbestimmungen erfasst, verarbeitet und gespeichert. Insbesondere werden wir deine Daten niemals ohne deiner Zustimmung an Dritte weitergeben, veröffentlichen 	oder für andere Zwecke als die Bearbeitung deines Investments und die Bereitstellung von Informationen für Dich, z.B. in Form von Bestätigungs-Mails oder jederzeit abbestellbaren 	Newslettern, nutzen.</p>
                            </li>
                            <li class="col-6-12 margin-bottom-1 ae-4">
                                <h3 class="sourceSans">Wie kann ich mein Benutzerkonto bei ImmoFound löschen?</h3>
                                <p class="small">Auch wenn wir dich ungern als Mitglied verlieren wollen hast du natürlich die Möglichkeit 	dein Konto aufzulösen. Der Nutzungsvertrag für die Plattform wird auf unbegrenzte Zeit geschlossen. Falls Du deine Registrierung und damit den Nutzungsvertrag für die Plattform beenden willst, schreibe uns bitte eine entsprechende E-Mail an info@immofound.de. Deine laufenden Investments werden durch die Kündigung nicht berührt. Du wirst dann zukünftig über alles Wichtige per Post informiert.
                                </p>
                            </li>
                            <li class="col-6-12 margin-bottom-1 ae-5">
                                <h3 class="sourceSans">Wie kann ich mich genauer über das ImmoFound Immobilien Portfolio informieren?</h3>
                                <p class="small">Da du bei uns nicht in einzelne Immobilien sondern in ein von uns erstelltes Immobilien Portfolio der ImmoFound GmbH investierst erhältst du auf unserer Homepage weitere Informationen als Exposé - PDF zum download, auch kannst du unsere aktuellen Immobilien welche sich in unserem Portfolio befinden unter Objekte & Mieter einsehen.</p>
                            </li>
                            <li class="col-6-12 margin-bottom-1 ae-6">
                                <h3 class="sourceSans">Wer kann bei ImmoFound investieren?</h3>
                                <p class="small">Auf ImmoFound kann grundsätzlich jeder, der volljährig und unbeschränkt geschäftsfähig ist, ab einer Investitionssumme von 50 € monatlich oder ab 250 € einmalig investieren. Als Unternehmen ist es aktuell erforderlich, persönlich mit uns Kontakt aufzunehmen, am besten schreibst Du uns einfach eine E-Mail.</p>
                            </li><li class="col-6-12 margin-bottom-1 ae-3">
                                <h3 class="sourceSans">Wie investiere ich auf ImmoFound?</h3>
                                <p class="small">Das Investieren bei ImmoFound geschieht mit unserer App vollständig elektronisch und dauert nur wenige Minuten. Dazu gehen Sie auf unserer Website und klicken auf die „Jetzt investieren“-Schaltfläche. Ein kleines Fenster erscheint und fragt dich in mehreren Schritten alle relevante Daten für den Investitionsprozess ab. Im letzten Schritt werden alle 	Dokumente, Verträge und ein Risikohinweis bereitgestellt. Nachdem Du diese gelesen und 	bestätigt hast, kannst Du den Investitionsprozess abschließen. Nach erfolgreicher Investition erhältst Du eine E-Mail mit dem Vertrag. Das postalische Versenden von 	Dokumenten ist nicht erforderlich. Die Zahlung erfolgt mittels Überweisung, Lastschriftverfahren, etc... . Auch ist eine für dich kostenlose Zahlung per PayPal oder Bitcoin möglich.</p>
                            </li>
                            <li class="col-6-12 margin-bottom-1 ae-4">
                                <h3 class="sourceSans">Was erhalte ich für mein Geld?</h3>
                                <p class="small">Deine Investition erfolgt in Form der Gewährung eines zweckungebundenen Nachrangdarlehens an die ImmoFound GmbH, mit der Du eine Vertragsbeziehung eingehst. Mit Ihrer Forderung ist der Anspruch auf eine feste jährliche Verzinsung zu einer vereinbarten Laufzeit verbunden. Genaue Details kannst du aus unserer Homepage entnehmen oder du schreibst uns eine Email mit dem Stichwort Darlehen an info@immofound.de.</p>
                            </li>
                            <li class="col-6-12 margin-bottom-1 ae-5">
                                <h3 class="sourceSans">Wie wird der Zins festgelegt?</h3>
                                <p class="small">Die Verzinsung und die Laufzeit wird vom Darlehensnehmer also uns der ImmoFound GmbH festgelegt. Diese beträgt aktuell Stand 01.08.2017 fest 3,40 % p. a. , die Laufzeit beträgt fest 60 Monate. Die Verzinsung erfolgt jährlich. Zinsänderung betreffen nur neue Investments und berühren bereits abgeschlossene Investments nicht. Eine Änderung zeigen wir auf unserer Homepage hervorgehoben an.</p>
                            </li>
                            <li class="col-6-12 margin-bottom-1 ae-6">
                                <h3 class="sourceSans">Was passiert mit meinem Geld?</h3>
                                <p class="small">Mit deinem Geld wird das von uns zusammengestellte Immobilien Portfolio finanziert. Ihr Kapital ist für die Realisierung der Projekte nicht zweckgebunden. Dein Geld fließt in ein sogenanntes „Blind Pool“ Investment unser Immobilien Portfolio - hier können wir die verschiedenen Risiken am besten verteilen. Für dein eingezahltes Kapital erhältst Du gegenüber dem Darlehensnehmer eine Forderung. Mit dieser Forderung ist ein Anspruch auf Rückzahlung des eingezahlten Kapitals inklusive einer Verzinsung verbunden.</p>
                            </li>


                            <li class="col-6-12 margin-bottom-1 ae-3">
                                <h3 class="sourceSans">Welche Finanzierungsform nutzt ImmoFound</h3>
                                <p class="small">Als Finanzvehikel nutzt ImmoFound zurzeit das Nachrangdarlehen. Somit stellen wir uns 	Mezzanine Kapitalzur verfügung, das ist eine Mischform aus Eigen- und Fremdkapital. Bilanziell ist das Mezzanine Kapital zwischen dem Fremdkapital (in den meisten Fällen ist das der Kredit der finanzierenden Bank) und dem Eigenkapital (eigenes Kapital des Darlehnnehmers) einzuordnen. Der Begriff „nachrangig“ im Namen des Darlehens bedeutet, dass das Nachrangdarlehen nach dem Fremdkapital (z.B. Bankkredite) bedient wird, jedoch vor dem Eigenkapital des Darlehensnehmers.</p>
                            </li>
                            <li class="col-6-12 margin-bottom-1 ae-4">
                                <h3 class="sourceSans">Ist meine Investment bei ImmoFound wie ein Immobilienfond?</h3>
                                <p class="small">Nein. Mit dem Nachrangdarlehen vergibst Du ein Darlehen direkt an die ImmoFound GmbH. Das Darlehen wird inklusive der festen Verzinsung nach Ablauf der Darlehenslaufzeit direkt an dich zurückgeführt. Bei einem Immobilienfonds hingegen wäre die Rendite abhängig vom Erfolg des Fondsmanagements. Beim Nachrangdarlehen liegt ein fester Zinsanspruch zugrunde. Stand 01.08.2017 liegt dieser bei 3,40 % p. a. . Außerdem investieren Sie in das Immobilien Portfolio der ImmoFound GmbH, welche Ihnen detailliert vorgestellt werden. Sie wissen dementsprechend genau, wofür Ihr Kapital verwendet wird.
                                </p>
                            </li>
                            <li class="col-6-12 margin-bottom-1 ae-5">
                                <h3 class="sourceSans">Welche Rechte und Pflichten habe ich?</h3>
                                <p class="small">Mit einem nachrangigen Darlehen hast du keine direktes Mitspracherecht, wie beispielsweise auf der Hauptversammlung einer Aktiengesellschaft. Grundsätzlich bestehen für Investoren neben der Bereitstellung des von dir gewählten 	Investitionsbetrages keine weiteren Pflichten. Es gibt insbesondere keine Nachschusspflicht. In deinem eigenen Interesse solltest Du uns jedoch über Änderungen deiner Kontaktdaten oder deiner Bankverbindung informieren, um eine reibungslose Rückzahlung deines Kapitals inklusive der Verzinsung zum Ende der Laufzeit zu gewährleisten.</p>
                            </li>
                            <li class="col-6-12 margin-bottom-1 ae-6">
                                <h3 class="sourceSans">Welche Sicherheiten bietet ImmoFound mir?</h3>
                                <p class="small">Durch unser Croudinvesting bieten wir dir mehrere Sicherheitsaspekte:

                                    1. Das Eigenkapital unserer Firma <br />
                                    2. Eine Risiko Eingrenzung durch unser Immobilien Portfolio mit mehreren Immobilien Standorte mit bester Lage.<br />
                                    3. Verschiedene langfristige Mietverträge mit unseren Mietern wie z. B. Norma, Carglass, Total, usw. welche eine hohe Liquidität und eine Positive Bonitätsauskunft vorweisen.<br />
                                    4. Die Bausubstanz der Gebäude welche in unserem Portfolio sind sowie die Grundstücke und ihrer einmaligen Lage in Ballungsgebieten und hoch frequentierten Regionen.<br />
                                    5. Der positive Trend des aktuellen Immobilienmarktes</p>
                            </li>


                            <li class="col-6-12 margin-bottom-1 ae-3">
                                <h3 class="sourceSans">Welche Risiken gibt es?</h3>
                                <p class="small">Das Nachrangdarlehen wird als ein nachrangiges Darlehen dem Darlehensgeber eingeräumt. Es ist ein Darlehen, dessen Rückerstattung im Falle einer Liquidation oder einer Insolvenz der Darlehensnehmerin erst dann durchgeführt werden darf, nachdem alle nicht nachrangigen Forderungen der Gläubiger zurückerstattet wurden. Es besteht, wie bei allen in die Zukunft gerichteten wirtschaftlichen Aktivitäten, das Risiko eines Totalverlustes. Es gibt allerdings keine Nachschusspflicht. Hinweis gemäß § 12 Abs. 2 Vermögensanlagengesetz
                                    Der Erwerb dieser Vermögensanlage ist mit erheblichen Risiken verbunden und kann zum vollständigen Verlust des eingesetzten Vermögens führen.</p>
                            </li>
                            <li class="col-6-12 margin-bottom-1 ae-4">
                                <h3 class="sourceSans">Was passiert wenn der Immobilien Markt einbricht?</h3>
                                <p class="small">In den letzten Jahren haben wir häufiger gesehen, dass unvorhersehbare, externe Faktoren zum Einbruch des Immobilienmarktes führen konnten. Dies muss allerdings nicht zwingend zu Beeinträchtigungen für ein Immobilienprojekt führen. In unserem Fall haben 	wir für unser Immobilien-Portfolio mehrere langfristige Mietverträge mit bekannten und liquiden Firmen geschlossen, die auch bei einem schlechten Immobilien Markt von unseren Mietern zu bedienen sind. In Ballungszentren mit Wohnungsmangel und gleichzeitigem Bevölkerungswachstum beispielsweise, dürften die Auswirkungen kaum spürbar sein und somit ein Immobilienprojekt nicht gefährden. Aber auch in diesem Fall gilt: Ihr Anspruch auf fristgerechte Rückzahlung des Darlehensbetrages inklusive Zinsen bleibt grundsätzlich unberührt.
                                </p>
                            </li>
                            <li class="col-6-12 margin-bottom-1 ae-5">
                                <h3 class="sourceSans">Welches Szenario könnte passieren damit ich Verluste erfahre?</h3>
                                <p class="small">Grundsätzlich alle Umstände, die dazu führen, dass wir die ImmoFound GmbH also dein Darlehensnehmer die Darlehensgeber nicht bedienen kann und der Verkaufserlös der entsprechenden Immobilien die Ansprüche der Darlehensgeber nicht befriedigen kann.
                                    Solche Umstände können zum Beispiel sein: Neben der Immobilie wird eine Kläranlage gebaut, woraufhin bestehende Mieter ausziehen, keine neuen Mieter zu für den Immobilienbesitzer kostentragenden Konditionen einziehen möchten und dieser die Immobilie daraufhin mit Verlusten veräußern muss.</p>
                            </li>
                            <li class="col-6-12 margin-bottom-1 ae-6">
                                <h3 class="sourceSans">Kann ich auch schon vor Beendigung des Investment über mein Geld verfügen?</h3>
                                <p class="small">Dem Beteiligungsangebot liegt eine feste Laufzeit von 60 Monaten zugrunde. Grundsätzlich kann während der Laufzeit nicht über das eingezahlte Geld verfügt werden. Der Darlehensvertrag ist nach Ablauf der Widerrufsfrist von 14 Tagen nicht kündbar.</p>
                            </li>
                            <li class="col-6-12 margin-bottom-1 ae-6">
                                <h3 class="sourceSans">Wie werden meine Erträge aus meinem Investment bei der ImmoFound GmbH steuerlich behandelt?</h3>
                                <p class="small">Die Zinserträge aus deinem ImmoFound Darlehen sind grundsätzlich Einkünfte aus Kapitalvermögen, soweit die Anlage aus dem steuerlichen Privatvermögen erfolgt. Die Erträge unterliegen in diesem Fall der Abgeltungssteuer mit einem Steuersatz in Höhe von maximal 25 % plus Solidaritätszuschlag und ggf. Kirchensteuer. Die Abgeltungssteuer wird nicht von uns einbehalten und abgeführt, da die Verzinsung der ImmoFound Darlehen nicht gewinnabhängig ist. Die Zinserträge sind daher in der persönlichen Einkommenserklärung des Anlegers zu deklarieren. Bei weiteren steuerlichen Fragen wende dich bitte an deinen Steuerberater oder an dein Finanzamt.</p>
                            </li>
                        </ul>
                        <a href="#" class="button blue crop margin-top-4 ae-7">Stelle eine Frage</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection