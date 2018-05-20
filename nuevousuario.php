<?php

	require 'conexion.php';
	$us = $_POST['usuario'];
	$nombre = $_POST['nombre'];
	$ape = $_POST['apellidos'];
	$nombre = $_POST['nombre'];
	$co = $_POST['correo'];
	$con = $_POST['contra'];
	////////////////////////////////////////////////////////////
	$naI=$_FILES['imgp']['name'];
	$destinoI=$_SERVER['DOCUMENT_ROOT']."/lol/archivos/usuarios/";
	move_uploaded_file($_FILES['imgp']['tmp_name'], $destinoI.$naI);
	$img="archivos/usuarios/".$naI;
	////////////////////////////////////////////////////////


	$sql = "INSERT INTO usuarios (usuario, nombre, apellidos, correo, contrasena, img) VALUES ('$us','$nombre','$ape','$co','$con','$img')";
	$resultado = $mysqli->query($sql);

?>

<html lang="es">
	<head>
		<title>Guardar</title>
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
						<h3>USUARIO REGISTRADO</h3>
						
						<?php } else { ?>
						<h3>ERROR AL GUARDAR</h3>
					<?php } ?>

					<a href="login.php" class="btn btn-primary">Regresar</a>

				</div>
			</div>
		</div>
	</body>
