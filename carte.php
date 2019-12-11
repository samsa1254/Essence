<?PHP
class Carte{
	private $id;
	private $username;
	private $nom;
	private $prenom;
	function __construct($id,$username,$nom,$prenom){
		$this->id=$id;
		$this->username=$username;
		$this->nom=$nom;
		$this->prenom=$prenom;
	}
	
	function getId(){
		return $this->id;
	}
	function getNom(){
		return $this->nom;
	}
	function getPrenom(){
		return $this->prenom;
	}
	function getUser(){
		return $this->username;
	}
	
       

	function setId($id){
		$this->id=$id;
	}
	function setUser($username){
		$this->username=$username;
	}
	function setNom($nom){
		$this->nom=$nom;
	}
	function setPrenom($prenom){
		$this->prenom=$prenom;
	}
	
}

?>