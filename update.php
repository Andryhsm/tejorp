<?php
	

	
	
	foreach (array_keys($_POST) as $value) {
		    echo "\$".$value.", ";
	}

	for ($i = 5; $i < 85; $i++) {
	//    eval("\$Horaire" . $i . " = (isset(\$_POST[\"Horaire" . $i . "\"])) ? utf8_decode(htmlentities(\$_POST[\"Horaire" . $i . "\"], ENT_NOQUOTES,\"UTF-8\", true)) : \"\";");
		echo "Horaire".$i." = \$Horaire".$i.", ";
	}
	for ($i = 5; $i < 85; $i++) {
	//    eval("\$Horaire_" . $i . " = (isset(\$_POST[\"Horaire_" . $i . "\"])) ? utf8_decode(htmlentities(\$_POST[\"Horaire_" . $i . "\"], ENT_NOQUOTES,\"UTF-8\", true)) : \"\";");
		echo "Horaire_".$i." = \$Horaire_".$i.", ";
	}
	for ($i = 5; $i < 45; $i++) {
	//    eval("\$Debit" . $i . " = (isset(\$_POST[\"Debit" . $i . "\"])) ? utf8_decode(htmlentities(\$_POST[\"Debit" . $i . "\"], ENT_NOQUOTES,\"UTF-8\", true)) : \"\";");
		echo "Debit".$i." = \$Debit".$i.", ";
	}
	for ($i = 5; $i < 45; $i++) {
	//    eval("\$Debit_" . $i . " = (isset(\$_POST[\"Debit_" . $i . "\"])) ? utf8_decode(htmlentities(\$_POST[\"Debit_" . $i . "\"], ENT_NOQUOTES,\"UTF-8\", true)) : \"\";");
		echo "Debit_".$i." = \$Debit_".$i.", ";
	}

		

	echo ")";
?>