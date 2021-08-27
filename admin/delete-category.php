<?php
    $cid = $_GET['cId'];

    include_once 'config.php';
    $sql = "DELETE FROM category WHERE cId = '{$cid}'";
    if(mysqli_query($conn, $sql)){
        header("location:$location/category.php");
    }else{
        echo "Query Failed";
    }
?>