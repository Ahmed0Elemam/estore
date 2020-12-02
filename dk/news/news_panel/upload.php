<?php
if (isset($_POST['upload'])) {
    $date = $_POST['date'];
    $target_path = "../../img/news/" . $date . "/"; //Declaring Path for uploaded images
    
if(is_dir($target_path)){
    
    echo "<br/><br/><div class='alert alert-danger'>تم رفع الصور لهذا التاريخ من قبل</div>";
}else{
    //Directory does not exist, so lets create it.
    mkdir($target_path, 0777);

    $j = 0; //Variable for indexing uploaded image 
  

    for ($i = 0; $i < count($_FILES['file']['name']); $i++) {//loop to get individual element from the array
        
        $validextensions = array("jpeg", "jpg", "png");  //Extensions which are allowed
        $ext = explode('.', basename($_FILES['file']['name'][$i]));//explode file name from dot(.) 
        $file_extension = end($ext); //store extensions in the variable
       
        
        
		$target_path1 = $target_path . $i . "." . $ext[count($ext) - 1];//set the target path with a new name of image
  
         
        $j = $j + 1;//increment the number of uploaded images according to the files in array       
     
	  if (($_FILES["file"]["size"][$i] < 500000) //Approx. 500kb files can be uploaded.
                && in_array($file_extension, $validextensions)) {
            if (move_uploaded_file($_FILES['file']['tmp_name'][$i], $target_path1)) {//if file moved to uploads folder
                echo '<hr/>'.$j. ' ) <span id="noerror">تم رفع الصورة بنجاح</span><br/>';
            } else {//if file was not moved.
                echo $j. ' ) <span id="error">حاول مرة أخرى</span><br/>';
            }
        } else {//if file size and file type was incorrect.
            echo $j. ' ) <span id="error">***صيغة صورة غير مسموحة***</span><br/>';
        }
     
    } 
}
}
?>