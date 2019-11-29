<?php
include '../../entities/commentaire.php';
include '../../core/commentaireC.php';
if(isset($_POST['nom']) and isset($_POST['address']) and isset($_POST['msg']))
	{
		//traitement des donnees	
		//1_instance
		$e=new Employe ($_POST['num'],$_POST['nom'],$_POST['address'],$_POST['msg'],$_POST['id_produit']);
		//2_inserer DB
		$ecore=new EmployeC();
		$ecore->ajouterEmploye($e);




	$mailto =$_POST['address'];
    $mailSub = "vous avez ajouter un nouveau commentaire";
    $mailMsg =$_POST['msg'];
   require 'PHPMailer-master/PHPMailerAutoload.php';
   $mail = new PHPMailer();
   $mail ->IsSmtp();
   $mail ->SMTPDebug = 0;
   $mail ->SMTPAuth = true;
   $mail ->SMTPSecure = 'ssl';
   $mail ->Host = "smtp.gmail.com";
   $mail ->Port = 465; // or 587
   $mail ->IsHTML(true);
   $mail ->Username = "ahmed.yahyaoui.1@esprit.tn";
   $mail ->Password = "nagato6p";
   $mail ->SetFrom("ahmed.yahyaoui.1@esprit.tn");
   $mail ->Subject = $mailSub;
   $mail ->Body = $mailMsg;
   $mail ->AddAddress($mailto);

   if(!$mail->Send())
   {
       echo "Mail Not Sent";
   }
   else
   {
       echo "Mail Sent";
   }


		header('location:single.php');
	}
else
	{
		echo "verifier les champs";
	}

?>
