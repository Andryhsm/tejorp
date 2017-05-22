<?php
	
	header("Content-Type: text/javascript");
	require "cnx.php";

	$query = $bdd->query("SELECT * FROM `donnemedicale`") or die (print_r($bdd->errorInfo()));

	echo "jQuery(document).ready(function($) {";
	
	while($data = $query->fetchAll(PDO::FETCH_ASSOC)){
		foreach ($data as $key2 => $value2) {
			foreach ($value2 as $key3 => $value3) {
					echo "$(\"input[name='".$key3."']\").val(\"".$value3."\");\n";			
			}
		}
	}

  
?>
	
   // Debit_grapheHG();
    
    });
	
	
