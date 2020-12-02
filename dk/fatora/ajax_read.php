<?php
function prepareQuery($str){
		$str = preg_replace('/ /','',$str);
		$patterns[0] = '/(أ|إ|ا|آ)/';
		$patterns[1] = '/(ة|ه)/';
		$patterns[2] = '/(ى|ي|ئ)/';
		$patterns[3] = '/(و|ؤ)/';
		
		$replacements[0] = 'ا';
		$replacements[1] = 'ه';
		$replacements[2] = 'ى';
		$replacements[3] = 'و';
		$str =  preg_replace($patterns, $replacements, $str);
		return $str;
    };
$formErrors = array();
if (isset($_REQUEST['district_number'])) {
    $district = (int) $_REQUEST['district_number'];
	if ($district < 1) {
		$formErrors[] = "لم يتم اختيار المنطقة";
	}
} else {
	$formErrors[] = "لم يتم اختيار المنطقة";
}
// Name
if (isset($_REQUEST['search'])) {
    $name =  $_REQUEST['search'];
    $name = prepareQuery($name);
    if(empty($name)){
        $formErrors[] = "لم يتم ادخال الاسم كما بالفاتورة";
    }
	
} else {
	$formErrors[] = "لم يتم ادخال الاسم كما بالفاتورة";
}
// Branch Validation
if (isset($_REQUEST['branch_no'])) {
    $branch = (int) $_REQUEST['branch_no'];
  if(!is_numeric($branch)){
    $formErrors[] = "رقم الفرع لا يمكن ان يكون حروفاً";
  }
  elseif($branch == 0){
    $formErrors[] = "رقم الفرع لا يمكن أن يكون اصفارا";
  }
   
} else {
	$formErrors[] = "أدخل رقم الفرع";
}
// Group Validation
if (isset($_REQUEST['group_no'])) {
    $group = (int) $_REQUEST['group_no'];
   if(!is_numeric($group)){
    $formErrors[] = "رقم المجموعة لا يمكن ان يكون حروفاً";
  }
    elseif($group == 0){
    $formErrors[] = "رقم المجموعة لا يمكن أن يكون اصفارا";
  }
  
} else {
	$formErrors[] = "أدخل رقم المجموعة";
}
// Account Validation
if (isset($_REQUEST['account_no'])) {
    $account = (int) $_REQUEST['account_no'];
   if(!is_numeric($account)){
    $formErrors[] = "رقم الحساب لا يمكن ان يكون حروفاً";
  }
    elseif($account == 0){
    $formErrors[] = "رقم الحساب لا يمكن أن يكون اصفارا";
  }
    
} else {
	$formErrors[] = "أدخل رقم الحساب"; 
}

if ( ($district > 0) and ($branch > 0) and ($group > 0) and ($account > 0) and ($name != ' ') and empty($formErrors)  ) {
	include 'connect.php';
	
	global $connect;
	$stmt = $connect->prepare("SELECT * FROM bills WHERE district_number = ? AND  branch_no = ? AND group_no = ? AND account_no = ? AND search like ?");
	$stmt->execute(array($district, $branch, $group, $account, $name));
	$rowsData = $stmt->fetchAll();
	$count = $stmt->rowCount();
	if ($count == 1) {
		foreach ($rowsData as $rowData){
			header("Expires: Sun, 25 Nov 1973 05:00:00 GMT");
			header( 'Last-Modified: ' . gmdate( 'D, d M Y H:i:s' ) . ' GMT' );
			header( 'Cache-Control: no-store, no-cache, must-revalidate' );
			header( 'Cache-Control: post-check=0, pre-check=0', false );
			header( 'Pragma: no-cache' );
			header('Content-Type: text/html; charset=utf-8'); 
			
            echo '<br/><div class="alert alert-info"><div class="alert alert-info">
                        <br/>
                      <div class="row">
                      <div class="col-md-4 col-sm-6 col-xs-6" style="margin-top: -10px;">
                        <label class="text-danger">العنوان</label>
                      </div>
                      <div class="col-md-8 col-sm-6 col-xs-6" id="CustomerAdd" style="margin-top: 0px;">'.$rowData['building_address_1'].'
                      </div>
                    </div>
                    <br/>
                  </div>';
            echo '<a class="btn btn-danger btn-lg" href="bill.php?acc='.$rowData['account_no'].'&group='.$rowData['group_no'].'&branch='.$rowData['branch_no'].'&area='.$rowData['district_number'].'&name='.$rowData['search'].'">عرض الفاتورة</a><br/><br/></div>';
            
		}
	}
    else{
        echo "<br/><div class='alert alert-danger'>
        هذا الحساب غير موجود
        </div>";
    }

}else {
	
		foreach($formErrors as $error){
			echo '<div class="alert alert-danger">'.$error.'</div>';
 
	}
}


?>