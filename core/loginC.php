<?PHP
include "../../config.php";
class LoginC 
{
	function afficherLogin()
		{

			$sql="SELECT * FROM loginform ";
			$db=config::getConnexion();
			$list=$db->query($sql);
			return $list;
        }	
	function ajouterLogin($login)
		{
			$sql="INSERT INTO loginform (User,password,role,address) 
			value(:user,:password,:role,:address)";
			$bd=config::getConnexion();
			$query=$bd->prepare($sql);
			$query->bindvalue(':user',$login->getUser());
			$query->bindvalue(':password',$login->getPassword());
			$query->bindvalue(':role',$login->getRole());
			$query->bindvalue(':address',$login->getAddress());
			
			$query->execute();
		}	

}

?>