@extends('layouts.app')

@section('content')
    <div class="xs-banner inner-banner contet-to-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 align-self-center">
                    <div class="xs-banner-content">
                        <h2 class="banner-title wow fadeInLeft" data-wow-duration="1.5s">Geschäftsbedingungen</h2>
                        <p class="banner-sub-title wow fadeInUp" data-wow-duration="1.5s">  - Unsere AGB!</p>
                    </div>
                </div>
                <div class="col-lg-6 align-self-end">
                    <div class="inner-welcome-image-group ">
                        <img src="{{ asset('images/innerWelcome/blog.png') }}" alt="#">
                        <img src="{{ asset('images/innerWelcome/info.png') }}" class="banner-ico banner-ico-1" alt="#">
                        <img src="{{ asset('images/innerWelcome/board.png') }}" class="banner-ico banner-ico-2" alt="#">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="xs-section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-10 mx-auto">
                    <div class="xs-heading wow fadeIn">
                        <h2 class="heading-sub-title">Unsere</h2>
                        <h3 class="heading-title">Allgemeine <span>Geschäftsbedingungen</span></h3>
                    </div><!-- .xs-heading END -->
                </div>
            </div><!-- .row END -->
            <div class="row">
                <div class="col-md-12">
                    <h2 class="xs-title">Allgemeine Geschäftsbedingungen von “DeinCloudServer.de“</h2>
                    <br>
                    <h6>Unsere allgemeinen Geschäftsbedingungen sind bereits bei der Registrierung verbindlich.</h6><br>
                    <div class="terms-wraper wow fadeInUp">
                        <h6 class="xs-title">§ 1 - Allgemeines, Geltungsbereich</h6>
                        <ol class="order-list">
                            <li>Allen Verträgen, die zwischen Anbieter und Kunde über die Website geschlossen werden, liegen ausschließlich diese Allgemeinen Geschäftsbedingungen (im Folgenden AGB) zugrunde. Entgegenstehenden AGB des Kunden wird hiermit ausdrücklich widersprochen.</li>
                        </ol>
                    </div>

                    <div class="terms-wraper wow fadeInUp">
                        <h6 class="xs-title">§ 2 - Vertragsbildung und -gegenstand</h6>
                        <ol class="order-list">
                            <li>Das Angebot auf der Internetseite https://deincloudserver.de stellt kein rechtlich bindendes Angebot, sondern lediglich eine Aufforderung zur Bestellung dar. Irrtümer und Änderungen bleiben vorbehalten. Durch die Absendung der Bestellung gibt der Kunde ein verbindliches Angebot ab. Der Kaufvertrag kommt erst durch die ausdrückliche Annahmeerklärung des Anbieters in Form einer Bestätigungsemail oder durch die Freischaltung der Leistung zustande.</li>
                        </ol>
                    </div>

                    <div class="terms-wraper wow fadeInUp">
                        <h6 class="xs-title">§ 3 - Preise / Zahlungsbedingungen</h6>
                        <ol class="order-list">
                            <li>Der vom Kunden zu entrichtende Preis für die angebotene Leistung ergibt sich aus dem in der jeweiligen Angebotsbeschreibung von dem Anbieter angegebenen Festpreis. Eine Korrektur offensichtlicher Irrtümer bleibt dem Anbieter vorbehalten. Sofern sich aus der Artikelbeschreibung nichts anderes ergibt, gelten die Preise in EURO.</li>
                        </ol>
                    </div>

                    <div class="terms-wraper wow fadeInUp">
                        <h6 class="xs-title">§ 4 - Vertragsabwicklung</h6>
                        <ol class="order-list">
                            <li>Kunden, die eine Leistung bestellt haben, erhalten unmittelbar nach der Bestellung eine E-Mail (Erstkontaktmail), in der sämtliche bei dem Anbieter gespeicherten Einzelheiten des geschlossenen Vertrages nochmals zusammengefasst werden.</li>
                        </ol>
                    </div>

                    <div class="terms-wraper wow fadeInUp">
                        <h6 class="xs-title">§ 5 - Verpflichtungen des Kunden</h6>
                        <ol class="order-list">
                            <li>Der Kunde hat sicherzustellen, dass seine dem Anbieter bei Vertragsschluss mitgeteilten persönlichen Daten für die Vertragserfüllung, insbesondere die erreichbare E-Mail-Adresse und Lieferanschrift, richtig sind. Der Kunde gewährleistet außerdem, dass der E-Mail-Empfang unter der von ihm angegebenen Adresse technisch möglich ist und nicht durch z.B. Weiterleitung, Stilllegung oder Kapazitätsüberschreitung verhindert wird.</li>
                        </ol>
                    </div>

                    <h6>
                        Die Verantwortung für hochgeladene und eingestellte Inhalte liegt ausschließlich beim Kunden. Der Kunde verpflichtet sich keine fremden Urheberrechte, Markenrechte, etc. zu verletzen und den Anbieter von allen Ansprüchen freizuhalten, die durch etwaige Rechteverletzungen der von eingestellten Inhalten entstehen.
                    </h6>

                    <br>

                    <div class="terms-wraper wow fadeInUp">
                        <h6 class="xs-title">§ 6 - Leistungserbringung</h6>
                        <ol class="order-list">
                            <li>Die Einhaltung unserer Leistungsverpflichtung setzt die rechtzeitige und ordnungsgemäße Erfüllung der Verpflichtung des Kunden voraus. Die Einrede des nicht erfüllten Vertrages bleibt vorbehalten. Die Nichteinhaltung von Leistungsverpflichtungen bzw. die Unmöglichkeit der Leistung wegen gänzlicher oder teilweiser Nichtverfügbarkeit berechtigt den Kunden nach fruchtlosem Ablauf einer von ihm gesetzten angemessenen Nachfrist zum Rücktritt vom Vertrag.</li>
                        </ol>
                    </div>

                    <div class="terms-wraper wow fadeInUp">
                        <h6 class="xs-title">§ 7 - Sperrung des Kundenaccounts, Schadensersatz</h6>
                        <ol class="order-list">
                            <li>Der Anbieter ist berechtigt, den Kundenaccount mit sofortiger Wirkung zu sperren und den Kunden von der Nutzung auszuschließen, wenn dieser durch vorsätzliche Verstöße gegen die Regeln des Spielebetreibers die Sperrung einer IP-Nummer des Anbieters verursacht. Der Anbieter ist in diesem Falle auch berechtigt die hierdurch entstehenden Kosten (Anmietung von Ersatz IPs etc.) von dem Kunden ersetzt zu verlangen. Ebenso kann der Anbieter den Account sperren wenn der begründete Verdacht einer Rechtsverletzung Dritter (Verstoß gegen das Urheberrecht, Markenrecht etc.) besteht. Der Kunde ist verpflichtet nicht systemstörend zu handeln. Bei systemstörender Handlung ist der Anbieter berechtigt ohne Vorwarnung die Kunden zu sperren und die Daten zu löschen.</li>
                        </ol>
                    </div>

                    <div class="terms-wraper wow fadeInUp">
                        <h6 class="xs-title">§ 8 - Widerrufsrecht und Widerrufsfolgen - Widerrufsbelehrung</h6>
                        <ol class="order-list">
                            <li>Sie können Ihre Vertragserklärung innerhalb von 14 Tagen ohne Angabe von Gründen in Textform (z.B. Brief, E-Mail etc.) oder - wenn Ihnen die Sache vor Fristablauf überlassen wird - durch Rücksendung der Sache widerrufen. Die Frist beginnt nach Erhalt dieser Belehrung in Textform.</li>
                        </ol>
                    </div>

                    <div class="terms-wraper wow fadeInUp">
                        <h6 class="xs-title">Zur Wahrung der Widerrufsfrist genügt die rechtzeitige Absendung des Widerrufs oder der Sache. Der Widerruf ist zu richten an:</h6>
                        <ol class="order-list">
                            <span>Roscher & Lampe GbR</span><br>
                            <span>DeinCloudServer</span><br>
                            <span>Hauptstrasse 1</span><br>
                            <span>25813 Schwesing</span><br>
                            <span>Deutschland</span><br>
                            <span>E-Mail: support@deincloudserver.de</span><br>
                            <span>Telefon: +49 1575115516</span>
                        </ol>
                    </div>

                    <div class="terms-wraper wow fadeInUp">
                        <h6 class="xs-title">Widerrufsfolgen</h6>
                        <ol class="order-list">
                            <li>Im Falle eines wirksamen Widerrufs sind die beiderseits empfangenen Leistungen zurückzugewähren und ggf. gezogene Nutzungen (z. B. Zinsen) herauszugeben. Können Sie uns die empfangene Leistung ganz oder teilweise nicht oder nur in verschlechtertem Zustand zurückgewähren, müssen Sie uns insoweit ggf Wertersatz leisten. Bei der Überlassung von Sachen gilt dies nicht, wenn die Verschlechterung der Sache ausschließlich auf deren Prüfung - wie sie Ihnen etwa im Ladengeschäft möglich gewesen wäre - zurückzuführen ist. Im Übrigen können Sie die Pflicht zum Wertersatz für eine durch die bestimmungsgemäße Ingebrauchnahme der Sache entstandene Verschlechterung vermeiden, indem Sie die Sache nicht wie Ihr Eigentum in Gebrauch nehmen und alles unterlassen, was deren Wert beeinträchtigt. Sie haben die Kosten der Rücksendung zu tragen, wenn die gelieferte Ware der bestellten entspricht und wenn der Preis der zurückzusendenden Sache einen Betrag von 40 Euro nicht übersteigt oder wenn Sie bei einem höheren Preis der Sache zum Zeitpunkt des Widerrufs noch nicht die Gegenleistung oder eine vertraglich vereinbarte Teilzahlung erbracht haben. Anderenfalls ist die Rücksendung für Sie kostenfrei. Paketversandfähige Sachen sind auf unsere Kosten und Gefahr zurückzusenden. Nicht paketversandfähige Sachen werden bei Ihnen abgeholt. Verpflichtungen zur Erstattung von Zahlungen müssen innerhalb von 30 Tagen erfüllt werden. Die Frist beginnt für Sie mit der Absendung Ihrer Widerrufserklärung oder der Sache, für uns mit deren Empfang.</li>
                        </ol>
                    </div>

                    <div class="terms-wraper wow fadeInUp">
                        <h6 class="xs-title">Ausschluss des Widerrufsrecht</h6>
                        <ol class="order-list">
                            <li>Das Widerrufsrecht besteht nicht bei Fernabsatzverträgen zur Lieferung von Waren, die nach Kundenspezifikation angefertigt werden oder eindeutig auf die persönlichen Bedürfnisse zugeschnitten sind oder die auf Grund ihrer Beschaffenheit nicht für eine Rücksendung geeignet sind oder schnell verderben können oder deren Verfalldatum überschritten würde. Der Widerruf erlischt mit erstmaliger Nutzung des Produkts.</li>
                        </ol>
                    </div>

                    <div class="terms-wraper wow fadeInUp">
                        <h6 class="xs-title">Gewährleistung</h6>
                        <ol class="order-list">
                            <li>Die Gewährleistungsansprüche richten sich nach den gesetzlichen Bestimmungen.</li>
                        </ol>
                    </div>

                    <div class="terms-wraper wow fadeInUp">
                        <h6 class="xs-title">§ 9 - Haftungsbeschränkung</h6>
                        <ol class="order-list">
                            <li>Nach den gesetzlichen Bestimmungen haftet der Anbieter uneingeschränkt für Schäden aus der Verletzung des Lebens, des Körpers oder der Gesundheit, die auf einer vorsätzlichen oder fahrlässigen Pflichtverletzung beruhen sowie für sonstige Schäden, die auf einer vorsätzlichen oder grob fahrlässigen Pflichtverletzung sowie Arglist beruhen. Darüber hinaus haftet der Anbieter uneingeschränkt für Schäden, die von der Haftung nach zwingenden gesetzlichen Vorschriften, wie dem Produkthaftungsgesetz, umfasst werden sowie im Fall der Übernahme von Garantien.</li>
                            <li>Für solche Schäden, die nicht von (1) erfasst werden und die durch einfache oder leichte Fahrlässigkeit verursacht werden, haftet der Anbieter, soweit diese Fahrlässigkeit die Verletzung von Vertragspflichten betrifft, deren Erfüllung die ordnungsgemäße Durchführung des Vertrags überhaupt erst ermöglicht und auf deren Einhaltung der Kunde regelmäßig vertrauen darf (sog. Kardinalpflichten). Dabei beschränkt sich die Haftung des Anbieters auf die vertragstypischen vorhersehbaren Schäden. Im Falle leicht fahrlässiger Verletzungen solcher Vertragspflichten, die weder von (1) noch (2) erfasst werden (sog. unwesentliche Vertragspflichten) haftet der Anbieter gegenüber Verbrauchern - dies begrenzt auf die vertragstypischen vorhersehbaren Schäden. Eine weitergehende Haftung ist ausgeschlossen. Insbesondere haftet der Anbieter auch nicht für Anwendungsfehler.</li>
                        </ol>
                    </div>

                    <h6>Die Haftung für durch Kunden hochgeladene rechtswidrige Inhalte liegt ausschließlich beim Kunden. Der Anbieter ist berechtigt ihm entstehende Kosten infolge einer Rechtsverletzung von dem Kunden erstattet zu bekommen.</h6>
                    <br>
                    <div class="terms-wraper wow fadeInUp">
                        <h6 class="xs-title">§ 10 - Datenspeicherung</h6>
                        <ol class="order-list">
                            <li>Kundendaten werden ausschließlich zur Abwicklung des Kaufs gespeichert und verarbeitet und zwar unter Beachtung der einschlägigen Vorschriften. Der Kunde hat jederzeit ein Recht auf kostenlose Auskunft, Berichtigung, Sperrung und Löschung seiner gespeicherten Daten. Die Bitte auf Einsicht oder Änderung der Daten muss der Kunde schriftlich per e-mail oder Post an den Anbieter stellen. Personenbezogenen Daten einschließlich der Haus- und E-Mail-Adresse werden nicht ohne ausdrückliche und jederzeit widerrufliche Einwilligung des Kunden an Dritte weitergegeben. Ausgenommen hiervon sind Dienstleistungspartner, die zur Bestellabwicklung die Übermittlung von Daten benötigen (z.B. das mit der Lieferung beauftragte Versandunternehmen und das mit der Zahlungsabwicklung beauftragte Kreditinstitut). Hier beschränkt sich der Umfang der übermittelten Daten aber auf das erforderliche Minimum.</li>
                        </ol>
                    </div>

                    <div class="terms-wraper wow fadeInUp">
                        <h6 class="xs-title">§ 11 - Geltendes Recht und Gerichtsstand</h6>
                        <ol class="order-list">
                            <li>Es gilt ausschließlich das Recht der Bundesrepublik Deutschland unter Ausschluss des UN-Kaufrechtes.</li>
                            <li>Ist der Kunde Kaufmann im Sinne des HGB, eine juristische Person des öffentlichen Rechts oder ein öffentlich-rechtliches Sondervermögen, ist ausschließlicher Gerichtsstand der Geschäftssitz des Anbieters.</li>
                        </ol>
                    </div>

                </div>
            </div><!-- .row END -->
        </div><!-- .container END -->
    </section>

@endsection
