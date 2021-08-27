<?php
    $hostname = 'localhost';
    $hostUser = 'root';
    $hostPass = '';
    $db = 'agpulse';
    $port = '3307';
    $conn = mysqli_connect($hostname, $hostUser, $hostPass, $db, $port) or die(mysqli_connect_error());

    $location = "http://localhost/AgPulse/admin";
?>