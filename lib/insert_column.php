<?php
		
		require '../cnx.php';

			

	/*
		$q = $bdd->query("SELECT * FROM donnemedicale");
		print_r($q->fetch(PDO::FETCH_ASSOC));
		for($i = 4; $i < 44; $i++ ){
			 $bdd->exec("ALTER TABLE `donnemedicale` ADD `Debit_".($i+1)."` VARCHAR(10) AFTER `Debit_".$i."`");
		}

		foreach (array_keys($_POST) as $value) {
			echo $value."<br/>";
			$bdd->exec("ALTER TABLE `donnemedicale` ADD `rest` VARCHAR(100) AFTER `Horaire4`;") or die(print_r($bdd->errorInfo()));
		}
*/
/*		foreach (array_keys($_POST) as $value) {
			echo "\$".$value." = (\$_POST[\"".$value."\"]) ? \$_POST[\"".$value."\"] : \"\" ; <br/>";
		}
*/

		echo "\$bdd->exec(\"INSERT INTO donnemedicale(";

		foreach (array_keys($_POST) as $value) {
			echo $value.", ";
		}

		for($i = 5; $i < 85; $i++){
			echo "Horaire".$i.", ";
		}

		for($i = 5; $i < 85; $i++){
			echo "Horaire_".$i.", ";
		}


		for($i = 5; $i < 45; $i++){
			echo "Debit".$i.", ";
		}

		for($i = 5; $i < 45; $i++){
			echo "Debit_".$i.", ";
		}

		echo ") VALUES (";
		
		foreach (array_keys($_POST) as $value) {
			echo "'\" . \$".$value.".\"', ";
		}

		for($i = 5; $i < 85; $i++){
			echo "'\" .\$Horaire".$i.". \"', ";
		}

		for($i = 5; $i < 85; $i++){
			echo "'\". \$Horaire_".$i.". \"', ";
		}


		for($i = 5; $i < 45; $i++){
			echo "'\". \$Debit".$i.". \"', ";
		}

		for($i = 5; $i < 45; $i++){
			echo "'\".\$Debit_".$i.". \"', ";
		}

		echo ")\"";


	//	echo "column ajouter avec success ! ";

?>