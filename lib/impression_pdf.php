<?php

	foreach (array_keys($_POST) as $value) {
		echo "\$".$value." = (isset(\$_POST[\"".$value."\"])) ? \$_POST[\"".$value."\"] : \"\"; <br/>";
	}
?>