<?php
include "../config.php";

class panierC
{
	function ajouterprod($panier)
	{
		$sql="insert into panier (idp,idcl,nomcl,nomprod,quantite,prix,total,dateP,img) values (:idp,:idcl,:nomcl,:nomprod,:quantite,:prix,:total,:dateP,:img)";
		$db=config::getConnexion();
		try
		{
			$req=$db->prepare($sql);
			$idp=$panier->getidp();
			$idcl=$panier->getidcl();
			$nomcl=$panier->getnomcl();
			$nomprod=$panier->getnomprod();
			$prix=$panier->getprix();
			$total=$panier->gettot();
			$dateP=$panier->getdateP();
			$img=$panier->getimg();
			$quantite=$panier->getqt();
			$req->bindValue(':idp',$idp);
			$req->bindValue(':idcl',$idcl);
			$req->bindValue(':nomcl',$nomcl);
			$req->bindValue(':nomprod',$nomprod);
			$req->bindValue(':quantite',$quantite);
			$req->bindValue(':prix',$prix);
			$req->bindValue(':total',$total);
			$req->bindValue(':dateP',$dateP);
			$req->bindValue(':img',$img);
			$req->execute();
		}
		catch(Exception $e)
		{
			echo 'Erreur' .$e->getMessage();
		}
	}





	function afficherprod()
	{
		$sql="select * from panier";
		$db=config::getConnexion();
		try
		{
			$liste=$db->query($sql);
			return $liste;
		}
		catch(Exception $e)
		{
			echo 'Erreur' .$e->getMessage();
		}
	}







	function supprimerprod($idp)
	{

		$sql="DELETE FROM panier where idp=:idp";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':idp',$idp);
		try{
            $req->execute();
          //header('Location: panierBE.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}









	function deleteall()
	{

		$sql="DELETE FROM panier ";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		try{
            $req->execute();
          //header('Location: panierBE.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}








	function modifierpanier($quantite,$total,$idp)
	{

		 $sql="UPDATE panier SET  quantite=:quantite,total=:total WHERE idp=:idp";
		
		$db = config::getConnexion();
try{		
        $req=$db->prepare($sql);
        
	
		    $req->bindValue(':idp',$idp);
			$req->bindValue(':quantite',$quantite);		
			$req->bindValue(':total',$total);
			
		
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
  
        }
	}






	function getid($idcl){
		$sql="SELECT * from panier where idcl=$idcl";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	







	function getsomme(){
		$sql="SELECT SUM(total) from panier";
		$db = config::getConnexion();
		try{
		$sum=$db->query($sql);
		return $sum;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
            
        }
	}







	function setprix($tot)
	{
		$sql="UPDATE panier  Set total=:total";
		$db = config::getConnexion();
		try
		{
			$req=$db->prepare($sql);
			$req->bindParam(':total',$tot);
			$req->execute();
		}
		 catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}






	function count($nomprod){
		$sql="SELECT count(*) a from panier where nomprod=:nomprod";
		$db=config::getConnexion();
		try{
			$req=$db->prepare($sql);
			$req->bindParam(':nomprod',$nomprod);
			$req->execute();
			$x=$req->fetchALL();
			return $x;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}








	function getQ($nomprod){
		$sql="SELECT quantite a from panier where nomprod=:nomprod";
		$db=config::getConnexion();
		try{
			$req=$db->prepare($sql);
			$req->bindParam(':nomprod',$nomprod);
			$req->execute();
			$x=$req->fetchALL();
			return $x;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}






	function getT($nomprod){
		$sql="SELECT total a from panier where nomprod=:nomprod";
		$db=config::getConnexion();
		try{
			$req=$db->prepare($sql);
			$req->bindParam(':nomprod',$nomprod);
			$req->execute();
			$x=$req->fetchALL();
			return $x;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}



	
	function modifierQ($quantite,$total,$nomprod)
	{

		 $sql="UPDATE panier SET quantite=:quantite, total=:total WHERE nomprod=:nomprod";
		
		$db = config::getConnexion();
try{		
        $req=$db->prepare($sql);

			$req->bindValue(':nomprod',$nomprod);	
			$req->bindValue(':quantite',$quantite);
			$req->bindValue(':total',$total);

		
		
            $s=$req->execute();
			
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   
        }
	}


	function countp(){
		$sql="SELECT count(*) a from panier ";
		$db=config::getConnexion();
		try{
			$req=$db->prepare($sql);
			$req->execute();
			$x=$req->fetchALL();
			return $x;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
}


