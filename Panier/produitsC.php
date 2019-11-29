<?php

include "../config1.php";
class produitsC
{
     function afficherproduit()
    {

        $sql="select * from soujoud.produits order by nom asc";

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
   
}}