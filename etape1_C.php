<?php
$statut = $_SESSION['statut'];
$statut = utf8_encode($statut);
if ($statut == "Médecin traitant") {
    ?>
    <script type="text/javascript">
        $(document).ready(function () {
            $('.medecintraitant').removeClass('hidden');
            $('#ruemt').attr('value', "<?php echo($_SESSION['rue']); ?>");
            $('#codepostalmt').attr('value', "<?php echo($_SESSION['code-postal']); ?>");
            $('#telmt').attr('value', "<?php echo($_SESSION['tel']); ?>");
            $('#villemt').attr('value', "<?php echo($_SESSION['ville']); ?>");
            $('#mailmt').attr('value', "<?php echo($_SESSION['email']); ?>");
            $('#medecintraitant').attr("value", "<?php echo($_SESSION['nom'] . " " . $_SESSION['prenom'] ); ?>");
        });
    </script>
    <?php
} else if ($statut == "Diabétologue libéral") {
    ?>
    <script type="text/javascript">
        $(document).ready(function () {
            $('.diabetologueliberal').removeClass('hidden');
            $('#ruedl').attr('value', "<?php echo($_SESSION['rue']); ?>");
            $('#codepostaldl').attr('value', "<?php echo($_SESSION['code-postal']); ?>");
            $('#teldl').attr('value', "<?php echo($_SESSION['tel']); ?>");
            $('#villedl').attr('value', "<?php echo($_SESSION['ville']); ?>");
            $('#maildl').attr('value', "<?php echo($_SESSION['email']); ?>");
            $('#diabetologueliberal').attr("value", "<?php echo($_SESSION['nom'] . " " . $_SESSION['prenom'] ); ?>");
        });
    </script>
    <?php
} else if ($statut == "Diabétologue prescripteur") {
    ?>
    <script type="text/javascript">
        $(document).ready(function () {
            $('.prescripteur').removeClass('hidden');
            $('#ruep').attr('value', "<?php echo($_SESSION['rue']); ?>");
            $('#codepostalp').attr('value', "<?php echo($_SESSION['code-postal']); ?>");
            $('#teldp').attr('value', "<?php echo($_SESSION['tel']); ?>");
            $('#villedp').attr('value', "<?php echo($_SESSION['ville']); ?>");
            $('#maildp').attr('value', "<?php echo($_SESSION['email']); ?>");
            $('#diabetologueprescripteur').attr("value", "<?php echo($_SESSION['nom'] . " " . $_SESSION['prenom'] ); ?>");
        });
    </script>
    <?php
} else if ($statut == "Diététicienne") {
    ?>
    <script type="text/javascript">
        $(document).ready(function () {
            $('.dieteticienne').removeClass('hidden');
            $('#rued').attr('value', "<?php echo($_SESSION['rue']); ?>");
            $('#codepostald').attr('value', "<?php echo($_SESSION['code-postal']); ?>");
            $('#teld').attr('value', "<?php echo($_SESSION['tel']); ?>");
            $('#villed').attr('value', "<?php echo($_SESSION['ville']); ?>");
            $('#maild').attr('value', "<?php echo($_SESSION['email']); ?>");
            $('#dieteticienne').attr("value", "<?php echo($_SESSION['nom'] . " " . $_SESSION['prenom'] ); ?>");
        });
    </script>
    <?php
}
$reponsecm = $bdd->query("SELECT * FROM choixmateriel WHERE idPrescripteur = '" . $_SESSION['id'] . "' and idPatient = '" . $id . "'");
$donneescm = $reponsecm->fetch();
$reponse = $bdd->query("SELECT * FROM infobastide WHERE idPrescripteur = '" . $_SESSION['id'] . "' and idPatient = '" . $id . "'");
$donnees = $reponse->fetch();
$reponsepre = $bdd->query("SELECT * FROM infoprescripteur WHERE idPrescripteur = '" . $_SESSION['id'] . "' and idPatient = '" . $id . "'");
$donneespre = $reponsepre->fetch();
$pieces = explode("-", $id);
$reponsep = $bdd->query("SELECT * FROM infopatient WHERE idPrescripteur = '" . $_SESSION['id'] . "' and nompatient = '" . $pieces[0] . "' and prenompatient = '" . $pieces[1] . "'");
$donneesp = $reponsep->fetch();
?>

<style type="text/css">
    .field1 
    {
        min-height: 20px;
        padding: 19px;
        margin-bottom: 20px;
        background-color: rgba(0,63,71,.5);
        border-radius: 10px;
        -webkit-box-shadow: inset 0 1px 1px rgba(0,63,71,.5);
        box-shadow: inset 0 1px 1px rgba(0,63,71,.5);
    }
</style>
<script src="dropdown_master/js/msdropdown/jquery.dd.min.js" type="text/javascript"></script>

