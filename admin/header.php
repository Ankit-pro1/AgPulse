<?php
    session_start();
;?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>ADMIN Panel</title>

        <!-- Bootstrap -->
        <link rel="stylesheet" href="../css/bootstrap.css">

        <!-- Fontawesome CDN -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
    
        <!--  Style CSS -->
        <link rel="stylesheet" href="./css/style.css">
    </head>
    <body>
        <!-- HEADER -->
        <div id="header-admin">
            <!-- container -->
            <div class="container">
                <!-- row -->
                <div class="row align-items-center">
                    <!-- LOGO -->
                    <div class="col-md-2">
                        <a href="blog.php"><img class="logo" src="../logo/agpulse-white-logo.png"></a>
                    </div>
                    <!-- /LOGO -->
                      <!-- LOGO-Out -->
                    <div class="offset-7  col-md-3">
                        <a href="logout.php" class="admin-logout"><span style="font-style:italic; font-size: 14px;">Hello</span> <?php echo "$_SESSION[admin_name]" ;?> <span style="color: yellow;">logout</span></a>
                    </div>
                    <!-- /LOGO-Out -->
                </div>
            </div>
        </div>
        <!-- /HEADER -->
        <!-- Menu Bar -->
        <div id="admin-menubar">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                       <ul class="admin-menu">
                            <li>
                                <a href="blog.php">Blog</a>
                            </li>
                            <li>
                                <a href="category.php">Category</a>
                            </li>
                            <li>
                                <a href="users.php">Users</a>
                            </li>
                            <li>
                                <a href="gusers.php">Gusers</a>
                            </li>
                            <li>
                                <a href="indsubs.php">India Subs</a>
                            </li>
                            <li>
                                <a href="indpayment.php">India Payment</a>
                            </li>
                            <li>
                                <a href="intsubs.php">International Subs</a>
                            </li>
                            <li>
                                <a href="admin.php">Admin</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Menu Bar -->
