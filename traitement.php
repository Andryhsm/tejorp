<?php

require './cnx.php';

$activitephysique = ($_POST["activitephysique"]);
$profession = ($_POST["profession"]);
$situationfamiliale = ($_POST["situationfamiliale"]);
$observation = ($_POST["observation"]);
$hygienealimentaire = ($_POST["hygienealimentaire"]);
$stabilitehoraires = ($_POST["stabilitehoraires"]);
$details = ($_POST["details"]);
$environnement = ($_POST["details"]);
$etatcutane = ($_POST["etatcutane"]);
$choixpoint = ($_POST["choixpoint"]);
$regime = ($_POST["regime"]);
$observation2 = ($_POST["observation2"]);
$survenue = ($_POST["survenue"]);
$atcd = ($_POST["atcd"]);
$traitement = ($_POST["traitement"]);
$date1 = ($_POST["date1"]);
$date2 = ($_POST["date2"]);
$date3 = ($_POST["date3"]);
$date4 = ($_POST["date4"]);
$date5 = ($_POST["date5"]);
$date6 = ($_POST["date6"]);
$date7 = ($_POST["date7"]);
$date8 = ($_POST["date8"]);
$date9 = ($_POST["date9"]);
$taille1 = ($_POST["taille1"]);
$taille2 = ($_POST["taille2"]);
$taille3 = ($_POST["taille3"]);
$taille4 = ($_POST["taille4"]);
$taille5 = ($_POST["taille5"]);
$taille6 = ($_POST["taille6"]);
$taille7 = ($_POST["taille7"]);
$taille8 = ($_POST["taille8"]);
$taille9 = ($_POST["taille9"]);
$poids1 = ($_POST["poids1"]);
$poids2 = ($_POST["poids2"]);
$poids3 = ($_POST["poids3"]);
$poids4 = ($_POST["poids4"]);
$poids5 = ($_POST["poids5"]);
$poids6 = ($_POST["poids6"]);
$poids7 = ($_POST["poids7"]);
$poids8 = ($_POST["poids8"]);
$poids9 = ($_POST["poids9"]);
$imc1 = ($_POST["imc1"]);
$imc2 = ($_POST["imc2"]);
$imc3 = ($_POST["imc3"]);
$imc4 = ($_POST["imc4"]);
$imc5 = ($_POST["imc5"]);
$imc6 = ($_POST["imc6"]);
$imc7 = ($_POST["imc7"]);
$imc8 = ($_POST["imc8"]);
$imc9 = ($_POST["imc9"]);

$petitdejeunerDe = ($_POST['petitdejeunerDe']);
$petitdejeunerA = ($_POST['petitdejeunerA']);

$dejeunerDe = ($_POST['dejeunerDe']);
$dejeunerA = ($_POST['dejeunerA']);

$gouterDe = ($_POST['gouterDe']);
$gouterA = ($_POST['gouterA']);

$dinerDe = ($_POST['dinerDe']);
$dinerA = ($_POST['dinerA']);

$collationDe = ($_POST['collationDe']);
$collationA = ($_POST['collationA']);

$petitdejeunerRotation = ($_POST['petitdejeunerRotation']);
$petitdejeunerObjectif = ($_POST['petitdejeunerObjectif']);
$petitdejeunerSensibilite = ($_POST['petitdejeunerSensibilite']);

$dejeunerRotation = ($_POST['dejeunerRotation']);
$dejeunerObjectif = ($_POST['dejeunerObjectif']);
$dejeunerSensibilite = ($_POST['dejeunerSensibilite']);

$gouterRotation = ($_POST['gouterRotation']);
$gouterObjectif = ($_POST['gouterObjectif']);
$gouterSensibilite = ($_POST['gouterSensibilite']);

$dinerRotation = ($_POST['dinerRotation']);
$dinerObjectif = ($_POST['dinerObjectif']);
$dinerSensibilite = ($_POST['dinerSensibilite']);

$collationRotation = ($_POST['collationRotation']);
$collationObjectif = ($_POST['collationObjectif']);
$collationSensibilite = ($_POST['collationSensibilite']);


