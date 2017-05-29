<style type="text/css">
    .field5
    {
        min-height: 20px;
        padding: 19px;
        margin-bottom: 20px;
        background-color: rgba(84, 46, 90, 0.6);
        border-radius: 10px;
        -webkit-box-shadow: inset 0 1px 1px rgba(84, 46, 90, 0.4);
        box-shadow: inset 0 1px 1px rgba(84, 46, 90, 0.4);
    }
</style>

<?php
    $req = $bdd->query("SELECT * FROM asg1 WHERE idPrescripteur = '" . $_SESSION['id'] . "' AND idPatient = '" . $id . "'");
    $asg1 = $req->fetch();

    $req2 = $bdd->query("SELECT * FROM asg2 WHERE idPrescripteur = '" . $_SESSION['id'] . "' AND idPatient = '" . $id . "'");
    $asg2 = $req2->fetch();

    $requete = $bdd->query("SELECT * FROM connaissances WHERE idPrescripteur = '" . $_SESSION['id'] . "' AND idPatient = '" . $id . "'");
    $connaissances = $requete->fetch();

    $query = $bdd->query("SELECT * FROM poseducatheter WHERE idPrescripteur = '" . $_SESSION['id'] . "' AND idPatient = '" . $id . "'");
    $poseducatheter = $query->fetch();
?>

