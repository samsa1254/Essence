<?php
include "core/userC.php";

$nom=$_POST["nom1"];
$prenom=$_POST["prenom1"];
$email=$_POST["mail1"];
$motdepasse=$_POST["mdp1"];
$adresse=$_POST["adresse1"];
$ville=$_POST["ville1"];
$zip=$_POST["zip1"];
$tel=$_POST["tel1"];


$useC=new utilisateurCore();
$useC->modifierUser($nom,$prenom,$email,$motdepasse,$adresse,$ville,$zip,$tel);
header("location:account.php");
?>
