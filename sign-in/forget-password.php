<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In - AgPulse Analytica</title>

    <!-- Fontawesome CDN -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">

    <!-- Bootstrap CSS (Version--4.5.3) -->
    <link rel="stylesheet" href="../css/bootstrap.css">

    <!-- CSS Mutliselect Plugin -->
    <link rel="stylesheet" href="../Mutliselect/bootstrap-multiselect.css">

    <!-- External main CSS -->
    <link rel="stylesheet" href="../css/style.css">

    <!-- Sign In CSS -->
    <link rel="stylesheet" href="style.css">

    <!-- Responsive CSS -->
    <link rel="stylesheet" href="../css/responsive.css">

    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"></script>
</head>

<body>
    <div id="wrapper-user" class="body-content">
        <div class="container">
            <div class="row">
                <div class="offset-4 col-md-4">
                    <img class="logo" src="../logo/agpulse-black-logo.png">
                    <h3 class="mt-4 mb-4">Reset Password</h3>
                    <!-- Form Start -->
                    <form method="POST">
                        <div class="form-group first-box">
                            <label>Enter Registered Email</label>
                            <input type="text"  class="form-control" placeholder="Email" id="email" required>
                            <span id="email_error"></span>
                        </div>
                        <div class="form-group first-box">
                            <button type="button" class="btn btn-block btn-success" onclick="send_otp()">Send OTP</button>
                        </div>

                        <div class="form-group second-box">
                            <label>Enter sent OTP</label>
                            <input type="text"  class="form-control" placeholder="OTP" id="otp" required>
                            <span id="otp_error"></span>
                        </div>
                        <div class="form-group second-box">
                            <button type="button" class="btn btn-block btn-success" onclick="submit_otp()">Submit OTP</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
        function send_otp(){
            var email = $('#email').val();

            $.ajax({
                url:"send-otp.php",
                type:"POST",
                data:"email="+email,
                success:function(result){
                    if(result=="yes"){
                        $('.second-box').show();
                        $('.first-box').hide();
                    }
                    if(result=="not_exist"){
                        $('#email_error').html("Please enter valid email");
                    }
                
                }
            });
        }
        function submit_otp(){
            var otp = $('#otp').val();
            $.ajax({
                url:"check-otp.php",
                type:"POST",
                data:"otp="+otp,
                success:function(result){
                    if(result=="yes"){
                        window.location = "update-password.php";
                    }
                    if(result=="not_exist"){
                       $('#otp_error').html("Please enter valid otp");
                    }
                
                }
            });
        }
    </script>

    <style>
        .second-box{
            display:none;
        }
        #email_error, #otp_error{
            color: red;
        }
    </style>
</body>

</html>