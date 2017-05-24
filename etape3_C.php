
<?php
$reponseif = $bdd->query("SELECT * FROM insulinotherapiefonctionnelle WHERE idPrescripteur = '" . $_SESSION['id'] . "' and idPatient = '" . $id . "'");
$donneesif = $reponseif->fetch();
$reponsehv = $bdd->query("SELECT * FROM habitudevie WHERE idPrescripteur = '" . $_SESSION['id'] . "' and idPatient = '" . $id . "'");
$donneeshv = $reponsehv->fetch();
$reponseha = $bdd->query("SELECT * FROM habitudealimentaire WHERE idPrescripteur = '" . $_SESSION['id'] . "' and idPatient = '" . $id . "'");
$donneesha = $reponseha->fetch();
?>

<style type="text/css">
    .field3 
    {
        min-height: 20px;
        padding: 19px;
        margin-bottom: 20px;
        background-color: rgba(0, 72, 12, 0.6);
        border-radius: 10px;
        -webkit-box-shadow: inset 0 1px 1px rgba(8, 110, 25, 0.4);
        box-shadow: inset 0 1px 1px rgba(8, 110, 25, 0.4);
    }
</style>

<div class="container-fluid">
    <fieldset class="field3" id="field">
        <center><font><h4>HABITUDE DE VIE</h4></font></center><br/>

        <div class="row">
            <div class="col-lg-6">

                <label for="activitephysique">Activité physique (type/frequence) :</label>
                <textarea readonly="" type="text" rows="3" class="form-control" id="activitephysique" name="activitephysique" placeholder="activité physique"/><?php echo $donneeshv['activitephysique']; ?></textarea>
                <label for="profession">Profession : </label>
                <input readonly="" type="text" value="<?php echo $donneeshv['profession']; ?>" class="form-control" id="profession" name="profession" placeholder="profession"/>
                <label for="situationfamiliale">Situation familiale :</label>
                <input readonly="" type="text" value="<?php echo $donneeshv['situationfamiliale']; ?>" class="form-control" id="situationfamiliale" name="situationfamiliale" placeholder="situation familiale"/>
                <label for="observation">Observations:</label>
                <textarea readonly="" type="text" rows="3" class="form-control" id="observation" name="observation" placeholder="observations"/><?php echo $donneeshv['observation']; ?></textarea>

            </div>
            <div class="col-lg-6">

                <label for="hygienealimentaire">Hygiène alimentaire (habitude/régime):	</label>
                <textarea readonly="" type="text" rows="3" class="form-control" id="hygienealimentaire" name="hygienealimentaire" placeholder="hygiène alimentaire"/><?php echo $donneeshv['hygienealimentaire']; ?></textarea>

                <div class="radio">
                    <label for="stabilitehoraires">Stabilités des horaires : </label>
                    <label>
                        <input type="radio" name="stabilitehoraires" selected id="radio1" value="oui">
                        Oui
                    </label>
                    <label>
                        <input type="radio" name="stabilitehoraires" id="radio2" value="non">
                        Non
                    </label>
                </div>
                <label for="details">Détails:	</label>
                <textarea readonly="" name="details" id="inputDetails" class="form-control" rows="3"><?php echo $donneeshv['details']; ?></textarea>
                <label for="environnement">Environnement social :	</label>
                <textarea readonly="" type="text" rows="3" class="form-control" id="environnement" name="environnement" placeholder="environement social"/><?php echo $donneeshv['environnement']; ?></textarea>

            </div>
        </div>

        <div class="row">
            <div class="col-lg-6">
                <label for="etatcutane">Êtat cutané au point injection :	</label>
                <input readonly="" type="text" value="<?php echo $donneeshv['etatcutane']; ?>" class="form-control" id="etatcutane" name="etatcutane" placeholder="êtat cutané au point injection"/>
            </div>
            <div class="col-lg-6">
                <label for="choixpoint">Choix des points d'injection :	</label>
                <input readonly="" type="text" value="<?php echo $donneeshv['choixpoint']; ?>" class="form-control" id="choixpoint" name="choixpoint" placeholder="choix des points d'injection"/>
            </div>
        </div>
        <div class="col-lg-10">
            <div class="radio">
                <label>
                    <input type="radio" id="r1" value="rougeur" name="rougeur">
                    : Rougeur /
                </label>
                <label>
                    <input type="radio" id="r2" value="douleur" name="rougeur">
                    : Douleur /
                </label>
                <label>
                    <input type="radio" id="r3" value="inflammation" name="rougeur">
                    : Inflammation /
                </label>
                <label>
                    <input type="radio" id="r4" value="lypodystrophie" name="rougeur">
                    : Lypodystrophie 
                </label>
            </div>
        </div>
    </fieldset><br/><br/>


    <fieldset class="field3" id="field">
        <center><font><h4>INSULINOTHERAPIE FONCTIONNELLE</h4></font>


            <div class="form-group">
                <div class="table-responsive">
                    <table class="table table-bordered" style="color: white;">
                        <thead>
                            <tr style="color: white;">
                                <th></th>
                                <th>De</th>
                                <th>A</th>
                                <th>Ration Insuline/glucide</th>
                                <th>Objectif glycémique</th>
                                <th>Sensibilité à  l'insuline</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Petit déjeuner</td>
                                <td><input type="time" class="form-control" name="petitdejeunerDe" id="petitdejeunerDe"></td>
                                <td><input type="time" class="form-control" name="petitdejeunerA" id="petitdejeunerA"></td>
                                <td><input type="text" class="form-control" name="petitdejeunerRotation" id="petitdejeunerRotation"></td>
                                <td><input type="text" class="form-control" name="petitdejeunerObjectif" id="petitdejeunerObjectif"></td>
                                <td><input type="text" class="form-control" name="petitdejeunerSensibilite" id="petitdejeunerSensibilite"></td>
                            </tr>
                            <tr>
                                <td>Déjeuner</td>
                                <td><input type="time" class="form-control" name="dejeunerDe" id="dejeunerDe"></td>
                                <td><input type="time" class="form-control" name="dejeunerA" id="dejeunerA"></td>
                                <td><input type="text" class="form-control" name="dejeunerRotation" id="dejeunerRotation"></td>
                                <td><input type="text" class="form-control" name="dejeunerObjectif" id="dejeunerObjectif"></td>
                                <td><input type="text" class="form-control" name="dejeunerSensibilite" id="dejeunerSensibilite"></td> 
                            </tr>
                            <tr>
                                <td>Goûter</td>
                                <td><input type="time" class="form-control" name="gouterDe" id="gouterDe"></td>
                                <td><input type="time" class="form-control" name="gouterA" id="gouterA"></td>
                                <td><input type="text" class="form-control" name="gouterRotation" id="gouterRotation"></td>
                                <td><input type="text" class="form-control" name="gouterObjectif" id="gouterObjectif"></td>
                                <td><input type="text" class="form-control" name="gouterSensibilite" id="gouterSensibilite"></td>
                            </tr>
                            <tr>
                                <td>Dîner</td>
                                <td><input type="time" class="form-control" name="dinerDe" id="dinerDe"></td>
                                <td><input type="time" class="form-control" name="dinerA" id="dinerA"></td>
                                <td><input type="text" class="form-control" name="dinerRotation" id="dinerRotation"></td>
                                <td><input type="text" class="form-control" name="dinerObjectif" id="dinerObjectif"></td>
                                <td><input type="text" class="form-control" name="dinerSensibilite" id="dinerSensibilite"></td>
                            </tr>
                            <tr>
                                <td>Collation</td>
                                <td><input type="time" class="form-control" name="collationDe" id="collationDe"></td>
                                <td><input type="time" class="form-control" name="collationA" id="collationA"></td>
                                <td><input type="text" class="form-control" name="collationRotation" id="collationRotation"></td>
                                <td><input type="text" class="form-control" name="collationObjectif" id="collationObjectif"></td>
                                <td><input type="text" class="form-control" name="collationSensibilite" id="collationSensibilite"></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
    </fieldset>
    <br/><br/>


    <fieldset class="field3" id="field">
        <center><font><h4>HABITUDES ALIMENTAIRES</h4></font></center><br/>


        <div class="radio">	
            <label>SUIVI DE POIDS: </label>
            <label>
                <input type="radio" name="regime" id="inputRegime" value="oui">
                Oui
            </label>
            <label>
                <input type="radio" name="regime" id="inputRegime2" value="non">
                Non 
            </label>
        </div>
        <br>
        <label for="observation2">Observation :  </label>
        <textarea readonly="" rows="3" type="text" name="observation2" class="form-control" id="" placeholder="observation"><?php echo $donneesha['observation2']; ?></textarea>
        <br>
        <label for="survenue">Survenue de compilations :  </label>
        <textarea readonly="" rows="3" type="text" name="survenue" class="form-control" id="" placeholder="survenue de compilations"><?php echo $donneesha['survenue']; ?></textarea>
        <br>
        <label for="atcd">ATCD/ autres pathologies :  </label>
        <textarea readonly="" rows="3" type="text" name="atcd" class="form-control" id="" placeholder="ATCD/ autre pathologies"><?php echo $donneesha['atcd']; ?></textarea>
        <br>
        <label for="traitement">Traitement :  </label>
        <textarea readonly="" rows="3" type="text" name="traitement" class="form-control" id="traitement" placeholder="traitement"><?php echo $donneesha['traitement']; ?></textarea>
        <br>
        <!-- <label for="observation2">Suivi de poids :  </label>
        <input type="text" name="observation2" class="form-control" id="" placeholder="suivi de poids"> -->
        <br>
        <div class="table-responsive">
            <table id="table_habitude" class="table table-bordered" style="color: white;">
                <tr>
                    <th>Date</th>
                    <th><input type="text" id="date1" class="col-lg-12 form-control datepickerAll" name="date1"></th>
                    <th><input type="text" id="date2" class="col-lg-12 form-control datepickerAll" name="date2"></th>
                    <th><input type="text" id="date3" class="col-lg-12 form-control datepickerAll" name="date3"></th>
                    <th><input type="text" id="date4" class="col-lg-12 form-control datepickerAll" name="date4"></th>
                    <th><input type="text" id="date5" class="col-lg-12 form-control datepickerAll" name="date5"></th>
                    <th><input type="text" id="date6" class="col-lg-12 form-control datepickerAll" name="date6"></th>
                    <th><input type="text" id="date7" class="col-lg-12 form-control datepickerAll" name="date7"></th>
                    <th><input type="text" id="date8" class="col-lg-12 form-control datepickerAll" name="date8"></th>
                    <th><input type="text" id="date9" class="col-lg-12 form-control datepickerAll" name="date9"></th>
                </tr>
                <tr>
                    <td>Taille</td>
                    <td>
                        <div class="input-group">	
                            <input type="number" class="form-control col-lg-12" id="taille1" name="taille1">
                            <span class="input-group-addon">cm</span>
                        </div>
                    </td>
                    <td>
                        <div class="input-group">
                            <input type="number" class="form-control col-lg-12" id="taille2" name="taille2">
                            <span class="input-group-addon">cm</span>
                        </div>
                    </td>
                    <td>
                        <div class="input-group">
                            <input type="number" class="form-control col-lg-12" id="taille3" name="taille3">
                            <span class="input-group-addon">cm</span>
                        </div>
                    </td>
                    <td>
                        <div class="input-group">
                            <input type="number" class="form-control col-lg-12" id="taille4" name="taille4">
                            <span class="input-group-addon">cm</span>
                        </div>
                    </td>
                    <td>
                        <div class="input-group">
                            <input type="number" class="form-control col-lg-12" id="taille5" name="taille5">
                            <span class="input-group-addon">cm</span>
                        </div>
                    </td>
                    <td>
                        <div class="input-group">
                            <input type="number" class="form-control col-lg-12" id="taille6" name="taille6">
                            <span class="input-group-addon">cm</span>
                        </div>
                    </td>
                    <td>
                        <div class="input-group">
                            <input type="number" class="form-control col-lg-12" id="taille7" name="taille7">
                            <span class="input-group-addon">cm</span>
                        </div>
                    </td>
                    <td>
                        <div class="input-group">
                            <input type="number" class="form-control col-lg-12" id="taille8" name="taille8">
                            <span class="input-group-addon">cm</span>
                        </div>
                    </td>
                    <td>
                        <div class="input-group">
                            <input type="number" class="form-control col-lg-12" id="taille9" name="taille9">
                            <span class="input-group-addon">cm</span>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Poids</td>
                    <td>
                        <div class="input-group">	
                            <input type="number" class="form-control col-lg-12" id="poids1" name="poids1">
                            <span class="input-group-addon">kg</span>
                    </td>
                    <td>
                        <div class="input-group">	
                            <input type="number" class="form-control col-lg-12" id="poids2" name="poids2">
                            <span class="input-group-addon">kg</span>
                        </div>
                    </td>
                    <td>
                        <div class="input-group">	
                            <input type="number" class="form-control col-lg-12" id="poids3" name="poids3">
                            <span class="input-group-addon">kg</span>
                        </div>
                    </td>
                    <td>
                        <div class="input-group">	
                            <input type="number" class="form-control col-lg-12" id="poids4" name="poids4">
                            <span class="input-group-addon">kg</span>
                        </div>
                    </td>
                    <td>
                        <div class="input-group">	
                            <input type="number" class="form-control col-lg-12" id="poids5" name="poids5">
                            <span class="input-group-addon">kg</span>
                        </div>
                    </td>
                    <td>
                        <div class="input-group">	
                            <input type="number" class="form-control col-lg-12" id="poids6" name="poids6">
                            <span class="input-group-addon">kg</span>
                        </div>
                    </td>
                    <td>
                        <div class="input-group">	
                            <input type="number" class="form-control col-lg-12" id="poids7" name="poids7">
                            <span class="input-group-addon">kg</span>
                        </div>
                    </td>
                    <td>
                        <div class="input-group">	
                            <input type="number" class="form-control col-lg-12" id="poids8" name="poids8">
                            <span class="input-group-addon">kg</span>
                        </div>
                    </td>
                    <td>
                        <div class="input-group">	
                            <input type="number" class="form-control col-lg-12" id="poids9" name="poids9">
                            <span class="input-group-addon">kg</span>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>IMC</td>
                    <td><input type="text" readonly="" class="col-lg-12 form-control" id="imc1" name="imc1"></td>
                    <td><input type="text" readonly="" class="col-lg-12 form-control" id="imc2" name="imc2"></td>
                    <td><input type="text" readonly="" class="col-lg-12 form-control" id="imc3" name="imc3"></td>
                    <td><input type="text" readonly="" class="col-lg-12 form-control" id="imc4" name="imc4"></td>
                    <td><input type="text" readonly="" class="col-lg-12 form-control" id="imc5" name="imc5"></td>
                    <td><input type="text" readonly="" class="col-lg-12 form-control" id="imc6" name="imc6"></td>
                    <td><input type="text" readonly="" class="col-lg-12 form-control" id="imc7" name="imc7"></td>
                    <td><input type="text" readonly="" class="col-lg-12 form-control" id="imc8" name="imc8"></td>
                    <td><input type="text" readonly="" class="col-lg-12 form-control" id="imc9" name="imc9"></td>
                </tr>
            </table>	
        </div>


        <div class="row">
            <div id="graphe" class="col-lg-10">
                <canvas id="bar"/>
            </div>
        </div>
        <br/>


    </fieldset>
    <br/>
    <br/>
