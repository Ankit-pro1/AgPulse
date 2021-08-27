<!doctype html>
<html>
   <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>ADMIN | Login</title>

        <!-- Bootstrap File -->
        <link rel="stylesheet" href="../css/bootstrap.css">

         <!-- Fontawesome CDN -->
         <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">

        <!-- Style CSS -->
        <link rel="stylesheet" href="./css/style.css">
    </head>

    <body>                                      
        <div id="wrapper-admin" class="body-content">                   
            <div class="container">
                <div class="row">                           
                    <div class="offset-4 col-md-4">                  
                        <img class="logo" src="../logo/agpulse-black-logo.png">                        
                        <h3 class="mt-4 mb-4">Admin</h3>          
                        <!-- Form Start -->                                         
                        <form  action="<?php $_SERVER['PHP_SELF']?>" method ="POST">
                            <div class="form-group">
                                <label>Username</label>
                                <input type="text" name="username" class="form-control" placeholder="username" required>
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" name="password" class="form-control" placeholder="password" required>
                            </div>
                            <input type="submit" name="login" class="btn btn-block btn-success" value="login" />
                        </form>
                        <!-- /Form  End -->
                        <?php
                            if(isset($_POST['login'])){
                                include_once 'config.php';
                                $username = mysqli_real_escape_string($conn, $_POST['username']);
                                $password = md5($_POST['password']);

                                $sql = "SELECT adminId, adminName, role FROM admin WHERE adminUsername = '{$username}' AND adminPass = '{$password}'";

                                $result = mysqli_query($conn, $sql) or die("Query Failed");
                                if(mysqli_num_rows($result) > 0){
                                    while($row = mysqli_fetch_assoc($result)){
                                        session_start();
                                        $_SESSION['admin_id'] = $row['adminId'];
                                        $_SESSION['admin_name'] = $row['adminName'];
                                        $_SESSION['role'] = $row['role'];
                                        header("location:$location/blog.php");
                                    }
                                }else{
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
