<?php 
include 'connect.php';

if($_SERVER['REQUEST_METHOD'] == 'POST'){

      
    // Get variables
    
    $b_code  = $_REQUEST['bcode'];

 // Select from DB
      $stmt = $connect->prepare("SELECT MAX(rep_id) AS max_id FROM building_report Where building_code = ?");
      $stmt->execute(array($b_code));
    
      $rows = $stmt->fetchAll();
    
    
    foreach($rows as $row) {
        
        echo $row['max_id'] + 1;
        
    }

   

}

?>



