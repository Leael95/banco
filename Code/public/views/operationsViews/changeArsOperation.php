<?php 
require('../../backend/helpers/dolar.php');
$dolar = dolarBlue("venta");
?>

<h2>Valor del dolar a comprar: <?php echo $dolar ?> </h2>

<form action="../../backend/controllers/operationsController.php" method="POST">
        <label for="money">Ingrese su monto a cambiar a Dolares</label>
        <input type="number" step="0.01" name="money" id="money">

        <input type="hidden" name="valueUsd" id="valueUsd" value="<?php echo $dolar ?>">

        <input type="submit" name="changeArs" value="Enviar">
</form>