<?php
session_start();
    if(isset($_SESSION['usuario'])){
        header("location:cajero.php");
    }
    if(isset($_SESSION['usuarrio'])){
        header("location:gerente.php");
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>login</title>
    <link rel="stylesheet" href="index.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <!-- NAVBAR CREATION -->
   <header class="header">
    <nav class="navbar">
        <a href="#">Inicio</a>
        <a href="#">Trabajos</a>
          <a href="#">Sobre Nosotros</a>
          <a href="#">Contacto</a>
          <a href="#">Ayuda</a>
    </nav>
    
   </header>
    <!-- LOGIN FORM CREATION -->
    <div class="background"></div>
    <div class="container">
        <div class="item">
            <h2 class="logo"><i class='bx bxs-user'></i>AREA TECNOLOGIA</h2>
            <div class="text-item">
                <h2>INGENIERIA  <br><span>
                    INFORMATICA
                </span></h2>
                <p>esta es mi login ing ................ :v</p>
                <div class="social-icon">
                    <a href="#"><i class='bx bxl-facebook'></i></a>
                    <a href="#"><i class='bx bxl-twitter'></i></a>
                    <a href="#"><i class='bx bxl-youtube'></i></a>
                    <a href="#"><i class='bx bxl-instagram'></i></a>
                    <a href="#"><i class='bx bxl-linkedin'></i></a>
                </div>
            </div>
        </div>
        <div class="login-section">
            <div class="form-box login">
            <form action="log.php" method="post">
                    
                    <h2>Iniciar sesion</h2>
                    <div class="input-box">
                        <span class="icon"><i class='bx bxs-envelope'></i></span>
                        <input type="text" name="txtusuario" required>
                        <label >Usuario</label>
                    </div>
                    <div class="input-box">
                        <span class="icon"><i class='bx bxs-lock-alt' ></i></span>
                        <input type="password" name="txtpass"  required>
                        <label>Contraseña</label>
                    </div>
                    <div class="remember-password">
                        <label for=""><input type="checkbox">Recuerda</label>
                        <a href="#">Olvidaste tu clave</a>
                    </div>
                    <button class="btn">Ingreso</button>
                    <div class="create-account">
                        <p>Crear una cuenta nueva? <a href="#" class="register-link">registrate</a></p>
                    </div>
             </form>
            </div>
            <div class="form-box register">
            <form action="insertar.php" method="POST" >

                    <h2>Registrar usuario</h2>
                    
                    <div class="input-box">
                        <span class="icon"><i class='bx bxs-user'></i></span>
                        <input type="text" name="txtusuario" id="textfield" require>
                        <label >Nombre de Usuario</label>
                         </div>
                             <div class="input-box">
                        <span class="icon"><i class='bx bxs-envelope'></i></span>
                        <input type="text" name="txtnom" id="textfield3" require>
                        <label >Nombre</label>
                          </div>
                             <div class="input-box">
                        <span class="icon"><i class='bx bxs-lock-alt' ></i></span>
                        <input type="password" name="password" required>
                        <label>Clave</label>
                             </div>
                             <label for="select">Cargo:</label>
                                 <select  id="select" name="txtcargo">
                              <option value="Estudiante">Estudiante</option>
                             <option value="Director">Director</option>
                             
                                 </select>
    <br><br><br>
                    <div class="remember-password">
                        <label for=""><input type="checkbox">Estoy de acuerdo con los terminos y condiciones</label>
                    </div>
                    <button class="btn">Ingreso</button>
                    <div class="create-account">
                        <p>Tienes una cuenta? <a href="#" class="login-link">Ingresa</a></p>
                    </div>
                    
                </form>
            </div>
        </div>
    </div>
     <!-- SIGN UP FORM CREATION -->

    <script src="index.js"></script>
</body>

</html>