<?php include"header3.php" ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>mot de passe</title>

    <!-- Fontfaces CSS-->


<script type="text/javascript" src="verif.js">

</script>

    <!-- Main CSS-->


</head>

<body class="animsition">
    <div class="page-wrapper">
        <div class="page-content--bge5">
            <div class="container">
                <div class="login-wrap">
                    <div class="login-content">
                        <div class="login-logo">
                            <a href="#">
                                <img src="logosoujoud.png" alt="">
                            </a>
                        </div>
                        <div class="login-form">
                            <form action="mdp.php" method="post" onsubmit="return ff()">
                                <div class="form-group">
                                    <label>adresse email</label>
                                    <input class="au-input au-input--full" type="email" name="email2" placeholder="Email" required>
                                </div>
                                <div class="form-group">
                                    <label>nouveau mot de passe</label>
                                    <input class="au-input au-input--full" type="password" name="passz"  id="passz" required>
                                </div>
                                <div class="form-group">
                                    <label>confirmation mot de passe</label>
                                    <input class="au-input au-input--full" type="password" name="pass2" id="pass2" required>
                                </div>
                                <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit">submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Jquery JS-->


    <!-- Main JS-->


</body>

</html>
<!-- end document-->
