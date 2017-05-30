<?php

require './cnx.php';
session_start();

$activitephysique = htmlspecialchars(addslashes($_POST["activitephysique"])) ;
$profession = htmlspecialchars(addslashes($_POST["profession"])) ;
$situationfamiliale = htmlspecialchars(addslashes($_POST["situationfamiliale"])) ;
$observation = htmlspecialchars(addslashes($_POST["observation"])) ;
$hygienealimentaire = htmlspecialchars(addslashes($_POST["hygienealimentaire"])) ;
$stabilitehoraires = htmlspecialchars(addslashes($_POST["stabilitehoraires"])) ;
$details = htmlspecialchars(addslashes($_POST["details"])) ;
//eto
$environnement = htmlspecialchars(addslashes($_POST["environnement"])) ;
$rougeur = $_POST["rougeur"];
$etatcutane = htmlspecialchars(addslashes($_POST["etatcutane"])) ;
$choixpoint = htmlspecialchars(addslashes($_POST["choixpoint"])) ;
$regime = htmlspecialchars(addslashes($_POST["regime"])) ;
$observation2 = htmlspecialchars(addslashes($_POST["observation2"])) ;
$survenue = htmlspecialchars(addslashes($_POST["survenue"])) ;
$atcd = htmlspecialchars(addslashes($_POST["atcd"])) ;
$traitement = htmlspecialchars(addslashes($_POST["traitement"])) ;
$date1 = htmlspecialchars(addslashes($_POST["date1"])) ;
$date2 = htmlspecialchars(addslashes($_POST["date2"])) ;
$date3 = htmlspecialchars(addslashes($_POST["date3"])) ;
$date4 = htmlspecialchars(addslashes($_POST["date4"])) ;
$date5 = htmlspecialchars(addslashes($_POST["date5"])) ;
$date6 = htmlspecialchars(addslashes($_POST["date6"])) ;
$date7 = htmlspecialchars(addslashes($_POST["date7"])) ;
$date8 = htmlspecialchars(addslashes($_POST["date8"])) ;
$date9 = htmlspecialchars(addslashes($_POST["date9"])) ;
$taille1 = htmlspecialchars(addslashes($_POST["taille1"])) ;
$taille2 = htmlspecialchars(addslashes($_POST["taille2"])) ;
$taille3 = htmlspecialchars(addslashes($_POST["taille3"])) ;
$taille4 = htmlspecialchars(addslashes($_POST["taille4"])) ;
$taille5 = htmlspecialchars(addslashes($_POST["taille5"])) ;
$taille6 = htmlspecialchars(addslashes($_POST["taille6"])) ;
$taille7 = htmlspecialchars(addslashes($_POST["taille7"])) ;
$taille8 = htmlspecialchars(addslashes($_POST["taille8"])) ;
$taille9 = htmlspecialchars(addslashes($_POST["taille9"])) ;
$poids1 = htmlspecialchars(addslashes($_POST["poids1"])) ;
$poids2 = htmlspecialchars(addslashes($_POST["poids2"])) ;
$poids3 = htmlspecialchars(addslashes($_POST["poids3"])) ;
$poids4 = htmlspecialchars(addslashes($_POST["poids4"])) ;
$poids5 = htmlspecialchars(addslashes($_POST["poids5"])) ;
$poids6 = htmlspecialchars(addslashes($_POST["poids6"])) ;
$poids7 = htmlspecialchars(addslashes($_POST["poids7"])) ;
$poids8 = htmlspecialchars(addslashes($_POST["poids8"])) ;
$poids9 = htmlspecialchars(addslashes($_POST["poids9"])) ;
$imc1 = htmlspecialchars(addslashes($_POST["imc1"])) ;
$imc2 = htmlspecialchars(addslashes($_POST["imc2"])) ;
$imc3 = htmlspecialchars(addslashes($_POST["imc3"])) ;
$imc4 = htmlspecialchars(addslashes($_POST["imc4"])) ;
$imc5 = htmlspecialchars(addslashes($_POST["imc5"])) ;
$imc6 = htmlspecialchars(addslashes($_POST["imc6"])) ;
$imc7 = htmlspecialchars(addslashes($_POST["imc7"])) ;
$imc8 = htmlspecialchars(addslashes($_POST["imc8"])) ;
$imc9 = htmlspecialchars(addslashes($_POST["imc9"])) ;

$petitdejeunerDe = htmlspecialchars(addslashes($_POST['petitdejeunerDe'])) ;
$petitdejeunerA = htmlspecialchars(addslashes($_POST['petitdejeunerA'])) ;

$dejeunerDe = htmlspecialchars(addslashes($_POST['dejeunerDe'])) ;
$dejeunerA = htmlspecialchars(addslashes($_POST['dejeunerA'])) ;

$gouterDe = htmlspecialchars(addslashes($_POST['gouterDe'])) ;
$gouterA = htmlspecialchars(addslashes($_POST['gouterA'])) ;

$dinerDe = htmlspecialchars(addslashes($_POST['dinerDe'])) ;
$dinerA = htmlspecialchars(addslashes($_POST['dinerA'])) ;

$collationDe = htmlspecialchars(addslashes($_POST['collationDe'])) ;
$collationA = htmlspecialchars(addslashes($_POST['collationA'])) ;

$petitdejeunerRotation = htmlspecialchars(addslashes($_POST['petitdejeunerRotation'])) ;
$petitdejeunerObjectif = htmlspecialchars(addslashes($_POST['petitdejeunerObjectif'])) ;
$petitdejeunerSensibilite = htmlspecialchars(addslashes($_POST['petitdejeunerSensibilite'])) ;

$dejeunerRotation = htmlspecialchars(addslashes($_POST['dejeunerRotation'])) ;
$dejeunerObjectif = htmlspecialchars(addslashes($_POST['dejeunerObjectif'])) ;
$dejeunerSensibilite = htmlspecialchars(addslashes($_POST['dejeunerSensibilite'])) ;

$gouterRotation = htmlspecialchars(addslashes($_POST['gouterRotation'])) ;
$gouterObjectif = htmlspecialchars(addslashes($_POST['gouterObjectif'])) ;
$gouterSensibilite = htmlspecialchars(addslashes($_POST['gouterSensibilite'])) ;

$dinerRotation = htmlspecialchars(addslashes($_POST['dinerRotation'])) ;
$dinerObjectif = htmlspecialchars(addslashes($_POST['dinerObjectif'])) ;
$dinerSensibilite = htmlspecialchars(addslashes($_POST['dinerSensibilite'])) ;

$collationRotation = htmlspecialchars(addslashes($_POST['collationRotation'])) ;
$collationObjectif = htmlspecialchars(addslashes($_POST['collationObjectif'])) ;
$collationSensibilite = htmlspecialchars(addslashes($_POST['collationSensibilite'])) ;

