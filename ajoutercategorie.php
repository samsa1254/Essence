<?php

include "../../../entites/categorie.php";
include "../core/categorieC.php";
if (isset($_POST["id"]) and isset($_POST["nom"]) and isset($_POST["description"]) )
{

    $cat = new categorie($_POST["id"], $_POST["nom"],$_POST["description"]);

    $catC = new categorieC();
    var_dump($cat);
    $catC->ajoutercategorie($cat);

}

