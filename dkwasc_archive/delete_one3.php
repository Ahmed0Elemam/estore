<?php 
$files = $_FILES['files3']['name'];
 $userid = $_POST['user'];
 $musadqa_id = $_POST['musadqa_id'];
 
 $file_name = $_POST['file_name'];

$target_path = 'scanned/'.$userid.'/'.'M_'.$musadqa_id.'/'; 

  if(is_file($target_path.$file_name)){
       unlink($target_path.$file_name);
        }

?>



