<?php
		$nombre = $_GET['nombre'];
		$apellido = $_GET['apellido'];
		$telefono = $_GET['telefono'];
		$correo = $_GET['correo'];
		$password = $_GET['password'];
		$conf_password = $_GET['conf_password'];

		$db_host="localhost";
		$db_nombre="clientes_registrados";
		$db_usuario="root";
		$db_password="";

		$conexion=mysqli_connect($db_host,$db_usuario,$db_password,$db_nombre);

		if(mysqli_connect_errno()){
			echo "Fallo al conectar con la BBDD";
			exit();
		}
		mysqli_select_db($conexion, $db_nombre) or die("No se encuentra la BBDD");
		mysqli_set_charset($conexion,"utf8");

		$consulta="INSERT INTO clientes_registrados (nombre, apellido, telefono, correo, password, conf_password) VALUES ('$nombre','$apellido','$telefono','$correo','$password','conf_password')";

		$resultado=mysqli_query($conexion,$consulta);

		if($resultado ==false){
			echo "Error en la consulta";
		}else{
			echo "Registro guardado <br><br>";
			echo "<table><tr><td>$nombre</td></tr>";
			echo "<table><tr><td>$apellido</td></tr>";
			echo "<tr><td>$telefono</td></tr>";
			echo "<tr><td>$correo</td></tr>";
			echo "<table><tr><td>$password</td></tr>";
			echo "<tr><td>$conf_password</td></tr></table>";
		}

		mysqli_close($conexion);
?>