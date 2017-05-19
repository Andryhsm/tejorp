<?php
	
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
					  echo  "<tr>
	                            <td><input type='text' class='form-control datetimepicker' name='Horaire".$plus."".$inc_h."' id='Horaire".$plus."".$inc_h."'></td>
	                            <td><input type='text' name='Horaire".$plus."".($inc_h + 1)."' id='Horaire".$plus."".($inc_h + 1)."' class='form-control datetimepicker' ></td>                            
	                            <td><input type='number' class='form-control' name='Debit".$plus."".$val."' id='Debit".$plus."".$val."'></td>
	                            <td><input type='text' class='form-control datetimepicker' name='Horaire".$plus."".($inc_h + 2)."' id='Horaire".$plus."".($inc_h + 2)."'></td>
	                            <td><input type='text' name='Horaire".$plus."".($inc_h + 3)."' id='Horaire".$plus."".($inc_h + 3)."'class='form-control datetimepicker' ></td>
	                            <td><input type='number' class='form-control' name='Debit".$plus."".($val + 1)."' id='Debit".$plus."".($val + 1)."'></td>
	                            <td><input type='text' class='form-control datetimepicker' name='Horaire".$plus."".($inc_h + 4)."' id='Horaire".$plus."".($inc_h + 4)."'></td>
	                            <td><input type='text' name='Horaire".$plus."".($inc_h + 5)."' id='Horaire".$plus."".($inc_h + 5)."'class='form-control datetimepicker' ></td>
	                            <td><input type='number' class='form-control' name='Debit".$plus."".($val + 2)."' id='Debit".$plus."".($val + 2)."'></td>
	                            <td><input type='text' class='form-control datetimepicker' name='Horaire".$plus."".($inc_h + 6)."' id='Horaire".$plus."".($inc_h + 6)."'></td>
	                            <td><input type='text' name='Horaire".$plus."".($inc_h + 7)."' id='Horaire".$plus."".($inc_h + 7)."' class='form-control datetimepicker'></td>
	                            <td><input type='number' class='form-control' name='Debit".$plus."".($val + 3)."' id='Debit".$plus."".($val + 3)."'></td>
	                        </tr>";
					$deb += 4 ;
					$limit += 4;
					$inc_h += 8;
					$val += 4;
				}
			}
		}
	}
?>
	
     
	
	
