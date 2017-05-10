<?php
session_start();

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
// get the HTML

$nomresp = (isset($_POST["nomresp"])) ? $_POST["nomresp"] : "";
$prenomresp = (isset($_POST["prenomresp"])) ? $_POST["prenomresp"] : "";
$mobileresp = (isset($_POST["mobileresp"])) ? $_POST["mobileresp"] : "";
$coordonnee = (isset($_POST["coordonnee"])) ? $_POST["coordonnee"] : "";
$nompatient = (isset($_POST["nompatient"])) ? $_POST["nompatient"] : "";
$prenompatient = (isset($_POST["prenompatient"])) ? $_POST["prenompatient"] : "";
$datenaissance = (isset($_POST["datenaissance"])) ? $_POST["datenaissance"] : "";
$agepatient = (isset($_POST["agepatient"])) ? $_POST["agepatient"] : "";
$telpatient = (isset($_POST["telpatient"])) ? $_POST["telpatient"] : "";
$mobilepatient = (isset($_POST["mobilepatient"])) ? $_POST["mobilepatient"] : "";
$adressepatient = (isset($_POST["adressepatient"])) ? $_POST["adressepatient"] : "";
$codepostalpatient = (isset($_POST["codepostalpatient"])) ? $_POST["codepostalpatient"] : "";
$villepatient = (isset($_POST["villepatient"])) ? $_POST["villepatient"] : "";
$etablissementprescripteur = (isset($_POST["etablissementprescripteur"])) ? $_POST["etablissementprescripteur"] : "";
$serviceep = (isset($_POST["serviceep"])) ? $_POST["serviceep"] : "";
$diabetologueprescripteur = (isset($_POST["diabetologueprescripteur"])) ? $_POST["diabetologueprescripteur"] : "";
$teldp = (isset($_POST["teldp"])) ? $_POST["teldp"] : "";
$mobiledp = (isset($_POST["mobiledp"])) ? $_POST["mobiledp"] : "";
$villedp = (isset($_POST["villedp"])) ? $_POST["villedp"] : "";
$maildp = (isset($_POST["maildp"])) ? $_POST["maildp"] : "";
$diabetologueliberal = (isset($_POST["diabetologueliberal"])) ? $_POST["diabetologueliberal"] : "";
$teldl = (isset($_POST["teldl"])) ? $_POST["teldl"] : "";
$mobiledl = (isset($_POST["mobiledl"])) ? $_POST["mobiledl"] : "";
$villedl = (isset($_POST["villedl"])) ? $_POST["villedl"] : "";
$maildl = (isset($_POST["maildl"])) ? $_POST["maildl"] : "";
$medecintraitant = (isset($_POST["medecintraitant"])) ? $_POST["medecintraitant"] : "";
$telmt = (isset($_POST["telmt"])) ? $_POST["telmt"] : "";
$mobilemt = (isset($_POST["mobilemt"])) ? $_POST["mobilemt"] : "";
$villemt = (isset($_POST["villemt"])) ? $_POST["villemt"] : "";
$mailmt = (isset($_POST["mailmt"])) ? $_POST["mailmt"] : "";
$dieteticienne = (isset($_POST["dieteticienne"])) ? $_POST["dieteticienne"] : "";
$teld = (isset($_POST["teld"])) ? $_POST["teld"] : "";
$mobiled = (isset($_POST["mobiled"])) ? $_POST["mobiled"] : "";
$villed = (isset($_POST["villed"])) ? $_POST["villed"] : "";
$maild = (isset($_POST["maild"])) ? $_POST["maild"] : "";
$membrereseau = (isset($_POST["membrereseau"])) ? $_POST["membrereseau"] : "";
$nomreseau = (isset($_POST["nomreseau"])) ? $_POST["nomreseau"] : "";
$Pompe = (isset($_POST["Pompe"])) ? $_POST["Pompe"] : "";
$dateinstallation = (isset($_POST["dateinstallation"])) ? $_POST["dateinstallation"] : "";

$catheter = (isset($_POST["catheter"])) ? $_POST["catheter"] : "";
$modele = (isset($_POST["modele"])) ? $_POST["modele"] : "";
$longueurcanule = (isset($_POST["longueurcanule"])) ? $_POST["longueurcanule"] : "";
$longueurtubulure = (isset($_POST["longueurtubulure"])) ? $_POST["longueurtubulure"] : "";

$catheter2 = (isset($_POST["catheter2"])) ? $_POST["catheter2"] : "";
$modele2 = (isset($_POST["modele2"])) ? $_POST["modele2"] : "";
$longueurcanule2 = (isset($_POST["longueurcanule2"])) ? $_POST["longueurcanule2"] : "";
$longueurtubulure2 = (isset($_POST["longueurtubulure2"])) ? $_POST["longueurtubulure2"] : "";

