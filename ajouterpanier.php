<?php
include "../entities/panier.php";
include "../core/panierC.php";
session_start();
$panierC=new panierC();

   if(!isset($_SESSION['id']) and !isset($_SESSION['username']) ){
   	    echo "<script type='text/javascript'>";
        echo "alert('Please sign in ');";
        echo "</script>";
        echo "<META http-equiv='refresh' content='0;URL=login.html'>";}

  else{
        $x=$panierC->count($_GET['nom']);

        foreach($x as $row){

        $y=$row['a'];
	    $refe=$_GET['refe'];

            if ( isset($_GET['nom']) && isset($_GET['prix']) && isset($_GET['quantite']) && isset($_GET['img'])){

        	    if($y==0){
	                $idcl=$_SESSION['id'];
	                $refe=$_GET['refe'];
                    $nomcl=$_SESSION['username'];
                    $nom=$_GET['nom'];
                    $quantite=$_GET['quantite'];
                    $prix=$_GET['prix'];
                    $img=$_GET['img'];	

	                    if( !empty($_GET['nom']) && !empty($_GET['prix']) && !empty($_GET['quantite']) ){
          		          $panier=new panier($idcl,$nomcl,$nom,$quantite,$prix,$img);
                          $panierC->ajouterprod($panier); 
                    
                    echo "<META http-equiv='refresh' content='0;URL=product-detail.php?id=$refe'>";
                                                                                                        }

                         }

            else{
            	
	             $p=new panierC();
	             $z=$p->getQ($_GET['nom']);

                foreach ($z as $k){
                    $y=$k['a'];
                    $y=$y+1;
                    $pp=new panierC();
                    $a=$pp->getT($_GET['nom']);

                   foreach ($a as $i){
	                   $a=$i['a'];
	                   $a=$a+$_GET['prix'];
	                   $panierC->modifierQ($y,$a,$_GET['nom']);

                                     }
                                   }

echo "<META http-equiv='refresh' content='0;URL=product-detail.php?id=$refe'>";

                }
                                                                                                                } 
                            }

      }

?>