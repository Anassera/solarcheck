<?php
require_once "lib/php/header.php";
include "lib/php/request.php";

//var_dump($mailSend);
?>
<div class="head">
    <img src="lib/img/main_bild_2.jpg" alt="header-img">
</div>

<div class="container content">
    <?php if(!$sendPost){?>
        <form id="solarstormForm" role="form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
<!--            <p class="lead-start">Finden Sie in einer Minute heraus, wie groß Ihre Solaranlage sein sollte, wie viel sie kostet und wie viel Sie damit jedes Jahr sparen können.</p>-->

            <fieldset class="tab personen" id="step-1">
                <div class="fieldset-header">
                    <h1 class="strong">Solarstrom</h1>
                    <h1 class="light">Lohnt sich wieder!</h1>
                    <p class="lead-start">Finden Sie in einer Minute heraus, wie groß Ihre Solaranlage sein sollte, wie viel sie kostet und wie viel Sie damit jedes Jahr sparen können.</p>
                    <p class="breadcrumb">1/4</p>
                </div>

                <p class="lead">Bitte geben Sie die Anzahl der Personen in Ihrem Haushalt an.</p>
                <div id="group_1">
                    <div>
                        <input type="radio" id="personen_1" name="personen" required value="1" />
                        <label for="personen_1"><img src="lib/img/phase_1/grun/personen_1.png" />
                            <span><img src="lib/img/checked.svg" alt=""></span>
                        </label>
                    </div>
                    <div>
                        <input type="radio" id="personen_2" name="personen" required value="2" />
                        <label for="personen_2"><img src="lib/img/phase_1/grun/personen_2.png" />
                            <span><img src="lib/img/checked.svg" alt=""></span>
                        </label>
                    </div>
                    <div>
                        <input type="radio" id="personen_3" name="personen" required value="3" />
                        <label for="personen_3"><img src="lib/img/phase_1/grun/personen_3.png" />
                            <span><img src="lib/img/checked.svg" alt=""></span>
                        </label>
                    </div>
                    <div>
                        <input type="radio" id="personen_4" name="personen" required value="4" />
                        <label for="personen_4"><img src="lib/img/phase_1/grun/personen_4.png" />
                            <span><img src="lib/img/checked.svg" alt=""></span>
                        </label>
                    </div>
                    <div>
                        <input type="radio" id="personen_5" name="personen" required  value="5" />
                        <label for="personen_5"><img src="lib/img/phase_1/grun/personen_5.png" />
                            <span><img src="lib/img/checked.svg" alt=""></span>
                        </label>
                    </div>
                    <div>
                        <input type="radio" id="personen_6" name="personen" required value="6" />
                        <label for="personen_6"><img src="lib/img/phase_1/grun/personen_6.png" />
                            <span><img src="lib/img/checked.svg" alt=""></span>
                        </label>
                    </div>
                </div>

                <input id="personen" type="button" name="next" class="yellow-btn next" value="WEITER" onmousedown="_etracker.sendEvent(new et_ClickEvent('greenergetic_mein-solarcheck_content_abfragestromverbrauch', 'greenergetic_mein solarcheck_weiter'))" />
            </fieldset>

            <fieldset class="tab dachneigung" id="step-3">
                <div class="fieldset-header">
                    <h1 class="strong">Solarstrom</h1>
                    <h1 class="light">Lohnt sich wieder!</h1>
                    <p class="lead-start">Finden Sie in einer Minute heraus, wie groß Ihre Solaranlage sein sollte, wie viel sie kostet und wie viel Sie damit jedes Jahr sparen können.</p>
                    <p class="breadcrumb">2/4</p>
                </div>
                <p class="lead">Wie groß ist ungefähr die Neigung Ihres Daches?</p>
                <div id="group_3">
                    <div>
                        <input type="radio" id="grad_0" name="dachneigung" value="0"/>
                        <label for="grad_0"><img src="lib/img/phase_3/grun/grad_0.png" />
                            <span><img src="lib/img/checked.svg" alt=""></span>
                        </label>
                    </div>
                    <div>
                        <input type="radio" id="grad_15" name="dachneigung" value="15"/>
                        <label for="grad_15"><img src="lib/img/phase_3/grun/grad_15.png" />
                            <span><img src="lib/img/checked.svg" alt=""></span>
                        </label>
                    </div>
                    <div>
                        <input type="radio" id="grad_30" name="dachneigung" value="30"/>
                        <label for="grad_30"><img src="lib/img/phase_3/grun/grad_30.png" />
                            <span><img src="lib/img/checked.svg" alt=""></span>
                        </label>
                    </div>
                    <div>
                        <input type="radio" id="grad_45" name="dachneigung" value="45"/>
                        <label for="grad_45"><img src="lib/img/phase_3/grun/grad_45.png" />
                            <span><img src="lib/img/checked.svg" alt=""></span>
                        </label>
                    </div>
                </div>

                <input type="button" id="dachneigung" name="next" class="yellow-btn next" value="WEITER" onmousedown="_etracker.sendEvent(new et_ClickEvent('greenergetic_mein-solarcheck_content_abfragedachneigung', 'greenergetic_mein solarcheck_weiter'))" />
            </fieldset>

            <fieldset class="tab kaufen" id="step-4">
                <div class="fieldset-header">
                    <h1 class="strong">Solarstrom</h1>
                    <h1 class="light">Lohnt sich wieder!</h1>
                    <p class="lead-start">Finden Sie in einer Minute heraus, wie groß Ihre Solaranlage sein sollte, wie viel sie kostet und wie viel Sie damit jedes Jahr sparen können.</p>
                    <p class="breadcrumb">3/4</p>
                </div>
                <p class="lead">Wollen Sie Ihre Anlage pachten oder kaufen?</p>
                <div id="group_4">
                    <div>
                        <input type="radio" id="pachten" name="kaufen" value="Pachten"/>
                        <label for="pachten"><img src="lib/img/phase_4/grun/pachten.png" />
                            <span><img src="lib/img/checked.svg" alt=""></span>
                        </label>
                    </div>
                    <div>
                        <input type="radio" id="kaufen" name="kaufen" value="Kaufen"/>
                        <label for="kaufen"><img src="lib/img/phase_4/grun/kaufen.png" />
                            <span><img src="lib/img/checked.svg" alt=""></span>
                        </label>
                    </div>
                    <div>
                        <input type="radio" id="beides" name="kaufen" value="Beides interessant"/>
                        <label for="beides"><img src="lib/img/phase_4/grun/beides.png" />
                            <span><img src="lib/img/checked.svg" alt=""></span>
                        </label>
                    </div>
                </div>

                <input type="button" id="kaufen" name="next" class="yellow-btn next" value="WEITER" onmousedown="_etracker.sendEvent(new et_ClickEvent('greenergetic_mein-solarcheck_content_abfrage kaufenoder-pachten', 'greenergetic_mein solarcheck_weiter'))" />
            </fieldset>

            <fieldset class="tab kundendata" id="step-5">
                <div class="fieldset-header">
                    <h1 class="strong">Solarstrom</h1>
                    <h1 class="light">Lohnt sich wieder!</h1>
                    <p class="lead-start">Finden Sie in einer Minute heraus, wie groß Ihre Solaranlage sein sollte, wie viel sie kostet und wie viel Sie damit jedes Jahr sparen können.</p>
                    <p class="breadcrumb">4/4</p>
                </div>
                <h1 class="lead-start" style="padding-bottom:0">Einfach mal beraten lassen!</h1>
                <p class="lead-start">Berechnen Sie jetzt eine erste Prognose der richtigen Anlagengröße, der Kosten und der finanziellen Vorteile. Im nächsten Schritt erhalten Sie eine kostenlose persönliche Beratung.</p>
                <p class="lead-start">Wir beantworten Ihre Fragen zum Thema Photovoltaik und ermitteln und planen gemeinsam mit Ihnen die optimale Solaranlage inklusive einer detaillierten Projektübersicht und Wirtschaftlichkeitsprognose.</p>
<!--                <p class="lead-start">Wir beantworten Ihre Fragen zum Thema Photovoltaik und ermitteln und planen gemeinsam mit Ihnen die optimale Solaranlage.</p>-->
<!--                <p class="breadcrumb">4/4</p>-->
                <div class="group-5">
                    <div class="kundendata-inner">
                        <div id="nameWrapper" class="field">
                            <label for="name">Vor- und Nachname*:</label>
                            <input type="text" id="name" name="name" required/>
                        </div>
                        <div id="emailWrapper" class="field">
                            <label for="email">E-Mail-Adresse*:</label>
                            <input type="email" id="email" name="email" required/>
                        </div>
                        <div id="telefonWrapper" class="field">
                            <label  for="telefon">Telefonnummer*:</label>
                            <input type="text" id="telefon" name="telefon" required/>
                        </div>
                        <div id="strasseWrapper" class="field">
                            <label for="strasse">Straße und Hausnummer:</label>
                            <input type="text" id="strasse" name="strasse" required/>
                        </div>
                        <div id="plzOrtWrapper" class="field">
                            <label for="plz-ort">PLZ und Ort:</label>
                            <input type="text" id="plz-ort" name="plz-ort" required/>
                        </div>
                        <div id="hauseigentuerWrapper" class="field-checkbox">
                            <label for="hauseigentuer"><input type="checkbox" id="hauseigentuer" name="hauseigentuer" value="true" />Ich bin Eigentümer des Hauses</label>
                        </div>
                    </div>
                    <div class="yellow-box">
                        <ul>
                            <li>Individuelle Beratung & Planung vom Dipl.-Ing.</li>
                            <li>Wirtschaftlichkeits&shy;berechnung</li>
                            <li>Keine Adressweitergabe an Dritte</li>
                            <li>kostenlos und unverbindlich</li>
                        </ul>
                    </div>
                    <div class="field-checkbox" style="margin-top: 2rem;">
                        <label for="perEmail"><input type="checkbox" id="perEmail" name="perEmail" value="true" />Ja, ich bin damit einverstanden, dass ich via E-Mail über Dienstleistungen und Produkte informiert werde.</label>
                    </div>
                    <div class="field-checkbox">
                        <label for="perTelefon"><input type="checkbox" id="perTelefon" name="perTelefon" value="true" />Ja, ich bin damit einverstanden, dass ich per Telefon über Dienstleistungen und Produkte informiert werde.</label>
                    </div>
                    <div id="datenschutzWrapper" class="field-checkbox">
                        <label for="datenschutz"><input type="checkbox" id="datenschutz" name="datenschutz" value="true" required/>Ich bin mit der
                            <a href="https://solar.greenergetic.de/live-configurator/greenergetic/de/page.html?contentPage=privacy" target="_blank">Datenschutzrichtlinie</a>
                            einverstanden und habe die <a href="https://solar.greenergetic.de/live-configurator/greenergetic/de/page.html?contentPage=privacy" target="_blank">Datenschutzerklärung</a> zur Kenntnis genommen.*</label>
                    </div>
                    <p style="text-align: left">* Pflichtfeld</p>
                </div>

                <button type="button" class="green-btn next" id="kundendata" name="submitBtn" onmousedown="_etracker.sendEvent(new et_ClickEvent('greenergetic_mein-solarcheck_content_abfragekontaktdaten', 'greenergetic_mein solarcheck_ergebnis'))">
                    <i class="fas fa-arrow-right"></i>BERATUNG ANFORDERN
                </button>
            </fieldset>
        </form>
    <?php } else { ?>
        <div class="success">
            <div class="fieldset-header">
                <h1 class="strong">Ihr Ergebnis</h1>
                <h1 class="light">So viel können Sie sparen</h1>
            </div>
            <p class="lead">Wir haben auf Basis Ihrer Angaben eine Einschätzung Ihrer Anlagengröße, Kosten und finanziellen Vorteile berechnet.
                Lassen Sie sich jetzt persönlich beraten und erhalten Sie kostenlos und unverbindlich ein detailliertes Angebot.
            </p>
            <div class="angabeData">
                <div class="angabeData-inner">
                    <table class="angabeData-table">
                        <tr>
                            <th>NAME:</th>
                            <td><?php echo $name; ?></td>
                        </tr>
                        <tr>
                            <th>E-MAIL:</th>
                            <td><?php echo $email; ?></td>
                        </tr>
                        <tr>
                            <th>TELEFON:</th>
                            <td><?php echo $telefon; ?></td>
                        </tr>
                        <tr>
                            <th>ADRESSE:</th>
                            <td><?php echo $strasse; ?> <?php echo $plzOrt; ?></td>
                        </tr>
                        <tr>
                            <th>EIGENTÜMER:</th>
                            <td><?php echo $hauseigentuer;?></td>
                        </tr>
                    </table>
                </div>
                <div class="angabeData-inner">
                    <div class="beratung">
                        <img src="lib/img/beraten.png" alt="">
                    </div>
                    <div class="bilderAusgabe">
                        <img src="<?php echo $personenImgSrc; ?>" alt="">
                        <img src="<?php echo $dachneigungImgSrc; ?>" alt="">
                        <img src="<?php echo $kaufenImgSrc; ?>" alt="">
                    </div>
                </div>
            </div>

            <div class="vorteilsBoxen">
                <div class="empfehlung">
                    <h2>Ihre Anlage</h2>
                    <p>Eine passende Anlage mit einer Leistung von <b><?php echo $kwp; ?> Kilowatt peak</b> erzeugt <b><?php echo $kwh; ?> Kilowattstunden Solarstrom im Jahr</b>.</p>
                    <p>Kosten der Solaranlage inklusive Beratung, Planung, Prüfung vor Ort und Installation: <b><?php echo $gesamtKostenBrutto; ?> Euro</b> inklusive <b><?php echo $gesamtKostenMwst; ?> Euro</b> Umsatzsteuer.</p>
                </div>
                <div class="ergebnis">
                    <h2>Ihr Vorteil</h2>
                    <p>Bei einem Eigenverbrauchsanteil von 35 % sparen Sie Stromkosten in Höhe von <b><?php echo $sparen; ?> Euro im Jahr</b> und erhalten eine Einspeisevergütung in Höhe von <b><?php echo $vorteilEinspeisung; ?> Euro im Jahr</b>.</p>
                    <p>Insgesamt beträgt Ihr Vorteil <b><?php echo $vorteilGesamt; ?> Euro im Jahr</b>.</p>
                </div>
            </div>
            <p class="lead-btm">Die Prognose basiert auf Ihrem Stromverbrauch und Durchschnittswerten hinsichtlich anderer relevanter Parameter, z. B.
                Eigenverbrauchsanteil und Sonneneinstrahlung. Eine individuelle, präzisere Prognose ist erst im Anschluss an eine persönliche Beratung möglich.</p>
        </div>
    <?php } ?>
</div>


<?php
require_once "lib/php/footer.php";
?>
