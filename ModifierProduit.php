<?php 
ob_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <title>
  produitss
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,600,700,800" rel="stylesheet" />
  <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
  <!-- Nucleo Icons -->
  <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="../assets/css/menu.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link href="../assets/css/black-dashboard.css?v=1.0.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="../assets/demo/demo.css" rel="stylesheet" />

</head>

<body class="">
 
  <div class="wrapper">
    <div class="main-panel ps">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-absolute navbar-transparent">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle d-inline">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>

 <!--el menu lehna okeeeeeee??????-->

<nav id="primary_nav_wrap">
<ul>
  <li class="current-menu-item"><a href="../examples/dashboard.html">Dashboard</a></li>
  <li><a href="#">Utilisateur</a>
    <ul>
      <li><a href="#">Validation du compte</a></li>
      <li><a href="#">Desactivation du compte</a></li>
      <li><a href="#">Fidèlités</a>
        <ul>
          <li><a href="#">Ajouter des points</a>
          </li>
          <li><a href="#">Afficher les points</a></li>
          <li><a href="#">Modifier des points</a></li>
        </ul>
      </li>   
    </ul>
  </li>
   <li><a href="#">produitss</a>
  <ul>
      <li><a href="./Ajouterproduits1.html">Ajouter un produits</a></li>
      <li><a href="./modif.php">Modifier un produits</a></li>
      <li><a href="./sup.php">Supprimer un produits</a></li>
      <li><a href="./Afficherproduits.php">Afficher les  produitss </a></li>
      <li><a href="#">Catègories</a>
         <ul>
          <li><a href="./ModifierCategories.php">Modifier une Catègorie</a></li>
          <li><a href="./AfficherCategorie.php">Afficher les Catègories</a></li>
          <li><a href="./SupprimerCategorie.php">Supprimer une Catègorie</a></li>
        </ul>
      </li>
    </ul>
  </li>

<li><a  href="#">Panier</a>
   <ul>
     
      <li><a href="../Facture/afficherPanier.php">Supprimer un panier</a></li>
      <li><a href="../Facture/afficherPanier.php">Afficher un panier</a></li>
      <li><a href="#">Facturation</a>
       <ul>
          <li><a href="../Facture/ajouterFacturee.php">Ajouter une facture</a></li>
          <li><a href="../Facture/afficherFacture.php">Modifier une facturese</a></li>
          <li><a href="../Facture/afficherFacture.php">Supprimer les factures</a></li>
          <li><a href="../Facture/afficherFacture.php">Afficher une facture</a></li>
             <li><a href="../Facture/afficherFacture.php">chercher une facture</a></li>
        </ul>
      </li>
    </ul>
  </li>
     <li><a href="#">Livraison</a>
    <ul>
      <li><a href="#">Ajouter une livraison</a></li>
      <li><a href="#">Modifier une livraison</a></li>
      <li><a href="#">Supprimer une livraison</a></li>
      <li><a href="#">Afficher les livraisons </a></li>
      <li><a href="#">Livreur</a>
        <ul>
          <li><a href="#">Ajouter un livreur</a></li>
          <li><a href="#">Modifier un livreur</a></li>
          <li><a href="#">Afficher les livreurs</a></li>
          <li><a href="#">Supprimer un livreur</a></li>
        </ul>
      </li>
    </ul>
  </li>
       <li><a href="#">Evenements</a>
    <ul>
      <li><a href="#">Ajouter un évenement</a></li>
      <li><a href="#">Modifier un évenement</a></li>
      <li><a href="#">Supprimer un évenement</a></li>
      <li><a href="#">Afficher les évenements </a></li>
      <li><a href="#">Soldes</a>
        <ul>
          <li><a href="#">Ajouter les articles soldés</a></li>
          <li><a href="#">Modifier les articles soldés</a></li>
          <li><a href="#">Afficher les articles soldés</a></li>
          <li><a href="#">Supprimer les articles soldés</a></li>
        </ul>
      </li>
    </ul>
  </li>
          <li><a  href="#">Service après vente</a>
    <ul>
      <li><a href="../SAV/afficherReclamation.php">Supprimer une réclamation </a></li>
      <li><a href="../SAV/afficherReclamation.php">Afficher les réclamations </a></li>
           <li><a href="../SAV/afficherReclamation.php">modifier les réclamations </a></li>

        
      </li>
      </li>
    </ul>
  </li>
<li><a href="#">About us</a>
        <li><a href="../../../front/Views/index.php">front end </a>



</li></ul>
<body>
<?PHP
include "../../../entites/produits.php";
include "../../../core/produitsC.php";






