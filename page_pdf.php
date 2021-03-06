

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




<style>

</style>

      <div>
        <div class="field2">
            <h4 style="text-align: center;">DONNEES MEDICALES</h4></br>
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
                            <input type="text" class="form-control datepickerAll" name="datediagnostic" id="datediagnostic" placeholder="Date de diagnostic">
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
                            <input type="text" class="form-control datepickerAll" name="datepremieremisesousPompe" id="datepremieremisesousPompe" placeholder="Date de première mise sous Pompe">
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
                            <input type="text" class="form-control datepickerAll" name="dateprescription" id="dateprescription" placeholder="Date de prescription">
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
            </fieldset>	<br>

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

            <h4>Traitement complémentaire :</h4><br>
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
                            <th style="text-align: center;" colspan="12">Schémas basals date 1</th>
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
                            <td><input type="text" class="form-control datetimepicker" name="Horaire1" id="Horaire1"></td>
                            <td><input type="number" class="form-control" name="Debit1" id="Debit1"></td>
                            <td><input type="text" class="form-control" value="00:00" readonly></td>
                            <td><input type="text" class="form-control datetimepicker" name="Horaire2" id="Horaire2"></td>
                            <td><input type="number" class="form-control" name="Debit2" id="Debit2"></td>
                            <td><input type="text" class="form-control" value="00:00" readonly></td>
                            <td><input type="text" class="form-control datetimepicker" name="Horaire3" id="Horaire3"></td>
                            <td><input type="number" class="form-control" name="Debit3" id="Debit3"></td>
                            <td><input type="text" class="form-control" value="00:00" readonly></td>
                            <td><input type="text" class="form-control datetimepicker" name="Horaire4" id="Horaire4"></td>
                            <td><input type="number" class="form-control" name="Debit4" id="Debit4"></td>
                        </tr>
                        
                        <tr  id="ligne4">
                            <td><input type="text" class="form-control" value="00:00" readonly></td>
                            <td><input type="text" class="form-control datetimepicker" name="Horaire1N" id="Horaire1N"></td>
                            <td><input type="number" class="form-control" name="Debit1N" id="Debit1N"></td>
                            <td><input type="text" class="form-control" value="00:00" readonly></td>
                            <td><input type="text" class="form-control datetimepicker" name="Horaire2N" id="Horaire2N"></td>
                            <td><input type="number" class="form-control" name="Debit2N" id="Debit2N"></td>
                            <td><input type="text" class="form-control" value="00:00" readonly></td>
                            <td><input type="text" class="form-control datetimepicker" name="Horaire3N" id="Horaire3N"></td>
                            <td><input type="number" class="form-control" name="Debit3N" id="Debit3N"></td>
                            <td><input type="text" class="form-control" value="00:00" readonly></td>
                            <td><input type="text" class="form-control datetimepicker" name="Horaire4N" id="Horaire4N"></td>
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
                            <h4>Histogrammes des débits suivant le Schémas basals date 1</h4>
                            <canvas id="bardate1" />
                        </div>

                    </div>
                </div>
                <!-- chart -->
                </br>

                <table class="table table-bordered  table-responsive" style="color: white;">
                    <thead>
                        <tr>
                            <th style="text-align: center;" colspan="12">Schémas basals date 2</th>
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
                            <td><input type="text" class="form-control datetimepicker" name="Horaire_1" id="Horaire_1"></td>
                            <td><input type="number" class="form-control" name="Debit_1" id="Debit_1"></td>
                            <td><input type="text" class="form-control" value="00:00" readonly></td>
                            <td><input type="text" class="form-control datetimepicker" name="Horaire_2" id="Horaire_2"></td>
                            <td><input type="number" class="form-control" name="Debit_2" id="Debit_2"></td>
                            <td><input type="text" class="form-control" value="00:00" readonly></td>
                            <td><input type="text" class="form-control datetimepicker" name="Horaire_3" id="Horaire_3"></td>
                            <td><input type="number" class="form-control" name="Debit_3" id="Debit_3"></td>
                            <td><input type="text" class="form-control" value="00:00" readonly></td>
                            <td><input type="text" class="form-control datetimepicker" name="Horaire_4" id="Horaire_4"></td>
                            <td><input type="number" class="form-control" name="Debit_4" id="Debit_4"></td>
                        </tr>
                        <tr id="ligne24">
                            <td><input type="text" class="form-control datetimepicker"  name="Horaire_N1" id="Horaire_N1"></td>
                            <td><input type="text" class="form-control" value="23:59" readonly></td>
                            <td><input type="number" class="form-control" name="Debit_N1" id="Debit_N1"></td>
                            <td><input type="text" class="form-control datetimepicker" name="Horaire_N2" id="Horaire_N2"></td>
                            <td><input type="text" class="form-control" value="23:59" readonly></td>
                            <td><input type="number" class="form-control" name="Debit_N2" id="Debit_N2"></td>
                            <td><input type="text" class="form-control datetimepicker" name="Horaire_N3" id="Horaire_N3"></td>
                            <td><input type="text" class="form-control" value="23:59" readonly></td>
                            <td><input type="number" class="form-control" name="Debit_N3" id="Debit_N3"></td>
                            <td><input type="text" class="form-control datetimepicker" name="Horaire_N4" id="Horaire_N4"></td>
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
                            <h4>Histogrammes des débits suivant le Schémas basals date 2</h4>
                            <canvas id="bardate2" />


                        </div>

                    </div>
                </div>
                <!-- chart -->

            </fieldset>
        </div>

        </br>
        <div class="field2 table-responsive">
            <fieldset>
                <label for="Autre1" class="col-lg-5 control-label">Schéma des bolus</label>
                <label for="Autre1" class="col-lg-3 control-label">Date de MAJ :</label>
                </br>
                </br>
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



                <label for="Autre1" class="col-lg-5 control-label">Schéma des glycémies</label>
                <label for="Autre1" class="col-lg-3 control-label">Date de MAJ :</label>
                </br>
                </br>
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
                            <td><input type="text" class="form-control"></td>
                            <td><input type="text" class="form-control"></td>
                            <td><input type="text" class="form-control"></td>
                            <td><input type="text" class="form-control"></td>
                            <td><input type="text" class="form-control"></td>
                            <td><input type="text" class="form-control"></td>
                            <td><input type="text" class="form-control"></td>
                            <td><input type="text" class="form-control"></td>
                            <td><input type="text" class="form-control"></td>
                            <td><input type="text" class="form-control"></td>
                            <td><input type="text" class="form-control"></td>
                            <td><input type="text" class="form-control"></td>
                        </tr>

                        <tr> <!-- Mbola interface fotsiny io an -->
                            <td><input type="text" class="form-control"></td>
                            <td><input type="text" class="form-control"></td>
                            <td><input type="text" class="form-control"></td>
                            <td><input type="text" class="form-control"></td>
                            <td><input type="text" class="form-control"></td>
                            <td><input type="text" class="form-control"></td>
                            <td><input type="text" class="form-control"></td>
                            <td><input type="text" class="form-control"></td>
                            <td><input type="text" class="form-control"></td>
                            <td><input type="text" class="form-control"></td>
                            <td><input type="text" class="form-control"></td>
                            <td><input type="text" class="form-control"></td>
                        </tr>

                        <tr> <!-- Mbola interface fotsiny io an -->
                            <td><input type="text" class="form-control"></td>
                            <td><input type="text" class="form-control"></td>
                            <td><input type="text" class="form-control"></td>
                            <td><input type="text" class="form-control"></td>
                            <td><input type="text" class="form-control"></td>
                            <td><input type="text" class="form-control"></td>
                            <td><input type="text" class="form-control"></td>
                            <td><input type="text" class="form-control"></td>
                            <td><input type="text" class="form-control"></td>
                            <td><input type="text" class="form-control"></td>
                            <td><input type="text" class="form-control"></td>
                            <td><input type="text" class="form-control"></td>
                        </tr>

                        <tr> <!-- Mbola interface fotsiny io an -->
                            <td><input type="text" class="form-control"></td>
                            <td><input type="text" class="form-control"></td>
                            <td><input type="text" class="form-control"></td>
                            <td><input type="text" class="form-control"></td>
                            <td><input type="text" class="form-control"></td>
                            <td><input type="text" class="form-control"></td>
                            <td><input type="text" class="form-control"></td>
                            <td><input type="text" class="form-control"></td>
                            <td><input type="text" class="form-control"></td>
                            <td><input type="text" class="form-control"></td>
                            <td><input type="text" class="form-control"></td>
                            <td><input type="text" class="form-control"></td>
                        </tr>

                        <tr> <!-- Mbola interface fotsiny io an -->
                            <td><input type="text" class="form-control"></td>
                            <td><input type="text" class="form-control"></td>
                            <td><input type="text" class="form-control"></td>
                            <td><input type="text" class="form-control"></td>
                            <td><input type="text" class="form-control"></td>
                            <td><input type="text" class="form-control"></td>
                            <td><input type="text" class="form-control"></td>
                            <td><input type="text" class="form-control"></td>
                            <td><input type="text" class="form-control"></td>
                            <td><input type="text" class="form-control"></td>
                            <td><input type="text" class="form-control"></td>
                            <td><input type="text" class="form-control"></td>
                        </tr>

                        <tr> <!-- Mbola interface fotsiny io an -->
                            <td><input type="text" class="form-control"></td>
                            <td><input type="text" class="form-control"></td>
                            <td><input type="text" class="form-control"></td>
                            <td><input type="text" class="form-control"></td>
                            <td><input type="text" class="form-control"></td>
                            <td><input type="text" class="form-control"></td>
                            <td><input type="text" class="form-control"></td>
                            <td><input type="text" class="form-control"></td>
                            <td><input type="text" class="form-control"></td>
                            <td><input type="text" class="form-control"></td>
                            <td><input type="text" class="form-control"></td>
                            <td><input type="text" class="form-control"></td>
                        </tr>

                        <tr> <!-- Mbola interface fotsiny io an -->
                            <td><input type="text" class="form-control"></td>
                            <td><input type="text" class="form-control"></td>
                            <td><input type="text" class="form-control"></td>
                            <td><input type="text" class="form-control"></td>
                            <td><input type="text" class="form-control"></td>
                            <td><input type="text" class="form-control"></td>
                            <td><input type="text" class="form-control"></td>
                            <td><input type="text" class="form-control"></td>
                            <td><input type="text" class="form-control"></td>
                            <td><input type="text" class="form-control"></td>
                            <td><input type="text" class="form-control"></td>
                            <td><input type="text" class="form-control"></td>
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
                            <td><input type="text" class="form-control datepickerAll" name="ValDatesHemGlyc1" id="ValDatesHemGlyc1"></td>
                            <td><input type="text" class="form-control datepickerAll" name="ValDatesHemGlyc2" id="ValDatesHemGlyc2"></td>
                            <td><input type="text" class="form-control datepickerAll" name="ValDatesHemGlyc3" id="ValDatesHemGlyc3"></td>
                            <td><input type="text" class="form-control datepickerAll" name="ValDatesHemGlyc4" id="ValDatesHemGlyc4"></td>
                            <td><input type="text" class="form-control datepickerAll" name="ValDatesHemGlyc5" id="ValDatesHemGlyc5"></td>
                            <td><input type="text" class="form-control datepickerAll" name="ValDatesHemGlyc6" id="ValDatesHemGlyc6"></td>
                            <td><input type="text" class="form-control datepickerAll" name="ValDatesHemGlyc7" id="ValDatesHemGlyc7"></td>
                            <td><input type="text" class="form-control datepickerAll" name="ValDatesHemGlyc8" id="ValDatesHemGlyc8"></td>
                            <td><input type="text" class="form-control datepickerAll" name="ValDatesHemGlyc9" id="ValDatesHemGlyc9"></td>
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
                                <h4>Evolution chronologique en % desHémoglobines glyquées</h4>
                                <canvas id="barhg" />
                            </div>

                        </div>
                    </div>
                </div>

            </fieldset>

        </div>

  </div>
  <?php
    $content = ob_get_clean();

    require_once(dirname(__FILE__).'/html2pdf-4.4.0/html2pdf.class.php');
 
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