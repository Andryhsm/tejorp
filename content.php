<?php
session_start();

$id_ = $_SESSION['id'];
$statut = $_SESSION['statut'];
$statut = utf8_encode($statut);

/**
 * HTML2PDF Library - example
 *
 * HTML => PDF convertor
 * distributed under the LGPL License
 *
 * @package   Html2pdf
 * @author    Laurent MINGUET <webmaster@html2pdf.fr>
 * @copyright 2016 Laurent MINGUET
 *
 * isset($_GET['vuehtml']) is not mandatory
 * it allow to display the result in the HTML format
 */
//Soloina le post lava be

foreach (array_keys($_POST) as $value) {
    eval("\$" . $value . " = (isset(\$_POST[\"" . $value . "\"])) ? htmlentities(\$_POST[\"" . $value . "\"], ENT_NOQUOTES,'UTF-8', true) : \"\";");
}
for ($i = 5; $i < 85; $i++) {
    eval("\$Horaire" . $i . " = (isset(\$_POST[\"Horaire" . $i . "\"])) ? htmlentities(\$_POST[\"Horaire" . $i . "\"], ENT_NOQUOTES,'UTF-8', true) : \"\";");
}
for ($i = 5; $i < 85; $i++) {
    eval("\$Horaire_" . $i . " = (isset(\$_POST[\"Horaire_" . $i . "\"])) ? htmlentities(\$_POST[\"Horaire_" . $i . "\"], ENT_NOQUOTES,'UTF-8', true) : \"\";");
}
for ($i = 5; $i < 45; $i++) {
    eval("\$Debit" . $i . " = (isset(\$_POST[\"Debit" . $i . "\"])) ? htmlentities(\$_POST[\"Debit" . $i . "\"], ENT_NOQUOTES,'UTF-8', true) : \"\";");
}
for ($i = 5; $i < 45; $i++) {
    eval("\$Debit_" . $i . " = (isset(\$_POST[\"Debit_" . $i . "\"])) ? htmlentities(\$_POST[\"Debit_" . $i . "\"], ENT_NOQUOTES,'UTF-8', true) : \"\";");
}

/* MODIFS STIAN DECLARATIONS DE VARIABLES */

ob_start();
?>

