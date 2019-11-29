<?php
include "../core/produitsC.php";

$id=$_POST["id"];

$prod2C = new produitsC();
$prod2C->suppprod($id);
header("location:AfficherProduit.php");
?>