<link rel="stylesheet" type="text/css" href="dropdown_master/css/msdropdown/dd.css" />
<div class="container-fluid">
    <fieldset class="field1">

        <center><h4>INFIRMIERE BASTIDE MEDICAL</h4></center>

        <?php  
        	if(isset($_POST['capture'])){

        		$capture = $_POST['capture']; 	
        		$_SESSION['capture'] = $_POST['capture'];
        	}else{
        		$capture = $_SESSION['capture'];
        	}
        	?>

        <input type="hidden" class="form-control" value="<?php echo $capture; ?>" name="capture" id="capture">

        <div class="form-group">
            <label for="nom" class="col-sm-4 control-label">Nom IDE Responsable:</label>
            <div class="col-sm-7">
                <input type="text" placeholder="Nom IDE Responsable" class="form-control" readonly="" value="<?php echo $donnees['nomresp']; ?>" name="nomresp" id="nomresp">
            </div>
        </div>
        <div class="form-group">
            <label for="prenom" class="col-sm-4 control-label">Prénom:</label>
            <div class="col-sm-7">
                <input type="text" placeholder="Prenom"  class="form-control" readonly="" value="<?php echo $donnees['prenomresp']; ?>" name="prenomresp" id="prenomresp">
            </div>
        </div>

        <div class="form-group">
            <label for="mobile" class="col-sm-4 control-label">Mobile:</label>
            <div class="col-sm-7">
                <input type="number" placeholder="Mobile"  class="form-control" value="<?php echo $donnees['mobileresp']; ?>" name="mobileresp" id="mobileresp">
            </div>
        </div>

        <div class="form-group">
            <label for="coordonnee" class="col-sm-4 control-label">Coordonnées Secrétariat/Astreinte:</label>
            <div class="col-sm-7">
                <input type="text" placeholder="Coordonnées" readonly="" class="form-control" value="<?php echo $donnees['coordonnee']; ?>" name="coordonnee" id="coordonnee">
            </div>
        </div>

    </fieldset>
    <fieldset class="col-sm-5">
        <div class="field1">
            <center><h4>RENSEIGNEMENTS PATIENT</h4></center>

            <div class="form-group">
                <label for="nom" class="col-sm-4 control-label">Nom:</label>
                <div class="col-sm-7">
                    <input type="text" readonly="" placeholder="Nom Patient" value="<?php echo $donneesp['nompatient']; ?>" class="form-control" name="nompatient" id="nompatient">
                </div>
            </div>
            <div class="form-group">
                <label for="prenom" class="col-sm-4 control-label">Prénom:</label>
                <div class="col-sm-7">
                    <input type="text" readonly="" placeholder="Prenom Patient"  value="<?php echo $donneesp['prenompatient']; ?>" class="form-control" name="prenompatient" id="prenompatient">
                </div>
            </div>

            <div class="form-group">
                <label for="datenaissance" class="col-sm-4 control-label">Né(e) le:</label>
                <div class="col-sm-7">
                    <input type="text" readonly="" placeholder="Date de naissance"  class="form-control date datepickery" name="datenaissance" id="datenaissance">
                </div>
            </div>


            <div class="form-group">
                <label for="age" class="col-sm-4 control-label"> Age: </label>
                <div class="col-sm-7">
                    <div class="input-group">
                        <input type="number" value="<?php echo $donneesp['agepatient']; ?>" class="form-control" name="agepatient" id="agepatient">
                        <span class="input-group-addon">ans</span>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="tel" class="col-sm-4 control-label"> Tel: </label>
                <div class="col-sm-7">
                    <input type="number" placeholder="Téléphone"  value="<?php echo $donneesp['telpatient']; ?>" class="form-control" name="telpatient" id="telpatient">
                </div>
            </div>
            <div class="form-group">
                <label for="mobile" class="col-sm-4 control-label"> Mobile: </label>
                <div class="col-sm-7">
                    <input type="number" placeholder="Mobile"  value="<?php echo $donneesp['mobilepatient']; ?>" class="form-control" name="mobilepatient" id="mobilepatient">
                </div>
            </div>
            <div class="form-group">
                <label for="email" class="col-sm-4 control-label"> Email: </label>
                <div class="col-sm-7">
                    <input type="text" placeholder="email"  value="<?php echo $donneesp['emailpatient']; ?>" class="form-control" name="emailpatient" id="emailpatient">
                </div>
            </div>
            <div class="form-group">
                <label for="adresse" class="col-sm-4 control-label"> Numéro et nom de rue: </label>
                <div class="col-sm-7">
                    <input type="text" readonly="" placeholder="numéro et nom de rue"  value="<?php echo $donneesp['adressepatient']; ?>" class="form-control" name="adressepatient" id="adressepatient">
                </div>
            </div>
            <div class="form-group">
                <label for="code" class="col-sm-4 control-label"> Code postal: </label>
                <div class="col-sm-7">
                    <input type="number" readonly="" placeholder="Code postal"  value="<?php echo $donneesp['codepostalpatient']; ?>" class="form-control" name="codepostalpatient" id="codepostalpatient">
                </div>
            </div>
            <div class="form-group">
                <label for="ville" class="col-sm-4 control-label"> Ville: </label>
                <div class="col-sm-7">
                    <input type="text" readonly="" placeholder="Ville"  value="<?php echo $donneesp['villepatient']; ?>" class="form-control" name="villepatient" id="villepatient">
                </div>
            </div>
        </div>
    </fieldset>

    <fieldset class="col-sm-7">
        <div class="field1">
            <center><h4>RENSEIGNEMENTS PRESCRIPTEUR</h4></center>


            <div class="form-group">
                <label for="prescripteur" class="col-sm-4 control-label">Etablissement prescripteur:</label>
                <div class="col-sm-7">
                    <input type="text" readonly="" value="<?php echo $donneespre['etablissementprescripteur']; ?>" placeholder="Etablissement prescripteur" class="form-control" name="etablissementprescripteur" id="etablissementprescripteur">
                </div>
            </div>
            <div class="form-group">
                <label for="service" class="col-sm-4 control-label">Service:</label>
                <div class="col-sm-7">
                    <input type="text" readonly="" value="<?php echo $donneespre['serviceep']; ?>" placeholder="Service" class="form-control" name="serviceep" id="serviceep">
                </div>
            </div>
            <div class="form-group">
                <label for="npp" class="col-sm-4 control-label">Nom et prénom:</label>
                <div class="col-sm-7">
                    <input type="text" readonly="" value="<?php echo $donneespre['npp']; ?>" placeholder="nom et prénom du prescripteur" class="form-control" name="npp" id="npp">
                </div>
            </div>
            <div class="form-group">
                <label for="tel" class="col-sm-4 control-label">Tél:</label>
                <div class="col-sm-7">
                    <input type="text" value="<?php echo $donneespre['telep']; ?>" placeholder="téléphone" class="form-control" name="telep" id="telep">
                </div>
            </div>
            <div class="form-group">
                <label for="mail" class="col-sm-4 control-label">Mail:</label>
                <div class="col-sm-7">
                    <input type="text" value="<?php echo $donneespre['mailep']; ?>" placeholder="mail" class="form-control" name="mailep" id="mailep">
                </div>
            </div>
            <div class="form-group">
                <label for="adresse" class="col-sm-4 control-label">Adresse:</label>
                <div class="col-sm-7">
                    <input type="text" readonly="" value="<?php echo $donneespre['adressep']; ?>" placeholder="adresse de l’Etablissement" class="form-control" name="adressep" id="adressep">
                </div>
            </div>
            <br>
            <div class="prescripteur hidden">
                <div class="form-group">
                    <label for="diabetologueprescripteur" class="col-sm-4 control-label">Diabétologue prescripteur:</label>
                    <div class="col-sm-7">
                        <input type="text" placeholder="Diabétologue prescripteur" class="form-control" name="diabetologueprescripteur" id="diabetologueprescripteur" value="" readonly>
                    </div>
                </div>
                <div class="form-group col-sm-6">
                    <label for="tel" class="col-sm-3 control-label">Tél:</label>
                    <div class="col-sm-9">
                        <input type="number" placeholder="Téléphone" class="form-control" name="teldp" id="teldp" value="" readonly>
                    </div>
                </div>

                <div class="form-group col-sm-6">
                    <label for="mobile" class="col-sm-3 control-label">Mobile:</label>
                    <div class="col-sm-9">
                        <input type="number" readonly="" value="<?php echo $donneespre['mobiledp']; ?>" placeholder="Mobile" class="form-control" name="mobiledp" id="mobiledp">
                    </div>
                </div>

                <div class="form-group col-sm-6">
                    <label for="tel" class="col-sm-3 control-label">Rue:</label>
                    <div class="col-sm-9">
                        <input type="text" placeholder="numéro et nom de rue" class="form-control" name="ruedp" id="ruedp" value="" readonly>
                    </div>
                </div>

                <div class="form-group col-sm-6">
                    <label for="mobile" class="col-sm-3 control-label">Code postal:</label>
                    <div class="col-sm-9">
                        <input type="text" placeholder="code postal" class="form-control" name="codepostaldp" id="codepostaldp" readonly>
                    </div>
                </div>

                <div class="form-group col-sm-6">
                    <label for="ville" class="col-sm-3 control-label">Ville:</label>
                    <div class="col-sm-9">
                        <input type="text" placeholder="Ville" class="form-control" name="villedp" id="villedp" value="" readonly>
                    </div>
                </div>

                <div class="form-group col-sm-6">
                    <label for="mail" class="col-sm-3 control-label">Mail:</label>
                    <div class="col-sm-9">
                        <input type="text" placeholder="mail" class="form-control" name="maildp" id="maildp" value="" readonly>
                    </div>
                </div>
            </div>


            <div class="diabetologueliberal hidden">
                <div class="form-group">
                    <label for="diabetologueliberal" class="col-sm-4 control-label">Diabétologue libéral:</label>
                    <div class="col-sm-7">
                        <input type="text" placeholder="Diabétologue libéral" class="form-control" name="diabetologueliberal" id="diabetologueliberal" value="" readonly>
                    </div>
                </div>
                <div class="form-group col-sm-6">
                    <label for="tel" class="col-sm-3 control-label">Tel:</label>
                    <div class="col-sm-9">
                        <input type="number" placeholder="Téléphone" class="form-control" name="teldl" id="teldl" value="" readonly>
                    </div>
                </div>

                <div class="form-group col-sm-6">
                    <label for="mobile" class="col-sm-3 control-label">Mobile:</label>
                    <div class="col-sm-9">
                        <input type="number" readonly="" value="<?php echo $donneespre['mobiledl']; ?>" placeholder="Mobile" class="form-control" name="mobiledl" id="mobiledl">
                    </div>
                </div>

                <div class="form-group col-sm-6">
                    <label for="tel" class="col-sm-3 control-label">Rue:</label>
                    <div class="col-sm-9">
                        <input type="text" placeholder="numéro et nom de rue" class="form-control" name="ruedl" id="ruedl" value="" readonly>
                    </div>
                </div>

                <div class="form-group col-sm-6">
                    <label for="mobile" class="col-sm-3 control-label">Code postal:</label>
                    <div class="col-sm-9">
                        <input type="text" placeholder="code postal" class="form-control" name="codepostaldl" id="codepostaldl" readonly>
                    </div>
                </div>

                <div class="form-group col-sm-6">
                    <label for="ville" class="col-sm-3 control-label">Ville:</label>
                    <div class="col-sm-9">
                        <input type="text" placeholder="Ville" class="form-control" name="villedl" id="villedl" value="" readonly>
                    </div>
                </div>

                <div class="form-group col-sm-6">
                    <label for="mail" class="col-sm-3 control-label">Mail:</label>
                    <div class="col-sm-9">
                        <input type="text" placeholder="mail" class="form-control" name="maildl" id="maildl" value="" readonly>
                    </div>
                </div>
            </div>


            <div class="medecintraitant hidden">
                <div class="form-group">
                    <label for="medecintraitant" class="col-sm-4 control-label">Médecin traitant:</label>
                    <div class="col-sm-7">
                        <input type="text" placeholder="Médecin traitant" class="form-control" name="medecintraitant" id="medecintraitant" value="" readonly>
                    </div>
                </div>
                <div class="form-group col-sm-6">
                    <label for="tel" class="col-sm-3 control-label">Tel:</label>
                    <div class="col-sm-9">
                        <input type="number" placeholder="Téléphone" class="form-control" name="telmt" id="telmt" value="" readonly>
                    </div>
                </div>

                <div class="form-group col-sm-6">
                    <label for="mobile" class="col-sm-3 control-label">Mobile:</label>
                    <div class="col-sm-9">
                        <input type="number" readonly="" value="<?php echo $donneespre['mobilemt']; ?>" placeholder="Mobile" class="form-control" name="mobilemt" id="mobilemt">
                    </div>
                </div>

                <div class="form-group col-sm-6">
                    <label for="tel" class="col-sm-3 control-label">Rue:</label>
                    <div class="col-sm-9">
                        <input type="text" placeholder="numéro et nom de rue" class="form-control" name="ruemt" id="ruemt" value="" readonly>
                    </div>
                </div>

                <div class="form-group col-sm-6">
                    <label for="mobile" class="col-sm-3 control-label">Code postal:</label>
                    <div class="col-sm-9">
                        <input type="text" placeholder="code postal" class="form-control" name="codepostalmt" id="codepostalmt" readonly>
                    </div>
                </div>

                <div class="form-group col-sm-6">
                    <label for="ville" class="col-sm-3 control-label">Ville:</label>
                    <div class="col-sm-9">
                        <input type="text" placeholder="Ville" class="form-control" name="villemt" id="villemt" value="" readonly>
                    </div>
                </div>

                <div class="form-group col-sm-6">
                    <label for="mail" class="col-sm-3 control-label">Mail:</label>
                    <div class="col-sm-9">
                        <input type="text" placeholder="mail" class="form-control" name="mailmt" id="mailmt" value="" readonly>
                    </div>
                </div>

            </div>


            <div class="dieteticienne hidden">

                <div class="form-group">
                    <label for="dieteticienne" class="col-sm-4 control-label">Diététicienne:</label>
                    <div class="col-sm-7">
                        <input type="text" placeholder="Diététicienne" class="form-control" name="dieteticienne" id="dieteticienne" value="" readonly>
                    </div>
                </div>
                <div class="form-group col-sm-6">
                    <label for="tel" class="col-sm-3 control-label">Tel:</label>
                    <div class="col-sm-9">
                        <input type="number" placeholder="Téléphone" class="form-control" name="teld" id="teld" value="" readonly>
                    </div>
                </div>

                <div class="form-group col-sm-6">
                    <label for="mobile" class="col-sm-3 control-label">Mobile:</label>
                    <div class="col-sm-9">
                        <input type="number" readonly="" value="<?php echo $donneespre['mobiled']; ?>" placeholder="Mobile" class="form-control" name="mobiled" id="mobiled">
                    </div>
                </div>

                <div class="form-group col-sm-6">
                    <label for="tel" class="col-sm-3 control-label">Rue:</label>
                    <div class="col-sm-9">
                        <input type="text" placeholder="numéro et nom de rue" class="form-control" name="rued" id="rued" value="" readonly>
                    </div>
                </div>

                <div class="form-group col-sm-6">
                    <label for="mobile" class="col-sm-3 control-label">Code postal:</label>
                    <div class="col-sm-9">
                        <input type="text" placeholder="code postal" class="form-control" name="codepostald" id="codepostald" readonly>
                    </div>
                </div>

                <div class="form-group col-sm-6">
                    <label for="ville" class="col-sm-3 control-label">Ville:</label>
                    <div class="col-sm-9">
                        <input type="text" placeholder="Ville" class="form-control" name="villed" id="villed" value="" readonly>
                    </div>
                </div>

                <div class="form-group col-sm-6">
                    <label for="mail" class="col-sm-3 control-label">Mail:</label>
                    <div class="col-sm-9">
                        <input type="text" placeholder="mail" class="form-control" name="maild" id="maild" value="" readonly>
                    </div>
                </div>

            </div>


            <div class="form-group">
                <label for="membrereseau" class="col-sm-4 control-label">Membre réseau:</label>
                <div class="col-sm-7">
                    <div class="radio">
                        <label>
                            <input type="radio" name="membrereseau" id="optionsRadios11" value="Oui">
                            Oui
                        </label>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <label>
                            <input type="radio" name="membrereseau" id="optionsRadios12" value="Non">
                            Non
                        </label>
                    </div>
                </div>
            </div>


            <div class="form-group" id="reseau" style="display:none;">
                <label for="nomreseau" class="col-sm-4 control-label">Nom du réseau:</label>
                <div class="col-sm-7">
                    <input type="text" readonly="" value="<?php echo $donneespre['nomreseau']; ?>"  placeholder="Nom du réseau" class="form-control" name="nomreseau" id="nomreseau">
                </div>
            </div>

        </div>
    </fieldset>

    <fieldset class="field1 col-sm-12">
        <center><h4>CHOIX DU MATERIEL</h4></center>


        <div class="form-group">
            <label for="img" class="col-sm-4 control-label">Pompe :</label>
            <div class="col-sm-7">
                <script>
                    $(document).ready(function ()
                    {
                        
                        var materielpompe = "<?php echo $donneescm['pompe']; ?>";
                        var modeleCatheter = "<?php echo $donneescm['modele']; ?>";
                        var modele2Catheter = "<?php echo $donneescm['modele2']; ?>";
                        var modelereservoir = "<?php echo $donneescm['reservoir']; ?>";
                        var pompeArray = []; 
                        var modeleArray = [];
                        var reservoirArray = [];
                        $('[name="datenaissance"]').val("<?php echo $donneesp['datenaissance']; ?>");
                        $('#datenaissance').datepicker("destroy");
                        
                        $('#webmenu>option').each(function() {
                            pompeArray.push($(this).val());
                        });
                        $('#modelecatheter1>optgroup>option').each(function() {
                            modeleArray.push($(this).val());
                            console.log(modeleArray);
                        });
                        $('#reservoir>optgroup>option').each(function() {
                            reservoirArray.push($(this).val());
                            console.log(reservoirArray);
                        });
                            if($.inArray(materielpompe, pompeArray) != -1)
                            {
                                $('[name="Pompe"]').val(materielpompe);
                                $('#autrespompe').addClass('hidden');
                            } else {
                                $('#autrespompe').removeClass('hidden');
                                $('#pompeautres').val(materielpompe);
                                $('[name="Pompe"]').val("autres");
                                $('#autres').val(materielpompe);
                            }
                            if($.inArray(modeleCatheter, modeleArray) != -1)
                            {
                                $('[name="modele"]').val(modeleCatheter);
                                $('#autresmodele').addClass('hidden');
                            } else {
                                $('#autresmodele').removeClass('hidden');
                                $('#catheter1autres').val(modeleCatheter);
                                $('[name="modele"]').val("autres");
                                $('#autrescatheter1').val(modeleCatheter);
                            }
                            if($.inArray(modele2Catheter, modeleArray) != -1)
                            {
                                $('[name="modele2"]').val(modele2Catheter);
                                $('#autresmodele2').addClass('hidden');
                            } else {
                                $('#autresmodele2').removeClass('hidden');
                                $('#catheter2autres').val(modele2Catheter);
                                $('[name="modele2"]').val("autres");
                                $('#autrescatheter2').val(modele2Catheter);
                            }
                            if($.inArray(modelereservoir, reservoirArray) != -1)
                            {
                                $('[name="reservoir"]').val(modelereservoir);
                                $('#autrereservoir').addClass('hidden');
                            } else {
                                $('#autrereservoir').removeClass('hidden');
                                $('#reservoirautres').val(modelereservoir);
                                $('[name="reservoir"]').val("autres");
                                $('#reservoir_autres').val(modelereservoir);
                            }
                      
                        $('[name="catheter"]').val("<?php echo utf8_encode($donneescm['typecatheter']); ?>");
                        $('[name="catheter2"]').val("<?php echo utf8_encode($donneescm['typecatheter2']); ?>");
                        if ("<?php echo $donneescm['inserteur']; ?>" === "Oui") {
                            $("form #optionsRadios1").attr("checked", true);
                        } else {
                            $("form #optionsRadios2").attr("checked", true);
                        }
                        
                        if ("<?php echo $donneespre['membrereseau']; ?>" === "Oui"){
                            $("form #optionsRadios11").attr("checked", true);
                            document.querySelector("#reseau").style.display = (window.getComputedStyle(document.querySelector('#reseau')).display == 'none') ? "block" : "hide";
                        } else {
                            $("form #optionsRadios12").attr("checked", true);
                            document.querySelector("#reseau").style.display = (window.getComputedStyle(document.querySelector('#reseau')).display == 'hide') ? "block" : "none";
                        }
                    });
                </script>
                <select id="webmenu" class="form-control" name="Pompe">
                    <option disabled>Laboratoire MEDTRONIC</option>
                    <option value="Paradigm véo série 5 noir" data-image="img/paradigm_veo_serie5_noir.jpg">&nbsp;&nbsp;&nbsp;Paradigm véo série 5 noir</option>
                    <option value="Paradigm véo série 5 gris" data-image="img/paradigm_veo_serie5.png">&nbsp;&nbsp;&nbsp;Paradigm véo série 5 gris</option>
                    <option value="Paradigm véo série 5 bleu" data-image="img/paradigm_veo_serie5_bleu.jpg">&nbsp;&nbsp;&nbsp;Paradigm véo série 5 bleu</option>
                    <option value="Paradigm véo série 5 violet" data-image="img/paradigm_veo_serie5_violet.jpg">&nbsp;&nbsp;&nbsp;Paradigm véo série 5 violet</option>
                    <option value="Paradigm véo série 5 rose" data-image="img/paradigm_veo_serie5_rose.jpg">&nbsp;&nbsp;&nbsp;Paradigm véo série 5 rose</option>

                    <option value="Paradigm véo série 7 noir" data-image="img/paradigm_veo_serie5_noir.jpg">&nbsp;&nbsp;&nbsp;Paradigm véo série 7 noir</option>
                    <option value="Paradigm véo série 7 gris" data-image="img/paradigm_veo_serie5.png">&nbsp;&nbsp;&nbsp;Paradigm véo série 7 gris</option>
                    <option value="Paradigm véo série 7 bleu" data-image="img/paradigm_veo_serie5_bleu.jpg">&nbsp;&nbsp;&nbsp;Paradigm véo série 7 bleu</option>
                    <option value="Paradigm véo série 7 violet" data-image="img/paradigm_veo_serie5_violet.jpg">&nbsp;&nbsp;&nbsp;Paradigm véo série 7 violet</option>
                    <option value="Paradigm véo série 7 rose" data-image="img/paradigm_veo_serie5_rose.jpg">&nbsp;&nbsp;&nbsp;Paradigm véo série 7 rose</option>

                    <option value="640G Noir" data-image="img/640G_noir.jpg">&nbsp;&nbsp;&nbsp;640G Noir</option>
                    <option value="640G Bleu" data-image="img/640G_bleu.jpg">&nbsp;&nbsp;&nbsp;640G Bleu</option>
                    <option value="640G Blanc" data-image="img/640G_blanc.jpg">&nbsp;&nbsp;&nbsp;640G Blanc</option>
                    <option value="640G Violet" data-image="img/640G_violet.jpg">&nbsp;&nbsp;&nbsp;640G Violet</option>
                    <option value="640G Fuschia" data-image="img/640G_fuschia.jpg">&nbsp;&nbsp;&nbsp;640G Fuschia</option>

                    <option disabled>Laboratoire ROCHE</option> 
                    <option value="ACCU-CHEK Spirit Combo" data-image="img/ACCU-CHEK_Spirit_Combo.jpg">&nbsp;&nbsp;&nbsp;ACCU-CHEK Spirit Combo</option>
                    <option value="ACCU-CHEK Insight" data-image="img/ACCU-CHEK_insight.jpg">&nbsp;&nbsp;&nbsp;ACCU-CHEK Insight</option>

                    <option disabled>Laboratoire JOHNSON &amp; JOHNSON</option>
                    <option value="Animas vibe noir" data-image="img/animas_vibe_noir.jpg">&nbsp;&nbsp;&nbsp;ANIMAS vibe noir</option>
                    <option value="Animas vibe bleu" data-image="img/animas_vibe_bleu.jpg">&nbsp;&nbsp;&nbsp;ANIMAS vibe bleu</option>
                    <option value="Animas vibe vert" data-image="img/animas_vibe_vert.jpg">&nbsp;&nbsp;&nbsp;ANIMAS vibe vert</option>
                    <option value="Animas vibe gris" data-image="img/animas_vibe_gris.jpg">&nbsp;&nbsp;&nbsp;ANIMAS vibe gris</option>
                    <option value="Animas vibe rose" data-image="img/animas_vibe_rose.jpg">&nbsp;&nbsp;&nbsp;ANIMAS vibe rose</option>

                    <option disabled>Laboratoire YPSOMED</option>
                    <option value="OMNIPOD" data-image="img/omnipod.jpg">OMNIPOD</option>

                    <option disabled></option>
                    <option value="autres" data-image="img/autres.jpg" id="autres">Autres...</option>
                </select>

            </div>
        </div>

        <div class="form-group hidden" id="autrespompe">
            <label for="pompeautres" class="col-sm-4 control-label"></label>
            <div class="col-sm-7">
                <input type="text"  placeholder="Pompe" class="form-control" name="pompeautres" id="pompeautres">
            </div>
        </div>

        <div class="form-group">
            <label for="dateinstallation" class="col-sm-4 control-label">Date d'installation:</label>
            <div class="col-sm-7">
                <input type="text" readonly="" value="<?php echo $donneescm['dateinstallation']; ?>" placeholder="Date d'installation" class="form-control date datepickerAll" name="dateinstallation" id="dateinstallation">
            </div>
        </div>

        <div class="row">
            <div class="col-lg-6">
                <center><h4>Cathéter 1</h4></center>
                <div class="form-group">
                    <label for="mobile" class="col-sm-4 control-label">Type de cathéter:</label>
                    <div class="col-sm-7">
                        <select name="catheter" class="form-control">
                            <option value="DROIT">DROIT</option>
                            <option value="TANGENTIEL">TANGENTIEL</option>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label for="modele" class="col-sm-4 control-label">Modèle:</label>
                    <div class="col-sm-7">
                        <!-- <input type="text" placeholder="Modèle" class="form-control" name="modele" id="modele"> -->
                        <select name="modele" class="form-control" id="modelecatheter1">
                             <option value="" selected hidden>---- Choisir le modèle de Cathéter ----</option>
                            <optgroup label="Laboratoire MEDTRONIC">
                                <option value="QUICKSET Connexion Luer Lock">QUICKSET Connexion Luer Lock</option>
                                <option value="QUICKSET Connexion Paradigm">QUICKSET Connexion Paradigm</option>
                                <option value="SILHOUETTE Connexion Luer Lock">SILHOUETTE Connexion Luer Lock</option>
                                <option value="SILHOUETTE Connexion Paradigm">SILHOUETTE Connexion Paradigm</option>
                                <option value="SURE-T Connexion Luer Lock">SURE-T Connexion Luer Lock</option>
                                <option value="SURE-T Connexion Paradigm">SURE-T Connexion Paradigm</option>
                                <option value="MIO Connexion Paradigm">MIO Connexion Paradigm</option>
                                <option value="MIO 30 Connexion Paradigm">MIO 30 Connexion Paradigm</option>
                            </optgroup>
                            <optgroup label="Laboratoire ROCHE">
                                <option value="Flex Link">Flex Link</option>
                                <option value="Rapid-D Link">Rapid-D Link</option>
                                <option value="Tender Link">Tender Link</option>
                                <option value="Flex Link Plus">Flex Link Plus</option>
                                <option value="Insight Flex">Insight Flex</option>
                            </optgroup>
                            <optgroup label="Laboratiore JONHSON &amp; JOHNSON">
                                <option value="INSET 2">INSET 2</option>
                                <option value="INSET 30">INSET 30</option>
                                <option value="Contact Detach">Contact Detach</option>
                            </optgroup>
                            <optgroup label="Laboratoire ALPHADIAB">
                                <option value="Comfort">Comfort</option>
                                <option value="Comfort Short">Comfort Short</option>
                            </optgroup>
                            <optgroup label="Laboratoire YPSOMED">
                                <option value="ORBIT Soft">ORBIT Soft</option>
                                <option value="ORBIT Micro">ORBIT Micro</option>
                            </optgroup>
                            <optgroup label="Autres">
                                <option value="autres" id="autrescatheter1">Autres...</option>
                            </optgroup>
                        </select>
                    </div>
                </div>

                <!-- Autres modèle de cathéter 1 -->

                <div class="form-group hidden" id="autresmodele">
                    <label for="catheter1autres" class="col-sm-4 control-label"></label>
                    <div class="col-sm-7">
                        <input type="text"  placeholder="Cathéter 1" class="form-control" name="catheter1autres" id="catheter1autres">
                    </div>
                </div>

                <!-- Autres modèle de cathéter 1 -->

                <div class="form-group">
                    <label for="longueurcanule" class="col-sm-4 control-label">Longueur de canule:</label>
                    <div class="col-sm-7">
                        <div class="input-group">
                            <input type="number" value="<?php echo $donneescm['longueurcanule']; ?>" placeholder="Longueur de canule" class="form-control" name="longueurcanule" id="longueurcanule">
                            <span class="input-group-addon">mm</span>
                        </div>
                    </div>
                </div>


                <div class="form-group">
                    <label for="longueurtubulure" class="col-sm-4 control-label">Longueur de tubulure:</label>
                    <div class="col-sm-7">
                        <div class="input-group">
                            <input type="number" value="<?php echo $donneescm['longueurtubulure']; ?>" placeholder="Longueur de tubulure" class="form-control" name="longueurtubulure" id="longueurtubulure">
                            <span class="input-group-addon">cm</span>
                        </div>

                    </div>
                </div>
            </div>




            <div class="col-lg-6">
                <center><h4>Cathéter 2</h4></center>
                <div class="form-group">
                    <label for="mobile" class="col-sm-4 control-label">Type de cathéter:</label>
                    <div class="col-sm-7">
                        <select name="catheter2" id="catheter2" class="form-control">
                            <option value="DROIT">DROIT</option>
                            <option value="TANGENTIEL">TANGENTIEL</option>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label for="modele" class="col-sm-4 control-label">Modèle:</label>
                    <div class="col-sm-7">
                        <!-- <input type="text" placeholder="Modèle" class="form-control" name="modele2" id="modele2">
                    </div> -->
                        <select name="modele2" class="form-control" id="modelecatheter2">
                            <option value="" selected hidden>---- Choisir le modèle de Cathéter ----</option>
                            <optgroup label="Laboratoire MEDTRONIC">
                                <option value="QUICKSET Connexion Luer Lock">QUICKSET Connexion Luer Lock</option>
                                <option value="QUICKSET Connexion Paradigm">QUICKSET Connexion Paradigm</option>
                                <option value="SILHOUETTE Connexion Luer Lock">SILHOUETTE Connexion Luer Lock</option>
                                <option value="SILHOUETTE Connexion Paradigm">SILHOUETTE Connexion Paradigm</option>
                                <option value="SURE-T Connexion Luer Lock">SURE-T Connexion Luer Lock</option>
                                <option value="SURE-T Connexion Paradigm">SURE-T Connexion Paradigm</option>
                                <option value="MIO Connexion Paradigm">MIO Connexion Paradigm</option>
                                <option value="MIO 30 Connexion Paradigm">MIO 30 Connexion Paradigm</option>
                            </optgroup>
                            <optgroup label="Laboratoire ROCHE">
                                <option value="Flex Link">Flex Link</option>
                                <option value="Rapid-D Link">Rapid-D Link</option>
                                <option value="Tender Link">Tender Link</option>
                                <option value="Flex Link Plus">Flex Link Plus</option>
                                <option value="Insight Flex">Insight Flex</option>
                            </optgroup>
                            <optgroup label="Laboratiore JONHSON &amp; JOHNSON">
                                <option value="INSET 2">INSET 2</option>
                                <option value="INSET 30">INSET 30</option>
                                <option value="Contact Detach">Contact Detach</option>
                            </optgroup>
                            <optgroup label="Laboratoire ALPHADIAB">
                                <option value="Comfort">Comfort</option>
                                <option value="Comfort Short">Comfort Short</option>
                            </optgroup>
                            <optgroup label="Laboratoire YPSOMED">
                                <option value="ORBIT Soft">ORBIT Soft</option>
                                <option value="ORBIT Micro">ORBIT Micro</option>
                            </optgroup>
                            <optgroup label="Autres">
                                <option value="autres" id="autrescatheter2">Autres...</option>
                            </optgroup>
                        </select>
                    </div>
                </div>

                <!-- Autres modèle de cathéter 2 -->

                <div class="form-group hidden" id="autresmodele2">
                    <label for="catheter2autres" class="col-sm-4 control-label"></label>
                    <div class="col-sm-7">
                        <input type="text"  placeholder="Cathéter 2" class="form-control" name="catheter2autres" id="catheter2autres">
                    </div>
                </div>

                <!-- Autres modèle de cathéter 2 -->

                <div class="form-group">
                    <label for="longueurcanule" class="col-sm-4 control-label">Longueur de canule:</label>
                    <div class="col-sm-7">
                        <div class="input-group">
                            <input type="number" value="<?php echo $donneescm['longueurcanule2']; ?>" placeholder="Longueur de canule" class="form-control" name="longueurcanule2" id="longueurcanule2">
                            <span class="input-group-addon">mm</span>
                        </div>
                    </div>
                </div>


                <div class="form-group">
                    <label for="longueurtubulure" class="col-sm-4 control-label">Longueur de tubulure:</label>
                    <div class="col-sm-7">
                        <div class="input-group">
                            <input type="number" value="<?php echo $donneescm['longueurtubulure2']; ?>" placeholder="Longueur de tubulure" class="form-control" name="longueurtubulure2" id="longueurtubulure2">
                            <span class="input-group-addon">cm</span>
                        </div>

                    </div>
                </div>
            </div>
        </div>





        <div class="form-group">
            <label for="inserteur" class="col-sm-4 control-label">Inserteur:</label>
            <div class="col-sm-7">
                <div class="radio">
                    <label>
                        <input type="radio" name="inserteur" id="optionsRadios1" value="Oui">
                        Oui
                    </label>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <label>
                        <input type="radio" name="inserteur" id="optionsRadios2" value="Non">
                        Non
                    </label>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="reservoir" class="col-sm-4 control-label">Réservoir:</label>
            <div class="col-sm-7">
                <select name="reservoir" class="form-control" id="reservoir">
                    <option value="" selected hidden>---- Choisir le modèle de Réservoir ----</option>
                            <optgroup label="Laboratoire MEDTRONIC">
                                <option value="Réservoir Medtronic 1,8ml">Réservoir Medtronic 1,8ml</option>
                                <option value="Réservoir Medtronic 3ml">Réservoir Medtronic 3ml</option>
                            </optgroup>
                            <optgroup label="Laboratoire ROCHE">
                                <option value="Réservoir Roche 3,15 ml">Réservoir Roche 3,15 ml</option>
                                <option value="Réservoir Roche (Insight) Pré-rempli 1,6 ml">Réservoir Roche (Insight) Pré-rempli 1,6 ml</option>
                            </optgroup>
                            <optgroup label="Laboratiore JONHSON &amp; JOHNSON">
                                <option value="Réservoir Animas 2 ml">Réservoir Animas 2 ml</option>
                            </optgroup>
                            <optgroup label="Laboratoire YPSOMED">
                                <option value="POD">POD</option>
                            </optgroup>
                            <optgroup label="Autres">
                                <option value="autres" id="reservoir_autres">Autres...</option>
                            </optgroup>
                </select>
            </div>
        </div>

        <!-- Autres modèle de cathéter 2 -->

        <div class="form-group hidden" id="autrereservoir">
            <label for="reservoirautres" class="col-sm-4 control-label"></label>
            <div class="col-sm-7">
                <input type="text"  placeholder="Autres modèle de réservoir" class="form-control" name="reservoirautres" id="reservoirautres">
            </div>
        </div>

        <!-- Autres modèle de cathéter 2 -->

        <div class="form-group">
            <label for="spp" class="col-sm-4 control-label">Système de portage de la Pompe:</label>
            <div class="col-sm-7">
                <input type="text" value="<?php echo $donneescm['spp']; ?>" placeholder="Système de portage de la Pompe" class="form-control" name="spp" id="spp">
            </div>
        </div>
        <div class="form-group">
            <label for="observation" class="col-sm-4 control-label">Observations</label>
            <div class="col-sm-7">
                <textarea rows="3" type="text" placeholder="Observations" class="form-control" name="observatiom" id="observatiom"><?php echo $donneescm['observation']; ?></textarea>
            </div>
        </div>
    </fieldset>

