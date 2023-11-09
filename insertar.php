<?php
require "conexion.php";
$usuario=$_POST['txtusuario'];
$contrasena=$_POST['password'];
$nombre=$_POST['txtnom'];
$cargo=$_POST['txtcargo'];
$contrasena= hash('sha512',$contrasena);
//mysqli_query($con,"INSERT INTO usuario (usuario, password, nombre, cargo) VALUES('$usuario',md5('$pass'),'$nombre','$cargo')");
mysqli_query($con,"INSERT INTO usuario (usuario, password, nombre, cargo) VALUES('$usuario','$contrasena','$nombre','$cargo')");
//mysqli_query($con,"INSERT INTO usuario (usuario, password, nombre, cargo) VALUES('$usuario',hex(aes_encrypt('$contrasena','hunter2')),'$nombre','$cargo')");
header('location:indexx.php');


?>