<?php

session_start();
require('config.php');
require('configdata.php');

 // Email Script
 require('smtp/PHPMailerAutoload.php');

require('razorpay-php/Razorpay.php');
use Razorpay\Api\Api;
use Razorpay\Api\Errors\SignatureVerificationError;

$success = true;

$error = "Payment Failed";

if (empty($_POST['razorpay_payment_id']) === false)
{
    $api = new Api($keyId, $keySecret);

    try
    {
        // Please note that the razorpay order ID must
        // come from a trusted source (session here, but
        // could be database or something else)
        $attributes = array(
            'razorpay_order_id' => $_SESSION['razorpay_order_id'],
            'razorpay_payment_id' => $_POST['razorpay_payment_id'],
            'razorpay_signature' => $_POST['razorpay_signature']
        );

        $api->utility->verifyPaymentSignature($attributes);
    }
    catch(SignatureVerificationError $e)
    {
        $success = false;
        $error = 'Razorpay Error : ' . $e->getMessage();
    }
}

if ($success === true)

{
    // mail("ankitkumar151615@gmail.com","Transaction Status","Hii Ankit Kumar");
    $order_id = $_SESSION['razorpay_order_id'];
    $payment_id =  $_POST['razorpay_payment_id'];
    $pDate = date("d-m-Y H:i:s");
    $sName = $_SESSION['sName'];
    $swPhone = $_SESSION['swPhone'];
    $sEmail = $_SESSION['sEmail'];
    $spPrice = $_SESSION['spPrice'];
    $spName = $_SESSION['spName'];

    $sql = "INSERT INTO indpay(orderId, paymentId, status, pDate, sName, swPhone, sEmail, spName, spPrice) VALUES('{$order_id}', '{$payment_id}', 'Success','{$pDate}', '{$sName}', '{$swPhone}', '{$sEmail}', '{$spName}', '{$spPrice}')";
    mysqli_query($conn, $sql);

    //    Email on success
    $msg="Payment of Rupees ".$spPrice." has been Successful";
	$mail=new PHPMailer(true);
	$mail->isSMTP();
	$mail->Host="smtp.gmail.com";
	$mail->Port=587;
	$mail->SMTPSecure="tls";
	$mail->SMTPAuth=true;
	$mail->Username="ak446487@gmail.com";
	$mail->Password="sheetal@1234";
	$mail->SetFrom("agpulseanalytica@gmail.com");
	$mail->addAddress($sEmail);
	$mail->IsHTML(true);
	$mail->Subject="AgPulse Payment";
	$mail->Body=$msg;
	$mail->SMTPOptions=array('ssl'=>array(
		'verify_peer'=>false,
		'verify_peer_name'=>false,
		'allow_self_signed'=>false
	));
	if($mail->send()){
		//echo "Mail send";
	}else{
		//echo "Error occur";
	}

    $html = "<p>Your payment was successful</p>
             <a href='http://localhost/AgPulse/' id='payment-completetion-return-btn'>Return to Home Page</a>";
}
else
{
    $sql = "INSERT INTO indpay(orderId, paymentId, status, pDate, sName, swPhone, sEmail, spName, spPrice) VALUES('{$order_id}', '{$payment_id}', 'Failed','{$pDate}', '{$sName}', '{$swPhone}', '{$sEmail}', '{$spName}','{$spPrice}')";
    mysqli_query($conn, $sql);

    //    Email on failed
    $msg="Payment failed of Rs.".$spPrice." Payment ID ".$spPrice."";
	$mail=new PHPMailer(true);
	$mail->isSMTP();
	$mail->Host="smtp.gmail.com";
	$mail->Port=587;
	$mail->SMTPSecure="tls";
	$mail->SMTPAuth=true;
	$mail->Username="ak446487@gmail.com";
	$mail->Password="sheetal@1234";
	$mail->SetFrom("agpulseanalytica@gmail.com");
	$mail->addAddress($sEmail);
	$mail->IsHTML(true);
	$mail->Subject="AgPulse Payment";
	$mail->Body=$msg;
	$mail->SMTPOptions=array('ssl'=>array(
		'verify_peer'=>false,
		'verify_peer_name'=>false,
		'allow_self_signed'=>false
	));
	if($mail->send()){
		//echo "Mail send";
	}else{
		//echo "Error occur";
	}

    $html = "<p>Your payment was successful</p>
             <a href='http://localhost/AgPulse/' id='payment-completetion-return-btn'>Return to Home Page</a>";
    $html = "<p>Your payment failed</p>
             <p>{$error}</p>";
}

echo $html;
?>
<style>
    body{
        font-size: 30px;
        height: 100vh;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        color: green;
    }
    #payment-completetion-return-btn{
        text-decoration: none;
        padding: 4px 10px;
        border: 2px solid black;
        color: white;
        background-color: black;
        border-radius: 4px;
    }
</style>