<?PHP
include "../core/produitC.php";
include "../core/etoileC.php";
include "../entities/panier.php";
include "../core/panierC.php";
$panierC=new panierC();
$listepanier=$panierC->afficherprod();
$tot=0;
$extot=0;
$nb=$panierC->countp();
foreach ($nb as $key ) { $foxtrot=$key['a']; }
//var_dump($listeEmployes->fetchAll());

$produit1C=new produitC();
$etoileC=new etoileC();
$listeProduits=$produit1C->afficherProduits();
session_start ();  
include "../entities/carte.php";
include "../core/carteC.php";
include "../entities/client.php";
include "../core/clientC.php";
include "../entities/commande.php";
include "../core/commandeC.php";
include "../core/transC.php";
include "../core/categorieC.php";
include "../core/commentaireC.php";
$listeProduits1=$produit1C->afficherProduits1();
$categorie1C=new categorieC();
$listeCategories=$categorie1C->afficherCategories();
//var_dump($listeEmployes->fetchAll());
?>

<?php
if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];
    // search in all table columns
    // using concat mysql function
    $query = "SELECT * FROM produit WHERE CONCAT(nom, refe) LIKE '%".$valueToSearch."%'";
    $search_result = filterTable($query);
    
}
 else {
    $query = "SElECT * From produit p inner join categorie c  ON  p.refe= c.refe and c.affichage='oui'";
    $search_result = filterTable($query);
}

// function to connect and execute the query
function filterTable($query)
{
    $connect = mysqli_connect("localhost", "root", "", "web");
    $filter_Result = mysqli_query($connect, $query);
    return $filter_Result;
}

?>
<?php?>

<!doctype html>
<html class="no-js" lang="en">



