<?php
	header('Content-type: text/javascript');


			$init_var = 'var Horaire1 = "",
                            Horaire2 = "",
                            Horaire3 = "",
                            Horaire4 = "";
                    var Debit1 = 0,
                            Debit2 = 0,
                            Debit3 = 0,
                            Debit4 = 0;
 				 	var Horaire1N = "",
                            Horaire2N = "",
                            Horaire3N = "",
                            Horaire4N = "";
                    var Debit1N = 0,
                            Debit2N = 0,
                            Debit3N = 0,
                            Debit4N = 0;';

          	$initialiser =  "function initialiser(){
          			var barData1 = {
                           labels: [\"Schéma 1\", \"Schéma 2\", \"Schéma 3\", \"Schéma 4\"],
                             datasets: [{
                                    fillColor: \"rgba(240, 240, 0,0.9)\",
                                    strokeColor: \"rgba(240,240,0,0.6)\",
                                    highlightFill: \"rgba(255, 255, 40,0.7)\",
                                    highlightStroke: \"rgba(0,220, 0,0.4)\",
                                    data: [Debit1, Debit2, Debit3, Debit4]
                                }, {
                                    fillColor: \"rgba(255, 255, 0, 0.7 )\",
                                    strokeColor: \"rgba(255,255, 0,0.6)\",
                                    highlightFill:\"rgba(255, 255, 0,0.5)\",
                                    highlightStroke: \"rgba(255,255,0,0.4)\",
                                    data: [Debit1N, Debit2N, Debit3N, Debit4N]
                                }]
                        }
                        var barOptions = {
                            responsive: true
                        }
                        var bardate01 = document.getElementById('bardate1').getContext('2d');
                        new Chart(bardate01).Bar(barData1, barOptions);
            }";
  			
            $datasets = array();

            $tracer_graphe1 = "function Debit_graphe1() {
                        var barData1 = {
                            labels: [\"Schéma 1\", \"Schéma 2\", \"Schéma 3\", \"Schéma 4\"],
                             datasets: [{
                                    fillColor: \"rgba(240, 240, 0,0.9)\",
                                    strokeColor: \"rgba(240,240,0,0.6)\",
                                    highlightFill: \"rgba(255, 255, 40,0.7)\",
                                    highlightStroke: \"rgba(0,220, 0,0.4)\",
                                    data: [Debit1, Debit2, Debit3, Debit4]
                                }, {
                                    fillColor: \"rgba(255, 255, 0, 0.7 )\",
                                    strokeColor: \"rgba(255,255, 0,0.6)\",
                                    highlightFill:\"rgba(255, 255, 0,0.5)\",
                                    highlightStroke: \"rgba(255,255,0,0.4)\",
                                    data: [Debit1N, Debit2N, Debit3N, Debit4N]
                                }]
                        }
                        var barOptions = {
                            responsive: true
                        }
                        var bardate01 = document.getElementById('bardate1').getContext('2d');
                        new Chart(bardate01).Bar(barData1, barOptions);
               }";


               function tracer_graphe1($datasets){
	               	echo "function Debit_graphe1() {
								var barData1 = {
								labels: [\"Schéma 1\", \"Schéma 2\", \"Schéma 3\", \"Schéma 4\"],
								datasets: [{
                                    fillColor: \"rgba(240, 240, 0,0.9)\",
                                    strokeColor: \"rgba(240,240,0,0.6)\",
                                    highlightFill: \"rgba(255, 255, 40,0.7)\",
                                    highlightStroke: \"rgba(0,220, 0,0.4)\",
                                    data: [Debit1, Debit2, Debit3, Debit4]
                                },";
	  							foreach ($datasets as $key => $value) {
	  											echo $value;
	  							}
	  				echo			"{
                                    fillColor: \"rgba(255, 255, 0, 0.7 )\",
                                    strokeColor: \"rgba(255,255, 0,0.6)\",
                                    highlightFill:\"rgba(255, 255, 0,0.5)\",
                                    highlightStroke: \"rgba(255,255,0,0.4)\",
                                    data: [Debit1N, Debit2N, Debit3N, Debit4N]
                                }]
								}
								var barOptions = {
									responsive: true
								}
								var bardate01 = document.getElementById('bardate1').getContext('2d');
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
			                                    fillColor: \"rgba(".rand(0, 225).", ".rand(0, 225).", ".rand(0, 225).",1)\",
			                                    strokeColor: \"rgba(220,220,220,0.9)\",
                                    			highlightFill: \"rgba(220,220,220,0.75)\",
                                    			highlightStroke: \"rgba(220,220,220,1)\",
			                                    data: [".$dataD[$key].", ".$dataD[$key + 1].", ".$dataD[$key + 2].", ". $dataD[$key + 3] ."]
			                        	},";
			                        	$inc += 4;
  									}  									
  								}
  								echo "Debit_graphe1();";
  								//Initialisation des variables



                  
  							  for($i = 0; $i < 5 ; $i++){
  									echo "Debit".$i." = $(\"#Debit".$i."\").val();";
	                }
	                
                  for($i = 0; $i < 5 ; $i++){
  									echo "$(\"#Debit".$i."N\").val('');";
	                }

  								foreach ($dataD as $key => $value) {
  									echo $value." = $(\"#".$value."\").val();";
								  }							


  								foreach ($dataD as $key => $value) {
  									echo 	"$(\"#".$value."\").change(function(){
					              				".$value." = $(\"#".$value."\").val();
					              				Debit_graphe1();
                                capturer('bardate1');
					              			});";
								}

								tracer_graphe1($datasets);
  							
                }else{
                	for($i = 0; $i < 5 ; $i++){
	                        		echo	"$(\"#Debit".$i."\").change(function (event) {";
			                        echo    	"Debit".$i." = $('#Debit".$i."').val();";
			                        echo    	"Debit_graphe1();";
                              echo      "capturer('bardate1');";
			                        echo 	"});";
                    }
	                        	for($i = 0; $i < 5 ; $i++){
	                        		echo	"$(\"#Debit".$i."N\").change(function (event) {";
			                        echo    	"Debit".$i."N = $('#Debit".$i."N').val();";
			                        echo    	"Debit_graphe1();"	;
                              echo      "capturer('bardate1');";
			                        echo 	"});";
                              if($i == 4){   
                                echo  "$(\"#Debit".$i."N\").change(function (event) {";
                                echo      "Debit".$i."N = $('#Debit".$i."N').val();";
                                echo      "Debit_graphe1();"  ;
                                echo      "capturer('bardate1');";
                                echo  "});";
                              }   
								            }
  								echo $initialiser;
  								echo $tracer_graphe1;
  							}  						
              ?>

              function capturer(img){
                  setTimeout(function() {
                        capture(img);
                  }, 800);;
              }