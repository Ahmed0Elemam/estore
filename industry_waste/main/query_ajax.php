<?php 
include 'connect.php';

if($_SERVER['REQUEST_METHOD'] == 'POST'){

      
    // Get variables
    
    $rep_code  = $_REQUEST['b_code'];

 // Select from DB
      $stmt = $connect->prepare("SELECT * FROM building_info WHERE building_code = ?");
      $stmt->execute(array($rep_code));
    
      $rows = $stmt->fetchAll();
    
    
    foreach($rows as $row) {
        
        echo $row['building_name'];
        
    }

   

}

?>



