@extends('layouts.app')

@section('content')
    <div class="xs-banner inner-banner contet-to-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 align-self-center">
                    <div class="xs-banner-content">
                        <h2 class="banner-title wow fadeInLeft" data-wow-duration="1.5s">Impressum</h2>
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
                        <h2 class="heading-sub-title">Unser</h2>
                        <h3 class="heading-title"><span>Impressum</span></h3>
                    </div><!-- .xs-heading END -->
                </div>
            </div><!-- .row END -->
            <div class="row">
                <div class="col-md-12">
                    <h2 class="xs-title">Angaben gemäß <a href="https://www.gesetze-im-internet.de/tmg/__5.html">§ 5 TMG</a></h2>
                    <br>

                    <div class="terms-wraper wow fadeInUp">
                        <h6 class="xs-title">Anschrift</h6>
                        <ol class="order-list">
                            <span>Einzelunternehmen René Roscher</span><br>
                            <span>Hauptstrasse 1</span><br>
                            <span>25813 Schwesing</span><br>
                            <span>Deutschland</span><br>
                            <span>E-Mail: support@deincloudserver.de</span><br>
                            <span>Telefon: +49 1577 5267786</span>
                        </ol>
                    </div>

                    <div class="terms-wraper wow fadeInUp">
                        <h6 class="xs-title">Kontakt</h6>
                        <span>E-Mail: support@deincloudserver.de</span><br>
                        <span>Telefon: +49 1577 5267786</span>
                    </div>

                    <div class="terms-wraper wow fadeInUp">
                        <h6 class="xs-title">Ust-IdNr gemäß <a href="https://www.gesetze-im-internet.de/ustg_1980/__27a.html">§27 a Umsatzsteuergesetz</a>:</h6>
                        <span>DE258171642</span><br>
                    </div>

                    <div class="terms-wraper wow fadeInUp">
                        <h6 class="xs-title">Streitschlichtung</h6>
                        <span>Die Europäische Kommission stellt eine Plattform zur Online-Streitbeilegung (OS) bereit:</span><br>
                        <span><a href="https://ec.europa.eu/consumers/odr.">https://ec.europa.eu/consumers/odr</a></span><br><br>
                        <span>Unsere E-Mail-Adresse finden Sie oben im Impressum.</span><br>
                        <span>Wir sind nicht bereit oder verpflichtet, an Streitbeilegungsverfahren vor einer Verbraucherschlichtungsstelle teilzunehmen.</span><br>
                    </div>

                    <h2 class="xs-title">Haftungsausschluss (Disclaimer)</h2>

                    <div class="terms-wraper wow fadeInUp">
                        <h6 class="xs-title">Haftung für Inhalte</h6>
                        <span>Als Diensteanbieter sind wir gemäß § 7 Abs.1 TMG für eigene Inhalte auf diesen Seiten nach den allgemeinen Gesetzen verantwortlich. Nach §§ 8 bis 10 TMG sind wir als Diensteanbieter jedoch nicht verpflichtet, übermittelte oder gespeicherte fremde Informationen zu überwachen oder nach Umständen zu forschen, die auf eine rechtswidrige Tätigkeit hinweisen.</span><br>
                        <span>Verpflichtungen zur Entfernung oder Sperrung der Nutzung von Informationen nach den allgemeinen Gesetzen bleiben hiervon unberührt. Eine diesbezügliche Haftung ist jedoch erst ab dem Zeitpunkt der Kenntnis einer konkreten Rechtsverletzung möglich. Bei Bekanntwerden von entsprechenden Rechtsverletzungen werden wir diese Inhalte umgehend entfernen.</span>
                    </div>

                    <div class="terms-wraper wow fadeInUp">
                        <h6 class="xs-title">Haftung für Links</h6>
                        <span>Unser Angebot enthält Links zu externen Websites Dritter, auf deren Inhalte wir keinen Einfluss haben. Deshalb können wir für diese fremden Inhalte auch keine Gewähr übernehmen. Für die Inhalte der verlinkten Seiten ist stets der jeweilige Anbieter oder Betreiber der Seiten verantwortlich. Die verlinkten Seiten wurden zum Zeitpunkt der Verlinkung auf mögliche Rechtsverstöße überprüft. Rechtswidrige Inhalte waren zum Zeitpunkt der Verlinkung nicht erkennbar. Eine permanente inhaltliche Kontrolle der verlinkten Seiten ist jedoch ohne konkrete Anhaltspunkte einer Rechtsverletzung nicht zumutbar. Bei Bekanntwerden von Rechtsverletzungen werden wir derartige Links umgehend entfernen.</span><br>
                    </div>

                    <div class="terms-wraper wow fadeInUp">
                        <h6 class="xs-title">Urheberrecht</h6>
                        <span>Die durch die Seitenbetreiber erstellten Inhalte und Werke auf diesen Seiten unterliegen dem deutschen Urheberrecht. Die Vervielfältigung, Bearbeitung, Verbreitung und jede Art der Verwertung außerhalb der Grenzen des Urheberrechtes bedürfen der schriftlichen Zustimmung des jeweiligen Autors bzw. Erstellers. Downloads und Kopien dieser Seite sind nur für den privaten, nicht kommerziellen Gebrauch gestattet. Soweit die Inhalte auf dieser Seite nicht vom Betreiber erstellt wurden, werden die Urheberrechte Dritter beachtet. Insbesondere werden Inhalte Dritter als solche gekennzeichnet. Sollten Sie trotzdem auf eine Urheberrechtsverletzung aufmerksam werden, bitten wir um einen entsprechenden Hinweis. Bei Bekanntwerden von Rechtsverletzungen werden wir derartige Inhalte umgehend entfernen.</span><br>
                    </div>

                    <div class="terms-wraper wow fadeInUp">
                        <h6 class="xs-title">Quelle</h6>
                        <span><a href="http://e-recht24.de">e-recht24.de</a></span><br>
                    </div>

                </div>
            </div><!-- .row END -->
        </div><!-- .container END -->
    </section>

@endsection
