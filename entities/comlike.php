<?PHP
class Comlike{
	private $idl;
	private $numcom;
	private $userr;
	function __construct($idl,$numcom,$userr){
		$this->idl=$idl;
		$this->numcom=$numcom;
		$this->userr=$userr;
	}
	
	function getIdl(){
		return $this->idl;
	}
	function getNumcom(){
		return $this->numcom;
	}
	function getUserr(){
		return $this->userr;
	}
	
	

	function setNumcom($numcom){
		$this->numcom=$numcom;
	}
	function setUserr($userr){
		$this->userr;
	}
	
	
}

?>