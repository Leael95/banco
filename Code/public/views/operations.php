<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enviar</title>
</head>
<body>
    <form action="../../backend/controllers/operationsController.php" method="POST">
        <label for="amount">Monto a enviar</label>
        <input type="number" name="money" id="money">

        <label for="receiver">Destinatario</label>
        <input type="text" name="receiver" id="receiver">

        <input type="submit" name="sendAmount" value="Enviar">
    </form>
</body>
</html>