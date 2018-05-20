<?php
	require 'conexion.php';

	$id = $_GET['id'];

	$sql = "SELECT * FROM archivos WHERE id = '$id'";
	$resultado = $mysqli->query($sql);
	$row = $resultado->fetch_array(MYSQLI_ASSOC);

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
				<h3 style="text-align:center">MODIFICAR REGISTRO</h3>
			</div>

			<form class="form-horizontal" method="POST" action="update.php" autocomplete="off" enctype="multipart/form-data">
			
				<div class="form-group">
					<label for="estado_civil" class="col-sm-2 control-label">Categoria</label>
					<div class="col-sm-10">
						<select class="form-control" id="op" name="op">
							<option value="Videojuego" <?php if($row['categoria']=='Videojuego') echo 'selected'; ?>>Videojuego</option>
							<option value="Pelicula" <?php if($row['categoria']=='Pelicula') echo 'selected'; ?>>Pelicula</option>
							<option value="Serie"<?php if($row['categoria']=='Serie') echo 'selected'; ?>>Serie</option>
						</select>
					</div>
				</div>
				
				<div class="form-group">
					<label for="nombre" class="col-sm-2 control-label">Nombre</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre" value="<?php echo $row['nombre']; ?>" required>
					</div>
				</div>

				<div class="form-group">
					<label for="nombre" class="col-sm-2 control-label">Precio $</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="precio" name="precio" placeholder="Precio" value="<?php echo $row['precio']; ?>" required>
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
					<label for="telefono" class="col-sm-2 control-label">Descripcion</label>
					<div class="col-sm-10">
						<textarea class="form-control" id="url" name="url" placeholder="Descripcion"><?php echo $row['url'];?></textarea>
					</div>
				</div>		

				<div class="form-group">
					<label for="telefono" class="col-sm-2 control-label">Video</label>
					<div class="col-sm-10">
						<textarea class="form-control" id="video" name="video" placeholder="Video"><?php echo $row['video'];?></textarea>
					</div>
				</div>			
			
				<div class="form-group">
					<label for="intereses" class="col-sm-2 control-label">Genero(s)</label>
					
					<div class="col-sm-10">
						<label class="checkbox-inline">
							<input type="checkbox" id="genero[]" name="genero[]" value="Acción." <?php if(strpos($row['genero'], "Acción.")!== false) echo 'checked'; ?>>Acción
						</label>
						<label class="checkbox-inline">
							<input type="checkbox" id="genero[]" name="genero[]" value="Lucha." <?php if(strpos($row['genero'], "Lucha.")!== false) echo 'checked'; ?>> Lucha
						</label>
						<label class="checkbox-inline">
							<input type="checkbox" id="genero[]" name="genero[]" value="Beat 'em up." <?php if(strpos($row['genero'], "Beat. 'em up")!== false) echo 'checked'; ?>> Beat 'em up
						</label>
						<label class="checkbox-inline">
							<input type="checkbox" id="genero[]" name="genero[]" value="Arcade." <?php if(strpos($row['genero'], "Arcade.")!== false) echo 'checked'; ?>> Arcade
						</label>
						<label class="checkbox-inline">
							<input type="checkbox" id="genero[]" name="genero[]" value="Plataformas." <?php if(strpos($row['genero'], "Plataformas.")!== false) echo 'checked'; ?>> Plataformas
						</label>
						<label class="checkbox-inline">
							<input type="checkbox" id="genero[]" name="genero[]" value="Disparos." <?php if(strpos($row['genero'], "Disparos.")!== false) echo 'checked'; ?>> Disparos
						</label>
						<label class="checkbox-inline">
							<input type="checkbox" id="genero[]" name="genero[]" value="Simulación." <?php if(strpos($row['genero'], "Simulacion.")!== false) echo 'checked'; ?>> Simulación
						</label>
						<label class="checkbox-inline">
							<input type="checkbox" id="genero[]" name="genero[]" value="Deporte." <?php if(strpos($row['genero'], "Deporte.")!== false) echo 'checked'; ?>> Deporte
						</label>
						<label class="checkbox-inline">
							<input type="checkbox" id="genero[]" name="genero[]" value="Carreras." <?php if(strpos($row['genero'], "Carreras.")!== false) echo 'checked'; ?>> Carreras
						</label>
						<label class="checkbox-inline">
							<input type="checkbox" id="genero[]" name="genero[]" value="Aventura." <?php if(strpos($row['genero'], "Aventura.")!== false) echo 'checked'; ?>> Aventura
						</label>
						<label class="checkbox-inline">
							<input type="checkbox" id="genero[]" name="genero[]" value="Rol." <?php if(strpos($row['genero'], "Rol.")!== false) echo 'checked'; ?>> Rol
						</label>
						<label class="checkbox-inline">
							<input type="checkbox" id="genero[]" name="genero[]" value="Musical." <?php if(strpos($row['genero'], "Musical.")!== false) echo 'checked'; ?>> Musical
						</label>
					</div>
				</div>
				
				<div class="form-group">
					<label for="telefono" class="col-sm-2 control-label">Fecha de lanzamiento</label>
					<div class="col-sm-10">
						<input type="date" class="form-control" id="fecha" name="fecha"  value="<?php echo $row['fecha']; ?>" >
					</div>
				</div>
				
				<?php
				if($row['categoria']=='Videojuego'){
					?>
									<div class="form-group">
					<label for="telefono" class="col-sm-2 control-label">Plataforma(s)</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="pla" name="pla" value="<?php echo $row['plataforma']; ?>"> 
					</div>
				</div>
				
				<div class="form-group">
					<label for="telefono" class="col-sm-2 control-label">Dessarrollador(es)</label>
					<div class="col-sm-10">
						<input type="tel" class="form-control" id="des" name="des" placeholder="Desarrollador(es)" value="<?php echo $row['desarrolladores']; ?>">
					</div>
				</div>
				
				<div class="form-group">
					<label for="telefono" class="col-sm-2 control-label"></label>
					<div class="col-sm-10">
						<label>Requisitos Minimos:</label>
					</div>
				</div>
				
				<div class="form-group">
					<label for="telefono" class="col-sm-2 control-label">Sistema Operativo(s)</label>
					<div class="col-sm-10">
						<input type="tel" class="form-control" id="sistema" name="sistema" placeholder="Sistema Operativo(s)" value="<?php echo $row['so']; ?>">
					</div>
				</div>
				<div class="form-group">
					<label for="telefono" class="col-sm-2 control-label">Procesador</label>
					<div class="col-sm-10">
						<input type="tel" class="form-control" id="procesador" name="procesador" placeholder="Procesador" value="<?php echo $row['procesador']; ?>">
					</div>
				</div>
				<div class="form-group">
					<label for="telefono" class="col-sm-2 control-label">Memoria RAM</label>
					<div class="col-sm-10">
						<input type="tel" class="form-control" id="ram" name="ram" placeholder="Memoria RAM" value="<?php echo $row['ram']; ?>">
					</div>
				</div>
				<div class="form-group">
					<label for="telefono" class="col-sm-2 control-label">Graficos</label>
					<div class="col-sm-10">
						<input type="tel" class="form-control" id="graficos" name="graficos" placeholder="Graficos" value="<?php echo $row['graficos']; ?>">
					</div>
				</div>
				<div class="form-group">
					<label for="telefono" class="col-sm-2 control-label">DirectX</label>
					<div class="col-sm-10">
						<input type="tel" class="form-control" id="dire" name="dire" placeholder="DirectX" value="<?php echo $row['direct']; ?>">
					</div>
				</div>
				<div class="form-group">
					<label for="telefono" class="col-sm-2 control-label">RED</label>
					<div class="col-sm-10">
						<input type="tel" class="form-control" id="red" name="red" placeholder="RED" value="<?php echo $row['red']; ?>">
					</div>
				</div>
				<div class="form-group">
					<label for="telefono" class="col-sm-2 control-label">Almacenamiento</label>
					<div class="col-sm-10">
						<input type="tel" class="form-control" id="almacen" name="almacen" placeholder="Almacenamiento" value="<?php echo $row['almacenamiento']; ?>">
					</div>
				</div>
					<?php
				}else if($row['categoria']=='Pelicula' or $row['categoria']=='Serie'){
					?>
						<div class="form-group">
							<label for="telefono" class="col-sm-2 control-label">Director</label>
							<div class="col-sm-10">
								<input type="tel" class="form-control" id="director" name="director" placeholder="Director" value="<?php echo $row['director']; ?>">
							</div>
						</div>

						<div class="form-group">
							<label for="telefono" class="col-sm-2 control-label">Actores</label>
							<div class="col-sm-10">
								<textarea class="form-control" id="actores" name="actores" placeholder="Actores"><?php echo $row['actores'];?></textarea>
							</div>
						</div>

						<div class="form-group">
							<label for="telefono" class="col-sm-2 control-label">Idioma Original</label>
							<div class="col-sm-10">
								<input type="tel" class="form-control" id="idioma" name="idioma" placeholder="Idioma Original" value="<?php echo $row['idioma']; ?>">
							</div>
						</div>

						<div class="form-group">
							<label for="telefono" class="col-sm-2 control-label">Ejecutivos</label>
							<div class="col-sm-10">
								<textarea class="form-control" id="ejecutivos" name="ejecutivos" placeholder="Ejecutivos"><?php echo $row['ejecutivos'];?></textarea>
							</div>
						</div>	

						<div class="form-group">
							<label for="telefono" class="col-sm-2 control-label">Cinematografia</label>
							<div class="col-sm-10">
								<textarea class="form-control" id="cinematografia" name="cinematografia" placeholder="Cinematografia"><?php echo $row['cinematografia'];?></textarea>
							</div>
						</div>

					<?php
				}
				?>
				
			
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
