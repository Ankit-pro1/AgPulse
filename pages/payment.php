<?php 
   session_start();
   $_SESSION['selectedPrice'] = $_POST['optradio'];
   echo $_SESSION['selectedPrice'] * 3;
?>