<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title>Essence - Fashion Ecommerce Template</title>

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
                <a class="nav-brand" href="index.html"><img src="img/core-img/logo.png" alt=""></a>
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
                            <li><a href="#">Shop</a>
                                <div class="megamenu">
                                    <ul class="single-mega cn-col-4">
                                        <li class="title">Women's Collection</li>
                                        <li><a href="shop.html">Dresses</a></li>
                                        <li><a href="shop.html">Blouses &amp; Shirts</a></li>
                                        <li><a href="shop.html">T-shirts</a></li>
                                        <li><a href="shop.html">Rompers</a></li>
                                        <li><a href="shop.html">Bras &amp; Panties</a></li>
                                    </ul>
                                    <ul class="single-mega cn-col-4">
                                        <li class="title">Men's Collection</li>
                                        <li><a href="shop.html">T-Shirts</a></li>
                                        <li><a href="shop.html">Polo</a></li>
                                        <li><a href="shop.html">Shirts</a></li>
                                        <li><a href="shop.html">Jackets</a></li>
                                        <li><a href="shop.html">Trench</a></li>
                                    </ul>
                                    <ul class="single-mega cn-col-4">
                                        <li class="title">Kid's Collection</li>
                                        <li><a href="shop.html">Dresses</a></li>
                                        <li><a href="shop.html">Shirts</a></li>
                                        <li><a href="shop.html">T-shirts</a></li>
                                        <li><a href="shop.html">Jackets</a></li>
                                        <li><a href="shop.html">Trench</a></li>
                                    </ul>
                                    <div class="single-mega cn-col-4">
                                        <img src="img/bg-img/bg-6.jpg" alt="">
                                    </div>
                                </div>
                            </li>
                            <li><a href="#">Pages</a>
                                <ul class="dropdown">
                                    <li><a href="index.html">Home</a></li>
                                    <li><a href="shop.html">Shop</a></li>
                                    <li><a href="single-product-details.html">Product Details</a></li>
                                    <li><a href="checkout.html">Checkout</a></li>
                                    <li><a href="blog.html">Blog</a></li>
                                    <li><a href="single-blog.html">Single Blog</a></li>
                                    <li><a href="regular-page.html">Regular Page</a></li>
                                    <li><a href="contact.html">Contact</a></li>
                                </ul>
                            </li>
                            <li><a href="blog.html">Blog</a></li>
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
                <!-- Favourite Area -->
                <div class="favourite-area">
                    <a href="#"><img src="img/core-img/heart.svg" alt=""></a>
                </div>
                <!-- User Login Info -->
                <div class="user-login-info">
                    <a href="#"><img src="img/core-img/user.svg" alt=""></a>
                </div>
                <!-- Cart Area -->
                <div class="cart-area">
                    <a href="#" id="essenceCartBtn"><img src="img/core-img/bag.svg" alt=""> <span>3</span></a>
                </div>
            </div>

        </div>
    </header>
    <!-- ##### Header Area End ##### -->

    <!-- ##### Right Side Cart Area ##### -->
    <div class="cart-bg-overlay"></div>

    <div class="right-side-cart-area">

        <!-- Cart Button -->
        <div class="cart-button">
            <a href="#" id="rightSideCart"><img src="img/core-img/bag.svg" alt=""> <span class="number"><?php echo $foxtrot; ?></span></a>
        </div>

        <div class="cart-content d-flex">

            <!-- Cart List Area -->
            <div class="cart-list">
                <!-- Single Cart Item -->
                <div class="single-cart-item">
                    <a href="#" class="product-image">
                        <img src="img/product-img/product-1.jpg" class="cart-thumb" alt="">
                        <!-- Cart Item Desc -->
                        <div class="cart-item-desc">
                          <span class="product-remove"><i class="fa fa-close" aria-hidden="true"></i></span>
                            <span class="badge">Mango</span>
                            <?php 

                            foreach( $listepanier as $row ){
                            ?>
                            <li>
                               <a class="image"><img src="<?php echo $row['img']; ?>" alt="Product"></a>
                               <div class="content">
                               <a href="single-product.html" class="title"><?php echo $row['nomprod']; ?></a>
                               <span class="price"> <?php echo $row['prix']; ?> </span>
                               <span class="qty"><?php echo $row['quantite']; ?></span>
                               </div>
                               <button class="remove"><i class="fa fa-trash-o"></i></button>
                            </li>
        
                            <?php
                                $tot+=$row['total'];
                                                            }
                            ?>
                        </div>
                    </a>
                </div>
                <!-- Cart Summary -->
                         <div class="cart-amount-summary">
                           <h2>Summary</h2>
                            <ul class="summary-table">
                            <h4 class="sub-total">Total: <span><?php echo $tot."DT"; ?></span></h4>
                             <div class="checkout-btn mt-100">
                             <a href="checkout.html" class="btn essence-btn">check out</a></div>
                    </div>
                </div>      
                    <!-- ##### Breadcumb Area Start ##### -->
    <div class="breadcumb_area bg-img" style="background-image: url(img/bg-img/breadcumb.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="page-title text-center">
                        <h2>dresses</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Breadcumb Area End ##### -->

    <!-- ##### Shop Grid Area Start ##### -->
    <section class="shop_grid_area section-padding-80">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-4 col-lg-3">
                <div class="cart-table table-responsive mb-40">
                    <table class="table">
                        <thead>
                            <tr>
                                <th class="pro-thumbnail">Image</th>
                                <th class="pro-title">ID Panier</th>
                                <th class="pro-price">Produit</th>
                                <th class="pro-quantity">Prix</th>
                                <th class="pro-subtotal">Quantite</th>
                                <th class="pro-remove">Supprimer</th>
                                </tr>
                        </thead>
    <tbody> <?php 
        foreach( $listepanier as $row )
         { 
         ?>
            <form method="POST">
                <tr>
                <td class="pro-thumbnail"><img src="<?php echo $row['img']; ?>" alt="Product" style="width:200px;height:200px;" ></td>
                <td class="pro-title"><?php echo $row['idp']; ?></td>
                <td class="pro-price"><?php echo $row['nomprod']; ?></td>
                <td class="pro-quantity"><div class="pro-qty"><input type="text" name="quantitee" value="<?php echo $row['quantite'];?>"></div></td>
                                    <?php?>
                <td class="pro-subtotal"><?php echo $row['prix']; ?></td>
                <td >
                <input type="submit" style="background-color: white;" class="btn btn-small btn-circle hover-theme mb-30" name="Supprimer"  value="Supprimer">
                <input type="hidden" value="<?php echo $row['idp']; ?>" name="idp_supp">
                </td>
                <td> 
                <input name="modifier" type="submit" value="Modifier" style="background-color: white;" class="btn btn-small btn-circle hover-theme mb-30" >
                <input type="hidden" value="<?php echo $row['idp']; ?>" name="btata">             
                </td>      
                </tr>
            </form>

            <?php
                if(isset($_POST['Supprimer']))
                  {
                    $panierC->supprimerprod($_POST["idp_supp"]);
                    echo "<META http-equiv='refresh' content='0;URL=cart.php'>";
                  }                                      
              else if (isset($_POST['modifier'])){
                            $hotel=$_POST['quantitee'];
                            $x=$hotel*$row['prix'];
                            $panierC->modifierpanier($hotel,$x,$_POST['btata']);
                            echo "<META http-equiv='refresh' content='0;URL=cart.php'>";
                            }
                            $tot+=$row['total'];
                            }
                            ?>                                       
