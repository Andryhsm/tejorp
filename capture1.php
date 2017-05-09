<!DOCTYPE html>
<html>
<head>
	<title> Un test de capture</title>
</head>
<body>
                  <div>
                            <canvas id="bardate1" />
                 </div>
</body>
<script src="jquery/jquery-2.1.4.min.js"></script>
 <script src="assets/js/Chart.min.js"></script>
 <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.min.js"></script>
<script type="text/javascript">
	 					

                 var Debit1 = <?php echo $_GET["Debit1"] ?>,
                            Debit2 = <?php echo $_GET["Debit2"] ?>,
                            Debit3 = <?php echo $_GET["Debit3"] ?>,
                            Debit4 = <?php echo $_GET["Debit4"] ?>,
                            Debit5 = <?php echo $_GET["Debit5"] ?>,
                            Debit6 = <?php echo $_GET["Debit6"] ?>,
                            Debit7 = <?php echo $_GET["Debit7"] ?>,
                            Debit8 = <?php echo $_GET["Debit8"] ?>;
                    var Debit9 = <?php echo $_GET["Debit9"] ?>,
                            Debit10 = <?php echo $_GET["Debit10"] ?>,
                            Debit11 = <?php echo $_GET["Debit11"] ?>,
                            Debit12 = <?php echo $_GET["Debit12"] ?>,
                            Debit13 = <?php echo $_GET["Debit13"] ?>,
                            Debit14 = <?php echo $_GET["Debit14"] ?>,
                            Debit15 = <?php echo $_GET["Debit15"] ?>,
                            Debit16 = <?php echo $_GET["Debit16"] ?>;



                Debit_graphe1(Debit1, Debit2, Debit3, Debit4, Debit5, Debit6, Debit7, Debit8, Debit9, Debit10, Debit11, Debit12, Debit13, Debit14, Debit15, Debit16);
                 

                  function capturer(){
                   

                }


                   function Debit_graphe1(Debit1, Debit2, Debit3, Debit4, Debit5, Debit6, Debit7, Debit8, Debit9, Debit10, Debit11, Debit12, Debit13, Debit14, Debit15, Debit16) {
                        var barData1 = {
                            labels: ["Schémas 1", "Schémas 2", "Schémas 3", "Schémas 4"],
                            datasets: [{
                                    fillColor: "rgba(220,220,220,0.5)",
                                    strokeColor: "rgba(220,220,220,0.8)",
                                    highlightFill: "rgba(220,220,220,0.75)",
                                    highlightStroke: "rgba(220,220,220,1)",
                                    data: [Debit1, Debit2, Debit3, Debit4]
                                }, {
                                    fillColor: "rgba(151,187,205,0.5)",
                                    strokeColor: "rgba(151,187,205,0.8)",
                                    highlightFill: "rgba(151,187,205,0.75)",
                                    highlightStroke: "rgba(151,187,205,1)",
                                    data: [Debit5, Debit6, Debit7, Debit8]
                                }, {
                                    fillColor: "rgba(11,187,25,0.5)",
                                    strokeColor: "rgba(11,187,25,0.8)",
                                    highlightFill: "rgba(11,187,25,0.75)",
                                    highlightStroke: "rgba(11,187,25,1)",
                                    data: [Debit9, Debit10, Debit11, Debit12]
                                }, {
                                    fillColor: "rgba(11,56,205,0.5)",
                                    strokeColor: "rgba(11,56,205,0.8)",
                                    highlightFill: "rgba(11,56,205,0.75)",
                                    highlightStroke: "rgba(11,56,205,1)",
                                    data: [Debit13, Debit14, Debit15, Debit16]
                                }]
                        }
                        var barOptions = {
                            responsive: true
                        }
                        var bardate01 = document.getElementById('bardate1').getContext('2d');
                        new Chart(bardate01).Bar(barData1, barOptions);
                        
                        setTimeout(function(){
                               //Pour les photo du pdf
                                var capture = {};
                                var target = $('#bardate1');
                                html2canvas(target, {
                                    onrendered: function(canvas) {
                                        capture.img = canvas.toDataURL( "image/png" );
                                        capture.data = { 'image' : capture.img };
                                        $.ajax({
                                        url: "pdf/ajax.php",
                                        data: capture.data,
                                        type: 'POST',
                                        success: function( result ) {
                                                alert('image bien generer');
                                        }
                                        });
                                    }
                                });
                            }, 800);
                    }


</script>
<script language="javascript">

	

</script>
</html>