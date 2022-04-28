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
    <link rel="stylesheet" href="css/styles.css">
    <title>Banco Digital</title>
</head>
<body>
    <h1>Bienvenido</h1>

    <form action="../../backend/controllers/loginController.php" method="GET">
        <label for="user">Usuario</label>
        <input type="text" name="user" id="user">

        <label for="password">Contraseña</label>
        <input type="text" name="password" id="password">

        <input type="submit">
    </form>
</body>
</html>