<?php 
$files = $_FILES['files']['name'];
 $userid = $_POST['user'];
 $treatment_type = $_POST['treatment_type'];
 $department= $_POST['department'];
 $treatment_year = $_POST['treatment_year'];
 $treatment_id = $_POST['treatment_id'];

 $file_name = $_POST['file_name'];


$target_path = 'scanned/'.$userid.'/'.$treatment_type.'_'.$department.'_'.$treatment_year.'_'.$treatment_id.'/'; 

  if(is_file($target_path.$file_name)){
        unlink($target_path.$file_name);
        }




?>



