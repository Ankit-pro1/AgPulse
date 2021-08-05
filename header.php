<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AgPulse - Market Data to Market Intelligence</title>

    <!-- Fontawesome CDN -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">

    <!-- Bootstrap CSS (Version--4.5.3) -->
    <link rel="stylesheet" href="./css/bootstrap.css">

    <!-- External index CSS -->
    <link rel="stylesheet" href="./css/style.css">

    <!-- Responsive CSS -->
    <link rel="stylesheet" href="./css/responsive.css">

    <!-- CSS Mutliselect Plugin -->
    <link rel="stylesheet" href="./Mutliselect/bootstrap-multiselect.css">

</head>

<body>
    <!------------------------- Navigation Section --------------------------->
    <div id="navigation-bar">
        <div class="container">
            <nav class="navbar navbar-expand-md">
                <!-- Brand -->
                <a class="navbar-brand" href="#">
                    <img src="./logo/agpulse-black-logo.png" alt="" width="230px">
                </a>

                <!-- Toggler/collapsibe Button -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                    <span class="navbar-toggler-custom-icon"><i class="fas fa-bars"></i></span>
                </button>

                <!-- Links -->
                <div class="collapse navbar-collapse" id="collapsibleNavbar">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Home</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-toggle="dropdown">About us</a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Who we are</a>
                                <a class="dropdown-item" href="#">What we do</a>
                                <a class="dropdown-item" href="#">Our Team</a>
                                <a class="dropdown-item" href="#">Presention</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#services-section">Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#blog-section">Blogs</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link custom-signin-btn" data-toggle="modal" data-target="#signinModal">Sign In</a>
                            <!-- Modal -->
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>


    <!-- Sign in modal pop box -->
    <div id="signinModal" class="modal" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Sign In</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <form action="">
                        <div class="form-group">
                            <label for="userEmail">Email</label>
                            <input type="email" name="userEmail" id="userEmail2" class="form-control" placeholder="Enter your email" required>
                        </div>
                        <div class="form-group">
                            <label for="userPass">Password</label>
                            <input type="password" name="userPass" id="userPass" class="form-control" placeholder="Enter password" required>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn primary-default btn-block btn-success">SIGN IN</button>
                        </div>
                    </form>
                </div>
                <div class="custom-modal-footer">
                    <p class="text-center">Don't have an Account? <span data-toggle="modal" data-target="#signupModal" style="font-weight: 600; cursor:pointer;" id="signupModalBtn">Sign Up</span></p>
                </div>
            </div>

        </div>
    </div>

    <!-- Create an account pop box -->
    <div id="signupModal" class="modal" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Sign Up</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <form action="">
                        <div class="form-group">
                            <label for="userName">Full Name</label>
                            <input type="text" name="userName" id="userName2" class="form-control" placeholder="Enter your name" required>
                        </div>
                        <div class="form-group">
                            <label for="userEmail">Email Address</label>
                            <input type="email" name="userEmail" id="userEmail2" class="form-control" placeholder="Enter corporate email" required>
                        </div>
                        <div class="form-group">
                            <label for="userNumber">Phone Number</label>
                            <input type="tel" name="userNumber" id="userNumber2" class="form-control" placeholder="Enter phone number" required>
                        </div>
                        <div class="form-group">
                            <label for="userPass">Password</label>
                            <input type="password" name="userPass" id="userPass2" class="form-control" placeholder="Choose password" required>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn primary-default btn-block btn-success">SIGN UP</button>
                        </div>
                    </form>
                </div>
                <div class="custom-modal-footer">
                    <!-- <p class="text-center">Have an Account?<span data-toggle="modal" data-target="#signinModal" style="font-weight: 600; cursor:pointer;" id="signinModalBtn">Sign In</span></p> -->
                </div>
            </div>

        </div>
    </div>
    <!-------------XX------------ Navigation Section ------------XX--------------->