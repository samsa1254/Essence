<?PHP
include '../../entities/reaction.php';
include '../../core/reactionC.php';



session_start();
echo $_SESSION["User"];
$reactionC2=new reactionC();

$db=config::getconnexion();



         $a=$_SESSION["User"];

   $reactionC2=$db->query("SELECT * FROM reaction ");


?>
 <table>
                           <thead>
                              <tr>
                                 <th>id ommande.</th>
                                 <th>id Product</th>
                                 <th>quantite</th>
                                 <th>prix </th>
                                 <th>Remove</th>
                                 <th>modifier</th>
                              </tr>
                           </thead>


<?PHP
foreach($reactionC2 as $row){
   ?>
   <tr>
   <td><?PHP echo $row['id']; ?></td>
   <td><?PHP echo $row['react']; ?></td>
   <td><?PHP echo $row['user']; ?></td>
   
  
   
   </td>
  
   
   </tr>
   <?PHP
}
?>