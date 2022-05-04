<form action="../../backend/controllers/operationsController.php" method="POST">
        <label for="money">Ingrese su monto a cambiar a Pesos</label>
        <input type="number" name="money" id="money">

        <label for="valueUsd">Valor del Dolar</label>
        <input type="number" name="valueUsd" id="valueUsd">

        <input type="submit" name="changeUsd" value="Enviar">
</form>