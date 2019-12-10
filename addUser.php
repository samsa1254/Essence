<?php
include 'entities/user.php';
include 'core/userC.php';

$errors=array();
if(isset($_POST['pseudo']) && isset($_POST['mail']) && isset($_POST['tel']) && isset($_POST['mdp']) && isset($_POST['nom']) && isset($_POST['prenom']))
{
  $email22=($_POST['mail']);
    $c=new config();
    $conn=$c->getConnexion();
    $us=new utilisateur($_POST['nom'],$_POST['prenom'],$_POST['pseudo'],$_POST['mail'],$_POST['mdp'],$_POST['adresse'],$_POST['ville'],$_POST['zip'],$_POST['tel'],$conn);
  $usC=new utilisateurCore();
/*  $errors=$us->VerifierEmail($email22)
  foreach ($errors as $error) {
    if($error ==0) */
  $usC->inscritption($us);
  $u=$us->Logedin($conn,$_POST['mail'],$_POST['mdp']);
  if(!empty($_POST['mail']) && !empty($_POST['mdp']))
  {echo "connected";
  session_start();
  $_SESSION['l']=$_POST['mail'];
  $_SESSION['p']=$_POST['mdp'];
}
    header("location:index1.php");
  }
else {
  echo 'taststs';
}
 ?>
