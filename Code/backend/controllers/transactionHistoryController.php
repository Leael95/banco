<?php

function transactions() {
    require('../../backend/database/db.php');
    $idUser = $_SESSION['idDigitalBank'];
    $offset = 0;

    if(isset($_GET['offset'])) {
        $offset = $_GET['offset'];
    }

    if(isset($_GET['deposit']) || isset($_GET['extract']) || isset($_GET['send']) || isset($_GET['changeArs']) || isset($_GET['changeUsd'])) {
        $status = null;
        
        if(isset($_GET['deposit'])) {
            $status = 1;
        } else if(isset($_GET['extract'])) {
            $status = 2;
        } else if(isset($_GET['send'])) {
            $status = 3;
        } else if(isset($_GET['changeArs'])) {
            $status = 4;
        } else if(isset($_GET['changeUsd'])) {
            $status = 5;
        }

        $query = "SELECT * FROM transactionhistory WHERE iduser=$idUser AND idstatus=$status LIMIT 10 OFFSET $offset";
    } else {
        $query = "SELECT * FROM transactionhistory WHERE iduser=$idUser LIMIT 10 OFFSET $offset";
    }

    $result = mysqli_query($conn,$query);

    return mysqli_fetch_all($result);
}

function pages() {
    require('../../backend/database/db.php');
    $idUser = $_SESSION['idDigitalBank'];

    if(isset($_GET['deposit']) || isset($_GET['extract']) || isset($_GET['send']) || isset($_GET['changeArs']) || isset($_GET['changeUsd'])) {
        $status = null;
        
        if(isset($_GET['deposit'])) {
            $status = 1;
        } else if(isset($_GET['extract'])) {
            $status = 2;
        } else if(isset($_GET['send'])) {
            $status = 3;
        } else if(isset($_GET['changeArs'])) {
            $status = 4;
        } else if(isset($_GET['changeUsd'])) {
            $status = 5;
        }

        $query = "SELECT * FROM transactionhistory WHERE iduser=$idUser AND idstatus=$status";
    } else {
        $query = "SELECT * FROM transactionhistory WHERE iduser=$idUser";
    }

    $result = mysqli_query($conn,$query);

    $numRows = mysqli_num_rows($result);

    $numPages = 1;

    if(isset($_GET['deposit']) || isset($_GET['extract']) || isset($_GET['send']) || isset($_GET['changeArs']) || isset($_GET['changeUsd'])) {
        $operation = null;
        
        if(isset($_GET['deposit'])) {
            $operation = "deposit";
        } else if(isset($_GET['extract'])) {
            $operation = "extract";
        } else if(isset($_GET['send'])) {
            $operation = "send";
        } else if(isset($_GET['changeArs'])) {
            $operation = "changeArs";
        } else if(isset($_GET['changeUsd'])) {
            $operation = "changeUsd";
        }

        for($i = 0 ; $i < $numRows ; $i = $i + 10) {
            echo "<a id='transaction-offset$i' class='transaction-links-pages' href='transactionsHistory.php?$operation&offset=$i'>$numPages</a>";
            $numPages++;
        }
    } else {
        for($i = 0 ; $i < $numRows ; $i = $i + 10) {
            echo "<a id='transaction-offset$i' class='transaction-links-pages' href='transactionsHistory.php?offset=$i'>$numPages</a>";
            $numPages++;
        }
    }
}