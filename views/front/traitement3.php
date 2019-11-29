<?php
include '../../entities/comlike.php';
include '../../core/comlikeC.php';
if(isset($_POST['numcom']) and isset($_POST['userr']))
	{
		//traitement des donnees	
		//1_instance
		$e=new Comlike ($_POST['idl'],$_POST['numcom'],$_POST['userr']);
		//2_inserer DB
		$n=$_POST['numcom'];
		$u=$_POST['userr'];
					$db=config::getConnexion();

		$result = $db->query("SELECT userr FROM comlike WHERE numcom = $n");
	$count=$result->rowCount();
	echo $count;
$b=0;

	foreach($result as $row){

   ?>
   <tr>
   <td><?PHP echo $row['userr']; ?></td>
 <?PHP
     if($row["userr"]==$u)
{
	$b=1;
}
}
 if($b==0)
 {
$ecore=new ComlikeC();
		$ecore->ajouterComlike($e);
		$ecore->ajouterCount($n);

		
 }
 else
 {
 	$ecore=new ComlikeC();

 			$ecore->supprimerComlike($u);
			$ecore->supprimerCount($n);

 }
header('location:single.php');
	}


?>
