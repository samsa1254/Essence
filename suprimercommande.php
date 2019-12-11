<?PHP
include "../core/commandeC.php";
$commande=new commandeC();

if (isset($_POST["idc"])){
    $commande->supprimercommande($_POST["idc"]);
header('Location: panierBE.php');
}

?>