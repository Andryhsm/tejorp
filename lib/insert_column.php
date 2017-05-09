<?php
		
		require '../cnx.php';

		$data1 = $_POST["data1"];
		$data2 = $_POST["data2"];

		$tab_debit = json_decode($data1);
		$tab_horaire = json_decode($data2);
/*
		$q = $bdd->query("SELECT * FROM donnemedicale");
		print_r($q->fetch(PDO::FETCH_ASSOC));
*/

		foreach ($tab_horaire as $key => $val) {
			$bdd->exec("ALTER TABLE donnemedicale ADD COLUMN "+$val+" VARCHAR(20)");
		}
		foreach ($tab_debit as $key => $val) {
			$bdd->exec("ALTER TABLE donnemedicale ADD COLUMN "+$val+" VARCHAR(20)");
		}
	
		echo "column ajouter avec success ! ";

?>