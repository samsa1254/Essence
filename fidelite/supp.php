<?php
include "../1h1/fidel.php";
include "../1h1/fidelC.php";
$id = $_GET['idc'];
//Connect DB
//Create query based on the ID passed from you table
//query : delete where Staff_id = $id
// on success delete : redirect the page to original page using header() method
$dbname = "soujoud";
$conn = mysqli_connect("localhost", "root", "", $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// sql to delete a record
$sql = "DELETE FROM fidel WHERE idc = $id"; 

if (mysqli_query($conn, $sql)) {
    mysqli_close($conn);
    header('Location: h1h.php'); //If book.php is your main page where you list your all records
    exit;
} else {
    echo "Error deleting record";
}
?>