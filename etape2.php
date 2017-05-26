<style type="text/css">
    .field2
    {
        min-height: 20px;
        padding: 19px;
        margin-bottom: 20px;
        background-color: rgba(133,32,28,.7);
        border-radius: 10px;
        -webkit-box-shadow: inset 0 1px 1px rgba(133,32,28,.4);
        box-shadow: inset 0 1px 1px rgba(133,32,28,.4);
    }
</style>

<section class="container-fluid">
    <div>
        <div class="field2">
            <h4 style="text-align: center;">DONNEES MEDICALES</h4></br>
            <form action="update.php" method="post">
            <fieldset>

                <!-- type de diabète -->
                <div class="form-group">
                    <label class="col-lg-4 control-label">Type de diabète:</label>
                    <div class="col-lg-8">
                        <div class="radio">
                            <label>
                                <input type="radio" name="typediabete" id="dt1" value="DT1" checked="">
                                DT1
                            </label>&nbsp;&nbsp;&nbsp;<!-- 
                          </div>
                          <div class="radio"> -->
                            <label>
                                <input type="radio" name="typediabete" id="dt2" value="DT2">
                                DT2
                            </label>&nbsp;&nbsp;&nbsp;<!-- 
                          </div>
                          <div class="radio"> -->
                            <label>
                                <input type="radio" name="typediabete" id="gestationel" value="Gestationnel">
                                Gestationnel
                            </label><!-- 
                          </div> -->
                        </div>
                    </div></br></br></br>

                    <!-- Date de diagnostic -->
                    <div class="form-group">
                        <label for="datediagnostic" class="col-lg-4 control-label">Date de diagnostic:</label>
                        <div class="col-lg-8">
                            <input type="text" readonly="" class="form-control datepickerAll" name="datediagnostic" id="datediagnostic" placeholder="Date de diagnostic">
                        </div>
                    </div>

                    <!-- Circonstances de découverte -->
                    <div class="form-group">
                        <label for="circonstancedecouverte" class="col-lg-4 control-label">Circonstances de découverte:</label>
                        <div class="col-lg-8">
                            <input type="text" class="form-control" name="circonstancedecouverte" id="circonstancedecouverte" placeholder="Circonstances de découverte">
                        </div>
                    </div>

                    <!-- Antécédents familiaux -->
                    <div class="form-group">
                        <label for="antecedentfamiliaux" class="col-lg-4 control-label">Antécédents familiaux:</label>
                        <div class="col-lg-8">
                            <input type="text" class="form-control" name="antecedentfamiliaux" id="antecedentfamiliaux" placeholder="Antécédents familiaux">
                        </div>
                    </div>

                    <!-- Date de première mise sous Pompe -->
                    <div class="form-group">
                        <label for="datepremieremisesousPompe" class="col-lg-4 control-label">Date de première mise sous Pompe:</label>
                        <div class="col-lg-8">
                            <input type="text" readonly="" class="form-control datepickerAll" name="datepremieremisesousPompe" id="datepremieremisesousPompe" placeholder="Date de première mise sous Pompe">
                        </div>
                    </div>

                    <!-- HbA1C de référence avant la mise sous Pompe -->
                    <div class="form-group">
                        <label for="hba1c" class="col-lg-4 control-label">HbA1C de référence avant la mise sous Pompe:</label>
                        <div class="col-lg-8">
                            <div class="input-group">
                                <input type="text" class="form-control" name="hba1c" id="hba1c" placeholder="HbA1C de référence avant la mise sous Pompe (%)">
                                <span class="input-group-addon">%</span>
                            </div>
                        </div>
                    </div></br>

                    <div class="table-responsive">
                        <table class="table table-bordered" style="color: white;">
                            <thead>
                            <th>Taille (cm)</th>
                            <th>Poids actuel (kg)</th>
                            <th>Poids de forme (kg)</th>
                            <th>IMC</th>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><input type="number" class="form-control" name="taille" id="taille" placeholder=""></td>
                                    <td><input type="number" class="form-control" name="poidsactuel" id="poidsactuel" placeholder=""></td>
                                    <td><input type="number" class="form-control" name="poidsforme" id="poidsforme" placeholder=""></td>
                                    <td><input type="text" class="form-control" name="imc" id="imc" placeholder="" readonly></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

            </fieldset>	
        </div>

        <div class="field2">

            <fieldset>
                <h4 style="text-align: center;">Auto surveillance glycémique</h4><br>
                <div class="form-group">
                    <label for="nombreglycemieparjour" class="col-lg-4 control-label">Nombre de glycémies par jour:</label>
                    <div class="col-lg-4">
                        <input type="number" class="form-control" name="nombreglycemieparjour" id="nombreglycemieparjour" placeholder="Nombre de glycémies par jour">
                    </div>
                </div>


                <!-- type de lecteur && date de prescription-->
                <div class="form-group">
                    <div class="col-lg-6">
                        <label for="typelecteur" class="col-lg-4 control-label">Type de lecteur:</label>
                        <div class="col-lg-6">
                            <input type="text" class="form-control" name="typelecteur" id="typelecteur" placeholder="type de lecteur">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <label for="dateprescription" class="col-lg-4 control-label">Date de prescription:</label>
                        <div class="col-lg-6">
                            <input type="text" readonly="" class="form-control datepickerAll" name="dateprescription" id="dateprescription" placeholder="Date de prescription">
                        </div>
                    </div>
                </div>

                <!-- Stylo auto piqueur/lancette -->
                <div class="form-group">
                    <label for="styloautopiqueur" class="col-lg-4 control-label">Stylo auto piqueur/lancette:</label>
                    <div class="col-lg-8">
                        <input type="text" class="form-control" name="styloautopiqueur" id="styloautopiqueur" placeholder="Stylo auto piqueur/lancette">
                    </div>
                </div>
        </div>

        <div class="field2">
            <h4 style="text-align: center;">Insulinothérapie</h4><br>
            <div class="form-group">
                <label for="nombreinjectionjour" class="col-lg-4 control-label">Nombre d’injection par jour:</label>
                <div class="col-lg-4">
                    <select class="form-control" name="nombreinjectionjour" id="nombreinjectionjour">						          
                        <option value="0">0</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                        <option value="13">13</option>
                        <option value="14">14</option>
                        <option value="15">15</option>
                        <option value="16">16</option>
                        <option value="17">17</option>
                        <option value="18">18</option>
                        <option value="19">19</option>
                        <option value="20">20</option>
                    </select>
                </div>
            </div>


            <!-- Schéma multi-injection -->
            <div class="form-group">
                <h4 style="text-align: center;">Schéma multi-injection</h4>
                <!--                 <div class="col-lg-8">
                                    <input type="text" class="form-control" name="schemamultiinjection" id="schemamultiinjection" placeholder="Schéma multi-injection">
                                </div> -->
            </div>

            <!-- Stylo && Autre &&  Aiguille pour stylo-->
            <div class="form-group">
                <div class="col-lg-3">
                    <label for="stylo" class="col-lg-3 control-label">Stylo:</label>
                    <div class="col-lg-9">
                        <input type="text" class="form-control" name="stylo" id="stylo" placeholder="Stylo">
                    </div>
                </div>
                <div class="col-lg-3">
                    <label for="autrestylo" class="col-lg-3 control-label">Flacon:</label>
                    <div class="col-lg-9">
                        <input type="text" class="form-control" name="autrestylo" id="autrestylo" placeholder="Flacon ">
                    </div>
                </div>
                <div class="col-lg-3">
                    <label for="aiguillestylo" class="col-lg-3 control-label">Aiguille pour stylo:</label>
                    <div class="col-lg-9">
                        <input type="text" class="form-control" name="aiguillestylo" id="aiguillestylo" placeholder="Aiguille pour stylo">
                    </div>
                </div>
                <div class="col-lg-3">
                    <label for="autreaiguille" class="col-lg-4 control-label">Seringue:</label>
                    <div class="col-lg-8">
                        <input type="text" class="form-control" name="autreaiguille" id="autreaiguille" placeholder="Seringue  ">
                    </div>
                </div>
            </div>
            </fieldset>	</br>

            <fieldset>
                <table class="table table-bordered" style="color: white;">
                    <thead>
                    <th style="text-align: center;"></th>
                    <th style="text-align: center;">Insuline lente (Ui)</th>
                    <th style="text-align: center;">Insuline rapide (Ui)</th><!-- 
                    <th style="text-align: center;">Quantité totale</th> -->
                    </thead>
                    <tbody>
                        <tr>
                            <td id="matin">Petit déjeuner</td>
                            <td><input type="number" class="form-control" name="insulinelentematin" id="insulinelentematin" placeholder=""></td>
                            <td><input type="number" class="form-control" name="insulinerapidematin" id="insulinerapidematin" placeholder=""></td>
                           <!--  <td><input type="text" class="form-control" name="quantitetotal" readonly="" id="quantitetotal" placeholder=""></td> -->
                        </tr>
                        <tr>
                            <td id="midi">Déjeuner</td>
                            <td><input type="number" class="form-control" name="insulinelentemidi" id="insulinelentemidi" placeholder=""></td>
                            <td><input type="number" class="form-control" name="insulinerapidemidi" id="insulinerapidemidi" placeholder=""></td>
                        </tr>
                        <tr>
                            <td id="soir">Goûter</td>
                            <td><input type="number" class="form-control" name="insulinelentesoir" id="insulinelentesoir" placeholder=""></td>
                            <td><input type="number" class="form-control" name="insulinerapidesoir" id="insulinerapidesoir" placeholder=""></td>
                        </tr>
                        <tr>
                            <td id="soir">Dîner</td>
                            <td><input type="number" class="form-control" name="insulinelentediner" id="insulinelentediner" placeholder=""></td>
                            <td><input type="number" class="form-control" name="insulinerapidediner" id="insulinerapidediner" placeholder=""></td>
                        </tr>
                        <tr>
                            <td id="soir">Collation</td>
                            <td><input type="number" class="form-control" name="insulinelentecollation" id="insulinelentecollation" placeholder=""></td>
                            <td><input type="number" class="form-control" name="insulinerapidecollation" id="insulinerapidecollation" placeholder=""></td>
                        </tr>
                        <tr>
                            <td id="total"><b>Total</b></td>
                            <td><input type="number" class="form-control" name="totalinsulinelente" readonly="" id="totalinsulinelente" placeholder=""></td>
                            <td><input type="number" class="form-control" name="totalinsulinerapide" readonly="" id="totalinsulinerapide" placeholder=""></td>
                        </tr>
                    </tbody>
                </table>

        </div>

        <div class="field2">

            <center><h4>Traitement complémentaire</h4></center>
                <br>
            <table class="table table-bordered" style="color: white;">
                <thead>
                <th style="text-align: center;">Spécialité</th>
                <th style="text-align: center;">Posologie</th>
                </thead>
                <tbody>
                    <tr>
                        <td><input type="text" class="form-control" name="specialite1" id="specialite1"></td>
                        <td><input type="text" class="form-control" name="posologie1" id="posologie1"></td>
                    </tr>
                    <tr>
                        <td><input type="text" class="form-control" name="specialite2" id="specialite2"></td>
                        <td><input type="text" class="form-control" name="posologie2" id="posologie2"></td>
                    </tr>
                    <tr>
                        <td><input type="text" class="form-control" name="specialite3" id="specialite3"></td>
                        <td><input type="text" class="form-control" name="posologie3" id="posologie3"></td>
                    </tr>
                    <tr>
                        <td><input type="text" class="form-control" name="specialite4" id="specialite4"></td>
                        <td><input type="text" class="form-control" name="posologie4" id="posologie4"></td>
                    </tr>
                </tbody>
            </table>

            </fieldset>
        </div>

        <div class="field2">
            <fieldset>
                <table class="table table-bordered table-responsive" style="color: white;">
                    <thead>
                        <tr>
                            <th style="text-align: center;" colspan="12">
                                <div class="form-group">

                                    <label for="nom" class="col-sm-4 control-label">Schémas basals date 1:</label>
                                    <div class="col-sm-5">
                                        <input type="text" readonly="" class="form-control datepickerAll" name="datebasal1">
                                    </div>

                                </div>
                            </th>
                        </tr>
                        <tr>
                            <td style="text-align: center;" colspan="3">Schémas 1 (ex: semaine)</td>
                            <td style="text-align: center;" colspan="3">Schémas 2 (ex: week-end)</td>
                            <td style="text-align: center;" colspan="3">Schémas 3</td>
                            <td style="text-align: center;" colspan="3">Schémas 4</td>
                        </tr>
                        <tr>
                            <td style="text-align: center;">De</td>
                            <td style="text-align: center;">A</td>
                            <td style="text-align: center;">Débit (Ui/H) </td>
                            <td style="text-align: center;">De</td>
                            <td style="text-align: center;">A</td>
                            <td style="text-align: center;">Débit (Ui/H) </td>
                            <td style="text-align: center;">De</td>
                            <td style="text-align: center;">A</td>
                            <td style="text-align: center;">Débit (Ui/H) </td>
                            <td style="text-align: center;">De</td>
                            <td style="text-align: center;">A</td>
                            <td style="text-align: center;">Débit (Ui/H) </td>
                        </tr>
                    </thead>
                    <tbody id="contentBasal1">
                        <tr>
                            <td><input type="text" class="form-control" value="00:00" readonly></td>
                            <td><input readonly="" type="text" class="form-control datetimepickery" name="Horaire1" id="Horaire1"></td>
                            <td><input type="number" class="form-control" name="Debit1" id="Debit1"></td>
                            <td><input type="text" class="form-control" value="00:00" readonly></td>
                            <td><input readonly="" type="text" class="form-control datetimepickery" name="Horaire2" id="Horaire2"></td>
                            <td><input type="number" class="form-control" name="Debit2" id="Debit2"></td>
                            <td><input type="text" class="form-control" value="00:00" readonly></td>
                            <td><input readonly="" type="text" class="form-control datetimepickery" name="Horaire3" id="Horaire3"></td>
                            <td><input type="number" class="form-control" name="Debit3" id="Debit3"></td>
                            <td><input type="text" class="form-control" value="00:00" readonly></td>
                            <td><input readonly="" type="text" class="form-control datetimepickery" name="Horaire4" id="Horaire4"></td>
                            <td><input type="number" class="form-control" name="Debit4" id="Debit4"></td>
                        </tr>

                        <tr  id="ligne4">
                            <td><input type="text" readonly="" class="form-control datetimepickery" name="Horaire1N" id="Horaire1N"></td>
                            <td><input type="text" class="form-control" value="23:59" readonly></td>                            
                            <td><input type="number" class="form-control" name="Debit1N" id="Debit1N"></td>
                            <td><input type="text" readonly="" class="form-control datetimepickery" name="Horaire2N" id="Horaire2N"></td>
                            <td><input type="text" class="form-control" value="23:59" readonly></td>
                            <td><input type="number" class="form-control" name="Debit2N" id="Debit2N"></td>
                            <td><input type="text" readonly="" class="form-control datetimepickery" name="Horaire3N" id="Horaire3N"></td>
                            <td><input type="text" class="form-control" value="23:59" readonly></td>
                            <td><input type="number" class="form-control" name="Debit3N" id="Debit3N"></td>
                            <td><input type="text" readonly="" class="form-control datetimepickery" name="Horaire4N" id="Horaire4N"></td>
                            <td><input type="text" class="form-control" value="23:59" readonly></td>
                            <td><input type="number" class="form-control" name="Debit4N" id="Debit4N"></td>
                        </tr>
                    </tbody>
                </table> <a class="btn btn-primary pull-right" id="btnAdd"> + </a>
                </br></br>





                <!-- chart -->
                <div>
                    <!-- Row and col -->
                    <div class="row">

                        <div id="capture">
                            <center><h4>Histogrammes des débits suivant le Schémas basals date 1</h4></center>
                            <canvas id="bardate1" />
                        </div>

                    </div>
                </div>
                <!-- chart -->
                </br>

                <table class="table table-bordered  table-responsive" style="color: white;">
                    <thead>
                        <tr>
                            <th style="text-align: center;" colspan="12">

                                <div class="form-group">

                                    <label for="nom" class="col-sm-4 control-label">Schémas basals date 2:</label>
                                    <div class="col-sm-5">
                                        <input type="text" readonly="" class="form-control datepickerAll" name="datebasal2">
                                    </div>

                                </div>
                            </th>
                        </tr>
                        <tr>
                            <td style="text-align: center;" colspan="3">Schémas 1 (ex: semaine)</td>
                            <td style="text-align: center;" colspan="3">Schémas 2 (ex: week-end)</td>
                            <td style="text-align: center;" colspan="3">Schémas 3</td>
                            <td style="text-align: center;" colspan="3">Schémas 4</td>
                        </tr>
                        <tr>
                            <td style="text-align: center;">De</td>
                            <td style="text-align: center;">A</td>
                            <td style="text-align: center;">Débit</td>
                            <td style="text-align: center;">De</td>
                            <td style="text-align: center;">A</td>
                            <td style="text-align: center;">Débit</td>
                            <td style="text-align: center;">De</td>
                            <td style="text-align: center;">A</td>
                            <td style="text-align: center;">Débit</td>
                            <td style="text-align: center;">De</td>
                            <td style="text-align: center;">A</td>
                            <td style="text-align: center;">Débit</td>
                        </tr>
                    </thead>
                    <tbody id="contentBasal2">
                        <tr>
                            <td><input type="text" class="form-control" value="00:00" readonly></td>
                            <td><input type="text" readonly="" class="form-control datetimepickery" name="Horaire_1" id="Horaire_1"></td>
                            <td><input type="number" class="form-control" name="Debit_1" id="Debit_1"></td>
                            <td><input type="text" class="form-control" value="00:00" readonly></td>
                            <td><input type="text" readonly="" class="form-control datetimepickery" name="Horaire_2" id="Horaire_2"></td>
                            <td><input type="number" class="form-control" name="Debit_2" id="Debit_2"></td>
                            <td><input type="text" class="form-control" value="00:00" readonly></td>
                            <td><input type="text" readonly="" class="form-control datetimepickery" name="Horaire_3" id="Horaire_3"></td>
                            <td><input type="number" class="form-control" name="Debit_3" id="Debit_3"></td>
                            <td><input type="text" class="form-control" value="00:00" readonly></td>
                            <td><input type="text" readonly="" class="form-control datetimepickery" name="Horaire_4" id="Horaire_4"></td>
                            <td><input type="number" class="form-control" name="Debit_4" id="Debit_4"></td>
                        </tr>
                        <tr id="ligne24">
                            <td><input type="text" readonly="" class="form-control datetimepickery"  name="Horaire_N1" id="Horaire_N1"></td>
                            <td><input type="text" class="form-control" value="23:59" readonly></td>
                            <td><input type="number" class="form-control" name="Debit_N1" id="Debit_N1"></td>
                            <td><input type="text" readonly="" class="form-control datetimepickery" name="Horaire_N2" id="Horaire_N2"></td>
                            <td><input type="text" class="form-control" value="23:59" readonly></td>
                            <td><input type="number" class="form-control" name="Debit_N2" id="Debit_N2"></td>
                            <td><input type="text" readonly="" class="form-control datetimepickery" name="Horaire_N3" id="Horaire_N3"></td>
                            <td><input type="text" class="form-control" value="23:59" readonly></td>
                            <td><input type="number" class="form-control" name="Debit_N3" id="Debit_N3"></td>
                            <td><input type="text" readonly="" class="form-control datetimepickery" name="Horaire_N4" id="Horaire_N4"></td>
                            <td><input type="text" class="form-control" value="23:59" readonly></td>
                            <td><input type="number" class="form-control" name="Debit_N4" id="Debit_N4"></td>
                        </tr>
                    </tbody>
                </table> <a class="btn btn-primary pull-right" id="btnAdd2"> + </a>
                </br></br>

                <!-- chart -->
                <div>
                    <!-- Row and col -->
                    <div class="row">

                        <div>
                            <center><h4>Histogrammes des débits suivant le Schémas basals date 2</h4></center>
                            <canvas id="bardate2" />


                        </div>

                    </div>
                </div>
                <!-- chart -->

            </fieldset>
        </div>

        </br>
        <div class="field2 table-responsive">
            
            <center><h4>Schéma des bolus</h4></center>
                <div class="form-group">

                    <label for="nom" class="col-sm-4 control-label">Date de MAJ :</label>
                    <div class="col-sm-5">
                        <input type="text" readonly="" class="form-control datepickerAll" name="datebolus">
                    </div>

                </div>

            <fieldset>
                <table class="table table-bordered" style="color: white;">
                    <thead>
                        <tr>
                            <td style="text-align: center;">Petit déjeuner (UI)</td>
                            <td style="text-align: center;">Déjeuner (UI)</td>
                            <td style="text-align: center;">Goûter (UI)</td>
                            <td style="text-align: center;">Dîner (UI)</td>
                            <td style="text-align: center;">Collation (UI)</td>
                            <td style="text-align: center;">Autre (UI)</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr> <!-- Mbola interface fotsiny io an -->
                            <td><input type="text" class="form-control" name="ValGlycemique1" id="ValGlycemique1"></td>
                            <td><input type="text" class="form-control" name="ValGlyMatin1" id="ValGlyMatin1"></td>
                            <td><input type="text" class="form-control" name="ValGlyMid1" id="ValGlyMid1"></td>
                            <td><input type="text" class="form-control" name="ValGlyCollation1" id="ValGlyCollation1"></td>
                            <td><input type="text" class="form-control" name="ValGlySoir1" id="ValGlySoir1"></td>
                            <td><input type="text" class="form-control" name="ValGlyAutre1" id="ValGlyAutre1"></td>
                        </tr>
                        <tr>
                            <td><input type="text" class="form-control" name="ValGlycemique2" id="ValGlycemique2"></td>
                            <td><input type="text" class="form-control" name="ValGlyMatin2" id="ValGlyMatin2"></td>
                            <td><input type="text" class="form-control" name="ValGlyMid2" id="ValGlyMid2"></td>
                            <td><input type="text" class="form-control" name="ValGlyCollation2" id="ValGlyCollation2"></td>
                            <td><input type="text" class="form-control" name="ValGlySoir2" id="ValGlySoir2"></td>
                            <td><input type="text" class="form-control" name="ValGlyAutre2" id="ValGlyAutre2"></td>
                        </tr>
                        <tr>
                            <td><input type="text" class="form-control" name="ValGlycemique3" id="ValGlycemique3"></td>
                            <td><input type="text" class="form-control" name="ValGlyMatin3" id="ValGlyMatin3"></td>
                            <td><input type="text" class="form-control" name="ValGlyMid3" id="ValGlyMid3"></td>
                            <td><input type="text" class="form-control" name="ValGlyCollation3" id="ValGlyCollation3"></td>
                            <td><input type="text" class="form-control" name="ValGlySoir3" id="ValGlySoir3"></td>
                            <td><input type="text" class="form-control" name="ValGlyAutre3" id="ValGlyAutre3"></td>
                        </tr> 
                        <tr>
                            <td><input type="text" class="form-control" name="ValGlycemique4" id="ValGlycemique4"></td>
                            <td><input type="text" class="form-control" name="ValGlyMatin4" id="ValGlyMatin4"></td>
                            <td><input type="text" class="form-control" name="ValGlyMid4" id="ValGlyMid4"></td>
                            <td><input type="text" class="form-control" name="ValGlyCollation4" id="ValGlyCollation4"></td>
                            <td><input type="text" class="form-control" name="ValGlySoir4" id="ValGlySoir4"></td>
                            <td><input type="text" class="form-control" name="ValGlyAutre4" id="ValGlyAutre4"></td>
                        </tr>
                        <tr>
                            <td><input type="text" class="form-control" name="ValGlycemique5" id="ValGlycemique5"></td>
                            <td><input type="text" class="form-control" name="ValGlyMatin5" id="ValGlyMatin5"></td>
                            <td><input type="text" class="form-control" name="ValGlyMid5" id="ValGlyMid5"></td>
                            <td><input type="text" class="form-control" name="ValGlyCollation5" id="ValGlyCollation5"></td>
                            <td><input type="text" class="form-control" name="ValGlySoir5" id="ValGlySoir5"></td>
                            <td><input type="text" class="form-control" name="ValGlyAutre5" id="ValGlyAutre5"></td>
                        </tr>
                        <tr>
                            <td><input type="text" class="form-control" name="ValGlycemique6" id="ValGlycemique6"></td>
                            <td><input type="text" class="form-control" name="ValGlyMatin6" id="ValGlyMatin6"></td>
                            <td><input type="text" class="form-control" name="ValGlyMid6" id="ValGlyMid6"></td>
                            <td><input type="text" class="form-control" name="ValGlyCollation6" id="ValGlyCollation6"></td>
                            <td><input type="text" class="form-control" name="ValGlySoir6" id=""></td>
                            <td><input type="text" class="form-control" name="ValGlyAutre6" id="ValGlyAutre6"></td>
                        </tr>
                        <tr>
                            <td><input type="text" class="form-control" name="ValGlycemique7" id="ValGlycemique7"></td>
                            <td><input type="text" class="form-control" name="ValGlyMatin7" id="ValGlyMatin7"></td>
                            <td><input type="text" class="form-control" name="ValGlyMid7" id="ValGlyMid7"></td>
                            <td><input type="text" class="form-control" name="ValGlyCollation7" id="ValGlyCollation7"></td>
                            <td><input type="text" class="form-control" name="ValGlySoir7" id="ValGlySoir7"></td>
                            <td><input type="text" class="form-control" name="ValGlyAutre7" id="ValGlyAutre7"></td>
                        </tr>
                    </tbody>
                </table>



                <center><h4>Schéma des glycémies</h4></center>
                <div class="form-group">

                    <label for="nom" class="col-sm-4 control-label">Date de MAJ :</label>
                    <div class="col-sm-5">
                        <input type="text" readonly="" class="form-control datepickerAll" name="dateglycemie">
                    </div>

                </div>
                <table class="table table-bordered" style="color: white;">
                    <thead>
                        <tr>
                            <td style="text-align: center;" colspan="2">Petit déjeuner (g/l)</td>
                            <td style="text-align: center;" colspan="2">Déjeuner (g/l)</td>
                            <td style="text-align: center;" colspan="2">Goûter (g/l)</td>
                            <td style="text-align: center;" colspan="2">Dîner (g/l)</td>
                            <td style="text-align: center;" colspan="2">Collation (g/l)</td>
                            <td style="text-align: center;">Coucher (g/l)</td>
                            <td style="text-align: center;">Nuit (g/l)</td>
                        </tr>
                        <tr>
                            <td style="text-align: center;">Pré</td>
                            <td style="text-align: center;">Post</td>
                            <td style="text-align: center;">Pré</td>
                            <td style="text-align: center;">Post</td>
                            <td style="text-align: center;">Pré</td>
                            <td style="text-align: center;">Post</td>
                            <td style="text-align: center;">Pré</td>
                            <td style="text-align: center;">Post</td>
                            <td style="text-align: center;">Pré</td>
                            <td style="text-align: center;">Post</td>
                            <td style="text-align: center;"></td>
                            <td style="text-align: center;"></td>

                        </tr>
                    </thead>
                    <tbody>
                        <tr> <!-- Mbola interface fotsiny io an -->
                            <td><input name="glycemie1" type="text" class="form-control"></td>
                            <td><input name="glycemie2" type="text" class="form-control"></td>
                            <td><input name="glycemie3" type="text" class="form-control"></td>
                            <td><input name="glycemie4" type="text" class="form-control"></td>
                            <td><input name="glycemie5" type="text" class="form-control"></td>
                            <td><input name="glycemie6" type="text" class="form-control"></td>
                            <td><input name="glycemie7" type="text" class="form-control"></td>
                            <td><input name="glycemie8" type="text" class="form-control"></td>
                            <td><input name="glycemie9" type="text" class="form-control"></td>
                            <td><input name="glycemie10" type="text" class="form-control"></td>
                            <td><input name="glycemie11" type="text" class="form-control"></td>
                            <td><input name="glycemie12" type="text" class="form-control"></td>
                        </tr>

                        <tr> <!-- Mbola interface fotsiny io an -->
                            <td><input name="glycemie13" type="text" class="form-control"></td>
                            <td><input name="glycemie14" type="text" class="form-control"></td>
                            <td><input name="glycemie15" type="text" class="form-control"></td>
                            <td><input name="glycemie16" type="text" class="form-control"></td>
                            <td><input name="glycemie17" type="text" class="form-control"></td>
                            <td><input name="glycemie18" type="text" class="form-control"></td>
                            <td><input name="glycemie19" type="text" class="form-control"></td>
                            <td><input name="glycemie20" type="text" class="form-control"></td>
                            <td><input name="glycemie21" type="text" class="form-control"></td>
                            <td><input name="glycemie22" type="text" class="form-control"></td>
                            <td><input name="glycemie23" type="text" class="form-control"></td>
                            <td><input name="glycemie24" type="text" class="form-control"></td>
                        </tr>

                        <tr> <!-- Mbola interface fotsiny io an -->
                            <td><input name="glycemie25" type="text" class="form-control"></td>
                            <td><input name="glycemie26" type="text" class="form-control"></td>
                            <td><input name="glycemie27" type="text" class="form-control"></td>
                            <td><input name="glycemie28" type="text" class="form-control"></td>
                            <td><input name="glycemie29" type="text" class="form-control"></td>
                            <td><input name="glycemie30" type="text" class="form-control"></td>
                            <td><input name="glycemie31" type="text" class="form-control"></td>
                            <td><input name="glycemie32" type="text" class="form-control"></td>
                            <td><input name="glycemie33" type="text" class="form-control"></td>
                            <td><input name="glycemie34" type="text" class="form-control"></td>
                            <td><input name="glycemie35" type="text" class="form-control"></td>
                            <td><input name="glycemie36" type="text" class="form-control"></td>
                        </tr>

                        <tr> <!-- Mbola interface fotsiny io an -->
                            <td><input name="glycemie37" type="text" class="form-control"></td>
                            <td><input name="glycemie38" type="text" class="form-control"></td>
                            <td><input name="glycemie39" type="text" class="form-control"></td>
                            <td><input name="glycemie40" type="text" class="form-control"></td>
                            <td><input name="glycemie41" type="text" class="form-control"></td>
                            <td><input name="glycemie42" type="text" class="form-control"></td>
                            <td><input name="glycemie43" type="text" class="form-control"></td>
                            <td><input name="glycemie44" type="text" class="form-control"></td>
                            <td><input name="glycemie45" type="text" class="form-control"></td>
                            <td><input name="glycemie46" type="text" class="form-control"></td>
                            <td><input name="glycemie47" type="text" class="form-control"></td>
                            <td><input name="glycemie48" type="text" class="form-control"></td>
                        </tr>

                        <tr> <!-- Mbola interface fotsiny io an -->
                            <td><input name="glycemie49" type="text" class="form-control"></td>
                            <td><input name="glycemie50" type="text" class="form-control"></td>
                            <td><input name="glycemie51" type="text" class="form-control"></td>
                            <td><input name="glycemie52" type="text" class="form-control"></td>
                            <td><input name="glycemie53" type="text" class="form-control"></td>
                            <td><input name="glycemie54" type="text" class="form-control"></td>
                            <td><input name="glycemie55" type="text" class="form-control"></td>
                            <td><input name="glycemie56" type="text" class="form-control"></td>
                            <td><input name="glycemie57" type="text" class="form-control"></td>
                            <td><input name="glycemie58" type="text" class="form-control"></td>
                            <td><input name="glycemie59" type="text" class="form-control"></td>
                            <td><input name="glycemie60" type="text" class="form-control"></td>
                        </tr>

                        <tr> <!-- Mbola interface fotsiny io an -->
                            <td><input name="glycemie61" type="text" class="form-control"></td>
                            <td><input name="glycemie62" type="text" class="form-control"></td>
                            <td><input name="glycemie63" type="text" class="form-control"></td>
                            <td><input name="glycemie64" type="text" class="form-control"></td>
                            <td><input name="glycemie65" type="text" class="form-control"></td>
                            <td><input name="glycemie66" type="text" class="form-control"></td>
                            <td><input name="glycemie67" type="text" class="form-control"></td>
                            <td><input name="glycemie68" type="text" class="form-control"></td>
                            <td><input name="glycemie69" type="text" class="form-control"></td>
                            <td><input name="glycemie70" type="text" class="form-control"></td>
                            <td><input name="glycemie71" type="text" class="form-control"></td>
                            <td><input name="glycemie72" type="text" class="form-control"></td>
                        </tr>

                        <tr> <!-- Mbola interface fotsiny io an -->
                            <td><input name="glycemie73" type="text" class="form-control"></td>
                            <td><input name="glycemie74" type="text" class="form-control"></td>
                            <td><input name="glycemie75" type="text" class="form-control"></td>
                            <td><input name="glycemie76" type="text" class="form-control"></td>
                            <td><input name="glycemie77" type="text" class="form-control"></td>
                            <td><input name="glycemie78" type="text" class="form-control"></td>
                            <td><input name="glycemie79" type="text" class="form-control"></td>
                            <td><input name="glycemie80" type="text" class="form-control"></td>
                            <td><input name="glycemie81" type="text" class="form-control"></td>
                            <td><input name="glycemie82" type="text" class="form-control"></td>
                            <td><input name="glycemie83" type="text" class="form-control"></td>
                            <td><input name="glycemie84" type="text" class="form-control"></td>
                        </tr>

                    </tbody>
                </table>

                <div class="form-group">
                    <label for="synthesecommentqire" class="col-lg-3 control-label">Synthèse/Commentaires :</label>
                    <div class="col-lg-9">
                        <textarea rows="5" cols="1" class="form-control" name="synthesecommentaire" id="synthesecommentaire" placeholder="Synthèse/Commentaires"></textarea>
                    </div>
                </div>

                <div class="form-group">
                    <label for="objectifglycemiquepreprandial" class="col-lg-5 control-label">Objectif glycémique pré prandial (g/l) :</label>
                    <div class="col-lg-1">
                        <input type="text" class="form-control" id="objectifglycemiquepreprandial" name="objectifglycemiquepreprandial" placeholder="(g/l)">
                    </div>
                    <label for="objectifglycemiquepostprandial" class="col-lg-5 control-label">Objectif glycémique post prandial (g/l) :</label>
                    <div class="col-lg-1">
                        <input type="text" class="form-control" id="objectifglycemiquepostprandial" name="objectifglycemiquepostprandial" placeholder="(g/l)">
                    </div>
                </div>

            </fieldset>
        </div>
        </br>
        <div class="field2 table-responsive">
            <fieldset>

                <label for="Autre1" class="col-lg-7 control-label">Hémoglobine glyquée</label>
                </br>
                </br>
                <table class="table table-bordered" style="color: white;">
                    <tbody>
                        <tr>
                            <th scope="row">Dates</th>
                            <td><input type="text" readonly="" class="form-control datepickerAll" name="ValDatesHemGlyc1" id="ValDatesHemGlyc1"></td>
                            <td><input type="text" readonly="" class="form-control datepickerAll" name="ValDatesHemGlyc2" id="ValDatesHemGlyc2"></td>
                            <td><input type="text" readonly="" class="form-control datepickerAll" name="ValDatesHemGlyc3" id="ValDatesHemGlyc3"></td>
                            <td><input type="text" readonly="" class="form-control datepickerAll" name="ValDatesHemGlyc4" id="ValDatesHemGlyc4"></td>
                            <td><input type="text" readonly="" class="form-control datepickerAll" name="ValDatesHemGlyc5" id="ValDatesHemGlyc5"></td>
                            <td><input type="text" readonly="" class="form-control datepickerAll" name="ValDatesHemGlyc6" id="ValDatesHemGlyc6"></td>
                            <td><input type="text" readonly="" class="form-control datepickerAll" name="ValDatesHemGlyc7" id="ValDatesHemGlyc7"></td>
                            <td><input type="text" readonly="" class="form-control datepickerAll" name="ValDatesHemGlyc8" id="ValDatesHemGlyc8"></td>
                            <td><input type="text" readonly="" class="form-control datepickerAll" name="ValDatesHemGlyc9" id="ValDatesHemGlyc9"></td>
                        </tr>
                        <tr>
                            <th scope="row">HbA1c(%)</th>
                            <td><input type="text" class="form-control" name="ValHbA1cHemGlyc1" id="ValHbA1cHemGlyc1"></td>
                            <td><input type="text" class="form-control" name="ValHbA1cHemGlyc2" id="ValHbA1cHemGlyc2"></td>
                            <td><input type="text" class="form-control" name="ValHbA1cHemGlyc3" id="ValHbA1cHemGlyc3"></td>
                            <td><input type="text" class="form-control" name="ValHbA1cHemGlyc4" id="ValHbA1cHemGlyc4"></td>
                            <td><input type="text" class="form-control" name="ValHbA1cHemGlyc5" id="ValHbA1cHemGlyc5"></td>
                            <td><input type="text" class="form-control" name="ValHbA1cHemGlyc6" id="ValHbA1cHemGlyc6"></td>
                            <td><input type="text" class="form-control" name="ValHbA1cHemGlyc7" id="ValHbA1cHemGlyc7"></td>
                            <td><input type="text" class="form-control" name="ValHbA1cHemGlyc8" id="ValHbA1cHemGlyc8"></td>
                            <td><input type="text" class="form-control" name="ValHbA1cHemGlyc9" id="ValHbA1cHemGlyc9"></td>
                        </tr>
                    </tbody>
                </table>

                <div>
                    <!-- chart -->
                    <div>
                        <!-- Row and col -->
                        <div class="row">

                            <div>
                                <center><h4>Evolution chronologique en % desHémoglobines glyquées</h4></center>
                                <canvas id="barhg" />
                            </div>

                        </div>
                    </div>
                    <!-- chart -->
                </div>

            </fieldset>
            <input type="submit" value="envoyer">
            <form>
        </div>

        <!-- 
            <div class="form-group hidden">
                <div class="col-lg-10 col-lg-offset-2">
                    <button type="submit" class="btn btn-success" id="etape2">Envoyer</button>
                </div>
            </div> 
        -->

    </div>
