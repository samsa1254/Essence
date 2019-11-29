<?PHP
include "../../config.php";
class EmployeC 
{
	function afficherEmployes($prd)
		{
			$sql="SELECT * FROM commentaire	where id_produit= $prd order by count desc ";
			$db=config::getConnexion();
			$liste=$db->query($sql);
			return $liste;
        }	
        function afficherEmploye()
		{
			$sql="SELECT * FROM commentaire	order by id_produit desc ";
			$db=config::getConnexion();
			$liste=$db->query($sql);
			return $liste;
        }	
	function ajouterEmploye($employe)
		{
			$sql="INSERT INTO commentaire (num,nom,address,msg,id_produit) 
			value(:num,:nom,:address,:msg,:id_produit)";
			$bd=config::getConnexion();
			$query=$bd->prepare($sql);
			$query->bindvalue(':num',$employe->getNum());
			$query->bindvalue(':nom',$employe->getNom());
			$query->bindvalue(':address',$employe->getAddress());
			$query->bindvalue(':msg',$employe->getMsg());
			$query->bindvalue(':id_produit',$employe->getId_produit());

			
			$query->execute();
		}	
		function supprimerEmploye($num){
		$sql="DELETE FROM commentaire where num= :num";
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
function modifierEmploye($employe,$numn){
		$sql="UPDATE commentaire SET  num=:num, nom=:nom, address=:address,msg=:msg WHERE num=:numn";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
	 $req=$db->prepare($sql);
	 		$num=$employe['num'];
			$nom=$employe['nom'];
	        $address=$employe['address'];
	        $msg=$employe['msg'];
	        
       
		
        
		$datas = array(':numn'=>$numn, ':num'=>$num, ':nom'=>$nom, ':address'=>$address,':msg'=>$msg);
		$req->bindValue(':numn',$numn);
		$req->bindValue(':num',$num);
		$req->bindValue(':nom',$nom);
		$req->bindValue(':address',$address);
		$req->bindValue(':msg',$msg);
		
		
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
	function recupererEmploye($num){
		$sql="SELECT * from commentaire where num=$num";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	
	}
}

?>