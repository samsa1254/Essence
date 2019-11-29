<!DOCTYPE html>
<html lang="en">
<?php session_start();
//if(isset($_SESSION["l"]))
//{

//}
//else {
  //header("location:index1.php");
//}
?>
<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title>Soujoud- Fashion Ecommerce </title>

   <!-- Favicon  -->
   <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Core Style CSS -->
    <link rel="stylesheet" href="css/core-style.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <!-- ##### Header Area Start ##### -->
    <header class="header_area">
        <div class="classy-nav-container breakpoint-off d-flex align-items-center justify-content-between">
            <!-- Classy Menu -->
            <nav class="classy-navbar" id="essenceNav">
                <!-- Logo -->
                <a class="nav-brand" href="index.php"><img src="logosoujoud.png" alt="" width="150px"></a>
                <!-- Navbar Toggler -->
                <div class="classy-navbar-toggler">
                    <span class="navbarToggler"><span></span><span></span><span></span></span>
                </div>
                <!-- Menu -->
                <div class="classy-menu">
                    <!-- close btn -->
                    <div class="classycloseIcon">
                        <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                    </div>
                    <!-- Nav Start -->
                    <div class="classynav">
                        <ul>
                            <li><a href="#" class='title'>femmes</a>
                                <div class="megamenu">
                                    <ul class="single-mega cn-col-4">
                                        <li><a href="shop.php">Robes</a></li>
                                        <li><a href="shop.php">Accessoires</a></li>
                                        <li><a href="shop.php">Outfit Traditionel</a></li>
                                    </ul>

                                    <div class="single-mega cn-col-4">
                                        <img src="img/bg-img/bg-6.jpg" alt="">
                                    </div>
                                </div>
                            </li>
                            <li><a href="#" class='title'><?php if(isset($_SESSION["l"])){echo $_SESSION["l"];}else {echo "homme";}  ?></a>
                                <div class="megamenu">
                                    <ul class="single-mega cn-col-4">
                                        <li><a href="shop.php">T-shirts</a></li>
                                        <li><a href="shop.php">Outfit Traditionel</a></li>
                                    </ul>
                                    <div class="single-mega cn-col-4">
                                        <img src="img/bg-img/bg-6.jpg" alt="">
                                    </div>
                            <li><a href="#">Pages</a>
                                <ul class="dropdown">
                                    <li><a href="index1.php">Acceuil</a></li>
                                    <li><a href="shop.php">Shop</a></li>
                                    <li><a href="contact.html">Contact</a></li>
                                </ul>
                            </li>
                            <li><a href="contact.html">Contact</a></li>
                        </ul>
                    </div>
                    <!-- Nav End -->
                </div>
            </nav>

            <!-- Header Meta Data -->
            <div class="header-meta d-flex clearfix justify-content-end">
                <!-- Search Area -->
                <div class="search-area">
                    <form action="#" method="post">
                        <input type="search" name="search" id="headerSearch" placeholder="Type for search">
                        <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                    </form>
                </div>

                <!-- User Login Info -->
                <div class="user-login-info">
                    <a href=""><img src="img/core-img/user.svg" alt="">Compte</a>
                    <ul class="dropdown">
                        <li><a href="account.php">modifier Compte</a></li>
                        <li><a href="logout.php">deconnecter</a></li>
                        <li><a href="#">modifier panier</a></li>
                    </ul>
                </div>

            </div>

        </div>
    </header>
