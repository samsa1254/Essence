<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "soujoud";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "UPDATE fidel SET score=20 WHERE idc=5643123";

if ($conn->query($sql) === TRUE) 
{
    echo "Points modifiè avec succeès!";
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>