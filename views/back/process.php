<html>
<head>
<meta charset="utf8">
</head>
<body>
<?php 
include '../../entities/User.php';;
//$log="admin";
//$pwd="admin";
/*$servername="localhost";
	$username="root";
	$password="";
	$dbname="dblogin";
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", 
	$username, $password);
	$req="select * from users where user_name='$login' && user_pass='$pwd'";
	$rep=$conn->query($req);
	$res=$rep->fetchAll();
	*/
$c=new config();
$conn=$c->getConnexion();
$user=new User($_POST['login'],$_POST['pwd'],$conn);
$u=$user->Logedin($conn,$_POST['login'],$_POST['pwd']);

	//var_dump($u);
//$logR=$_POST['login'];
//$pwdR=$_POST['pwd'];
$vide=false;
if (!empty($_POST['login']) && !empty($_POST['pwd'])){
	
	foreach($u as $t){
		$vide=true;
	if ($t['User']==$_POST['login'] && $t['password']==$_POST['pwd']){
		
		session_start();
		$_SESSION['l']=$_POST['login'];
		$_SESSION['p']=$_POST['pwd'];
		$_SESSION['r']=$t['role'];
		$_SESSION['a']=$t['address'];

		if($t['role']=='u')
		{
		header("location:single.php");
		}
		else if($t['role']=='a')
		{
		header("location:comment.php");

		}
		}
	
}
if ($vide==false) { 
         // Le visiteur n'a pas été reconnu comme étant membre de notre site. On utilise alors un petit javascript lui signalant ce fait
         echo '<body onLoad="alert(\'Membre non reconnu...\')">'; 
         // puis on le redirige vers la page d'accueil
         echo '<meta http-equiv="refresh" content="0;URL=single.php">'; 
      } 
}	  
 
else { 
      echo "Les variables du formulaire ne sont pas déclarées.<br> Vous devez remplir le formulaire"; 
     ?> <a href="single.php">Retour au formulaire</a>	 <?php 
}  

?> 
</body>
</html>