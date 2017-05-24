<?php 
	require "cnx.php";

	
	foreach (array_keys($_POST) as $value) {
    eval("\$" . $value . " = (isset(\$_POST[\"" . $value . "\"])) ? utf8_decode(htmlentities(\$_POST[\"" . $value . "\"], ENT_NOQUOTES,\"UTF-8\", true)) : \"\";");
	}
	for ($i = 5; $i < 85; $i++) {
	    eval("\$Horaire" . $i . " = (isset(\$_POST[\"Horaire" . $i . "\"])) ? utf8_decode(htmlentities(\$_POST[\"Horaire" . $i . "\"], ENT_NOQUOTES,\"UTF-8\", true)) : \"\";");
	}
	for ($i = 5; $i < 85; $i++) {
	    eval("\$Horaire_" . $i . " = (isset(\$_POST[\"Horaire_" . $i . "\"])) ? utf8_decode(htmlentities(\$_POST[\"Horaire_" . $i . "\"], ENT_NOQUOTES,\"UTF-8\", true)) : \"\";");
	}
	for ($i = 5; $i < 45; $i++) {
	    eval("\$Debit" . $i . " = (isset(\$_POST[\"Debit" . $i . "\"])) ? utf8_decode(htmlentities(\$_POST[\"Debit" . $i . "\"], ENT_NOQUOTES,\"UTF-8\", true)) : \"\";");
	}
	for ($i = 5; $i < 45; $i++) {
	    eval("\$Debit_" . $i . " = (isset(\$_POST[\"Debit_" . $i . "\"])) ? utf8_decode(htmlentities(\$_POST[\"Debit_" . $i . "\"], ENT_NOQUOTES,\"UTF-8\", true)) : \"\";");
	}

