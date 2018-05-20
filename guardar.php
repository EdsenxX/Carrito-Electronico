<?php

	require 'conexion.php';
	$categoria = $_POST['op'];
	$nombre = $_POST['nombre'];
	$precio = $_POST['precio'];
	////////////////////////////////////////////////////////////
	$naI=$_FILES['imagen']['name'];
	$destinoI=$_SERVER['DOCUMENT_ROOT']."/Serrano Corp/archivos/$categoria/";
	move_uploaded_file($_FILES['imagen']['tmp_name'], $destinoI.$naI);
	$img="archivos/$categoria/".$naI;
	////////////////////////////////////////////////////////
	$video = $_POST['video'];
	////////////////////////////////////////////////////////
	$url= $_POST['url'];


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
	
	$fecha = $_POST['fecha'];
	$des = $_POST['des'];
	$so = $_POST['sistema'];
	$pro = $_POST['procesador'];
	$ram = $_POST['ram'];
	$gra = $_POST['graficos'];
	$dire = $_POST['dire'];
	$red = $_POST['red'];
	$almacen = $_POST['almacen'];
	$pla = $_POST['pla'];

	$sql = "INSERT INTO archivos (nombre, precio, imagen, video, url, categoria, genero, fecha, desarrolladores, so, procesador, ram, graficos, direct, red, almacenamiento, plataforma) VALUES ('$nombre', $precio, '$img','$video','$url','$categoria', '$arrayIntereses','$fecha','$des','$so','$pro','$ram','$gra','$dire','$red', '$almacen','$pla')";
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
						<h3>REGISTRO GUARDADO</h3>
						
						<?php } else { ?>
						<h3>ERROR AL GUARDAR</h3>
					<?php } ?>

					<a href="subir.php" class="btn btn-primary">Regresar</a>

				</div>
			</div>
		</div>
	</body>
</html>