if (isset($_GET['id'])){
	$produitsC=new produitsC();

    $result=$produitsC->recupererproduits($_GET['id']);
	foreach($result as $row){
		$id=$row['id'];
		$nom=$row['nom'];
    $description=$row['description'];
    $categorie=$row['categorie'];
    $prix=$row['prix'];
		$quantite=$row['quantite'];	
    $image=$row['image'];


?>
<form method="POST">
<table>
<tr>
<td>id</td>
<td><input type="number" name="id" value="<?PHP echo $id ?>"></td>
</tr>

<tr>
<td>nom</td>
<td><input type="text" name="nom" value="<?PHP echo $nom ?>"></td>
</tr>

<tr>
<td>Desc</td>
<td><input type="text" name="description" value="<?PHP echo $description ?>"></td>
</tr>
<tr>

<tr>
  <tr>
<td>Categorieproduits</td>
<td><input type="text" name="categorie" value="<?PHP echo $categorie ?>"></td>
</tr>

<tr>
<td>Prix</td>
<td><input type="float" name="prix" value="<?PHP echo $prix ?>"></td>
</tr>
	<tr>
<td>quantite</td>
<td><input type="number" name="quantite" value="<?PHP echo $quantite ?>"></td>
</tr>



<td></td>

 <input type="text" name="image" readonly="readonly" value="<?PHP echo $image ?>">
</td>
<tr>
<td><input type="submit" name="modifier" value="modifier"></td>
</tr>
<tr>
<td></td>
<td><input type="hidden" name="id" value="<?PHP echo $_GET['id'];?>"></td>
</tr>


</table>
</form>
<?PHP
	}
}
if (isset($_POST['modifier'])){
$produits=new produits($_POST['id'],$_POST['nom'],$_POST['description'],$_POST['categorie'],$_POST['prix'],$_POST['quantite'],$_POST['image']);
	$produitsC->modifierproduits($produits,$_POST['id']);
	echo $_POST['id'];
	echo "c bon ";
	header('Location: modifcat.php');

}
?>
</nav>
<!-- ds-->
            
            
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse" id="navigation">
            <ul class="navbar-nav ml-auto">
              <li class="search-bar input-group">
                <button class="btn btn-link" id="search-button" data-toggle="modal" data-target="#searchModal"><i class="tim-icons icon-zoom-split"></i>
                  <span class="d-lg-none d-md-block">Search</span>
                </button>
              </li>
              <li class="dropdown nav-item">
                <a href="javascript:void(0)" class="dropdown-toggle nav-link" data-toggle="dropdown">
                  <div class="notification d-none d-lg-block d-xl-block"></div>
                  <i class="tim-icons icon-sound-wave"></i>
                  <p class="d-lg-none">
                    Notifications
                  </p>
                </a>
                <ul class="dropdown-menu dropdown-menu-right dropdown-navbar">
                  <li class="nav-link">
                    <a href="#" class="nav-item dropdown-item">Mike John responded to your email</a>
                  </li>
                  <li class="nav-link">
                    <a href="javascript:void(0)" class="nav-item dropdown-item">You have 5 more tasks</a>
                  </li>
                  <li class="nav-link">
                    <a href="javascript:void(0)" class="nav-item dropdown-item">Your friend Michael is in town</a>
                  </li>
                  <li class="nav-link">
                    <a href="javascript:void(0)" class="nav-item dropdown-item">Another notification</a>
                  </li>
                  <li class="nav-link">
                    <a href="javascript:void(0)" class="nav-item dropdown-item">Another one</a>
                  </li>
                </ul>
              </li>
              <li class="dropdown nav-item">
                <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                  <div class="photo">
                    <img src="../assets/img/anime3.png" alt="Profile Photo">
                  </div>
                  <b class="caret d-none d-lg-block d-xl-block"></b>
                  <p class="d-lg-none">
                    Log out
                  </p>
                </a>
                <ul class="dropdown-menu dropdown-navbar">
                  <li class="nav-link">
                    <a href="javascript:void(0)" class="nav-item dropdown-item">Profile</a>
                  </li>
                  <li class="nav-link">
                    <a href="javascript:void(0)" class="nav-item dropdown-item">Settings</a>
                  </li>
                  <li class="dropdown-divider"></li>
                  <li class="nav-link">
                    <a href="../../../front/Views/logout.php" class="nav-item dropdown-item">Log out</a>
                  </li>
                </ul>
              </li>
              <li class="separator d-lg-none"></li>
            </ul>
          </div>
        </div>
      </nav>
      <div class="modal modal-search fade" id="searchModal" tabindex="-1" role="dialog" aria-labelledby="searchModal" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="SEARCH">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <i class="tim-icons icon-simple-remove"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
      <!-- End Navbar -->
      
    
    <div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div></div><div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div></div></div>
  </div>
  <div class="fixed-plugin">
    <div class="dropdown show-dropdown">
      <a href="#" data-toggle="dropdown">
        <i class="fa fa-cog fa-2x"> </i>
      </a>
      <ul class="dropdown-menu">
        <li class="header-title"> Sidebar Background</li>
        <li class="adjustments-line">
          <a href="javascript:void(0)" class="switch-trigger background-color">
            <div class="badge-colors text-center">
              <span class="badge filter badge-primary active" data-color="primary"></span>
              <span class="badge filter badge-info" data-color="blue"></span>
              <span class="badge filter badge-success" data-color="green"></span>
            </div>
            <div class="clearfix"></div>
          </a>
        </li>
        <li class="adjustments-line text-center color-change">
          <span class="color-label">LIGHT MODE</span>
          <span class="badge light-badge mr-2"></span>
          <span class="badge dark-badge ml-2"></span>
          <span class="color-label">DARK MODE</span>
        </li>
        <li class="button-container">
          <a href="https://www.creative-tim.com/product/black-dashboard" target="_blank" class="btn btn-primary btn-block btn-round">Download Now</a>
          <a href="https://demos.creative-tim.com/black-dashboard/docs/1.0/getting-started/introduction.html" target="_blank" class="btn btn-default btn-block btn-round">
            Documentation
          </a>
        </li>
        <li class="header-title">Thank you for 95 shares!</li>
        <li class="button-container text-center">
          <button id="twitter" class="btn btn-round btn-info"><i class="fab fa-twitter"></i> · 45</button>
          <button id="facebook" class="btn btn-round btn-info"><i class="fab fa-facebook-f"></i> · 50</button>
          <br>
          <br>
          <a class="github-button" href="https://github.com/creativetimofficial/black-dashboard" data-icon="octicon-star" data-size="large" data-show-count="true" aria-label="Star ntkme/github-buttons on GitHub">Star</a>
        </li>
      </ul>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="../assets/js/core/jquery.min.js"></script>
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->
  <!-- Place this tag in your head or just before your close body tag. -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="../assets/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="../assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Black Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/black-dashboard.min.js?v=1.0.0"></script>
  <!-- Black Dashboard DEMO methods, don't include it in your project! -->
  <script src="../assets/demo/demo.js"></script>
  <script type="text/javascript" src="../assets/js/connexion.js"></script>
