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

</head>

<body>
    <div id="wrapper-user" class="body-content">
        <div class="container">
            <div class="row">
                <div class="offset-4 col-md-4">
                    <img class="logo" src="../logo/agpulse-black-logo.png">
                    <h3 class="mt-4 mb-4">Sign In</h3>
                    <!-- Form Start -->
                    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
                        <div class="form-group">
                            <label>Email address</label>
                            <input type="text" name="useremail" class="form-control" placeholder="Enter the Email" required>
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control" placeholder="Enter the Password" required>
                        </div>
                        <input type="submit" name="sign-in" class="btn btn-block btn-success" value="Sign In" />
                        <div class="row justify-content-around pt-2 pb-2 imp-links">
                            <a href="forget-password.php" class="text-success">forget your password?</a>
                            <a href="create-an-account.php" class="text-dark">create an account</a>
                        </div>
                    </form>
                    <!-- /Form  End -->
                    <?php
                    if (isset($_POST['sign-in'])) {
                        include_once 'config.php';
                        $useremail = mysqli_real_escape_string($conn, $_POST['useremail']);
                        $password = sha1($_POST['password']);

                        $sql = "SELECT userId, userName, userEmail FROM users WHERE userEmail = '{$useremail}' AND userPass = '{$password}'";

                        $result = mysqli_query($conn, $sql) or die("Query Failed");
                        if (mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                session_start();
                                $_SESSION['wuserId'] = $row['userId'];
                                $_SESSION['wuserName'] = strtok($row['userName'], " ");
                                $_SESSION['wuserEmail'] = $row['userEmail'];
                                // $_SESSION['role'] = $row['role'];
                                header("location:$location/");
                            }
                        } else {
                            echo "<p style='color:red;'>Wrong username or password</p>";
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>

</body>

</html>