<?php
	header('Content-type: text/javascript');


			$init_var = 'var Horaire_1 = "",
                            Horaire_2 = "",
                            Horaire_3 = "",
                            Horaire_4 = "";
                    var Debit_1 = 0,
                            Debit_2 = 0,
                            Debit_3 = 0,
                            Debit_4 = 0;
 				 	var Horaire_N1 = "",
                            Horaire_N2 = "",
                            Horaire_N3 = "",
                            Horaire_N4 = "";
                    var Debit_N1 = 0,
                            Debit_N2 = 0,
                            Debit_N3 = 0,
                            Debit_N4 = 0;';

          	$initialiser =  "function initialiser2(){
          			var barData1 = {
                           labels: [\"Schéma 1\", \"Schéma 2\", \"Schéma 3\", \"Schéma 4\"],
                            datasets: [{
                                    fillColor: \"rgba(".rand(20, 225).", ".rand(20, 225).", ".rand(20, 225).",0.5)\",
                                    strokeColor: \"rgba(220,220,220,0.8)\",
                                    highlightFill: \"rgba(220,220,220,0.75)\",
                                    highlightStroke: \"rgba(220,220,220,1)\",
                                    data: [Debit_1, Debit_2, Debit_3, Debit_4]
                                }, {
                                    fillColor: \"rgba(".rand(20, 225).", ".rand(20, 225).", ".rand(20, 225).",0.5)\",
                                    strokeColor: \"rgba(151,187,205,0.8)\",
                                    highlightFill: \"rgba(151,187,205,0.75)\",
                                    highlightStroke: \"rgba(151,187,205,1)\",
                                     data: [Debit_N1, Debit_N2, Debit_N3, Debit_N4]
                                }]
                        }
                        var barOptions = {
                            responsive: true
                        }
                        var bardate01 = document.getElementById('bardate2').getContext('2d');
                        new Chart(bardate01).Bar(barData1, barOptions);
            }";
  			
            $datasets = array();

            $tracer_graphe1 = "function Debit_graphe2() {
                        var barData1 = {
                            labels: [\"Schéma 1\", \"Schéma 2\", \"Schéma 3\", \"Schéma 4\"],
                            datasets: [{
                                    fillColor: \"rgba(".rand(20, 225).", ".rand(20, 225).", ".rand(20, 225).",0.5)\",
                                    strokeColor: \"rgba(220,220,220,0.8)\",
                                    highlightFill: \"rgba(220,220,220,0.75)\",
                                    highlightStroke: \"rgba(220,220,220,1)\",
                                    data: [Debit_1, Debit_2, Debit_3, Debit_4]
                                }, {
                                    fillColor: \"rgba(".rand(20, 225).", ".rand(20, 225).", ".rand(20, 225).",0.5)\",
                                    strokeColor: \"rgba(151,187,205,0.8)\",
                                    highlightFill: \"rgba(151,187,205,0.75)\",
                                    highlightStroke: \"rgba(151,187,205,1)\",
                                    data: [Debit_N1, Debit_N2, Debit_N3, Debit_N4]
                                }]
                        }
                        var barOptions = {
                            responsive: true
                        }
                        var bardate01 = document.getElementById('bardate2').getContext('2d');
                        new Chart(bardate01).Bar(barData1, barOptions);
               }";


               function tracer_graphe1($datasets){
	               	echo "function Debit_graphe2() {
								var barData1 = {
								labels: [\"Schémas 1\", \"Schéma 2\", \"Schéma 3\", \"Schéma 4\"],
								datasets: [{
										fillColor: \"rgba(".rand(20, 225).", ".rand(20, 225).", ".rand(20, 225).",0.5)\",
										strokeColor: \"rgba(220,220,220,0.8)\",
										highlightFill: \"rgba(220,220,220,0.75)\",
										highlightStroke: \"rgba(220,220,220,1)\",
										data: [Debit_1, Debit_2, Debit_3, Debit_4]
										},";
	  							foreach ($datasets as $key => $value) {
	  											echo $value;
	  							}
	  				echo			"{
										fillColor: \"rgba(".rand(20, 225).", ".rand(20, 225).", ".rand(20, 225).",0.5)\",
										strokeColor: \"rgba(151,187,205,0.8)\",
										highlightFill: \"rgba(151,187,205,0.75)\",
										highlightStroke: \"rgba(151,187,205,1)\",
										data: [Debit_N1, Debit_N2, Debit_N3, Debit_N4]
									}]
								}
								var barOptions = {
									responsive: true
								}
								var bardate01 = document.getElementById('bardate2').getContext('2d');
								new Chart(bardate01).Bar(barData1, barOptions);
					}";
  				}
?>
							
					
  						<?php
  						
  							echo $init_var;

  							if($_POST){

  								$inc = 0;

  								$dataD = json_decode($_POST["dataD"]);
  								$dataH = json_decode($_POST["dataH"]);
  							
  								//Initialisation des variables en javascript


  								foreach ($dataH as $key => $value) {
  									echo "var ".$value." = \"\";\n";
  								}


  								foreach ($dataD as $key => $value) {
  									
  									echo "var ".$value." = \"\";\n";

  									while($key == $inc){
  										$datasets[] = "{
			                                    fillColor: \"rgba(".rand(20, 225).", ".rand(20, 225).", ".rand(20, 225).",0.5)\",
			                                    strokeColor: \"rgba(220,220,220,0.8)\",
                                    			highlightFill: \"rgba(220,220,220,0.75)\",
                                    			highlightStroke: \"rgba(220,220,220,1)\",
			                                    data: [".$dataD[$key].", ".$dataD[$key + 1].", ".$dataD[$key + 2].", ". $dataD[$key + 3] ."]
			                        	},";
			                        	$inc += 4;
  									}  									
  								}
  								echo "Debit_graphe2();";
  								//Initialisation des variables
  								for($i = 0; $i < 5 ; $i++){
  									echo "$(\"#Debit_".$i."\").val('');";
	                        	}
	                        	for($i = 0; $i < 5 ; $i++){
  									echo "$(\"#Debit_N".$i."\").val('');";
	                        	}
  								foreach ($dataD as $key => $value) {
  									echo "$(\"#".$value."\").val('');";
								}							


  								foreach ($dataD as $key => $value) {
  									echo 	"$(\"#".$value."\").change(function(){
					              				".$value." = $(\"#".$value."\").val();
                                alert('Je suis changer !');
					              				Debit_graphe2();
					              			});";
								}

								tracer_graphe1($datasets);
  							}else{
  								for($i = 0; $i < 5 ; $i++){
	                        		echo	"$(\"#Debit_".$i."\").change(function (event) {";
			                        echo    	"Debit_".$i." = $('#Debit_".$i."').val();";
			                        echo    	"Debit_graphe2();";
			                        echo 	"});";
								}
	                        	for($i = 0; $i < 5 ; $i++){
	                        		echo	"$(\"#Debit_N".$i."\").change(function (event) {";
			                        echo    	"Debit_N".$i." = $('#Debit_N".$i."').val();";
			                        echo    	"Debit_graphe2();"	;
			                        echo 	"});";
								}	
  								echo $initialiser;
  								echo $tracer_graphe1;
  							}
  						


              ?>


