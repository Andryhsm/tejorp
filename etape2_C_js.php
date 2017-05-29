<?php
	
	header("Content-Type: text/javascript");
	require "cnx.php";
	session_start();
	$idPatient = $_SESSION["idPatient"];
	$idPrescripteur = $_SESSION["id"];

	$query = $bdd->query("SELECT * FROM `donnemedicale` WHERE idPatient=\"".$idPatient."\" AND idPrescripteur=\"".$idPrescripteur."\"") or die (print_r($bdd->errorInfo()));

	echo "jQuery(document).ready(function($) {";
	while($data = $query->fetchAll(PDO::FETCH_ASSOC)){
		foreach ($data as $key2 => $value2) {
			foreach ($value2 as $key3 => $value3) {
					echo "$(\"input[name='".$key3."']\").val(\"".utf8_decode($value3)."\");\n";			
			}
		}
	}

  
?>
	
   // Debit_grapheHG();
    
    });
	
	
