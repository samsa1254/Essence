<?php
include "../entities/commande.php";
include "../core/commandeC.php";

if (isset($_POST['dateE'])) {
    $x = strtotime($_POST['dateE']);
    $z = date("Y-m-d", $x);
    $y = date("Y-m-d");
    //var_dump($z);
    if ($z < $y) {
        echo "<script type='text/javascript'>";
        echo "alert('Date non respectee');";
        echo "</script>";
        echo "<META http-equiv='refresh' content='0;URL=panierBE.php'>";
        
    } else {
        if (isset($_POST['nomc']) && isset($_POST['valeur']) && isset($_POST['dateE'])) {
            $commande  = new commande($_POST['nomc'], $_POST['valeur'], $_POST['dateE']);
            $commandeC = new commandeC();
            $commandeC->ajouter($commande);
            
            echo "<META http-equiv='refresh' content='0;URL=panierBE.php'>";
            
        }
        echo "<script type='text/javascript'>";
        echo "alert('commande ajouté');";
        echo "</script>";
    }
    
    
    //header('Location: panierBE.php');
    
    
}

?>