</section>

<script type="text/javascript">
    var arr_Horaire = [], arr_Debit = [], arr_Horaire2 = [], arr_Debit2 = [];
    var DSLScript;
    $("#taille").blur(function () {

        var poids = ($('#poidsactuel').val()) ? $('#poidsactuel').val() : 0;
        var taille = ($('#taille').val()) ? $('#taille').val() : 0;
        var imcPT = (parseInt(poids) / ((parseInt(taille) * 0.01) * (parseInt(taille) * 0.01)));
        imcPT = imcPT.toFixed(1);
        $('#imc').val(imcPT);
    });
    $("#poidsactuel").change(function () {

        var poids = ($('#poidsactuel').val()) ? $('#poidsactuel').val() : 0;
        var taille = ($('#taille').val()) ? $('#taille').val() : 0;
        var imcPT = (parseInt(poids) / ((parseInt(taille) * 0.01) * (parseInt(taille) * 0.01)));
        imcPT = imcPT.toFixed(1);
        $('#imc').val(imcPT);
    });</script>
<script id="chart" type="text/javascript"></script>
<script id="chart2" type="text/javascript"></script>
<script language="javascript">
    $(document).ready(function () {
        $.ajax({
            url: 'lib/chart_dynamic.php',
            type: 'POST',
            success: function (data) {
                $("#chart").html(data);
            },
            error: function () {
                alert("Erreur de chargement de lib/chart_dynamic.php");
            }
        });
        $.ajax({
            url: 'lib/chart_dynamic2.php',
            type: 'POST',
            success: function (data) {
                $("#chart2").html(data);
            },
            error: function () {
                alert("Erreur de chargement de lib/chart_dynamic2.php");
            }
        });
    });</script>
