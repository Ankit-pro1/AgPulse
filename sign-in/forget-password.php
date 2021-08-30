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
                    <h3 class="mt-4 mb-4">Forget Password</h3>
                    <!-- Form Start -->
                    <form method="POST">
                        <div class="form-group">
                            <label>Enter the registered email</label>
                            <input type="text"  class="form-control" placeholder="Enter the Email" id="email" required>
                        </div>
                        <button type="button" class="btn btn-block btn-success" onclick="send_otp()"/>Send OTP</button>
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
                
                }
            });
        }
    </script>
</body>

</html>