<?php
// including database connection
require 'config.php';
?>

<html>
<head><title>Base De Donneès!</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap-theme.min.css">
<style></style>
</head>
<body body onload="window.print()">
	<center>
<?php
                $sqli = mysqli_query($link,"SELECT * FROM `fidel` ORDER BY FID");
                           echo "<table border='1' width='75%' class='table table-bordered table-striped'>";
                            echo "<thead>";
                            echo "<tr>";
                            echo "<th>ID_Fidel</th>";
                            echo "<th>idc</th>";
                            echo "<th>score</th>";
                            echo "<th>promotion</th>";
                            echo "</tr>";
                            echo "</thead>";
                            echo "<tbody>";
                            while($row = mysqli_fetch_array($sqli)){
                            echo "<tr>";
                            echo "<td>" . $row['FID'] . "</td>";
                            echo "<td>" . $row['idc'] . "</td>";
                            echo "<td>" . $row['score'] . "</td>";
                            echo "<td>" . $row['promotion'] . "</td>";
                            echo "</tr>";
                            }
                            echo "</tbody>";
                            echo "</table>";
?>
</center>
</body>
</html>