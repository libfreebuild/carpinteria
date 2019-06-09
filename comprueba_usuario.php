<?php
	try{
		$base= new PDO("mysql:host=localhost; dbname=clientes_registrados", "root", "");
		$base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql = "SELECT * FROM clientes_registrados WHERE correo= :login AND password= :password";
		$resultado = $base->prepare($sql);
		$login=htmlentities(addslashes($_POST['login']));
		$password=htmlentities(addslashes($_POST['password']));
		$resultado->bindValue(":login",$login);
		$resultado->bindValue(":password",$password);
		$resultado->execute();
		$numero_registro=$resultado->rowCount();
		if($numero_registro !=0){
			session_start();
			$_SESSION['usuario']=$_POST['login'];
			header("location:index.php");
		}else{
			header("location:login.php");
		}
	}catch(Exception $e){
		die("Error:" . $e->getMessage());
	}
?>