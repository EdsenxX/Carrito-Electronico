<?php
	
	$mysqli = new mysqli('localhost', 'root', '', 'serranocorp');
	
	if($mysqli->connect_error){
		
		die('Error en la conexion' . $mysqli->connect_error);
		
	}
?>