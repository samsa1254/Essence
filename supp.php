<?PHP
include "core/userC.php";
session_start();
$usuC=new utilisateurCore();
if (isset($_SESSION['l']))
{
  echo "string";
	$usuC->supprimerClient($_SESSION['l']);
	header('Location: index.php'); //redirection
}

?>
