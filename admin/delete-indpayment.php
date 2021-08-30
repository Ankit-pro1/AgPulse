<?php
    $sId = $_GET['id'];

    include_once 'config.php';
    $sql = "DELETE FROM indpay WHERE sId = '{$sId}'";
    if(mysqli_query($conn, $sql)){
        header("location:$location/indpayment.php");
    }else{
        echo "Query Failed";
    }
?>