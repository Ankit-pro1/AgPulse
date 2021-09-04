<?php
    $subId = $_GET['id'];

    include_once 'config.php';
    $sql = "DELETE FROM intsub WHERE sId = '{$subId}'";
    if(mysqli_query($conn, $sql)){
        header("location:$location/intsubs.php");
    }else{
        echo "Query Failed";
    }
?>