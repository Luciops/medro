<?php
include "conexion.php";
$usu = $_POST['usu'];
$contrasena = $_POST['contra'];
$re_p = $_POST['rep'];
$nombre = $_POST['nom'];
$cargo = $_POST['sel'];
$contrasena= hash('sha512',$contrasena);

mysqli_query($con,"INSERT INTO usuario (usuario, password, nombre, cargo) VALUES('$usu','$contrasena','$nombre','$cargo')");
//mysqli_query($con,"INSERT INTO usuario (usuario, password, nombre, cargo) VALUES('$usu',hex(aes_decrypt('$cont','hunter2')),'$nombre','$cargo')");
header('location:indexx.php');
//echo $usu.''.$cont.''.$nombre.''.$cargo;
?>