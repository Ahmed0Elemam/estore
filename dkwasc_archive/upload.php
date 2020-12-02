<script src="js/js2.js"></script>
<?php
$files = $_FILES['files'];
$userid = $_POST['user'];
$treatment_type = $_POST['treatment_type'];
$department= $_POST['department'];
$treatment_year = $_POST['treatment_year'];
$treatment_id = $_POST['treatment_id'];


    
$target_path = 'scanned/'.$userid.'/'.$treatment_type.'_'.$department.'_'.$treatment_year.'_'.$treatment_id.'/'; //Declaring Path for uploaded images

    $j = 0; //Variable for indexing uploaded image 
  
  
    for ($i = 0; $i < count($_FILES['files']['name']); $i++) {//loop to get individual element from the array
        
        $validextensions = array("jpg", "jpeg", "png","pdf","xls", "xlsx", "csv", "xer", "doc", "docx", "zip", "rar", "iso", "ppt", "pptx","dwg","kml", "kmz");  //Extensions which are allowed
        $ext = explode('.', basename($_FILES['files']['name'][$i]));//explode file name from dot(.) 
        $file_extension = end($ext); //store extensions in the variable
       
        
        //set the target path with a new name of image
		$target_path1 = $target_path . $i ."_".date("d.m.Y")."_".rand(1,1000000). "." . $ext[count($ext) - 1];
  
         
    $j = $j + 1;//increment the number of uploaded images according to the files in array       
     
	  if ( in_array($file_extension, $validextensions)) {
            if (move_uploaded_file($_FILES['files']['tmp_name'][$i], $target_path.basename($_FILES['files']['name'][$i]))) {//if file moved to uploads folder
                $uploaded = true;
                echo  '<div style="font-weight:bold;margin:10px auto;" class="col-md-2 alert alert-success"> تم رفع ';
                echo '<li class="list-unstyled">'.basename($_FILES['files']['name'][$i]).'</li>
                <hr/>
                <button class="btn btn-danger delete_only" >حذف</button>
                
                </div>
                ';
                
            } else {//if file was not moved.
                $uploaded = false;
            }
            

        } else {//if file type was incorrect.
            echo  '<div style="font-weight:bold" class="col-md-2 alert alert-danger">صيغة الملف '.basename($_FILES['files']['name'][$i]).' غير مسموحة لم يتم رفعها الرجاء اعادة رفع الملف الصحيح  مرة أخرى</div>';

            $j = $j-1;
        }
     
    }


 if ($uploaded = false){
        echo '<div style="font-weight:bold;margin:10px auto;width:50%;" class="alert alert-danger">لم يتم رفع الملفات ... حاول مرة أخرى</div>';
    } 

echo '
    <div id="delete_msg"></div>';



?>

