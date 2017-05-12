<?php
	
	require "cnx.php";

	for($i = 2; $i < 85; $i++){
		$bdd->exec("ALTER TABLE `donnemedicale` ADD COLUMN glycemie".$i." VARCHAR(100) AFTER glycemie".($i - 1)."") or die(print_r($bdd->errorInfo()));
	}

	echo "Ajout de notre colonne avec succes ! ";	
?>