<?php
$mailSend = false;
$personen = !isset($_POST['personen']) ? "": htmlspecialchars( trim($_POST['personen']));
#$kwh = !isset($_POST['kwh']) ? "": htmlspecialchars( trim($_POST['kwh']));
#$stromverbrauch = !isset($_POST['stromverbrauch']) ? "": strip_tags( trim($_POST['stromverbrauch']));
$dachneigung = !isset($_POST['dachneigung']) ? "": htmlspecialchars( trim($_POST['dachneigung']));
$kaufen = !isset($_POST['kaufen']) ? "": htmlspecialchars( trim($_POST['kaufen']));
$name = !isset($_POST['name']) ? "": htmlspecialchars( trim($_POST['name']));
$email = !isset($_POST['email']) ? "": htmlspecialchars( trim($_POST['email']));
$material = !isset($_POST['material']) ? "": htmlspecialchars( trim($_POST['material']));
$telefon = !isset($_POST['telefon']) ? "": htmlspecialchars( trim($_POST['telefon']));
$strasse = !isset($_POST['strasse']) ? "": htmlspecialchars( trim($_POST['strasse']));
$plzOrt = !isset($_POST['plz-ort']) ? "": htmlspecialchars( trim($_POST['plz-ort']));
$hauseigentuer = !isset($_POST['hauseigentuer']) ? "nein": "ja";
$perEmail = !isset($_POST['perEmail']) ? "nein": "ja";
$perTelefon = !isset($_POST['perTelefon']) ? "nein": "ja";

$sendPost = count($_POST) > 0 ? true : false;

$dateAugust = '20180806';
$dateSeptember = '20180810';
$dateOktober = '20180812';

$verbrauch = $personenImgSrc = $stromVerbrauchImgSrc = $dachneigungImgSrc = $kaufenImgSrc = $sparen = '';
$kwp = $kwh = $gesamtKostenBrutto = $gesamtKostenMwst = $vorteilEinspeisung = $vorteilGesamt = '';
/* Validation Variablen */
$kaufenValidation = '';
$personenValidation = $dachneigungValidation = 0;

//For August and September $verguetung/$vorteil have different values
$monat = date("m");

