<?php
session_start(); 
session_destroy();

//Suppression des fichiers
 $image1 = "img/image".$id_."bardate1.png"; 
  	if(file_exists($image1))
  		unlink($image1);
 $image2 = "img/image".$id_."bardate2.png"; 
  	if(file_exists($image2))
  		unlink($image2);
 $image3 = "img/image".$id_."barhg.png"; 
  	if(file_exists($image3))
  		unlink($image3);
 $image4 = "img/image".$id_."bar.png"; 
  	if(file_exists($image4))
  		unlink($image4);
 
header ('Location: index.html');