<script type="text/javascript">
    $(document).ready(function ()
    {
        /*Date Pose du cathéter*/

        <?php
            for($h = 1 ; $h <= 4; $h ++)
            {
                echo "$('[name=\"cathdate".$h."\"]').val(\"".$poseducatheter['date'.$h]."\");";
                echo "
                   if(\"".$poseducatheter["date".$h.""]."\" != '')
                    {
                        $('#cathdate".$h."').datepicker(\"destroy\");
                    }\n
                    ";
            }
        ?>

        /*Pose du cathéter*/

        <?php
            for ($i = 1; $i<=44; $i++)
            {  
              echo "$('[name=\"cathselect".$i."\"]').val(\"".$poseducatheter['etat'.$i]."\");";

              echo "
                   if(\"".$poseducatheter["etat".$i.""]."\" != '')
                    {
                        $('form #cathselect".$i." option:not(:selected)').attr('disabled', false);
                    }
                    ";
            }
        ?>

        /*Commentaires*/ 

        <?php
            for ($k = 1; $k<=11; $k++)
            {  
              echo "$('[name=\"cathcommentaire".$k."\"]').val(\"".$poseducatheter['commentaire'.$k]."\");";
            }
        ?>

        /*Connaissances Options Radios*/

        <?php
            for($m = 1 ; $m <= 14; $m ++)
            {
                $valn = ($m * 2) - 1;
                $valn2 = $m * 2;
                echo "
                   if(\"".$connaissances["reponse".$m.""]."\" === 'Oui')
                    {
                        $('form #optionsRadios".$valn."').attr('checked', true);
                    }
                    else
                    {
                        $('form #optionsRadios".$valn2."').attr('checked', true);
                    }
                    ";
            }
        ?>

        /*Connaissances Observations*/

        <?php
            for($j = 1 ; $j <= 9; $j ++)
            {
                echo "$('[name=\"cnsobservation".$j."\"]').val(\"".$connaissances['observation'.$j]."\");";
            }
        ?>

        /*Date Connaissance*/

        <?php
            for($h = 1 ; $h <= 5; $h ++)
            {
                echo "$('[name=\"perempdate".$h."\"]').val(\"".$connaissances['date'.$h]."\");";

                echo "
                   if(\"".$connaissances["date".$h.""]."\" != '')
                    {
                        $('#perempdate".$h."').datepicker(\"destroy\");
                    }\n
                    ";
            }
        ?>

        /*ASG Détail et observation*/

        <?php
            for($l = 1 ; $l <= 4; $l ++)
            {
                echo "$('[name=\"asgdetail".$l."\"]').val(\"".$asg1['asgdetail'.$l]."\");";

                echo "$('[name=\"asgobservation".$l."\"]').val(\"".$asg1['asgobservation'.$l]."\");";
            }
        ?>

        $('[name="asgfrequence1"]').val("<?php echo utf8_encode($asg2['asgfrequence1']); ?>");
        $('[name="asgfrequence2"]').val("<?php echo utf8_encode($asg2['asgfrequence2']); ?>");
        $('[name="asgcommentaire"]').val("<?php echo utf8_encode($asg2['asgcommentaire']); ?>");
        $('[name="asg2commentaire"]').val("<?php echo utf8_encode($asg2['asg2commentaire']); ?>");

        if ("<?php echo $asg2['asgconnaissance']; ?>" === "Oui") 
        {
            $("form #asgconnaissance1").attr("checked", true);
        } else {
            $("form #asgconnaissance2").attr("checked", true);
        }
    });
</script>
<div class ="container-fluid">
    <fieldset class="field5" id="field">
        <center><font><h4>POSE DU CATHETER</h4></font></center><br/>

        <table class="table table-bordered" style="color: white;">
            <thead>
                <tr>
                    <td style="text-align: center;">Etapes</td>
                    <td><input type="text" readonly class="form-control datepickerAll" id="cathdate1" name="cathdate1" placeholder = "Date"></td>
                    <td><input type="text" readonly class="form-control datepickerAll" id="cathdate2" name="cathdate2" placeholder = "Date"></td>
                    <td><input type="text" readonly class="form-control datepickerAll" id="cathdate3" name="cathdate3" placeholder = "Date"></td>
                    <td><input type="text" readonly class="form-control datepickerAll" id="cathdate4" name="cathdate4" placeholder = "Date"></td>
                    <td style="text-align: center;">Commentaire</td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Mise en place du cathéter dans l'Inserteur</td>
                    <td>
                        <select class="form-control" id="cathselect1" name="cathselect1">
                            <option value="" selected hidden>--Choisir--</option>                                 
                            <option value="acquis">Acquis</option>
                            <option value="en cours">En cours d'acquisition</option>
                            <option value="non acquis">Non acquis</option>
                    </td>
                    <td>
                        <select class="form-control" id="cathselect2" name="cathselect2">
                            <option value="" selected hidden>--Choisir--</option>                                 
                            <option value="acquis">Acquis</option>
                            <option value="en cours">En cours d'acquisition</option>
                            <option value="non acquis">Non acquis</option>
                    </td>
                    <td>
                        <select class="form-control" id="cathselect3" name="cathselect3">
                            <option value="" selected hidden>--Choisir--</option>                                 
                            <option value="acquis">Acquis</option>
                            <option value="en cours">En cours d'acquisition</option>
                            <option value="non acquis">Non acquis</option>
                    </td>
                    <td>
                        <select class="form-control" id="cathselect4" name="cathselect4">
                            <option value="" selected hidden>--Choisir--</option>                                 
                            <option value="acquis">Acquis</option>
                            <option value="en cours">En cours d'acquisition</option>
                            <option value="non acquis">Non acquis</option>
                    </td>
                    <td><input type="text" class="form-control" name = "cathcommentaire1" id = "cathcommentaire1"></td>
                </tr>
                <tr>
                    <td>Retrait de l'adhésif et de la protection de l'aiguille</td>
                    <td>
                        <select class="form-control" id="cathselect5" name="cathselect5">
                            <option value="" selected hidden>--Choisir--</option>                                 
                            <option value="acquis">Acquis</option>
                            <option value="en cours">En cours d'acquisition</option>
                            <option value="non acquis">Non acquis</option>
                    </td>
                    <td>
                        <select class="form-control" id="cathselect6" name="cathselect6">
                            <option value="" selected hidden>--Choisir--</option>                                 
                            <option value="acquis">Acquis</option>
                            <option value="en cours">En cours d'acquisition</option>
                            <option value="non acquis">Non acquis</option>
                    </td>
                    <td>
                        <select class="form-control" id="cathselect7" name="cathselect7">
                            <option value="" selected hidden>--Choisir--</option>                                 
                            <option value="acquis">Acquis</option>
                            <option value="en cours">En cours d'acquisition</option>
                            <option value="non acquis">Non acquis</option>
                    </td>
                    <td>
                        <select class="form-control" id="cathselect8" name="cathselect8">
                            <option value="" selected hidden>--Choisir--</option>                                 
                            <option value="acquis">Acquis</option>
                            <option value="en cours">En cours d'acquisition</option>
                            <option value="non acquis">Non acquis</option>
                    </td>
                    <td><input type="text" class="form-control" name = "cathcommentaire2" id = "cathcommentaire2"></td>
                </tr>
                <tr>
                    <td>Armement de l'Inserteur</td>
                    <td>
                        <select class="form-control" id="cathselect9" name="cathselect9">
                            <option value="" selected hidden>--Choisir--</option>                                 
                            <option value="acquis">Acquis</option>
                            <option value="en cours">En cours d'acquisition</option>
                            <option value="non acquis">Non acquis</option>
                    </td>
                    <td>
                        <select class="form-control" id="cathselect10" name="cathselect10">
                            <option value="" selected hidden>--Choisir--</option>                                 
                            <option value="acquis">Acquis</option>
                            <option value="en cours">En cours d'acquisition</option>
                            <option value="non acquis">Non acquis</option>
                    </td>
                    <td>
                        <select class="form-control" id="cathselect11" name="cathselect11">
                            <option value="" selected hidden>--Choisir--</option>                                 
                            <option value="acquis">Acquis</option>
                            <option value="en cours">En cours d'acquisition</option>
                            <option value="non acquis">Non acquis</option>
                    </td>
                    <td>
                        <select class="form-control" id="cathselect12" name="cathselect12">
                            <option value="" selected hidden>--Choisir--</option>                                
                            <option value="acquis">Acquis</option>
                            <option value="en cours">En cours d'acquisition</option>
                            <option value="non acquis">Non acquis</option>
                    </td>
                    <td><input type="text" class="form-control" name = "cathcommentaire3" id = "cathcommentaire3"></td>
                </tr> 
                <tr>
                    <td>Choix du lieu d'injection</td>
                    <td>
                        <select class="form-control" id="cathselect13" name="cathselect13">
                            <option value="" selected hidden>--Choisir--</option>                                 
                            <option value="acquis">Acquis</option>
                            <option value="en cours">En cours d'acquisition</option>
                            <option value="non acquis">Non acquis</option>
                    </td>
                    <td>
                        <select class="form-control" id="cathselect14" name="cathselect14">
                            <option value="" selected hidden>--Choisir--</option>                                 
                            <option value="acquis">Acquis</option>
                            <option value="en cours">En cours d'acquisition</option>
                            <option value="non acquis">Non acquis</option>
                    </td>
                    <td>
                        <select class="form-control" id="cathselect15" name="cathselect15">
                            <option value="" selected hidden>--Choisir--</option>                                 
                            <option value="acquis">Acquis</option>
                            <option value="en cours">En cours d'acquisition</option>
                            <option value="non acquis">Non acquis</option>
                    </td>
                    <td>
                        <select class="form-control" id="cathselect16" name="cathselect16">
                            <option value="" selected hidden>--Choisir--</option>                                 
                            <option value="acquis">Acquis</option>
                            <option value="en cours">En cours d'acquisition</option>
                            <option value="non acquis">Non acquis</option>
                    </td>
                    <td><input type="text" class="form-control" name = "cathcommentaire4" id = "cathcommentaire4"></td>
                </tr>
                <tr>
                    <td>Désinfection cutanée</td>
                    <td>
                        <select class="form-control" id="cathselect17" name="cathselect17">
                            <option value="" selected hidden>--Choisir--</option>                                 
                            <option value="acquis">Acquis</option>
                            <option value="en cours">En cours d'acquisition</option>
                            <option value="non acquis">Non acquis</option>
                    </td>
                    <td>
                        <select class="form-control" id="cathselect18" name="cathselect18">
                            <option value="" selected hidden>--Choisir--</option>                                 
                            <option value="acquis">Acquis</option>
                            <option value="en cours">En cours d'acquisition</option>
                            <option value="non acquis">Non acquis</option>
                    </td>
                    <td>
                        <select class="form-control" id="cathselect19" name="cathselect19">
                            <option value="" selected hidden>--Choisir--</option>                                 
                            <option value="acquis">Acquis</option>
                            <option value="en cours">En cours d'acquisition</option>
                            <option value="non acquis">Non acquis</option>
                    </td>
                    <td>
                        <select class="form-control" id="cathselect20" name="cathselect20">
                            <option value="" selected hidden>--Choisir--</option>                                 
                            <option value="acquis">Acquis</option>
                            <option value="en cours">En cours d'acquisition</option>
                            <option value="non acquis">Non acquis</option>
                    </td>
                    <td><input type="text" class="form-control" name = "cathcommentaire5" id = "cathcommentaire5"></td>
                </tr>
                <tr>
                    <td>Déclenchement de l'Inserteur</td>
                    <td>
                        <select class="form-control" id="cathselect21" name="cathselect21">
                            <option value="" selected hidden>--Choisir--</option>                                 
                            <option value="acquis">Acquis</option>
                            <option value="en cours">En cours d'acquisition</option>
                            <option value="non acquis">Non acquis</option>
                    </td>
                    <td>
                        <select class="form-control" id="cathselect22" name="cathselect22">
                            <option value="" selected hidden>--Choisir--</option>                                 
                            <option value="acquis">Acquis</option>
                            <option value="en cours">En cours d'acquisition</option>
                            <option value="non acquis">Non acquis</option>
                    </td>
                    <td>
                        <select class="form-control" id="cathselect23" name="cathselect23">
                            <option value="" selected hidden>--Choisir--</option>                                 
                            <option value="acquis">Acquis</option>
                            <option value="en cours">En cours d'acquisition</option>
                            <option value="non acquis">Non acquis</option>
                    </td>
                    <td>
                        <select class="form-control" id="cathselect24" name="cathselect24">
                            <option value="" selected hidden>--Choisir--</option>                                 
                            <option value="acquis">Acquis</option>
                            <option value="en cours">En cours d'acquisition</option>
                            <option value="non acquis">Non acquis</option>
                    </td>
                    <td><input type="text" class="form-control" name = "cathcommentaire6" id = "cathcommentaire6"></td>
                </tr>
                <tr>
                    <td>Retrait de l'aiguille</td>
                    <td>
                        <select class="form-control" id="cathselect25" name="cathselect25">
                            <option value="" selected hidden>--Choisir--</option>                                 
                            <option value="acquis">Acquis</option>
                            <option value="en cours">En cours d'acquisition</option>
                            <option value="non acquis">Non acquis</option>
                    </td>
                    <td>
                        <select class="form-control" id="cathselect26" name="cathselect26">
                            <option value="" selected hidden>--Choisir--</option>                                 
                            <option value="acquis">Acquis</option>
                            <option value="en cours">En cours d'acquisition</option>
                            <option value="non acquis">Non acquis</option>
                    </td>
                    <td>
                        <select class="form-control" id="cathselect27" name="cathselect27">
                            <option value="" selected hidden>--Choisir--</option>                                 
                            <option value="acquis">Acquis</option>
                            <option value="en cours">En cours d'acquisition</option>
                            <option value="non acquis">Non acquis</option>
                    </td>
                    <td>
                        <select class="form-control" id="cathselect28" name="cathselect28">
                            <option value="" selected  hidden>--Choisir--</option>                                 
                            <option value="acquis">Acquis</option>
                            <option value="en cours">En cours d'acquisition</option>
                            <option value="non acquis">Non acquis</option>
                    </td>
                    <td><input type="text" class="form-control" name = "cathcommentaire7" id = "cathcommentaire7"></td>
                </tr>
                <tr>
                    <td>Amorce de la canule</td>
                    <td>
                        <select class="form-control" id="cathselect29" name="cathselect29">
                            <option value="" selected  hidden>--Choisir--</option>                                 
                            <option value="acquis">Acquis</option>
                            <option value="en cours">En cours d'acquisition</option>
                            <option value="non acquis">Non acquis</option>
                    </td>
                    <td>
                        <select class="form-control" id="cathselect211" name="cathselect211">
                            <option value="" selected  hidden>--Choisir--</option>                                 
                            <option value="acquis">Acquis</option>
                            <option value="en cours">En cours d'acquisition</option>
                            <option value="non acquis">Non acquis</option>
                    </td>
                    <td>
                        <select class="form-control" id="cathselect212" name="cathselect212">
                            <option value="" selected  hidden>--Choisir--</option>                                 
                            <option value="acquis">Acquis</option>
                            <option value="en cours">En cours d'acquisition</option>
                            <option value="non acquis">Non acquis</option>
                    </td>
                    <td>
                        <select class="form-control" id="cathselect213" name="cathselect213">
                            <option value="" selected  hidden>--Choisir--</option>                                 
                            <option value="acquis">Acquis</option>
                            <option value="en cours">En cours d'acquisition</option>
                            <option value="non acquis">Non acquis</option>
                    </td>
                    <td><input type="text" class="form-control" name = "cathcommentaire8" id = "cathcommentaire8"></td>
                </tr>
                <tr>
                    <td>Contrôle glycémique 2h après la pose</td>
                    <td>
                        <select class="form-control" id="cathselect214" name="cathselect214">
                            <option value="" selected  hidden>--Choisir--</option>                                 
                            <option value="acquis">Acquis</option>
                            <option value="en cours">En cours d'acquisition</option>
                            <option value="non acquis">Non acquis</option>
                    </td>
                    <td>
                        <select class="form-control" id="cathselect215" name="cathselect215">
                            <option value="" selected  hidden>--Choisir--</option>                                 
                            <option value="acquis">Acquis</option>
                            <option value="en cours">En cours d'acquisition</option>
                            <option value="non acquis">Non acquis</option>
                    </td>
                    <td>
                        <select class="form-control" id="cathselect216" name="cathselect216">
                            <option value="" selected  hidden>--Choisir--</option>                                 
                            <option value="acquis">Acquis</option>
                            <option value="en cours">En cours d'acquisition</option>
                            <option value="non acquis">Non acquis</option>
                    </td>
                    <td>
                        <select class="form-control" id="cathselect217" name="cathselect217"> 
                            <option value="" selected  hidden>--Choisir--</option>                                
                            <option value="acquis">Acquis</option>
                            <option value="en cours">En cours d'acquisition</option>
                            <option value="non acquis">Non acquis</option>
                    </td>
                    <td><input type="text" class="form-control" name = "cathcommentaire9" id = "cathcommentaire9"></td>
                </tr>
                <tr>
                    <td>Conservation de l'insuline</td>
                    <td>
                        <select class="form-control" id="cathselect218" name="cathselect218">
                            <option value="" selected hidden>--Choisir--</option>                                 
                            <option value="acquis">Acquis</option>
                            <option value="en cours">En cours d'acquisition</option>
                            <option value="non acquis">Non acquis</option>
                    </td>
                    <td>
                        <select class="form-control" id="cathselect219" name="cathselect219">
                            <option value="" selected hidden>--Choisir--</option>                                 
                            <option value="acquis">Acquis</option>
                            <option value="en cours">En cours d'acquisition</option>
                            <option value="non acquis">Non acquis</option>
                    </td>
                    <td>
                        <select class="form-control" id="cathselect221" name="cathselect221">
                            <option value="" selected hidden>--Choisir--</option>                                 
                            <option value="acquis">Acquis</option>
                            <option value="en cours">En cours d'acquisition</option>
                            <option value="non acquis">Non acquis</option>
                    </td>
                    <td>
                        <select class="form-control" id="cathselect222" name="cathselect222">
                            <option value="" selected hidden>--Choisir--</option>                                 
                            <option value="acquis">Acquis</option>
                            <option value="en cours">En cours d'acquisition</option>
                            <option value="non acquis">Non acquis</option>
                    </td>
                    <td><input type="text" class="form-control" name = "cathcommentaire10" id = "cathcommentaire10"></td>
                </tr>
                <tr>
                    <td>Fréquence de changement des cathéters</td>
                    <td>
                        <select class="form-control" id="cathselect223" name="cathselect223">
                            <option value="" selected hidden>--Choisir--</option>                                 
                            <option value="acquis">Acquis</option>
                            <option value="en cours">En cours d'acquisition</option>
                            <option value="non acquis">Non acquis</option>
                    </td>
                    <td>
                        <select class="form-control" id="cathselect224" name="cathselect224">
                            <option value="" selected hidden>--Choisir--</option>                                 
                            <option value="acquis">Acquis</option>
                            <option value="en cours">En cours d'acquisition</option>
                            <option value="non acquis">Non acquis</option>
                    </td>
                    <td>
                        <select class="form-control" id="cathselect225" name="cathselect225">
                            <option value="" selected hidden>--Choisir--</option>                                 
                            <option value="acquis">Acquis</option>
                            <option value="en cours">En cours d'acquisition</option>
                            <option value="non acquis">Non acquis</option>
                    </td>
                    <td>
                        <select class="form-control" id="cathselect226" name="cathselect226">
                            <option value="" selected hidden>--Choisir--</option>                                 
                            <option value="acquis">Acquis</option>
                            <option value="en cours">En cours d'acquisition</option>
                            <option value="non acquis">Non acquis</option>
                    </td>
                    <td><input type="text" class="form-control" name = "cathcommentaire11" id = "cathcommentaire11"></td>
                </tr>
            </tbody>
        </table>
    </fieldset>

    <fieldset class="field5" id="field">
        <center><font><h4>CONNAISSANCES</h4></font></center><br/>

        <table class="table table-bordered" style="color: white;">
            <thead>
                <tr>
                    <td style="text-align: center;"></td>
                    <td style="text-align: center;"></td>
                    <td style="text-align: center;">Observation</td>                            
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Numéro de l'astreinte Bastide médicale</td>
                    <td>
                        <div class="radio">
                            <label>
                                <input type="radio" name="connaissance1" id="optionsRadios1" value="Oui" checked="">
                                Oui
                            </label>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <label>
                                <input type="radio" name="connaissance1" id="optionsRadios2" value="Non">
                                Non
                            </label>
                        </div>
                    </td>
                    <td><input type="text" class="form-control" id="cnsobservation1" name="cnsobservation1"></td>                            
                </tr>
                <tr>
                    <td>Numéro de l'astreinte BLCM</td>
                    <td>
                        <div class="radio">
                            <label>
                                <input type="radio" name="connaissance2" id="optionsRadios3" value="Oui" checked="">
                                Oui
                            </label>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <label>
                                <input type="radio" name="connaissance2" id="optionsRadios4" value="Non">
                                Non
                            </label>
                        </div>
                    </td>
                    <td><input type="text" class="form-control" id="cnsobservation2" name="cnsobservation2"></td>
                </tr>
                <tr>
                    <td>
                        <div class="radio">Kit de sécurité</div>
                        <div class="radio">
                            <ul>
                                <div class="radio"><p>Stylo d'insuline rapide</p></div>
                                <div class="radio"><p>Stylo d'insuline lente</p></div>
                                <div class="radio"><p>Aiguilles</p></div>
                                <div class="radio"><p>Stylo de glucagen</p></div>
                            </ul>
                        </div>

                    </td>

                    <td>
                        <div class="radio"></div>
                        <div class="radio">

                            <div class="radio">
                                <p>
                                    <label>
                                        <input type="radio" name="connaissance3" id="optionsRadios5" value="Oui" checked="">
                                        Oui
                                    </label>
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <label>
                                        <input type="radio" name="connaissance3" id="optionsRadios6" value="Non">
                                        Non
                                    </label>
                                </p>
                            </div>
                            <div class="radio">
                                <p>
                                    <label>
                                        <input type="radio" name="connaissance4" id="optionsRadios7" value="Oui" checked="">
                                        Oui
                                    </label>
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <label>
                                        <input type="radio" name="connaissance4" id="optionsRadios8" value="Non">
                                        Non
                                    </label>
                                </p>
                            </div>
                            <div class="radio">
                                <p>
                                    <label>
                                        <input type="radio" name="connaissance5" id="optionsRadios9" value="Oui" checked="">
                                        Oui
                                    </label>
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <label>
                                        <input type="radio" name="connaissance5" id="optionsRadios10" value="Non">
                                        Non
                                    </label>
                                </p>
                            </div>
                            <div class="radio">
                                <p>
                                    <label>
                                        <input type="radio" name="connaissance6" id="optionsRadios11" value="Oui" checked="">
                                        Oui
                                    </label>
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <label>
                                        <input type="radio" name="connaissance6" id="optionsRadios12" value="Non">
                                        Non
                                    </label>
                                </p>
                            </div>

                        </div>
                    </td>
                    <td>
                        <div class="radio">Date de péremption</div>
                        <div class="radio">
                            <ul>
                                <div class="radio">

                                    <input type="text" readonly class="input-sm form-control datepickerAll" id="perempdate1" name="perempdate1">

                                </div>
                                <div class="radio">

                                    <input type="text" readonly class="input-sm form-control datepickerAll" id="perempdate2" name="perempdate2">

                                </div>
                                <div class="radio">

                                    <input type="text" readonly class="input-sm form-control datepickerAll" id="perempdate3" name="perempdate3">

                                </div>
                                <div class="radio">

                                    <input type="text" readonly class="input-sm form-control datepickerAll" id="perempdate4" name="perempdate4">

                                </div>
                            </ul>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Matériel de secours</td>
                    <td>
                        <div class="radio">
                            <label>
                                <input type="radio" name="connaissance7" id="optionsRadios13" value="Oui" checked="">
                                Oui
                            </label>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <label>
                                <input type="radio" name="connaissance7" id="optionsRadios14" value="Non">
                                Non
                            </label>
                        </div>
                    </td>
                    <td>



                        <div class="radio">

                            <input type="text" readonly class="form-control input-sm datepickerAll" id="perempdate5" name="perempdate5" placeholder = "Date de péremption">

                        </div>


                    </td>
                </tr>
                <tr>
                    <td>Schéma de remplacement</td>
                    <td>
                        <div class="radio">
                            <label>
                                <input type="radio" name="connaissance8" id="optionsRadios15" value="Oui" checked="">
                                Oui
                            </label>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <label>
                                <input type="radio" name="connaissance8" id="optionsRadios16" value="Non">
                                Non
                            </label>
                        </div>
                    </td>
                    <td><input type="text" class="form-control" id="cnsobservation3" name="cnsobservation3"></td>
                </tr>
                <tr>
                    <td>CAT en cas d'hypoglycémie</td>
                    <td>
                        <div class="radio">
                            <label>
                                <input type="radio" name="connaissance9" id="optionsRadios17" value="Oui" checked="">
                                Oui
                            </label>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <label>
                                <input type="radio" name="connaissance9" id="optionsRadios18" value="Non">
                                Non
                            </label>
                        </div>
                    </td>
                    <td><input type="text" class="form-control" id="cnsobservation4" name="cnsobservation4"></td>
                </tr>
                <tr>
                    <td>Maitrise du ressucrage</td>
                    <td>
                        <div class="radio">
                            <label>
                                <input type="radio" name="connaissance10" id="optionsRadios19" value="Oui" checked="">
                                Oui
                            </label>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <label>
                                <input type="radio" name="connaissance10" id="optionsRadios20" value="Non">
                                Non
                            </label>
                        </div>
                    </td>
                    <td><input type="text" class="form-control" id="cnsobservation5" name="cnsobservation5"></td>
                </tr>                        
                <tr>
                    <td>CAT en cas d'hyperglycémie</td>
                    <td>
                        <div class="radio">
                            <label>
                                <input type="radio" name="connaissance11" id="optionsRadios21" value="Oui" checked="">
                                Oui
                            </label>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <label>
                                <input type="radio" name="connaissance11" id="optionsRadios22" value="Non">
                                Non
                            </label>
                        </div>
                    </td>
                    <td><input type="text" class="form-control" id="cnsobservation6" name="cnsobservation6"></td>
                </tr>
                <tr>
                    <td>Maitrise de l'adaptation du bolus de correction</td>
                    <td>
                        <div class="radio">
                            <label>
                                <input type="radio" name="connaissance12" id="optionsRadios23" value="Oui" checked="">
                                Oui
                            </label>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <label>
                                <input type="radio" name="connaissance12" id="optionsRadios24" value="Non">
                                Non
                            </label>
                        </div>
                    </td>
                    <td><input type="text" class="form-control" id="cnsobservation7" name="cnsobservation7"></td>
                </tr>
                <tr>
                    <td>Réalise le contrôle de la Cétone</td>
                    <td>
                        <div class="radio">
                            <label>
                                <input type="radio" name="connaissance13" id="optionsRadios25" value="Oui" checked="">
                                Oui
                            </label>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <label>
                                <input type="radio" name="connaissance13" id="optionsRadios26" value="Non">
                                Non
                            </label>
                        </div>
                    </td>
                    <td><input type="text" class="form-control" id="cnsobservation8" name="cnsobservation8"></td>
                </tr>
                <tr>
                    <td>CAT en cas de cétone</td>
                    <td>
                        <div class="radio">
                            <label>
                                <input type="radio" name="connaissance14" id="optionsRadios27" value="Oui" checked="">
                                Oui
                            </label>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <label>
                                <input type="radio" name="connaissance14" id="optionsRadios28" value="Non">
                                Non
                            </label>
                        </div>
                    </td>
                    <td><input type="text" class="form-control" id="cnsobservation9" name="cnsobservation9"></td>
                </tr>                     
            </tbody>
        </table>
    </fieldset>

    <fieldset class="field5" id="field">
        <center><font><h4>AUTO SURVEILLANCE GLYCEMIQUE</h4></font></center><br/>
        <table class="table table-bordered" style="color: white;">
            <thead>
                <tr>
                    <td style="width:20%; text-align: center;"></td>
                    <td style="text-align: center;">Détails</td>
                    <td style="text-align: center;">Observations</td>                            
                </tr>
            </thead>
            <tbody>                      
                <tr>
                    <td>Nom du dispositif ASG principal et des bandelettes</td>
                    <td><textarea type="text" rows="4" class="form-control" id="asgdetail1" name="asgdetail1"></textarea></td>
                    <td><textarea type="text" rows="4" class="form-control" id="asgobservation1" name="asgobservation1"></textarea></td>
                </tr>
                <tr>
                    <td>Nom du dispositif ASG secondaire éventuel et des bandelettes</td>
                    <td><textarea type="text" rows="4" class="form-control" id="asgdetail2" name="asgdetail2"></textarea></td>
                    <td><textarea type="text" rows="4" class="form-control" id="asgobservation2" name="asgobservation2"></textarea></td>
                </tr>
                <tr>
                    <td>Nom du dispositif auto piqueur</td>
                    <td><textarea type="text" rows="4" class="form-control" id="asgdetail3" name="asgdetail3"></textarea></td>
                    <td><textarea type="text" rows="4" class="form-control" id="asgobservation3" name="asgobservation3"></textarea></td>
                </tr>                        
                <tr>
                    <td>Etat cutané des doigts/respect de "la pince"</td>
                    <td><textarea type="text" rows="4" class="form-control" id="asgdetail4" name="asgdetail4"></textarea></td>
                    <td><textarea type="text" rows="4" class="form-control" id="asgobservation4" name="asgobservation4"></textarea></td>
                </tr>                                        
            </tbody>
        </table>
    </fieldset>

    <fieldset class="field5" id="field">
        <center><font><h4>AUTO SURVEILLANCE GLYCEMIQUE (ASG)</h4></font></center><br/>
        <table class="table table-bordered" style="color: white;">
            <thead>
                <tr>
                    <td style="text-align: center;"></td>
                    <td style="text-align: center;">Prescription</td>
                    <td style="text-align: center;">Réalisation réelle</td>                            
                </tr>
            </thead>
            <tbody>                      
                <tr>
                    <td>Fréqeunce des glycémies</td>
                    <td>
                        <div class="input-group">
                            <input type="number" class="form-control" name="asgfrequence1" id="asgfrequence1">
                        
                            <span class="input-group-addon">/ jour</span>
                        </div>  
                    </td> 
                    <td>
                        <div class="input-group">
                            <input type="number" class="form-control" name="asgfrequence2" id="asgfrequence2">
                            <span class="input-group-addon">/ jour</span>
                        </div>
                    </td>
                </tr>

                <tr>
                    <td>Connaissance et respect des mesures d'hygiène relatives l'ASG</td>
                    <td>
                        <div class="radio" align = "center">
                            <label>
                                <input type="radio" value="Oui" name="asgconnaissance" id="asgconnaissance1" checked="">  
                            </label>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <label>
                                <input type="radio" name="asgconnaissance" id="asgconnaissance2" value="Non">
                                Non
                            </label>
                        </div>
                    </td>
                    <td><input type="text" class="form-control" name="asgcommentaire" id="asgcommentaire" placeholder = "Commentaire"></td>
                </tr>                                      
            </tbody>
        </table>

        <div class="form-group">
            <label class="col-sm-4 control-label">Commentaire global :</label>
            <div class="col-sm-7">
                <textarea rows="3" type="text" placeholder="Commentaire global" class="form-control" name="asg2commentaire" id="asg2commentaire"></textarea>
            </div>
        </div>


    </fieldset>


</div>

