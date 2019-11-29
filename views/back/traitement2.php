<?php



session_start();

include '../../entities/reaction.php';
include '../../core/reactionC.php';


		echo $_POST['id_produit'];
$e=new ReactionC();
			$a=$_SESSION["l"];

$list=$e->afficherReaction($_POST['id_produit']);

$count=$list->rowCount();

echo $count;
$b=0;

foreach($list as $row){

   ?>
   <tr>
   <td><?PHP echo $row['id']; ?></td>
   <td><?PHP echo $row['react']; ?></td>
   <td><?PHP echo $row['user']; ?></td>
 <?PHP
    if($row["user"]==$a)
    {
$b=1;

$r=$row["react"];
$p=$_POST['react'];


}
}
		$e=new Reaction ($_POST['id'],$_POST['react'],$_POST['user'],$_POST['id_produit']);
		//2_inserer DB
		$ecore=new ReactionC();
		if ($b==0)
		{
		$ecore->ajouterReaction($e);
		echo "ajouter ";
				
		}
		else
		{
			if($p==$r)
			{
		$ecore->supprimerReaction($e);

			}
			else
			{
						$ecore->modifierReaction($e);

			}
		echo "modifier ";
		
		}
		header('location:single.php');
	


?>
