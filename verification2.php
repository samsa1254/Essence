<?php
include 'entities/user.php';
include'config.php';
$c=new config();
$conn=$c->getConnexion();
$user=new utilisateur("","","",$_POST['mail'],"","","","","","",$conn);
$u=$user->Logedin1($conn,$_POST['mail']);
$vide=false;

if(!empty($_POST['mail']))
{
  foreach ($u as $t)
  {
    $vide=true;
    if($t['mail']==$_POST['mail'])
    {
      session_start();
      $_SESSION['l']=$_POST['mail'];
      header("location:index1.php");

       }
    // code...
  }
  if($vide==false)
  {
    echo "membre non reconnu";
  }
}
else {
  echo "non declaree";
}
?>
