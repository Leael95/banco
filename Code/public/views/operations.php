<?php 
    session_start();
    require('../../backend/database/db.php');
    require('../../backend/helpers/amountAccount.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operacion</title>
</head>
<body>
    <p>Monto en ARS: <span id="amountArs"><?php echo $amountArsUsd['amountArs'] ?></span></p>

    <?php
        if(isset($_GET['deposit'])) {
            require('operationsViews/depositOperation.php');
        } elseif(isset($_GET['extract'])){
            require('operationsViews/extractOperation.php');
        } elseif(isset($_GET['send'])){
            require('operationsViews/sendOperation.php');
        } else if(isset($_GET['changeArs']) || isset($_GET['changeUsd'])) {
            echo "<p>Monto en USD: <span id='amountUsd'>".$amountArsUsd['amountUsd']."</span></p>";

            if(isset($_GET['changeArs'])){
                require('operationsViews/changeArsOperation.php');
            } elseif(isset($_GET['changeUsd'])){
                require('operationsViews/changeUsdOperation.php');
            }
        }
    ?>

    <p>Su monto en ARS sera: <span id="calcAmountArs"></span></p>
    
    <?php
        if(isset($_GET['changeArs']) || isset($_GET['changeUsd'])) {
            echo '<p>Su monto en USD sera: <span id="calcAmountUsd"></span></p>';
        }
    ?>

<script src="../js/operations.js"></script>
</body>
</html>