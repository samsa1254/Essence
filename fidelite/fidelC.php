<?php

include "../fidelite/config.php";

class fidelC
{
    function ajouterfidel($fidel)
    {
        $sql= "INSERT into soujoud.fidel(FID, score, idc, promotion) values (:FID,:score,:idc,:promotion)";
        $db = config::getConnexion();
        try
        {
            $req=$db->prepare($sql);
            $FID=$fidel->getFID();
            $score=$fidel->getscore();
            $idc=$fidel->getidc();
            $promotion=$fidel->getpromotion();

            $req->bindValue(':FID',$FID);
            $req->bindValue(':score',$score);
            $req->bindValue(':idc',$idc);
            $req->bindValue(':promotion',$promotion);
            $req->execute();
            echo '<script type="text/JavaScript">  alert("Ajout termineè"); </script>' ; 

        }

        catch (Exception $e)
        {
            echo '<script type="text/JavaScript">alert("ID non existant ! Verifier vos parametres !"); </script>' ;
            die("ID non existant ! Verifier vos parametres !");


        }

    }
    function afficherfidel()
    {

        $sql="SELECT * from soujoud.fidel order by score asc";

        $db = config::getConnexion();
        try
        {
            $list=$db->query($sql);
            return $list;
        }
        catch (Exception $e)
        {
            die('Erreur: '.$e->getMessage());
        }
    }

   function supprimerfidel($idc){
        $sql="DELETE FROM fidel where idc= :idc";
        $db = config::getConnexion();
        $req=$db->prepare($sql);
        $req->bindValue(':idc',$idc);
        try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
}

    function modifierfidel($FID,$score,$idc,$fidel)
    {
        $sql="UPDATE soujoud.fidel set score= '$score', FID='$FID' where  idc='$idc'";
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

}
