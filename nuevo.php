<html lang="es">
	<head>
		<title>Nuevo</title>
		<link rel="shortcut icon" href="imagenes/Gamepad.ico">
		<meta name="viewport" content="width=device-width, initial-scale=1" charset="utf-8">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/bootstrap-theme.css" rel="stylesheet">
		<link href="css/bloqueos.css" rel="stylesheet">
		<script src="js/jquery-3.1.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</head>

	<script type="text/javascript">

		function ocultar(){
			document.getElementById("pe").style.display="block";
			document.getElementById("pee").style.display="block";
			document.getElementById("peee").style.display="block";
			document.getElementById("peeee").style.display="block";
			document.getElementById("peeeee").style.display="block";
			document.getElementById("vi").style.display="none";
			document.getElementById("vii").style.display="none";
			document.getElementById("viii").style.display="none";
			document.getElementById("viiii").style.display="none";
			document.getElementById("viiiii").style.display="none";
			document.getElementById("viiiiii").style.display="none";
			document.getElementById("viiiiiii").style.display="none";
			document.getElementById("viiiiiiii").style.display="none";
			document.getElementById("viiiiiiiii").style.display="none";
			document.getElementById("viiiiiiiiii").style.display="none";
		}
		function ocultar2(){
			document.getElementById("pe").style.display="none";
			document.getElementById("pee").style.display="none";
			document.getElementById("peee").style.display="none";
			document.getElementById("peeee").style.display="none";
			document.getElementById("peeeee").style.display="none";
			document.getElementById("vi").style.display="block";
			document.getElementById("vii").style.display="block";
			document.getElementById("viii").style.display="block";
			document.getElementById("viiii").style.display="block";
			document.getElementById("viiiii").style.display="block";
			document.getElementById("viiiiii").style.display="block";
			document.getElementById("viiiiiii").style.display="block";
			document.getElementById("viiiiiiii").style.display="block";
			document.getElementById("viiiiiiiii").style.display="block";
			document.getElementById("viiiiiiiiii").style.display="block";
		}
	</script>

	<body>
		<div class="container">
			<div class="row">
				<h3 style="text-align:center">NUEVO ARCHIVO</h3>
			</div>
			
			<form class="form-horizontal" method="POST" action="guardar.php" autocomplete="off" enctype="multipart/form-data">
			
				<div class="form-group">
					<label for="estado_civil" class="col-sm-2 control-label">Categoria</label>
					<div class="col-sm-10">
						<select class="form-control" id="op" name="op">
							<option value="Videojuego" onclick="ocultar2()" id="xd">Videojuego</option>
							<option value="Pelicula"  onclick="ocultar()">Pelicula</option>
							<option value="Serie"  onclick="ocultar()">Serie</option>
						</select>
					</div>
				</div>
			
				<div class="form-group">
					<label for="nombre" class="col-sm-2 control-label">Nombre</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre" required>
					</div>
				</div>

				<div class="form-group">
					<label for="nombre" class="col-sm-2 control-label">Precio $</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="precio" name="precio" placeholder="Precio" required>
					</div>
				</div>

				<div class="form-group">
					<label for="telefono" class="col-sm-2 control-label">Imagen</label>
					<div class="col-sm-10">
						<input type="file" class="form-control" id="imagen" name="imagen">
					</div>
				</div>

				<!--<div class="form-group">
					<label for="intereses" class="col-sm-2 control-label">Pre-venta</label>
					
					<div class="col-sm-10">
						<label class="checkbox-inline">
							<input type="radio" id="preventa" name="preventa" value="si">Si
						</label>
						<label class="checkbox-inline">
							<input type="radio" id="preventa" name="preventa" value="no"> No
						</label>
					</div>
				</div>-->

				<div class="form-group">
					<label for="telefono" class="col-sm-2 control-label">Descripcion</label>
					<div class="col-sm-10">
						<textarea class="form-control" id="url" name="url" placeholder="Descripcion"></textarea>
					</div>
				</div>

				<div class="form-group">
					<label for="telefono" class="col-sm-2 control-label">Video</label>
					<div class="col-sm-10">
						<textarea class="form-control" id="video" name="video" placeholder="Video"></textarea>
					</div>
				</div>
				
				<div class="form-group">
					<label for="intereses" class="col-sm-2 control-label">Genero(s)</label>
					
					<div class="col-sm-10">
						<label class="checkbox-inline">
							<input type="checkbox" id="genero[]" name="genero[]" value="Acción.">Acción
						</label>
						<label class="checkbox-inline">
							<input type="checkbox" id="genero[]" name="genero[]" value="Lucha."> Lucha
						</label>
						<label class="checkbox-inline">
							<input type="checkbox" id="genero[]" name="genero[]" value="Beat 'em up."> Beat 'em up
						</label>
						<label class="checkbox-inline">
							<input type="checkbox" id="genero[]" name="genero[]" value="Arcade."> Arcade
						</label>
						<label class="checkbox-inline">
							<input type="checkbox" id="genero[]" name="genero[]" value="Plataformas."> Plataformas
						</label>
						<label class="checkbox-inline">
							<input type="checkbox" id="genero[]" name="genero[]" value="Disparos."> Disparos
						</label>
						<label class="checkbox-inline">
							<input type="checkbox" id="genero[]" name="genero[]" value="Simulación."> Simulación
						</label>
						<label class="checkbox-inline">
							<input type="checkbox" id="genero[]" name="genero[]" value="Deporte."> Deporte
						</label>
						<label class="checkbox-inline">
							<input type="checkbox" id="genero[]" name="genero[]" value="Carreras."> Carreras
						</label>
						<label class="checkbox-inline">
							<input type="checkbox" id="genero[]" name="genero[]" value="Aventura."> Aventura
						</label>
						<label class="checkbox-inline">
							<input type="checkbox" id="genero[]" name="genero[]" value="Rol."> Rol
						</label>
						<label class="checkbox-inline">
							<input type="checkbox" id="genero[]" name="genero[]" value="Musical."> Musical
						</label>
					</div>
				</div>
				
				
				<div class="form-group">
					<label for="telefono" class="col-sm-2 control-label">Fecha de lanzamiento</label>
					<div class="col-sm-10">
						<input type="date" class="form-control" id="fecha" name="fecha">
					</div>
				</div>
				
				<div class="form-group" id="vi">
					<label for="telefono" class="col-sm-2 control-label">Plataforma(s)</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="pla" name="pla">
					</div>
				</div>
				
				<div class="form-group" id="vii">
					<label for="telefono" class="col-sm-2 control-label">Dessarrollador(es)</label>
					<div class="col-sm-10">
						<input type="tel" class="form-control" id="des" name="des" placeholder="Desarrollador(es)">
					</div>
				</div>
				
				<div class="form-group" id="viii">
					<label for="telefono" class="col-sm-2 control-label"></label>
					<div class="col-sm-10">
						<label>Requisitos Minimos:</label>
					</div>
				</div>
				
				<div class="form-group" id="viiii">
					<label for="telefono" class="col-sm-2 control-label">Sistema Operativo(s)</label>
					<div class="col-sm-10">
						<input type="tel" class="form-control" id="sistema" name="sistema" placeholder="Sistema Operativo(s)">
					</div>
				</div>
				<div class="form-group" id="viiiii">
					<label for="telefono" class="col-sm-2 control-label">Procesador</label>
					<div class="col-sm-10">
						<input type="tel" class="form-control" id="procesador" name="procesador" placeholder="Procesador">
					</div>
				</div>
				<div class="form-group" id="viiiiii">
					<label for="telefono" class="col-sm-2 control-label">Memoria RAM</label>
					<div class="col-sm-10">
						<input type="tel" class="form-control" id="ram" name="ram" placeholder="Memoria RAM">
					</div>
				</div>
				<div class="form-group" id="viiiiiii">
					<label for="telefono" class="col-sm-2 control-label">Graficos</label>
					<div class="col-sm-10">
						<input type="tel" class="form-control" id="graficos" name="graficos" placeholder="Graficos">
					</div>
				</div>
				<div class="form-group" id="viiiiiiii">
					<label for="telefono" class="col-sm-2 control-label">DirectX</label>
					<div class="col-sm-10">
						<input type="tel" class="form-control" id="dire" name="dire" placeholder="DirectX">
					</div>
				</div>
				<div class="form-group" id="viiiiiiiii">
					<label for="telefono" class="col-sm-2 control-label">RED</label>
					<div class="col-sm-10">
						<input type="tel" class="form-control" id="red" name="red" placeholder="RED">
					</div>
				</div>
				<div class="form-group" id="viiiiiiiiii">
					<label for="telefono" class="col-sm-2 control-label">Almacenamiento</label>
					<div class="col-sm-10">
						<input type="tel" class="form-control" id="almacen" name="almacen" placeholder="Almacenamiento">
					</div>
				</div>

				<div class="form-group" id="pe">
							<label for="telefono" class="col-sm-2 control-label">Director</label>
							<div class="col-sm-10">
								<input type="tel" class="form-control" id="director" name="director" placeholder="Director">
							</div>
						</div>

						<div class="form-group" id="pee">
							<label for="telefono" class="col-sm-2 control-label">Actores</label>
							<div class="col-sm-10">
								<textarea class="form-control" id="actores" name="actores" placeholder="Actores"></textarea>
							</div>
						</div>

						<div class="form-group" id="peee">
							<label for="telefono" class="col-sm-2 control-label">Idioma Original</label>
							<div class="col-sm-10">
								<input type="tel" class="form-control" id="idioma" name="idioma" placeholder="Idioma Original">
							</div>
						</div>

						<div class="form-group" id="peeee">
							<label for="telefono" class="col-sm-2 control-label">Ejecutivos</label>
							<div class="col-sm-10">
								<textarea class="form-control" id="ejecutivos" name="ejecutivos" placeholder="Ejecutivos"></textarea>
							</div>
						</div>	

						<div class="form-group" id="peeeee">
							<label for="telefono" class="col-sm-2 control-label">Cinematografia</label>
							<div class="col-sm-10">
								<textarea class="form-control" id="cinematografia" name="cinematografia" placeholder="Cinematografia"></textarea>
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
