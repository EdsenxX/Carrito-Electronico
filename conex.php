<?php
 	$host="localhost";
 	$user="root";
 	$pw="";
 	$bd="serranocorp";
 	
 	$con=mysqli_connect($host,$user,$pw,$bd) or die("problemas en la conexion");
	$mosAZ=mysqli_query($con,"SELECT * FROM `archivos` ORDER BY rand()")or die("problemas al extrar datos conex.php:8");
	$rowAZ= $mosAZ->fetch_assoc();

?> 
