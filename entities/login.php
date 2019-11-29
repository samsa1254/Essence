<?PHP
class Login{
	private $user;
	private $password;
	private $role;
	private $address;

	function __construct($user,$password,$role,$address){
		$this->user=$user;
		$this->password=$password;
		$this->role=$role;
		$this->address=$address;
	}
	
	function getUser(){
		return $this->user;
	}
	function getPassword(){
		return $this->password;
	}
	function getRole(){
		return $this->role;
	}
	function getAddress(){
		return $this->address;
	}
	
	

	function setPassword($password){
		$this->password=$password;
	}
	function setRole($role){
		$this->userr;
	}
	function setAddress($address){
		$this->address;
	}
	
	
}

?>