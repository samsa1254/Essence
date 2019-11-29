<?php

$id=$_GET["id"];
$nom=$_GET["nom"];
$description=$_GET["description"];


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>modifier categorie</title>

</head>
<body>
<h1>modifier categorie</h1>
<form  method="get" action="modi.php" onsubmit="return verif()">
    <table>
        <tr>
            <td><label for="id">id</label></td>
            <td><input type="text"  value="<?php echo $id ?>" disabled></td>
            <td><input type="hidden" id="id" name="id" value="<?php echo $id ?>"></td>
        </tr>
        <tr>
            <td><label for="nom">nom</label></td>
            <td><input type="text" id="nom" name="nom" value="<?php echo $nom ?>"></td>
        </tr>
        <tr>
            <td><label for="description">description</label></td>
            <td><input type="text" id="description" name="description" value="<?php echo $description ?>"></td>
        </tr>


        <tr>
            <td><input type="submit" value="Modifier"></td>
        </tr>
    </table>
</form>

</body>
</html>