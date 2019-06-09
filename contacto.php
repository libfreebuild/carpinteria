<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device=width, user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1">
	<link rel="stylesheet" type="text/css" href="estilos_contacto.css">
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
		<label for="btn-menu"><img src="forest.jpg" width="40px" height="40px"></label>
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
	<form action="enviar.php" method="post">
		<h2>Contacto</h2>
		<input type="text" name="Nombre" placeholder="Nombre" required>
		<input type="text" name="Correo" placeholder="Correo" required>
		<input type="text" name="Telefono" placeholder="Telefono" required>
		<input type="text" name="Motivo" placeholder="Motivo de el mensaje" required>
		<textarea name="mensaje" placeholder="Escriba aquí su mensaje:" required></textarea>
		<input type="submit" name="Enviar" value="Enviar" id="boton">
	</form>
</body>
</html>