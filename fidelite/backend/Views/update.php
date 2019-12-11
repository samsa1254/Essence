<?php
require_once "config.php";
if (isset($_GET['FID'])) {
    $sql = "SELECT * FROM fidel WHERE FID = ?";
    if ($stmt = $link->prepare($sql)) {
        $stmt->bind_param("i", $_GET["FID"]);
        if ($stmt->execute()) {
            $result = $stmt->get_result();
            if ($result->num_rows == 1) {
                $row = $result->fetch_array(MYSQLI_ASSOC);

                $param_idc = $row["idc"];
                $param_score = $row["score"];
                $param_promotion = $row["promotion"];
            } else {
                echo '<script type="text/JavaScript">alert("Erreur! Data introuvable!"); </script>';
                exit();
            }
        } else {
            echo '<script type="text/JavaScript">alert("Erreur! essayer plus tard!"); </script>';
            exit();
        }
        $stmt->close();
    }
} else {
    header("location: index.php");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!empty($_POST["idc"]) && !empty($_POST["score"]) && !empty($_POST["promotion"])) {

        $sql = "UPDATE fidel SET idc = ?, score = ?, promotion = ? WHERE FID = ?";
        if ($stmt = $link->prepare($sql)) {

            $stmt->bind_param("ssii", $_POST["idc"], $_POST["score"], $_POST["promotion"], $_GET["FID"]);
            $stmt->execute();
            if ($stmt->error) {
                echo '<script type="text/JavaScript">alert("Erreur!"); </script>';
                exit();
            } else {
                header("location: index.php");
                exit();
            }
            $stmt->close();
        }
    }
    $link->close();
}
 echo '<script type="text/JavaScript">alert("Alert! Vous etes entrain de modifier un utilisateur!"); </script>';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Update User : bishrulhaq.com</title>
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
               <div class="card" style="margin-top:20px;">
                   <div class="card-body">
                       <div class="page-header">
                           <h2>Modifier Utilisateur</h2>
                       </div>
                       <p>Inserer information pour modifier l'utilisateur!</p>
                       <form action="<?php echo $_SERVER['REQUEST_URI']; ?>" method="post">
                           <div class="form-group">
                               <label>ID_client</label>
                               <input type="text" name="idc" class="form-control" required value="<?php echo $param_idc; ?>">
                           </div>
                           <div class="form-group">
                               <label>Score</label>
                               <textarea name="score" class="form-control" required ><?php echo $param_score; ?></textarea>
                           </div>
                           <div class="form-group">
                               <label>Promotion</label>
                               <input type="text" name="promotion" class="form-control" value="<?php echo $param_promotion; ?>" required>
                           </div>
                           <input type="submit" class="btn btn-primary" value="Enregistrer">
                           <a href="index.php" class="btn btn-default">Annuler</a>
                       </form>
                   </div>
               </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>