<script type="text/javascript" src="../assets/js/JQuery.js"></script>
  <script>
    $(document).ready(function() {
      $().ready(function() {
        $sidebar = $('.sidebar');
        $navbar = $('.navbar');
        $main_panel = $('.main-panel');

        $full_page = $('.full-page');

        $sidebar_responsive = $('body > .navbar-collapse');
        sidebar_mini_active = true;
        white_color = false;

        window_width = $(window).width();

        fixed_plugin_open = $('.sidebar .sidebar-wrapper .nav li.active a p').html();



        $('.fixed-plugin a').click(function(event) {
          if ($(this).hasClass('switch-trigger')) {
            if (event.stopPropagation) {
              event.stopPropagation();
            } else if (window.event) {
              window.event.cancelBubble = true;
            }
          }
        });

        $('.fixed-plugin .background-color span').click(function() {
          $(this).siblings().removeClass('active');
          $(this).addClass('active');

          var new_color = $(this).data('color');

          if ($sidebar.length != 0) {
            $sidebar.attr('data', new_color);
          }

          if ($main_panel.length != 0) {
            $main_panel.attr('data', new_color);
          }

          if ($full_page.length != 0) {
            $full_page.attr('filter-color', new_color);
          }

          if ($sidebar_responsive.length != 0) {
            $sidebar_responsive.attr('data', new_color);
          }
        });

        $('.switch-sidebar-mini input').on("switchChange.bootstrapSwitch", function() {
          var $btn = $(this);

          if (sidebar_mini_active == true) {
            $('body').removeClass('sidebar-mini');
            sidebar_mini_active = false;
            blackDashboard.showSidebarMessage('Sidebar mini deactivated...');
          } else {
            $('body').addClass('sidebar-mini');
            sidebar_mini_active = true;
            blackDashboard.showSidebarMessage('Sidebar mini activated...');
          }

          // we simulate the window Resize so the charts will get updated in realtime.
          var simulateWindowResize = setInterval(function() {
            window.dispatchEvent(new Event('resize'));
          }, 180);

          // we stop the simulation of Window Resize after the animations are completed
          setTimeout(function() {
            clearInterval(simulateWindowResize);
          }, 1000);
        });

        $('.switch-change-color input').on("switchChange.bootstrapSwitch", function() {
          var $btn = $(this);

          if (white_color == true) {

            $('body').addClass('change-background');
            setTimeout(function() {
              $('body').removeClass('change-background');
              $('body').removeClass('white-content');
            }, 900);
            white_color = false;
          } else {

            $('body').addClass('change-background');
            setTimeout(function() {
              $('body').removeClass('change-background');
              $('body').addClass('white-content');
            }, 900);

            white_color = true;
          }


        });

        $('.light-badge').click(function() {
          $('body').addClass('white-content');
        });

        $('.dark-badge').click(function() {
          $('body').removeClass('white-content');
        });
      });
    });
  </script>



</body>
  <footer class="footer">
        <div class="container-fluid">
          <ul class="nav">
            <li class="nav-item">
              <a href="javascript:void(0)" class="nav-link">
                Creative Tim
              </a>
            </li>
            <li class="nav-item">
              <a href="javascript:void(0)" class="nav-link">
                About Us
              </a>
            </li>
            <li class="nav-item">
              <a href="javascript:void(0)" class="nav-link">
                Blog
              </a>
            </li>
          </ul>
          <div class="copyright">
            ©
            <script>
              document.write(new Date().getFullYear())
            </script>20192019 made with <i class="tim-icons icon-heart-2"></i> by
            <a href="javascript:void(0)" target="_blank">Creative Tim</a> for a better web.
          </div>
        </div>
      </footer>
</html>