<?php

include('../database/db.php');

session_start();

if(isset($_GET)) {
    $user = $_GET['user'];
    $password = $_GET['password'];

    $query = "SELECT * FROM login WHERE user='$user' and password='$password'";

    $result = mysqli_query($conn,$query);

    $rows = mysqli_num_rows($result);

    if($rows == 1) {
        $_SESSION['userDigitalBank'] = $user;
        header("Location: ../../public/views/home.php");
    } else {
        echo "Usuario incorrecto, comprobar datos";
    }
    
}