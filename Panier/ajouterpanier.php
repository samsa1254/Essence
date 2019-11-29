<?php
include "../entities/produits.php";
include "../core/produitsC.php";
/*if( isset($_POST["nom"]) and isset($_POST["prix"]) and isset($_POST["description"]) and isset($_POST["image"]))
{*/
    $cri=new produits($_POST["nom"],$_POST["prix"],$_POST["description"],$_POST["image"]);
    $criC=new produitsC();
    $criC->ajouterpanier($cri);
    header('Location: blog-single.php');
        
/*   
}
else
{
    echo "CIN Déja Utilisé";
}*/
?>