<?php
include "core/userC.php";
include "entities/user.php";
session_start();
if(isset($_POST['adresse1']))
{
  $client=new utilisateur("","",$_SESSION['l'],"","",$_POST['adresse1'],"","","","","");
  $useC=new utilisateurCore();
  $useC->modifierUser($client,$_SESSION['l']);
  header("location:account.php");
}

?>
