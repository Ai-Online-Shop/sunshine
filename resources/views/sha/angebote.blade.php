@component('layouts.sha')
    <style>
        .background-green{
            background: -webkit-linear-gradient(45deg, #eb6833 50%, #ea9043 50%);
            background: -webkit-linear-gradient(45deg, #eb6833 50%, #ea9043 50%);
        }
    </style>
    <section class="slide  background-green">
        <div class="content">
            <div class="container">
                <div class="wrap">

                    <div class="fix-12-12">
                        <h1 class="ae-2 fix-6-12 bold margin-bottom-5 text-white fromLeft">Das Sunshine-Wellness Angebot für unsere Gäste:</h1>

                        <ul class="grid">
                            <li class="col-6-12 left cell-33">
                                <ul class="tabs controller uppercase ae-3 fromCenter" data-slider-id="31">
                                    <li class="selected">Sunshine-Wellness-Paket</li>
                                    <li>Karibik-Flair-Paket</li>
                                    <li>Orientalischer Zauber</li>
                                    <li>Sence of Asia-Paket</li>
                                    <li>Day-Spa</li>
                                    <li>Kosmetik Programme</li>
                                    <li>Wellness- und Vital-Massagen (I)</li>
                                    <li>Wellness- und Vital-Massagen (II)</li>
                                    <li>Wellness- und Vital-Massagen (III)</li>
                                    <li>Wellness- und Vital-Massagen (IV)</li>
                                    <li>Aktuelle Preisliste (PDF)</li>
                                </ul>
                            </li>
                            <li class="col-6-12 left ae-2 fromRight">
                                <ul class="slider" data-slider-id="31">
                                    <li class="selected">
                                        <div class="pad-blur shadow center">

                                            <svg style="width:65px;height:65px">
                                                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#logo"></use>
                                            </svg>
                                            <h3 class="big">Unser Sunshine-Wellness-Paket dauert ca. 2,5 Stunden.</h3>
                                            @if(Session::has('success'))
                                                <p class="text-ac">
                                                    {{ Session::get('success') }}
                                                </p>
                                            @endif
                                            <div class="gradient-line-3 gradient-left gradient-width-120 margin-bottom-2 margin-top-1"></div>
                                            <h5 class="big">Willkommensgetränk | Panoramasauna | Ganzkörperpeeling | Ganzkörperölmassage | Kopfmassage</h5>
                                            <p class="micro margin-top-2">Wir heißen Sie mit einem leckeren, frisch zubereiteten Früchtecocktail willkommen.
                                                Danach können Sie sich in unserer Panoramasauna entspannen. Genießen Sie den Blick über die Hohenloher Landschaft.
                                                Anschließend erfährt Ihr Körper eine angenehme Peelingreinigung mit hochwertigen Produkten.</p>
                                            <p class="micro margin-top-2">
                                                Ihre Haut wird danach nicht nur wohlriechend duften, sondern sich samtweich und strahlend anfühlen
                                                Hierauf folgt eine Ganzkörper- Öl- und Kopfmassage. Bei dieser Anwendung wird Ihr Körper mit sanften,
                                                gleichmäßig langsamen Bewegungen massiert, was zur Folge hat, dass nicht nur Ihr Körper, sondern auch Ihre Seele tief
                                                entspannt und Sie sich anschließend wie neu geboren fühlen.
                                            </p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="pad-blur shadow center">

                                            <svg style="width:65px;height:65px">
                                                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#logo"></use>
                                            </svg>
                                            <h3 class="big">Unser Karibik-Flair-Paket genießen Sie ca. 3 Stunden.</h3>
                                            @if(Session::has('success'))
                                                <p class="text-ac">
                                                    {{ Session::get('success') }}
                                                </p>
                                            @endif
                                            <div class="gradient-line-3 gradient-left gradient-width-120 margin-bottom-2 margin-top-1"></div>
                                            <h5 class="big">Willkommensgetränk | Ganzkörperpeeling | Tropische Früchte | Whirlpool |  Schokoladen Ganzkörpermassage und Gesichtsmassage | Erlebnisdusche</h5>

                                            <p class="micro margin-top-2">Nach einem traumhaft karibisch- tropischen Körperpeeling werden Ihnen tropische Früchte gereicht.
                                                Sie sind nicht nur wohlschmeckend sondern stärken auch Ihr Immunsystem. Anschließend können Sie in unserem Whirlpool mit karibischen Salzen und Meeresrauschen entspannen.
                                                Baden macht hungrig. Deshalb reichen wir Ihnen vor Ihrer Schokomassage eine Auswahl von edlen karibischen Schokoladenpralinen. Freuen Sie sich auf die nun
                                                folgende Ganzkörper-Schokoladen-Massage. Eingehüllt in den köstlichen Duft unwiderstehlicher Schokolade können Sie diese Anwendung ohne eine einzige Kalorie genießen.</p>
                                            <p class="micro margin-top-2">
                                                Die köstlich duftende Mischung von Kakaobutter, mit Mandelöl und karibischem Zimt, hat nicht nur eine hervorragend stra ende und ölp egende Wirkung, sondern setzt auch mit stimulierenden Endorphinen und Serotonin Glücksgefühle frei. Beruhigend für alle Sinne.
                                                Genießen Sie anschließend in unserer Erlebnisdusche unter unserem Wasserfall oder dem tropischen Regen wie seidenweich und wohlriechend Ihre Haut sich noch lange nach unserer Anwendung fühlen wird.
                                            </p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="pad-blur shadow center">

                                            <svg style="width:65px;height:65px">
                                                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#logo"></use>
                                            </svg>
                                            <h3 class="big">Ihre 1001 Nacht endet nach ca. 3,5 Stunden.</h3>

                                            <div class="gradient-line-3 gradient-left gradient-width-120 margin-bottom-2 margin-top-1"></div>
                                            <h5 class="big">Willkommensgetränk | Panoramasauna | Ganzkörperpeeling | Schaummassage (Hammam) | Honig-Milch-Massage | Cleopatrabad | Ein Glas Prosecco</h5>

                                            <p class="micro margin-top-2">Ihr Einblick in die arabische Welt beginnt mit unserem orientalischen, kräfteweckenden Cocktail.
                                                Während Ihre Haut in unserer Panoramasauna durchblutet wird, entspannt Ihre Seele bei Düften aus 1001 Nacht. Gerüche wie Zimt, Anis,
                                                Ingwer und Koriander versetzen Sie an einen Ort, der von Palästen mit Zwiebeltürmchen, verschlungen Ornamenten und Mystiken und Geheimnissen geprägt ist.</p>
                                            <p class="micro margin-top-2">
                                                Nachdem Sie sich unter der Erlebnisdusche erfrischt haben, erwartet Sie ein Ganzkörperpeeling auf unserer temperierten Hammam-Marmorliege.
                                                Durch die folgende sahnige Schaummassage wird Ihre Haut samtweich und fühlt sich durch die tausenden Schaumbläschen prickelnd an.
                                                Danach entspannen Sie bei einer Honig-Milch-Ölmassage. Um dieses luxuriöse Erlebnis noch zu steigern, tauchen Sie nun mit Ihrem
                                                ganzen Körper wie Königin Cleopatra in ein warmes Bad mit Honigmilch und wohltuenden Ölen.
                                                Genießen Sie dabei ein Glas Prosecco.
                                            </p>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="pad-blur shadow center">

                                            <svg style="width:65px;height:65px">
                                                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#logo"></use>
                                            </svg>
                                            <h3 class="big">Unser Sence of Asia begleitet Sie für ca. 4 Stunden.</h3>
                                            @if(Session::has('success'))
                                                <p class="text-ac">
                                                    {{ Session::get('success') }}
                                                </p>
                                            @endif
                                            <div class="gradient-line-3 gradient-left gradient-width-120 margin-bottom-2 margin-top-1"></div>
                                            <h5 class="big">Willkommensgetränk | Panoramasauna | Ganzkörperpeeling | Shirodhara Stirnguss (Ayurveda) | byanga Ganzkörpermassage | Padabyanga Fußre exzonen-Massage</h5>

                                            <p class="micro margin-top-2">Entspannen Sie bei einem Ganzkörperpeeling mit Jasmin-Reis- Kristallen und Mandelcreme.
                                                Während Ihr Körper gereinigt wird, entspannt sich ihr Kopf bei einer königlichen Öl-Stirnguss- Therapie.
                                                Erleben Sie wie sich das warme Ayurvedische Sesam-Öl auf Ihrer Stirn verteilt und welche tiefe Entspannung diese Anwendung mit sich bringt.</p>
                                            <p class="micro margin-top-2">
                                                Ayurvedische Behandlungen haben sich insbesondere gegen Verspannungen, Stress, psychosmatischen Beschwerden, Schlaflosigkeit,
                                                Migräne und Nervosität bewährt. Anschließend entspannen Sie in unserer Panoramasauna bei einer Sound-Licht-Therapie.
                                                Nach einer Erlebnisdusche erwartet Sie eine Abhyanga Ganzkörpermassage. Bei dieser Behandlung werden Sie von Kopf
                                                bis Fuß mit warmen, kostbaren Ölen verwöhnt. Durch Akupressur entlang der Energiebahnen wird der Energie uss im Körper
                                                gesteigert und fördert so auf natürliche Weise das Wohlbenden. Erleben Sie wie anschließend bei einer Fußreexzonenmassage alle Ihre Organe
                                                mit Energie versorgt werden.
                                            </p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="pad-blur shadow center">

                                            <svg style="width:65px;height:65px">
                                                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#logo"></use>
                                            </svg>
                                            <h3 class="big">Unser Day-Spa können Sie von 2 bis 4 Stunden für max.
                                                4 Personen buchen.</h3>
                                            @if(Session::has('success'))
                                                <p class="text-ac">
                                                    {{ Session::get('success') }}
                                                </p>
                                            @endif
                                            <div class="gradient-line-3 gradient-left gradient-width-120 margin-bottom-2 margin-top-1"></div>
                                            <h5 class="big">Verbringen Sie ein paar unvergessliche Stunden in unserem Privat-Day-Spa und stellen
                                                Sie Ihr persönliches Verwöhnprogramm mit Hilfe unserer Spa-Therapeuten zusammen.</h5>

                                            <p class="micro margin-top-2">Die Auswahl lässt sich fast grenzenlos aus unserem Spa-Behandlungs-Menü zusammenstellen. Genießen
                                                Sie Ihre Anwendungen in privaten Räumlichkeiten mit allen Annehmlichkeiten eines modernen Day-Spas, wie Panoramasauna, Hammamliege, Relaxliegen, Whirlpool und Erlebnisdusche. </p>
                                            <p class="micro margin-top-2">
                                                Während Ihres Aufenthalts erfrischen Sie sich, falls gewünscht mit Fruchtcocktails, Prosecco und kleinen liebevoll zubereiteten Snacks.
                                                Kehren Sie dem Alltag den Rücken und genießen Sie Ihren Kurzurlaub mit Freunden in unserem Sunshine Day Spa. Sie werden von dem Service und dem Ambiente begeistert sein.
                                            </p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="pad-blur shadow center">

                                            <svg style="width:65px;height:65px">
                                                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#logo"></use>
                                            </svg>
                                            <h3 class="big">Kosmetik Programme</h3>
                                            <div class="gradient-line-3 gradient-left gradient-width-120 margin-bottom-2 margin-top-1"></div>
                                            <h5 class="big">Spa Gesichtsbehandlung</h5>
                                            <p class="micro">
                                                › Gesichtsreinigung <br />
                                                › Gesichtspeeling<br />
                                                › Kopfmassage<br />
                                                › Gesicht-, Hals-, und Dekolleté-Massage <br />
                                                › Gesichtsmaske<br />
                                                › Abschlusspflege
                                            </p>
                                            <h5 class="big">Intensive Entspannung ca. 2 Std.:</h5>
                                            <p class="micro">
                                                › Fußbad & Peeling<br />
                                                › Ganzkörper-Massage<br />
                                                › Hand-Peeling & Maske<br />
                                                › Spa-Gesichtsbehandlung <br />
                                                › Hand- & Fuß-Massage
                                            </p>
                                            <h5 class="big">Sunshine Luxus Tag ca. 5 Std.:</h5>
                                            <p class="micro">
                                                › Ein Glas Prosecco<br />
                                                › Panorama-Sauna<br />
                                                › Ganzkörper-Peeling<br />
                                                › Cleopatra-Bad<br />
                                                › Ganzkörper-Öl-Massage <br />
                                                › Spa Gesichtsbehandlung <br />
                                                › Hand-Maske & -Massage <br />
                                                › Fuß-Maske & -Massage<br />
                                                › Wellness Snack
                                            </p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="pad-blur shadow center">

                                            <svg style="width:65px;height:65px">
                                                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#logo"></use>
                                            </svg>
                                            <h3 class="big">Wellness- und Vital-Massagen (I)</h3>
                                            @if(Session::has('success'))
                                                <p class="text-ac">
                                                    {{ Session::get('success') }}
                                                </p>
                                            @endif
                                            <div class="gradient-line-3 gradient-left gradient-width-120 margin-bottom-2 margin-top-1"></div>
                                            <h5 class="big">Orientalische Kopf- und Schulter-Massage</h5>
                                            <p class="micro">Die Durchblutung Ihrer Kopfhaut wird stimuliert, die Verspannungen Ihrer Halsmuskulatur werden gelöst.
                                            </p>
                                            <h5 class="big">Fußrelaxing-Massage</h5>
                                            <p class="micro">Gönnen Sie Ihren müden und gestressten Füßen eine wohltuende Massage.
                                            </p>
                                            <h5 class="big">Thai-Fuß-Reflexzonen-Massage</h5>
                                            <p class="micro">Durch den Einsatz eines Holzmassagestabes wird ein Gefühl von innerer Ruhe und Ausgeglichenheit hervorgerufen.
                                            </p>
                                            <h5 class="big">Hot-Stone-Massage</h5>
                                            <p class="micro">
                                                Durch das Auflegen von warmen Steinen auf die Energiezentren und die gleichzeitige Massage mit den erwärmten
                                                Steinen wird der Energie uss angeregt, Blockaden gelöst und können Muskeln tiefenwirksam gelockert werden.
                                            </p>
                                            <h5 class="big">Anti-Stress-Massage</h5>
                                            <p class="micro">
                                                Durch langsame und rhythmische Streichbewegungen wirkt diese Massage entspannend auf das Nervensystem
                                                und versetzt den Körper und die Seele in einen Ruhezustand.
                                            </p>
                                            <h5 class="big">Honig-Öl-Massage</h5>
                                            <p class="micro ">
                                                Bei der warmen Honig Öl Massage werden Entgiftungsprozesse und Durchblutung unterstützt.
                                                Sie stimuliert und entspannt Ihren Körper und Geist und reduziert Alterserscheinungen.
                                            </p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="pad-blur shadow center">

                                            <svg style="width:65px;height:65px">
                                                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#logo"></use>
                                            </svg>
                                            <h3 class="big">Wellness- und Vital-Massagen (II)</h3>
                                            @if(Session::has('success'))
                                                <p class="text-ac">
                                                    {{ Session::get('success') }}
                                                </p>
                                            @endif
                                            <div class="gradient-line-3 gradient-left gradient-width-120 margin-bottom-2 margin-top-1"></div>
                                            <h5 class="big">Kräuterstempel-Massage</h5>
                                            <p class="micro">Die Kräuterstempel werden vor der Behandlung über Wasserdampf erhitzt. Die darin befindlichen Heilkräuter fördern die
                                                Durchblutung der Haut und Regeneration und können zur Entgiftung des Organismus beitragen.
                                            </p>
                                            <h5 class="big">Schokoladen-Massage</h5>
                                            <p class="micro">
                                                Bei dieser süßen aber kalorienarmen Behandlung wird Ihre Haut mit warmer Schokolade überzogen.
                                                Der sinnliche Duft und die Inhaltsstoffe der Schokolade bewirken die Ausschüttung von Glückshormonen.
                                            </p>
                                            <h5 class="big">Körperpackungen</h5>
                                            <p class="micro">
                                                Sie vereinen die Entspannung von Körper und Geist mit einer exzellenten Pflege der Haut. Umhüllt und geborgen in wohliger Wärme wird die Haut mit ausgewählten Nährstoffen versorgt.                                            </p>
                                            <h5 class="big">Seifenschaum-Massage</h5>
                                            <p class="micro">
                                                Ihr Körper wird auf unserer Hammamliege gepeelt. Danach bekommen Sie eine Seifenmassage, bei der Ihr gesamter Körper mit Schaum umhüllt wird, damit Sie sich leicht und schwerelos fühlen.
                                            </p>
                                            <h5 class="big">Sunshine-Massage</h5>
                                            <p class="micro">
                                                Diese Massage ist für anspruchsvolle Genießer, die das ganze Know-how unserer Therapeuten von Kopf bis Fuß erleben möchten.</p>

                                        </div>
                                    </li>
                                    <li>
                                        <div class="pad-blur shadow center">

                                            <svg style="width:65px;height:65px">
                                                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#logo"></use>
                                            </svg>
                                            <h3 class="big">Wellness- und Vital-Massagen (III)</h3>
                                            @if(Session::has('success'))
                                                <p class="text-ac">
                                                    {{ Session::get('success') }}
                                                </p>
                                            @endif
                                            <div class="gradient-line-3 gradient-left gradient-width-120 margin-bottom-2 margin-top-1"></div>
                                            <h5 class="big">Nacken-Rücken-Massage</h5>
                                            <p class="micro">Durch Druck auf spezielle Vitalpunkte werden Verspannungen und Blockaden gelockert und gelöst.</p>
                                            <h5 class="big">Ingham-Fußreflexzonen-Massage</h5>
                                            <p class="micro">Mit dem Daumen werden Energiepunkte revitalisiert und Verspannungen ganzheitlich gelöst.</p>
                                            <h5 class="big">Schwedische-Massage</h5>
                                            <p class="micro">
                                                Mit wärmenden Streichungen, vitalisierenden Knetungen, Zirkelungen und angenehmen schwingenden Bewegungen wird für ein
                                                nachhaltiges Wohlbefinden gesorgt. Sie stärken den Kreislauf und können für einen gesunden Schlaf helfen.
                                            </p>
                                            <h5 class="big">Sport-Öl-Massage</h5>
                                            <p class="micro">
                                                Die Sportmassage ist eine kräftige, tiefgehende Massage, welche im wesentlichen darauf ausgerichtet ist, verspannte Muskeln zu lockern und die daraus entstehenden Schmerzen zu beseitigen.
                                            </p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="pad-blur shadow center">

                                            <svg style="width:65px;height:65px">
                                                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#logo"></use>
                                            </svg>
                                            <h3 class="big">Wellness- und Vital-Massagen (IV)</h3>
                                            @if(Session::has('success'))
                                                <p class="text-ac">
                                                    {{ Session::get('success') }}
                                                </p>
                                            @endif
                                            <div class="gradient-line-3 gradient-left gradient-width-120 margin-bottom-2 margin-top-1"></div>
                                            <h5 class="big">Traditionelle-Thai-Massage</h5>
                                            <p class="micro">
                                                Bei der fernöstlichen Massagetechnik werden Hände, Füße, Ellbogen und Knie eingesetzt um Druck auf die sogenannten Sen-Punkte zu erzeugen.
                                                Das fördet den freien Energie uss im Körper und steigert so auf natürliche Weise das Wohlbefinden.
                                            </p>
                                            <h5 class="big">Abhyanga-Massage</h5>
                                            <p class="micro">
                                                Durch eine Ganzkörper ayurvedische Ölmassage wird das gesamte Nervensystem beruhigt und Erschöpfungen und Stress können abgebaut werden.
                                            </p>
                                            <h5 class="big">Shirodhara-Massage</h5>
                                            <p class="micro">
                                                Die ayurvedische Stirngusstherapie sorgt mithilfe eines warmen gleichmäßigem Ölstrahls der über die Stirn geführt wird,
                                                für einen tiefen Entspannungszustand. Das Nervensystem wird beruhigt und so können chronische Kopfschmerzen, hoher Blutdruck, Schlafstörungen und Burnout-Syndrome reduziert bzw. vorgebeugt werden.
                                            </p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="pad-blur shadow center">

                                            <svg style="width:65px;height:65px">
                                                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#logo"></use>
                                            </svg>
                                            <h3 class="big">Aktuelle Preisliste (PDF)</h3>
                                            @if(Session::has('success'))
                                                <p class="text-ac">
                                                    {{ Session::get('success') }}
                                                </p>
                                            @endif
                                            <div class="gradient-line-3 gradient-left gradient-width-120 margin-bottom-2 margin-top-1"></div>
                                            <h5 class="big">Laden Sie sich unsere aktuellen Preise und Angebote einfach hier herunter.</h5>
                                            <a class="text-blue button green small rounded margin-top-3" href="/downloadsha">Aktuelle Preisliste</a> <br />
                                            <a class="text-blue button green small rounded margin-top-1" href="/downloadImmo4">Aktuelle Angebote</a> <br />


                                        </div>
                                    </li>

                                </ul>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </section>

@endcomponent