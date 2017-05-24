<?php
    
    require "cnx.php";

    print_r($_POST);

    foreach (array_keys($_POST) as $key => $value) {
        echo $key." = ". $value. "\n";
      }  
?>