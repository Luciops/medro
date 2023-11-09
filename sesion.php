
<?php
session_start();
class Sesion{

	static function ingresarUsuario($usuario, $contrasena){
	
		$conexion = mysqli_connect("localhost","root","","medro")
			or die("Error no conecta".mysqli_error($conexion));
			$contrasena= hash('sha512',$contrasena);
			
			$ss=mysqli_query($conexion,"SELECT * FROM usuario WHERE usuario='$usuario' AND password='$contrasena'");
		//$ss=mysqli_query($conexion,"SELECT * FROM usuario WHERE usuario='$usuario' AND password=aes_decrypt(unhex('$contrasena','hunter2'))");
	
	
		if($row= mysqli_fetch_array($ss)){
		
			$id=$row[0];
			$usuario=$row[1];
			$contrasena=$row[2];
			$nombre=$row[3];
			$cargo=$row[4];
			
			$_SESSION['id']=$id;
			$_SESSION['usuario']=$usuario;
			$_SESSION['password']=$contrasena;
			$_SESSION['nombre']=$nombre;
			$_SESSION['cargo']=$cargo;
	
			if ($_SESSION['cargo']=='Estudiante') {
		
				echo '<script type="text/javascript"> 
			window.location.href="gerente.php";
			</script>';
	
				} 
	
				if ($_SESSION['cargo']=='Director') {
		
					echo '<script type="text/javascript"> 
				window.location.href="cajero.php";
				</script>';
		
					} 
		
		}
		else{
		echo "<center>USUARIO NO REGISTRADO</center>";
		echo '<script type="text/javascript">    
		alert("El Correo o Contraseña son Incorrectos");
		window.location.href="indexx.php";
			</script>';
		
		}
		
		}
	
	}
	
	?>
