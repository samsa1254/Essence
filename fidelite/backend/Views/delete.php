<?php
if (isset($_GET["FID"]) && !empty($_GET["FID"])) {

    require_once "config.php";
    $sql = "DELETE FROM fidel WHERE FID = ?";

    if ($stmt = $link->prepare($sql)) {
        $stmt->bind_param("i", $_GET["FID"]);
        if ($stmt->execute()) {
            header("location: index.php");
            exit();
        } else {
            echo '<script type="text/JavaScript">alert("Erreur! essayer plus tard!"); </script>';
        }
    }
    $stmt->close();
    $link->close();
} else {
    echo '<script type="text/JavaScript">alert("Erreur! essayer plus tard!"); </script>';
}
?>