<div id='content'>
    <div>
    	<table style="border: none;">
    		<tr style="border: none;">
    			<td style="border: none;">
    				<img style="position: relative; margin-right: 250px; margin-left: 10px; width: 120px;" src="img/logo_diabete.jpg">
				</td>
    			<td  style="border: none;">
    				<img style="position: relative; margin-left: 245px; width: 120px;" src="img/basitide.png">
				</td>
    		</tr>
    	</table>
    </div>
   	<div class="dec"><br/><br/><div style="margin-left: 170px;"><h3>Installation de Pompe à insuline</h3></div><br/><br/><br/></div>
    <div class="dec">
        <h4><u>UTILISATEUR BASTIDE MEDICAL</u></h4>
        <p>
            <strong>Nom IDE Responsable :</strong> <?php echo $nomresp; ?>  <br/>   
            <strong>Prénom : </strong> <?php echo $prenomresp; ?>  <br/>
            <strong>Mobile : </strong> <?php echo $mobileresp; ?>  <br/>
            <strong>Coordonnées :</strong> <?php echo $coordonnee; ?> 

        <h4><u>RENSEIGNEMENTS PATIENT</u></h4>
        <strong>Nom :</strong> <?php echo $nompatient; ?>  <br/>
        <strong>Prénom :</strong><?php echo $prenompatient; ?><br/>
        <strong>Né(e) le : </strong><?php echo $datenaissance; ?> <br/>
        <strong>Age :</strong> <?php echo $agepatient; ?><br/>
        <strong>Tel : </strong> <?php echo $telpatient; ?><br/>
        <strong>Mobile :</strong><?php echo $mobilepatient; ?><br/>
        <strong>Mail :</strong><?php echo $emailpatient; ?><br/>
        <strong>Adresse :</strong><?php echo $adressepatient; ?><br/>
        <strong>Code postal :</strong><?php echo $codepostalpatient; ?><br/>    
        <strong>Ville :</strong><?php echo $villepatient; ?><br/>
        <h4><u>RENSEIGNEMENTS PRESCRIPTEUR</u></h4>

        <strong>Etablissement prescripteur:</strong> <?php echo $etablissementprescripteur; ?> <br/>
        <strong>Service :</strong> <?php echo $serviceep; ?> <br/><br/> 

        <?php if ($statut == "Médecin traitant") { ?>            
            <strong>Médecin traitant : </strong><?php echo $medecintraitant; ?><br/>
            <strong>Tel :</strong>  <?php echo $telmt; ?><br/>   
            <strong>Mobile :</strong>  <?php echo $mobilemt; ?><br/>      
            <strong>Ville :</strong><?php echo $villemt; ?><br/>
            <strong>Mail :</strong><?php echo $mailmt; ?><br/><br/>    
        <?php } elseif ($statut == "Diabétologue libéral") { ?>
            <strong> Diabétologue prescripteur :</strong> <?php echo $diabetologueliberal; ?>
            <strong>Tel :</strong>  <?php echo $teldl; ?><br/>   
            <strong>Mobile :</strong>  <?php echo $mobiledl; ?><br/>      
            <strong>Ville :</strong><?php echo $villedl; ?><br/>
            <strong>Mail :</strong><?php echo $maildl; ?><br/><br/>  
        <?php } elseif ($statut == "Diabétologue prescripteur") { ?>
            <strong> Diabétologue prescripteur : </strong><?php echo $diabetologueprescripteur; ?>
            <strong>Tel :</strong>  <?php echo $teldp; ?><br/>   
            <strong>Mobile :</strong>  <?php echo $mobiledp; ?><br/>      
            <strong>Ville :</strong><?php echo $villedp; ?><br/>
            <strong>Mail :</strong><?php echo $maildp; ?><br/><br/>  
        <?php } elseif ($statut == "Diététicienne") { ?>
            <strong> Diabétologue prescripteur : </strong><?php echo $dieteticienne; ?>
            <strong>Tel :</strong>  <?php echo $teld; ?><br/>   
            <strong>Mobile :</strong>  <?php echo $mobiled; ?><br/>      
            <strong>Ville :</strong><?php echo $villed; ?><br/>
            <strong>Mail :</strong><?php echo $maild; ?><br/><br/>  
        <?php } ?>


        <strong>Membre réseau :</strong> <?php echo $membrereseau; ?> <br/> 
        </p>
    </div>

    <div class="dec">
        <h4><u>CHOIX DU MATERIEL</u></h4>
        <p>   
            <strong>Pompe :</strong> <?php echo $Pompe; ?> <br/>
            <strong>Date d’installation :</strong> <?php echo $dateinstallation; ?> <br/><br/>

            <strong>Type de cathéter 1 :</strong> <?php echo $catheter; ?><br/>
            <strong>Modèle :</strong> <?php echo $modele; ?> <br/>
            <strong>Longueur de canule :</strong> <?php echo $longueurcanule; ?> mm    <br/>          
            <strong>Longueur de tubulure :</strong>   <?php echo $longueurtubulure; ?> cm
            <br><br>
            <strong>Type de cathéter 2 :</strong> <?php echo $catheter2; ?><br/>
            <strong>Modèle :</strong> <?php echo $modele2; ?> <br/>
            <strong>Longueur de canule :</strong> <?php echo $longueurcanule2; ?> mm  <br/>            
            <strong>Longueur de tubulure :</strong>   <?php echo $longueurtubulure2; ?> cm            
            <br><br>
            <strong>Inserteur :</strong> <?php echo $inserteur; ?><br/><br/>
            <strong>Réservoir :</strong> <?php echo $reservoir; ?> <br/>                      
            <strong>Système de portage de la Pompe : </strong> <?php echo $spp; ?>  <br/><br/> 

            <strong>Observations et commentaires :</strong> <?php echo $observation; ?>  
        </p>

        <h4><u>DONNEES MEDICALES</u></h4>
        <p>
            <strong>Type de diabète :</strong> <?php echo $typediabete; ?> <br/>
            <strong>Date de diagnostic :</strong> <?php echo $datediagnostic; ?> <br/>     
            <strong>Circonstances de découverte :</strong> <?php echo $circonstancedecouverte; ?>   <br/>   
            <strong>Antécédents familiaux :</strong> <?php echo $antecedentfamiliaux; ?>    <br/>  
            <strong>Date de première mise sous Pompe :</strong> <?php echo $datepremieremisesousPompe; ?> <br/>     
            <strong>HbA1C de référence avant la mise sous Pompe :</strong>   <?php echo $hba1c; ?> <br/>     
        </p><br/>
    </div>
    <table style="margin: 0px 30px 0px 50px;">
        <thead>
            <tr>
                <th style="width: 20% ; text-align: center;"><strong>Poids actuel (kg) </strong></th>
                <th style="width: 20% ; text-align: center;"><strong>Poids de forme (kg)</strong></th>
                <th style="width: 20% ; text-align: center;"><strong>Taille (cm)</strong></th>
                <th style="width: 20% ; text-align: center;"><strong>IMC</strong></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><span style="color: white;">a</span><?php echo $poidsactuel; ?></td>
                <td><?php echo $poidsforme; ?></td>
                <td><?php echo $taille; ?></td>
                <td><?php echo $imc; ?></td>
            </tr>
        </tbody>
    </table>
    <br/><br/><br/>
    <div class="dec">
        <h4><u>Auto surveillance glycémique :</u></h4>
        <p>
            <strong>Nombre de glycémies par jour :</strong> <?php echo $nombreglycemieparjour; ?> <br/>
            <strong>Type de lecteur :</strong> <?php echo $typelecteur; ?>           <strong>Date de prescription : </strong> <?php echo $dateprescription; ?><br/>      
            <strong>Stylo auto piqueur/lancette :</strong> <?php echo $styloautopiqueur; ?> <br/>     
      	</p>  
        <h4><u>Insulinothérapie :</u></h4>
        <p>
            <strong>Nombre d’injection par jour :</strong> <?php echo $nombreinjectionjour; ?>           <strong>Schéma multi injection :</strong><br/>
            <strong>Stylo :</strong> <?php echo $stylo; ?>      <strong>Autre : </strong> <?php echo $autrestylo; ?>         
            <strong>Aiguille pour stylo : </strong><?php echo $aiguillestylo; ?> <br/>
            <strong>Autre : </strong>  <?php echo $autreaiguille; ?> <br/><br/><br/>    
      	</p>s
    </div>
    <div class="dec">
        <table class="table " style="margin-left: 110px;">
            <thead>
                <tr>
                    <th style="width:100px ; text-align: center;"></th>
                    <th style="width:100px ; text-align: center;"><strong>Insuline lente (UI)</strong></th>
                    <th style="width:100px ; text-align: center;"><strong>Insuline rapide (UI)</strong></th>
                    <th style="width:100px ; text-align: center;"><strong>Quantité totale (UI)</strong></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Matin</td>
                    <td><?php echo $insulinelentematin; ?></td>
                    <td><?php echo $insulinerapidematin; ?></td>
                    <td><?php
                        $total_1 = $insulinelentematin + $insulinerapidematin;
                        echo $total_1;
                        ?></td>
                </tr>
                <tr>
                    <td>Midi</td>
                    <td><?php echo $insulinelentemidi; ?></td>
                    <td><?php echo $insulinerapidemidi; ?></td>
                    <td><?php
                        $total_2 = $insulinelentemidi + $insulinerapidemidi;
                        echo $total_2;
                        ?></td>
                </tr>
                <tr>
                    <td>Soir</td>
                    <td><?php echo $insulinelentesoir; ?></td>
                    <td><?php echo $insulinerapidesoir; ?></td>
                    <td><?php
                        $total_3 = $insulinelentesoir + $insulinerapidesoir;
                        echo $total_1;
                        ?></td>
                </tr>
                <tr>
                    <td>TOTAL</td>
                    <td><?php echo $totalinsulinelente; ?></td>
                    <td><?php echo $totalinsulinerapide; ?></td>
                    <td><?php
                        $total = $total_1 + $total_2 + $total_3;
                        echo $total;
                        ?></td>
                </tr>
            </tbody>
        </table><br/>

        <h4><u>Traitements complémentaires :</u></h4>
        <table class="table" style="margin-left: 70px;">
            <thead>
                <tr>
                    <th style="width: 35% ; text-align: center;"><strong>Spécialité</strong></th>
                    <th style="width: 35% ; text-align: center;"><strong>Posologie</strong></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><span style="color: white;">a</span><?php echo $specialite1; ?></td>
                    <td><?php echo $posologie1; ?></td>
                </tr>
                <tr>
                    <td><span style="color: white;">a</span><?php echo $specialite2; ?></td>
                    <td><?php echo $posologie2; ?></td>
                </tr>
                <tr>
                    <td><span style="color: white;">a</span><?php echo $specialite3; ?></td>
                    <td><?php echo $posologie3; ?></td>
                </tr>
                <tr>
                    <td><span style="color: white;">a</span><?php echo $specialite4; ?></td>
                    <td><?php echo $posologie4; ?></td>
                </tr>
            </tbody>
        </table><br/>
        <br/><br/>
    </div>
    <div class="dec">
        <table class="table" style="margin-right: 20px;">
            <tbody>
                <tr>
                    <td colspan=12 style="text-align: center;"><strong>Schémas basals date 1:</strong><?php echo $datebasal1; ?></td>
                </tr>
                <tr>
                    <td style="width:24%; text-align: center;" colspan=3><strong>Schéma 1</strong></td>
                    <td style="width:24%; text-align: center;" colspan=3><strong>Schéma 2</strong></td>
                    <td style="width:24%; text-align: center;" colspan=3><strong>Schéma 3</strong></td>
                    <td style="width:24%; text-align: center;" colspan=3><strong>Schéma 4</strong></td>
                </tr>
                <tr>
                    <td>De</td>
                    <td>A</td>
                    <td>Débit (UI)</td>
                    <td>De (UI)</td>
                    <td>A</td>
                    <td>Débit (UI)</td>
                    <td>De</td>
                    <td>A</td>
                    <td>Débit (UI)</td>
                    <td>De</td>
                    <td>A</td>
                    <td>Débit (UI)</td>
                </tr>
                <tr>
                    <td>00:00</td>
                    <td><?php echo $Horaire1; ?></td>
                    <td><?php echo $Debit1; ?></td>
                    <td>00:00</td>
                    <td><?php echo $Horaire2; ?></td>
                    <td><?php echo $Debit2; ?></td>
                    <td>00:00</td>
                    <td><?php echo $Horaire3; ?></td>
                    <td><?php echo $Debit3; ?></td>
                    <td>00:00</td>
                    <td><?php echo $Horaire4; ?></td>
                    <td><?php echo $Debit4; ?></td>
                </tr>
                <?php
                $inc = 5;
                $incD = 5;

                for ($i = 0; $i < 10; $i++) {


                     eval("  if(\$Horaire" . $inc . " != \"\"){
			                    echo   \"<tr>
			                              <td> \".\$Horaire" . $inc . ". \" </td>
			                              <td> \".\$Horaire" . ($inc + 1) . ". \" </td>
			                              <td> \".\$Debit" . ($incD) . " . \"</td>
			                              <td> \".\$Horaire" . ($inc + 2) . " . \"</td>
			                              <td> \".\$Horaire" . ($inc + 3) . " . \"</td>
			                              <td> \".\$Debit" . ($incD + 1) . " . \"</td>
			                              <td> \".\$Horaire" . ($inc + 4) . ". \" </td>
			                              <td> \".\$Horaire" . ($inc + 5) . " . \"</td>
			                              <td> \".\$Debit" . ($incD + 2) . " . \"</td>
			                              <td> \".\$Horaire" . ($inc + 6) . " . \"</td>
			                              <td> \".\$Horaire" . ($inc + 7) . ". \" </td>
			                              <td> \".\$Debit" . ($incD + 3) . " . \"</td>
			                          </tr>\";
			               }");
                    echo "\n\n";
                    $inc += 8;
                    $incD += 4;
                }
                ?>
                <tr>
                    <td><?php echo $Horaire1N; ?></td>
                    <td>23:59</td>
                    <td><?php echo $Debit1N; ?></td>
                    <td><?php echo $Horaire2N; ?></td>
                    <td>23:59</td>
                    <td><?php echo $Debit2N; ?></td>
                    <td><?php echo $Horaire3N; ?></td>
                    <td>23:59</td>
                    <td><?php echo $Debit3N; ?></td>
                    <td><?php echo $Horaire4N; ?></td>
                    <td>23:59</td>
                    <td><?php echo $Debit4N; ?></td>
                </tr>

            </tbody>
        </table 
        <br/>
        <h4>Histogrammes des débits suivant le Schémas basals date 1</h4>
            <?php
            	$image = 'img/image'.$id_.'bardate1.png';

            		if(file_exists($image))
             			echo '<img src="'.$image.'" style="width: 700px;" />'

             	;?>
        <br/><br/>
    </div>
    <div class="dec">
        <table class="table">
            <tbody>
                <tr>
                    <td colspan=12 style="text-align: center;"><strong>Schémas basals date 2:</strong><?php echo $datebasal2; ?></td>
                </tr>
                <tr>
                    <td style="width:24%; text-align: center;" colspan=3><strong>Schéma 1</strong></td>
                    <td style="width:24%; text-align: center;" colspan=3><strong>Schéma 2</strong></td>
                    <td style="width:24%; text-align: center;" colspan=3><strong>Schéma 3</strong></td>
                    <td style="width:24%; text-align: center;" colspan=3><strong>Schéma 4</strong></td>
                </tr>
                <tr>
                    <td>De</td>
                    <td>A</td>
                    <td>Débit</td>
                    <td>De</td>
                    <td>A</td>
                    <td>Débit</td>
                    <td>De</td>
                    <td>A</td>
                    <td>Débit</td>
                    <td>De</td>
                    <td>A</td>
                    <td>Débit</td>
                </tr>
                <tr>
                    <td>00:00</td>
                    <td><?php echo $Horaire_1; ?></td>
                    <td><?php echo $Debit_1; ?></td>
                    <td>00:00</td>
                    <td><?php echo $Horaire_2; ?></td>
                    <td><?php echo $Debit_2; ?></td>
                    <td>00:00</td>
                    <td><?php echo $Horaire_3; ?></td>
                    <td><?php echo $Debit_3; ?></td>
                    <td>00:00</td>
                    <td><?php echo $Horaire_4; ?></td>
                    <td><?php echo $Debit_4; ?></td>
                </tr>
                <?php
                $inc = 5;
                $incD = 5;

                for ($i = 0; $i < 10; $i++) {


                    eval("  if(\$Horaire_" . $inc . " != \"\"){
			                    echo   \"<tr>
			                              <td> \".\$Horaire_" . $inc . ". \" </td>
			                              <td> \".\$Horaire_" . ($inc + 1) . ". \" </td>
			                              <td> \".\$Debit_" . ($incD) . " . \"</td>
			                              <td> \".\$Horaire_" . ($inc + 2) . " . \"</td>
			                              <td> \".\$Horaire_" . ($inc + 3) . " . \"</td>
			                              <td> \".\$Debit_" . ($incD + 1) . " . \"</td>
			                              <td> \".\$Horaire_" . ($inc + 4) . ". \" </td>
			                              <td> \".\$Horaire_" . ($inc + 5) . " . \"</td>
			                              <td> \".\$Debit_" . ($incD + 2) . " . \"</td>
			                              <td> \".\$Horaire_" . ($inc + 6) . " . \"</td>
			                              <td> \".\$Horaire_" . ($inc + 7) . ". \" </td>
			                              <td> \".\$Debit_" . ($incD + 3) . " . \"</td>
			                          </tr>\";
			               }");
                    echo "\n\n";
                    $inc += 8;
                    $incD += 4;
                }
                ?>

                <tr>
                    <td><?php echo $Horaire_N1; ?></td>
                    <td>23:59</td>
                    <td><?php echo $Debit_N1; ?></td>
                    <td><?php echo $Horaire_N2; ?></td>
                    <td>23:59</td>
                    <td><?php echo $Debit_N2; ?></td>
                    <td><?php echo $Horaire_N3; ?></td>
                    <td>23:59</td>
                    <td><?php echo $Debit_N3; ?></td>
                    <td><?php echo $Horaire_N4; ?></td>
                    <td>23:59</td>
                    <td><?php echo $Debit_N4; ?></td>
                </tr>
            </tbody>
        </table
        <br/>

    <?php
            	$image = 'img/image'.$id_.'bardate2.png';

            		if(file_exists($image))
             			echo '<img src="'.$image.'" style="width: 700px;" />'

             	;?>
        <br/><br/>
    </div>

    <div class="dec">


        <table class="table">
            <thead>
                <tr>
                    <th colspan="6" style="text-align: center;">Schéma des bolus &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Date de MAJ: <?php echo $datebolus; ?> </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td style="width:16%; text-align: center;">Petit déjeuner (UI)</td>
                    <td style="width:16%; text-align: center;">Déjeuner (UI)</td>
                    <td style="width:16%; text-align: center;">Goûter (UI)</td>
                    <td style="width:16%; text-align: center;">Dîner (UI)</td>
                    <td style="width:16%; text-align: center;">Collation (UI)</td>
                    <td style="width:16%; text-align: center;">Autre (UI)</td>
                </tr>
                <tr>
                    <td><span style="color: white;">a</span><?php echo $ValGlycemique1; ?></td>
                    <td><?php echo $ValGlyMatin1; ?></td>
                    <td><?php echo $ValGlyMid1; ?></td>
                    <td><?php echo $ValGlyCollation1; ?></td>
                    <td><?php echo $ValGlySoir1; ?></td>
                    <td><?php echo $ValGlyAutre1; ?></td>
                </tr>
                <tr>
                    <td><span style="color: white;">a</span><?php echo $ValGlycemique2; ?></td>
                    <td><?php echo $ValGlyMatin2; ?></td>
                    <td><?php echo $ValGlyMid2; ?></td>
                    <td><?php echo $ValGlyCollation2; ?></td>
                    <td><?php echo $ValGlySoir2; ?></td>
                    <td><?php echo $ValGlyAutre2; ?></td>
                </tr>
                <tr>
                    <td><span style="color: white;">a</span><?php echo $ValGlycemique3; ?></td>
                    <td><?php echo $ValGlyMatin3; ?></td>
                    <td><?php echo $ValGlyMid3; ?></td>
                    <td><?php echo $ValGlyCollation3; ?></td>
                    <td><?php echo $ValGlySoir3; ?></td>
                    <td><?php echo $ValGlyAutre3; ?></td>
                </tr>
                <tr>
                    <td><span style="color: white;">a</span><?php echo $ValGlycemique4; ?></td>
                    <td><?php echo $ValGlyMatin4; ?></td>
                    <td><?php echo $ValGlyMid4; ?></td>
                    <td><?php echo $ValGlyCollation4; ?></td>
                    <td><?php echo $ValGlySoir4; ?></td>
                    <td><?php echo $ValGlyAutre4; ?></td>
                </tr>
                <tr>
                    <td><span style="color: white;">a</span><?php echo $ValGlycemique5; ?></td>
                    <td><?php echo $ValGlyMatin5; ?></td>
                    <td><?php echo $ValGlyMid5; ?></td>
                    <td><?php echo $ValGlyCollation5; ?></td>
                    <td><?php echo $ValGlySoir5; ?></td>
                    <td><?php echo $ValGlyAutre5; ?></td>
                </tr>
                <tr>
                    <td><span style="color: white;">a</span><?php echo $ValGlycemique6; ?></td>
                    <td><?php echo $ValGlyMatin6; ?></td>
                    <td><?php echo $ValGlyMid6; ?></td>
                    <td><?php echo $ValGlyCollation6; ?></td>
                    <td><?php echo $ValGlySoir6; ?></td>
                    <td><?php echo $ValGlyAutre6; ?></td>
                </tr>
                <tr>
                    <td><span style="color: white;">a</span><?php echo $ValGlycemique7; ?></td>
                    <td><?php echo $ValGlyMatin7; ?></td>
                    <td><?php echo $ValGlyMid7; ?></td>
                    <td><?php echo $ValGlyCollation7; ?></td>
                    <td><?php echo $ValGlySoir7; ?></td>
                    <td><?php echo $ValGlyAutre7; ?></td>
                </tr>
            </tbody>
        </table>
        
        <br><br>

        <table class="table">
            <thead>
                <tr>
                    <th colspan="12" style="text-align: center;">Schéma des glycémies &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Date de MAJ: <?php echo $dateglycemie; ?> </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td colspan="2" style="width:15.2%; text-align: center;"><strong>Petit déjeuner (g/l)</strong></td>
                    <td colspan="2" style="width:15.2%; text-align: center;"><strong>Déjeuner (g/l)</strong></td>
                    <td colspan="2" style="width:15.2%; text-align: center;"><strong>Goûter (g/l)</strong></td>
                    <td colspan="2" style="width:15.2%; text-align: center;"><strong>Dîner (g/l)</strong></td>
                    <td colspan="2" style="width:15.2%; text-align: center;"><strong>Collation (g/l)</strong></td>
                    <td style="width:10%; text-align: center;"><strong>Coucher (g/l)</strong></td>
                    <td style="width:10%; text-align: center;"><strong>Nuit (g/l)</strong></td>
                </tr>
                <tr>
                    <td><strong>Pré</strong></td>
                    <td><strong>Post</strong></td>
                    <td><strong>Pré</strong></td>
                    <td><strong>Post</strong></td>
                    <td><strong>Pré</strong></td>
                    <td><strong>Post</strong></td>
                    <td><strong>Pré</strong></td>
                    <td><strong>Post</strong></td>
                    <td><strong>Pré</strong></td>
                    <td><strong>Post</strong></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td><strong><span style="color: white;">a</span><?php echo $glycemie1; ?></strong></td>
                    <td><strong><?php echo $glycemie2; ?></strong></td>
                    <td><strong><?php echo $glycemie3; ?></strong></td>
                    <td><strong><?php echo $glycemie4; ?></strong></td>
                    <td><strong><?php echo $glycemie5; ?></strong></td>
                    <td><strong><?php echo $glycemie6; ?></strong></td>
                    <td><strong><?php echo $glycemie7; ?></strong></td>
                    <td><strong><?php echo $glycemie8; ?></strong></td>
                    <td><strong><?php echo $glycemie9; ?></strong></td>
                    <td><strong><?php echo $glycemie10; ?></strong></td>
                    <td><strong><?php echo $glycemie11; ?></strong></td>
                    <td><strong><?php echo $glycemie12; ?></strong></td>
                </tr>
                <tr>
                    <td><strong><span style="color: white;">a</span><?php echo $glycemie13; ?></strong></td>
                    <td><strong><?php echo $glycemie14; ?></strong></td>
                    <td><strong><?php echo $glycemie15; ?></strong></td>
                    <td><strong><?php echo $glycemie16; ?></strong></td>
                    <td><strong><?php echo $glycemie17; ?></strong></td>
                    <td><strong><?php echo $glycemie18; ?></strong></td>
                    <td><strong><?php echo $glycemie19; ?></strong></td>
                    <td><strong><?php echo $glycemie20; ?></strong></td>
                    <td><strong><?php echo $glycemie21; ?></strong></td>
                    <td><strong><?php echo $glycemie22; ?></strong></td>
                    <td><strong><?php echo $glycemie23; ?></strong></td>
                    <td><strong><?php echo $glycemie24; ?></strong></td>
                </tr>
                <tr>
                    <td><strong><span style="color: white;">a</span><?php echo $glycemie25; ?></strong></td>
                    <td><strong><?php echo $glycemie26; ?></strong></td>
                    <td><strong><?php echo $glycemie27; ?></strong></td>
                    <td><strong><?php echo $glycemie28; ?></strong></td>
                    <td><strong><?php echo $glycemie29; ?></strong></td>
                    <td><strong><?php echo $glycemie30; ?></strong></td>
                    <td><strong><?php echo $glycemie31; ?></strong></td>
                    <td><strong><?php echo $glycemie32; ?></strong></td>
                    <td><strong><?php echo $glycemie33; ?></strong></td>
                    <td><strong><?php echo $glycemie34; ?></strong></td>
                    <td><strong><?php echo $glycemie35; ?></strong></td>
                    <td><strong><?php echo $glycemie36; ?></strong></td>
                </tr>
                <tr>
                    <td><strong><span style="color: white;">a</span><?php echo $glycemie37; ?></strong></td>
                    <td><strong><?php echo $glycemie38; ?></strong></td>
                    <td><strong><?php echo $glycemie39; ?></strong></td>
                    <td><strong><?php echo $glycemie40; ?></strong></td>
                    <td><strong><?php echo $glycemie41; ?></strong></td>
                    <td><strong><?php echo $glycemie42; ?></strong></td>
                    <td><strong><?php echo $glycemie43; ?></strong></td>
                    <td><strong><?php echo $glycemie44; ?></strong></td>
                    <td><strong><?php echo $glycemie45; ?></strong></td>
                    <td><strong><?php echo $glycemie46; ?></strong></td>
                    <td><strong><?php echo $glycemie47; ?></strong></td>
                    <td><strong><?php echo $glycemie48; ?></strong></td>
                </tr>
                <tr>
                    <td><strong><span style="color: white;">a</span><?php echo $glycemie49; ?></strong></td>
                    <td><strong><?php echo $glycemie50; ?></strong></td>
                    <td><strong><?php echo $glycemie51; ?></strong></td>
                    <td><strong><?php echo $glycemie52; ?></strong></td>
                    <td><strong><?php echo $glycemie53; ?></strong></td>
                    <td><strong><?php echo $glycemie54; ?></strong></td>
                    <td><strong><?php echo $glycemie55; ?></strong></td>
                    <td><strong><?php echo $glycemie56; ?></strong></td>
                    <td><strong><?php echo $glycemie57; ?></strong></td>
                    <td><strong><?php echo $glycemie58; ?></strong></td>
                    <td><strong><?php echo $glycemie59; ?></strong></td>
                    <td><strong><?php echo $glycemie60; ?></strong></td>
                </tr>
                <tr>
                    <td><strong><span style="color: white;">a</span><?php echo $glycemie61; ?></strong></td>
                    <td><strong><?php echo $glycemie62; ?></strong></td>
                    <td><strong><?php echo $glycemie63; ?></strong></td>
                    <td><strong><?php echo $glycemie64; ?></strong></td>
                    <td><strong><?php echo $glycemie65; ?></strong></td>
                    <td><strong><?php echo $glycemie66; ?></strong></td>
                    <td><strong><?php echo $glycemie67; ?></strong></td>
                    <td><strong><?php echo $glycemie68; ?></strong></td>
                    <td><strong><?php echo $glycemie69; ?></strong></td>
                    <td><strong><?php echo $glycemie70; ?></strong></td>
                    <td><strong><?php echo $glycemie71; ?></strong></td>
                    <td><strong><?php echo $glycemie72; ?></strong></td>
                </tr>
                <tr>
                    <td><strong><span style="color: white;">a</span><?php echo $glycemie73; ?></strong></td>
                    <td><strong><?php echo $glycemie74; ?></strong></td>
                    <td><strong><?php echo $glycemie75; ?></strong></td>
                    <td><strong><?php echo $glycemie76; ?></strong></td>
                    <td><strong><?php echo $glycemie77; ?></strong></td>
                    <td><strong><?php echo $glycemie78; ?></strong></td>
                    <td><strong><?php echo $glycemie79; ?></strong></td>
                    <td><strong><?php echo $glycemie80; ?></strong></td>
                    <td><strong><?php echo $glycemie81; ?></strong></td>
                    <td><strong><?php echo $glycemie82; ?></strong></td>
                    <td><strong><?php echo $glycemie83; ?></strong></td>
                    <td><strong><?php echo $glycemie84; ?></strong></td>
                </tr>
            </tbody>
        </table>

        <br/>

    </div>
    <div class="dec">
        <strong>Synthèse/Commentaire : </strong> <?php echo $synthesecommentaire; ?> <br/>
        <strong>Objectif glycémique pré prandial (g/l) :</strong><?php echo $objectifglycemiquepreprandial; ?> <br/>
        <strong>Objectif glycémique post prandial (g/l) :</strong><?php echo $objectifglycemiquepostprandial; ?> <br/>
        <h4><u>Hémoglobine glyquée</u></h4>
        <table class="table">
            <tbody>
                <tr>
                    <td style="width: 10%;">Dates</td>
                    <td style="width: 10%;"><?php echo $ValDatesHemGlyc1; ?></td>
                    <td style="width: 10%;"><?php echo $ValDatesHemGlyc2; ?></td>
                    <td style="width: 10%;"><?php echo $ValDatesHemGlyc3; ?></td>
                    <td style="width: 10%;"><?php echo $ValDatesHemGlyc4; ?></td>
                    <td style="width: 10%;"><?php echo $ValDatesHemGlyc5; ?></td>
                    <td style="width: 9%;"><?php echo $ValDatesHemGlyc6; ?></td>
                    <td style="width: 9%;"><?php echo $ValDatesHemGlyc7; ?></td>
                    <td style="width: 9%;"><?php echo $ValDatesHemGlyc8; ?></td>
                    <td style="width: 9%;"><?php echo $ValDatesHemGlyc9; ?></td>
                </tr>
                <tr>
                    <td style="width: 10%;">HbA1c (%)</td>
                    <td style="width: 10%;"><?php echo $ValHbA1cHemGlyc1; ?></td>
                    <td style="width: 10%;"><?php echo $ValHbA1cHemGlyc2; ?></td>
                    <td style="width: 10%;"><?php echo $ValHbA1cHemGlyc3; ?></td>
                    <td style="width: 10%;"><?php echo $ValHbA1cHemGlyc4; ?></td>
                    <td style="width: 10%;"><?php echo $ValHbA1cHemGlyc5; ?></td>
                    <td style="width: 9%;"><?php echo $ValHbA1cHemGlyc6; ?></td>
                    <td style="width: 9%;"><?php echo $ValHbA1cHemGlyc7; ?></td>
                    <td style="width: 9%;"><?php echo $ValHbA1cHemGlyc8; ?></td>
                    <td style="width: 9%;"><?php echo $ValHbA1cHemGlyc9; ?></td>
                </tr>
            </tbody>
        </table>
        <br>
        <h4>Evolution chronologique en % desHémoglobines glyquées</h4>
          <?php
            	$image = 'img/image'.$id_.'barhg.png';

            		if(file_exists($image))
             			echo '<img src="'.$image.'" style="width: 700px;" />'

             	;?>
        <br/><br/>
    </div>

    <div class="dec">
        <h4><u>HABITUDE DE VIE</u></h4>

        <strong>Activité physique (type/frequence) :</strong> <?php echo $activitephysique; ?><br>
        <strong>Profession :</strong> <?php echo $profession; ?> <br>
        <strong>Situation familiale :</strong> <?php echo $situationfamiliale; ?> <br>
        <strong>Observations :</strong> <?php echo $observation; ?><br>
        <strong>Etat cutané au point injection : </strong> <?php echo $etatcutane; ?> <br>
        <strong>Hygiène alimentaire (habitude/régime): </strong> <?php echo $hygienealimentaire; ?> <br>
        <strong>Stabilités des horraires :  </strong> <?php echo $stabilitehoraires; ?> <br>
        <strong>Details: </strong> <?php echo $details; ?> <br>
        <strong>Environnement social : </strong> <?php echo $environnement; ?> <br>
        <strong>Choix des points d'injection : </strong> <?php echo $choixpoint; ?> <br>

    </div>
    <div class="dec">
        <h4><u>INSULINOTHERAPIE FONCTIONNELLE </u></h4>
        <table class="table " style="margin-left: 9px;">
            <thead>
                <tr>
                    <th style="width:16%; text-align: center;"></th>
                    <th style="width:16%; text-align: center;"><strong>De</strong></th>
                    <th style="width:16%; text-align: center;"><strong>A</strong></th>
                    <th style="width:16%; text-align: center;"><strong>Ration Insuline/glucide</strong></th>
                    <th style="width:16%; text-align: center;"><strong>Objectif glicémique</strong></th>
                    <th style="width:16%; text-align: center;"><strong>Sensibilité à l'insuline</strong></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Petit déjeuner</td>
                    <td><?php echo $petitdejeunerDe; ?></td>
                    <td><?php echo $petitdejeunerA; ?></td>
                    <td><?php echo $petitdejeunerRotation; ?></td>
                    <td><?php echo $petitdejeunerObjectif; ?></td>
                    <td><?php echo $petitdejeunerSensibilite; ?></td>
                </tr>
                <tr>
                    <td>Déjeuner</td>
                    <td><?php echo $dejeunerDe; ?></td>
                    <td><?php echo $dejeunerA; ?></td>
                    <td><?php echo $dejeunerRotation; ?></td>
                    <td><?php echo $dejeunerObjectif; ?></td>
                    <td><?php echo $dejeunerSensibilite; ?></td>
                </tr>
                <tr>
                    <td>Goûter</td>
                    <td><?php echo $gouterDe; ?></td>
                    <td><?php echo $gouterA; ?></td>
                    <td><?php echo $gouterRotation; ?></td>
                    <td><?php echo $gouterObjectif; ?></td>
                    <td><?php echo $gouterSensibilite; ?></td>
                </tr>
                <tr>
                    <td>Diner</td>
                    <td><?php echo $dinerDe; ?></td>
                    <td><?php echo $dinerA; ?></td>
                    <td><?php echo $dinerRotation; ?></td>
                    <td><?php echo $dinerObjectif; ?></td>
                    <td><?php echo $dinerSensibilite; ?></td>
                </tr>
                <tr>
                    <td>Collation</td>
                    <td><?php echo $collationDe; ?></td>
                    <td><?php echo $collationA; ?></td>
                    <td><?php echo $collationRotation; ?></td>
                    <td><?php echo $collationObjectif; ?></td>
                    <td><?php echo $collationSensibilite; ?></td>
                </tr>
            </tbody>

        </table>
    </div>
    <div class="dec">
        <h4><u>HABITUDES ALIMENTAIRES</u></h4>
        <strong>SUIVI DE POIDS : </strong> <?php echo $regime; ?> <br>
        <strong>Observation : </strong> <?php echo $observation2; ?> <br>
        <strong>Survenue de compilations : </strong> <?php echo $survenue; ?> <br>
        <strong>ATCD/ autre pathologies : </strong> <?php echo $atcd; ?> <br>
        <strong>Traitement :</strong> <?php echo $traitement; ?> <br><br/><br/>
        <table class="table " style="margin-left: 8px;">
            <tbody>
                <tr>
                    <td style="width:10%">Date</td>
                    <td style="width:10%"><?php echo $date1; ?></td>
                    <td style="width:10%"><?php echo $date2; ?></td>
                    <td style="width:10%"><?php echo $date3; ?></td>
                    <td style="width:10%"><?php echo $date4; ?></td>
                    <td style="width:9%"><?php echo $date5; ?></td>
                    <td style="width:9%"><?php echo $date6; ?></td>
                    <td style="width:9%"><?php echo $date7; ?></td>
                    <td style="width:9%"><?php echo $date8; ?></td>
                    <td style="width:9%"><?php echo $date9; ?></td>
                </tr>
                <tr>
                    <td>Taille</td>
                    <td><?php echo $taille1; ?></td>
                    <td><?php echo $taille2; ?></td>
                    <td><?php echo $taille3; ?></td>
                    <td><?php echo $taille4; ?></td>
                    <td><?php echo $taille5; ?></td>
                    <td><?php echo $taille6; ?></td>
                    <td><?php echo $taille7; ?></td>
                    <td><?php echo $taille8; ?></td>
                    <td><?php echo $taille9; ?></td>
                </tr>
                <tr>
                    <td>Poids</td>
                    <td><?php echo $poids1; ?></td>
                    <td><?php echo $poids2; ?></td>
                    <td><?php echo $poids3; ?></td>
                    <td><?php echo $poids4; ?></td>
                    <td><?php echo $poids5; ?></td>
                    <td><?php echo $poids6; ?></td>
                    <td><?php echo $poids7; ?></td>
                    <td><?php echo $poids8; ?></td>
                    <td><?php echo $poids9; ?></td>
                </tr>
                <tr>
                    <td>IMC</td>
                    <td><?php echo ($imc1 != 0 ) ? round($imc1, 2) : 0; ?></td>
                    <td><?php echo ($imc2 != 0 ) ? round($imc2, 2) : 0; ?></td>
                    <td><?php echo ($imc3 != 0 ) ? round($imc3, 2) : 0; ?></td>
                    <td><?php echo ($imc4 != 0 ) ? round($imc4, 2) : 0; ?></td>
                    <td><?php echo ($imc5 != 0 ) ? round($imc5, 2) : 0; ?></td>
                    <td><?php echo ($imc6 != 0 ) ? round($imc6, 2) : 0; ?></td>
                    <td><?php echo ($imc7 != 0 ) ? round($imc7, 2) : 0; ?></td>
                    <td><?php echo ($imc8 != 0 ) ? round($imc8, 2) : 0; ?></td>
                    <td><?php echo ($imc9 != 0 ) ? round($imc9, 2) : 0; ?></td>
                </tr>

            </tbody>
        </table>
    </div><br/><br/>

         <?php
            	$image = 'img/image'.$id_.'bar.png';

            		if(file_exists($image))
             			echo '<img src="'.$image.'" style="width: 700px;" />'

             	;?>

    <div class="dec">
        <h4><u>MANIPULATION DE LA POMPE</u></h4><br/>

        <table style="width: 1200px;">
            <thead>
                <tr>
                    <th style="text-align: center; ">Etapes</th>
                    <th style="text-align: center; width: 60px;"><?php echo $pmpdate1; ?></th>
                    <th style="text-align: center; width: 60px;"><?php echo $pmpdate2; ?></th>
                    <th style="text-align: center; width: 60px;"><?php echo $pmpdate3; ?></th>
                    <th style="text-align: center; width: 60px;"><?php echo $pmpdate4; ?></th>
                    <th style="text-align: center; width: 150px;">Commentaire</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Installation de la pile</td>
                    <td><?php echo $pmpselect1; ?></td>
                    <td><?php echo $pmpselect2; ?></td>
                    <td><?php echo $pmpselect3; ?></td>
                    <td><?php echo $pmpselect4; ?></td>
                    <td><?php echo $pmpcommentaire1; ?></td>
                </tr>
                <tr>
                    <td>Marche/Arrêt</td>
                    <td><?php echo $pmpselect5; ?></td>
                    <td><?php echo $pmpselect6; ?></td>
                    <td><?php echo $pmpselect7; ?></td>
                    <td><?php echo $pmpselect8; ?></td>
                    <td><?php echo $pmpcommentaire2; ?></td>
                </tr>
                <tr>
                    <td>Réglage Date/heure</td>
                    <td><?php echo $pmpselect9; ?></td>
                    <td><?php echo $pmpselect10; ?></td>
                    <td><?php echo $pmpselect11; ?></td>
                    <td><?php echo $pmpselect12; ?></td>
                    <td><?php echo $pmpcommentaire3; ?></td>
                </tr> 
                <tr>
                    <td>Réglage du bolus</td>
                    <td><?php echo $pmpselect13; ?></td>
                    <td><?php echo $pmpselect14; ?></td>
                    <td><?php echo $pmpselect15; ?></td>
                    <td><?php echo $pmpselect16; ?></td>
                    <td><?php echo $pmpcommentaire4; ?></td>
                </tr>
                <tr>
                    <td>Arrêt du bolus en cours</td>
                    <td><?php echo $pmpselect17; ?></td>
                    <td><?php echo $pmpselect18; ?></td>
                    <td><?php echo $pmpselect19; ?></td>
                    <td><?php echo $pmpselect20; ?></td>
                    <td><?php echo $pmpcommentaire5; ?></td>
                </tr>
                <tr>
                    <td>Historique des bolus</td>
                    <td><?php echo $pmpselect21; ?></td>
                    <td><?php echo $pmpselect22; ?></td>
                    <td><?php echo $pmpselect23; ?></td>
                    <td><?php echo $pmpselect24; ?></td>
                    <td><?php echo $pmpcommentaire6; ?></td>
                </tr>
                <tr>
                    <td>Programmation du débit basal</td>
                    <td><?php echo $pmpselect25; ?></td>
                    <td><?php echo $pmpselect26; ?></td>
                    <td><?php echo $pmpselect27; ?></td>
                    <td><?php echo $pmpselect28; ?></td>
                    <td><?php echo $pmpcommentaire7; ?></td>
                </tr>
                <tr>
                    <td>Consulter les débits de base</td>
                    <td><?php echo $pmpselect29; ?></td>
                    <td><?php echo $pmpselect291; ?></td>
                    <td><?php echo $pmpselect292; ?></td>
                    <td><?php echo $pmpselect293; ?></td>
                    <td><?php echo $pmpcommentaire8; ?></td>
                </tr>
                <tr>
                    <td>Programmer et arrêter le débit de base temporaire</td>
                    <td><?php echo $pmpselect294; ?></td>
                    <td><?php echo $pmpselect295; ?></td>
                    <td><?php echo $pmpselect296; ?></td>
                    <td><?php echo $pmpselect297; ?></td>
                    <td><?php echo $pmpcommentaire9; ?></td>
                </tr>
            </tbody>
        </table>

        <div>
            <strong>Autres :</strong> <?php echo $pmpautre; ?>
        </div>


        <h4><u>ALARMES ET PRECAUTIONS</u></h4><br/>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th style="text-align: center; width: 240px;">Etapes</th>
                    <th style="text-align: center; width:60px; "><?php echo $alarmedate1; ?></th>
                    <th style="text-align: center; width:60px; "><?php echo $alarmedate2; ?></th>
                    <th style="text-align: center; width:60px; "><?php echo $alarmedate3; ?></th>
                    <th style="text-align: center; width:60px; "><?php echo $alarmedate4; ?></th>
                    <th style="text-align: center; width: 207px;">Commentaire</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Reconnaitre une alarme</td>
                    <td><?php echo $alarmeselect1; ?></td>
                    <td><?php echo $alarmeselect2; ?></td>
                    <td><?php echo $alarmeselect3; ?></td>
                    <td><?php echo $alarmeselect4; ?></td>
                    <td><?php echo $alarmecommentaire1; ?></td>
                </tr>
                <tr>
                    <td>Pile faible</td>
                    <td><?php echo $alarmeselect5; ?></td>
                    <td><?php echo $alarmeselect6; ?></td>
                    <td><?php echo $alarmeselect7; ?></td>
                    <td><?php echo $alarmeselect8; ?></td>
                    <td><?php echo $alarmecommentaire2; ?></td>
                </tr>
                <tr>
                    <td>Pile épuisée</td>
                    <td><?php echo $alarmeselect9; ?></td>
                    <td><?php echo $alarmeselect10; ?></td>
                    <td><?php echo $alarmeselect11; ?></td>
                    <td><?php echo $alarmeselect12; ?></td>
                    <td><?php echo $alarmecommentaire3; ?></td>
                </tr> 
                <tr>
                    <td>Réservoire vide</td>
                    <td><?php echo $alarmeselect13; ?></td>
                    <td><?php echo $alarmeselect14; ?></td>
                    <td><?php echo $alarmeselect15; ?></td>
                    <td><?php echo $alarmeselect16; ?></td>
                    <td><?php echo $alarmecommentaire4; ?></td>
                </tr>
                <tr>
                    <td>Occlusion/pas d'injection</td>
                    <td><?php echo $alarmeselect17; ?></td>
                    <td><?php echo $alarmeselect18; ?></td>
                    <td><?php echo $alarmeselect19; ?></td>
                    <td><?php echo $alarmeselect20; ?></td>
                    <td><?php echo $alarmecommentaire5; ?></td>
                </tr>
                <tr>
                    <td>Historique des alarmes</td>
                    <td><?php echo $alarmeselect21; ?></td>
                    <td><?php echo $alarmeselect22; ?></td>
                    <td><?php echo $alarmeselect23; ?></td>
                    <td><?php echo $alarmeselect24; ?></td>
                    <td><?php echo $alarmecommentaire6; ?></td>
                </tr>
                <tr>
                    <td>Entretien de la Pompe</td>
                    <td><?php echo $alarmeselect25; ?></td>
                    <td><?php echo $alarmeselect26; ?></td>
                    <td><?php echo $alarmeselect27; ?></td>
                    <td><?php echo $alarmeselect28; ?></td>
                    <td><?php echo $alarmecommentaire7; ?></td>
                </tr>
            </tbody>
        </table>

        <div>
            <strong>Autres :</strong> <?php echo $alarmeautre; ?>
        </div>

        <font><h4><u>MANIPULATIONS</u></h4></font><br/>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th style="text-align: center; width: 240px">Etapes</th>
                    <th style="text-align: center; width:60px;  "><?php echo $manipdate1; ?></th>
                    <th style="text-align: center; width:60px;  "><?php echo $manipdate2; ?></th>
                    <th style="text-align: center; width:60px;  "><?php echo $manipdate3; ?></th>
                    <th style="text-align: center; width:60px;  "><?php echo $manipdate4; ?></th>
                    <th style="text-align: center; width:207px; ">Commentaire</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Lavage des mains</td>
                    <td><?php echo $manipselect1; ?></td>
                    <td><?php echo $manipselect2; ?></td>
                    <td><?php echo $manipselect3; ?></td>
                    <td><?php echo $manipselect4; ?></td>
                    <td><?php echo $manipcommentaire1; ?></td>
                </tr>
                <tr>
                    <td>Remplissage du réservoir</td>
                    <td><?php echo $manipselect5; ?></td>
                    <td><?php echo $manipselect6; ?></td>
                    <td><?php echo $manipselect7; ?></td>
                    <td><?php echo $manipselect8; ?></td>
                    <td><?php echo $manipcommentaire2; ?></td>
                </tr>
                <tr>
                    <td>Connexion réservoir/tubulaire</td>
                    <td><?php echo $manipselect9; ?></td>
                    <td><?php echo $manipselect10; ?></td>
                    <td><?php echo $manipselect11; ?></td>
                    <td><?php echo $manipselect12; ?></td>
                    <td><?php echo $manipcommentaire3; ?></td>
                </tr> 
                <tr>
                    <td>Retour du piston</td>
                    <td><?php echo $manipselect13; ?></td>
                    <td><?php echo $manipselect14; ?></td>
                    <td><?php echo $manipselect15; ?></td>
                    <td><?php echo $manipselect16; ?></td>
                    <td><?php echo $manipcommentaire4; ?></td>
                </tr>
                <tr>
                    <td>Purge de la tubulure</td>
                    <td><?php echo $manipselect17; ?></td>
                    <td><?php echo $manipselect18; ?></td>
                    <td><?php echo $manipselect19; ?></td>
                    <td><?php echo $manipselect20; ?></td>
                    <td><?php echo $manipcommentaire5; ?></td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="dec">

        <h4><u>POSE DU CATHETER</u></h4><br/>

        <table style="margin-left: 5px;">
            <thead>
                <tr>
                    <th style="text-align: center;">Etapes</th>
                    <th style="width: 60px;" ><?php echo $cathdate1; ?></th>
                    <th style="width: 60px;" ><?php echo $cathdate2; ?></th>
                    <th style="width: 60px;" ><?php echo $cathdate3; ?></th>
                    <th style="width: 60px;" ><?php echo $cathdate4; ?></th>
                    <th style="text-align: center; width: 145px;">Commentaire</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Mise en place du cathéter dans l'Inserteur</td>
                    <td><?php echo $cathselect1; ?></td>
                    <td><?php echo $cathselect2; ?></td>
                    <td><?php echo $cathselect3; ?></td>
                    <td><?php echo $cathselect4; ?></td>
                    <td><?php echo $cathcommentaire1; ?></td>
                </tr>
                <tr>
                    <td>Retrait de l'adhésif et de la protection de l'aiguille</td>
                    <td><?php echo $cathselect5; ?></td>
                    <td><?php echo $cathselect6; ?></td>
                    <td><?php echo $cathselect7; ?></td>
                    <td><?php echo $cathselect8; ?></td>
                    <td><?php echo $cathcommentaire2; ?></td>
                </tr>
                <tr>
                    <td>Armement de l'Inserteur</td>
                    <td><?php echo $cathselect9; ?></td>
                    <td><?php echo $cathselect10; ?></td>
                    <td><?php echo $cathselect11; ?></td>
                    <td><?php echo $cathselect12; ?></td>
                    <td><?php echo $cathcommentaire3; ?></td>
                </tr> 
                <tr>
                    <td>Choix du lieu d'injection</td>
                    <td><?php echo $cathselect13; ?></td>
                    <td><?php echo $cathselect14; ?></td>
                    <td><?php echo $cathselect15; ?></td>
                    <td><?php echo $cathselect16; ?></td>
                    <td><?php echo $cathcommentaire4; ?></td>
                </tr>
                <tr>
                    <td>Désinfection cutanée</td>
                    <td><?php echo $cathselect17; ?></td>
                    <td><?php echo $cathselect18; ?></td>
                    <td><?php echo $cathselect19; ?></td>
                    <td><?php echo $cathselect20; ?></td>
                    <td><?php echo $cathcommentaire5; ?></td>
                </tr>
                <tr>
                    <td>Déclenchement de l'Inserteur</td>
                    <td><?php echo $cathselect21; ?></td>
                    <td><?php echo $cathselect22; ?></td>
                    <td><?php echo $cathselect23; ?></td>
                    <td><?php echo $cathselect24; ?></td>
                    <td><?php echo $cathcommentaire6; ?></td>
                </tr>
                <tr>
                    <td>Retrait de l'aiguille</td>
                    <td><?php echo $cathselect25; ?></td>
                    <td><?php echo $cathselect26; ?></td>
                    <td><?php echo $cathselect27; ?></td>
                    <td><?php echo $cathselect28; ?></td>
                    <td><?php echo $cathcommentaire7; ?></td>
                </tr>
                <tr>
                    <td>Amorce de la canule</td>
                    <td><?php echo $cathselect29; ?></td>
                    <td><?php echo $cathselect211; ?></td>
                    <td><?php echo $cathselect212; ?></td>
                    <td><?php echo $cathselect213; ?></td>
                    <td><?php echo $cathcommentaire8; ?></td>
                </tr>
                <tr>
                    <td>Contrôle glycémique 2h après la pose</td>
                    <td><?php echo $cathselect214; ?></td>
                    <td><?php echo $cathselect215; ?></td>
                    <td><?php echo $cathselect216; ?></td>
                    <td><?php echo $cathselect214; ?></td>
                    <td><?php echo $cathcommentaire9; ?></td>
                </tr>
                <tr>
                    <td>Conservation de l'insuline</td>
                    <td><?php echo $cathselect218; ?></td>
                    <td><?php echo $cathselect219; ?></td>
                    <td><?php echo $cathselect221; ?></td>
                    <td><?php echo $cathselect222; ?></td>
                    <td><?php echo $cathcommentaire10; ?></td>
                </tr>
                <tr>
                    <td>Fréquence de changement des cathéters</td>
                    <td><?php echo $cathselect223; ?></td>
                    <td><?php echo $cathselect224; ?></td>
                    <td><?php echo $cathselect225; ?></td>
                    <td><?php echo $cathselect226; ?></td>
                    <td><?php echo $cathcommentaire11; ?></td>
                </tr>
            </tbody>
        </table>



        <h4><u>CONNAISSANCE</u></h4><br/>

        <table style="margin-left: 5px;">

            <tr>
                <td style="text-align: center; width: 400px;"></td>
                <td style="text-align: center; width: 80px;">OUI / NON</td>
                <td style="text-align: center; width: 190px;"><strong>Observation</strong></td>                            
            </tr>


            <tr>
                <td><strong>Numéro de l'astreinte médicale</strong></td>
                <td><?php echo $connaissance1; ?></td>
                <td><?php echo $cnsobservation1; ?></td>                            
            </tr>

            <tr>
                <td><strong>Numéro de l'astreinte BLCM</strong></td>
                <td><?php echo $connaissance2; ?></td>
                <td><?php echo $cnsobservation2; ?></td>
            </tr>

            <tr> 
                <td>
                    <strong>Kit de sécurité</strong><br/>
                    <strong>&nbsp;&nbsp;&nbsp;&nbsp; * &nbsp;&nbsp;&nbsp;Stylo d'insuline rapide : </strong><br/>
                    <strong>&nbsp;&nbsp;&nbsp;&nbsp; * &nbsp;&nbsp;&nbsp;Stylo d'insuline lente : </strong><br/>
                    <strong>&nbsp;&nbsp;&nbsp;&nbsp; * &nbsp;&nbsp;&nbsp;Aiguilles : </strong> <br/>
                    <strong>&nbsp;&nbsp;&nbsp;&nbsp; * &nbsp;&nbsp;&nbsp;Stylo de glucagen : </strong> <br/>

                </td>

                <td>
                    <br/>
                    * <?php echo $connaissance3; ?><br/>
                    * <?php echo $connaissance4; ?><br/>
                    * <?php echo $connaissance5; ?><br/>
                    * <?php echo $connaissance6; ?>  
                </td>

                <td>
                    <strong>Date de péremption</strong> : <br/>
                    * <?php echo $perempdate1; ?> <br/>
                    * <?php echo $perempdate2; ?> <br/>
                    * <?php echo $perempdate3; ?> <br/>
                    * <?php echo $perempdate4; ?>
                </td>

            </tr>

            <tr>
                <td><strong>Matériel de secours</strong></td>
                <td><?php echo $connaissance7; ?></td>
                <td><?php echo $perempdate5; ?></td>
            </tr>

            <tr>
                <td><strong>Schéma de remplacement</strong></td>
                <td><?php echo $connaissance8; ?></td>
                <td><?php echo $cnsobservation3; ?></td>
            </tr>
            <tr>
                <td><strong>CAT en cas d'hypoglycémie</strong></td>
                <td><?php echo $connaissance9; ?></td>
                <td><?php echo $cnsobservation4; ?></td>
            </tr>
            <tr>
                <td><strong>Maitrise du ressucrage</strong></td>
                <td><?php echo $connaissance10; ?></td>
                <td><?php echo $cnsobservation5; ?></td>
            </tr>                        
            <tr>
                <td><strong>CAT en cas d'hyperglycémie</strong></td>
                <td><?php echo $connaissance11; ?></td>
                <td><?php echo $cnsobservation6; ?></td>
            </tr>
            <tr>
                <td><strong>Maitrise de l'acceptation du bolus de correction</strong></td>
                <td><?php echo $connaissance12; ?></td>
                <td><?php echo $cnsobservation7; ?></td>
            </tr>
            <tr>
                <td><strong>Réalise le contrôle de la Cétone</strong></td>
                <td><?php echo $connaissance13; ?></td>
                <td><?php echo $cnsobservation8; ?></td>
            </tr>
            <tr>
                <td><strong>CAT en cas d'accétonémie</strong></td>
                <td><?php echo $connaissance14; ?></td>
                <td><?php echo $cnsobservation9; ?></td>
            </tr>                     

        </table>



        <h4><u>AUTO SURVEILLANCE GLYCEMIQUE</u></h4><br/>
        <table style="margin-left: 5px;">

            <tr>
                <td style="width: 400px;"></td>
                <td style="text-align: center; width: 130px;"><strong>Détails</strong></td>
                <td style="text-align: center; width: 140px;"><strong>Observations</strong></td>                            
            </tr>

            <tbody>                      
                <tr>
                    <td><strong>Nom du dispositif ASG principal et des bandelettes</strong></td>
                    <td><?php echo $asgdetail1; ?></td>
                    <td><?php echo $asgobservation1; ?></td>
                </tr>
                <tr>
                    <td><strong>Nom du dispositif ASG secondaire éventuel et des bandelettes</strong></td>
                    <td><?php echo $asgdetail2; ?></td>
                    <td><?php echo $asgobservation2; ?></td>
                </tr>
                <tr>
                    <td><strong>Nom du dispositif auto piqueur</strong></td>
                    <td><?php echo $asgdetail3; ?></td>
                    <td><?php echo $asgobservation3; ?></td>
                </tr>                        
                <tr>
                    <td><strong>Etat cutané des doigts/respect de "la pince"</strong></td>
                    <td><?php echo $asgdetail4; ?></td>
                    <td><?php echo $asgobservation4; ?></td>
                </tr>                                        
            </tbody>
        </table>



        <h4><u>AUTO SURVEILLANCE GLYCEMIQUE (ASG)</u></h4><br/>
        <table>

            <tr>
                <td style="text-align: center; width: 400px;"></td>
                <td style="text-align: center; width: 130px;"><strong>Prescription</strong></td>
                <td style="text-align: center; width: 140px;"><strong>Réalisation réelle</strong></td>                            
            </tr>

            <tbody>                      
                <tr>
                    <td><strong>Fréqeunce des glycémies</strong></td>
                    <td><?php echo $asgfrequence1; ?></td> 
                    <td><?php echo $asgfrequence2; ?></td>
                </tr>
                <tr>
                    <td><strong>Connaissance et respect des mesures d'hygiène relatives l'ASG</strong></td>
                    <td><?php echo $asgconnaissance; ?></td>
                    <td><?php echo $asgcommentaire; ?></td>
                </tr>                                      
            </tbody>
        </table>


    </div>
