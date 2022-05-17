<?php

function transactions() {
    
    require('../../backend/database/db.php');

    $idUser = $_SESSION['idDigitalBank'];

    if(isset($_GET['deposit'])) {
        $query = "SELECT * FROM transactionhistory WHERE iduser=$idUser AND idstatus=1";
    } else if(isset($_GET['extract'])) {
        $query = "SELECT * FROM transactionhistory WHERE iduser=$idUser AND idstatus=2";
    } else if(isset($_GET['send'])) {
        $query = "SELECT * FROM transactionhistory WHERE iduser=$idUser AND idstatus=3";
    } else if(isset($_GET['changeArs'])) {
        $query = "SELECT * FROM transactionhistory WHERE iduser=$idUser AND idstatus=4";
    } else if(isset($_GET['changeUsd'])) {
        $query = "SELECT * FROM transactionhistory WHERE iduser=$idUser AND idstatus=5";
    } else {
        $query = "SELECT * FROM transactionhistory WHERE iduser=$idUser";
    }

    $result = mysqli_query($conn,$query);

    return mysqli_fetch_all($result);
}