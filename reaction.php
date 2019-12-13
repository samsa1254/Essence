<?PHP
class Reaction{
	private $id;
	private $react;
	private $user;
	private $id_produit;
	
	function __construct($id,$react,$user,$id_produit){
		$this->id=$id;
		$this->react=$react;
		$this->user=$user;
		$this->id_produit=$id_produit;
	}
	
	function getId(){
		return $this->id;
	}
	function getReact(){
		return $this->react;
	}
	function getUser(){
		return $this->user;
	}
	function getId_produit(){
		return $this->id_produit;
	}
	

	function setReact($react){
		$this->react=$react;
	}
	function setUser($user){
		$this->user;
	}
	function setId_produit($id_produit){
		$this->user;
	}
	
	
}

?>