<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
		body{
			background-color: black;
			color: #fff;
		}
		table{
			background-color: grey;
			margin-top: 10%;
			margin-bottom: 10%;
			padding: 40px;
			border: 1px dotted #FF0000;
		}
	</style>
</head>
<body>
	<form action="insertar_datos_en_BBDD_login.php" method="get">
		<table align="center">
			<tr>
				<td>Nombre:</td>
				<td><input type="text" name="nombre"></td>
			</tr>
			<tr>
				<td>Apellido:</td>
				<td><input type="text" name="apellido"></td>
			</tr>
			<tr>
				<td>Telefono:</td>
				<td><input type="text" name="telefono"></td>
			</tr>
			<tr>
				<td>Correo electrónico:</td>
				<td><input type="text" name="correo"></td>
			</tr>
			<tr>
				<td>Contraseña:</td>
				<td><input type="password" name="password"></td>
			</tr>
			<tr>
				<td>Confirmación Contraseña:</td>
				<td><input type="password" name="conf_password"></td>
			</tr>
			<tr>
				<td><input type="submit" name="enviar" value="Enviar"></td>
				<td><input type="reset" name="eliminar" value="Reset"></td>
			</tr>
		</table>
		<a href="login.php">Volver</a>

	</form>
</body>
</html>