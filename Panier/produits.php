<?PHP
class Produits{
	
	private $nom;
	private $prix;
	private $description;
	private $image;
	private $categorie;

	function __construct($nom,$prix,$description,$image,$categorie){
		$this->prix=$prix;
		$this->nom=$nom;
		$this->description=$description;
		$this->image=$image;
		$this->categorie=$categorie;
	
	}
	
	function getPrix(){
		return $this->prix;
	}
	function getNom(){
		return $this->nom;
	}
	function getDescription(){
		return $this->description;
	}
	
	function getImage(){
		return $this->image;
	}
	function getcategorie(){
		return $this->categorie;
	}

	function setNom($nom){
		$this->nom=$nom;
	}
	function setDescription($description){
		$this->description;
	}
	function setPrix($prix){
		$this->prix=$prix;
	}
	function setImage($image){
		$this->image=$image;
	}
	function setcategorie($categorie){
		$this->categorie=$categorie;
	}
	
}

?>