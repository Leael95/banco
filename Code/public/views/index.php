<?php
    session_start();

    if(isset($_SESSION['userDigitalBank'])) {
        header('Location: home.php');
    } 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Banco Digital</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/styles.css">
</head>

<body class="index-body">
    <div class="index-container">
        <div class="index-img"></div>

        <div class="index-login-register">
            <h1 class="index-h1">BANCO DIGITAL</h1>

            <h2 class="index-h2">Iniciar sesión al Home Banking</h2>

            <form class="index-form" action="../../backend/controllers/loginController.php" method="GET">
                <input class="input-form-index" type="text" name="user" id="user" placeholder="Tu nombre de usuario">

                <input class="input-form-index" type="password" name="password" id="password" placeholder="Tu contraseña">

                <input class="input-submit-index" type="submit" value="Ingresar">
            </form>
        </div>
    </div>
</body>
</html>