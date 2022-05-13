<?php 

$receiver = $_POST['receiver'];

$user = $_SESSION['userDigitalBank'];

$queryReceiver = "SELECT id FROM login WHERE user IN ('$user','$receiver') ORDER BY FIELD(user,'$user','$receiver')";

$resultReceiver = mysqli_query($conn,$queryReceiver);

if(mysqli_num_rows($resultReceiver) == 2) {
    $dataReceiver = $resultReceiver -> fetch_all();

    $userIdSend = $dataReceiver[0][0];
    $userIdReceive = $dataReceiver[1][0];

    $queryCalculate = "SELECT amountArs FROM main WHERE id IN ($userIdSend,$userIdReceive) ORDER BY FIELD(id,$userIdSend,$userIdReceive)";

    $resultCalculate = mysqli_query($conn,$queryCalculate);

    $dataCalculate = $resultCalculate->fetch_all();

    $money = $_POST['money'];

    $userMoneySend = $dataCalculate[0][0] - $money;
    $userMoneyReceive = $dataCalculate[1][0] + $money;

    mysqli_query($conn,"UPDATE main SET amountArs=$userMoneySend WHERE id=$userIdSend");
    mysqli_query($conn,"UPDATE main SET amountArs=$userMoneyReceive WHERE id=$userIdReceive");
    mysqli_query($conn,"INSERT INTO transactionhistory (iduser,idstatus,import,date,idinteracteduser) VALUES ('$userIdSend',3,'$money',NOW(),'$userIdReceive')");

    header("Location: ../../public/views/home.php");
}