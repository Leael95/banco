<?php 

    session_start();

    require('../../backend/controllers/transactionHistoryController.php');

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Historial de transacciones</title>
</head>
<body>

    <button id="deposit">Ingreso</button>
    <button id="extract">Extraccion</button>
    <button id="send">Envio</button>
    <button id="changeArs">Cambio a Dolares</button>
    <button id="changeUsd">Cambio a Pesos</button>

    <table>
        <tr>
            <th>id</th>
            <th>iduser</th>
            <th>idstatus</th>
            <th>import</th>
            <th>idinteracteduser</th>
            <th>valueusd</th>
            <th>date</th>
        </tr>
        <?php 

        foreach (transactions() as $transacciones) { ?>
        <tr>
            <td><?php echo $transacciones[0] ?></td>
            <td><?php echo $transacciones[1] ?></td>
            <td><?php echo $transacciones[2] ?></td>
            <td><?php echo $transacciones[3] ?></td>
            <td><?php echo $transacciones[4] ?></td>
            <td><?php echo $transacciones[5] ?></td>
            <td><?php echo $transacciones[6] ?></td>
        </tr>

        <?php
        }

        ?>
    </table>

    <script src="../js/transactions.js"></script>
</body>
</html>