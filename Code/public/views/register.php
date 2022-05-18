<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/styles.css">
</head>

<body>
    <form action="../../backend/controllers/registerController.php" method="POST">
        <label for="user">Usuario</label>
        <input type="text" name="user" id="user"><br><br>

        <label for="userPassword">Contraseña</label>
        <input type="text" name="userPassword" id="userPassword"><br><br>

        <label for="userName">Nombre</label>
        <input type="text" name="userName" id="userName"><br><br>

        <label for="userSurname">Apellido</label>
        <input type="text" name="userSurname" id="userSurname"><br><br>

        <label for="userEmail">Email</label>
        <input type="text" name="userEmail" id="userEmail"><br><br>

        <label for="userDate">Fecha de Nacimiento</label>
        <input type="text" name="userDate" id="userDate"><br><br>

        <input type="submit" value="Registrarse">
    </form>
</body>
</html>