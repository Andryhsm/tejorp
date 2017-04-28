<?php
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

    // get the HTML
    ob_start();
    ?>

    <div id='content' >
         <div><img style="position: relative; margin-left: 600px; width: 120px;" src="img/basitide.png"></div>
        <div class="dec"><br/><br/><div style="margin-left: 170px;"><h3>Installation de pompe à insuline</h3></div><br/><br/><br/></div>
        <div class="dec">
            <h4><u>RENSEIGNEMENTS BASTIDE LE CONFORT MEDICAL</u></h4>
            <p>
                <strong>Nom IDE Responsable :</strong> <?php echo $_POST["nomresp"] ; ?>  <br/>   
                <strong>Prénom : </strong> <?php echo $_POST["prenomresp"] ; ?>  <br/>
                <strong>Mobile : </strong> <?php echo $_POST["mobileresp"] ; ?>  <br/>
                <strong>Coordonnées :</strong> <?php echo $_POST["coordonnee"] ; ?> 

                    <h4><u>RENSEIGNEMENTS PATIENT</u></h4>
                <strong>Nom :</strong> <?php echo $_POST["nompatient"] ; ?>  <br/>
                <strong>Prénom :</strong><?php echo $_POST["prenompatient"] ; ?><br/>
                <strong>Né(e) le : </strong><?php echo $_POST["datenaissance"] ; ?> <br/>
                <strong>Age :</strong> <?php echo $_POST["agepatient"] ; ?><br/>
                <strong>Tel : </strong> <?php echo $_POST["telpatient"] ; ?><br/>
                <strong>Mobile :</strong><?php echo $_POST["mobilepatient"] ; ?><br/>
                <strong>Adresse :</strong><?php echo $_POST["adressepatient"] ; ?><br/>
                <strong>Code postal :</strong><?php echo $_POST["codepostalpatient"] ; ?><br/>    
                <strong>Ville :</strong><?php echo $_POST["villepatient"] ; ?><br/>
                <h4><u>RENSEIGNEMENTS PRESCRIPTEUR</u></h4>
                
                <strong>Etablissement prescripteur:</strong> <?php echo $_POST["etablissementprescripteur"] ; ?> <br/>
                <strong>Service :</strong> <?php echo $_POST["serviceep"] ; ?> <br/><br/> 

                <strong>Mail :</strong> <?php echo $_POST["maildl"] ; ?> <br/><br/>

                <h4><u> Médecin traitant :</u></h4>
                <strong>Tel :</strong>  <?php echo $_POST["telmt"] ; ?><br/>   
                <strong>Mobile :</strong>  <?php echo $_POST["mobilemt"] ; ?><br/>      
                <strong>Ville :</strong><?php echo $_POST["villemt"] ; ?><br/>
                <strong>Mail :</strong><?php echo $_POST["mailmt"] ; ?><br/><br/>

                <strong>Membre réseau :</strong> <?php echo $_POST["membrereseau"] ; ?> <br/> 
            </p>
        </div>
       
    <div class="dec">
        <h4><u>CHOIX DU MATERIEL</u></h4>
        <p>   
            <strong>Pompe :</strong> <?php echo $_POST["pompe"] ; ?> <br/>
            <strong>Date d’installation :</strong> <?php echo $_POST["dateinstallation"] ; ?> <br/>
            <strong>Type de cathéter :</strong> <?php echo $_POST["catheter"] ; ?><br/>
            <strong>Modèle :</strong> <?php echo $_POST["modele"] ; ?> <br/>
            <strong>Longueur de canule :</strong> <?php echo $_POST["longueurcanule"] ; ?> mm              <strong>Longueur de tubulure :</strong>   <?php echo $_POST["longueurtubulure"] ; ?> cm
            <strong>Inserteur :</strong> <?php echo $_POST["inserteur"] ; ?><br/><br/>

            <strong>Réservoir :</strong> <?php echo $_POST["reservoir"] ; ?> <br/>                      
            <strong>Système de portage de la pompe (qql lignes) : </strong> <?php echo $_POST["spp"] ; ?>  <br/>    

            <strong>Observations et commentaires :</strong> <?php echo $_POST["observation"] ; ?>  
        </p>

        <h4><u>DONNEES MEDICALES</u></h4>
        <p>
            <strong>Type de diabète :</strong> <?php echo $_POST["typediabete"] ; ?> <br/>
            <strong>Date de diagnostic :</strong> <?php echo $_POST["datediagnostic"] ; ?> <br/>     
            <strong>Circonstances de découverte :</strong> <?php echo $_POST["circonstancedecouverte"] ; ?>   <br/>   
            <strong>Antécédents familiaux :</strong> <?php echo $_POST["antecedentfamiliaux"] ; ?>    <br/>  
            <strong>Date de première mise sous pompe :</strong> <?php echo $_POST["datepremieremisesouspompe"] ; ?> <br/>     
            <strong>HbA1C de référence avant la mise sous pompe :</strong>   <?php echo $_POST["hba1c"] ; ?> <br/>     
        </p><br/>
    </div>
    <table style="margin: 0px 30px 0px 50px;">
        <thead>
            <tr>
                <th style="width: 20%";><strong>Poids actuel (kg) </strong></th>
                <th style="width: 20%";><strong>Poids de forme (kg)</strong></th>
                <th style="width: 20%";><strong>Taille (cm)</strong></th>
                <th style="width: 20%";><strong>IMC</strong></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo $_POST["poidsactuel"] ; ?></td>
                <td><?php echo $_POST["poidsforme"] ; ?></td>
                <td><?php echo $_POST["taille"] ; ?></td>
                <td><?php echo $_POST["imc"] ; ?></td>
            </tr>
        </tbody>
    </table>
    <br/><br/><br/>
    <div class="dec">
        <h4><u>Auto surveillance glycémique :</u></h4>
        <p>
            <strong>Nombre de glycémies par jour :</strong> <?php echo $_POST["nombreglycemieparjour"] ; ?> <br/>
            <strong>Type de lecteur :</strong> <?php echo $_POST["typelecteur"] ; ?>           <strong>Date de prescription : </strong> <?php echo $_POST["dateprescription"] ; ?><br/>      
            <strong>Stylo auto piqueur/lancette :</strong> <?php echo $_POST["styloautopiqueur"] ; ?> <br/>     
            <strong>Insulinothérapie :</strong><br/>
            <strong>Nombre d’injection par jour :</strong> <?php echo $_POST["nombreinjectionjour"] ; ?>           <strong>Schéma multi injection :</strong><br/>
            <strong>Stylo :</strong> <?php echo $_POST["stylo"] ; ?>      <strong>Autre : </strong> <?php echo $_POST["autrestylo"] ; ?>         
            <strong>Aiguille pour stylo : </strong><?php echo $_POST["aiguillestylo"] ; ?> <br/>
            <strong>Autre : </strong>  <?php echo $_POST["autreaiguille"] ; ?> <br/><br/><br/>    
        </p>
    </div>
    <div class="dec">
        <table class="table " style="margin-left: 110px;">
            <thead>
                <tr>
                    <th style="width:100px";></th>
                    <th style="width:100px";><strong>Insuline lente</strong></th>
                    <th style="width:100px";><strong>Insuline rapide</strong></th>
                    <th style="width:100px";><strong>Quantité totale</strong></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Matin</td>
                    <td><?php echo $_POST["insulinelentematin"] ; ?></td>
                    <td><?php echo $_POST["insulinerapidematin"] ; ?></td>
                    <td><?php $total_1 = $_POST["insulinelentematin"] + $_POST["insulinerapidematin"];  echo $total_1; ?></td>
                </tr>
                <tr>
                    <td>Midi</td>
                    <td><?php echo $_POST["insulinelentemidi"] ; ?></td>
                    <td><?php echo $_POST["insulinerapidemidi"] ; ?></td>
                    <td><?php $total_2 = $_POST["insulinelentemidi"] + $_POST["insulinerapidemidi"];  echo $total_2; ?></td>
                </tr>
                <tr>
                    <td>Soir</td>
                    <td><?php echo $_POST["insulinelentesoir"] ; ?></td>
                    <td><?php echo $_POST["insulinerapidesoir"] ; ?></td>
                    <td><?php $total_3 = $_POST["insulinelentesoir"] + $_POST["insulinerapidesoir"];  echo $total_1; ?></td>
                </tr>
                <tr>
                    <td>TOTAL</td>
                    <td><?php echo $_POST["totalinsulinelente"] ; ?></td>
                    <td><?php echo $_POST["totalinsulinerapide"] ; ?></td>
                    <td><?php $total = $total_1 + $total_2 + $total_3 ;  echo $total; ?></td>
                </tr>
            </tbody>
        </table><br/>

        <h4><u>Traitements complémentaires :</u></h4>
        <table class="table" style="margin-left: 70px;">
            <thead>
                <tr>
                    <th style="width: 35%;"><strong>Spécialité</strong></th>
                    <th style="width: 35%;"><strong>Posologie</strong></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?php echo $_POST["specialite1"] ;?></td>
                    <td><?php echo $_POST["posologie1"] ;?></td>
                </tr>
                <tr>
                    <td><?php echo $_POST["specialite2"] ;?></td>
                    <td><?php echo $_POST["posologie2"] ;?></td>
                </tr>
                <tr>
                    <td><?php echo $_POST["specialite3"] ;?></td>
                    <td><?php echo $_POST["posologie3"] ;?></td>
                </tr>
                <tr>
                    <td><?php echo $_POST["specialite4"] ;?></td>
                    <td><?php echo $_POST["posologie4"] ;?></td>
                </tr>
            </tbody>
        </table><br/>
            <img src="img/image4.png"  style="width: 700px;"/>
        <br/><br/>
    </div>
    <div class="dec">
        <table class="table" style="margin-right: 20px;">
            <tbody>
                <tr>
                    <td colspan=8 style="text-align: center;"><strong>Shéma basals date 1</strong></td>
                </tr>
                <tr>
                    <td style="width:24%;" colspan=2><strong>Schéma 1</strong></td>
                    <td style="width:24%;" colspan=2><strong>Schéma 2</strong></td>
                    <td style="width:24%;" colspan=2><strong>Schéma 3</strong></td>
                    <td style="width:24%;" colspan=2><strong>Schéma 4</strong></td>
                </tr>
                <tr>
                    <td>Horaire</td>
                    <td>Débit</td>
                    <td>Horaire</td>
                    <td>Débit</td>
                    <td>Horaire</td>
                    <td>Débit</td>
                    <td>Horaire</td>
                    <td>Débit</td>
                </tr>
                <tr>
                    <td><?php echo $_POST["Horaire1"] ; ?></td>
                    <td><?php echo $_POST["Debit1"] ; ?></td>
                    <td><?php echo $_POST["Horaire2"] ; ?></td>
                    <td><?php echo $_POST["Debit2"] ; ?></td>
                    <td><?php echo $_POST["Horaire3"] ; ?></td>
                    <td><?php echo $_POST["Debit3"] ; ?></td>
                    <td><?php echo $_POST["Horaire4"] ; ?></td>
                    <td><?php echo $_POST["Debit4"] ; ?></td>
                </tr>
                <tr>
                    <td><?php echo $_POST["Horaire5"] ; ?></td>
                    <td><?php echo $_POST["Debit5"] ; ?></td>
                    <td><?php echo $_POST["Horaire6"] ; ?></td>
                    <td><?php echo $_POST["Debit6"] ; ?></td>
                    <td><?php echo $_POST["Horaire7"] ; ?></td>
                    <td><?php echo $_POST["Debit7"] ; ?></td>
                    <td><?php echo $_POST["Horaire8"] ; ?></td>
                    <td><?php echo $_POST["Debit8"] ; ?></td>
                </tr>
                <tr>
                    <td><?php echo $_POST["Horaire9"] ; ?></td>
                    <td><?php echo $_POST["Debit9"] ; ?></td>
                    <td><?php echo $_POST["Horaire10"] ; ?></td>
                    <td><?php echo $_POST["Debit10"] ; ?></td>
                    <td><?php echo $_POST["Horaire11"] ; ?></td>
                    <td><?php echo $_POST["Debit11"] ; ?></td>
                    <td><?php echo $_POST["Horaire12"] ; ?></td>
                    <td><?php echo $_POST["Debit12"] ; ?></td>
                </tr>
                   <tr>
                    <td><?php echo $_POST["Horaire13"] ; ?></td>
                    <td><?php echo $_POST["Debit13"] ; ?></td>
                    <td><?php echo $_POST["Horaire14"] ; ?></td>
                    <td><?php echo $_POST["Debit14"] ; ?></td>
                    <td><?php echo $_POST["Horaire15"] ; ?></td>
                    <td><?php echo $_POST["Debit15"] ; ?></td>
                    <td><?php echo $_POST["Horaire16"] ; ?></td>
                    <td><?php echo $_POST["Debit16"] ; ?></td>
                </tr>
                
            </tbody>
        </table><br/>
        <h4>Histogrammes des débits suivant le Schémas basals date 1</h4>
            <img src="img/image.png" style="width: 700px;" />
        <br/><br/>
    </div>
    <div class="dec">
        <table class="table">
            <tbody>
                <tr>
                    <td colspan=8 style="text-align: center;"><strong>Shéma basals date 2</strong></td>
                </tr>
                <tr>
                    <td style="width:24%;" colspan=2><strong>Schéma 1</strong></td>
                    <td style="width:24%;" colspan=2><strong>Schéma 2</strong></td>
                    <td style="width:24%;" colspan=2><strong>Schéma 3</strong></td>
                    <td style="width:24%;" colspan=2><strong>Schéma 4</strong></td>
                </tr>
                <tr>
                    <td>Horaire</td>
                    <td>Débit</td>
                    <td>Horaire</td>
                    <td>Débit</td>
                    <td>Horaire</td>
                    <td>Débit</td>
                    <td>Horaire</td>
                    <td>Débit</td>
                </tr>
                  <tr>
                    <td><?php echo $_POST["Horaire21"] ; ?></td>
                    <td><?php echo $_POST["Debit21"] ; ?></td>
                    <td><?php echo $_POST["Horaire22"] ; ?></td>
                    <td><?php echo $_POST["Debit22"] ; ?></td>
                    <td><?php echo $_POST["Horaire23"] ; ?></td>
                    <td><?php echo $_POST["Debit23"] ; ?></td>
                    <td><?php echo $_POST["Horaire24"] ; ?></td>
                    <td><?php echo $_POST["Debit24"] ; ?></td>
                </tr>
                  <tr>
                    <td><?php echo $_POST["Horaire25"] ; ?></td>
                    <td><?php echo $_POST["Debit25"] ; ?></td>
                    <td><?php echo $_POST["Horaire26"] ; ?></td>
                    <td><?php echo $_POST["Debit26"] ; ?></td>
                    <td><?php echo $_POST["Horaire27"] ; ?></td>
                    <td><?php echo $_POST["Debit27"] ; ?></td>
                    <td><?php echo $_POST["Horaire28"] ; ?></td>
                    <td><?php echo $_POST["Debit28"] ; ?></td>
                </tr>
                  <tr>
                    <td><?php echo $_POST["Horaire29"] ; ?></td>
                    <td><?php echo $_POST["Debit29"] ; ?></td>
                    <td><?php echo $_POST["Horaire210"] ; ?></td>
                    <td><?php echo $_POST["Debit210"] ; ?></td>
                    <td><?php echo $_POST["Horaire211"] ; ?></td>
                    <td><?php echo $_POST["Debit211"] ; ?></td>
                    <td><?php echo $_POST["Horaire212"] ; ?></td>
                    <td><?php echo $_POST["Debit212"] ; ?></td>
                </tr>
                <tr>
                    <td><?php echo $_POST["Horaire213"] ; ?></td>
                    <td><?php echo $_POST["Debit213"] ; ?></td>
                    <td><?php echo $_POST["Horaire214"] ; ?></td>
                    <td><?php echo $_POST["Debit214"] ; ?></td>
                    <td><?php echo $_POST["Horaire215"] ; ?></td>
                    <td><?php echo $_POST["Debit215"] ; ?></td>
                    <td><?php echo $_POST["Horaire216"] ; ?></td>
                    <td><?php echo $_POST["Debit216"] ; ?></td>
                </tr>
            </tbody>
        </table><br/>
            
            <img src="img/image2.png" style="width: 700px;" />
        <br/><br/>
    </div>
    
    <div class="dec">
        <table class="table">
            <thead>
                <tr>
                    <th style="width:17.66666666666667%;"><strong>Valeur glycémique</strong></th>
                    <th style="width:14%;"><strong>Matin (UI)</strong></th>
                    <th style="width:17.66666666666667%;"><strong>Midi (UI)</strong></th>
                    <th style="width:18.66666666666667%;"><strong>Collation (UI)</strong></th>
                    <th style="width:19.6%;"><strong>Soir (UI)</strong></th>
                    <th>Autre (UI)</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?php echo $_POST["ValGlycemique1"] ; ?></td>
                    <td><?php echo $_POST["ValGlyMatin1"] ; ?></td>
                    <td><?php echo $_POST["ValGlyMid1"] ; ?></td>
                    <td><?php echo $_POST["ValGlyCollation1"] ; ?></td>
                    <td><?php echo $_POST["ValGlySoir1"] ; ?></td>
                    <td><?php echo $_POST["ValGlyAutre1"] ; ?></td>
                </tr>
                 <tr>
                    <td><?php echo $_POST["ValGlycemique2"] ; ?></td>
                    <td><?php echo $_POST["ValGlyMatin2"] ; ?></td>
                    <td><?php echo $_POST["ValGlyMid2"] ; ?></td>
                    <td><?php echo $_POST["ValGlyCollation2"] ; ?></td>
                    <td><?php echo $_POST["ValGlySoir2"] ; ?></td>
                    <td><?php echo $_POST["ValGlyAutre2"] ; ?></td>
                </tr>
                 <tr>
                    <td><?php echo $_POST["ValGlycemique3"] ; ?></td>
                    <td><?php echo $_POST["ValGlyMatin3"] ; ?></td>
                    <td><?php echo $_POST["ValGlyMid3"] ; ?></td>
                    <td><?php echo $_POST["ValGlyCollation3"] ; ?></td>
                    <td><?php echo $_POST["ValGlySoir3"] ; ?></td>
                    <td><?php echo $_POST["ValGlyAutre3"] ; ?></td>
                </tr>
                <tr>
                    <td><?php echo $_POST["ValGlycemique4"] ; ?></td>
                    <td><?php echo $_POST["ValGlyMatin4"] ; ?></td>
                    <td><?php echo $_POST["ValGlyMid4"] ; ?></td>
                    <td><?php echo $_POST["ValGlyCollation4"] ; ?></td>
                    <td><?php echo $_POST["ValGlySoir4"] ; ?></td>
                    <td><?php echo $_POST["ValGlyAutre4"] ; ?></td>
                </tr>
                <tr>
                    <td><?php echo $_POST["ValGlycemique5"] ; ?></td>
                    <td><?php echo $_POST["ValGlyMatin5"] ; ?></td>
                    <td><?php echo $_POST["ValGlyMid5"] ; ?></td>
                    <td><?php echo $_POST["ValGlyCollation5"] ; ?></td>
                    <td><?php echo $_POST["ValGlySoir5"] ; ?></td>
                    <td><?php echo $_POST["ValGlyAutre5"] ; ?></td>
                </tr>
                <tr>
                    <td><?php echo $_POST["ValGlycemique6"] ; ?></td>
                    <td><?php echo $_POST["ValGlyMatin6"] ; ?></td>
                    <td><?php echo $_POST["ValGlyMid6"] ; ?></td>
                    <td><?php echo $_POST["ValGlyCollation6"] ; ?></td>
                    <td><?php echo $_POST["ValGlySoir6"] ; ?></td>
                    <td><?php echo $_POST["ValGlyAutre6"] ; ?></td>
                </tr>
                <tr>
                    <td><?php echo $_POST["ValGlycemique7"] ; ?></td>
                    <td><?php echo $_POST["ValGlyMatin7"] ; ?></td>
                    <td><?php echo $_POST["ValGlyMid7"] ; ?></td>
                    <td><?php echo $_POST["ValGlyCollation7"] ; ?></td>
                    <td><?php echo $_POST["ValGlySoir7"] ; ?></td>
                    <td><?php echo $_POST["ValGlyAutre7"] ; ?></td>
                </tr>
            </tbody>
        </table><br/>
                <h4>Evolution chronologique en % desHémoglobines glyquées</h4>
               <img src="img/image3.png" style="width: 700px;" />
        <br/><br/>
    </div>
    <div class="dec">
        <strong>Synthèse/Commentaire : </strong> <?php echo $_POST["synthesecommentaire"] ; ?> <br/>
        <strong>Objectif glycémique pré prandial (g/l) :</strong><?php echo $_POST["objectifglycemiquepreprandial"] ; ?> <br/>
         <strong>Objectif glycémique post prandial (g/l) :</strong><?php echo $_POST["objectifglycemiquepostprandial"] ; ?> <br/>
        <h4><u>Hémoglobine glyquée</u></h4>
        <table class="table">
            <tbody>
                <tr>
                    <td style="width: 10%;">Dates</td>
                    <td style="width: 10%;"><?php echo $_POST["ValDatesHemGlyc1"] ; ?></td>
                    <td style="width: 10%;"><?php echo $_POST["ValDatesHemGlyc2"] ; ?></td>
                    <td style="width: 10%;"><?php echo $_POST["ValDatesHemGlyc3"] ; ?></td>
                    <td style="width: 10%;"><?php echo $_POST["ValDatesHemGlyc4"] ; ?></td>
                    <td style="width: 10%;"><?php echo $_POST["ValDatesHemGlyc5"] ; ?></td>
                    <td style="width: 9%;"><?php echo $_POST["ValDatesHemGlyc6"] ; ?></td>
                    <td style="width: 9%;"><?php echo $_POST["ValDatesHemGlyc7"] ; ?></td>
                    <td style="width: 9%;"><?php echo $_POST["ValDatesHemGlyc8"] ; ?></td>
                    <td style="width: 9%;"><?php echo $_POST["ValDatesHemGlyc9"] ; ?></td>
                </tr>
                <tr>
                    <td style="width: 10%;">HbA1c (%)</td>
                    <td style="width: 10%;"><?php echo $_POST["ValHbA1cHemGlyc1"] ; ?></td>
                    <td style="width: 10%;"><?php echo $_POST["ValHbA1cHemGlyc2"] ; ?></td>
                    <td style="width: 10%;"><?php echo $_POST["ValHbA1cHemGlyc3"] ; ?></td>
                    <td style="width: 10%;"><?php echo $_POST["ValHbA1cHemGlyc4"] ; ?></td>
                    <td style="width: 10%;"><?php echo $_POST["ValHbA1cHemGlyc5"] ; ?></td>
                    <td style="width: 9%;"><?php echo $_POST["ValHbA1cHemGlyc6"] ; ?></td>
                    <td style="width: 9%;"><?php echo $_POST["ValHbA1cHemGlyc7"] ; ?></td>
                    <td style="width: 9%;"><?php echo $_POST["ValHbA1cHemGlyc8"] ; ?></td>
                    <td style="width: 9%;"><?php echo $_POST["ValHbA1cHemGlyc9"] ; ?></td>
                </tr>
            </tbody>
        </table>
    </div>
      <div class="dec">
            <h4><u>HABITUDE DE VIE</u></h4>
            
                <strong>Activité physique (type/frequence) :</strong> <?php echo $_POST["activitephysique"] ; ?><br>
                <strong>Profession :</strong> <?php echo $_POST["profession"] ; ?> <br>
                <strong>Situation familiale :</strong> <?php echo $_POST["situationfamiliale"] ; ?> <br>
                <strong>Observations :</strong> <?php echo $_POST["observation"] ; ?><br>
                <strong>Etat cutané au point injection : </strong> <?php echo $_POST["etatcutane"] ; ?> <br>
                <strong>Hygiène alimentaire (habitude/régime): </strong> <?php echo $_POST["hygienealimentaire"] ; ?> <br>
                <strong>Stabilités des horraires :  </strong> <?php echo $_POST["stabilitehoraires"] ; ?> <br>
                <strong>Details: </strong> <?php echo $_POST["details"] ; ?> <br>
                <strong>Environnement social : </strong> <?php echo $_POST["environnement"] ; ?> <br>
                <strong>Choix des points d'injection : </strong> <?php echo $_POST["choixpoint"] ; ?> <br>
           
        </div>
        <div class="dec">
            <h4><u>INSULUNOTHERAPIE FONCTIONNELLE</u></h4>
            <table class="table " style="margin-left: 9px;">
                <thead>
                    <tr>
                        <th style="width:19%"></th>
                        <th style="width:19%"><strong>Horaires</strong></th>
                        <th style="width:19%"><strong>Ration Insuline/glucide</strong></th>
                        <th style="width:19%"><strong>Objectif glicémique</strong></th>
                        <th style="width:19%"><strong>Sensibilité à l'insuline</strong></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Matin</td>
                        <td><?php echo $_POST["horairematin"] ; ?></td>
                        <td><?php echo $_POST["rotationmatin"] ; ?></td>
                        <td><?php echo $_POST["objectifmatin"] ; ?></td>
                        <td><?php echo $_POST["sensibilitematin"] ; ?></td>
                    </tr>
                    <tr>
                        <td>Midi</td>
                        <td><?php echo $_POST["horairemidi"] ; ?></td>
                        <td><?php echo $_POST["rotationmidi"] ; ?></td>
                        <td><?php echo $_POST["objectifmidi"] ; ?></td>
                        <td><?php echo $_POST["sensibilitemidi"] ; ?></td>
                    </tr>
                    <tr>
                        <td>Collation</td>
                        <td><?php echo $_POST["horairecollation"] ; ?></td>
                        <td><?php echo $_POST["rotationcollation"] ; ?></td>
                        <td><?php echo $_POST["objectifcollation"] ; ?></td>
                        <td><?php echo $_POST["sensibilitecollation"] ; ?></td>
                    </tr>
                    <tr>
                        <td>Soir</td>
                        <td><?php echo $_POST["horairesoir"] ; ?></td>
                        <td><?php echo $_POST["rotationsoir"] ; ?></td>
                        <td><?php echo $_POST["objectifsoir"] ; ?></td>
                        <td><?php echo $_POST["sensibilitesoir"] ; ?></td>
                    </tr>

                </tbody>
            </table>
        </div>
        <div class="dec">
            <h4><u>HABITUDES ALIMENTAIRES</u></h4>
            <strong>SUIVI DE POIDS : </strong> <?php echo $_POST["regime"] ; ?> <br>
            <strong>Observation : </strong> <?php echo $_POST["observation2"] ; ?> <br>
            <strong>Survenue de compilations : </strong> <?php echo $_POST["survenue"] ; ?> <br>
            <strong>ATCD/ autre pathologies : </strong> <?php echo $_POST["atcd"] ; ?> <br>
            <strong>Traitement :</strong> <?php echo $_POST["traitement"] ; ?> <br><br/><br/>
            <table class="table " style="margin-left: 8px;">
                <tbody>
                    <tr>
                        <td style="width:10%">Date</td>
                        <td style="width:10%"><?php echo $_POST["date1"] ; ?></td>
                        <td style="width:10%"><?php echo $_POST["date2"] ; ?></td>
                        <td style="width:10%"><?php echo $_POST["date3"] ; ?></td>
                        <td style="width:10%"><?php echo $_POST["date4"] ; ?></td>
                        <td style="width:9%"><?php echo $_POST["date5"] ; ?></td>
                        <td style="width:9%"><?php echo $_POST["date6"] ; ?></td>
                        <td style="width:9%"><?php echo $_POST["date7"] ; ?></td>
                        <td style="width:9%"><?php echo $_POST["date8"] ; ?></td>
                        <td style="width:9%"><?php echo $_POST["date9"] ; ?></td>
                    </tr>
                    <tr>
                        <td>Taille</td>
                        <td><?php echo $_POST["taille1"] ; ?></td>
                        <td><?php echo $_POST["taille2"] ; ?></td>
                        <td><?php echo $_POST["taille3"] ; ?></td>
                        <td><?php echo $_POST["taille4"] ; ?></td>
                        <td><?php echo $_POST["taille5"] ; ?></td>
                        <td><?php echo $_POST["taille6"] ; ?></td>
                        <td><?php echo $_POST["taille7"] ; ?></td>
                        <td><?php echo $_POST["taille8"] ; ?></td>
                        <td><?php echo $_POST["taille9"] ; ?></td>
                    </tr>
                    <tr>
                        <td>Poids</td>
                        <td><?php echo $_POST["poids1"] ; ?></td>
                        <td><?php echo $_POST["poids2"] ; ?></td>
                        <td><?php echo $_POST["poids3"] ; ?></td>
                        <td><?php echo $_POST["poids4"] ; ?></td>
                        <td><?php echo $_POST["poids5"] ; ?></td>
                        <td><?php echo $_POST["poids6"] ; ?></td>
                        <td><?php echo $_POST["poids7"] ; ?></td>
                        <td><?php echo $_POST["poids8"] ; ?></td>
                        <td><?php echo $_POST["poids9"] ; ?></td>
                    </tr>
                    <tr>
                        <td>IMC</td>
                        <td><?php echo round($_POST["imc1"], 2) ; ?></td>
                        <td><?php echo round($_POST["imc2"], 2) ; ?></td>
                        <td><?php echo round($_POST["imc3"], 2) ; ?></td>
                        <td><?php echo round($_POST["imc4"], 2) ; ?></td>
                        <td><?php echo round($_POST["imc5"], 2) ; ?></td>
                        <td><?php echo round($_POST["imc6"], 2) ; ?></td>
                        <td><?php echo round($_POST["imc7"], 2) ; ?></td>
                        <td><?php echo round($_POST["imc8"], 2) ; ?></td>
                        <td><?php echo round($_POST["imc9"], 2) ; ?></td>
                    </tr>

                </tbody>
            </table>
        </div>
       

        <div class="dec">
         <font><h4><u>MANIPULATION DE LA POMPE</u></h4></font><br/>

            <table>
                    <thead>
                        <tr>
                            <td style="text-align: center; width: 15%;"><strong>Etapes</strong></td>
                            <td style="text-align: center; width: 10%;"><strong>Date</strong></td>
                            <td style="text-align: center; width: 9%;"><strong>Date</strong></td>
                            <td style="text-align: center; width: 9%;"><strong>Date</strong></td>
                            <td style="text-align: center; width: 9%;"><strong>Date</strong></td>
                            <td style="text-align: center; width: 15%;"><strong>Commentaire</strong></td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><strong>Installation de la pile</strong></td>
                            <td><?php echo $_POST["pmpdate1"] ; ?></td>
                            <td><?php echo $_POST["pmpdate2"] ; ?></td>
                            <td><?php echo $_POST["pmpdate3"] ; ?></td>
                            <td><?php echo $_POST["pmpdate4"] ; ?></td>
                            <td>
                                <?php echo $_POST["pmpcommentaire1"] ; ?>
                            </td>
                        </tr>
                        <tr>
                            <td><strong>Marche/Arrêt</strong></td>
                            <td><?php echo $_POST["pmpdate5"] ; ?></td>
                            <td><?php echo $_POST["pmpdate6"] ; ?></td>
                            <td><?php echo $_POST["pmpdate7"] ; ?></td>
                            <td><?php echo $_POST["pmpdate8"] ; ?></td>
                            <td>
                                <?php echo $_POST["pmpcommentaire2"] ; ?>
                            </td>
                        </tr>
                        <tr>
                            <td><strong>Réglage Date/heure</strong></td>
                            <td><?php echo $_POST["pmpdate9"] ; ?></td>
                            <td><?php echo $_POST["pmpdate10"] ; ?></td>
                            <td><?php echo $_POST["pmpdate11"] ; ?></td>
                            <td><?php echo $_POST["pmpdate12"] ; ?></td>
                            <td>
                                <?php echo $_POST["pmpcommentaire3"] ; ?>
                            </td>
                        </tr> 
                        <tr>
                            <td><strong>Réglage du bolus</strong></td>
                            <td><?php echo $_POST["pmpdate13"] ; ?></td>
                            <td><?php echo $_POST["pmpdate14"] ; ?></td>
                            <td><?php echo $_POST["pmpdate15"] ; ?></td>
                            <td><?php echo $_POST["pmpdate16"] ; ?></td>
                            <td>
                                <?php echo $_POST["pmpcommentaire4"] ; ?>
                            </td>
                        </tr>
                        <tr>
                            <td><strong>Arrêt du bolus en cours</strong></td>
                            <td><?php echo $_POST["pmpdate17"] ; ?></td>
                            <td><?php echo $_POST["pmpdate18"] ; ?></td>
                            <td><?php echo $_POST["pmpdate19"] ; ?></td>
                            <td><?php echo $_POST["pmpdate20"] ; ?></td>
                            <td>
                                <?php echo $_POST["pmpcommentaire5"] ; ?>
                            </td>
                        </tr>
                        <tr>
                            <td><strong>Historique des bolus</strong></td>
                            <td><?php echo $_POST["pmpdate21"] ; ?></td>
                            <td><?php echo $_POST["pmpdate22"] ; ?></td>
                            <td><?php echo $_POST["pmpdate23"] ; ?></td>
                            <td><?php echo $_POST["pmpdate24"] ; ?></td>
                            <td>
                                <?php echo $_POST["pmpcommentaire6"] ; ?>
                            </td>
                        </tr>
                        <tr>
                            <td><strong>Programmation du débit basal</strong></td>
                            <td><?php echo $_POST["pmpdate25"] ; ?></td>
                            <td><?php echo $_POST["pmpdate26"] ; ?></td>
                            <td><?php echo $_POST["pmpdate27"] ; ?></td>
                            <td><?php echo $_POST["pmpdate28"] ; ?></td>
                            <td>
                                <?php echo $_POST["pmpcommentaire7"] ; ?>
                            </td>
                        </tr>
                        <tr>
                            <td><strong>Consulter les débits de base</strong></td>
                            <td><?php echo $_POST["pmpdate29"] ; ?></td>
                            <td><?php echo $_POST["pmpdate291"] ; ?></td>
                            <td><?php echo $_POST["pmpdate292"] ; ?></td>
                            <td><?php echo $_POST["pmpdate293"] ; ?></td>
                            <td>
                                <?php echo $_POST["pmpcommentaire8"] ; ?>
                            </td>
                        </tr>
                        <tr>
                            <td><strong>Programmer et arrêter le débit de base temporaire</strong></td>
                            <td><?php echo $_POST["pmpdate294"] ; ?></td>
                            <td><?php echo $_POST["pmpdate295"] ; ?></td>
                            <td><?php echo $_POST["pmpdate296"] ; ?></td>
                            <td><?php echo $_POST["pmpdate297"] ; ?></td>
                            <td>
                                <?php echo $_POST["pmpcommentaire9"] ; ?>
                            </td>
                        </tr>
                    </tbody>
                </table>

                <div>
                    <h4><u>Autres : </u></h4>
                </div>

        <font><h4><u>ALARMES ET PRECAUTIONS</u></h4></font><br/>

            <table>
                    <thead>
                        <tr>
                            <td style="text-align: center; width: 25%;"><strong>Etapes</strong></td>
                            <td style="text-align: center; width: 14%;"><strong>Date</strong></td>
                            <td style="text-align: center; width: 14%;"><strong>Date</strong></td>
                            <td style="text-align: center; width: 14%;"><strong>Date</strong></td>
                            <td style="text-align: center; width: 14%;"><strong>Date</strong></td>
                            <td style="text-align: center; width: 15%;"><strong>Commentaire</strong></td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><strong>Reconnaitre une alarme</strong></td>
                            <td><?php echo $_POST["alarmedate1"] ; ?></td>
                            <td><?php echo $_POST["alarmedate2"] ; ?></td>
                            <td><?php echo $_POST["alarmedate3"] ; ?></td>
                            <td><?php echo $_POST["alarmedate4"] ; ?></td>
                            <td>
                                <?php echo $_POST["alarmecommentaire1"] ; ?>
                            </td>
                        </tr>
                        <tr>
                            <td><strong>Pile faible</strong></td>
                            <td><?php echo $_POST["alarmedate5"] ; ?></td>
                            <td><?php echo $_POST["alarmedate6"] ; ?></td>
                            <td><?php echo $_POST["alarmedate7"] ; ?></td>
                            <td><?php echo $_POST["alarmedate8"] ; ?></td>
                            <td>
                                <?php echo $_POST["alarmecommentaire2"] ; ?>
                            </td>
                        </tr>
                        <tr>
                            <td><strong>Pile épuisée</strong></td>
                            <td><?php echo $_POST["alarmedate9"] ; ?></td>
                            <td><?php echo $_POST["alarmedate10"] ; ?></td>
                            <td><?php echo $_POST["alarmedate11"] ; ?></td>
                            <td><?php echo $_POST["alarmedate12"] ; ?></td>
                            <td>
                                <?php echo $_POST["alarmecommentaire3"] ; ?>
                            </td>
                        </tr> 
                        <tr>
                            <td><strong>Réservoire vide</strong></td>
                            <td><?php echo $_POST["alarmedate13"] ; ?></td>
                            <td><?php echo $_POST["alarmedate14"] ; ?></td>
                            <td><?php echo $_POST["alarmedate15"] ; ?></td>
                            <td><?php echo $_POST["alarmedate16"] ; ?></td>
                            <td>
                                <?php echo $_POST["alarmecommentaire4"] ; ?>
                            </td>
                        </tr>
                        <tr>
                            <td><strong>Occlusion/pas d'injection</strong></td>
                            <td><?php echo $_POST["alarmedate17"] ; ?></td>
                            <td><?php echo $_POST["alarmedate18"] ; ?></td>
                            <td><?php echo $_POST["alarmedate19"] ; ?></td>
                            <td><?php echo $_POST["alarmedate20"] ; ?></td>
                            <td>
                                <?php echo $_POST["alarmecommentaire5"] ; ?>
                            </td>
                        </tr>
                        <tr>
                            <td><strong>Historique des alarmes</strong></td>
                            <td><?php echo $_POST["alarmedate21"] ; ?></td>
                            <td><?php echo $_POST["alarmedate22"] ; ?></td>
                            <td><?php echo $_POST["alarmedate23"] ; ?></td>
                            <td><?php echo $_POST["alarmedate24"] ; ?></td>
                            <td>
                                <?php echo $_POST["alarmecommentaire6"] ; ?>
                            </td>
                        </tr>
                        <tr>
                            <td><strong>Entretien de la pompe</strong></td>
                            <td><?php echo $_POST["alarmedate25"] ; ?></td>
                            <td><?php echo $_POST["alarmedate26"] ; ?></td>
                            <td><?php echo $_POST["alarmedate27"] ; ?></td>
                            <td><?php echo $_POST["alarmedate28"] ; ?></td>
                            <td>
                                <?php echo $_POST["alarmecommentaire7"] ; ?>
                            </td>
                        </tr>
                    </tbody>
                </table>

 <div class="dec">
                    <h4><u>Autres : </u></h4>