$inserteur = (isset($_POST["inserteur"])) ? $_POST["inserteur"] : "";
$reservoir = (isset($_POST["reservoir"])) ? $_POST["reservoir"] : "";
$spp = (isset($_POST["spp"])) ? $_POST["spp"] : "";
$observation = (isset($_POST["observation"])) ? $_POST["observation"] : "";
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
$Horaire5 = (isset($_POST["Horaire5"])) ? $_POST["Horaire5"] : "";
$Horaire6 = (isset($_POST["Horaire6"])) ? $_POST["Horaire6"] : "";
$Debit5 = (isset($_POST["Debit5"])) ? $_POST["Debit5"] : "";
$Horaire7 = (isset($_POST["Horaire7"])) ? $_POST["Horaire7"] : "";
$Horaire8 = (isset($_POST["Horaire8"])) ? $_POST["Horaire8"] : "";
$Debit6 = (isset($_POST["Debit6"])) ? $_POST["Debit6"] : "";
$Horaire9 = (isset($_POST["Horaire9"])) ? $_POST["Horaire9"] : "";
$Horaire10 = (isset($_POST["Horaire10"])) ? $_POST["Horaire10"] : "";
$Debit7 = (isset($_POST["Debit7"])) ? $_POST["Debit7"] : "";
$Horaire11 = (isset($_POST["Horaire11"])) ? $_POST["Horaire11"] : "";
$Horaire12 = (isset($_POST["Horaire12"])) ? $_POST["Horaire12"] : "";
$Debit8 = (isset($_POST["Debit8"])) ? $_POST["Debit8"] : "";
$Horaire13 = (isset($_POST["Horaire13"])) ? $_POST["Horaire13"] : "";
$Horaire14 = (isset($_POST["Horaire14"])) ? $_POST["Horaire14"] : "";
$Debit9 = (isset($_POST["Debit9"])) ? $_POST["Debit9"] : "";
$Horaire15 = (isset($_POST["Horaire15"])) ? $_POST["Horaire15"] : "";
$Horaire16 = (isset($_POST["Horaire16"])) ? $_POST["Horaire16"] : "";
$Debit10 = (isset($_POST["Debit10"])) ? $_POST["Debit10"] : "";
$Horaire17 = (isset($_POST["Horaire17"])) ? $_POST["Horaire17"] : "";
$Horaire18 = (isset($_POST["Horaire18"])) ? $_POST["Horaire18"] : "";
$Debit11 = (isset($_POST["Debit11"])) ? $_POST["Debit11"] : "";
$Horaire19 = (isset($_POST["Horaire19"])) ? $_POST["Horaire19"] : "";
$Horaire20 = (isset($_POST["Horaire20"])) ? $_POST["Horaire20"] : "";
$Debit12 = (isset($_POST["Debit12"])) ? $_POST["Debit12"] : "";
$Horaire21 = (isset($_POST["Horaire21"])) ? $_POST["Horaire21"] : "";
$Horaire22 = (isset($_POST["Horaire22"])) ? $_POST["Horaire22"] : "";
$Debit13 = (isset($_POST["Debit13"])) ? $_POST["Debit13"] : "";
$Horaire23 = (isset($_POST["Horaire23"])) ? $_POST["Horaire23"] : "";
$Horaire24 = (isset($_POST["Horaire24"])) ? $_POST["Horaire24"] : "";
$Debit14 = (isset($_POST["Debit14"])) ? $_POST["Debit14"] : "";
$Horaire25 = (isset($_POST["Horaire25"])) ? $_POST["Horaire25"] : "";
$Horaire26 = (isset($_POST["Horaire26"])) ? $_POST["Horaire26"] : "";
$Debit15 = (isset($_POST["Debit15"])) ? $_POST["Debit15"] : "";
$Horaire27 = (isset($_POST["Horaire27"])) ? $_POST["Horaire27"] : "";
$Horaire28 = (isset($_POST["Horaire28"])) ? $_POST["Horaire28"] : "";
$Debit16 = (isset($_POST["Debit16"])) ? $_POST["Debit16"] : "";
$Horaire29 = (isset($_POST["Horaire29"])) ? $_POST["Horaire29"] : "";
$Horaire30 = (isset($_POST["Horaire30"])) ? $_POST["Horaire30"] : "";
$Debit17 = (isset($_POST["Debit17"])) ? $_POST["Debit17"] : "";
$Horaire31 = (isset($_POST["Horaire31"])) ? $_POST["Horaire31"] : "";
$Horaire32 = (isset($_POST["Horaire32"])) ? $_POST["Horaire32"] : "";
$Debit18 = (isset($_POST["Debit18"])) ? $_POST["Debit18"] : "";
$Horaire33 = (isset($_POST["Horaire33"])) ? $_POST["Horaire33"] : "";
$Horaire34 = (isset($_POST["Horaire34"])) ? $_POST["Horaire34"] : "";
$Debit19 = (isset($_POST["Debit19"])) ? $_POST["Debit19"] : "";
$Horaire35 = (isset($_POST["Horaire35"])) ? $_POST["Horaire35"] : "";
$Horaire36 = (isset($_POST["Horaire36"])) ? $_POST["Horaire36"] : "";
$Debit20 = (isset($_POST["Debit20"])) ? $_POST["Debit20"] : "";
$Horaire37 = (isset($_POST["Horaire37"])) ? $_POST["Horaire37"] : "";
$Horaire38 = (isset($_POST["Horaire38"])) ? $_POST["Horaire38"] : "";
$Debit21 = (isset($_POST["Debit21"])) ? $_POST["Debit21"] : "";
$Horaire39 = (isset($_POST["Horaire39"])) ? $_POST["Horaire39"] : "";
$Horaire40 = (isset($_POST["Horaire40"])) ? $_POST["Horaire40"] : "";
$Debit22 = (isset($_POST["Debit22"])) ? $_POST["Debit22"] : "";
$Horaire41 = (isset($_POST["Horaire41"])) ? $_POST["Horaire41"] : "";
$Horaire42 = (isset($_POST["Horaire42"])) ? $_POST["Horaire42"] : "";
$Debit23 = (isset($_POST["Debit23"])) ? $_POST["Debit23"] : "";
$Horaire43 = (isset($_POST["Horaire43"])) ? $_POST["Horaire43"] : "";
$Horaire44 = (isset($_POST["Horaire44"])) ? $_POST["Horaire44"] : "";
$Debit24 = (isset($_POST["Debit24"])) ? $_POST["Debit24"] : "";
$Horaire45 = (isset($_POST["Horaire45"])) ? $_POST["Horaire45"] : "";
$Horaire46 = (isset($_POST["Horaire46"])) ? $_POST["Horaire46"] : "";
$Debit25 = (isset($_POST["Debit25"])) ? $_POST["Debit25"] : "";
$Horaire47 = (isset($_POST["Horaire47"])) ? $_POST["Horaire47"] : "";
$Horaire48 = (isset($_POST["Horaire48"])) ? $_POST["Horaire48"] : "";
$Debit26 = (isset($_POST["Debit26"])) ? $_POST["Debit26"] : "";
$Horaire49 = (isset($_POST["Horaire49"])) ? $_POST["Horaire49"] : "";
$Horaire50 = (isset($_POST["Horaire50"])) ? $_POST["Horaire50"] : "";
$Debit27 = (isset($_POST["Debit27"])) ? $_POST["Debit27"] : "";
$Horaire51 = (isset($_POST["Horaire51"])) ? $_POST["Horaire51"] : "";
$Horaire52 = (isset($_POST["Horaire52"])) ? $_POST["Horaire52"] : "";
$Debit28 = (isset($_POST["Debit28"])) ? $_POST["Debit28"] : "";
$Horaire53 = (isset($_POST["Horaire53"])) ? $_POST["Horaire53"] : "";
$Horaire54 = (isset($_POST["Horaire54"])) ? $_POST["Horaire54"] : "";
$Debit29 = (isset($_POST["Debit29"])) ? $_POST["Debit29"] : "";
$Horaire55 = (isset($_POST["Horaire55"])) ? $_POST["Horaire55"] : "";
$Horaire56 = (isset($_POST["Horaire56"])) ? $_POST["Horaire56"] : "";
$Debit30 = (isset($_POST["Debit30"])) ? $_POST["Debit30"] : "";
$Horaire57 = (isset($_POST["Horaire57"])) ? $_POST["Horaire57"] : "";
$Horaire58 = (isset($_POST["Horaire58"])) ? $_POST["Horaire58"] : "";
$Debit31 = (isset($_POST["Debit31"])) ? $_POST["Debit31"] : "";
$Horaire59 = (isset($_POST["Horaire59"])) ? $_POST["Horaire59"] : "";
$Horaire60 = (isset($_POST["Horaire60"])) ? $_POST["Horaire60"] : "";
$Debit32 = (isset($_POST["Debit32"])) ? $_POST["Debit32"] : "";
$Horaire61 = (isset($_POST["Horaire61"])) ? $_POST["Horaire61"] : "";
$Horaire62 = (isset($_POST["Horaire62"])) ? $_POST["Horaire62"] : "";
$Debit33 = (isset($_POST["Debit33"])) ? $_POST["Debit33"] : "";
$Horaire63 = (isset($_POST["Horaire63"])) ? $_POST["Horaire63"] : "";
$Horaire64 = (isset($_POST["Horaire64"])) ? $_POST["Horaire64"] : "";
$Debit34 = (isset($_POST["Debit34"])) ? $_POST["Debit34"] : "";
$Horaire65 = (isset($_POST["Horaire65"])) ? $_POST["Horaire65"] : "";
$Horaire66 = (isset($_POST["Horaire66"])) ? $_POST["Horaire66"] : "";
$Debit35 = (isset($_POST["Debit35"])) ? $_POST["Debit35"] : "";
$Horaire67 = (isset($_POST["Horaire67"])) ? $_POST["Horaire67"] : "";
$Horaire68 = (isset($_POST["Horaire68"])) ? $_POST["Horaire68"] : "";
$Debit36 = (isset($_POST["Debit36"])) ? $_POST["Debit36"] : "";
$Horaire69 = (isset($_POST["Horaire69"])) ? $_POST["Horaire69"] : "";
$Horaire70 = (isset($_POST["Horaire70"])) ? $_POST["Horaire70"] : "";
$Debit37 = (isset($_POST["Debit37"])) ? $_POST["Debit37"] : "";
$Horaire71 = (isset($_POST["Horaire71"])) ? $_POST["Horaire71"] : "";
$Horaire72 = (isset($_POST["Horaire72"])) ? $_POST["Horaire72"] : "";
$Debit38 = (isset($_POST["Debit38"])) ? $_POST["Debit38"] : "";
$Horaire73 = (isset($_POST["Horaire73"])) ? $_POST["Horaire73"] : "";
$Horaire74 = (isset($_POST["Horaire74"])) ? $_POST["Horaire74"] : "";
$Debit39 = (isset($_POST["Debit39"])) ? $_POST["Debit39"] : "";
$Horaire75 = (isset($_POST["Horaire75"])) ? $_POST["Horaire75"] : "";
$Horaire76 = (isset($_POST["Horaire76"])) ? $_POST["Horaire76"] : "";
$Debit40 = (isset($_POST["Debit40"])) ? $_POST["Debit40"] : "";
$Horaire77 = (isset($_POST["Horaire77"])) ? $_POST["Horaire77"] : "";
$Horaire78 = (isset($_POST["Horaire78"])) ? $_POST["Horaire78"] : "";
$Debit41 = (isset($_POST["Debit41"])) ? $_POST["Debit41"] : "";
$Horaire79 = (isset($_POST["Horaire79"])) ? $_POST["Horaire79"] : "";
$Horaire80 = (isset($_POST["Horaire80"])) ? $_POST["Horaire80"] : "";
$Debit42 = (isset($_POST["Debit42"])) ? $_POST["Debit42"] : "";
$Horaire81 = (isset($_POST["Horaire81"])) ? $_POST["Horaire81"] : "";
$Horaire82 = (isset($_POST["Horaire82"])) ? $_POST["Horaire82"] : "";
$Debit43 = (isset($_POST["Debit43"])) ? $_POST["Debit43"] : "";
$Horaire83 = (isset($_POST["Horaire83"])) ? $_POST["Horaire83"] : "";
$Horaire84 = (isset($_POST["Horaire84"])) ? $_POST["Horaire84"] : "";
$Debit44 = (isset($_POST["Debit44"])) ? $_POST["Debit44"] : "";
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
$Horaire_5 = (isset($_POST["Horaire_5"])) ? $_POST["Horaire_5"] : "";
$Horaire_6 = (isset($_POST["Horaire_6"])) ? $_POST["Horaire_6"] : "";
$Debit_5 = (isset($_POST["Debit_5"])) ? $_POST["Debit_5"] : "";
$Horaire_8 = (isset($_POST["Horaire_8"])) ? $_POST["Horaire_8"] : "";
$Debit_6 = (isset($_POST["Debit_6"])) ? $_POST["Debit_6"] : "";
$Horaire_9 = (isset($_POST["Horaire_9"])) ? $_POST["Horaire_9"] : "";
$Horaire_10 = (isset($_POST["Horaire_10"])) ? $_POST["Horaire_10"] : "";
$Debit_7 = (isset($_POST["Debit_7"])) ? $_POST["Debit_7"] : "";
$Horaire_11 = (isset($_POST["Horaire_11"])) ? $_POST["Horaire_11"] : "";
$Horaire_12 = (isset($_POST["Horaire_12"])) ? $_POST["Horaire_12"] : "";
$Debit_8 = (isset($_POST["Debit_8"])) ? $_POST["Debit_8"] : "";
$Horaire_13 = (isset($_POST["Horaire_13"])) ? $_POST["Horaire_13"] : "";
$Horaire_14 = (isset($_POST["Horaire_14"])) ? $_POST["Horaire_14"] : "";
$Debit_9 = (isset($_POST["Debit_9"])) ? $_POST["Debit_9"] : "";
$Horaire_16 = (isset($_POST["Horaire_16"])) ? $_POST["Horaire_16"] : "";
$Debit_10 = (isset($_POST["Debit_10"])) ? $_POST["Debit_10"] : "";
$Horaire_17 = (isset($_POST["Horaire_17"])) ? $_POST["Horaire_17"] : "";
$Horaire_18 = (isset($_POST["Horaire_18"])) ? $_POST["Horaire_18"] : "";
$Debit_11 = (isset($_POST["Debit_11"])) ? $_POST["Debit_11"] : "";
$Horaire_19 = (isset($_POST["Horaire_19"])) ? $_POST["Horaire_19"] : "";
$Horaire_20 = (isset($_POST["Horaire_20"])) ? $_POST["Horaire_20"] : "";
$Debit_12 = (isset($_POST["Debit_12"])) ? $_POST["Debit_12"] : "";
$Horaire_21 = (isset($_POST["Horaire_21"])) ? $_POST["Horaire_21"] : "";
$Horaire_22 = (isset($_POST["Horaire_22"])) ? $_POST["Horaire_22"] : "";
$Debit_13 = (isset($_POST["Debit_13"])) ? $_POST["Debit_13"] : "";
$Horaire_24 = (isset($_POST["Horaire_24"])) ? $_POST["Horaire_24"] : "";
$Debit_14 = (isset($_POST["Debit_14"])) ? $_POST["Debit_14"] : "";
$Horaire_25 = (isset($_POST["Horaire_25"])) ? $_POST["Horaire_25"] : "";
$Horaire_26 = (isset($_POST["Horaire_26"])) ? $_POST["Horaire_26"] : "";
$Debit_15 = (isset($_POST["Debit_15"])) ? $_POST["Debit_15"] : "";
$Horaire_27 = (isset($_POST["Horaire_27"])) ? $_POST["Horaire_27"] : "";
$Horaire_28 = (isset($_POST["Horaire_28"])) ? $_POST["Horaire_28"] : "";
$Debit_16 = (isset($_POST["Debit_16"])) ? $_POST["Debit_16"] : "";
$Horaire_29 = (isset($_POST["Horaire_29"])) ? $_POST["Horaire_29"] : "";
$Horaire_30 = (isset($_POST["Horaire_30"])) ? $_POST["Horaire_30"] : "";
$Debit_17 = (isset($_POST["Debit_17"])) ? $_POST["Debit_17"] : "";
$Horaire_32 = (isset($_POST["Horaire_32"])) ? $_POST["Horaire_32"] : "";
$Debit_18 = (isset($_POST["Debit_18"])) ? $_POST["Debit_18"] : "";
$Horaire_33 = (isset($_POST["Horaire_33"])) ? $_POST["Horaire_33"] : "";
$Horaire_34 = (isset($_POST["Horaire_34"])) ? $_POST["Horaire_34"] : "";
$Debit_19 = (isset($_POST["Debit_19"])) ? $_POST["Debit_19"] : "";
$Horaire_35 = (isset($_POST["Horaire_35"])) ? $_POST["Horaire_35"] : "";
$Horaire_36 = (isset($_POST["Horaire_36"])) ? $_POST["Horaire_36"] : "";
$Debit_20 = (isset($_POST["Debit_20"])) ? $_POST["Debit_20"] : "";
$Horaire_37 = (isset($_POST["Horaire_37"])) ? $_POST["Horaire_37"] : "";
$Horaire_38 = (isset($_POST["Horaire_38"])) ? $_POST["Horaire_38"] : "";
$Debit_21 = (isset($_POST["Debit_21"])) ? $_POST["Debit_21"] : "";
$Horaire_40 = (isset($_POST["Horaire_40"])) ? $_POST["Horaire_40"] : "";
$Debit_22 = (isset($_POST["Debit_22"])) ? $_POST["Debit_22"] : "";
$Horaire_41 = (isset($_POST["Horaire_41"])) ? $_POST["Horaire_41"] : "";
$Horaire_42 = (isset($_POST["Horaire_42"])) ? $_POST["Horaire_42"] : "";
$Debit_23 = (isset($_POST["Debit_23"])) ? $_POST["Debit_23"] : "";
$Horaire_43 = (isset($_POST["Horaire_43"])) ? $_POST["Horaire_43"] : "";
$Horaire_44 = (isset($_POST["Horaire_44"])) ? $_POST["Horaire_44"] : "";
$Debit_24 = (isset($_POST["Debit_24"])) ? $_POST["Debit_24"] : "";
$Horaire_45 = (isset($_POST["Horaire_45"])) ? $_POST["Horaire_45"] : "";
$Horaire_46 = (isset($_POST["Horaire_46"])) ? $_POST["Horaire_46"] : "";
$Debit_25 = (isset($_POST["Debit_25"])) ? $_POST["Debit_25"] : "";
$Horaire_48 = (isset($_POST["Horaire_48"])) ? $_POST["Horaire_48"] : "";
$Debit_26 = (isset($_POST["Debit_26"])) ? $_POST["Debit_26"] : "";
$Horaire_49 = (isset($_POST["Horaire_49"])) ? $_POST["Horaire_49"] : "";
$Horaire_50 = (isset($_POST["Horaire_50"])) ? $_POST["Horaire_50"] : "";
$Debit_27 = (isset($_POST["Debit_27"])) ? $_POST["Debit_27"] : "";
$Horaire_51 = (isset($_POST["Horaire_51"])) ? $_POST["Horaire_51"] : "";
$Horaire_52 = (isset($_POST["Horaire_52"])) ? $_POST["Horaire_52"] : "";
$Debit_28 = (isset($_POST["Debit_28"])) ? $_POST["Debit_28"] : "";
$Horaire_53 = (isset($_POST["Horaire_53"])) ? $_POST["Horaire_53"] : "";
$Horaire_54 = (isset($_POST["Horaire_54"])) ? $_POST["Horaire_54"] : "";
$Debit_29 = (isset($_POST["Debit_29"])) ? $_POST["Debit_29"] : "";
$Horaire_56 = (isset($_POST["Horaire_56"])) ? $_POST["Horaire_56"] : "";
$Debit_30 = (isset($_POST["Debit_30"])) ? $_POST["Debit_30"] : "";
$Horaire_57 = (isset($_POST["Horaire_57"])) ? $_POST["Horaire_57"] : "";
$Horaire_58 = (isset($_POST["Horaire_58"])) ? $_POST["Horaire_58"] : "";
$Debit_31 = (isset($_POST["Debit_31"])) ? $_POST["Debit_31"] : "";
$Horaire_59 = (isset($_POST["Horaire_59"])) ? $_POST["Horaire_59"] : "";
$Horaire_60 = (isset($_POST["Horaire_60"])) ? $_POST["Horaire_60"] : "";
$Debit_32 = (isset($_POST["Debit_32"])) ? $_POST["Debit_32"] : "";
$Horaire_61 = (isset($_POST["Horaire_61"])) ? $_POST["Horaire_61"] : "";
$Horaire_62 = (isset($_POST["Horaire_62"])) ? $_POST["Horaire_62"] : "";
$Debit_33 = (isset($_POST["Debit_33"])) ? $_POST["Debit_33"] : "";
$Horaire_64 = (isset($_POST["Horaire_64"])) ? $_POST["Horaire_64"] : "";
$Debit_34 = (isset($_POST["Debit_34"])) ? $_POST["Debit_34"] : "";
$Horaire_65 = (isset($_POST["Horaire_65"])) ? $_POST["Horaire_65"] : "";
$Horaire_66 = (isset($_POST["Horaire_66"])) ? $_POST["Horaire_66"] : "";
$Debit_35 = (isset($_POST["Debit_35"])) ? $_POST["Debit_35"] : "";
$Horaire_67 = (isset($_POST["Horaire_67"])) ? $_POST["Horaire_67"] : "";
$Horaire_68 = (isset($_POST["Horaire_68"])) ? $_POST["Horaire_68"] : "";
$Debit_36 = (isset($_POST["Debit_36"])) ? $_POST["Debit_36"] : "";
$Horaire_69 = (isset($_POST["Horaire_69"])) ? $_POST["Horaire_69"] : "";
$Horaire_70 = (isset($_POST["Horaire_70"])) ? $_POST["Horaire_70"] : "";
$Debit_37 = (isset($_POST["Debit_37"])) ? $_POST["Debit_37"] : "";
$Horaire_72 = (isset($_POST["Horaire_72"])) ? $_POST["Horaire_72"] : "";
$Debit_38 = (isset($_POST["Debit_38"])) ? $_POST["Debit_38"] : "";
$Horaire_73 = (isset($_POST["Horaire_73"])) ? $_POST["Horaire_73"] : "";
$Horaire_74 = (isset($_POST["Horaire_74"])) ? $_POST["Horaire_74"] : "";
$Debit_39 = (isset($_POST["Debit_39"])) ? $_POST["Debit_39"] : "";
$Horaire_75 = (isset($_POST["Horaire_75"])) ? $_POST["Horaire_75"] : "";
$Horaire_76 = (isset($_POST["Horaire_76"])) ? $_POST["Horaire_76"] : "";
$Debit_40 = (isset($_POST["Debit_40"])) ? $_POST["Debit_40"] : "";
$Horaire_77 = (isset($_POST["Horaire_77"])) ? $_POST["Horaire_77"] : "";
$Horaire_78 = (isset($_POST["Horaire_78"])) ? $_POST["Horaire_78"] : "";
$Debit_41 = (isset($_POST["Debit_41"])) ? $_POST["Debit_41"] : "";
$Horaire_80 = (isset($_POST["Horaire_80"])) ? $_POST["Horaire_80"] : "";
$Debit_42 = (isset($_POST["Debit_42"])) ? $_POST["Debit_42"] : "";
$Horaire_81 = (isset($_POST["Horaire_81"])) ? $_POST["Horaire_81"] : "";
$Horaire_82 = (isset($_POST["Horaire_82"])) ? $_POST["Horaire_82"] : "";
$Debit_43 = (isset($_POST["Debit_43"])) ? $_POST["Debit_43"] : "";
$Horaire_83 = (isset($_POST["Horaire_83"])) ? $_POST["Horaire_83"] : "";
$Horaire_84 = (isset($_POST["Horaire_84"])) ? $_POST["Horaire_84"] : "";
$Debit_44 = (isset($_POST["Debit_44"])) ? $_POST["Debit_44"] : "";
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
$activitephysique = (isset($_POST["activitephysique"])) ? $_POST["activitephysique"] : "";
$profession = (isset($_POST["profession"])) ? $_POST["profession"] : "";
$situationfamiliale = (isset($_POST["situationfamiliale"])) ? $_POST["situationfamiliale"] : "";
$hygienealimentaire = (isset($_POST["hygienealimentaire"])) ? $_POST["hygienealimentaire"] : "";
$stabilitehoraires = (isset($_POST["stabilitehoraires"])) ? $_POST["stabilitehoraires"] : "";
$details = (isset($_POST["details"])) ? $_POST["details"] : "";
$environnement = (isset($_POST["environnement"])) ? $_POST["environnement"] : "";
$etatcutane = (isset($_POST["etatcutane"])) ? $_POST["etatcutane"] : "";
$choixpoint = (isset($_POST["choixpoint"])) ? $_POST["choixpoint"] : "";
$regime = (isset($_POST["regime"])) ? $_POST["regime"] : "";
$observation2 = (isset($_POST["observation2"])) ? $_POST["observation2"] : "";
$survenue = (isset($_POST["survenue"])) ? $_POST["survenue"] : "";
$atcd = (isset($_POST["atcd"])) ? $_POST["atcd"] : "";
$traitement = (isset($_POST["traitement"])) ? $_POST["traitement"] : "";
$date1 = (isset($_POST["date1"])) ? $_POST["date1"] : "";
$date2 = (isset($_POST["date2"])) ? $_POST["date2"] : "";
$date3 = (isset($_POST["date3"])) ? $_POST["date3"] : "";
$date4 = (isset($_POST["date4"])) ? $_POST["date4"] : "";
$date5 = (isset($_POST["date5"])) ? $_POST["date5"] : "";
$date6 = (isset($_POST["date6"])) ? $_POST["date6"] : "";
$date7 = (isset($_POST["date7"])) ? $_POST["date7"] : "";
$date8 = (isset($_POST["date8"])) ? $_POST["date8"] : "";
$date9 = (isset($_POST["date9"])) ? $_POST["date9"] : "";
$taille1 = (isset($_POST["taille1"])) ? $_POST["taille1"] : "";
$taille2 = (isset($_POST["taille2"])) ? $_POST["taille2"] : "";
$taille3 = (isset($_POST["taille3"])) ? $_POST["taille3"] : "";
$taille4 = (isset($_POST["taille4"])) ? $_POST["taille4"] : "";
$taille5 = (isset($_POST["taille5"])) ? $_POST["taille5"] : "";
$taille6 = (isset($_POST["taille6"])) ? $_POST["taille6"] : "";
$taille7 = (isset($_POST["taille7"])) ? $_POST["taille7"] : "";
$taille8 = (isset($_POST["taille8"])) ? $_POST["taille8"] : "";
$taille9 = (isset($_POST["taille9"])) ? $_POST["taille9"] : "";
$poids1 = (isset($_POST["poids1"])) ? $_POST["poids1"] : "";
$poids2 = (isset($_POST["poids2"])) ? $_POST["poids2"] : "";
$poids3 = (isset($_POST["poids3"])) ? $_POST["poids3"] : "";
$poids4 = (isset($_POST["poids4"])) ? $_POST["poids4"] : "";
$poids5 = (isset($_POST["poids5"])) ? $_POST["poids5"] : "";
$poids6 = (isset($_POST["poids6"])) ? $_POST["poids6"] : "";
$poids7 = (isset($_POST["poids7"])) ? $_POST["poids7"] : "";
$poids8 = (isset($_POST["poids8"])) ? $_POST["poids8"] : "";
$poids9 = (isset($_POST["poids9"])) ? $_POST["poids9"] : "";
$imc1 = (isset($_POST["imc1"])) ? $_POST["imc1"] : "";
$imc2 = (isset($_POST["imc2"])) ? $_POST["imc2"] : "";
$imc3 = (isset($_POST["imc3"])) ? $_POST["imc3"] : "";
$imc4 = (isset($_POST["imc4"])) ? $_POST["imc4"] : "";
$imc5 = (isset($_POST["imc5"])) ? $_POST["imc5"] : "";
$imc6 = (isset($_POST["imc6"])) ? $_POST["imc6"] : "";
$imc7 = (isset($_POST["imc7"])) ? $_POST["imc7"] : "";
$imc8 = (isset($_POST["imc8"])) ? $_POST["imc8"] : "";
$imc9 = (isset($_POST["imc9"])) ? $_POST["imc9"] : "";
$pmpdate1 = (isset($_POST["pmpdate1"])) ? $_POST["pmpdate1"] : "";
$pmpdate2 = (isset($_POST["pmpdate2"])) ? $_POST["pmpdate2"] : "";
$pmpdate3 = (isset($_POST["pmpdate3"])) ? $_POST["pmpdate3"] : "";
$pmpdate4 = (isset($_POST["pmpdate4"])) ? $_POST["pmpdate4"] : "";
$pmpselect1 = (isset($_POST["pmpselect1"])) ? $_POST["pmpselect1"] : "";
$pmpselect2 = (isset($_POST["pmpselect2"])) ? $_POST["pmpselect2"] : "";
$pmpselect3 = (isset($_POST["pmpselect3"])) ? $_POST["pmpselect3"] : "";
$pmpselect4 = (isset($_POST["pmpselect4"])) ? $_POST["pmpselect4"] : "";
$pmpcommentaire1 = (isset($_POST["pmpcommentaire1"])) ? $_POST["pmpcommentaire1"] : "";
$pmpselect5 = (isset($_POST["pmpselect5"])) ? $_POST["pmpselect5"] : "";
$pmpselect6 = (isset($_POST["pmpselect6"])) ? $_POST["pmpselect6"] : "";
$pmpselect7 = (isset($_POST["pmpselect7"])) ? $_POST["pmpselect7"] : "";
$pmpselect8 = (isset($_POST["pmpselect8"])) ? $_POST["pmpselect8"] : "";
$pmpcommentaire2 = (isset($_POST["pmpcommentaire2"])) ? $_POST["pmpcommentaire2"] : "";
$pmpselect9 = (isset($_POST["pmpselect9"])) ? $_POST["pmpselect9"] : "";
$pmpselect10 = (isset($_POST["pmpselect10"])) ? $_POST["pmpselect10"] : "";
$pmpselect11 = (isset($_POST["pmpselect11"])) ? $_POST["pmpselect11"] : "";
$pmpselect12 = (isset($_POST["pmpselect12"])) ? $_POST["pmpselect12"] : "";
$pmpcommentaire3 = (isset($_POST["pmpcommentaire3"])) ? $_POST["pmpcommentaire3"] : "";
$pmpselect13 = (isset($_POST["pmpselect13"])) ? $_POST["pmpselect13"] : "";
$pmpselect14 = (isset($_POST["pmpselect14"])) ? $_POST["pmpselect14"] : "";
$pmpselect15 = (isset($_POST["pmpselect15"])) ? $_POST["pmpselect15"] : "";
$pmpselect16 = (isset($_POST["pmpselect16"])) ? $_POST["pmpselect16"] : "";
$pmpcommentaire4 = (isset($_POST["pmpcommentaire4"])) ? $_POST["pmpcommentaire4"] : "";
$pmpselect17 = (isset($_POST["pmpselect17"])) ? $_POST["pmpselect17"] : "";
$pmpselect18 = (isset($_POST["pmpselect18"])) ? $_POST["pmpselect18"] : "";
$pmpselect19 = (isset($_POST["pmpselect19"])) ? $_POST["pmpselect19"] : "";
$pmpselect20 = (isset($_POST["pmpselect20"])) ? $_POST["pmpselect20"] : "";
$pmpcommentaire5 = (isset($_POST["pmpcommentaire5"])) ? $_POST["pmpcommentaire5"] : "";
$pmpselect21 = (isset($_POST["pmpselect21"])) ? $_POST["pmpselect21"] : "";
$pmpselect22 = (isset($_POST["pmpselect22"])) ? $_POST["pmpselect22"] : "";
$pmpselect23 = (isset($_POST["pmpselect23"])) ? $_POST["pmpselect23"] : "";
$pmpselect24 = (isset($_POST["pmpselect24"])) ? $_POST["pmpselect24"] : "";
$pmpcommentaire6 = (isset($_POST["pmpcommentaire6"])) ? $_POST["pmpcommentaire6"] : "";
$pmpselect25 = (isset($_POST["pmpselect25"])) ? $_POST["pmpselect25"] : "";
$pmpselect26 = (isset($_POST["pmpselect26"])) ? $_POST["pmpselect26"] : "";
$pmpselect27 = (isset($_POST["pmpselect27"])) ? $_POST["pmpselect27"] : "";
$pmpselect28 = (isset($_POST["pmpselect28"])) ? $_POST["pmpselect28"] : "";
$pmpcommentaire7 = (isset($_POST["pmpcommentaire7"])) ? $_POST["pmpcommentaire7"] : "";
$pmpselect29 = (isset($_POST["pmpselect29"])) ? $_POST["pmpselect29"] : "";
$pmpselect291 = (isset($_POST["pmpselect291"])) ? $_POST["pmpselect291"] : "";
$pmpselect292 = (isset($_POST["pmpselect292"])) ? $_POST["pmpselect292"] : "";
$pmpselect293 = (isset($_POST["pmpselect293"])) ? $_POST["pmpselect293"] : "";
$pmpcommentaire8 = (isset($_POST["pmpcommentaire8"])) ? $_POST["pmpcommentaire8"] : "";
$pmpselect294 = (isset($_POST["pmpselect294"])) ? $_POST["pmpselect294"] : "";
$pmpselect295 = (isset($_POST["pmpselect295"])) ? $_POST["pmpselect295"] : "";
$pmpselect296 = (isset($_POST["pmpselect296"])) ? $_POST["pmpselect296"] : "";
$pmpselect297 = (isset($_POST["pmpselect297"])) ? $_POST["pmpselect297"] : "";
$pmpcommentaire9 = (isset($_POST["pmpcommentaire9"])) ? $_POST["pmpcommentaire9"] : "";
$pmpautre = (isset($_POST["pmpautre"])) ? $_POST["pmpautre"] : "";
$alarmedate1 = (isset($_POST["alarmedate1"])) ? $_POST["alarmedate1"] : "";
$alarmedate2 = (isset($_POST["alarmedate2"])) ? $_POST["alarmedate2"] : "";
$alarmedate3 = (isset($_POST["alarmedate3"])) ? $_POST["alarmedate3"] : "";
$alarmedate4 = (isset($_POST["alarmedate4"])) ? $_POST["alarmedate4"] : "";
$alarmeselect1 = (isset($_POST["alarmeselect1"])) ? $_POST["alarmeselect1"] : "";
$alarmeselect2 = (isset($_POST["alarmeselect2"])) ? $_POST["alarmeselect2"] : "";
$alarmeselect3 = (isset($_POST["alarmeselect3"])) ? $_POST["alarmeselect3"] : "";
$alarmeselect4 = (isset($_POST["alarmeselect4"])) ? $_POST["alarmeselect4"] : "";
$alarmecommentaire1 = (isset($_POST["alarmecommentaire1"])) ? $_POST["alarmecommentaire1"] : "";
$alarmeselect5 = (isset($_POST["alarmeselect5"])) ? $_POST["alarmeselect5"] : "";
$alarmeselect6 = (isset($_POST["alarmeselect6"])) ? $_POST["alarmeselect6"] : "";
$alarmeselect7 = (isset($_POST["alarmeselect7"])) ? $_POST["alarmeselect7"] : "";
$alarmeselect8 = (isset($_POST["alarmeselect8"])) ? $_POST["alarmeselect8"] : "";
$alarmecommentaire2 = (isset($_POST["alarmecommentaire2"])) ? $_POST["alarmecommentaire2"] : "";
$alarmeselect9 = (isset($_POST["alarmeselect9"])) ? $_POST["alarmeselect9"] : "";
$alarmeselect10 = (isset($_POST["alarmeselect10"])) ? $_POST["alarmeselect10"] : "";
$alarmeselect11 = (isset($_POST["alarmeselect11"])) ? $_POST["alarmeselect11"] : "";
$alarmeselect12 = (isset($_POST["alarmeselect12"])) ? $_POST["alarmeselect12"] : "";
$alarmecommentaire3 = (isset($_POST["alarmecommentaire3"])) ? $_POST["alarmecommentaire3"] : "";
$alarmeselect13 = (isset($_POST["alarmeselect13"])) ? $_POST["alarmeselect13"] : "";
$alarmeselect14 = (isset($_POST["alarmeselect14"])) ? $_POST["alarmeselect14"] : "";
$alarmeselect15 = (isset($_POST["alarmeselect15"])) ? $_POST["alarmeselect15"] : "";
$alarmeselect16 = (isset($_POST["alarmeselect16"])) ? $_POST["alarmeselect16"] : "";
$alarmecommentaire4 = (isset($_POST["alarmecommentaire4"])) ? $_POST["alarmecommentaire4"] : "";
$alarmeselect17 = (isset($_POST["alarmeselect17"])) ? $_POST["alarmeselect17"] : "";
$alarmeselect18 = (isset($_POST["alarmeselect18"])) ? $_POST["alarmeselect18"] : "";
$alarmeselect19 = (isset($_POST["alarmeselect19"])) ? $_POST["alarmeselect19"] : "";
$alarmeselect20 = (isset($_POST["alarmeselect20"])) ? $_POST["alarmeselect20"] : "";
$alarmecommentaire5 = (isset($_POST["alarmecommentaire5"])) ? $_POST["alarmecommentaire5"] : "";
$alarmeselect21 = (isset($_POST["alarmeselect21"])) ? $_POST["alarmeselect21"] : "";
$alarmeselect22 = (isset($_POST["alarmeselect22"])) ? $_POST["alarmeselect22"] : "";
$alarmeselect23 = (isset($_POST["alarmeselect23"])) ? $_POST["alarmeselect23"] : "";
$alarmeselect24 = (isset($_POST["alarmeselect24"])) ? $_POST["alarmeselect24"] : "";
$alarmecommentaire6 = (isset($_POST["alarmecommentaire6"])) ? $_POST["alarmecommentaire6"] : "";
$alarmeselect25 = (isset($_POST["alarmeselect25"])) ? $_POST["alarmeselect25"] : "";
$alarmeselect26 = (isset($_POST["alarmeselect26"])) ? $_POST["alarmeselect26"] : "";
$alarmeselect27 = (isset($_POST["alarmeselect27"])) ? $_POST["alarmeselect27"] : "";
$alarmeselect28 = (isset($_POST["alarmeselect28"])) ? $_POST["alarmeselect28"] : "";
$alarmecommentaire7 = (isset($_POST["alarmecommentaire7"])) ? $_POST["alarmecommentaire7"] : "";
$alarmeautre = (isset($_POST["alarmeautre"])) ? $_POST["alarmeautre"] : "";
$manipdate1 = (isset($_POST["manipdate1"])) ? $_POST["manipdate1"] : "";
$manipdate2 = (isset($_POST["manipdate2"])) ? $_POST["manipdate2"] : "";
$manipdate3 = (isset($_POST["manipdate3"])) ? $_POST["manipdate3"] : "";
$manipdate4 = (isset($_POST["manipdate4"])) ? $_POST["manipdate4"] : "";
$manipselect1 = (isset($_POST["manipselect1"])) ? $_POST["manipselect1"] : "";
$manipselect2 = (isset($_POST["manipselect2"])) ? $_POST["manipselect2"] : "";
$manipselect3 = (isset($_POST["manipselect3"])) ? $_POST["manipselect3"] : "";
$manipselect4 = (isset($_POST["manipselect4"])) ? $_POST["manipselect4"] : "";
$manipcommentaire1 = (isset($_POST["manipcommentaire1"])) ? $_POST["manipcommentaire1"] : "";
$manipselect5 = (isset($_POST["manipselect5"])) ? $_POST["manipselect5"] : "";
$manipselect6 = (isset($_POST["manipselect6"])) ? $_POST["manipselect6"] : "";
$manipselect7 = (isset($_POST["manipselect7"])) ? $_POST["manipselect7"] : "";
$manipselect8 = (isset($_POST["manipselect8"])) ? $_POST["manipselect8"] : "";
$manipcommentaire2 = (isset($_POST["manipcommentaire2"])) ? $_POST["manipcommentaire2"] : "";
$manipselect9 = (isset($_POST["manipselect9"])) ? $_POST["manipselect9"] : "";
$manipselect10 = (isset($_POST["manipselect10"])) ? $_POST["manipselect10"] : "";
$manipselect11 = (isset($_POST["manipselect11"])) ? $_POST["manipselect11"] : "";
$manipselect12 = (isset($_POST["manipselect12"])) ? $_POST["manipselect12"] : "";
$manipcommentaire3 = (isset($_POST["manipcommentaire3"])) ? $_POST["manipcommentaire3"] : "";
$manipselect13 = (isset($_POST["manipselect13"])) ? $_POST["manipselect13"] : "";
$manipselect14 = (isset($_POST["manipselect14"])) ? $_POST["manipselect14"] : "";
$manipselect15 = (isset($_POST["manipselect15"])) ? $_POST["manipselect15"] : "";
$manipselect16 = (isset($_POST["manipselect16"])) ? $_POST["manipselect16"] : "";
$manipcommentaire4 = (isset($_POST["manipcommentaire4"])) ? $_POST["manipcommentaire4"] : "";
$manipselect17 = (isset($_POST["manipselect17"])) ? $_POST["manipselect17"] : "";
$manipselect18 = (isset($_POST["manipselect18"])) ? $_POST["manipselect18"] : "";
$manipselect19 = (isset($_POST["manipselect19"])) ? $_POST["manipselect19"] : "";
$manipselect20 = (isset($_POST["manipselect20"])) ? $_POST["manipselect20"] : "";
$manipcommentaire5 = (isset($_POST["manipcommentaire5"])) ? $_POST["manipcommentaire5"] : "";
$cathdate1 = (isset($_POST["cathdate1"])) ? $_POST["cathdate1"] : "";
$cathdate2 = (isset($_POST["cathdate2"])) ? $_POST["cathdate2"] : "";
$cathdate3 = (isset($_POST["cathdate3"])) ? $_POST["cathdate3"] : "";
$cathdate4 = (isset($_POST["cathdate4"])) ? $_POST["cathdate4"] : "";
$cathselect1 = (isset($_POST["cathselect1"])) ? $_POST["cathselect1"] : "";
$cathselect2 = (isset($_POST["cathselect2"])) ? $_POST["cathselect2"] : "";
$cathselect3 = (isset($_POST["cathselect3"])) ? $_POST["cathselect3"] : "";
$cathselect4 = (isset($_POST["cathselect4"])) ? $_POST["cathselect4"] : "";
$cathcommentaire1 = (isset($_POST["cathcommentaire1"])) ? $_POST["cathcommentaire1"] : "";
$cathselect5 = (isset($_POST["cathselect5"])) ? $_POST["cathselect5"] : "";
$cathselect6 = (isset($_POST["cathselect6"])) ? $_POST["cathselect6"] : "";
$cathselect7 = (isset($_POST["cathselect7"])) ? $_POST["cathselect7"] : "";
$cathselect8 = (isset($_POST["cathselect8"])) ? $_POST["cathselect8"] : "";
$cathcommentaire2 = (isset($_POST["cathcommentaire2"])) ? $_POST["cathcommentaire2"] : "";
$cathselect9 = (isset($_POST["cathselect9"])) ? $_POST["cathselect9"] : "";
$cathselect10 = (isset($_POST["cathselect10"])) ? $_POST["cathselect10"] : "";
$cathselect11 = (isset($_POST["cathselect11"])) ? $_POST["cathselect11"] : "";
$cathselect12 = (isset($_POST["cathselect12"])) ? $_POST["cathselect12"] : "";
$cathcommentaire3 = (isset($_POST["cathcommentaire3"])) ? $_POST["cathcommentaire3"] : "";
$cathselect13 = (isset($_POST["cathselect13"])) ? $_POST["cathselect13"] : "";
$cathselect14 = (isset($_POST["cathselect14"])) ? $_POST["cathselect14"] : "";
$cathselect15 = (isset($_POST["cathselect15"])) ? $_POST["cathselect15"] : "";
$cathselect16 = (isset($_POST["cathselect16"])) ? $_POST["cathselect16"] : "";
$cathcommentaire4 = (isset($_POST["cathcommentaire4"])) ? $_POST["cathcommentaire4"] : "";
$cathselect17 = (isset($_POST["cathselect17"])) ? $_POST["cathselect17"] : "";
$cathselect18 = (isset($_POST["cathselect18"])) ? $_POST["cathselect18"] : "";
$cathselect19 = (isset($_POST["cathselect19"])) ? $_POST["cathselect19"] : "";
$cathselect20 = (isset($_POST["cathselect20"])) ? $_POST["cathselect20"] : "";
$cathcommentaire5 = (isset($_POST["cathcommentaire5"])) ? $_POST["cathcommentaire5"] : "";
$cathselect21 = (isset($_POST["cathselect21"])) ? $_POST["cathselect21"] : "";
$cathselect22 = (isset($_POST["cathselect22"])) ? $_POST["cathselect22"] : "";
$cathselect23 = (isset($_POST["cathselect23"])) ? $_POST["cathselect23"] : "";
$cathselect24 = (isset($_POST["cathselect24"])) ? $_POST["cathselect24"] : "";
$cathcommentaire6 = (isset($_POST["cathcommentaire6"])) ? $_POST["cathcommentaire6"] : "";
$cathselect25 = (isset($_POST["cathselect25"])) ? $_POST["cathselect25"] : "";
$cathselect26 = (isset($_POST["cathselect26"])) ? $_POST["cathselect26"] : "";
$cathselect27 = (isset($_POST["cathselect27"])) ? $_POST["cathselect27"] : "";
$cathselect28 = (isset($_POST["cathselect28"])) ? $_POST["cathselect28"] : "";
$cathcommentaire7 = (isset($_POST["cathcommentaire7"])) ? $_POST["cathcommentaire7"] : "";
$cathselect29 = (isset($_POST["cathselect29"])) ? $_POST["cathselect29"] : "";
$cathselect211 = (isset($_POST["cathselect211"])) ? $_POST["cathselect211"] : "";
$cathselect212 = (isset($_POST["cathselect212"])) ? $_POST["cathselect212"] : "";
$cathselect213 = (isset($_POST["cathselect213"])) ? $_POST["cathselect213"] : "";
$cathcommentaire8 = (isset($_POST["cathcommentaire8"])) ? $_POST["cathcommentaire8"] : "";
$cathselect214 = (isset($_POST["cathselect214"])) ? $_POST["cathselect214"] : "";
$cathselect215 = (isset($_POST["cathselect215"])) ? $_POST["cathselect215"] : "";
$cathselect216 = (isset($_POST["cathselect216"])) ? $_POST["cathselect216"] : "";
$cathselect217 = (isset($_POST["cathselect217"])) ? $_POST["cathselect217"] : "";
$cathcommentaire9 = (isset($_POST["cathcommentaire9"])) ? $_POST["cathcommentaire9"] : "";
$cathselect218 = (isset($_POST["cathselect218"])) ? $_POST["cathselect218"] : "";
$cathselect219 = (isset($_POST["cathselect219"])) ? $_POST["cathselect219"] : "";
$cathselect221 = (isset($_POST["cathselect221"])) ? $_POST["cathselect221"] : "";
$cathselect222 = (isset($_POST["cathselect222"])) ? $_POST["cathselect222"] : "";
$cathcommentaire13 = (isset($_POST["cathcommentaire13"])) ? $_POST["cathcommentaire13"] : "";
$cathselect223 = (isset($_POST["cathselect223"])) ? $_POST["cathselect223"] : "";
$cathselect224 = (isset($_POST["cathselect224"])) ? $_POST["cathselect224"] : "";
$cathselect225 = (isset($_POST["cathselect225"])) ? $_POST["cathselect225"] : "";
$cathselect226 = (isset($_POST["cathselect226"])) ? $_POST["cathselect226"] : "";
$cathcommentaire11 = (isset($_POST["cathcommentaire11"])) ? $_POST["cathcommentaire11"] : "";
$connaissance1 = (isset($_POST["connaissance1"])) ? $_POST["connaissance1"] : "";
$cnsobservation1 = (isset($_POST["cnsobservation1"])) ? $_POST["cnsobservation1"] : "";
$connaissance2 = (isset($_POST["connaissance2"])) ? $_POST["connaissance2"] : "";
$cnsobservation2 = (isset($_POST["cnsobservation2"])) ? $_POST["cnsobservation2"] : "";
$connaissance3 = (isset($_POST["connaissance3"])) ? $_POST["connaissance3"] : "";
$connaissance4 = (isset($_POST["connaissance4"])) ? $_POST["connaissance4"] : "";
$connaissance6 = (isset($_POST["connaissance6"])) ? $_POST["connaissance6"] : "";
$perempdate1 = (isset($_POST["perempdate1"])) ? $_POST["perempdate1"] : "";
$perempdate2 = (isset($_POST["perempdate2"])) ? $_POST["perempdate2"] : "";
$perempdate3 = (isset($_POST["perempdate3"])) ? $_POST["perempdate3"] : "";
$perempdate4 = (isset($_POST["perempdate4"])) ? $_POST["perempdate4"] : "";
$connaissance7 = (isset($_POST["connaissance7"])) ? $_POST["connaissance7"] : "";
$perempdate5 = (isset($_POST["perempdate5"])) ? $_POST["perempdate5"] : "";
$connaissance8 = (isset($_POST["connaissance8"])) ? $_POST["connaissance8"] : "";
$cnsobservation3 = (isset($_POST["cnsobservation3"])) ? $_POST["cnsobservation3"] : "";
$connaissance9 = (isset($_POST["connaissance9"])) ? $_POST["connaissance9"] : "";
$cnsobservation4 = (isset($_POST["cnsobservation4"])) ? $_POST["cnsobservation4"] : "";
$connaissance10 = (isset($_POST["connaissance10"])) ? $_POST["connaissance10"] : "";
$cnsobservation5 = (isset($_POST["cnsobservation5"])) ? $_POST["cnsobservation5"] : "";
$connaissance11 = (isset($_POST["connaissance11"])) ? $_POST["connaissance11"] : "";
$cnsobservation6 = (isset($_POST["cnsobservation6"])) ? $_POST["cnsobservation6"] : "";
$connaissance12 = (isset($_POST["connaissance12"])) ? $_POST["connaissance12"] : "";
$cnsobservation7 = (isset($_POST["cnsobservation7"])) ? $_POST["cnsobservation7"] : "";
$connaissance13 = (isset($_POST["connaissance13"])) ? $_POST["connaissance13"] : "";
$connaissance14 = (isset($_POST["connaissance14"])) ? $_POST["connaissance14"] : "";
$cnsobservation8 = (isset($_POST["cnsobservation8"])) ? $_POST["cnsobservation8"] : "";
$asgdetail1 = (isset($_POST["asgdetail1"])) ? $_POST["asgdetail1"] : "";
$asgobservation1 = (isset($_POST["asgobservation1"])) ? $_POST["asgobservation1"] : "";
$asgdetail2 = (isset($_POST["asgdetail2"])) ? $_POST["asgdetail2"] : "";
$asgobservation2 = (isset($_POST["asgobservation2"])) ? $_POST["asgobservation2"] : "";
$asgdetail3 = (isset($_POST["asgdetail3"])) ? $_POST["asgdetail3"] : "";
$asgobservation3 = (isset($_POST["asgobservation3"])) ? $_POST["asgobservation3"] : "";
$asgdetail4 = (isset($_POST["asgdetail4"])) ? $_POST["asgdetail4"] : "";
$asgobservation4 = (isset($_POST["asgobservation4"])) ? $_POST["asgobservation4"] : "";
$asgfrequence1 = (isset($_POST["asgfrequence1"])) ? $_POST["asgfrequence1"] : "";
$asgfrequence2 = (isset($_POST["asgfrequence2"])) ? $_POST["asgfrequence2"] : "";
$asg1 = (isset($_POST["asg1"])) ? $_POST["asg1"] : "";
$connaissance5 = (isset($_POST["connaissance5"])) ? $_POST["connaissance5"] : "";
$id = (isset($_POST["id"])) ? $_POST["id"] : "";


