<?php
include 'entities/user.php';
include 'core/userC.php';

if(isset($_POST['email2']) && isset($_POST['passz']) && isset($_POST['pass2']) )
{
  $email2=$_POST['email2'];
  $pas=$_POST['passz'];
$usee=new utilisateur("","",$email2,$_POST['passz'],"","","","","","");
$useCc=new utilisateurCore();
$useCc->modifiermdp($usee,$email2,$pas);

/*$listuser =$use->verifier($email);
foreach ($listuser as $row)
{

}*/
header("location:login.php");

}
else {
echo 'taststs';
}

?>
