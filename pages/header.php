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
    <link rel="stylesheet" href="../css/bootstrap.css">

    <!-- External main CSS -->
    <link rel="stylesheet" href="../css/style.css">

    <!--  pages CSS -->
    <link rel="stylesheet" href="pages.css">

    <!-- CSS Mutliselect Plugin -->
    <link rel="stylesheet" href="../Mutliselect/bootstrap-multiselect.css">

    <!-- Responsive CSS -->
   <link rel="stylesheet" href="../css/responsive.css">

   <!-- Pages Responsive CSS -->
   <link rel="stylesheet" href="pages-responsive.css">

</head>

<body>
    <!------------------------- Navigation Section --------------------------->
    <div id="navigation-bar">
        <div class="container">
            <nav class="navbar navbar-expand-lg">
                <!-- Brand -->
                <a class="navbar-brand" href="#">
                    <img src="../logo/agpulse-black-logo.png" alt="" width="230px">
                </a>

                <!-- Toggler/collapsibe Button -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                    <span class="navbar-toggler-custom-icon"><i class="fas fa-bars"></i></span>
                </button>

                <!-- Links -->
                <div class="collapse navbar-collapse" id="collapsibleNavbar">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="../index.php">Home</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link" data-toggle="dropdown">About us</a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="about-us-inner.php">About us</a>
                                <a class="dropdown-item" href="team.php">Team</a>
                                <a class="dropdown-item" href="AgPulse-Presentation.pdf">Company Profile</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../#services-section">Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../#blog-section">Blogs</a>
                        </li>
                        <li class="nav-item">
                        <?php 
                                session_start();
                                if(isset($_SESSION['wuserName'])){
                                    echo '<a class="nav-link" href="../sign-in/logout.php">Hi '.$_SESSION["wuserName"].' |<span style="font-weight:600"> Log Out</span></a>';
                                }else{
                                    echo '<a class="nav-link " href="../sign-in" id="sign-in-btn">Sign In</a>';
                                }
                            ?>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>