<script type="text/javascript">
    var i = 0, inc = 4, incD = 4, len = 0, content = "", len2, name;
    $('#btnAdd').click(function (e)
    {
        e.preventDefault();
        i++;
        var c = "<tr>";
        c += "<td><input type='text' readonly class='form-control datetimepicker1' name='Horaire" + (inc + i) + "' id='Horaire" + (inc + i) + "'></td>";
        c += "<td><input type='text' readonly class='form-control datetimepicker1' name='Horaire" + (inc + i + 1) + "' id='Horaire" + (inc + i + 1) + "'></td>";
        c += "<td><input type='number' class='form-control' onchange='changer_graphe(this.id);' name='Debit" + (incD + i) + "' id='Debit" + (incD + i) + "'></td>";
        c += "<td><input type='text' readonly class='form-control datetimepicker1' name='Horaire" + (inc + i + 2) + "' id='Horaire" + (inc + i + 2) + "'></td>";
        c += "<td><input type='text' readonly class='form-control datetimepicker1' name='Horaire" + (inc + i + 3) + "' id='Horaire" + (inc + i + 3) + "'></td>";
        c += "<td><input type='number' class='form-control' onchange='changer_graphe(this.id);' name='Debit" + (incD + i + 1) + "' id='Debit" + (incD + i + 1) + "'></td>";
        c += "<td><input type='text' readonly class='form-control datetimepicker1' name='Horaire" + (inc + i + 4) + "' id='Horaire" + (inc + i + 4) + "'></td>";
        c += "<td><input type='text' readonly class='form-control datetimepicker1' name='Horaire" + (inc + i + 5) + "' id='Horaire" + (inc + i + 5) + "'></td>";
        c += "<td><input type='number' class='form-control' onchange='changer_graphe(this.id);' name='Debit" + (incD + i + 2) + "' id='Debit" + (incD + i + 2) + "'></td>";
        c += "<td><input type='text' readonly class='form-control datetimepicker1' name='Horaire" + (inc + i + 6) + "' id='Horaire" + (inc + i + 6) + "'></td>";
        c += "<td><input type='text' readonly class='form-control datetimepicker1' name='Horaire" + (inc + i + 7) + "' id='Horaire" + (inc + i + 7) + "'></td>";
        c += "<td><input type='number' class='form-control' onchange='changer_graphe(this.id);' name='Debit" + (incD + i + 3) + "' id='Debit" + (incD + i + 3) + "'></td>";
        c += "</tr>";
        inc += 7;
        incD += 3;
        if (i < 11)
        {
            $('#ligne4').before(c);
        }
        len = $("#contentBasal1").children().length;
        len2 = $("#contentBasal1>tr:eq(" + (len - 2) + ")").children().length;
        var new_nameH = [], new_nameD = [];
        for (var j = 0; j < len2; j++) {
            name = $("#contentBasal1>tr:eq(" + (len - 2) + ")>td:eq(" + j + ")").children().attr("name");
            if (/^Horaire/.test(name)) {
                arr_Horaire.push(name);
                new_nameH.push(name);
            }
            if (/^Debit/.test(name)) {
                arr_Debit.push(name);
                new_nameD.push(name);
            }
        }

        var dataD = JSON.stringify(arr_Debit);
        var dataH = JSON.stringify(arr_Horaire);
        $.ajax({
            url: 'lib/chart_dynamic.php',
            type: 'POST',
            data: {dataD: dataD, dataH: dataH},
            success: function (data) {
                $("#chart").html(data);
            },
            error: function () {
                alert("Erreur de chargement de lib/chart_dynamic.php");
            }
        });
        Debit_graphe1();
        console.log(arr_Horaire);
        console.log(new_nameH);
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
    });</script>
