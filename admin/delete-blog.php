<?php 

    $bid = $_GET['bId'];
    include_once 'config.php';
    
    $sql = "DELETE FROM blogs WHERE blogId = '{$bid}'";
    if(mysqli_query($conn, $sql)){
        header("location:$location/blog.php");
    }else{
        echo "Query Failed";
    }
?>