</tbody>
                                  
</table>
</div>                   
    <div class="row">
        <div class="col-lg-6 col-12 mb-15">
            <!-- Calculate Shipping -->
                <div class="calculate-shipping">
                    <h4>Demander un commande</h4>                    
                    <form method="POST">
                    <div class="row">                            
                    <div class="col-md-6 col-12 mb-25">
                    <input type="submit" name="demander" value="Demander">
                    </div>
                    </div>
                    </form>
<?php
$what="empty";
$zulu = 5;
    if (isset($_POST['demander'])) {                  
        $transC = new transC();
        $x = $transC->count($_SESSION['username']);
    
    foreach($x as $row) {
    $xray = $row['a'];
        if ($xray <$zulu ) {
            echo "<script type='text/javascript'>";
            echo "alert('Vous ne beneficiez pas d un commande');";
            echo "</script>";
            }
            else {
            $z = 0;
            $commandef = $commandeC->firstfree($z);
            
            foreach($commandef as $row) {  
            $what= $row['nomc'];
            $zulu=$zulu*2;
            }
        }
    }
}
?>
</div>


            <!-- Discount commande -->
                <div class="discount-commande">
                    <h4>Discount commande Code</h4>
                        <form method="POST">
                            <div class="row">
                                <div class="col-md-6 col-12 mb-25">
                                    <input type="text" value="<?php echo $what;?>" name="nomc" placeholder="commande Code">
                                    </div>
                                    <div class="col-md-6 col-12 mb-25">
                                    <input type="submit" name="apply" value="Apply Code">
                                    </div>
                                </div>
                            </form>
<?php
    $extot=$tot;
        if (isset($_POST['apply'])) {
            $x= $_POST['nomc'];
            $listetat= $commandeC->verifetat($x);
            $etat= 1;
            $listecommande = $commandeC->getcode($x);
        foreach ($listetat as $key) {
        $o = $key['etat'];
        //echo $o;
        if ( $o != 0) /*|| (!empty($listecommande)) )*/ {
            //var_dump($o);
            echo "<script type='text/javascript'>";
            echo "alert('commande utilisé ou bien inexistant');";
            echo "</script>";
        }
        
        else {
            foreach ($listecommande as $row) {
                $tot = $tot - ($tot * $row['valeur']);        
                echo $tot;
            }
            $commandeC->setetat($x, $etat);
            
            //var_dump($listecommande);
            //echo "<META http-equiv='refresh' content='0;URL=panierFE.php'>";
            /*if($listecommande)
            {}*/
        }
    }
}
?>

</div>
</div>

                    <!-- Cart Summary -->
                    <div class="col-lg-6 col-12 mb-40 d-flex">
                     <form method="POST" action="ajoutertrans.php">
                        <div class="cart-summary">
                            <div class="cart-summary-wrap">
                                <h4>Cart Summary</h4>
                                <p>Sub Total <span><?php echo $extot ?>DT</span></p>
                                <h2>Grand Total <span><?php echo $tot ?>DT</span></h2>
                            </div>
                            <form method="POST" action="ajoutertrans.php">
                            <div class="cart-summary-button">
                                <button class="checkout-btn" type="submit">Payer</button>
                                <input type="hidden" name="alo" value="<?php echo $tot ?>">
                                <button onclick="$('SelectorToPrint').printElement();">Imprimer</button>
                         </div>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    <!-- ##### Shop Grid Area End ##### -->

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
                                <li><a href="blog.html">Blog</a></li>
                                <li><a href="contact.html">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Single Widget Area -->
                <div class="col-12 col-md-6">
                    <div class="single_widget_area mb-30">
                        <ul class="footer_widget_menu">
                            <li><a href="#">Order Status</a></li>
                            <li><a href="#">Payment Options</a></li>
                            <li><a href="#">Shipping and Delivery</a></li>
                            <li><a href="#">Guides</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Terms of Use</a></li>
                        </ul>
                    </div>
                </div>
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