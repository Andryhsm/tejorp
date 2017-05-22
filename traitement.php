<?php

require './cnx.php';
session_start();

$activitephysique = (htmlentities(addslashes($_POST["activitephysique"]), ENT_NOQUOTES,'UTF-8', true));
$profession = (htmlentities(addslashes($_POST["profession"]), ENT_NOQUOTES,'UTF-8', true));
$situationfamiliale = (htmlentities(addslashes($_POST["situationfamiliale"]), ENT_NOQUOTES,'UTF-8', true));
$observation = (htmlentities(addslashes($_POST["observation"]), ENT_NOQUOTES,'UTF-8', true));
$hygienealimentaire = (htmlentities(addslashes($_POST["hygienealimentaire"]), ENT_NOQUOTES,'UTF-8', true));
$stabilitehoraires = (htmlentities(addslashes($_POST["stabilitehoraires"]), ENT_NOQUOTES,'UTF-8', true));
$details = (htmlentities(addslashes($_POST["details"]), ENT_NOQUOTES,'UTF-8', true));
$environnement = (htmlentities(addslashes($_POST["rougeur"]), ENT_NOQUOTES,'UTF-8', true));
$etatcutane = (htmlentities(addslashes($_POST["etatcutane"]), ENT_NOQUOTES,'UTF-8', true));
$choixpoint = (htmlentities(addslashes($_POST["choixpoint"]), ENT_NOQUOTES,'UTF-8', true));
$regime = (htmlentities(addslashes($_POST["regime"]), ENT_NOQUOTES,'UTF-8', true));
$observation2 = (htmlentities(addslashes($_POST["observation2"]), ENT_NOQUOTES,'UTF-8', true));
$survenue = (htmlentities(addslashes($_POST["survenue"]), ENT_NOQUOTES,'UTF-8', true));
$atcd = (htmlentities(addslashes($_POST["atcd"]), ENT_NOQUOTES,'UTF-8', true));
$traitement = (htmlentities(addslashes($_POST["traitement"]), ENT_NOQUOTES,'UTF-8', true));
$date1 = (htmlentities(addslashes($_POST["date1"]), ENT_NOQUOTES,'UTF-8', true));
$date2 = (htmlentities(addslashes($_POST["date2"]), ENT_NOQUOTES,'UTF-8', true));
$date3 = (htmlentities(addslashes($_POST["date3"]), ENT_NOQUOTES,'UTF-8', true));
$date4 = (htmlentities(addslashes($_POST["date4"]), ENT_NOQUOTES,'UTF-8', true));
$date5 = (htmlentities(addslashes($_POST["date5"]), ENT_NOQUOTES,'UTF-8', true));
$date6 = (htmlentities(addslashes($_POST["date6"]), ENT_NOQUOTES,'UTF-8', true));
$date7 = (htmlentities(addslashes($_POST["date7"]), ENT_NOQUOTES,'UTF-8', true));
$date8 = (htmlentities(addslashes($_POST["date8"]), ENT_NOQUOTES,'UTF-8', true));
$date9 = (htmlentities(addslashes($_POST["date9"]), ENT_NOQUOTES,'UTF-8', true));
$taille1 = (htmlentities(addslashes($_POST["taille1"]), ENT_NOQUOTES,'UTF-8', true));
$taille2 = (htmlentities(addslashes($_POST["taille2"]), ENT_NOQUOTES,'UTF-8', true));
$taille3 = (htmlentities(addslashes($_POST["taille3"]), ENT_NOQUOTES,'UTF-8', true));
$taille4 = (htmlentities(addslashes($_POST["taille4"]), ENT_NOQUOTES,'UTF-8', true));
$taille5 = (htmlentities(addslashes($_POST["taille5"]), ENT_NOQUOTES,'UTF-8', true));
$taille6 = (htmlentities(addslashes($_POST["taille6"]), ENT_NOQUOTES,'UTF-8', true));
$taille7 = (htmlentities(addslashes($_POST["taille7"]), ENT_NOQUOTES,'UTF-8', true));
$taille8 = (htmlentities(addslashes($_POST["taille8"]), ENT_NOQUOTES,'UTF-8', true));
$taille9 = (htmlentities(addslashes($_POST["taille9"]), ENT_NOQUOTES,'UTF-8', true));
$poids1 = (htmlentities(addslashes($_POST["poids1"]), ENT_NOQUOTES,'UTF-8', true));
$poids2 = (htmlentities(addslashes($_POST["poids2"]), ENT_NOQUOTES,'UTF-8', true));
$poids3 = (htmlentities(addslashes($_POST["poids3"]), ENT_NOQUOTES,'UTF-8', true));
$poids4 = (htmlentities(addslashes($_POST["poids4"]), ENT_NOQUOTES,'UTF-8', true));
$poids5 = (htmlentities(addslashes($_POST["poids5"]), ENT_NOQUOTES,'UTF-8', true));
$poids6 = (htmlentities(addslashes($_POST["poids6"]), ENT_NOQUOTES,'UTF-8', true));
$poids7 = (htmlentities(addslashes($_POST["poids7"]), ENT_NOQUOTES,'UTF-8', true));
$poids8 = (htmlentities(addslashes($_POST["poids8"]), ENT_NOQUOTES,'UTF-8', true));
$poids9 = (htmlentities(addslashes($_POST["poids9"]), ENT_NOQUOTES,'UTF-8', true));
$imc1 = (htmlentities(addslashes($_POST["imc1"]), ENT_NOQUOTES,'UTF-8', true));
$imc2 = (htmlentities(addslashes($_POST["imc2"]), ENT_NOQUOTES,'UTF-8', true));
$imc3 = (htmlentities(addslashes($_POST["imc3"]), ENT_NOQUOTES,'UTF-8', true));
$imc4 = (htmlentities(addslashes($_POST["imc4"]), ENT_NOQUOTES,'UTF-8', true));
$imc5 = (htmlentities(addslashes($_POST["imc5"]), ENT_NOQUOTES,'UTF-8', true));
$imc6 = (htmlentities(addslashes($_POST["imc6"]), ENT_NOQUOTES,'UTF-8', true));
$imc7 = (htmlentities(addslashes($_POST["imc7"]), ENT_NOQUOTES,'UTF-8', true));
$imc8 = (htmlentities(addslashes($_POST["imc8"]), ENT_NOQUOTES,'UTF-8', true));
$imc9 = (htmlentities(addslashes($_POST["imc9"]), ENT_NOQUOTES,'UTF-8', true));

$petitdejeunerDe = (htmlentities(addslashes($_POST['petitdejeunerDe']), ENT_NOQUOTES,'UTF-8', true));
$petitdejeunerA = (htmlentities(addslashes($_POST['petitdejeunerA']), ENT_NOQUOTES,'UTF-8', true));

$dejeunerDe = (htmlentities(addslashes($_POST['dejeunerDe']), ENT_NOQUOTES,'UTF-8', true));
$dejeunerA = (htmlentities(addslashes($_POST['dejeunerA']), ENT_NOQUOTES,'UTF-8', true));

$gouterDe = (htmlentities(addslashes($_POST['gouterDe']), ENT_NOQUOTES,'UTF-8', true));
$gouterA = (htmlentities(addslashes($_POST['gouterA']), ENT_NOQUOTES,'UTF-8', true));

$dinerDe = (htmlentities(addslashes($_POST['dinerDe']), ENT_NOQUOTES,'UTF-8', true));
$dinerA = (htmlentities(addslashes($_POST['dinerA']), ENT_NOQUOTES,'UTF-8', true));

$collationDe = (htmlentities(addslashes($_POST['collationDe']), ENT_NOQUOTES,'UTF-8', true));
$collationA = (htmlentities(addslashes($_POST['collationA']), ENT_NOQUOTES,'UTF-8', true));

$petitdejeunerRotation = (htmlentities(addslashes($_POST['petitdejeunerRotation']), ENT_NOQUOTES,'UTF-8', true));
$petitdejeunerObjectif = (htmlentities(addslashes($_POST['petitdejeunerObjectif']), ENT_NOQUOTES,'UTF-8', true));
$petitdejeunerSensibilite = (htmlentities(addslashes($_POST['petitdejeunerSensibilite']), ENT_NOQUOTES,'UTF-8', true));

$dejeunerRotation = (htmlentities(addslashes($_POST['dejeunerRotation']), ENT_NOQUOTES,'UTF-8', true));
$dejeunerObjectif = (htmlentities(addslashes($_POST['dejeunerObjectif']), ENT_NOQUOTES,'UTF-8', true));
$dejeunerSensibilite = (htmlentities(addslashes($_POST['dejeunerSensibilite']), ENT_NOQUOTES,'UTF-8', true));

$gouterRotation = (htmlentities(addslashes($_POST['gouterRotation']), ENT_NOQUOTES,'UTF-8', true));
$gouterObjectif = (htmlentities(addslashes($_POST['gouterObjectif']), ENT_NOQUOTES,'UTF-8', true));
$gouterSensibilite = (htmlentities(addslashes($_POST['gouterSensibilite']), ENT_NOQUOTES,'UTF-8', true));

$dinerRotation = (htmlentities(addslashes($_POST['dinerRotation']), ENT_NOQUOTES,'UTF-8', true));
$dinerObjectif = (htmlentities(addslashes($_POST['dinerObjectif']), ENT_NOQUOTES,'UTF-8', true));
$dinerSensibilite = (htmlentities(addslashes($_POST['dinerSensibilite']), ENT_NOQUOTES,'UTF-8', true));

$collationRotation = (htmlentities(addslashes($_POST['collationRotation']), ENT_NOQUOTES,'UTF-8', true));
$collationObjectif = (htmlentities(addslashes($_POST['collationObjectif']), ENT_NOQUOTES,'UTF-8', true));
$collationSensibilite = (htmlentities(addslashes($_POST['collationSensibilite']), ENT_NOQUOTES,'UTF-8', true));

$idPrescripteur = $_SESSION['id'];
$idPatient = htmlentities(addslashes($_POST["nompatient"]), ENT_NOQUOTES,'UTF-8', true) ."-".htmlentities(addslashes($_POST["prenompatient"]), ENT_NOQUOTES,'UTF-8', true);

