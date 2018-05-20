<?php
	require 'conexion.php';

	$id = $_GET['id'];

	$sql = "SELECT * FROM usuarios WHERE id = '$id'";
	$resultado = $mysqli->query($sql);
	$row = $resultado->fetch_array(MYSQLI_ASSOC);

?>
<html lang="es">
	<head>
		<title>Modificar Usuario </title>
		<link rel="shortcut icon" href="imagenes/Gamepad.ico">
		<meta name="viewport" content="width=device-width, initial-scale=1" charset="utf-8">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/bootstrap-theme.css" rel="stylesheet">
		<script src="js/jquery-3.1.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</head>

	<body>
		<div class="container">
			<div class="row">
				<h3 style="text-align:center">MODIFICAR USUARIO: <?php echo $row['usuario'] ?></h3>
			</div>

			<form class="form-horizontal" method="POST" action="updateus.php" autocomplete="off" enctype="multipart/form-data">
				<div class="form-group">
					<label for="nombre" class="col-sm-2 control-label">Nombre</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre" value="<?php echo $row['nombre']; ?>" required>
					</div>
				</div>
				<div class="form-group">
					<label for="nombre" class="col-sm-2 control-label">Apellidos</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="ape" name="ape" placeholder="Apellidos" value="<?php echo $row['apellidos']; ?>" required>
					</div>
				</div>
				<div class="form-group">
					<label for="nombre" class="col-sm-2 control-label">Correo</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="co" name="co" placeholder="Correo" value="<?php echo $row['correo']; ?>" required>
					</div>
				</div>
				<div class="form-group">
					<label for="nombre" class="col-sm-2 control-label">Contraseña</label>
					<div class="col-sm-10">
					<input type="password" class="form-control" id="con" name="con" placeholder="Contraseña" value="<?php echo $row['contrasena']; ?>" required>
					</div>
				</div>

				<input type="hidden" id="id" name="id" value="<?php echo $row['id']; ?>" />

				<div class="form-group">
					<label for="telefono" class="col-sm-2 control-label">Imagen</label>
					<div class="col-sm-10">
						<input type="file" class="form-control" id="imagen" name="imagen">
					</div>
				</div>	
				
				<div class="form-group">
					<label for="hijos" class="col-sm-2 control-label">Bloqueado</label>
					
					<div class="col-sm-10">
						<label class="radio-inline">
							<input type="radio" id="blo" name="blo" value="1" <?php if($row['bloqueado']=='1') echo 'checked'; ?>> SI
						</label>
						<label class="radio-inline">
							<input type="radio" id="blo" name="blo" value="0" <?php if($row['bloqueado']=='0') echo 'checked'; ?>> NO
						</label>
					</div>
				</div>
				<div class="form-group">
					<label for="hijos" class="col-sm-2 control-label">Administrador</label>
					
					<div class="col-sm-10">
						<label class="radio-inline">
							<input type="radio" id="admin" name="admin" value="1" <?php if($row['admin']=='1') echo 'checked'; ?>> SI
						</label>
						<label class="radio-inline">
							<input type="radio" id="admin" name="admin" value="0" <?php if($row['admin']=='0') echo 'checked'; ?>> NO
						</label>
					</div>
				</div>
			
				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						<a href="subir.php" class="btn btn-default">Regresar</a>
						<button type="submit" class="btn btn-primary">Guardar</button>
					</div>
				</div>
			</form>
		</div>
	</body>
</html>
