<!DOCTYPE html>
<html lang="en">

<head>
  <title>LOGIN</title>
  <!--para hacer estilos de css -->
  <!-- "text-align:center; " poner el texto al centro-->
  <style>
    .inicio {
      color: red;
    }

    .div1 {
      border: 1px solid black;
      width: 30%;
      text-align: center;
    }

    .div2 {
      width: 50%;
      float: left;
    }
  </style>
</head>

<body>
  <form action="log.php" method="post">
    <div class="div1">
      <div>
        <h1 class="inicio">INICIAR SECCION</h1>
      </div>
      <div class="div2">
        <label>USUARIO</label><br /><br />
        <label>CONTRASEÑA</label>
      </div>
      <div>
        <input type="text" name="txtusuario"/><br /><br />
        <input type="password" name="txtpass" />
      </div>
      <div>
        <br /><br />
        <input type="submit" value="ACEPTAR" /><!--para un boton -->
      </div>
      <!--  a[href="#"]{Hola Mundo}.enlace#link*2 -->
    </div>
  </form>

</body>

</html>