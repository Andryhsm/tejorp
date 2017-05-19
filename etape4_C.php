<style type="text/css">
.field4 
{
    min-height: 20px;
    padding: 19px;
    margin-bottom: 20px;
    background-color: rgba(146,62,13,.5);
    border-radius: 10px;
    -webkit-box-shadow: inset 0 1px 1px rgba(233,101,25,.3);
    box-shadow: inset 0 1px 1px rgba(233,101,25,.3);
}
</style>

<?php
    $reponsepmp = $bdd->query("SELECT * FROM manipulationdelapompe WHERE idPrescripteur = '" . $_SESSION['id'] . "' and idPatient = '" . $id . "'");
    $donneespmp = $reponsepmp->fetch();

    $reponsealarme = $bdd->query("SELECT * FROM alarmesetprecautions WHERE idPrescripteur = '" . $_SESSION['id'] . "' and idPatient = '" . $id . "'");
    $donneesalarme = $reponsealarme->fetch();

    $reponsemanip = $bdd->query("SELECT * FROM manipulations WHERE idPrescripteur = '" . $_SESSION['id'] . "' and idPatient = '" . $id . "'");
    $donneesmanip = $reponsemanip->fetch();
?>

<div class="container-fluid">                        
	<fieldset class="field4" id="field">
		<center><font><h4>MANIPULATION DE LA POMPE</h4></font></center><br/>

                

			<table class="table table-bordered" style="color: white;">
                    <thead>
                        <tr>
                            <td style="text-align: center;">Etapes</td>
                            <td><input type="text" class="form-control datepickerAll" value="<?php echo $donneespmp['date1']; ?>" id="pmpdate1" name="pmpdate1" placeholder = "Date"></td>
                            <td><input type="text" class="form-control datepickerAll" value="<?php echo $donneespmp['date2']; ?>" id="pmpdate2" name="pmpdate2" placeholder = "Date"></td>
                            <td><input type="text" class="form-control datepickerAll" value="<?php echo $donneespmp['date3']; ?>" id="pmpdate3" name="pmpdate3" placeholder = "Date"></td>
                            <td><input type="text" class="form-control datepickerAll" value="<?php echo $donneespmp['date4']; ?>" id="pmpdate4" name="pmpdate4" placeholder = "Date"></td>
                            <td style="text-align: center;">Commentaire</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Installation de la pile</td>
                            <td>
                                <select class="form-control" name = "pmpselect1" id = "pmpselect1">                                 
                                    <option value="acquis">Acquis</option>
                                    <option value="en cours">En cours d'acquisition</option>
                                    <option value="non acquis">Non acquis</option>
                            </td>
                            <td>
                                <select class="form-control" name = "pmpselect2" id = "pmpselect2">                                 
                                    <option value="acquis">Acquis</option>
                                    <option value="en cours">En cours d'acquisition</option>
                                    <option value="non acquis">Non acquis</option>
                            </td>
                            <td>
                                <select class="form-control" name = "pmpselect3" id = "pmpselect3">                                 
                                    <option value="acquis">Acquis</option>
                                    <option value="en cours">En cours d'acquisition</option>
                                    <option value="non acquis">Non acquis</option>
                            </td>
                            <td>
                                <select class="form-control" name = "pmpselect4" id = "pmpselect4">                                 
                                    <option value="acquis">Acquis</option>
                                    <option value="en cours">En cours d'acquisition</option>
                                    <option value="non acquis">Non acquis</option>
                            </td>
                            <td><input type="text" class="form-control" value="<?php echo $donneespmp['commentaire1']; ?>" name="pmpcommentaire1" id="pmpcommentaire1"></td>
                        </tr>
                        <tr>
                            <td>Marche/Arrêt</td>
                           <td>
                                <select class="form-control" name = "pmpselect5" id = "pmpselect5">                                 
                                    <option value="acquis">Acquis</option>
                                    <option value="en cours">En cours d'acquisition</option>
                                    <option value="non acquis">Non acquis</option>
                            </td>
                            <td>
                                <select class="form-control" name = "pmpselect6" id = "pmpselect6">                                 
                                    <option value="acquis">Acquis</option>
                                    <option value="en cours">En cours d'acquisition</option>
                                    <option value="non acquis">Non acquis</option>
                            </td>
                            <td>
                                <select class="form-control" name = "pmpselect7" id = "pmpselect7">                                 
                                    <option value="acquis">Acquis</option>
                                    <option value="en cours">En cours d'acquisition</option>
                                    <option value="non acquis">Non acquis</option>
                            </td>
                            <td>
                                <select class="form-control" name = "pmpselect8" id = "pmpselect8">                                 
                                    <option value="acquis">Acquis</option>
                                    <option value="en cours">En cours d'acquisition</option>
                                    <option value="non acquis">Non acquis</option>
                            </td>
                            <td><input type="text" class="form-control" value="<?php echo $donneespmp['commentaire2']; ?>" name="pmpcommentaire2" id="pmpcommentaire2"></td>
                        </tr>
                        <tr>
                            <td>Réglage Date/heure</td>
                            <td>
                                <select class="form-control" name = "pmpselect9" id = "pmpselect9">                                 
                                    <option value="acquis">Acquis</option>
                                    <option value="en cours">En cours d'acquisition</option>
                                    <option value="non acquis">Non acquis</option>
                            </td>
                            <td>
                                <select class="form-control" name = "pmpselect10" id = "pmpselect10">                                 
                                    <option value="acquis">Acquis</option>
                                    <option value="en cours">En cours d'acquisition</option>
                                    <option value="non acquis">Non acquis</option>
                            </td>
                            <td>
                                <select class="form-control" name = "pmpselect11" id = "pmpselect11">                                 
                                    <option value="acquis">Acquis</option>
                                    <option value="en cours">En cours d'acquisition</option>
                                    <option value="non acquis">Non acquis</option>
                            </td>
                            <td>
                                <select class="form-control" name = "pmpselect12" id = "pmpselect12">                                 
                                    <option value="acquis">Acquis</option>
                                    <option value="en cours">En cours d'acquisition</option>
                                    <option value="non acquis">Non acquis</option>
                            </td>
                            <td><input type="text" class="form-control" value="<?php echo $donneespmp['commentaire3']; ?>" name="pmpcommentaire3" id="pmpcommentaire3"></td>
                        </tr> 
                        <tr>
                            <td>Réglage du bolus</td>
                            <td>
                                <select class="form-control" name = "pmpselect13" id = "pmpselect13">                                 
                                    <option value="acquis">Acquis</option>
                                    <option value="en cours">En cours d'acquisition</option>
                                    <option value="non acquis">Non acquis</option>
                            </td>
                            <td>
                                <select class="form-control" name = "pmpselect14" id = "pmpselect14">                                 
                                    <option value="acquis">Acquis</option>
                                    <option value="en cours">En cours d'acquisition</option>
                                    <option value="non acquis">Non acquis</option>
                            </td>
                            <td>
                                <select class="form-control" name = "pmpselect15" id = "pmpselect15">                                 
                                    <option value="acquis">Acquis</option>
                                    <option value="en cours">En cours d'acquisition</option>
                                    <option value="non acquis">Non acquis</option>
                            </td>
                            <td>
                                <select class="form-control" name = "pmpselect16" id = "pmpselect16">                                 
                                    <option value="acquis">Acquis</option>
                                    <option value="en cours">En cours d'acquisition</option>
                                    <option value="non acquis">Non acquis</option>
                            </td>
                            <td><input type="text" class="form-control" value="<?php echo $donneespmp['commentaire4']; ?>" name="pmpcommentaire4" id="pmpcommentaire4"></td>
                        </tr>
                        <tr>
                            <td>Arrêt du bolus en cours</td>
                            <td>
                                <select class="form-control" name = "pmpselect17" id = "pmpselect17">                                 
                                    <option value="acquis">Acquis</option>
                                    <option value="en cours">En cours d'acquisition</option>
                                    <option value="non acquis">Non acquis</option>
                            </td>
                            <td>
                                <select class="form-control" name = "pmpselect18" id = "pmpselect18">                                 
                                    <option value="acquis">Acquis</option>
                                    <option value="en cours">En cours d'acquisition</option>
                                    <option value="non acquis">Non acquis</option>
                            </td>
                            <td>
                                <select class="form-control" name = "pmpselect19" id = "pmpselect19">                                 
                                    <option value="acquis">Acquis</option>
                                    <option value="en cours">En cours d'acquisition</option>
                                    <option value="non acquis">Non acquis</option>
                            </td>
                            <td>
                                <select class="form-control" name = "pmpselect20" id = "pmpselect20">                                 
                                    <option value="acquis">Acquis</option>
                                    <option value="en cours">En cours d'acquisition</option>
                                    <option value="non acquis">Non acquis</option>
                            </td>
                            <td><input type="text" class="form-control" value="<?php echo $donneespmp['commentaire5']; ?>" name="pmpcommentaire5" id="pmpcommentaire5"></td>
                        </tr>
                        <tr>
                            <td>Historique des bolus</td>
                            <td>
                                <select class="form-control" name = "pmpselect21" id = "pmpselect21">                                 
                                    <option value="acquis">Acquis</option>
                                    <option value="en cours">En cours d'acquisition</option>
                                    <option value="non acquis">Non acquis</option>
                            </td>
                            <td>
                                <select class="form-control" name = "pmpselect22" id = "pmpselect22">                                 
                                    <option value="acquis">Acquis</option>
                                    <option value="en cours">En cours d'acquisition</option>
                                    <option value="non acquis">Non acquis</option>
                            </td>
                            <td>
                                <select class="form-control" name = "pmpselect23" id = "pmpselect23">                                 
                                    <option value="acquis">Acquis</option>
                                    <option value="en cours">En cours d'acquisition</option>
                                    <option value="non acquis">Non acquis</option>
                            </td>
                            <td>
                                <select class="form-control" name = "pmpselect24" id = "pmpselect24">                                 
                                    <option value="acquis">Acquis</option>
                                    <option value="en cours">En cours d'acquisition</option>
                                    <option value="non acquis">Non acquis</option>
                            </td>
                            <td><input type="text" class="form-control" value="<?php echo $donneespmp['commentaire6']; ?>" name="pmpcommentaire6" id="pmpcommentaire6"></td>
                        </tr>
                        <tr>
                            <td>Programmation du débit basal</td>
                            <td>
                                <select class="form-control" name = "pmpselect25" id = "pmpselect25">                                 
                                    <option value="acquis">Acquis</option>
                                    <option value="en cours">En cours d'acquisition</option>
                                    <option value="non acquis">Non acquis</option>
                            </td>
                            <td>
                                <select class="form-control" name = "pmpselect26" id = "pmpselect26">                                 
                                    <option value="acquis">Acquis</option>
                                    <option value="en cours">En cours d'acquisition</option>
                                    <option value="non acquis">Non acquis</option>
                            </td>
                            <td>
                                <select class="form-control" name = "pmpselect27" id = "pmpselect27">                                 
                                    <option value="acquis">Acquis</option>
                                    <option value="en cours">En cours d'acquisition</option>
                                    <option value="non acquis">Non acquis</option>
                            </td>
                            <td>
                                <select class="form-control" name = "pmpselect28" id = "pmpselect28">                                 
                                   <option value="acquis">Acquis</option>
                                    <option value="en cours">En cours d'acquisition</option>
                                    <option value="non acquis">Non acquis</option>
                            </td>
                            <td><input type="text" class="form-control" value="<?php echo $donneespmp['commentaire7']; ?>" name="pmpcommentaire7" id="pmpcommentaire7"></td>
                        </tr>
                        <tr>
                            <td>Consulter les débits de base</td>
                            <td>
                                <select class="form-control" name = "pmpselect29" id = "pmpselect29">                                 
                                    <option value="acquis">Acquis</option>
                                    <option value="en cours">En cours d'acquisition</option>
                                    <option value="non acquis">Non acquis</option>
                            </td>
                            <td>
                                <select class="form-control" name = "pmpselect291" id = "pmpselect291">                                 
                                    <option value="acquis">Acquis</option>
                                    <option value="en cours">En cours d'acquisition</option>
                                    <option value="non acquis">Non acquis</option>
                            </td>
                            <td>
                                <select class="form-control" name = "pmpselect292" id = "pmpselect292">                                 
                                    <option value="acquis">Acquis</option>
                                    <option value="en cours">En cours d'acquisition</option>
                                    <option value="non acquis">Non acquis</option>
                            </td>
                            <td>
                                <select class="form-control" name = "pmpselect293" id = "pmpselect293">                                 
                                    <option value="acquis">Acquis</option>
                                    <option value="en cours">En cours d'acquisition</option>
                                    <option value="non acquis">Non acquis</option>
                            </td>
                            <td><input type="text" class="form-control" value="<?php echo $donneespmp['commentaire8']; ?>" name="pmpcommentaire8" id="pmpcommentaire8"></td>
                        </tr>
                        <tr>
                            <td>Programmer et arrêter le débit de base temporaire</td>
                            <td>
                                <select class="form-control" name = "pmpselect294" id = "pmpselect294">                                 
                                    <option value="acquis">Acquis</option>
                                    <option value="en cours">En cours d'acquisition</option>
                                    <option value="non acquis">Non acquis</option>
                            </td>
                            <td>
                                <select class="form-control" name = "pmpselect295" id = "pmpselect295">                                 
                                    <option value="acquis">Acquis</option>
                                    <option value="en cours">En cours d'acquisition</option>
                                    <option value="non acquis">Non acquis</option>
                            </td>
                            <td>
                                <select class="form-control" name = "pmpselect296" id = "pmpselect296">                                 
                                    <option value="acquis">Acquis</option>
                                    <option value="en cours">En cours d'acquisition</option>
                                    <option value="non acquis">Non acquis</option>
                            </td>
                            <td>
                                <select class="form-control" name = "pmpselect297" id = "pmpselect297">                                 
                                    <option value="acquis">Acquis</option>
                                    <option value="en cours">En cours d'acquisition</option>
                                    <option value="non acquis">Non acquis</option>
                            </td>
                            <td><input type="text" class="form-control" value="<?php echo $donneespmp['commentaire9']; ?>" name="pmpcommentaire9" id="pmpcommentaire9"></td>
                        </tr>
                    </tbody>
                </table>

                <div class="form-group">
                    <label class="col-sm-4 control-label">Autres :</label>
                    <div class="col-sm-7">
                        <textarea rows="3" type="text" placeholder="Autres" class="form-control" name="pmpautre" id="autre1"></textarea>
                    </div>
                </div>

	</fieldset>

    <fieldset class="field4" id="field">
        <center><font><h4>ALARMES ET PRECAUTIONS</h4></font></center><br/>

            <table class="table table-bordered" style="color: white;">
                    <thead>
                        <tr>
                            <td style="text-align: center;">Etapes</td>
                            <td><input type="text" class="form-control datepickerAll" value="<?php echo $donneesalarme['alarmedate1']; ?>" id="alarmedate1" name="alarmedate1" placeholder = "Date"></td>
                            <td><input type="text" class="form-control datepickerAll" value="<?php echo $donneesalarme['alarmedate1']; ?>" id="alarmedate2" name="alarmedate2" placeholder = "Date"></td>
                            <td><input type="text" class="form-control datepickerAll" value="<?php echo $donneesalarme['alarmedate1']; ?>" id="alarmedate3" name="alarmedate3" placeholder = "Date"></td>
                            <td><input type="text" class="form-control datepickerAll" value="<?php echo $donneesalarme['alarmedate1']; ?>" id="alarmedate4" name="alarmedate4" placeholder = "Date"></td>
                            <td style="text-align: center;">Commentaire</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Reconnaitre une alarme</td>
                            <td>
                                <select class="form-control" id="alarmeselect1" name="alarmeselect1">                                 
                                    <option value="acquis">Acquis</option>
                                    <option value="en cours">En cours d'acquisition</option>
                                    <option value="non acquis">Non acquis</option>
                            </td>
                            <td>
                                <select class="form-control" id="alarmeselect2" name="alarmeselect2">                                 
                                    <option value="acquis">Acquis</option>
                                    <option value="en cours">En cours d'acquisition</option>
                                    <option value="non acquis">Non acquis</option>
                            </td>
                            <td>
                                <select class="form-control"id="alarmeselect3" name="alarmeselect3">                                 
                                    <option value="acquis">Acquis</option>
                                    <option value="en cours">En cours d'acquisition</option>
                                    <option value="non acquis">Non acquis</option>
                            </td>
                            <td>
                                <select class="form-control"id="alarmeselect4" name="alarmeselect4">                                 
                                    <option value="acquis">Acquis</option>
                                    <option value="en cours">En cours d'acquisition</option>
                                    <option value="non acquis">Non acquis</option>
                            </td>
                            <td><input type="text" class="form-control" value="<?php echo $donneesalarme['commentaire1']; ?>" id="alarmecommentaire1" name="alarmecommentaire1"></td>
                        </tr>
                        <tr>
                            <td>Pile faible</td>
                            <td>
                                <select class="form-control"id="alarmeselect5" name="alarmeselect5">                                 
                                    <option value="acquis">Acquis</option>
                                    <option value="en cours">En cours d'acquisition</option>
                                    <option value="non acquis">Non acquis</option>
                            </td>
                            <td>
                                <select class="form-control"id="alarmeselect6" name="alarmeselect6">                                 
                                    <option value="acquis">Acquis</option>
                                    <option value="en cours">En cours d'acquisition</option>
                                    <option value="non acquis">Non acquis</option>
                            </td>
                            <td>
                                <select class="form-control"id="alarmeselect7" name="alarmeselect7">                                 
                                    <option value="acquis">Acquis</option>
                                    <option value="en cours">En cours d'acquisition</option>
                                    <option value="non acquis">Non acquis</option>
                            </td>
                            <td>
                                <select class="form-control"id="alarmeselect8" name="alarmeselect8">                                 
                                    <option value="acquis">Acquis</option>
                                    <option value="en cours">En cours d'acquisition</option>
                                    <option value="non acquis">Non acquis</option>
                            </td>
                            <td><input type="text" class="form-control" value="<?php echo $donneesalarme['commentaire2']; ?>" id="alarmecommentaire2" name="alarmecommentaire2"></td>
                        </tr>
                        <tr>
                            <td>Pile épuisée</td>
                            <td>
                                <select class="form-control"id="alarmeselect9" name="alarmeselect9">                                 
                                    <option value="acquis">Acquis</option>
                                    <option value="en cours">En cours d'acquisition</option>
                                    <option value="non acquis">Non acquis</option>
                            </td>
                            <td>
                                <select class="form-control"id="alarmeselect10" name="alarmeselect10">                                 
                                    <option value="acquis">Acquis</option>
                                    <option value="en cours">En cours d'acquisition</option>
                                    <option value="non acquis">Non acquis</option>
                            </td>
                            <td>
                                <select class="form-control"id="alarmeselect11" name="alarmeselect11">                                 
                                    <option value="acquis">Acquis</option>
                                    <option value="en cours">En cours d'acquisition</option>
                                    <option value="non acquis">Non acquis</option>
                            </td>
                            <td>
                                <select class="form-control"id="alarmeselect12" name="alarmeselect12">                                 
                                    <option value="acquis">Acquis</option>
                                    <option value="en cours">En cours d'acquisition</option>
                                    <option value="non acquis">Non acquis</option>
                            </td>
                            <td><input type="text" class="form-control" value="<?php echo $donneesalarme['commentaire3']; ?>" id="alarmecommentaire3" name="alarmecommentaire3"></td>
                        </tr> 
                        <tr>
                            <td>Réservoire vide</td>
                            <td>
                                <select class="form-control"id="alarmeselect13" name="alarmeselect13">                                 
                                    <option value="acquis">Acquis</option>
                                    <option value="en cours">En cours d'acquisition</option>
                                    <option value="non acquis">Non acquis</option>
                            </td>
                            <td>
                                <select class="form-control"id="alarmeselect14" name="alarmeselect14">                                 
                                    <option value="acquis">Acquis</option>
                                    <option value="en cours">En cours d'acquisition</option>
                                    <option value="non acquis">Non acquis</option>
                            </td>
                            <td>
                                <select class="form-control"id="alarmeselect15" name="alarmeselect15">                                 
                                    <option value="acquis">Acquis</option>
                                    <option value="en cours">En cours d'acquisition</option>
                                    <option value="non acquis">Non acquis</option>
                            </td>
                            <td>
                                <select class="form-control"id="alarmeselect16" name="alarmeselect16">                                 
                                    <option value="acquis">Acquis</option>
                                    <option value="en cours">En cours d'acquisition</option>
                                    <option value="non acquis">Non acquis</option>
                            </td>
                            <td><input type="text" class="form-control" value="<?php echo $donneesalarme['commentaire4']; ?>" id="alarmecommentaire4" name="alarmecommentaire4"></td>
                        </tr>
                        <tr>
                            <td>Occlusion/pas d'injection</td>
                            <td>
                                <select class="form-control"id="alarmeselect17" name="alarmeselect17">                                 
                                   <option value="acquis">Acquis</option>
                                    <option value="en cours">En cours d'acquisition</option>
                                    <option value="non acquis">Non acquis</option>
                            </td>
                            <td>
                                <select class="form-control"id="alarmeselect18" name="alarmeselect18">                                 
                                    <option value="acquis">Acquis</option>
                                    <option value="en cours">En cours d'acquisition</option>
                                    <option value="non acquis">Non acquis</option>
                            </td>
                            <td>
                                <select class="form-control"id="alarmeselect19" name="alarmeselect19">                                 
                                    <option value="acquis">Acquis</option>
                                    <option value="en cours">En cours d'acquisition</option>
                                    <option value="non acquis">Non acquis</option>
                            </td>
                            <td>
                                <select class="form-control"id="alarmeselect20" name="alarmeselect20">                                 
                                    <option value="acquis">Acquis</option>
                                    <option value="en cours">En cours d'acquisition</option>
                                    <option value="non acquis">Non acquis</option>
                            </td>
                            <td><input type="text" class="form-control" value="<?php echo $donneesalarme['commentaire5']; ?>" id="alarmecommentaire5" name="alarmecommentaire5"></td>
                        </tr>
                        <tr>
                            <td>Historique des alarmes</td>
                            <td>
                                <select class="form-control"id="alarmeselect21" name="alarmeselect21">                                 
                                    <option value="acquis">Acquis</option>
                                    <option value="en cours">En cours d'acquisition</option>
                                    <option value="non acquis">Non acquis</option>
                            </td>
                            <td>
                                <select class="form-control"id="alarmeselect22" name="alarmeselect22">                                 
                                    <option value="acquis">Acquis</option>
                                    <option value="en cours">En cours d'acquisition</option>
                                    <option value="non acquis">Non acquis</option>
                            </td>
                            <td>
                                <select class="form-control"id="alarmeselect23" name="alarmeselect23">                                 
                                    <option value="acquis">Acquis</option>
                                    <option value="en cours">En cours d'acquisition</option>
                                    <option value="non acquis">Non acquis</option>
                            </td>
                            <td>
                                <select class="form-control"id="alarmeselect24" name="alarmeselect24">                                
                                    <option value="acquis">Acquis</option>
                                    <option value="en cours">En cours d'acquisition</option>
                                    <option value="non acquis">Non acquis</option>
                            </td>
                            <td><input type="text" class="form-control" value="<?php echo $donneesalarme['commentaire6']; ?>" id="alarmecommentaire6" name="alarmecommentaire6"></td>
                        </tr>
                        <tr>
                            <td>Entretien de la Pompe</td>
                            <td>
                                <select class="form-control"id="alarmeselect25" name="alarmeselect25">                                 
                                    <option value="acquis">Acquis</option>
                                    <option value="en cours">En cours d'acquisition</option>
                                    <option value="non acquis">Non acquis</option>
                            </td>
                            <td>
                                <select class="form-control"id="alarmeselect26" name="alarmeselect26">                                 
                                    <option value="acquis">Acquis</option>
                                    <option value="en cours">En cours d'acquisition</option>
                                    <option value="non acquis">Non acquis</option>
                            </td>
                            <td>
                                <select class="form-control"id="alarmeselect27" name="alarmeselect27">                                 
                                    <option value="acquis">Acquis</option>
                                    <option value="en cours">En cours d'acquisition</option>
                                    <option value="non acquis">Non acquis</option>
                            </td>
                            <td>
                                <select class="form-control"id="alarmeselect28" name="alarmeselect28">                                 
                                    <option value="acquis">Acquis</option>
                                    <option value="en cours">En cours d'acquisition</option>
                                    <option value="non acquis">Non acquis</option>
                            </td>
                            <td><input type="text" class="form-control" value="<?php echo $donneesalarme['commentaire7']; ?>" id="alarmecommentaire7" name="alarmecommentaire7"></td>
                        </tr>
                    </tbody>
                </table>

                <div class="form-group">
                    <label class="col-sm-4 control-label">Autres :</label>
                    <div class="col-sm-7">
                        <textarea rows="3" type="text" placeholder="Autres" class="form-control" name="alarmeautre" id="autre2"></textarea>
                    </div>
                </div>

    </fieldset>

    <fieldset class="field4" id="field">
        <center><font><h4>MANIPULATIONS</h4></font></center><br/>

            <table class="table table-bordered" style="color: white;">
                    <thead>
                        <tr>
                            <td style="text-align: center;">Etapes</td>
                            <td><input type="text" class="form-control datepickerAll" value="<?php echo $donneesmanip['date1']; ?>" id="manipdate1" name="manipdate1" placeholder = "Date"></td>
                            <td><input type="text" class="form-control datepickerAll" value="<?php echo $donneesmanip['date1']; ?>" id="manipdate2" name="manipdate2" placeholder = "Date"></td>
                            <td><input type="text" class="form-control datepickerAll" value="<?php echo $donneesmanip['date1']; ?>" id="manipdate3" name="manipdate3" placeholder = "Date"></td>
                            <td><input type="text" class="form-control datepickerAll" value="<?php echo $donneesmanip['date1']; ?>" id="manipdate4" name="manipdate4" placeholder = "Date"></td>
                            <td style="text-align: center;">Commentaire</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Lavage des mains</td>
                            <td>
                                <select class="form-control" id="manipselect1" name="manipselect1">                                 
                                    <option value="acquis">Acquis</option>
                                    <option value="en cours">En cours d'acquisition</option>
                                    <option value="non acquis">Non acquis</option>
                            </td>
                            <td>
                                <select class="form-control" id="manipselect2" name="manipselect2">                                 
                                    <option value="acquis">Acquis</option>
                                    <option value="en cours">En cours d'acquisition</option>
                                    <option value="non acquis">Non acquis</option>
                            </td>
                            <td>
                                <select class="form-control" id="manipselect3" name="manipselect3">                                 
                                    <option value="acquis">Acquis</option>
                                    <option value="en cours">En cours d'acquisition</option>
                                    <option value="non acquis">Non acquis</option>
                            </td>
                            <td>
                                <select class="form-control" id="manipselect4" name="manipselect4">                                 
                                    <option value="acquis">Acquis</option>
                                    <option value="en cours">En cours d'acquisition</option>
                                    <option value="non acquis">Non acquis</option>
                            </td>
                            <td><input type="text" class="form-control" value="<?php echo $donneesmanip['commentaire1']; ?>" id="manipcommentaire1" name="manipcommentaire1"></td>
                        </tr>
                        <tr>
                            <td>Remplissage du réservoir</td>
                            <td>
                                <select class="form-control" id="manipselect5" name="manipselect5">                                 
                                    <option value="acquis">Acquis</option>
                                    <option value="en cours">En cours d'acquisition</option>
                                    <option value="non acquis">Non acquis</option>
                            </td>
                            <td>
                                <select class="form-control" id="manipselect6" name="manipselect6">                                 
                                    <option value="acquis">Acquis</option>
                                    <option value="en cours">En cours d'acquisition</option>
                                    <option value="non acquis">Non acquis</option>
                            </td>
                            <td>
                                <select class="form-control" id="manipselect7" name="manipselect7">                                 
                                    <option value="acquis">Acquis</option>
                                    <option value="en cours">En cours d'acquisition</option>
                                    <option value="non acquis">Non acquis</option>
                            </td>
                            <td>
                                <select class="form-control" id="manipselect8" name="manipselect8">                                 
                                    <option value="acquis">Acquis</option>
                                    <option value="en cours">En cours d'acquisition</option>
                                    <option value="non acquis">Non acquis</option>
                            </td>
                            <td><input type="text" class="form-control" value="<?php echo $donneesmanip['commentaire2']; ?>" id="manipcommentaire2" name="manipcommentaire2"></td>
                        </tr>
                        <tr>
                            <td>Connexion réservoir/tubulaire</td>
                            <td>
                                <select class="form-control" id="manipselect9" name="manipselect9">                                 
                                    <option value="acquis">Acquis</option>
                                    <option value="en cours">En cours d'acquisition</option>
                                    <option value="non acquis">Non acquis</option>
                            </td>
                            <td>
                                <select class="form-control" id="manipselect10" name="manipselect10">                                 
                                    <option value="acquis">Acquis</option>
                                    <option value="en cours">En cours d'acquisition</option>
                                    <option value="non acquis">Non acquis</option>
                            </td>
                            <td>
                                <select class="form-control" id="manipselect11" name="manipselect11">                                 
                                    <option value="acquis">Acquis</option>
                                    <option value="en cours">En cours d'acquisition</option>
                                    <option value="non acquis">Non acquis</option>
                            </td>
                            <td>
                                <select class="form-control" id="manipselect12" name="manipselect12">                                 
                                    <option value="acquis">Acquis</option>
                                    <option value="en cours">En cours d'acquisition</option>
                                    <option value="non acquis">Non acquis</option>
                            </td>
                            <td><input type="text" class="form-control" value="<?php echo $donneesmanip['commentaire3']; ?>" id="manipcommentaire3" name="manipcommentaire3"></td>
                        </tr> 
                        <tr>
                            <td>Retour du piston</td>
                            <td>
                                <select class="form-control" id="manipselect13" name="manipselect13">                                 
                                    <option value="acquis">Acquis</option>
                                    <option value="en cours">En cours d'acquisition</option>
                                    <option value="non acquis">Non acquis</option>
                            </td>
                            <td>
                                <select class="form-control" id="manipselect14" name="manipselect14">                                 
                                    <option value="acquis">Acquis</option>
                                    <option value="en cours">En cours d'acquisition</option>
                                    <option value="non acquis">Non acquis</option>
                            </td>
                            <td>
                                <select class="form-control" id="manipselect15" name="manipselect15">                                 
                                    <option value="acquis">Acquis</option>
                                    <option value="en cours">En cours d'acquisition</option>
                                    <option value="non acquis">Non acquis</option>
                            </td>
                            <td>
                                <select class="form-control" id="manipselect16" name="manipselect16">                                 
                                    <option value="acquis">Acquis</option>
                                    <option value="en cours">En cours d'acquisition</option>
                                    <option value="non acquis">Non acquis</option>
                            </td>
                            <td><input type="text" class="form-control" value="<?php echo $donneesmanip['commentaire4']; ?>" id="manipcommentaire4" name="manipcommentaire4"></td>
                        </tr>
                        <tr>
                            <td>Purge de la tubulure</td>
                            <td>
                                <select class="form-control" id="manipselect17" name="manipselect17">                                 
                                    <option value="acquis">Acquis</option>
                                    <option value="en cours">En cours d'acquisition</option>
                                    <option value="non acquis">Non acquis</option>
                            </td>
                            <td>
                                <select class="form-control" id="manipselect18" name="manipselect18">                                 
                                    <option value="acquis">Acquis</option>
                                    <option value="en cours">En cours d'acquisition</option>
                                    <option value="non acquis">Non acquis</option>
                            </td>
                            <td>
                                <select class="form-control" id="manipselect19" name="manipselect19">                                 
                                    <option value="acquis">Acquis</option>
                                    <option value="en cours">En cours d'acquisition</option>
                                    <option value="non acquis">Non acquis</option>
                            </td>
                            <td>
                                <select class="form-control" id="manipselect20" name="manipselect20">                                 
                                    <option value="acquis">Acquis</option>
                                    <option value="en cours">En cours d'acquisition</option>
                                    <option value="non acquis">Non acquis</option>
                            </td>
                            <td><input type="text" class="form-control" value="<?php echo $donneesmanip['commentaire5']; ?>" id="manipcommentaire5" name="manipcommentaire5"></td>
                        </tr>
                    </tbody>
                </table>

    </fieldset>

                <script>
                    $(document).ready(function ()
                    {
                        /*Manipulation de la pompe*/
                        $('[name="pmpselect1"]').val("<?php echo utf8_encode($donneespmp['etat1']); ?>");
                        $('[name="pmpselect2"]').val("<?php echo utf8_encode($donneespmp['etat2']); ?>");
                        $('[name="pmpselect3"]').val("<?php echo utf8_encode($donneespmp['etat3']); ?>");
                        $('[name="pmpselect4"]').val("<?php echo utf8_encode($donneespmp['etat4']); ?>");
                        $('[name="pmpselect5"]').val("<?php echo utf8_encode($donneespmp['etat5']); ?>");
                        $('[name="pmpselect6"]').val("<?php echo utf8_encode($donneespmp['etat6']); ?>");
                        $('[name="pmpselect7"]').val("<?php echo utf8_encode($donneespmp['etat7']); ?>");
                        $('[name="pmpselect8"]').val("<?php echo utf8_encode($donneespmp['etat8']); ?>");
                        $('[name="pmpselect9"]').val("<?php echo utf8_encode($donneespmp['etat9']); ?>");
                        $('[name="pmpselect10"]').val("<?php echo utf8_encode($donneespmp['etat10']); ?>");
                        $('[name="pmpselect11"]').val("<?php echo utf8_encode($donneespmp['etat11']); ?>");
                        $('[name="pmpselect12"]').val("<?php echo utf8_encode($donneespmp['etat12']); ?>");
                        $('[name="pmpselect13"]').val("<?php echo utf8_encode($donneespmp['etat13']); ?>");
                        $('[name="pmpselect14"]').val("<?php echo utf8_encode($donneespmp['etat14']); ?>");
                        $('[name="pmpselect15"]').val("<?php echo utf8_encode($donneespmp['etat15']); ?>");
                        $('[name="pmpselect16"]').val("<?php echo utf8_encode($donneespmp['etat16']); ?>");
                        $('[name="pmpselect17"]').val("<?php echo utf8_encode($donneespmp['etat17']); ?>");
                        $('[name="pmpselect18"]').val("<?php echo utf8_encode($donneespmp['etat18']); ?>");
                        $('[name="pmpselect19"]').val("<?php echo utf8_encode($donneespmp['etat19']); ?>");
                        $('[name="pmpselect20"]').val("<?php echo utf8_encode($donneespmp['etat20']); ?>");
                        $('[name="pmpselect21"]').val("<?php echo utf8_encode($donneespmp['etat21']); ?>");
                        $('[name="pmpselect22"]').val("<?php echo utf8_encode($donneespmp['etat22']); ?>");
                        $('[name="pmpselect23"]').val("<?php echo utf8_encode($donneespmp['etat23']); ?>");
                        $('[name="pmpselect24"]').val("<?php echo utf8_encode($donneespmp['etat24']); ?>");
                        $('[name="pmpselect25"]').val("<?php echo utf8_encode($donneespmp['etat25']); ?>");
                        $('[name="pmpselect26"]').val("<?php echo utf8_encode($donneespmp['etat26']); ?>");
                        $('[name="pmpselect27"]').val("<?php echo utf8_encode($donneespmp['etat27']); ?>");
                        $('[name="pmpselect28"]').val("<?php echo utf8_encode($donneespmp['etat28']); ?>");
                        $('[name="pmpselect29"]').val("<?php echo utf8_encode($donneespmp['etat29']); ?>");
                        $('[name="pmpselect291"]').val("<?php echo utf8_encode($donneespmp['etat30']); ?>");
                        $('[name="pmpselect292"]').val("<?php echo utf8_encode($donneespmp['etat31']); ?>");
                        $('[name="pmpselect293"]').val("<?php echo utf8_encode($donneespmp['etat32']); ?>");
                        $('[name="pmpselect294"]').val("<?php echo utf8_encode($donneespmp['etat33']); ?>");
                        $('[name="pmpselect295"]').val("<?php echo utf8_encode($donneespmp['etat34']); ?>");
                        $('[name="pmpselect296"]').val("<?php echo utf8_encode($donneespmp['etat35']); ?>");
                        $('[name="pmpselect297"]').val("<?php echo utf8_encode($donneespmp['etat36']); ?>");

                        $('[name="pmpautre"]').val("<?php echo utf8_encode($donneespmp['autre']); ?>");

                        /*Alarmes et précautions*/

                        $('[name="alarmeselect1"]').val("<?php echo utf8_encode($donneesalarme['alarmeetat1']); ?>");
                        $('[name="alarmeselect2"]').val("<?php echo utf8_encode($donneesalarme['alarmeetat2']); ?>");
                        $('[name="alarmeselect3"]').val("<?php echo utf8_encode($donneesalarme['alarmeetat3']); ?>");
                        $('[name="alarmeselect4"]').val("<?php echo utf8_encode($donneesalarme['alarmeetat4']); ?>");
                        $('[name="alarmeselect5"]').val("<?php echo utf8_encode($donneesalarme['alarmeetat5']); ?>");
                        $('[name="alarmeselect6"]').val("<?php echo utf8_encode($donneesalarme['alarmeetat6']); ?>");
                        $('[name="alarmeselect7"]').val("<?php echo utf8_encode($donneesalarme['alarmeetat7']); ?>");
                        $('[name="alarmeselect8"]').val("<?php echo utf8_encode($donneesalarme['alarmeetat8']); ?>");
                        $('[name="alarmeselect9"]').val("<?php echo utf8_encode($donneesalarme['alarmeetat9']); ?>");
                        $('[name="alarmeselect10"]').val("<?php echo utf8_encode($donneesalarme['alarmeetat10']); ?>");
                        $('[name="alarmeselect11"]').val("<?php echo utf8_encode($donneesalarme['alarmeetat11']); ?>");
                        $('[name="alarmeselect12"]').val("<?php echo utf8_encode($donneesalarme['alarmeetat12']); ?>");
                        $('[name="alarmeselect13"]').val("<?php echo utf8_encode($donneesalarme['alarmeetat13']); ?>");
                        $('[name="alarmeselect14"]').val("<?php echo utf8_encode($donneesalarme['alarmeetat14']); ?>");
                        $('[name="alarmeselect15"]').val("<?php echo utf8_encode($donneesalarme['alarmeetat15']); ?>");
                        $('[name="alarmeselect16"]').val("<?php echo utf8_encode($donneesalarme['alarmeetat16']); ?>");
                        $('[name="alarmeselect17"]').val("<?php echo utf8_encode($donneesalarme['alarmeetat17']); ?>");
                        $('[name="alarmeselect18"]').val("<?php echo utf8_encode($donneesalarme['alarmeetat18']); ?>");
                        $('[name="alarmeselect19"]').val("<?php echo utf8_encode($donneesalarme['alarmeetat19']); ?>");
                        $('[name="alarmeselect20"]').val("<?php echo utf8_encode($donneesalarme['alarmeetat20']); ?>");
                        $('[name="alarmeselect21"]').val("<?php echo utf8_encode($donneesalarme['alarmeetat21']); ?>");
                        $('[name="alarmeselect22"]').val("<?php echo utf8_encode($donneesalarme['alarmeetat22']); ?>");
                        $('[name="alarmeselect23"]').val("<?php echo utf8_encode($donneesalarme['alarmeetat23']); ?>");
                        $('[name="alarmeselect24"]').val("<?php echo utf8_encode($donneesalarme['alarmeetat24']); ?>");
                        $('[name="alarmeselect25"]').val("<?php echo utf8_encode($donneesalarme['alarmeetat25']); ?>");
                        $('[name="alarmeselect26"]').val("<?php echo utf8_encode($donneesalarme['alarmeetat26']); ?>");
                        $('[name="alarmeselect27"]').val("<?php echo utf8_encode($donneesalarme['alarmeetat27']); ?>");
                        $('[name="alarmeselect28"]').val("<?php echo utf8_encode($donneesalarme['alarmeetat28']); ?>");

                        $('[name="alarmeautre"]').val("<?php echo utf8_encode($donneesalarme['autre']); ?>");

                        /*Manipulations*/
                        $('[name="manipselect1"]').val("<?php echo utf8_encode($donneesmanip['etat1']); ?>");
                        $('[name="manipselect2"]').val("<?php echo utf8_encode($donneesmanip['etat2']); ?>");
                        $('[name="manipselect3"]').val("<?php echo utf8_encode($donneesmanip['etat3']); ?>");
                        $('[name="manipselect4"]').val("<?php echo utf8_encode($donneesmanip['etat4']); ?>");
                        $('[name="manipselect5"]').val("<?php echo utf8_encode($donneesmanip['etat5']); ?>");
                        $('[name="manipselect6"]').val("<?php echo utf8_encode($donneesmanip['etat6']); ?>");
                        $('[name="manipselect7"]').val("<?php echo utf8_encode($donneesmanip['etat7']); ?>");
                        $('[name="manipselect8"]').val("<?php echo utf8_encode($donneesmanip['etat8']); ?>");
                        $('[name="manipselect9"]').val("<?php echo utf8_encode($donneesmanip['etat9']); ?>");
                        $('[name="manipselect10"]').val("<?php echo utf8_encode($donneesmanip['etat10']); ?>");
                        $('[name="manipselect11"]').val("<?php echo utf8_encode($donneesmanip['etat11']); ?>");
                        $('[name="manipselect12"]').val("<?php echo utf8_encode($donneesmanip['etat12']); ?>");
                        $('[name="manipselect13"]').val("<?php echo utf8_encode($donneesmanip['etat13']); ?>");
                        $('[name="manipselect14"]').val("<?php echo utf8_encode($donneesmanip['etat14']); ?>");
                        $('[name="manipselect15"]').val("<?php echo utf8_encode($donneesmanip['etat15']); ?>");
                        $('[name="manipselect16"]').val("<?php echo utf8_encode($donneesmanip['etat16']); ?>");
                        $('[name="manipselect17"]').val("<?php echo utf8_encode($donneesmanip['etat17']); ?>");
                        $('[name="manipselect18"]').val("<?php echo utf8_encode($donneesmanip['etat18']); ?>");
                        $('[name="manipselect19"]').val("<?php echo utf8_encode($donneesmanip['etat19']); ?>");
                        $('[name="manipselect20"]').val("<?php echo utf8_encode($donneesmanip['etat20']); ?>");
                    });
                </script>

</div>