/* validation (spam) */
if ($sendPost === true){
    #$kwhVal = intval($kwh);
    switch ($personen) {
        case '1':
            $verbrauch = '1 bis 2250 kW';
            $sparen = '142,80';
            $kwp = '1,8';
            $kwh = '1710';
            $gesamtKostenBrutto = '4.091,22';
            $gesamtKostenMwst = '653,22';
            switch ($monat) {
                case '08':
                    $vorteilEinspeisung = '134,27';
                    $vorteilGesamt = '277,07';
                    break;
                case '09':
                    $vorteilEinspeisung = '132,82';
                    $vorteilGesamt = '275,63';
                    break;
                default:
                    $vorteilEinspeisung = '131,49';
                    $vorteilGesamt = '274,29';
            }
            $personenImgSrc = 'lib/img/phase_1/grun/personen_1.png';
            $personenValidation = 1;
            break;
        case '2':
            $verbrauch = '2251 bis 3250 kWh';
            $sparen = '238,00';
            $kwp = '3';
            $kwh = '2850';
            $gesamtKostenBrutto = '5.729,85';
            $gesamtKostenMwst = '914,85';
            switch ($monat) {
                case '08':
                    $vorteilEinspeisung = '223,78';
                    $vorteilGesamt = '461,79';
                    break;
                case '09':
                    $vorteilEinspeisung = '221,37';
                    $vorteilGesamt = '459,38';
                    break;
                default:
                    $vorteilEinspeisung = '219,15';
                    $vorteilGesamt = '457,15';
            }
            $personenImgSrc = 'lib/img/phase_1/grun/personen_2.png';
            $personenValidation = 2;
            break;
        case '3':
            $verbrauch = '3251 bis 4250 kWh';
            $sparen = '333,20';
            $kwp = '4,2';
            $kwh = '3990';
            $gesamtKostenBrutto = '7.372,05';
            $gesamtKostenMwst = '1.177,05';
            switch ($monat) {
                case '08':
                    $vorteilEinspeisung = '313,29';
                    $vorteilGesamt = '646,50';
                    break;
                case '09':
                    $vorteilEinspeisung = '309,92';
                    $vorteilGesamt = '643,13';
                    break;
                default:
                    $vorteilEinspeisung = '306,81';
                    $vorteilGesamt = '640,02';
            }
            $personenImgSrc = 'lib/img/phase_1/grun/personen_3.png';
            $personenValidation = 3;
            break;
        case '4':
            $verbrauch = '4251 bis 5750 kWh';
            $sparen = '428,41';
            $kwp = '5,4';
            $kwh = '5130';
            $gesamtKostenBrutto = '8.610,84';
            $gesamtKostenMwst = '1.374,84';
            switch ($monat) {
                case '08':
                    $vorteilEinspeisung = '402,81';
                    $vorteilGesamt = '831,21';
                    break;
                case '09':
                    $vorteilEinspeisung = '398,47';
                    $vorteilGesamt = '826,88';
                    break;
                default:
                    $vorteilEinspeisung = '394,47';
                    $vorteilGesamt = '822,88';
            }
            $personenImgSrc = 'lib/img/phase_1/grun/personen_4.png';
            $personenValidation = 4;
            break;
        case '5':
            $verbrauch = '5751 bis 7250 kWh';
            $sparen = '571,21';
            $kwp = '7,2';
            $kwh = '6840';
            $gesamtKostenBrutto = '10.752,84';
            $gesamtKostenMwst = '1.716,84';
            switch ($monat) {
                case '08':
                    $vorteilEinspeisung = '537,08';
                    $vorteilGesamt = '1.108,29';
                    break;
                case '09':
                    $vorteilEinspeisung = '531,30';
                    $vorteilGesamt = '1.102,51';
                    break;
                default:
                    $vorteilEinspeisung = '525,96';
                    $vorteilGesamt = '1.097,17';
            }
            $personenImgSrc = 'lib/img/phase_1/grun/personen_5.png';
            $personenValidation = 5;
            break;
        case '6':
            $verbrauch = '7251 bi 7750';
            $sparen = '714,01';
            $kwp = '9';
            $kwh = '8550';
            $gesamtKostenBrutto = '12.530,70';
            $gesamtKostenMwst = '2.000,70';
            switch ($monat) {
                case '08':
                    $vorteilEinspeisung = '671,35';
                    $vorteilGesamt = '1.385,36';
                    break;
                case '09':
                    $vorteilEinspeisung = '664,12';
                    $vorteilGesamt = '1.378,13';
                    break;
                default:
                    $vorteilEinspeisung = '657,45';
                    $vorteilGesamt = '1.371,46';
            }
            $personenImgSrc = 'lib/img/phase_1/grun/personen_6.png';
            $personenValidation = 6;
            break;
        default:
            $personenImgSrc = 'lib/img/phase_4/grun/fragezeichen.png';
            $personenValidation = 'Manipulation des Formulars';
            $kwp = $kwh = $verbrauch = $sparen = $gesamtKostenBrutto = $gesamtKostenMwst = $vorteilEinspeisung = $vorteilGesamt = 'konnte nicht berechnet werden';
    }

    switch ($dachneigung) {
        case '0':
            $dachneigungImgSrc = 'lib/img/phase_3/grun/grad_0.png';
            $dachneigungValidation = 0;
            break;
        case '15':
            $dachneigungImgSrc = 'lib/img/phase_3/grun/grad_15.png';
            $dachneigungValidation = 15;
            break;
        case '30':
            $dachneigungImgSrc = 'lib/img/phase_3/grun/grad_30.png';
            $dachneigungValidation = 30;
            break;
        case '45':
            $dachneigungImgSrc = 'lib/img/phase_3/grun/grad_45.png';
            $dachneigungValidation = 45;
            break;
        default:
            $dachneigungImgSrc = 'lib/img/phase_4/grun/fragezeichen.png';
            $dachneigungValidation = 'Manipulation des Formulars';
    }

    switch ($kaufen) {
        case 'Pachten':
            $kaufenImgSrc = 'lib/img/phase_4/grun/pachten.png';
            $kaufenValidation = 'Pachten';
            break;
        case 'Kaufen':
            $kaufenImgSrc = 'lib/img/phase_4/grun/kaufen.png';
            $kaufenValidation = 'Kaufen';
            break;
        case 'Beides interessant':
            $kaufenImgSrc = 'lib/img/phase_4/grun/kaufundpacht.png';
            $kaufenValidation = 'Beides interessant';
            break;
        default:
            $kaufenImgSrc = 'lib/img/phase_4/grun/fragezeichen.png';
            $kaufenValidation = 'Manipulation des Formulars (original: )';
    }

    $from = "callpool@greenergetic.de";
    $replyTo = "callpool@greenergetic.de";
    $empfaenger = $email;
    $betreff = "Greenergetic - SOLARSTROM lohnt sich wieder!";

    $fromClientMail = "callpool@greenergetic.de";
    $replyToClientMail = "callpool@greenergetic.de";
    $empfaengerClientMail = "callpool@greenergetic.de";
    $betreffClientMail = "Eingehende Email von Formular auf mein-solarcheck.de!";

    /* email header */
    $nachricht = "<html>";
    $nachricht .= "<head>";
    $nachricht .= "<title>" . $betreff . "</title>";
    $nachricht .= "</head>";
    $nachricht .= "<body>";

    /* email body */
    $nachricht .= "Hallo,<br /><br />";
    $nachricht .= "Ihre Anfrage ist bei uns eingegangen. Vielen Dank für Ihr Interesse an einer Solaranlage von Greenergetic!<br />";
    $nachricht .= "Wir melden uns in Kürze telefonisch oder via E-Mail bei Ihnen und beraten Sie persönlich zu Ihrer optimalen Photovoltaik-Lösung.<br /><br />";
    $nachricht .= "Im folgenden sehen Sie Ihre Angaben: <br /><br />";
    $nachricht .= "Personen in Ihrem Haushalt: " .$personenValidation. "<br />";
    #$nachricht .= "Bisheriger Stromverbrauch: " .$kwhVal. "<br />";
    $nachricht .= "Die Neigung Ihres Daches: " .$dachneigungValidation. " Grad<br />";
    $nachricht .= "Finanzierung: " .$kaufenValidation. "<br />";
    $nachricht .= "Sie sind der Hauseigentümer: " .$hauseigentuer. "<br />";
    $nachricht .= "Kontaktaufnahme per E-Mail: " .$perEmail. "<br />";
    $nachricht .= "Telefonische Kontaktaufnahme: " .$perTelefon. "<br />";
    $nachricht .= "<br /><br />";
    $nachricht .= "Ihr ausgerechneter Verbrauch liegt bei: " .$verbrauch. ".<br />";
    $nachricht .= "Sie würden bis zu " .$sparen. " € sparen.<br />";
    $nachricht .= "<br /><br />";
    $nachricht .= "Sollten Sie die Anfrage nicht gestellt haben, können Sie hier widersprechen:<br />";
    $nachricht .= '<a href="mailto:beratung@mein-solarcheck.de?subject=Widerspruch%20der%20Datennutzung&body=Hiermit%20widerspreche%20ich%20der%20Nutzung%20meiner%20Daten.%20Bitte%20senden%20Sie%20mir%20eine%20Best%C3%A4tigung.">Widerspruch senden</a><br /><br />';
    $nachricht .= "Sie können auch zu einem späteren Zeitpunkt der Nutzung Ihrer Daten gegenüber Greenergetic widersprechen:<br /><br />";
    $nachricht .= "Greenergetic GmbH<br />";
    $nachricht .= "Meisenstraße 90<br />";
    $nachricht .= "33607 Bielefeld<br /><br />";
    $nachricht .= "+49 521 9999 6000<br />";
    $nachricht .= '<a href="mailto:info@greenergetic.de">info@greenergetic.de</a><br /><br />';
    $nachricht .= "Sonnige Grüße<br />";
    $nachricht .= "Ihr Team von Greenergetic";

    /* email footer */
    $nachricht .= "</body>";
    $nachricht .= "</html>";

    $encoding = "utf-8";

    // Preferences for Subject field
    $subject_preferences = array(
        "input-charset" => $encoding,
        "output-charset" => $encoding,
        #"line-length" => 76,
        "line-break-chars" => "\r\n"
    );
    #$header = 'To: ' .$name. ' <' .$empfaenger. '>'. "\r\n";
    $header = 'From: ' . $from . "\r\n";
    $header .= 'Reply-To: ' . $replyTo . "\r\n";
    $header .= "MIME-Version: 1.0 \r\n";
    $header .= "Content-type: text/html; charset=utf-8\r\n";
    $header .= 'X-Mailer: PHP/' . phpversion();
    $header .= iconv_mime_encode("Subject", $betreff, $subject_preferences);
    $header .= "\r\n\r\n";

    mail($empfaenger, $betreff, $nachricht, $header);


    /* ======================== to Client ========================= */

    /* email header */
    $nachrichtClientMail = "<html>";
    $nachrichtClientMail .= "<head>";
    $nachrichtClientMail .= "<title>" . $betreffClientMail . "</title>";
    $nachrichtClientMail .= "</head>";
    $nachrichtClientMail .= "<body>";

    /* email body */
    $nachrichtClientMail .= "Im folgenden die eingegebenen Daten<br /><br />";
    $nachrichtClientMail .= "Name: " .$name. "<br />";
    $nachrichtClientMail .= "Email: " .$email. "<br />";
    $nachrichtClientMail .= "Telefon: " .$telefon. "<br />";
    $nachrichtClientMail .= "Straße: " .$strasse. "<br />";
    $nachrichtClientMail .= "PLZ und Ort: " .$plzOrt. "<br /><br />";
    $nachrichtClientMail .= "Personen in Ihrem Haushalt: " .$personenValidation. "<br />";
    #$nachrichtClientMail .= "Bisheriger Stromverbrauch: " . $kwh. "<br />";
    $nachrichtClientMail .= "Die Neigung Ihres Daches: " .$dachneigungValidation. " Grad<br />";
    $nachrichtClientMail .= "Finanzierung: " .$kaufen. "<br />";
    $nachrichtClientMail .= "Sie sind der Hauseigentümer: " .$hauseigentuer. "<br />";
    $nachrichtClientMail .= "Kontaktaufnahme per Email: " .$perEmail. "<br />";
    $nachrichtClientMail .= "Telefonische Kontaktaufnahme: " .$perTelefon. "<br />";
    $nachrichtClientMail .= "<br /><br />";
    $nachrichtClientMail .= "Ihr liegt ausgerechneter Verbrauch: " .$verbrauch. ".<br />";
    $nachrichtClientMail .= "Sie würden bis zu : " .$sparen. " € sparen.<br />";

    /* email footer */
    $nachricht .= "</body>";
    $nachricht .= "</html>";

    $encoding = "utf-8";

    // Preferences for Subject field
    $subject_preferences = array(
        "input-charset" => $encoding,
        "output-charset" => $encoding,
        "line-length" => 76,
        "line-break-chars" => "\r\n"
    );
    $headerClientMail = 'From: ' . $fromClientMail . "\r\n";
    $headerClientMail .= 'Reply-To: ' . $replyToClientMail . "\r\n";
    $headerClientMail .= "MIME-Version: 1.0 \r\n";
    $headerClientMail .= "Content-type: text/html; charset=utf-8\r\n";
    $headerClientMail .= 'X-Mailer: PHP/' . phpversion();
    $headerClientMail .= iconv_mime_encode("Subject", $betreffClientMail, $subject_preferences);
    $headerClientMail .= "\r\n\r\n";

    mail($empfaengerClientMail, $betreffClientMail, $nachrichtClientMail, $headerClientMail);


    $mailSend = true;
}