/*
	$bdd->exec("UPDATE  donnemedicale SET typediabete=\"".$typediabete."\", datediagnostic=\"".$datediagnostic."\", circonstancedecouverte=\"".$circonstancedecouverte."\", antecedentfamiliaux=\"".$antecedentfamiliaux."\", datepremieremisesousPompe=\"".$datepremieremisesousPompe."\", hba1c=\"".$hba1c."\", taille=\"".$taille."\", poidsactuel=\"".$poidsactuel."\", poidsforme=\"".$poidsforme."\", imc=\"".$imc."\", nombreglycemieparjour=\"".$nombreglycemieparjour."\", typelecteur=\"".$typelecteur."\", dateprescription=\"".$dateprescription."\", styloautopiqueur=\"".$styloautopiqueur."\", nombreinjectionjour=\"".$nombreinjectionjour."\", stylo=\"".$stylo."\", autrestylo=\"".$autrestylo."\", aiguillestylo=\"".$aiguillestylo."\", autreaiguille=\"".$autreaiguille."\", insulinelentematin=\"".$insulinelentematin."\", insulinerapidematin=\"".$insulinerapidematin."\", insulinelentemidi=\"".$insulinelentemidi."\", insulinerapidemidi=\"".$insulinerapidemidi."\", insulinelentesoir=\"".$insulinelentesoir."\", insulinerapidesoir=\"".$insulinerapidesoir."\", insulinelentediner=\"".$insulinelentediner."\", insulinerapidediner=\"".$insulinerapidediner."\", insulinelentecollation=\"".$insulinelentecollation."\", insulinerapidecollation=\"".$insulinerapidecollation."\", totalinsulinelente=\"".$totalinsulinelente."\", totalinsulinerapide=\"".$totalinsulinerapide."\", specialite1=\"".$specialite1."\", posologie1=\"".$posologie1."\", specialite2=\"".$specialite2."\", posologie2=\"".$posologie2."\", specialite3=\"".$specialite3."\", posologie3=\"".$posologie3."\", specialite4=\"".$specialite4."\", posologie4=\"".$posologie4."\", datebasal1=\"".$datebasal1."\", Horaire1=\"".$Horaire1."\", Debit1=\"".$Debit1."\", Horaire2=\"".$Horaire2."\", Debit2=\"".$Debit2."\", Horaire3=\"".$Horaire3."\", Debit3=\"".$Debit3."\", Horaire4=\"".$Horaire4."\", Debit4=\"".$Debit4."\", Horaire1N=\"".$Horaire1N."\", Debit1N=\"".$Debit1N."\", Horaire2N=\"".$Horaire2N."\", Debit2N=\"".$Debit2N."\", Horaire3N=\"".$Horaire3N."\", Debit3N=\"".$Debit3N."\", Horaire4N=\"".$Horaire4N."\", Debit4N=\"".$Debit4N."\", datebasal2=\"".$datebasal2."\", Horaire_1=\"".$Horaire_1."\", Debit_1=\"".$Debit_1."\", Horaire_2=\"".$Horaire_2."\", Debit_2=\"".$Debit_2."\", Horaire_3=\"".$Horaire_3."\", Debit_3=\"".$Debit_3."\", Horaire_4=\"".$Horaire_4."\", Debit_4=\"".$Debit_4."\", Horaire_N1=\"".$Horaire_N1."\", Debit_N1=\"".$Debit_N1."\", Horaire_N2=\"".$Horaire_N2."\", Debit_N2=\"".$Debit_N2."\", Horaire_N3=\"".$Horaire_N3."\", Debit_N3=\"".$Debit_N3."\", Horaire_N4=\"".$Horaire_N4."\", Debit_N4=\"".$Debit_N4."\", datebolus=\"".$datebolus."\", ValGlycemique1=\"".$ValGlycemique1."\", ValGlyMatin1=\"".$ValGlyMatin1."\", ValGlyMid1=\"".$ValGlyMid1."\", ValGlyCollation1=\"".$ValGlyCollation1."\", ValGlySoir1=\"".$ValGlySoir1."\", ValGlyAutre1=\"".$ValGlyAutre1."\", ValGlycemique2=\"".$ValGlycemique2."\", ValGlyMatin2=\"".$ValGlyMatin2."\", ValGlyMid2=\"".$ValGlyMid2."\", ValGlyCollation2=\"".$ValGlyCollation2."\", ValGlySoir2=\"".$ValGlySoir2."\", ValGlyAutre2=\"".$ValGlyAutre2."\", ValGlycemique3=\"".$ValGlycemique3."\", ValGlyMatin3=\"".$ValGlyMatin3."\", ValGlyMid3=\"".$ValGlyMid3."\", ValGlyCollation3=\"".$ValGlyCollation3."\", ValGlySoir3=\"".$ValGlySoir3."\", ValGlyAutre3=\"".$ValGlyAutre3."\", ValGlycemique4=\"".$ValGlycemique4."\", ValGlyMatin4=\"".$ValGlyMatin4."\", ValGlyMid4=\"".$ValGlyMid4."\", ValGlyCollation4=\"".$ValGlyCollation4."\", ValGlySoir4=\"".$ValGlySoir4."\", ValGlyAutre4=\"".$ValGlyAutre4."\", ValGlycemique5=\"".$ValGlycemique5."\", ValGlyMatin5=\"".$ValGlyMatin5."\", ValGlyMid5=\"".$ValGlyMid5."\", ValGlyCollation5=\"".$ValGlyCollation5."\", ValGlySoir5=\"".$ValGlySoir5."\", ValGlyAutre5=\"".$ValGlyAutre5."\", ValGlycemique6=\"".$ValGlycemique6."\", ValGlyMatin6=\"".$ValGlyMatin6."\", ValGlyMid6=\"".$ValGlyMid6."\", ValGlyCollation6=\"".$ValGlyCollation6."\", ValGlySoir6=\"".$ValGlySoir6."\", ValGlyAutre6=\"".$ValGlyAutre6."\", ValGlycemique7=\"".$ValGlycemique7."\", ValGlyMatin7=\"".$ValGlyMatin7."\", ValGlyMid7=\"".$ValGlyMid7."\", ValGlyCollation7=\"".$ValGlyCollation7."\", ValGlySoir7=\"".$ValGlySoir7."\", ValGlyAutre7=\"".$ValGlyAutre7."\", dateglycemie=\"".$dateglycemie."\", glycemie1=\"".$glycemie1."\", glycemie2=\"".$glycemie2."\", glycemie3=\"".$glycemie3."\", glycemie4=\"".$glycemie4."\", glycemie5=\"".$glycemie5."\", glycemie6=\"".$glycemie6."\", glycemie7=\"".$glycemie7."\", glycemie8=\"".$glycemie8."\", glycemie9=\"".$glycemie9."\", glycemie10=\"".$glycemie10."\", glycemie11=\"".$glycemie11."\", glycemie12=\"".$glycemie12."\", glycemie13=\"".$glycemie13."\", glycemie14=\"".$glycemie14."\", glycemie15=\"".$glycemie15."\", glycemie16=\"".$glycemie16."\", glycemie17=\"".$glycemie17."\", glycemie18=\"".$glycemie18."\", glycemie19=\"".$glycemie19."\", glycemie20=\"".$glycemie20."\", glycemie21=\"".$glycemie21."\", glycemie22=\"".$glycemie22."\", glycemie23=\"".$glycemie23."\", glycemie24=\"".$glycemie24."\", glycemie25=\"".$glycemie25."\", glycemie26=\"".$glycemie26."\", glycemie27=\"".$glycemie27."\", glycemie28=\"".$glycemie28."\", glycemie29=\"".$glycemie29."\", glycemie30=\"".$glycemie30."\", glycemie31=\"".$glycemie31."\", glycemie32=\"".$glycemie32."\", glycemie33=\"".$glycemie33."\", glycemie34=\"".$glycemie34."\", glycemie35=\"".$glycemie35."\", glycemie36=\"".$glycemie36."\", glycemie37=\"".$glycemie37."\", glycemie38=\"".$glycemie38."\", glycemie39=\"".$glycemie39."\", glycemie40=\"".$glycemie40."\", glycemie41=\"".$glycemie41."\", glycemie42=\"".$glycemie42."\", glycemie43=\"".$glycemie43."\", glycemie44=\"".$glycemie44."\", glycemie45=\"".$glycemie45."\", glycemie46=\"".$glycemie46."\", glycemie47=\"".$glycemie47."\", glycemie48=\"".$glycemie48."\", glycemie49=\"".$glycemie49."\", glycemie50=\"".$glycemie50."\", glycemie51=\"".$glycemie51."\", glycemie52=\"".$glycemie52."\", glycemie53=\"".$glycemie53."\", glycemie54=\"".$glycemie54."\", glycemie55=\"".$glycemie55."\", glycemie56=\"".$glycemie56."\", glycemie57=\"".$glycemie57."\", glycemie58=\"".$glycemie58."\", glycemie59=\"".$glycemie59."\", glycemie60=\"".$glycemie60."\", glycemie61=\"".$glycemie61."\", glycemie62=\"".$glycemie62."\", glycemie63=\"".$glycemie63."\", glycemie64=\"".$glycemie64."\", glycemie65=\"".$glycemie65."\", glycemie66=\"".$glycemie66."\", glycemie67=\"".$glycemie67."\", glycemie68=\"".$glycemie68."\", glycemie69=\"".$glycemie69."\", glycemie70=\"".$glycemie70."\", glycemie71=\"".$glycemie71."\", glycemie72=\"".$glycemie72."\", glycemie73=\"".$glycemie73."\", glycemie74=\"".$glycemie74."\", glycemie75=\"".$glycemie75."\", glycemie76=\"".$glycemie76."\", glycemie77=\"".$glycemie77."\", glycemie78=\"".$glycemie78."\", glycemie79=\"".$glycemie79."\", glycemie80=\"".$glycemie80."\", glycemie81=\"".$glycemie81."\", glycemie82=\"".$glycemie82."\", glycemie83=\"".$glycemie83."\", glycemie84=\"".$glycemie84."\", synthesecommentaire=\"".$synthesecommentaire."\", objectifglycemiquepreprandial=\"".$objectifglycemiquepreprandial."\", objectifglycemiquepostprandial=\"".$objectifglycemiquepostprandial."\", ValDatesHemGlyc1=\"".$ValDatesHemGlyc1."\", ValDatesHemGlyc2=\"".$ValDatesHemGlyc2."\", ValDatesHemGlyc3=\"".$ValDatesHemGlyc3."\", ValDatesHemGlyc4=\"".$ValDatesHemGlyc4."\", ValDatesHemGlyc5=\"".$ValDatesHemGlyc5."\", ValDatesHemGlyc6=\"".$ValDatesHemGlyc6."\", ValDatesHemGlyc7=\"".$ValDatesHemGlyc7."\", ValDatesHemGlyc8=\"".$ValDatesHemGlyc8."\", ValDatesHemGlyc9=\"".$ValDatesHemGlyc9."\", ValHbA1cHemGlyc1=\"".$ValHbA1cHemGlyc1."\", ValHbA1cHemGlyc2=\"".$ValHbA1cHemGlyc2."\", ValHbA1cHemGlyc3=\"".$ValHbA1cHemGlyc3."\", ValHbA1cHemGlyc4=\"".$ValHbA1cHemGlyc4."\", ValHbA1cHemGlyc5=\"".$ValHbA1cHemGlyc5."\", ValHbA1cHemGlyc6=\"".$ValHbA1cHemGlyc6."\", ValHbA1cHemGlyc7=\"".$ValHbA1cHemGlyc7."\", ValHbA1cHemGlyc8=\"".$ValHbA1cHemGlyc8."\", ValHbA1cHemGlyc9=\"".$ValHbA1cHemGlyc9."\" WHERE idPrescripteur=\"".$idPrescripteur."\" AND idPatient=\"".$idPatient."\"") or die(print_r($bdd->errorInfo()));
	echo "succes";
	*/