</div>
<script type="text/javascript">
    $(document).ready(function (e) {
        $("body #webmenu").msDropDown();
    });
    $('#webmenu').change(function ()
    {
        var valeur = document.getElementById('webmenu').options[document.getElementById('webmenu').selectedIndex].value;
        //alert(valeur);
        if (valeur === "autres")
        {
            $('#autrespompe').removeClass('hidden');
            $('#pompeautres').blur(function () {
                var pompe = $('#pompeautres').val();
                $('#autres').attr('value', pompe);
                /*console.log(pompe);
                 console.log($('#autres').attr('value'));*/
            });
        } else {
            $('#autrespompe').addClass('hidden');
        }
    });
    // Modele cathéter : si la valeur est à autres
    $('#modelecatheter1').change(function ()
    {
        var valeur = document.getElementById('modelecatheter1').options[document.getElementById('modelecatheter1').selectedIndex].value;
        //alert(valeur);
        if (valeur === "autres")
        {
            $('#autresmodele').removeClass('hidden');
            $('#catheter1autres').blur(function () {
                var catheter1 = $('#catheter1autres').val();
                $('#autrescatheter1').attr('value', catheter1);
                /*console.log(catheter1);
                 console.log($('#autrescatheter1').attr('value'));*/
            });
        } else {
            $('#autresmodele').addClass('hidden');
        }
    });
    // Modele cathéter : si la valeur est à autres
    $('#modelecatheter2').change(function ()
    {
        var valeur = document.getElementById('modelecatheter2').options[document.getElementById('modelecatheter2').selectedIndex].value;
        //alert(valeur);
        if (valeur === "autres")
        {
            $('#autresmodele2').removeClass('hidden');
            $('#catheter2autres').blur(function () {
                var catheter2 = $('#catheter2autres').val();
                $('#autrescatheter2').attr('value', catheter2);
                /*console.log(catheter2);
                 console.log($('#autrescatheter2').attr('value'));*/
            });
        } else {
            $('#autresmodele2').addClass('hidden');
        }
    });
    // Modele de réservoir : si la valeur est à autres
    $('#reservoir').change(function ()
    {
        var valeur = document.getElementById('reservoir').options[document.getElementById('reservoir').selectedIndex].value;
        //alert(valeur);
        if (valeur === "autres")
        {
            $('#autrereservoir').removeClass('hidden');
            $('#reservoirautres').blur(function () {
                var autresreservoir = $('#reservoirautres').val();
                $('#reservoir_autres').attr('value', autresreservoir);
                console.log(autresreservoir);
                console.log($('#reservoir_autres').attr('value'));
            });
        } else {
            $('#autrereservoir').addClass('hidden');
        }
    });
</script>