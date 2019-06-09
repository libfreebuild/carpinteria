<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="estilos_clientes.css">
</head>
<body>
	<?php
		session_start();
		if(!isset($_SESSION["usuario"])){
			header("location:login.php");
		}
	?>
	<header>
		<input type="checkbox" id="btn-menu">
		<label for="btn-menu"><img src="forest.jpg" width="50px" height="50px"></label>
		<nav class="menu">
			<ul>
				<li><a href="index.php">Inicio</a></li>
				<li><a href="servicios.php">Servicios</a></li>
				<li><a href="productos.php">Productos</a></li>
				<li><a href="clientes.php">Clientes</a></li>
				<li><a href="contacto.php">Contacto</a></li>
			</ul>
		</nav>
	</header>
	<form action="registrarse.php" method="get">
		<table align="center">
			<tr>
				<td>Nombre Cliente:</td>
				<td><input type="text" name="nombre_cliente"></td>
			</tr>
			<tr>
				<td>Telefono Cliente:</td>
				<td><input type="text" name="telefono"></td>
			</tr>
			<tr>
				<td>Correo Cliente:</td>
				<td><input type="text" name="correo"></td>
			</tr>
			<tr>
				<td>Asunto:</td>
				<td><input type="text" name="asunto"></td>
			</tr>
			<tr>
				<td>Mensaje:</td>
				<td><input type="text" name="mensaje" placeholder="Escriba aquí su mensaje""></input></td>
			</tr>
			<tr>
				<td><input type="submit" name="enviar" value="Enviar"></td>
			</tr>
		</table>
	</form>
	<footer>
		<div class="container-footer-all">
		<div class="container-body">
			<div class="colum1">
				<h3>Servicios que realizamos:</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			</div>
			<div class="colum2">
				<h3>Redes Sociales:</h3>
				<div class="row">
					<img src="storn.jpg">
					<label>Siguenos en Facebook</label>
				</div>
				<div class="row">
					<img src="storn.jpg">
					<label>Siguenos en Twitter</label>
				</div>
				<div class="row">
					<img src="storn.jpg">
					<label>Siguenos en Instagram</label>
				</div>
				<div class="row">
					<img src="storn.jpg">
					<label>Siguenos en Google Plus</label>
				</div>
				<div class="row">
					<img src="storn.jpg">
					<label>Siguenos en Pinterest</label>
				</div>
			</div>
			<div class="colum3">
				<h3>Información Contactos</h3>
				<div class="row2">
					<img src="storn.jpg">
					<label>Calle Río Alzania</label>
				</div>
				<div class="row2">
					<img src="storn.jpg">
					<label>948-11-11-11</label>
				</div>
				<div class="row2">
					<img src="storn.jpg">
					<label>Carpinteriavja@gmail.com</label>
				</div>
			</div>
			
		</div>
		</div>
		<div class="container-footer">
			<div class="copyright">
				@Todos los Derechos Reservados | <a href="">Carpintería Vicente Jaime Azcárate</a>
			</div>
			<div class="information">
				<a href="">Información Compañia</a>|
				<a href="">Privación y Política</a>|
				<a href="">Términos y Política</a>
			</div>
		</div>
	</footer>
</body>
</html>