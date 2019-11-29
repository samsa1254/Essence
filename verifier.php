<?php
include 'entities/user.php';
include'config.php';
$c=new config();
$conn=$c->getConnexion();
$user=new utilisateur("","","",$_POST['mailconnect'],$_POST['mdpconnect'],"","","","",$conn);
$u=$user->Logedin($conn,$_POST['mailconnect'],$_POST['mdpconnect']);
$vide=false;

if(!empty($_POST['mailconnect']) && !empty($_POST['mdpconnect']))
{ if(($_POST["role"])!="admin")
  {
  foreach ($u as $t)
  {
    $vide=true;
    if($t['mail']==$_POST['mailconnect'] && $t['mdp']==$_POST['mdpconnect'])
    {
      session_start();
      $_SESSION['l']=$_POST['mailconnect'];
      $_SESSION['p']=$_POST['mdpconnect'];
      $_SESSION['r']=$_POST['role'];
      header("location:index1.php");

       }
    // code...
  }
  if($vide==false)
  {
    echo '< body onLoad="alert(\ "Membre non reconnu..\")">';
    header("location:login.php");
  }
}
}
else {
  echo "non declaree";
}
?>
