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
    <link rel="stylesheet" href="2.css">
</head>
<body>
    <h3>ESCOJA UNA MENCION</h3>
    <br><br>
    <div class="w1">
        <br><br><br>
        <div class="cara frente">
            <img src="hack.jpg" alt="" >
            <h2>SEGURIDAD INFORMATICA</h2>
        </div>

        <div class="cara espalda">
            <h3>INGENIRIA INFORMATICA MENCION SEGURIDAD INFORMATICA</h3>
            <p>EL PROBLEMA DE LOS VIRUS ES PASAJERO Y DURAN UN PAR DE AÑOS</p>
            <h4>4 de julio... salud...!</h4>
        </div>
    </div>
    <div class="w1">
        <br><br><br>
        <div class="cara frente">
            <img src="compu.jpg" alt="" >
            <h2>COMPUTACION MOVIL</h2>
        </div>

        <div class="cara espalda">
            <h3>INGENIRIA INFORMATICA MENCION COMPUTACION MOVIL</h3>
            <p>EL ORDENADOR NACIO PARA RESOLVER PROBLEMAS QUE ANTES NO EXISTIAN</p>
            <h4>4 de julio... salud...!</h4>
        </div>
    </div>
</body>
</html>