ob_start();
?>

<div id='content' >
    <div><img style="position: relative; margin-left: 600px; width: 120px;" src="img/basitide.png"></div>
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
        <strong>Adresse :</strong><?php echo $adressepatient; ?><br/>
        <strong>Code postal :</strong><?php echo $codepostalpatient; ?><br/>    
        <strong>Ville :</strong><?php echo $villepatient; ?><br/>

        <h4><u>RENSEIGNEMENTS PRESCRIPTEUR</u></h4>

        <strong>Etablissement prescripteur:</strong> <?php echo $etablissementprescripteur; ?> <br/>
        <strong>Service :</strong> <?php echo $serviceep; ?> <br/><br/> 

        <?php if ($statut == "Médecin traitant") { ?>            
            <h4><u> Médecin traitant : <?php $medecintraitant; ?></u></h4>
            <strong>Tel :</strong>  <?php echo $telmt; ?><br/>   
            <strong>Mobile :</strong>  <?php echo $mobilemt; ?><br/>      
            <strong>Ville :</strong><?php echo $villemt; ?><br/>
            <strong>Mail :</strong><?php echo $mailmt; ?><br/><br/>    
        <?php } elseif ($statut == "Diabétologue libéral") { ?>
            <h4><u> Diabétologue prescripteur : <?php $diabetologueliberal; ?></u></h4>
            <strong>Tel :</strong>  <?php echo $teldl; ?><br/>   
            <strong>Mobile :</strong>  <?php echo $mobiledl; ?><br/>      
            <strong>Ville :</strong><?php echo $villedl; ?><br/>
            <strong>Mail :</strong><?php echo $maildl; ?><br/><br/>  
        <?php } elseif ($statut == "Diabétologue prescripteur") { ?>
            <h4><u> Diabétologue prescripteur : <?php $diabetologueprescripteur; ?></u></h4>
            <strong>Tel :</strong>  <?php echo $teldp; ?><br/>   
            <strong>Mobile :</strong>  <?php echo $mobiledp; ?><br/>      
            <strong>Ville :</strong><?php echo $villedp; ?><br/>
            <strong>Mail :</strong><?php echo $maildp; ?><br/><br/>  
        <?php } elseif ($statut == "Diététicienne") { ?>
            <h4><u> Diabétologue prescripteur : <?php $dieteticienne; ?></u></h4>
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
            <strong>Date d’installation :</strong> <?php echo $dateinstallation; ?> <br/>


            <strong>Type de cathéter 1 :</strong> <?php echo $catheter; ?><br/>
            <strong>Modèle :</strong> <?php echo $modele; ?> <br/>
            <strong>Longueur de canule :</strong> <?php echo $longueurcanule; ?> mm              
            <strong>Longueur de tubulure :</strong>   <?php echo $longueurtubulure; ?> cm
            <br><br>
            <strong>Type de cathéter 2 :</strong> <?php echo $catheter2; ?><br/>
            <strong>Modèle :</strong> <?php echo $modele2; ?> <br/>
            <strong>Longueur de canule :</strong> <?php echo $longueurcanule2; ?> mm              
            <strong>Longueur de tubulure :</strong>   <?php echo $longueurtubulure2; ?> cm            
            <br><br>
            <strong>Inserteur :</strong> <?php echo $inserteur; ?><br/><br/>
            <strong>Réservoir :</strong> <?php echo $reservoir; ?> <br/>                      
            <strong>Système de portage de la Pompe (qql lignes) : </strong> <?php echo $spp; ?>  <br/>    

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
                <th style="width: 20%"><strong>Poids actuel (kg) </strong></th>
                <th style="width: 20%"><strong>Poids de forme (kg)</strong></th>
                <th style="width: 20%"><strong>Taille (cm)</strong></th>
                <th style="width: 20%"><strong>IMC</strong></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo $poidsactuel; ?></td>
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
            <strong>Insulinothérapie :</strong><br/>
            <strong>Nombre d’injection par jour :</strong> <?php echo $nombreinjectionjour; ?>           <strong>Schéma multi injection :</strong><br/>
            <strong>Stylo :</strong> <?php echo $stylo; ?>      <strong>Autre : </strong> <?php echo $autrestylo; ?>         
            <strong>Aiguille pour stylo : </strong><?php echo $aiguillestylo; ?> <br/>
            <strong>Autre : </strong>  <?php echo $autreaiguille; ?> <br/><br/><br/>    
        </p>
    </div>
    <div class="dec">
        <table class="table " style="margin-left: 110px;">
            <thead>
                <tr>
                    <th style="width:100px"></th>
                    <th style="width:100px"><strong>Insuline lente</strong></th>
                    <th style="width:100px"><strong>Insuline rapide</strong></th>
                    <th style="width:100px"><strong>Quantité totale</strong></th>
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
                    <th style="width: 35%;"><strong>Spécialité</strong></th>
                    <th style="width: 35%;"><strong>Posologie</strong></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?php echo $specialite1; ?></td>
                    <td><?php echo $posologie1; ?></td>
                </tr>
                <tr>
                    <td><?php echo $specialite2; ?></td>
                    <td><?php echo $posologie2; ?></td>
                </tr>
                <tr>
                    <td><?php echo $specialite3; ?></td>
                    <td><?php echo $posologie3; ?></td>
                </tr>
                <tr>
                    <td><?php echo $specialite4; ?></td>
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
                    <td colspan=8 style="text-align: center;"><strong>Shéma basals date 1</strong></td>
                </tr>
                <tr>
                    <td style="width:24%;" colspan=3><strong>Schéma 1</strong></td>
                    <td style="width:24%;" colspan=3><strong>Schéma 2</strong></td>
                    <td style="width:24%;" colspan=3><strong>Schéma 3</strong></td>
                    <td style="width:24%;" colspan=3><strong>Schéma 4</strong></td>
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
            <!-- ?php echo '<img src="img/image'.$id.'bardate1.png" style="width: 700px;" />';? -->
        <br/><br/>
    </div>
    <div class="dec">
         <table class="table">
            <tbody>
                <tr>
                    <td colspan=8 style="text-align: center;"><strong>Shéma basals date 2</strong></td>
                </tr>
                <tr>
                    <td style="width:24%;" colspan=3><strong>Schéma 1</strong></td>
                    <td style="width:24%;" colspan=3><strong>Schéma 2</strong></td>
                    <td style="width:24%;" colspan=3><strong>Schéma 3</strong></td>
                    <td style="width:24%;" colspan=3><strong>Schéma 4</strong></td>
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

  <!-- ?php echo '<img src="img/image'.$id.'bardate2.png" style="width: 700px;" />';? -->
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
                    <td><?php echo $ValGlycemique1; ?></td>
                    <td><?php echo $ValGlyMatin1; ?></td>
                    <td><?php echo $ValGlyMid1; ?></td>
                    <td><?php echo $ValGlyCollation1; ?></td>
                    <td><?php echo $ValGlySoir1; ?></td>
                    <td><?php echo $ValGlyAutre1; ?></td>
                </tr>
                <tr>
                    <td><?php echo $ValGlycemique2; ?></td>
                    <td><?php echo $ValGlyMatin2; ?></td>
                    <td><?php echo $ValGlyMid2; ?></td>
                    <td><?php echo $ValGlyCollation2; ?></td>
                    <td><?php echo $ValGlySoir2; ?></td>
                    <td><?php echo $ValGlyAutre2; ?></td>
                </tr>
                <tr>
                    <td><?php echo $ValGlycemique3; ?></td>
                    <td><?php echo $ValGlyMatin3; ?></td>
                    <td><?php echo $ValGlyMid3; ?></td>
                    <td><?php echo $ValGlyCollation3; ?></td>
                    <td><?php echo $ValGlySoir3; ?></td>
                    <td><?php echo $ValGlyAutre3; ?></td>
                </tr>
                <tr>
                    <td><?php echo $ValGlycemique4; ?></td>
                    <td><?php echo $ValGlyMatin4; ?></td>
                    <td><?php echo $ValGlyMid4; ?></td>
                    <td><?php echo $ValGlyCollation4; ?></td>
                    <td><?php echo $ValGlySoir4; ?></td>
                    <td><?php echo $ValGlyAutre4; ?></td>
                </tr>
                <tr>
                    <td><?php echo $ValGlycemique5; ?></td>
                    <td><?php echo $ValGlyMatin5; ?></td>
                    <td><?php echo $ValGlyMid5; ?></td>
                    <td><?php echo $ValGlyCollation5; ?></td>
                    <td><?php echo $ValGlySoir5; ?></td>
                    <td><?php echo $ValGlyAutre5; ?></td>
                </tr>
                <tr>
                    <td><?php echo $ValGlycemique6; ?></td>
                    <td><?php echo $ValGlyMatin6; ?></td>
                    <td><?php echo $ValGlyMid6; ?></td>
                    <td><?php echo $ValGlyCollation6; ?></td>
                    <td><?php echo $ValGlySoir6; ?></td>
                    <td><?php echo $ValGlyAutre6; ?></td>
                </tr>
                <tr>
                    <td><?php echo $ValGlycemique7; ?></td>
                    <td><?php echo $ValGlyMatin7; ?></td>
                    <td><?php echo $ValGlyMid7; ?></td>
                    <td><?php echo $ValGlyCollation7; ?></td>
                    <td><?php echo $ValGlySoir7; ?></td>
                    <td><?php echo $ValGlyAutre7; ?></td>
                </tr>
            </tbody>
        </table><br/>
        <h4>Evolution chronologique en % desHémoglobines glyquées</h4>
         <!-- ?php echo '<img src="img/image'.$id.'barhg.png" style="width: 700px;" />';? -->
        <br/><br/>
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
                    <td><?php echo $horairematin; ?></td>
                    <td><?php echo $rotationmatin; ?></td>
                    <td><?php echo $objectifmatin; ?></td>
                    <td><?php echo $sensibilitematin; ?></td>
                </tr>
                <tr>
                    <td>Midi</td>
                    <td><?php echo $horairemidi; ?></td>
                    <td><?php echo $rotationmidi; ?></td>
                    <td><?php echo $objectifmidi; ?></td>
                    <td><?php echo $sensibilitemidi; ?></td>
                </tr>
                <tr>
                    <td>Collation</td>
                    <td><?php echo $horairecollation; ?></td>
                    <td><?php echo $rotationcollation; ?></td>
                    <td><?php echo $objectifcollation; ?></td>
                    <td><?php echo $sensibilitecollation; ?></td>
                </tr>
                <tr>
                    <td>Soir</td>
                    <td><?php echo $horairesoir; ?></td>
                    <td><?php echo $rotationsoir; ?></td>
                    <td><?php echo $objectifsoir; ?></td>
                    <td><?php echo $sensibilitesoir; ?></td>
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
        <!-- table class="table " style="margin-left: 8px;">
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
                    <td><?php echo round($imc1, 2); ?></td>
                    <td><?php echo round($imc2, 2); ?></td>
                    <td><?php echo round($imc3, 2); ?></td>
                    <td><?php echo round($imc4, 2); ?></td>
                    <td><?php echo round($imc5, 2); ?></td>
                    <td><?php echo round($imc6, 2); ?></td>
                    <td><?php echo round($imc7, 2); ?></td>
                    <td><?php echo round($imc8, 2); ?></td>
                    <td><?php echo round($imc9, 2); ?></td>
                </tr>

            </tbody>
        </table -->
    </div><br/><br/>

       <!-- ?php echo '<img src="img/image'.$id.'bar.png" style="width: 700px;" />';? -->
    <div class="dec">
        <font><h4><u>MANIPULATION DE LA Pompe</u></h4></font><br/>

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
                    <td><?php echo $pmpdate1; ?></td>
                    <td><?php echo $pmpdate2; ?></td>
                    <td><?php echo $pmpdate3; ?></td>
                    <td><?php echo $pmpdate4; ?></td>
                    <td>
                        <?php echo $pmpcommentaire1; ?>
                    </td>
                </tr>
                <tr>
                    <td><strong>Marche/Arrêt</strong></td>
                    <td><?php echo $pmpdate5; ?></td>
                    <td><?php echo $pmpdate6; ?></td>
                    <td><?php echo $pmpdate7; ?></td>
                    <td><?php echo $pmpdate8; ?></td>
                    <td>
                        <?php echo $pmpcommentaire2; ?>
                    </td>
                </tr>
                <tr>
                    <td><strong>Réglage Date/heure</strong></td>
                    <td><?php echo $pmpdate9; ?></td>
                    <td><?php echo $pmpdate10; ?></td>
                    <td><?php echo $pmpdate11; ?></td>
                    <td><?php echo $pmpdate12; ?></td>
                    <td>
                        <?php echo $pmpcommentaire3; ?>
                    </td>
                </tr> 
                <tr>
                    <td><strong>Réglage du bolus</strong></td>
                    <td><?php echo $pmpdate13; ?></td>
                    <td><?php echo $pmpdate14; ?></td>
                    <td><?php echo $pmpdate15; ?></td>
                    <td><?php echo $pmpdate16; ?></td>
                    <td>
                        <?php echo $pmpcommentaire4; ?>
                    </td>
                </tr>
                <tr>
                    <td><strong>Arrêt du bolus en cours</strong></td>
                    <td><?php echo $pmpdate17; ?></td>
                    <td><?php echo $pmpdate18; ?></td>
                    <td><?php echo $pmpdate19; ?></td>
                    <td><?php echo $pmpdate20; ?></td>
                    <td>
                        <?php echo $pmpcommentaire5; ?>
                    </td>
                </tr>
                <tr>
                    <td><strong>Historique des bolus</strong></td>
                    <td><?php echo $pmpdate21; ?></td>
                    <td><?php echo $pmpdate22; ?></td>
                    <td><?php echo $pmpdate23; ?></td>
                    <td><?php echo $pmpdate24; ?></td>
                    <td>
                        <?php echo $pmpcommentaire6; ?>
                    </td>
                </tr>
                <tr>
                    <td><strong>Programmation du débit basal</strong></td>
                    <td><?php echo $pmpdate25; ?></td>
                    <td><?php echo $pmpdate26; ?></td>
                    <td><?php echo $pmpdate27; ?></td>
                    <td><?php echo $pmpdate28; ?></td>
                    <td>
                        <?php echo $pmpcommentaire7; ?>
                    </td>
                </tr>
                <tr>
                    <td><strong>Consulter les débits de base</strong></td>
                    <td><?php echo $pmpdate29; ?></td>
                    <td><?php echo $pmpdate291; ?></td>
                    <td><?php echo $pmpdate292; ?></td>
                    <td><?php echo $pmpdate293; ?></td>
                    <td>
                        <?php echo $pmpcommentaire8; ?>
                    </td>
                </tr>
                <tr>
                    <td><strong>Programmer et arrêter le débit de base temporaire</strong></td>
                    <td><?php echo $pmpdate294; ?></td>
                    <td><?php echo $pmpdate295; ?></td>
                    <td><?php echo $pmpdate296; ?></td>
                    <td><?php echo $pmpdate297; ?></td>
                    <td>
                        <?php echo $pmpcommentaire9; ?>
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
                    <td><?php echo $alarmedate1; ?></td>
                    <td><?php echo $alarmedate2; ?></td>
                    <td><?php echo $alarmedate3; ?></td>
                    <td><?php echo $alarmedate4; ?></td>
                    <td>
                        <?php echo $alarmecommentaire1; ?>
                    </td>
                </tr>
                <tr>
                    <td><strong>Pile faible</strong></td>
                    <td><?php echo $alarmedate5; ?></td>
                    <td><?php echo $alarmedate6; ?></td>
                    <td><?php echo $alarmedate7; ?></td>
                    <td><?php echo $alarmedate8; ?></td>
                    <td>
                        <?php echo $alarmecommentaire2; ?>
                    </td>
                </tr>
                <tr>
                    <td><strong>Pile épuisée</strong></td>
                    <td><?php echo $alarmedate9; ?></td>
                    <td><?php echo $alarmedate10; ?></td>
                    <td><?php echo $alarmedate11; ?></td>
                    <td><?php echo $alarmedate12; ?></td>
                    <td>
                        <?php echo $alarmecommentaire3; ?>
                    </td>
                </tr> 
                <tr>
                    <td><strong>Réservoire vide</strong></td>
                    <td><?php echo $alarmedate13; ?></td>
                    <td><?php echo $alarmedate14; ?></td>
                    <td><?php echo $alarmedate15; ?></td>
                    <td><?php echo $alarmedate16; ?></td>
                    <td>
                        <?php echo $alarmecommentaire4; ?>
                    </td>
                </tr>
                <tr>
                    <td><strong>Occlusion/pas d'injection</strong></td>
                    <td><?php echo $alarmedate17; ?></td>
                    <td><?php echo $alarmedate18; ?></td>
                    <td><?php echo $alarmedate19; ?></td>
                    <td><?php echo $alarmedate20; ?></td>
                    <td>
                        <?php echo $alarmecommentaire5; ?>
                    </td>
                </tr>
                <tr>
                    <td><strong>Historique des alarmes</strong></td>
                    <td><?php echo $alarmedate21; ?></td>
                    <td><?php echo $alarmedate22; ?></td>
                    <td><?php echo $alarmedate23; ?></td>
                    <td><?php echo $alarmedate24; ?></td>
                    <td>
                        <?php echo $alarmecommentaire6; ?>
                    </td>
                </tr>
                <tr>
                    <td><strong>Entretien de la Pompe</strong></td>
                    <td><?php echo $alarmedate25; ?></td>
                    <td><?php echo $alarmedate26; ?></td>
                    <td><?php echo $alarmedate27; ?></td>
                    <td><?php echo $alarmedate28; ?></td>
                    <td>
                        <?php echo $alarmecommentaire7; ?>
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
                    <td><?php echo $manipdate1; ?></td>
                    <td><?php echo $manipdate2; ?></td>
                    <td><?php echo $manipdate3; ?></td>
                    <td><?php echo $manipdate4; ?></td>
                    <td>
                        <?php echo $manipcommentaire1; ?>
                    </td>
                </tr>
                <tr>
                    <td><strong>Remplissage du réservoir</strong></td>
                    <td><?php echo $manipdate5; ?></td>
                    <td><?php echo $manipdate6; ?></td>
                    <td><?php echo $manipdate7; ?></td>
                    <td><?php echo $manipdate8; ?></td>
                    <td>
                        <?php echo $manipcommentaire2; ?>
                    </td>
                </tr>
                <tr>
                    <td><strong>Connexion réservoir/tubulaire</strong></td>
                    <td><?php echo $manipdate9; ?></td>
                    <td><?php echo $manipdate10; ?></td>
                    <td><?php echo $manipdate11; ?></td>
                    <td><?php echo $manipdate12; ?></td>
                    <td>
                        <?php echo $manipcommentaire3; ?>
                    </td>
                </tr> 
                <tr>
                    <td><strong>Retour du piston</strong></td>
                    <td><?php echo $manipdate13; ?></td>
                    <td><?php echo $manipdate14; ?></td>
                    <td><?php echo $manipdate15; ?></td>
                    <td><?php echo $manipdate16; ?></td>
                    <td>
                        <?php echo $manipcommentaire4; ?>
                    </td>
                </tr>
                <tr>
                    <td><strong>Purge de la tubulure</strong></td>
                    <td><?php echo $manipdate17; ?></td>
                    <td><?php echo $manipdate18; ?></td>
                    <td><?php echo $manipdate19; ?></td>
                    <td><?php echo $manipdate20; ?></td>
                    <td>
                        <?php echo $manipcommentaire5; ?>
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
                    <td><?php echo $cathdate1; ?></td>
                    <td><?php echo $cathdate2; ?></td>
                    <td><?php echo $cathdate3; ?></td>
                    <td><?php echo $cathdate4; ?></td>
                    <td><?php echo $cathcommentaire1; ?></td>
                </tr>
                <tr>
                    <td><strong>Retrait de l'adhésif et de la protection de l'aiguille</strong></td>
                    <td><?php echo $cathdate5; ?></td>
                    <td><?php echo $cathdate6; ?></td>
                    <td><?php echo $cathdate7; ?></td>
                    <td><?php echo $cathdate8; ?></td>
                    <td><?php echo $cathcommentaire2; ?></td>
                </tr>
                <tr>
                    <td><strong>Armement de l'Inserteur</strong></td>
                    <td><?php echo $cathdate9; ?></td>
                    <td><?php echo $cathdate10; ?></td>
                    <td><?php echo $cathdate11; ?></td>
                    <td><?php echo $cathdate12; ?></td>
                    <td><?php echo $cathcommentaire3; ?></td>
                </tr> 
                <tr>
                    <td><strong>Choix du lieu d'injection</strong></td>
                    <td><?php echo $cathdate13; ?></td>
                    <td><?php echo $cathdate14; ?></td>
                    <td><?php echo $cathdate15; ?></td>
                    <td><?php echo $cathdate16; ?></td>
                    <td><?php echo $cathcommentaire4; ?></td>
                </tr>
                <tr>
                    <td><strong>Désinfection cutanée</strong></td>
                    <td><?php echo $cathdate17; ?></td>
                    <td><?php echo $cathdate18; ?></td>
                    <td><?php echo $cathdate19; ?></td>
                    <td><?php echo $cathdate20; ?></td>
                    <td><?php echo $cathcommentaire5; ?></td>
                </tr>
                <tr>
                    <td><strong>Déclenchement de l'Inserteur</strong></td>
                    <td><?php echo $cathdate21; ?></td>
                    <td><?php echo $cathdate22; ?></td>
                    <td><?php echo $cathdate23; ?></td>
                    <td><?php echo $cathdate24; ?></td>
                    <td><?php echo $cathcommentaire6; ?></td>
                </tr>
                <tr>
                    <td><strong>Retrait de l'aiguille</strong></td>
                    <td><?php echo $cathdate25; ?></td>
                    <td><?php echo $cathdate26; ?></td>
                    <td><?php echo $cathdate27; ?></td>
                    <td><?php echo $cathdate28; ?></td>
                    <td><?php echo $cathcommentaire7; ?></td>
                </tr>
                <tr>
                    <td><strong>Amorce de la canule</strong></td>
                    <td><?php echo $cathdate29; ?></td>
                    <td><?php echo $cathdate211; ?></td>
                    <td><?php echo $cathdate212; ?></td>
                    <td><?php echo $cathdate213; ?></td>
                    <td><?php echo $cathcommentaire8; ?></td>
                </tr>
                <tr>
                    <td><strong>Contrôle glycémique 2h après la pose</strong></td>
                    <td><?php echo $cathdate214; ?></td>
                    <td><?php echo $cathdate215; ?></td>
                    <td><?php echo $cathdate216; ?></td>
                    <td><?php echo $cathdate217; ?></td>
                    <td><?php echo $cathcommentaire9; ?></td>
                </tr>
                <tr>
                    <td><strong>Conservation de l'insuline</strong></td>
                    <td><?php echo $cathdate218; ?></td>
                    <td><?php echo $cathdate219; ?></td>
                    <td><?php echo $cathdate221; ?></td>
                    <td><?php echo $cathdate222; ?></td>
                    <td><?php echo $cathcommentaire10; ?></td>
                </tr>
                <tr>
                    <td><strong>Fréquence de changement des cathéters</strong></td>
                    <td><?php echo $cathdate223; ?></td>
                    <td><?php echo $cathdate224; ?></td>
                    <td><?php echo $cathdate225; ?></td>
                    <td><?php echo $cathdate226; ?></td>
                    <td><?php echo $cathcommentaire11; ?></td>
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
                    <strong>&nbsp;&nbsp;&nbsp;&nbsp; * &nbsp;&nbsp;&nbsp;Stylo d'insuline rapide : </strong><?php echo $perempdate1; ?><br/>
                    <strong>&nbsp;&nbsp;&nbsp;&nbsp; * &nbsp;&nbsp;&nbsp;Stylo d'insuline lente : </strong><?php echo $perempdate2; ?><br/>
                    <strong>&nbsp;&nbsp;&nbsp;&nbsp; * &nbsp;&nbsp;&nbsp;Aiguilles : </strong> <?php echo $connaissance5; ?><br/>
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
                <td><?php echo $connaissance6; ?></td>
                <td><?php echo $cnsobservation3; ?></td>
            </tr>
            <tr>
                <td><strong>CAT en cas d'hypoglycémie</strong></td>
                <td><?php echo $connaissance7; ?></td>
                <td><?php echo $cnsobservation4; ?></td>
            </tr>
            <tr>
                <td><strong>Maitrise du ressucrage</strong></td>
                <td><?php echo $connaissance8; ?></td>
                <td><?php echo $cnsobservation5; ?></td>
            </tr>                        
            <tr>
                <td><strong>CAT en cas d'hyperglycémie</strong></td>
                <td><?php echo $connaissance9; ?></td>
                <td><?php echo $cnsobservation6; ?></td>
            </tr>
            <tr>
                <td><strong>Maitrise de l'acceptation du bolus de correction</strong></td>
                <td><?php echo $connaissance10; ?></td>
                <td><?php echo $cnsobservation7; ?></td>
            </tr>
            <tr>
                <td><strong>CAT en cas d'accétonémie</strong></td>
                <td><?php echo $connaissance11; ?></td>
                <td><?php echo $cnsobservation8; ?></td>
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
                    <td><?php echo $asgconnaissance1; ?></td>
                    <td><?php echo $asgconnaissance2; ?></td>
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
/*
  unlink("img/image".$id."bardate1.png");
  unlink("img/image".$id."bardate2.png");
  unlink("img/image".$id."barhg.png");
  unlink("img/image".$id."bar.png");
 */
?>