$idPrescripteur = $_SESSION['id'];
$idPatient = htmlspecialchars(addslashes($_POST["nompatient"])) ."-".htmlspecialchars(addslashes($_POST["prenompatient"])) ;

    $typediabete = (isset($_POST["typediabete"])) ? htmlspecialchars(addslashes($_POST["typediabete"])) : "";
    $datediagnostic = (isset($_POST["datediagnostic"])) ? htmlspecialchars(addslashes($_POST["datediagnostic"])) : "";
    $circonstancedecouverte = (isset($_POST["circonstancedecouverte"])) ? htmlspecialchars(addslashes($_POST["circonstancedecouverte"])) : "";
    $antecedentfamiliaux = (isset($_POST["antecedentfamiliaux"])) ? htmlspecialchars(addslashes($_POST["antecedentfamiliaux"])) : "";
    $datepremieremisesousPompe = (isset($_POST["datepremieremisesousPompe"])) ? htmlspecialchars(addslashes($_POST["datepremieremisesousPompe"])) : "";
    $hba1c = (isset($_POST["hba1c"])) ? htmlspecialchars(addslashes($_POST["hba1c"])) : "";
    $taille = (isset($_POST["taille"])) ? htmlspecialchars(addslashes($_POST["taille"])) : "";
    $poidsactuel = (isset($_POST["poidsactuel"])) ? htmlspecialchars(addslashes($_POST["poidsactuel"])) : "";
    $poidsforme = (isset($_POST["poidsforme"])) ? htmlspecialchars(addslashes($_POST["poidsforme"])) : "";
    $imc = (isset($_POST["imc"])) ? htmlspecialchars(addslashes($_POST["imc"])) : "";
    $nombreglycemieparjour = (isset($_POST["nombreglycemieparjour"])) ? htmlspecialchars(addslashes($_POST["nombreglycemieparjour"])) : "";
    $typelecteur = (isset($_POST["typelecteur"])) ? htmlspecialchars(addslashes($_POST["typelecteur"])) : "";
    $dateprescription = (isset($_POST["dateprescription"])) ? htmlspecialchars(addslashes($_POST["dateprescription"])) : "";
    $styloautopiqueur = (isset($_POST["styloautopiqueur"])) ? htmlspecialchars(addslashes($_POST["styloautopiqueur"])) : "";
    $nombreinjectionjour = (isset($_POST["nombreinjectionjour"])) ? htmlspecialchars(addslashes($_POST["nombreinjectionjour"])) : "";
    $stylo = (isset($_POST["stylo"])) ? htmlspecialchars(addslashes($_POST["stylo"])) : "";
    $autrestylo = (isset($_POST["autrestylo"])) ? htmlspecialchars(addslashes($_POST["autrestylo"])) : "";
    $aiguillestylo = (isset($_POST["aiguillestylo"])) ? htmlspecialchars(addslashes($_POST["aiguillestylo"])) : "";
    $autreaiguille = (isset($_POST["autreaiguille"])) ? htmlspecialchars(addslashes($_POST["autreaiguille"])) : "";
    $insulinelentematin = (isset($_POST["insulinelentematin"])) ? htmlspecialchars(addslashes($_POST["insulinelentematin"])) : "";
    $insulinerapidematin = (isset($_POST["insulinerapidematin"])) ? htmlspecialchars(addslashes($_POST["insulinerapidematin"])) : "";
    $insulinelentemidi = (isset($_POST["insulinelentemidi"])) ? htmlspecialchars(addslashes($_POST["insulinelentemidi"])) : "";
    $insulinerapidemidi = (isset($_POST["insulinerapidemidi"])) ? htmlspecialchars(addslashes($_POST["insulinerapidemidi"])) : "";
    $insulinelentesoir = (isset($_POST["insulinelentesoir"])) ? htmlspecialchars(addslashes($_POST["insulinelentesoir"])) : "";
    $insulinerapidesoir = (isset($_POST["insulinerapidesoir"])) ? htmlspecialchars(addslashes($_POST["insulinerapidesoir"])) : "";
    $insulinelentediner = (isset($_POST["insulinelentediner"])) ? htmlspecialchars(addslashes($_POST["insulinelentediner"])) : "";
    $insulinerapidediner = (isset($_POST["insulinerapidediner"])) ? htmlspecialchars(addslashes($_POST["insulinerapidediner"])) : "";
    $insulinelentecollation = (isset($_POST["insulinelentecollation"])) ? htmlspecialchars(addslashes($_POST["insulinelentecollation"])) : "";
    $insulinerapidecollation = (isset($_POST["insulinerapidecollation"])) ? htmlspecialchars(addslashes($_POST["insulinerapidecollation"])) : "";
    $totalinsulinelente = (isset($_POST["totalinsulinelente"])) ? htmlspecialchars(addslashes($_POST["totalinsulinelente"])) : "";
    $totalinsulinerapide = (isset($_POST["totalinsulinerapide"])) ? htmlspecialchars(addslashes($_POST["totalinsulinerapide"])) : "";
    $specialite1 = (isset($_POST["specialite1"])) ? htmlspecialchars(addslashes($_POST["specialite1"])) : "";
    $posologie1 = (isset($_POST["posologie1"])) ? htmlspecialchars(addslashes($_POST["posologie1"])) : "";
    $specialite2 = (isset($_POST["specialite2"])) ? htmlspecialchars(addslashes($_POST["specialite2"])) : "";
    $posologie2 = (isset($_POST["posologie2"])) ? htmlspecialchars(addslashes($_POST["posologie2"])) : "";
    $specialite3 = (isset($_POST["specialite3"])) ? htmlspecialchars(addslashes($_POST["specialite3"])) : "";
    $posologie3 = (isset($_POST["posologie3"])) ? htmlspecialchars(addslashes($_POST["posologie3"])) : "";
    $specialite4 = (isset($_POST["specialite4"])) ? htmlspecialchars(addslashes($_POST["specialite4"])) : "";
    $posologie4 = (isset($_POST["posologie4"])) ? htmlspecialchars(addslashes($_POST["posologie4"])) : "";
    $Horaire1 = (isset($_POST["Horaire1"])) ? htmlspecialchars(addslashes($_POST["Horaire1"])) : "";
    $Debit1 = (isset($_POST["Debit1"])) ? htmlspecialchars(addslashes($_POST["Debit1"])) : "";
    $Horaire2 = (isset($_POST["Horaire2"])) ? htmlspecialchars(addslashes($_POST["Horaire2"])) : "";
    $Debit2 = (isset($_POST["Debit2"])) ? htmlspecialchars(addslashes($_POST["Debit2"])) : "";
    $Horaire3 = (isset($_POST["Horaire3"])) ? htmlspecialchars(addslashes($_POST["Horaire3"])) : "";
    $Debit3 = (isset($_POST["Debit3"])) ? htmlspecialchars(addslashes($_POST["Debit3"])) : "";
    $Horaire4 = (isset($_POST["Horaire4"])) ? htmlspecialchars(addslashes($_POST["Horaire4"])) : "";
    $Debit4 = (isset($_POST["Debit4"])) ? htmlspecialchars(addslashes($_POST["Debit4"])) : "";
    $Horaire1N = (isset($_POST["Horaire1N"])) ? htmlspecialchars(addslashes($_POST["Horaire1N"])) : "";
    $Debit1N = (isset($_POST["Debit1N"])) ? htmlspecialchars(addslashes($_POST["Debit1N"])) : "";
    $Horaire2N = (isset($_POST["Horaire2N"])) ? htmlspecialchars(addslashes($_POST["Horaire2N"])) : "";
    $Debit2N = (isset($_POST["Debit2N"])) ? htmlspecialchars(addslashes($_POST["Debit2N"])) : "";
    $Horaire3N = (isset($_POST["Horaire3N"])) ? htmlspecialchars(addslashes($_POST["Horaire3N"])) : "";
    $Debit3N = (isset($_POST["Debit3N"])) ? htmlspecialchars(addslashes($_POST["Debit3N"])) : "";
    $Horaire4N = (isset($_POST["Horaire4N"])) ? htmlspecialchars(addslashes($_POST["Horaire4N"])) : "";
    $Debit4N = (isset($_POST["Debit4N"])) ? htmlspecialchars(addslashes($_POST["Debit4N"])) : "";
    $Horaire_1 = (isset($_POST["Horaire_1"])) ? htmlspecialchars(addslashes($_POST["Horaire_1"])) : "";
    $Debit_1 = (isset($_POST["Debit_1"])) ? htmlspecialchars(addslashes($_POST["Debit_1"])) : "";
    $Horaire_2 = (isset($_POST["Horaire_2"])) ? htmlspecialchars(addslashes($_POST["Horaire_2"])) : "";
    $Debit_2 = (isset($_POST["Debit_2"])) ? htmlspecialchars(addslashes($_POST["Debit_2"])) : "";
    $Horaire_3 = (isset($_POST["Horaire_3"])) ? htmlspecialchars(addslashes($_POST["Horaire_3"])) : "";
    $Debit_3 = (isset($_POST["Debit_3"])) ? htmlspecialchars(addslashes($_POST["Debit_3"])) : "";
    $Horaire_4 = (isset($_POST["Horaire_4"])) ? htmlspecialchars(addslashes($_POST["Horaire_4"])) : "";
    $Debit_4 = (isset($_POST["Debit_4"])) ? htmlspecialchars(addslashes($_POST["Debit_4"])) : "";
    $Horaire_N1 = (isset($_POST["Horaire_N1"])) ? htmlspecialchars(addslashes($_POST["Horaire_N1"])) : "";
    $Debit_N1 = (isset($_POST["Debit_N1"])) ? htmlspecialchars(addslashes($_POST["Debit_N1"])) : "";
    $Horaire_N2 = (isset($_POST["Horaire_N2"])) ? htmlspecialchars(addslashes($_POST["Horaire_N2"])) : "";
    $Debit_N2 = (isset($_POST["Debit_N2"])) ? htmlspecialchars(addslashes($_POST["Debit_N2"])) : "";
    $Horaire_N3 = (isset($_POST["Horaire_N3"])) ? htmlspecialchars(addslashes($_POST["Horaire_N3"])) : "";
    $Debit_N3 = (isset($_POST["Debit_N3"])) ? htmlspecialchars(addslashes($_POST["Debit_N3"])) : "";
    $Horaire_N4 = (isset($_POST["Horaire_N4"])) ? htmlspecialchars(addslashes($_POST["Horaire_N4"])) : "";
    $Debit_N4 = (isset($_POST["Debit_N4"])) ? htmlspecialchars(addslashes($_POST["Debit_N4"])) : "";
    $ValGlycemique1 = (isset($_POST["ValGlycemique1"])) ? htmlspecialchars(addslashes($_POST["ValGlycemique1"])) : "";
    $ValGlyMatin1 = (isset($_POST["ValGlyMatin1"])) ? htmlspecialchars(addslashes($_POST["ValGlyMatin1"])) : "";
    $ValGlyMid1 = (isset($_POST["ValGlyMid1"])) ? htmlspecialchars(addslashes($_POST["ValGlyMid1"])) : "";
    $ValGlyCollation1 = (isset($_POST["ValGlyCollation1"])) ? htmlspecialchars(addslashes($_POST["ValGlyCollation1"])) : "";
    $ValGlySoir1 = (isset($_POST["ValGlySoir1"])) ? htmlspecialchars(addslashes($_POST["ValGlySoir1"])) : "";
    $ValGlyAutre1 = (isset($_POST["ValGlyAutre1"])) ? htmlspecialchars(addslashes($_POST["ValGlyAutre1"])) : "";
    $ValGlycemique2 = (isset($_POST["ValGlycemique2"])) ? htmlspecialchars(addslashes($_POST["ValGlycemique2"])) : "";
    $ValGlyMatin2 = (isset($_POST["ValGlyMatin2"])) ? htmlspecialchars(addslashes($_POST["ValGlyMatin2"])) : "";
    $ValGlyMid2 = (isset($_POST["ValGlyMid2"])) ? htmlspecialchars(addslashes($_POST["ValGlyMid2"])) : "";
    $ValGlyCollation2 = (isset($_POST["ValGlyCollation2"])) ? htmlspecialchars(addslashes($_POST["ValGlyCollation2"])) : "";
    $ValGlySoir2 = (isset($_POST["ValGlySoir2"])) ? htmlspecialchars(addslashes($_POST["ValGlySoir2"])) : "";
    $ValGlyAutre2 = (isset($_POST["ValGlyAutre2"])) ? htmlspecialchars(addslashes($_POST["ValGlyAutre2"])) : "";
    $ValGlycemique3 = (isset($_POST["ValGlycemique3"])) ? htmlspecialchars(addslashes($_POST["ValGlycemique3"])) : "";
    $ValGlyMatin3 = (isset($_POST["ValGlyMatin3"])) ? htmlspecialchars(addslashes($_POST["ValGlyMatin3"])) : "";
    $ValGlyMid3 = (isset($_POST["ValGlyMid3"])) ? htmlspecialchars(addslashes($_POST["ValGlyMid3"])) : "";
    $ValGlyCollation3 = (isset($_POST["ValGlyCollation3"])) ? htmlspecialchars(addslashes($_POST["ValGlyCollation3"])) : "";
    $ValGlySoir3 = (isset($_POST["ValGlySoir3"])) ? htmlspecialchars(addslashes($_POST["ValGlySoir3"])) : "";
    $ValGlyAutre3 = (isset($_POST["ValGlyAutre3"])) ? htmlspecialchars(addslashes($_POST["ValGlyAutre3"])) : "";
    $ValGlycemique4 = (isset($_POST["ValGlycemique4"])) ? htmlspecialchars(addslashes($_POST["ValGlycemique4"])) : "";
    $ValGlyMatin4 = (isset($_POST["ValGlyMatin4"])) ? htmlspecialchars(addslashes($_POST["ValGlyMatin4"])) : "";
    $ValGlyMid4 = (isset($_POST["ValGlyMid4"])) ? htmlspecialchars(addslashes($_POST["ValGlyMid4"])) : "";
    $ValGlyCollation4 = (isset($_POST["ValGlyCollation4"])) ? htmlspecialchars(addslashes($_POST["ValGlyCollation4"])) : "";
    $ValGlySoir4 = (isset($_POST["ValGlySoir4"])) ? htmlspecialchars(addslashes($_POST["ValGlySoir4"])) : "";
    $ValGlyAutre4 = (isset($_POST["ValGlyAutre4"])) ? htmlspecialchars(addslashes($_POST["ValGlyAutre4"])) : "";
    $ValGlycemique5 = (isset($_POST["ValGlycemique5"])) ? htmlspecialchars(addslashes($_POST["ValGlycemique5"])) : "";
    $ValGlyMatin5 = (isset($_POST["ValGlyMatin5"])) ? htmlspecialchars(addslashes($_POST["ValGlyMatin5"])) : "";
    $ValGlyMid5 = (isset($_POST["ValGlyMid5"])) ? htmlspecialchars(addslashes($_POST["ValGlyMid5"])) : "";
    $ValGlyCollation5 = (isset($_POST["ValGlyCollation5"])) ? htmlspecialchars(addslashes($_POST["ValGlyCollation5"])) : "";
    $ValGlySoir5 = (isset($_POST["ValGlySoir5"])) ? htmlspecialchars(addslashes($_POST["ValGlySoir5"])) : "";
    $ValGlyAutre5 = (isset($_POST["ValGlyAutre5"])) ? htmlspecialchars(addslashes($_POST["ValGlyAutre5"])) : "";
    $ValGlycemique6 = (isset($_POST["ValGlycemique6"])) ? htmlspecialchars(addslashes($_POST["ValGlycemique6"])) : "";
    $ValGlyMatin6 = (isset($_POST["ValGlyMatin6"])) ? htmlspecialchars(addslashes($_POST["ValGlyMatin6"])) : "";
    $ValGlyMid6 = (isset($_POST["ValGlyMid6"])) ? htmlspecialchars(addslashes($_POST["ValGlyMid6"])) : "";
    $ValGlyCollation6 = (isset($_POST["ValGlyCollation6"])) ? htmlspecialchars(addslashes($_POST["ValGlyCollation6"])) : "";
    $ValGlySoir6 = (isset($_POST["ValGlySoir6"])) ? htmlspecialchars(addslashes($_POST["ValGlySoir6"])) : "";
    $ValGlyAutre6 = (isset($_POST["ValGlyAutre6"])) ? htmlspecialchars(addslashes($_POST["ValGlyAutre6"])) : "";
    $ValGlycemique7 = (isset($_POST["ValGlycemique7"])) ? htmlspecialchars(addslashes($_POST["ValGlycemique7"])) : "";
    $ValGlyMatin7 = (isset($_POST["ValGlyMatin7"])) ? htmlspecialchars(addslashes($_POST["ValGlyMatin7"])) : "";
    $ValGlyMid7 = (isset($_POST["ValGlyMid7"])) ? htmlspecialchars(addslashes($_POST["ValGlyMid7"])) : "";
    $ValGlyCollation7 = (isset($_POST["ValGlyCollation7"])) ? htmlspecialchars(addslashes($_POST["ValGlyCollation7"])) : "";
    $ValGlySoir7 = (isset($_POST["ValGlySoir7"])) ? htmlspecialchars(addslashes($_POST["ValGlySoir7"])) : "";
    $ValGlyAutre7 = (isset($_POST["ValGlyAutre7"])) ? htmlspecialchars(addslashes($_POST["ValGlyAutre7"])) : "";
    $synthesecommentaire = (isset($_POST["synthesecommentaire"])) ? htmlspecialchars(addslashes($_POST["synthesecommentaire"])) : "";
    $objectifglycemiquepreprandial = (isset($_POST["objectifglycemiquepreprandial"])) ? htmlspecialchars(addslashes($_POST["objectifglycemiquepreprandial"])) : "";
    $objectifglycemiquepostprandial = (isset($_POST["objectifglycemiquepostprandial"])) ? htmlspecialchars(addslashes($_POST["objectifglycemiquepostprandial"])) : "";
    $ValDatesHemGlyc1 = (isset($_POST["ValDatesHemGlyc1"])) ? htmlspecialchars(addslashes($_POST["ValDatesHemGlyc1"])) : "";
    $ValDatesHemGlyc2 = (isset($_POST["ValDatesHemGlyc2"])) ? htmlspecialchars(addslashes($_POST["ValDatesHemGlyc2"])) : "";
    $ValDatesHemGlyc3 = (isset($_POST["ValDatesHemGlyc3"])) ? htmlspecialchars(addslashes($_POST["ValDatesHemGlyc3"])) : "";
    $ValDatesHemGlyc4 = (isset($_POST["ValDatesHemGlyc4"])) ? htmlspecialchars(addslashes($_POST["ValDatesHemGlyc4"])) : "";
    $ValDatesHemGlyc5 = (isset($_POST["ValDatesHemGlyc5"])) ? htmlspecialchars(addslashes($_POST["ValDatesHemGlyc5"])) : "";
    $ValDatesHemGlyc6 = (isset($_POST["ValDatesHemGlyc6"])) ? htmlspecialchars(addslashes($_POST["ValDatesHemGlyc6"])) : "";
    $ValDatesHemGlyc7 = (isset($_POST["ValDatesHemGlyc7"])) ? htmlspecialchars(addslashes($_POST["ValDatesHemGlyc7"])) : "";
    $ValDatesHemGlyc8 = (isset($_POST["ValDatesHemGlyc8"])) ? htmlspecialchars(addslashes($_POST["ValDatesHemGlyc8"])) : "";
    $ValDatesHemGlyc9 = (isset($_POST["ValDatesHemGlyc9"])) ? htmlspecialchars(addslashes($_POST["ValDatesHemGlyc9"])) : "";
    $ValHbA1cHemGlyc1 = (isset($_POST["ValHbA1cHemGlyc1"])) ? htmlspecialchars(addslashes($_POST["ValHbA1cHemGlyc1"])) : "";
    $ValHbA1cHemGlyc2 = (isset($_POST["ValHbA1cHemGlyc2"])) ? htmlspecialchars(addslashes($_POST["ValHbA1cHemGlyc2"])) : "";
    $ValHbA1cHemGlyc3 = (isset($_POST["ValHbA1cHemGlyc3"])) ? htmlspecialchars(addslashes($_POST["ValHbA1cHemGlyc3"])) : "";
    $ValHbA1cHemGlyc4 = (isset($_POST["ValHbA1cHemGlyc4"])) ? htmlspecialchars(addslashes($_POST["ValHbA1cHemGlyc4"])) : "";
    $ValHbA1cHemGlyc5 = (isset($_POST["ValHbA1cHemGlyc5"])) ? htmlspecialchars(addslashes($_POST["ValHbA1cHemGlyc5"])) : "";
    $ValHbA1cHemGlyc6 = (isset($_POST["ValHbA1cHemGlyc6"])) ? htmlspecialchars(addslashes($_POST["ValHbA1cHemGlyc6"])) : "";
    $ValHbA1cHemGlyc7 = (isset($_POST["ValHbA1cHemGlyc7"])) ? htmlspecialchars(addslashes($_POST["ValHbA1cHemGlyc7"])) : "";
    $ValHbA1cHemGlyc8 = (isset($_POST["ValHbA1cHemGlyc8"])) ? htmlspecialchars(addslashes($_POST["ValHbA1cHemGlyc8"])) : "";
    $ValHbA1cHemGlyc9 = (isset($_POST["ValHbA1cHemGlyc9"])) ? htmlspecialchars(addslashes($_POST["ValHbA1cHemGlyc9"])) : "";
    $Horaire5 = (isset($_POST["Horaire5"])) ? htmlspecialchars(addslashes($_POST["Horaire5"])) : "";
    $Horaire6 = (isset($_POST["Horaire6"])) ? htmlspecialchars(addslashes($_POST["Horaire6"])) : "";
    $Horaire7 = (isset($_POST["Horaire7"])) ? htmlspecialchars(addslashes($_POST["Horaire7"])) : "";
    $Horaire8 = (isset($_POST["Horaire8"])) ? htmlspecialchars(addslashes($_POST["Horaire8"])) : "";
    $Horaire9 = (isset($_POST["Horaire9"])) ? htmlspecialchars(addslashes($_POST["Horaire9"])) : "";
    $Horaire10 = (isset($_POST["Horaire10"])) ? htmlspecialchars(addslashes($_POST["Horaire10"])) : "";
    $Horaire11 = (isset($_POST["Horaire11"])) ? htmlspecialchars(addslashes($_POST["Horaire11"])) : "";
    $Horaire12 = (isset($_POST["Horaire12"])) ? htmlspecialchars(addslashes($_POST["Horaire12"])) : "";
    $Horaire13 = (isset($_POST["Horaire13"])) ? htmlspecialchars(addslashes($_POST["Horaire13"])) : "";
    $Horaire14 = (isset($_POST["Horaire14"])) ? htmlspecialchars(addslashes($_POST["Horaire14"])) : "";
    $Horaire15 = (isset($_POST["Horaire15"])) ? htmlspecialchars(addslashes($_POST["Horaire15"])) : "";
    $Horaire16 = (isset($_POST["Horaire16"])) ? htmlspecialchars(addslashes($_POST["Horaire16"])) : "";
    $Horaire17 = (isset($_POST["Horaire17"])) ? htmlspecialchars(addslashes($_POST["Horaire17"])) : "";
    $Horaire18 = (isset($_POST["Horaire18"])) ? htmlspecialchars(addslashes($_POST["Horaire18"])) : "";
    $Horaire19 = (isset($_POST["Horaire19"])) ? htmlspecialchars(addslashes($_POST["Horaire19"])) : "";
    $Horaire20 = (isset($_POST["Horaire20"])) ? htmlspecialchars(addslashes($_POST["Horaire20"])) : "";
    $Horaire21 = (isset($_POST["Horaire21"])) ? htmlspecialchars(addslashes($_POST["Horaire21"])) : "";
    $Horaire22 = (isset($_POST["Horaire22"])) ? htmlspecialchars(addslashes($_POST["Horaire22"])) : "";
    $Horaire23 = (isset($_POST["Horaire23"])) ? htmlspecialchars(addslashes($_POST["Horaire23"])) : "";
    $Horaire24 = (isset($_POST["Horaire24"])) ? htmlspecialchars(addslashes($_POST["Horaire24"])) : "";
    $Horaire25 = (isset($_POST["Horaire25"])) ? htmlspecialchars(addslashes($_POST["Horaire25"])) : "";
    $Horaire26 = (isset($_POST["Horaire26"])) ? htmlspecialchars(addslashes($_POST["Horaire26"])) : "";
    $Horaire27 = (isset($_POST["Horaire27"])) ? htmlspecialchars(addslashes($_POST["Horaire27"])) : "";
    $Horaire28 = (isset($_POST["Horaire28"])) ? htmlspecialchars(addslashes($_POST["Horaire28"])) : "";
    $Horaire29 = (isset($_POST["Horaire29"])) ? htmlspecialchars(addslashes($_POST["Horaire29"])) : "";
    $Horaire30 = (isset($_POST["Horaire30"])) ? htmlspecialchars(addslashes($_POST["Horaire30"])) : "";
    $Horaire31 = (isset($_POST["Horaire31"])) ? htmlspecialchars(addslashes($_POST["Horaire31"])) : "";
    $Horaire32 = (isset($_POST["Horaire32"])) ? htmlspecialchars(addslashes($_POST["Horaire32"])) : "";
    $Horaire33 = (isset($_POST["Horaire33"])) ? htmlspecialchars(addslashes($_POST["Horaire33"])) : "";
    $Horaire34 = (isset($_POST["Horaire34"])) ? htmlspecialchars(addslashes($_POST["Horaire34"])) : "";
    $Horaire35 = (isset($_POST["Horaire35"])) ? htmlspecialchars(addslashes($_POST["Horaire35"])) : "";
    $Horaire36 = (isset($_POST["Horaire36"])) ? htmlspecialchars(addslashes($_POST["Horaire36"])) : "";
    $Horaire37 = (isset($_POST["Horaire37"])) ? htmlspecialchars(addslashes($_POST["Horaire37"])) : "";
    $Horaire38 = (isset($_POST["Horaire38"])) ? htmlspecialchars(addslashes($_POST["Horaire38"])) : "";
    $Horaire39 = (isset($_POST["Horaire39"])) ? htmlspecialchars(addslashes($_POST["Horaire39"])) : "";
    $Horaire40 = (isset($_POST["Horaire40"])) ? htmlspecialchars(addslashes($_POST["Horaire40"])) : "";
    $Horaire41 = (isset($_POST["Horaire41"])) ? htmlspecialchars(addslashes($_POST["Horaire41"])) : "";
    $Horaire42 = (isset($_POST["Horaire42"])) ? htmlspecialchars(addslashes($_POST["Horaire42"])) : "";
    $Horaire43 = (isset($_POST["Horaire43"])) ? htmlspecialchars(addslashes($_POST["Horaire43"])) : "";
    $Horaire44 = (isset($_POST["Horaire44"])) ? htmlspecialchars(addslashes($_POST["Horaire44"])) : "";
    $Horaire45 = (isset($_POST["Horaire45"])) ? htmlspecialchars(addslashes($_POST["Horaire45"])) : "";
    $Horaire46 = (isset($_POST["Horaire46"])) ? htmlspecialchars(addslashes($_POST["Horaire46"])) : "";
    $Horaire47 = (isset($_POST["Horaire47"])) ? htmlspecialchars(addslashes($_POST["Horaire47"])) : "";
    $Horaire48 = (isset($_POST["Horaire48"])) ? htmlspecialchars(addslashes($_POST["Horaire48"])) : "";
    $Horaire49 = (isset($_POST["Horaire49"])) ? htmlspecialchars(addslashes($_POST["Horaire49"])) : "";
    $Horaire50 = (isset($_POST["Horaire50"])) ? htmlspecialchars(addslashes($_POST["Horaire50"])) : "";
    $Horaire51 = (isset($_POST["Horaire51"])) ? htmlspecialchars(addslashes($_POST["Horaire51"])) : "";
    $Horaire52 = (isset($_POST["Horaire52"])) ? htmlspecialchars(addslashes($_POST["Horaire52"])) : "";
    $Horaire53 = (isset($_POST["Horaire53"])) ? htmlspecialchars(addslashes($_POST["Horaire53"])) : "";
    $Horaire54 = (isset($_POST["Horaire54"])) ? htmlspecialchars(addslashes($_POST["Horaire54"])) : "";
    $Horaire55 = (isset($_POST["Horaire55"])) ? htmlspecialchars(addslashes($_POST["Horaire55"])) : "";
    $Horaire56 = (isset($_POST["Horaire56"])) ? htmlspecialchars(addslashes($_POST["Horaire56"])) : "";
    $Horaire57 = (isset($_POST["Horaire57"])) ? htmlspecialchars(addslashes($_POST["Horaire57"])) : "";
    $Horaire58 = (isset($_POST["Horaire58"])) ? htmlspecialchars(addslashes($_POST["Horaire58"])) : "";
    $Horaire59 = (isset($_POST["Horaire59"])) ? htmlspecialchars(addslashes($_POST["Horaire59"])) : "";
    $Horaire60 = (isset($_POST["Horaire60"])) ? htmlspecialchars(addslashes($_POST["Horaire60"])) : "";
    $Horaire61 = (isset($_POST["Horaire61"])) ? htmlspecialchars(addslashes($_POST["Horaire61"])) : "";
    $Horaire62 = (isset($_POST["Horaire62"])) ? htmlspecialchars(addslashes($_POST["Horaire62"])) : "";
    $Horaire63 = (isset($_POST["Horaire63"])) ? htmlspecialchars(addslashes($_POST["Horaire63"])) : "";
    $Horaire64 = (isset($_POST["Horaire64"])) ? htmlspecialchars(addslashes($_POST["Horaire64"])) : "";
    $Horaire65 = (isset($_POST["Horaire65"])) ? htmlspecialchars(addslashes($_POST["Horaire65"])) : "";
    $Horaire66 = (isset($_POST["Horaire66"])) ? htmlspecialchars(addslashes($_POST["Horaire66"])) : "";
    $Horaire67 = (isset($_POST["Horaire67"])) ? htmlspecialchars(addslashes($_POST["Horaire67"])) : "";
    $Horaire68 = (isset($_POST["Horaire68"])) ? htmlspecialchars(addslashes($_POST["Horaire68"])) : "";
    $Horaire69 = (isset($_POST["Horaire69"])) ? htmlspecialchars(addslashes($_POST["Horaire69"])) : "";
    $Horaire70 = (isset($_POST["Horaire70"])) ? htmlspecialchars(addslashes($_POST["Horaire70"])) : "";
    $Horaire71 = (isset($_POST["Horaire71"])) ? htmlspecialchars(addslashes($_POST["Horaire71"])) : "";
    $Horaire72 = (isset($_POST["Horaire72"])) ? htmlspecialchars(addslashes($_POST["Horaire72"])) : "";
    $Horaire73 = (isset($_POST["Horaire73"])) ? htmlspecialchars(addslashes($_POST["Horaire73"])) : "";
    $Horaire74 = (isset($_POST["Horaire74"])) ? htmlspecialchars(addslashes($_POST["Horaire74"])) : "";
    $Horaire75 = (isset($_POST["Horaire75"])) ? htmlspecialchars(addslashes($_POST["Horaire75"])) : "";
    $Horaire76 = (isset($_POST["Horaire76"])) ? htmlspecialchars(addslashes($_POST["Horaire76"])) : "";
    $Horaire77 = (isset($_POST["Horaire77"])) ? htmlspecialchars(addslashes($_POST["Horaire77"])) : "";
    $Horaire78 = (isset($_POST["Horaire78"])) ? htmlspecialchars(addslashes($_POST["Horaire78"])) : "";
    $Horaire79 = (isset($_POST["Horaire79"])) ? htmlspecialchars(addslashes($_POST["Horaire79"])) : "";
    $Horaire80 = (isset($_POST["Horaire80"])) ? htmlspecialchars(addslashes($_POST["Horaire80"])) : "";
    $Horaire81 = (isset($_POST["Horaire81"])) ? htmlspecialchars(addslashes($_POST["Horaire81"])) : "";
    $Horaire82 = (isset($_POST["Horaire82"])) ? htmlspecialchars(addslashes($_POST["Horaire82"])) : "";
    $Horaire83 = (isset($_POST["Horaire83"])) ? htmlspecialchars(addslashes($_POST["Horaire83"])) : "";
    $Horaire84 = (isset($_POST["Horaire84"])) ? htmlspecialchars(addslashes($_POST["Horaire84"])) : "";
    $Horaire_5 = (isset($_POST["Horaire_5"])) ? htmlspecialchars(addslashes($_POST["Horaire_5"])) : "";
    $Horaire_6 = (isset($_POST["Horaire_6"])) ? htmlspecialchars(addslashes($_POST["Horaire_6"])) : "";
    $Horaire_7 = (isset($_POST["Horaire_7"])) ? htmlspecialchars(addslashes($_POST["Horaire_7"])) : "";
    $Horaire_8 = (isset($_POST["Horaire_8"])) ? htmlspecialchars(addslashes($_POST["Horaire_8"])) : "";
    $Horaire_9 = (isset($_POST["Horaire_9"])) ? htmlspecialchars(addslashes($_POST["Horaire_9"])) : "";
    $Horaire_10 = (isset($_POST["Horaire_10"])) ? htmlspecialchars(addslashes($_POST["Horaire_10"])) : "";
    $Horaire_11 = (isset($_POST["Horaire_11"])) ? htmlspecialchars(addslashes($_POST["Horaire_11"])) : "";
    $Horaire_12 = (isset($_POST["Horaire_12"])) ? htmlspecialchars(addslashes($_POST["Horaire_12"])) : "";
    $Horaire_13 = (isset($_POST["Horaire_13"])) ? htmlspecialchars(addslashes($_POST["Horaire_13"])) : "";
    $Horaire_14 = (isset($_POST["Horaire_14"])) ? htmlspecialchars(addslashes($_POST["Horaire_14"])) : "";
    $Horaire_15 = (isset($_POST["Horaire_15"])) ? htmlspecialchars(addslashes($_POST["Horaire_15"])) : "";
    $Horaire_16 = (isset($_POST["Horaire_16"])) ? htmlspecialchars(addslashes($_POST["Horaire_16"])) : "";
    $Horaire_17 = (isset($_POST["Horaire_17"])) ? htmlspecialchars(addslashes($_POST["Horaire_17"])) : "";
    $Horaire_18 = (isset($_POST["Horaire_18"])) ? htmlspecialchars(addslashes($_POST["Horaire_18"])) : "";
    $Horaire_19 = (isset($_POST["Horaire_19"])) ? htmlspecialchars(addslashes($_POST["Horaire_19"])) : "";
    $Horaire_20 = (isset($_POST["Horaire_20"])) ? htmlspecialchars(addslashes($_POST["Horaire_20"])) : "";
    $Horaire_21 = (isset($_POST["Horaire_21"])) ? htmlspecialchars(addslashes($_POST["Horaire_21"])) : "";
    $Horaire_22 = (isset($_POST["Horaire_22"])) ? htmlspecialchars(addslashes($_POST["Horaire_22"])) : "";
    $Horaire_23 = (isset($_POST["Horaire_23"])) ? htmlspecialchars(addslashes($_POST["Horaire_23"])) : "";
    $Horaire_24 = (isset($_POST["Horaire_24"])) ? htmlspecialchars(addslashes($_POST["Horaire_24"])) : "";
    $Horaire_25 = (isset($_POST["Horaire_25"])) ? htmlspecialchars(addslashes($_POST["Horaire_25"])) : "";
    $Horaire_26 = (isset($_POST["Horaire_26"])) ? htmlspecialchars(addslashes($_POST["Horaire_26"])) : "";
    $Horaire_27 = (isset($_POST["Horaire_27"])) ? htmlspecialchars(addslashes($_POST["Horaire_27"])) : "";
    $Horaire_28 = (isset($_POST["Horaire_28"])) ? htmlspecialchars(addslashes($_POST["Horaire_28"])) : "";
    $Horaire_29 = (isset($_POST["Horaire_29"])) ? htmlspecialchars(addslashes($_POST["Horaire_29"])) : "";
    $Horaire_30 = (isset($_POST["Horaire_30"])) ? htmlspecialchars(addslashes($_POST["Horaire_30"])) : "";
    $Horaire_31 = (isset($_POST["Horaire_31"])) ? htmlspecialchars(addslashes($_POST["Horaire_31"])) : "";
    $Horaire_32 = (isset($_POST["Horaire_32"])) ? htmlspecialchars(addslashes($_POST["Horaire_32"])) : "";
    $Horaire_33 = (isset($_POST["Horaire_33"])) ? htmlspecialchars(addslashes($_POST["Horaire_33"])) : "";
    $Horaire_34 = (isset($_POST["Horaire_34"])) ? htmlspecialchars(addslashes($_POST["Horaire_34"])) : "";
    $Horaire_35 = (isset($_POST["Horaire_35"])) ? htmlspecialchars(addslashes($_POST["Horaire_35"])) : "";
    $Horaire_36 = (isset($_POST["Horaire_36"])) ? htmlspecialchars(addslashes($_POST["Horaire_36"])) : "";
    $Horaire_37 = (isset($_POST["Horaire_37"])) ? htmlspecialchars(addslashes($_POST["Horaire_37"])) : "";
    $Horaire_38 = (isset($_POST["Horaire_38"])) ? htmlspecialchars(addslashes($_POST["Horaire_38"])) : "";
    $Horaire_39 = (isset($_POST["Horaire_39"])) ? htmlspecialchars(addslashes($_POST["Horaire_39"])) : "";
    $Horaire_40 = (isset($_POST["Horaire_40"])) ? htmlspecialchars(addslashes($_POST["Horaire_40"])) : "";
    $Horaire_41 = (isset($_POST["Horaire_41"])) ? htmlspecialchars(addslashes($_POST["Horaire_41"])) : "";
    $Horaire_42 = (isset($_POST["Horaire_42"])) ? htmlspecialchars(addslashes($_POST["Horaire_42"])) : "";
    $Horaire_43 = (isset($_POST["Horaire_43"])) ? htmlspecialchars(addslashes($_POST["Horaire_43"])) : "";
    $Horaire_44 = (isset($_POST["Horaire_44"])) ? htmlspecialchars(addslashes($_POST["Horaire_44"])) : "";
    $Horaire_45 = (isset($_POST["Horaire_45"])) ? htmlspecialchars(addslashes($_POST["Horaire_45"])) : "";
    $Horaire_46 = (isset($_POST["Horaire_46"])) ? htmlspecialchars(addslashes($_POST["Horaire_46"])) : "";
    $Horaire_47 = (isset($_POST["Horaire_47"])) ? htmlspecialchars(addslashes($_POST["Horaire_47"])) : "";
    $Horaire_48 = (isset($_POST["Horaire_48"])) ? htmlspecialchars(addslashes($_POST["Horaire_48"])) : "";
    $Horaire_49 = (isset($_POST["Horaire_49"])) ? htmlspecialchars(addslashes($_POST["Horaire_49"])) : "";
    $Horaire_50 = (isset($_POST["Horaire_50"])) ? htmlspecialchars(addslashes($_POST["Horaire_50"])) : "";
    $Horaire_51 = (isset($_POST["Horaire_51"])) ? htmlspecialchars(addslashes($_POST["Horaire_51"])) : "";
    $Horaire_52 = (isset($_POST["Horaire_52"])) ? htmlspecialchars(addslashes($_POST["Horaire_52"])) : "";
    $Horaire_53 = (isset($_POST["Horaire_53"])) ? htmlspecialchars(addslashes($_POST["Horaire_53"])) : "";
    $Horaire_54 = (isset($_POST["Horaire_54"])) ? htmlspecialchars(addslashes($_POST["Horaire_54"])) : "";
    $Horaire_55 = (isset($_POST["Horaire_55"])) ? htmlspecialchars(addslashes($_POST["Horaire_55"])) : "";
    $Horaire_56 = (isset($_POST["Horaire_56"])) ? htmlspecialchars(addslashes($_POST["Horaire_56"])) : "";
    $Horaire_57 = (isset($_POST["Horaire_57"])) ? htmlspecialchars(addslashes($_POST["Horaire_57"])) : "";
    $Horaire_58 = (isset($_POST["Horaire_58"])) ? htmlspecialchars(addslashes($_POST["Horaire_58"])) : "";
    $Horaire_59 = (isset($_POST["Horaire_59"])) ? htmlspecialchars(addslashes($_POST["Horaire_59"])) : "";
    $Horaire_60 = (isset($_POST["Horaire_60"])) ? htmlspecialchars(addslashes($_POST["Horaire_60"])) : "";
    $Horaire_61 = (isset($_POST["Horaire_61"])) ? htmlspecialchars(addslashes($_POST["Horaire_61"])) : "";
    $Horaire_62 = (isset($_POST["Horaire_62"])) ? htmlspecialchars(addslashes($_POST["Horaire_62"])) : "";
    $Horaire_63 = (isset($_POST["Horaire_63"])) ? htmlspecialchars(addslashes($_POST["Horaire_63"])) : "";
    $Horaire_64 = (isset($_POST["Horaire_64"])) ? htmlspecialchars(addslashes($_POST["Horaire_64"])) : "";
    $Horaire_65 = (isset($_POST["Horaire_65"])) ? htmlspecialchars(addslashes($_POST["Horaire_65"])) : "";
    $Horaire_66 = (isset($_POST["Horaire_66"])) ? htmlspecialchars(addslashes($_POST["Horaire_66"])) : "";
    $Horaire_67 = (isset($_POST["Horaire_67"])) ? htmlspecialchars(addslashes($_POST["Horaire_67"])) : "";
    $Horaire_68 = (isset($_POST["Horaire_68"])) ? htmlspecialchars(addslashes($_POST["Horaire_68"])) : "";
    $Horaire_69 = (isset($_POST["Horaire_69"])) ? htmlspecialchars(addslashes($_POST["Horaire_69"])) : "";
    $Horaire_70 = (isset($_POST["Horaire_70"])) ? htmlspecialchars(addslashes($_POST["Horaire_70"])) : "";
    $Horaire_71 = (isset($_POST["Horaire_71"])) ? htmlspecialchars(addslashes($_POST["Horaire_71"])) : "";
    $Horaire_72 = (isset($_POST["Horaire_72"])) ? htmlspecialchars(addslashes($_POST["Horaire_72"])) : "";
    $Horaire_73 = (isset($_POST["Horaire_73"])) ? htmlspecialchars(addslashes($_POST["Horaire_73"])) : "";
    $Horaire_74 = (isset($_POST["Horaire_74"])) ? htmlspecialchars(addslashes($_POST["Horaire_74"])) : "";
    $Horaire_75 = (isset($_POST["Horaire_75"])) ? htmlspecialchars(addslashes($_POST["Horaire_75"])) : "";
    $Horaire_76 = (isset($_POST["Horaire_76"])) ? htmlspecialchars(addslashes($_POST["Horaire_76"])) : "";
    $Horaire_77 = (isset($_POST["Horaire_77"])) ? htmlspecialchars(addslashes($_POST["Horaire_77"])) : "";
    $Horaire_78 = (isset($_POST["Horaire_78"])) ? htmlspecialchars(addslashes($_POST["Horaire_78"])) : "";
    $Horaire_79 = (isset($_POST["Horaire_79"])) ? htmlspecialchars(addslashes($_POST["Horaire_79"])) : "";
    $Horaire_80 = (isset($_POST["Horaire_80"])) ? htmlspecialchars(addslashes($_POST["Horaire_80"])) : "";
    $Horaire_81 = (isset($_POST["Horaire_81"])) ? htmlspecialchars(addslashes($_POST["Horaire_81"])) : "";
    $Horaire_82 = (isset($_POST["Horaire_82"])) ? htmlspecialchars(addslashes($_POST["Horaire_82"])) : "";
    $Horaire_83 = (isset($_POST["Horaire_83"])) ? htmlspecialchars(addslashes($_POST["Horaire_83"])) : "";
    $Horaire_84 = (isset($_POST["Horaire_84"])) ? htmlspecialchars(addslashes($_POST["Horaire_84"])) : "";
    $Debit5 = (isset($_POST["Debit5"])) ? htmlspecialchars(addslashes($_POST["Debit5"])) : "";
    $Debit6 = (isset($_POST["Debit6"])) ? htmlspecialchars(addslashes($_POST["Debit6"])) : "";
    $Debit7 = (isset($_POST["Debit7"])) ? htmlspecialchars(addslashes($_POST["Debit7"])) : "";
    $Debit8 = (isset($_POST["Debit8"])) ? htmlspecialchars(addslashes($_POST["Debit8"])) : "";
    $Debit9 = (isset($_POST["Debit9"])) ? htmlspecialchars(addslashes($_POST["Debit9"])) : "";
    $Debit10 = (isset($_POST["Debit10"])) ? htmlspecialchars(addslashes($_POST["Debit10"])) : "";
    $Debit11 = (isset($_POST["Debit11"])) ? htmlspecialchars(addslashes($_POST["Debit11"])) : "";
    $Debit12 = (isset($_POST["Debit12"])) ? htmlspecialchars(addslashes($_POST["Debit12"])) : "";
    $Debit13 = (isset($_POST["Debit13"])) ? htmlspecialchars(addslashes($_POST["Debit13"])) : "";
    $Debit14 = (isset($_POST["Debit14"])) ? htmlspecialchars(addslashes($_POST["Debit14"])) : "";
    $Debit15 = (isset($_POST["Debit15"])) ? htmlspecialchars(addslashes($_POST["Debit15"])) : "";
    $Debit16 = (isset($_POST["Debit16"])) ? htmlspecialchars(addslashes($_POST["Debit16"])) : "";
    $Debit17 = (isset($_POST["Debit17"])) ? htmlspecialchars(addslashes($_POST["Debit17"])) : "";
    $Debit18 = (isset($_POST["Debit18"])) ? htmlspecialchars(addslashes($_POST["Debit18"])) : "";
    $Debit19 = (isset($_POST["Debit19"])) ? htmlspecialchars(addslashes($_POST["Debit19"])) : "";
    $Debit20 = (isset($_POST["Debit20"])) ? htmlspecialchars(addslashes($_POST["Debit20"])) : "";
    $Debit21 = (isset($_POST["Debit21"])) ? htmlspecialchars(addslashes($_POST["Debit21"])) : "";
    $Debit22 = (isset($_POST["Debit22"])) ? htmlspecialchars(addslashes($_POST["Debit22"])) : "";
    $Debit23 = (isset($_POST["Debit23"])) ? htmlspecialchars(addslashes($_POST["Debit23"])) : "";
    $Debit24 = (isset($_POST["Debit24"])) ? htmlspecialchars(addslashes($_POST["Debit24"])) : "";
    $Debit25 = (isset($_POST["Debit25"])) ? htmlspecialchars(addslashes($_POST["Debit25"])) : "";
    $Debit26 = (isset($_POST["Debit26"])) ? htmlspecialchars(addslashes($_POST["Debit26"])) : "";
    $Debit27 = (isset($_POST["Debit27"])) ? htmlspecialchars(addslashes($_POST["Debit27"])) : "";
    $Debit28 = (isset($_POST["Debit28"])) ? htmlspecialchars(addslashes($_POST["Debit28"])) : "";
    $Debit29 = (isset($_POST["Debit29"])) ? htmlspecialchars(addslashes($_POST["Debit29"])) : "";
    $Debit30 = (isset($_POST["Debit30"])) ? htmlspecialchars(addslashes($_POST["Debit30"])) : "";
    $Debit31 = (isset($_POST["Debit31"])) ? htmlspecialchars(addslashes($_POST["Debit31"])) : "";
    $Debit32 = (isset($_POST["Debit32"])) ? htmlspecialchars(addslashes($_POST["Debit32"])) : "";
    $Debit33 = (isset($_POST["Debit33"])) ? htmlspecialchars(addslashes($_POST["Debit33"])) : "";
    $Debit34 = (isset($_POST["Debit34"])) ? htmlspecialchars(addslashes($_POST["Debit34"])) : "";
    $Debit35 = (isset($_POST["Debit35"])) ? htmlspecialchars(addslashes($_POST["Debit35"])) : "";
    $Debit36 = (isset($_POST["Debit36"])) ? htmlspecialchars(addslashes($_POST["Debit36"])) : "";
    $Debit37 = (isset($_POST["Debit37"])) ? htmlspecialchars(addslashes($_POST["Debit37"])) : "";
    $Debit38 = (isset($_POST["Debit38"])) ? htmlspecialchars(addslashes($_POST["Debit38"])) : "";
    $Debit39 = (isset($_POST["Debit39"])) ? htmlspecialchars(addslashes($_POST["Debit39"])) : "";
    $Debit40 = (isset($_POST["Debit40"])) ? htmlspecialchars(addslashes($_POST["Debit40"])) : "";
    $Debit41 = (isset($_POST["Debit41"])) ? htmlspecialchars(addslashes($_POST["Debit41"])) : "";
    $Debit42 = (isset($_POST["Debit42"])) ? htmlspecialchars(addslashes($_POST["Debit42"])) : "";
    $Debit43 = (isset($_POST["Debit43"])) ? htmlspecialchars(addslashes($_POST["Debit43"])) : "";
    $Debit44 = (isset($_POST["Debit44"])) ? htmlspecialchars(addslashes($_POST["Debit44"])) : "";
    $Debit_5 = (isset($_POST["Debit_5"])) ? htmlspecialchars(addslashes($_POST["Debit_5"])) : "";
    $Debit_6 = (isset($_POST["Debit_6"])) ? htmlspecialchars(addslashes($_POST["Debit_6"])) : "";
    $Debit_7 = (isset($_POST["Debit_7"])) ? htmlspecialchars(addslashes($_POST["Debit_7"])) : "";
    $Debit_8 = (isset($_POST["Debit_8"])) ? htmlspecialchars(addslashes($_POST["Debit_8"])) : "";
    $Debit_9 = (isset($_POST["Debit_9"])) ? htmlspecialchars(addslashes($_POST["Debit_9"])) : "";
    $Debit_10 = (isset($_POST["Debit_10"])) ? htmlspecialchars(addslashes($_POST["Debit_10"])) : "";
    $Debit_11 = (isset($_POST["Debit_11"])) ? htmlspecialchars(addslashes($_POST["Debit_11"])) : "";
    $Debit_12 = (isset($_POST["Debit_12"])) ? htmlspecialchars(addslashes($_POST["Debit_12"])) : "";
    $Debit_13 = (isset($_POST["Debit_13"])) ? htmlspecialchars(addslashes($_POST["Debit_13"])) : "";
    $Debit_14 = (isset($_POST["Debit_14"])) ? htmlspecialchars(addslashes($_POST["Debit_14"])) : "";
    $Debit_15 = (isset($_POST["Debit_15"])) ? htmlspecialchars(addslashes($_POST["Debit_15"])) : "";
    $Debit_16 = (isset($_POST["Debit_16"])) ? htmlspecialchars(addslashes($_POST["Debit_16"])) : "";
    $Debit_17 = (isset($_POST["Debit_17"])) ? htmlspecialchars(addslashes($_POST["Debit_17"])) : "";
    $Debit_18 = (isset($_POST["Debit_18"])) ? htmlspecialchars(addslashes($_POST["Debit_18"])) : "";
    $Debit_19 = (isset($_POST["Debit_19"])) ? htmlspecialchars(addslashes($_POST["Debit_19"])) : "";
    $Debit_20 = (isset($_POST["Debit_20"])) ? htmlspecialchars(addslashes($_POST["Debit_20"])) : "";
    $Debit_21 = (isset($_POST["Debit_21"])) ? htmlspecialchars(addslashes($_POST["Debit_21"])) : "";
    $Debit_22 = (isset($_POST["Debit_22"])) ? htmlspecialchars(addslashes($_POST["Debit_22"])) : "";
    $Debit_23 = (isset($_POST["Debit_23"])) ? htmlspecialchars(addslashes($_POST["Debit_23"])) : "";
    $Debit_24 = (isset($_POST["Debit_24"])) ? htmlspecialchars(addslashes($_POST["Debit_24"])) : "";
    $Debit_25 = (isset($_POST["Debit_25"])) ? htmlspecialchars(addslashes($_POST["Debit_25"])) : "";
    $Debit_26 = (isset($_POST["Debit_26"])) ? htmlspecialchars(addslashes($_POST["Debit_26"])) : "";
    $Debit_27 = (isset($_POST["Debit_27"])) ? htmlspecialchars(addslashes($_POST["Debit_27"])) : "";
    $Debit_28 = (isset($_POST["Debit_28"])) ? htmlspecialchars(addslashes($_POST["Debit_28"])) : "";
    $Debit_29 = (isset($_POST["Debit_29"])) ? htmlspecialchars(addslashes($_POST["Debit_29"])) : "";
    $Debit_30 = (isset($_POST["Debit_30"])) ? htmlspecialchars(addslashes($_POST["Debit_30"])) : "";
    $Debit_31 = (isset($_POST["Debit_31"])) ? htmlspecialchars(addslashes($_POST["Debit_31"])) : "";
    $Debit_32 = (isset($_POST["Debit_32"])) ? htmlspecialchars(addslashes($_POST["Debit_32"])) : "";
    $Debit_33 = (isset($_POST["Debit_33"])) ? htmlspecialchars(addslashes($_POST["Debit_33"])) : "";
    $Debit_34 = (isset($_POST["Debit_34"])) ? htmlspecialchars(addslashes($_POST["Debit_34"])) : "";
    $Debit_35 = (isset($_POST["Debit_35"])) ? htmlspecialchars(addslashes($_POST["Debit_35"])) : "";
    $Debit_36 = (isset($_POST["Debit_36"])) ? htmlspecialchars(addslashes($_POST["Debit_36"])) : "";
    $Debit_37 = (isset($_POST["Debit_37"])) ? htmlspecialchars(addslashes($_POST["Debit_37"])) : "";
    $Debit_38 = (isset($_POST["Debit_38"])) ? htmlspecialchars(addslashes($_POST["Debit_38"])) : "";
    $Debit_39 = (isset($_POST["Debit_39"])) ? htmlspecialchars(addslashes($_POST["Debit_39"])) : "";
    $Debit_40 = (isset($_POST["Debit_40"])) ? htmlspecialchars(addslashes($_POST["Debit_40"])) : "";
    $Debit_41 = (isset($_POST["Debit_41"])) ? htmlspecialchars(addslashes($_POST["Debit_41"])) : "";
    $Debit_42 = (isset($_POST["Debit_42"])) ? htmlspecialchars(addslashes($_POST["Debit_42"])) : "";
    $Debit_43 = (isset($_POST["Debit_43"])) ? htmlspecialchars(addslashes($_POST["Debit_43"])) : "";
    $Debit_44 = (isset($_POST["Debit_44"])) ? htmlspecialchars(addslashes($_POST["Debit_44"])) : "";

    $glycemie1 = (isset($_POST["glycemie1"])) ? htmlspecialchars(addslashes($_POST["glycemie1"])) : "";
    $glycemie2 = (isset($_POST["glycemie2"])) ? htmlspecialchars(addslashes($_POST["glycemie2"])) : "";
    $glycemie3 = (isset($_POST["glycemie3"])) ? htmlspecialchars(addslashes($_POST["glycemie3"])) : "";
    $glycemie4 = (isset($_POST["glycemie4"])) ? htmlspecialchars(addslashes($_POST["glycemie4"])) : "";
    $glycemie5 = (isset($_POST["glycemie5"])) ? htmlspecialchars(addslashes($_POST["glycemie5"])) : "";
    $glycemie6 = (isset($_POST["glycemie6"])) ? htmlspecialchars(addslashes($_POST["glycemie6"])) : "";
    $glycemie7 = (isset($_POST["glycemie7"])) ? htmlspecialchars(addslashes($_POST["glycemie7"])) : "";
    $glycemie8 = (isset($_POST["glycemie8"])) ? htmlspecialchars(addslashes($_POST["glycemie8"])) : "";
    $glycemie9 = (isset($_POST["glycemie9"])) ? htmlspecialchars(addslashes($_POST["glycemie9"])) : "";
    $glycemie10 = (isset($_POST["glycemie10"])) ? htmlspecialchars(addslashes($_POST["glycemie10"])) : "";
    $glycemie11 = (isset($_POST["glycemie11"])) ? htmlspecialchars(addslashes($_POST["glycemie11"])) : "";
    $glycemie12 = (isset($_POST["glycemie12"])) ? htmlspecialchars(addslashes($_POST["glycemie12"])) : "";
    $glycemie13 = (isset($_POST["glycemie13"])) ? htmlspecialchars(addslashes($_POST["glycemie13"])) : "";
    $glycemie14 = (isset($_POST["glycemie14"])) ? htmlspecialchars(addslashes($_POST["glycemie14"])) : "";
    $glycemie15 = (isset($_POST["glycemie15"])) ? htmlspecialchars(addslashes($_POST["glycemie15"])) : "";
    $glycemie16 = (isset($_POST["glycemie16"])) ? htmlspecialchars(addslashes($_POST["glycemie16"])) : "";
    $glycemie17 = (isset($_POST["glycemie17"])) ? htmlspecialchars(addslashes($_POST["glycemie17"])) : "";
    $glycemie18 = (isset($_POST["glycemie18"])) ? htmlspecialchars(addslashes($_POST["glycemie18"])) : "";
    $glycemie19 = (isset($_POST["glycemie19"])) ? htmlspecialchars(addslashes($_POST["glycemie19"])) : "";
    $glycemie20 = (isset($_POST["glycemie20"])) ? htmlspecialchars(addslashes($_POST["glycemie20"])) : "";
    $glycemie21 = (isset($_POST["glycemie21"])) ? htmlspecialchars(addslashes($_POST["glycemie21"])) : "";
    $glycemie22 = (isset($_POST["glycemie22"])) ? htmlspecialchars(addslashes($_POST["glycemie22"])) : "";
    $glycemie23 = (isset($_POST["glycemie23"])) ? htmlspecialchars(addslashes($_POST["glycemie23"])) : "";
    $glycemie24 = (isset($_POST["glycemie24"])) ? htmlspecialchars(addslashes($_POST["glycemie24"])) : "";
    $glycemie25 = (isset($_POST["glycemie25"])) ? htmlspecialchars(addslashes($_POST["glycemie25"])) : "";
    $glycemie26 = (isset($_POST["glycemie26"])) ? htmlspecialchars(addslashes($_POST["glycemie26"])) : "";
    $glycemie27 = (isset($_POST["glycemie27"])) ? htmlspecialchars(addslashes($_POST["glycemie27"])) : "";
    $glycemie28 = (isset($_POST["glycemie28"])) ? htmlspecialchars(addslashes($_POST["glycemie28"])) : "";
    $glycemie29 = (isset($_POST["glycemie29"])) ? htmlspecialchars(addslashes($_POST["glycemie29"])) : "";
    $glycemie30 = (isset($_POST["glycemie30"])) ? htmlspecialchars(addslashes($_POST["glycemie30"])) : "";
    $glycemie31 = (isset($_POST["glycemie31"])) ? htmlspecialchars(addslashes($_POST["glycemie31"])) : "";
    $glycemie32 = (isset($_POST["glycemie32"])) ? htmlspecialchars(addslashes($_POST["glycemie32"])) : "";
    $glycemie33 = (isset($_POST["glycemie33"])) ? htmlspecialchars(addslashes($_POST["glycemie33"])) : "";
    $glycemie34 = (isset($_POST["glycemie34"])) ? htmlspecialchars(addslashes($_POST["glycemie34"])) : "";
    $glycemie35 = (isset($_POST["glycemie35"])) ? htmlspecialchars(addslashes($_POST["glycemie35"])) : "";
    $glycemie36 = (isset($_POST["glycemie36"])) ? htmlspecialchars(addslashes($_POST["glycemie36"])) : "";
    $glycemie37 = (isset($_POST["glycemie37"])) ? htmlspecialchars(addslashes($_POST["glycemie37"])) : "";
    $glycemie38 = (isset($_POST["glycemie38"])) ? htmlspecialchars(addslashes($_POST["glycemie38"])) : "";
    $glycemie39 = (isset($_POST["glycemie39"])) ? htmlspecialchars(addslashes($_POST["glycemie39"])) : "";
    $glycemie40 = (isset($_POST["glycemie40"])) ? htmlspecialchars(addslashes($_POST["glycemie40"])) : "";
    $glycemie41 = (isset($_POST["glycemie41"])) ? htmlspecialchars(addslashes($_POST["glycemie41"])) : "";
    $glycemie42 = (isset($_POST["glycemie42"])) ? htmlspecialchars(addslashes($_POST["glycemie42"])) : "";
    $glycemie43 = (isset($_POST["glycemie43"])) ? htmlspecialchars(addslashes($_POST["glycemie43"])) : "";
    $glycemie44 = (isset($_POST["glycemie44"])) ? htmlspecialchars(addslashes($_POST["glycemie44"])) : "";
    $glycemie45 = (isset($_POST["glycemie45"])) ? htmlspecialchars(addslashes($_POST["glycemie45"])) : "";
    $glycemie46 = (isset($_POST["glycemie46"])) ? htmlspecialchars(addslashes($_POST["glycemie46"])) : "";
    $glycemie47 = (isset($_POST["glycemie47"])) ? htmlspecialchars(addslashes($_POST["glycemie47"])) : "";
    $glycemie48 = (isset($_POST["glycemie48"])) ? htmlspecialchars(addslashes($_POST["glycemie48"])) : "";
    $glycemie49 = (isset($_POST["glycemie49"])) ? htmlspecialchars(addslashes($_POST["glycemie49"])) : "";
    $glycemie50 = (isset($_POST["glycemie50"])) ? htmlspecialchars(addslashes($_POST["glycemie50"])) : "";
    $glycemie51 = (isset($_POST["glycemie51"])) ? htmlspecialchars(addslashes($_POST["glycemie51"])) : "";
    $glycemie52 = (isset($_POST["glycemie52"])) ? htmlspecialchars(addslashes($_POST["glycemie52"])) : "";
    $glycemie53 = (isset($_POST["glycemie53"])) ? htmlspecialchars(addslashes($_POST["glycemie53"])) : "";
    $glycemie54 = (isset($_POST["glycemie54"])) ? htmlspecialchars(addslashes($_POST["glycemie54"])) : "";
    $glycemie55 = (isset($_POST["glycemie55"])) ? htmlspecialchars(addslashes($_POST["glycemie55"])) : "";
    $glycemie56 = (isset($_POST["glycemie56"])) ? htmlspecialchars(addslashes($_POST["glycemie56"])) : "";
    $glycemie57 = (isset($_POST["glycemie57"])) ? htmlspecialchars(addslashes($_POST["glycemie57"])) : "";
    $glycemie58 = (isset($_POST["glycemie58"])) ? htmlspecialchars(addslashes($_POST["glycemie58"])) : "";
    $glycemie59 = (isset($_POST["glycemie59"])) ? htmlspecialchars(addslashes($_POST["glycemie59"])) : "";
    $glycemie60 = (isset($_POST["glycemie60"])) ? htmlspecialchars(addslashes($_POST["glycemie60"])) : "";
    $glycemie61 = (isset($_POST["glycemie61"])) ? htmlspecialchars(addslashes($_POST["glycemie61"])) : "";
    $glycemie62 = (isset($_POST["glycemie62"])) ? htmlspecialchars(addslashes($_POST["glycemie62"])) : "";
    $glycemie63 = (isset($_POST["glycemie63"])) ? htmlspecialchars(addslashes($_POST["glycemie63"])) : "";
    $glycemie64 = (isset($_POST["glycemie64"])) ? htmlspecialchars(addslashes($_POST["glycemie64"])) : "";
    $glycemie65 = (isset($_POST["glycemie65"])) ? htmlspecialchars(addslashes($_POST["glycemie65"])) : "";
    $glycemie66 = (isset($_POST["glycemie66"])) ? htmlspecialchars(addslashes($_POST["glycemie66"])) : "";
    $glycemie67 = (isset($_POST["glycemie67"])) ? htmlspecialchars(addslashes($_POST["glycemie67"])) : "";
    $glycemie68 = (isset($_POST["glycemie68"])) ? htmlspecialchars(addslashes($_POST["glycemie68"])) : "";
    $glycemie69 = (isset($_POST["glycemie69"])) ? htmlspecialchars(addslashes($_POST["glycemie69"])) : "";
    $glycemie70 = (isset($_POST["glycemie70"])) ? htmlspecialchars(addslashes($_POST["glycemie70"])) : "";
    $glycemie71 = (isset($_POST["glycemie71"])) ? htmlspecialchars(addslashes($_POST["glycemie71"])) : "";
    $glycemie72 = (isset($_POST["glycemie72"])) ? htmlspecialchars(addslashes($_POST["glycemie72"])) : "";
    $glycemie73 = (isset($_POST["glycemie73"])) ? htmlspecialchars(addslashes($_POST["glycemie73"])) : "";
    $glycemie74 = (isset($_POST["glycemie74"])) ? htmlspecialchars(addslashes($_POST["glycemie74"])) : "";
    $glycemie75 = (isset($_POST["glycemie75"])) ? htmlspecialchars(addslashes($_POST["glycemie75"])) : "";
    $glycemie76 = (isset($_POST["glycemie76"])) ? htmlspecialchars(addslashes($_POST["glycemie76"])) : "";
    $glycemie77 = (isset($_POST["glycemie77"])) ? htmlspecialchars(addslashes($_POST["glycemie77"])) : "";
    $glycemie78 = (isset($_POST["glycemie78"])) ? htmlspecialchars(addslashes($_POST["glycemie78"])) : "";
    $glycemie79 = (isset($_POST["glycemie79"])) ? htmlspecialchars(addslashes($_POST["glycemie79"])) : "";
    $glycemie80 = (isset($_POST["glycemie80"])) ? htmlspecialchars(addslashes($_POST["glycemie80"])) : "";
    $glycemie81 = (isset($_POST["glycemie81"])) ? htmlspecialchars(addslashes($_POST["glycemie81"])) : "";
    $glycemie82 = (isset($_POST["glycemie82"])) ? htmlspecialchars(addslashes($_POST["glycemie82"])) : "";
    $glycemie83 = (isset($_POST["glycemie83"])) ? htmlspecialchars(addslashes($_POST["glycemie83"])) : "";
    $glycemie84 = (isset($_POST["glycemie84"])) ? htmlspecialchars(addslashes($_POST["glycemie84"])) : "";



    $datebasal1 = (isset($_POST["datebasal1"])) ? htmlspecialchars(addslashes($_POST["datebasal1"])) : "";
    $datebasal2 = (isset($_POST["datebasal2"])) ? htmlspecialchars(addslashes($_POST["datebasal2"])) : "";
    $datebolus = (isset($_POST["datebolus"])) ? htmlspecialchars(addslashes($_POST["datebolus"])) : "";
    $dateglycemie = (isset($_POST["dateglycemie"])) ? htmlspecialchars(addslashes($_POST["dateglycemie"])) : "";

    $test = $bdd->query("SELECT * FROM infopatient WHERE nompatient = '". htmlspecialchars(addslashes($_POST["nompatient"])) . "' AND prenompatient = '" . htmlspecialchars(addslashes($_POST["prenompatient"])) . "'");

    $nbrEnr = $test->rowcount();
    if($nbrEnr > 0)
    {
      echo("Le patient existe déjà");
    } else {  
      try {


            $bdd->exec("INSERT INTO infobastide(nomresp, prenomresp, mobileresp, coordonnee, idPrescripteur, idPatient) VALUES('" . htmlspecialchars(addslashes($_POST["nomresp"])) . "','" . htmlspecialchars(addslashes($_POST["prenomresp"])) . "','" . htmlspecialchars(addslashes($_POST["mobileresp"])) . "','" . htmlspecialchars(addslashes($_POST["coordonnee"])) . "', '".$idPrescripteur."', '".$idPatient."')") or die(print_r($bdd->ErrorInfo()));


            $bdd->exec("INSERT INTO infopatient(nompatient, prenompatient, datenaissance, agepatient, telpatient, mobilepatient,emailpatient, adressepatient, codepostalpatient, villepatient, idPrescripteur) VALUES('" . htmlspecialchars(addslashes($_POST["nompatient"])) . "','" . htmlspecialchars(addslashes($_POST["prenompatient"])) . "','" . htmlspecialchars(addslashes($_POST["datenaissance"])) . "','" . htmlspecialchars(addslashes($_POST["agepatient"])) . "','" . htmlspecialchars(addslashes($_POST["telpatient"])) . "','" . htmlspecialchars(addslashes($_POST["mobilepatient"])) . "','" . htmlspecialchars(addslashes($_POST["emailpatient"])) . "','" . htmlspecialchars(addslashes($_POST["adressepatient"])) . "','" . htmlspecialchars(addslashes($_POST["codepostalpatient"])) . "','" . htmlspecialchars(addslashes($_POST["villepatient"])) . "', '".$idPrescripteur."')")or die(print_r($bdd->ErrorInfo()));

            $bdd->exec("INSERT INTO infoprescripteur(etablissementprescripteur, serviceep, npp, telep, mailep, adressep, mobiledp, mobiledl, mobilemt, mobiled, membrereseau, nomreseau, idPrescripteur, idPatient) VALUES ('" . htmlspecialchars(addslashes($_POST["etablissementprescripteur"])) . "', '" . htmlspecialchars(addslashes($_POST["serviceep"])) . "', '" . htmlspecialchars(addslashes($_POST["npp"])) . "', '" . htmlspecialchars(addslashes($_POST["telep"])) . "', '" . htmlspecialchars(addslashes($_POST["mailep"])) . "', '" . htmlspecialchars(addslashes($_POST["adressep"])) . "' ,'" . htmlspecialchars(addslashes($_POST["mobiledp"])) . "','" . htmlspecialchars(addslashes($_POST["mobiledl"])) . "','" . htmlspecialchars(addslashes($_POST["mobilemt"])) . "','" . htmlspecialchars(addslashes($_POST["mobiled"])) . "','" . htmlspecialchars(addslashes($_POST["membrereseau"])) . "','" . htmlspecialchars(addslashes($_POST["nomreseau"])) . "', '" .$idPrescripteur."', '" .$idPatient."')") or die(print_r($bdd->errorInfo()));


            $bdd->exec("INSERT INTO choixmateriel(pompe, dateinstallation, typecatheter, modele, longueurcanule, longueurtubulure, typecatheter2, modele2, longueurcanule2, longueurtubulure2, inserteur, reservoir, spp, observation, idPrescripteur, idPatient) VALUES('" . $_POST["Pompe"] . "','" . htmlspecialchars(addslashes($_POST["dateinstallation"])) . "','" . htmlspecialchars(addslashes($_POST["catheter"])) . "','" . $_POST["modele"] . "','" . htmlspecialchars(addslashes($_POST["longueurcanule"])) . "','" . htmlspecialchars(addslashes($_POST["longueurtubulure"])) . "','" . htmlspecialchars(addslashes($_POST["catheter2"])) . "','" . $_POST["modele2"] . "','" . htmlspecialchars(addslashes($_POST["longueurcanule2"])) . "','" . htmlspecialchars(addslashes($_POST["longueurtubulure2"])) . "','" . htmlspecialchars(addslashes($_POST["inserteur"])) . "','" . htmlspecialchars(addslashes($_POST["reservoir"])) . "','" . htmlspecialchars(addslashes($_POST["spp"])) . "','" . htmlspecialchars(addslashes($_POST["observatiom"])) . "', '".$idPrescripteur."', '".$idPatient."')")or die(print_r($bdd->ErrorInfo()));




            $bdd->exec("INSERT INTO habitudevie(activitephysique, profession, situationfamiliale, observation, hygienealimentaire, stabilitehoraires, details, environnement, rougeur, etatcutane, choixpoint, idPrescripteur, idPatient) VALUES('" . $activitephysique . "','" . $profession . "','" . $situationfamiliale . "','" . $observation . "','" . $hygienealimentaire . "','" . $stabilitehoraires . "','" . $details . "','" . $environnement . "','" . $rougeur . "','" . $etatcutane . "','" . $choixpoint . "', '" .$idPrescripteur."', '" .$idPatient."')") or die(print_r($bdd->ErrorInfo()));

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
                            . htmlspecialchars(addslashes($_POST["pmpdate1"])) . "','"
                            . htmlspecialchars(addslashes($_POST["pmpdate2"])) . "','"
                            . htmlspecialchars(addslashes($_POST["pmpdate3"])) . "','"
                            . htmlspecialchars(addslashes($_POST["pmpdate4"])) . "','"
                            . htmlspecialchars(addslashes($_POST["pmpselect1"])) . "','"
                            . htmlspecialchars(addslashes($_POST["pmpselect2"])) . "','"
                            . htmlspecialchars(addslashes($_POST["pmpselect3"])) . "','"
                            . htmlspecialchars(addslashes($_POST["pmpselect4"])) . "','"
                            . htmlspecialchars(addslashes($_POST["pmpcommentaire1"])) . "','"
                            . htmlspecialchars(addslashes($_POST["pmpselect5"])) . "','"
                            . htmlspecialchars(addslashes($_POST["pmpselect6"])) . "','"
                            . htmlspecialchars(addslashes($_POST["pmpselect7"])) . "','"
                            . htmlspecialchars(addslashes($_POST["pmpselect8"])) . "','"
                            . htmlspecialchars(addslashes($_POST["pmpcommentaire2"])) . "','"
                            . htmlspecialchars(addslashes($_POST["pmpselect9"])) . "','"
                            . htmlspecialchars(addslashes($_POST["pmpselect10"])) . "','"
                            . htmlspecialchars(addslashes($_POST["pmpselect11"])) . "','"
                            . htmlspecialchars(addslashes($_POST["pmpselect12"])) . "','"
                            . htmlspecialchars(addslashes($_POST["pmpcommentaire3"])) . "','"
                            . htmlspecialchars(addslashes($_POST["pmpselect13"])) . "','"
                            . htmlspecialchars(addslashes($_POST["pmpselect14"])) . "','"
                            . htmlspecialchars(addslashes($_POST["pmpselect15"])) . "','"
                            . htmlspecialchars(addslashes($_POST["pmpselect16"])) . "','"
                            . htmlspecialchars(addslashes($_POST["pmpcommentaire4"])) . "','"
                            . htmlspecialchars(addslashes($_POST["pmpselect17"])) . "','"
                            . htmlspecialchars(addslashes($_POST["pmpselect18"])) . "','"
                            . htmlspecialchars(addslashes($_POST["pmpselect19"])) . "','"
                            . htmlspecialchars(addslashes($_POST["pmpselect20"])) . "','"
                            . htmlspecialchars(addslashes($_POST["pmpcommentaire5"])) . "','"
                            . htmlspecialchars(addslashes($_POST["pmpselect21"])) . "','"
                            . htmlspecialchars(addslashes($_POST["pmpselect22"])) . "','"
                            . htmlspecialchars(addslashes($_POST["pmpselect23"])) . "','"
                            . htmlspecialchars(addslashes($_POST["pmpselect24"])) . "','"
                            . htmlspecialchars(addslashes($_POST["pmpcommentaire6"])) . "','"
                            . htmlspecialchars(addslashes($_POST["pmpselect25"])) . "','"
                            . htmlspecialchars(addslashes($_POST["pmpselect26"])) . "','"
                            . htmlspecialchars(addslashes($_POST["pmpselect27"])) . "','"
                            . htmlspecialchars(addslashes($_POST["pmpselect28"])) . "','"
                            . htmlspecialchars(addslashes($_POST["pmpcommentaire7"])) . "','"
                            . htmlspecialchars(addslashes($_POST["pmpselect29"])) . "','"
                            . htmlspecialchars(addslashes($_POST["pmpselect291"])) . "','"
                            . htmlspecialchars(addslashes($_POST["pmpselect292"])) . "','"
                            . htmlspecialchars(addslashes($_POST["pmpselect293"])) . "','"
                            . htmlspecialchars(addslashes($_POST["pmpcommentaire8"])) . "','"
                            . htmlspecialchars(addslashes($_POST["pmpselect294"])) . "','"
                            . htmlspecialchars(addslashes($_POST["pmpselect295"])) . "','"
                            . htmlspecialchars(addslashes($_POST["pmpselect296"])) . "','"
                            . htmlspecialchars(addslashes($_POST["pmpselect297"])) . "','"
                            . htmlspecialchars(addslashes($_POST["pmpcommentaire9"])) . "','"
                            . htmlspecialchars(addslashes($_POST["pmpautre"])) . "','"
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
                            . htmlspecialchars(addslashes($_POST["alarmedate1"])) . "','"
                            . htmlspecialchars(addslashes($_POST["alarmedate2"])) . "','"
                            . htmlspecialchars(addslashes($_POST["alarmedate3"])) . "','"
                            . htmlspecialchars(addslashes($_POST["alarmedate4"])) . "','"
                            . htmlspecialchars(addslashes($_POST["alarmeselect1"])) . "','"
                            . htmlspecialchars(addslashes($_POST["alarmeselect2"])) . "','"
                            . htmlspecialchars(addslashes($_POST["alarmeselect3"])) . "','"
                            . htmlspecialchars(addslashes($_POST["alarmeselect4"])) . "','"
                            . htmlspecialchars(addslashes($_POST["alarmecommentaire1"])) . "','"
                            . htmlspecialchars(addslashes($_POST["alarmeselect5"])) . "','"
                            . htmlspecialchars(addslashes($_POST["alarmeselect6"])) . "','"
                            . htmlspecialchars(addslashes($_POST["alarmeselect7"])) . "','"
                            . htmlspecialchars(addslashes($_POST["alarmeselect8"])) . "','"
                            . htmlspecialchars(addslashes($_POST["alarmecommentaire2"])) . "','"
                            . htmlspecialchars(addslashes($_POST["alarmeselect9"])) . "','"
                            . htmlspecialchars(addslashes($_POST["alarmeselect10"])) . "','"
                            . htmlspecialchars(addslashes($_POST["alarmeselect11"])) . "','"
                            . htmlspecialchars(addslashes($_POST["alarmeselect12"])) . "','"
                            . htmlspecialchars(addslashes($_POST["alarmecommentaire3"])) . "','"
                            . htmlspecialchars(addslashes($_POST["alarmeselect13"])) . "','"
                            . htmlspecialchars(addslashes($_POST["alarmeselect14"])) . "','"
                            . htmlspecialchars(addslashes($_POST["alarmeselect15"])) . "','"
                            . htmlspecialchars(addslashes($_POST["alarmeselect16"])) . "','"
                            . htmlspecialchars(addslashes($_POST["alarmecommentaire4"])) . "','"
                            . htmlspecialchars(addslashes($_POST["alarmeselect17"])) . "','"
                            . htmlspecialchars(addslashes($_POST["alarmeselect18"])) . "','"
                            . htmlspecialchars(addslashes($_POST["alarmeselect19"])) . "','"
                            . htmlspecialchars(addslashes($_POST["alarmeselect20"])) . "','"
                            . htmlspecialchars(addslashes($_POST["alarmecommentaire5"])) . "','"
                            . htmlspecialchars(addslashes($_POST["alarmeselect21"])) . "','"
                            . htmlspecialchars(addslashes($_POST["alarmeselect22"])) . "','"
                            . htmlspecialchars(addslashes($_POST["alarmeselect23"])) . "','"
                            . htmlspecialchars(addslashes($_POST["alarmeselect24"])) . "','"
                            . htmlspecialchars(addslashes($_POST["alarmecommentaire6"])) . "','"
                            . htmlspecialchars(addslashes($_POST["alarmeselect25"])) . "','"
                            . htmlspecialchars(addslashes($_POST["alarmeselect26"])) . "','"
                            . htmlspecialchars(addslashes($_POST["alarmeselect27"])) . "','"
                            . htmlspecialchars(addslashes($_POST["alarmeselect28"])) . "','"
                            . htmlspecialchars(addslashes($_POST["alarmecommentaire7"])) . "','"
                            . htmlspecialchars(addslashes($_POST["alarmeautre"])) . "', '" 
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
                            . htmlspecialchars(addslashes($_POST["manipdate1"])) . "','"
                            . htmlspecialchars(addslashes($_POST["manipdate2"])) . "','"
                            . htmlspecialchars(addslashes($_POST["manipdate3"])) . "','"
                            . htmlspecialchars(addslashes($_POST["manipdate4"])) . "','"
                            . htmlspecialchars(addslashes($_POST["manipselect1"])) . "','"
                            . htmlspecialchars(addslashes($_POST["manipselect2"])) . "','"
                            . htmlspecialchars(addslashes($_POST["manipselect3"])) . "','"
                            . htmlspecialchars(addslashes($_POST["manipselect4"])) . "','"
                            . htmlspecialchars(addslashes($_POST["manipcommentaire1"])) . "','"
                            . htmlspecialchars(addslashes($_POST["manipselect5"])) . "','"
                            . htmlspecialchars(addslashes($_POST["manipselect6"])) . "','"
                            . htmlspecialchars(addslashes($_POST["manipselect7"])) . "','"
                            . htmlspecialchars(addslashes($_POST["manipselect8"])) . "','"
                            . htmlspecialchars(addslashes($_POST["manipcommentaire2"])) . "','"
                            . htmlspecialchars(addslashes($_POST["manipselect9"])) . "','"
                            . htmlspecialchars(addslashes($_POST["manipselect10"])) . "','"
                            . htmlspecialchars(addslashes($_POST["manipselect11"])) . "','"
                            . htmlspecialchars(addslashes($_POST["manipselect12"])) . "','"
                            . htmlspecialchars(addslashes($_POST["manipcommentaire3"])) . "','"
                            . htmlspecialchars(addslashes($_POST["manipselect13"])) . "','"
                            . htmlspecialchars(addslashes($_POST["manipselect14"])) . "','"
                            . htmlspecialchars(addslashes($_POST["manipselect15"])) . "','"
                            . htmlspecialchars(addslashes($_POST["manipselect16"])) . "','"
                            . htmlspecialchars(addslashes($_POST["manipcommentaire4"])) . "','"
                            . htmlspecialchars(addslashes($_POST["manipselect17"])) . "','"
                            . htmlspecialchars(addslashes($_POST["manipselect18"])) . "','"
                            . htmlspecialchars(addslashes($_POST["manipselect19"])) . "','"
                            . htmlspecialchars(addslashes($_POST["manipselect20"])) . "','"
                            . htmlspecialchars(addslashes($_POST["manipcommentaire5"])) . "', '" 
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
                            . htmlspecialchars(addslashes($_POST["cathdate1"])) . "','"
                            . htmlspecialchars(addslashes($_POST["cathdate2"])) . "','"
                            . htmlspecialchars(addslashes($_POST["cathdate3"])) . "','"
                            . htmlspecialchars(addslashes($_POST["cathdate4"])) . "','"
                            . htmlspecialchars(addslashes($_POST["cathselect1"])) . "','"
                            . htmlspecialchars(addslashes($_POST["cathselect2"])) . "','"
                            . htmlspecialchars(addslashes($_POST["cathselect3"])) . "','"
                            . htmlspecialchars(addslashes($_POST["cathselect4"])) . "','"
                            . htmlspecialchars(addslashes($_POST["cathcommentaire1"])) . "','"
                            . htmlspecialchars(addslashes($_POST["cathselect5"])) . "','"
                            . htmlspecialchars(addslashes($_POST["cathselect6"])) . "','"
                            . htmlspecialchars(addslashes($_POST["cathselect7"])) . "','"
                            . htmlspecialchars(addslashes($_POST["cathselect8"])) . "','"
                            . htmlspecialchars(addslashes($_POST["cathcommentaire2"])) . "','"
                            . htmlspecialchars(addslashes($_POST["cathselect9"])) . "','"
                            . htmlspecialchars(addslashes($_POST["cathselect10"])) . "','"
                            . htmlspecialchars(addslashes($_POST["cathselect11"])) . "','"
                            . htmlspecialchars(addslashes($_POST["cathselect12"])) . "','"
                            . htmlspecialchars(addslashes($_POST["cathcommentaire3"])) . "','"
                            . htmlspecialchars(addslashes($_POST["cathselect13"])) . "','"
                            . htmlspecialchars(addslashes($_POST["cathselect14"])) . "','"
                            . htmlspecialchars(addslashes($_POST["cathselect15"])) . "','"
                            . htmlspecialchars(addslashes($_POST["cathselect16"])) . "','"
                            . htmlspecialchars(addslashes($_POST["cathcommentaire4"])) . "','"
                            . htmlspecialchars(addslashes($_POST["cathselect17"])) . "','"
                            . htmlspecialchars(addslashes($_POST["cathselect18"])) . "','"
                            . htmlspecialchars(addslashes($_POST["cathselect19"])) . "','"
                            . htmlspecialchars(addslashes($_POST["cathselect20"])) . "','"
                            . htmlspecialchars(addslashes($_POST["cathcommentaire5"])) . "','"
                            . htmlspecialchars(addslashes($_POST["cathselect21"])) . "','"
                            . htmlspecialchars(addslashes($_POST["cathselect22"])) . "','"
                            . htmlspecialchars(addslashes($_POST["cathselect23"])) . "','"
                            . htmlspecialchars(addslashes($_POST["cathselect24"])) . "','"
                            . htmlspecialchars(addslashes($_POST["cathcommentaire6"])) . "','"
                            . htmlspecialchars(addslashes($_POST["cathselect25"])) . "','"
                            . htmlspecialchars(addslashes($_POST["cathselect26"])) . "','"
                            . htmlspecialchars(addslashes($_POST["cathselect27"])) . "','"
                            . htmlspecialchars(addslashes($_POST["cathselect28"])) . "','"
                            . htmlspecialchars(addslashes($_POST["cathcommentaire7"])) . "','"
                            . htmlspecialchars(addslashes($_POST["cathselect29"])) . "','"
                            . htmlspecialchars(addslashes($_POST["cathselect211"])) . "','"
                            . htmlspecialchars(addslashes($_POST["cathselect212"])) . "','"
                            . htmlspecialchars(addslashes($_POST["cathselect213"])) . "','"
                            . htmlspecialchars(addslashes($_POST["cathcommentaire8"])) . "','"
                            . htmlspecialchars(addslashes($_POST["cathselect214"])) . "','"
                            . htmlspecialchars(addslashes($_POST["cathselect215"])) . "','"
                            . htmlspecialchars(addslashes($_POST["cathselect216"])) . "','"
                            . htmlspecialchars(addslashes($_POST["cathselect217"])) . "','"
                            . htmlspecialchars(addslashes($_POST["cathcommentaire9"])) . "','"
                            . htmlspecialchars(addslashes($_POST["cathselect218"])) . "','"
                            . htmlspecialchars(addslashes($_POST["cathselect219"])) . "','"
                            . htmlspecialchars(addslashes($_POST["cathselect221"])) . "','"
                            . htmlspecialchars(addslashes($_POST["cathselect222"])) . "','"
                            . htmlspecialchars(addslashes($_POST["cathcommentaire10"])) . "','"
                            . htmlspecialchars(addslashes($_POST["cathselect223"])) . "','"
                            . htmlspecialchars(addslashes($_POST["cathselect224"])) . "','"
                            . htmlspecialchars(addslashes($_POST["cathselect225"])) . "','"
                            . htmlspecialchars(addslashes($_POST["cathselect226"])) . "','"
                            . htmlspecialchars(addslashes($_POST["cathcommentaire11"])) ."', '" 
                            .$idPrescripteur."', '" 
                            .$idPatient."')") or die(print_r($bdd->ErrorInfo()));

          $bdd->exec("INSERT INTO donnemedicale(typediabete, datediagnostic, circonstancedecouverte, antecedentfamiliaux, datepremieremisesousPompe, hba1c, taille, poidsactuel, poidsforme, imc, nombreglycemieparjour, typelecteur, dateprescription, styloautopiqueur, nombreinjectionjour, stylo, autrestylo, aiguillestylo, autreaiguille, insulinelentematin, insulinerapidematin, insulinelentemidi, insulinerapidemidi, insulinelentesoir, insulinerapidesoir, insulinelentediner, insulinerapidediner, insulinelentecollation, insulinerapidecollation, totalinsulinelente, totalinsulinerapide, specialite1, posologie1, specialite2, posologie2, specialite3, posologie3, specialite4, posologie4, Horaire1, Debit1, Horaire2, Debit2, Horaire3, Debit3, Horaire4, Debit4, Horaire1N, Debit1N, Horaire2N, Debit2N, Horaire3N, Debit3N, Horaire4N, Debit4N, Horaire_1, Debit_1, Horaire_2, Debit_2, Horaire_3, Debit_3, Horaire_4, Debit_4, Horaire_N1, Debit_N1, Horaire_N2, Debit_N2, Horaire_N3, Debit_N3, Horaire_N4, Debit_N4, ValGlycemique1, ValGlyMatin1, ValGlyMid1, ValGlyCollation1, ValGlySoir1, ValGlyAutre1, ValGlycemique2, ValGlyMatin2, ValGlyMid2, ValGlyCollation2, ValGlySoir2, ValGlyAutre2, ValGlycemique3, ValGlyMatin3, ValGlyMid3, ValGlyCollation3, ValGlySoir3, ValGlyAutre3, ValGlycemique4, ValGlyMatin4, ValGlyMid4, ValGlyCollation4, ValGlySoir4, ValGlyAutre4, ValGlycemique5, ValGlyMatin5, ValGlyMid5, ValGlyCollation5, ValGlySoir5, ValGlyAutre5, ValGlycemique6, ValGlyMatin6, ValGlyMid6, ValGlyCollation6, ValGlySoir6, ValGlyAutre6, ValGlycemique7, ValGlyMatin7, ValGlyMid7, ValGlyCollation7, ValGlySoir7, ValGlyAutre7, synthesecommentaire, objectifglycemiquepreprandial, objectifglycemiquepostprandial, ValDatesHemGlyc1, ValDatesHemGlyc2, ValDatesHemGlyc3, ValDatesHemGlyc4, ValDatesHemGlyc5, ValDatesHemGlyc6, ValDatesHemGlyc7, ValDatesHemGlyc8, ValDatesHemGlyc9, ValHbA1cHemGlyc1, ValHbA1cHemGlyc2, ValHbA1cHemGlyc3, ValHbA1cHemGlyc4, ValHbA1cHemGlyc5, ValHbA1cHemGlyc6, ValHbA1cHemGlyc7, ValHbA1cHemGlyc8, ValHbA1cHemGlyc9, Horaire5, Horaire6, Horaire7, Horaire8, Horaire9, Horaire10, Horaire11, Horaire12, Horaire13, Horaire14, Horaire15, Horaire16, Horaire17, Horaire18, Horaire19, Horaire20, Horaire21, Horaire22, Horaire23, Horaire24, Horaire25, Horaire26, Horaire27, Horaire28, Horaire29, Horaire30, Horaire31, Horaire32, Horaire33, Horaire34, Horaire35, Horaire36, Horaire37, Horaire38, Horaire39, Horaire40, Horaire41, Horaire42, Horaire43, Horaire44, Horaire45, Horaire46, Horaire47, Horaire48, Horaire49, Horaire50, Horaire51, Horaire52, Horaire53, Horaire54, Horaire55, Horaire56, Horaire57, Horaire58, Horaire59, Horaire60, Horaire61, Horaire62, Horaire63, Horaire64, Horaire65, Horaire66, Horaire67, Horaire68, Horaire69, Horaire70, Horaire71, Horaire72, Horaire73, Horaire74, Horaire75, Horaire76, Horaire77, Horaire78, Horaire79, Horaire80, Horaire81, Horaire82, Horaire83, Horaire84, Horaire_5, Horaire_6, Horaire_7, Horaire_8, Horaire_9, Horaire_10, Horaire_11, Horaire_12, Horaire_13, Horaire_14, Horaire_15, Horaire_16, Horaire_17, Horaire_18, Horaire_19, Horaire_20, Horaire_21, Horaire_22, Horaire_23, Horaire_24, Horaire_25, Horaire_26, Horaire_27, Horaire_28, Horaire_29, Horaire_30, Horaire_31, Horaire_32, Horaire_33, Horaire_34, Horaire_35, Horaire_36, Horaire_37, Horaire_38, Horaire_39, Horaire_40, Horaire_41, Horaire_42, Horaire_43, Horaire_44, Horaire_45, Horaire_46, Horaire_47, Horaire_48, Horaire_49, Horaire_50, Horaire_51, Horaire_52, Horaire_53, Horaire_54, Horaire_55, Horaire_56, Horaire_57, Horaire_58, Horaire_59, Horaire_60, Horaire_61, Horaire_62, Horaire_63, Horaire_64, Horaire_65, Horaire_66, Horaire_67, Horaire_68, Horaire_69, Horaire_70, Horaire_71, Horaire_72, Horaire_73, Horaire_74, Horaire_75, Horaire_76, Horaire_77, Horaire_78, Horaire_79, Horaire_80, Horaire_81, Horaire_82, Horaire_83, Horaire_84, Debit5, Debit6, Debit7, Debit8, Debit9, Debit10, Debit11, Debit12, Debit13, Debit14, Debit15, Debit16, Debit17, Debit18, Debit19, Debit20, Debit21, Debit22, Debit23, Debit24, Debit25, Debit26, Debit27, Debit28, Debit29, Debit30, Debit31, Debit32, Debit33, Debit34, Debit35, Debit36, Debit37, Debit38, Debit39, Debit40, Debit41, Debit42, Debit43, Debit44, Debit_5, Debit_6, Debit_7, Debit_8, Debit_9, Debit_10, Debit_11, Debit_12, Debit_13, Debit_14, Debit_15, Debit_16, Debit_17, Debit_18, Debit_19, Debit_20, Debit_21, Debit_22, Debit_23, Debit_24, Debit_25, Debit_26, Debit_27, Debit_28, Debit_29, Debit_30, Debit_31, Debit_32, Debit_33, Debit_34, Debit_35, Debit_36, Debit_37, Debit_38, Debit_39, Debit_40, Debit_41, Debit_42, Debit_43, Debit_44,datebasal1,datebasal2,datebolus,dateglycemie, glycemie1, glycemie2, glycemie3, glycemie4, glycemie5, glycemie6, glycemie7, glycemie8, glycemie9, glycemie10, glycemie11, glycemie12, glycemie13, glycemie14, glycemie15, glycemie16, glycemie17, glycemie18, glycemie19, glycemie20, glycemie21, glycemie22, glycemie23, glycemie24, glycemie25, glycemie26, glycemie27, glycemie28, glycemie29, glycemie30, glycemie31, glycemie32, glycemie33, glycemie34, glycemie35, glycemie36, glycemie37, glycemie38, glycemie39, glycemie40, glycemie41, glycemie42, glycemie43, glycemie44, glycemie45, glycemie46, glycemie47, glycemie48, glycemie49, glycemie50, glycemie51, glycemie52, glycemie53, glycemie54, glycemie55, glycemie56, glycemie57, glycemie58, glycemie59, glycemie60, glycemie61, glycemie62, glycemie63, glycemie64, glycemie65, glycemie66, glycemie67, glycemie68, glycemie69, glycemie70, glycemie71, glycemie72, glycemie73, glycemie74, glycemie75, glycemie76, glycemie77, glycemie78, glycemie79, glycemie80, glycemie81, glycemie82, glycemie83, glycemie84,   idPrescripteur, idPatient) VALUES ('" . $typediabete . "', '" . $datediagnostic . "', '" . $circonstancedecouverte . "', '" . $antecedentfamiliaux . "', '" . $datepremieremisesousPompe . "', '" . $hba1c . "', '" . $taille . "', '" . $poidsactuel . "', '" . $poidsforme . "', '" . $imc . "', '" . $nombreglycemieparjour . "', '" . $typelecteur . "', '" . $dateprescription . "', '" . $styloautopiqueur . "', '" . $nombreinjectionjour . "', '" . $stylo . "', '" . $autrestylo . "', '" . $aiguillestylo . "', '" . $autreaiguille . "', '" . $insulinelentematin . "', '" . $insulinerapidematin . "', '" . $insulinelentemidi . "', '" . $insulinerapidemidi . "', '" . $insulinelentesoir . "', '" . $insulinerapidesoir . "', '" . $insulinelentediner . "', '" . $insulinerapidediner . "', '" . $insulinelentecollation . "', '" . $insulinerapidecollation . "', '" . $totalinsulinelente . "', '" . $totalinsulinerapide . "', '" . $specialite1 . "', '" . $posologie1 . "', '" . $specialite2 . "', '" . $posologie2 . "', '" . $specialite3 . "', '" . $posologie3 . "', '" . $specialite4 . "', '" . $posologie4 . "', '" . $Horaire1 . "', '" . $Debit1 . "', '" . $Horaire2 . "', '" . $Debit2 . "', '" . $Horaire3 . "', '" . $Debit3 . "', '" . $Horaire4 . "', '" . $Debit4 . "', '" . $Horaire1N . "', '" . $Debit1N . "', '" . $Horaire2N . "', '" . $Debit2N . "', '" . $Horaire3N . "', '" . $Debit3N . "', '" . $Horaire4N . "', '" . $Debit4N . "', '" . $Horaire_1 . "', '" . $Debit_1 . "', '" . $Horaire_2 . "', '" . $Debit_2 . "', '" . $Horaire_3 . "', '" . $Debit_3 . "', '" . $Horaire_4 . "', '" . $Debit_4 . "', '" . $Horaire_N1 . "', '" . $Debit_N1 . "', '" . $Horaire_N2 . "', '" . $Debit_N2 . "', '" . $Horaire_N3 . "', '" . $Debit_N3 . "', '" . $Horaire_N4 . "', '" . $Debit_N4 . "', '" . $ValGlycemique1 . "', '" . $ValGlyMatin1 . "', '" . $ValGlyMid1 . "', '" . $ValGlyCollation1 . "', '" . $ValGlySoir1 . "', '" . $ValGlyAutre1 . "', '" . $ValGlycemique2 . "', '" . $ValGlyMatin2 . "', '" . $ValGlyMid2 . "', '" . $ValGlyCollation2 . "', '" . $ValGlySoir2 . "', '" . $ValGlyAutre2 . "', '" . $ValGlycemique3 . "', '" . $ValGlyMatin3 . "', '" . $ValGlyMid3 . "', '" . $ValGlyCollation3 . "', '" . $ValGlySoir3 . "', '" . $ValGlyAutre3 . "', '" . $ValGlycemique4 . "', '" . $ValGlyMatin4 . "', '" . $ValGlyMid4 . "', '" . $ValGlyCollation4 . "', '" . $ValGlySoir4 . "', '" . $ValGlyAutre4 . "', '" . $ValGlycemique5 . "', '" . $ValGlyMatin5 . "', '" . $ValGlyMid5 . "', '" . $ValGlyCollation5 . "', '" . $ValGlySoir5 . "', '" . $ValGlyAutre5 . "', '" . $ValGlycemique6 . "', '" . $ValGlyMatin6 . "', '" . $ValGlyMid6 . "', '" . $ValGlyCollation6 . "', '" . $ValGlySoir6 . "', '" . $ValGlyAutre6 . "', '" . $ValGlycemique7 . "', '" . $ValGlyMatin7 . "', '" . $ValGlyMid7 . "', '" . $ValGlyCollation7 . "', '" . $ValGlySoir7 . "', '" . $ValGlyAutre7 . "', '" . $synthesecommentaire . "', '" . $objectifglycemiquepreprandial . "', '" . $objectifglycemiquepostprandial . "', '" . $ValDatesHemGlyc1 . "', '" . $ValDatesHemGlyc2 . "', '" . $ValDatesHemGlyc3 . "', '" . $ValDatesHemGlyc4 . "', '" . $ValDatesHemGlyc5 . "', '" . $ValDatesHemGlyc6 . "', '" . $ValDatesHemGlyc7 . "', '" . $ValDatesHemGlyc8 . "', '" . $ValDatesHemGlyc9 . "', '" . $ValHbA1cHemGlyc1 . "', '" . $ValHbA1cHemGlyc2 . "', '" . $ValHbA1cHemGlyc3 . "', '" . $ValHbA1cHemGlyc4 . "', '" . $ValHbA1cHemGlyc5 . "', '" . $ValHbA1cHemGlyc6 . "', '" . $ValHbA1cHemGlyc7 . "', '" . $ValHbA1cHemGlyc8 . "', '" . $ValHbA1cHemGlyc9 . "', '" . $Horaire5 . "', '" . $Horaire6 . "', '" . $Horaire7 . "', '" . $Horaire8 . "', '" . $Horaire9 . "', '" . $Horaire10 . "', '" . $Horaire11 . "', '" . $Horaire12 . "', '" . $Horaire13 . "', '" . $Horaire14 . "', '" . $Horaire15 . "', '" . $Horaire16 . "', '" . $Horaire17 . "', '" . $Horaire18 . "', '" . $Horaire19 . "', '" . $Horaire20 . "', '" . $Horaire21 . "', '" . $Horaire22 . "', '" . $Horaire23 . "', '" . $Horaire24 . "', '" . $Horaire25 . "', '" . $Horaire26 . "', '" . $Horaire27 . "', '" . $Horaire28 . "', '" . $Horaire29 . "', '" . $Horaire30 . "', '" . $Horaire31 . "', '" . $Horaire32 . "', '" . $Horaire33 . "', '" . $Horaire34 . "', '" . $Horaire35 . "', '" . $Horaire36 . "', '" . $Horaire37 . "', '" . $Horaire38 . "', '" . $Horaire39 . "', '" . $Horaire40 . "', '" . $Horaire41 . "', '" . $Horaire42 . "', '" . $Horaire43 . "', '" . $Horaire44 . "', '" . $Horaire45 . "', '" . $Horaire46 . "', '" . $Horaire47 . "', '" . $Horaire48 . "', '" . $Horaire49 . "', '" . $Horaire50 . "', '" . $Horaire51 . "', '" . $Horaire52 . "', '" . $Horaire53 . "', '" . $Horaire54 . "', '" . $Horaire55 . "', '" . $Horaire56 . "', '" . $Horaire57 . "', '" . $Horaire58 . "', '" . $Horaire59 . "', '" . $Horaire60 . "', '" . $Horaire61 . "', '" . $Horaire62 . "', '" . $Horaire63 . "', '" . $Horaire64 . "', '" . $Horaire65 . "', '" . $Horaire66 . "', '" . $Horaire67 . "', '" . $Horaire68 . "', '" . $Horaire69 . "', '" . $Horaire70 . "', '" . $Horaire71 . "', '" . $Horaire72 . "', '" . $Horaire73 . "', '" . $Horaire74 . "', '" . $Horaire75 . "', '" . $Horaire76 . "', '" . $Horaire77 . "', '" . $Horaire78 . "', '" . $Horaire79 . "', '" . $Horaire80 . "', '" . $Horaire81 . "', '" . $Horaire82 . "', '" . $Horaire83 . "', '" . $Horaire84 . "', '" . $Horaire_5 . "', '" . $Horaire_6 . "', '" . $Horaire_7 . "', '" . $Horaire_8 . "', '" . $Horaire_9 . "', '" . $Horaire_10 . "', '" . $Horaire_11 . "', '" . $Horaire_12 . "', '" . $Horaire_13 . "', '" . $Horaire_14 . "', '" . $Horaire_15 . "', '" . $Horaire_16 . "', '" . $Horaire_17 . "', '" . $Horaire_18 . "', '" . $Horaire_19 . "', '" . $Horaire_20 . "', '" . $Horaire_21 . "', '" . $Horaire_22 . "', '" . $Horaire_23 . "', '" . $Horaire_24 . "', '" . $Horaire_25 . "', '" . $Horaire_26 . "', '" . $Horaire_27 . "', '" . $Horaire_28 . "', '" . $Horaire_29 . "', '" . $Horaire_30 . "', '" . $Horaire_31 . "', '" . $Horaire_32 . "', '" . $Horaire_33 . "', '" . $Horaire_34 . "', '" . $Horaire_35 . "', '" . $Horaire_36 . "', '" . $Horaire_37 . "', '" . $Horaire_38 . "', '" . $Horaire_39 . "', '" . $Horaire_40 . "', '" . $Horaire_41 . "', '" . $Horaire_42 . "', '" . $Horaire_43 . "', '" . $Horaire_44 . "', '" . $Horaire_45 . "', '" . $Horaire_46 . "', '" . $Horaire_47 . "', '" . $Horaire_48 . "', '" . $Horaire_49 . "', '" . $Horaire_50 . "', '" . $Horaire_51 . "', '" . $Horaire_52 . "', '" . $Horaire_53 . "', '" . $Horaire_54 . "', '" . $Horaire_55 . "', '" . $Horaire_56 . "', '" . $Horaire_57 . "', '" . $Horaire_58 . "', '" . $Horaire_59 . "', '" . $Horaire_60 . "', '" . $Horaire_61 . "', '" . $Horaire_62 . "', '" . $Horaire_63 . "', '" . $Horaire_64 . "', '" . $Horaire_65 . "', '" . $Horaire_66 . "', '" . $Horaire_67 . "', '" . $Horaire_68 . "', '" . $Horaire_69 . "', '" . $Horaire_70 . "', '" . $Horaire_71 . "', '" . $Horaire_72 . "', '" . $Horaire_73 . "', '" . $Horaire_74 . "', '" . $Horaire_75 . "', '" . $Horaire_76 . "', '" . $Horaire_77 . "', '" . $Horaire_78 . "', '" . $Horaire_79 . "', '" . $Horaire_80 . "', '" . $Horaire_81 . "', '" . $Horaire_82 . "', '" . $Horaire_83 . "', '" . $Horaire_84 . "', '" . $Debit5 . "', '" . $Debit6 . "', '" . $Debit7 . "', '" . $Debit8 . "', '" . $Debit9 . "', '" . $Debit10 . "', '" . $Debit11 . "', '" . $Debit12 . "', '" . $Debit13 . "', '" . $Debit14 . "', '" . $Debit15 . "', '" . $Debit16 . "', '" . $Debit17 . "', '" . $Debit18 . "', '" . $Debit19 . "', '" . $Debit20 . "', '" . $Debit21 . "', '" . $Debit22 . "', '" . $Debit23 . "', '" . $Debit24 . "', '" . $Debit25 . "', '" . $Debit26 . "', '" . $Debit27 . "', '" . $Debit28 . "', '" . $Debit29 . "', '" . $Debit30 . "', '" . $Debit31 . "', '" . $Debit32 . "', '" . $Debit33 . "', '" . $Debit34 . "', '" . $Debit35 . "', '" . $Debit36 . "', '" . $Debit37 . "', '" . $Debit38 . "', '" . $Debit39 . "', '" . $Debit40 . "', '" . $Debit41 . "', '" . $Debit42 . "', '" . $Debit43 . "', '" . $Debit44 . "', '" . $Debit_5 . "', '" . $Debit_6 . "', '" . $Debit_7 . "', '" . $Debit_8 . "', '" . $Debit_9 . "', '" . $Debit_10 . "', '" . $Debit_11 . "', '" . $Debit_12 . "', '" . $Debit_13 . "', '" . $Debit_14 . "', '" . $Debit_15 . "', '" . $Debit_16 . "', '" . $Debit_17 . "', '" . $Debit_18 . "', '" . $Debit_19 . "', '" . $Debit_20 . "', '" . $Debit_21 . "', '" . $Debit_22 . "', '" . $Debit_23 . "', '" . $Debit_24 . "', '" . $Debit_25 . "', '" . $Debit_26 . "', '" . $Debit_27 . "', '" . $Debit_28 . "', '" . $Debit_29 . "', '" . $Debit_30 . "', '" . $Debit_31 . "', '" . $Debit_32 . "', '" . $Debit_33 . "', '" . $Debit_34 . "', '" . $Debit_35 . "', '" . $Debit_36 . "', '" . $Debit_37 . "', '" . $Debit_38 . "', '" . $Debit_39 . "', '" . $Debit_40 . "', '" . $Debit_41 . "', '" . $Debit_42 . "', '" . $Debit_43 . "', '" . $Debit_44 . "', '" . $datebasal1 . "', '" . $datebasal2 . "', '" . $datebolus . "', '" . $dateglycemie . "', '".$glycemie1."', '".$glycemie2."', '".$glycemie3."', '".$glycemie4."', '".$glycemie5."', '".$glycemie6."', '".$glycemie7."', '".$glycemie8."', '".$glycemie9."', '".$glycemie10."', '".$glycemie11."', '".$glycemie12."', '".$glycemie13."', '".$glycemie14."', '".$glycemie15."', '".$glycemie16."', '".$glycemie17."', '".$glycemie18."', '".$glycemie19."', '".$glycemie20."', '".$glycemie21."', '".$glycemie22."', '".$glycemie23."', '".$glycemie24."', '".$glycemie25."', '".$glycemie26."', '".$glycemie27."', '".$glycemie28."', '".$glycemie29."', '".$glycemie30."', '".$glycemie31."', '".$glycemie32."', '".$glycemie33."', '".$glycemie34."', '".$glycemie35."', '".$glycemie36."', '".$glycemie37."', '".$glycemie38."', '".$glycemie39."', '".$glycemie40."', '".$glycemie41."', '".$glycemie42."', '".$glycemie43."', '".$glycemie44."', '".$glycemie45."', '".$glycemie46."', '".$glycemie47."', '".$glycemie48."', '".$glycemie49."', '".$glycemie50."', '".$glycemie51."', '".$glycemie52."', '".$glycemie53."', '".$glycemie54."', '".$glycemie55."', '".$glycemie56."', '".$glycemie57."', '".$glycemie58."', '".$glycemie59."', '".$glycemie60."', '".$glycemie61."', '".$glycemie62."', '".$glycemie63."', '".$glycemie64."', '".$glycemie65."', '".$glycemie66."', '".$glycemie67."', '".$glycemie68."', '".$glycemie69."', '".$glycemie70."', '".$glycemie71."', '".$glycemie72."', '".$glycemie73."', '".$glycemie74."', '".$glycemie75."', '".$glycemie76."', '".$glycemie77."', '".$glycemie78."', '".$glycemie79."', '".$glycemie80."', '".$glycemie81."', '".$glycemie82."', '".$glycemie83."', '".$glycemie84."',   '" .$idPrescripteur."', '" .$idPatient."')") or die(print_r($bdd->errorInfo()));


            $bdd->exec("INSERT INTO asg1
              (
                asgdetail1, asgdetail2, asgdetail3, asgdetail4, asgobservation1, asgobservation2, asgobservation3, asgobservation4, idPrescripteur, idPatient)
              VALUES 
              ('"
                            . htmlspecialchars(addslashes($_POST["asgdetail1"])) . "','"
                            . htmlspecialchars(addslashes($_POST["asgdetail2"])) . "','"
                            . htmlspecialchars(addslashes($_POST["asgdetail3"])) . "','"
                            . htmlspecialchars(addslashes($_POST["asgdetail4"])) . "','"
                            . htmlspecialchars(addslashes($_POST["asgobservation1"])) . "','"
                            . htmlspecialchars(addslashes($_POST["asgobservation2"])) . "','"
                            . htmlspecialchars(addslashes($_POST["asgobservation3"])) . "','"
                            . htmlspecialchars(addslashes($_POST["asgobservation4"])) ."', '" 
                            .$idPrescripteur."', '" 
                            .$idPatient."')") or die(print_r($bdd->ErrorInfo()));




            $bdd->exec("INSERT INTO asg2
              (
                asgfrequence1, asgfrequence2, asgconnaissance, asgcommentaire, asg2commentaire, idPrescripteur, idPatient)
              VALUES 
              ('"
                            . htmlspecialchars(addslashes($_POST["asgfrequence1"])) . "','"
                            . htmlspecialchars(addslashes($_POST["asgfrequence2"])) . "','"
                            . htmlspecialchars(addslashes($_POST["asgconnaissance"])) . "','"
                            . htmlspecialchars(addslashes($_POST["asgcommentaire"])) . "', '"
                            . htmlspecialchars(addslashes($_POST["asg2commentaire"])) . "', '"
                            .$idPrescripteur."', '" 
                            .$idPatient."')") or die(print_r($bdd->ErrorInfo()));



            $bdd->exec("INSERT INTO connaissances
              (
                reponse1, reponse2, reponse3, reponse4, reponse5, reponse6, reponse7, reponse8, reponse9, reponse10, reponse11, reponse12, reponse13, reponse14,
                observation1, observation2, observation3, observation4, observation5, observation6, observation7, observation8, observation9,
                date1, date2, date3, date4, date5, idPrescripteur, idPatient)
              VALUES 
              ('"
                            . htmlspecialchars(addslashes($_POST["connaissance1"])) . "','"
                            . htmlspecialchars(addslashes($_POST["connaissance2"])) . "','"
                            . htmlspecialchars(addslashes($_POST["connaissance3"])) . "','"
                            . htmlspecialchars(addslashes($_POST["connaissance4"])) . "','"
                            . htmlspecialchars(addslashes($_POST["connaissance5"])) . "','"
                            . htmlspecialchars(addslashes($_POST["connaissance6"])) . "','"
                            . htmlspecialchars(addslashes($_POST["connaissance7"])) . "','"
                            . htmlspecialchars(addslashes($_POST["connaissance8"])) . "','"
                            . htmlspecialchars(addslashes($_POST["connaissance9"])) . "','"
                            . htmlspecialchars(addslashes($_POST["connaissance10"])) . "','"
                            . htmlspecialchars(addslashes($_POST["connaissance11"])) . "','"
                            . htmlspecialchars(addslashes($_POST["connaissance12"])) . "','"
                            . htmlspecialchars(addslashes($_POST["connaissance13"])) . "','"
                            . htmlspecialchars(addslashes($_POST["connaissance14"])) . "','"
                            . htmlspecialchars(addslashes($_POST["cnsobservation1"])) . "','"
                            . htmlspecialchars(addslashes($_POST["cnsobservation2"])) . "','"
                            . htmlspecialchars(addslashes($_POST["cnsobservation3"])) . "','"
                            . htmlspecialchars(addslashes($_POST["cnsobservation4"])) . "','"
                            . htmlspecialchars(addslashes($_POST["cnsobservation5"])) . "','"
                            . htmlspecialchars(addslashes($_POST["cnsobservation6"])) . "','"
                            . htmlspecialchars(addslashes($_POST["cnsobservation7"])) . "','"
                            . htmlspecialchars(addslashes($_POST["cnsobservation8"])) . "','"
                            . htmlspecialchars(addslashes($_POST["cnsobservation9"])) . "','"
                            . htmlspecialchars(addslashes($_POST["perempdate1"])) . "','"
                            . htmlspecialchars(addslashes($_POST["perempdate2"])) . "','"
                            . htmlspecialchars(addslashes($_POST["perempdate3"])) . "','"
                            . htmlspecialchars(addslashes($_POST["perempdate4"])) . "','"
                            . htmlspecialchars(addslashes($_POST["perempdate5"])) . "', '" 
                            .$idPrescripteur."', '" 
                            .$idPatient."')") or die(print_r($bdd->ErrorInfo()));


            $req = $bdd->prepare("INSERT INTO insulinotherapiefonctionnelle(petitdejeunerDe, petitdejeunerA, dejeunerDe, dejeunerA, gouterDe, gouterA, dinerDe, dinerA, collationDe, collationA, petitdejeunerRotation, petitdejeunerObjectif, petitdejeunerSensibilite, dejeunerRotation, dejeunerObjectif, dejeunerSensibilite, gouterRotation, gouterObjectif, gouterSensibilite, dinerRotation, dinerObjectif, dinerSensibilite, collationRotation, collationObjectif, collationSensibilite, idPrescripteur, idPatient) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
            $req->execute(array($petitdejeunerDe, $petitdejeunerA, $dejeunerDe, $dejeunerA, $gouterDe, $gouterA, $dinerDe, $dinerA, $collationDe, $collationA, $petitdejeunerRotation, $petitdejeunerObjectif, $petitdejeunerSensibilite, $dejeunerRotation, $dejeunerObjectif, $dejeunerSensibilite, $gouterRotation, $gouterObjectif, $gouterSensibilite, $dinerRotation, $dinerObjectif, $dinerSensibilite, $collationRotation, $collationObjectif, $collationSensibilite, $idPrescripteur, $idPatient));

            echo "Enregistrement avec succèes !";
        } catch (PDOException $e) {
            echo("Erreur : " . $e->getMessage());
        }
    } 
?>