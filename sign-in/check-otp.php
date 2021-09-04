<?php
    include_once 'config.php';
    session_start();
    $otp = $_POST['otp'];
    $email = $_SESSION['email'];
    $sql1 = "SELECT * FROM users WHERE userEmail = '{$email}' AND otp = '{$otp}'";
    $result = mysqli_query($conn, $sql1) or  die("Query Failed");
    if(mysqli_num_rows($result) > 0){
        $sql2 = "UPDATE users set otp = '' WHERE userEmail = '{$email}'";
        mysqli_query($conn, $sql2) or die("Query Failed");
        echo "yes";
    }else{
        echo "not_exist";
    }
?>