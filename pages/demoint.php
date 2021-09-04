<?php
    include_once 'configdata.php';
    $sName = mysqli_real_escape_string($conn, $_POST['subName']);
    $_SESSION['sName'] = $sName;
    
    $sCompany = mysqli_real_escape_string($conn, $_POST['subCompany']);
    
    $spName = mysqli_real_escape_string($conn, $_POST['pName']);
    $_SESSION['spName'] = $spName;
    
    $spPrice = mysqli_real_escape_string($conn, $_POST['pPrice']);
    $_SESSION['spPrice'] = $spPrice;
    
    $country = mysqli_real_escape_string($conn, $_POST['countryCode']);
    $_SESSION['country'] = $country;
    
    $swPhone = mysqli_real_escape_string($conn, $_POST['subwPhone']);
    $_SESSION['swPhone'] = $swPhone;
    
    $sPhone = mysqli_real_escape_string($conn, $_POST['subPhone']);
    $sEmail = mysqli_real_escape_string($conn, $_POST['subEmail']);
    $_SESSION['sEmail'] = $sEmail;
    
    $sAdd = mysqli_real_escape_string($conn, $_POST['subAddress']);
    
    $sCity = mysqli_real_escape_string($conn, $_POST['subCity']);
    
    $sCountry = mysqli_real_escape_string($conn, $_POST['subCountry']);
    
    $sRem = mysqli_real_escape_string($conn, $_POST['remember']);
    
    $sDate = date("d-m-Y");
    
    $sql = "INSERT INTO intsub(sName, sCompany, spName, spPrice, country, swPhone, sPhone, sEmail, sAdd, sCity, sCountry, sRem, date) values('{$sName}', '{$sCompany}', '{$spName}', '{$spPrice}', '{$country}','{$swPhone}', '{$sPhone}','{$sEmail}', '{$sAdd}', '{$sCity}', '{$sCountry}', '{$sRem}', '{$sDate}')";
    mysqli_query($conn, $sql) or die("Query Failed"); 
?>
<div class="pay-failed-msg">
    <p>
        “Our payment gateway is under maintenance. Someone from our team will get back to you within 24 hrs to process the request. Sorry for the inconvenience“
    </p>
    <a href="http://localhost/AgPulse/" class="razorpay-payment-button">Go To Home Link</a>
</div>
<style>
    .pay-failed-msg{
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        height: 100vh;
    }
    .pay-failed-msg p{
        font-size: 24px;
        width: 700px;
        text-align: center;
        color: darkred;
    }
    .razorpay-payment-button{
        padding: 10px 50px;
        font-size: 18px;
        background: darkred;
        color: white;
        outline: none;
        display: block;
        border: none;
    }
</style>