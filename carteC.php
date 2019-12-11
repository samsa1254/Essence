<?PHP
include "../config.php";
class carteC {
function afficherCarte ($Carte){
		echo "identifiant: ".$Carte->getId()."<br>";
		echo "username: ".$Carte->getUser()."<br>";
		echo "nom: ".$Carte->getNom()."<br>";
		echo "prenom: ".$Carte->getPrenom()."<br>";
                
	}

	function ajouterCarte($Carte){
		$sql="insert into Carte (id,username,nom,prenom) values (:id, :username, :nom, prenom)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $id=$Carte->getId();
        $username=$Carte->getUser();
        $nom=$Carte->getNom();
        $prenom=$Carte->getPrenom();
	
		$req->bindValue(':id',$id);
		$req->bindValue(':username',$username);
		$req->bindValue(':nom',$nom);
		$req->bindValue(':prenom',$prenom);
		
		
            $req->execute(); 
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	function afficherCin(){
		//$sql="SElECT * From Client e inner join formationphp.Client a on e.id= a.id";
		$sql="SELECT * From carte ORDER BY cin DESC";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function afficherCartes(){
		//$sql="SElECT * From Client e inner join formationphp.Client a on e.id= a.id";
		$sql="SElECT * From carte";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimerCarte($id){
		$sql="DELETE FROM carte where id= :id";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':id',$id);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function modifierCarte($Client,$id){
		$sql="UPDATE carte SET id=:idd, code=:code,delai=:delai WHERE id=:id";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		$idd=$Client->getId();
        $code=$Client->getCode();
        $delai=$Client->getDelai();
        

           $datas = array(':idd'=>$idd, ':id'=>$id, ':code'=>$code,':delai'=>$delai);
		$req->bindValue(':idd',$idd);
		$req->bindValue(':id',$id);
		$req->bindValue(':code',$code);
		$req->bindValue(':delai',$delai);
		
		
		
		
		
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
	function recupererCarte($id){
		$sql="SELECT * from carte where id='".$id."'";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
	function rechercherListeCartes($tarif){
		$sql="SELECT * from carte where id=$tarif";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}

	function filterTable($query)
{
    $connect = mysqli_connect("localhost", "root", "", "web");
    $filter_Result = mysqli_query($connect, $query);
    return $filter_Result;
}
function rechercher()
{
if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];
    // search in all table columns
    // using concat mysql function
    $query = "SELECT * FROM carte WHERE CONCAT(id, username, nom, prenom) LIKE '%".$valueToSearch."%'";
    $search_result = carteC::filterTable($query);
    
}
 else {
    $query = "SELECT * FROM carte";
    $search_result = filterTable($query);
}
return $search_result;
}
}

?>