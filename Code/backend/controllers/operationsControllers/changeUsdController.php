<?php 

$money = $_POST['money'];
$valueUsd = $_POST['valueUsd'];

$moneyArs = $money * $valueUsd;

$user = $_SESSION['userDigitalBank'];

$queryUser = "SELECT id FROM login WHERE user='$user'";

$resultUser = mysqli_query($conn,$queryUser);

if(mysqli_num_rows($resultUser) == 1) {
    $data = $resultUser ->fetch_assoc();
    $userId = $data['id'];

    $queryUserMoney = "SELECT amountARS, amountUSD FROM main WHERE id='$userId'";

    $resultMoney = mysqli_query($conn,$queryUserMoney);

    $dataMoney = $resultMoney -> fetch_assoc();
    
    $newMoneyArs = $dataMoney['amountARS'] + $moneyArs;
    $newMoneyUsd = $dataMoney['amountUSD'] - $money;

    $queryNewMoney = "UPDATE main SET amountARS=$newMoneyArs,amountUSD=$newMoneyUsd WHERE id='$userId'";

    $resultNewMoney = mysqli_query($conn,$queryNewMoney);

    $resultTransaction = mysqli_query($conn,"INSERT INTO transactionhistory (iduser,idstatus,import,valueUsd,date) VALUES ('$userId',5,'$money','$valueUsd',NOW())");

    header("Location: ../../public/views/home.php");
}