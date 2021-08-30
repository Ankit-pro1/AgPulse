<?php
    $subId = $_GET['id'];

    include_once 'config.php';
    $sql = "DELETE FROM indsub WHERE sId = '{$subId}'";
    if(mysqli_query($conn, $sql)){
        header("location:$location/indsubs.php");
    }else{
        echo "Query Failed";
    }
?>