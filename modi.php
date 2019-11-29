<?php


include "../core/categorieC.php";

$id = $_GET["id"];
$nom = $_GET["nom"];
$description = $_GET["description"];

$cateC = new categorieC();
$cateC->modifiercat($id, $nom, $description);
header("location:affichecat.php");

?>