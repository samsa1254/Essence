<?php
include 'entities/user.php';
include 'core/userC.php';

if(isset($_POST['pseudo']) && isset($_POST['mail']) && isset($_POST['tel']) && isset($_POST['mdp']) && isset($_POST['nom']) && isset($_POST['prenom']))
{
  $us=new utilisateur($_POST['nom'],$_POST['prenom'],$_POST['pseudo'],$_POST['mail'],$_POST['mdp'],$_POST['adresse'],$_POST['ville'],$_POST['zip'],$_POST['tel'],$conn);
  $usC=new utilisateurCore();
  $usC->inscritption($us);
  header('location:index1.php');
}
else {
  echo 'taststs';
}
 ?>
