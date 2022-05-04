<?php 

session_start();

include('../database/db.php');

if (isset($_POST['depositAmount'])) {
    require('operationsControllers/depositController.php');
} elseif(isset($_POST['extractAmount'])) {
    require('operationsControllers/extractController.php');
} elseif(isset($_POST['sendAmount'])) {
    require('operationsControllers/sendController.php');
} elseif(isset($_POST['changeArs'])) {
    require('operationsControllers/changeArsController.php');
} elseif(isset($_POST['changeUsd'])) {
    require('operationsControllers/changeUsdController.php');
} else {
    echo 'Como llegaste aca jj';
}