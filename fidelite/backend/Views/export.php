<?php  
$conn = new mysqli('localhost', 'root', '');  
mysqli_select_db($conn, 'soujoud');  
$sql = "SELECT * FROM `fidel`";  
$setRec = mysqli_query($conn, $sql);  
$columnHeader = '';  
$columnHeader ="FID" . "\t" . "idc" . "\t" . "score" . "\t" . "promotion" . "\t";  
$setData = '';  
  while ($rec = mysqli_fetch_row($setRec)) {  
    $rowData = '';  
    foreach ($rec as $value) {  
        $value = '"' . $value . '"' . "\t";  
        $rowData .= $value;  
    }  
    $setData .= trim($rowData) . "\n";  
}  
  
header("Content-type: application/octet-stream");  
header("Content-Disposition: attachment; filename=User_Detail.xls");  
header("Pragma: no-cache");  
header("Expires: 0");  

  echo ucwords($columnHeader) . "\n" . $setData . "\n";  
 ?> 