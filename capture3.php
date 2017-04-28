<!DOCTYPE html>
<html>
<head>
	<title>Une capture 3</title>
</head>
<body>
  			<table class="table table-bordered table-hover" style="color: white;">
                    <tbody>
                        <tr>
                            <th scope="row">Dates</th>
                            <td><input type="text" class="form-control datepickerAll" name="ValDatesHemGlyc1" id="ValDatesHemGlyc1"></td>
                            <td><input type="date" class="form-control datepickerAll" name="ValDatesHemGlyc2" id="ValDatesHemGlyc2"></td>
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
                       <h4>Evolution chronologique en % desHémoglobines glyquées</h4>
                       <canvas id="barhg" />
                 </div>
                 <script src="jquery/jquery-2.1.4.min.js"></script>
 		<script src="assets/js/Chart.min.js"></script>  
 			<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.min.js"></script>
         <script type="text/javascript">
         	
              var ValDatesHemGlyc1 = <?php echo $_POST["ValDatesHemGlyc1"]; ?>,
               ValDatesHemGlyc2 = <?php echo $_POST["ValDatesHemGlyc2"]; ?>,
                ValDatesHemGlyc3 = <?php echo $_POST["ValDatesHemGlyc3"]; ?>,
                 ValDatesHemGlyc4 = <?php echo $_POST["ValDatesHemGlyc4"]; ?>,
                  ValDatesHemGlyc5 = <?php echo $_POST["ValDatesHemGlyc5"]; ?>,
                   ValDatesHemGlyc6 = <?php echo $_POST["ValDatesHemGlyc6"]; ?>,
                    ValDatesHemGlyc7 = <?php echo $_POST["ValDatesHemGlyc7"]; ?>,
                     ValDatesHemGlyc8 = <?php echo $_POST["ValDatesHemGlyc8"]; ?>
                     , ValDatesHemGlyc9 = <?php echo $_POST["ValDatesHemGlyc9"]; ?>;
                    var ValHbA1cHemGlyc1 = <?php echo $_POST["ValHbA1cHemGlyc1"]; ?>,
                     ValHbA1cHemGlyc2 = <?php echo $_POST["ValHbA1cHemGlyc2"]; ?>,
                      ValHbA1cHemGlyc3 = <?php echo $_POST["ValHbA1cHemGlyc3"]; ?>,
                       ValHbA1cHemGlyc4 = <?php echo $_POST["ValHbA1cHemGlyc4"]; ?>,
                        ValHbA1cHemGlyc5 = <?php echo $_POST["ValHbA1cHemGlyc5"]; ?>,
                         ValHbA1cHemGlyc6 = <?php echo $_POST["ValHbA1cHemGlyc6"]; ?>,
                          ValHbA1cHemGlyc7 = <?php echo $_POST["ValHbA1cHemGlyc7"]; ?>,
                           ValHbA1cHemGlyc8 = <?php echo $_POST["ValHbA1cHemGlyc8"]; ?>,
                            ValHbA1cHemGlyc9 = <?php echo $_POST["ValHbA1cHemGlyc9"]; ?>;



                      
                    Debit_grapheHG(ValDatesHemGlyc1, ValDatesHemGlyc2, ValDatesHemGlyc3, ValDatesHemGlyc4, ValDatesHemGlyc5, ValDatesHemGlyc6, ValDatesHemGlyc7, ValDatesHemGlyc8, ValDatesHemGlyc9, ValHbA1cHemGlyc1, ValHbA1cHemGlyc2, ValHbA1cHemGlyc3, ValHbA1cHemGlyc4, ValHbA1cHemGlyc5, ValHbA1cHemGlyc6, ValHbA1cHemGlyc7, ValHbA1cHemGlyc8, ValHbA1cHemGlyc9);
                        

                        function Debit_grapheHG(ValDatesHemGlyc1, ValDatesHemGlyc2, ValDatesHemGlyc3, ValDatesHemGlyc4, ValDatesHemGlyc5, ValDatesHemGlyc6, ValDatesHemGlyc7, ValDatesHemGlyc8, ValDatesHemGlyc9, ValHbA1cHemGlyc1, ValHbA1cHemGlyc2, ValHbA1cHemGlyc3, ValHbA1cHemGlyc4, ValHbA1cHemGlyc5, ValHbA1cHemGlyc6, ValHbA1cHemGlyc7, ValHbA1cHemGlyc8, ValHbA1cHemGlyc9) {
                        var barDataHG = {
                            labels: [ValDatesHemGlyc1, ValDatesHemGlyc2, ValDatesHemGlyc3, ValDatesHemGlyc4, ValDatesHemGlyc5, ValDatesHemGlyc6, ValDatesHemGlyc7, ValDatesHemGlyc8, ValDatesHemGlyc9],
                            datasets: [{
                                    fillColor: "rgba(147,163,244,0.5)",
                                    strokeColor: "rgba(147,163,244,0.8)",
                                    highlightFill: "rgba(147,163,244,0.75)",
                                    highlightStroke: "rgba(147,163,244,1)",
                                    data: [ValHbA1cHemGlyc1, ValHbA1cHemGlyc2, ValHbA1cHemGlyc3, ValHbA1cHemGlyc4, ValHbA1cHemGlyc5, ValHbA1cHemGlyc6, ValHbA1cHemGlyc7, ValHbA1cHemGlyc8, ValHbA1cHemGlyc9]
                                }]
                        }
                        var barOptions = {
                            responsive: true
                        }
                        var barHbA1c = document.getElementById('barhg').getContext('2d');
                        new Chart(barHbA1c).Bar(barDataHG, barOptions);
                    }

         </script>
</body>
</html>