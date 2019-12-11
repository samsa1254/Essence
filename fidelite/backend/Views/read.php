<?php
require_once "config.php";

if (isset($_GET["FID"]) && !empty(trim($_GET["FID"]))) {
    $sql = "SELECT * FROM fidel WHERE FID = ?";
    if ($stmt = $link->prepare($sql)) {
        $stmt->bind_param("i", $_GET["FID"]);
        if ($stmt->execute()) {
            $result = $stmt->get_result();
            if ($result->num_rows == 1) {
                $row = $result->fetch_array(MYSQLI_ASSOC);

                $idc = $row["idc"];
                $score = $row["score"];
                $promotion = $row["promotion"];

            } else {
                echo "Error! Please try again later.";
                exit();
            }

        } else {
            echo '<script type="text/JavaScript">alert("Erreur! essayer plus tard!"); </script>';
            exit();
        }
    }
    $stmt->close();
    $link->close();
} else {
    echo '<script type="text/JavaScript">alert("Erreur! essayer plus tard!"); </script>';
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Afficher Utilisateur</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        label{
            font-weight: bold;
        }
    </style>
</head>
<body>
<div class="wrapper">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card" style="margin-top: 20px;">
                    <div class="card-body">
                        <div class="page-header">
                            <h1>Afficher Utilisateur</h1>
                        </div>
                        <div class="form-group">
                            <label >ID_client</label>
                            <p class="form-control-static"><?php echo $idc; ?></p>
                        </div>
                        <div class="form-group">
                            <label>Score</label>
                            <p class="form-control-static"><?php echo $score; ?></p>
                        </div>
                        <div class="form-group">
                            <label>Promotion</label>
                            <p class="form-control-static"><?php echo $promotion; ?></p>
                        </div>
                        <p><a href="index.php" class="btn btn-primary">Revenir</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>