</div>
        <font><h4><u>MANIPULATIONS</u></h4></font><br/>

            <table>
                    <thead>
                        <tr>
                            <td style="text-align: center; width: 25%;"><strong>Etapes</strong></td>
                            <td style="text-align: center; width: 14%;"><strong>Date</strong></td>
                            <td style="text-align: center; width: 14%;"><strong>Date</strong></td>
                            <td style="text-align: center; width: 13%;"><strong>Date</strong></td>
                            <td style="text-align: center; width: 13%;"><strong>Date</strong></td>
                            <td style="text-align: center; width: 15%;"><strong>Commentaire</strong></td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><strong>Lavage des mains</strong></td>
                            <td><?php echo $_POST["manipdate1"] ; ?></td>
                            <td><?php echo $_POST["manipdate2"] ; ?></td>
                            <td><?php echo $_POST["manipdate3"] ; ?></td>
                            <td><?php echo $_POST["manipdate4"] ; ?></td>
                            <td>
                                <?php echo $_POST["manipcommentaire1"] ; ?>
                            </td>
                        </tr>
                        <tr>
                            <td><strong>Remplissage du réservoir</strong></td>
                            <td><?php echo $_POST["manipdate5"] ; ?></td>
                            <td><?php echo $_POST["manipdate6"] ; ?></td>
                            <td><?php echo $_POST["manipdate7"] ; ?></td>
                            <td><?php echo $_POST["manipdate8"] ; ?></td>
                            <td>
                                <?php echo $_POST["manipcommentaire2"] ; ?>
                            </td>
                        </tr>
                        <tr>
                            <td><strong>Connexion réservoir/tubulaire</strong></td>
                            <td><?php echo $_POST["manipdate9"] ; ?></td>
                            <td><?php echo $_POST["manipdate10"] ; ?></td>
                            <td><?php echo $_POST["manipdate11"] ; ?></td>
                            <td><?php echo $_POST["manipdate12"] ; ?></td>
                            <td>
                                <?php echo $_POST["manipcommentaire3"] ; ?>
                            </td>
                        </tr> 
                        <tr>
                            <td><strong>Retour du piston</strong></td>
                            <td><?php echo $_POST["manipdate13"] ; ?></td>
                            <td><?php echo $_POST["manipdate14"] ; ?></td>
                            <td><?php echo $_POST["manipdate15"] ; ?></td>
                            <td><?php echo $_POST["manipdate16"] ; ?></td>
                            <td>
                                <?php echo $_POST["manipcommentaire4"] ; ?>
                            </td>
                        </tr>
                        <tr>
                            <td><strong>Purge de la tubulure</strong></td>
                            <td><?php echo $_POST["manipdate17"] ; ?></td>
                            <td><?php echo $_POST["manipdate18"] ; ?></td>
                            <td><?php echo $_POST["manipdate19"] ; ?></td>
                            <td><?php echo $_POST["manipdate20"] ; ?></td>
                            <td>
                                <?php echo $_POST["manipcommentaire5"] ; ?>
                            </td>
                        </tr>
                    </tbody>
                </table>
        </div>
       

        <div class="dec">
    
        <h4><u>POSE DU CATHETER</u></h4><br/>

        <table>
                    
                        <tr>
                            <td style="text-align: center; "><strong>Etapes</strong></td>
                            <td style="text-align: center; width: 60px;"><strong>Date</strong></td>
                            <td style="text-align: center; width: 60px;"><strong>Date</strong></td>
                            <td style="text-align: center; width: 60px;"><strong>Date</strong></td>
                            <td style="text-align: center; width: 60px;"><strong>Date</strong></td>
                            <td style="text-align: center; width: 100px;"><strong>Commentaire</strong></td>
                        </tr>
                    
                    <tbody>
                        <tr>
                            <td><strong>Mise en place du cathéter dans l'Inserteur</strong></td>
                            <td><?php echo $_POST["cathdate1"] ; ?></td>
                            <td><?php echo $_POST["cathdate2"] ; ?></td>
                            <td><?php echo $_POST["cathdate3"] ; ?></td>
                            <td><?php echo $_POST["cathdate4"] ; ?></td>
                            <td><?php echo $_POST["cathcommentaire1"] ; ?></td>
                        </tr>
                        <tr>
                            <td><strong>Retrait de l'adhésif et de la protection de l'aiguille</strong></td>
                            <td><?php echo $_POST["cathdate5"] ; ?></td>
                            <td><?php echo $_POST["cathdate6"] ; ?></td>
                            <td><?php echo $_POST["cathdate7"] ; ?></td>
                            <td><?php echo $_POST["cathdate8"] ; ?></td>
                            <td><?php echo $_POST["cathcommentaire2"] ; ?></td>
                        </tr>
                        <tr>
                            <td><strong>Armement de l'Inserteur</strong></td>
                            <td><?php echo $_POST["cathdate9"] ; ?></td>
                            <td><?php echo $_POST["cathdate10"] ; ?></td>
                            <td><?php echo $_POST["cathdate11"] ; ?></td>
                            <td><?php echo $_POST["cathdate12"] ; ?></td>
                            <td><?php echo $_POST["cathcommentaire3"] ; ?></td>
                        </tr> 
                        <tr>
                            <td><strong>Choix du lieu d'injection</strong></td>
                            <td><?php echo $_POST["cathdate13"] ; ?></td>
                            <td><?php echo $_POST["cathdate14"] ; ?></td>
                            <td><?php echo $_POST["cathdate15"] ; ?></td>
                            <td><?php echo $_POST["cathdate16"] ; ?></td>
                            <td><?php echo $_POST["cathcommentaire4"] ; ?></td>
                        </tr>
                        <tr>
                            <td><strong>Désinfection cutanée</strong></td>
                            <td><?php echo $_POST["cathdate17"] ; ?></td>
                            <td><?php echo $_POST["cathdate18"] ; ?></td>
                            <td><?php echo $_POST["cathdate19"] ; ?></td>
                            <td><?php echo $_POST["cathdate20"] ; ?></td>
                            <td><?php echo $_POST["cathcommentaire5"] ; ?></td>
                        </tr>
                        <tr>
                            <td><strong>Déclenchement de l'Inserteur</strong></td>
                            <td><?php echo $_POST["cathdate21"] ; ?></td>
                            <td><?php echo $_POST["cathdate22"] ; ?></td>
                            <td><?php echo $_POST["cathdate23"] ; ?></td>
                            <td><?php echo $_POST["cathdate24"] ; ?></td>
                            <td><?php echo $_POST["cathcommentaire6"] ; ?></td>
                        </tr>
                        <tr>
                            <td><strong>Retrait de l'aiguille</strong></td>
                            <td><?php echo $_POST["cathdate25"] ; ?></td>
                            <td><?php echo $_POST["cathdate26"] ; ?></td>
                            <td><?php echo $_POST["cathdate27"] ; ?></td>
                            <td><?php echo $_POST["cathdate28"] ; ?></td>
                            <td><?php echo $_POST["cathcommentaire7"] ; ?></td>
                        </tr>
                        <tr>
                            <td><strong>Amorce de la canule</strong></td>
                            <td><?php echo $_POST["cathdate29"] ; ?></td>
                            <td><?php echo $_POST["cathdate211"] ; ?></td>
                            <td><?php echo $_POST["cathdate212"] ; ?></td>
                            <td><?php echo $_POST["cathdate213"] ; ?></td>
                            <td><?php echo $_POST["cathcommentaire8"] ; ?></td>
                        </tr>
                        <tr>
                            <td><strong>Contrôle glycémique 2h après la pose</strong></td>
                            <td><?php echo $_POST["cathdate214"] ; ?></td>
                            <td><?php echo $_POST["cathdate215"] ; ?></td>
                            <td><?php echo $_POST["cathdate216"] ; ?></td>
                            <td><?php echo $_POST["cathdate217"] ; ?></td>
                            <td><?php echo $_POST["cathcommentaire9"] ; ?></td>
                        </tr>
                        <tr>
                            <td><strong>Conservation de l'insuline</strong></td>
                            <td><?php echo $_POST["cathdate218"] ; ?></td>
                            <td><?php echo $_POST["cathdate219"] ; ?></td>
                            <td><?php echo $_POST["cathdate221"] ; ?></td>
                            <td><?php echo $_POST["cathdate222"] ; ?></td>
                            <td><?php echo $_POST["cathcommentaire10"] ; ?></td>
                        </tr>
                        <tr>
                            <td><strong>Fréquence de changement des cathéters</strong></td>
                            <td><?php echo $_POST["cathdate223"] ; ?></td>
                            <td><?php echo $_POST["cathdate224"] ; ?></td>
                            <td><?php echo $_POST["cathdate225"] ; ?></td>
                            <td><?php echo $_POST["cathdate226"] ; ?></td>
                            <td><?php echo $_POST["cathcommentaire11"] ; ?></td>
                        </tr>
                    </tbody>
                </table>
        

        
            <h4><u>CONNAISSANCE</u></h4><br/>

                <table>
                    
                        <tr>
                            <td style="text-align: center; width: 400px;"></td>
                            <td style="text-align: center; width: 80px;">OUI / NON</td>
                            <td style="text-align: center; width: 190px;"><strong>Observation</strong></td>                            
                        </tr>
                    
                    
                        <tr>
                            <td><strong>Numéro de l'astreinte médicale</strong></td>
                            <td><?php echo $_POST["connaissance1"] ; ?></td>
                            <td><?php echo $_POST["cnsobservation1"] ; ?></td>                            
                        </tr>
                       
                        <tr>
                            <td><strong>Numéro de l'astreinte BLCM</strong></td>
                            <td><?php echo $_POST["connaissance2"] ; ?></td>
                            <td><?php echo $_POST["cnsobservation2"] ; ?></td>
                        </tr>
                       
                        <tr> 
                            <td>
                                <strong>Kit de sécurité</strong><br/>
                                <strong>&nbsp;&nbsp;&nbsp;&nbsp; * &nbsp;&nbsp;&nbsp;Stylo d'insuline rapide : </strong><?php echo $_POST["perempdate1"] ; ?><br/>
                                <strong>&nbsp;&nbsp;&nbsp;&nbsp; * &nbsp;&nbsp;&nbsp;Stylo d'insuline lente : </strong><?php echo $_POST["perempdate2"] ; ?><br/>
                                <strong>&nbsp;&nbsp;&nbsp;&nbsp; * &nbsp;&nbsp;&nbsp;Aiguilles : </strong> <?php echo $_POST["connaissance5"] ; ?><br/>
                                <strong>Matériel de secours</strong>
                            </td>
                           
                            <td>
                                <br/>
                                    * <br/>
                                    * <br/>
                                    *   
                            </td>
                            
                            <td>
                                <strong>Date de péremption</strong> : <br/>
                                    * <br/>
                                    *
                            </td>
                        
                        </tr> 
                        <tr>
                            <td><strong>Schéma de remplacement</strong></td>
                            <td><?php echo $_POST["connaissance6"] ; ?></td>
                            <td><?php echo $_POST["cnsobservation3"] ; ?></td>
                        </tr>
                        <tr>
                            <td><strong>CAT en cas d'hypoglycémie</strong></td>
                            <td><?php echo $_POST["connaissance7"] ; ?></td>
                            <td><?php echo $_POST["cnsobservation4"] ; ?></td>
                        </tr>
                        <tr>
                            <td><strong>Maitrise du ressucrage</strong></td>
                            <td><?php echo $_POST["connaissance8"] ; ?></td>
                            <td><?php echo $_POST["cnsobservation5"] ; ?></td>
                        </tr>                        
                        <tr>
                            <td><strong>CAT en cas d'hyperglycémie</strong></td>
                            <td><?php echo $_POST["connaissance9"] ; ?></td>
                            <td><?php echo $_POST["cnsobservation6"] ; ?></td>
                        </tr>
                        <tr>
                            <td><strong>Maitrise de l'acceptation du bolus de correction</strong></td>
                            <td><?php echo $_POST["connaissance10"] ; ?></td>
                            <td><?php echo $_POST["cnsobservation7"] ; ?></td>
                        </tr>
                        <tr>
                            <td><strong>CAT en cas d'accétonémie</strong></td>
                            <td><?php echo $_POST["connaissance11"] ; ?></td>
                            <td><?php echo $_POST["cnsobservation8"] ; ?></td>
                        </tr>                     
                    
                </table>
        

        
            <h4><u>AUTO SURVEILLANCE GLYCEMIQUE</u></h4><br/>
                <table>
                    
                        <tr>
                            <td style="width: 400px;"></td>
                            <td style="text-align: center; width: 130px;"><strong>Détails</strong></td>
                            <td style="text-align: center; width: 140px;"><strong>Observations</strong></td>                            
                        </tr>
                    
                    <tbody>                      
                        <tr>
                            <td><strong>Nom du dispositif ASG principal et des bandelettes</strong></td>
                            <td><?php echo $_POST["asgdetail1"] ; ?></td>
                            <td><?php echo $_POST["asgobservation1"] ; ?></td>
                        </tr>
                        <tr>
                            <td><strong>Nom du dispositif ASG secondaire éventuel et des bandelettes</strong></td>
                            <td><?php echo $_POST["asgdetail2"] ; ?></td>
                            <td><?php echo $_POST["asgobservation2"] ; ?></td>
                        </tr>
                        <tr>
                            <td><strong>Nom du dispositif auto piqueur</strong></td>
                            <td><?php echo $_POST["asgdetail3"] ; ?></td>
                            <td><?php echo $_POST["asgobservation3"] ; ?></td>
                        </tr>                        
                        <tr>
                            <td><strong>Etat cutané des doigts/respect de "la pince"</strong></td>
                            <td><?php echo $_POST["asgdetail4"] ; ?></td>
                            <td><?php echo $_POST["asgobservation4"] ; ?></td>
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
                            <td><?php echo $_POST["asgfrequence1"] ; ?></td> 
                            <td><?php echo $_POST["asgfrequence2"] ; ?></td>
                        </tr>
                        <tr>
                            <td><strong>Connaissance et respect des mesures d'hygiène relatives l'ASG</strong></td>
                            <td><?php echo $_POST["asgconnaissance1"] ; ?></td>
                            <td><?php echo $_POST["asgconnaissance2"] ; ?></td>
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
    require_once('html2pdf-4.4.0/html2pdf.class.php');
    try
    {
        $html2pdf = new HTML2PDF('P', 'A4', 'fr');
        $html2pdf->setDefaultFont('Arial');
        $html2pdf->writeHTML($content, isset($_GET['vuehtml']));
        $html2pdf->Output('pdf/content.pdf');
    }
    catch(HTML2PDF_exception $e) {
        echo $e;
        exit;
    }
?>