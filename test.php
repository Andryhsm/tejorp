<?php
	header('Content-Type: text/javascript');	
	require "cnx.php";

	
	$query = $bdd->query("SELECT * FROM `donnemedicale`") or die (print_r($bdd->errorInfo()));

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

	function print_data($data, $plus = ""){

		$deb = 5;
		$limit = 4;
		$inc_h = 5;
		
		foreach ($data as $key => $value) {
			$k = preg_filter('#Debit'.$plus.'#', '', $value);
			if(($val = intval($k)) > $limit){
				if($val == $deb){
					for($h = 0; $h < 5; $h++){
					  	echo "Debit".($val + $h)." = ($('#Debit".($val + $h)."').val('') != \"\") ? $('#Debit".($val + $h)."').val('') : 0;\n";
					}
					$deb += 4 ;
					$limit += 4;
					$val += 4;
				}
			}
		}
	}

	print_data($Debits2, "_");
?>
	
     
	
	
