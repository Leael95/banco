<?php

include('../db.php');

if(isset($_POST)) {
    $user = $_POST['user'];
    $userPassword = $_POST['userPassword'];
    $userName = $_POST['userName'];
    $userSurname = $_POST['userSurname'];
    $userEmail = $_POST['userEmail'];
    $userDate = $_POST['userDate'];

    $queryLogin = "INSERT INTO login (user,email,password) VALUES ('$user','$userEmail','$userPassword')";
    $queryMain = "INSERT INTO main (name,surname,dateofbirth) VALUES ('$userName','$userSurname','$userDate')";

    echo $queryLogin;
    echo $queryMain;

    $resultLogin = mysqli_query($conn,$queryLogin);
    $resultMain = mysqli_query($conn,$queryMain);

    if($resultLogin && $resultMain) {
        echo "Registrado correctamente";
    }
}