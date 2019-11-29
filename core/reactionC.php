<?PHP

include "../../config.php";
class ReactionC 
{


	function afficherReaction($prd)
		{

			$sql="SELECT * FROM reaction where id_produit= $prd";
			$db=config::getConnexion();
			$list=$db->query($sql);
			return $list;
        }	
	function ajouterReaction($reaction)
		{
	$sql="INSERT INTO reaction (id,react,user,id_produit) 
			value(:id,:react,:user,:id_produit)";
			$bd=config::getConnexion();
			$query=$bd->prepare($sql);
			$query->bindvalue(':id',$reaction->getId());
			$query->bindvalue(':react',$reaction->getReact());
			$query->bindvalue(':user',$reaction->getUser());
			$query->bindvalue(':id_produit',$reaction->getId_produit());


			$query->execute();
}
        
	
	function modifierReaction($reaction)
		
{

			$sql="UPDATE reaction SET react = :react where user= :user and id_produit= :id_produit";
			
			$bd=config::getConnexion();
			$query=$bd->prepare($sql);
			
			$query->bindvalue(':user',$reaction->getUser());
			$query->bindvalue(':react',$reaction->getReact());
			$query->bindvalue(':id_produit',$reaction->getId_produit());


			$query->execute();



}
function supprimerReaction($reaction)
		
{
			$sql="DELETE FROM reaction where user= :user and id_produit= :id_produit";
			
			$bd=config::getConnexion();
			$query=$bd->prepare($sql);
			
			$query->bindvalue(':user',$reaction->getUser());
			$query->bindvalue(':id_produit',$reaction->getId_produit());


			$query->execute();



}

	
}

?>