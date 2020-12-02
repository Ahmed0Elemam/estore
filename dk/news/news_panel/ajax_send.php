<?php

$formErrors = array();


if (isset($_REQUEST['title'])) {
    $title =  $_REQUEST['title'];
} else {
	$formErrors[] = "لم يتم ادخال عنوان الخبر";
}
/////////////////////////
if (isset($_REQUEST['date2'])) {
    $date2 = $_REQUEST['date2'];
}
/////////////////////////
if (isset($_REQUEST['content'])) {
    $content = $_REQUEST['content'];
} else {
	$formErrors[] = "لم يتم ادخال نص الخبر";
}

$content = nl2br(htmlentities($content, ENT_QUOTES, 'UTF-8'));

$all = "<p>" . $content . "</p>";

  $files = glob("../../img/news/".$date2."/*.*");
    for ($i=0; $i<count($files); $i++){
        $image = $files[$i];
       $supported_file = array(
               'gif',
               'jpg',
               'jpeg',
               'png'
        );
 
        $ext = strtolower(pathinfo($image, PATHINFO_EXTENSION));
        if (in_array($ext, $supported_file)) {
           //echo basename($image)."<br />"; // show only image name if you want to show full path then use this code // echo $image."<br />";
            $images = $images.'
            <div class="col-md-6">
                <a class="example-image-link" href="'.$image.'" data-lightbox="example-set" data-title="">
                    <img src="'.$image.'" class="img-rounded" width="100%" />
                </a>
            </div>';
            
            
           } else {
               continue;
           }
         }
$img1 = trim($files[0],"\.\.\/");
$img = "../".$img1;
            $contents = $all . $images;


if ( ($title != '') and ($date2 != '') and ($content != '') and (empty($formErrors))) {
	include 'connect.php';
    global $connect;
    
	$stmt1 = $connect->prepare("SELECT * from news where date = ?");
	$stmt1->execute(array($date2));
    if($stmt1->rowCount() > 0){
        echo "<br/><div class='alert alert-danger'>
        تم اضافة هذا الخبر لنفس التاريخ من قبل
        </div>";
        
    }else{
	
	$stmt = $connect->prepare("INSERT INTO news(title,img,content,date,verified) VALUES(?,?,?,?,0)");
	$stmt->execute(array($title, $img, $contents, $date2));
	
    echo '<br/><div class="alert alert-success">تم اضافة الخبر بنجاح :)</div>';
      
    }

} else {
	
		foreach($formErrors as $error){
			echo '<div class="alert alert-danger">'.$error.'</div>';
 
	}
}


?>