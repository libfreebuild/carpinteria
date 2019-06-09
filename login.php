<!DOCTYPE html>
<html>
<head>
	<title>
		
	</title>
	<style type="text/css">
		body{
			background-color: black;
			color: #fff;
		}
		table{
			border: 1px solid red;
			margin-top: 10%;
			margin-bottom: 10%;
			background-color: grey;
			padding: 10%;
			justify-content: space-between;
		}
	</style>
</head>
<body>
<h1>Introduce tus datos:</h1>
<form action="comprueba_usuario.php" method="post">
	<table align="center">
		<tr>
			<td class="izq">Login:</td>
			<td class="der"><input type="text" name="login"></td>
		</tr>
		<tr>
			<td class="izq">Password:</td>
			<td class="der"><input type="password" name="password"></td>
		</tr>
		<tr>
			<td><input type="submit" name="enviar" value="Enviar" colspan="2"></td>
		</tr>
	</table>
</form>
<a href="registrarse_cliente.php">Registrarse</a>
</body>
</html>