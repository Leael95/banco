<?php 

    session_start();

    if(!isset($_SESSION['userDigitalBank'])) {
        header('Location: index.php');
    } 

    if(isset($_GET['sDestroy'])) {
        session_destroy();

        header('Location: index.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Banking Banco Digital</title>
</head>
<body>
    <?php if(isset($_SESSION['userDigitalBank'])) {
        echo "<h1>Bienvenido ".$_SESSION['userDigitalBank']."</h1>";
    } ?>

    <h2>Operaciones</h2>
    <button id="deposit">Depositar</button>
    <button id="extract">Extraer</button>
    <button id="send">Enviar</button>
    <button id="changeArs">Cambiar Pesos</button>
    <button id="changeUsd">Cambiar Dolares</button>
    <button id="transactionHistory">Historial de transacciones</button>

    <a href="home.php?sDestroy">Cerrar sesion</a>
    <a href="changePw.php">Cambiar contraseña</a>
</body>
</html>

<script src="../js/scripts.js"></script>