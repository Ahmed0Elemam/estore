<?php 
$files = $_FILES['files2']['name'];
 $userid = $_POST['user'];
 $letter_no = $_POST['letter_no'];
 
 $file_name = $_POST['file_name'];

$target_path = 'scanned/'.$userid.'/'.'L_'.$letter_no.'/'; 

  if(is_file($target_path.$file_name)){
       unlink($target_path.$file_name);
        }

?>



