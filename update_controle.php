<?php 
	require "cnx.php";


$capture = (isset($_POST['capture'])) ? utf8_encode($_POST['capture']) : ''; 
$nomresp = (isset($_POST['nomresp'])) ? utf8_encode($_POST['nomresp']) : ''; 
$prenomresp = (isset($_POST['prenomresp'])) ? utf8_encode($_POST['prenomresp']) : ''; 
$mobileresp = (isset($_POST['mobileresp'])) ? utf8_encode($_POST['mobileresp']) : ''; 
$coordonnee = (isset($_POST['coordonnee'])) ? utf8_encode($_POST['coordonnee']) : ''; 
$nompatient = (isset($_POST['nompatient'])) ? utf8_encode($_POST['nompatient']) : ''; 
$prenompatient = (isset($_POST['prenompatient'])) ? utf8_encode($_POST['prenompatient']) : ''; 
$datenaissance = (isset($_POST['datenaissance'])) ? utf8_encode($_POST['datenaissance']) : ''; 
$agepatient = (isset($_POST['agepatient'])) ? utf8_encode($_POST['agepatient']) : ''; 
$telpatient = (isset($_POST['telpatient'])) ? utf8_encode($_POST['telpatient']) : ''; 
$mobilepatient = (isset($_POST['mobilepatient'])) ? utf8_encode($_POST['mobilepatient']) : ''; 
$emailpatient = (isset($_POST['emailpatient'])) ? utf8_encode($_POST['emailpatient']) : ''; 
$adressepatient = (isset($_POST['adressepatient'])) ? utf8_encode($_POST['adressepatient']) : ''; 
$codepostalpatient = (isset($_POST['codepostalpatient'])) ? utf8_encode($_POST['codepostalpatient']) : ''; 
$villepatient = (isset($_POST['villepatient'])) ? utf8_encode($_POST['villepatient']) : ''; 
$etablissementprescripteur = (isset($_POST['etablissementprescripteur'])) ? utf8_encode($_POST['etablissementprescripteur']) : ''; 
$serviceep = (isset($_POST['serviceep'])) ? utf8_encode($_POST['serviceep']) : ''; 
$npp = (isset($_POST['npp'])) ? utf8_encode($_POST['npp']) : ''; 
$telep = (isset($_POST['telep'])) ? utf8_encode($_POST['telep']) : ''; 
$mailep = (isset($_POST['mailep'])) ? utf8_encode($_POST['mailep']) : ''; 
$adressep = (isset($_POST['adressep'])) ? utf8_encode($_POST['adressep']) : ''; 
$diabetologueprescripteur = (isset($_POST['diabetologueprescripteur'])) ? utf8_encode($_POST['diabetologueprescripteur']) : ''; 
$teldp = (isset($_POST['teldp'])) ? utf8_encode($_POST['teldp']) : ''; 
$mobiledp = (isset($_POST['mobiledp'])) ? utf8_encode($_POST['mobiledp']) : ''; 
$ruedp = (isset($_POST['ruedp'])) ? utf8_encode($_POST['ruedp']) : ''; 
$codepostaldp = (isset($_POST['codepostaldp'])) ? utf8_encode($_POST['codepostaldp']) : ''; 
$villedp = (isset($_POST['villedp'])) ? utf8_encode($_POST['villedp']) : ''; 
$maildp = (isset($_POST['maildp'])) ? utf8_encode($_POST['maildp']) : ''; 
$diabetologueliberal = (isset($_POST['diabetologueliberal'])) ? utf8_encode($_POST['diabetologueliberal']) : ''; 
$teldl = (isset($_POST['teldl'])) ? utf8_encode($_POST['teldl']) : ''; 
$mobiledl = (isset($_POST['mobiledl'])) ? utf8_encode($_POST['mobiledl']) : ''; 
$ruedl = (isset($_POST['ruedl'])) ? utf8_encode($_POST['ruedl']) : ''; 
$codepostaldl = (isset($_POST['codepostaldl'])) ? utf8_encode($_POST['codepostaldl']) : ''; 
$villedl = (isset($_POST['villedl'])) ? utf8_encode($_POST['villedl']) : ''; 
$maildl = (isset($_POST['maildl'])) ? utf8_encode($_POST['maildl']) : ''; 
$medecintraitant = (isset($_POST['medecintraitant'])) ? utf8_encode($_POST['medecintraitant']) : ''; 
$telmt = (isset($_POST['telmt'])) ? utf8_encode($_POST['telmt']) : ''; 
$mobilemt = (isset($_POST['mobilemt'])) ? utf8_encode($_POST['mobilemt']) : ''; 
$ruemt = (isset($_POST['ruemt'])) ? utf8_encode($_POST['ruemt']) : ''; 
$codepostalmt = (isset($_POST['codepostalmt'])) ? utf8_encode($_POST['codepostalmt']) : ''; 
$villemt = (isset($_POST['villemt'])) ? utf8_encode($_POST['villemt']) : ''; 
$mailmt = (isset($_POST['mailmt'])) ? utf8_encode($_POST['mailmt']) : ''; 
$dieteticienne = (isset($_POST['dieteticienne'])) ? utf8_encode($_POST['dieteticienne']) : ''; 
$teld = (isset($_POST['teld'])) ? utf8_encode($_POST['teld']) : ''; 
$mobiled = (isset($_POST['mobiled'])) ? utf8_encode($_POST['mobiled']) : ''; 
$rued = (isset($_POST['rued'])) ? utf8_encode($_POST['rued']) : ''; 
$codepostald = (isset($_POST['codepostald'])) ? utf8_encode($_POST['codepostald']) : ''; 
$villed = (isset($_POST['villed'])) ? utf8_encode($_POST['villed']) : ''; 
$maild = (isset($_POST['maild'])) ? utf8_encode($_POST['maild']) : ''; 
$membrereseau = (isset($_POST['membrereseau'])) ? utf8_encode($_POST['membrereseau']) : ''; 
$nomreseau = (isset($_POST['nomreseau'])) ? utf8_encode($_POST['nomreseau']) : ''; 
$Pompe = (isset($_POST['Pompe'])) ? utf8_encode($_POST['Pompe']) : ''; 
$pompeautres = (isset($_POST['pompeautres'])) ? utf8_encode($_POST['pompeautres']) : ''; 
$dateinstallation = (isset($_POST['dateinstallation'])) ? utf8_encode($_POST['dateinstallation']) : ''; 
$catheter = (isset($_POST['catheter'])) ? utf8_encode($_POST['catheter']) : ''; 
$modele = (isset($_POST['modele'])) ? utf8_encode($_POST['modele']) : ''; 
$catheter1autres = (isset($_POST['catheter1autres'])) ? utf8_encode($_POST['catheter1autres']) : ''; 
$longueurcanule = (isset($_POST['longueurcanule'])) ? utf8_encode($_POST['longueurcanule']) : ''; 
$longueurtubulure = (isset($_POST['longueurtubulure'])) ? utf8_encode($_POST['longueurtubulure']) : ''; 
$catheter2 = (isset($_POST['catheter2'])) ? utf8_encode($_POST['catheter2']) : ''; 
$modele2 = (isset($_POST['modele2'])) ? utf8_encode($_POST['modele2']) : ''; 
$catheter2autres = (isset($_POST['catheter2autres'])) ? utf8_encode($_POST['catheter2autres']) : ''; 
$longueurcanule2 = (isset($_POST['longueurcanule2'])) ? utf8_encode($_POST['longueurcanule2']) : ''; 
$longueurtubulure2 = (isset($_POST['longueurtubulure2'])) ? utf8_encode($_POST['longueurtubulure2']) : ''; 
$inserteur = (isset($_POST['inserteur'])) ? utf8_encode($_POST['inserteur']) : ''; 
$reservoir = (isset($_POST['reservoir'])) ? utf8_encode($_POST['reservoir']) : ''; 
$reservoirautres = (isset($_POST['reservoirautres'])) ? utf8_encode($_POST['reservoirautres']) : ''; 
$spp = (isset($_POST['spp'])) ? utf8_encode($_POST['spp']) : ''; 
$idPrescripteur = (isset($_POST['idPrescripteur'])) ? utf8_encode($_POST['idPrescripteur']) : ''; 
$idPatient = (isset($_POST['idPatient'])) ? utf8_encode($_POST['idPatient']) : ''; 
$observatiom = (isset($_POST['observatiom'])) ? utf8_encode($_POST['observatiom']) : ''; 
$typediabete = (isset($_POST['typediabete'])) ? utf8_encode($_POST['typediabete']) : ''; 
$datediagnostic = (isset($_POST['datediagnostic'])) ? utf8_encode($_POST['datediagnostic']) : ''; 
$circonstancedecouverte = (isset($_POST['circonstancedecouverte'])) ? utf8_encode($_POST['circonstancedecouverte']) : ''; 
$antecedentfamiliaux = (isset($_POST['antecedentfamiliaux'])) ? utf8_encode($_POST['antecedentfamiliaux']) : ''; 
$datepremieremisesousPompe = (isset($_POST['datepremieremisesousPompe'])) ? utf8_encode($_POST['datepremieremisesousPompe']) : ''; 
$hba1c = (isset($_POST['hba1c'])) ? utf8_encode($_POST['hba1c']) : ''; 
$taille = (isset($_POST['taille'])) ? utf8_encode($_POST['taille']) : ''; 
$poidsactuel = (isset($_POST['poidsactuel'])) ? utf8_encode($_POST['poidsactuel']) : ''; 
$poidsforme = (isset($_POST['poidsforme'])) ? utf8_encode($_POST['poidsforme']) : ''; 
$imc = (isset($_POST['imc'])) ? utf8_encode($_POST['imc']) : ''; 
$nombreglycemieparjour = (isset($_POST['nombreglycemieparjour'])) ? utf8_encode($_POST['nombreglycemieparjour']) : ''; 
$typelecteur = (isset($_POST['typelecteur'])) ? utf8_encode($_POST['typelecteur']) : ''; 
$dateprescription = (isset($_POST['dateprescription'])) ? utf8_encode($_POST['dateprescription']) : ''; 
$styloautopiqueur = (isset($_POST['styloautopiqueur'])) ? utf8_encode($_POST['styloautopiqueur']) : ''; 
$nombreinjectionjour = (isset($_POST['nombreinjectionjour'])) ? utf8_encode($_POST['nombreinjectionjour']) : ''; 
$stylo = (isset($_POST['stylo'])) ? utf8_encode($_POST['stylo']) : ''; 
$autrestylo = (isset($_POST['autrestylo'])) ? utf8_encode($_POST['autrestylo']) : ''; 
$aiguillestylo = (isset($_POST['aiguillestylo'])) ? utf8_encode($_POST['aiguillestylo']) : ''; 
$autreaiguille = (isset($_POST['autreaiguille'])) ? utf8_encode($_POST['autreaiguille']) : ''; 
$insulinelentematin = (isset($_POST['insulinelentematin'])) ? utf8_encode($_POST['insulinelentematin']) : ''; 
$insulinerapidematin = (isset($_POST['insulinerapidematin'])) ? utf8_encode($_POST['insulinerapidematin']) : ''; 
$insulinelentemidi = (isset($_POST['insulinelentemidi'])) ? utf8_encode($_POST['insulinelentemidi']) : ''; 
$insulinerapidemidi = (isset($_POST['insulinerapidemidi'])) ? utf8_encode($_POST['insulinerapidemidi']) : ''; 
$insulinelentesoir = (isset($_POST['insulinelentesoir'])) ? utf8_encode($_POST['insulinelentesoir']) : ''; 
$insulinerapidesoir = (isset($_POST['insulinerapidesoir'])) ? utf8_encode($_POST['insulinerapidesoir']) : ''; 
$insulinelentediner = (isset($_POST['insulinelentediner'])) ? utf8_encode($_POST['insulinelentediner']) : ''; 
$insulinerapidediner = (isset($_POST['insulinerapidediner'])) ? utf8_encode($_POST['insulinerapidediner']) : ''; 
$insulinelentecollation = (isset($_POST['insulinelentecollation'])) ? utf8_encode($_POST['insulinelentecollation']) : ''; 
$insulinerapidecollation = (isset($_POST['insulinerapidecollation'])) ? utf8_encode($_POST['insulinerapidecollation']) : ''; 
$totalinsulinelente = (isset($_POST['totalinsulinelente'])) ? utf8_encode($_POST['totalinsulinelente']) : ''; 
$totalinsulinerapide = (isset($_POST['totalinsulinerapide'])) ? utf8_encode($_POST['totalinsulinerapide']) : ''; 
$specialite1 = (isset($_POST['specialite1'])) ? utf8_encode($_POST['specialite1']) : ''; 
$posologie1 = (isset($_POST['posologie1'])) ? utf8_encode($_POST['posologie1']) : ''; 
$specialite2 = (isset($_POST['specialite2'])) ? utf8_encode($_POST['specialite2']) : ''; 
$posologie2 = (isset($_POST['posologie2'])) ? utf8_encode($_POST['posologie2']) : ''; 
$specialite3 = (isset($_POST['specialite3'])) ? utf8_encode($_POST['specialite3']) : ''; 
$posologie3 = (isset($_POST['posologie3'])) ? utf8_encode($_POST['posologie3']) : ''; 
$specialite4 = (isset($_POST['specialite4'])) ? utf8_encode($_POST['specialite4']) : ''; 
$posologie4 = (isset($_POST['posologie4'])) ? utf8_encode($_POST['posologie4']) : ''; 
$datebasal1 = (isset($_POST['datebasal1'])) ? utf8_encode($_POST['datebasal1']) : ''; 
$Horaire1 = (isset($_POST['Horaire1'])) ? utf8_encode($_POST['Horaire1']) : ''; 
$Debit1 = (isset($_POST['Debit1'])) ? utf8_encode($_POST['Debit1']) : ''; 
$Horaire2 = (isset($_POST['Horaire2'])) ? utf8_encode($_POST['Horaire2']) : ''; 
$Debit2 = (isset($_POST['Debit2'])) ? utf8_encode($_POST['Debit2']) : ''; 
$Horaire3 = (isset($_POST['Horaire3'])) ? utf8_encode($_POST['Horaire3']) : ''; 
$Debit3 = (isset($_POST['Debit3'])) ? utf8_encode($_POST['Debit3']) : ''; 
$Horaire4 = (isset($_POST['Horaire4'])) ? utf8_encode($_POST['Horaire4']) : ''; 
$Debit4 = (isset($_POST['Debit4'])) ? utf8_encode($_POST['Debit4']) : ''; 
$Horaire1N = (isset($_POST['Horaire1N'])) ? utf8_encode($_POST['Horaire1N']) : ''; 
$Debit1N = (isset($_POST['Debit1N'])) ? utf8_encode($_POST['Debit1N']) : ''; 
$Horaire2N = (isset($_POST['Horaire2N'])) ? utf8_encode($_POST['Horaire2N']) : ''; 
$Debit2N = (isset($_POST['Debit2N'])) ? utf8_encode($_POST['Debit2N']) : ''; 
$Horaire3N = (isset($_POST['Horaire3N'])) ? utf8_encode($_POST['Horaire3N']) : ''; 
$Debit3N = (isset($_POST['Debit3N'])) ? utf8_encode($_POST['Debit3N']) : ''; 
$Horaire4N = (isset($_POST['Horaire4N'])) ? utf8_encode($_POST['Horaire4N']) : ''; 
$Debit4N = (isset($_POST['Debit4N'])) ? utf8_encode($_POST['Debit4N']) : ''; 
$datebasal2 = (isset($_POST['datebasal2'])) ? utf8_encode($_POST['datebasal2']) : ''; 
$Horaire_1 = (isset($_POST['Horaire_1'])) ? utf8_encode($_POST['Horaire_1']) : ''; 
$Debit_1 = (isset($_POST['Debit_1'])) ? utf8_encode($_POST['Debit_1']) : ''; 
$Horaire_2 = (isset($_POST['Horaire_2'])) ? utf8_encode($_POST['Horaire_2']) : ''; 
$Debit_2 = (isset($_POST['Debit_2'])) ? utf8_encode($_POST['Debit_2']) : ''; 
$Horaire_3 = (isset($_POST['Horaire_3'])) ? utf8_encode($_POST['Horaire_3']) : ''; 
$Debit_3 = (isset($_POST['Debit_3'])) ? utf8_encode($_POST['Debit_3']) : ''; 
$Horaire_4 = (isset($_POST['Horaire_4'])) ? utf8_encode($_POST['Horaire_4']) : ''; 
$Debit_4 = (isset($_POST['Debit_4'])) ? utf8_encode($_POST['Debit_4']) : ''; 
$Horaire_N1 = (isset($_POST['Horaire_N1'])) ? utf8_encode($_POST['Horaire_N1']) : ''; 
$Debit_N1 = (isset($_POST['Debit_N1'])) ? utf8_encode($_POST['Debit_N1']) : ''; 
$Horaire_N2 = (isset($_POST['Horaire_N2'])) ? utf8_encode($_POST['Horaire_N2']) : ''; 
$Debit_N2 = (isset($_POST['Debit_N2'])) ? utf8_encode($_POST['Debit_N2']) : ''; 
$Horaire_N3 = (isset($_POST['Horaire_N3'])) ? utf8_encode($_POST['Horaire_N3']) : ''; 
$Debit_N3 = (isset($_POST['Debit_N3'])) ? utf8_encode($_POST['Debit_N3']) : ''; 
$Horaire_N4 = (isset($_POST['Horaire_N4'])) ? utf8_encode($_POST['Horaire_N4']) : ''; 
$Debit_N4 = (isset($_POST['Debit_N4'])) ? utf8_encode($_POST['Debit_N4']) : ''; 
$datebolus = (isset($_POST['datebolus'])) ? utf8_encode($_POST['datebolus']) : ''; 
$ValGlycemique1 = (isset($_POST['ValGlycemique1'])) ? utf8_encode($_POST['ValGlycemique1']) : ''; 
$ValGlyMatin1 = (isset($_POST['ValGlyMatin1'])) ? utf8_encode($_POST['ValGlyMatin1']) : ''; 
$ValGlyMid1 = (isset($_POST['ValGlyMid1'])) ? utf8_encode($_POST['ValGlyMid1']) : ''; 
$ValGlyCollation1 = (isset($_POST['ValGlyCollation1'])) ? utf8_encode($_POST['ValGlyCollation1']) : ''; 
$ValGlySoir1 = (isset($_POST['ValGlySoir1'])) ? utf8_encode($_POST['ValGlySoir1']) : ''; 
$ValGlyAutre1 = (isset($_POST['ValGlyAutre1'])) ? utf8_encode($_POST['ValGlyAutre1']) : ''; 
$ValGlycemique2 = (isset($_POST['ValGlycemique2'])) ? utf8_encode($_POST['ValGlycemique2']) : ''; 
$ValGlyMatin2 = (isset($_POST['ValGlyMatin2'])) ? utf8_encode($_POST['ValGlyMatin2']) : ''; 
$ValGlyMid2 = (isset($_POST['ValGlyMid2'])) ? utf8_encode($_POST['ValGlyMid2']) : ''; 
$ValGlyCollation2 = (isset($_POST['ValGlyCollation2'])) ? utf8_encode($_POST['ValGlyCollation2']) : ''; 
$ValGlySoir2 = (isset($_POST['ValGlySoir2'])) ? utf8_encode($_POST['ValGlySoir2']) : ''; 
$ValGlyAutre2 = (isset($_POST['ValGlyAutre2'])) ? utf8_encode($_POST['ValGlyAutre2']) : ''; 
$ValGlycemique3 = (isset($_POST['ValGlycemique3'])) ? utf8_encode($_POST['ValGlycemique3']) : ''; 
$ValGlyMatin3 = (isset($_POST['ValGlyMatin3'])) ? utf8_encode($_POST['ValGlyMatin3']) : ''; 
$ValGlyMid3 = (isset($_POST['ValGlyMid3'])) ? utf8_encode($_POST['ValGlyMid3']) : ''; 
$ValGlyCollation3 = (isset($_POST['ValGlyCollation3'])) ? utf8_encode($_POST['ValGlyCollation3']) : ''; 
$ValGlySoir3 = (isset($_POST['ValGlySoir3'])) ? utf8_encode($_POST['ValGlySoir3']) : ''; 
$ValGlyAutre3 = (isset($_POST['ValGlyAutre3'])) ? utf8_encode($_POST['ValGlyAutre3']) : ''; 
$ValGlycemique4 = (isset($_POST['ValGlycemique4'])) ? utf8_encode($_POST['ValGlycemique4']) : ''; 
$ValGlyMatin4 = (isset($_POST['ValGlyMatin4'])) ? utf8_encode($_POST['ValGlyMatin4']) : ''; 
$ValGlyMid4 = (isset($_POST['ValGlyMid4'])) ? utf8_encode($_POST['ValGlyMid4']) : ''; 
$ValGlyCollation4 = (isset($_POST['ValGlyCollation4'])) ? utf8_encode($_POST['ValGlyCollation4']) : ''; 
$ValGlySoir4 = (isset($_POST['ValGlySoir4'])) ? utf8_encode($_POST['ValGlySoir4']) : ''; 
$ValGlyAutre4 = (isset($_POST['ValGlyAutre4'])) ? utf8_encode($_POST['ValGlyAutre4']) : ''; 
$ValGlycemique5 = (isset($_POST['ValGlycemique5'])) ? utf8_encode($_POST['ValGlycemique5']) : ''; 
$ValGlyMatin5 = (isset($_POST['ValGlyMatin5'])) ? utf8_encode($_POST['ValGlyMatin5']) : ''; 
$ValGlyMid5 = (isset($_POST['ValGlyMid5'])) ? utf8_encode($_POST['ValGlyMid5']) : ''; 
$ValGlyCollation5 = (isset($_POST['ValGlyCollation5'])) ? utf8_encode($_POST['ValGlyCollation5']) : ''; 
$ValGlySoir5 = (isset($_POST['ValGlySoir5'])) ? utf8_encode($_POST['ValGlySoir5']) : ''; 
$ValGlyAutre5 = (isset($_POST['ValGlyAutre5'])) ? utf8_encode($_POST['ValGlyAutre5']) : ''; 
$ValGlycemique6 = (isset($_POST['ValGlycemique6'])) ? utf8_encode($_POST['ValGlycemique6']) : ''; 
$ValGlyMatin6 = (isset($_POST['ValGlyMatin6'])) ? utf8_encode($_POST['ValGlyMatin6']) : ''; 
$ValGlyMid6 = (isset($_POST['ValGlyMid6'])) ? utf8_encode($_POST['ValGlyMid6']) : ''; 
$ValGlyCollation6 = (isset($_POST['ValGlyCollation6'])) ? utf8_encode($_POST['ValGlyCollation6']) : ''; 
$ValGlySoir6 = (isset($_POST['ValGlySoir6'])) ? utf8_encode($_POST['ValGlySoir6']) : ''; 
$ValGlyAutre6 = (isset($_POST['ValGlyAutre6'])) ? utf8_encode($_POST['ValGlyAutre6']) : ''; 
$ValGlycemique7 = (isset($_POST['ValGlycemique7'])) ? utf8_encode($_POST['ValGlycemique7']) : ''; 
$ValGlyMatin7 = (isset($_POST['ValGlyMatin7'])) ? utf8_encode($_POST['ValGlyMatin7']) : ''; 
$ValGlyMid7 = (isset($_POST['ValGlyMid7'])) ? utf8_encode($_POST['ValGlyMid7']) : ''; 
$ValGlyCollation7 = (isset($_POST['ValGlyCollation7'])) ? utf8_encode($_POST['ValGlyCollation7']) : ''; 
$ValGlySoir7 = (isset($_POST['ValGlySoir7'])) ? utf8_encode($_POST['ValGlySoir7']) : ''; 
$ValGlyAutre7 = (isset($_POST['ValGlyAutre7'])) ? utf8_encode($_POST['ValGlyAutre7']) : ''; 
$dateglycemie = (isset($_POST['dateglycemie'])) ? utf8_encode($_POST['dateglycemie']) : ''; 
$glycemie1 = (isset($_POST['glycemie1'])) ? utf8_encode($_POST['glycemie1']) : ''; 
$glycemie2 = (isset($_POST['glycemie2'])) ? utf8_encode($_POST['glycemie2']) : ''; 
$glycemie3 = (isset($_POST['glycemie3'])) ? utf8_encode($_POST['glycemie3']) : ''; 
$glycemie4 = (isset($_POST['glycemie4'])) ? utf8_encode($_POST['glycemie4']) : ''; 
$glycemie5 = (isset($_POST['glycemie5'])) ? utf8_encode($_POST['glycemie5']) : ''; 
$glycemie6 = (isset($_POST['glycemie6'])) ? utf8_encode($_POST['glycemie6']) : ''; 
$glycemie7 = (isset($_POST['glycemie7'])) ? utf8_encode($_POST['glycemie7']) : ''; 
$glycemie8 = (isset($_POST['glycemie8'])) ? utf8_encode($_POST['glycemie8']) : ''; 
$glycemie9 = (isset($_POST['glycemie9'])) ? utf8_encode($_POST['glycemie9']) : ''; 
$glycemie10 = (isset($_POST['glycemie10'])) ? utf8_encode($_POST['glycemie10']) : ''; 
$glycemie11 = (isset($_POST['glycemie11'])) ? utf8_encode($_POST['glycemie11']) : ''; 
$glycemie12 = (isset($_POST['glycemie12'])) ? utf8_encode($_POST['glycemie12']) : ''; 
$glycemie13 = (isset($_POST['glycemie13'])) ? utf8_encode($_POST['glycemie13']) : ''; 
$glycemie14 = (isset($_POST['glycemie14'])) ? utf8_encode($_POST['glycemie14']) : ''; 
$glycemie15 = (isset($_POST['glycemie15'])) ? utf8_encode($_POST['glycemie15']) : ''; 
$glycemie16 = (isset($_POST['glycemie16'])) ? utf8_encode($_POST['glycemie16']) : ''; 
$glycemie17 = (isset($_POST['glycemie17'])) ? utf8_encode($_POST['glycemie17']) : ''; 
$glycemie18 = (isset($_POST['glycemie18'])) ? utf8_encode($_POST['glycemie18']) : ''; 
$glycemie19 = (isset($_POST['glycemie19'])) ? utf8_encode($_POST['glycemie19']) : ''; 
$glycemie20 = (isset($_POST['glycemie20'])) ? utf8_encode($_POST['glycemie20']) : ''; 
$glycemie21 = (isset($_POST['glycemie21'])) ? utf8_encode($_POST['glycemie21']) : ''; 
$glycemie22 = (isset($_POST['glycemie22'])) ? utf8_encode($_POST['glycemie22']) : ''; 
$glycemie23 = (isset($_POST['glycemie23'])) ? utf8_encode($_POST['glycemie23']) : ''; 
$glycemie24 = (isset($_POST['glycemie24'])) ? utf8_encode($_POST['glycemie24']) : ''; 
$glycemie25 = (isset($_POST['glycemie25'])) ? utf8_encode($_POST['glycemie25']) : ''; 
$glycemie26 = (isset($_POST['glycemie26'])) ? utf8_encode($_POST['glycemie26']) : ''; 
$glycemie27 = (isset($_POST['glycemie27'])) ? utf8_encode($_POST['glycemie27']) : ''; 
$glycemie28 = (isset($_POST['glycemie28'])) ? utf8_encode($_POST['glycemie28']) : ''; 
$glycemie29 = (isset($_POST['glycemie29'])) ? utf8_encode($_POST['glycemie29']) : ''; 
$glycemie30 = (isset($_POST['glycemie30'])) ? utf8_encode($_POST['glycemie30']) : ''; 
$glycemie31 = (isset($_POST['glycemie31'])) ? utf8_encode($_POST['glycemie31']) : ''; 
$glycemie32 = (isset($_POST['glycemie32'])) ? utf8_encode($_POST['glycemie32']) : ''; 
$glycemie33 = (isset($_POST['glycemie33'])) ? utf8_encode($_POST['glycemie33']) : ''; 
$glycemie34 = (isset($_POST['glycemie34'])) ? utf8_encode($_POST['glycemie34']) : ''; 
$glycemie35 = (isset($_POST['glycemie35'])) ? utf8_encode($_POST['glycemie35']) : ''; 
$glycemie36 = (isset($_POST['glycemie36'])) ? utf8_encode($_POST['glycemie36']) : ''; 
$glycemie37 = (isset($_POST['glycemie37'])) ? utf8_encode($_POST['glycemie37']) : ''; 
$glycemie38 = (isset($_POST['glycemie38'])) ? utf8_encode($_POST['glycemie38']) : ''; 
$glycemie39 = (isset($_POST['glycemie39'])) ? utf8_encode($_POST['glycemie39']) : ''; 
$glycemie40 = (isset($_POST['glycemie40'])) ? utf8_encode($_POST['glycemie40']) : ''; 
$glycemie41 = (isset($_POST['glycemie41'])) ? utf8_encode($_POST['glycemie41']) : ''; 
$glycemie42 = (isset($_POST['glycemie42'])) ? utf8_encode($_POST['glycemie42']) : ''; 
$glycemie43 = (isset($_POST['glycemie43'])) ? utf8_encode($_POST['glycemie43']) : ''; 
$glycemie44 = (isset($_POST['glycemie44'])) ? utf8_encode($_POST['glycemie44']) : ''; 
$glycemie45 = (isset($_POST['glycemie45'])) ? utf8_encode($_POST['glycemie45']) : ''; 
$glycemie46 = (isset($_POST['glycemie46'])) ? utf8_encode($_POST['glycemie46']) : ''; 
$glycemie47 = (isset($_POST['glycemie47'])) ? utf8_encode($_POST['glycemie47']) : ''; 
$glycemie48 = (isset($_POST['glycemie48'])) ? utf8_encode($_POST['glycemie48']) : ''; 
$glycemie49 = (isset($_POST['glycemie49'])) ? utf8_encode($_POST['glycemie49']) : ''; 
$glycemie50 = (isset($_POST['glycemie50'])) ? utf8_encode($_POST['glycemie50']) : ''; 
$glycemie51 = (isset($_POST['glycemie51'])) ? utf8_encode($_POST['glycemie51']) : ''; 
$glycemie52 = (isset($_POST['glycemie52'])) ? utf8_encode($_POST['glycemie52']) : ''; 
$glycemie53 = (isset($_POST['glycemie53'])) ? utf8_encode($_POST['glycemie53']) : ''; 
$glycemie54 = (isset($_POST['glycemie54'])) ? utf8_encode($_POST['glycemie54']) : ''; 
$glycemie55 = (isset($_POST['glycemie55'])) ? utf8_encode($_POST['glycemie55']) : ''; 
$glycemie56 = (isset($_POST['glycemie56'])) ? utf8_encode($_POST['glycemie56']) : ''; 
$glycemie57 = (isset($_POST['glycemie57'])) ? utf8_encode($_POST['glycemie57']) : ''; 
$glycemie58 = (isset($_POST['glycemie58'])) ? utf8_encode($_POST['glycemie58']) : ''; 
$glycemie59 = (isset($_POST['glycemie59'])) ? utf8_encode($_POST['glycemie59']) : ''; 
$glycemie60 = (isset($_POST['glycemie60'])) ? utf8_encode($_POST['glycemie60']) : ''; 
$glycemie61 = (isset($_POST['glycemie61'])) ? utf8_encode($_POST['glycemie61']) : ''; 
$glycemie62 = (isset($_POST['glycemie62'])) ? utf8_encode($_POST['glycemie62']) : ''; 
$glycemie63 = (isset($_POST['glycemie63'])) ? utf8_encode($_POST['glycemie63']) : ''; 
$glycemie64 = (isset($_POST['glycemie64'])) ? utf8_encode($_POST['glycemie64']) : ''; 
$glycemie65 = (isset($_POST['glycemie65'])) ? utf8_encode($_POST['glycemie65']) : ''; 
$glycemie66 = (isset($_POST['glycemie66'])) ? utf8_encode($_POST['glycemie66']) : ''; 
$glycemie67 = (isset($_POST['glycemie67'])) ? utf8_encode($_POST['glycemie67']) : ''; 
$glycemie68 = (isset($_POST['glycemie68'])) ? utf8_encode($_POST['glycemie68']) : ''; 
$glycemie69 = (isset($_POST['glycemie69'])) ? utf8_encode($_POST['glycemie69']) : ''; 
$glycemie70 = (isset($_POST['glycemie70'])) ? utf8_encode($_POST['glycemie70']) : ''; 
$glycemie71 = (isset($_POST['glycemie71'])) ? utf8_encode($_POST['glycemie71']) : ''; 
$glycemie72 = (isset($_POST['glycemie72'])) ? utf8_encode($_POST['glycemie72']) : ''; 
$glycemie73 = (isset($_POST['glycemie73'])) ? utf8_encode($_POST['glycemie73']) : ''; 
$glycemie74 = (isset($_POST['glycemie74'])) ? utf8_encode($_POST['glycemie74']) : ''; 
$glycemie75 = (isset($_POST['glycemie75'])) ? utf8_encode($_POST['glycemie75']) : ''; 
$glycemie76 = (isset($_POST['glycemie76'])) ? utf8_encode($_POST['glycemie76']) : ''; 
$glycemie77 = (isset($_POST['glycemie77'])) ? utf8_encode($_POST['glycemie77']) : ''; 
$glycemie78 = (isset($_POST['glycemie78'])) ? utf8_encode($_POST['glycemie78']) : ''; 
$glycemie79 = (isset($_POST['glycemie79'])) ? utf8_encode($_POST['glycemie79']) : ''; 
$glycemie80 = (isset($_POST['glycemie80'])) ? utf8_encode($_POST['glycemie80']) : ''; 
$glycemie81 = (isset($_POST['glycemie81'])) ? utf8_encode($_POST['glycemie81']) : ''; 
$glycemie82 = (isset($_POST['glycemie82'])) ? utf8_encode($_POST['glycemie82']) : ''; 
$glycemie83 = (isset($_POST['glycemie83'])) ? utf8_encode($_POST['glycemie83']) : ''; 
$glycemie84 = (isset($_POST['glycemie84'])) ? utf8_encode($_POST['glycemie84']) : ''; 
$synthesecommentaire = (isset($_POST['synthesecommentaire'])) ? utf8_encode($_POST['synthesecommentaire']) : ''; 
$objectifglycemiquepreprandial = (isset($_POST['objectifglycemiquepreprandial'])) ? utf8_encode($_POST['objectifglycemiquepreprandial']) : ''; 
$objectifglycemiquepostprandial = (isset($_POST['objectifglycemiquepostprandial'])) ? utf8_encode($_POST['objectifglycemiquepostprandial']) : ''; 
$ValDatesHemGlyc1 = (isset($_POST['ValDatesHemGlyc1'])) ? utf8_encode($_POST['ValDatesHemGlyc1']) : ''; 
$ValDatesHemGlyc2 = (isset($_POST['ValDatesHemGlyc2'])) ? utf8_encode($_POST['ValDatesHemGlyc2']) : ''; 
$ValDatesHemGlyc3 = (isset($_POST['ValDatesHemGlyc3'])) ? utf8_encode($_POST['ValDatesHemGlyc3']) : ''; 
$ValDatesHemGlyc4 = (isset($_POST['ValDatesHemGlyc4'])) ? utf8_encode($_POST['ValDatesHemGlyc4']) : ''; 
$ValDatesHemGlyc5 = (isset($_POST['ValDatesHemGlyc5'])) ? utf8_encode($_POST['ValDatesHemGlyc5']) : ''; 
$ValDatesHemGlyc6 = (isset($_POST['ValDatesHemGlyc6'])) ? utf8_encode($_POST['ValDatesHemGlyc6']) : ''; 
$ValDatesHemGlyc7 = (isset($_POST['ValDatesHemGlyc7'])) ? utf8_encode($_POST['ValDatesHemGlyc7']) : ''; 
$ValDatesHemGlyc8 = (isset($_POST['ValDatesHemGlyc8'])) ? utf8_encode($_POST['ValDatesHemGlyc8']) : ''; 
$ValDatesHemGlyc9 = (isset($_POST['ValDatesHemGlyc9'])) ? utf8_encode($_POST['ValDatesHemGlyc9']) : ''; 
$ValHbA1cHemGlyc1 = (isset($_POST['ValHbA1cHemGlyc1'])) ? utf8_encode($_POST['ValHbA1cHemGlyc1']) : ''; 
$ValHbA1cHemGlyc2 = (isset($_POST['ValHbA1cHemGlyc2'])) ? utf8_encode($_POST['ValHbA1cHemGlyc2']) : ''; 
$ValHbA1cHemGlyc3 = (isset($_POST['ValHbA1cHemGlyc3'])) ? utf8_encode($_POST['ValHbA1cHemGlyc3']) : ''; 
$ValHbA1cHemGlyc4 = (isset($_POST['ValHbA1cHemGlyc4'])) ? utf8_encode($_POST['ValHbA1cHemGlyc4']) : ''; 
$ValHbA1cHemGlyc5 = (isset($_POST['ValHbA1cHemGlyc5'])) ? utf8_encode($_POST['ValHbA1cHemGlyc5']) : ''; 
$ValHbA1cHemGlyc6 = (isset($_POST['ValHbA1cHemGlyc6'])) ? utf8_encode($_POST['ValHbA1cHemGlyc6']) : ''; 
$ValHbA1cHemGlyc7 = (isset($_POST['ValHbA1cHemGlyc7'])) ? utf8_encode($_POST['ValHbA1cHemGlyc7']) : ''; 
$ValHbA1cHemGlyc8 = (isset($_POST['ValHbA1cHemGlyc8'])) ? utf8_encode($_POST['ValHbA1cHemGlyc8']) : ''; 
$ValHbA1cHemGlyc9 = (isset($_POST['ValHbA1cHemGlyc9'])) ? utf8_encode($_POST['ValHbA1cHemGlyc9']) : ''; 
$activitephysique = (isset($_POST['activitephysique'])) ? utf8_encode($_POST['activitephysique']) : ''; 
$profession = (isset($_POST['profession'])) ? utf8_encode($_POST['profession']) : ''; 
$situationfamiliale = (isset($_POST['situationfamiliale'])) ? utf8_encode($_POST['situationfamiliale']) : ''; 
$observation = (isset($_POST['observation'])) ? utf8_encode($_POST['observation']) : ''; 
$hygienealimentaire = (isset($_POST['hygienealimentaire'])) ? utf8_encode($_POST['hygienealimentaire']) : ''; 
$stabilitehoraires = (isset($_POST['stabilitehoraires'])) ? utf8_encode($_POST['stabilitehoraires']) : ''; 
$details = (isset($_POST['details'])) ? utf8_encode($_POST['details']) : ''; 
$environnement = (isset($_POST['environnement'])) ? utf8_encode($_POST['environnement']) : ''; 
$etatcutane = (isset($_POST['etatcutane'])) ? utf8_encode($_POST['etatcutane']) : ''; 
$choixpoint = (isset($_POST['choixpoint'])) ? utf8_encode($_POST['choixpoint']) : ''; 
$rougeur = (isset($_POST['rougeur'])) ? utf8_encode($_POST['rougeur']) : ''; 
$petitdejeunerDe = (isset($_POST['petitdejeunerDe'])) ? utf8_encode($_POST['petitdejeunerDe']) : ''; 
$petitdejeunerA = (isset($_POST['petitdejeunerA'])) ? utf8_encode($_POST['petitdejeunerA']) : ''; 
$petitdejeunerRotation = (isset($_POST['petitdejeunerRotation'])) ? utf8_encode($_POST['petitdejeunerRotation']) : ''; 
$petitdejeunerObjectif = (isset($_POST['petitdejeunerObjectif'])) ? utf8_encode($_POST['petitdejeunerObjectif']) : ''; 
$petitdejeunerSensibilite = (isset($_POST['petitdejeunerSensibilite'])) ? utf8_encode($_POST['petitdejeunerSensibilite']) : ''; 
$dejeunerDe = (isset($_POST['dejeunerDe'])) ? utf8_encode($_POST['dejeunerDe']) : ''; 
$dejeunerA = (isset($_POST['dejeunerA'])) ? utf8_encode($_POST['dejeunerA']) : ''; 
$dejeunerRotation = (isset($_POST['dejeunerRotation'])) ? utf8_encode($_POST['dejeunerRotation']) : ''; 
$dejeunerObjectif = (isset($_POST['dejeunerObjectif'])) ? utf8_encode($_POST['dejeunerObjectif']) : ''; 
$dejeunerSensibilite = (isset($_POST['dejeunerSensibilite'])) ? utf8_encode($_POST['dejeunerSensibilite']) : ''; 
$gouterDe = (isset($_POST['gouterDe'])) ? utf8_encode($_POST['gouterDe']) : ''; 
$gouterA = (isset($_POST['gouterA'])) ? utf8_encode($_POST['gouterA']) : ''; 
$gouterRotation = (isset($_POST['gouterRotation'])) ? utf8_encode($_POST['gouterRotation']) : ''; 
$gouterObjectif = (isset($_POST['gouterObjectif'])) ? utf8_encode($_POST['gouterObjectif']) : ''; 
$gouterSensibilite = (isset($_POST['gouterSensibilite'])) ? utf8_encode($_POST['gouterSensibilite']) : ''; 
$dinerDe = (isset($_POST['dinerDe'])) ? utf8_encode($_POST['dinerDe']) : ''; 
$dinerA = (isset($_POST['dinerA'])) ? utf8_encode($_POST['dinerA']) : ''; 
$dinerRotation = (isset($_POST['dinerRotation'])) ? utf8_encode($_POST['dinerRotation']) : ''; 
$dinerObjectif = (isset($_POST['dinerObjectif'])) ? utf8_encode($_POST['dinerObjectif']) : ''; 
$dinerSensibilite = (isset($_POST['dinerSensibilite'])) ? utf8_encode($_POST['dinerSensibilite']) : ''; 
$collationDe = (isset($_POST['collationDe'])) ? utf8_encode($_POST['collationDe']) : ''; 
$collationA = (isset($_POST['collationA'])) ? utf8_encode($_POST['collationA']) : ''; 
$collationRotation = (isset($_POST['collationRotation'])) ? utf8_encode($_POST['collationRotation']) : ''; 
$collationObjectif = (isset($_POST['collationObjectif'])) ? utf8_encode($_POST['collationObjectif']) : ''; 
$collationSensibilite = (isset($_POST['collationSensibilite'])) ? utf8_encode($_POST['collationSensibilite']) : ''; 
$regime = (isset($_POST['regime'])) ? utf8_encode($_POST['regime']) : ''; 
$observation2 = (isset($_POST['observation2'])) ? utf8_encode($_POST['observation2']) : ''; 
$survenue = (isset($_POST['survenue'])) ? utf8_encode($_POST['survenue']) : ''; 
$atcd = (isset($_POST['atcd'])) ? utf8_encode($_POST['atcd']) : ''; 
$traitement = (isset($_POST['traitement'])) ? utf8_encode($_POST['traitement']) : ''; 
$date1 = (isset($_POST['date1'])) ? utf8_encode($_POST['date1']) : ''; 
$date2 = (isset($_POST['date2'])) ? utf8_encode($_POST['date2']) : ''; 
$date3 = (isset($_POST['date3'])) ? utf8_encode($_POST['date3']) : ''; 
$date4 = (isset($_POST['date4'])) ? utf8_encode($_POST['date4']) : ''; 
$date5 = (isset($_POST['date5'])) ? utf8_encode($_POST['date5']) : ''; 
$date6 = (isset($_POST['date6'])) ? utf8_encode($_POST['date6']) : ''; 
$date7 = (isset($_POST['date7'])) ? utf8_encode($_POST['date7']) : ''; 
$date8 = (isset($_POST['date8'])) ? utf8_encode($_POST['date8']) : ''; 
$date9 = (isset($_POST['date9'])) ? utf8_encode($_POST['date9']) : ''; 
$taille1 = (isset($_POST['taille1'])) ? utf8_encode($_POST['taille1']) : ''; 
$taille2 = (isset($_POST['taille2'])) ? utf8_encode($_POST['taille2']) : ''; 
$taille3 = (isset($_POST['taille3'])) ? utf8_encode($_POST['taille3']) : ''; 
$taille4 = (isset($_POST['taille4'])) ? utf8_encode($_POST['taille4']) : ''; 
$taille5 = (isset($_POST['taille5'])) ? utf8_encode($_POST['taille5']) : ''; 
$taille6 = (isset($_POST['taille6'])) ? utf8_encode($_POST['taille6']) : ''; 
$taille7 = (isset($_POST['taille7'])) ? utf8_encode($_POST['taille7']) : ''; 
$taille8 = (isset($_POST['taille8'])) ? utf8_encode($_POST['taille8']) : ''; 
$taille9 = (isset($_POST['taille9'])) ? utf8_encode($_POST['taille9']) : ''; 
$poids1 = (isset($_POST['poids1'])) ? utf8_encode($_POST['poids1']) : ''; 
$poids2 = (isset($_POST['poids2'])) ? utf8_encode($_POST['poids2']) : ''; 
$poids3 = (isset($_POST['poids3'])) ? utf8_encode($_POST['poids3']) : ''; 
$poids4 = (isset($_POST['poids4'])) ? utf8_encode($_POST['poids4']) : ''; 
$poids5 = (isset($_POST['poids5'])) ? utf8_encode($_POST['poids5']) : ''; 
$poids6 = (isset($_POST['poids6'])) ? utf8_encode($_POST['poids6']) : ''; 
$poids7 = (isset($_POST['poids7'])) ? utf8_encode($_POST['poids7']) : ''; 
$poids8 = (isset($_POST['poids8'])) ? utf8_encode($_POST['poids8']) : ''; 
$poids9 = (isset($_POST['poids9'])) ? utf8_encode($_POST['poids9']) : ''; 
$imc1 = (isset($_POST['imc1'])) ? utf8_encode($_POST['imc1']) : ''; 
$imc2 = (isset($_POST['imc2'])) ? utf8_encode($_POST['imc2']) : ''; 
$imc3 = (isset($_POST['imc3'])) ? utf8_encode($_POST['imc3']) : ''; 
$imc4 = (isset($_POST['imc4'])) ? utf8_encode($_POST['imc4']) : ''; 
$imc5 = (isset($_POST['imc5'])) ? utf8_encode($_POST['imc5']) : ''; 
$imc6 = (isset($_POST['imc6'])) ? utf8_encode($_POST['imc6']) : ''; 
$imc7 = (isset($_POST['imc7'])) ? utf8_encode($_POST['imc7']) : ''; 
$imc8 = (isset($_POST['imc8'])) ? utf8_encode($_POST['imc8']) : ''; 
$imc9 = (isset($_POST['imc9'])) ? utf8_encode($_POST['imc9']) : ''; 
$pmpdate1 = (isset($_POST['pmpdate1'])) ? utf8_encode($_POST['pmpdate1']) : ''; 
$pmpdate2 = (isset($_POST['pmpdate2'])) ? utf8_encode($_POST['pmpdate2']) : ''; 
$pmpdate3 = (isset($_POST['pmpdate3'])) ? utf8_encode($_POST['pmpdate3']) : ''; 
$pmpdate4 = (isset($_POST['pmpdate4'])) ? utf8_encode($_POST['pmpdate4']) : ''; 
$pmpselect1 = (isset($_POST['pmpselect1'])) ? utf8_encode($_POST['pmpselect1']) : ''; 
$pmpselect2 = (isset($_POST['pmpselect2'])) ? utf8_encode($_POST['pmpselect2']) : ''; 
$pmpselect3 = (isset($_POST['pmpselect3'])) ? utf8_encode($_POST['pmpselect3']) : ''; 
$pmpselect4 = (isset($_POST['pmpselect4'])) ? utf8_encode($_POST['pmpselect4']) : ''; 
$pmpcommentaire1 = (isset($_POST['pmpcommentaire1'])) ? utf8_encode($_POST['pmpcommentaire1']) : ''; 
$pmpselect5 = (isset($_POST['pmpselect5'])) ? utf8_encode($_POST['pmpselect5']) : ''; 
$pmpselect6 = (isset($_POST['pmpselect6'])) ? utf8_encode($_POST['pmpselect6']) : ''; 
$pmpselect7 = (isset($_POST['pmpselect7'])) ? utf8_encode($_POST['pmpselect7']) : ''; 
$pmpselect8 = (isset($_POST['pmpselect8'])) ? utf8_encode($_POST['pmpselect8']) : ''; 
$pmpcommentaire2 = (isset($_POST['pmpcommentaire2'])) ? utf8_encode($_POST['pmpcommentaire2']) : ''; 
$pmpselect9 = (isset($_POST['pmpselect9'])) ? utf8_encode($_POST['pmpselect9']) : ''; 
$pmpselect10 = (isset($_POST['pmpselect10'])) ? utf8_encode($_POST['pmpselect10']) : ''; 
$pmpselect11 = (isset($_POST['pmpselect11'])) ? utf8_encode($_POST['pmpselect11']) : ''; 
$pmpselect12 = (isset($_POST['pmpselect12'])) ? utf8_encode($_POST['pmpselect12']) : ''; 
$pmpcommentaire3 = (isset($_POST['pmpcommentaire3'])) ? utf8_encode($_POST['pmpcommentaire3']) : ''; 
$pmpselect13 = (isset($_POST['pmpselect13'])) ? utf8_encode($_POST['pmpselect13']) : ''; 
$pmpselect14 = (isset($_POST['pmpselect14'])) ? utf8_encode($_POST['pmpselect14']) : ''; 
$pmpselect15 = (isset($_POST['pmpselect15'])) ? utf8_encode($_POST['pmpselect15']) : ''; 
$pmpselect16 = (isset($_POST['pmpselect16'])) ? utf8_encode($_POST['pmpselect16']) : ''; 
$pmpcommentaire4 = (isset($_POST['pmpcommentaire4'])) ? utf8_encode($_POST['pmpcommentaire4']) : ''; 
$pmpselect17 = (isset($_POST['pmpselect17'])) ? utf8_encode($_POST['pmpselect17']) : ''; 
$pmpselect18 = (isset($_POST['pmpselect18'])) ? utf8_encode($_POST['pmpselect18']) : ''; 
$pmpselect19 = (isset($_POST['pmpselect19'])) ? utf8_encode($_POST['pmpselect19']) : ''; 
$pmpselect20 = (isset($_POST['pmpselect20'])) ? utf8_encode($_POST['pmpselect20']) : ''; 
$pmpcommentaire5 = (isset($_POST['pmpcommentaire5'])) ? utf8_encode($_POST['pmpcommentaire5']) : ''; 
$pmpselect21 = (isset($_POST['pmpselect21'])) ? utf8_encode($_POST['pmpselect21']) : ''; 
$pmpselect22 = (isset($_POST['pmpselect22'])) ? utf8_encode($_POST['pmpselect22']) : ''; 
$pmpselect23 = (isset($_POST['pmpselect23'])) ? utf8_encode($_POST['pmpselect23']) : ''; 
$pmpselect24 = (isset($_POST['pmpselect24'])) ? utf8_encode($_POST['pmpselect24']) : ''; 
$pmpcommentaire6 = (isset($_POST['pmpcommentaire6'])) ? utf8_encode($_POST['pmpcommentaire6']) : ''; 
$pmpselect25 = (isset($_POST['pmpselect25'])) ? utf8_encode($_POST['pmpselect25']) : ''; 
$pmpselect26 = (isset($_POST['pmpselect26'])) ? utf8_encode($_POST['pmpselect26']) : ''; 
$pmpselect27 = (isset($_POST['pmpselect27'])) ? utf8_encode($_POST['pmpselect27']) : ''; 
$pmpselect28 = (isset($_POST['pmpselect28'])) ? utf8_encode($_POST['pmpselect28']) : ''; 
$pmpcommentaire7 = (isset($_POST['pmpcommentaire7'])) ? utf8_encode($_POST['pmpcommentaire7']) : ''; 
$pmpselect29 = (isset($_POST['pmpselect29'])) ? utf8_encode($_POST['pmpselect29']) : ''; 
$pmpselect291 = (isset($_POST['pmpselect291'])) ? utf8_encode($_POST['pmpselect291']) : ''; 
$pmpselect292 = (isset($_POST['pmpselect292'])) ? utf8_encode($_POST['pmpselect292']) : ''; 
$pmpselect293 = (isset($_POST['pmpselect293'])) ? utf8_encode($_POST['pmpselect293']) : ''; 
$pmpcommentaire8 = (isset($_POST['pmpcommentaire8'])) ? utf8_encode($_POST['pmpcommentaire8']) : ''; 
$pmpselect294 = (isset($_POST['pmpselect294'])) ? utf8_encode($_POST['pmpselect294']) : ''; 
$pmpselect295 = (isset($_POST['pmpselect295'])) ? utf8_encode($_POST['pmpselect295']) : ''; 
$pmpselect296 = (isset($_POST['pmpselect296'])) ? utf8_encode($_POST['pmpselect296']) : ''; 
$pmpselect297 = (isset($_POST['pmpselect297'])) ? utf8_encode($_POST['pmpselect297']) : ''; 
$pmpcommentaire9 = (isset($_POST['pmpcommentaire9'])) ? utf8_encode($_POST['pmpcommentaire9']) : ''; 
$pmpautre = (isset($_POST['pmpautre'])) ? utf8_encode($_POST['pmpautre']) : ''; 
$alarmedate1 = (isset($_POST['alarmedate1'])) ? utf8_encode($_POST['alarmedate1']) : ''; 
$alarmedate2 = (isset($_POST['alarmedate2'])) ? utf8_encode($_POST['alarmedate2']) : ''; 
$alarmedate3 = (isset($_POST['alarmedate3'])) ? utf8_encode($_POST['alarmedate3']) : ''; 
$alarmedate4 = (isset($_POST['alarmedate4'])) ? utf8_encode($_POST['alarmedate4']) : ''; 
$alarmeselect1 = (isset($_POST['alarmeselect1'])) ? utf8_encode($_POST['alarmeselect1']) : ''; 
$alarmeselect2 = (isset($_POST['alarmeselect2'])) ? utf8_encode($_POST['alarmeselect2']) : ''; 
$alarmeselect3 = (isset($_POST['alarmeselect3'])) ? utf8_encode($_POST['alarmeselect3']) : ''; 
$alarmeselect4 = (isset($_POST['alarmeselect4'])) ? utf8_encode($_POST['alarmeselect4']) : ''; 
$alarmecommentaire1 = (isset($_POST['alarmecommentaire1'])) ? utf8_encode($_POST['alarmecommentaire1']) : ''; 
$alarmeselect5 = (isset($_POST['alarmeselect5'])) ? utf8_encode($_POST['alarmeselect5']) : ''; 
$alarmeselect6 = (isset($_POST['alarmeselect6'])) ? utf8_encode($_POST['alarmeselect6']) : ''; 
$alarmeselect7 = (isset($_POST['alarmeselect7'])) ? utf8_encode($_POST['alarmeselect7']) : ''; 
$alarmeselect8 = (isset($_POST['alarmeselect8'])) ? utf8_encode($_POST['alarmeselect8']) : ''; 
$alarmecommentaire2 = (isset($_POST['alarmecommentaire2'])) ? utf8_encode($_POST['alarmecommentaire2']) : ''; 
$alarmeselect9 = (isset($_POST['alarmeselect9'])) ? utf8_encode($_POST['alarmeselect9']) : ''; 
$alarmeselect10 = (isset($_POST['alarmeselect10'])) ? utf8_encode($_POST['alarmeselect10']) : ''; 
$alarmeselect11 = (isset($_POST['alarmeselect11'])) ? utf8_encode($_POST['alarmeselect11']) : ''; 
$alarmeselect12 = (isset($_POST['alarmeselect12'])) ? utf8_encode($_POST['alarmeselect12']) : ''; 
$alarmecommentaire3 = (isset($_POST['alarmecommentaire3'])) ? utf8_encode($_POST['alarmecommentaire3']) : ''; 
$alarmeselect13 = (isset($_POST['alarmeselect13'])) ? utf8_encode($_POST['alarmeselect13']) : ''; 
$alarmeselect14 = (isset($_POST['alarmeselect14'])) ? utf8_encode($_POST['alarmeselect14']) : ''; 
$alarmeselect15 = (isset($_POST['alarmeselect15'])) ? utf8_encode($_POST['alarmeselect15']) : ''; 
$alarmeselect16 = (isset($_POST['alarmeselect16'])) ? utf8_encode($_POST['alarmeselect16']) : ''; 
$alarmecommentaire4 = (isset($_POST['alarmecommentaire4'])) ? utf8_encode($_POST['alarmecommentaire4']) : ''; 
$alarmeselect17 = (isset($_POST['alarmeselect17'])) ? utf8_encode($_POST['alarmeselect17']) : ''; 
$alarmeselect18 = (isset($_POST['alarmeselect18'])) ? utf8_encode($_POST['alarmeselect18']) : ''; 
$alarmeselect19 = (isset($_POST['alarmeselect19'])) ? utf8_encode($_POST['alarmeselect19']) : ''; 
$alarmeselect20 = (isset($_POST['alarmeselect20'])) ? utf8_encode($_POST['alarmeselect20']) : ''; 
$alarmecommentaire5 = (isset($_POST['alarmecommentaire5'])) ? utf8_encode($_POST['alarmecommentaire5']) : ''; 
$alarmeselect21 = (isset($_POST['alarmeselect21'])) ? utf8_encode($_POST['alarmeselect21']) : ''; 
$alarmeselect22 = (isset($_POST['alarmeselect22'])) ? utf8_encode($_POST['alarmeselect22']) : ''; 
$alarmeselect23 = (isset($_POST['alarmeselect23'])) ? utf8_encode($_POST['alarmeselect23']) : ''; 
$alarmeselect24 = (isset($_POST['alarmeselect24'])) ? utf8_encode($_POST['alarmeselect24']) : ''; 
$alarmecommentaire6 = (isset($_POST['alarmecommentaire6'])) ? utf8_encode($_POST['alarmecommentaire6']) : ''; 
$alarmeselect25 = (isset($_POST['alarmeselect25'])) ? utf8_encode($_POST['alarmeselect25']) : ''; 
$alarmeselect26 = (isset($_POST['alarmeselect26'])) ? utf8_encode($_POST['alarmeselect26']) : ''; 
$alarmeselect27 = (isset($_POST['alarmeselect27'])) ? utf8_encode($_POST['alarmeselect27']) : ''; 
$alarmeselect28 = (isset($_POST['alarmeselect28'])) ? utf8_encode($_POST['alarmeselect28']) : ''; 
$alarmecommentaire7 = (isset($_POST['alarmecommentaire7'])) ? utf8_encode($_POST['alarmecommentaire7']) : ''; 
$alarmeautre = (isset($_POST['alarmeautre'])) ? utf8_encode($_POST['alarmeautre']) : ''; 
$manipdate1 = (isset($_POST['manipdate1'])) ? utf8_encode($_POST['manipdate1']) : ''; 
$manipdate2 = (isset($_POST['manipdate2'])) ? utf8_encode($_POST['manipdate2']) : ''; 
$manipdate3 = (isset($_POST['manipdate3'])) ? utf8_encode($_POST['manipdate3']) : ''; 
$manipdate4 = (isset($_POST['manipdate4'])) ? utf8_encode($_POST['manipdate4']) : ''; 
$manipselect1 = (isset($_POST['manipselect1'])) ? utf8_encode($_POST['manipselect1']) : ''; 
$manipselect2 = (isset($_POST['manipselect2'])) ? utf8_encode($_POST['manipselect2']) : ''; 
$manipselect3 = (isset($_POST['manipselect3'])) ? utf8_encode($_POST['manipselect3']) : ''; 
$manipselect4 = (isset($_POST['manipselect4'])) ? utf8_encode($_POST['manipselect4']) : ''; 
$manipcommentaire1 = (isset($_POST['manipcommentaire1'])) ? utf8_encode($_POST['manipcommentaire1']) : ''; 
$manipselect5 = (isset($_POST['manipselect5'])) ? utf8_encode($_POST['manipselect5']) : ''; 
$manipselect6 = (isset($_POST['manipselect6'])) ? utf8_encode($_POST['manipselect6']) : ''; 
$manipselect7 = (isset($_POST['manipselect7'])) ? utf8_encode($_POST['manipselect7']) : ''; 
$manipselect8 = (isset($_POST['manipselect8'])) ? utf8_encode($_POST['manipselect8']) : ''; 
$manipcommentaire2 = (isset($_POST['manipcommentaire2'])) ? utf8_encode($_POST['manipcommentaire2']) : ''; 
$manipselect9 = (isset($_POST['manipselect9'])) ? utf8_encode($_POST['manipselect9']) : ''; 
$manipselect10 = (isset($_POST['manipselect10'])) ? utf8_encode($_POST['manipselect10']) : ''; 
$manipselect11 = (isset($_POST['manipselect11'])) ? utf8_encode($_POST['manipselect11']) : ''; 
$manipselect12 = (isset($_POST['manipselect12'])) ? utf8_encode($_POST['manipselect12']) : ''; 
$manipcommentaire3 = (isset($_POST['manipcommentaire3'])) ? utf8_encode($_POST['manipcommentaire3']) : ''; 
$manipselect13 = (isset($_POST['manipselect13'])) ? utf8_encode($_POST['manipselect13']) : ''; 
$manipselect14 = (isset($_POST['manipselect14'])) ? utf8_encode($_POST['manipselect14']) : ''; 
$manipselect15 = (isset($_POST['manipselect15'])) ? utf8_encode($_POST['manipselect15']) : ''; 
$manipselect16 = (isset($_POST['manipselect16'])) ? utf8_encode($_POST['manipselect16']) : ''; 
$manipcommentaire4 = (isset($_POST['manipcommentaire4'])) ? utf8_encode($_POST['manipcommentaire4']) : ''; 
$manipselect17 = (isset($_POST['manipselect17'])) ? utf8_encode($_POST['manipselect17']) : ''; 
$manipselect18 = (isset($_POST['manipselect18'])) ? utf8_encode($_POST['manipselect18']) : ''; 
$manipselect19 = (isset($_POST['manipselect19'])) ? utf8_encode($_POST['manipselect19']) : ''; 
$manipselect20 = (isset($_POST['manipselect20'])) ? utf8_encode($_POST['manipselect20']) : ''; 
$manipcommentaire5 = (isset($_POST['manipcommentaire5'])) ? utf8_encode($_POST['manipcommentaire5']) : ''; 
$cathdate1 = (isset($_POST['cathdate1'])) ? utf8_encode($_POST['cathdate1']) : ''; 
$cathdate2 = (isset($_POST['cathdate2'])) ? utf8_encode($_POST['cathdate2']) : ''; 
$cathdate3 = (isset($_POST['cathdate3'])) ? utf8_encode($_POST['cathdate3']) : ''; 
$cathdate4 = (isset($_POST['cathdate4'])) ? utf8_encode($_POST['cathdate4']) : ''; 
$cathselect1 = (isset($_POST['cathselect1'])) ? utf8_encode($_POST['cathselect1']) : ''; 
$cathselect2 = (isset($_POST['cathselect2'])) ? utf8_encode($_POST['cathselect2']) : ''; 
$cathselect3 = (isset($_POST['cathselect3'])) ? utf8_encode($_POST['cathselect3']) : ''; 
$cathselect4 = (isset($_POST['cathselect4'])) ? utf8_encode($_POST['cathselect4']) : ''; 
$cathcommentaire1 = (isset($_POST['cathcommentaire1'])) ? utf8_encode($_POST['cathcommentaire1']) : ''; 
$cathselect5 = (isset($_POST['cathselect5'])) ? utf8_encode($_POST['cathselect5']) : ''; 
$cathselect6 = (isset($_POST['cathselect6'])) ? utf8_encode($_POST['cathselect6']) : ''; 
$cathselect7 = (isset($_POST['cathselect7'])) ? utf8_encode($_POST['cathselect7']) : ''; 
$cathselect8 = (isset($_POST['cathselect8'])) ? utf8_encode($_POST['cathselect8']) : ''; 
$cathcommentaire2 = (isset($_POST['cathcommentaire2'])) ? utf8_encode($_POST['cathcommentaire2']) : ''; 
$cathselect9 = (isset($_POST['cathselect9'])) ? utf8_encode($_POST['cathselect9']) : ''; 
$cathselect10 = (isset($_POST['cathselect10'])) ? utf8_encode($_POST['cathselect10']) : ''; 
$cathselect11 = (isset($_POST['cathselect11'])) ? utf8_encode($_POST['cathselect11']) : ''; 
$cathselect12 = (isset($_POST['cathselect12'])) ? utf8_encode($_POST['cathselect12']) : ''; 
$cathcommentaire3 = (isset($_POST['cathcommentaire3'])) ? utf8_encode($_POST['cathcommentaire3']) : ''; 
$cathselect13 = (isset($_POST['cathselect13'])) ? utf8_encode($_POST['cathselect13']) : ''; 
$cathselect14 = (isset($_POST['cathselect14'])) ? utf8_encode($_POST['cathselect14']) : ''; 
$cathselect15 = (isset($_POST['cathselect15'])) ? utf8_encode($_POST['cathselect15']) : ''; 
$cathselect16 = (isset($_POST['cathselect16'])) ? utf8_encode($_POST['cathselect16']) : ''; 
$cathcommentaire4 = (isset($_POST['cathcommentaire4'])) ? utf8_encode($_POST['cathcommentaire4']) : ''; 
$cathselect17 = (isset($_POST['cathselect17'])) ? utf8_encode($_POST['cathselect17']) : ''; 
$cathselect18 = (isset($_POST['cathselect18'])) ? utf8_encode($_POST['cathselect18']) : ''; 
$cathselect19 = (isset($_POST['cathselect19'])) ? utf8_encode($_POST['cathselect19']) : ''; 
$cathselect20 = (isset($_POST['cathselect20'])) ? utf8_encode($_POST['cathselect20']) : ''; 
$cathcommentaire5 = (isset($_POST['cathcommentaire5'])) ? utf8_encode($_POST['cathcommentaire5']) : ''; 
$cathselect21 = (isset($_POST['cathselect21'])) ? utf8_encode($_POST['cathselect21']) : ''; 
$cathselect22 = (isset($_POST['cathselect22'])) ? utf8_encode($_POST['cathselect22']) : ''; 
$cathselect23 = (isset($_POST['cathselect23'])) ? utf8_encode($_POST['cathselect23']) : ''; 
$cathselect24 = (isset($_POST['cathselect24'])) ? utf8_encode($_POST['cathselect24']) : ''; 
$cathcommentaire6 = (isset($_POST['cathcommentaire6'])) ? utf8_encode($_POST['cathcommentaire6']) : ''; 
$cathselect25 = (isset($_POST['cathselect25'])) ? utf8_encode($_POST['cathselect25']) : ''; 
$cathselect26 = (isset($_POST['cathselect26'])) ? utf8_encode($_POST['cathselect26']) : ''; 
$cathselect27 = (isset($_POST['cathselect27'])) ? utf8_encode($_POST['cathselect27']) : ''; 
$cathselect28 = (isset($_POST['cathselect28'])) ? utf8_encode($_POST['cathselect28']) : ''; 
$cathcommentaire7 = (isset($_POST['cathcommentaire7'])) ? utf8_encode($_POST['cathcommentaire7']) : ''; 
$cathselect29 = (isset($_POST['cathselect29'])) ? utf8_encode($_POST['cathselect29']) : ''; 
$cathselect211 = (isset($_POST['cathselect211'])) ? utf8_encode($_POST['cathselect211']) : ''; 
$cathselect212 = (isset($_POST['cathselect212'])) ? utf8_encode($_POST['cathselect212']) : ''; 
$cathselect213 = (isset($_POST['cathselect213'])) ? utf8_encode($_POST['cathselect213']) : ''; 
$cathcommentaire8 = (isset($_POST['cathcommentaire8'])) ? utf8_encode($_POST['cathcommentaire8']) : ''; 
$cathselect214 = (isset($_POST['cathselect214'])) ? utf8_encode($_POST['cathselect214']) : ''; 
$cathselect215 = (isset($_POST['cathselect215'])) ? utf8_encode($_POST['cathselect215']) : ''; 
$cathselect216 = (isset($_POST['cathselect216'])) ? utf8_encode($_POST['cathselect216']) : ''; 
$cathselect217 = (isset($_POST['cathselect217'])) ? utf8_encode($_POST['cathselect217']) : ''; 
$cathcommentaire9 = (isset($_POST['cathcommentaire9'])) ? utf8_encode($_POST['cathcommentaire9']) : ''; 
$cathselect218 = (isset($_POST['cathselect218'])) ? utf8_encode($_POST['cathselect218']) : ''; 
$cathselect219 = (isset($_POST['cathselect219'])) ? utf8_encode($_POST['cathselect219']) : ''; 
$cathselect221 = (isset($_POST['cathselect221'])) ? utf8_encode($_POST['cathselect221']) : ''; 
$cathselect222 = (isset($_POST['cathselect222'])) ? utf8_encode($_POST['cathselect222']) : ''; 
$cathcommentaire10 = (isset($_POST['cathcommentaire10'])) ? utf8_encode($_POST['cathcommentaire10']) : ''; 
$cathselect223 = (isset($_POST['cathselect223'])) ? utf8_encode($_POST['cathselect223']) : ''; 
$cathselect224 = (isset($_POST['cathselect224'])) ? utf8_encode($_POST['cathselect224']) : ''; 
$cathselect225 = (isset($_POST['cathselect225'])) ? utf8_encode($_POST['cathselect225']) : ''; 
$cathselect226 = (isset($_POST['cathselect226'])) ? utf8_encode($_POST['cathselect226']) : ''; 
$cathcommentaire11 = (isset($_POST['cathcommentaire11'])) ? utf8_encode($_POST['cathcommentaire11']) : ''; 
$connaissance1 = (isset($_POST['connaissance1'])) ? utf8_encode($_POST['connaissance1']) : ''; 
$cnsobservation1 = (isset($_POST['cnsobservation1'])) ? utf8_encode($_POST['cnsobservation1']) : ''; 
$connaissance2 = (isset($_POST['connaissance2'])) ? utf8_encode($_POST['connaissance2']) : ''; 
$cnsobservation2 = (isset($_POST['cnsobservation2'])) ? utf8_encode($_POST['cnsobservation2']) : ''; 
$connaissance3 = (isset($_POST['connaissance3'])) ? utf8_encode($_POST['connaissance3']) : ''; 
$connaissance4 = (isset($_POST['connaissance4'])) ? utf8_encode($_POST['connaissance4']) : ''; 
$connaissance5 = (isset($_POST['connaissance5'])) ? utf8_encode($_POST['connaissance5']) : ''; 
$connaissance6 = (isset($_POST['connaissance6'])) ? utf8_encode($_POST['connaissance6']) : ''; 
$perempdate1 = (isset($_POST['perempdate1'])) ? utf8_encode($_POST['perempdate1']) : ''; 
$perempdate2 = (isset($_POST['perempdate2'])) ? utf8_encode($_POST['perempdate2']) : ''; 
$perempdate3 = (isset($_POST['perempdate3'])) ? utf8_encode($_POST['perempdate3']) : ''; 
$perempdate4 = (isset($_POST['perempdate4'])) ? utf8_encode($_POST['perempdate4']) : ''; 
$connaissance7 = (isset($_POST['connaissance7'])) ? utf8_encode($_POST['connaissance7']) : ''; 
$perempdate5 = (isset($_POST['perempdate5'])) ? utf8_encode($_POST['perempdate5']) : ''; 
$connaissance8 = (isset($_POST['connaissance8'])) ? utf8_encode($_POST['connaissance8']) : ''; 
$cnsobservation3 = (isset($_POST['cnsobservation3'])) ? utf8_encode($_POST['cnsobservation3']) : ''; 
$connaissance9 = (isset($_POST['connaissance9'])) ? utf8_encode($_POST['connaissance9']) : ''; 
$cnsobservation4 = (isset($_POST['cnsobservation4'])) ? utf8_encode($_POST['cnsobservation4']) : ''; 
$connaissance10 = (isset($_POST['connaissance10'])) ? utf8_encode($_POST['connaissance10']) : ''; 
$cnsobservation5 = (isset($_POST['cnsobservation5'])) ? utf8_encode($_POST['cnsobservation5']) : ''; 
$connaissance11 = (isset($_POST['connaissance11'])) ? utf8_encode($_POST['connaissance11']) : ''; 
$cnsobservation6 = (isset($_POST['cnsobservation6'])) ? utf8_encode($_POST['cnsobservation6']) : ''; 
$connaissance12 = (isset($_POST['connaissance12'])) ? utf8_encode($_POST['connaissance12']) : ''; 
$cnsobservation7 = (isset($_POST['cnsobservation7'])) ? utf8_encode($_POST['cnsobservation7']) : ''; 
$connaissance13 = (isset($_POST['connaissance13'])) ? utf8_encode($_POST['connaissance13']) : ''; 
$cnsobservation8 = (isset($_POST['cnsobservation8'])) ? utf8_encode($_POST['cnsobservation8']) : ''; 
$connaissance14 = (isset($_POST['connaissance14'])) ? utf8_encode($_POST['connaissance14']) : ''; 
$cnsobservation9 = (isset($_POST['cnsobservation9'])) ? utf8_encode($_POST['cnsobservation9']) : ''; 
$asgdetail1 = (isset($_POST['asgdetail1'])) ? utf8_encode($_POST['asgdetail1']) : ''; 
$asgobservation1 = (isset($_POST['asgobservation1'])) ? utf8_encode($_POST['asgobservation1']) : ''; 
$asgdetail2 = (isset($_POST['asgdetail2'])) ? utf8_encode($_POST['asgdetail2']) : ''; 
$asgobservation2 = (isset($_POST['asgobservation2'])) ? utf8_encode($_POST['asgobservation2']) : ''; 
$asgdetail3 = (isset($_POST['asgdetail3'])) ? utf8_encode($_POST['asgdetail3']) : ''; 
$asgobservation3 = (isset($_POST['asgobservation3'])) ? utf8_encode($_POST['asgobservation3']) : ''; 
$asgdetail4 = (isset($_POST['asgdetail4'])) ? utf8_encode($_POST['asgdetail4']) : ''; 
$asgobservation4 = (isset($_POST['asgobservation4'])) ? utf8_encode($_POST['asgobservation4']) : ''; 
$asgfrequence1 = (isset($_POST['asgfrequence1'])) ? utf8_encode($_POST['asgfrequence1']) : ''; 
$asgfrequence2 = (isset($_POST['asgfrequence2'])) ? utf8_encode($_POST['asgfrequence2']) : ''; 
$asgconnaissance = (isset($_POST['asgconnaissance'])) ? utf8_encode($_POST['asgconnaissance']) : ''; 
$asgcommentaire = (isset($_POST['asgcommentaire'])) ? utf8_encode($_POST['asgcommentaire']) : ''; 
$asg2commentaire = (isset($_POST['asg2commentaire'])) ? utf8_encode($_POST['asg2commentaire']) : ''; 
$id = (isset($_POST['id'])) ? utf8_encode($_POST['id']) : ''; 
$Horaire5 = (isset($_POST['Horaire5'])) ? utf8_encode($_POST['Horaire5']) : '';
$Horaire6 = (isset($_POST['Horaire6'])) ? utf8_encode($_POST['Horaire6']) : '';
$Horaire7 = (isset($_POST['Horaire7'])) ? utf8_encode($_POST['Horaire7']) : '';
$Horaire8 = (isset($_POST['Horaire8'])) ? utf8_encode($_POST['Horaire8']) : '';
$Horaire9 = (isset($_POST['Horaire9'])) ? utf8_encode($_POST['Horaire9']) : '';
$Horaire10 = (isset($_POST['Horaire10'])) ? utf8_encode($_POST['Horaire10']) : '';
$Horaire11 = (isset($_POST['Horaire11'])) ? utf8_encode($_POST['Horaire11']) : '';
$Horaire12 = (isset($_POST['Horaire12'])) ? utf8_encode($_POST['Horaire12']) : '';
$Horaire13 = (isset($_POST['Horaire13'])) ? utf8_encode($_POST['Horaire13']) : '';
$Horaire14 = (isset($_POST['Horaire14'])) ? utf8_encode($_POST['Horaire14']) : '';
$Horaire15 = (isset($_POST['Horaire15'])) ? utf8_encode($_POST['Horaire15']) : '';
$Horaire16 = (isset($_POST['Horaire16'])) ? utf8_encode($_POST['Horaire16']) : '';
$Horaire17 = (isset($_POST['Horaire17'])) ? utf8_encode($_POST['Horaire17']) : '';
$Horaire18 = (isset($_POST['Horaire18'])) ? utf8_encode($_POST['Horaire18']) : '';
$Horaire19 = (isset($_POST['Horaire19'])) ? utf8_encode($_POST['Horaire19']) : '';
$Horaire20 = (isset($_POST['Horaire20'])) ? utf8_encode($_POST['Horaire20']) : '';
$Horaire21 = (isset($_POST['Horaire21'])) ? utf8_encode($_POST['Horaire21']) : '';
$Horaire22 = (isset($_POST['Horaire22'])) ? utf8_encode($_POST['Horaire22']) : '';
$Horaire23 = (isset($_POST['Horaire23'])) ? utf8_encode($_POST['Horaire23']) : '';
$Horaire24 = (isset($_POST['Horaire24'])) ? utf8_encode($_POST['Horaire24']) : '';
$Horaire25 = (isset($_POST['Horaire25'])) ? utf8_encode($_POST['Horaire25']) : '';
$Horaire26 = (isset($_POST['Horaire26'])) ? utf8_encode($_POST['Horaire26']) : '';
$Horaire27 = (isset($_POST['Horaire27'])) ? utf8_encode($_POST['Horaire27']) : '';
$Horaire28 = (isset($_POST['Horaire28'])) ? utf8_encode($_POST['Horaire28']) : '';
$Horaire29 = (isset($_POST['Horaire29'])) ? utf8_encode($_POST['Horaire29']) : '';
$Horaire30 = (isset($_POST['Horaire30'])) ? utf8_encode($_POST['Horaire30']) : '';
$Horaire31 = (isset($_POST['Horaire31'])) ? utf8_encode($_POST['Horaire31']) : '';
$Horaire32 = (isset($_POST['Horaire32'])) ? utf8_encode($_POST['Horaire32']) : '';
$Horaire33 = (isset($_POST['Horaire33'])) ? utf8_encode($_POST['Horaire33']) : '';
$Horaire34 = (isset($_POST['Horaire34'])) ? utf8_encode($_POST['Horaire34']) : '';
$Horaire35 = (isset($_POST['Horaire35'])) ? utf8_encode($_POST['Horaire35']) : '';
$Horaire36 = (isset($_POST['Horaire36'])) ? utf8_encode($_POST['Horaire36']) : '';
$Horaire37 = (isset($_POST['Horaire37'])) ? utf8_encode($_POST['Horaire37']) : '';
$Horaire38 = (isset($_POST['Horaire38'])) ? utf8_encode($_POST['Horaire38']) : '';
$Horaire39 = (isset($_POST['Horaire39'])) ? utf8_encode($_POST['Horaire39']) : '';
$Horaire40 = (isset($_POST['Horaire40'])) ? utf8_encode($_POST['Horaire40']) : '';
$Horaire41 = (isset($_POST['Horaire41'])) ? utf8_encode($_POST['Horaire41']) : '';
$Horaire42 = (isset($_POST['Horaire42'])) ? utf8_encode($_POST['Horaire42']) : '';
$Horaire43 = (isset($_POST['Horaire43'])) ? utf8_encode($_POST['Horaire43']) : '';
$Horaire44 = (isset($_POST['Horaire44'])) ? utf8_encode($_POST['Horaire44']) : '';
$Horaire45 = (isset($_POST['Horaire45'])) ? utf8_encode($_POST['Horaire45']) : '';
$Horaire46 = (isset($_POST['Horaire46'])) ? utf8_encode($_POST['Horaire46']) : '';
$Horaire47 = (isset($_POST['Horaire47'])) ? utf8_encode($_POST['Horaire47']) : '';
$Horaire48 = (isset($_POST['Horaire48'])) ? utf8_encode($_POST['Horaire48']) : '';
$Horaire49 = (isset($_POST['Horaire49'])) ? utf8_encode($_POST['Horaire49']) : '';
$Horaire50 = (isset($_POST['Horaire50'])) ? utf8_encode($_POST['Horaire50']) : '';
$Horaire51 = (isset($_POST['Horaire51'])) ? utf8_encode($_POST['Horaire51']) : '';
$Horaire52 = (isset($_POST['Horaire52'])) ? utf8_encode($_POST['Horaire52']) : '';
$Horaire53 = (isset($_POST['Horaire53'])) ? utf8_encode($_POST['Horaire53']) : '';
$Horaire54 = (isset($_POST['Horaire54'])) ? utf8_encode($_POST['Horaire54']) : '';
$Horaire55 = (isset($_POST['Horaire55'])) ? utf8_encode($_POST['Horaire55']) : '';
$Horaire56 = (isset($_POST['Horaire56'])) ? utf8_encode($_POST['Horaire56']) : '';
$Horaire57 = (isset($_POST['Horaire57'])) ? utf8_encode($_POST['Horaire57']) : '';
$Horaire58 = (isset($_POST['Horaire58'])) ? utf8_encode($_POST['Horaire58']) : '';
$Horaire59 = (isset($_POST['Horaire59'])) ? utf8_encode($_POST['Horaire59']) : '';
$Horaire60 = (isset($_POST['Horaire60'])) ? utf8_encode($_POST['Horaire60']) : '';
$Horaire61 = (isset($_POST['Horaire61'])) ? utf8_encode($_POST['Horaire61']) : '';
$Horaire62 = (isset($_POST['Horaire62'])) ? utf8_encode($_POST['Horaire62']) : '';
$Horaire63 = (isset($_POST['Horaire63'])) ? utf8_encode($_POST['Horaire63']) : '';
$Horaire64 = (isset($_POST['Horaire64'])) ? utf8_encode($_POST['Horaire64']) : '';
$Horaire65 = (isset($_POST['Horaire65'])) ? utf8_encode($_POST['Horaire65']) : '';
$Horaire66 = (isset($_POST['Horaire66'])) ? utf8_encode($_POST['Horaire66']) : '';
$Horaire67 = (isset($_POST['Horaire67'])) ? utf8_encode($_POST['Horaire67']) : '';
$Horaire68 = (isset($_POST['Horaire68'])) ? utf8_encode($_POST['Horaire68']) : '';
$Horaire69 = (isset($_POST['Horaire69'])) ? utf8_encode($_POST['Horaire69']) : '';
$Horaire70 = (isset($_POST['Horaire70'])) ? utf8_encode($_POST['Horaire70']) : '';
$Horaire71 = (isset($_POST['Horaire71'])) ? utf8_encode($_POST['Horaire71']) : '';
$Horaire72 = (isset($_POST['Horaire72'])) ? utf8_encode($_POST['Horaire72']) : '';
$Horaire73 = (isset($_POST['Horaire73'])) ? utf8_encode($_POST['Horaire73']) : '';
$Horaire74 = (isset($_POST['Horaire74'])) ? utf8_encode($_POST['Horaire74']) : '';
$Horaire75 = (isset($_POST['Horaire75'])) ? utf8_encode($_POST['Horaire75']) : '';
$Horaire76 = (isset($_POST['Horaire76'])) ? utf8_encode($_POST['Horaire76']) : '';
$Horaire77 = (isset($_POST['Horaire77'])) ? utf8_encode($_POST['Horaire77']) : '';
$Horaire78 = (isset($_POST['Horaire78'])) ? utf8_encode($_POST['Horaire78']) : '';
$Horaire79 = (isset($_POST['Horaire79'])) ? utf8_encode($_POST['Horaire79']) : '';
$Horaire80 = (isset($_POST['Horaire80'])) ? utf8_encode($_POST['Horaire80']) : '';
$Horaire81 = (isset($_POST['Horaire81'])) ? utf8_encode($_POST['Horaire81']) : '';
$Horaire82 = (isset($_POST['Horaire82'])) ? utf8_encode($_POST['Horaire82']) : '';
$Horaire83 = (isset($_POST['Horaire83'])) ? utf8_encode($_POST['Horaire83']) : '';
$Horaire84 = (isset($_POST['Horaire84'])) ? utf8_encode($_POST['Horaire84']) : '';
$Horaire_5 = (isset($_POST['Horaire_5'])) ? utf8_encode($_POST['Horaire_5']) : '';
$Horaire_6 = (isset($_POST['Horaire_6'])) ? utf8_encode($_POST['Horaire_6']) : '';
$Horaire_7 = (isset($_POST['Horaire_7'])) ? utf8_encode($_POST['Horaire_7']) : '';
$Horaire_8 = (isset($_POST['Horaire_8'])) ? utf8_encode($_POST['Horaire_8']) : '';
$Horaire_9 = (isset($_POST['Horaire_9'])) ? utf8_encode($_POST['Horaire_9']) : '';
$Horaire_10 = (isset($_POST['Horaire_10'])) ? utf8_encode($_POST['Horaire_10']) : '';
$Horaire_11 = (isset($_POST['Horaire_11'])) ? utf8_encode($_POST['Horaire_11']) : '';
$Horaire_12 = (isset($_POST['Horaire_12'])) ? utf8_encode($_POST['Horaire_12']) : '';
$Horaire_13 = (isset($_POST['Horaire_13'])) ? utf8_encode($_POST['Horaire_13']) : '';
$Horaire_14 = (isset($_POST['Horaire_14'])) ? utf8_encode($_POST['Horaire_14']) : '';
$Horaire_15 = (isset($_POST['Horaire_15'])) ? utf8_encode($_POST['Horaire_15']) : '';
$Horaire_16 = (isset($_POST['Horaire_16'])) ? utf8_encode($_POST['Horaire_16']) : '';
$Horaire_17 = (isset($_POST['Horaire_17'])) ? utf8_encode($_POST['Horaire_17']) : '';
$Horaire_18 = (isset($_POST['Horaire_18'])) ? utf8_encode($_POST['Horaire_18']) : '';
$Horaire_19 = (isset($_POST['Horaire_19'])) ? utf8_encode($_POST['Horaire_19']) : '';
$Horaire_20 = (isset($_POST['Horaire_20'])) ? utf8_encode($_POST['Horaire_20']) : '';
$Horaire_21 = (isset($_POST['Horaire_21'])) ? utf8_encode($_POST['Horaire_21']) : '';
$Horaire_22 = (isset($_POST['Horaire_22'])) ? utf8_encode($_POST['Horaire_22']) : '';
$Horaire_23 = (isset($_POST['Horaire_23'])) ? utf8_encode($_POST['Horaire_23']) : '';
$Horaire_24 = (isset($_POST['Horaire_24'])) ? utf8_encode($_POST['Horaire_24']) : '';
$Horaire_25 = (isset($_POST['Horaire_25'])) ? utf8_encode($_POST['Horaire_25']) : '';
$Horaire_26 = (isset($_POST['Horaire_26'])) ? utf8_encode($_POST['Horaire_26']) : '';
$Horaire_27 = (isset($_POST['Horaire_27'])) ? utf8_encode($_POST['Horaire_27']) : '';
$Horaire_28 = (isset($_POST['Horaire_28'])) ? utf8_encode($_POST['Horaire_28']) : '';
$Horaire_29 = (isset($_POST['Horaire_29'])) ? utf8_encode($_POST['Horaire_29']) : '';
$Horaire_30 = (isset($_POST['Horaire_30'])) ? utf8_encode($_POST['Horaire_30']) : '';
$Horaire_31 = (isset($_POST['Horaire_31'])) ? utf8_encode($_POST['Horaire_31']) : '';
$Horaire_32 = (isset($_POST['Horaire_32'])) ? utf8_encode($_POST['Horaire_32']) : '';
$Horaire_33 = (isset($_POST['Horaire_33'])) ? utf8_encode($_POST['Horaire_33']) : '';
$Horaire_34 = (isset($_POST['Horaire_34'])) ? utf8_encode($_POST['Horaire_34']) : '';
$Horaire_35 = (isset($_POST['Horaire_35'])) ? utf8_encode($_POST['Horaire_35']) : '';
$Horaire_36 = (isset($_POST['Horaire_36'])) ? utf8_encode($_POST['Horaire_36']) : '';
$Horaire_37 = (isset($_POST['Horaire_37'])) ? utf8_encode($_POST['Horaire_37']) : '';
$Horaire_38 = (isset($_POST['Horaire_38'])) ? utf8_encode($_POST['Horaire_38']) : '';
$Horaire_39 = (isset($_POST['Horaire_39'])) ? utf8_encode($_POST['Horaire_39']) : '';
$Horaire_40 = (isset($_POST['Horaire_40'])) ? utf8_encode($_POST['Horaire_40']) : '';
$Horaire_41 = (isset($_POST['Horaire_41'])) ? utf8_encode($_POST['Horaire_41']) : '';
$Horaire_42 = (isset($_POST['Horaire_42'])) ? utf8_encode($_POST['Horaire_42']) : '';
$Horaire_43 = (isset($_POST['Horaire_43'])) ? utf8_encode($_POST['Horaire_43']) : '';
$Horaire_44 = (isset($_POST['Horaire_44'])) ? utf8_encode($_POST['Horaire_44']) : '';
$Horaire_45 = (isset($_POST['Horaire_45'])) ? utf8_encode($_POST['Horaire_45']) : '';
$Horaire_46 = (isset($_POST['Horaire_46'])) ? utf8_encode($_POST['Horaire_46']) : '';
$Horaire_47 = (isset($_POST['Horaire_47'])) ? utf8_encode($_POST['Horaire_47']) : '';
$Horaire_48 = (isset($_POST['Horaire_48'])) ? utf8_encode($_POST['Horaire_48']) : '';
$Horaire_49 = (isset($_POST['Horaire_49'])) ? utf8_encode($_POST['Horaire_49']) : '';
$Horaire_50 = (isset($_POST['Horaire_50'])) ? utf8_encode($_POST['Horaire_50']) : '';
$Horaire_51 = (isset($_POST['Horaire_51'])) ? utf8_encode($_POST['Horaire_51']) : '';
$Horaire_52 = (isset($_POST['Horaire_52'])) ? utf8_encode($_POST['Horaire_52']) : '';
$Horaire_53 = (isset($_POST['Horaire_53'])) ? utf8_encode($_POST['Horaire_53']) : '';
$Horaire_54 = (isset($_POST['Horaire_54'])) ? utf8_encode($_POST['Horaire_54']) : '';
$Horaire_55 = (isset($_POST['Horaire_55'])) ? utf8_encode($_POST['Horaire_55']) : '';
$Horaire_56 = (isset($_POST['Horaire_56'])) ? utf8_encode($_POST['Horaire_56']) : '';
$Horaire_57 = (isset($_POST['Horaire_57'])) ? utf8_encode($_POST['Horaire_57']) : '';
$Horaire_58 = (isset($_POST['Horaire_58'])) ? utf8_encode($_POST['Horaire_58']) : '';
$Horaire_59 = (isset($_POST['Horaire_59'])) ? utf8_encode($_POST['Horaire_59']) : '';
$Horaire_60 = (isset($_POST['Horaire_60'])) ? utf8_encode($_POST['Horaire_60']) : '';
$Horaire_61 = (isset($_POST['Horaire_61'])) ? utf8_encode($_POST['Horaire_61']) : '';
$Horaire_62 = (isset($_POST['Horaire_62'])) ? utf8_encode($_POST['Horaire_62']) : '';
$Horaire_63 = (isset($_POST['Horaire_63'])) ? utf8_encode($_POST['Horaire_63']) : '';
$Horaire_64 = (isset($_POST['Horaire_64'])) ? utf8_encode($_POST['Horaire_64']) : '';
$Horaire_65 = (isset($_POST['Horaire_65'])) ? utf8_encode($_POST['Horaire_65']) : '';
$Horaire_66 = (isset($_POST['Horaire_66'])) ? utf8_encode($_POST['Horaire_66']) : '';
$Horaire_67 = (isset($_POST['Horaire_67'])) ? utf8_encode($_POST['Horaire_67']) : '';
$Horaire_68 = (isset($_POST['Horaire_68'])) ? utf8_encode($_POST['Horaire_68']) : '';
$Horaire_69 = (isset($_POST['Horaire_69'])) ? utf8_encode($_POST['Horaire_69']) : '';
$Horaire_70 = (isset($_POST['Horaire_70'])) ? utf8_encode($_POST['Horaire_70']) : '';
$Horaire_71 = (isset($_POST['Horaire_71'])) ? utf8_encode($_POST['Horaire_71']) : '';
$Horaire_72 = (isset($_POST['Horaire_72'])) ? utf8_encode($_POST['Horaire_72']) : '';
$Horaire_73 = (isset($_POST['Horaire_73'])) ? utf8_encode($_POST['Horaire_73']) : '';
$Horaire_74 = (isset($_POST['Horaire_74'])) ? utf8_encode($_POST['Horaire_74']) : '';
$Horaire_75 = (isset($_POST['Horaire_75'])) ? utf8_encode($_POST['Horaire_75']) : '';
$Horaire_76 = (isset($_POST['Horaire_76'])) ? utf8_encode($_POST['Horaire_76']) : '';
$Horaire_77 = (isset($_POST['Horaire_77'])) ? utf8_encode($_POST['Horaire_77']) : '';
$Horaire_78 = (isset($_POST['Horaire_78'])) ? utf8_encode($_POST['Horaire_78']) : '';
$Horaire_79 = (isset($_POST['Horaire_79'])) ? utf8_encode($_POST['Horaire_79']) : '';
$Horaire_80 = (isset($_POST['Horaire_80'])) ? utf8_encode($_POST['Horaire_80']) : '';
$Horaire_81 = (isset($_POST['Horaire_81'])) ? utf8_encode($_POST['Horaire_81']) : '';
$Horaire_82 = (isset($_POST['Horaire_82'])) ? utf8_encode($_POST['Horaire_82']) : '';
$Horaire_83 = (isset($_POST['Horaire_83'])) ? utf8_encode($_POST['Horaire_83']) : '';
$Horaire_84 = (isset($_POST['Horaire_84'])) ? utf8_encode($_POST['Horaire_84']) : '';
$Debit5 = (isset($_POST['Debit5'])) ? utf8_encode($_POST['Debit5']) : '';
$Debit6 = (isset($_POST['Debit6'])) ? utf8_encode($_POST['Debit6']) : '';
$Debit7 = (isset($_POST['Debit7'])) ? utf8_encode($_POST['Debit7']) : '';
$Debit8 = (isset($_POST['Debit8'])) ? utf8_encode($_POST['Debit8']) : '';
$Debit9 = (isset($_POST['Debit9'])) ? utf8_encode($_POST['Debit9']) : '';
$Debit10 = (isset($_POST['Debit10'])) ? utf8_encode($_POST['Debit10']) : '';
$Debit11 = (isset($_POST['Debit11'])) ? utf8_encode($_POST['Debit11']) : '';
$Debit12 = (isset($_POST['Debit12'])) ? utf8_encode($_POST['Debit12']) : '';
$Debit13 = (isset($_POST['Debit13'])) ? utf8_encode($_POST['Debit13']) : '';
$Debit14 = (isset($_POST['Debit14'])) ? utf8_encode($_POST['Debit14']) : '';
$Debit15 = (isset($_POST['Debit15'])) ? utf8_encode($_POST['Debit15']) : '';
$Debit16 = (isset($_POST['Debit16'])) ? utf8_encode($_POST['Debit16']) : '';
$Debit17 = (isset($_POST['Debit17'])) ? utf8_encode($_POST['Debit17']) : '';
$Debit18 = (isset($_POST['Debit18'])) ? utf8_encode($_POST['Debit18']) : '';
$Debit19 = (isset($_POST['Debit19'])) ? utf8_encode($_POST['Debit19']) : '';
$Debit20 = (isset($_POST['Debit20'])) ? utf8_encode($_POST['Debit20']) : '';
$Debit21 = (isset($_POST['Debit21'])) ? utf8_encode($_POST['Debit21']) : '';
$Debit22 = (isset($_POST['Debit22'])) ? utf8_encode($_POST['Debit22']) : '';
$Debit23 = (isset($_POST['Debit23'])) ? utf8_encode($_POST['Debit23']) : '';
$Debit24 = (isset($_POST['Debit24'])) ? utf8_encode($_POST['Debit24']) : '';
$Debit25 = (isset($_POST['Debit25'])) ? utf8_encode($_POST['Debit25']) : '';
$Debit26 = (isset($_POST['Debit26'])) ? utf8_encode($_POST['Debit26']) : '';
$Debit27 = (isset($_POST['Debit27'])) ? utf8_encode($_POST['Debit27']) : '';
$Debit28 = (isset($_POST['Debit28'])) ? utf8_encode($_POST['Debit28']) : '';
$Debit29 = (isset($_POST['Debit29'])) ? utf8_encode($_POST['Debit29']) : '';
$Debit30 = (isset($_POST['Debit30'])) ? utf8_encode($_POST['Debit30']) : '';
$Debit31 = (isset($_POST['Debit31'])) ? utf8_encode($_POST['Debit31']) : '';
$Debit32 = (isset($_POST['Debit32'])) ? utf8_encode($_POST['Debit32']) : '';
$Debit33 = (isset($_POST['Debit33'])) ? utf8_encode($_POST['Debit33']) : '';
$Debit34 = (isset($_POST['Debit34'])) ? utf8_encode($_POST['Debit34']) : '';
$Debit35 = (isset($_POST['Debit35'])) ? utf8_encode($_POST['Debit35']) : '';
$Debit36 = (isset($_POST['Debit36'])) ? utf8_encode($_POST['Debit36']) : '';
$Debit37 = (isset($_POST['Debit37'])) ? utf8_encode($_POST['Debit37']) : '';
$Debit38 = (isset($_POST['Debit38'])) ? utf8_encode($_POST['Debit38']) : '';
$Debit39 = (isset($_POST['Debit39'])) ? utf8_encode($_POST['Debit39']) : '';
$Debit40 = (isset($_POST['Debit40'])) ? utf8_encode($_POST['Debit40']) : '';
$Debit41 = (isset($_POST['Debit41'])) ? utf8_encode($_POST['Debit41']) : '';
$Debit42 = (isset($_POST['Debit42'])) ? utf8_encode($_POST['Debit42']) : '';
$Debit43 = (isset($_POST['Debit43'])) ? utf8_encode($_POST['Debit43']) : '';
$Debit44 = (isset($_POST['Debit44'])) ? utf8_encode($_POST['Debit44']) : '';
$Debit_5 = (isset($_POST['Debit_5'])) ? utf8_encode($_POST['Debit_5']) : '';
$Debit_6 = (isset($_POST['Debit_6'])) ? utf8_encode($_POST['Debit_6']) : '';
$Debit_7 = (isset($_POST['Debit_7'])) ? utf8_encode($_POST['Debit_7']) : '';
$Debit_8 = (isset($_POST['Debit_8'])) ? utf8_encode($_POST['Debit_8']) : '';
$Debit_9 = (isset($_POST['Debit_9'])) ? utf8_encode($_POST['Debit_9']) : '';
$Debit_10 = (isset($_POST['Debit_10'])) ? utf8_encode($_POST['Debit_10']) : '';
$Debit_11 = (isset($_POST['Debit_11'])) ? utf8_encode($_POST['Debit_11']) : '';
$Debit_12 = (isset($_POST['Debit_12'])) ? utf8_encode($_POST['Debit_12']) : '';
$Debit_13 = (isset($_POST['Debit_13'])) ? utf8_encode($_POST['Debit_13']) : '';
$Debit_14 = (isset($_POST['Debit_14'])) ? utf8_encode($_POST['Debit_14']) : '';
$Debit_15 = (isset($_POST['Debit_15'])) ? utf8_encode($_POST['Debit_15']) : '';
$Debit_16 = (isset($_POST['Debit_16'])) ? utf8_encode($_POST['Debit_16']) : '';
$Debit_17 = (isset($_POST['Debit_17'])) ? utf8_encode($_POST['Debit_17']) : '';
$Debit_18 = (isset($_POST['Debit_18'])) ? utf8_encode($_POST['Debit_18']) : '';
$Debit_19 = (isset($_POST['Debit_19'])) ? utf8_encode($_POST['Debit_19']) : '';
$Debit_20 = (isset($_POST['Debit_20'])) ? utf8_encode($_POST['Debit_20']) : '';
$Debit_21 = (isset($_POST['Debit_21'])) ? utf8_encode($_POST['Debit_21']) : '';
$Debit_22 = (isset($_POST['Debit_22'])) ? utf8_encode($_POST['Debit_22']) : '';
$Debit_23 = (isset($_POST['Debit_23'])) ? utf8_encode($_POST['Debit_23']) : '';
$Debit_24 = (isset($_POST['Debit_24'])) ? utf8_encode($_POST['Debit_24']) : '';
$Debit_25 = (isset($_POST['Debit_25'])) ? utf8_encode($_POST['Debit_25']) : '';
$Debit_26 = (isset($_POST['Debit_26'])) ? utf8_encode($_POST['Debit_26']) : '';
$Debit_27 = (isset($_POST['Debit_27'])) ? utf8_encode($_POST['Debit_27']) : '';
$Debit_28 = (isset($_POST['Debit_28'])) ? utf8_encode($_POST['Debit_28']) : '';
$Debit_29 = (isset($_POST['Debit_29'])) ? utf8_encode($_POST['Debit_29']) : '';
$Debit_30 = (isset($_POST['Debit_30'])) ? utf8_encode($_POST['Debit_30']) : '';
$Debit_31 = (isset($_POST['Debit_31'])) ? utf8_encode($_POST['Debit_31']) : '';
$Debit_32 = (isset($_POST['Debit_32'])) ? utf8_encode($_POST['Debit_32']) : '';
$Debit_33 = (isset($_POST['Debit_33'])) ? utf8_encode($_POST['Debit_33']) : '';
$Debit_34 = (isset($_POST['Debit_34'])) ? utf8_encode($_POST['Debit_34']) : '';
$Debit_35 = (isset($_POST['Debit_35'])) ? utf8_encode($_POST['Debit_35']) : '';
$Debit_36 = (isset($_POST['Debit_36'])) ? utf8_encode($_POST['Debit_36']) : '';
$Debit_37 = (isset($_POST['Debit_37'])) ? utf8_encode($_POST['Debit_37']) : '';
$Debit_38 = (isset($_POST['Debit_38'])) ? utf8_encode($_POST['Debit_38']) : '';
$Debit_39 = (isset($_POST['Debit_39'])) ? utf8_encode($_POST['Debit_39']) : '';
$Debit_40 = (isset($_POST['Debit_40'])) ? utf8_encode($_POST['Debit_40']) : '';
$Debit_41 = (isset($_POST['Debit_41'])) ? utf8_encode($_POST['Debit_41']) : '';
$Debit_42 = (isset($_POST['Debit_42'])) ? utf8_encode($_POST['Debit_42']) : '';
$Debit_43 = (isset($_POST['Debit_43'])) ? utf8_encode($_POST['Debit_43']) : '';
$Debit_44 = (isset($_POST['Debit_44'])) ? utf8_encode($_POST['Debit_44']) : '';
	



	$bdd->exec("UPDATE infobastide SET nomresp='', prenomresp='', mobileresp='', coordonnee='' WHERE idPrescripteur='$idPrescripteur' AND idPatient='$idPatient'") or die(print_r($bdd->errorInfo()));
	$q = $bdd->prepare("UPDATE infobastide SET nomresp=?, prenomresp=?, mobileresp=?, coordonnee=? WHERE idPrescripteur=? AND idPatient=?");
			  $q->execute(array($nomresp, $prenomresp, $mobileresp, $coordonnee, $idPrescripteur, $idPatient))or die(print_r($bdd->errorInfo()));

    $bdd->exec("UPDATE infopatient SET datenaissance='', agepatient='', telpatient='', mobilepatient='',emailpatient='', adressepatient='', codepostalpatient='', villepatient='' WHERE idPrescripteur='$idPrescripteur' AND nompatient='$nompatient'");

	$q2 = $bdd->prepare("UPDATE infopatient SET datenaissance=?, agepatient=?, telpatient=?, mobilepatient=?,emailpatient=?, adressepatient=?, codepostalpatient=?, villepatient=? WHERE idPrescripteur=? AND nompatient=?");
	$q2->execute(array($datenaissance, $agepatient, $telpatient, $mobilepatient,$emailpatient, $adressepatient, $codepostalpatient, $villepatient, $idPrescripteur, $nompatient)) or die(print_r($bdd->errorInfo()));

	$bdd->exec("UPDATE infoprescripteur SET etablissementprescripteur='', serviceep='', npp='', telep='', mailep='', adressep='', mobiledp='', mobiledl='', mobilemt='' mobiled='', membrereseau='', nomreseau='' WHERE idPrescripteur='$idPrescripteur' AND idPatient='$idPatient'");

	$q3 = $bdd->prepare("UPDATE infoprescripteur SET etablissementprescripteur=?, serviceep=?, npp=?, telep=?, mailep=?, adressep=?, mobiledp=?, mobiledl=?, mobilemt=?, mobiled=?, membrereseau=?, nomreseau=? WHERE idPrescripteur=? AND idPatient=?");
	
	$q3->execute(array($etablissementprescripteur, $serviceep, $npp, $telep, $mailep, $adressep, $mobiledp, $mobiledl, $mobilemt, $mobiled, $membrereseau, $nomreseau, $idPrescripteur, $idPatient)) or die(print_r($bdd->errorInfo()));

	$bdd->exec("UPDATE choixmateriel SET pompe='', dateinstallation='', typecatheter='', modele='', longueurcanule='', longueurtubulure='', typecatheter2='', modele2='', longueurcanule2='', longueurtubulure2='', inserteur='', reservoir='', spp='', observation='' WHERE idPrescripteur='$idPrescripteur' AND idPatient='$idPatient'");

	$q3 = $bdd->prepare("UPDATE choixmateriel SET pompe=?, dateinstallation=?, typecatheter=?, modele=?, longueurcanule=?, longueurtubulure=?, typecatheter2=?, modele2=?, longueurcanule2=?, longueurtubulure2=?, inserteur=?, reservoir=?, spp=?, observation=? WHERE idPrescripteur=? AND idPatient=?");

	$q3->execute(array($Pompe, $dateinstallation, $catheter, $modele, $longueurcanule, $longueurtubulure, $catheter2, $modele2, $longueurcanule2, $longueurtubulure2, $inserteur, $reservoir, $spp, $observatiom, $idPrescripteur, $idPatient))or die(print_r($bdd->errorInfo()));


	$bdd->exec("UPDATE donnemedicale SET typediabete = '', datediagnostic = '', circonstancedecouverte = '', antecedentfamiliaux = '', datepremieremisesousPompe = '', hba1c = '', taille = '', poidsactuel = '', poidsforme = '', imc = '', nombreglycemieparjour = '', typelecteur = '', dateprescription = '', styloautopiqueur = '', nombreinjectionjour = '', stylo = '', autrestylo = '', aiguillestylo = '', autreaiguille = '', insulinelentematin = '', insulinerapidematin = '', insulinelentemidi = '', insulinerapidemidi = '', insulinelentesoir = '', insulinerapidesoir = '', insulinelentediner = '', insulinerapidediner = '', insulinelentecollation = '', insulinerapidecollation = '', totalinsulinelente = '', totalinsulinerapide = '', specialite1 = '', posologie1 = '', specialite2 = '', posologie2 = '', specialite3 = '', posologie3 = '', specialite4 = '', posologie4 = '', datebasal1 = '', Horaire1 = '', Debit1 = '', Horaire2 = '', Debit2 = '', Horaire3 = '', Debit3 = '', Horaire4 = '', Debit4 = '', Horaire1N = '', Debit1N = '', Horaire2N = '', Debit2N = '', Horaire3N = '', Debit3N = '', Horaire4N = '', Debit4N = '', datebasal2 = '', Horaire_1 = '', Debit_1 = '', Horaire_2 = '', Debit_2 = '', Horaire_3 = '', Debit_3 = '', Horaire_4 = '', Debit_4 = '', Horaire_N1 = '', Debit_N1 = '', Horaire_N2 = '', Debit_N2 = '', Horaire_N3 = '', Debit_N3 = '', Horaire_N4 = '', Debit_N4 = '', datebolus = '', ValGlycemique1 = '', ValGlyMatin1 = '', ValGlyMid1 = '', ValGlyCollation1 = '', ValGlySoir1 = '', ValGlyAutre1 = '', ValGlycemique2 = '', ValGlyMatin2 = '', ValGlyMid2 = '', ValGlyCollation2 = '', ValGlySoir2 = '', ValGlyAutre2 = '', ValGlycemique3 = '', ValGlyMatin3 = '', ValGlyMid3 = '', ValGlyCollation3 = '', ValGlySoir3 = '', ValGlyAutre3 = '', ValGlycemique4 = '', ValGlyMatin4 = '', ValGlyMid4 = '', ValGlyCollation4 = '', ValGlySoir4 = '', ValGlyAutre4 = '', ValGlycemique5 = '', ValGlyMatin5 = '', ValGlyMid5 = '', ValGlyCollation5 = '', ValGlySoir5 = '', ValGlyAutre5 = '', ValGlycemique6 = '', ValGlyMatin6 = '', ValGlyMid6 = '', ValGlyCollation6 = '', ValGlySoir6 = '', ValGlyAutre6 = '', ValGlycemique7 = '', ValGlyMatin7 = '', ValGlyMid7 = '', ValGlyCollation7 = '', ValGlySoir7 = '', ValGlyAutre7 = '', dateglycemie = '', glycemie1 = '', glycemie2 = '', glycemie3 = '', glycemie4 = '', glycemie5 = '', glycemie6 = '', glycemie7 = '', glycemie8 = '', glycemie9 = '', glycemie10 = '', glycemie11 = '', glycemie12 = '', glycemie13 = '', glycemie14 = '', glycemie15 = '', glycemie16 = '', glycemie17 = '', glycemie18 = '', glycemie19 = '', glycemie20 = '', glycemie21 = '', glycemie22 = '', glycemie23 = '', glycemie24 = '', glycemie25 = '', glycemie26 = '', glycemie27 = '', glycemie28 = '', glycemie29 = '', glycemie30 = '', glycemie31 = '', glycemie32 = '', glycemie33 = '', glycemie34 = '', glycemie35 = '', glycemie36 = '', glycemie37 = '', glycemie38 = '', glycemie39 = '', glycemie40 = '', glycemie41 = '', glycemie42 = '', glycemie43 = '', glycemie44 = '', glycemie45 = '', glycemie46 = '', glycemie47 = '', glycemie48 = '', glycemie49 = '', glycemie50 = '', glycemie51 = '', glycemie52 = '', glycemie53 = '', glycemie54 = '', glycemie55 = '', glycemie56 = '', glycemie57 = '', glycemie58 = '', glycemie59 = '', glycemie60 = '', glycemie61 = '', glycemie62 = '', glycemie63 = '', glycemie64 = '', glycemie65 = '', glycemie66 = '', glycemie67 = '', glycemie68 = '', glycemie69 = '', glycemie70 = '', glycemie71 = '', glycemie72 = '', glycemie73 = '', glycemie74 = '', glycemie75 = '', glycemie76 = '', glycemie77 = '', glycemie78 = '', glycemie79 = '', glycemie80 = '', glycemie81 = '', glycemie82 = '', glycemie83 = '', glycemie84 = '', synthesecommentaire = '', objectifglycemiquepreprandial = '', objectifglycemiquepostprandial = '', ValDatesHemGlyc1 = '', ValDatesHemGlyc2 = '', ValDatesHemGlyc3 = '', ValDatesHemGlyc4 = '', ValDatesHemGlyc5 = '', ValDatesHemGlyc6 = '', ValDatesHemGlyc7 = '', ValDatesHemGlyc8 = '', ValDatesHemGlyc9 = '', ValHbA1cHemGlyc1 = '', ValHbA1cHemGlyc2 = '', ValHbA1cHemGlyc3 = '', ValHbA1cHemGlyc4 = '', ValHbA1cHemGlyc5 = '', ValHbA1cHemGlyc6 = '', ValHbA1cHemGlyc7 = '', ValHbA1cHemGlyc8 = '', ValHbA1cHemGlyc9 = '',  Horaire5 = '', Horaire6 = '', Horaire7 = '', Horaire8 = '', Horaire9 = '', Horaire10 = '', Horaire11 = '', Horaire12 = '', Horaire13 = '', Horaire14 = '', Horaire15 = '', Horaire16 = '', Horaire17 = '', Horaire18 = '', Horaire19 = '', Horaire20 = '', Horaire21 = '', Horaire22 = '', Horaire23 = '', Horaire24 = '', Horaire25 = '', Horaire26 = '', Horaire27 = '', Horaire28 = '', Horaire29 = '', Horaire30 = '', Horaire31 = '', Horaire32 = '', Horaire33 = '', Horaire34 = '', Horaire35 = '', Horaire36 = '', Horaire37 = '', Horaire38 = '', Horaire39 = '', Horaire40 = '', Horaire41 = '', Horaire42 = '', Horaire43 = '', Horaire44 = '', Horaire45 = '', Horaire46 = '', Horaire47 = '', Horaire48 = '', Horaire49 = '', Horaire50 = '', Horaire51 = '', Horaire52 = '', Horaire53 = '', Horaire54 = '', Horaire55 = '', Horaire56 = '', Horaire57 = '', Horaire58 = '', Horaire59 = '', Horaire60 = '', Horaire61 = '', Horaire62 = '', Horaire63 = '', Horaire64 = '', Horaire65 = '', Horaire66 = '', Horaire67 = '', Horaire68 = '', Horaire69 = '', Horaire70 = '', Horaire71 = '', Horaire72 = '', Horaire73 = '', Horaire74 = '', Horaire75 = '', Horaire76 = '', Horaire77 = '', Horaire78 = '', Horaire79 = '', Horaire80 = '', Horaire81 = '', Horaire82 = '', Horaire83 = '', Horaire84 = '', Debit5 = '', Debit6 = '', Debit7 = '', Debit8 = '', Debit9 = '', Debit10 = '', Debit11 = '', Debit12 = '', Debit13 = '', Debit14 = '', Debit15 = '', Debit16 = '', Debit17 = '', Debit18 = '', Debit19 = '', Debit20 = '', Debit21 = '', Debit22 = '', Debit23 = '', Debit24 = '', Debit25 = '', Debit26 = '', Debit27 = '', Debit28 = '', Debit29 = '', Debit30 = '', Debit31 = '', Debit32 = '', Debit33 = '', Debit34 = '', Debit35 = '', Debit36 = '', Debit37 = '', Debit38 = '', Debit39 = '', Debit40 = '', Debit41 = '', Debit42 = '', Debit43 = '', Debit44 = '', Horaire_5 = '', Horaire_6 = '', Horaire_7 = '', Horaire_8 = '', Horaire_9 = '', Horaire_10 = '', Horaire_11 = '', Horaire_12 = '', Horaire_13 = '', Horaire_14 = '', Horaire_15 = '', Horaire_16 = '', Horaire_17 = '', Horaire_18 = '', Horaire_19 = '', Horaire_20 = '', Horaire_21 = '', Horaire_22 = '', Horaire_23 = '', Horaire_24 = '', Horaire_25 = '', Horaire_26 = '', Horaire_27 = '', Horaire_28 = '', Horaire_29 = '', Horaire_30 = '', Horaire_31 = '', Horaire_32 = '', Horaire_33 = '', Horaire_34 = '', Horaire_35 = '', Horaire_36 = '', Horaire_37 = '', Horaire_38 = '', Horaire_39 = '', Horaire_40 = '', Horaire_41 = '', Horaire_42 = '', Horaire_43 = '', Horaire_44 = '', Horaire_45 = '', Horaire_46 = '', Horaire_47 = '', Horaire_48 = '', Horaire_49 = '', Horaire_50 = '', Horaire_51 = '', Horaire_52 = '', Horaire_53 = '', Horaire_54 = '', Horaire_55 = '', Horaire_56 = '', Horaire_57 = '', Horaire_58 = '', Horaire_59 = '', Horaire_60 = '', Horaire_61 = '', Horaire_62 = '', Horaire_63 = '', Horaire_64 = '', Horaire_65 = '', Horaire_66 = '', Horaire_67 = '', Horaire_68 = '', Horaire_69 = '', Horaire_70 = '', Horaire_71 = '', Horaire_72 = '', Horaire_73 = '', Horaire_74 = '', Horaire_75 = '', Horaire_76 = '', Horaire_77 = '', Horaire_78 = '', Horaire_79 = '', Horaire_80 = '', Horaire_81 = '', Horaire_82 = '', Horaire_83 = '', Horaire_84 = '', Debit_5 = '', Debit_6 = '', Debit_7 = '', Debit_8 = '', Debit_9 = '', Debit_10 = '', Debit_11 = '', Debit_12 = '', Debit_13 = '', Debit_14 = '', Debit_15 = '', Debit_16 = '', Debit_17 = '', Debit_18 = '', Debit_19 = '', Debit_20 = '', Debit_21 = '', Debit_22 = '', Debit_23 = '', Debit_24 = '', Debit_25 = '', Debit_26 = '', Debit_27 = '', Debit_28 = '', Debit_29 = '', Debit_30 = '', Debit_31 = '', Debit_32 = '', Debit_33 = '', Debit_34 = '', Debit_35 = '', Debit_36 = '', Debit_37 = '', Debit_38 = '', Debit_39 = '', Debit_40 = '', Debit_41 = '', Debit_42 = '', Debit_43 = '', Debit_44 = '' WHERE idPrescripteur='$idPrescripteur' AND idPatient='$idPatient'")or die(print_r($bdd->errorInfo()));

    $bdd->exec("UPDATE donnemedicale SET typediabete = '$typediabete', datediagnostic = '$datediagnostic', circonstancedecouverte = '$circonstancedecouverte', antecedentfamiliaux = '$antecedentfamiliaux', datepremieremisesousPompe = '$datepremieremisesousPompe', hba1c = '$hba1c', taille = '$taille', poidsactuel = '$poidsactuel', poidsforme = '$poidsforme', imc = '$imc', nombreglycemieparjour = '$nombreglycemieparjour', typelecteur = '$typelecteur', dateprescription = '$dateprescription', styloautopiqueur = '$styloautopiqueur', nombreinjectionjour = '$nombreinjectionjour', stylo = '$stylo', autrestylo = '$autrestylo', aiguillestylo = '$aiguillestylo', autreaiguille = '$autreaiguille', insulinelentematin = '$insulinelentematin', insulinerapidematin = '$insulinerapidematin', insulinelentemidi = '$insulinelentemidi', insulinerapidemidi = '$insulinerapidemidi', insulinelentesoir = '$insulinelentesoir', insulinerapidesoir = '$insulinerapidesoir', insulinelentediner = '$insulinelentediner', insulinerapidediner = '$insulinerapidediner', insulinelentecollation = '$insulinelentecollation', insulinerapidecollation = '$insulinerapidecollation', totalinsulinelente = '$totalinsulinelente', totalinsulinerapide = '$totalinsulinerapide', specialite1 = '$specialite1', posologie1 = '$posologie1', specialite2 = '$specialite2', posologie2 = '$posologie2', specialite3 = '$specialite3', posologie3 = '$posologie3', specialite4 = '$specialite4', posologie4 = '$posologie4', datebasal1 = '$datebasal1', Horaire1 = '$Horaire1', Debit1 = '$Debit1', Horaire2 = '$Horaire2', Debit2 = '$Debit2', Horaire3 = '$Horaire3', Debit3 = '$Debit3', Horaire4 = '$Horaire4', Debit4 = '$Debit4', Horaire1N = '$Horaire1N', Debit1N = '$Debit1N', Horaire2N = '$Horaire2N', Debit2N = '$Debit2N', Horaire3N = '$Horaire3N', Debit3N = '$Debit3N', Horaire4N = '$Horaire4N', Debit4N = '$Debit4N', datebasal2 = '$datebasal2', Horaire_1 = '$Horaire_1', Debit_1 = '$Debit_1', Horaire_2 = '$Horaire_2', Debit_2 = '$Debit_2', Horaire_3 = '$Horaire_3', Debit_3 = '$Debit_3', Horaire_4 = '$Horaire_4', Debit_4 = '$Debit_4', Horaire_N1 = '$Horaire_N1', Debit_N1 = '$Debit_N1', Horaire_N2 = '$Horaire_N2', Debit_N2 = '$Debit_N2', Horaire_N3 = '$Horaire_N3', Debit_N3 = '$Debit_N3', Horaire_N4 = '$Horaire_N4', Debit_N4 = '$Debit_N4', datebolus = '$datebolus', ValGlycemique1 = '$ValGlycemique1', ValGlyMatin1 = '$ValGlyMatin1', ValGlyMid1 = '$ValGlyMid1', ValGlyCollation1 = '$ValGlyCollation1', ValGlySoir1 = '$ValGlySoir1', ValGlyAutre1 = '$ValGlyAutre1', ValGlycemique2 = '$ValGlycemique2', ValGlyMatin2 = '$ValGlyMatin2', ValGlyMid2 = '$ValGlyMid2', ValGlyCollation2 = '$ValGlyCollation2', ValGlySoir2 = '$ValGlySoir2', ValGlyAutre2 = '$ValGlyAutre2', ValGlycemique3 = '$ValGlycemique3', ValGlyMatin3 = '$ValGlyMatin3', ValGlyMid3 = '$ValGlyMid3', ValGlyCollation3 = '$ValGlyCollation3', ValGlySoir3 = '$ValGlySoir3', ValGlyAutre3 = '$ValGlyAutre3', ValGlycemique4 = '$ValGlycemique4', ValGlyMatin4 = '$ValGlyMatin4', ValGlyMid4 = '$ValGlyMid4', ValGlyCollation4 = '$ValGlyCollation4', ValGlySoir4 = '$ValGlySoir4', ValGlyAutre4 = '$ValGlyAutre4', ValGlycemique5 = '$ValGlycemique5', ValGlyMatin5 = '$ValGlyMatin5', ValGlyMid5 = '$ValGlyMid5', ValGlyCollation5 = '$ValGlyCollation5', ValGlySoir5 = '$ValGlySoir5', ValGlyAutre5 = '$ValGlyAutre5', ValGlycemique6 = '$ValGlycemique6', ValGlyMatin6 = '$ValGlyMatin6', ValGlyMid6 = '$ValGlyMid6', ValGlyCollation6 = '$ValGlyCollation6', ValGlySoir6 = '$ValGlySoir6', ValGlyAutre6 = '$ValGlyAutre6', ValGlycemique7 = '$ValGlycemique7', ValGlyMatin7 = '$ValGlyMatin7', ValGlyMid7 = '$ValGlyMid7', ValGlyCollation7 = '$ValGlyCollation7', ValGlySoir7 = '$ValGlySoir7', ValGlyAutre7 = '$ValGlyAutre7', dateglycemie = '$dateglycemie', glycemie1 = '$glycemie1', glycemie2 = '$glycemie2', glycemie3 = '$glycemie3', glycemie4 = '$glycemie4', glycemie5 = '$glycemie5', glycemie6 = '$glycemie6', glycemie7 = '$glycemie7', glycemie8 = '$glycemie8', glycemie9 = '$glycemie9', glycemie10 = '$glycemie10', glycemie11 = '$glycemie11', glycemie12 = '$glycemie12', glycemie13 = '$glycemie13', glycemie14 = '$glycemie14', glycemie15 = '$glycemie15', glycemie16 = '$glycemie16', glycemie17 = '$glycemie17', glycemie18 = '$glycemie18', glycemie19 = '$glycemie19', glycemie20 = '$glycemie20', glycemie21 = '$glycemie21', glycemie22 = '$glycemie22', glycemie23 = '$glycemie23', glycemie24 = '$glycemie24', glycemie25 = '$glycemie25', glycemie26 = '$glycemie26', glycemie27 = '$glycemie27', glycemie28 = '$glycemie28', glycemie29 = '$glycemie29', glycemie30 = '$glycemie30', glycemie31 = '$glycemie31', glycemie32 = '$glycemie32', glycemie33 = '$glycemie33', glycemie34 = '$glycemie34', glycemie35 = '$glycemie35', glycemie36 = '$glycemie36', glycemie37 = '$glycemie37', glycemie38 = '$glycemie38', glycemie39 = '$glycemie39', glycemie40 = '$glycemie40', glycemie41 = '$glycemie41', glycemie42 = '$glycemie42', glycemie43 = '$glycemie43', glycemie44 = '$glycemie44', glycemie45 = '$glycemie45', glycemie46 = '$glycemie46', glycemie47 = '$glycemie47', glycemie48 = '$glycemie48', glycemie49 = '$glycemie49', glycemie50 = '$glycemie50', glycemie51 = '$glycemie51', glycemie52 = '$glycemie52', glycemie53 = '$glycemie53', glycemie54 = '$glycemie54', glycemie55 = '$glycemie55', glycemie56 = '$glycemie56', glycemie57 = '$glycemie57', glycemie58 = '$glycemie58', glycemie59 = '$glycemie59', glycemie60 = '$glycemie60', glycemie61 = '$glycemie61', glycemie62 = '$glycemie62', glycemie63 = '$glycemie63', glycemie64 = '$glycemie64', glycemie65 = '$glycemie65', glycemie66 = '$glycemie66', glycemie67 = '$glycemie67', glycemie68 = '$glycemie68', glycemie69 = '$glycemie69', glycemie70 = '$glycemie70', glycemie71 = '$glycemie71', glycemie72 = '$glycemie72', glycemie73 = '$glycemie73', glycemie74 = '$glycemie74', glycemie75 = '$glycemie75', glycemie76 = '$glycemie76', glycemie77 = '$glycemie77', glycemie78 = '$glycemie78', glycemie79 = '$glycemie79', glycemie80 = '$glycemie80', glycemie81 = '$glycemie81', glycemie82 = '$glycemie82', glycemie83 = '$glycemie83', glycemie84 = '$glycemie84', synthesecommentaire = '$synthesecommentaire', objectifglycemiquepreprandial = '$objectifglycemiquepreprandial', objectifglycemiquepostprandial = '$objectifglycemiquepostprandial', ValDatesHemGlyc1 = '$ValDatesHemGlyc1', ValDatesHemGlyc2 = '$ValDatesHemGlyc2', ValDatesHemGlyc3 = '$ValDatesHemGlyc3', ValDatesHemGlyc4 = '$ValDatesHemGlyc4', ValDatesHemGlyc5 = '$ValDatesHemGlyc5', ValDatesHemGlyc6 = '$ValDatesHemGlyc6', ValDatesHemGlyc7 = '$ValDatesHemGlyc7', ValDatesHemGlyc8 = '$ValDatesHemGlyc8', ValDatesHemGlyc9 = '$ValDatesHemGlyc9', ValHbA1cHemGlyc1 = '$ValHbA1cHemGlyc1', ValHbA1cHemGlyc2 = '$ValHbA1cHemGlyc2', ValHbA1cHemGlyc3 = '$ValHbA1cHemGlyc3', ValHbA1cHemGlyc4 = '$ValHbA1cHemGlyc4', ValHbA1cHemGlyc5 = '$ValHbA1cHemGlyc5', ValHbA1cHemGlyc6 = '$ValHbA1cHemGlyc6', ValHbA1cHemGlyc7 = '$ValHbA1cHemGlyc7', ValHbA1cHemGlyc8 = '$ValHbA1cHemGlyc8', ValHbA1cHemGlyc9 = '$ValHbA1cHemGlyc9', Horaire5 = '$Horaire5', Horaire6 = '$Horaire6', Horaire7 = '$Horaire7', Horaire8 = '$Horaire8', Horaire9 = '$Horaire9', Horaire10 = '$Horaire10', Horaire11 = '$Horaire11', Horaire12 = '$Horaire12', Horaire13 = '$Horaire13', Horaire14 = '$Horaire14', Horaire15 = '$Horaire15', Horaire16 = '$Horaire16', Horaire17 = '$Horaire17', Horaire18 = '$Horaire18', Horaire19 = '$Horaire19', Horaire20 = '$Horaire20', Horaire21 = '$Horaire21', Horaire22 = '$Horaire22', Horaire23 = '$Horaire23', Horaire24 = '$Horaire24', Horaire25 = '$Horaire25', Horaire26 = '$Horaire26', Horaire27 = '$Horaire27', Horaire28 = '$Horaire28', Horaire29 = '$Horaire29', Horaire30 = '$Horaire30', Horaire31 = '$Horaire31', Horaire32 = '$Horaire32', Horaire33 = '$Horaire33', Horaire34 = '$Horaire34', Horaire35 = '$Horaire35', Horaire36 = '$Horaire36', Horaire37 = '$Horaire37', Horaire38 = '$Horaire38', Horaire39 = '$Horaire39', Horaire40 = '$Horaire40', Horaire41 = '$Horaire41', Horaire42 = '$Horaire42', Horaire43 = '$Horaire43', Horaire44 = '$Horaire44', Horaire45 = '$Horaire45', Horaire46 = '$Horaire46', Horaire47 = '$Horaire47', Horaire48 = '$Horaire48', Horaire49 = '$Horaire49', Horaire50 = '$Horaire50', Horaire51 = '$Horaire51', Horaire52 = '$Horaire52', Horaire53 = '$Horaire53', Horaire54 = '$Horaire54', Horaire55 = '$Horaire55', Horaire56 = '$Horaire56', Horaire57 = '$Horaire57', Horaire58 = '$Horaire58', Horaire59 = '$Horaire59', Horaire60 = '$Horaire60', Horaire61 = '$Horaire61', Horaire62 = '$Horaire62', Horaire63 = '$Horaire63', Horaire64 = '$Horaire64', Horaire65 = '$Horaire65', Horaire66 = '$Horaire66', Horaire67 = '$Horaire67', Horaire68 = '$Horaire68', Horaire69 = '$Horaire69', Horaire70 = '$Horaire70', Horaire71 = '$Horaire71', Horaire72 = '$Horaire72', Horaire73 = '$Horaire73', Horaire74 = '$Horaire74', Horaire75 = '$Horaire75', Horaire76 = '$Horaire76', Horaire77 = '$Horaire77', Horaire78 = '$Horaire78', Horaire79 = '$Horaire79', Horaire80 = '$Horaire80', Horaire81 = '$Horaire81', Horaire82 = '$Horaire82', Horaire83 = '$Horaire83', Horaire84 = '$Horaire84', Debit5 = '$Debit5', Debit6 = '$Debit6', Debit7 = '$Debit7', Debit8 = '$Debit8', Debit9 = '$Debit9', Debit10 = '$Debit10', Debit11 = '$Debit11', Debit12 = '$Debit12', Debit13 = '$Debit13', Debit14 = '$Debit14', Debit15 = '$Debit15', Debit16 = '$Debit16', Debit17 = '$Debit17', Debit18 = '$Debit18', Debit19 = '$Debit19', Debit20 = '$Debit20', Debit21 = '$Debit21', Debit22 = '$Debit22', Debit23 = '$Debit23', Debit24 = '$Debit24', Debit25 = '$Debit25', Debit26 = '$Debit26', Debit27 = '$Debit27', Debit28 = '$Debit28', Debit29 = '$Debit29', Debit30 = '$Debit30', Debit31 = '$Debit31', Debit32 = '$Debit32', Debit33 = '$Debit33', Debit34 = '$Debit34', Debit35 = '$Debit35', Debit36 = '$Debit36', Debit37 = '$Debit37', Debit38 = '$Debit38', Debit39 = '$Debit39', Debit40 = '$Debit40', Debit41 = '$Debit41', Debit42 = '$Debit42', Debit43 = '$Debit43', Debit44 = '$Debit44', Horaire_5 = '$Horaire_5', Horaire_6 = '$Horaire_6', Horaire_7 = '$Horaire_7', Horaire_8 = '$Horaire_8', Horaire_9 = '$Horaire_9', Horaire_10 = '$Horaire_10', Horaire_11 = '$Horaire_11', Horaire_12 = '$Horaire_12', Horaire_13 = '$Horaire_13', Horaire_14 = '$Horaire_14', Horaire_15 = '$Horaire_15', Horaire_16 = '$Horaire_16', Horaire_17 = '$Horaire_17', Horaire_18 = '$Horaire_18', Horaire_19 = '$Horaire_19', Horaire_20 = '$Horaire_20', Horaire_21 = '$Horaire_21', Horaire_22 = '$Horaire_22', Horaire_23 = '$Horaire_23', Horaire_24 = '$Horaire_24', Horaire_25 = '$Horaire_25', Horaire_26 = '$Horaire_26', Horaire_27 = '$Horaire_27', Horaire_28 = '$Horaire_28', Horaire_29 = '$Horaire_29', Horaire_30 = '$Horaire_30', Horaire_31 = '$Horaire_31', Horaire_32 = '$Horaire_32', Horaire_33 = '$Horaire_33', Horaire_34 = '$Horaire_34', Horaire_35 = '$Horaire_35', Horaire_36 = '$Horaire_36', Horaire_37 = '$Horaire_37', Horaire_38 = '$Horaire_38', Horaire_39 = '$Horaire_39', Horaire_40 = '$Horaire_40', Horaire_41 = '$Horaire_41', Horaire_42 = '$Horaire_42', Horaire_43 = '$Horaire_43', Horaire_44 = '$Horaire_44', Horaire_45 = '$Horaire_45', Horaire_46 = '$Horaire_46', Horaire_47 = '$Horaire_47', Horaire_48 = '$Horaire_48', Horaire_49 = '$Horaire_49', Horaire_50 = '$Horaire_50', Horaire_51 = '$Horaire_51', Horaire_52 = '$Horaire_52', Horaire_53 = '$Horaire_53', Horaire_54 = '$Horaire_54', Horaire_55 = '$Horaire_55', Horaire_56 = '$Horaire_56', Horaire_57 = '$Horaire_57', Horaire_58 = '$Horaire_58', Horaire_59 = '$Horaire_59', Horaire_60 = '$Horaire_60', Horaire_61 = '$Horaire_61', Horaire_62 = '$Horaire_62', Horaire_63 = '$Horaire_63', Horaire_64 = '$Horaire_64', Horaire_65 = '$Horaire_65', Horaire_66 = '$Horaire_66', Horaire_67 = '$Horaire_67', Horaire_68 = '$Horaire_68', Horaire_69 = '$Horaire_69', Horaire_70 = '$Horaire_70', Horaire_71 = '$Horaire_71', Horaire_72 = '$Horaire_72', Horaire_73 = '$Horaire_73', Horaire_74 = '$Horaire_74', Horaire_75 = '$Horaire_75', Horaire_76 = '$Horaire_76', Horaire_77 = '$Horaire_77', Horaire_78 = '$Horaire_78', Horaire_79 = '$Horaire_79', Horaire_80 = '$Horaire_80', Horaire_81 = '$Horaire_81', Horaire_82 = '$Horaire_82', Horaire_83 = '$Horaire_83', Horaire_84 = '$Horaire_84', Debit_5 = '$Debit_5', Debit_6 = '$Debit_6', Debit_7 = '$Debit_7', Debit_8 = '$Debit_8', Debit_9 = '$Debit_9', Debit_10 = '$Debit_10', Debit_11 = '$Debit_11', Debit_12 = '$Debit_12', Debit_13 = '$Debit_13', Debit_14 = '$Debit_14', Debit_15 = '$Debit_15', Debit_16 = '$Debit_16', Debit_17 = '$Debit_17', Debit_18 = '$Debit_18', Debit_19 = '$Debit_19', Debit_20 = '$Debit_20', Debit_21 = '$Debit_21', Debit_22 = '$Debit_22', Debit_23 = '$Debit_23', Debit_24 = '$Debit_24', Debit_25 = '$Debit_25', Debit_26 = '$Debit_26', Debit_27 = '$Debit_27', Debit_28 = '$Debit_28', Debit_29 = '$Debit_29', Debit_30 = '$Debit_30', Debit_31 = '$Debit_31', Debit_32 = '$Debit_32', Debit_33 = '$Debit_33', Debit_34 = '$Debit_34', Debit_35 = '$Debit_35', Debit_36 = '$Debit_36', Debit_37 = '$Debit_37', Debit_38 = '$Debit_38', Debit_39 = '$Debit_39', Debit_40 = '$Debit_40', Debit_41 = '$Debit_41', Debit_42 = '$Debit_42', Debit_43 = '$Debit_43', Debit_44 = '$Debit_44'  WHERE idPrescripteur='$idPrescripteur' AND idPatient='$idPatient'") or die(print_r($bdd->errorInfo()));

   $bdd->exec("UPDATE  habitudevie SET activitephysique='', profession='', situationfamiliale='', observation='', hygienealimentaire='', stabilitehoraires='', details='', environnement='', etatcutane='', choixpoint='', rougeur=''  WHERE idPrescripteur='$idPrescripteur' AND idPatient='$idPatient'") or die(print_r($bdd->errorInfo()));


	$bdd->exec("UPDATE  habitudevie SET activitephysique='".$activitephysique."', profession='".$profession."', situationfamiliale='".$situationfamiliale."', observation='".$observation."', hygienealimentaire='".$hygienealimentaire."', stabilitehoraires='".$stabilitehoraires."', details='".$details."', environnement='".$environnement."', etatcutane='".$etatcutane."', choixpoint='".$choixpoint."', rougeur='".$rougeur."'  WHERE idPrescripteur='$idPrescripteur' AND idPatient='$idPatient'") or die(print_r($bdd->errorInfo()));

	$bdd->exec("UPDATE  insulinotherapiefonctionnelle SET  petitdejeunerDe='', petitdejeunerA='', petitdejeunerRotation='', petitdejeunerObjectif='', petitdejeunerSensibilite='', dejeunerDe='', dejeunerA='', dejeunerRotation='', dejeunerObjectif='', dejeunerSensibilite='', gouterDe='', gouterA='', gouterRotation='', gouterObjectif='', gouterSensibilite='', dinerDe='', dinerA='', dinerRotation='', dinerObjectif='', dinerSensibilite='', collationDe='', collationA='', collationRotation='', collationObjectif='', collationSensibilite=''  WHERE idPrescripteur='$idPrescripteur' AND idPatient='$idPatient'") or die(print_r($bdd->errorInfo()));

	$bdd->exec("UPDATE  insulinotherapiefonctionnelle SET  petitdejeunerDe='".$petitdejeunerDe."', petitdejeunerA='".$petitdejeunerA."', petitdejeunerRotation='".$petitdejeunerRotation."', petitdejeunerObjectif='".$petitdejeunerObjectif."', petitdejeunerSensibilite='".$petitdejeunerSensibilite."', dejeunerDe='".$dejeunerDe."', dejeunerA='".$dejeunerA."', dejeunerRotation='".$dejeunerRotation."', dejeunerObjectif='".$dejeunerObjectif."', dejeunerSensibilite='".$dejeunerSensibilite."', gouterDe='".$gouterDe."', gouterA='".$gouterA."', gouterRotation='".$gouterRotation."', gouterObjectif='".$gouterObjectif."', gouterSensibilite='".$gouterSensibilite."', dinerDe='".$dinerDe."', dinerA='".$dinerA."', dinerRotation='".$dinerRotation."', dinerObjectif='".$dinerObjectif."', dinerSensibilite='".$dinerSensibilite."', collationDe='".$collationDe."', collationA='".$collationA."', collationRotation='".$collationRotation."', collationObjectif='".$collationObjectif."', collationSensibilite='".$collationSensibilite."'  WHERE idPrescripteur='".$idPrescripteur."' AND idPatient='".$idPatient."'") or die(print_r($bdd->errorInfo()));

	$bdd->exec("UPDATE  habitudealimentaire SET  regime='', observation2='', survenue='', atcd='', traitement='', date1='', date2='', date3='', date4='', date5='', date6='', date7='', date8='', date9='', taille1='', taille2='', taille3='', taille4='', taille5='', taille6='', taille7='', taille8='', taille9='', poids1='', poids2='', poids3='', poids4='', poids5='', poids6='', poids7='', poids8='', poids9='', imc1='', imc2='', imc3='', imc4='', imc5='', imc6='', imc7='', imc8='', imc9='' WHERE idPrescripteur='".$idPrescripteur."' AND idPatient='".$idPatient."'") or die(print_r($bdd->errorInfo()));

	$bdd->exec("UPDATE  habitudealimentaire SET  regime='".$regime."', observation2='".$observation2."', survenue='".$survenue."', atcd='".$atcd."', traitement='".$traitement."', date1='".$date1."', date2='".$date2."', date3='".$date3."', date4='".$date4."', date5='".$date5."', date6='".$date6."', date7='".$date7."', date8='".$date8."', date9='".$date9."', taille1='".$taille1."', taille2='".$taille2."', taille3='".$taille3."', taille4='".$taille4."', taille5='".$taille5."', taille6='".$taille6."', taille7='".$taille7."', taille8='".$taille8."', taille9='".$taille9."', poids1='".$poids1."', poids2='".$poids2."', poids3='".$poids3."', poids4='".$poids4."', poids5='".$poids5."', poids6='".$poids6."', poids7='".$poids7."', poids8='".$poids8."', poids9='".$poids9."', imc1='".$imc1."', imc2='".$imc2."', imc3='".$imc3."', imc4='".$imc4."', imc5='".$imc5."', imc6='".$imc6."', imc7='".$imc7."', imc8='".$imc8."', imc9='".$imc9."'  WHERE idPrescripteur='".$idPrescripteur."' AND idPatient='".$idPatient."'") or die(print_r($bdd->errorInfo()));
	

		$bdd->exec("UPDATE  manipulations SET date1='', date2='', date3='', date4='',
			etat1='', etat2='', etat3='', etat4='', 
			commentaire1='', 
			etat5='', etat6='', etat7='', etat8='',
			commentaire2='', 
			etat9='', etat10='', etat11='', etat12='',
			commentaire3='', 
			etat13='', etat14='', etat15='', etat16='',
			commentaire4='', 
			etat17='', etat18='', etat19='', etat20='',
			commentaire5='' WHERE idPrescripteur='$idPrescripteur' AND idPatient='$idPatient' ");




		$req = $bdd->prepare("UPDATE  manipulations SET date1=?, date2=?, date3=?, date4=?,
			etat1=?, etat2=?, etat3=?, etat4=?, 
			commentaire1=?, 
			etat5=?, etat6=?, etat7=?, etat8=?,
			commentaire2=?, 
			etat9=?, etat10=?, etat11=?, etat12=?,
			commentaire3=?, 
			etat13=?, etat14=?, etat15=?, etat16=?,
			commentaire4=?, 
			etat17=?, etat18=?, etat19=?, etat20=?,
			commentaire5=? WHERE idPrescripteur=? AND idPatient=? ");



		$req->execute(array( $manipdate1, $manipdate2, $manipdate3, $manipdate4, $manipselect1, $manipselect2, $manipselect3, $manipselect4, $manipcommentaire1, $manipselect5, $manipselect6, $manipselect7, $manipselect8, $manipcommentaire2, $manipselect9, $manipselect10, $manipselect11, $manipselect12, $manipcommentaire3, $manipselect13, $manipselect14, $manipselect15, $manipselect16, $manipcommentaire4, $manipselect17, $manipselect18, $manipselect19, $manipselect20, $manipcommentaire5, $idPrescripteur, $idPatient)) or die(print_r($bdd->errorInfo()));



	$bdd->exec("UPDATE  poseducatheter SET date1='', date2='', date3='', date4='',
			etat1='', etat2='', etat3='', etat4='',
			commentaire1='', 
			etat5='', etat6='', etat7='', etat8='',
			commentaire2='', 
			etat9='', etat10='', etat11='', etat12='',
			commentaire3='', 
			etat13='', etat14='', etat15='', etat16='',
			commentaire4='', 
			etat17='', etat18='', etat19='', etat20='',
			commentaire5='',
			etat21='', etat22='', etat23='', etat24='',
			commentaire6='',
			etat25='', etat26='', etat27='', etat28='',
			commentaire7='',
			etat29='', etat30='', etat31='', etat32='',
			commentaire8='',
			etat33='', etat34='', etat35='', etat36='',	
			commentaire9='',
			etat37='', etat38='', etat39='', etat40='',
			commentaire10='',
			etat41='', etat42='', etat43='', etat44='',
			commentaire11='' WHERE idPrescripteur='$idPrescripteur' AND idPatient='$idPatient'");

	$req2 = $bdd->prepare("UPDATE  poseducatheter SET date1=?, date2=?, date3=?, date4=?,
			etat1=?, etat2=?, etat3=?, etat4=?,
			commentaire1=?, 
			etat5=?, etat6=?, etat7=?, etat8=?,
			commentaire2=?, 
			etat9=?, etat10=?, etat11=?, etat12=?,
			commentaire3=?, 
			etat13=?, etat14=?, etat15=?, etat16=?,
			commentaire4=?, 
			etat17=?, etat18=?, etat19=?, etat20=?,
			commentaire5=?,
			etat21=?, etat22=?, etat23=?, etat24=?,
			commentaire6=?,
			etat25=?, etat26=?, etat27=?, etat28=?,
			commentaire7=?,
			etat29=?, etat30=?, etat31=?, etat32=?,
			commentaire8=?,
			etat33=?, etat34=?, etat35=?, etat36=?,
			commentaire9=?,
			etat37=?, etat38=?, etat39=?, etat40=?,
			commentaire10=?,
			etat41=?, etat42=?, etat43=?, etat44=?,
			commentaire11=? WHERE idPrescripteur=? AND idPatient=?");
	
	$req2->execute(array($cathdate1, $cathdate2, $cathdate3, $cathdate4, $cathselect1, $cathselect2, $cathselect3, $cathselect4, $cathcommentaire1, $cathselect5, $cathselect6, $cathselect7, $cathselect8, $cathcommentaire2, $cathselect9, $cathselect10, $cathselect11, $cathselect12, $cathcommentaire3, $cathselect13, $cathselect14, $cathselect15, $cathselect16, $cathcommentaire4, $cathselect17, $cathselect18, $cathselect19, $cathselect20, $cathcommentaire5, $cathselect21, $cathselect22, $cathselect23, $cathselect24, $cathcommentaire6, $cathselect25, $cathselect26, $cathselect27, $cathselect28, $cathcommentaire7, $cathselect29, $cathselect211, $cathselect212, $cathselect213, $cathcommentaire8, $cathselect214, $cathselect215, $cathselect216, $cathselect217, $cathcommentaire9, $cathselect218, $cathselect219, $cathselect221, $cathselect222, $cathcommentaire10, $cathselect223, $cathselect224, $cathselect225, $cathselect226, $cathcommentaire11, $idPrescripteur, $idPatient))  or die(print_r($bdd->errorInfo()));
	

	$bdd->exec("UPDATE  asg1 SET asgdetail1='',  asgdetail2='',  asgdetail3='',  asgdetail4='',  asgobservation1='',  asgobservation2='',  asgobservation3='',  asgobservation4=''  WHERE idPrescripteur='$idPrescripteur' AND idPatient='$idPatient'");

	$req3 = $bdd->prepare("UPDATE  asg1 SET asgdetail1=?,  asgdetail2=?,  asgdetail3=?,  asgdetail4=?,  asgobservation1=?,  asgobservation2=?,  asgobservation3=?,  asgobservation4=?  WHERE idPrescripteur=? AND idPatient=?");


	$req3->execute(array($asgdetail1, $asgdetail2, $asgdetail3, $asgdetail3, $asgobservation1, $asgobservation2, $asgobservation3, $asgobservation4, $idPatient, $idPrescripteur)) or die(print_r($bdd->errorInfo()));
	


	$bdd->exec("UPDATE  asg2 SET asgfrequence1='',  asgfrequence2='',  asgconnaissance='',  asgcommentaire='' WHERE idPrescripteur='$idPrescripteur' AND idPatient='$idPatient'");
	
	$req4 = $bdd->prepare("UPDATE  asg2 SET asgfrequence1=?,  asgfrequence2=?,  asgconnaissance=?,  asgcommentaire=? WHERE idPrescripteur=? AND idPatient=?");
	

	$req4->execute(array($asgfrequence1, $asgfrequence2, $asgconnaissance, $asgcommentaire, $idPrescripteur, $idPatient)) or die(print_r($bdd->errorInfo())); 


	$bdd->exec("UPDATE  connaissances SET reponse1='',  reponse2='',  reponse3='',  reponse4='',  reponse5='',  reponse6='',  reponse7='',  reponse8='',  reponse9='',  reponse10='',  reponse11='',  reponse12='',  reponse13='',  reponse14='', 
				observation1='',  observation2='',  observation3='',  observation4='',  observation5='',  observation6='',  observation7='',  observation8='',  observation9='', 
				date1='',  date2='',  date3='',  date4='',  date5='' WHERE idPrescripteur='$idPrescripteur' AND idPatient='idPatient'");

	$req5 = $bdd->prepare("UPDATE  connaissances SET reponse1=?,  reponse2=?,  reponse3=?,  reponse4=?,  reponse5=?,  reponse6=?,  reponse7=?,  reponse8=?,  reponse9=?,  reponse10=?,  reponse11=?,  reponse12=?,  reponse13=?,  reponse14=?, 
				observation1=?,  observation2=?,  observation3=?,  observation4=?,  observation5=?,  observation6=?,  observation7=?,  observation8=?,  observation9=?, 
				date1=?,  date2=?,  date3=?,  date4=?,  date5=? WHERE idPrescripteur=? AND idPatient=?");

	$req5->execute(array($connaissance1,$connaissance2,$connaissance3,$connaissance4,$connaissance5,$connaissance6,$connaissance7,$connaissance8,$connaissance9,$connaissance10,$connaissance11,$connaissance12,$connaissance13,$connaissance14,$cnsobservation1,$cnsobservation2,$cnsobservation3,$cnsobservation4,$cnsobservation5,$cnsobservation6,$cnsobservation7,$cnsobservation8,$cnsobservation9,$perempdate1,$perempdate2,$perempdate3,$perempdate4,$perempdate5, $idPrescripteur, $idPatient)) or die(print_r($bdd->errorInfo()));

	$bdd->exec("UPDATE  manipulationdelapompe SET date1='',  date2='',  date3='',  date4='', 
      		etat1='',  etat2='',  etat3='',  etat4='',  commentaire1='',  
      		etat5='',  etat6='',  etat7='',  etat8='',  commentaire2='',  
      		etat9='',  etat10='',  etat11='',  etat12='',  commentaire3='',  
      		etat13='',  etat14='',  etat15='',  etat16='',  commentaire4='',  
      		etat17='',  etat18='',  etat19='',  etat20='',  commentaire5='',  
      		etat21='',  etat22='',  etat23='',  etat24='',  commentaire6='',  
      		etat25='',  etat26='',  etat27='',  etat28='',  commentaire7='',  
      		etat29='',  etat30='',  etat31='',  etat32='',  commentaire8='',  
      		etat33='',  etat34='',  etat35='',  etat36='',  commentaire9='',  
      		autre='' WHERE idPrescripteur='$idPrescripteur' AND idPatient='$idPatient'") or die(print_r($bdd->errorInfo()));


	
	$req6 = $bdd->prepare("UPDATE  manipulationdelapompe SET date1=?,  date2=?,  date3=?,  date4=?, 
      		etat1=?,  etat2=?,  etat3=?,  etat4=?,  commentaire1=?,  
      		etat5=?,  etat6=?,  etat7=?,  etat8=?,  commentaire2=?,  
      		etat9=?,  etat10=?,  etat11=?,  etat12=?,  commentaire3=?,  
      		etat13=?,  etat14=?,  etat15=?,  etat16=?,  commentaire4=?,  
      		etat17=?,  etat18=?,  etat19=?,  etat20=?,  commentaire5=?,  
      		etat21=?,  etat22=?,  etat23=?,  etat24=?,  commentaire6=?,  
      		etat25=?,  etat26=?,  etat27=?,  etat28=?,  commentaire7=?,  
      		etat29=?,  etat30=?,  etat31=?,  etat32=?,  commentaire8=?,  
      		etat33=?,  etat34=?,  etat35=?,  etat36=?,  commentaire9=?,  
      		autre=? WHERE idPrescripteur=? AND idPatient=?");

	$req6->execute(array($pmpdate1, $pmpdate2, $pmpdate3, $pmpdate4, $pmpselect1, $pmpselect2, $pmpselect3, $pmpselect4, $pmpcommentaire1, $pmpselect5, $pmpselect6, $pmpselect7, $pmpselect8, $pmpcommentaire2, $pmpselect9, $pmpselect10, $pmpselect11, $pmpselect12, $pmpcommentaire3, $pmpselect13, $pmpselect14, $pmpselect15, $pmpselect16, $pmpcommentaire4, $pmpselect17, $pmpselect18, $pmpselect19, $pmpselect20, $pmpcommentaire5, $pmpselect21, $pmpselect22, $pmpselect23, $pmpselect24, $pmpcommentaire6, $pmpselect25, $pmpselect26, $pmpselect27, $pmpselect28, $pmpcommentaire7, $pmpselect29, $pmpselect291, $pmpselect292, $pmpselect293, $pmpcommentaire8, $pmpselect294, $pmpselect295, $pmpselect296, $pmpselect297, $pmpcommentaire9, $pmpautre, $idPrescripteur, $idPatient )) or die(print_r($bdd->errorInfo()));



	$bdd->exec("UPDATE  alarmesetprecautions SET alarmedate1='',   alarmedate2='',   alarmedate3='',   alarmedate4='',  
    		alarmeetat1='',   alarmeetat2='',   alarmeetat3='',   alarmeetat4='',   commentaire1='',   
    		alarmeetat5='',   alarmeetat6='',   alarmeetat7='',   alarmeetat8='',   commentaire2='',   
    		alarmeetat9='',   alarmeetat10='',   alarmeetat11='',   alarmeetat12='',   commentaire3='',   
    		alarmeetat13='',   alarmeetat14='',   alarmeetat15='',   alarmeetat16='',   commentaire4='',   
    		alarmeetat17='',   alarmeetat18='',   alarmeetat19='',   alarmeetat20='',   commentaire5='',   
    		alarmeetat21='',   alarmeetat22='',   alarmeetat23='',   alarmeetat24='',   commentaire6='',   
    		alarmeetat25='',   alarmeetat26='',   alarmeetat27='',   alarmeetat28='',   commentaire7='',   
    		autre='' WHERE  idPrescripteur='$idPrescripteur' AND idPatient='$idPatient'") or die(print_r($bdd->errorInfo()));

	$req7 = $bdd->prepare("UPDATE  alarmesetprecautions SET alarmedate1=?,   alarmedate2=?,   alarmedate3=?,   alarmedate4=?,  
    		alarmeetat1=?,   alarmeetat2=?,   alarmeetat3=?,   alarmeetat4=?,   commentaire1=?,   
    		alarmeetat5=?,   alarmeetat6=?,   alarmeetat7=?,   alarmeetat8=?,   commentaire2=?,   
    		alarmeetat9=?,   alarmeetat10=?,   alarmeetat11=?,   alarmeetat12=?,   commentaire3=?,   
    		alarmeetat13=?,   alarmeetat14=?,   alarmeetat15=?,   alarmeetat16=?,   commentaire4=?,   
    		alarmeetat17=?,   alarmeetat18=?,   alarmeetat19=?,   alarmeetat20=?,   commentaire5=?,   
    		alarmeetat21=?,   alarmeetat22=?,   alarmeetat23=?,   alarmeetat24=?,   commentaire6=?,   
    		alarmeetat25=?,   alarmeetat26=?,   alarmeetat27=?,   alarmeetat28=?,   commentaire7=?,   
    		autre=? WHERE  idPrescripteur=? AND idPatient=?");

	$req7->execute(array($alarmedate1, $alarmedate2, $alarmedate3, $alarmedate4, $alarmeselect1, $alarmeselect2, $alarmeselect3, $alarmeselect4, $alarmecommentaire1, $alarmeselect5, $alarmeselect6, $alarmeselect7, $alarmeselect8, $alarmecommentaire2, $alarmeselect9, $alarmeselect10, $alarmeselect11, $alarmeselect12, $alarmecommentaire3, $alarmeselect13, $alarmeselect14, $alarmeselect15, $alarmeselect16, $alarmecommentaire4, $alarmeselect17, $alarmeselect18, $alarmeselect19, $alarmeselect20, $alarmecommentaire5, $alarmeselect21, $alarmeselect22, $alarmeselect23, $alarmeselect24, $alarmecommentaire6, $alarmeselect25, $alarmeselect26, $alarmeselect27, $alarmeselect28, $alarmecommentaire7, $alarmeautre, $idPrescripteur, $idPatient)) or die(print_r($bdd->errorInfo()));

	echo "Enregistrement avec succès ! ";

?>