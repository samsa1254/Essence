<?PHP
include "../../config.php";
class ComlikeC 
{
	function afficherComlike()
		{
			$sql="SELECT idl FROM comlike";
			$db=config::getConnexion();
			$lis=$db->query($sql);
			return $lis;
        }	
	function ajouterComlike($comlike)
		{
			$sql="INSERT INTO comlike (idl,numcom,userr) 
			value(:idl,:numcom,:userr)";
			$bd=config::getConnexion();
			$query=$bd->prepare($sql);
			$query->bindvalue(':idl',$comlike->getIdl());
			$query->bindvalue(':numcom',$comlike->getNumcom());
			$query->bindvalue(':userr',$comlike->getUserr());
			
			$query->execute();
		}	

		function ajoutercount($num){
		$sql="UPDATE commentaire SET count = count + 1 where num= :num";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':num',$num);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
function supprimercount($num){
		$sql="UPDATE commentaire SET count = count - 1 where num= :num";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':num',$num);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}


function supprimerComlike($userr){
		$sql="DELETE FROM comlike where userr= :userr";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':userr',$userr);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
}

?>