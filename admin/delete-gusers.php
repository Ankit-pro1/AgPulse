<?php
    $gid = $_GET['gid'];

    include_once 'config.php';
    $sql = "DELETE FROM gusers WHERE gId = '{$gid}'";
    if(mysqli_query($conn, $sql)){
        header("location:$location/gusers.php");
    }else{
        echo "Query Failed";
    }
?>