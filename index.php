<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <title>Registro</title>
</head>

<body>
  <p>REGISTRAR USUARIO</p>
  <form action="insertar.php" method="POST" >
  <p>
    <label for="textfield">Usuario :</label>
    <input type="text" name="txtusuario" id="textfield">
  </p>
  <p>
    <label for="password">Password:</label>
    <input type="password" name="password" id="password">
  </p>
  
  <p>
    <label for="textfield3">Nombre :</label>
    <input type="text" name="txtnom" id="textfield3">
  </p>
  <p>
    <label for="select">Cargo:</label>
    <select  id="select" name="txtcargo">
      <option value="Gerente">Gerente</option>
      <option value="Cajero">Cajero</option>
      <option value="cliente">Cliente</option>
    </select>
  </p>
  <p>
    <input type="submit" name="submit" id="submit" value="Enviar">
  </p>
  </form>
</body>

</html>