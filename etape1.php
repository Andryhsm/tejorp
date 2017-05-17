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


<div class="container-fluid">
    <fieldset class="field1">

        <center><h4>INFIRMIERE BASTIDE MEDICAL</h4></center>
        <div class="form-group">
            <label for="nom" class="col-sm-4 control-label">Nom IDE Responsable:</label>
            <div class="col-sm-7">
                <input type="text" placeholder="Nom IDE Responsable" class="form-control" name="nomresp" id="nomresp">
            </div>
        </div>
        <div class="form-group">
            <label for="prenom" class="col-sm-4 control-label">Prénom:</label>
            <div class="col-sm-7">
                <input type="text" placeholder="Prenom"  class="form-control" name="prenomresp" id="prenomresp">
            </div>
        </div>

        <div class="form-group">
            <label for="mobile" class="col-sm-4 control-label">Mobile:</label>
            <div class="col-sm-7">
                <input type="number" placeholder="Mobile"  class="form-control" name="mobileresp" id="mobileresp">
            </div>
        </div>

        <div class="form-group">
            <label for="coordonnee" class="col-sm-4 control-label">Coordonnées Secrétariat/Astreinte:</label>
            <div class="col-sm-7">
                <input type="text" placeholder="Coordonnées"  class="form-control" name="coordonnee" id="coordonnee">
            </div>
        </div>

    </fieldset>
    <fieldset class="col-sm-5">
        <div class="field1">
            <center><h4>RENSEIGNEMENTS PATIENT</h4></center>
            <div class="form-group">
                <label for="nom" class="col-sm-4 control-label">Nom:</label>
                <div class="col-sm-7">
                    <input type="text" placeholder="Nom Patient" class="form-control" name="nompatient" id="nompatient">
                </div>
            </div>
            <div class="form-group">
                <label for="prenom" class="col-sm-4 control-label">Prénom:</label>
                <div class="col-sm-7">
                    <input type="text" placeholder="Prenom Patient"  class="form-control" name="prenompatient" id="prenompatient">
                </div>
            </div>

            <div class="form-group">
                <label for="datenaissance" class="col-sm-4 control-label">Né(e) le:</label>
                <div class="col-sm-7">
                    <input type="text" onchange="calcul_age(this.value)" placeholder="Date de naissance"  class="form-control date datepicker" name="datenaissance" id="datenaissance">
                </div>
            </div>

            <script>
                function calcul_age(id_naissance) {

                    var tabEN = id_naissance.split('-');
                    tabEN.reverse();
//                    alert(tabEN.join('-'));
                    var d = new Date(tabEN.join('-'));
                    var date_day = new Date();
                    var rep = date_day.getFullYear() - d.getFullYear();
//                    alert (rep);
                    document.getElementById('agepatient').value = rep;
                }
            </script>


            <div class="form-group">
                <label for="age" class="col-sm-4 control-label"> Age: </label>
                <div class="col-sm-7">
                    <div class="input-group">
                        <input type="number" readonly="" class="form-control" name="agepatient" id="agepatient">
                        <span class="input-group-addon">ans</span>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="tel" class="col-sm-4 control-label"> Tel: </label>
                <div class="col-sm-7">
                    <input type="number" placeholder="Téléphone"  class="form-control" name="telpatient" id="telpatient">
                </div>
            </div>
            <div class="form-group">
                <label for="mobile" class="col-sm-4 control-label"> Mobile: </label>
                <div class="col-sm-7">
                    <input type="number" placeholder="Mobile"  class="form-control" name="mobilepatient" id="mobilepatient">
                </div>
            </div>
            <div class="form-group">
                <label for="email" class="col-sm-4 control-label"> Email: </label>
                <div class="col-sm-7">
                    <input type="text" placeholder="email"  class="form-control" name="emailpatient" id="emailpatient">
                </div>
            </div>
            <div class="form-group">
                <label for="adresse" class="col-sm-4 control-label"> Numéro et nom de rue: </label>
                <div class="col-sm-7">
                    <input type="text" placeholder="numéro et nom de rue"  class="form-control" name="adressepatient" id="adressepatient">
                </div>
            </div>
            <div class="form-group">
                <label for="code" class="col-sm-4 control-label"> Code postal: </label>
                <div class="col-sm-7">
                    <input type="number" placeholder="Code postal"  class="form-control" name="codepostalpatient" id="codepostalpatient">
                </div>
            </div>
            <div class="form-group">
                <label for="ville" class="col-sm-4 control-label"> Ville: </label>
                <div class="col-sm-7">
                    <input type="text" placeholder="Ville"  class="form-control" name="villepatient" id="villepatient">
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
                    <input type="text" placeholder="Etablissement prescripteur" class="form-control" name="etablissementprescripteur" id="etablissementprescripteur">
                </div>
            </div>
            <div class="form-group">
                <label for="service" class="col-sm-4 control-label">Service:</label>
                <div class="col-sm-7">
                    <input type="text" placeholder="Service" class="form-control" name="serviceep" id="serviceep">
                </div>
            </div>
            <div class="form-group">
                <label for="npp" class="col-sm-4 control-label">Nom et prénom:</label>
                <div class="col-sm-7">
                    <input type="text" placeholder="nom et prénom du prescripteur" class="form-control" name="npp" id="npp">
                </div>
            </div>
            <div class="form-group">
                <label for="tel" class="col-sm-4 control-label">Tél:</label>
                <div class="col-sm-7">
                    <input type="text" placeholder="téléphone" class="form-control" name="telep" id="telep">
                </div>
            </div>
            <div class="form-group">
                <label for="mail" class="col-sm-4 control-label">Mail:</label>
                <div class="col-sm-7">
                    <input type="text" placeholder="mail" class="form-control" name="mailep" id="mailep">
                </div>
            </div>
            <div class="form-group">
                <label for="adresse" class="col-sm-4 control-label">Adresse:</label>
                <div class="col-sm-7">
                    <input type="text" placeholder="adresse de l’Etablissement" class="form-control" name="adressep" id="adressep">
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
                        <input type="number" placeholder="Mobile" class="form-control" name="mobiledp" id="mobiledp">
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
                        <input type="number" placeholder="Mobile" class="form-control" name="mobiledl" id="mobiledl">
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
                        <input type="number" placeholder="Mobile" class="form-control" name="mobilemt" id="mobilemt">
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
                        <input type="number" placeholder="Mobile" class="form-control" name="mobiled" id="mobiled">
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
                            <input type="radio" name="membrereseau" id="optionsRadios1" value="Oui">
                            Oui
                        </label>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <label>
                            <input type="radio" name="membrereseau" id="optionsRadios2" value="Non" checked="">
                            Non
                        </label>
                    </div>
                </div>
            </div>

            <script>

                document.querySelector("#optionsRadios1").onclick = function () {
                    document.querySelector("#reseau").style.display = (window.getComputedStyle(document.querySelector('#reseau')).display == 'none') ? "block" : "hide";
                }
                document.querySelector("#optionsRadios2").onclick = function () {
                    document.querySelector("#reseau").style.display = (window.getComputedStyle(document.querySelector('#reseau')).display == 'hide') ? "block" : "none";
                }

            </script>

            <div class="form-group" id="reseau" style="display:none;">
                <label for="nomreseau" class="col-sm-4 control-label">Nom du réseau:</label>
                <div class="col-sm-7">
                    <input type="text"  placeholder="Nom du réseau" class="form-control" name="nomreseau" id="nomreseau">
                </div>
            </div>



        </div>
    </fieldset>

    <fieldset class="field1 col-sm-12">
        <center><h4>CHOIX DU MATERIEL</h4></center>
        <div class="form-group">
            <label for="nom" class="col-sm-4 control-label">Pompe:</label>
            <div class="col-sm-7">
                <select name="Pompe" class="form-control">
                    <option value="Pompe1">Pompe1</option>
                    <option value="Pompe2">Pompe2</option>
                    <option value="Pompe3">Pompe3</option>
                    <option value="Pompe4">Pompe4</option>
                </select>
            </div>
        </div>

        <div class="form-group">
            <label for="dateinstallation" class="col-sm-4 control-label">Date d'installation:</label>
            <div class="col-sm-7">
                <input type="text"  placeholder="Date d'installation" class="form-control date datepickerAll" name="dateinstallation" id="dateinstallation">
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
                            <option value="TANGEANTIEL">TANGEANTIEL</option>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label for="modele" class="col-sm-4 control-label">Modèle:</label>
                    <div class="col-sm-7">
                        <input type="text" placeholder="Modèle" class="form-control" name="modele" id="modele">
                    </div>
                </div>


                <div class="form-group">
                    <label for="longueurcanule" class="col-sm-4 control-label">Longueur de canule:</label>
                    <div class="col-sm-7">
                        <div class="input-group">
                            <input type="number" placeholder="Longueur de canule" class="form-control" name="longueurcanule" id="longueurcanule">
                            <span class="input-group-addon">mm</span>
                        </div>
                    </div>
                </div>


                <div class="form-group">
                    <label for="longueurtubulure" class="col-sm-4 control-label">Longueur de tubulure:</label>
                    <div class="col-sm-7">
                        <div class="input-group">
                            <input type="number" placeholder="Longueur de tubulure" class="form-control" name="longueurtubulure" id="longueurtubulure">
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
                            <option value="TANGEANTIEL">TANGEANTIEL</option>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label for="modele" class="col-sm-4 control-label">Modèle:</label>
                    <div class="col-sm-7">
                        <input type="text" placeholder="Modèle" class="form-control" name="modele2" id="modele2">
                    </div>
                </div>
                <div class="form-group">
                    <label for="longueurcanule" class="col-sm-4 control-label">Longueur de canule:</label>
                    <div class="col-sm-7">
                        <div class="input-group">
                            <input type="number" placeholder="Longueur de canule" class="form-control" name="longueurcanule2" id="longueurcanule2">
                            <span class="input-group-addon">mm</span>
                        </div>
                    </div>
                </div>


                <div class="form-group">
                    <label for="longueurtubulure" class="col-sm-4 control-label">Longueur de tubulure:</label>
                    <div class="col-sm-7">
                        <div class="input-group">
                            <input type="number" placeholder="Longueur de tubulure" class="form-control" name="longueurtubulure2" id="longueurtubulure2">
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
                        <input type="radio" name="inserteur" id="optionsRadios2" value="Non" checked="">
                        Non
                    </label>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="reservoir" class="col-sm-4 control-label">Réservoir:</label>
            <div class="col-sm-7">
                <select name="reservoir" class="form-control">
                    <option value="Réservoir 1">Réservoir 1</option>
                    <option value="Réservoir 2">Réservoir 2</option>
                    <option value="Réservoir 3">Réservoir 3</option>
                    <option value="Réservoir 4">Réservoir 4</option>
                </select>

            </div>
        </div>
        <div class="form-group">
            <label for="spp" class="col-sm-4 control-label">Système de portage de la Pompe:</label>
            <div class="col-sm-7">
                <input type="text" placeholder="Système de portage de la Pompe" class="form-control" name="spp" id="spp">
            </div>
        </div>
        <div class="form-group">
            <label for="observation" class="col-sm-4 control-label">Observations</label>
            <div class="col-sm-7">
                <textarea rows="3" type="text" placeholder="Observations" class="form-control" name="observatiom" id="observatiom"></textarea>
            </div>
        </div>

    </fieldset>

</div>