<?php
include "config.php";
class utilisateurCore
{
 function inscritption($utilisateur)
 {

            $sql="insert into soujoud.user (nom,prenom,pseudo,mail,mdp,adresse,ville,zip,tel) values (:nom,:prenom,:pseudo,:mail,:mdp,:adresse,:ville,:zip,:tel)";
        $db = config::getConnexion();
        try{
        $req=$db->prepare($sql);

        $nom=$utilisateur->getNom();
        $prenom=$utilisateur->getPrenom();
        $pseudo=$utilisateur->getPseudo();
        $mail=$utilisateur->getEmail();
        $mdp=$utilisateur->getMotdepasse();
        $adresse=$utilisateur->getAdresse();
        $ville=$utilisateur->getVille();
        $zip=$utilisateur->getZip();
        $tel=$utilisateur->getTel();
        $req->bindValue(':nom',$nom);
        $req->bindValue(':prenom',$prenom);
        $req->bindValue(':pseudo',$pseudo);
        $req->bindValue(':mail',$mail);
        $req->bindValue(':mdp',$mdp);
        $req->bindValue(':adresse',$adresse);
        $req->bindValue(':ville',$ville);
        $req->bindValue(':zip',$zip);
        $req->bindValue(':tel',$tel);
            $req->execute();

        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
}

function modifierUser($nom,$prenom,$email,$motdepasse,$adresse,$ville,$zip,$tel)
{
    $sql="update soujoud.user set nom='$nom', prenom='$prenom', mail='$email', mdp='$motdepasse', adresse='$adresse', ville='$ville' , zip='$zip', tel='$tel'";
    $db = config::getConnexion();
    try
    {
        $db->query($sql);
    }
    catch (Exception $e)
    {
        die('Erreur: '.$e->getMessage());
    }
}


  function afficherUsers()
    {
    $sql="SElECT * From user";
    $db = config::getConnexion();
    try{
    $liste=$db->query($sql);
    return $liste;
    }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
  }

  function supprimerClient($pseudo){
		$sql="DELETE FROM user where mail= :mail";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':mail',$pseudo);
		try{
      echo "string";
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
function SupprimerAdmin($pseudo){
  $sql="DELETE FROM user where pseudo= :pseudo";
    $db = config::getConnexion();
        $req=$db->prepare($sql);
    $req->bindValue(':pseudo',$pseudo);
    try{
            $req->execute();
            header('Location:TabClients.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
}
function ModifierAdmin($utilisateur,$id){
        $db = config::getConnexion();

       $pseudo=$utilisateur->getPseudo();
        $mail=$utilisateur->getEmail();
        $motdepasse=$utilisateur->getMotdepasse();

          $upseudo = $db->prepare("UPDATE user SET pseudo = ? WHERE id= ?");
      $upseudo->execute(array($pseudo,$id));
        $umail = $db->prepare("UPDATE user SET mail = ? WHERE id= ?");
      $umail->execute(array($mail,$id));
        $umotdepasse = $db->prepare("UPDATE user SET motdepasse = ? WHERE id= ?");
      $umotdepasse->execute(array($motdepasse,$id));
}
//verifier unicité de mail

function VerifierEmail($mail){
        $bdd = config::getConnexion();
            $reqmail = $bdd->prepare("SELECT * FROM user WHERE mail = ?");
            $reqmail->execute(array($mail));
            $mailexist = $reqmail->rowCount();
return $mailexist;
}

//verifier unicité de mail
//Envoie de mail
function EnvoyerMail($mail,$pseudo,$key)
{
 // ini_set('SMTP', 'smtp.gmail.com');
  //ini_set('sendmail_from', 'marwentlili01@gmail.com');
   $header="MIME-Version: 1.0\r\n";
$header.='From:"zanimo.com"<support@zanimo.com>'."\n";
$header.='Content-Type:text/html; charset="uft-8"'."\n";
$header.='Content-Transfer-Encoding: 8bit';

$message='
<html>
    <body>
        <div align="center">
         <a href="http://localhost/zanimo/demo.devitems.com/views/marten-v1/confirmation.php?pseudo='.$pseudo.'&key='.$key.'">Confirmer votre compte</a>
        </div>
    </body>
</html>
';

mail($mail, "Activation de compte zanimo", $message, $header);

}
function recupereid($pseudo)
{
   $sql="SElECT id FROM user where pseudo= :pseudo";
    $db = config::getConnexion();
        $req=$db->prepare($sql);
    $req->bindValue(':pseudo',$pseudo);
    try{
            $req->execute();
            $id=$req->fetch();
            return $id;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
}
function recupererpseudo($id)
{
   $sql="SElECT pseudo,mail FROM user where id= :id";
    $db = config::getConnexion();
        $req=$db->prepare($sql);
    $req->bindValue(':id',$id);
    try{
            $req->execute();
            $id=$req->fetchAll();
            return $id;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
}
function recuperernewsletter($id)
{
   $sql="SElECT mail FROM user where id= :id";
    $db = config::getConnexion();
        $req=$db->prepare($sql);
    $req->bindValue(':id',$id);
    try{
            $req->execute();
            $id=$req->fetchAll();
            return $id;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
}

//Envoie de mail

//Envoie de mail de rénitialisation de mot de passe
function RecupererMail($pseudo,$recup_code,$recup_mail){
      $header="MIME-Version: 1.0\r\n";
         $header.='From:"zanimo.com"<support@zanimo.com>'."\n";
         $header.='Content-Type:text/html; charset="utf-8"'."\n";
         $header.='Content-Transfer-Encoding: 8bit';
         $message = '
         <html>
         <head>
           <title>Récupération de mot de passe - zanimo.com</title>
           <meta charset="utf-8" />
         </head>
         <body>
           <font color="#303030";>
             <div align="center">
               <table width="600px">
                 <tr>
                   <td>

                     <div align="center">Bonjour <b>'.$pseudo.'</b>,</div>
                     cliquer <a href="http://localhost/myFiles/php/views/recupererMdp.php?section=code&code='.$recup_code.'">ici</a> pour rénitialiser votre mot de passe
                     A bientôt !

                   </td>
                 </tr>
                 <tr>
                   <td align="center">
                     <font size="2">
                       Ceci est un email automatique, merci de ne pas y répondre
                     </font>
                   </td>
                 </tr>
               </table>
             </div>
           </font>
         </body>
         </html>
         ';
         mail($recup_mail, "Récupération de mot de passe - zanimo.com", $message, $header);
}
//Envoie de mail de rénitialisation de mot de passe
}
?>
