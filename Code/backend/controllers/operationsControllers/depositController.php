<?php

$money = $_POST['money'];

$user = $_SESSION['userDigitalBank'];

$queryUser = "SELECT id FROM login WHERE user='$user'";

$resultUser = mysqli_query($conn,$queryUser);

if(mysqli_num_rows($resultUser) == 1) {
    $data = $resultUser ->fetch_assoc();
    $userId = $data['id'];

    $queryUserMoney = "SELECT amountARS FROM main WHERE id='$userId'";

    $resultMoney = mysqli_query($conn,$queryUserMoney);

    $dataMoney = $resultMoney -> fetch_assoc();
    
    $newMoney = $dataMoney['amountARS'] + $money;

    $queryNewMoney = "UPDATE main SET amountARS=$newMoney WHERE id='$userId'";

    $resultNewMoney = mysqli_query($conn,$queryNewMoney);

    header("Location: ../../public/views/home.php");
}