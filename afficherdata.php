<?php
include 'core/userC.php';
session_start();
$use = new utilisateurCore();
$listuser =$use->afficherUsers($_SESSION['l']);
?>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!--Include the above in your HEAD tag ---------->

<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>
<div class="checkout_area section-padding-40">
    <div class="container">
        <div class="row">
         <div class="col-md-7 offset-md-3 form-div">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="pseudo">pseudo<span>*</span></label>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="first_name">Nom<span>*</span></label>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="last_name">Prenom<span>*</span></label>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="mot-depasse">mot de passe<span>*</span></label>
                            </div>
                                  <div class="col-12 mb-3">
                                <label for="ville">Ville <span>*</span></label>
                                <select class="w-100" name="ville" id="ville" required class="form-control form-control-lg">
                                    <option value="usa">Bizerte</option>
                                    <option value="uk">Grand Tunis</option>
                                    <option value="ger">Beja</option>
                                    <option value="fra">Jendouba</option>
                                    <option value="ind">Nabeul</option>
                                    <option value="aus">Zaghouan</option>
                                    <option value="bra">Siliana</option>
                                    <option value="cana">le Kef</option>
                                    <option value="usa">Kairouan</option>
                                    <option value="uk">Mahdia</option>
                                    <option value="ger">Gabes</option>
                                    <option value="fra">Tozeur</option>
                                    <option value="ind">Medenine</option>
                                    <option value="aus">Jerba</option>
                                    <option value="bra">Tataouine</option>
                                </select>
                            </div>
                            <div class="col-12 mb-3">
                                <label for="postcode">Code postal <span>*</span></label>
                           </div>
                           <div class="col-md-6 mb-3">
                               <label for="adresse">adresse<span>*</span></label>
                           </div>
                            <div class="col-12 mb-3">
                                <label for="phone_number">telephone <span>*</span></label>
                            </div>
                                <div class="form-group">
                                  <input type="submit" name="signup-bt" value="cree un compte" class="btn btn-primary btn-block btn-lg" >
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            </div>
        </div>
    </div>
</div>
<!-- ##### Checkout Area End ##### -->


<?php

foreach ($listuser as $row)
{

    echo '

          <input type="text" name="user_city" value="<?php echo .$row["prenom"].;" />
            <td>'.$row["prenom"].'</td>
            <input style="background: none; border: none; color: blue; text-decoration: underline;" type="submit" value="modifier">
            <td>'.$row["mail"].'</td>
            <input style="background: none; border: none; color: blue; text-decoration: underline;" type="submit" value="modifier">
            <td>'.$row["adresse"].'</td>
            <input style="background: none; border: none; color: blue; text-decoration: underline;" type="submit" value="modifier">
            <td>'.$row["ville"].'</td>
            <input style="background: none; border: none; color: blue; text-decoration: underline;" type="submit" value="modifier">
            <td>'.$row["zip"].'</td>
            <input style="background: none; border: none; color: blue; text-decoration: underline;" type="submit" value="modifier">
            <td>'.$row["tel"].'</td>
            <input style="background: none; border: none; color: blue; text-decoration: underline;" type="submit" value="modifier">


        </tr>


    ';
}
?>
</table>
  <a href="supp.php" >supprimer votre compte</a>
