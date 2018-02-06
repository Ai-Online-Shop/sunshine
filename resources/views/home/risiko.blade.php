@extends('layouts.app')
@section('title') @if( ! empty($title)) {{ $title }} | @endif @parent @endsection

@section('content')
    <section class="slide" style="background-color:#121212;">
        <div class="content">
            <div class="container">
                <div class="wrap">
                    <div class="fix-9-12">
                        <div class="pad shadow left ae-3 pad-59">
                            <div class=" ae-3">
                                <h3 class="uppercase margin-top-3">Hinweis gemäß § 12 Abs. 2 Vermögensanlagengesetz</h3>
                                <p class="cropBottom margin-top-1">Der Erwerb dieser Vermögensanlage ist mit erheblichen Risiken verbunden und kann zum vollständigen Verlust des eingesetzten Vermögens führen.</p>
                            </div>
                            <div class="ae-4">
                                <h3 class="uppercase margin-top-3">GESETZLICHE PFLICHTANGABEN</h3>

                                <p class="cropBottom margin-top-1">Stand 01.07.2017</p>

                                <p class="cropBottom margin-top-1">Auch wenn wir nicht gesetzlich verpflichtet sind, da wir keine Anlagenvermittlung betreiben, möchten wir Ihnen wichtige Informationen über Risiken, Kosten, Nebenkosten und Interessenkonflikte mitteilen.</p>

                                <h3 class="uppercase margin-top-3">STATUSBEZOGENE INFORMATIONEN</h3>

                                <p class="cropBottom margin-top-1">ImmoFound GmbH</p>
                                <p class="cropBottom margin-top-1">Gaildorferstr. 88</p>
                                <p class="cropBottom margin-top-1">74564 Crailsheim</p>

                                <p class="cropBottom margin-top-1">07951/294747</p>
                                <p class="cropBottom margin-top-1"> 07951/294748</p>

                                <p class="cropBottom margin-top-1"> info@immofound.de</p>
                                <p class="cropBottom margin-top-1">www.immofound.de</p>

                                <p class="cropBottom margin-top-2">Gesetzlicher Vertreter ist Herr Domenic Haag</p>

                                <h3 class="uppercase margin-top-3">INFORMATIONEN ÜBER RISIKEN, KOSTEN, NEBENKOSTEN UND INTERESSENKONFLIKTE</h3>

                                    <h4 class="uppercase margin-top-3">Risiken</h4>

                                <h4 class="uppercase margin-top-3"> Hinweis gemäß § 12 Abs. 2 Vermögensanlagengesetz</h4>
                                <p class="cropBottom margin-top-1">Der Erwerb dieser Vermögensanlage ist mit erheblichen Risiken verbunden und kann zum vollständigen Verlust des eingesetzten Vermögens führen.
                                </p>
                                <p class="cropBottom margin-top-1"> Die mit der angebotenen Vermögensanlage (Nachrangdarlehens mit qualifiziertem Rangrücktritt) im Zusammenhang mit dem jeweiligen Immobilienportfolio einhergehenden Risiken (einschließlich einer Erläuterung der Hebelwirkung und ihrer Effekte sowie des Risikos des Verlustes der gesamten Kapitalanlage) sind in den Unterlagen zu der Crowdinvestition aufgeführt. Der Nachrangdarlehensgeber wird aufgefordert, die Risikohinweise vor seiner Anlageentscheidung vollständig zu lesen. Die Kenntnisnahme der Risikohinweise ist vom Nachrangdarlehensgeber zu Beginn des Investmentprozesses zu bestätigen. Eine zusammenfassende Darstellung der Risiken findet sich in einem Vermögensanlagen-Informationsblatt für die jeweilige Vermögensanlage, das dem Nachrangdarlehensgeber ebenfalls zu Beginn des Investmentprozesses zur Verfügung gestellt wird. Bei der Investition muss der Darlehensgeber alle wichtigen Informationen als gelesen und empfangen bestätigen. Anderseits ist ein Darlehensvertrag nicht möglich.
                                </p>
                                <p class="cropBottom margin-top-1">Kosten, Nebenkosten, weitere Kosten, Steuern
                                </p>
                                <p class="cropBottom margin-top-1">Ein Agio oder sonstige Kosten werden vom Nachrangdarlehensgeber nicht erhoben. Die Besteuerung der vom Nachrangdarlehensgeber aus der jeweiligen Vermögensanlage erzielten Einnahmen richtet sich nach seinen persönlichen Verhältnissen. Dem Nachrangdarlehensgeber wird empfohlen, sich erforderlichenfalls durch einen Steuerberater beraten zu lassen. Die dabei entstehenden Kosten trägt er persönlich. Darüber können dem Nachrangdarlehensgeber im Einzelfall weitere eigene Kosten im Zusammenhang mit der jeweiligen Vermögensanlage entstehen, etwa Kosten bei eigenen Recherchen, Bezug von kostenpflichtigen Informationsmaterialien u.ä.
                                </p>
                                <h3 class="uppercase margin-top-3"> Zahlungen, Gegenleistung</h3>

                                <p class="cropBottom margin-top-1">Der Nachrangdarlehensgeber hat nach ihm bestätigten Vertragsschluss den von ihm gezeichneten Nachrangdarlehensbetrag auf das von der ImmoFound geführte Bankkonto der Deutschen Bank einzuzahlen, soweit er nicht ein Lastschriftverfahren zum Einzug seines Nachrangdarlehensbetrages eingerichtet hat oder den fälligen Betrag per PayPal angewiesen hat. Die Zahlung ist innerhalb von 2 Wochen ab Vertragsschluss vorzunehmen. Bei prognosegemäßem Verlauf erhält der Nachrangdarlehensgeber am jeweiligen Vertragslaufzeitende der Vermögensanlage den Betrag seines gewährten Nachrangdarlehens zurückerstattet und eine ebenfalls endfällig zu zahlende Verzinsung von 3,40% p.a. (taggenaue Berechnung). Bei vorzeitiger außerordentlicher Auflösung des Vertragsverhältnisses durch die Nachrangdarlehensnehmerin erhält der Nachrangdarlehensgeber neben seinem Nachrangdarlehensbetrag die Verzinsung, die er bei plangemäßer voller Vertragslaufzeit endfällig erhalten hätte. Bei unplanmäßig schlechtem Verlauf der Vermögensanlage liegen die Beträge der Verzinsung und/oder des zurück zu gewährenden Nachrangdarlehensbetrags unter den geplanten Beträgen bis hin zum möglichen Totalausfall.
                                </p>
                                <h3 class="uppercase margin-top-3">Interessenkonflikte</h3>

                                <p class="cropBottom margin-top-1">In Ausübung der ImmoFound GmbH über die von ihr zur Verfügung gestellte Plattform www.immofound.de können sich Interessenkonflikte zwischen der ImmoFound GmbH sowie deren Mitarbeitern  („Mitarbeiter“) und den Nachrangdarlehensgebern ergeben.
                                </p>
                                <p class="cropBottom margin-top-1">Interessenkonflikte können sich insbesondere ergeben, wenn die ImmoFound GmbH / der Mitarbeiter selbst direkt oder indirekt in eine auf der Plattform www.immofound.de angebotene Vermögensanlage investiert.
                                In den vorgenannten Fällen könnten ImmoFound / der Mitarbeiter daran interessiert sein, dass möglichst schnell möglichst viele Besucher der Plattform diese Vermögensanlage zeichnen und möglichst viel Kapital gewähren. Die ImmoFound GmbH / der Mitarbeiter könnten vor diesem Hintergrund die von ImmoFound / dem Mitarbeiter durchzuführende Angemessenheitsprüfung an eigenen Interessen ausgerichtet durchführen und die Vermögensanlage für Nachrangdarlehensgeber als angemessen frei geben, obwohl diese im konkreten Fall nicht für den Nachrangdarlehensgeber angemessen wäre.
                                </p>
                                <p class="cropBottom margin-top-1">Bei persönlicher Kenntnis von Nachrangdarlehensgebern könnte ImmoFound / der Mitarbeiter Vorzüge einräumen.
                                </p>
                                <p class="cropBottom margin-top-1">Die ImmoFound GmbH hat organisatorische Vorkehrungen getroffen, die dazu dienen sollen, Interessenkonflikte so weit wie möglich zu vermeiden. Insbesondere besteht das Verbot, weder direkt noch indirekt in angebotene Vermögensanlagen zu investieren sowie keine Beratung oder Empfehlung zu den angebotenen Vermögensanlagen zu geben. Annahmen von Nachrangdarlehensgebern werden chronologisch nach ihrem Zugang entgegengenommen. Soweit die ImmoFound GmbH Zuwendungen im Zusammenhang mit den angebotenen Vermögensanlagen erhält, werden diese vorstehend bzw. in dem für die jeweilige Vermögensanlage geltenden Vermögensanlagen-Informationsblatt offen gelegt.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection