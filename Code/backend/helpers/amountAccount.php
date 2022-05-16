<?php 

$userId = $_SESSION['idDigitalBank'];
$result = mysqli_query($conn,"SELECT amountArs,amountUsd FROM main WHERE id=$userId");
$amountArsUsd = $result->fetch_assoc();