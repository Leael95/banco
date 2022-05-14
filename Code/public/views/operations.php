<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operacion</title>
</head>
<body>
    <?php
        if(isset($_GET['deposit'])) {
            require('operationsViews/depositOperation.php');
        } elseif(isset($_GET['extract'])){
            require('operationsViews/extractOperation.php');
        } elseif(isset($_GET['send'])){
            require('operationsViews/sendOperation.php');
        } elseif(isset($_GET['changeArs'])){
            require('operationsViews/changeArsOperation.php');
        } elseif(isset($_GET['changeUsd'])){
            require('operationsViews/changeUsdOperation.php');
        }
    ?>
</body>
</html>