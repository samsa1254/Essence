<?PHP
include "../core/produitsC.php";
$produitsC=new produitsC();
if (isset($_GET["nom"])){
	$produitsC->supprimerpanier($_GET["nom"]);
	header('Location: afficherpanier.php');
}

?>