<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
	<?php
		$nombre = $_GET['nombre_cliente'];
		$telefono = $_GET['telefono'];
		$correo = $_GET['correo'];
		$asunto = $_GET['asunto'];
		$mensaje = $_GET['mensaje'];

		$db_host="localhost";
		$db_nombre="clientes";
		$db_usuario="root";
		$db_password="";

		$conexion=mysqli_connect($db_host,$db_usuario,$db_password,$db_nombre);

		if(mysqli_connect_errno()){
			echo "Fallo al conectar con la BBDD";
			exit();
		}
		mysqli_select_db($conexion, $db_nombre) or die("No se encuentra la BBDD");
		mysqli_set_charset($conexion,"utf8");

		$consulta="INSERT INTO clientes (nombre_cliente, telefono, correo, asunto, mensaje) VALUES ('$nombre','$telefono','$correo','$asunto','$mensaje')";

		$resultado=mysqli_query($conexion,$consulta);

		if($resultado ==false){
			echo "Error en la consulta";
		}else{
			echo "Registro guardado <br><br>";
			echo "<table><tr><td>$nombre</td></tr>";
			echo "<table><tr><td>$telefono</td></tr>";
			echo "<tr><td>$correo</td></tr>";
			echo "<table><tr><td>$asunto</td></tr>";
			echo "<tr><td>$mensaje</td></tr></table>";
		}

		mysqli_close($conexion);
?>
<a href="clientes.php">Volver</a>
</body>
</html>