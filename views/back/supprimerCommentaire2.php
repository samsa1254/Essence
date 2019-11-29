<?PHP
include "../../core/commentaireC.php";
$employeC=new EmployeC();
if (isset($_POST["num"])){
	$employeC->supprimerEmploye($_POST["num"]);
	header('Location:comment.php');
}

?>