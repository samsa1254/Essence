<?php
include "../../../entites/produits.php";
include "../core/produitsC.php";
if(isset($_POST["id"]) and isset($_POST["nom"]) and isset($_POST["description"]) and isset($_POST["categorie"]) and isset($_POST["prix"]) and isset($_POST["quantite"])and isset($_POST["image"]))
{
    $prod=new produits($_POST["id"],$_POST["nom"],$_POST["description"],$_POST["categorie"],$_POST["prix"],$_POST["quantite"],$_POST["image"]);
    $prodC=new produitsC();
    $prodC->ajouterproduits($prod);
    
}

?>