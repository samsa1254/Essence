<?PHP
class panier{
	
	private $img;
	private $nom;
	private $quantite;
	private $prix;

	function __construct($img,$nom,$quantite,$prix){
		$this->img=$img;
		$this->nom=$nom;
		$this->quantite=$quantite;
		$this->prix=$prix;
	
	}
	
	function getimg(){
		return $this->img;
	}
	function getNom(){
		return $this->nom;
	}
	function getquantite(){
		return $this->quantite;
	}
	
	function getprix(){
		return $this->prix;
	}

	}

	function setimg($img){
		$this->img=$img;
	}
	function setnom($nom){
		$this->nom;
	}
	function setquantite($quantite){
		$this->quantite=$quantite;
	}
	function setprix($prix){
		$this->prix=$prix;
	}	
}

?>