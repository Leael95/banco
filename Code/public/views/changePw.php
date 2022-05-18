<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body>
    <?php require('importsViews/navbar.php') ?>

    <form action="../../backend/controllers/passwordController.php" method="POST">
        <h1>Modificación de contraseña</h1>

        <label for="oldPassword">Contraseña anterior</label>
        <input type="text" name="oldPassword" id="oldPassword">

        <label for="newPassword">Contraseña nueva</label>
        <input type="text" name="newPassword" id="newPassword">
        <input type="submit" name="confirmNewPassword" id="confirmNewPassword" value="Confirmar contraseña">

    </form>
</body>
</html>