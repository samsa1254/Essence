<?php

include '../core/produitsC.php';
$produits = new produitsC();
$listproduits = $produits->afficherproduits();
?>
<table border="2">
    <tr>
        <td>id</td>
        <td>nom</td>
        <td>description</td>
        <td>categorie</td>
        <td>prix</td>
        <td>quantite</td>
        <td>image</td>

    </tr>

<html>
 <head>
 <link rel="stylesheet" href="style.css">
</head>

</html>
<input type="submit" value="ajouter" class="btn" >
    <?php
    foreach ($listproduits as $row)
{
    echo '
        <tr>
            <td>'.$row["id"].'</td>
            <td>'.$row["nom"].'</td>
            <td>'.$row["description"].'</td>
            <td>'.$row["categorie"].'</td>
            <td>'.$row["prix"].'</td>
            <td>'.$row["quantite"].'</td>
            <td>'.$row["image"].'</td>

            <td>
                <form action="modi.php" method="get">
                    <input type="hidden" id="id" name="id" value="'.$row['id'].'">
                    <input type="hidden" id="nom" name="nom" value="'.$row["nom"].'">
                    <input type="hidden" id="description" name="description" value="'.$row["description"].'">
                    <input type="hidden" id="dat" name="categorie" value="'.$row["categorie"].'">
                    <input type="hidden" id="nbc" name="prix" value="'.$row["prix"].'">
                     <input type="hidden" id="nbc" name="quantite" value="'.$row["quantite"].'">
                      <input type="hidden" id="nbc" name="image" value="'.$row["image"].'">
                    <input style="background: none; border: none; color: blue; text-decoration: underline;" type="submit" value="supprimer">
                </form>
            </td>
        </tr>
    ';
}
?>
</table>
