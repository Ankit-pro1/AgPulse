<?php

   include_once 'config.php';

   $userName = mysqli_real_escape_string($conn, $_POST['userName']) ;
   $userEmail = mysqli_real_escape_string($conn, $_POST['userEmail']);
   $countryCode = mysqli_real_escape_string($conn, $_POST['countryCode']);
   $userNumber = mysqli_real_escape_string($conn, $_POST['userNumber']);
   $userProducts = mysqli_real_escape_string($conn, implode(', ', $_POST['langOpt'])); 
   $userPass = mysqli_real_escape_string($conn, sha1($_POST['userPass']));
   $userArrive = mysqli_real_escape_string($conn, $_POST['userArrive'] );

   $sql = "INSERT INTO users(userName, userEmail, countryCode, userNumber, userProducts, userArrive, userPass) values('{$userName}', '{$userEmail}', '{$countryCode}', '{$userNumber}', '{$userProducts}', '{$userArrive}', '{$userPass}')";
   // die($sql);

   if(mysqli_query($conn,$sql)){
       echo "Success";
       header("location:$location/index.php");
   }else{
       print("Queryt Failed");
   }
?>