<?php 

session_start();

include('../database/db.php');

if(isset($_POST['confirmNewPassword'])) {
    $oldPassword = $_POST['oldPassword'];
    $newPassword = $_POST['newPassword'];
    $user = $_SESSION['userDigitalBank'];

    $queryOldPassword = "SELECT * FROM login WHERE user='$user' AND password='$oldPassword'";

    $resultOld = mysqli_query($conn,$queryOldPassword);

    $rowOld = mysqli_num_rows($resultOld);

    if($rowOld == 1) {
        $queryNewPassword = "UPDATE login SET password='$newPassword' WHERE user='$user'";

        mysqli_query($conn,$queryNewPassword);
        header("Location: ../../public/views/home.php");
    } else {
        echo "La contraseña anterior es invalida";
    }
} 