/*

	$bdd->exec("UPDATE  habitudevie SET activitephysique=\"".$activitephysique."\", profession=\"".$profession."\", situationfamiliale=\"".$situationfamiliale."\", observation=\"".$observation."\", hygienealimentaire=\"".$hygienealimentaire."\", stabilitehoraires=\"".$stabilitehoraires."\", details=\"".$details."\", environnement=\"".$environnement."\", etatcutane=\"".$etatcutane."\", choixpoint=\"".$choixpoint."\", rougeur=\"".$rougeur."\"  WHERE idPrescripteur=\"".$idPrescripteur."\" AND idPatient=\"".$idPatient."\"") or die(print_r($bdd->errorInfo()));


	$bdd->exec("UPDATE  insulinotherapiefonctionnelle SET  petitdejeunerDe=\"".$petitdejeunerDe."\", petitdejeunerA=\"".$petitdejeunerA."\", petitdejeunerRotation=\"".$petitdejeunerRotation."\", petitdejeunerObjectif=\"".$petitdejeunerObjectif."\", petitdejeunerSensibilite=\"".$petitdejeunerSensibilite."\", dejeunerDe=\"".$dejeunerDe."\", dejeunerA=\"".$dejeunerA."\", dejeunerRotation=\"".$dejeunerRotation."\", dejeunerObjectif=\"".$dejeunerObjectif."\", dejeunerSensibilite=\"".$dejeunerSensibilite."\", gouterDe=\"".$gouterDe."\", gouterA=\"".$gouterA."\", gouterRotation=\"".$gouterRotation."\", gouterObjectif=\"".$gouterObjectif."\", gouterSensibilite=\"".$gouterSensibilite."\", dinerDe=\"".$dinerDe."\", dinerA=\"".$dinerA."\", dinerRotation=\"".$dinerRotation."\", dinerObjectif=\"".$dinerObjectif."\", dinerSensibilite=\"".$dinerSensibilite."\", collationDe=\"".$collationDe."\", collationA=\"".$collationA."\", collationRotation=\"".$collationRotation."\", collationObjectif=\"".$collationObjectif."\", collationSensibilite=\"".$collationSensibilite."\"  WHERE idPrescripteur=\"".$idPrescripteur."\" AND idPatient=\"".$idPatient."\"") or die(print_r($bdd->errorInfo()));
	echo "fjdklfjdkfdfd";

	$bdd->exec("UPDATE  habitudealimentaire SET  regime=\"".$regime."\", observation2=\"".$observation2."\", survenue=\"".$survenue."\", atcd=\"".$atcd."\", traitement=\"".$traitement."\", date1=\"".$date1."\", date2=\"".$date2."\", date3=\"".$date3."\", date4=\"".$date4."\", date5=\"".$date5."\", date6=\"".$date6."\", date7=\"".$date7."\", date8=\"".$date8."\", date9=\"".$date9."\", taille1=\"".$taille1."\", taille2=\"".$taille2."\", taille3=\"".$taille3."\", taille4=\"".$taille4."\", taille5=\"".$taille5."\", taille6=\"".$taille6."\", taille7=\"".$taille7."\", taille8=\"".$taille8."\", taille9=\"".$taille9."\", poids1=\"".$poids1."\", poids2=\"".$poids2."\", poids3=\"".$poids3."\", poids4=\"".$poids4."\", poids5=\"".$poids5."\", poids6=\"".$poids6."\", poids7=\"".$poids7."\", poids8=\"".$poids8."\", poids9=\"".$poids9."\", imc1=\"".$imc1."\", imc2=\"".$imc2."\", imc3=\"".$imc3."\", imc4=\"".$imc4."\", imc5=\"".$imc5."\", imc6=\"".$imc6."\", imc7=\"".$imc7."\", imc8=\"".$imc8."\", imc9=\"".$imc9."\" WHERE idPrescripteur=\"".$idPrescripteur."\" AND idPatient=\"".$idPatient."\"") or die(print_r($bdd->errorInfo()));

	
		$bdd->prepare("UPDATE  manipulations SET date1=?, date2=?, date3=?, date4=?,
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



		$bdd->execute(array( $manipdate1, $manipdate2, $manipdate3, $manipdate4, $manipselect1, $manipselect2, $manipselect3, $manipselect4, $manipcommentaire1, $manipselect5, $manipselect6, $manipselect7, $manipselect8, $manipcommentaire2, $manipselect9, $manipselect10, $manipselect11, $manipselect12, $manipcommentaire3, $manipselect13, $manipselect14, $manipselect15, $manipselect16, $manipcommentaire4, $manipselect17, $manipselect18, $manipselect19, $manipselect20, $manipcommentaire5, $idPrescripteur, $idPatient)) or die(print_r($bdd->errorInfo()));

	$bdd->prepare("UPDATE  poseducatheter SET date1=?, date2=?, date3=?, date4=?,
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
	
	$bdd->excecute(array($cathdate1, $cathdate2, $cathdate3, $cathdate4, $cathselect1, $cathselect2, $cathselect3, $cathselect4, $cathcommentaire1, $cathselect5, $cathselect6, $cathselect7, $cathselect8, $cathcommentaire2, $cathselect9, $cathselect10, $cathselect11, $cathselect12, $cathcommentaire3, $cathselect13, $cathselect14, $cathselect15, $cathselect16, $cathcommentaire4, $cathselect17, $cathselect18, $cathselect19, $cathselect20, $cathcommentaire5, $cathselect21, $cathselect22, $cathselect23, $cathselect24, $cathcommentaire6, $cathselect25, $cathselect26, $cathselect27, $cathselect28, $cathcommentaire7, $cathselect29, $cathselect211, $cathselect212, $cathselect213, $cathcommentaire8, $cathselect214, $cathselect215, $cathselect216, $cathselect217, $cathcommentaire9, $cathselect218, $cathselect219, $cathselect221, $cathselect222, $cathcommentaire10, $cathselect223, $cathselect224, $cathselect225, $cathselect226, $cathcommentaire11, $idPrescripteur, $idPatient))  or die(print_r($bdd->errorInfo()));

$bdd->prepare("UPDATE  asg1 SET asgdetail1=?,  asgdetail2=?,  asgdetail3=?,  asgdetail4=?,  asgobservation1=?,  asgobservation2=?,  asgobservation3=?,  asgobservation4=?  WHERE idPrescripteur=? AND idPatient=?");


	$bdd->execute($asgdetail1, $asgdetail2, $asgdetail3, $asgdetail3, $asgobservation1, $asgobservation2, $asgobservation3, $asgobservation4, $idPatient, $idPrescripteur) or die(print_r($bdd->errorInfo()));

	$bdd->prepare("UPDATE  asg2 SET asgfrequence1=?,  asgfrequence2=?,  asgconnaissance=?,  asgcommentaire=? WHERE idPrescripteur=? AND idPatient=?");
	

	$bdd->execute($asgfrequence1, $asgfrequence2, $asgconnaissance, $asgcommentaire, $idPrescripteur, $idPatient) or die(print_r($bdd->errorInfo())); 

	$bdd->prepare("UPDATE  connaissances SET reponse1=?,  reponse2=?,  reponse3=?,  reponse4=?,  reponse5=?,  reponse6=?,  reponse7=?,  reponse8=?,  reponse9=?,  reponse10=?,  reponse11=?,  reponse12=?,  reponse13=?,  reponse14=?, 
				observation1=?,  observation2=?,  observation3=?,  observation4=?,  observation5=?,  observation6=?,  observation7=?,  observation8=?,  observation9=?, 
				date1=?,  date2=?,  date3=?,  date4=?,  date5=? WHERE idPrescripteur=? AND idPatient=?");

	$bdd->execute($connaissance1,$connaissance2,$connaissance3,$connaissance4,$connaissance5,$connaissance6,$connaissance7,$connaissance8,$connaissance9,$connaissance10,$connaissance11,$connaissance12,$connaissance13,$connaissance14,$cnsobservation1,$cnsobservation2,$cnsobservation3,$cnsobservation4,$cnsobservation5,$cnsobservation6,$cnsobservation7,$cnsobservation8,$cnsobservation9,$perempdate1,$perempdate2,$perempdate3,$perempdate4,$perempdate5, $idPrescripteur, $idPatient) or die(print_r($bdd->errorInfo()));


	$bdd->prepare("UPDATE  manipulationdelapompe SET date1=?,  date2=?,  date3=?,  date4=?, 
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

	$bdd->excecute($pmpdate1, $pmpdate2, $pmpdate3, $pmpdate4, $pmpselect1, $pmpselect2, $pmpselect3, $pmpselect4, $pmpcommentaire1, $pmpselect5, $pmpselect6, $pmpselect7, $pmpselect8, $pmpcommentaire2, $pmpselect9, $pmpselect10, $pmpselect11, $pmpselect12, $pmpcommentaire3, $pmpselect13, $pmpselect14, $pmpselect15, $pmpselect16, $pmpcommentaire4, $pmpselect17, $pmpselect18, $pmpselect19, $pmpselect20, $pmpcommentaire5, $pmpselect21, $pmpselect22, $pmpselect23, $pmpselect24, $pmpcommentaire6, $pmpselect25, $pmpselect26, $pmpselect27, $pmpselect28, $pmpcommentaire7, $pmpselect29, $pmpselect291, $pmpselect292, $pmpselect293, $pmpcommentaire8, $pmpselect294, $pmpselect295, $pmpselect296, $pmpselect297, $pmpcommentaire9, $pmpautre, $idPrescripteur, $idPatient );

	$bdd->preapre("UPDATE  alarmesetprecautions SET alarmedate1=?,   alarmedate2=?,   alarmedate3=?,   alarmedate4=?,  
    		alarmeetat1=?,   alarmeetat2=?,   alarmeetat3=?,   alarmeetat4=?,   commentaire1=?,   
    		alarmeetat5=?,   alarmeetat6=?,   alarmeetat7=?,   alarmeetat8=?,   commentaire2=?,   
    		alarmeetat9=?,   alarmeetat10=?,   alarmeetat11=?,   alarmeetat12=?,   commentaire3=?,   
    		alarmeetat13=?,   alarmeetat14=?,   alarmeetat15=?,   alarmeetat16=?,   commentaire4=?,   
    		alarmeetat17=?,   alarmeetat18=?,   alarmeetat19=?,   alarmeetat20=?,   commentaire5=?,   
    		alarmeetat21=?,   alarmeetat22=?,   alarmeetat23=?,   alarmeetat24=?,   commentaire6=?,   
    		alarmeetat25=?,   alarmeetat26=?,   alarmeetat27=?,   alarmeetat28=?,   commentaire7=?,   
    		autre=? WHERE  idPrescripteur=? AND idPatient=?");

	$bdd->execute(array($alarmedate1, $alarmedate2, $alarmedate3, $alarmedate4, $alarmeselect1, $alarmeselect2, $alarmeselect3, $alarmeselect4, $alarmecommentaire1, $alarmeselect5, $alarmeselect6, $alarmeselect7, $alarmeselect8, $alarmecommentaire2, $alarmeselect9, $alarmeselect10, $alarmeselect11, $alarmeselect12, $alarmecommentaire3, $alarmeselect13, $alarmeselect14, $alarmeselect15, $alarmeselect16, $alarmecommentaire4, $alarmeselect17, $alarmeselect18, $alarmeselect19, $alarmeselect20, $alarmecommentaire5, $alarmeselect21, $alarmeselect22, $alarmeselect23, $alarmeselect24, $alarmecommentaire6, $alarmeselect25, $alarmeselect26, $alarmeselect27, $alarmeselect28, $alarmecommentaire7, $alarmeautre, $idPrescripteur, $idPatient)) or die(print_r($bdd->errorInfo()));

	echo "Modification avec succes ! ";
*/
?>