<script type="text/javascript">
    var m = 0, inc2 = 4, incD2 = 4, len_ = 0, content = "", len_2, name_;
    $('#btnAdd2').click(function (e)
    {
        e.preventDefault();
        m++;
        var c = "<tr>";
        c += "<td><input type='text' readonly class='form-control datetimepicker1' name='Horaire_" + (inc2 + m) + "' id='Horaire_" + (inc2 + m) + "'></td>";
        c += "<td><input type='text' readonly class='form-control datetimepicker1' name='Horaire_" + (inc2 + m + 1) + "' id='Horaire_" + (inc2 + m + 1) + "'></td>";
        c += "<td><input type='number' class='form-control' onchange='tracer_graphe();' name='Debit_" + (incD2 + m) + "' id='Debit_" + (incD2 + m) + "'></td>";
        c += "<td><input type='text' readonly class='form-control datetimepicker1' name='Horaire" + (inc2 + m + 2) + "' id='Horaire" + (inc2 + m + 2) + "'></td>";
        c += "<td><input type='text' readonly class='form-control datetimepicker1' name='Horaire_" + (inc2 + m + 3) + "' id='Horaire_" + (inc2 + m + 3) + "'></td>";
        c += "<td><input type='number' class='form-control' name='Debit_" + (incD2 + m + 1) + "' id='Debit_" + (incD2 + m + 1) + "'></td>";
        c += "<td><input type='text' readonly class='form-control datetimepicker1' name='Horaire_" + (inc2 + m + 4) + "' id='Horaire_" + (inc2 + m + 4) + "'></td>";
        c += "<td><input type='text' readonly class='form-control datetimepicker1' name='Horaire_" + (inc2 + m + 5) + "' id='Horaire_" + (inc2 + m + 5) + "'></td>";
        c += "<td><input type='number' class='form-control' name='Debit_" + (incD2 + m + 2) + "' id='Debit_" + (incD2 + m + 2) + "'></td>";
        c += "<td><input type='text' readonly class='form-control datetimepicker1' name='Horaire_" + (inc2 + m + 6) + "' id='Horaire_" + (inc2 + m + 6) + "'></td>";
        c += "<td><input type='text' readonly class='form-control datetimepicker1' name='Horaire_" + (inc2 + m + 7) + "' id='Horaire_" + (inc2 + m + 7) + "'></td>";
        c += "<td><input type='number' class='form-control' name='Debit_" + (incD2 + m + 3) + "' id='Debit_" + (incD2 + m + 3) + "'></td>";
        c += "</tr>";
        inc2 += 7;
        incD2 += 3;
        if (m < 11)
        {
            $('#ligne24').before(c);
        }
        len_ = $("#contentBasal2").children().length;
        len_2 = $("#contentBasal2>tr:eq(" + (len_ - 2) + ")").children().length;
        var new_nameH = [], new_nameD = [];
        for (var j = 0; j < len_2; j++) {
            name_ = $("#contentBasal2>tr:eq(" + (len_ - 2) + ")>td:eq(" + j + ")").children().attr("name");
            if (/^Horaire/.test(name_)) {
                arr_Horaire2.push(name_);
                new_nameH.push(name_);
            }
            if (/^Debit/.test(name_)) {
                arr_Debit2.push(name_);
                new_nameD.push(name_);
            }
        }

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
        var dataD = JSON.stringify(arr_Debit2);
        var dataH = JSON.stringify(arr_Horaire2);
        $.ajax({
            url: 'lib/chart_dynamic2.php',
            type: 'POST',
            data: {dataD: dataD, dataH: dataH},
            success: function (data) {
                $("#chart2").html(data);
                //alert(data);
            },
            error: function () {
                alert("Erreur de chargement de lib/chart_dynamic2.php");
            }
        });
        console.log(arr_Horaire2);
        console.log(new_nameH);

    });
</script>