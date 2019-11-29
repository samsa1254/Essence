<?php
$id=$_GET["id"];
$nom=$_GET["nom"];
$description=$_GET["description"];
$categorie=$_GET["categorie"];
$prix=$_GET["prix"];
$quantite=$_GET["quantite"];
$image=$_GET["image"];


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>modifier produit</title>

</head>
<body>
<h1>modifier produit</h1>
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
            <td><label for="categorie">categorie</label></td>
            <td><input type="text" id="categorie" name="categorie" value="<?php echo $categorie ?>"></td>
        </tr>
        <tr>
            <td><label for="prix">prix</label></td>
            <td><input type="text" id="prix" name="prix" value="<?php echo $prix ?>"></td>
        </tr>
        <tr>
            <td><label for="quantite">quantite</label></td>
            <td><input type="text" id="quantite" name="quantite" value="<?php echo $quantite?>"></td>
        </tr>
        <tr>
            <td><label for="image">image</label></td>
            <td><input type="text" id="image" name="image" value="<?php echo $image ?>"></td>
        </tr>



        <tr>
            <td><input type="submit" value="Modifier"></td>
        </tr>
    </table>
</form>

</body>
</html>