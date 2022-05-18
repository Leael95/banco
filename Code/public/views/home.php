<?php 

    require("../../backend/database/db.php");

    if($conn) {
        session_start();

        if(!isset($_SESSION['userDigitalBank'])) {
            header('Location: index.php');
        } 
    
        if(isset($_GET['sDestroy'])) {
            session_destroy();
    
            header('Location: index.php');
        } 

        require('../../backend/helpers/amountAccount.php');
        
?>

        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Home Banking Banco Digital</title>
            <link rel="preconnect" href="https://fonts.googleapis.com">
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
            <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
            <link rel="stylesheet" href="../css/styles.css">
        </head>

        <body>
            <?php require('importsViews/navbar.php') ?>

            <header class="header-home">
                <div class="header-user">
                    <?php if(isset($_SESSION['userDigitalBank'])) {
                    echo "<h1>Bienvenido ".$_SESSION['userDigitalBank']."</h1>";
                    } ?>

                    <h3>Saldo ARS: $<?php echo $amountArsUsd['amountArs'] ?></h3>
                    <h3>Saldo USD: $<?php echo $amountArsUsd['amountUsd'] ?></h3>
                </div>
                <div class="header-digitalbank">
                    <img src="../img/header-photo.jpg" alt="">
                </div>
            </header>

            <h2 class="title-home">Operaciones</h2>
            <button id="deposit">Depositar</button>
            <button id="extract">Extraer</button>
            <button id="send">Enviar</button>
            <button id="changeArs">Cambiar Pesos</button>
            <button id="changeUsd">Cambiar Dolares</button>
            <button id="transactionHistory">Historial de transacciones</button>

            <a href="changePw.php">Cambiar contraseña</a>
            <script src="../js/scripts.js"></script>
        </body>
        </html>

<?php
    } else {
        echo "Error al conectarse a la base de datos";
    }