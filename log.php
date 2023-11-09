<?php
session_start();
include('conexion.php');
include('sesion.php');

	if ($_POST){
	$usuario = $_POST['txtusuario'];
	$password = $_POST['txtpass'];
	Sesion::ingresarUsuario($usuario, $password);

	
	}else{
		echo '<script type="text/javascript">
				window.location.href="login.php";
				</script>';
	
	}


?>