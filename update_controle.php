<?php 
	require "cnx.php";


$capture = (isset($_POST['capture'])) ? $_POST['capture'] : ''; 
$nomresp = (isset($_POST['nomresp'])) ? $_POST['nomresp'] : ''; 
$prenomresp = (isset($_POST['prenomresp'])) ? $_POST['prenomresp'] : ''; 
$mobileresp = (isset($_POST['mobileresp'])) ? $_POST['mobileresp'] : ''; 
$coordonnee = (isset($_POST['coordonnee'])) ? $_POST['coordonnee'] : ''; 
$nompatient = (isset($_POST['nompatient'])) ? $_POST['nompatient'] : ''; 
$prenompatient = (isset($_POST['prenompatient'])) ? $_POST['prenompatient'] : ''; 
$datenaissance = (isset($_POST['datenaissance'])) ? $_POST['datenaissance'] : ''; 
$agepatient = (isset($_POST['agepatient'])) ? $_POST['agepatient'] : ''; 
$telpatient = (isset($_POST['telpatient'])) ? $_POST['telpatient'] : ''; 
$mobilepatient = (isset($_POST['mobilepatient'])) ? $_POST['mobilepatient'] : ''; 
$emailpatient = (isset($_POST['emailpatient'])) ? $_POST['emailpatient'] : ''; 
$adressepatient = (isset($_POST['adressepatient'])) ? $_POST['adressepatient'] : ''; 
$codepostalpatient = (isset($_POST['codepostalpatient'])) ? $_POST['codepostalpatient'] : ''; 
$villepatient = (isset($_POST['villepatient'])) ? $_POST['villepatient'] : ''; 
$etablissementprescripteur = (isset($_POST['etablissementprescripteur'])) ? $_POST['etablissementprescripteur'] : ''; 
$serviceep = (isset($_POST['serviceep'])) ? $_POST['serviceep'] : ''; 
$npp = (isset($_POST['npp'])) ? $_POST['npp'] : ''; 
$telep = (isset($_POST['telep'])) ? $_POST['telep'] : ''; 
$mailep = (isset($_POST['mailep'])) ? $_POST['mailep'] : ''; 
$adressep = (isset($_POST['adressep'])) ? $_POST['adressep'] : ''; 
$diabetologueprescripteur = (isset($_POST['diabetologueprescripteur'])) ? $_POST['diabetologueprescripteur'] : ''; 
$teldp = (isset($_POST['teldp'])) ? $_POST['teldp'] : ''; 
$mobiledp = (isset($_POST['mobiledp'])) ? $_POST['mobiledp'] : ''; 
$ruedp = (isset($_POST['ruedp'])) ? $_POST['ruedp'] : ''; 
$codepostaldp = (isset($_POST['codepostaldp'])) ? $_POST['codepostaldp'] : ''; 
$villedp = (isset($_POST['villedp'])) ? $_POST['villedp'] : ''; 
$maildp = (isset($_POST['maildp'])) ? $_POST['maildp'] : ''; 
$diabetologueliberal = (isset($_POST['diabetologueliberal'])) ? $_POST['diabetologueliberal'] : ''; 
$teldl = (isset($_POST['teldl'])) ? $_POST['teldl'] : ''; 
$mobiledl = (isset($_POST['mobiledl'])) ? $_POST['mobiledl'] : ''; 
$ruedl = (isset($_POST['ruedl'])) ? $_POST['ruedl'] : ''; 
$codepostaldl = (isset($_POST['codepostaldl'])) ? $_POST['codepostaldl'] : ''; 
$villedl = (isset($_POST['villedl'])) ? $_POST['villedl'] : ''; 
$maildl = (isset($_POST['maildl'])) ? $_POST['maildl'] : ''; 
$medecintraitant = (isset($_POST['medecintraitant'])) ? $_POST['medecintraitant'] : ''; 
$telmt = (isset($_POST['telmt'])) ? $_POST['telmt'] : ''; 
$mobilemt = (isset($_POST['mobilemt'])) ? $_POST['mobilemt'] : ''; 
$ruemt = (isset($_POST['ruemt'])) ? $_POST['ruemt'] : ''; 
$codepostalmt = (isset($_POST['codepostalmt'])) ? $_POST['codepostalmt'] : ''; 
$villemt = (isset($_POST['villemt'])) ? $_POST['villemt'] : ''; 
$mailmt = (isset($_POST['mailmt'])) ? $_POST['mailmt'] : ''; 
$dieteticienne = (isset($_POST['dieteticienne'])) ? $_POST['dieteticienne'] : ''; 
$teld = (isset($_POST['teld'])) ? $_POST['teld'] : ''; 
$mobiled = (isset($_POST['mobiled'])) ? $_POST['mobiled'] : ''; 
$rued = (isset($_POST['rued'])) ? $_POST['rued'] : ''; 
$codepostald = (isset($_POST['codepostald'])) ? $_POST['codepostald'] : ''; 
$villed = (isset($_POST['villed'])) ? $_POST['villed'] : ''; 
$maild = (isset($_POST['maild'])) ? $_POST['maild'] : ''; 
$membrereseau = (isset($_POST['membrereseau'])) ? $_POST['membrereseau'] : ''; 
$nomreseau = (isset($_POST['nomreseau'])) ? $_POST['nomreseau'] : ''; 
$Pompe = (isset($_POST['Pompe'])) ? $_POST['Pompe'] : ''; 
$pompeautres = (isset($_POST['pompeautres'])) ? $_POST['pompeautres'] : ''; 
$dateinstallation = (isset($_POST['dateinstallation'])) ? $_POST['dateinstallation'] : ''; 
$catheter = (isset($_POST['catheter'])) ? $_POST['catheter'] : ''; 
$modele = (isset($_POST['modele'])) ? $_POST['modele'] : ''; 
$catheter1autres = (isset($_POST['catheter1autres'])) ? $_POST['catheter1autres'] : ''; 
$longueurcanule = (isset($_POST['longueurcanule'])) ? $_POST['longueurcanule'] : ''; 
$longueurtubulure = (isset($_POST['longueurtubulure'])) ? $_POST['longueurtubulure'] : ''; 
$catheter2 = (isset($_POST['catheter2'])) ? $_POST['catheter2'] : ''; 
$modele2 = (isset($_POST['modele2'])) ? $_POST['modele2'] : ''; 
$catheter2autres = (isset($_POST['catheter2autres'])) ? $_POST['catheter2autres'] : ''; 
$longueurcanule2 = (isset($_POST['longueurcanule2'])) ? $_POST['longueurcanule2'] : ''; 
$longueurtubulure2 = (isset($_POST['longueurtubulure2'])) ? $_POST['longueurtubulure2'] : ''; 
$inserteur = (isset($_POST['inserteur'])) ? $_POST['inserteur'] : ''; 
$reservoir = (isset($_POST['reservoir'])) ? $_POST['reservoir'] : ''; 
$reservoirautres = (isset($_POST['reservoirautres'])) ? $_POST['reservoirautres'] : ''; 
$spp = (isset($_POST['spp'])) ? $_POST['spp'] : ''; 
$idPrescripteur = (isset($_POST['idPrescripteur'])) ? $_POST['idPrescripteur'] : ''; 
$idPatient = (isset($_POST['idPatient'])) ? $_POST['idPatient'] : ''; 
$observatiom = (isset($_POST['observatiom'])) ? $_POST['observatiom'] : ''; 
$typediabete = (isset($_POST['typediabete'])) ? $_POST['typediabete'] : ''; 
$datediagnostic = (isset($_POST['datediagnostic'])) ? $_POST['datediagnostic'] : ''; 
$circonstancedecouverte = (isset($_POST['circonstancedecouverte'])) ? $_POST['circonstancedecouverte'] : ''; 
$antecedentfamiliaux = (isset($_POST['antecedentfamiliaux'])) ? $_POST['antecedentfamiliaux'] : ''; 
$datepremieremisesousPompe = (isset($_POST['datepremieremisesousPompe'])) ? $_POST['datepremieremisesousPompe'] : ''; 
$hba1c = (isset($_POST['hba1c'])) ? $_POST['hba1c'] : ''; 
$taille = (isset($_POST['taille'])) ? $_POST['taille'] : ''; 
$poidsactuel = (isset($_POST['poidsactuel'])) ? $_POST['poidsactuel'] : ''; 
$poidsforme = (isset($_POST['poidsforme'])) ? $_POST['poidsforme'] : ''; 
$imc = (isset($_POST['imc'])) ? $_POST['imc'] : ''; 
$nombreglycemieparjour = (isset($_POST['nombreglycemieparjour'])) ? $_POST['nombreglycemieparjour'] : ''; 
$typelecteur = (isset($_POST['typelecteur'])) ? $_POST['typelecteur'] : ''; 
$dateprescription = (isset($_POST['dateprescription'])) ? $_POST['dateprescription'] : ''; 
$styloautopiqueur = (isset($_POST['styloautopiqueur'])) ? $_POST['styloautopiqueur'] : ''; 
$nombreinjectionjour = (isset($_POST['nombreinjectionjour'])) ? $_POST['nombreinjectionjour'] : ''; 
$stylo = (isset($_POST['stylo'])) ? $_POST['stylo'] : ''; 
$autrestylo = (isset($_POST['autrestylo'])) ? $_POST['autrestylo'] : ''; 
$aiguillestylo = (isset($_POST['aiguillestylo'])) ? $_POST['aiguillestylo'] : ''; 
$autreaiguille = (isset($_POST['autreaiguille'])) ? $_POST['autreaiguille'] : ''; 
$insulinelentematin = (isset($_POST['insulinelentematin'])) ? $_POST['insulinelentematin'] : ''; 
$insulinerapidematin = (isset($_POST['insulinerapidematin'])) ? $_POST['insulinerapidematin'] : ''; 
$insulinelentemidi = (isset($_POST['insulinelentemidi'])) ? $_POST['insulinelentemidi'] : ''; 
$insulinerapidemidi = (isset($_POST['insulinerapidemidi'])) ? $_POST['insulinerapidemidi'] : ''; 
$insulinelentesoir = (isset($_POST['insulinelentesoir'])) ? $_POST['insulinelentesoir'] : ''; 
$insulinerapidesoir = (isset($_POST['insulinerapidesoir'])) ? $_POST['insulinerapidesoir'] : ''; 
$insulinelentediner = (isset($_POST['insulinelentediner'])) ? $_POST['insulinelentediner'] : ''; 
$insulinerapidediner = (isset($_POST['insulinerapidediner'])) ? $_POST['insulinerapidediner'] : ''; 
$insulinelentecollation = (isset($_POST['insulinelentecollation'])) ? $_POST['insulinelentecollation'] : ''; 
$insulinerapidecollation = (isset($_POST['insulinerapidecollation'])) ? $_POST['insulinerapidecollation'] : ''; 
$totalinsulinelente = (isset($_POST['totalinsulinelente'])) ? $_POST['totalinsulinelente'] : ''; 
$totalinsulinerapide = (isset($_POST['totalinsulinerapide'])) ? $_POST['totalinsulinerapide'] : ''; 
$specialite1 = (isset($_POST['specialite1'])) ? $_POST['specialite1'] : ''; 
$posologie1 = (isset($_POST['posologie1'])) ? $_POST['posologie1'] : ''; 
$specialite2 = (isset($_POST['specialite2'])) ? $_POST['specialite2'] : ''; 
$posologie2 = (isset($_POST['posologie2'])) ? $_POST['posologie2'] : ''; 
$specialite3 = (isset($_POST['specialite3'])) ? $_POST['specialite3'] : ''; 
$posologie3 = (isset($_POST['posologie3'])) ? $_POST['posologie3'] : ''; 
$specialite4 = (isset($_POST['specialite4'])) ? $_POST['specialite4'] : ''; 
$posologie4 = (isset($_POST['posologie4'])) ? $_POST['posologie4'] : ''; 
$datebasal1 = (isset($_POST['datebasal1'])) ? $_POST['datebasal1'] : ''; 
$Horaire1 = (isset($_POST['Horaire1'])) ? $_POST['Horaire1'] : ''; 
$Debit1 = (isset($_POST['Debit1'])) ? $_POST['Debit1'] : ''; 
$Horaire2 = (isset($_POST['Horaire2'])) ? $_POST['Horaire2'] : ''; 
$Debit2 = (isset($_POST['Debit2'])) ? $_POST['Debit2'] : ''; 
$Horaire3 = (isset($_POST['Horaire3'])) ? $_POST['Horaire3'] : ''; 
$Debit3 = (isset($_POST['Debit3'])) ? $_POST['Debit3'] : ''; 
$Horaire4 = (isset($_POST['Horaire4'])) ? $_POST['Horaire4'] : ''; 
$Debit4 = (isset($_POST['Debit4'])) ? $_POST['Debit4'] : ''; 
$Horaire1N = (isset($_POST['Horaire1N'])) ? $_POST['Horaire1N'] : ''; 
$Debit1N = (isset($_POST['Debit1N'])) ? $_POST['Debit1N'] : ''; 
$Horaire2N = (isset($_POST['Horaire2N'])) ? $_POST['Horaire2N'] : ''; 
$Debit2N = (isset($_POST['Debit2N'])) ? $_POST['Debit2N'] : ''; 
$Horaire3N = (isset($_POST['Horaire3N'])) ? $_POST['Horaire3N'] : ''; 
$Debit3N = (isset($_POST['Debit3N'])) ? $_POST['Debit3N'] : ''; 
$Horaire4N = (isset($_POST['Horaire4N'])) ? $_POST['Horaire4N'] : ''; 
$Debit4N = (isset($_POST['Debit4N'])) ? $_POST['Debit4N'] : ''; 
$datebasal2 = (isset($_POST['datebasal2'])) ? $_POST['datebasal2'] : ''; 
$Horaire_1 = (isset($_POST['Horaire_1'])) ? $_POST['Horaire_1'] : ''; 
$Debit_1 = (isset($_POST['Debit_1'])) ? $_POST['Debit_1'] : ''; 
$Horaire_2 = (isset($_POST['Horaire_2'])) ? $_POST['Horaire_2'] : ''; 
$Debit_2 = (isset($_POST['Debit_2'])) ? $_POST['Debit_2'] : ''; 
$Horaire_3 = (isset($_POST['Horaire_3'])) ? $_POST['Horaire_3'] : ''; 
$Debit_3 = (isset($_POST['Debit_3'])) ? $_POST['Debit_3'] : ''; 
$Horaire_4 = (isset($_POST['Horaire_4'])) ? $_POST['Horaire_4'] : ''; 
$Debit_4 = (isset($_POST['Debit_4'])) ? $_POST['Debit_4'] : ''; 
$Horaire_N1 = (isset($_POST['Horaire_N1'])) ? $_POST['Horaire_N1'] : ''; 
$Debit_N1 = (isset($_POST['Debit_N1'])) ? $_POST['Debit_N1'] : ''; 
$Horaire_N2 = (isset($_POST['Horaire_N2'])) ? $_POST['Horaire_N2'] : ''; 
$Debit_N2 = (isset($_POST['Debit_N2'])) ? $_POST['Debit_N2'] : ''; 
$Horaire_N3 = (isset($_POST['Horaire_N3'])) ? $_POST['Horaire_N3'] : ''; 
$Debit_N3 = (isset($_POST['Debit_N3'])) ? $_POST['Debit_N3'] : ''; 
$Horaire_N4 = (isset($_POST['Horaire_N4'])) ? $_POST['Horaire_N4'] : ''; 
$Debit_N4 = (isset($_POST['Debit_N4'])) ? $_POST['Debit_N4'] : ''; 
$datebolus = (isset($_POST['datebolus'])) ? $_POST['datebolus'] : ''; 
$ValGlycemique1 = (isset($_POST['ValGlycemique1'])) ? $_POST['ValGlycemique1'] : ''; 
$ValGlyMatin1 = (isset($_POST['ValGlyMatin1'])) ? $_POST['ValGlyMatin1'] : ''; 
$ValGlyMid1 = (isset($_POST['ValGlyMid1'])) ? $_POST['ValGlyMid1'] : ''; 
$ValGlyCollation1 = (isset($_POST['ValGlyCollation1'])) ? $_POST['ValGlyCollation1'] : ''; 
$ValGlySoir1 = (isset($_POST['ValGlySoir1'])) ? $_POST['ValGlySoir1'] : ''; 
$ValGlyAutre1 = (isset($_POST['ValGlyAutre1'])) ? $_POST['ValGlyAutre1'] : ''; 
$ValGlycemique2 = (isset($_POST['ValGlycemique2'])) ? $_POST['ValGlycemique2'] : ''; 
$ValGlyMatin2 = (isset($_POST['ValGlyMatin2'])) ? $_POST['ValGlyMatin2'] : ''; 
$ValGlyMid2 = (isset($_POST['ValGlyMid2'])) ? $_POST['ValGlyMid2'] : ''; 
$ValGlyCollation2 = (isset($_POST['ValGlyCollation2'])) ? $_POST['ValGlyCollation2'] : ''; 
$ValGlySoir2 = (isset($_POST['ValGlySoir2'])) ? $_POST['ValGlySoir2'] : ''; 
$ValGlyAutre2 = (isset($_POST['ValGlyAutre2'])) ? $_POST['ValGlyAutre2'] : ''; 
$ValGlycemique3 = (isset($_POST['ValGlycemique3'])) ? $_POST['ValGlycemique3'] : ''; 
$ValGlyMatin3 = (isset($_POST['ValGlyMatin3'])) ? $_POST['ValGlyMatin3'] : ''; 
$ValGlyMid3 = (isset($_POST['ValGlyMid3'])) ? $_POST['ValGlyMid3'] : ''; 
$ValGlyCollation3 = (isset($_POST['ValGlyCollation3'])) ? $_POST['ValGlyCollation3'] : ''; 
$ValGlySoir3 = (isset($_POST['ValGlySoir3'])) ? $_POST['ValGlySoir3'] : ''; 
$ValGlyAutre3 = (isset($_POST['ValGlyAutre3'])) ? $_POST['ValGlyAutre3'] : ''; 
$ValGlycemique4 = (isset($_POST['ValGlycemique4'])) ? $_POST['ValGlycemique4'] : ''; 
$ValGlyMatin4 = (isset($_POST['ValGlyMatin4'])) ? $_POST['ValGlyMatin4'] : ''; 
$ValGlyMid4 = (isset($_POST['ValGlyMid4'])) ? $_POST['ValGlyMid4'] : ''; 
$ValGlyCollation4 = (isset($_POST['ValGlyCollation4'])) ? $_POST['ValGlyCollation4'] : ''; 
$ValGlySoir4 = (isset($_POST['ValGlySoir4'])) ? $_POST['ValGlySoir4'] : ''; 
$ValGlyAutre4 = (isset($_POST['ValGlyAutre4'])) ? $_POST['ValGlyAutre4'] : ''; 
$ValGlycemique5 = (isset($_POST['ValGlycemique5'])) ? $_POST['ValGlycemique5'] : ''; 
$ValGlyMatin5 = (isset($_POST['ValGlyMatin5'])) ? $_POST['ValGlyMatin5'] : ''; 
$ValGlyMid5 = (isset($_POST['ValGlyMid5'])) ? $_POST['ValGlyMid5'] : ''; 
$ValGlyCollation5 = (isset($_POST['ValGlyCollation5'])) ? $_POST['ValGlyCollation5'] : ''; 
$ValGlySoir5 = (isset($_POST['ValGlySoir5'])) ? $_POST['ValGlySoir5'] : ''; 
$ValGlyAutre5 = (isset($_POST['ValGlyAutre5'])) ? $_POST['ValGlyAutre5'] : ''; 
$ValGlycemique6 = (isset($_POST['ValGlycemique6'])) ? $_POST['ValGlycemique6'] : ''; 
$ValGlyMatin6 = (isset($_POST['ValGlyMatin6'])) ? $_POST['ValGlyMatin6'] : ''; 
$ValGlyMid6 = (isset($_POST['ValGlyMid6'])) ? $_POST['ValGlyMid6'] : ''; 
$ValGlyCollation6 = (isset($_POST['ValGlyCollation6'])) ? $_POST['ValGlyCollation6'] : ''; 
$ValGlySoir6 = (isset($_POST['ValGlySoir6'])) ? $_POST['ValGlySoir6'] : ''; 
$ValGlyAutre6 = (isset($_POST['ValGlyAutre6'])) ? $_POST['ValGlyAutre6'] : ''; 
$ValGlycemique7 = (isset($_POST['ValGlycemique7'])) ? $_POST['ValGlycemique7'] : ''; 
$ValGlyMatin7 = (isset($_POST['ValGlyMatin7'])) ? $_POST['ValGlyMatin7'] : ''; 
$ValGlyMid7 = (isset($_POST['ValGlyMid7'])) ? $_POST['ValGlyMid7'] : ''; 
$ValGlyCollation7 = (isset($_POST['ValGlyCollation7'])) ? $_POST['ValGlyCollation7'] : ''; 
$ValGlySoir7 = (isset($_POST['ValGlySoir7'])) ? $_POST['ValGlySoir7'] : ''; 
$ValGlyAutre7 = (isset($_POST['ValGlyAutre7'])) ? $_POST['ValGlyAutre7'] : ''; 
$dateglycemie = (isset($_POST['dateglycemie'])) ? $_POST['dateglycemie'] : ''; 
$glycemie1 = (isset($_POST['glycemie1'])) ? $_POST['glycemie1'] : ''; 
$glycemie2 = (isset($_POST['glycemie2'])) ? $_POST['glycemie2'] : ''; 
$glycemie3 = (isset($_POST['glycemie3'])) ? $_POST['glycemie3'] : ''; 
$glycemie4 = (isset($_POST['glycemie4'])) ? $_POST['glycemie4'] : ''; 
$glycemie5 = (isset($_POST['glycemie5'])) ? $_POST['glycemie5'] : ''; 
$glycemie6 = (isset($_POST['glycemie6'])) ? $_POST['glycemie6'] : ''; 
$glycemie7 = (isset($_POST['glycemie7'])) ? $_POST['glycemie7'] : ''; 
$glycemie8 = (isset($_POST['glycemie8'])) ? $_POST['glycemie8'] : ''; 
$glycemie9 = (isset($_POST['glycemie9'])) ? $_POST['glycemie9'] : ''; 
$glycemie10 = (isset($_POST['glycemie10'])) ? $_POST['glycemie10'] : ''; 
$glycemie11 = (isset($_POST['glycemie11'])) ? $_POST['glycemie11'] : ''; 
$glycemie12 = (isset($_POST['glycemie12'])) ? $_POST['glycemie12'] : ''; 
$glycemie13 = (isset($_POST['glycemie13'])) ? $_POST['glycemie13'] : ''; 
$glycemie14 = (isset($_POST['glycemie14'])) ? $_POST['glycemie14'] : ''; 
$glycemie15 = (isset($_POST['glycemie15'])) ? $_POST['glycemie15'] : ''; 
$glycemie16 = (isset($_POST['glycemie16'])) ? $_POST['glycemie16'] : ''; 
$glycemie17 = (isset($_POST['glycemie17'])) ? $_POST['glycemie17'] : ''; 
$glycemie18 = (isset($_POST['glycemie18'])) ? $_POST['glycemie18'] : ''; 
$glycemie19 = (isset($_POST['glycemie19'])) ? $_POST['glycemie19'] : ''; 
$glycemie20 = (isset($_POST['glycemie20'])) ? $_POST['glycemie20'] : ''; 
$glycemie21 = (isset($_POST['glycemie21'])) ? $_POST['glycemie21'] : ''; 
$glycemie22 = (isset($_POST['glycemie22'])) ? $_POST['glycemie22'] : ''; 
$glycemie23 = (isset($_POST['glycemie23'])) ? $_POST['glycemie23'] : ''; 
$glycemie24 = (isset($_POST['glycemie24'])) ? $_POST['glycemie24'] : ''; 
$glycemie25 = (isset($_POST['glycemie25'])) ? $_POST['glycemie25'] : ''; 
$glycemie26 = (isset($_POST['glycemie26'])) ? $_POST['glycemie26'] : ''; 
$glycemie27 = (isset($_POST['glycemie27'])) ? $_POST['glycemie27'] : ''; 
$glycemie28 = (isset($_POST['glycemie28'])) ? $_POST['glycemie28'] : ''; 
$glycemie29 = (isset($_POST['glycemie29'])) ? $_POST['glycemie29'] : ''; 
$glycemie30 = (isset($_POST['glycemie30'])) ? $_POST['glycemie30'] : ''; 
$glycemie31 = (isset($_POST['glycemie31'])) ? $_POST['glycemie31'] : ''; 
$glycemie32 = (isset($_POST['glycemie32'])) ? $_POST['glycemie32'] : ''; 
$glycemie33 = (isset($_POST['glycemie33'])) ? $_POST['glycemie33'] : ''; 
$glycemie34 = (isset($_POST['glycemie34'])) ? $_POST['glycemie34'] : ''; 
$glycemie35 = (isset($_POST['glycemie35'])) ? $_POST['glycemie35'] : ''; 
$glycemie36 = (isset($_POST['glycemie36'])) ? $_POST['glycemie36'] : ''; 
$glycemie37 = (isset($_POST['glycemie37'])) ? $_POST['glycemie37'] : ''; 
$glycemie38 = (isset($_POST['glycemie38'])) ? $_POST['glycemie38'] : ''; 
$glycemie39 = (isset($_POST['glycemie39'])) ? $_POST['glycemie39'] : ''; 
$glycemie40 = (isset($_POST['glycemie40'])) ? $_POST['glycemie40'] : ''; 
$glycemie41 = (isset($_POST['glycemie41'])) ? $_POST['glycemie41'] : ''; 
$glycemie42 = (isset($_POST['glycemie42'])) ? $_POST['glycemie42'] : ''; 
$glycemie43 = (isset($_POST['glycemie43'])) ? $_POST['glycemie43'] : ''; 
$glycemie44 = (isset($_POST['glycemie44'])) ? $_POST['glycemie44'] : ''; 
$glycemie45 = (isset($_POST['glycemie45'])) ? $_POST['glycemie45'] : ''; 
$glycemie46 = (isset($_POST['glycemie46'])) ? $_POST['glycemie46'] : ''; 
$glycemie47 = (isset($_POST['glycemie47'])) ? $_POST['glycemie47'] : ''; 
$glycemie48 = (isset($_POST['glycemie48'])) ? $_POST['glycemie48'] : ''; 
$glycemie49 = (isset($_POST['glycemie49'])) ? $_POST['glycemie49'] : ''; 
$glycemie50 = (isset($_POST['glycemie50'])) ? $_POST['glycemie50'] : ''; 
$glycemie51 = (isset($_POST['glycemie51'])) ? $_POST['glycemie51'] : ''; 
$glycemie52 = (isset($_POST['glycemie52'])) ? $_POST['glycemie52'] : ''; 
$glycemie53 = (isset($_POST['glycemie53'])) ? $_POST['glycemie53'] : ''; 
$glycemie54 = (isset($_POST['glycemie54'])) ? $_POST['glycemie54'] : ''; 
$glycemie55 = (isset($_POST['glycemie55'])) ? $_POST['glycemie55'] : ''; 
$glycemie56 = (isset($_POST['glycemie56'])) ? $_POST['glycemie56'] : ''; 
$glycemie57 = (isset($_POST['glycemie57'])) ? $_POST['glycemie57'] : ''; 
$glycemie58 = (isset($_POST['glycemie58'])) ? $_POST['glycemie58'] : ''; 
$glycemie59 = (isset($_POST['glycemie59'])) ? $_POST['glycemie59'] : ''; 
$glycemie60 = (isset($_POST['glycemie60'])) ? $_POST['glycemie60'] : ''; 
$glycemie61 = (isset($_POST['glycemie61'])) ? $_POST['glycemie61'] : ''; 
$glycemie62 = (isset($_POST['glycemie62'])) ? $_POST['glycemie62'] : ''; 
$glycemie63 = (isset($_POST['glycemie63'])) ? $_POST['glycemie63'] : ''; 
$glycemie64 = (isset($_POST['glycemie64'])) ? $_POST['glycemie64'] : ''; 
$glycemie65 = (isset($_POST['glycemie65'])) ? $_POST['glycemie65'] : ''; 
$glycemie66 = (isset($_POST['glycemie66'])) ? $_POST['glycemie66'] : ''; 
$glycemie67 = (isset($_POST['glycemie67'])) ? $_POST['glycemie67'] : ''; 
$glycemie68 = (isset($_POST['glycemie68'])) ? $_POST['glycemie68'] : ''; 
$glycemie69 = (isset($_POST['glycemie69'])) ? $_POST['glycemie69'] : ''; 
$glycemie70 = (isset($_POST['glycemie70'])) ? $_POST['glycemie70'] : ''; 
$glycemie71 = (isset($_POST['glycemie71'])) ? $_POST['glycemie71'] : ''; 
$glycemie72 = (isset($_POST['glycemie72'])) ? $_POST['glycemie72'] : ''; 
$glycemie73 = (isset($_POST['glycemie73'])) ? $_POST['glycemie73'] : ''; 
$glycemie74 = (isset($_POST['glycemie74'])) ? $_POST['glycemie74'] : ''; 
$glycemie75 = (isset($_POST['glycemie75'])) ? $_POST['glycemie75'] : ''; 
$glycemie76 = (isset($_POST['glycemie76'])) ? $_POST['glycemie76'] : ''; 
$glycemie77 = (isset($_POST['glycemie77'])) ? $_POST['glycemie77'] : ''; 
$glycemie78 = (isset($_POST['glycemie78'])) ? $_POST['glycemie78'] : ''; 
$glycemie79 = (isset($_POST['glycemie79'])) ? $_POST['glycemie79'] : ''; 
$glycemie80 = (isset($_POST['glycemie80'])) ? $_POST['glycemie80'] : ''; 
$glycemie81 = (isset($_POST['glycemie81'])) ? $_POST['glycemie81'] : ''; 
$glycemie82 = (isset($_POST['glycemie82'])) ? $_POST['glycemie82'] : ''; 
$glycemie83 = (isset($_POST['glycemie83'])) ? $_POST['glycemie83'] : ''; 
$glycemie84 = (isset($_POST['glycemie84'])) ? $_POST['glycemie84'] : ''; 
$synthesecommentaire = (isset($_POST['synthesecommentaire'])) ? $_POST['synthesecommentaire'] : ''; 
$objectifglycemiquepreprandial = (isset($_POST['objectifglycemiquepreprandial'])) ? $_POST['objectifglycemiquepreprandial'] : ''; 
$objectifglycemiquepostprandial = (isset($_POST['objectifglycemiquepostprandial'])) ? $_POST['objectifglycemiquepostprandial'] : ''; 
$ValDatesHemGlyc1 = (isset($_POST['ValDatesHemGlyc1'])) ? $_POST['ValDatesHemGlyc1'] : ''; 
$ValDatesHemGlyc2 = (isset($_POST['ValDatesHemGlyc2'])) ? $_POST['ValDatesHemGlyc2'] : ''; 
$ValDatesHemGlyc3 = (isset($_POST['ValDatesHemGlyc3'])) ? $_POST['ValDatesHemGlyc3'] : ''; 
$ValDatesHemGlyc4 = (isset($_POST['ValDatesHemGlyc4'])) ? $_POST['ValDatesHemGlyc4'] : ''; 
$ValDatesHemGlyc5 = (isset($_POST['ValDatesHemGlyc5'])) ? $_POST['ValDatesHemGlyc5'] : ''; 
$ValDatesHemGlyc6 = (isset($_POST['ValDatesHemGlyc6'])) ? $_POST['ValDatesHemGlyc6'] : ''; 
$ValDatesHemGlyc7 = (isset($_POST['ValDatesHemGlyc7'])) ? $_POST['ValDatesHemGlyc7'] : ''; 
$ValDatesHemGlyc8 = (isset($_POST['ValDatesHemGlyc8'])) ? $_POST['ValDatesHemGlyc8'] : ''; 
$ValDatesHemGlyc9 = (isset($_POST['ValDatesHemGlyc9'])) ? $_POST['ValDatesHemGlyc9'] : ''; 
$ValHbA1cHemGlyc1 = (isset($_POST['ValHbA1cHemGlyc1'])) ? $_POST['ValHbA1cHemGlyc1'] : ''; 
$ValHbA1cHemGlyc2 = (isset($_POST['ValHbA1cHemGlyc2'])) ? $_POST['ValHbA1cHemGlyc2'] : ''; 
$ValHbA1cHemGlyc3 = (isset($_POST['ValHbA1cHemGlyc3'])) ? $_POST['ValHbA1cHemGlyc3'] : ''; 
$ValHbA1cHemGlyc4 = (isset($_POST['ValHbA1cHemGlyc4'])) ? $_POST['ValHbA1cHemGlyc4'] : ''; 
$ValHbA1cHemGlyc5 = (isset($_POST['ValHbA1cHemGlyc5'])) ? $_POST['ValHbA1cHemGlyc5'] : ''; 
$ValHbA1cHemGlyc6 = (isset($_POST['ValHbA1cHemGlyc6'])) ? $_POST['ValHbA1cHemGlyc6'] : ''; 
$ValHbA1cHemGlyc7 = (isset($_POST['ValHbA1cHemGlyc7'])) ? $_POST['ValHbA1cHemGlyc7'] : ''; 
$ValHbA1cHemGlyc8 = (isset($_POST['ValHbA1cHemGlyc8'])) ? $_POST['ValHbA1cHemGlyc8'] : ''; 
$ValHbA1cHemGlyc9 = (isset($_POST['ValHbA1cHemGlyc9'])) ? $_POST['ValHbA1cHemGlyc9'] : ''; 
$activitephysique = (isset($_POST['activitephysique'])) ? $_POST['activitephysique'] : ''; 
$profession = (isset($_POST['profession'])) ? $_POST['profession'] : ''; 
$situationfamiliale = (isset($_POST['situationfamiliale'])) ? $_POST['situationfamiliale'] : ''; 
$observation = (isset($_POST['observation'])) ? $_POST['observation'] : ''; 
$hygienealimentaire = (isset($_POST['hygienealimentaire'])) ? $_POST['hygienealimentaire'] : ''; 
$stabilitehoraires = (isset($_POST['stabilitehoraires'])) ? $_POST['stabilitehoraires'] : ''; 
$details = (isset($_POST['details'])) ? $_POST['details'] : ''; 
$environnement = (isset($_POST['environnement'])) ? $_POST['environnement'] : ''; 
$etatcutane = (isset($_POST['etatcutane'])) ? $_POST['etatcutane'] : ''; 
$choixpoint = (isset($_POST['choixpoint'])) ? $_POST['choixpoint'] : ''; 
$rougeur = (isset($_POST['rougeur'])) ? $_POST['rougeur'] : ''; 
$petitdejeunerDe = (isset($_POST['petitdejeunerDe'])) ? $_POST['petitdejeunerDe'] : ''; 
$petitdejeunerA = (isset($_POST['petitdejeunerA'])) ? $_POST['petitdejeunerA'] : ''; 
$petitdejeunerRotation = (isset($_POST['petitdejeunerRotation'])) ? $_POST['petitdejeunerRotation'] : ''; 
$petitdejeunerObjectif = (isset($_POST['petitdejeunerObjectif'])) ? $_POST['petitdejeunerObjectif'] : ''; 
$petitdejeunerSensibilite = (isset($_POST['petitdejeunerSensibilite'])) ? $_POST['petitdejeunerSensibilite'] : ''; 
$dejeunerDe = (isset($_POST['dejeunerDe'])) ? $_POST['dejeunerDe'] : ''; 
$dejeunerA = (isset($_POST['dejeunerA'])) ? $_POST['dejeunerA'] : ''; 
$dejeunerRotation = (isset($_POST['dejeunerRotation'])) ? $_POST['dejeunerRotation'] : ''; 
$dejeunerObjectif = (isset($_POST['dejeunerObjectif'])) ? $_POST['dejeunerObjectif'] : ''; 
$dejeunerSensibilite = (isset($_POST['dejeunerSensibilite'])) ? $_POST['dejeunerSensibilite'] : ''; 
$gouterDe = (isset($_POST['gouterDe'])) ? $_POST['gouterDe'] : ''; 
$gouterA = (isset($_POST['gouterA'])) ? $_POST['gouterA'] : ''; 
$gouterRotation = (isset($_POST['gouterRotation'])) ? $_POST['gouterRotation'] : ''; 
$gouterObjectif = (isset($_POST['gouterObjectif'])) ? $_POST['gouterObjectif'] : ''; 
$gouterSensibilite = (isset($_POST['gouterSensibilite'])) ? $_POST['gouterSensibilite'] : ''; 
$dinerDe = (isset($_POST['dinerDe'])) ? $_POST['dinerDe'] : ''; 
$dinerA = (isset($_POST['dinerA'])) ? $_POST['dinerA'] : ''; 
$dinerRotation = (isset($_POST['dinerRotation'])) ? $_POST['dinerRotation'] : ''; 
$dinerObjectif = (isset($_POST['dinerObjectif'])) ? $_POST['dinerObjectif'] : ''; 
$dinerSensibilite = (isset($_POST['dinerSensibilite'])) ? $_POST['dinerSensibilite'] : ''; 
$collationDe = (isset($_POST['collationDe'])) ? $_POST['collationDe'] : ''; 
$collationA = (isset($_POST['collationA'])) ? $_POST['collationA'] : ''; 
$collationRotation = (isset($_POST['collationRotation'])) ? $_POST['collationRotation'] : ''; 
$collationObjectif = (isset($_POST['collationObjectif'])) ? $_POST['collationObjectif'] : ''; 
$collationSensibilite = (isset($_POST['collationSensibilite'])) ? $_POST['collationSensibilite'] : ''; 
$regime = (isset($_POST['regime'])) ? $_POST['regime'] : ''; 
$observation2 = (isset($_POST['observation2'])) ? $_POST['observation2'] : ''; 
$survenue = (isset($_POST['survenue'])) ? $_POST['survenue'] : ''; 
$atcd = (isset($_POST['atcd'])) ? $_POST['atcd'] : ''; 
$traitement = (isset($_POST['traitement'])) ? $_POST['traitement'] : ''; 
$date1 = (isset($_POST['date1'])) ? $_POST['date1'] : ''; 
$date2 = (isset($_POST['date2'])) ? $_POST['date2'] : ''; 
$date3 = (isset($_POST['date3'])) ? $_POST['date3'] : ''; 
$date4 = (isset($_POST['date4'])) ? $_POST['date4'] : ''; 
$date5 = (isset($_POST['date5'])) ? $_POST['date5'] : ''; 
$date6 = (isset($_POST['date6'])) ? $_POST['date6'] : ''; 
$date7 = (isset($_POST['date7'])) ? $_POST['date7'] : ''; 
$date8 = (isset($_POST['date8'])) ? $_POST['date8'] : ''; 
$date9 = (isset($_POST['date9'])) ? $_POST['date9'] : ''; 
$taille1 = (isset($_POST['taille1'])) ? $_POST['taille1'] : ''; 
$taille2 = (isset($_POST['taille2'])) ? $_POST['taille2'] : ''; 
$taille3 = (isset($_POST['taille3'])) ? $_POST['taille3'] : ''; 
$taille4 = (isset($_POST['taille4'])) ? $_POST['taille4'] : ''; 
$taille5 = (isset($_POST['taille5'])) ? $_POST['taille5'] : ''; 
$taille6 = (isset($_POST['taille6'])) ? $_POST['taille6'] : ''; 
$taille7 = (isset($_POST['taille7'])) ? $_POST['taille7'] : ''; 
$taille8 = (isset($_POST['taille8'])) ? $_POST['taille8'] : ''; 
$taille9 = (isset($_POST['taille9'])) ? $_POST['taille9'] : ''; 
$poids1 = (isset($_POST['poids1'])) ? $_POST['poids1'] : ''; 
$poids2 = (isset($_POST['poids2'])) ? $_POST['poids2'] : ''; 
$poids3 = (isset($_POST['poids3'])) ? $_POST['poids3'] : ''; 
$poids4 = (isset($_POST['poids4'])) ? $_POST['poids4'] : ''; 
$poids5 = (isset($_POST['poids5'])) ? $_POST['poids5'] : ''; 
$poids6 = (isset($_POST['poids6'])) ? $_POST['poids6'] : ''; 
$poids7 = (isset($_POST['poids7'])) ? $_POST['poids7'] : ''; 
$poids8 = (isset($_POST['poids8'])) ? $_POST['poids8'] : ''; 
$poids9 = (isset($_POST['poids9'])) ? $_POST['poids9'] : ''; 
$imc1 = (isset($_POST['imc1'])) ? $_POST['imc1'] : ''; 
$imc2 = (isset($_POST['imc2'])) ? $_POST['imc2'] : ''; 
$imc3 = (isset($_POST['imc3'])) ? $_POST['imc3'] : ''; 
$imc4 = (isset($_POST['imc4'])) ? $_POST['imc4'] : ''; 
$imc5 = (isset($_POST['imc5'])) ? $_POST['imc5'] : ''; 
$imc6 = (isset($_POST['imc6'])) ? $_POST['imc6'] : ''; 
$imc7 = (isset($_POST['imc7'])) ? $_POST['imc7'] : ''; 
$imc8 = (isset($_POST['imc8'])) ? $_POST['imc8'] : ''; 
$imc9 = (isset($_POST['imc9'])) ? $_POST['imc9'] : ''; 
$pmpdate1 = (isset($_POST['pmpdate1'])) ? $_POST['pmpdate1'] : ''; 
$pmpdate2 = (isset($_POST['pmpdate2'])) ? $_POST['pmpdate2'] : ''; 
$pmpdate3 = (isset($_POST['pmpdate3'])) ? $_POST['pmpdate3'] : ''; 
$pmpdate4 = (isset($_POST['pmpdate4'])) ? $_POST['pmpdate4'] : ''; 
$pmpselect1 = (isset($_POST['pmpselect1'])) ? $_POST['pmpselect1'] : ''; 
$pmpselect2 = (isset($_POST['pmpselect2'])) ? $_POST['pmpselect2'] : ''; 
$pmpselect3 = (isset($_POST['pmpselect3'])) ? $_POST['pmpselect3'] : ''; 
$pmpselect4 = (isset($_POST['pmpselect4'])) ? $_POST['pmpselect4'] : ''; 
$pmpcommentaire1 = (isset($_POST['pmpcommentaire1'])) ? $_POST['pmpcommentaire1'] : ''; 
$pmpselect5 = (isset($_POST['pmpselect5'])) ? $_POST['pmpselect5'] : ''; 
$pmpselect6 = (isset($_POST['pmpselect6'])) ? $_POST['pmpselect6'] : ''; 
$pmpselect7 = (isset($_POST['pmpselect7'])) ? $_POST['pmpselect7'] : ''; 
$pmpselect8 = (isset($_POST['pmpselect8'])) ? $_POST['pmpselect8'] : ''; 
$pmpcommentaire2 = (isset($_POST['pmpcommentaire2'])) ? $_POST['pmpcommentaire2'] : ''; 
$pmpselect9 = (isset($_POST['pmpselect9'])) ? $_POST['pmpselect9'] : ''; 
$pmpselect10 = (isset($_POST['pmpselect10'])) ? $_POST['pmpselect10'] : ''; 
$pmpselect11 = (isset($_POST['pmpselect11'])) ? $_POST['pmpselect11'] : ''; 
$pmpselect12 = (isset($_POST['pmpselect12'])) ? $_POST['pmpselect12'] : ''; 
$pmpcommentaire3 = (isset($_POST['pmpcommentaire3'])) ? $_POST['pmpcommentaire3'] : ''; 
$pmpselect13 = (isset($_POST['pmpselect13'])) ? $_POST['pmpselect13'] : ''; 
$pmpselect14 = (isset($_POST['pmpselect14'])) ? $_POST['pmpselect14'] : ''; 
$pmpselect15 = (isset($_POST['pmpselect15'])) ? $_POST['pmpselect15'] : ''; 
$pmpselect16 = (isset($_POST['pmpselect16'])) ? $_POST['pmpselect16'] : ''; 
$pmpcommentaire4 = (isset($_POST['pmpcommentaire4'])) ? $_POST['pmpcommentaire4'] : ''; 
$pmpselect17 = (isset($_POST['pmpselect17'])) ? $_POST['pmpselect17'] : ''; 
$pmpselect18 = (isset($_POST['pmpselect18'])) ? $_POST['pmpselect18'] : ''; 
$pmpselect19 = (isset($_POST['pmpselect19'])) ? $_POST['pmpselect19'] : ''; 
$pmpselect20 = (isset($_POST['pmpselect20'])) ? $_POST['pmpselect20'] : ''; 
$pmpcommentaire5 = (isset($_POST['pmpcommentaire5'])) ? $_POST['pmpcommentaire5'] : ''; 
$pmpselect21 = (isset($_POST['pmpselect21'])) ? $_POST['pmpselect21'] : ''; 
$pmpselect22 = (isset($_POST['pmpselect22'])) ? $_POST['pmpselect22'] : ''; 
$pmpselect23 = (isset($_POST['pmpselect23'])) ? $_POST['pmpselect23'] : ''; 
$pmpselect24 = (isset($_POST['pmpselect24'])) ? $_POST['pmpselect24'] : ''; 
$pmpcommentaire6 = (isset($_POST['pmpcommentaire6'])) ? $_POST['pmpcommentaire6'] : ''; 
$pmpselect25 = (isset($_POST['pmpselect25'])) ? $_POST['pmpselect25'] : ''; 
$pmpselect26 = (isset($_POST['pmpselect26'])) ? $_POST['pmpselect26'] : ''; 
$pmpselect27 = (isset($_POST['pmpselect27'])) ? $_POST['pmpselect27'] : ''; 
$pmpselect28 = (isset($_POST['pmpselect28'])) ? $_POST['pmpselect28'] : ''; 
$pmpcommentaire7 = (isset($_POST['pmpcommentaire7'])) ? $_POST['pmpcommentaire7'] : ''; 
$pmpselect29 = (isset($_POST['pmpselect29'])) ? $_POST['pmpselect29'] : ''; 
$pmpselect291 = (isset($_POST['pmpselect291'])) ? $_POST['pmpselect291'] : ''; 
$pmpselect292 = (isset($_POST['pmpselect292'])) ? $_POST['pmpselect292'] : ''; 
$pmpselect293 = (isset($_POST['pmpselect293'])) ? $_POST['pmpselect293'] : ''; 
$pmpcommentaire8 = (isset($_POST['pmpcommentaire8'])) ? $_POST['pmpcommentaire8'] : ''; 
$pmpselect294 = (isset($_POST['pmpselect294'])) ? $_POST['pmpselect294'] : ''; 
$pmpselect295 = (isset($_POST['pmpselect295'])) ? $_POST['pmpselect295'] : ''; 
$pmpselect296 = (isset($_POST['pmpselect296'])) ? $_POST['pmpselect296'] : ''; 
$pmpselect297 = (isset($_POST['pmpselect297'])) ? $_POST['pmpselect297'] : ''; 
$pmpcommentaire9 = (isset($_POST['pmpcommentaire9'])) ? $_POST['pmpcommentaire9'] : ''; 
$pmpautre = (isset($_POST['pmpautre'])) ? $_POST['pmpautre'] : ''; 
$alarmedate1 = (isset($_POST['alarmedate1'])) ? $_POST['alarmedate1'] : ''; 
$alarmedate2 = (isset($_POST['alarmedate2'])) ? $_POST['alarmedate2'] : ''; 
$alarmedate3 = (isset($_POST['alarmedate3'])) ? $_POST['alarmedate3'] : ''; 
$alarmedate4 = (isset($_POST['alarmedate4'])) ? $_POST['alarmedate4'] : ''; 
$alarmeselect1 = (isset($_POST['alarmeselect1'])) ? $_POST['alarmeselect1'] : ''; 
$alarmeselect2 = (isset($_POST['alarmeselect2'])) ? $_POST['alarmeselect2'] : ''; 
$alarmeselect3 = (isset($_POST['alarmeselect3'])) ? $_POST['alarmeselect3'] : ''; 
$alarmeselect4 = (isset($_POST['alarmeselect4'])) ? $_POST['alarmeselect4'] : ''; 
$alarmecommentaire1 = (isset($_POST['alarmecommentaire1'])) ? $_POST['alarmecommentaire1'] : ''; 
$alarmeselect5 = (isset($_POST['alarmeselect5'])) ? $_POST['alarmeselect5'] : ''; 
$alarmeselect6 = (isset($_POST['alarmeselect6'])) ? $_POST['alarmeselect6'] : ''; 
$alarmeselect7 = (isset($_POST['alarmeselect7'])) ? $_POST['alarmeselect7'] : ''; 
$alarmeselect8 = (isset($_POST['alarmeselect8'])) ? $_POST['alarmeselect8'] : ''; 
$alarmecommentaire2 = (isset($_POST['alarmecommentaire2'])) ? $_POST['alarmecommentaire2'] : ''; 
$alarmeselect9 = (isset($_POST['alarmeselect9'])) ? $_POST['alarmeselect9'] : ''; 
$alarmeselect10 = (isset($_POST['alarmeselect10'])) ? $_POST['alarmeselect10'] : ''; 
$alarmeselect11 = (isset($_POST['alarmeselect11'])) ? $_POST['alarmeselect11'] : ''; 
$alarmeselect12 = (isset($_POST['alarmeselect12'])) ? $_POST['alarmeselect12'] : ''; 
$alarmecommentaire3 = (isset($_POST['alarmecommentaire3'])) ? $_POST['alarmecommentaire3'] : ''; 
$alarmeselect13 = (isset($_POST['alarmeselect13'])) ? $_POST['alarmeselect13'] : ''; 
$alarmeselect14 = (isset($_POST['alarmeselect14'])) ? $_POST['alarmeselect14'] : ''; 
$alarmeselect15 = (isset($_POST['alarmeselect15'])) ? $_POST['alarmeselect15'] : ''; 
$alarmeselect16 = (isset($_POST['alarmeselect16'])) ? $_POST['alarmeselect16'] : ''; 
$alarmecommentaire4 = (isset($_POST['alarmecommentaire4'])) ? $_POST['alarmecommentaire4'] : ''; 
$alarmeselect17 = (isset($_POST['alarmeselect17'])) ? $_POST['alarmeselect17'] : ''; 
$alarmeselect18 = (isset($_POST['alarmeselect18'])) ? $_POST['alarmeselect18'] : ''; 
$alarmeselect19 = (isset($_POST['alarmeselect19'])) ? $_POST['alarmeselect19'] : ''; 
$alarmeselect20 = (isset($_POST['alarmeselect20'])) ? $_POST['alarmeselect20'] : ''; 
$alarmecommentaire5 = (isset($_POST['alarmecommentaire5'])) ? $_POST['alarmecommentaire5'] : ''; 
$alarmeselect21 = (isset($_POST['alarmeselect21'])) ? $_POST['alarmeselect21'] : ''; 
$alarmeselect22 = (isset($_POST['alarmeselect22'])) ? $_POST['alarmeselect22'] : ''; 
$alarmeselect23 = (isset($_POST['alarmeselect23'])) ? $_POST['alarmeselect23'] : ''; 
$alarmeselect24 = (isset($_POST['alarmeselect24'])) ? $_POST['alarmeselect24'] : ''; 
$alarmecommentaire6 = (isset($_POST['alarmecommentaire6'])) ? $_POST['alarmecommentaire6'] : ''; 
$alarmeselect25 = (isset($_POST['alarmeselect25'])) ? $_POST['alarmeselect25'] : ''; 
$alarmeselect26 = (isset($_POST['alarmeselect26'])) ? $_POST['alarmeselect26'] : ''; 
$alarmeselect27 = (isset($_POST['alarmeselect27'])) ? $_POST['alarmeselect27'] : ''; 
$alarmeselect28 = (isset($_POST['alarmeselect28'])) ? $_POST['alarmeselect28'] : ''; 
$alarmecommentaire7 = (isset($_POST['alarmecommentaire7'])) ? $_POST['alarmecommentaire7'] : ''; 
$alarmeautre = (isset($_POST['alarmeautre'])) ? $_POST['alarmeautre'] : ''; 
$manipdate1 = (isset($_POST['manipdate1'])) ? $_POST['manipdate1'] : ''; 
$manipdate2 = (isset($_POST['manipdate2'])) ? $_POST['manipdate2'] : ''; 
$manipdate3 = (isset($_POST['manipdate3'])) ? $_POST['manipdate3'] : ''; 
$manipdate4 = (isset($_POST['manipdate4'])) ? $_POST['manipdate4'] : ''; 
$manipselect1 = (isset($_POST['manipselect1'])) ? $_POST['manipselect1'] : ''; 
$manipselect2 = (isset($_POST['manipselect2'])) ? $_POST['manipselect2'] : ''; 
$manipselect3 = (isset($_POST['manipselect3'])) ? $_POST['manipselect3'] : ''; 
$manipselect4 = (isset($_POST['manipselect4'])) ? $_POST['manipselect4'] : ''; 
$manipcommentaire1 = (isset($_POST['manipcommentaire1'])) ? $_POST['manipcommentaire1'] : ''; 
$manipselect5 = (isset($_POST['manipselect5'])) ? $_POST['manipselect5'] : ''; 
$manipselect6 = (isset($_POST['manipselect6'])) ? $_POST['manipselect6'] : ''; 
$manipselect7 = (isset($_POST['manipselect7'])) ? $_POST['manipselect7'] : ''; 
$manipselect8 = (isset($_POST['manipselect8'])) ? $_POST['manipselect8'] : ''; 
$manipcommentaire2 = (isset($_POST['manipcommentaire2'])) ? $_POST['manipcommentaire2'] : ''; 
$manipselect9 = (isset($_POST['manipselect9'])) ? $_POST['manipselect9'] : ''; 
$manipselect10 = (isset($_POST['manipselect10'])) ? $_POST['manipselect10'] : ''; 
$manipselect11 = (isset($_POST['manipselect11'])) ? $_POST['manipselect11'] : ''; 
$manipselect12 = (isset($_POST['manipselect12'])) ? $_POST['manipselect12'] : ''; 
$manipcommentaire3 = (isset($_POST['manipcommentaire3'])) ? $_POST['manipcommentaire3'] : ''; 
$manipselect13 = (isset($_POST['manipselect13'])) ? $_POST['manipselect13'] : ''; 
$manipselect14 = (isset($_POST['manipselect14'])) ? $_POST['manipselect14'] : ''; 
$manipselect15 = (isset($_POST['manipselect15'])) ? $_POST['manipselect15'] : ''; 
$manipselect16 = (isset($_POST['manipselect16'])) ? $_POST['manipselect16'] : ''; 
$manipcommentaire4 = (isset($_POST['manipcommentaire4'])) ? $_POST['manipcommentaire4'] : ''; 
$manipselect17 = (isset($_POST['manipselect17'])) ? $_POST['manipselect17'] : ''; 
$manipselect18 = (isset($_POST['manipselect18'])) ? $_POST['manipselect18'] : ''; 
$manipselect19 = (isset($_POST['manipselect19'])) ? $_POST['manipselect19'] : ''; 
$manipselect20 = (isset($_POST['manipselect20'])) ? $_POST['manipselect20'] : ''; 
$manipcommentaire5 = (isset($_POST['manipcommentaire5'])) ? $_POST['manipcommentaire5'] : ''; 
$cathdate1 = (isset($_POST['cathdate1'])) ? $_POST['cathdate1'] : ''; 
$cathdate2 = (isset($_POST['cathdate2'])) ? $_POST['cathdate2'] : ''; 
$cathdate3 = (isset($_POST['cathdate3'])) ? $_POST['cathdate3'] : ''; 
$cathdate4 = (isset($_POST['cathdate4'])) ? $_POST['cathdate4'] : ''; 
$cathselect1 = (isset($_POST['cathselect1'])) ? $_POST['cathselect1'] : ''; 
$cathselect2 = (isset($_POST['cathselect2'])) ? $_POST['cathselect2'] : ''; 
$cathselect3 = (isset($_POST['cathselect3'])) ? $_POST['cathselect3'] : ''; 
$cathselect4 = (isset($_POST['cathselect4'])) ? $_POST['cathselect4'] : ''; 
$cathcommentaire1 = (isset($_POST['cathcommentaire1'])) ? $_POST['cathcommentaire1'] : ''; 
$cathselect5 = (isset($_POST['cathselect5'])) ? $_POST['cathselect5'] : ''; 
$cathselect6 = (isset($_POST['cathselect6'])) ? $_POST['cathselect6'] : ''; 
$cathselect7 = (isset($_POST['cathselect7'])) ? $_POST['cathselect7'] : ''; 
$cathselect8 = (isset($_POST['cathselect8'])) ? $_POST['cathselect8'] : ''; 
$cathcommentaire2 = (isset($_POST['cathcommentaire2'])) ? $_POST['cathcommentaire2'] : ''; 
$cathselect9 = (isset($_POST['cathselect9'])) ? $_POST['cathselect9'] : ''; 
$cathselect10 = (isset($_POST['cathselect10'])) ? $_POST['cathselect10'] : ''; 
$cathselect11 = (isset($_POST['cathselect11'])) ? $_POST['cathselect11'] : ''; 
$cathselect12 = (isset($_POST['cathselect12'])) ? $_POST['cathselect12'] : ''; 
$cathcommentaire3 = (isset($_POST['cathcommentaire3'])) ? $_POST['cathcommentaire3'] : ''; 
$cathselect13 = (isset($_POST['cathselect13'])) ? $_POST['cathselect13'] : ''; 
$cathselect14 = (isset($_POST['cathselect14'])) ? $_POST['cathselect14'] : ''; 
$cathselect15 = (isset($_POST['cathselect15'])) ? $_POST['cathselect15'] : ''; 
$cathselect16 = (isset($_POST['cathselect16'])) ? $_POST['cathselect16'] : ''; 
$cathcommentaire4 = (isset($_POST['cathcommentaire4'])) ? $_POST['cathcommentaire4'] : ''; 
$cathselect17 = (isset($_POST['cathselect17'])) ? $_POST['cathselect17'] : ''; 
$cathselect18 = (isset($_POST['cathselect18'])) ? $_POST['cathselect18'] : ''; 
$cathselect19 = (isset($_POST['cathselect19'])) ? $_POST['cathselect19'] : ''; 
$cathselect20 = (isset($_POST['cathselect20'])) ? $_POST['cathselect20'] : ''; 
$cathcommentaire5 = (isset($_POST['cathcommentaire5'])) ? $_POST['cathcommentaire5'] : ''; 
$cathselect21 = (isset($_POST['cathselect21'])) ? $_POST['cathselect21'] : ''; 
$cathselect22 = (isset($_POST['cathselect22'])) ? $_POST['cathselect22'] : ''; 
$cathselect23 = (isset($_POST['cathselect23'])) ? $_POST['cathselect23'] : ''; 
$cathselect24 = (isset($_POST['cathselect24'])) ? $_POST['cathselect24'] : ''; 
$cathcommentaire6 = (isset($_POST['cathcommentaire6'])) ? $_POST['cathcommentaire6'] : ''; 
$cathselect25 = (isset($_POST['cathselect25'])) ? $_POST['cathselect25'] : ''; 
$cathselect26 = (isset($_POST['cathselect26'])) ? $_POST['cathselect26'] : ''; 
$cathselect27 = (isset($_POST['cathselect27'])) ? $_POST['cathselect27'] : ''; 
$cathselect28 = (isset($_POST['cathselect28'])) ? $_POST['cathselect28'] : ''; 
$cathcommentaire7 = (isset($_POST['cathcommentaire7'])) ? $_POST['cathcommentaire7'] : ''; 
$cathselect29 = (isset($_POST['cathselect29'])) ? $_POST['cathselect29'] : ''; 
$cathselect211 = (isset($_POST['cathselect211'])) ? $_POST['cathselect211'] : ''; 
$cathselect212 = (isset($_POST['cathselect212'])) ? $_POST['cathselect212'] : ''; 
$cathselect213 = (isset($_POST['cathselect213'])) ? $_POST['cathselect213'] : ''; 
$cathcommentaire8 = (isset($_POST['cathcommentaire8'])) ? $_POST['cathcommentaire8'] : ''; 
$cathselect214 = (isset($_POST['cathselect214'])) ? $_POST['cathselect214'] : ''; 
$cathselect215 = (isset($_POST['cathselect215'])) ? $_POST['cathselect215'] : ''; 
$cathselect216 = (isset($_POST['cathselect216'])) ? $_POST['cathselect216'] : ''; 
$cathselect217 = (isset($_POST['cathselect217'])) ? $_POST['cathselect217'] : ''; 
$cathcommentaire9 = (isset($_POST['cathcommentaire9'])) ? $_POST['cathcommentaire9'] : ''; 
$cathselect218 = (isset($_POST['cathselect218'])) ? $_POST['cathselect218'] : ''; 
$cathselect219 = (isset($_POST['cathselect219'])) ? $_POST['cathselect219'] : ''; 
$cathselect221 = (isset($_POST['cathselect221'])) ? $_POST['cathselect221'] : ''; 
$cathselect222 = (isset($_POST['cathselect222'])) ? $_POST['cathselect222'] : ''; 
$cathcommentaire10 = (isset($_POST['cathcommentaire10'])) ? $_POST['cathcommentaire10'] : ''; 
$cathselect223 = (isset($_POST['cathselect223'])) ? $_POST['cathselect223'] : ''; 
$cathselect224 = (isset($_POST['cathselect224'])) ? $_POST['cathselect224'] : ''; 
$cathselect225 = (isset($_POST['cathselect225'])) ? $_POST['cathselect225'] : ''; 
$cathselect226 = (isset($_POST['cathselect226'])) ? $_POST['cathselect226'] : ''; 
$cathcommentaire11 = (isset($_POST['cathcommentaire11'])) ? $_POST['cathcommentaire11'] : ''; 
$connaissance1 = (isset($_POST['connaissance1'])) ? $_POST['connaissance1'] : ''; 
$cnsobservation1 = (isset($_POST['cnsobservation1'])) ? $_POST['cnsobservation1'] : ''; 
$connaissance2 = (isset($_POST['connaissance2'])) ? $_POST['connaissance2'] : ''; 
$cnsobservation2 = (isset($_POST['cnsobservation2'])) ? $_POST['cnsobservation2'] : ''; 
$connaissance3 = (isset($_POST['connaissance3'])) ? $_POST['connaissance3'] : ''; 
$connaissance4 = (isset($_POST['connaissance4'])) ? $_POST['connaissance4'] : ''; 
$connaissance5 = (isset($_POST['connaissance5'])) ? $_POST['connaissance5'] : ''; 
$connaissance6 = (isset($_POST['connaissance6'])) ? $_POST['connaissance6'] : ''; 
$perempdate1 = (isset($_POST['perempdate1'])) ? $_POST['perempdate1'] : ''; 
$perempdate2 = (isset($_POST['perempdate2'])) ? $_POST['perempdate2'] : ''; 
$perempdate3 = (isset($_POST['perempdate3'])) ? $_POST['perempdate3'] : ''; 
$perempdate4 = (isset($_POST['perempdate4'])) ? $_POST['perempdate4'] : ''; 
$connaissance7 = (isset($_POST['connaissance7'])) ? $_POST['connaissance7'] : ''; 
$perempdate5 = (isset($_POST['perempdate5'])) ? $_POST['perempdate5'] : ''; 
$connaissance8 = (isset($_POST['connaissance8'])) ? $_POST['connaissance8'] : ''; 
$cnsobservation3 = (isset($_POST['cnsobservation3'])) ? $_POST['cnsobservation3'] : ''; 
$connaissance9 = (isset($_POST['connaissance9'])) ? $_POST['connaissance9'] : ''; 
$cnsobservation4 = (isset($_POST['cnsobservation4'])) ? $_POST['cnsobservation4'] : ''; 
$connaissance10 = (isset($_POST['connaissance10'])) ? $_POST['connaissance10'] : ''; 
$cnsobservation5 = (isset($_POST['cnsobservation5'])) ? $_POST['cnsobservation5'] : ''; 
$connaissance11 = (isset($_POST['connaissance11'])) ? $_POST['connaissance11'] : ''; 
$cnsobservation6 = (isset($_POST['cnsobservation6'])) ? $_POST['cnsobservation6'] : ''; 
$connaissance12 = (isset($_POST['connaissance12'])) ? $_POST['connaissance12'] : ''; 
$cnsobservation7 = (isset($_POST['cnsobservation7'])) ? $_POST['cnsobservation7'] : ''; 
$connaissance13 = (isset($_POST['connaissance13'])) ? $_POST['connaissance13'] : ''; 
$cnsobservation8 = (isset($_POST['cnsobservation8'])) ? $_POST['cnsobservation8'] : ''; 
$connaissance14 = (isset($_POST['connaissance14'])) ? $_POST['connaissance14'] : ''; 
$cnsobservation9 = (isset($_POST['cnsobservation9'])) ? $_POST['cnsobservation9'] : ''; 
$asgdetail1 = (isset($_POST['asgdetail1'])) ? $_POST['asgdetail1'] : ''; 
$asgobservation1 = (isset($_POST['asgobservation1'])) ? $_POST['asgobservation1'] : ''; 
$asgdetail2 = (isset($_POST['asgdetail2'])) ? $_POST['asgdetail2'] : ''; 
$asgobservation2 = (isset($_POST['asgobservation2'])) ? $_POST['asgobservation2'] : ''; 
$asgdetail3 = (isset($_POST['asgdetail3'])) ? $_POST['asgdetail3'] : ''; 
$asgobservation3 = (isset($_POST['asgobservation3'])) ? $_POST['asgobservation3'] : ''; 
$asgdetail4 = (isset($_POST['asgdetail4'])) ? $_POST['asgdetail4'] : ''; 
$asgobservation4 = (isset($_POST['asgobservation4'])) ? $_POST['asgobservation4'] : ''; 
$asgfrequence1 = (isset($_POST['asgfrequence1'])) ? $_POST['asgfrequence1'] : ''; 
$asgfrequence2 = (isset($_POST['asgfrequence2'])) ? $_POST['asgfrequence2'] : ''; 
$asgconnaissance = (isset($_POST['asgconnaissance'])) ? $_POST['asgconnaissance'] : ''; 
$asgcommentaire = (isset($_POST['asgcommentaire'])) ? $_POST['asgcommentaire'] : ''; 
$asg2commentaire = (isset($_POST['asg2commentaire'])) ? $_POST['asg2commentaire'] : ''; 
$id = (isset($_POST['id'])) ? $_POST['id'] : ''; 
$Horaire5 = (isset($_POST['Horaire5'])) ? $_POST['Horaire5'] : '';
$Horaire6 = (isset($_POST['Horaire6'])) ? $_POST['Horaire6'] : '';
$Horaire7 = (isset($_POST['Horaire7'])) ? $_POST['Horaire7'] : '';
$Horaire8 = (isset($_POST['Horaire8'])) ? $_POST['Horaire8'] : '';
$Horaire9 = (isset($_POST['Horaire9'])) ? $_POST['Horaire9'] : '';
$Horaire10 = (isset($_POST['Horaire10'])) ? $_POST['Horaire10'] : '';
$Horaire11 = (isset($_POST['Horaire11'])) ? $_POST['Horaire11'] : '';
$Horaire12 = (isset($_POST['Horaire12'])) ? $_POST['Horaire12'] : '';
$Horaire13 = (isset($_POST['Horaire13'])) ? $_POST['Horaire13'] : '';
$Horaire14 = (isset($_POST['Horaire14'])) ? $_POST['Horaire14'] : '';
$Horaire15 = (isset($_POST['Horaire15'])) ? $_POST['Horaire15'] : '';
$Horaire16 = (isset($_POST['Horaire16'])) ? $_POST['Horaire16'] : '';
$Horaire17 = (isset($_POST['Horaire17'])) ? $_POST['Horaire17'] : '';
$Horaire18 = (isset($_POST['Horaire18'])) ? $_POST['Horaire18'] : '';
$Horaire19 = (isset($_POST['Horaire19'])) ? $_POST['Horaire19'] : '';
$Horaire20 = (isset($_POST['Horaire20'])) ? $_POST['Horaire20'] : '';
$Horaire21 = (isset($_POST['Horaire21'])) ? $_POST['Horaire21'] : '';
$Horaire22 = (isset($_POST['Horaire22'])) ? $_POST['Horaire22'] : '';
$Horaire23 = (isset($_POST['Horaire23'])) ? $_POST['Horaire23'] : '';
$Horaire24 = (isset($_POST['Horaire24'])) ? $_POST['Horaire24'] : '';
$Horaire25 = (isset($_POST['Horaire25'])) ? $_POST['Horaire25'] : '';
$Horaire26 = (isset($_POST['Horaire26'])) ? $_POST['Horaire26'] : '';
$Horaire27 = (isset($_POST['Horaire27'])) ? $_POST['Horaire27'] : '';
$Horaire28 = (isset($_POST['Horaire28'])) ? $_POST['Horaire28'] : '';
$Horaire29 = (isset($_POST['Horaire29'])) ? $_POST['Horaire29'] : '';
$Horaire30 = (isset($_POST['Horaire30'])) ? $_POST['Horaire30'] : '';
$Horaire31 = (isset($_POST['Horaire31'])) ? $_POST['Horaire31'] : '';
$Horaire32 = (isset($_POST['Horaire32'])) ? $_POST['Horaire32'] : '';
$Horaire33 = (isset($_POST['Horaire33'])) ? $_POST['Horaire33'] : '';
$Horaire34 = (isset($_POST['Horaire34'])) ? $_POST['Horaire34'] : '';
$Horaire35 = (isset($_POST['Horaire35'])) ? $_POST['Horaire35'] : '';
$Horaire36 = (isset($_POST['Horaire36'])) ? $_POST['Horaire36'] : '';
$Horaire37 = (isset($_POST['Horaire37'])) ? $_POST['Horaire37'] : '';
$Horaire38 = (isset($_POST['Horaire38'])) ? $_POST['Horaire38'] : '';
$Horaire39 = (isset($_POST['Horaire39'])) ? $_POST['Horaire39'] : '';
$Horaire40 = (isset($_POST['Horaire40'])) ? $_POST['Horaire40'] : '';
$Horaire41 = (isset($_POST['Horaire41'])) ? $_POST['Horaire41'] : '';
$Horaire42 = (isset($_POST['Horaire42'])) ? $_POST['Horaire42'] : '';
$Horaire43 = (isset($_POST['Horaire43'])) ? $_POST['Horaire43'] : '';
$Horaire44 = (isset($_POST['Horaire44'])) ? $_POST['Horaire44'] : '';
$Horaire45 = (isset($_POST['Horaire45'])) ? $_POST['Horaire45'] : '';
$Horaire46 = (isset($_POST['Horaire46'])) ? $_POST['Horaire46'] : '';
$Horaire47 = (isset($_POST['Horaire47'])) ? $_POST['Horaire47'] : '';
$Horaire48 = (isset($_POST['Horaire48'])) ? $_POST['Horaire48'] : '';
$Horaire49 = (isset($_POST['Horaire49'])) ? $_POST['Horaire49'] : '';
$Horaire50 = (isset($_POST['Horaire50'])) ? $_POST['Horaire50'] : '';
$Horaire51 = (isset($_POST['Horaire51'])) ? $_POST['Horaire51'] : '';
$Horaire52 = (isset($_POST['Horaire52'])) ? $_POST['Horaire52'] : '';
$Horaire53 = (isset($_POST['Horaire53'])) ? $_POST['Horaire53'] : '';
$Horaire54 = (isset($_POST['Horaire54'])) ? $_POST['Horaire54'] : '';
$Horaire55 = (isset($_POST['Horaire55'])) ? $_POST['Horaire55'] : '';
$Horaire56 = (isset($_POST['Horaire56'])) ? $_POST['Horaire56'] : '';
$Horaire57 = (isset($_POST['Horaire57'])) ? $_POST['Horaire57'] : '';
$Horaire58 = (isset($_POST['Horaire58'])) ? $_POST['Horaire58'] : '';
$Horaire59 = (isset($_POST['Horaire59'])) ? $_POST['Horaire59'] : '';
$Horaire60 = (isset($_POST['Horaire60'])) ? $_POST['Horaire60'] : '';
$Horaire61 = (isset($_POST['Horaire61'])) ? $_POST['Horaire61'] : '';
$Horaire62 = (isset($_POST['Horaire62'])) ? $_POST['Horaire62'] : '';
$Horaire63 = (isset($_POST['Horaire63'])) ? $_POST['Horaire63'] : '';
$Horaire64 = (isset($_POST['Horaire64'])) ? $_POST['Horaire64'] : '';
$Horaire65 = (isset($_POST['Horaire65'])) ? $_POST['Horaire65'] : '';
$Horaire66 = (isset($_POST['Horaire66'])) ? $_POST['Horaire66'] : '';
$Horaire67 = (isset($_POST['Horaire67'])) ? $_POST['Horaire67'] : '';
$Horaire68 = (isset($_POST['Horaire68'])) ? $_POST['Horaire68'] : '';
$Horaire69 = (isset($_POST['Horaire69'])) ? $_POST['Horaire69'] : '';
$Horaire70 = (isset($_POST['Horaire70'])) ? $_POST['Horaire70'] : '';
$Horaire71 = (isset($_POST['Horaire71'])) ? $_POST['Horaire71'] : '';
$Horaire72 = (isset($_POST['Horaire72'])) ? $_POST['Horaire72'] : '';
$Horaire73 = (isset($_POST['Horaire73'])) ? $_POST['Horaire73'] : '';
$Horaire74 = (isset($_POST['Horaire74'])) ? $_POST['Horaire74'] : '';
$Horaire75 = (isset($_POST['Horaire75'])) ? $_POST['Horaire75'] : '';
$Horaire76 = (isset($_POST['Horaire76'])) ? $_POST['Horaire76'] : '';
$Horaire77 = (isset($_POST['Horaire77'])) ? $_POST['Horaire77'] : '';
$Horaire78 = (isset($_POST['Horaire78'])) ? $_POST['Horaire78'] : '';
$Horaire79 = (isset($_POST['Horaire79'])) ? $_POST['Horaire79'] : '';
$Horaire80 = (isset($_POST['Horaire80'])) ? $_POST['Horaire80'] : '';
$Horaire81 = (isset($_POST['Horaire81'])) ? $_POST['Horaire81'] : '';
$Horaire82 = (isset($_POST['Horaire82'])) ? $_POST['Horaire82'] : '';
$Horaire83 = (isset($_POST['Horaire83'])) ? $_POST['Horaire83'] : '';
$Horaire84 = (isset($_POST['Horaire84'])) ? $_POST['Horaire84'] : '';
$Horaire_5 = (isset($_POST['Horaire_5'])) ? $_POST['Horaire_5'] : '';
$Horaire_6 = (isset($_POST['Horaire_6'])) ? $_POST['Horaire_6'] : '';
$Horaire_7 = (isset($_POST['Horaire_7'])) ? $_POST['Horaire_7'] : '';
$Horaire_8 = (isset($_POST['Horaire_8'])) ? $_POST['Horaire_8'] : '';
$Horaire_9 = (isset($_POST['Horaire_9'])) ? $_POST['Horaire_9'] : '';
$Horaire_10 = (isset($_POST['Horaire_10'])) ? $_POST['Horaire_10'] : '';
$Horaire_11 = (isset($_POST['Horaire_11'])) ? $_POST['Horaire_11'] : '';
$Horaire_12 = (isset($_POST['Horaire_12'])) ? $_POST['Horaire_12'] : '';
$Horaire_13 = (isset($_POST['Horaire_13'])) ? $_POST['Horaire_13'] : '';
$Horaire_14 = (isset($_POST['Horaire_14'])) ? $_POST['Horaire_14'] : '';
$Horaire_15 = (isset($_POST['Horaire_15'])) ? $_POST['Horaire_15'] : '';
$Horaire_16 = (isset($_POST['Horaire_16'])) ? $_POST['Horaire_16'] : '';
$Horaire_17 = (isset($_POST['Horaire_17'])) ? $_POST['Horaire_17'] : '';
$Horaire_18 = (isset($_POST['Horaire_18'])) ? $_POST['Horaire_18'] : '';
$Horaire_19 = (isset($_POST['Horaire_19'])) ? $_POST['Horaire_19'] : '';
$Horaire_20 = (isset($_POST['Horaire_20'])) ? $_POST['Horaire_20'] : '';
$Horaire_21 = (isset($_POST['Horaire_21'])) ? $_POST['Horaire_21'] : '';
$Horaire_22 = (isset($_POST['Horaire_22'])) ? $_POST['Horaire_22'] : '';
$Horaire_23 = (isset($_POST['Horaire_23'])) ? $_POST['Horaire_23'] : '';
$Horaire_24 = (isset($_POST['Horaire_24'])) ? $_POST['Horaire_24'] : '';
$Horaire_25 = (isset($_POST['Horaire_25'])) ? $_POST['Horaire_25'] : '';
$Horaire_26 = (isset($_POST['Horaire_26'])) ? $_POST['Horaire_26'] : '';
$Horaire_27 = (isset($_POST['Horaire_27'])) ? $_POST['Horaire_27'] : '';
$Horaire_28 = (isset($_POST['Horaire_28'])) ? $_POST['Horaire_28'] : '';
$Horaire_29 = (isset($_POST['Horaire_29'])) ? $_POST['Horaire_29'] : '';
$Horaire_30 = (isset($_POST['Horaire_30'])) ? $_POST['Horaire_30'] : '';
$Horaire_31 = (isset($_POST['Horaire_31'])) ? $_POST['Horaire_31'] : '';
$Horaire_32 = (isset($_POST['Horaire_32'])) ? $_POST['Horaire_32'] : '';
$Horaire_33 = (isset($_POST['Horaire_33'])) ? $_POST['Horaire_33'] : '';
$Horaire_34 = (isset($_POST['Horaire_34'])) ? $_POST['Horaire_34'] : '';
$Horaire_35 = (isset($_POST['Horaire_35'])) ? $_POST['Horaire_35'] : '';
$Horaire_36 = (isset($_POST['Horaire_36'])) ? $_POST['Horaire_36'] : '';
$Horaire_37 = (isset($_POST['Horaire_37'])) ? $_POST['Horaire_37'] : '';
$Horaire_38 = (isset($_POST['Horaire_38'])) ? $_POST['Horaire_38'] : '';
$Horaire_39 = (isset($_POST['Horaire_39'])) ? $_POST['Horaire_39'] : '';
$Horaire_40 = (isset($_POST['Horaire_40'])) ? $_POST['Horaire_40'] : '';
$Horaire_41 = (isset($_POST['Horaire_41'])) ? $_POST['Horaire_41'] : '';
$Horaire_42 = (isset($_POST['Horaire_42'])) ? $_POST['Horaire_42'] : '';
$Horaire_43 = (isset($_POST['Horaire_43'])) ? $_POST['Horaire_43'] : '';
$Horaire_44 = (isset($_POST['Horaire_44'])) ? $_POST['Horaire_44'] : '';
$Horaire_45 = (isset($_POST['Horaire_45'])) ? $_POST['Horaire_45'] : '';
$Horaire_46 = (isset($_POST['Horaire_46'])) ? $_POST['Horaire_46'] : '';
$Horaire_47 = (isset($_POST['Horaire_47'])) ? $_POST['Horaire_47'] : '';
$Horaire_48 = (isset($_POST['Horaire_48'])) ? $_POST['Horaire_48'] : '';
$Horaire_49 = (isset($_POST['Horaire_49'])) ? $_POST['Horaire_49'] : '';
$Horaire_50 = (isset($_POST['Horaire_50'])) ? $_POST['Horaire_50'] : '';
$Horaire_51 = (isset($_POST['Horaire_51'])) ? $_POST['Horaire_51'] : '';
$Horaire_52 = (isset($_POST['Horaire_52'])) ? $_POST['Horaire_52'] : '';
$Horaire_53 = (isset($_POST['Horaire_53'])) ? $_POST['Horaire_53'] : '';
$Horaire_54 = (isset($_POST['Horaire_54'])) ? $_POST['Horaire_54'] : '';
$Horaire_55 = (isset($_POST['Horaire_55'])) ? $_POST['Horaire_55'] : '';
$Horaire_56 = (isset($_POST['Horaire_56'])) ? $_POST['Horaire_56'] : '';
$Horaire_57 = (isset($_POST['Horaire_57'])) ? $_POST['Horaire_57'] : '';
$Horaire_58 = (isset($_POST['Horaire_58'])) ? $_POST['Horaire_58'] : '';
$Horaire_59 = (isset($_POST['Horaire_59'])) ? $_POST['Horaire_59'] : '';
$Horaire_60 = (isset($_POST['Horaire_60'])) ? $_POST['Horaire_60'] : '';
$Horaire_61 = (isset($_POST['Horaire_61'])) ? $_POST['Horaire_61'] : '';
$Horaire_62 = (isset($_POST['Horaire_62'])) ? $_POST['Horaire_62'] : '';
$Horaire_63 = (isset($_POST['Horaire_63'])) ? $_POST['Horaire_63'] : '';
$Horaire_64 = (isset($_POST['Horaire_64'])) ? $_POST['Horaire_64'] : '';
$Horaire_65 = (isset($_POST['Horaire_65'])) ? $_POST['Horaire_65'] : '';
$Horaire_66 = (isset($_POST['Horaire_66'])) ? $_POST['Horaire_66'] : '';
$Horaire_67 = (isset($_POST['Horaire_67'])) ? $_POST['Horaire_67'] : '';
$Horaire_68 = (isset($_POST['Horaire_68'])) ? $_POST['Horaire_68'] : '';
$Horaire_69 = (isset($_POST['Horaire_69'])) ? $_POST['Horaire_69'] : '';
$Horaire_70 = (isset($_POST['Horaire_70'])) ? $_POST['Horaire_70'] : '';
$Horaire_71 = (isset($_POST['Horaire_71'])) ? $_POST['Horaire_71'] : '';
$Horaire_72 = (isset($_POST['Horaire_72'])) ? $_POST['Horaire_72'] : '';
$Horaire_73 = (isset($_POST['Horaire_73'])) ? $_POST['Horaire_73'] : '';
$Horaire_74 = (isset($_POST['Horaire_74'])) ? $_POST['Horaire_74'] : '';
$Horaire_75 = (isset($_POST['Horaire_75'])) ? $_POST['Horaire_75'] : '';
$Horaire_76 = (isset($_POST['Horaire_76'])) ? $_POST['Horaire_76'] : '';
$Horaire_77 = (isset($_POST['Horaire_77'])) ? $_POST['Horaire_77'] : '';
$Horaire_78 = (isset($_POST['Horaire_78'])) ? $_POST['Horaire_78'] : '';
$Horaire_79 = (isset($_POST['Horaire_79'])) ? $_POST['Horaire_79'] : '';
$Horaire_80 = (isset($_POST['Horaire_80'])) ? $_POST['Horaire_80'] : '';
$Horaire_81 = (isset($_POST['Horaire_81'])) ? $_POST['Horaire_81'] : '';
$Horaire_82 = (isset($_POST['Horaire_82'])) ? $_POST['Horaire_82'] : '';
$Horaire_83 = (isset($_POST['Horaire_83'])) ? $_POST['Horaire_83'] : '';
$Horaire_84 = (isset($_POST['Horaire_84'])) ? $_POST['Horaire_84'] : '';
$Debit5 = (isset($_POST['Debit5'])) ? $_POST['Debit5'] : '';
$Debit6 = (isset($_POST['Debit6'])) ? $_POST['Debit6'] : '';
$Debit7 = (isset($_POST['Debit7'])) ? $_POST['Debit7'] : '';
$Debit8 = (isset($_POST['Debit8'])) ? $_POST['Debit8'] : '';
$Debit9 = (isset($_POST['Debit9'])) ? $_POST['Debit9'] : '';
$Debit10 = (isset($_POST['Debit10'])) ? $_POST['Debit10'] : '';
$Debit11 = (isset($_POST['Debit11'])) ? $_POST['Debit11'] : '';
$Debit12 = (isset($_POST['Debit12'])) ? $_POST['Debit12'] : '';
$Debit13 = (isset($_POST['Debit13'])) ? $_POST['Debit13'] : '';
$Debit14 = (isset($_POST['Debit14'])) ? $_POST['Debit14'] : '';
$Debit15 = (isset($_POST['Debit15'])) ? $_POST['Debit15'] : '';
$Debit16 = (isset($_POST['Debit16'])) ? $_POST['Debit16'] : '';
$Debit17 = (isset($_POST['Debit17'])) ? $_POST['Debit17'] : '';
$Debit18 = (isset($_POST['Debit18'])) ? $_POST['Debit18'] : '';
$Debit19 = (isset($_POST['Debit19'])) ? $_POST['Debit19'] : '';
$Debit20 = (isset($_POST['Debit20'])) ? $_POST['Debit20'] : '';
$Debit21 = (isset($_POST['Debit21'])) ? $_POST['Debit21'] : '';
$Debit22 = (isset($_POST['Debit22'])) ? $_POST['Debit22'] : '';
$Debit23 = (isset($_POST['Debit23'])) ? $_POST['Debit23'] : '';
$Debit24 = (isset($_POST['Debit24'])) ? $_POST['Debit24'] : '';
$Debit25 = (isset($_POST['Debit25'])) ? $_POST['Debit25'] : '';
$Debit26 = (isset($_POST['Debit26'])) ? $_POST['Debit26'] : '';
$Debit27 = (isset($_POST['Debit27'])) ? $_POST['Debit27'] : '';
$Debit28 = (isset($_POST['Debit28'])) ? $_POST['Debit28'] : '';
$Debit29 = (isset($_POST['Debit29'])) ? $_POST['Debit29'] : '';
$Debit30 = (isset($_POST['Debit30'])) ? $_POST['Debit30'] : '';
$Debit31 = (isset($_POST['Debit31'])) ? $_POST['Debit31'] : '';
$Debit32 = (isset($_POST['Debit32'])) ? $_POST['Debit32'] : '';
$Debit33 = (isset($_POST['Debit33'])) ? $_POST['Debit33'] : '';
$Debit34 = (isset($_POST['Debit34'])) ? $_POST['Debit34'] : '';
$Debit35 = (isset($_POST['Debit35'])) ? $_POST['Debit35'] : '';
$Debit36 = (isset($_POST['Debit36'])) ? $_POST['Debit36'] : '';
$Debit37 = (isset($_POST['Debit37'])) ? $_POST['Debit37'] : '';
$Debit38 = (isset($_POST['Debit38'])) ? $_POST['Debit38'] : '';
$Debit39 = (isset($_POST['Debit39'])) ? $_POST['Debit39'] : '';
$Debit40 = (isset($_POST['Debit40'])) ? $_POST['Debit40'] : '';
$Debit41 = (isset($_POST['Debit41'])) ? $_POST['Debit41'] : '';
$Debit42 = (isset($_POST['Debit42'])) ? $_POST['Debit42'] : '';
$Debit43 = (isset($_POST['Debit43'])) ? $_POST['Debit43'] : '';
$Debit44 = (isset($_POST['Debit44'])) ? $_POST['Debit44'] : '';
$Debit_5 = (isset($_POST['Debit_5'])) ? $_POST['Debit_5'] : '';
$Debit_6 = (isset($_POST['Debit_6'])) ? $_POST['Debit_6'] : '';
$Debit_7 = (isset($_POST['Debit_7'])) ? $_POST['Debit_7'] : '';
$Debit_8 = (isset($_POST['Debit_8'])) ? $_POST['Debit_8'] : '';
$Debit_9 = (isset($_POST['Debit_9'])) ? $_POST['Debit_9'] : '';
$Debit_10 = (isset($_POST['Debit_10'])) ? $_POST['Debit_10'] : '';
$Debit_11 = (isset($_POST['Debit_11'])) ? $_POST['Debit_11'] : '';
$Debit_12 = (isset($_POST['Debit_12'])) ? $_POST['Debit_12'] : '';
$Debit_13 = (isset($_POST['Debit_13'])) ? $_POST['Debit_13'] : '';
$Debit_14 = (isset($_POST['Debit_14'])) ? $_POST['Debit_14'] : '';
$Debit_15 = (isset($_POST['Debit_15'])) ? $_POST['Debit_15'] : '';
$Debit_16 = (isset($_POST['Debit_16'])) ? $_POST['Debit_16'] : '';
$Debit_17 = (isset($_POST['Debit_17'])) ? $_POST['Debit_17'] : '';
$Debit_18 = (isset($_POST['Debit_18'])) ? $_POST['Debit_18'] : '';
$Debit_19 = (isset($_POST['Debit_19'])) ? $_POST['Debit_19'] : '';
$Debit_20 = (isset($_POST['Debit_20'])) ? $_POST['Debit_20'] : '';
$Debit_21 = (isset($_POST['Debit_21'])) ? $_POST['Debit_21'] : '';
$Debit_22 = (isset($_POST['Debit_22'])) ? $_POST['Debit_22'] : '';
$Debit_23 = (isset($_POST['Debit_23'])) ? $_POST['Debit_23'] : '';
$Debit_24 = (isset($_POST['Debit_24'])) ? $_POST['Debit_24'] : '';
$Debit_25 = (isset($_POST['Debit_25'])) ? $_POST['Debit_25'] : '';
$Debit_26 = (isset($_POST['Debit_26'])) ? $_POST['Debit_26'] : '';
$Debit_27 = (isset($_POST['Debit_27'])) ? $_POST['Debit_27'] : '';
$Debit_28 = (isset($_POST['Debit_28'])) ? $_POST['Debit_28'] : '';
$Debit_29 = (isset($_POST['Debit_29'])) ? $_POST['Debit_29'] : '';
$Debit_30 = (isset($_POST['Debit_30'])) ? $_POST['Debit_30'] : '';
$Debit_31 = (isset($_POST['Debit_31'])) ? $_POST['Debit_31'] : '';
$Debit_32 = (isset($_POST['Debit_32'])) ? $_POST['Debit_32'] : '';
$Debit_33 = (isset($_POST['Debit_33'])) ? $_POST['Debit_33'] : '';
$Debit_34 = (isset($_POST['Debit_34'])) ? $_POST['Debit_34'] : '';
$Debit_35 = (isset($_POST['Debit_35'])) ? $_POST['Debit_35'] : '';
$Debit_36 = (isset($_POST['Debit_36'])) ? $_POST['Debit_36'] : '';
$Debit_37 = (isset($_POST['Debit_37'])) ? $_POST['Debit_37'] : '';
$Debit_38 = (isset($_POST['Debit_38'])) ? $_POST['Debit_38'] : '';
$Debit_39 = (isset($_POST['Debit_39'])) ? $_POST['Debit_39'] : '';
$Debit_40 = (isset($_POST['Debit_40'])) ? $_POST['Debit_40'] : '';
$Debit_41 = (isset($_POST['Debit_41'])) ? $_POST['Debit_41'] : '';
$Debit_42 = (isset($_POST['Debit_42'])) ? $_POST['Debit_42'] : '';
$Debit_43 = (isset($_POST['Debit_43'])) ? $_POST['Debit_43'] : '';
$Debit_44 = (isset($_POST['Debit_44'])) ? $_POST['Debit_44'] : '';
	



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