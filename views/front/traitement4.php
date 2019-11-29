<?php
include '../../entities/login.php';
include '../../core/loginC.php';
if(isset($_POST['user']) and isset($_POST['address']) and isset($_POST['password']))
	{
		//traitement des donnees	
		//1_instance
		$e=new Login ($_POST['user'],$_POST['password'],$_POST['role'],$_POST['address']);
		//2_inserer DB
		$ecore=new LoginC();
		$ecore->ajouterLogin($e);
		header('location:single.php');
}
?>