try {


    $bdd->exec("INSERT INTO infobastide(nomresp, prenomresp, mobileresp, coordonnee, idPrescripteur, idPatient) VALUES('" . htmlentities(addslashes($_POST["nomresp"]), ENT_NOQUOTES,'UTF-8', true) . "','" . htmlentities(addslashes($_POST["prenomresp"]), ENT_NOQUOTES,'UTF-8', true) . "','" . htmlentities(addslashes($_POST["mobileresp"]), ENT_NOQUOTES,'UTF-8', true) . "','" . htmlentities(addslashes($_POST["coordonnee"]), ENT_NOQUOTES,'UTF-8', true) . "', '".$idPrescripteur."', '".$idPatient."')") or die(print_r($bdd->ErrorInfo()));


    $bdd->exec("INSERT INTO infopatient(nompatient, prenompatient, datenaissance, agepatient, telpatient, mobilepatient,emailpatient, adressepatient, codepostalpatient, villepatient, idPrescripteur) VALUES('" . htmlentities(addslashes($_POST["nompatient"]), ENT_NOQUOTES,'UTF-8', true) . "','" . htmlentities(addslashes($_POST["prenompatient"]), ENT_NOQUOTES,'UTF-8', true) . "','" . htmlentities(addslashes($_POST["datenaissance"]), ENT_NOQUOTES,'UTF-8', true) . "','" . htmlentities(addslashes($_POST["agepatient"]), ENT_NOQUOTES,'UTF-8', true) . "','" . htmlentities(addslashes($_POST["telpatient"]), ENT_NOQUOTES,'UTF-8', true) . "','" . htmlentities(addslashes($_POST["mobilepatient"]), ENT_NOQUOTES,'UTF-8', true) . "','" . htmlentities(addslashes($_POST["emailpatient"]), ENT_NOQUOTES,'UTF-8', true) . "','" . htmlentities(addslashes($_POST["adressepatient"]), ENT_NOQUOTES,'UTF-8', true) . "','" . htmlentities(addslashes($_POST["codepostalpatient"]), ENT_NOQUOTES,'UTF-8', true) . "','" . htmlentities(addslashes($_POST["villepatient"]), ENT_NOQUOTES,'UTF-8', true) . "', '".$idPrescripteur."')")or die(print_r($bdd->ErrorInfo()));

    $bdd->exec("INSERT INTO infoprescripteur(etablissementprescripteur, serviceep, npp, telep, mailep, adressep, mobiledp, mobiledl, mobilemt, mobiled, membrereseau, nomreseau, idPrescripteur, idPatient) VALUES ('" . htmlentities(addslashes($_POST["etablissementprescripteur"]), ENT_NOQUOTES,'UTF-8', true) . "', '" . htmlentities(addslashes($_POST["serviceep"]), ENT_NOQUOTES,'UTF-8', true) . "', '" . htmlentities(addslashes($_POST["npp"]), ENT_NOQUOTES,'UTF-8', true) . "', '" . htmlentities(addslashes($_POST["telep"]), ENT_NOQUOTES,'UTF-8', true) . "', '" . htmlentities(addslashes($_POST["mailep"]), ENT_NOQUOTES,'UTF-8', true) . "', '" . htmlentities(addslashes($_POST["adressep"]), ENT_NOQUOTES,'UTF-8', true) . "' ,'" . htmlentities(addslashes($_POST["mobiledp"]), ENT_NOQUOTES,'UTF-8', true) . "','" . htmlentities(addslashes($_POST["mobiledl"]), ENT_NOQUOTES,'UTF-8', true) . "','" . htmlentities(addslashes($_POST["mobilemt"]), ENT_NOQUOTES,'UTF-8', true) . "','" . htmlentities(addslashes($_POST["mobiled"]), ENT_NOQUOTES,'UTF-8', true) . "','" . htmlentities(addslashes($_POST["membrereseau"]), ENT_NOQUOTES,'UTF-8', true) . "','" . htmlentities(addslashes($_POST["nomreseau"]), ENT_NOQUOTES,'UTF-8', true) . "', '" .$idPrescripteur."', '" .$idPatient."')") or die(print_r($bdd->errorInfo()));


    $bdd->exec("INSERT INTO choixmateriel(pompe, dateinstallation, typecatheter, modele, longueurcanule, longueurtubulure, typecatheter2, modele2, longueurcanule2, longueurtubulure2, inserteur, reservoir, spp, observation, idPrescripteur, idPatient) VALUES('" . utf8_decode($_POST["Pompe"]) . "','" . htmlentities(addslashes($_POST["dateinstallation"]), ENT_NOQUOTES,'UTF-8', true) . "','" . htmlentities(addslashes($_POST["catheter"]), ENT_NOQUOTES,'UTF-8', true) . "','" . utf8_decode($_POST["modele"]) . "','" . htmlentities(addslashes($_POST["longueurcanule"]), ENT_NOQUOTES,'UTF-8', true) . "','" . htmlentities(addslashes($_POST["longueurtubulure"]), ENT_NOQUOTES,'UTF-8', true) . "','" . htmlentities(addslashes($_POST["catheter2"]), ENT_NOQUOTES,'UTF-8', true) . "','" . utf8_decode($_POST["modele2"]) . "','" . htmlentities(addslashes($_POST["longueurcanule2"]), ENT_NOQUOTES,'UTF-8', true) . "','" . htmlentities(addslashes($_POST["longueurtubulure2"]), ENT_NOQUOTES,'UTF-8', true) . "','" . htmlentities(addslashes($_POST["inserteur"]), ENT_NOQUOTES,'UTF-8', true) . "','" . utf8_decode(htmlentities(addslashes($_POST["reservoir"]), ENT_NOQUOTES,'UTF-8', true)) . "','" . htmlentities(addslashes($_POST["spp"]), ENT_NOQUOTES,'UTF-8', true) . "','" . htmlentities(addslashes($_POST["observatiom"]), ENT_NOQUOTES,'UTF-8', true) . "', '".$idPrescripteur."', '".$idPatient."')")or die(print_r($bdd->ErrorInfo()));



    $bdd->exec("INSERT INTO habitudevie(activitephysique, profession, situationfamiliale, observation, hygienealimentaire, stabilitehoraires, details, environnement, etatcutane, choixpoint, idPrescripteur, idPatient) VALUES('" . $activitephysique . "','" . $profession . "','" . $situationfamiliale . "','" . $observation . "','" . $hygienealimentaire . "','" . $stabilitehoraires . "','" . $details . "','" . $environnement . "','" . $etatcutane . "','" . $choixpoint . "', '" .$idPrescripteur."', '" .$idPatient."')") or die(print_r($bdd->ErrorInfo()));

    $bdd->exec("INSERT INTO habitudealimentaire(regime, observation2, survenue, atcd, traitement, date1, date2, date3, date4, date5, date6, date7, date8, date9, taille1, taille2, taille3, taille4, taille5, taille6, taille7, taille8, taille9, poids1, poids2, poids3, poids4, poids5, poids6, poids7, poids8, poids9, imc1, imc2, imc3, imc4, imc5, imc6, imc7, imc8, imc9, idPrescripteur, idPatient) VALUES ('" . $regime . "','" . $observation2 . "', '" . $survenue . "', '" . $atcd . "','" . $traitement . "','" . $date1 . "','" . $date2 . "','" . $date3 . "','" . $date4 . "','" . $date5 . "','" . $date6 . "','" . $date7 . "','" . $date8 . "','" . $date9 . "','" . $taille1 . "','" . $taille2 . "','" . $taille3 . "','" . $taille4 . "','" . $taille5 . "','" . $taille6 . "','" . $taille7 . "','" . $taille8 . "','" . $taille9 . "','" . $poids1 . "','" . $poids2 . "','" . $poids3 . "','" . $poids4 . "','" . $poids5 . "','" . $poids6 . "','" . $poids7 . "','" . $poids8 . "','" . $poids9 . "','" . $imc1 . "','" . $imc2 . "','" . $imc3 . "','" . $imc4 . "','" . $imc5 . "','" . $imc6 . "','" . $imc7 . "','" . $imc8 . "','" . $imc9 . "', '" .$idPrescripteur."', '" .$idPatient."')") or die(print_r($bdd->errorInfo()));

    $bdd->exec("INSERT INTO manipulationdelapompe
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
      		autre, idPrescripteur, idPatient) 
		VALUES ('"
                    . htmlentities(addslashes($_POST["pmpdate1"]), ENT_NOQUOTES,'UTF-8', true) . "','"
                    . htmlentities(addslashes($_POST["pmpdate2"]), ENT_NOQUOTES,'UTF-8', true) . "','"
                    . htmlentities(addslashes($_POST["pmpdate3"]), ENT_NOQUOTES,'UTF-8', true) . "','"
                    . htmlentities(addslashes($_POST["pmpdate4"]), ENT_NOQUOTES,'UTF-8', true) . "','"
                    . htmlentities(addslashes($_POST["pmpselect1"]), ENT_NOQUOTES,'UTF-8', true) . "','"
                    . htmlentities(addslashes($_POST["pmpselect2"]), ENT_NOQUOTES,'UTF-8', true) . "','"
                    . htmlentities(addslashes($_POST["pmpselect3"]), ENT_NOQUOTES,'UTF-8', true) . "','"
                    . htmlentities(addslashes($_POST["pmpselect4"]), ENT_NOQUOTES,'UTF-8', true) . "','"
                    . htmlentities(addslashes($_POST["pmpcommentaire1"]), ENT_NOQUOTES,'UTF-8', true) . "','"
                    . htmlentities(addslashes($_POST["pmpselect5"]), ENT_NOQUOTES,'UTF-8', true) . "','"
                    . htmlentities(addslashes($_POST["pmpselect6"]), ENT_NOQUOTES,'UTF-8', true) . "','"
                    . htmlentities(addslashes($_POST["pmpselect7"]), ENT_NOQUOTES,'UTF-8', true) . "','"
                    . htmlentities(addslashes($_POST["pmpselect8"]), ENT_NOQUOTES,'UTF-8', true) . "','"
                    . htmlentities(addslashes($_POST["pmpcommentaire2"]), ENT_NOQUOTES,'UTF-8', true) . "','"
                    . htmlentities(addslashes($_POST["pmpselect9"]), ENT_NOQUOTES,'UTF-8', true) . "','"
                    . htmlentities(addslashes($_POST["pmpselect10"]), ENT_NOQUOTES,'UTF-8', true) . "','"
                    . htmlentities(addslashes($_POST["pmpselect11"]), ENT_NOQUOTES,'UTF-8', true) . "','"
                    . htmlentities(addslashes($_POST["pmpselect12"]), ENT_NOQUOTES,'UTF-8', true) . "','"
                    . htmlentities(addslashes($_POST["pmpcommentaire3"]), ENT_NOQUOTES,'UTF-8', true) . "','"
                    . htmlentities(addslashes($_POST["pmpselect13"]), ENT_NOQUOTES,'UTF-8', true) . "','"
                    . htmlentities(addslashes($_POST["pmpselect14"]), ENT_NOQUOTES,'UTF-8', true) . "','"
                    . htmlentities(addslashes($_POST["pmpselect15"]), ENT_NOQUOTES,'UTF-8', true) . "','"
                    . htmlentities(addslashes($_POST["pmpselect16"]), ENT_NOQUOTES,'UTF-8', true) . "','"
                    . htmlentities(addslashes($_POST["pmpcommentaire4"]), ENT_NOQUOTES,'UTF-8', true) . "','"
                    . htmlentities(addslashes($_POST["pmpselect17"]), ENT_NOQUOTES,'UTF-8', true) . "','"
                    . htmlentities(addslashes($_POST["pmpselect18"]), ENT_NOQUOTES,'UTF-8', true) . "','"
                    . htmlentities(addslashes($_POST["pmpselect19"]), ENT_NOQUOTES,'UTF-8', true) . "','"
                    . htmlentities(addslashes($_POST["pmpselect20"]), ENT_NOQUOTES,'UTF-8', true) . "','"
                    . htmlentities(addslashes($_POST["pmpcommentaire5"]), ENT_NOQUOTES,'UTF-8', true) . "','"
                    . htmlentities(addslashes($_POST["pmpselect21"]), ENT_NOQUOTES,'UTF-8', true) . "','"
                    . htmlentities(addslashes($_POST["pmpselect22"]), ENT_NOQUOTES,'UTF-8', true) . "','"
                    . htmlentities(addslashes($_POST["pmpselect23"]), ENT_NOQUOTES,'UTF-8', true) . "','"
                    . htmlentities(addslashes($_POST["pmpselect24"]), ENT_NOQUOTES,'UTF-8', true) . "','"
                    . htmlentities(addslashes($_POST["pmpcommentaire6"]), ENT_NOQUOTES,'UTF-8', true) . "','"
                    . htmlentities(addslashes($_POST["pmpselect25"]), ENT_NOQUOTES,'UTF-8', true) . "','"
                    . htmlentities(addslashes($_POST["pmpselect26"]), ENT_NOQUOTES,'UTF-8', true) . "','"
                    . htmlentities(addslashes($_POST["pmpselect27"]), ENT_NOQUOTES,'UTF-8', true) . "','"
                    . htmlentities(addslashes($_POST["pmpselect28"]), ENT_NOQUOTES,'UTF-8', true) . "','"
                    . htmlentities(addslashes($_POST["pmpcommentaire7"]), ENT_NOQUOTES,'UTF-8', true) . "','"
                    . htmlentities(addslashes($_POST["pmpselect29"]), ENT_NOQUOTES,'UTF-8', true) . "','"
                    . htmlentities(addslashes($_POST["pmpselect291"]), ENT_NOQUOTES,'UTF-8', true) . "','"
                    . htmlentities(addslashes($_POST["pmpselect292"]), ENT_NOQUOTES,'UTF-8', true) . "','"
                    . htmlentities(addslashes($_POST["pmpselect293"]), ENT_NOQUOTES,'UTF-8', true) . "','"
                    . htmlentities(addslashes($_POST["pmpcommentaire8"]), ENT_NOQUOTES,'UTF-8', true) . "','"
                    . htmlentities(addslashes($_POST["pmpselect294"]), ENT_NOQUOTES,'UTF-8', true) . "','"
                    . htmlentities(addslashes($_POST["pmpselect295"]), ENT_NOQUOTES,'UTF-8', true) . "','"
                    . htmlentities(addslashes($_POST["pmpselect296"]), ENT_NOQUOTES,'UTF-8', true) . "','"
                    . htmlentities(addslashes($_POST["pmpselect297"]), ENT_NOQUOTES,'UTF-8', true) . "','"
                    . htmlentities(addslashes($_POST["pmpcommentaire9"]), ENT_NOQUOTES,'UTF-8', true) . "','"
                    . htmlentities(addslashes($_POST["pmpautre"]), ENT_NOQUOTES,'UTF-8', true) . "','"
                    .$idPrescripteur."','"
                    .$idPatient."')") or die(print_r($bdd->ErrorInfo()));

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
    		autre, idPrescripteur, idPatient) 
		VALUES ('"
                    . htmlentities(addslashes($_POST["alarmedate1"]), ENT_NOQUOTES,'UTF-8', true) . "','"
                    . htmlentities(addslashes($_POST["alarmedate2"]), ENT_NOQUOTES,'UTF-8', true) . "','"
                    . htmlentities(addslashes($_POST["alarmedate3"]), ENT_NOQUOTES,'UTF-8', true) . "','"
                    . htmlentities(addslashes($_POST["alarmedate4"]), ENT_NOQUOTES,'UTF-8', true) . "','"
                    . htmlentities(addslashes($_POST["alarmeselect1"]), ENT_NOQUOTES,'UTF-8', true) . "','"
                    . htmlentities(addslashes($_POST["alarmeselect2"]), ENT_NOQUOTES,'UTF-8', true) . "','"
                    . htmlentities(addslashes($_POST["alarmeselect3"]), ENT_NOQUOTES,'UTF-8', true) . "','"
                    . htmlentities(addslashes($_POST["alarmeselect4"]), ENT_NOQUOTES,'UTF-8', true) . "','"
                    . htmlentities(addslashes($_POST["alarmecommentaire1"]), ENT_NOQUOTES,'UTF-8', true) . "','"
                    . htmlentities(addslashes($_POST["alarmeselect5"]), ENT_NOQUOTES,'UTF-8', true) . "','"
                    . htmlentities(addslashes($_POST["alarmeselect6"]), ENT_NOQUOTES,'UTF-8', true) . "','"
                    . htmlentities(addslashes($_POST["alarmeselect7"]), ENT_NOQUOTES,'UTF-8', true) . "','"
                    . htmlentities(addslashes($_POST["alarmeselect8"]), ENT_NOQUOTES,'UTF-8', true) . "','"
                    . htmlentities(addslashes($_POST["alarmecommentaire2"]), ENT_NOQUOTES,'UTF-8', true) . "','"
                    . htmlentities(addslashes($_POST["alarmeselect9"]), ENT_NOQUOTES,'UTF-8', true) . "','"
                    . htmlentities(addslashes($_POST["alarmeselect10"]), ENT_NOQUOTES,'UTF-8', true) . "','"
                    . htmlentities(addslashes($_POST["alarmeselect11"]), ENT_NOQUOTES,'UTF-8', true) . "','"
                    . htmlentities(addslashes($_POST["alarmeselect12"]), ENT_NOQUOTES,'UTF-8', true) . "','"
                    . htmlentities(addslashes($_POST["alarmecommentaire3"]), ENT_NOQUOTES,'UTF-8', true) . "','"
                    . htmlentities(addslashes($_POST["alarmeselect13"]), ENT_NOQUOTES,'UTF-8', true) . "','"
                    . htmlentities(addslashes($_POST["alarmeselect14"]), ENT_NOQUOTES,'UTF-8', true) . "','"
                    . htmlentities(addslashes($_POST["alarmeselect15"]), ENT_NOQUOTES,'UTF-8', true) . "','"
                    . htmlentities(addslashes($_POST["alarmeselect16"]), ENT_NOQUOTES,'UTF-8', true) . "','"
                    . htmlentities(addslashes($_POST["alarmecommentaire4"]), ENT_NOQUOTES,'UTF-8', true) . "','"
                    . htmlentities(addslashes($_POST["alarmeselect17"]), ENT_NOQUOTES,'UTF-8', true) . "','"
                    . htmlentities(addslashes($_POST["alarmeselect18"]), ENT_NOQUOTES,'UTF-8', true) . "','"
                    . htmlentities(addslashes($_POST["alarmeselect19"]), ENT_NOQUOTES,'UTF-8', true) . "','"
                    . htmlentities(addslashes($_POST["alarmeselect20"]), ENT_NOQUOTES,'UTF-8', true) . "','"
                    . htmlentities(addslashes($_POST["alarmecommentaire5"]), ENT_NOQUOTES,'UTF-8', true) . "','"
                    . htmlentities(addslashes($_POST["alarmeselect21"]), ENT_NOQUOTES,'UTF-8', true) . "','"
                    . htmlentities(addslashes($_POST["alarmeselect22"]), ENT_NOQUOTES,'UTF-8', true) . "','"
                    . htmlentities(addslashes($_POST["alarmeselect23"]), ENT_NOQUOTES,'UTF-8', true) . "','"
                    . htmlentities(addslashes($_POST["alarmeselect24"]), ENT_NOQUOTES,'UTF-8', true) . "','"
                    . htmlentities(addslashes($_POST["alarmecommentaire6"]), ENT_NOQUOTES,'UTF-8', true) . "','"
                    . htmlentities(addslashes($_POST["alarmeselect25"]), ENT_NOQUOTES,'UTF-8', true) . "','"
                    . htmlentities(addslashes($_POST["alarmeselect26"]), ENT_NOQUOTES,'UTF-8', true) . "','"
                    . htmlentities(addslashes($_POST["alarmeselect27"]), ENT_NOQUOTES,'UTF-8', true) . "','"
                    . htmlentities(addslashes($_POST["alarmeselect28"]), ENT_NOQUOTES,'UTF-8', true) . "','"
                    . htmlentities(addslashes($_POST["alarmecommentaire7"]), ENT_NOQUOTES,'UTF-8', true) . "','"
                    . htmlentities(addslashes($_POST["alarmeautre"]), ENT_NOQUOTES,'UTF-8', true) . "', '" 
                    .$idPrescripteur."', '" 
                    .$idPatient."')") or die(print_r($bdd->ErrorInfo()));


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
			commentaire5, idPrescripteur, idPatient
		) VALUES 
		('"
                    . htmlentities(addslashes($_POST["manipdate1"]), ENT_NOQUOTES,'UTF-8', true) . "','"
                    . htmlentities(addslashes($_POST["manipdate2"]), ENT_NOQUOTES,'UTF-8', true) . "','"
                    . htmlentities(addslashes($_POST["manipdate3"]), ENT_NOQUOTES,'UTF-8', true) . "','"
                    . htmlentities(addslashes($_POST["manipdate4"]), ENT_NOQUOTES,'UTF-8', true) . "','"
                    . htmlentities(addslashes($_POST["manipselect1"]), ENT_NOQUOTES,'UTF-8', true) . "','"
                    . htmlentities(addslashes($_POST["manipselect2"]), ENT_NOQUOTES,'UTF-8', true) . "','"
                    . htmlentities(addslashes($_POST["manipselect3"]), ENT_NOQUOTES,'UTF-8', true) . "','"
                    . htmlentities(addslashes($_POST["manipselect4"]), ENT_NOQUOTES,'UTF-8', true) . "','"
                    . htmlentities(addslashes($_POST["manipcommentaire1"]), ENT_NOQUOTES,'UTF-8', true) . "','"
                    . htmlentities(addslashes($_POST["manipselect5"]), ENT_NOQUOTES,'UTF-8', true) . "','"
                    . htmlentities(addslashes($_POST["manipselect6"]), ENT_NOQUOTES,'UTF-8', true) . "','"
                    . htmlentities(addslashes($_POST["manipselect7"]), ENT_NOQUOTES,'UTF-8', true) . "','"
                    . htmlentities(addslashes($_POST["manipselect8"]), ENT_NOQUOTES,'UTF-8', true) . "','"
                    . htmlentities(addslashes($_POST["manipcommentaire2"]), ENT_NOQUOTES,'UTF-8', true) . "','"
                    . htmlentities(addslashes($_POST["manipselect9"]), ENT_NOQUOTES,'UTF-8', true) . "','"
                    . htmlentities(addslashes($_POST["manipselect10"]), ENT_NOQUOTES,'UTF-8', true) . "','"
                    . htmlentities(addslashes($_POST["manipselect11"]), ENT_NOQUOTES,'UTF-8', true) . "','"
                    . htmlentities(addslashes($_POST["manipselect12"]), ENT_NOQUOTES,'UTF-8', true) . "','"
                    . htmlentities(addslashes($_POST["manipcommentaire3"]), ENT_NOQUOTES,'UTF-8', true) . "','"
                    . htmlentities(addslashes($_POST["manipselect13"]), ENT_NOQUOTES,'UTF-8', true) . "','"
                    . htmlentities(addslashes($_POST["manipselect14"]), ENT_NOQUOTES,'UTF-8', true) . "','"
                    . htmlentities(addslashes($_POST["manipselect15"]), ENT_NOQUOTES,'UTF-8', true) . "','"
                    . htmlentities(addslashes($_POST["manipselect16"]), ENT_NOQUOTES,'UTF-8', true) . "','"
                    . htmlentities(addslashes($_POST["manipcommentaire4"]), ENT_NOQUOTES,'UTF-8', true) . "','"
                    . htmlentities(addslashes($_POST["manipselect17"]), ENT_NOQUOTES,'UTF-8', true) . "','"
                    . htmlentities(addslashes($_POST["manipselect18"]), ENT_NOQUOTES,'UTF-8', true) . "','"
                    . htmlentities(addslashes($_POST["manipselect19"]), ENT_NOQUOTES,'UTF-8', true) . "','"
                    . htmlentities(addslashes($_POST["manipselect20"]), ENT_NOQUOTES,'UTF-8', true) . "','"
                    . htmlentities(addslashes($_POST["manipcommentaire5"]), ENT_NOQUOTES,'UTF-8', true) . "', '" 
                    .$idPrescripteur."', '" 
                    .$idPatient."')") or die(print_r($bdd->ErrorInfo()));


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
			commentaire11, idPrescripteur, idPatient
		) VALUES 
		('"
                    . htmlentities(addslashes($_POST["cathdate1"]), ENT_NOQUOTES,'UTF-8', true) . "','"
                    . htmlentities(addslashes($_POST["cathdate2"]), ENT_NOQUOTES,'UTF-8', true) . "','"
                    . htmlentities(addslashes($_POST["cathdate3"]), ENT_NOQUOTES,'UTF-8', true) . "','"
                    . htmlentities(addslashes($_POST["cathdate4"]), ENT_NOQUOTES,'UTF-8', true) . "','"
                    . htmlentities(addslashes($_POST["cathselect1"]), ENT_NOQUOTES,'UTF-8', true) . "','"
                    . htmlentities(addslashes($_POST["cathselect2"]), ENT_NOQUOTES,'UTF-8', true) . "','"
                    . htmlentities(addslashes($_POST["cathselect3"]), ENT_NOQUOTES,'UTF-8', true) . "','"
                    . htmlentities(addslashes($_POST["cathselect4"]), ENT_NOQUOTES,'UTF-8', true) . "','"
                    . htmlentities(addslashes($_POST["cathcommentaire1"]), ENT_NOQUOTES,'UTF-8', true) . "','"
                    . htmlentities(addslashes($_POST["cathselect5"]), ENT_NOQUOTES,'UTF-8', true) . "','"
                    . htmlentities(addslashes($_POST["cathselect6"]), ENT_NOQUOTES,'UTF-8', true) . "','"
                    . htmlentities(addslashes($_POST["cathselect7"]), ENT_NOQUOTES,'UTF-8', true) . "','"
                    . htmlentities(addslashes($_POST["cathselect8"]), ENT_NOQUOTES,'UTF-8', true) . "','"
                    . htmlentities(addslashes($_POST["cathcommentaire2"]), ENT_NOQUOTES,'UTF-8', true) . "','"
                    . htmlentities(addslashes($_POST["cathselect9"]), ENT_NOQUOTES,'UTF-8', true) . "','"
                    . htmlentities(addslashes($_POST["cathselect10"]), ENT_NOQUOTES,'UTF-8', true) . "','"
                    . htmlentities(addslashes($_POST["cathselect11"]), ENT_NOQUOTES,'UTF-8', true) . "','"
                    . htmlentities(addslashes($_POST["cathselect12"]), ENT_NOQUOTES,'UTF-8', true) . "','"
                    . htmlentities(addslashes($_POST["cathcommentaire3"]), ENT_NOQUOTES,'UTF-8', true) . "','"
                    . htmlentities(addslashes($_POST["cathselect13"]), ENT_NOQUOTES,'UTF-8', true) . "','"
                    . htmlentities(addslashes($_POST["cathselect14"]), ENT_NOQUOTES,'UTF-8', true) . "','"
                    . htmlentities(addslashes($_POST["cathselect15"]), ENT_NOQUOTES,'UTF-8', true) . "','"
                    . htmlentities(addslashes($_POST["cathselect16"]), ENT_NOQUOTES,'UTF-8', true) . "','"
                    . htmlentities(addslashes($_POST["cathcommentaire4"]), ENT_NOQUOTES,'UTF-8', true) . "','"
                    . htmlentities(addslashes($_POST["cathselect17"]), ENT_NOQUOTES,'UTF-8', true) . "','"
                    . htmlentities(addslashes($_POST["cathselect18"]), ENT_NOQUOTES,'UTF-8', true) . "','"
                    . htmlentities(addslashes($_POST["cathselect19"]), ENT_NOQUOTES,'UTF-8', true) . "','"
                    . htmlentities(addslashes($_POST["cathselect20"]), ENT_NOQUOTES,'UTF-8', true) . "','"
                    . htmlentities(addslashes($_POST["cathcommentaire5"]), ENT_NOQUOTES,'UTF-8', true) . "','"
                    . htmlentities(addslashes($_POST["cathselect21"]), ENT_NOQUOTES,'UTF-8', true) . "','"
                    . htmlentities(addslashes($_POST["cathselect22"]), ENT_NOQUOTES,'UTF-8', true) . "','"
                    . htmlentities(addslashes($_POST["cathselect23"]), ENT_NOQUOTES,'UTF-8', true) . "','"
                    . htmlentities(addslashes($_POST["cathselect24"]), ENT_NOQUOTES,'UTF-8', true) . "','"
                    . htmlentities(addslashes($_POST["cathcommentaire6"]), ENT_NOQUOTES,'UTF-8', true) . "','"
                    . htmlentities(addslashes($_POST["cathselect25"]), ENT_NOQUOTES,'UTF-8', true) . "','"
                    . htmlentities(addslashes($_POST["cathselect26"]), ENT_NOQUOTES,'UTF-8', true) . "','"
                    . htmlentities(addslashes($_POST["cathselect27"]), ENT_NOQUOTES,'UTF-8', true) . "','"
                    . htmlentities(addslashes($_POST["cathselect28"]), ENT_NOQUOTES,'UTF-8', true) . "','"
                    . htmlentities(addslashes($_POST["cathcommentaire7"]), ENT_NOQUOTES,'UTF-8', true) . "','"
                    . htmlentities(addslashes($_POST["cathselect29"]), ENT_NOQUOTES,'UTF-8', true) . "','"
                    . htmlentities(addslashes($_POST["cathselect211"]), ENT_NOQUOTES,'UTF-8', true) . "','"
                    . htmlentities(addslashes($_POST["cathselect212"]), ENT_NOQUOTES,'UTF-8', true) . "','"
                    . htmlentities(addslashes($_POST["cathselect213"]), ENT_NOQUOTES,'UTF-8', true) . "','"
                    . htmlentities(addslashes($_POST["cathcommentaire8"]), ENT_NOQUOTES,'UTF-8', true) . "','"
                    . htmlentities(addslashes($_POST["cathselect214"]), ENT_NOQUOTES,'UTF-8', true) . "','"
                    . htmlentities(addslashes($_POST["cathselect215"]), ENT_NOQUOTES,'UTF-8', true) . "','"
                    . htmlentities(addslashes($_POST["cathselect216"]), ENT_NOQUOTES,'UTF-8', true) . "','"
                    . htmlentities(addslashes($_POST["cathselect217"]), ENT_NOQUOTES,'UTF-8', true) . "','"
                    . htmlentities(addslashes($_POST["cathcommentaire9"]), ENT_NOQUOTES,'UTF-8', true) . "','"
                    . htmlentities(addslashes($_POST["cathselect218"]), ENT_NOQUOTES,'UTF-8', true) . "','"
                    . htmlentities(addslashes($_POST["cathselect219"]), ENT_NOQUOTES,'UTF-8', true) . "','"
                    . htmlentities(addslashes($_POST["cathselect221"]), ENT_NOQUOTES,'UTF-8', true) . "','"
                    . htmlentities(addslashes($_POST["cathselect222"]), ENT_NOQUOTES,'UTF-8', true) . "','"
                    . htmlentities(addslashes($_POST["cathcommentaire10"]), ENT_NOQUOTES,'UTF-8', true) . "','"
                    . htmlentities(addslashes($_POST["cathselect223"]), ENT_NOQUOTES,'UTF-8', true) . "','"
                    . htmlentities(addslashes($_POST["cathselect224"]), ENT_NOQUOTES,'UTF-8', true) . "','"
                    . htmlentities(addslashes($_POST["cathselect225"]), ENT_NOQUOTES,'UTF-8', true) . "','"
                    . htmlentities(addslashes($_POST["cathselect226"]), ENT_NOQUOTES,'UTF-8', true) . "','"
                    . htmlentities(addslashes($_POST["cathcommentaire11"]), ENT_NOQUOTES,'UTF-8', true) ."', '" 
                    .$idPrescripteur."', '" 
                    .$idPatient."')") or die(print_r($bdd->ErrorInfo()));


    $typediabete = (isset($_POST["typediabete"])) ? htmlentities(addslashes($_POST["typediabete"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $datediagnostic = (isset($_POST["datediagnostic"])) ? htmlentities(addslashes($_POST["datediagnostic"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $circonstancedecouverte = (isset($_POST["circonstancedecouverte"])) ? htmlentities(addslashes($_POST["circonstancedecouverte"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $antecedentfamiliaux = (isset($_POST["antecedentfamiliaux"])) ? htmlentities(addslashes($_POST["antecedentfamiliaux"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $datepremieremisesousPompe = (isset($_POST["datepremieremisesousPompe"])) ? htmlentities(addslashes($_POST["datepremieremisesousPompe"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $hba1c = (isset($_POST["hba1c"])) ? htmlentities(addslashes($_POST["hba1c"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $taille = (isset($_POST["taille"])) ? htmlentities(addslashes($_POST["taille"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $poidsactuel = (isset($_POST["poidsactuel"])) ? htmlentities(addslashes($_POST["poidsactuel"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $poidsforme = (isset($_POST["poidsforme"])) ? htmlentities(addslashes($_POST["poidsforme"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $imc = (isset($_POST["imc"])) ? htmlentities(addslashes($_POST["imc"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $nombreglycemieparjour = (isset($_POST["nombreglycemieparjour"])) ? htmlentities(addslashes($_POST["nombreglycemieparjour"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $typelecteur = (isset($_POST["typelecteur"])) ? htmlentities(addslashes($_POST["typelecteur"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $dateprescription = (isset($_POST["dateprescription"])) ? htmlentities(addslashes($_POST["dateprescription"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $styloautopiqueur = (isset($_POST["styloautopiqueur"])) ? htmlentities(addslashes($_POST["styloautopiqueur"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $nombreinjectionjour = (isset($_POST["nombreinjectionjour"])) ? htmlentities(addslashes($_POST["nombreinjectionjour"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $stylo = (isset($_POST["stylo"])) ? htmlentities(addslashes($_POST["stylo"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $autrestylo = (isset($_POST["autrestylo"])) ? htmlentities(addslashes($_POST["autrestylo"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $aiguillestylo = (isset($_POST["aiguillestylo"])) ? htmlentities(addslashes($_POST["aiguillestylo"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $autreaiguille = (isset($_POST["autreaiguille"])) ? htmlentities(addslashes($_POST["autreaiguille"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $insulinelentematin = (isset($_POST["insulinelentematin"])) ? htmlentities(addslashes($_POST["insulinelentematin"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $insulinerapidematin = (isset($_POST["insulinerapidematin"])) ? htmlentities(addslashes($_POST["insulinerapidematin"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $insulinelentemidi = (isset($_POST["insulinelentemidi"])) ? htmlentities(addslashes($_POST["insulinelentemidi"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $insulinerapidemidi = (isset($_POST["insulinerapidemidi"])) ? htmlentities(addslashes($_POST["insulinerapidemidi"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $insulinelentesoir = (isset($_POST["insulinelentesoir"])) ? htmlentities(addslashes($_POST["insulinelentesoir"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $insulinerapidesoir = (isset($_POST["insulinerapidesoir"])) ? htmlentities(addslashes($_POST["insulinerapidesoir"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $insulinelentediner = (isset($_POST["insulinelentediner"])) ? htmlentities(addslashes($_POST["insulinelentediner"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $insulinerapidediner = (isset($_POST["insulinerapidediner"])) ? htmlentities(addslashes($_POST["insulinerapidediner"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $insulinelentecollation = (isset($_POST["insulinelentecollation"])) ? htmlentities(addslashes($_POST["insulinelentecollation"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $insulinerapidecollation = (isset($_POST["insulinerapidecollation"])) ? htmlentities(addslashes($_POST["insulinerapidecollation"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $totalinsulinelente = (isset($_POST["totalinsulinelente"])) ? htmlentities(addslashes($_POST["totalinsulinelente"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $totalinsulinerapide = (isset($_POST["totalinsulinerapide"])) ? htmlentities(addslashes($_POST["totalinsulinerapide"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $specialite1 = (isset($_POST["specialite1"])) ? htmlentities(addslashes($_POST["specialite1"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $posologie1 = (isset($_POST["posologie1"])) ? htmlentities(addslashes($_POST["posologie1"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $specialite2 = (isset($_POST["specialite2"])) ? htmlentities(addslashes($_POST["specialite2"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $posologie2 = (isset($_POST["posologie2"])) ? htmlentities(addslashes($_POST["posologie2"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $specialite3 = (isset($_POST["specialite3"])) ? htmlentities(addslashes($_POST["specialite3"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $posologie3 = (isset($_POST["posologie3"])) ? htmlentities(addslashes($_POST["posologie3"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $specialite4 = (isset($_POST["specialite4"])) ? htmlentities(addslashes($_POST["specialite4"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $posologie4 = (isset($_POST["posologie4"])) ? htmlentities(addslashes($_POST["posologie4"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $Horaire1 = (isset($_POST["Horaire1"])) ? htmlentities(addslashes($_POST["Horaire1"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $Debit1 = (isset($_POST["Debit1"])) ? htmlentities(addslashes($_POST["Debit1"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $Horaire2 = (isset($_POST["Horaire2"])) ? htmlentities(addslashes($_POST["Horaire2"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $Debit2 = (isset($_POST["Debit2"])) ? htmlentities(addslashes($_POST["Debit2"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $Horaire3 = (isset($_POST["Horaire3"])) ? htmlentities(addslashes($_POST["Horaire3"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $Debit3 = (isset($_POST["Debit3"])) ? htmlentities(addslashes($_POST["Debit3"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $Horaire4 = (isset($_POST["Horaire4"])) ? htmlentities(addslashes($_POST["Horaire4"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $Debit4 = (isset($_POST["Debit4"])) ? htmlentities(addslashes($_POST["Debit4"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $Horaire1N = (isset($_POST["Horaire1N"])) ? htmlentities(addslashes($_POST["Horaire1N"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $Debit1N = (isset($_POST["Debit1N"])) ? htmlentities(addslashes($_POST["Debit1N"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $Horaire2N = (isset($_POST["Horaire2N"])) ? htmlentities(addslashes($_POST["Horaire2N"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $Debit2N = (isset($_POST["Debit2N"])) ? htmlentities(addslashes($_POST["Debit2N"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $Horaire3N = (isset($_POST["Horaire3N"])) ? htmlentities(addslashes($_POST["Horaire3N"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $Debit3N = (isset($_POST["Debit3N"])) ? htmlentities(addslashes($_POST["Debit3N"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $Horaire4N = (isset($_POST["Horaire4N"])) ? htmlentities(addslashes($_POST["Horaire4N"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $Debit4N = (isset($_POST["Debit4N"])) ? htmlentities(addslashes($_POST["Debit4N"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $Horaire_1 = (isset($_POST["Horaire_1"])) ? htmlentities(addslashes($_POST["Horaire_1"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $Debit_1 = (isset($_POST["Debit_1"])) ? htmlentities(addslashes($_POST["Debit_1"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $Horaire_2 = (isset($_POST["Horaire_2"])) ? htmlentities(addslashes($_POST["Horaire_2"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $Debit_2 = (isset($_POST["Debit_2"])) ? htmlentities(addslashes($_POST["Debit_2"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $Horaire_3 = (isset($_POST["Horaire_3"])) ? htmlentities(addslashes($_POST["Horaire_3"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $Debit_3 = (isset($_POST["Debit_3"])) ? htmlentities(addslashes($_POST["Debit_3"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $Horaire_4 = (isset($_POST["Horaire_4"])) ? htmlentities(addslashes($_POST["Horaire_4"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $Debit_4 = (isset($_POST["Debit_4"])) ? htmlentities(addslashes($_POST["Debit_4"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $Horaire_N1 = (isset($_POST["Horaire_N1"])) ? htmlentities(addslashes($_POST["Horaire_N1"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $Debit_N1 = (isset($_POST["Debit_N1"])) ? htmlentities(addslashes($_POST["Debit_N1"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $Horaire_N2 = (isset($_POST["Horaire_N2"])) ? htmlentities(addslashes($_POST["Horaire_N2"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $Debit_N2 = (isset($_POST["Debit_N2"])) ? htmlentities(addslashes($_POST["Debit_N2"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $Horaire_N3 = (isset($_POST["Horaire_N3"])) ? htmlentities(addslashes($_POST["Horaire_N3"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $Debit_N3 = (isset($_POST["Debit_N3"])) ? htmlentities(addslashes($_POST["Debit_N3"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $Horaire_N4 = (isset($_POST["Horaire_N4"])) ? htmlentities(addslashes($_POST["Horaire_N4"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $Debit_N4 = (isset($_POST["Debit_N4"])) ? htmlentities(addslashes($_POST["Debit_N4"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $ValGlycemique1 = (isset($_POST["ValGlycemique1"])) ? htmlentities(addslashes($_POST["ValGlycemique1"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $ValGlyMatin1 = (isset($_POST["ValGlyMatin1"])) ? htmlentities(addslashes($_POST["ValGlyMatin1"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $ValGlyMid1 = (isset($_POST["ValGlyMid1"])) ? htmlentities(addslashes($_POST["ValGlyMid1"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $ValGlyCollation1 = (isset($_POST["ValGlyCollation1"])) ? htmlentities(addslashes($_POST["ValGlyCollation1"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $ValGlySoir1 = (isset($_POST["ValGlySoir1"])) ? htmlentities(addslashes($_POST["ValGlySoir1"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $ValGlyAutre1 = (isset($_POST["ValGlyAutre1"])) ? htmlentities(addslashes($_POST["ValGlyAutre1"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $ValGlycemique2 = (isset($_POST["ValGlycemique2"])) ? htmlentities(addslashes($_POST["ValGlycemique2"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $ValGlyMatin2 = (isset($_POST["ValGlyMatin2"])) ? htmlentities(addslashes($_POST["ValGlyMatin2"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $ValGlyMid2 = (isset($_POST["ValGlyMid2"])) ? htmlentities(addslashes($_POST["ValGlyMid2"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $ValGlyCollation2 = (isset($_POST["ValGlyCollation2"])) ? htmlentities(addslashes($_POST["ValGlyCollation2"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $ValGlySoir2 = (isset($_POST["ValGlySoir2"])) ? htmlentities(addslashes($_POST["ValGlySoir2"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $ValGlyAutre2 = (isset($_POST["ValGlyAutre2"])) ? htmlentities(addslashes($_POST["ValGlyAutre2"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $ValGlycemique3 = (isset($_POST["ValGlycemique3"])) ? htmlentities(addslashes($_POST["ValGlycemique3"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $ValGlyMatin3 = (isset($_POST["ValGlyMatin3"])) ? htmlentities(addslashes($_POST["ValGlyMatin3"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $ValGlyMid3 = (isset($_POST["ValGlyMid3"])) ? htmlentities(addslashes($_POST["ValGlyMid3"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $ValGlyCollation3 = (isset($_POST["ValGlyCollation3"])) ? htmlentities(addslashes($_POST["ValGlyCollation3"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $ValGlySoir3 = (isset($_POST["ValGlySoir3"])) ? htmlentities(addslashes($_POST["ValGlySoir3"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $ValGlyAutre3 = (isset($_POST["ValGlyAutre3"])) ? htmlentities(addslashes($_POST["ValGlyAutre3"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $ValGlycemique4 = (isset($_POST["ValGlycemique4"])) ? htmlentities(addslashes($_POST["ValGlycemique4"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $ValGlyMatin4 = (isset($_POST["ValGlyMatin4"])) ? htmlentities(addslashes($_POST["ValGlyMatin4"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $ValGlyMid4 = (isset($_POST["ValGlyMid4"])) ? htmlentities(addslashes($_POST["ValGlyMid4"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $ValGlyCollation4 = (isset($_POST["ValGlyCollation4"])) ? htmlentities(addslashes($_POST["ValGlyCollation4"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $ValGlySoir4 = (isset($_POST["ValGlySoir4"])) ? htmlentities(addslashes($_POST["ValGlySoir4"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $ValGlyAutre4 = (isset($_POST["ValGlyAutre4"])) ? htmlentities(addslashes($_POST["ValGlyAutre4"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $ValGlycemique5 = (isset($_POST["ValGlycemique5"])) ? htmlentities(addslashes($_POST["ValGlycemique5"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $ValGlyMatin5 = (isset($_POST["ValGlyMatin5"])) ? htmlentities(addslashes($_POST["ValGlyMatin5"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $ValGlyMid5 = (isset($_POST["ValGlyMid5"])) ? htmlentities(addslashes($_POST["ValGlyMid5"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $ValGlyCollation5 = (isset($_POST["ValGlyCollation5"])) ? htmlentities(addslashes($_POST["ValGlyCollation5"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $ValGlySoir5 = (isset($_POST["ValGlySoir5"])) ? htmlentities(addslashes($_POST["ValGlySoir5"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $ValGlyAutre5 = (isset($_POST["ValGlyAutre5"])) ? htmlentities(addslashes($_POST["ValGlyAutre5"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $ValGlycemique6 = (isset($_POST["ValGlycemique6"])) ? htmlentities(addslashes($_POST["ValGlycemique6"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $ValGlyMatin6 = (isset($_POST["ValGlyMatin6"])) ? htmlentities(addslashes($_POST["ValGlyMatin6"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $ValGlyMid6 = (isset($_POST["ValGlyMid6"])) ? htmlentities(addslashes($_POST["ValGlyMid6"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $ValGlyCollation6 = (isset($_POST["ValGlyCollation6"])) ? htmlentities(addslashes($_POST["ValGlyCollation6"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $ValGlySoir6 = (isset($_POST["ValGlySoir6"])) ? htmlentities(addslashes($_POST["ValGlySoir6"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $ValGlyAutre6 = (isset($_POST["ValGlyAutre6"])) ? htmlentities(addslashes($_POST["ValGlyAutre6"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $ValGlycemique7 = (isset($_POST["ValGlycemique7"])) ? htmlentities(addslashes($_POST["ValGlycemique7"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $ValGlyMatin7 = (isset($_POST["ValGlyMatin7"])) ? htmlentities(addslashes($_POST["ValGlyMatin7"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $ValGlyMid7 = (isset($_POST["ValGlyMid7"])) ? htmlentities(addslashes($_POST["ValGlyMid7"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $ValGlyCollation7 = (isset($_POST["ValGlyCollation7"])) ? htmlentities(addslashes($_POST["ValGlyCollation7"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $ValGlySoir7 = (isset($_POST["ValGlySoir7"])) ? htmlentities(addslashes($_POST["ValGlySoir7"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $ValGlyAutre7 = (isset($_POST["ValGlyAutre7"])) ? htmlentities(addslashes($_POST["ValGlyAutre7"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $synthesecommentaire = (isset($_POST["synthesecommentaire"])) ? htmlentities(addslashes($_POST["synthesecommentaire"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $objectifglycemiquepreprandial = (isset($_POST["objectifglycemiquepreprandial"])) ? htmlentities(addslashes($_POST["objectifglycemiquepreprandial"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $objectifglycemiquepostprandial = (isset($_POST["objectifglycemiquepostprandial"])) ? htmlentities(addslashes($_POST["objectifglycemiquepostprandial"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $ValDatesHemGlyc1 = (isset($_POST["ValDatesHemGlyc1"])) ? htmlentities(addslashes($_POST["ValDatesHemGlyc1"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $ValDatesHemGlyc2 = (isset($_POST["ValDatesHemGlyc2"])) ? htmlentities(addslashes($_POST["ValDatesHemGlyc2"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $ValDatesHemGlyc3 = (isset($_POST["ValDatesHemGlyc3"])) ? htmlentities(addslashes($_POST["ValDatesHemGlyc3"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $ValDatesHemGlyc4 = (isset($_POST["ValDatesHemGlyc4"])) ? htmlentities(addslashes($_POST["ValDatesHemGlyc4"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $ValDatesHemGlyc5 = (isset($_POST["ValDatesHemGlyc5"])) ? htmlentities(addslashes($_POST["ValDatesHemGlyc5"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $ValDatesHemGlyc6 = (isset($_POST["ValDatesHemGlyc6"])) ? htmlentities(addslashes($_POST["ValDatesHemGlyc6"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $ValDatesHemGlyc7 = (isset($_POST["ValDatesHemGlyc7"])) ? htmlentities(addslashes($_POST["ValDatesHemGlyc7"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $ValDatesHemGlyc8 = (isset($_POST["ValDatesHemGlyc8"])) ? htmlentities(addslashes($_POST["ValDatesHemGlyc8"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $ValDatesHemGlyc9 = (isset($_POST["ValDatesHemGlyc9"])) ? htmlentities(addslashes($_POST["ValDatesHemGlyc9"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $ValHbA1cHemGlyc1 = (isset($_POST["ValHbA1cHemGlyc1"])) ? htmlentities(addslashes($_POST["ValHbA1cHemGlyc1"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $ValHbA1cHemGlyc2 = (isset($_POST["ValHbA1cHemGlyc2"])) ? htmlentities(addslashes($_POST["ValHbA1cHemGlyc2"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $ValHbA1cHemGlyc3 = (isset($_POST["ValHbA1cHemGlyc3"])) ? htmlentities(addslashes($_POST["ValHbA1cHemGlyc3"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $ValHbA1cHemGlyc4 = (isset($_POST["ValHbA1cHemGlyc4"])) ? htmlentities(addslashes($_POST["ValHbA1cHemGlyc4"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $ValHbA1cHemGlyc5 = (isset($_POST["ValHbA1cHemGlyc5"])) ? htmlentities(addslashes($_POST["ValHbA1cHemGlyc5"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $ValHbA1cHemGlyc6 = (isset($_POST["ValHbA1cHemGlyc6"])) ? htmlentities(addslashes($_POST["ValHbA1cHemGlyc6"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $ValHbA1cHemGlyc7 = (isset($_POST["ValHbA1cHemGlyc7"])) ? htmlentities(addslashes($_POST["ValHbA1cHemGlyc7"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $ValHbA1cHemGlyc8 = (isset($_POST["ValHbA1cHemGlyc8"])) ? htmlentities(addslashes($_POST["ValHbA1cHemGlyc8"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $ValHbA1cHemGlyc9 = (isset($_POST["ValHbA1cHemGlyc9"])) ? htmlentities(addslashes($_POST["ValHbA1cHemGlyc9"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $Horaire5 = (isset($_POST["Horaire5"])) ? htmlentities(addslashes($_POST["Horaire5"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $Horaire6 = (isset($_POST["Horaire6"])) ? htmlentities(addslashes($_POST["Horaire6"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $Horaire7 = (isset($_POST["Horaire7"])) ? htmlentities(addslashes($_POST["Horaire7"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $Horaire8 = (isset($_POST["Horaire8"])) ? htmlentities(addslashes($_POST["Horaire8"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $Horaire9 = (isset($_POST["Horaire9"])) ? htmlentities(addslashes($_POST["Horaire9"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $Horaire10 = (isset($_POST["Horaire10"])) ? htmlentities(addslashes($_POST["Horaire10"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $Horaire11 = (isset($_POST["Horaire11"])) ? htmlentities(addslashes($_POST["Horaire11"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $Horaire12 = (isset($_POST["Horaire12"])) ? htmlentities(addslashes($_POST["Horaire12"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $Horaire13 = (isset($_POST["Horaire13"])) ? htmlentities(addslashes($_POST["Horaire13"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $Horaire14 = (isset($_POST["Horaire14"])) ? htmlentities(addslashes($_POST["Horaire14"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $Horaire15 = (isset($_POST["Horaire15"])) ? htmlentities(addslashes($_POST["Horaire15"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $Horaire16 = (isset($_POST["Horaire16"])) ? htmlentities(addslashes($_POST["Horaire16"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $Horaire17 = (isset($_POST["Horaire17"])) ? htmlentities(addslashes($_POST["Horaire17"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $Horaire18 = (isset($_POST["Horaire18"])) ? htmlentities(addslashes($_POST["Horaire18"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $Horaire19 = (isset($_POST["Horaire19"])) ? htmlentities(addslashes($_POST["Horaire19"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $Horaire20 = (isset($_POST["Horaire20"])) ? htmlentities(addslashes($_POST["Horaire20"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $Horaire21 = (isset($_POST["Horaire21"])) ? htmlentities(addslashes($_POST["Horaire21"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $Horaire22 = (isset($_POST["Horaire22"])) ? htmlentities(addslashes($_POST["Horaire22"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $Horaire23 = (isset($_POST["Horaire23"])) ? htmlentities(addslashes($_POST["Horaire23"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $Horaire24 = (isset($_POST["Horaire24"])) ? htmlentities(addslashes($_POST["Horaire24"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $Horaire25 = (isset($_POST["Horaire25"])) ? htmlentities(addslashes($_POST["Horaire25"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $Horaire26 = (isset($_POST["Horaire26"])) ? htmlentities(addslashes($_POST["Horaire26"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $Horaire27 = (isset($_POST["Horaire27"])) ? htmlentities(addslashes($_POST["Horaire27"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $Horaire28 = (isset($_POST["Horaire28"])) ? htmlentities(addslashes($_POST["Horaire28"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $Horaire29 = (isset($_POST["Horaire29"])) ? htmlentities(addslashes($_POST["Horaire29"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $Horaire30 = (isset($_POST["Horaire30"])) ? htmlentities(addslashes($_POST["Horaire30"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $Horaire31 = (isset($_POST["Horaire31"])) ? htmlentities(addslashes($_POST["Horaire31"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $Horaire32 = (isset($_POST["Horaire32"])) ? htmlentities(addslashes($_POST["Horaire32"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $Horaire33 = (isset($_POST["Horaire33"])) ? htmlentities(addslashes($_POST["Horaire33"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $Horaire34 = (isset($_POST["Horaire34"])) ? htmlentities(addslashes($_POST["Horaire34"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $Horaire35 = (isset($_POST["Horaire35"])) ? htmlentities(addslashes($_POST["Horaire35"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $Horaire36 = (isset($_POST["Horaire36"])) ? htmlentities(addslashes($_POST["Horaire36"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $Horaire37 = (isset($_POST["Horaire37"])) ? htmlentities(addslashes($_POST["Horaire37"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $Horaire38 = (isset($_POST["Horaire38"])) ? htmlentities(addslashes($_POST["Horaire38"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $Horaire39 = (isset($_POST["Horaire39"])) ? htmlentities(addslashes($_POST["Horaire39"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $Horaire40 = (isset($_POST["Horaire40"])) ? htmlentities(addslashes($_POST["Horaire40"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $Horaire41 = (isset($_POST["Horaire41"])) ? htmlentities(addslashes($_POST["Horaire41"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $Horaire42 = (isset($_POST["Horaire42"])) ? htmlentities(addslashes($_POST["Horaire42"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $Horaire43 = (isset($_POST["Horaire43"])) ? htmlentities(addslashes($_POST["Horaire43"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $Horaire44 = (isset($_POST["Horaire44"])) ? htmlentities(addslashes($_POST["Horaire44"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $Horaire45 = (isset($_POST["Horaire45"])) ? htmlentities(addslashes($_POST["Horaire45"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $Horaire46 = (isset($_POST["Horaire46"])) ? htmlentities(addslashes($_POST["Horaire46"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $Horaire47 = (isset($_POST["Horaire47"])) ? htmlentities(addslashes($_POST["Horaire47"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $Horaire48 = (isset($_POST["Horaire48"])) ? htmlentities(addslashes($_POST["Horaire48"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $Horaire49 = (isset($_POST["Horaire49"])) ? htmlentities(addslashes($_POST["Horaire49"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $Horaire50 = (isset($_POST["Horaire50"])) ? htmlentities(addslashes($_POST["Horaire50"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $Horaire51 = (isset($_POST["Horaire51"])) ? htmlentities(addslashes($_POST["Horaire51"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $Horaire52 = (isset($_POST["Horaire52"])) ? htmlentities(addslashes($_POST["Horaire52"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $Horaire53 = (isset($_POST["Horaire53"])) ? htmlentities(addslashes($_POST["Horaire53"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $Horaire54 = (isset($_POST["Horaire54"])) ? htmlentities(addslashes($_POST["Horaire54"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $Horaire55 = (isset($_POST["Horaire55"])) ? htmlentities(addslashes($_POST["Horaire55"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $Horaire56 = (isset($_POST["Horaire56"])) ? htmlentities(addslashes($_POST["Horaire56"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $Horaire57 = (isset($_POST["Horaire57"])) ? htmlentities(addslashes($_POST["Horaire57"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $Horaire58 = (isset($_POST["Horaire58"])) ? htmlentities(addslashes($_POST["Horaire58"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $Horaire59 = (isset($_POST["Horaire59"])) ? htmlentities(addslashes($_POST["Horaire59"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $Horaire60 = (isset($_POST["Horaire60"])) ? htmlentities(addslashes($_POST["Horaire60"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $Horaire61 = (isset($_POST["Horaire61"])) ? htmlentities(addslashes($_POST["Horaire61"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $Horaire62 = (isset($_POST["Horaire62"])) ? htmlentities(addslashes($_POST["Horaire62"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $Horaire63 = (isset($_POST["Horaire63"])) ? htmlentities(addslashes($_POST["Horaire63"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $Horaire64 = (isset($_POST["Horaire64"])) ? htmlentities(addslashes($_POST["Horaire64"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $Horaire65 = (isset($_POST["Horaire65"])) ? htmlentities(addslashes($_POST["Horaire65"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $Horaire66 = (isset($_POST["Horaire66"])) ? htmlentities(addslashes($_POST["Horaire66"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $Horaire67 = (isset($_POST["Horaire67"])) ? htmlentities(addslashes($_POST["Horaire67"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $Horaire68 = (isset($_POST["Horaire68"])) ? htmlentities(addslashes($_POST["Horaire68"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $Horaire69 = (isset($_POST["Horaire69"])) ? htmlentities(addslashes($_POST["Horaire69"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $Horaire70 = (isset($_POST["Horaire70"])) ? htmlentities(addslashes($_POST["Horaire70"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $Horaire71 = (isset($_POST["Horaire71"])) ? htmlentities(addslashes($_POST["Horaire71"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $Horaire72 = (isset($_POST["Horaire72"])) ? htmlentities(addslashes($_POST["Horaire72"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $Horaire73 = (isset($_POST["Horaire73"])) ? htmlentities(addslashes($_POST["Horaire73"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $Horaire74 = (isset($_POST["Horaire74"])) ? htmlentities(addslashes($_POST["Horaire74"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $Horaire75 = (isset($_POST["Horaire75"])) ? htmlentities(addslashes($_POST["Horaire75"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $Horaire76 = (isset($_POST["Horaire76"])) ? htmlentities(addslashes($_POST["Horaire76"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $Horaire77 = (isset($_POST["Horaire77"])) ? htmlentities(addslashes($_POST["Horaire77"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $Horaire78 = (isset($_POST["Horaire78"])) ? htmlentities(addslashes($_POST["Horaire78"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $Horaire79 = (isset($_POST["Horaire79"])) ? htmlentities(addslashes($_POST["Horaire79"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $Horaire80 = (isset($_POST["Horaire80"])) ? htmlentities(addslashes($_POST["Horaire80"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $Horaire81 = (isset($_POST["Horaire81"])) ? htmlentities(addslashes($_POST["Horaire81"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $Horaire82 = (isset($_POST["Horaire82"])) ? htmlentities(addslashes($_POST["Horaire82"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $Horaire83 = (isset($_POST["Horaire83"])) ? htmlentities(addslashes($_POST["Horaire83"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $Horaire84 = (isset($_POST["Horaire84"])) ? htmlentities(addslashes($_POST["Horaire84"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $Horaire_5 = (isset($_POST["Horaire_5"])) ? htmlentities(addslashes($_POST["Horaire_5"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $Horaire_6 = (isset($_POST["Horaire_6"])) ? htmlentities(addslashes($_POST["Horaire_6"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $Horaire_7 = (isset($_POST["Horaire_7"])) ? htmlentities(addslashes($_POST["Horaire_7"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $Horaire_8 = (isset($_POST["Horaire_8"])) ? htmlentities(addslashes($_POST["Horaire_8"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $Horaire_9 = (isset($_POST["Horaire_9"])) ? htmlentities(addslashes($_POST["Horaire_9"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $Horaire_10 = (isset($_POST["Horaire_10"])) ? htmlentities(addslashes($_POST["Horaire_10"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $Horaire_11 = (isset($_POST["Horaire_11"])) ? htmlentities(addslashes($_POST["Horaire_11"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $Horaire_12 = (isset($_POST["Horaire_12"])) ? htmlentities(addslashes($_POST["Horaire_12"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $Horaire_13 = (isset($_POST["Horaire_13"])) ? htmlentities(addslashes($_POST["Horaire_13"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $Horaire_14 = (isset($_POST["Horaire_14"])) ? htmlentities(addslashes($_POST["Horaire_14"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $Horaire_15 = (isset($_POST["Horaire_15"])) ? htmlentities(addslashes($_POST["Horaire_15"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $Horaire_16 = (isset($_POST["Horaire_16"])) ? htmlentities(addslashes($_POST["Horaire_16"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $Horaire_17 = (isset($_POST["Horaire_17"])) ? htmlentities(addslashes($_POST["Horaire_17"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $Horaire_18 = (isset($_POST["Horaire_18"])) ? htmlentities(addslashes($_POST["Horaire_18"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $Horaire_19 = (isset($_POST["Horaire_19"])) ? htmlentities(addslashes($_POST["Horaire_19"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $Horaire_20 = (isset($_POST["Horaire_20"])) ? htmlentities(addslashes($_POST["Horaire_20"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $Horaire_21 = (isset($_POST["Horaire_21"])) ? htmlentities(addslashes($_POST["Horaire_21"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $Horaire_22 = (isset($_POST["Horaire_22"])) ? htmlentities(addslashes($_POST["Horaire_22"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $Horaire_23 = (isset($_POST["Horaire_23"])) ? htmlentities(addslashes($_POST["Horaire_23"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $Horaire_24 = (isset($_POST["Horaire_24"])) ? htmlentities(addslashes($_POST["Horaire_24"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $Horaire_25 = (isset($_POST["Horaire_25"])) ? htmlentities(addslashes($_POST["Horaire_25"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $Horaire_26 = (isset($_POST["Horaire_26"])) ? htmlentities(addslashes($_POST["Horaire_26"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $Horaire_27 = (isset($_POST["Horaire_27"])) ? htmlentities(addslashes($_POST["Horaire_27"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $Horaire_28 = (isset($_POST["Horaire_28"])) ? htmlentities(addslashes($_POST["Horaire_28"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $Horaire_29 = (isset($_POST["Horaire_29"])) ? htmlentities(addslashes($_POST["Horaire_29"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $Horaire_30 = (isset($_POST["Horaire_30"])) ? htmlentities(addslashes($_POST["Horaire_30"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $Horaire_31 = (isset($_POST["Horaire_31"])) ? htmlentities(addslashes($_POST["Horaire_31"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $Horaire_32 = (isset($_POST["Horaire_32"])) ? htmlentities(addslashes($_POST["Horaire_32"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $Horaire_33 = (isset($_POST["Horaire_33"])) ? htmlentities(addslashes($_POST["Horaire_33"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $Horaire_34 = (isset($_POST["Horaire_34"])) ? htmlentities(addslashes($_POST["Horaire_34"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $Horaire_35 = (isset($_POST["Horaire_35"])) ? htmlentities(addslashes($_POST["Horaire_35"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $Horaire_36 = (isset($_POST["Horaire_36"])) ? htmlentities(addslashes($_POST["Horaire_36"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $Horaire_37 = (isset($_POST["Horaire_37"])) ? htmlentities(addslashes($_POST["Horaire_37"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $Horaire_38 = (isset($_POST["Horaire_38"])) ? htmlentities(addslashes($_POST["Horaire_38"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $Horaire_39 = (isset($_POST["Horaire_39"])) ? htmlentities(addslashes($_POST["Horaire_39"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $Horaire_40 = (isset($_POST["Horaire_40"])) ? htmlentities(addslashes($_POST["Horaire_40"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $Horaire_41 = (isset($_POST["Horaire_41"])) ? htmlentities(addslashes($_POST["Horaire_41"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $Horaire_42 = (isset($_POST["Horaire_42"])) ? htmlentities(addslashes($_POST["Horaire_42"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $Horaire_43 = (isset($_POST["Horaire_43"])) ? htmlentities(addslashes($_POST["Horaire_43"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $Horaire_44 = (isset($_POST["Horaire_44"])) ? htmlentities(addslashes($_POST["Horaire_44"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $Horaire_45 = (isset($_POST["Horaire_45"])) ? htmlentities(addslashes($_POST["Horaire_45"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $Horaire_46 = (isset($_POST["Horaire_46"])) ? htmlentities(addslashes($_POST["Horaire_46"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $Horaire_47 = (isset($_POST["Horaire_47"])) ? htmlentities(addslashes($_POST["Horaire_47"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $Horaire_48 = (isset($_POST["Horaire_48"])) ? htmlentities(addslashes($_POST["Horaire_48"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $Horaire_49 = (isset($_POST["Horaire_49"])) ? htmlentities(addslashes($_POST["Horaire_49"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $Horaire_50 = (isset($_POST["Horaire_50"])) ? htmlentities(addslashes($_POST["Horaire_50"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $Horaire_51 = (isset($_POST["Horaire_51"])) ? htmlentities(addslashes($_POST["Horaire_51"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $Horaire_52 = (isset($_POST["Horaire_52"])) ? htmlentities(addslashes($_POST["Horaire_52"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $Horaire_53 = (isset($_POST["Horaire_53"])) ? htmlentities(addslashes($_POST["Horaire_53"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $Horaire_54 = (isset($_POST["Horaire_54"])) ? htmlentities(addslashes($_POST["Horaire_54"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $Horaire_55 = (isset($_POST["Horaire_55"])) ? htmlentities(addslashes($_POST["Horaire_55"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $Horaire_56 = (isset($_POST["Horaire_56"])) ? htmlentities(addslashes($_POST["Horaire_56"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $Horaire_57 = (isset($_POST["Horaire_57"])) ? htmlentities(addslashes($_POST["Horaire_57"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $Horaire_58 = (isset($_POST["Horaire_58"])) ? htmlentities(addslashes($_POST["Horaire_58"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $Horaire_59 = (isset($_POST["Horaire_59"])) ? htmlentities(addslashes($_POST["Horaire_59"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $Horaire_60 = (isset($_POST["Horaire_60"])) ? htmlentities(addslashes($_POST["Horaire_60"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $Horaire_61 = (isset($_POST["Horaire_61"])) ? htmlentities(addslashes($_POST["Horaire_61"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $Horaire_62 = (isset($_POST["Horaire_62"])) ? htmlentities(addslashes($_POST["Horaire_62"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $Horaire_63 = (isset($_POST["Horaire_63"])) ? htmlentities(addslashes($_POST["Horaire_63"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $Horaire_64 = (isset($_POST["Horaire_64"])) ? htmlentities(addslashes($_POST["Horaire_64"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $Horaire_65 = (isset($_POST["Horaire_65"])) ? htmlentities(addslashes($_POST["Horaire_65"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $Horaire_66 = (isset($_POST["Horaire_66"])) ? htmlentities(addslashes($_POST["Horaire_66"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $Horaire_67 = (isset($_POST["Horaire_67"])) ? htmlentities(addslashes($_POST["Horaire_67"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $Horaire_68 = (isset($_POST["Horaire_68"])) ? htmlentities(addslashes($_POST["Horaire_68"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $Horaire_69 = (isset($_POST["Horaire_69"])) ? htmlentities(addslashes($_POST["Horaire_69"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $Horaire_70 = (isset($_POST["Horaire_70"])) ? htmlentities(addslashes($_POST["Horaire_70"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $Horaire_71 = (isset($_POST["Horaire_71"])) ? htmlentities(addslashes($_POST["Horaire_71"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $Horaire_72 = (isset($_POST["Horaire_72"])) ? htmlentities(addslashes($_POST["Horaire_72"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $Horaire_73 = (isset($_POST["Horaire_73"])) ? htmlentities(addslashes($_POST["Horaire_73"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $Horaire_74 = (isset($_POST["Horaire_74"])) ? htmlentities(addslashes($_POST["Horaire_74"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $Horaire_75 = (isset($_POST["Horaire_75"])) ? htmlentities(addslashes($_POST["Horaire_75"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $Horaire_76 = (isset($_POST["Horaire_76"])) ? htmlentities(addslashes($_POST["Horaire_76"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $Horaire_77 = (isset($_POST["Horaire_77"])) ? htmlentities(addslashes($_POST["Horaire_77"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $Horaire_78 = (isset($_POST["Horaire_78"])) ? htmlentities(addslashes($_POST["Horaire_78"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $Horaire_79 = (isset($_POST["Horaire_79"])) ? htmlentities(addslashes($_POST["Horaire_79"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $Horaire_80 = (isset($_POST["Horaire_80"])) ? htmlentities(addslashes($_POST["Horaire_80"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $Horaire_81 = (isset($_POST["Horaire_81"])) ? htmlentities(addslashes($_POST["Horaire_81"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $Horaire_82 = (isset($_POST["Horaire_82"])) ? htmlentities(addslashes($_POST["Horaire_82"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $Horaire_83 = (isset($_POST["Horaire_83"])) ? htmlentities(addslashes($_POST["Horaire_83"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $Horaire_84 = (isset($_POST["Horaire_84"])) ? htmlentities(addslashes($_POST["Horaire_84"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $Debit5 = (isset($_POST["Debit5"])) ? htmlentities(addslashes($_POST["Debit5"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $Debit6 = (isset($_POST["Debit6"])) ? htmlentities(addslashes($_POST["Debit6"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $Debit7 = (isset($_POST["Debit7"])) ? htmlentities(addslashes($_POST["Debit7"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $Debit8 = (isset($_POST["Debit8"])) ? htmlentities(addslashes($_POST["Debit8"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $Debit9 = (isset($_POST["Debit9"])) ? htmlentities(addslashes($_POST["Debit9"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $Debit10 = (isset($_POST["Debit10"])) ? htmlentities(addslashes($_POST["Debit10"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $Debit11 = (isset($_POST["Debit11"])) ? htmlentities(addslashes($_POST["Debit11"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $Debit12 = (isset($_POST["Debit12"])) ? htmlentities(addslashes($_POST["Debit12"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $Debit13 = (isset($_POST["Debit13"])) ? htmlentities(addslashes($_POST["Debit13"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $Debit14 = (isset($_POST["Debit14"])) ? htmlentities(addslashes($_POST["Debit14"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $Debit15 = (isset($_POST["Debit15"])) ? htmlentities(addslashes($_POST["Debit15"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $Debit16 = (isset($_POST["Debit16"])) ? htmlentities(addslashes($_POST["Debit16"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $Debit17 = (isset($_POST["Debit17"])) ? htmlentities(addslashes($_POST["Debit17"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $Debit18 = (isset($_POST["Debit18"])) ? htmlentities(addslashes($_POST["Debit18"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $Debit19 = (isset($_POST["Debit19"])) ? htmlentities(addslashes($_POST["Debit19"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $Debit20 = (isset($_POST["Debit20"])) ? htmlentities(addslashes($_POST["Debit20"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $Debit21 = (isset($_POST["Debit21"])) ? htmlentities(addslashes($_POST["Debit21"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $Debit22 = (isset($_POST["Debit22"])) ? htmlentities(addslashes($_POST["Debit22"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $Debit23 = (isset($_POST["Debit23"])) ? htmlentities(addslashes($_POST["Debit23"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $Debit24 = (isset($_POST["Debit24"])) ? htmlentities(addslashes($_POST["Debit24"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $Debit25 = (isset($_POST["Debit25"])) ? htmlentities(addslashes($_POST["Debit25"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $Debit26 = (isset($_POST["Debit26"])) ? htmlentities(addslashes($_POST["Debit26"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $Debit27 = (isset($_POST["Debit27"])) ? htmlentities(addslashes($_POST["Debit27"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $Debit28 = (isset($_POST["Debit28"])) ? htmlentities(addslashes($_POST["Debit28"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $Debit29 = (isset($_POST["Debit29"])) ? htmlentities(addslashes($_POST["Debit29"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $Debit30 = (isset($_POST["Debit30"])) ? htmlentities(addslashes($_POST["Debit30"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $Debit31 = (isset($_POST["Debit31"])) ? htmlentities(addslashes($_POST["Debit31"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $Debit32 = (isset($_POST["Debit32"])) ? htmlentities(addslashes($_POST["Debit32"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $Debit33 = (isset($_POST["Debit33"])) ? htmlentities(addslashes($_POST["Debit33"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $Debit34 = (isset($_POST["Debit34"])) ? htmlentities(addslashes($_POST["Debit34"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $Debit35 = (isset($_POST["Debit35"])) ? htmlentities(addslashes($_POST["Debit35"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $Debit36 = (isset($_POST["Debit36"])) ? htmlentities(addslashes($_POST["Debit36"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $Debit37 = (isset($_POST["Debit37"])) ? htmlentities(addslashes($_POST["Debit37"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $Debit38 = (isset($_POST["Debit38"])) ? htmlentities(addslashes($_POST["Debit38"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $Debit39 = (isset($_POST["Debit39"])) ? htmlentities(addslashes($_POST["Debit39"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $Debit40 = (isset($_POST["Debit40"])) ? htmlentities(addslashes($_POST["Debit40"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $Debit41 = (isset($_POST["Debit41"])) ? htmlentities(addslashes($_POST["Debit41"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $Debit42 = (isset($_POST["Debit42"])) ? htmlentities(addslashes($_POST["Debit42"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $Debit43 = (isset($_POST["Debit43"])) ? htmlentities(addslashes($_POST["Debit43"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $Debit44 = (isset($_POST["Debit44"])) ? htmlentities(addslashes($_POST["Debit44"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $Debit_5 = (isset($_POST["Debit_5"])) ? htmlentities(addslashes($_POST["Debit_5"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $Debit_6 = (isset($_POST["Debit_6"])) ? htmlentities(addslashes($_POST["Debit_6"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $Debit_7 = (isset($_POST["Debit_7"])) ? htmlentities(addslashes($_POST["Debit_7"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $Debit_8 = (isset($_POST["Debit_8"])) ? htmlentities(addslashes($_POST["Debit_8"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $Debit_9 = (isset($_POST["Debit_9"])) ? htmlentities(addslashes($_POST["Debit_9"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $Debit_10 = (isset($_POST["Debit_10"])) ? htmlentities(addslashes($_POST["Debit_10"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $Debit_11 = (isset($_POST["Debit_11"])) ? htmlentities(addslashes($_POST["Debit_11"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $Debit_12 = (isset($_POST["Debit_12"])) ? htmlentities(addslashes($_POST["Debit_12"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $Debit_13 = (isset($_POST["Debit_13"])) ? htmlentities(addslashes($_POST["Debit_13"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $Debit_14 = (isset($_POST["Debit_14"])) ? htmlentities(addslashes($_POST["Debit_14"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $Debit_15 = (isset($_POST["Debit_15"])) ? htmlentities(addslashes($_POST["Debit_15"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $Debit_16 = (isset($_POST["Debit_16"])) ? htmlentities(addslashes($_POST["Debit_16"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $Debit_17 = (isset($_POST["Debit_17"])) ? htmlentities(addslashes($_POST["Debit_17"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $Debit_18 = (isset($_POST["Debit_18"])) ? htmlentities(addslashes($_POST["Debit_18"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $Debit_19 = (isset($_POST["Debit_19"])) ? htmlentities(addslashes($_POST["Debit_19"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $Debit_20 = (isset($_POST["Debit_20"])) ? htmlentities(addslashes($_POST["Debit_20"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $Debit_21 = (isset($_POST["Debit_21"])) ? htmlentities(addslashes($_POST["Debit_21"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $Debit_22 = (isset($_POST["Debit_22"])) ? htmlentities(addslashes($_POST["Debit_22"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $Debit_23 = (isset($_POST["Debit_23"])) ? htmlentities(addslashes($_POST["Debit_23"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $Debit_24 = (isset($_POST["Debit_24"])) ? htmlentities(addslashes($_POST["Debit_24"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $Debit_25 = (isset($_POST["Debit_25"])) ? htmlentities(addslashes($_POST["Debit_25"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $Debit_26 = (isset($_POST["Debit_26"])) ? htmlentities(addslashes($_POST["Debit_26"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $Debit_27 = (isset($_POST["Debit_27"])) ? htmlentities(addslashes($_POST["Debit_27"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $Debit_28 = (isset($_POST["Debit_28"])) ? htmlentities(addslashes($_POST["Debit_28"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $Debit_29 = (isset($_POST["Debit_29"])) ? htmlentities(addslashes($_POST["Debit_29"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $Debit_30 = (isset($_POST["Debit_30"])) ? htmlentities(addslashes($_POST["Debit_30"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $Debit_31 = (isset($_POST["Debit_31"])) ? htmlentities(addslashes($_POST["Debit_31"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $Debit_32 = (isset($_POST["Debit_32"])) ? htmlentities(addslashes($_POST["Debit_32"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $Debit_33 = (isset($_POST["Debit_33"])) ? htmlentities(addslashes($_POST["Debit_33"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $Debit_34 = (isset($_POST["Debit_34"])) ? htmlentities(addslashes($_POST["Debit_34"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $Debit_35 = (isset($_POST["Debit_35"])) ? htmlentities(addslashes($_POST["Debit_35"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $Debit_36 = (isset($_POST["Debit_36"])) ? htmlentities(addslashes($_POST["Debit_36"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $Debit_37 = (isset($_POST["Debit_37"])) ? htmlentities(addslashes($_POST["Debit_37"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $Debit_38 = (isset($_POST["Debit_38"])) ? htmlentities(addslashes($_POST["Debit_38"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $Debit_39 = (isset($_POST["Debit_39"])) ? htmlentities(addslashes($_POST["Debit_39"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $Debit_40 = (isset($_POST["Debit_40"])) ? htmlentities(addslashes($_POST["Debit_40"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $Debit_41 = (isset($_POST["Debit_41"])) ? htmlentities(addslashes($_POST["Debit_41"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $Debit_42 = (isset($_POST["Debit_42"])) ? htmlentities(addslashes($_POST["Debit_42"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $Debit_43 = (isset($_POST["Debit_43"])) ? htmlentities(addslashes($_POST["Debit_43"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $Debit_44 = (isset($_POST["Debit_44"])) ? htmlentities(addslashes($_POST["Debit_44"]), ENT_NOQUOTES,'UTF-8', true) : "";



    $datebasal1 = (isset($_POST["datebasal1"])) ? htmlentities(addslashes($_POST["datebasal1"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $datebasal2 = (isset($_POST["datebasal2"])) ? htmlentities(addslashes($_POST["datebasal2"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $datebolus = (isset($_POST["datebolus"])) ? htmlentities(addslashes($_POST["datebolus"]), ENT_NOQUOTES,'UTF-8', true) : "";
    $dateglycemie = (isset($_POST["dateglycemie"])) ? htmlentities(addslashes($_POST["dateglycemie"]), ENT_NOQUOTES,'UTF-8', true) : "";


    $bdd->exec("INSERT INTO donnemedicale(typediabete, datediagnostic, circonstancedecouverte, antecedentfamiliaux, datepremieremisesousPompe, hba1c, taille, poidsactuel, poidsforme, imc, nombreglycemieparjour, typelecteur, dateprescription, styloautopiqueur, nombreinjectionjour, stylo, autrestylo, aiguillestylo, autreaiguille, insulinelentematin, insulinerapidematin, insulinelentemidi, insulinerapidemidi, insulinelentesoir, insulinerapidesoir, insulinelentediner, insulinerapidediner, insulinelentecollation, insulinerapidecollation, totalinsulinelente, totalinsulinerapide, specialite1, posologie1, specialite2, posologie2, specialite3, posologie3, specialite4, posologie4, Horaire1, Debit1, Horaire2, Debit2, Horaire3, Debit3, Horaire4, Debit4, Horaire1N, Debit1N, Horaire2N, Debit2N, Horaire3N, Debit3N, Horaire4N, Debit4N, Horaire_1, Debit_1, Horaire_2, Debit_2, Horaire_3, Debit_3, Horaire_4, Debit_4, Horaire_N1, Debit_N1, Horaire_N2, Debit_N2, Horaire_N3, Debit_N3, Horaire_N4, Debit_N4, ValGlycemique1, ValGlyMatin1, ValGlyMid1, ValGlyCollation1, ValGlySoir1, ValGlyAutre1, ValGlycemique2, ValGlyMatin2, ValGlyMid2, ValGlyCollation2, ValGlySoir2, ValGlyAutre2, ValGlycemique3, ValGlyMatin3, ValGlyMid3, ValGlyCollation3, ValGlySoir3, ValGlyAutre3, ValGlycemique4, ValGlyMatin4, ValGlyMid4, ValGlyCollation4, ValGlySoir4, ValGlyAutre4, ValGlycemique5, ValGlyMatin5, ValGlyMid5, ValGlyCollation5, ValGlySoir5, ValGlyAutre5, ValGlycemique6, ValGlyMatin6, ValGlyMid6, ValGlyCollation6, ValGlySoir6, ValGlyAutre6, ValGlycemique7, ValGlyMatin7, ValGlyMid7, ValGlyCollation7, ValGlySoir7, ValGlyAutre7, synthesecommentaire, objectifglycemiquepreprandial, objectifglycemiquepostprandial, ValDatesHemGlyc1, ValDatesHemGlyc2, ValDatesHemGlyc3, ValDatesHemGlyc4, ValDatesHemGlyc5, ValDatesHemGlyc6, ValDatesHemGlyc7, ValDatesHemGlyc8, ValDatesHemGlyc9, ValHbA1cHemGlyc1, ValHbA1cHemGlyc2, ValHbA1cHemGlyc3, ValHbA1cHemGlyc4, ValHbA1cHemGlyc5, ValHbA1cHemGlyc6, ValHbA1cHemGlyc7, ValHbA1cHemGlyc8, ValHbA1cHemGlyc9, Horaire5, Horaire6, Horaire7, Horaire8, Horaire9, Horaire10, Horaire11, Horaire12, Horaire13, Horaire14, Horaire15, Horaire16, Horaire17, Horaire18, Horaire19, Horaire20, Horaire21, Horaire22, Horaire23, Horaire24, Horaire25, Horaire26, Horaire27, Horaire28, Horaire29, Horaire30, Horaire31, Horaire32, Horaire33, Horaire34, Horaire35, Horaire36, Horaire37, Horaire38, Horaire39, Horaire40, Horaire41, Horaire42, Horaire43, Horaire44, Horaire45, Horaire46, Horaire47, Horaire48, Horaire49, Horaire50, Horaire51, Horaire52, Horaire53, Horaire54, Horaire55, Horaire56, Horaire57, Horaire58, Horaire59, Horaire60, Horaire61, Horaire62, Horaire63, Horaire64, Horaire65, Horaire66, Horaire67, Horaire68, Horaire69, Horaire70, Horaire71, Horaire72, Horaire73, Horaire74, Horaire75, Horaire76, Horaire77, Horaire78, Horaire79, Horaire80, Horaire81, Horaire82, Horaire83, Horaire84, Horaire_5, Horaire_6, Horaire_7, Horaire_8, Horaire_9, Horaire_10, Horaire_11, Horaire_12, Horaire_13, Horaire_14, Horaire_15, Horaire_16, Horaire_17, Horaire_18, Horaire_19, Horaire_20, Horaire_21, Horaire_22, Horaire_23, Horaire_24, Horaire_25, Horaire_26, Horaire_27, Horaire_28, Horaire_29, Horaire_30, Horaire_31, Horaire_32, Horaire_33, Horaire_34, Horaire_35, Horaire_36, Horaire_37, Horaire_38, Horaire_39, Horaire_40, Horaire_41, Horaire_42, Horaire_43, Horaire_44, Horaire_45, Horaire_46, Horaire_47, Horaire_48, Horaire_49, Horaire_50, Horaire_51, Horaire_52, Horaire_53, Horaire_54, Horaire_55, Horaire_56, Horaire_57, Horaire_58, Horaire_59, Horaire_60, Horaire_61, Horaire_62, Horaire_63, Horaire_64, Horaire_65, Horaire_66, Horaire_67, Horaire_68, Horaire_69, Horaire_70, Horaire_71, Horaire_72, Horaire_73, Horaire_74, Horaire_75, Horaire_76, Horaire_77, Horaire_78, Horaire_79, Horaire_80, Horaire_81, Horaire_82, Horaire_83, Horaire_84, Debit5, Debit6, Debit7, Debit8, Debit9, Debit10, Debit11, Debit12, Debit13, Debit14, Debit15, Debit16, Debit17, Debit18, Debit19, Debit20, Debit21, Debit22, Debit23, Debit24, Debit25, Debit26, Debit27, Debit28, Debit29, Debit30, Debit31, Debit32, Debit33, Debit34, Debit35, Debit36, Debit37, Debit38, Debit39, Debit40, Debit41, Debit42, Debit43, Debit44, Debit_5, Debit_6, Debit_7, Debit_8, Debit_9, Debit_10, Debit_11, Debit_12, Debit_13, Debit_14, Debit_15, Debit_16, Debit_17, Debit_18, Debit_19, Debit_20, Debit_21, Debit_22, Debit_23, Debit_24, Debit_25, Debit_26, Debit_27, Debit_28, Debit_29, Debit_30, Debit_31, Debit_32, Debit_33, Debit_34, Debit_35, Debit_36, Debit_37, Debit_38, Debit_39, Debit_40, Debit_41, Debit_42, Debit_43, Debit_44,datebasal1,datebasal2,datebolus,dateglycemie, idPrescripteur, idPatient) VALUES ('" . $typediabete . "', '" . $datediagnostic . "', '" . $circonstancedecouverte . "', '" . $antecedentfamiliaux . "', '" . $datepremieremisesousPompe . "', '" . $hba1c . "', '" . $taille . "', '" . $poidsactuel . "', '" . $poidsforme . "', '" . $imc . "', '" . $nombreglycemieparjour . "', '" . $typelecteur . "', '" . $dateprescription . "', '" . $styloautopiqueur . "', '" . $nombreinjectionjour . "', '" . $stylo . "', '" . $autrestylo . "', '" . $aiguillestylo . "', '" . $autreaiguille . "', '" . $insulinelentematin . "', '" . $insulinerapidematin . "', '" . $insulinelentemidi . "', '" . $insulinerapidemidi . "', '" . $insulinelentesoir . "', '" . $insulinerapidesoir . "', '" . $insulinelentediner . "', '" . $insulinerapidediner . "', '" . $insulinelentecollation . "', '" . $insulinerapidecollation . "', '" . $totalinsulinelente . "', '" . $totalinsulinerapide . "', '" . $specialite1 . "', '" . $posologie1 . "', '" . $specialite2 . "', '" . $posologie2 . "', '" . $specialite3 . "', '" . $posologie3 . "', '" . $specialite4 . "', '" . $posologie4 . "', '" . $Horaire1 . "', '" . $Debit1 . "', '" . $Horaire2 . "', '" . $Debit2 . "', '" . $Horaire3 . "', '" . $Debit3 . "', '" . $Horaire4 . "', '" . $Debit4 . "', '" . $Horaire1N . "', '" . $Debit1N . "', '" . $Horaire2N . "', '" . $Debit2N . "', '" . $Horaire3N . "', '" . $Debit3N . "', '" . $Horaire4N . "', '" . $Debit4N . "', '" . $Horaire_1 . "', '" . $Debit_1 . "', '" . $Horaire_2 . "', '" . $Debit_2 . "', '" . $Horaire_3 . "', '" . $Debit_3 . "', '" . $Horaire_4 . "', '" . $Debit_4 . "', '" . $Horaire_N1 . "', '" . $Debit_N1 . "', '" . $Horaire_N2 . "', '" . $Debit_N2 . "', '" . $Horaire_N3 . "', '" . $Debit_N3 . "', '" . $Horaire_N4 . "', '" . $Debit_N4 . "', '" . $ValGlycemique1 . "', '" . $ValGlyMatin1 . "', '" . $ValGlyMid1 . "', '" . $ValGlyCollation1 . "', '" . $ValGlySoir1 . "', '" . $ValGlyAutre1 . "', '" . $ValGlycemique2 . "', '" . $ValGlyMatin2 . "', '" . $ValGlyMid2 . "', '" . $ValGlyCollation2 . "', '" . $ValGlySoir2 . "', '" . $ValGlyAutre2 . "', '" . $ValGlycemique3 . "', '" . $ValGlyMatin3 . "', '" . $ValGlyMid3 . "', '" . $ValGlyCollation3 . "', '" . $ValGlySoir3 . "', '" . $ValGlyAutre3 . "', '" . $ValGlycemique4 . "', '" . $ValGlyMatin4 . "', '" . $ValGlyMid4 . "', '" . $ValGlyCollation4 . "', '" . $ValGlySoir4 . "', '" . $ValGlyAutre4 . "', '" . $ValGlycemique5 . "', '" . $ValGlyMatin5 . "', '" . $ValGlyMid5 . "', '" . $ValGlyCollation5 . "', '" . $ValGlySoir5 . "', '" . $ValGlyAutre5 . "', '" . $ValGlycemique6 . "', '" . $ValGlyMatin6 . "', '" . $ValGlyMid6 . "', '" . $ValGlyCollation6 . "', '" . $ValGlySoir6 . "', '" . $ValGlyAutre6 . "', '" . $ValGlycemique7 . "', '" . $ValGlyMatin7 . "', '" . $ValGlyMid7 . "', '" . $ValGlyCollation7 . "', '" . $ValGlySoir7 . "', '" . $ValGlyAutre7 . "', '" . $synthesecommentaire . "', '" . $objectifglycemiquepreprandial . "', '" . $objectifglycemiquepostprandial . "', '" . $ValDatesHemGlyc1 . "', '" . $ValDatesHemGlyc2 . "', '" . $ValDatesHemGlyc3 . "', '" . $ValDatesHemGlyc4 . "', '" . $ValDatesHemGlyc5 . "', '" . $ValDatesHemGlyc6 . "', '" . $ValDatesHemGlyc7 . "', '" . $ValDatesHemGlyc8 . "', '" . $ValDatesHemGlyc9 . "', '" . $ValHbA1cHemGlyc1 . "', '" . $ValHbA1cHemGlyc2 . "', '" . $ValHbA1cHemGlyc3 . "', '" . $ValHbA1cHemGlyc4 . "', '" . $ValHbA1cHemGlyc5 . "', '" . $ValHbA1cHemGlyc6 . "', '" . $ValHbA1cHemGlyc7 . "', '" . $ValHbA1cHemGlyc8 . "', '" . $ValHbA1cHemGlyc9 . "', '" . $Horaire5 . "', '" . $Horaire6 . "', '" . $Horaire7 . "', '" . $Horaire8 . "', '" . $Horaire9 . "', '" . $Horaire10 . "', '" . $Horaire11 . "', '" . $Horaire12 . "', '" . $Horaire13 . "', '" . $Horaire14 . "', '" . $Horaire15 . "', '" . $Horaire16 . "', '" . $Horaire17 . "', '" . $Horaire18 . "', '" . $Horaire19 . "', '" . $Horaire20 . "', '" . $Horaire21 . "', '" . $Horaire22 . "', '" . $Horaire23 . "', '" . $Horaire24 . "', '" . $Horaire25 . "', '" . $Horaire26 . "', '" . $Horaire27 . "', '" . $Horaire28 . "', '" . $Horaire29 . "', '" . $Horaire30 . "', '" . $Horaire31 . "', '" . $Horaire32 . "', '" . $Horaire33 . "', '" . $Horaire34 . "', '" . $Horaire35 . "', '" . $Horaire36 . "', '" . $Horaire37 . "', '" . $Horaire38 . "', '" . $Horaire39 . "', '" . $Horaire40 . "', '" . $Horaire41 . "', '" . $Horaire42 . "', '" . $Horaire43 . "', '" . $Horaire44 . "', '" . $Horaire45 . "', '" . $Horaire46 . "', '" . $Horaire47 . "', '" . $Horaire48 . "', '" . $Horaire49 . "', '" . $Horaire50 . "', '" . $Horaire51 . "', '" . $Horaire52 . "', '" . $Horaire53 . "', '" . $Horaire54 . "', '" . $Horaire55 . "', '" . $Horaire56 . "', '" . $Horaire57 . "', '" . $Horaire58 . "', '" . $Horaire59 . "', '" . $Horaire60 . "', '" . $Horaire61 . "', '" . $Horaire62 . "', '" . $Horaire63 . "', '" . $Horaire64 . "', '" . $Horaire65 . "', '" . $Horaire66 . "', '" . $Horaire67 . "', '" . $Horaire68 . "', '" . $Horaire69 . "', '" . $Horaire70 . "', '" . $Horaire71 . "', '" . $Horaire72 . "', '" . $Horaire73 . "', '" . $Horaire74 . "', '" . $Horaire75 . "', '" . $Horaire76 . "', '" . $Horaire77 . "', '" . $Horaire78 . "', '" . $Horaire79 . "', '" . $Horaire80 . "', '" . $Horaire81 . "', '" . $Horaire82 . "', '" . $Horaire83 . "', '" . $Horaire84 . "', '" . $Horaire_5 . "', '" . $Horaire_6 . "', '" . $Horaire_7 . "', '" . $Horaire_8 . "', '" . $Horaire_9 . "', '" . $Horaire_10 . "', '" . $Horaire_11 . "', '" . $Horaire_12 . "', '" . $Horaire_13 . "', '" . $Horaire_14 . "', '" . $Horaire_15 . "', '" . $Horaire_16 . "', '" . $Horaire_17 . "', '" . $Horaire_18 . "', '" . $Horaire_19 . "', '" . $Horaire_20 . "', '" . $Horaire_21 . "', '" . $Horaire_22 . "', '" . $Horaire_23 . "', '" . $Horaire_24 . "', '" . $Horaire_25 . "', '" . $Horaire_26 . "', '" . $Horaire_27 . "', '" . $Horaire_28 . "', '" . $Horaire_29 . "', '" . $Horaire_30 . "', '" . $Horaire_31 . "', '" . $Horaire_32 . "', '" . $Horaire_33 . "', '" . $Horaire_34 . "', '" . $Horaire_35 . "', '" . $Horaire_36 . "', '" . $Horaire_37 . "', '" . $Horaire_38 . "', '" . $Horaire_39 . "', '" . $Horaire_40 . "', '" . $Horaire_41 . "', '" . $Horaire_42 . "', '" . $Horaire_43 . "', '" . $Horaire_44 . "', '" . $Horaire_45 . "', '" . $Horaire_46 . "', '" . $Horaire_47 . "', '" . $Horaire_48 . "', '" . $Horaire_49 . "', '" . $Horaire_50 . "', '" . $Horaire_51 . "', '" . $Horaire_52 . "', '" . $Horaire_53 . "', '" . $Horaire_54 . "', '" . $Horaire_55 . "', '" . $Horaire_56 . "', '" . $Horaire_57 . "', '" . $Horaire_58 . "', '" . $Horaire_59 . "', '" . $Horaire_60 . "', '" . $Horaire_61 . "', '" . $Horaire_62 . "', '" . $Horaire_63 . "', '" . $Horaire_64 . "', '" . $Horaire_65 . "', '" . $Horaire_66 . "', '" . $Horaire_67 . "', '" . $Horaire_68 . "', '" . $Horaire_69 . "', '" . $Horaire_70 . "', '" . $Horaire_71 . "', '" . $Horaire_72 . "', '" . $Horaire_73 . "', '" . $Horaire_74 . "', '" . $Horaire_75 . "', '" . $Horaire_76 . "', '" . $Horaire_77 . "', '" . $Horaire_78 . "', '" . $Horaire_79 . "', '" . $Horaire_80 . "', '" . $Horaire_81 . "', '" . $Horaire_82 . "', '" . $Horaire_83 . "', '" . $Horaire_84 . "', '" . $Debit5 . "', '" . $Debit6 . "', '" . $Debit7 . "', '" . $Debit8 . "', '" . $Debit9 . "', '" . $Debit10 . "', '" . $Debit11 . "', '" . $Debit12 . "', '" . $Debit13 . "', '" . $Debit14 . "', '" . $Debit15 . "', '" . $Debit16 . "', '" . $Debit17 . "', '" . $Debit18 . "', '" . $Debit19 . "', '" . $Debit20 . "', '" . $Debit21 . "', '" . $Debit22 . "', '" . $Debit23 . "', '" . $Debit24 . "', '" . $Debit25 . "', '" . $Debit26 . "', '" . $Debit27 . "', '" . $Debit28 . "', '" . $Debit29 . "', '" . $Debit30 . "', '" . $Debit31 . "', '" . $Debit32 . "', '" . $Debit33 . "', '" . $Debit34 . "', '" . $Debit35 . "', '" . $Debit36 . "', '" . $Debit37 . "', '" . $Debit38 . "', '" . $Debit39 . "', '" . $Debit40 . "', '" . $Debit41 . "', '" . $Debit42 . "', '" . $Debit43 . "', '" . $Debit44 . "', '" . $Debit_5 . "', '" . $Debit_6 . "', '" . $Debit_7 . "', '" . $Debit_8 . "', '" . $Debit_9 . "', '" . $Debit_10 . "', '" . $Debit_11 . "', '" . $Debit_12 . "', '" . $Debit_13 . "', '" . $Debit_14 . "', '" . $Debit_15 . "', '" . $Debit_16 . "', '" . $Debit_17 . "', '" . $Debit_18 . "', '" . $Debit_19 . "', '" . $Debit_20 . "', '" . $Debit_21 . "', '" . $Debit_22 . "', '" . $Debit_23 . "', '" . $Debit_24 . "', '" . $Debit_25 . "', '" . $Debit_26 . "', '" . $Debit_27 . "', '" . $Debit_28 . "', '" . $Debit_29 . "', '" . $Debit_30 . "', '" . $Debit_31 . "', '" . $Debit_32 . "', '" . $Debit_33 . "', '" . $Debit_34 . "', '" . $Debit_35 . "', '" . $Debit_36 . "', '" . $Debit_37 . "', '" . $Debit_38 . "', '" . $Debit_39 . "', '" . $Debit_40 . "', '" . $Debit_41 . "', '" . $Debit_42 . "', '" . $Debit_43 . "', '" . $Debit_44 . "', '" . $datebasal1 . "', '" . $datebasal2 . "', '" . $datebolus . "', '" . $dateglycemie . "', '" .$idPrescripteur."', '" .$idPatient."')") or die(print_r($bdd->errorInfo()));


    $bdd->exec("INSERT INTO asg1
			(
				asgdetail1, asgdetail2, asgdetail3, asgdetail4, asgobservation1, asgobservation2, asgobservation3, asgobservation4, idPrescripteur, idPatient)
			VALUES 
			('"
                    . htmlentities(addslashes($_POST["asgdetail1"]), ENT_NOQUOTES,'UTF-8', true) . "','"
                    . htmlentities(addslashes($_POST["asgdetail2"]), ENT_NOQUOTES,'UTF-8', true) . "','"
                    . htmlentities(addslashes($_POST["asgdetail3"]), ENT_NOQUOTES,'UTF-8', true) . "','"
                    . htmlentities(addslashes($_POST["asgdetail4"]), ENT_NOQUOTES,'UTF-8', true) . "','"
                    . htmlentities(addslashes($_POST["asgobservation1"]), ENT_NOQUOTES,'UTF-8', true) . "','"
                    . htmlentities(addslashes($_POST["asgobservation2"]), ENT_NOQUOTES,'UTF-8', true) . "','"
                    . htmlentities(addslashes($_POST["asgobservation3"]), ENT_NOQUOTES,'UTF-8', true) . "','"
                    . htmlentities(addslashes($_POST["asgobservation4"]), ENT_NOQUOTES,'UTF-8', true) ."', '" 
                    .$idPrescripteur."', '" 
                    .$idPatient."')") or die(print_r($bdd->ErrorInfo()));




    $bdd->exec("INSERT INTO asg2
			(
				asgfrequence1, asgfrequence2, asgconnaissance, asgcommentaire, idPrescripteur, idPatient)
			VALUES 
			('"
                    . htmlentities(addslashes($_POST["asgfrequence1"]), ENT_NOQUOTES,'UTF-8', true) . "','"
                    . htmlentities(addslashes($_POST["asgfrequence2"]), ENT_NOQUOTES,'UTF-8', true) . "','"
                    . htmlentities(addslashes($_POST["asgconnaissance"]), ENT_NOQUOTES,'UTF-8', true) . "','"
                    . htmlentities(addslashes($_POST["asgcommentaire"]), ENT_NOQUOTES,'UTF-8', true) . "', '" 
                    .$idPrescripteur."', '" 
                    .$idPatient."')") or die(print_r($bdd->ErrorInfo()));



    $bdd->exec("INSERT INTO connaissances
			(
				reponse1, reponse2, reponse3, reponse4, reponse5, reponse6, reponse7, reponse8, reponse9, reponse10, reponse11, reponse12, reponse13, reponse14,
				observation1, observation2, observation3, observation4, observation5, observation6, observation7, observation8, observation9,
				date1, date2, date3, date4, date5, idPrescripteur, idPatient)
			VALUES 
			('"
                    . htmlentities(addslashes($_POST["connaissance1"]), ENT_NOQUOTES,'UTF-8', true) . "','"
                    . htmlentities(addslashes($_POST["connaissance2"]), ENT_NOQUOTES,'UTF-8', true) . "','"
                    . htmlentities(addslashes($_POST["connaissance3"]), ENT_NOQUOTES,'UTF-8', true) . "','"
                    . htmlentities(addslashes($_POST["connaissance4"]), ENT_NOQUOTES,'UTF-8', true) . "','"
                    . htmlentities(addslashes($_POST["connaissance5"]), ENT_NOQUOTES,'UTF-8', true) . "','"
                    . htmlentities(addslashes($_POST["connaissance6"]), ENT_NOQUOTES,'UTF-8', true) . "','"
                    . htmlentities(addslashes($_POST["connaissance7"]), ENT_NOQUOTES,'UTF-8', true) . "','"
                    . htmlentities(addslashes($_POST["connaissance8"]), ENT_NOQUOTES,'UTF-8', true) . "','"
                    . htmlentities(addslashes($_POST["connaissance9"]), ENT_NOQUOTES,'UTF-8', true) . "','"
                    . htmlentities(addslashes($_POST["connaissance10"]), ENT_NOQUOTES,'UTF-8', true) . "','"
                    . htmlentities(addslashes($_POST["connaissance11"]), ENT_NOQUOTES,'UTF-8', true) . "','"
                    . htmlentities(addslashes($_POST["connaissance12"]), ENT_NOQUOTES,'UTF-8', true) . "','"
                    . htmlentities(addslashes($_POST["connaissance13"]), ENT_NOQUOTES,'UTF-8', true) . "','"
                    . htmlentities(addslashes($_POST["connaissance14"]), ENT_NOQUOTES,'UTF-8', true) . "','"
                    . htmlentities(addslashes($_POST["cnsobservation1"]), ENT_NOQUOTES,'UTF-8', true) . "','"
                    . htmlentities(addslashes($_POST["cnsobservation2"]), ENT_NOQUOTES,'UTF-8', true) . "','"
                    . htmlentities(addslashes($_POST["cnsobservation3"]), ENT_NOQUOTES,'UTF-8', true) . "','"
                    . htmlentities(addslashes($_POST["cnsobservation4"]), ENT_NOQUOTES,'UTF-8', true) . "','"
                    . htmlentities(addslashes($_POST["cnsobservation5"]), ENT_NOQUOTES,'UTF-8', true) . "','"
                    . htmlentities(addslashes($_POST["cnsobservation6"]), ENT_NOQUOTES,'UTF-8', true) . "','"
                    . htmlentities(addslashes($_POST["cnsobservation7"]), ENT_NOQUOTES,'UTF-8', true) . "','"
                    . htmlentities(addslashes($_POST["cnsobservation8"]), ENT_NOQUOTES,'UTF-8', true) . "','"
                    . htmlentities(addslashes($_POST["cnsobservation9"]), ENT_NOQUOTES,'UTF-8', true) . "','"
                    . htmlentities(addslashes($_POST["perempdate1"]), ENT_NOQUOTES,'UTF-8', true) . "','"
                    . htmlentities(addslashes($_POST["perempdate2"]), ENT_NOQUOTES,'UTF-8', true) . "','"
                    . htmlentities(addslashes($_POST["perempdate3"]), ENT_NOQUOTES,'UTF-8', true) . "','"
                    . htmlentities(addslashes($_POST["perempdate4"]), ENT_NOQUOTES,'UTF-8', true) . "','"
                    . htmlentities(addslashes($_POST["perempdate5"]), ENT_NOQUOTES,'UTF-8', true) . "', '" 
                    .$idPrescripteur."', '" 
                    .$idPatient."')") or die(print_r($bdd->ErrorInfo()));


    $req = $bdd->prepare("INSERT INTO insulinotherapiefonctionnelle(petitdejeunerDe, petitdejeunerA, dejeunerDe, dejeunerA, gouterDe, gouterA, dinerDe, dinerA, collationDe, collationA, petitdejeunerRotation, petitdejeunerObjectif, petitdejeunerSensibilite, dejeunerRotation, dejeunerObjectif, dejeunerSensibilite, gouterRotation, gouterObjectif, gouterSensibilite, dinerRotation, dinerObjectif, dinerSensibilite, collationRotation, collationObjectif, collationSensibilite, idPrescripteur, idPatient) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $req->execute(array($petitdejeunerDe, $petitdejeunerA, $dejeunerDe, $dejeunerA, $gouterDe, $gouterA, $dinerDe, $dinerA, $collationDe, $collationA, $petitdejeunerRotation, $petitdejeunerObjectif, $petitdejeunerSensibilite, $dejeunerRotation, $dejeunerObjectif, $dejeunerSensibilite, $gouterRotation, $gouterObjectif, $gouterSensibilite, $dinerRotation, $dinerObjectif, $dinerSensibilite, $collationRotation, $collationObjectif, $collationSensibilite, $idPrescripteur, $idPatient));

    echo "Enregistrement avec succèes !";
} catch (PDOException $e) {
    echo("Erreur : " . $e->getMessage());
}
?>