try {

    $bdd->exec("INSERT INTO infobastide(nomresp, prenomresp, mobileresp, coordonnee) VALUES('" . $_POST["nomresp"] . "','" . $_POST["prenomresp"] . "','" . $_POST["mobileresp"] . "','" . $_POST["coordonnee"] . "')") or die(print_r($bdd->ErrorInfo()));

    $bdd->exec("INSERT INTO infopatient(nompatient, prenompatient, datenaissance, agepatient, telpatient, mobilepatient, adressepatient, codepostalpatient, villepatient) VALUES('" . $_POST["nompatient"] . "','" . $_POST["prenompatient"] . "','" . $_POST["datenaissance"] . "','" . $_POST["agepatient"] . "','" . $_POST["telpatient"] . "','" . $_POST["mobilepatient"] . "','" . $_POST["adressepatient"] . "','" . $_POST["codepostalpatient"] . "','" . $_POST["villepatient"] . "')")or die(print_r($bdd->ErrorInfo()));

    $bdd->exec("INSERT INTO infoprescripteur(etablissementprescripteur, serviceep, diabetologueprescripteur, teldp, mobiledp, villedp, maildp, diabetologueliberal, teldl, mobiledl, villedl, maildl, medecintraitant, telmt, mobilemt, villemt, mailmt,dieteticienne, teld, mobiled, villed, maild, membrereseau, nomreseau) VALUES ('" . $_POST["etablissementprescripteur"] . "', '" . $_POST["serviceep"] . "', '" . $_POST["diabetologueprescripteur"] . "','" . $_POST["teldp"] . "','" . $_POST["mobiledp"] . "','" . $_POST["villedp"] . "','" . $_POST["maildp"] . "','" . $_POST["diabetologueliberal"] . "','" . $_POST["teldl"] . "','" . $_POST["mobiledl"] . "','" . $_POST["villedl"] . "','" . $_POST["maildl"] . "','" . $_POST["medecintraitant"] . "','" . $_POST["telmt"] . "','" . $_POST["mobilemt"] . "','" . $_POST["villemt"] . "','" . $_POST["mailmt"] . "','" . $_POST["dieteticienne"] . "','" . $_POST["teld"] . "','" . $_POST["mobiled"] . "','" . $_POST["villed"] . "','" . $_POST["maild"] . "','" . $_POST["membrereseau"] . "','" . $_POST["nomreseau"] . "')") or die(print_r($bdd->errorInfo()));

    $bdd->exec("INSERT INTO choixmateriel(pompe, dateinstallation, typecatheter, modele, longueurcanule, longueurtubulure, typecatheter2, modele2, longueurcanule2, longueurtubulure2, inserteur, reservoir, spp, observation) VALUES('" . $_POST["Pompe"] . "','" . $_POST["dateinstallation"] . "','" . $_POST["catheter"] . "','" . $_POST["modele"] . "','" . $_POST["longueurcanule"] . "','" . $_POST["longueurtubulure"] . "','" . $_POST["catheter2"] . "','" . $_POST["modele2"] . "','" . $_POST["longueurcanule2"] . "','" . $_POST["longueurtubulure2"] . "','" . $_POST["inserteur"] . "','" . utf8_decode($_POST["reservoir"]) . "','" . $_POST["spp"] . "','" . $_POST["observatiom"] . "')")or die(print_r($bdd->ErrorInfo()));


    $bdd->exec("INSERT INTO habitudevie(activitephysique, profession, situationfamiliale, observation, hygienealimentaire, stabilitehoraires, details, environnement, etatcutane, choixpoint) VALUES('" . $activitephysique . "','" . $profession . "','" . $situationfamiliale . "','" . $observation . "','" . $hygienealimentaire . "','" . $stabilitehoraires . "','" . $details . "','" . $environnement . "','" . $etatcutane . "','" . $choixpoint . "')") or die(print_r($bdd->ErrorInfo()));

    $bdd->exec("INSERT INTO habitudealimentaire(regime, observation2, survenue, atcd, traitement, date1, date2, date3, date4, date5, date6, date7, date8, date9, taille1, taille2, taille3, taille4, taille5, taille6, taille7, taille8, taille9, poids1, poids2, poids3, poids4, poids5, poids6, poids7, poids8, poids9, imc1, imc2, imc3, imc4, imc5, imc6, imc7, imc8, imc9) VALUES ('" . $regime . "','" . $observation2 . "', '" . $survenue . "', '" . $atcd . "','" . $traitement . "','" . $date1 . "','" . $date2 . "','" . $date3 . "','" . $date4 . "','" . $date5 . "','" . $date6 . "','" . $date7 . "','" . $date8 . "','" . $date9 . "','" . $taille1 . "','" . $taille2 . "','" . $taille3 . "','" . $taille4 . "','" . $taille5 . "','" . $taille6 . "','" . $taille7 . "','" . $taille8 . "','" . $taille9 . "','" . $poids1 . "','" . $poids2 . "','" . $poids3 . "','" . $poids4 . "','" . $poids5 . "','" . $poids6 . "','" . $poids7 . "','" . $poids8 . "','" . $poids9 . "','" . $imc1 . "','" . $imc2 . "','" . $imc3 . "','" . $imc4 . "','" . $imc5 . "','" . $imc6 . "','" . $imc7 . "','" . $imc8 . "','" . $imc9 . "')") or die(print_r($bdd->errorInfo()));

    $bdd->exec("INSERT INTO manipulationdelaPompe
      	(
      		date1, date2, date3, date4,
      		etat1, etat2, etat3, etat4, commentaire1, 
      		etat5, etat6, etat7, etat8, commentaire2, 
      		etat9, etat10, etat11, etat12, commentaire3, 
      		etat13, etat14, etat15, etat16, commentaire4, 
      		etat17, etat18, etat19, etat20, commentaire5, 
      		etat21, etat22, etat23, etat24, commentaire6, 
      		etat25, etat26, etat27, etat28, commentaire7, 
      		etat29, etat30, etat31, etat32, commentaire8, 
      		etat33, etat34, etat35, etat36, commentaire9, 
      		autre) 
		VALUES ('"
                    . $_POST["pmpdate1"] . "','"
                    . $_POST["pmpdate2"] . "','"
                    . $_POST["pmpdate3"] . "','"
                    . $_POST["pmpdate4"] . "','"
                    . $_POST["pmpselect1"] . "','"
                    . $_POST["pmpselect2"] . "','"
                    . $_POST["pmpselect3"] . "','"
                    . $_POST["pmpselect4"] . "','"
                    . $_POST["pmpcommentaire1"] . "','"
                    . $_POST["pmpselect5"] . "','"
                    . $_POST["pmpselect6"] . "','"
                    . $_POST["pmpselect7"] . "','"
                    . $_POST["pmpselect8"] . "','"
                    . $_POST["pmpcommentaire2"] . "','"
                    . $_POST["pmpselect9"] . "','"
                    . $_POST["pmpselect10"] . "','"
                    . $_POST["pmpselect11"] . "','"
                    . $_POST["pmpselect12"] . "','"
                    . $_POST["pmpcommentaire3"] . "','"
                    . $_POST["pmpselect13"] . "','"
                    . $_POST["pmpselect14"] . "','"
                    . $_POST["pmpselect15"] . "','"
                    . $_POST["pmpselect16"] . "','"
                    . $_POST["pmpcommentaire4"] . "','"
                    . $_POST["pmpselect17"] . "','"
                    . $_POST["pmpselect18"] . "','"
                    . $_POST["pmpselect19"] . "','"
                    . $_POST["pmpselect20"] . "','"
                    . $_POST["pmpcommentaire5"] . "','"
                    . $_POST["pmpselect21"] . "','"
                    . $_POST["pmpselect22"] . "','"
                    . $_POST["pmpselect23"] . "','"
                    . $_POST["pmpselect24"] . "','"
                    . $_POST["pmpcommentaire6"] . "','"
                    . $_POST["pmpselect25"] . "','"
                    . $_POST["pmpselect26"] . "','"
                    . $_POST["pmpselect27"] . "','"
                    . $_POST["pmpselect28"] . "','"
                    . $_POST["pmpcommentaire7"] . "','"
                    . $_POST["pmpselect29"] . "','"
                    . $_POST["pmpselect291"] . "','"
                    . $_POST["pmpselect292"] . "','"
                    . $_POST["pmpselect293"] . "','"
                    . $_POST["pmpcommentaire8"] . "','"
                    . $_POST["pmpselect294"] . "','"
                    . $_POST["pmpselect295"] . "','"
                    . $_POST["pmpselect296"] . "','"
                    . $_POST["pmpselect297"] . "','"
                    . $_POST["pmpcommentaire9"] . "','"
                    . $_POST["pmpautre"] . "')") or die(print_r($bdd->ErrorInfo()));

    $bdd->exec("INSERT INTO alarmesetprecautions
    	(
    		alarmedate1, alarmedate2, alarmedate3, alarmedate4,
    		alarmeetat1, alarmeetat2, alarmeetat3, alarmeetat4, commentaire1, 
    		alarmeetat5, alarmeetat6, alarmeetat7, alarmeetat8, commentaire2, 
    		alarmeetat9, alarmeetat10, alarmeetat11, alarmeetat12, commentaire3, 
    		alarmeetat13, alarmeetat14, alarmeetat15, alarmeetat16, commentaire4, 
    		alarmeetat17, alarmeetat18, alarmeetat19, alarmeetat20, commentaire5, 
    		alarmeetat21, alarmeetat22, alarmeetat23, alarmeetat24, commentaire6, 
    		alarmeetat25, alarmeetat26, alarmeetat27, alarmeetat28, commentaire7, 
    		autre) 
		VALUES ('"
                    . $_POST["alarmedate1"] . "','"
                    . $_POST["alarmedate2"] . "','"
                    . $_POST["alarmedate3"] . "','"
                    . $_POST["alarmedate4"] . "','"
                    . $_POST["alarmeselect1"] . "','"
                    . $_POST["alarmeselect2"] . "','"
                    . $_POST["alarmeselect3"] . "','"
                    . $_POST["alarmeselect4"] . "','"
                    . $_POST["alarmecommentaire1"] . "','"
                    . $_POST["alarmeselect5"] . "','"
                    . $_POST["alarmeselect6"] . "','"
                    . $_POST["alarmeselect7"] . "','"
                    . $_POST["alarmeselect8"] . "','"
                    . $_POST["alarmecommentaire2"] . "','"
                    . $_POST["alarmeselect9"] . "','"
                    . $_POST["alarmeselect10"] . "','"
                    . $_POST["alarmeselect11"] . "','"
                    . $_POST["alarmeselect12"] . "','"
                    . $_POST["alarmecommentaire3"] . "','"
                    . $_POST["alarmeselect13"] . "','"
                    . $_POST["alarmeselect14"] . "','"
                    . $_POST["alarmeselect15"] . "','"
                    . $_POST["alarmeselect16"] . "','"
                    . $_POST["alarmecommentaire4"] . "','"
                    . $_POST["alarmeselect17"] . "','"
                    . $_POST["alarmeselect18"] . "','"
                    . $_POST["alarmeselect19"] . "','"
                    . $_POST["alarmeselect20"] . "','"
                    . $_POST["alarmecommentaire5"] . "','"
                    . $_POST["alarmeselect21"] . "','"
                    . $_POST["alarmeselect22"] . "','"
                    . $_POST["alarmeselect23"] . "','"
                    . $_POST["alarmeselect24"] . "','"
                    . $_POST["alarmecommentaire6"] . "','"
                    . $_POST["alarmeselect25"] . "','"
                    . $_POST["alarmeselect26"] . "','"
                    . $_POST["alarmeselect27"] . "','"
                    . $_POST["alarmeselect28"] . "','"
                    . $_POST["alarmecommentaire7"] . "','"
                    . $_POST["alarmeautre"] . "')") or die(print_r($bdd->ErrorInfo()));


    $bdd->exec("INSERT INTO manipulations
		(
			date1, date2, date3, date4,
			etat1, etat2, etat3, etat4, 
			commentaire1, 
			etat5, etat6, etat7, etat8,
			commentaire2, 
			etat9, etat10, etat11, etat12,
			commentaire3, 
			etat13, etat14, etat15, etat16,
			commentaire4, 
			etat17, etat18, etat19, etat20,
			commentaire5
		) VALUES 
		('"
                    . $_POST["manipdate1"] . "','"
                    . $_POST["manipdate2"] . "','"
                    . $_POST["manipdate3"] . "','"
                    . $_POST["manipdate4"] . "','"
                    . $_POST["manipselect1"] . "','"
                    . $_POST["manipselect2"] . "','"
                    . $_POST["manipselect3"] . "','"
                    . $_POST["manipselect4"] . "','"
                    . $_POST["manipcommentaire1"] . "','"
                    . $_POST["manipselect5"] . "','"
                    . $_POST["manipselect6"] . "','"
                    . $_POST["manipselect7"] . "','"
                    . $_POST["manipselect8"] . "','"
                    . $_POST["manipcommentaire2"] . "','"
                    . $_POST["manipselect9"] . "','"
                    . $_POST["manipselect10"] . "','"
                    . $_POST["manipselect11"] . "','"
                    . $_POST["manipselect12"] . "','"
                    . $_POST["manipcommentaire3"] . "','"
                    . $_POST["manipselect13"] . "','"
                    . $_POST["manipselect14"] . "','"
                    . $_POST["manipselect15"] . "','"
                    . $_POST["manipselect16"] . "','"
                    . $_POST["manipcommentaire4"] . "','"
                    . $_POST["manipselect17"] . "','"
                    . $_POST["manipselect18"] . "','"
                    . $_POST["manipselect19"] . "','"
                    . $_POST["manipselect20"] . "','"
                    . $_POST["manipcommentaire5"] .
                    "')") or die(print_r($bdd->ErrorInfo()));


    $bdd->exec("INSERT INTO poseducatheter
		(
			date1, date2, date3, date4,
			etat1, etat2, etat3, etat4,
			commentaire1, 
			etat5, etat6, etat7, etat8,
			commentaire2, 
			etat9, etat10, etat11, etat12,
			commentaire3, 
			etat13, etat14, etat15, etat16,
			commentaire4, 
			etat17, etat18, etat19, etat20,
			commentaire5,
			etat21, etat22, etat23, etat24,
			commentaire6,
			etat25, etat26, etat27, etat28,
			commentaire7,
			etat29, etat30, etat31, etat32,
			commentaire8,
			etat33, etat34, etat35, etat36,
			commentaire9,
			etat37, etat38, etat39, etat40,
			commentaire10,
			etat41, etat42, etat43, etat44,
			commentaire11
		) VALUES 
		('"
                    . $_POST["cathdate1"] . "','"
                    . $_POST["cathdate2"] . "','"
                    . $_POST["cathdate3"] . "','"
                    . $_POST["cathdate4"] . "','"
                    . $_POST["cathselect1"] . "','"
                    . $_POST["cathselect2"] . "','"
                    . $_POST["cathselect3"] . "','"
                    . $_POST["cathselect4"] . "','"
                    . $_POST["cathcommentaire1"] . "','"
                    . $_POST["cathselect5"] . "','"
                    . $_POST["cathselect6"] . "','"
                    . $_POST["cathselect7"] . "','"
                    . $_POST["cathselect8"] . "','"
                    . $_POST["cathcommentaire2"] . "','"
                    . $_POST["cathselect9"] . "','"
                    . $_POST["cathselect10"] . "','"
                    . $_POST["cathselect11"] . "','"
                    . $_POST["cathselect12"] . "','"
                    . $_POST["cathcommentaire3"] . "','"
                    . $_POST["cathselect13"] . "','"
                    . $_POST["cathselect14"] . "','"
                    . $_POST["cathselect15"] . "','"
                    . $_POST["cathselect16"] . "','"
                    . $_POST["cathcommentaire4"] . "','"
                    . $_POST["cathselect17"] . "','"
                    . $_POST["cathselect18"] . "','"
                    . $_POST["cathselect19"] . "','"
                    . $_POST["cathselect20"] . "','"
                    . $_POST["cathcommentaire5"] . "','"
                    . $_POST["cathselect21"] . "','"
                    . $_POST["cathselect22"] . "','"
                    . $_POST["cathselect23"] . "','"
                    . $_POST["cathselect24"] . "','"
                    . $_POST["cathcommentaire6"] . "','"
                    . $_POST["cathselect25"] . "','"
                    . $_POST["cathselect26"] . "','"
                    . $_POST["cathselect27"] . "','"
                    . $_POST["cathselect28"] . "','"
                    . $_POST["cathcommentaire7"] . "','"
                    . $_POST["cathselect29"] . "','"
                    . $_POST["cathselect211"] . "','"
                    . $_POST["cathselect212"] . "','"
                    . $_POST["cathselect213"] . "','"
                    . $_POST["cathcommentaire8"] . "','"
                    . $_POST["cathselect214"] . "','"
                    . $_POST["cathselect215"] . "','"
                    . $_POST["cathselect216"] . "','"
                    . $_POST["cathselect217"] . "','"
                    . $_POST["cathcommentaire9"] . "','"
                    . $_POST["cathselect218"] . "','"
                    . $_POST["cathselect219"] . "','"
                    . $_POST["cathselect221"] . "','"
                    . $_POST["cathselect222"] . "','"
                    . $_POST["cathcommentaire10"] . "','"
                    . $_POST["cathselect223"] . "','"
                    . $_POST["cathselect224"] . "','"
                    . $_POST["cathselect225"] . "','"
                    . $_POST["cathselect226"] . "','"
                    . $_POST["cathcommentaire11"] .
                    "')") or die(print_r($bdd->ErrorInfo()));


    $typediabete = (isset($_POST["typediabete"])) ? $_POST["typediabete"] : "";
    $datediagnostic = (isset($_POST["datediagnostic"])) ? $_POST["datediagnostic"] : "";
    $circonstancedecouverte = (isset($_POST["circonstancedecouverte"])) ? $_POST["circonstancedecouverte"] : "";
    $antecedentfamiliaux = (isset($_POST["antecedentfamiliaux"])) ? $_POST["antecedentfamiliaux"] : "";
    $datepremieremisesousPompe = (isset($_POST["datepremieremisesousPompe"])) ? $_POST["datepremieremisesousPompe"] : "";
    $hba1c = (isset($_POST["hba1c"])) ? $_POST["hba1c"] : "";
    $taille = (isset($_POST["taille"])) ? $_POST["taille"] : "";
    $poidsactuel = (isset($_POST["poidsactuel"])) ? $_POST["poidsactuel"] : "";
    $poidsforme = (isset($_POST["poidsforme"])) ? $_POST["poidsforme"] : "";
    $imc = (isset($_POST["imc"])) ? $_POST["imc"] : "";
    $nombreglycemieparjour = (isset($_POST["nombreglycemieparjour"])) ? $_POST["nombreglycemieparjour"] : "";
    $typelecteur = (isset($_POST["typelecteur"])) ? $_POST["typelecteur"] : "";
    $dateprescription = (isset($_POST["dateprescription"])) ? $_POST["dateprescription"] : "";
    $styloautopiqueur = (isset($_POST["styloautopiqueur"])) ? $_POST["styloautopiqueur"] : "";
    $nombreinjectionjour = (isset($_POST["nombreinjectionjour"])) ? $_POST["nombreinjectionjour"] : "";
    $stylo = (isset($_POST["stylo"])) ? $_POST["stylo"] : "";
    $autrestylo = (isset($_POST["autrestylo"])) ? $_POST["autrestylo"] : "";
    $aiguillestylo = (isset($_POST["aiguillestylo"])) ? $_POST["aiguillestylo"] : "";
    $autreaiguille = (isset($_POST["autreaiguille"])) ? $_POST["autreaiguille"] : "";
    $insulinelentematin = (isset($_POST["insulinelentematin"])) ? $_POST["insulinelentematin"] : "";
    $insulinerapidematin = (isset($_POST["insulinerapidematin"])) ? $_POST["insulinerapidematin"] : "";
    $insulinelentemidi = (isset($_POST["insulinelentemidi"])) ? $_POST["insulinelentemidi"] : "";
    $insulinerapidemidi = (isset($_POST["insulinerapidemidi"])) ? $_POST["insulinerapidemidi"] : "";
    $insulinelentesoir = (isset($_POST["insulinelentesoir"])) ? $_POST["insulinelentesoir"] : "";
    $insulinerapidesoir = (isset($_POST["insulinerapidesoir"])) ? $_POST["insulinerapidesoir"] : "";
    $insulinelentediner = (isset($_POST["insulinelentediner"])) ? $_POST["insulinelentediner"] : "";
    $insulinerapidediner = (isset($_POST["insulinerapidediner"])) ? $_POST["insulinerapidediner"] : "";
    $insulinelentecollation = (isset($_POST["insulinelentecollation"])) ? $_POST["insulinelentecollation"] : "";
    $insulinerapidecollation = (isset($_POST["insulinerapidecollation"])) ? $_POST["insulinerapidecollation"] : "";
    $totalinsulinelente = (isset($_POST["totalinsulinelente"])) ? $_POST["totalinsulinelente"] : "";
    $totalinsulinerapide = (isset($_POST["totalinsulinerapide"])) ? $_POST["totalinsulinerapide"] : "";
    $specialite1 = (isset($_POST["specialite1"])) ? $_POST["specialite1"] : "";
    $posologie1 = (isset($_POST["posologie1"])) ? $_POST["posologie1"] : "";
    $specialite2 = (isset($_POST["specialite2"])) ? $_POST["specialite2"] : "";
    $posologie2 = (isset($_POST["posologie2"])) ? $_POST["posologie2"] : "";
    $specialite3 = (isset($_POST["specialite3"])) ? $_POST["specialite3"] : "";
    $posologie3 = (isset($_POST["posologie3"])) ? $_POST["posologie3"] : "";
    $specialite4 = (isset($_POST["specialite4"])) ? $_POST["specialite4"] : "";
    $posologie4 = (isset($_POST["posologie4"])) ? $_POST["posologie4"] : "";
    $Horaire1 = (isset($_POST["Horaire1"])) ? $_POST["Horaire1"] : "";
    $Debit1 = (isset($_POST["Debit1"])) ? $_POST["Debit1"] : "";
    $Horaire2 = (isset($_POST["Horaire2"])) ? $_POST["Horaire2"] : "";
    $Debit2 = (isset($_POST["Debit2"])) ? $_POST["Debit2"] : "";
    $Horaire3 = (isset($_POST["Horaire3"])) ? $_POST["Horaire3"] : "";
    $Debit3 = (isset($_POST["Debit3"])) ? $_POST["Debit3"] : "";
    $Horaire4 = (isset($_POST["Horaire4"])) ? $_POST["Horaire4"] : "";
    $Debit4 = (isset($_POST["Debit4"])) ? $_POST["Debit4"] : "";
    $Horaire1N = (isset($_POST["Horaire1N"])) ? $_POST["Horaire1N"] : "";
    $Debit1N = (isset($_POST["Debit1N"])) ? $_POST["Debit1N"] : "";
    $Horaire2N = (isset($_POST["Horaire2N"])) ? $_POST["Horaire2N"] : "";
    $Debit2N = (isset($_POST["Debit2N"])) ? $_POST["Debit2N"] : "";
    $Horaire3N = (isset($_POST["Horaire3N"])) ? $_POST["Horaire3N"] : "";
    $Debit3N = (isset($_POST["Debit3N"])) ? $_POST["Debit3N"] : "";
    $Horaire4N = (isset($_POST["Horaire4N"])) ? $_POST["Horaire4N"] : "";
    $Debit4N = (isset($_POST["Debit4N"])) ? $_POST["Debit4N"] : "";
    $Horaire_1 = (isset($_POST["Horaire_1"])) ? $_POST["Horaire_1"] : "";
    $Debit_1 = (isset($_POST["Debit_1"])) ? $_POST["Debit_1"] : "";
    $Horaire_2 = (isset($_POST["Horaire_2"])) ? $_POST["Horaire_2"] : "";
    $Debit_2 = (isset($_POST["Debit_2"])) ? $_POST["Debit_2"] : "";
    $Horaire_3 = (isset($_POST["Horaire_3"])) ? $_POST["Horaire_3"] : "";
    $Debit_3 = (isset($_POST["Debit_3"])) ? $_POST["Debit_3"] : "";
    $Horaire_4 = (isset($_POST["Horaire_4"])) ? $_POST["Horaire_4"] : "";
    $Debit_4 = (isset($_POST["Debit_4"])) ? $_POST["Debit_4"] : "";
    $Horaire_N1 = (isset($_POST["Horaire_N1"])) ? $_POST["Horaire_N1"] : "";
    $Debit_N1 = (isset($_POST["Debit_N1"])) ? $_POST["Debit_N1"] : "";
    $Horaire_N2 = (isset($_POST["Horaire_N2"])) ? $_POST["Horaire_N2"] : "";
    $Debit_N2 = (isset($_POST["Debit_N2"])) ? $_POST["Debit_N2"] : "";
    $Horaire_N3 = (isset($_POST["Horaire_N3"])) ? $_POST["Horaire_N3"] : "";
    $Debit_N3 = (isset($_POST["Debit_N3"])) ? $_POST["Debit_N3"] : "";
    $Horaire_N4 = (isset($_POST["Horaire_N4"])) ? $_POST["Horaire_N4"] : "";
    $Debit_N4 = (isset($_POST["Debit_N4"])) ? $_POST["Debit_N4"] : "";
    $ValGlycemique1 = (isset($_POST["ValGlycemique1"])) ? $_POST["ValGlycemique1"] : "";
    $ValGlyMatin1 = (isset($_POST["ValGlyMatin1"])) ? $_POST["ValGlyMatin1"] : "";
    $ValGlyMid1 = (isset($_POST["ValGlyMid1"])) ? $_POST["ValGlyMid1"] : "";
    $ValGlyCollation1 = (isset($_POST["ValGlyCollation1"])) ? $_POST["ValGlyCollation1"] : "";
    $ValGlySoir1 = (isset($_POST["ValGlySoir1"])) ? $_POST["ValGlySoir1"] : "";
    $ValGlyAutre1 = (isset($_POST["ValGlyAutre1"])) ? $_POST["ValGlyAutre1"] : "";
    $ValGlycemique2 = (isset($_POST["ValGlycemique2"])) ? $_POST["ValGlycemique2"] : "";
    $ValGlyMatin2 = (isset($_POST["ValGlyMatin2"])) ? $_POST["ValGlyMatin2"] : "";
    $ValGlyMid2 = (isset($_POST["ValGlyMid2"])) ? $_POST["ValGlyMid2"] : "";
    $ValGlyCollation2 = (isset($_POST["ValGlyCollation2"])) ? $_POST["ValGlyCollation2"] : "";
    $ValGlySoir2 = (isset($_POST["ValGlySoir2"])) ? $_POST["ValGlySoir2"] : "";
    $ValGlyAutre2 = (isset($_POST["ValGlyAutre2"])) ? $_POST["ValGlyAutre2"] : "";
    $ValGlycemique3 = (isset($_POST["ValGlycemique3"])) ? $_POST["ValGlycemique3"] : "";
    $ValGlyMatin3 = (isset($_POST["ValGlyMatin3"])) ? $_POST["ValGlyMatin3"] : "";
    $ValGlyMid3 = (isset($_POST["ValGlyMid3"])) ? $_POST["ValGlyMid3"] : "";
    $ValGlyCollation3 = (isset($_POST["ValGlyCollation3"])) ? $_POST["ValGlyCollation3"] : "";
    $ValGlySoir3 = (isset($_POST["ValGlySoir3"])) ? $_POST["ValGlySoir3"] : "";
    $ValGlyAutre3 = (isset($_POST["ValGlyAutre3"])) ? $_POST["ValGlyAutre3"] : "";
    $ValGlycemique4 = (isset($_POST["ValGlycemique4"])) ? $_POST["ValGlycemique4"] : "";
    $ValGlyMatin4 = (isset($_POST["ValGlyMatin4"])) ? $_POST["ValGlyMatin4"] : "";
    $ValGlyMid4 = (isset($_POST["ValGlyMid4"])) ? $_POST["ValGlyMid4"] : "";
    $ValGlyCollation4 = (isset($_POST["ValGlyCollation4"])) ? $_POST["ValGlyCollation4"] : "";
    $ValGlySoir4 = (isset($_POST["ValGlySoir4"])) ? $_POST["ValGlySoir4"] : "";
    $ValGlyAutre4 = (isset($_POST["ValGlyAutre4"])) ? $_POST["ValGlyAutre4"] : "";
    $ValGlycemique5 = (isset($_POST["ValGlycemique5"])) ? $_POST["ValGlycemique5"] : "";
    $ValGlyMatin5 = (isset($_POST["ValGlyMatin5"])) ? $_POST["ValGlyMatin5"] : "";
    $ValGlyMid5 = (isset($_POST["ValGlyMid5"])) ? $_POST["ValGlyMid5"] : "";
    $ValGlyCollation5 = (isset($_POST["ValGlyCollation5"])) ? $_POST["ValGlyCollation5"] : "";
    $ValGlySoir5 = (isset($_POST["ValGlySoir5"])) ? $_POST["ValGlySoir5"] : "";
    $ValGlyAutre5 = (isset($_POST["ValGlyAutre5"])) ? $_POST["ValGlyAutre5"] : "";
    $ValGlycemique6 = (isset($_POST["ValGlycemique6"])) ? $_POST["ValGlycemique6"] : "";
    $ValGlyMatin6 = (isset($_POST["ValGlyMatin6"])) ? $_POST["ValGlyMatin6"] : "";
    $ValGlyMid6 = (isset($_POST["ValGlyMid6"])) ? $_POST["ValGlyMid6"] : "";
    $ValGlyCollation6 = (isset($_POST["ValGlyCollation6"])) ? $_POST["ValGlyCollation6"] : "";
    $ValGlySoir6 = (isset($_POST["ValGlySoir6"])) ? $_POST["ValGlySoir6"] : "";
    $ValGlyAutre6 = (isset($_POST["ValGlyAutre6"])) ? $_POST["ValGlyAutre6"] : "";
    $ValGlycemique7 = (isset($_POST["ValGlycemique7"])) ? $_POST["ValGlycemique7"] : "";
    $ValGlyMatin7 = (isset($_POST["ValGlyMatin7"])) ? $_POST["ValGlyMatin7"] : "";
    $ValGlyMid7 = (isset($_POST["ValGlyMid7"])) ? $_POST["ValGlyMid7"] : "";
    $ValGlyCollation7 = (isset($_POST["ValGlyCollation7"])) ? $_POST["ValGlyCollation7"] : "";
    $ValGlySoir7 = (isset($_POST["ValGlySoir7"])) ? $_POST["ValGlySoir7"] : "";
    $ValGlyAutre7 = (isset($_POST["ValGlyAutre7"])) ? $_POST["ValGlyAutre7"] : "";
    $synthesecommentaire = (isset($_POST["synthesecommentaire"])) ? $_POST["synthesecommentaire"] : "";
    $objectifglycemiquepreprandial = (isset($_POST["objectifglycemiquepreprandial"])) ? $_POST["objectifglycemiquepreprandial"] : "";
    $objectifglycemiquepostprandial = (isset($_POST["objectifglycemiquepostprandial"])) ? $_POST["objectifglycemiquepostprandial"] : "";
    $ValDatesHemGlyc1 = (isset($_POST["ValDatesHemGlyc1"])) ? $_POST["ValDatesHemGlyc1"] : "";
    $ValDatesHemGlyc2 = (isset($_POST["ValDatesHemGlyc2"])) ? $_POST["ValDatesHemGlyc2"] : "";
    $ValDatesHemGlyc3 = (isset($_POST["ValDatesHemGlyc3"])) ? $_POST["ValDatesHemGlyc3"] : "";
    $ValDatesHemGlyc4 = (isset($_POST["ValDatesHemGlyc4"])) ? $_POST["ValDatesHemGlyc4"] : "";
    $ValDatesHemGlyc5 = (isset($_POST["ValDatesHemGlyc5"])) ? $_POST["ValDatesHemGlyc5"] : "";
    $ValDatesHemGlyc6 = (isset($_POST["ValDatesHemGlyc6"])) ? $_POST["ValDatesHemGlyc6"] : "";
    $ValDatesHemGlyc7 = (isset($_POST["ValDatesHemGlyc7"])) ? $_POST["ValDatesHemGlyc7"] : "";
    $ValDatesHemGlyc8 = (isset($_POST["ValDatesHemGlyc8"])) ? $_POST["ValDatesHemGlyc8"] : "";
    $ValDatesHemGlyc9 = (isset($_POST["ValDatesHemGlyc9"])) ? $_POST["ValDatesHemGlyc9"] : "";
    $ValHbA1cHemGlyc1 = (isset($_POST["ValHbA1cHemGlyc1"])) ? $_POST["ValHbA1cHemGlyc1"] : "";
    $ValHbA1cHemGlyc2 = (isset($_POST["ValHbA1cHemGlyc2"])) ? $_POST["ValHbA1cHemGlyc2"] : "";
    $ValHbA1cHemGlyc3 = (isset($_POST["ValHbA1cHemGlyc3"])) ? $_POST["ValHbA1cHemGlyc3"] : "";
    $ValHbA1cHemGlyc4 = (isset($_POST["ValHbA1cHemGlyc4"])) ? $_POST["ValHbA1cHemGlyc4"] : "";
    $ValHbA1cHemGlyc5 = (isset($_POST["ValHbA1cHemGlyc5"])) ? $_POST["ValHbA1cHemGlyc5"] : "";
    $ValHbA1cHemGlyc6 = (isset($_POST["ValHbA1cHemGlyc6"])) ? $_POST["ValHbA1cHemGlyc6"] : "";
    $ValHbA1cHemGlyc7 = (isset($_POST["ValHbA1cHemGlyc7"])) ? $_POST["ValHbA1cHemGlyc7"] : "";
    $ValHbA1cHemGlyc8 = (isset($_POST["ValHbA1cHemGlyc8"])) ? $_POST["ValHbA1cHemGlyc8"] : "";
    $ValHbA1cHemGlyc9 = (isset($_POST["ValHbA1cHemGlyc9"])) ? $_POST["ValHbA1cHemGlyc9"] : "";
    $Horaire5 = (isset($_POST["Horaire5"])) ? $_POST["Horaire5"] : "";
    $Horaire6 = (isset($_POST["Horaire6"])) ? $_POST["Horaire6"] : "";
    $Horaire7 = (isset($_POST["Horaire7"])) ? $_POST["Horaire7"] : "";
    $Horaire8 = (isset($_POST["Horaire8"])) ? $_POST["Horaire8"] : "";
    $Horaire9 = (isset($_POST["Horaire9"])) ? $_POST["Horaire9"] : "";
    $Horaire10 = (isset($_POST["Horaire10"])) ? $_POST["Horaire10"] : "";
    $Horaire11 = (isset($_POST["Horaire11"])) ? $_POST["Horaire11"] : "";
    $Horaire12 = (isset($_POST["Horaire12"])) ? $_POST["Horaire12"] : "";
    $Horaire13 = (isset($_POST["Horaire13"])) ? $_POST["Horaire13"] : "";
    $Horaire14 = (isset($_POST["Horaire14"])) ? $_POST["Horaire14"] : "";
    $Horaire15 = (isset($_POST["Horaire15"])) ? $_POST["Horaire15"] : "";
    $Horaire16 = (isset($_POST["Horaire16"])) ? $_POST["Horaire16"] : "";
    $Horaire17 = (isset($_POST["Horaire17"])) ? $_POST["Horaire17"] : "";
    $Horaire18 = (isset($_POST["Horaire18"])) ? $_POST["Horaire18"] : "";
    $Horaire19 = (isset($_POST["Horaire19"])) ? $_POST["Horaire19"] : "";
    $Horaire20 = (isset($_POST["Horaire20"])) ? $_POST["Horaire20"] : "";
    $Horaire21 = (isset($_POST["Horaire21"])) ? $_POST["Horaire21"] : "";
    $Horaire22 = (isset($_POST["Horaire22"])) ? $_POST["Horaire22"] : "";
    $Horaire23 = (isset($_POST["Horaire23"])) ? $_POST["Horaire23"] : "";
    $Horaire24 = (isset($_POST["Horaire24"])) ? $_POST["Horaire24"] : "";
    $Horaire25 = (isset($_POST["Horaire25"])) ? $_POST["Horaire25"] : "";
    $Horaire26 = (isset($_POST["Horaire26"])) ? $_POST["Horaire26"] : "";
    $Horaire27 = (isset($_POST["Horaire27"])) ? $_POST["Horaire27"] : "";
    $Horaire28 = (isset($_POST["Horaire28"])) ? $_POST["Horaire28"] : "";
    $Horaire29 = (isset($_POST["Horaire29"])) ? $_POST["Horaire29"] : "";
    $Horaire30 = (isset($_POST["Horaire30"])) ? $_POST["Horaire30"] : "";
    $Horaire31 = (isset($_POST["Horaire31"])) ? $_POST["Horaire31"] : "";
    $Horaire32 = (isset($_POST["Horaire32"])) ? $_POST["Horaire32"] : "";
    $Horaire33 = (isset($_POST["Horaire33"])) ? $_POST["Horaire33"] : "";
    $Horaire34 = (isset($_POST["Horaire34"])) ? $_POST["Horaire34"] : "";
    $Horaire35 = (isset($_POST["Horaire35"])) ? $_POST["Horaire35"] : "";
    $Horaire36 = (isset($_POST["Horaire36"])) ? $_POST["Horaire36"] : "";
    $Horaire37 = (isset($_POST["Horaire37"])) ? $_POST["Horaire37"] : "";
    $Horaire38 = (isset($_POST["Horaire38"])) ? $_POST["Horaire38"] : "";
    $Horaire39 = (isset($_POST["Horaire39"])) ? $_POST["Horaire39"] : "";
    $Horaire40 = (isset($_POST["Horaire40"])) ? $_POST["Horaire40"] : "";
    $Horaire41 = (isset($_POST["Horaire41"])) ? $_POST["Horaire41"] : "";
    $Horaire42 = (isset($_POST["Horaire42"])) ? $_POST["Horaire42"] : "";
    $Horaire43 = (isset($_POST["Horaire43"])) ? $_POST["Horaire43"] : "";
    $Horaire44 = (isset($_POST["Horaire44"])) ? $_POST["Horaire44"] : "";
    $Horaire45 = (isset($_POST["Horaire45"])) ? $_POST["Horaire45"] : "";
    $Horaire46 = (isset($_POST["Horaire46"])) ? $_POST["Horaire46"] : "";
    $Horaire47 = (isset($_POST["Horaire47"])) ? $_POST["Horaire47"] : "";
    $Horaire48 = (isset($_POST["Horaire48"])) ? $_POST["Horaire48"] : "";
    $Horaire49 = (isset($_POST["Horaire49"])) ? $_POST["Horaire49"] : "";
    $Horaire50 = (isset($_POST["Horaire50"])) ? $_POST["Horaire50"] : "";
    $Horaire51 = (isset($_POST["Horaire51"])) ? $_POST["Horaire51"] : "";
    $Horaire52 = (isset($_POST["Horaire52"])) ? $_POST["Horaire52"] : "";
    $Horaire53 = (isset($_POST["Horaire53"])) ? $_POST["Horaire53"] : "";
    $Horaire54 = (isset($_POST["Horaire54"])) ? $_POST["Horaire54"] : "";
    $Horaire55 = (isset($_POST["Horaire55"])) ? $_POST["Horaire55"] : "";
    $Horaire56 = (isset($_POST["Horaire56"])) ? $_POST["Horaire56"] : "";
    $Horaire57 = (isset($_POST["Horaire57"])) ? $_POST["Horaire57"] : "";
    $Horaire58 = (isset($_POST["Horaire58"])) ? $_POST["Horaire58"] : "";
    $Horaire59 = (isset($_POST["Horaire59"])) ? $_POST["Horaire59"] : "";
    $Horaire60 = (isset($_POST["Horaire60"])) ? $_POST["Horaire60"] : "";
    $Horaire61 = (isset($_POST["Horaire61"])) ? $_POST["Horaire61"] : "";
    $Horaire62 = (isset($_POST["Horaire62"])) ? $_POST["Horaire62"] : "";
    $Horaire63 = (isset($_POST["Horaire63"])) ? $_POST["Horaire63"] : "";
    $Horaire64 = (isset($_POST["Horaire64"])) ? $_POST["Horaire64"] : "";
    $Horaire65 = (isset($_POST["Horaire65"])) ? $_POST["Horaire65"] : "";
    $Horaire66 = (isset($_POST["Horaire66"])) ? $_POST["Horaire66"] : "";
    $Horaire67 = (isset($_POST["Horaire67"])) ? $_POST["Horaire67"] : "";
    $Horaire68 = (isset($_POST["Horaire68"])) ? $_POST["Horaire68"] : "";
    $Horaire69 = (isset($_POST["Horaire69"])) ? $_POST["Horaire69"] : "";
    $Horaire70 = (isset($_POST["Horaire70"])) ? $_POST["Horaire70"] : "";
    $Horaire71 = (isset($_POST["Horaire71"])) ? $_POST["Horaire71"] : "";
    $Horaire72 = (isset($_POST["Horaire72"])) ? $_POST["Horaire72"] : "";
    $Horaire73 = (isset($_POST["Horaire73"])) ? $_POST["Horaire73"] : "";
    $Horaire74 = (isset($_POST["Horaire74"])) ? $_POST["Horaire74"] : "";
    $Horaire75 = (isset($_POST["Horaire75"])) ? $_POST["Horaire75"] : "";
    $Horaire76 = (isset($_POST["Horaire76"])) ? $_POST["Horaire76"] : "";
    $Horaire77 = (isset($_POST["Horaire77"])) ? $_POST["Horaire77"] : "";
    $Horaire78 = (isset($_POST["Horaire78"])) ? $_POST["Horaire78"] : "";
    $Horaire79 = (isset($_POST["Horaire79"])) ? $_POST["Horaire79"] : "";
    $Horaire80 = (isset($_POST["Horaire80"])) ? $_POST["Horaire80"] : "";
    $Horaire81 = (isset($_POST["Horaire81"])) ? $_POST["Horaire81"] : "";
    $Horaire82 = (isset($_POST["Horaire82"])) ? $_POST["Horaire82"] : "";
    $Horaire83 = (isset($_POST["Horaire83"])) ? $_POST["Horaire83"] : "";
    $Horaire84 = (isset($_POST["Horaire84"])) ? $_POST["Horaire84"] : "";
    $Horaire_5 = (isset($_POST["Horaire_5"])) ? $_POST["Horaire_5"] : "";
    $Horaire_6 = (isset($_POST["Horaire_6"])) ? $_POST["Horaire_6"] : "";
    $Horaire_7 = (isset($_POST["Horaire_7"])) ? $_POST["Horaire_7"] : "";
    $Horaire_8 = (isset($_POST["Horaire_8"])) ? $_POST["Horaire_8"] : "";
    $Horaire_9 = (isset($_POST["Horaire_9"])) ? $_POST["Horaire_9"] : "";
    $Horaire_10 = (isset($_POST["Horaire_10"])) ? $_POST["Horaire_10"] : "";
    $Horaire_11 = (isset($_POST["Horaire_11"])) ? $_POST["Horaire_11"] : "";
    $Horaire_12 = (isset($_POST["Horaire_12"])) ? $_POST["Horaire_12"] : "";
    $Horaire_13 = (isset($_POST["Horaire_13"])) ? $_POST["Horaire_13"] : "";
    $Horaire_14 = (isset($_POST["Horaire_14"])) ? $_POST["Horaire_14"] : "";
    $Horaire_15 = (isset($_POST["Horaire_15"])) ? $_POST["Horaire_15"] : "";
    $Horaire_16 = (isset($_POST["Horaire_16"])) ? $_POST["Horaire_16"] : "";
    $Horaire_17 = (isset($_POST["Horaire_17"])) ? $_POST["Horaire_17"] : "";
    $Horaire_18 = (isset($_POST["Horaire_18"])) ? $_POST["Horaire_18"] : "";
    $Horaire_19 = (isset($_POST["Horaire_19"])) ? $_POST["Horaire_19"] : "";
    $Horaire_20 = (isset($_POST["Horaire_20"])) ? $_POST["Horaire_20"] : "";
    $Horaire_21 = (isset($_POST["Horaire_21"])) ? $_POST["Horaire_21"] : "";
    $Horaire_22 = (isset($_POST["Horaire_22"])) ? $_POST["Horaire_22"] : "";
    $Horaire_23 = (isset($_POST["Horaire_23"])) ? $_POST["Horaire_23"] : "";
    $Horaire_24 = (isset($_POST["Horaire_24"])) ? $_POST["Horaire_24"] : "";
    $Horaire_25 = (isset($_POST["Horaire_25"])) ? $_POST["Horaire_25"] : "";
    $Horaire_26 = (isset($_POST["Horaire_26"])) ? $_POST["Horaire_26"] : "";
    $Horaire_27 = (isset($_POST["Horaire_27"])) ? $_POST["Horaire_27"] : "";
    $Horaire_28 = (isset($_POST["Horaire_28"])) ? $_POST["Horaire_28"] : "";
    $Horaire_29 = (isset($_POST["Horaire_29"])) ? $_POST["Horaire_29"] : "";
    $Horaire_30 = (isset($_POST["Horaire_30"])) ? $_POST["Horaire_30"] : "";
    $Horaire_31 = (isset($_POST["Horaire_31"])) ? $_POST["Horaire_31"] : "";
    $Horaire_32 = (isset($_POST["Horaire_32"])) ? $_POST["Horaire_32"] : "";
    $Horaire_33 = (isset($_POST["Horaire_33"])) ? $_POST["Horaire_33"] : "";
    $Horaire_34 = (isset($_POST["Horaire_34"])) ? $_POST["Horaire_34"] : "";
    $Horaire_35 = (isset($_POST["Horaire_35"])) ? $_POST["Horaire_35"] : "";
    $Horaire_36 = (isset($_POST["Horaire_36"])) ? $_POST["Horaire_36"] : "";
    $Horaire_37 = (isset($_POST["Horaire_37"])) ? $_POST["Horaire_37"] : "";
    $Horaire_38 = (isset($_POST["Horaire_38"])) ? $_POST["Horaire_38"] : "";
    $Horaire_39 = (isset($_POST["Horaire_39"])) ? $_POST["Horaire_39"] : "";
    $Horaire_40 = (isset($_POST["Horaire_40"])) ? $_POST["Horaire_40"] : "";
    $Horaire_41 = (isset($_POST["Horaire_41"])) ? $_POST["Horaire_41"] : "";
    $Horaire_42 = (isset($_POST["Horaire_42"])) ? $_POST["Horaire_42"] : "";
    $Horaire_43 = (isset($_POST["Horaire_43"])) ? $_POST["Horaire_43"] : "";
    $Horaire_44 = (isset($_POST["Horaire_44"])) ? $_POST["Horaire_44"] : "";
    $Horaire_45 = (isset($_POST["Horaire_45"])) ? $_POST["Horaire_45"] : "";
    $Horaire_46 = (isset($_POST["Horaire_46"])) ? $_POST["Horaire_46"] : "";
    $Horaire_47 = (isset($_POST["Horaire_47"])) ? $_POST["Horaire_47"] : "";
    $Horaire_48 = (isset($_POST["Horaire_48"])) ? $_POST["Horaire_48"] : "";
    $Horaire_49 = (isset($_POST["Horaire_49"])) ? $_POST["Horaire_49"] : "";
    $Horaire_50 = (isset($_POST["Horaire_50"])) ? $_POST["Horaire_50"] : "";
    $Horaire_51 = (isset($_POST["Horaire_51"])) ? $_POST["Horaire_51"] : "";
    $Horaire_52 = (isset($_POST["Horaire_52"])) ? $_POST["Horaire_52"] : "";
    $Horaire_53 = (isset($_POST["Horaire_53"])) ? $_POST["Horaire_53"] : "";
    $Horaire_54 = (isset($_POST["Horaire_54"])) ? $_POST["Horaire_54"] : "";
    $Horaire_55 = (isset($_POST["Horaire_55"])) ? $_POST["Horaire_55"] : "";
    $Horaire_56 = (isset($_POST["Horaire_56"])) ? $_POST["Horaire_56"] : "";
    $Horaire_57 = (isset($_POST["Horaire_57"])) ? $_POST["Horaire_57"] : "";
    $Horaire_58 = (isset($_POST["Horaire_58"])) ? $_POST["Horaire_58"] : "";
    $Horaire_59 = (isset($_POST["Horaire_59"])) ? $_POST["Horaire_59"] : "";
    $Horaire_60 = (isset($_POST["Horaire_60"])) ? $_POST["Horaire_60"] : "";
    $Horaire_61 = (isset($_POST["Horaire_61"])) ? $_POST["Horaire_61"] : "";
    $Horaire_62 = (isset($_POST["Horaire_62"])) ? $_POST["Horaire_62"] : "";
    $Horaire_63 = (isset($_POST["Horaire_63"])) ? $_POST["Horaire_63"] : "";
    $Horaire_64 = (isset($_POST["Horaire_64"])) ? $_POST["Horaire_64"] : "";
    $Horaire_65 = (isset($_POST["Horaire_65"])) ? $_POST["Horaire_65"] : "";
    $Horaire_66 = (isset($_POST["Horaire_66"])) ? $_POST["Horaire_66"] : "";
    $Horaire_67 = (isset($_POST["Horaire_67"])) ? $_POST["Horaire_67"] : "";
    $Horaire_68 = (isset($_POST["Horaire_68"])) ? $_POST["Horaire_68"] : "";
    $Horaire_69 = (isset($_POST["Horaire_69"])) ? $_POST["Horaire_69"] : "";
    $Horaire_70 = (isset($_POST["Horaire_70"])) ? $_POST["Horaire_70"] : "";
    $Horaire_71 = (isset($_POST["Horaire_71"])) ? $_POST["Horaire_71"] : "";
    $Horaire_72 = (isset($_POST["Horaire_72"])) ? $_POST["Horaire_72"] : "";
    $Horaire_73 = (isset($_POST["Horaire_73"])) ? $_POST["Horaire_73"] : "";
    $Horaire_74 = (isset($_POST["Horaire_74"])) ? $_POST["Horaire_74"] : "";
    $Horaire_75 = (isset($_POST["Horaire_75"])) ? $_POST["Horaire_75"] : "";
    $Horaire_76 = (isset($_POST["Horaire_76"])) ? $_POST["Horaire_76"] : "";
    $Horaire_77 = (isset($_POST["Horaire_77"])) ? $_POST["Horaire_77"] : "";
    $Horaire_78 = (isset($_POST["Horaire_78"])) ? $_POST["Horaire_78"] : "";
    $Horaire_79 = (isset($_POST["Horaire_79"])) ? $_POST["Horaire_79"] : "";
    $Horaire_80 = (isset($_POST["Horaire_80"])) ? $_POST["Horaire_80"] : "";
    $Horaire_81 = (isset($_POST["Horaire_81"])) ? $_POST["Horaire_81"] : "";
    $Horaire_82 = (isset($_POST["Horaire_82"])) ? $_POST["Horaire_82"] : "";
    $Horaire_83 = (isset($_POST["Horaire_83"])) ? $_POST["Horaire_83"] : "";
    $Horaire_84 = (isset($_POST["Horaire_84"])) ? $_POST["Horaire_84"] : "";
    $Debit5 = (isset($_POST["Debit5"])) ? $_POST["Debit5"] : "";
    $Debit6 = (isset($_POST["Debit6"])) ? $_POST["Debit6"] : "";
    $Debit7 = (isset($_POST["Debit7"])) ? $_POST["Debit7"] : "";
    $Debit8 = (isset($_POST["Debit8"])) ? $_POST["Debit8"] : "";
    $Debit9 = (isset($_POST["Debit9"])) ? $_POST["Debit9"] : "";
    $Debit10 = (isset($_POST["Debit10"])) ? $_POST["Debit10"] : "";
    $Debit11 = (isset($_POST["Debit11"])) ? $_POST["Debit11"] : "";
    $Debit12 = (isset($_POST["Debit12"])) ? $_POST["Debit12"] : "";
    $Debit13 = (isset($_POST["Debit13"])) ? $_POST["Debit13"] : "";
    $Debit14 = (isset($_POST["Debit14"])) ? $_POST["Debit14"] : "";
    $Debit15 = (isset($_POST["Debit15"])) ? $_POST["Debit15"] : "";
    $Debit16 = (isset($_POST["Debit16"])) ? $_POST["Debit16"] : "";
    $Debit17 = (isset($_POST["Debit17"])) ? $_POST["Debit17"] : "";
    $Debit18 = (isset($_POST["Debit18"])) ? $_POST["Debit18"] : "";
    $Debit19 = (isset($_POST["Debit19"])) ? $_POST["Debit19"] : "";
    $Debit20 = (isset($_POST["Debit20"])) ? $_POST["Debit20"] : "";
    $Debit21 = (isset($_POST["Debit21"])) ? $_POST["Debit21"] : "";
    $Debit22 = (isset($_POST["Debit22"])) ? $_POST["Debit22"] : "";
    $Debit23 = (isset($_POST["Debit23"])) ? $_POST["Debit23"] : "";
    $Debit24 = (isset($_POST["Debit24"])) ? $_POST["Debit24"] : "";
    $Debit25 = (isset($_POST["Debit25"])) ? $_POST["Debit25"] : "";
    $Debit26 = (isset($_POST["Debit26"])) ? $_POST["Debit26"] : "";
    $Debit27 = (isset($_POST["Debit27"])) ? $_POST["Debit27"] : "";
    $Debit28 = (isset($_POST["Debit28"])) ? $_POST["Debit28"] : "";
    $Debit29 = (isset($_POST["Debit29"])) ? $_POST["Debit29"] : "";
    $Debit30 = (isset($_POST["Debit30"])) ? $_POST["Debit30"] : "";
    $Debit31 = (isset($_POST["Debit31"])) ? $_POST["Debit31"] : "";
    $Debit32 = (isset($_POST["Debit32"])) ? $_POST["Debit32"] : "";
    $Debit33 = (isset($_POST["Debit33"])) ? $_POST["Debit33"] : "";
    $Debit34 = (isset($_POST["Debit34"])) ? $_POST["Debit34"] : "";
    $Debit35 = (isset($_POST["Debit35"])) ? $_POST["Debit35"] : "";
    $Debit36 = (isset($_POST["Debit36"])) ? $_POST["Debit36"] : "";
    $Debit37 = (isset($_POST["Debit37"])) ? $_POST["Debit37"] : "";
    $Debit38 = (isset($_POST["Debit38"])) ? $_POST["Debit38"] : "";
    $Debit39 = (isset($_POST["Debit39"])) ? $_POST["Debit39"] : "";
    $Debit40 = (isset($_POST["Debit40"])) ? $_POST["Debit40"] : "";
    $Debit41 = (isset($_POST["Debit41"])) ? $_POST["Debit41"] : "";
    $Debit42 = (isset($_POST["Debit42"])) ? $_POST["Debit42"] : "";
    $Debit43 = (isset($_POST["Debit43"])) ? $_POST["Debit43"] : "";
    $Debit44 = (isset($_POST["Debit44"])) ? $_POST["Debit44"] : "";
    $Debit_5 = (isset($_POST["Debit_5"])) ? $_POST["Debit_5"] : "";
    $Debit_6 = (isset($_POST["Debit_6"])) ? $_POST["Debit_6"] : "";
    $Debit_7 = (isset($_POST["Debit_7"])) ? $_POST["Debit_7"] : "";
    $Debit_8 = (isset($_POST["Debit_8"])) ? $_POST["Debit_8"] : "";
    $Debit_9 = (isset($_POST["Debit_9"])) ? $_POST["Debit_9"] : "";
    $Debit_10 = (isset($_POST["Debit_10"])) ? $_POST["Debit_10"] : "";
    $Debit_11 = (isset($_POST["Debit_11"])) ? $_POST["Debit_11"] : "";
    $Debit_12 = (isset($_POST["Debit_12"])) ? $_POST["Debit_12"] : "";
    $Debit_13 = (isset($_POST["Debit_13"])) ? $_POST["Debit_13"] : "";
    $Debit_14 = (isset($_POST["Debit_14"])) ? $_POST["Debit_14"] : "";
    $Debit_15 = (isset($_POST["Debit_15"])) ? $_POST["Debit_15"] : "";
    $Debit_16 = (isset($_POST["Debit_16"])) ? $_POST["Debit_16"] : "";
    $Debit_17 = (isset($_POST["Debit_17"])) ? $_POST["Debit_17"] : "";
    $Debit_18 = (isset($_POST["Debit_18"])) ? $_POST["Debit_18"] : "";
    $Debit_19 = (isset($_POST["Debit_19"])) ? $_POST["Debit_19"] : "";
    $Debit_20 = (isset($_POST["Debit_20"])) ? $_POST["Debit_20"] : "";
    $Debit_21 = (isset($_POST["Debit_21"])) ? $_POST["Debit_21"] : "";
    $Debit_22 = (isset($_POST["Debit_22"])) ? $_POST["Debit_22"] : "";
    $Debit_23 = (isset($_POST["Debit_23"])) ? $_POST["Debit_23"] : "";
    $Debit_24 = (isset($_POST["Debit_24"])) ? $_POST["Debit_24"] : "";
    $Debit_25 = (isset($_POST["Debit_25"])) ? $_POST["Debit_25"] : "";
    $Debit_26 = (isset($_POST["Debit_26"])) ? $_POST["Debit_26"] : "";
    $Debit_27 = (isset($_POST["Debit_27"])) ? $_POST["Debit_27"] : "";
    $Debit_28 = (isset($_POST["Debit_28"])) ? $_POST["Debit_28"] : "";
    $Debit_29 = (isset($_POST["Debit_29"])) ? $_POST["Debit_29"] : "";
    $Debit_30 = (isset($_POST["Debit_30"])) ? $_POST["Debit_30"] : "";
    $Debit_31 = (isset($_POST["Debit_31"])) ? $_POST["Debit_31"] : "";
    $Debit_32 = (isset($_POST["Debit_32"])) ? $_POST["Debit_32"] : "";
    $Debit_33 = (isset($_POST["Debit_33"])) ? $_POST["Debit_33"] : "";
    $Debit_34 = (isset($_POST["Debit_34"])) ? $_POST["Debit_34"] : "";
    $Debit_35 = (isset($_POST["Debit_35"])) ? $_POST["Debit_35"] : "";
    $Debit_36 = (isset($_POST["Debit_36"])) ? $_POST["Debit_36"] : "";
    $Debit_37 = (isset($_POST["Debit_37"])) ? $_POST["Debit_37"] : "";
    $Debit_38 = (isset($_POST["Debit_38"])) ? $_POST["Debit_38"] : "";
    $Debit_39 = (isset($_POST["Debit_39"])) ? $_POST["Debit_39"] : "";
    $Debit_40 = (isset($_POST["Debit_40"])) ? $_POST["Debit_40"] : "";
    $Debit_41 = (isset($_POST["Debit_41"])) ? $_POST["Debit_41"] : "";
    $Debit_42 = (isset($_POST["Debit_42"])) ? $_POST["Debit_42"] : "";
    $Debit_43 = (isset($_POST["Debit_43"])) ? $_POST["Debit_43"] : "";
    $Debit_44 = (isset($_POST["Debit_44"])) ? $_POST["Debit_44"] : "";


    $bdd->exec("INSERT INTO donnemedicale(typediabete, datediagnostic, circonstancedecouverte, antecedentfamiliaux, datepremieremisesousPompe, hba1c, taille, poidsactuel, poidsforme, imc, nombreglycemieparjour, typelecteur, dateprescription, styloautopiqueur, nombreinjectionjour, stylo, autrestylo, aiguillestylo, autreaiguille, insulinelentematin, insulinerapidematin, insulinelentemidi, insulinerapidemidi, insulinelentesoir, insulinerapidesoir, insulinelentediner, insulinerapidediner, insulinelentecollation, insulinerapidecollation, totalinsulinelente, totalinsulinerapide, specialite1, posologie1, specialite2, posologie2, specialite3, posologie3, specialite4, posologie4, Horaire1, Debit1, Horaire2, Debit2, Horaire3, Debit3, Horaire4, Debit4, Horaire1N, Debit1N, Horaire2N, Debit2N, Horaire3N, Debit3N, Horaire4N, Debit4N, Horaire_1, Debit_1, Horaire_2, Debit_2, Horaire_3, Debit_3, Horaire_4, Debit_4, Horaire_N1, Debit_N1, Horaire_N2, Debit_N2, Horaire_N3, Debit_N3, Horaire_N4, Debit_N4, ValGlycemique1, ValGlyMatin1, ValGlyMid1, ValGlyCollation1, ValGlySoir1, ValGlyAutre1, ValGlycemique2, ValGlyMatin2, ValGlyMid2, ValGlyCollation2, ValGlySoir2, ValGlyAutre2, ValGlycemique3, ValGlyMatin3, ValGlyMid3, ValGlyCollation3, ValGlySoir3, ValGlyAutre3, ValGlycemique4, ValGlyMatin4, ValGlyMid4, ValGlyCollation4, ValGlySoir4, ValGlyAutre4, ValGlycemique5, ValGlyMatin5, ValGlyMid5, ValGlyCollation5, ValGlySoir5, ValGlyAutre5, ValGlycemique6, ValGlyMatin6, ValGlyMid6, ValGlyCollation6, ValGlySoir6, ValGlyAutre6, ValGlycemique7, ValGlyMatin7, ValGlyMid7, ValGlyCollation7, ValGlySoir7, ValGlyAutre7, synthesecommentaire, objectifglycemiquepreprandial, objectifglycemiquepostprandial, ValDatesHemGlyc1, ValDatesHemGlyc2, ValDatesHemGlyc3, ValDatesHemGlyc4, ValDatesHemGlyc5, ValDatesHemGlyc6, ValDatesHemGlyc7, ValDatesHemGlyc8, ValDatesHemGlyc9, ValHbA1cHemGlyc1, ValHbA1cHemGlyc2, ValHbA1cHemGlyc3, ValHbA1cHemGlyc4, ValHbA1cHemGlyc5, ValHbA1cHemGlyc6, ValHbA1cHemGlyc7, ValHbA1cHemGlyc8, ValHbA1cHemGlyc9, Horaire5, Horaire6, Horaire7, Horaire8, Horaire9, Horaire10, Horaire11, Horaire12, Horaire13, Horaire14, Horaire15, Horaire16, Horaire17, Horaire18, Horaire19, Horaire20, Horaire21, Horaire22, Horaire23, Horaire24, Horaire25, Horaire26, Horaire27, Horaire28, Horaire29, Horaire30, Horaire31, Horaire32, Horaire33, Horaire34, Horaire35, Horaire36, Horaire37, Horaire38, Horaire39, Horaire40, Horaire41, Horaire42, Horaire43, Horaire44, Horaire45, Horaire46, Horaire47, Horaire48, Horaire49, Horaire50, Horaire51, Horaire52, Horaire53, Horaire54, Horaire55, Horaire56, Horaire57, Horaire58, Horaire59, Horaire60, Horaire61, Horaire62, Horaire63, Horaire64, Horaire65, Horaire66, Horaire67, Horaire68, Horaire69, Horaire70, Horaire71, Horaire72, Horaire73, Horaire74, Horaire75, Horaire76, Horaire77, Horaire78, Horaire79, Horaire80, Horaire81, Horaire82, Horaire83, Horaire84, Horaire_5, Horaire_6, Horaire_7, Horaire_8, Horaire_9, Horaire_10, Horaire_11, Horaire_12, Horaire_13, Horaire_14, Horaire_15, Horaire_16, Horaire_17, Horaire_18, Horaire_19, Horaire_20, Horaire_21, Horaire_22, Horaire_23, Horaire_24, Horaire_25, Horaire_26, Horaire_27, Horaire_28, Horaire_29, Horaire_30, Horaire_31, Horaire_32, Horaire_33, Horaire_34, Horaire_35, Horaire_36, Horaire_37, Horaire_38, Horaire_39, Horaire_40, Horaire_41, Horaire_42, Horaire_43, Horaire_44, Horaire_45, Horaire_46, Horaire_47, Horaire_48, Horaire_49, Horaire_50, Horaire_51, Horaire_52, Horaire_53, Horaire_54, Horaire_55, Horaire_56, Horaire_57, Horaire_58, Horaire_59, Horaire_60, Horaire_61, Horaire_62, Horaire_63, Horaire_64, Horaire_65, Horaire_66, Horaire_67, Horaire_68, Horaire_69, Horaire_70, Horaire_71, Horaire_72, Horaire_73, Horaire_74, Horaire_75, Horaire_76, Horaire_77, Horaire_78, Horaire_79, Horaire_80, Horaire_81, Horaire_82, Horaire_83, Horaire_84, Debit5, Debit6, Debit7, Debit8, Debit9, Debit10, Debit11, Debit12, Debit13, Debit14, Debit15, Debit16, Debit17, Debit18, Debit19, Debit20, Debit21, Debit22, Debit23, Debit24, Debit25, Debit26, Debit27, Debit28, Debit29, Debit30, Debit31, Debit32, Debit33, Debit34, Debit35, Debit36, Debit37, Debit38, Debit39, Debit40, Debit41, Debit42, Debit43, Debit44, Debit_5, Debit_6, Debit_7, Debit_8, Debit_9, Debit_10, Debit_11, Debit_12, Debit_13, Debit_14, Debit_15, Debit_16, Debit_17, Debit_18, Debit_19, Debit_20, Debit_21, Debit_22, Debit_23, Debit_24, Debit_25, Debit_26, Debit_27, Debit_28, Debit_29, Debit_30, Debit_31, Debit_32, Debit_33, Debit_34, Debit_35, Debit_36, Debit_37, Debit_38, Debit_39, Debit_40, Debit_41, Debit_42, Debit_43, Debit_44) VALUES ('" . $typediabete . "', '" . $datediagnostic . "', '" . $circonstancedecouverte . "', '" . $antecedentfamiliaux . "', '" . $datepremieremisesousPompe . "', '" . $hba1c . "', '" . $taille . "', '" . $poidsactuel . "', '" . $poidsforme . "', '" . $imc . "', '" . $nombreglycemieparjour . "', '" . $typelecteur . "', '" . $dateprescription . "', '" . $styloautopiqueur . "', '" . $nombreinjectionjour . "', '" . $stylo . "', '" . $autrestylo . "', '" . $aiguillestylo . "', '" . $autreaiguille . "', '" . $insulinelentematin . "', '" . $insulinerapidematin . "', '" . $insulinelentemidi . "', '" . $insulinerapidemidi . "', '" . $insulinelentesoir . "', '" . $insulinerapidesoir . "', '" . $insulinelentediner . "', '" . $insulinerapidediner . "', '" . $insulinelentecollation . "', '" . $insulinerapidecollation . "', '" . $totalinsulinelente . "', '" . $totalinsulinerapide . "', '" . $specialite1 . "', '" . $posologie1 . "', '" . $specialite2 . "', '" . $posologie2 . "', '" . $specialite3 . "', '" . $posologie3 . "', '" . $specialite4 . "', '" . $posologie4 . "', '" . $Horaire1 . "', '" . $Debit1 . "', '" . $Horaire2 . "', '" . $Debit2 . "', '" . $Horaire3 . "', '" . $Debit3 . "', '" . $Horaire4 . "', '" . $Debit4 . "', '" . $Horaire1N . "', '" . $Debit1N . "', '" . $Horaire2N . "', '" . $Debit2N . "', '" . $Horaire3N . "', '" . $Debit3N . "', '" . $Horaire4N . "', '" . $Debit4N . "', '" . $Horaire_1 . "', '" . $Debit_1 . "', '" . $Horaire_2 . "', '" . $Debit_2 . "', '" . $Horaire_3 . "', '" . $Debit_3 . "', '" . $Horaire_4 . "', '" . $Debit_4 . "', '" . $Horaire_N1 . "', '" . $Debit_N1 . "', '" . $Horaire_N2 . "', '" . $Debit_N2 . "', '" . $Horaire_N3 . "', '" . $Debit_N3 . "', '" . $Horaire_N4 . "', '" . $Debit_N4 . "', '" . $ValGlycemique1 . "', '" . $ValGlyMatin1 . "', '" . $ValGlyMid1 . "', '" . $ValGlyCollation1 . "', '" . $ValGlySoir1 . "', '" . $ValGlyAutre1 . "', '" . $ValGlycemique2 . "', '" . $ValGlyMatin2 . "', '" . $ValGlyMid2 . "', '" . $ValGlyCollation2 . "', '" . $ValGlySoir2 . "', '" . $ValGlyAutre2 . "', '" . $ValGlycemique3 . "', '" . $ValGlyMatin3 . "', '" . $ValGlyMid3 . "', '" . $ValGlyCollation3 . "', '" . $ValGlySoir3 . "', '" . $ValGlyAutre3 . "', '" . $ValGlycemique4 . "', '" . $ValGlyMatin4 . "', '" . $ValGlyMid4 . "', '" . $ValGlyCollation4 . "', '" . $ValGlySoir4 . "', '" . $ValGlyAutre4 . "', '" . $ValGlycemique5 . "', '" . $ValGlyMatin5 . "', '" . $ValGlyMid5 . "', '" . $ValGlyCollation5 . "', '" . $ValGlySoir5 . "', '" . $ValGlyAutre5 . "', '" . $ValGlycemique6 . "', '" . $ValGlyMatin6 . "', '" . $ValGlyMid6 . "', '" . $ValGlyCollation6 . "', '" . $ValGlySoir6 . "', '" . $ValGlyAutre6 . "', '" . $ValGlycemique7 . "', '" . $ValGlyMatin7 . "', '" . $ValGlyMid7 . "', '" . $ValGlyCollation7 . "', '" . $ValGlySoir7 . "', '" . $ValGlyAutre7 . "', '" . $synthesecommentaire . "', '" . $objectifglycemiquepreprandial . "', '" . $objectifglycemiquepostprandial . "', '" . $ValDatesHemGlyc1 . "', '" . $ValDatesHemGlyc2 . "', '" . $ValDatesHemGlyc3 . "', '" . $ValDatesHemGlyc4 . "', '" . $ValDatesHemGlyc5 . "', '" . $ValDatesHemGlyc6 . "', '" . $ValDatesHemGlyc7 . "', '" . $ValDatesHemGlyc8 . "', '" . $ValDatesHemGlyc9 . "', '" . $ValHbA1cHemGlyc1 . "', '" . $ValHbA1cHemGlyc2 . "', '" . $ValHbA1cHemGlyc3 . "', '" . $ValHbA1cHemGlyc4 . "', '" . $ValHbA1cHemGlyc5 . "', '" . $ValHbA1cHemGlyc6 . "', '" . $ValHbA1cHemGlyc7 . "', '" . $ValHbA1cHemGlyc8 . "', '" . $ValHbA1cHemGlyc9 . "', '" . $Horaire5 . "', '" . $Horaire6 . "', '" . $Horaire7 . "', '" . $Horaire8 . "', '" . $Horaire9 . "', '" . $Horaire10 . "', '" . $Horaire11 . "', '" . $Horaire12 . "', '" . $Horaire13 . "', '" . $Horaire14 . "', '" . $Horaire15 . "', '" . $Horaire16 . "', '" . $Horaire17 . "', '" . $Horaire18 . "', '" . $Horaire19 . "', '" . $Horaire20 . "', '" . $Horaire21 . "', '" . $Horaire22 . "', '" . $Horaire23 . "', '" . $Horaire24 . "', '" . $Horaire25 . "', '" . $Horaire26 . "', '" . $Horaire27 . "', '" . $Horaire28 . "', '" . $Horaire29 . "', '" . $Horaire30 . "', '" . $Horaire31 . "', '" . $Horaire32 . "', '" . $Horaire33 . "', '" . $Horaire34 . "', '" . $Horaire35 . "', '" . $Horaire36 . "', '" . $Horaire37 . "', '" . $Horaire38 . "', '" . $Horaire39 . "', '" . $Horaire40 . "', '" . $Horaire41 . "', '" . $Horaire42 . "', '" . $Horaire43 . "', '" . $Horaire44 . "', '" . $Horaire45 . "', '" . $Horaire46 . "', '" . $Horaire47 . "', '" . $Horaire48 . "', '" . $Horaire49 . "', '" . $Horaire50 . "', '" . $Horaire51 . "', '" . $Horaire52 . "', '" . $Horaire53 . "', '" . $Horaire54 . "', '" . $Horaire55 . "', '" . $Horaire56 . "', '" . $Horaire57 . "', '" . $Horaire58 . "', '" . $Horaire59 . "', '" . $Horaire60 . "', '" . $Horaire61 . "', '" . $Horaire62 . "', '" . $Horaire63 . "', '" . $Horaire64 . "', '" . $Horaire65 . "', '" . $Horaire66 . "', '" . $Horaire67 . "', '" . $Horaire68 . "', '" . $Horaire69 . "', '" . $Horaire70 . "', '" . $Horaire71 . "', '" . $Horaire72 . "', '" . $Horaire73 . "', '" . $Horaire74 . "', '" . $Horaire75 . "', '" . $Horaire76 . "', '" . $Horaire77 . "', '" . $Horaire78 . "', '" . $Horaire79 . "', '" . $Horaire80 . "', '" . $Horaire81 . "', '" . $Horaire82 . "', '" . $Horaire83 . "', '" . $Horaire84 . "', '" . $Horaire_5 . "', '" . $Horaire_6 . "', '" . $Horaire_7 . "', '" . $Horaire_8 . "', '" . $Horaire_9 . "', '" . $Horaire_10 . "', '" . $Horaire_11 . "', '" . $Horaire_12 . "', '" . $Horaire_13 . "', '" . $Horaire_14 . "', '" . $Horaire_15 . "', '" . $Horaire_16 . "', '" . $Horaire_17 . "', '" . $Horaire_18 . "', '" . $Horaire_19 . "', '" . $Horaire_20 . "', '" . $Horaire_21 . "', '" . $Horaire_22 . "', '" . $Horaire_23 . "', '" . $Horaire_24 . "', '" . $Horaire_25 . "', '" . $Horaire_26 . "', '" . $Horaire_27 . "', '" . $Horaire_28 . "', '" . $Horaire_29 . "', '" . $Horaire_30 . "', '" . $Horaire_31 . "', '" . $Horaire_32 . "', '" . $Horaire_33 . "', '" . $Horaire_34 . "', '" . $Horaire_35 . "', '" . $Horaire_36 . "', '" . $Horaire_37 . "', '" . $Horaire_38 . "', '" . $Horaire_39 . "', '" . $Horaire_40 . "', '" . $Horaire_41 . "', '" . $Horaire_42 . "', '" . $Horaire_43 . "', '" . $Horaire_44 . "', '" . $Horaire_45 . "', '" . $Horaire_46 . "', '" . $Horaire_47 . "', '" . $Horaire_48 . "', '" . $Horaire_49 . "', '" . $Horaire_50 . "', '" . $Horaire_51 . "', '" . $Horaire_52 . "', '" . $Horaire_53 . "', '" . $Horaire_54 . "', '" . $Horaire_55 . "', '" . $Horaire_56 . "', '" . $Horaire_57 . "', '" . $Horaire_58 . "', '" . $Horaire_59 . "', '" . $Horaire_60 . "', '" . $Horaire_61 . "', '" . $Horaire_62 . "', '" . $Horaire_63 . "', '" . $Horaire_64 . "', '" . $Horaire_65 . "', '" . $Horaire_66 . "', '" . $Horaire_67 . "', '" . $Horaire_68 . "', '" . $Horaire_69 . "', '" . $Horaire_70 . "', '" . $Horaire_71 . "', '" . $Horaire_72 . "', '" . $Horaire_73 . "', '" . $Horaire_74 . "', '" . $Horaire_75 . "', '" . $Horaire_76 . "', '" . $Horaire_77 . "', '" . $Horaire_78 . "', '" . $Horaire_79 . "', '" . $Horaire_80 . "', '" . $Horaire_81 . "', '" . $Horaire_82 . "', '" . $Horaire_83 . "', '" . $Horaire_84 . "', '" . $Debit5 . "', '" . $Debit6 . "', '" . $Debit7 . "', '" . $Debit8 . "', '" . $Debit9 . "', '" . $Debit10 . "', '" . $Debit11 . "', '" . $Debit12 . "', '" . $Debit13 . "', '" . $Debit14 . "', '" . $Debit15 . "', '" . $Debit16 . "', '" . $Debit17 . "', '" . $Debit18 . "', '" . $Debit19 . "', '" . $Debit20 . "', '" . $Debit21 . "', '" . $Debit22 . "', '" . $Debit23 . "', '" . $Debit24 . "', '" . $Debit25 . "', '" . $Debit26 . "', '" . $Debit27 . "', '" . $Debit28 . "', '" . $Debit29 . "', '" . $Debit30 . "', '" . $Debit31 . "', '" . $Debit32 . "', '" . $Debit33 . "', '" . $Debit34 . "', '" . $Debit35 . "', '" . $Debit36 . "', '" . $Debit37 . "', '" . $Debit38 . "', '" . $Debit39 . "', '" . $Debit40 . "', '" . $Debit41 . "', '" . $Debit42 . "', '" . $Debit43 . "', '" . $Debit44 . "', '" . $Debit_5 . "', '" . $Debit_6 . "', '" . $Debit_7 . "', '" . $Debit_8 . "', '" . $Debit_9 . "', '" . $Debit_10 . "', '" . $Debit_11 . "', '" . $Debit_12 . "', '" . $Debit_13 . "', '" . $Debit_14 . "', '" . $Debit_15 . "', '" . $Debit_16 . "', '" . $Debit_17 . "', '" . $Debit_18 . "', '" . $Debit_19 . "', '" . $Debit_20 . "', '" . $Debit_21 . "', '" . $Debit_22 . "', '" . $Debit_23 . "', '" . $Debit_24 . "', '" . $Debit_25 . "', '" . $Debit_26 . "', '" . $Debit_27 . "', '" . $Debit_28 . "', '" . $Debit_29 . "', '" . $Debit_30 . "', '" . $Debit_31 . "', '" . $Debit_32 . "', '" . $Debit_33 . "', '" . $Debit_34 . "', '" . $Debit_35 . "', '" . $Debit_36 . "', '" . $Debit_37 . "', '" . $Debit_38 . "', '" . $Debit_39 . "', '" . $Debit_40 . "', '" . $Debit_41 . "', '" . $Debit_42 . "', '" . $Debit_43 . "', '" . $Debit_44 . "')") or die(print_r($bdd->errorInfo()));


    $bdd->exec("INSERT INTO asg1
			(
				asgdetail1, asgdetail2, asgdetail3, asgdetail4, asgobservation1, asgobservation2, asgobservation3, asgobservation4)
			VALUES 
			('"
                    . $_POST["asgdetail1"] . "','"
                    . $_POST["asgdetail2"] . "','"
                    . $_POST["asgdetail3"] . "','"
                    . $_POST["asgdetail4"] . "','"
                    . $_POST["asgobservation1"] . "','"
                    . $_POST["asgobservation2"] . "','"
                    . $_POST["asgobservation3"] . "','"
                    . $_POST["asgobservation4"] .
                    "')") or die(print_r($bdd->ErrorInfo()));




    $bdd->exec("INSERT INTO asg2
			(
				asgfrequence1, asgfrequence2, asgconnaissance, asgcommentaire)
			VALUES 
			('"
                    . $_POST["asgfrequence1"] . "','"
                    . $_POST["asgfrequence2"] . "','"
                    . $_POST["asgconnaissance"] . "','"
                    . $_POST["asgcommentaire"] .
                    "')") or die(print_r($bdd->ErrorInfo()));



    $bdd->exec("INSERT INTO connaissances
			(
				reponse1, reponse2, reponse3, reponse4, reponse5, reponse6, reponse7, reponse8, reponse9, reponse10, reponse11, reponse12, reponse13, reponse14,
				observation1, observation2, observation3, observation4, observation5, observation6, observation7, observation8, observation9,
				date1, date2, date3, date4, date5)
			VALUES 
			('"
                    . $_POST["connaissance1"] . "','"
                    . $_POST["connaissance2"] . "','"
                    . $_POST["connaissance3"] . "','"
                    . $_POST["connaissance4"] . "','"
                    . $_POST["connaissance5"] . "','"
                    . $_POST["connaissance6"] . "','"
                    . $_POST["connaissance7"] . "','"
                    . $_POST["connaissance8"] . "','"
                    . $_POST["connaissance9"] . "','"
                    . $_POST["connaissance10"] . "','"
                    . $_POST["connaissance11"] . "','"
                    . $_POST["connaissance12"] . "','"
                    . $_POST["connaissance13"] . "','"
                    . $_POST["connaissance14"] . "','"
                    . $_POST["cnsobservation1"] . "','"
                    . $_POST["cnsobservation2"] . "','"
                    . $_POST["cnsobservation3"] . "','"
                    . $_POST["cnsobservation4"] . "','"
                    . $_POST["cnsobservation5"] . "','"
                    . $_POST["cnsobservation6"] . "','"
                    . $_POST["cnsobservation7"] . "','"
                    . $_POST["cnsobservation8"] . "','"
                    . $_POST["cnsobservation9"] . "','"
                    . $_POST["perempdate1"] . "','"
                    . $_POST["perempdate2"] . "','"
                    . $_POST["perempdate3"] . "','"
                    . $_POST["perempdate4"] . "','"
                    . $_POST["perempdate5"] .
                    "')") or die(print_r($bdd->ErrorInfo()));


    $req = $bdd->prepare("INSERT INTO insulinotherapiefonctionnelle(petitdejeunerDe, petitdejeunerA, dejeunerDe, dejeunerA, gouterDe, gouterA, dinerDe, dinerA, collationDe, collationA, petitdejeunerRotation, petitdejeunerObjectif, petitdejeunerSensibilite, dejeunerRotation, dejeunerObjectif, dejeunerSensibilite, gouterRotation, gouterObjectif, gouterSensibilite, dinerRotation, dinerObjectif, dinerSensibilite, collationRotation, collationObjectif, collationSensibilite) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $req->execute(array($petitdejeunerDe, $petitdejeunerA, $dejeunerDe, $dejeunerA, $gouterDe, $gouterA, $dinerDe, $dinerA, $collationDe, $collationA, $petitdejeunerRotation, $petitdejeunerObjectif, $petitdejeunerSensibilite, $dejeunerRotation, $dejeunerObjectif, $dejeunerSensibilite, $gouterRotation, $gouterObjectif, $gouterSensibilite, $dinerRotation, $dinerObjectif, $dinerSensibilite, $collationRotation, $collationObjectif, $collationSensibilite));

    echo "Enregistrement reussi!";
} catch (PDOException $e) {
    echo("Erreur : " . $e->getMessage());
}
?>