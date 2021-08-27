<?php
    $userId = $_GET['id'];

    include_once 'config.php';
    $sql = "DELETE FROM users WHERE userId = '{$userId}'";
    if(mysqli_query($conn, $sql)){
        header("location:$location/users.php");
    }else{
        echo "Query Failed";
    }
?>