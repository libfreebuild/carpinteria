<?php
	$destino="carpinteriavja@gmail.com";
	$nombre= $_POST["Nombre"];
	$correo= $_POST["Correo"];
	$telefono= $_POST["Telefono"];
	$motivo= $_POST["Motivo"];
	$mensaje= $_POST["mensaje"];
	$contenido = "Nombre: " . $nombre . "\nCorreo:" . $correo ."\nTelefono:" . $telefono . "\nMensaje:" . $mensaje;
	mail($destino, $motivo, $mensaje);
	header("Location:gracias.html");
?>