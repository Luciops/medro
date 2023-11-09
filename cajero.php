<?php
session_start();
    if(!isset($_SESSION['usuario'])){
        echo'
        <script>
            alert("por favor debe iniciar session");
            window.location = "indexx.php";
        </script>
        ';
        session_destroy();
        die;
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="sesion.php">
</head>
<body>
    <h1>Bienvenido DIRECTOR </h1>
    <a href="cerrar_session.php">cerrar session</a>
</body>
</html>