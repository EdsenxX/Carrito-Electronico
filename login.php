
<!DOCTYPE html>
<html>
<head>
	<title>Inicia Secion</title>
	<link rel="stylesheet" type="text/css" href="css/login.css">
	<link rel="stylesheet" type="text/css" href="css/menu.css">
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
	<meta charset="utf-8">
</head>
<body>

<header>
	<div class="ancho">
		<div class="logo">
			<p><a href="index.php">Serrano Corp.</a></p>
		</div>
		<nav>
			<ul>
				<li><a href="index.php"><span class="fa fa-home"></span>Inicio</a></li>
				<li><a href="videojuegos.php"><span class="fa fa-gamepad"></span>Videojuegos</a></li>
				<li><a href="peliculas.php"><span class="fa fa-film"></span>Peliculas</a></li>
				<li><a href="series.php"><span class="fa fa-book"></span>Series</a></li>
			</ul>
		</nav>
	</div>
</header>

<div class="informacion">

	<form class="login" method="post" action="validar.php">
		<center><img src="imagenes/usuario.jpg" width="70%" height="25%" class="usuario"></center>
		<!--<input type="text" name="usuario" id="usuario" placeholder="Usuario" class="texto" required>
		<input type="password" name="contraseña" id="contraseña" placeholder="Contraseña" class="texto" required>
		<input type="submit" name="" value="Iniciar Secion" class="btnlogin">-->

		<input type="text" id="control" name="usuario" placeholder="Usuario" class="texto" required>
		<input type="password" id="Contraseña" name="contrasena" placeholder="Contraseña" class="texto" required>
		<input type="submit" value="Iniciar" name="submit" class="btnlogin">

	</form>
	
	
	<form class="registro" method="post" action="nuevousuario.php">
		<div>
			<center><img src="imagenes/usuario.jpg" width="70%" height="25%" class="usuariore"></center>
		</div>
		
		<p>Nombre(s)</p>
		<input type="text" id="nombre" name="nombre" placeholder="Nombre" class="textore" required>
		<p>Apellídos</p>
		<input type="text" id="apellidos" name="apellidos" placeholder="Apellídos" class="textore" required>
		<p>Correo Electronico</p>
		<input type="email" id="correo" name="correo" placeholder="Correo" class="textore">
		<p>Nombre De Usuario</p>
		<input type="text" id="usuario" name="usuario" placeholder="Usuario" class="textore" required>
		<p>Contraseña</p>
		<input type="password" id="contra" name="contra" placeholder="Contraseña" class="textore" required>
		<p>Confirmar Contraseña</p>
		<input type="password" id="" name="" placeholder="Contraseña" class="textore" required>
		<center><input type="submit" value="Registrarse" class="btnre"></center>
	</form>

</div>

</body>
</html>