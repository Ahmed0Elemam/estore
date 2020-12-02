<?php
include "connect2.php";


$musadqa_id = $_REQUEST['musadqa'];
$notes = $_REQUEST['notes'];
$user_id = $_REQUEST['user_id'];

$stmt1 = $connect2->prepare("SELECT * FROM MUSADQA where MUSADQA_ID = ?");
$stmt1->execute(array($musadqa_id));
$results1 = $stmt1->fetchAll(PDO::FETCH_ASSOC);


$dir = 'scanned/'.$user_id.'/M_'.$musadqa_id.'/';
  foreach ($results1 as $result1) {
    $area = $result1['CENTER_NO_FK'];
    $branch = $result1['BRANCH_NO_FK'];
    $group = $result1['GROUP_NO_FK'];
    $year = $result1['YEAR_NO'];
    $month = $result1['MONTH_NO'];
    $customer = $result1['DIRECTED_TO'];
  }

$destination = "archive/billing/musadqa/".$area."/".$branch."/".$group."/".$year."/".$month."/".$customer."/".$musadqa_id."/";

function move_files($destination) {
  include "connect2.php";

  $musadqa_id = $_REQUEST['musadqa'];
  $notes = $_REQUEST['notes'];
  $user_id = $_REQUEST['user_id'];

  echo $temp_dir = 'scanned/'.$user_id.'/M_'.$musadqa_id.'/';
  $files = scandir($temp_dir);
  // Identify directories
  $source = $temp_dir;
  // Cycle through all source files
  foreach ($files as $file) {
    if (in_array($file, array(".",".."))) continue;
    // If we copied this successfully, mark it for deletion

    $conn = oci_connect('billing', 'billing', '110.110.110.157/orcl', 'UTF8');
    if (!$conn) {
        $e = oci_error();
        trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
    }
    $sql ="declare val number; begin val:= PROCESS_ATTACHMENTS.insert_musadqa_attachments(:musadqa_id, :file, :destination, :notes, :user_id); end;";

    $stid = oci_parse($conn, $sql);
    oci_bind_by_name($stid, ':musadqa_id', $musadqa_id);
    oci_bind_by_name($stid, ':file', $file);
    oci_bind_by_name($stid, ':destination', $destination);
    oci_bind_by_name($stid, ':notes', $notes);
    oci_bind_by_name($stid, ':user_id', $user_id);
    oci_execute($stid);
/*
    $stmt2 = $connect2->prepare("INSERT INTO MUSADQA_ATTACH(MUSADQA_ID, FILE_N, DISTINATION, NOTES) VALUES (?, ?, ?, ?)");
    $stmt2->execute(array($musadqa_id,$file,$destination,$notes));
    //$results2 = $stmt2->fetchAll(PDO::FETCH_ASSOC);

*/
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


// if folders not exist create it
  if (!file_exists('archive/billing/musadqa/'.$area.'')) {
    mkdir('archive/billing/musadqa/'.$area.'', 0777, true);

    if (!file_exists('archive/billing/musadqa/'.$area.'/'.$branch.'')) {
      mkdir('archive/billing/musadqa/'.$area.'/'.$branch.'', 0777, true);
    }
       if (!file_exists('archive/billing/musadqa/'.$area.'/'.$branch.'/'.$group.'')) {
        mkdir('archive/billing/musadqa/'.$area.'/'.$branch.'/'.$group.'', 0777, true);
      }
        if (!file_exists('archive/billing/musadqa/'.$area.'/'.$branch.'/'.$group.'/'.$year.'')) {
          mkdir('archive/billing/musadqa/'.$area.'/'.$branch.'/'.$group.'/'.$year.'', 0777, true);
        }
          if (!file_exists('archive/billing/musadqa/'.$area.'/'.$branch.'/'.$group.'/'.$year.'/'.$month.'')) {
            mkdir('archive/billing/musadqa/'.$area.'/'.$branch.'/'.$group.'/'.$year.'/'.$month.'', 0777, true);
          }
          if (!file_exists('archive/billing/musadqa/'.$area.'/'.$branch.'/'.$group.'/'.$year.'/'.$month.'/'.$customer.'')) {
            mkdir('archive/billing/musadqa/'.$area.'/'.$branch.'/'.$group.'/'.$year.'/'.$month.'/'.$customer.'', 0777, true);
          }
          if (!file_exists('archive/billing/musadqa/'.$area.'/'.$branch.'/'.$group.'/'.$year.'/'.$month.'/'.$customer.'/'.$musadqa_id.'')) {
            mkdir('archive/billing/musadqa/'.$area.'/'.$branch.'/'.$group.'/'.$year.'/'.$month.'/'.$customer.'/'.$musadqa_id.'', 0777, true);
          

          // move files
          move_files($destination);
          
        } else {
                // move files
            move_files($destination);

          }
      } else {
        if (!file_exists('archive/billing/musadqa/'.$area.'/'.$branch.'/'.$group.'/'.$year.'/'.$month.'/'.$customer.'/'.$musadqa_id.'')) {
          mkdir('archive/billing/musadqa/'.$area.'/'.$branch.'/'.$group.'/'.$year.'/'.$month.'/'.$customer.'/'.$musadqa_id.'', 0777, true);
        
        // move files
        move_files($destination);

      } else {
              // move files
          move_files($destination);

        }

      }
   

  }
?>