<?php
// including database connection
require 'config.php';
?>
<?php
if(isset($_GET['page'])){
    // if get page number through url and check it is a valid number
    $page_num = filter_var($_GET['page'], FILTER_VALIDATE_INT,[
        'options' => [
            'default' => 1,
            'min_range' => 1
        ]
    ]); 
    
}else{
    //default page number
    $page_num = 1;
}
// set how much show posts in a single page
$page_limit = 4;
// Set Offset
$page_offset = $page_limit * ($page_num - 1);
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CRUD "FIDEL"</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
         .button {
          background-color: #ddd;
          border: none;
          color: black;
          padding: 5px 10px;
          text-align: center;
          text-decoration: none;
          display: inline-block;
          margin: 4px 2px;
          cursor: pointer;
          border-radius: 16px;
                 }
        .btn{
            margin-left: 10px;
            margin-top:2px;
            }
    </style>
</head>
<body>
<div class="wrapper">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card" style="margin-top: 20px;margin-bottom: 20px;">
                    <div class="card-body">
                        <h2 class="pull-left">Info Utilisateur <a href="create.php" class="btn btn-success pull-right">Ajouter un Utilisateur</a><a href="../search/search.php" class="btn btn-success pull-right">Chercher un Utilisateur</a></h2></h2>
                      
                </div>
                <table width="40%" cellpadding="5">
                    <tr> 
<th><h4 style="position: relative;left:20px">Trier par :</h4></th>
<th><a style="position: relative;left:20px" class="button btn" href="indexs.php">Score</a></th>
<th><a style="position: relative;left:2px" class="button btn" href="indexp.php">promotion</a></th>
<th><a style="position: relative;right:20px" class="button btn" href="index.php">dèfaut</a></th>
                   </tr>
                </table>



<?php
function showPosts($link, $current_page_num, $page_limit, $page_offset){
    
    // query of fetching posts
    $sqli = mysqli_query($link,"SELECT * FROM `fidel` ORDER BY score LIMIT $page_limit OFFSET $page_offset");
    
    
    // check database is not empty
    if(mysqli_num_rows($sqli) > 0){
        
        // fetching data    
                            echo "<table class='table table-bordered table-striped'>";
                            echo "<thead>";
                            echo "<tr>";
                            echo "<th>ID_Fidel</th>";
                            echo "<th>idc</th>";
                            echo "<th>score</th>";
                            echo "<th>promotion</th>";
                            echo "<th>Actions</th>";
                            echo "</tr>";
                            echo "</thead>";
                            echo "<tbody>";
                            while($row = mysqli_fetch_array($sqli)){
                            echo "<tr>";
                            echo "<td>" . $row['FID'] . "</td>";
                            echo "<td>" . $row['idc'] . "</td>";
                            echo "<td>" . $row['score'] . "</td>";
                            echo "<td>" . $row['promotion'] . "</td>";
                            echo "<td>";
         echo "<a href='read.php?FID=" . $row['FID'] . "' class='btn btn-primary'>Afficher</a>";
         echo "<a href='update.php?FID=" . $row['FID'] . "' class='btn btn-info'>Modifier</a>";
         echo "<a href='delete.php?FID=" . $row['FID'] . "' class='btn btn-danger'>Supprimer</a>";
         
                            echo "</td>";
                            echo "</tr>";
                        }
                            echo "</tbody>";
                            echo "</table>";
        // total number of posts
        $total_posts = mysqli_num_rows(mysqli_query($link,"SELECT * FROM `fidel`"));
        // total number of pages
        $total_page = ceil($total_posts / $page_limit);
        // set next page number
        $next_page = $current_page_num+1; 
        // set prev page number
        $prev_page = $current_page_num-1; 
        echo "<li>";
        //showing prev button and check current page number is greater than 1
        if($current_page_num > 1){
           echo '<a href="?page='.$prev_page.'" class="page_link">Prec</a>';
        }
        // show all number of pages
        for($i = 1; $i <= $total_page; $i++){
            //highlight the current page number
            if($i == $current_page_num){
                echo '<a href="?page='.$i.'" class="page_link active_page">'.$i.'</a>';
            }else{
                echo '<a href="?page='.$i.'" class="page_link">'.$i.'</a>';
            }  
        }
        // showing next button and check this is last page
        if($total_page+1 != $next_page){
           echo '<a href="?page='.$next_page.'" class="page_link">Suiv</a>';
        }
        
        echo "</li>";  
        
    }else{
        echo "No Data found !";
    }
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style> 
        body{
            padding:0;
            margin: 0;
            font-family: sans-serif;
        }
        .page_link{
            display: inline-block;
            color: #222;
            border: 1px solid #ddd;
            padding: 5px 10px;
            margin: 0 5px;
            text-decoration: none;
            cursor: pointer;
        }
        .active_page{
            background-color:dodgerblue;
            color: #FFF;
            outline: none;
            border: 1px solid rgba(0,0,0,.1);
        }
        .container{
            border: 5px ;
            padding: 10px;
        }
        .posts{
            margin: 0;
            list-style: none;
            padding: 0;
        }
        .posts li{
            padding:10px 5px;
            margin: 0;
            border-bottom: 1px solid #ddd;
            
        }
        h2{
            margin: 0;
            padding: 0;
        }
        p{
            margin: 0;
            padding:10px 10px 0 10px;
            color: #444;
        }
        
    </style>
</head>

<body>
        <ul class="posts">



<?php 
// call showPosts function 
showPosts($link, $page_num, $page_limit, $page_offset);
// Num of users



?>   
    </ul>
    </div> 
    <div align="pull-right" style="margin-left: 85%; margin-bottom: 80px; position: relative;bottom: 80px; left: 30px">
    <table>
    <tr>  
    <td><form action="export.php"></td>
    <button style="background-color: #ddd;border-radius: 10px;">
    <img src="export.png" width="45" height="45"/>
    </button>
    </form> 
    <td><form action="Print.php"></td>
    <button style="background-color: #ddd; border-radius: 10px;"/> <img src="Print.jpg" width="45" height="45"/> 
    </button>
    </form> 
    </tr> 
    </table> 
    </div>
</body>
</html>