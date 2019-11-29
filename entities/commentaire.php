<?PHP
class Employe{
	private $num;
	private $nom;
	private $address;
	private $msg;
	private $id_produit;


	function __construct($num,$nom,$address,$msg,$id_produit){
		$this->num=$num;
		$this->nom=$nom;
		$this->address=$address;
		$this->msg=$msg;
		$this->id_produit=$id_produit;

	}
	
	function getNum(){
		return $this->num;
	}
	function getNom(){
		return $this->nom;
	}
	function getAddress(){
		return $this->address;
	}
	function getMsg(){
		return $this->msg;
	}
	function getCount(){
		return $this->count;
	}
	function getId_produit(){
		return $this->id_produit;
	}
	

	function setNom($nom){
		$this->nom=$nom;
	}
	function setPrenom($address){
		$this->address;
	}
	function setMsg($msg){
		$this->msg=$msg;
	}
	function setId_produit($id_produit){
		$this->user;
	}
	
}

?>