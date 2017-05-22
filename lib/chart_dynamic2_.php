<?php
	header('Content-type: text/javascript');


  require "../cnx.php";

  $idPatient = $_GET["idPatient"];
  $idPrescripteur = $_GET["idPrescripteur"];
  
  $query = $bdd->query("SELECT * FROM `donnemedicale` WHERE idPatient=\"".$idPatient."\" AND idPrescripteur=\"".$idPrescripteur."\"") or die (print_r($bdd->errorInfo()));

  $Debits1 = array();
  $val1 = array();
  $Debits2 = array();
  $val2 = array();
  $datas = array();

  while($data = $query->fetchAll(PDO::FETCH_ASSOC)){
    $datas[] = $data;
  }
  $i = 0;
  $j = 0;

  foreach ($datas as $key1 => $value1) {
    foreach ($value1 as $key2 => $value2) {
      foreach ($value2 as $key3 => $value3) {
        if(preg_match("#^Debit[0-9]{1,2}#", $key3)){
          if($value3 != ""){
            $Debits1[$i] = $key3;
            $val1[$i] = $value3;
            $i++; 
          } 
        }
        if(preg_match("#^Debit_N?[0-9]{1,2}#", $key3)){ 
          if($value3 != ""){
            $Debits2[$j] = $key3;
            $val2[$j] = $key3;  
            $j++;         
          }
        }
      }
    }
  }

  //Retirer tous les debits qui contient des valeurs dans la base et l'initialiser sa variable en javascript
  function init_var_debit2($data, $p = ""){

    $deb = 5;
    $limit = 4;
    $inc_h = 5;
    $init = "";

    foreach ($data as $key => $value) {
      $k = preg_filter('#Debit'.$p.'#', '', $value);
      if(($val = intval($k)) > $limit){
        if($val == $deb){
           $init .= 'Debit'.$p.''.$val.' = ($("#Debit'.$p.''.$val.'").val() != "") ? $("#Debit'.$p.''.$val.'").val() : 0, 
                                Debit'.$p.''.($val + 1).' = ($("#Debit'.$p.''.($val + 1).'").val() != "") ? $("#Debit'.$p.''.($val + 1).'").val() : 0,
                                Debit'.$p.''.($val + 2).' = ($("#Debit'.$p.''.($val + 2).'").val() != "") ? $("#Debit'.$p.''.($val + 2).'").val() : 0,
                                Debit'.$p.''.($val + 3).' = ($("#Debit'.$p.''.($val + 3).'").val() != "") ? $("#Debit'.$p.''.($val + 3).'").val() : 0;';
        
          $deb += 4 ;
          $limit += 4;
          $inc_h += 8;
          $val += 4;
        }
      }
    }
    return $init;
  }

   //Retirer tous les debits qui contient des valeurs dans la base et l'initialiser les graphes en javascript
  function init_bardate($data, $p = ""){

    $deb = 5;
    $limit = 4;
    $inc_h = 5;
    $init = "";

    foreach ($data as $key => $value) {
      $k = preg_filter('#Debit'.$p.'#', '', $value);
      if(($val = intval($k)) > $limit){
        if($val == $deb){
            $init .=  "  {
                                    fillColor: \"rgba(240, 240, 0,0.9)\",
                                    strokeColor: \"rgba(240,240,0,0.6)\",
                                    highlightFill: \"rgba(255, 255, 40,0.7)\",
                                    highlightStroke: \"rgba(0,220, 0,0.4)\",
                                    data: [Debit".$p."".$val.", Debit".$p."".($val + 1).", Debit".$p."".($val + 2).", Debit".$p."".($val + 3)."]
                                },";
        
          $deb += 4 ;
          $limit += 4;
          $inc_h += 8;
          $val += 4;
        }
      }
    }
    return $init;
  }

   //Retirer tous les debits qui contient des valeurs dans la base et declarer son evenement change lors du changement en javascript
  function init_debit_change($data, $p = ""){

    $deb = 5;
    $limit = 4;
    $inc_h = 5;
    $init = "";

    foreach ($data as $key => $value) {
      $k = preg_filter('#Debit'.$p.'#', '', $value);
      if(($val = intval($k)) > $limit){
        if($val == $deb){
            $init .=  " $(\"#Debit".$p."".$val."\").change(function (event) {
                      Debit".$p."".$val." = $('#Debit".$p."".$val."').val();
                      Debit_graphe2();
                      capturer('bardate1');
                    });
                    $(\"#Debit".$p."".($val + 1)."\").change(function (event) {
                      Debit".$p."".($val + 1)." = $('#Debit".$p."".($val + 1)."').val();
                      Debit_graphe2();
                      capturer('bardate1');
                    });
                    $(\"#Debit".$p."".($val + 2)."\").change(function (event) {
                      Debit".$p."".($val + 2)." = $('#Debit".$p."".($val + 2)."').val();
                      Debit_graphe2();
                      capturer('bardate1');
                    });
                    $(\"#Debit".$p."".($val + 3)."\").change(function (event) {
                      Debit".$p."".($val + 3)." = $('#Debit".$p."".($val + 3)."').val();
                      Debit_graphe2();
                      capturer('bardate1');
                    });";
        
          $deb += 4 ;
          $limit += 4;
          $inc_h += 8;
          $val += 4;
        }
      }
    }
    return $init;
  }


			$init_var = 'var Horaire_1 = "",
                            Horaire_2 = "",
                            Horaire_3 = "",
                            Horaire_4 = "";
                    var Debit_1 = ($("#Debit_1").val() != "") ? $("#Debit_1").val() : 0,
                            Debit_2 = ($("#Debit_2").val() != "") ? $("#Debit_2").val() : 0,
                            Debit_3 = ($("#Debit_3").val() != "") ? $("#Debit_3").val() : 0,
                            Debit_4 = ($("#Debit_4").val() != "") ? $("#Debit_4").val() : 0;
 				 	var Horaire_N1 = "",
                            Horaire_N2 = "",
                            Horaire_N3 = "",
                            Horaire_N4 = "";
                    var Debit_N1 = ($("#Debit_N1").val() != "") ? $("#Debit_N1").val() : 0,
                            Debit_N2 = ($("#Debit_N2").val() != "") ? $("#Debit_N2").val() : 0,
                            Debit_N3 = ($("#Debit_N3").val() != "") ? $("#Debit_N3").val() : 0,
                            Debit_N4 = ($("#Debit_N4").val() != "") ? $("#Debit_N4").val() : 0;';

        function initialiser($p){
          	return  "function initialiser2(){
          			var barData1 = {
                           labels: [\"Schémas 1\", \"Schémas 2\", \"Schémas 3\", \"Schémas 4\"],
                            datasets: [{
                                    fillColor: \"rgba(240, 240, 0,0.9)\",
                                    strokeColor: \"rgba(240,240,0,0.6)\",
                                    highlightFill: \"rgba(255, 255, 40,0.7)\",
                                    highlightStroke: \"rgba(0,220, 0,0.4)\",
                                    data: [Debit_1, Debit_2, Debit_3, Debit_4]
                                },".$p." {
                                    fillColor: \"rgba(255, 255, 0, 0.7 )\",
                                    strokeColor: \"rgba(255,255, 0,0.6)\",
                                    highlightFill:\"rgba(255, 255, 0,0.5)\",
                                    highlightStroke: \"rgba(255,255,0,0.4)\",
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
            $datasets = array();

          function tracer_graphe1($p){
            return "function Debit_graphe2() {
                        var barData1 = {
                            labels: [\"Schéma 1\", \"Schéma 2\", \"Schéma 3\", \"Schéma 4\"],
                            datasets: [{
                                    fillColor: \"rgba(240, 240, 0,0.9)\",
                                    strokeColor: \"rgba(240,240,0,0.6)\",
                                    highlightFill: \"rgba(255, 255, 40,0.7)\",
                                    highlightStroke: \"rgba(0,220, 0,0.4)\",
                                    data: [Debit_1, Debit_2, Debit_3, Debit_4]
                                },".$p." {
                                    fillColor: \"rgba(255, 255, 0, 0.7 )\",
                                    strokeColor: \"rgba(255,255, 0,0.6)\",
                                    highlightFill:\"rgba(255, 255, 0,0.5)\",
                                    highlightStroke: \"rgba(255,255,0,0.4)\",
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
               function tracer_graphe2($datasets, $p){
	               	echo "function Debit_graphe2() {
								var barData1 = {
								labels: [\"Schéma 1\", \"Schéma 2\", \"Schéma 3\", \"Schéma 4\"],
								datasets: [{
                                    fillColor: \"rgba(240, 240, 0,0.9)\",
                                    strokeColor: \"rgba(240,240,0,0.6)\",
                                    highlightFill: \"rgba(255, 255, 40,0.7)\",
                                    highlightStroke: \"rgba(0,220, 0,0.4)\",
                                    data: [Debit_1, Debit_2, Debit_3, Debit_4]
                                },".$p."";
	  							foreach ($datasets as $key => $value) {
	  											echo $value;
	  							}
	  				echo	" {
                                    fillColor: \"rgba(255, 255, 0, 0.7 )\",
                                    strokeColor: \"rgba(255,255, 0,0.6)\",
                                    highlightFill:\"rgba(255, 255, 0,0.5)\",
                                    highlightStroke: \"rgba(255,255,0,0.4)\",
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
  						  //initialisation des variables
  							echo $init_var;
                echo init_var_debit2($Debits2, "_");
                echo init_debit_change($Debits2, "_");

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
			                                    fillColor: \"rgba(".rand(0, 225).", ".rand(0, 225).", ".rand(0, 225).",0.9)\",
			                                    strokeColor: \"rgba(220,220,220,0.8)\",
                                    			highlightFill: \"rgba(220,220,220,0.75)\",
                                    			highlightStroke: \"rgba(220,220,220,0.9)\",
			                                    data: [".$dataD[$key].", ".$dataD[$key + 1].", ".$dataD[$key + 2].", ". $dataD[$key + 3] ."]
			                        	},";
			                        	$inc += 4;
  									}  									
  								}
  								echo "Debit_graphe2();";
  							

                	//Initialisation des variables
  							  
                  for($i = 0; $i < 5 ; $i++){
                    echo "Debit_".$i." = $(\"#Debit_".$i."\").val();";
                  }
                  
                  for($i = 0; $i < 5 ; $i++){
                    echo "$(\"#Debit_N".$i."\").val('');";
                  }

                  foreach ($dataD as $key => $value) {
                    echo $value." = $(\"#".$value."\").val();";
                  }             


                  foreach ($dataD as $key => $value) {
                    echo  "$(\"#".$value."\").change(function(){
                                ".$value." = $(\"#".$value."\").val();
                                Debit_graphe1();
                                capturer2('bardate2');
                              });";
                }


  								foreach ($dataD as $key => $value) {
  									echo 	"$(\"#".$value."\").change(function(){
					              				".$value." = $(\"#".$value."\").val();
					              				Debit_graphe2();
                                capturer2('bardate2');
					              			});";
								}
                
                tracer_graphe2($datasets, init_bardate($Debits2, "_"));


  							}else{
  								for($i = 0; $i < 5 ; $i++){
	                        		echo	"$(\"#Debit_".$i."\").change(function (event) {";
			                        echo    	"Debit_".$i." = $('#Debit_".$i."').val();";
			                        echo    	"Debit_graphe2();
                                         capturer2('bardate2');";
			                        echo 	"});";
  								}
  	                        	for($i = 0; $i < 5 ; $i++){
  	                        		echo	"$(\"#Debit_N".$i."\").change(function (event) {";
  			                        echo    	"Debit_N".$i." = $('#Debit_N".$i."').val();";
  			                        echo    	"Debit_graphe2();
                                           capturer2('bardate2');"	;
  			                        echo 	"});";


                              if($i == 4){
                                echo  "$(\"#Debit_N".$i."\").change(function (event) {";
                                echo      "Debit_N".$i." = $('#Debit_N".$i."').val();";
                                echo      "Debit_graphe2();
                                          capturer2('bardate2');"  ;
                                echo  "});";
                              }
  								}
    								echo initialiser(init_bardate($Debits2, "_"));
    							  echo tracer_graphe1(init_bardate($Debits2, "_"));
  							}
  	
              ?>

            function capturer2(img){
                  setTimeout(function() {
                        capture(img);
                  }, 800);;
            }
