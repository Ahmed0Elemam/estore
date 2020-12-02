<?php
include "connect.php";

$treatment_type = $_REQUEST['tr_type'];
$type = $_REQUEST['type'];
$treatment_id = $_REQUEST['tr_id'];
$treatment_year = $_REQUEST['tr_year'];
$department = $_REQUEST['dept'];
$treatment_category1 = $_REQUEST['cat'];
$attach_no = $_REQUEST['attach'];
$notes = $_REQUEST['notes'];
$user_id = $_REQUEST['user_id'];

$stmt3 = $connect->prepare("select LOOKUPS_DATA_CTS.get_TREATMENT_CATEGORIES(?, ?) as category from dual");
$stmt3->execute(array($treatment_category1, $department));
$results3 = $stmt3->fetchAll(PDO::FETCH_ASSOC);
foreach($results3 as $result3){
  $treatment_category =  $result3['CATEGORY']; 

  }

$dir = 'scanned/'.$user_id.'/'.$treatment_type.'_'.$department.'_'.$treatment_year.'_'.$treatment_id.'/';


$destination = "archive/cts/".$department."/".$treatment_type."/".$type."/".$treatment_category1."/".$treatment_id."/";

function move_files($destination) {
  $treatment_type = $_REQUEST['tr_type'];
  $type = $_REQUEST['type'];
  $treatment_id = $_REQUEST['tr_id'];
  $treatment_year = $_REQUEST['tr_year'];
  $department = $_REQUEST['dept'];
  $treatment_category1 = $_REQUEST['cat'];
  $attach_no = $_REQUEST['attach'];
  $notes = $_REQUEST['notes'];
  $user_id = $_REQUEST['user_id'];

  $temp_dir = 'scanned/'.$user_id.'/'.$treatment_type.'_'.$department.'_'.$treatment_year.'_'.$treatment_id.'/';
  $files = scandir($temp_dir);
  // Identify directories
  $source = $temp_dir;
  // Cycle through all source files
  foreach ($files as $file) {
    if (in_array($file, array(".",".."))) continue;
    // If we copied this successfully, mark it for deletion

    $conn = oci_connect('cts', 'cts', '110.110.110.157/orcl', 'UTF8');
if (!$conn) {
    $e = oci_error();
    trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
}
if ($treatment_type  == 1 ) {
    $sql ="declare val number; begin val:= PKG_ATTACHMENTS.insert_attachments_out(:treatment_id, :treatment_year, :department, :treatment_category, :file, :destination, :notes, :user_id); end;";

    $stid = oci_parse($conn, $sql);
    oci_bind_by_name($stid, ':treatment_id', $treatment_id);
    oci_bind_by_name($stid, ':treatment_year', $treatment_year);
    oci_bind_by_name($stid, ':department', $department);
    oci_bind_by_name($stid, ':treatment_category', $treatment_category1);
    oci_bind_by_name($stid, ':file', $file);
    oci_bind_by_name($stid, ':destination', $destination);
    oci_bind_by_name($stid, ':notes', $notes);
    oci_bind_by_name($stid, ':user_id', $user_id);
    oci_execute($stid);
} else {
  $sql ="declare val number; begin val:= PKG_ATTACHMENTS.insert_attachments_in(:treatment_id, :treatment_year, :department, :treatment_category, :file, :destination, :notes, :user_id); end;";

    $stid = oci_parse($conn, $sql);
    oci_bind_by_name($stid, ':treatment_id', $treatment_id);
    oci_bind_by_name($stid, ':treatment_year', $treatment_year);
    oci_bind_by_name($stid, ':department', $department);
    oci_bind_by_name($stid, ':treatment_category', $treatment_category1);
    oci_bind_by_name($stid, ':file', $file);
    oci_bind_by_name($stid, ':destination', $destination);
    oci_bind_by_name($stid, ':notes', $notes);
    oci_bind_by_name($stid, ':user_id', $user_id);
    oci_execute($stid);
}

    $old = $source.$file;
    $new = $destination.$file;
    if (copy($old, $new)) {
      $delete[] = $source.$file;
    }
  }
  
  // Delete all successfully-copied files
  foreach ($delete as $file) {
    unlink($file);
  }
      
  echo "<strong><p class='alert alert-success'>تمت أرشفة الملفات المسحوبة / المرفوعة بنجاح</p></strong>";
      }

// function to check for empty folder
function is_dir_empty($dir) {
    if (!is_readable($dir)) return NULL; 
    return (count(scandir($dir)) == 2);
  }

  if (is_dir_empty($dir)) {
    echo "<strong><p class='alert alert-danger'>لم يتم سحب أي ملفات</p></strong>"; 
  }else {


   

$files = glob($dir . "*");
if ($files){
 $filecount = count($files);
}


if ($filecount > $attach_no) {
 foreach($files as $file){ // iterate files
    if(is_file($file))
      unlink($file); // delete file
  }

  echo "<strong><p class='alert alert-danger'>تم سحب عدد مرفقات أكبر من العدد المطلوب الرجاء اعادة السحب/الرفع والارشفة مرة أخرى</p></strong>"; 
 
} else {

// if folders not exist create it
  if (!file_exists('archive/cts/'.$department.'')) {
    mkdir('archive/cts/'.$department.'', 0777, true);

    if (!file_exists('archive/cts/'.$department.'/'.$treatment_type.'')) {
      mkdir('archive/cts/'.$department.'/'.$treatment_type.'', 0777, true);
    }
       if (!file_exists('archive/cts/'.$department.'/'.$treatment_type.'/'.$type.'')) {
        mkdir('archive/cts/'.$department.'/'.$treatment_type.'/'.$type.'', 0777, true);
      }
        if (!file_exists('archive/cts/'.$department.'/'.$treatment_type.'/'.$type.'/'.$treatment_category1.'')) {
          mkdir('archive/cts/'.$department.'/'.$treatment_type.'/'.$type.'/'.$treatment_category1.'', 0777, true);
        }
          if (!file_exists('archive/cts/'.$department.'/'.$treatment_type.'/'.$type.'/'.$treatment_category1.'/'.$treatment_id.'')) {
            mkdir('archive/cts/'.$department.'/'.$treatment_type.'/'.$type.'/'.$treatment_category1.'/'.$treatment_id.'', 0777, true);
          
          // move files
          move_files($destination);
          
        } else {
                // move files
            move_files($destination);

          }
      } else {
        if (!file_exists('archive/cts/'.$department.'/'.$treatment_type.'/'.$type.'/'.$treatment_category1.'/'.$treatment_id.'')) {
          mkdir('archive/cts/'.$department.'/'.$treatment_type.'/'.$type.'/'.$treatment_category1.'/'.$treatment_id.'', 0777, true);
        
        // move files
        move_files($destination);

      } else {
              // move files
          move_files($destination);

        }

      }
  } 

  }
  

  
  

?>