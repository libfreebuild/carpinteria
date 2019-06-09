<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device=width, user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1">
	<link rel="stylesheet" type="text/css" href="estilos_servicios.css">
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
	<h1>Trabajos realizados:</h1>
	<h2>Trabajo número 1</h2>
	<h3>Trabajo número 2</h3>
	<ul>
		<li><a href="">Referencias</a></li>
		<li><a href="">Referencias</a></li>
		<li><a href="">Referencias</a></li>
		<li><a href="">Referencias</a></li>
		<li><a href="">Referencias</a></li>
	</ul>

	<table align="center">
		<tr>
			<td colspan="3">Opciones</td>
		</tr>
		<tr>
			<td>Opciones</td>
			<td>Opciones</td>
			<td>Opciones</td>

		</tr>
		<tr>
			<td colspan="3">Opciones</td>
		</tr>
		<tr>
			<td>Opciones</td>
			<td>Opciones</td>
			<td>Opciones</td>
		</tr>
	</table>
	<h3>LoremIpsum</h3>
	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
	<br>
	<h3>LoremIpsum</h3>
	<h4>LoremIpsum</h4>
	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
	<br>
	<h3>LoremIpsum</h3>
	<h4>LoremIpsum</h4>
	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
</body>
</html>