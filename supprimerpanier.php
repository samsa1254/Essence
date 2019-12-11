<?PHP
include "../core/panierC.php";
$panier=new panierC();

if (isset($_POST["idp_supp"])){

    $panier->supprimerprod($_POST["idp_supp"]);
    header('Location: cart.php');
    
                              }
?>