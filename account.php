<?php include"header3.php" ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title>Soujoud- modifier votre compte </title>

   <!-- Favicon  -->
   <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Core Style CSS -->
    <link rel="stylesheet" href="css/core-style.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <!-- ##### Checkout Area Start ##### -->
    <div class="checkout_area section-padding-80">
        <div class="container">
            <div class="row">

                <div class="col-12 col-md-6">
                    <div class="checkout_details_area mt-50 clearfix">

                        <div class="cart-page-heading mb-30">
                            <h5>Account</h5>
                        </div>

                        <form action="modifieruser.php" method="post">
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="pseudo"> modifier pseudo<span>*</span></label>
                                    <input type="text"  name="pseudo1" value="" >
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="first_name">modifier Nom<span>*</span></label>
                                    <input type="text"  name="nom1" value="" >
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="last_name">modifier Prenom<span>*</span></label>
                                    <input type="text"  name="prenom1" value="" >
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="mot-depasse">modifier mot de passe1<span>*</span></label>
                                    <input type="password"  name="mdp1" value="" >
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="mot-depasseconf"> confirmation mot de passe<span>*</span></label>
                                    <input type="password"  name="pass2" value="" required>
                                </div>
                                      <div class="col-12 mb-3">
                                    <label for="ville">Ville <span>*</span></label>
                                    <select class="w-100" name="ville1">
                                        <option value="usa">Bizerte</option>
                                        <option value="uk">Grand Tunis</option>
                                        <option value="ger">Beja</option>
                                        <option value="fra">Jendouba</option>
                                        <option value="ind">Nabeul</option>
                                        <option value="aus">Zaghouan</option>
                                        <option value="bra">Siliana</option>
                                        <option value="cana">le Kef</option>
                                        <option value="usa">Kairouan</option>
                                        <option value="uk">Mahdia</option>
                                        <option value="ger">Gabes</option>
                                        <option value="fra">Tozeur</option>
                                        <option value="ind">Medenine</option>
                                        <option value="aus">Jerba</option>
                                        <option value="bra">Tataouine</option>
                                    </select>
                                </div>
                                <div class="col-12 mb-3">
                                    <label for="postcode">Code postal <span>*</span></label>
                                    <input type="text"  name="zip1" value="">
                               </div>
                               <div class="col-md-6 mb-3">
                                   <label for="adresse">adresse<span>*</span></label>
                                   <input type="text"  name="adresse1" value="" >
                               </div>
                                <div class="col-12 mb-3">
                                    <label for="phone_number">telephone <span>*</span></label>
                                    <input type="number"  name="tel1" min="0" value="">
                                </div>
                                <div class="col-12 mb-4">
                                    <label for="email_address">Adresse email<span>*</span></label>
                                    <input type="email"  name="mail1" value="">
                                </div>


                                    <div class="custom-control custom-checkbox d-block mb-2">
                                      <input type="submit" name="signup-bt" value="modifier" class="ajouter" >
                                    </div>

                            </div>
                        </form>
                    </div>
                </div>

                        <div id="accordion" role="tablist" class="mb-4">
   <a href="supp.php">Cliquez içi pour supprimer votre compte</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Checkout Area End ##### -->

    <!-- ##### Footer Area Start ##### -->
    <footer class="footer_area clearfix">
        <div class="container">
            <div class="row">
                <!-- Single Widget Area -->
                <div class="col-12 col-md-6">
                    <div class="single_widget_area d-flex mb-30">
                        <!-- Logo -->
                        <div class="footer-logo mr-50">
                            <a href="#"><img src="img/core-img/logo2.png" alt=""></a>
                        </div>
                        <!-- Footer Menu -->
                        <div class="footer_menu">
                            <ul>
                                <li><a href="shop.html">Shop</a></li>
                                <li><a href="contact.html">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Single Widget Area -->

            </div>

            <div class="row align-items-end">
                <!-- Single Widget Area -->
                <div class="col-12 col-md-6">
                    <div class="single_widget_area">
                        <div class="footer_heading mb-30">
                            <h6>Subscribe</h6>
                        </div>
                        <div class="subscribtion_form">
                            <form action="#" method="post">
                                <input type="email" name="mail" class="mail" placeholder="Your email here">
                                <button type="submit" class="submit"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- Single Widget Area -->
                <div class="col-12 col-md-6">
                    <div class="single_widget_area">
                        <div class="footer_social_area">
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Pinterest"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Youtube"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
            </div>

<div class="row mt-5">
                <div class="col-md-12 text-center">
                    <p>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
    Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </p>
                </div>
            </div>

        </div>


    </footer>
    <!-- ##### Footer Area End ##### -->

    <!-- jQuery (Necessary for All JavaScript Plugins) -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Plugins js -->
    <script src="js/plugins.js"></script>
    <!-- Classy Nav js -->
    <script src="js/classy-nav.min.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>

</body>

</html>
