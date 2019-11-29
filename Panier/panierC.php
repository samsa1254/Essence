<?php

include "../produitC.php";
class panierC
{
    function ajouterpanier($panier)
    {
        $sql= "insert into soujoud.panier(img,nom,quantite,prix) values (:img,:nom,:quantite,:prix)";
        $db = config::getConnexion();
        try
        {
            $req=$db->prepare($sql);
            
            $nom=$produits->getimg();
            $prix=$produits->getnom();
            $description=$produits->getquantite();
            $image=$produits->getprix();
       

          
            $req->bindValue(':img',$img);
            $req->bindValue(':nom',$nom);
            $req->bindValue(':quantite',$quantite);
            $req->bindValue(':prix',$prix);


            $req->execute();

        }
        catch (Exception $e)
        {
            die('Erreur: Un produits avec ce nom existe deja');

        }

    
     }
     function afficherpanier()
    {

        $sql="select * from panier.produits order by nom asc";

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
    function supprimerpanier($nom){
        $sql="DELETE FROM produits where nom= :nom";
        $db = config::getConnexion();
        $req=$db->prepare($sql);
        $req->bindValue(':nom',$nom);
        try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
}}