<?php

	require 'conexion.php';

	$id = $_POST['id'];
	$nombre = $_POST['nombre'];
	$precio = $_POST['precio'];
	$categoria = $_POST['op'];
	$url = $_POST['url'];
	$fecha = $_POST['fecha'];
	if($categoria == 'Videojuego'){
		$pla = $_POST['pla'];
		$des = $_POST['des'];
		$so = $_POST['sistema'];
		$pro = $_POST['procesador'];
		$ram = $_POST['ram'];
		$gra = $_POST['graficos'];
		$dire = $_POST['dire'];
		$red = $_POST['red'];
		$almacen = $_POST['almacen'];
	}
	$video = $_POST['video'];
	
	$genero = isset($_POST['genero']) ? $_POST['genero'] : null;
	$arrayIntereses = null;
	$num_array = count($genero);
	$contador = 0;
	if($num_array>0){
		foreach ($genero as $key => $value) {
			if ($contador != $num_array-1)
			$arrayIntereses .= $value.' ';
			else
			$arrayIntereses .= $value;
			$contador++;
			}
	}

	$sql = "UPDATE 'archivos' SET 'genero'=$arrayIntereses WHERE 'id'=$id" or die ("<br><br>error Genero");


	if ($categoria<> "") {
		
		 $sql = "UPDATE `archivos` SET `categoria`='$categoria' WHERE `id`= $id"or die("erro1");
		
	$resultado = $mysqli->query($sql);
	}
	if ($nombre<> "") {
		
		$sql = "UPDATE `archivos` SET `nombre`='$nombre' WHERE `id`= $id" or die("erro2");
		
	$resultado = $mysqli->query($sql);
	}

	if ($precio<> "") {
		
		$sql = "UPDATE `archivos` SET `precio`='$precio' WHERE `id`= $id" or die("erro2");
		
	$resultado = $mysqli->query($sql);
	}

	if ($url<> "") {
		
		 $sql = "UPDATE `archivos` SET `url`='$url' WHERE `id`= $id" or die("erro6");
		
	$resultado = $mysqli->query($sql);
	}
	///////////////////////////////////////////////////////////////
	$naI=$_FILES['imagen']['name'];
	if ($naI<>"") {
		$destinoI=$_SERVER['DOCUMENT_ROOT']."/lol/archivos/$categoria/";
		move_uploaded_file($_FILES['imagen']['tmp_name'], $destinoI.$naI);
		$img="archivos/$categoria/".$naI;
		$sql = "UPDATE `archivos` SET `imagen`='$img' WHERE `id`='$id'"or die("<br><br>la actualisasion imagen no se pudo");

	$resultado = $mysqli->query($sql);
	}
	//////////////////////////////////////////////////////
	if ($video<>"") {
		
		$sql = "UPDATE `archivos` SET `video`='$video' WHERE `id`='$id'"or die("Error en el video");

	$resultado = $mysqli->query($sql);
	}	
	if ($fecha<> "") {
		
		 $sql = "UPDATE `archivos` SET `fecha`='$fecha' WHERE `id`= $id" or die("erro6");
		
	$resultado = $mysqli->query($sql);
	}
	
	if($categoria=='Videojuego'){
		if ($pla<> "") {
		
			$sql = "UPDATE `archivos` SET `plataforma`='$pla' WHERE `id`= $id" or die("erro6");
		   
	   $resultado = $mysqli->query($sql);
	   }
	   if ($des<> "") {
		   
			$sql = "UPDATE `archivos` SET `desarrolladores`='$des' WHERE `id`= $id" or die("erro6");
		   
	   $resultado = $mysqli->query($sql);
	   }
	   
	   if ($so<> "") {
		   
			$sql = "UPDATE `archivos` SET `so`='$so' WHERE `id`= $id" or die("erro6");
		   
	   $resultado = $mysqli->query($sql);
	   }
	   if ($pro<> "") {
		   
			$sql = "UPDATE `archivos` SET `procesador`='$pro' WHERE `id`= $id" or die("erro6");
		   
	   $resultado = $mysqli->query($sql);
	   }
	   if ($ram<> "") {
		   
			$sql = "UPDATE `archivos` SET `ram`='$ram' WHERE `id`= $id" or die("erro6");
		   
	   $resultado = $mysqli->query($sql);
	   }
	   if ($gra<> "") {
		   
			$sql = "UPDATE `archivos` SET `graficos`='$gra' WHERE `id`= $id" or die("erro6");
		   
	   $resultado = $mysqli->query($sql);
	   }
	   if ($dire<> "") {
		   
			$sql = "UPDATE `archivos` SET `direct`='$dire' WHERE `id`= $id" or die("erro6");
		   
	   $resultado = $mysqli->query($sql);
	   }
	   if ($red<> "") {
		   
			$sql = "UPDATE `archivos` SET `red`='$red' WHERE `id`= $id" or die("erro6");
		   
	   $resultado = $mysqli->query($sql);
	   }
	   if ($almacen<> "") {
		   
			$sql = "UPDATE `archivos` SET `almacenamiento`='$almacen' WHERE `id`= $id" or die("erro6");
		   
	   $resultado = $mysqli->query($sql);
	   }
	}

	////////////////////////////////////////////
?>

<html lang="es">
	<head>
		<title>Modificar</title>
		<link rel="shortcut icon" href="imagenes/Gamepad.ico">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/bootstrap-theme.css" rel="stylesheet">
		<script src="js/jquery-3.1.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</head>

	<body>
		<div class="container">
			<div class="row">
				<div class="row" style="text-align:center">
				<?php if($resultado) { ?>
				<h3>REGISTRO MODIFICADO</h3>
				<?php } else { ?>
				<h3>ERROR AL MODIFICAR</h3>
				<?php } ?>

				<a href="subir.php" class="btn btn-primary">Regresar</a>

				</div>
			</div>
		</div>
	</body>
</html>
