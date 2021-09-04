<?php
    include_once 'config.php';
    session_start();
    $email = $_POST['email'];
    $sql1 = "SELECT * FROM users WHERE userEmail = '{$email}'";
    $result = mysqli_query($conn, $sql1) or  die("Query Failed");
    if(mysqli_num_rows($result) > 0){
        $otp = rand(11111, 99999);
        $sql2 = "UPDATE users set otp = '{$otp}' WHERE userEmail = '{$email}'";
        mysqli_query($conn, $sql2) or die("Query Failed");
        $_SESSION['email'] = $email;
        $html = "Your OTP verification code is ".$otp;
        smtp_mailer($email, "OTP Verification", $html);
        echo "yes";
    }else{
        echo "not_exist";
    }


    function smtp_mailer($to, $subject, $msg){
        include_once("smtp/PHPMailerAutoload.php");
        $mail=new PHPMailer(true);
        $mail->isSMTP();
        $mail->Host="smtp.gmail.com";
        $mail->Port=587;
        $mail->SMTPSecure="tls";
        $mail->SMTPAuth=true;
        $mail->Username="ak446487@gmail.com";
        $mail->Password="sheetal@1234";
        $mail->SetFrom("agpulseanalytica@gmail.com");
        $mail->addAddress($to);
        $mail->IsHTML(true);
        $mail->Subject=$subject;
        $mail->Body=$msg;
        $mail->SMTPOptions=array('ssl'=>array(
            'verify_peer'=>false,
            'verify_peer_name'=>false,
            'allow_self_signed'=>false
        ));
        if(!$mail->send()){
            return 0;
        }else{
            return 1;
        }
    }
?>