<?php
require_once "config.php";
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (isset($_POST['idc']) && isset($_POST['score']) && isset($_POST['promotion'])) {
        $sql = "INSERT INTO fidel (idc, score, promotion) VALUES (?,?,?)";
        if ($stmt = $link->prepare($sql)) {
            $stmt->bind_param("ssi", $_POST['idc'], $_POST['score'], $_POST['promotion']);
            if ($stmt->execute()) {
                header("location: index.php");
                exit();
            } else {
                echo '<script type="text/JavaScript">alert("erreur! verifier votre parametres!"); </script>';

            }

            $stmt->close();
        }
    }

    $link->close();
}
    echo '<script type="text/JavaScript">alert("Alert! Vous etes entrain d`ajouter un utilisateur!"); </script>';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ajouter Utilisateur</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<div class="wrapper">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="page-header">
                    <h2>Ajouter Utilisateur</h2>
                </div>
                <p>Formulaire : Ajouter Utilisateur !.</p>
                <form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="post">
                    <div class="form-group">
                        <label>ID_Client</label>
                        <input type="number" name="idc" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Score</label>
                        <textarea name="score" class="form-control" required></textarea>
                    </div>
                    <div class="form-group">
                        <label>Promotion</label>
                        <input type="number" name="promotion" class="form-control" required>
                    </div>
                    <input type="submit" class="btn btn-primary" value="Submit">
                    <a href="index.php" class="btn btn-default">Anuuler</a>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>
