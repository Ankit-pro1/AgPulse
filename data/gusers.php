<?php

   include_once 'config.php';

   $gName = mysqli_real_escape_string($conn, $_POST['gName']) ;
   $gCompany = mysqli_real_escape_string($conn, $_POST['gCompany']);
   $gEmail = mysqli_real_escape_string($conn, $_POST['gEmail']);
   $gPhone = mysqli_real_escape_string($conn, $_POST['gPhone']);
   $gReq = mysqli_real_escape_string($conn, $_POST['gReq']); 
   $date = date("d-m-y");

   $sql = "INSERT INTO gusers(gName, gCompany, gEmail, gPhone, gReq, date) values('{$gName}', '{$gCompany}', '{$gEmail}', '{$gPhone}', '{$gReq}', '{$date}')";
   // die($sql);

   if(mysqli_query($conn,$sql)){
       header("location:$location/index.php");
   }else{
       print("Queryt Failed");
   }
?>