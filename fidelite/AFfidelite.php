<!DOCTYPE html>
<html>
<head>
<title>Fidelity DataBase And Promotions</title>
<style>

.button {
  border-radius: 8px;
  background-color: #f4511e;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 28px;
  padding: 20px;
  width: 400px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
}

.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button:hover span {
  padding-right: 25px;
}

.button:hover span:after {
  opacity: 1;
  right: 0;
}
.BD
{
border-radius: 1px;
  background-color: #f4511e;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 5px;
  padding: 5px;
  width: 80px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 4px;

}

table {
border-collapse: collapse;
width: 100%;
color: #323731;
font-family: monospace;
font-size: 25px;
text-align: left;
}
h3
{
	color: #f2f2f2;
font-family: monospace;
font-size: 25px;
}
h2
{
background-color: #323731;
color: #323731;	
}
th 
{
background-color: #323731;
color: white;
}
tr:nth-child(even) {background-color: #f2f2f2}
</style>
</head>
<body>
<table>
<tr>
<th>Fid-ID</th>
<th>Score</th>
<th>ID_Client</th>
<th>Promotion</th>
<th>Option</th>
<th></th>
</tr>
<?php
echo '<script type="text/JavaScript">alert("Acceès Autoriseè!"); </script>' ;
$conn = mysqli_connect("localhost", "root", "", "soujoud");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM fidel";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["FID"]. "</td><td>" . $row["score"] . "</td><td>" . $row["idc"]."</td><td>".$row["promotion"]."</td><td>"; 
echo  "<button class='BD' action=''>supprimer</button>" ."</td><td>"; 
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>

</table>
<table>
<form>
	<tr><label><h2>---</h2></label></tr>
</form>
</table>
<center>
	<form action="Mfidelite.html">
<button class="button"  value="Modifier"><span>Modifier les Donnèes</span></button>
</form>
</center>

</body>
</html>