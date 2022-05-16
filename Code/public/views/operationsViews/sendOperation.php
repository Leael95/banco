<form action="../../backend/controllers/operationsController.php" method="POST">
        <label for="amount">Monto a enviar</label>
        <input type="number" name="money" id="money">

        <label for="receiver">Destinatario</label>
        <input type="text" name="receiver" id="receiver">

        <input type="submit" id="btnInputSubmit" name="sendAmount" value="Enviar">
</form>