</div>


<style>
    table

    {

        width: 100%;
        border-collapse: collapse; /* Les bordures du tableau seront collées (plus joli) */

    }

    td, th
    {
        border: 1px solid black;
    }
    .dec{
        margin-left: 25px;
        margin-right: 25px;
    }
    .title{
        margin-left: 25px;
    }

</style>
<?php
$content = ob_get_clean();

// convert in PDF
require_once(dirname(__FILE__) . '/html2pdf-4.4.0/html2pdf.class.php');

try {
    $html2pdf = new HTML2PDF('P', 'A4', 'fr');
    $html2pdf->setDefaultFont('Arial');
    $html2pdf->writeHTML($content, isset($_GET['vuehtml']));
    $html2pdf->Output('pdf/content.pdf');
} catch (HTML2PDF_exception $e) {
    echo $e;
    exit;
}

//Suppression des fichiers
 $image1 = "img/image".$id_."bardate1.png"; 
  	if(file_exists($image1))
  		unlink($image1);
 $image2 = "img/image".$id_."bardate2.png"; 
  	if(file_exists($image2))
  		unlink($image2);
 $image3 = "img/image".$id_."barhg.png"; 
  	if(file_exists($image3))
  		unlink($image3);
 $image4 = "img/image".$id_."bar.png"; 
  	if(file_exists($image4))
  		unlink($image4);
 
?>