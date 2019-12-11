<?php
include "../fidelite/fidel.php";
include "../fidelite/fidelC.php";
/*if(isset($_POST["FID"]) and isset($_POST["score"]) and isset($_POST["idc"]) and isset($_POST["promotion"]))
{*/

    $cri=new fidel($_POST["FID"],$_POST["score"],$_POST["idc"],$_POST["promotion"]);
    $criC=new fidelC();
    $criC->ajouterfidel($cri);
    header("form.html");


   

/*else
{
    echo " Déja non Utilisé";
}*/
?>