</div>

<script>
    $(document).ready(function ()
    {

        if ("<?php echo $donneeshv['stabilitehoraires']; ?>" === "oui") {
            $("form #radio1").attr("checked", true);
        } else {
            $("form #radio2").attr("checked", true);
        }


        if ("<?php echo $donneeshv['environnement']; ?>" === "rougeur") {
            $("form #r1").attr("checked", true);
        }
        if ("<?php echo $donneeshv['environnement']; ?>" === "douleur") {
            $("form #r2").attr("checked", true);
        }
        if ("<?php echo $donneeshv['environnement']; ?>" === "inflammation") {
            $("form #r3").attr("checked", true);
        }
        if ("<?php echo $donneeshv['environnement']; ?>" === "lypodystrophie") {
            $("form #r4").attr("checked", true);
        }


        if ("<?php echo $donneesha['regime']; ?>" === "oui") {
            $("form #inputRegime").attr("checked", true);
        } else {
            $("form #inputRegime2").attr("checked", true);
        }

//leresak date am isulinotherapie

        if ("<?php echo $donneesif['petitdejeunerDe']; ?>" != "")
        {
            $('[name="petitdejeunerDe"]').val("<?php echo $donneesif['petitdejeunerDe']; ?>");
            $('form #petitdejeunerDe').attr('readonly', true);
            $("#petitdejeunerDe").removeClass("datetimepicker");
        }else{
            $("#petitdejeunerDe").addClass("datetimepicker1");
            $('.datetimepicker1').datetimepicker({
                    language: 'fr',
                    weekStart: 1,
                    todayBtn: 1,
                    format: "hh:ii",
                    autoclose: 1,
                    todayHighlight: 1,
                    startView: 1,
                    minView: 0,
                    maxView: 1,
                    forceParse: 0
                });
        }
        if ("<?php echo $donneesif['dejeunerDe']; ?>" != "")
        {
            $('[name="dejeunerDe"]').val("<?php echo $donneesif['dejeunerDe']; ?>");
            $('form #dejeunerDe').attr('readonly', true);
        }else{
            $("#dejeunerDe").addClass("datetimepicker2");
            $('.datetimepicker2').datetimepicker({
                    language: 'fr',
                    weekStart: 1,
                    todayBtn: 1,
                    format: "hh:ii",
                    autoclose: 1,
                    todayHighlight: 1,
                    startView: 1,
                    minView: 0,
                    maxView: 1,
                    forceParse: 0
                });
        }
        if ("<?php echo $donneesif['gouterDe']; ?>" != "")
        {
            $('[name="gouterDe"]').val("<?php echo $donneesif['gouterDe']; ?>");
            $('form #gouterDe').attr('readonly', true);
        }else{
            $("#gouterDe").addClass("datetimepicker3");
            $('.datetimepicker3').datetimepicker({
                    language: 'fr',
                    weekStart: 1,
                    todayBtn: 1,
                    format: "hh:ii",
                    autoclose: 1,
                    todayHighlight: 1,
                    startView: 1,
                    minView: 0,
                    maxView: 1,
                    forceParse: 0
                });
        }
        if ("<?php echo $donneesif['dinerDe']; ?>" != "")
        {
            $('[name="dinerDe"]').val("<?php echo $donneesif['dinerDe']; ?>");
            $('form #dinerDe').attr('readonly', true);
        }else{
            $("#dinerDe").addClass("datetimepicker4");
            $('.datetimepicker4').datetimepicker({
                    language: 'fr',
                    weekStart: 1,
                    todayBtn: 1,
                    format: "hh:ii",
                    autoclose: 1,
                    todayHighlight: 1,
                    startView: 1,
                    minView: 0,
                    maxView: 1,
                    forceParse: 0
                });
        }
        if ("<?php echo $donneesif['collationDe']; ?>" != "")
        {
            $('[name="collationDe"]').val("<?php echo $donneesif['collationDe']; ?>");
            $('form #collationDe').attr('readonly', true);
        }else{
            $("#collationDe").addClass("datetimepicker5");
            $('.datetimepicker5').datetimepicker({
                    language: 'fr',
                    weekStart: 1,
                    todayBtn: 1,
                    format: "hh:ii",
                    autoclose: 1,
                    todayHighlight: 1,
                    startView: 1,
                    minView: 0,
                    maxView: 1,
                    forceParse: 0
                });
        }

        if ("<?php echo $donneesif['petitdejeunerA']; ?>" != "")
        {
            $('[name="petitdejeunerA"]').val("<?php echo $donneesif['petitdejeunerA']; ?>");
            $('form #petitdejeunerA').attr('readonly', true);
        }else{
            $("#petitdejeunerA").addClass("datetimepicker6");
            $('.datetimepicker6').datetimepicker({
                    language: 'fr',
                    weekStart: 1,
                    todayBtn: 1,
                    format: "hh:ii",
                    autoclose: 1,
                    todayHighlight: 1,
                    startView: 1,
                    minView: 0,
                    maxView: 1,
                    forceParse: 0
                });
        }
        if ("<?php echo $donneesif['dejeunerA']; ?>" != "")
        {
            $('[name="dejeunerA"]').val("<?php echo $donneesif['dejeunerA']; ?>");
            $('form #dejeunerA').attr('readonly', true);
        }else{
            $("#dejeunerA").addClass("datetimepicker7");
            $('.datetimepicker7').datetimepicker({
                    language: 'fr',
                    weekStart: 1,
                    todayBtn: 1,
                    format: "hh:ii",
                    autoclose: 1,
                    todayHighlight: 1,
                    startView: 1,
                    minView: 0,
                    maxView: 1,
                    forceParse: 0
                });
        }
        if ("<?php echo $donneesif['gouterA']; ?>" != "")
        {
            $('[name="gouterA"]').val("<?php echo $donneesif['gouterA']; ?>");
            $('form #gouterA').attr('readonly', true);
        }else{
            $("#gouterA").addClass("datetimepicker8");
            $('.datetimepicker8').datetimepicker({
                    language: 'fr',
                    weekStart: 1,
                    todayBtn: 1,
                    format: "hh:ii",
                    autoclose: 1,
                    todayHighlight: 1,
                    startView: 1,
                    minView: 0,
                    maxView: 1,
                    forceParse: 0
                });
        }
        if ("<?php echo $donneesif['dinerA']; ?>" != "")
        {
            $('[name="dinerA"]').val("<?php echo $donneesif['dinerA']; ?>");
            $('form #dinerA').attr('readonly', true);
        }else{
            $("#dinerA").addClass("datetimepicker9");
            $('.datetimepicker9').datetimepicker({
                    language: 'fr',
                    weekStart: 1,
                    todayBtn: 1,
                    format: "hh:ii",
                    autoclose: 1,
                    todayHighlight: 1,
                    startView: 1,
                    minView: 0,
                    maxView: 1,
                    forceParse: 0
                });
        }
        if ("<?php echo $donneesif['collationA']; ?>" != "")
        {
            $('[name="collationA"]').val("<?php echo $donneesif['collationA']; ?>");
            $('form #collationA').attr('readonly', true);
        }else{
            $("#collationA").addClass("datetimepicker10");
            $('.datetimepicker10').datetimepicker({
                    language: 'fr',
                    weekStart: 1,
                    todayBtn: 1,
                    format: "hh:ii",
                    autoclose: 1,
                    todayHighlight: 1,
                    startView: 1,
                    minView: 0,
                    maxView: 1,
                    forceParse: 0
                });
        }
        
//rotation

        if ("<?php echo $donneesif['petitdejeunerRotation']; ?>" != "")
        {
            $('[name="petitdejeunerRotation"]').val("<?php echo $donneesif['petitdejeunerRotation']; ?>");
            $('form #petitdejeunerRotation').attr('readonly', true);
        }
        if ("<?php echo $donneesif['dejeunerRotation']; ?>" != "")
        {
            $('[name="dejeunerRotation"]').val("<?php echo $donneesif['dejeunerRotation']; ?>");
            $('form #dejeunerRotation').attr('readonly', true);
        }
        if ("<?php echo $donneesif['gouterRotation']; ?>" != "")
        {
            $('[name="gouterRotation"]').val("<?php echo $donneesif['gouterRotation']; ?>");
            $('form #gouterRotation').attr('readonly', true);
        }
        if ("<?php echo $donneesif['dinerRotation']; ?>" != "")
        {
            $('[name="dinerRotation"]').val("<?php echo $donneesif['dinerRotation']; ?>");
            $('form #dinerRotation').attr('readonly', true);
        }
        if ("<?php echo $donneesif['collationRotation']; ?>" != "")
        {
            $('[name="collationRotation"]').val("<?php echo $donneesif['collationRotation']; ?>");
            $('form #collationRotation').attr('readonly', true);
        }

//objectif

        if ("<?php echo $donneesif['petitdejeunerObjectif']; ?>" != "")
        {
            $('[name="petitdejeunerObjectif"]').val("<?php echo $donneesif['petitdejeunerObjectif']; ?>");
            $('form #petitdejeunerObjectif').attr('readonly', true);
        }
        if ("<?php echo $donneesif['dejeunerObjectif']; ?>" != "")
        {
            $('[name="dejeunerObjectif"]').val("<?php echo $donneesif['dejeunerObjectif']; ?>");
            $('form #dejeunerObjectif').attr('readonly', true);
        }
        if ("<?php echo $donneesif['gouterObjectif']; ?>" != "")
        {
            $('[name="gouterObjectif"]').val("<?php echo $donneesif['gouterObjectif']; ?>");
            $('form #gouterObjectif').attr('readonly', true);
        }
        if ("<?php echo $donneesif['dinerObjectif']; ?>" != "")
        {
            $('[name="dinerObjectif"]').val("<?php echo $donneesif['dinerObjectif']; ?>");
            $('form #dinerObjectif').attr('readonly', true);
        }
        if ("<?php echo $donneesif['collationObjectif']; ?>" != "")
        {
            $('[name="collationObjectif"]').val("<?php echo $donneesif['collationObjectif']; ?>");
            $('form #collationObjectif').attr('readonly', true);
        }

//sensibilite

        if ("<?php echo $donneesif['petitdejeunerSensibilite']; ?>" != "")
        {
            $('[name="petitdejeunerSensibilite"]').val("<?php echo $donneesif['petitdejeunerSensibilite']; ?>");
            $('form #petitdejeunerSensibilite').attr('readonly', true);
        }
        if ("<?php echo $donneesif['dejeunerSensibilite']; ?>" != "")
        {
            $('[name="dejeunerSensibilite"]').val("<?php echo $donneesif['dejeunerSensibilite']; ?>");
            $('form #dejeunerSensibilite').attr('readonly', true);
        }
        if ("<?php echo $donneesif['gouterSensibilite']; ?>" != "")
        {
            $('[name="gouterSensibilite"]').val("<?php echo $donneesif['gouterSensibilite']; ?>");
            $('form #gouterSensibilite').attr('readonly', true);
        }
        if ("<?php echo $donneesif['dinerSensibilite']; ?>" != "")
        {
            $('[name="dinerSensibilite"]').val("<?php echo $donneesif['dinerSensibilite']; ?>");
            $('form #dinerSensibilite').attr('readonly', true);
        }
        if ("<?php echo $donneesif['collationSensibilite']; ?>" != "")
        {
            $('[name="collationSensibilite"]').val("<?php echo $donneesif['collationSensibilite']; ?>");
            $('form #collationSensibilite').attr('readonly', true);
        }


//tableau ao am habitude alimentaire

<?php
for ($i = 1; $i <= 9; $i++) {
    echo "if (" . $donneesha["date".$i.""] . " != '')
        {
            $('[name=\"date".$i."\"]').val(\"" . $donneesha["date".$i.""] . "\");
            $('form #date" .$i. "').attr('readonly', true);
            $('#date" .$i. "').datepicker(\"destroy\");
        }
        ";
    echo "if (" . $donneesha["taille".$i.""] . " != '')
        {
            $('[name=\"taille".$i."\"]').val(\"" . $donneesha["taille".$i.""] . "\");
            $('form #taille" .$i. "').attr('readonly', true);
        }
        ";
    echo "if (" . $donneesha["poids".$i.""] . " != '')
        {
            $('[name=\"poids".$i."\"]').val(\"" . $donneesha["poids".$i.""] . "\");
            $('form #poids" .$i. "').attr('readonly', true);
        }
        ";
    echo "if (" . $donneesha["imc".$i.""] . " != '')
        {
            $('[name=\"imc".$i."\"]').val(\"" . $donneesha["imc".$i.""] . "\");
        }
        ";
}
?>

    });
</script>

<script type="text/javascript">

    function capturer2() {
        alert("On appelle aussi ! ");
        var capture4 = {};
        var target4 = $('#bar');
        html2canvas(target4, {
            onrendered: function (canvas) {
                capture4.img = canvas.toDataURL("image/png");
                capture4.data = {'image': capture4.img};
                $.ajax({
                    url: "pdf/ajax4.php",
                    data: capture4.data,
                    type: 'post',
                    success: function (result) {
                        alert('image bien generer');
                    }
                });
            }
        });
    }

</script>