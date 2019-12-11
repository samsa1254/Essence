<?php
$localhost = "localhost";
$username = "root";
$password = "";
$dbname = "soujoud";
$con = new mysqli($localhost, $username, $password, $dbname);
if( $con->connect_error){
    die('Error: ' . $con->connect_error);
}
$sql = "SELECT * FROM fidel";
if( isset($_GET['search']) ){
    $name = mysqli_real_escape_string($con, htmlspecialchars($_GET['search']));
    $sql = "SELECT * FROM fidel WHERE score ='$name'";
}
$result = $con->query($sql);
?>
<!DOCTYPE html>
<html>
<head>
<title>CRUD search my ass</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap-theme.min.css">
<style type="">
    .button {
          background-color: #ddd;
          border: none;
          color: black;
          padding: 5px 10px;
          text-align: center;
          text-decoration: none;
          display: inline-block;
          margin: 4px 2px;
          cursor: pointer;
          border-radius: 16px;
                 }
        .btn{
            margin-left: 10px;
            margin-top:2px;
            }
</style>
</head>
<body>
<div class="container">
<table>
<tr>
    <td><h3>Chercher par Score :</h3></td>
    <td><a style="position: relative; top : 8px;" class="button btn" href="searchs.php">Score</a></td>
    <td><a style="position: relative; top : 8px;" class="button btn" href="searchp.php">promotion</a></td>
    <td><a style="position: relative; top : 8px;" class="button btn" href="search.php">Identifiant</a></td>
</tr>
</table>
<form action="" method="GET">
<input type="text" placeholder="Declarer l'objet desirer" name="search">&nbsp;
<input style="position: relative; bottom: 3px" type="submit" value="Chercher" name="btn" class="btn btn-sm btn-primary">
</form>
<h2>Liste des Utilisateurs :</h2>
<table class="table table-striped table-responsive">
<tr>
<th>FID</th>
<th>idc</th>
<th>score</th>
<th>promotion</th>
</tr>
<?php
while($row = $result->fetch_assoc()){
    ?>
    <tr>
    <td><?php echo $row['FID']; ?></td>
    <td><?php echo $row['idc']; ?></td>
    <td><?php echo $row['score']; ?></td>
    <td><?php echo $row['promotion']; ?></td>
    </tr>
    <?php
}
?>
</table>
</div>
</body>
</html>