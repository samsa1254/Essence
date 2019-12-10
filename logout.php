<?php
// On démarre la session
session_start ();

// On détruit les variables de notre session
unset ($_SESSION['l']);
unset ($_SESSION['p']);
unset ($_SESSION['r']);


header ('location: index.php');
?>
