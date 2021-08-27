<?php
    $userId = $_GET['id'];

    include_once 'config.php';
    $sql = "DELETE FROM admin WHERE adminId = '{$userId}'";
    if(mysqli_query($conn, $sql)){
        header("location:$location/admin.php");
    }else{
        echo "Query Failed";
    }
?>