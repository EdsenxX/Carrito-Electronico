<?php

	require 'conexion.php';

	$id = $_POST['id'];
	$nombre = $_POST['nombre'];
	$ape = $_POST['ape'];
	$co = $_POST['co'];
	$con = $_POST['con'];
	$blo = isset($_POST['blo']) ? $_POST['blo'] : 0;
	$admin = isset($_POST['admin']) ? $_POST['admin'] : 0;

	if ($nombre<> "") {
		
		$sql = "UPDATE `usuarios` SET `nombre`='$nombre' WHERE `id`= $id" or die("erro2");
		
	$resultado = $mysqli->query($sql);
	}
	if ($ape<> "") {
		
		 $sql = "UPDATE `usuarios` SET `apellidos`='$ape' WHERE `id`= $id" or die("erro6");
		
	$resultado = $mysqli->query($sql);
	}
	if ($co<> "") {
		
		 $sql = "UPDATE `usuarios` SET `correo`='$co' WHERE `id`= $id" or die("erro6");
		
	$resultado = $mysqli->query($sql);
	}
	if ($con<> "") {
		
		 $sql = "UPDATE `usuarios` SET `contrasena`='$con' WHERE `id`= $id" or die("erro6");
		
	$resultado = $mysqli->query($sql);
	}
	if ($blo<> "") {
		
		 $sql = "UPDATE `usuarios` SET `bloqueado`='$blo' WHERE `id`= $id" or die("erro6");
		
	$resultado = $mysqli->query($sql);
	}
	if ($admin<> "") {
		
		 $sql = "UPDATE `usuarios` SET `admin`='$admin' WHERE `id`= $id" or die("erro6");
		
	$resultado = $mysqli->query($sql);
	}
	///////////////////////////////////////////////////////////////
	$naI=$_FILES['imagen']['name'];
	if ($naI<>"") {
		$destinoI=$_SERVER['DOCUMENT_ROOT']."/lol/archivos/usuarios/";
		move_uploaded_file($_FILES['imagen']['tmp_name'], $destinoI.$naI);
		$img="archivos/usuarios/".$naI;
		$sql = "UPDATE `usuarios` SET `img`='$img' WHERE `id`='$id'"or die("<br><br>la actualisasion imagen no se pudo");

	$resultado = $mysqli->query($sql);
	}
	//////////////////////////////////////////////////////
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

				<a href="usuarios.php" class="btn btn-primary">Regresar</a>

				</div>
			</div>
		</div>
	</body>
</html>
