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
    }
$formErrors = array();

// Area
if (isset($_REQUEST['district_num'])) {
    $district_num = (int) $_REQUEST['district_num'];
	if ($district_num < 1) {
		$formErrors[] = "لم يتم اختيار المنطقة";
	}
} else {
	$formErrors[] = "لم يتم اختيار المنطقة";
}
// Name
if (isset($_REQUEST['search'])) {
    $search =  $_REQUEST['search'];
    $search = prepareQuery($search);
    
	
} else {
	$formErrors[] = "لم يتم ادخال الاسم كما بالفاتورة";
}
// National ID
if (isset($_REQUEST['nid_num'])) {
    $nid_num = $_REQUEST['nid_num'];
 $nid_num = trim($nid_num);
  $nid_num = str_replace(" ", '',$nid_num);
  if(strlen($nid_num) != 14){
    $formErrors[] = "أدخل الرقم القومي بشكل صحيح 14 رقما";
  }
  elseif(!is_numeric($nid_num)){
    $formErrors[] = "الرقم القومي لا يمكن ان يكون حروفاً";
  }
  elseif($nid_num == 0){
    $formErrors[] = "الرقم القومي لا يمكن ان يكون أصفارا";
  }
  
  
} else {
	$formErrors[] = "أدخل الرقم القومي 14 رقما";
}
// Mobile ID
if (isset($_REQUEST['mob_num'])) {
    $mob_num = $_REQUEST['mob_num'];
 $mob_num = trim($mob_num);
  $mob_num = str_replace(" ", '',$mob_num);
  if(strlen($mob_num) != 11){
    $formErrors[] = "أدخل رقم الموبايل بشكل صحيح 11 رقما";
  }
 elseif(!is_numeric($mob_num)){
    $formErrors[] = "رقم الموبايل لا يمكن ان يكون حروفاً";
  }
  elseif($mob_num == 0){
    $formErrors[] = "رقم الموبايل لا يمكن ان يكون أصفارا";
  }
  
  
} else {
	$formErrors[] = "أدخل رقم الموبايل 11 رقما";
}
// Landline ID
if (isset($_REQUEST['land_num'])) {
    $land_num = $_REQUEST['land_num'];
 $land_num = trim($land_num);
  $land_num = str_replace(" ", '',$land_num);
 
} 

// Branch Validation
if (isset($_REQUEST['branch_num'])) {
    $branch_num = (int) $_REQUEST['branch_num'];
  if(!is_numeric($branch_num)){
    $formErrors[] = "رقم الفرع لا يمكن ان يكون حروفاً";
  }
  elseif($branch_num == 0){
    $formErrors[] = "رقم الفرع لا يمكن أن يكون اصفارا";
  }
   
} else {
	$formErrors[] = "أدخل رقم الفرع";
}
// Group Validation
if (isset($_REQUEST['group_num'])) {
    $group_num = (int) $_REQUEST['group_num'];
   if(!is_numeric($group_num)){
    $formErrors[] = "رقم المجموعة لا يمكن ان يكون حروفاً";
  }
    elseif($group_num == 0){
    $formErrors[] = "رقم المجموعة لا يمكن أن يكون اصفارا";
  }
  
} else {
	$formErrors[] = "أدخل رقم المجموعة";
}
// Account Validation
if (isset($_REQUEST['account_num'])) {
    $account_num = (int) $_REQUEST['account_num'];
   if(!is_numeric($account_num)){
    $formErrors[] = "رقم الحساب لا يمكن ان يكون حروفاً";
  }
elseif($account_num == 0){
    $formErrors[] = "رقم الحساب لا يمكن أن يكون اصفارا";
  }
    
} else {
	$formErrors[] = "أدخل رقم الحساب"; 
}

// Current Read validation
if (isset($_REQUEST['current_read'])) {
    $current_read = (int) $_REQUEST['current_read'];
  
  if(!is_numeric($current_read)){
    $formErrors[] = "قراءة العداد لا يمكن ان يكون حروفاً";
  }
  elseif($current_read == 0){
      $formErrors[] = "قراءة العداد لا يمكن أن تكون اصفاراً";
  }
} else {
	$formErrors[] = "أدخل قراءة العداد"; 
}
////////////////////////
if (isset($_REQUEST['hiReading_chk'])) {
    $hiReading_chk = (int) $_REQUEST['hiReading_chk'];
} else {
	$hiReading_chk=1; 
}
////////////////////////
if (isset($_REQUEST['loReading_chk'])) {
    $loReading_chk = (int) $_REQUEST['loReading_chk'];
} else {
	$loReading_chk=1; 
}


if ( ($district_num > 0) AND ($branch_num > 0) AND ($group_num > 0) AND ($account_num > 0) AND ($current_read > 0)  AND ($nid_num > 0) AND ($mob_num > 0) and ($search != '') and (empty($formErrors))) {
	include 'connect.php';
	
	global $connect;
	$stmt = $connect->prepare("SELECT * FROM bills WHERE district_number = ? AND branch_no = ? AND group_no = ? AND account_no = ? AND search like ?");
	$stmt->execute(array($district_num, $branch_num, $group_num, $account_num, $search));
	$rowsData = $stmt->fetchAll();
	$count = $stmt->rowCount();
	
	if ($count == 1) {
		foreach ($rowsData as $rowData){
			$reading=$rowData['new_reading'];
            $meter_state = $rowData['meter_stat_code'];
            $apt_no = $rowData['apartments_no'];
		}
if($meter_state == 1 or $meter_state == 4){
      //////////////////////////العداد سليم////////////////////////////////
		if ($current_read < $reading){
          if ($loReading_chk == 1) {
					echo "<input type='hidden' id='loReading' name='loReading' value='2' /><div class='alert alert-danger'>تم ادخال قراءة أقل من القراءة الحالية في الفاتورة !!! ... الرجاء التأكد من القراءة ثم اضغط ارسال <br/>أو قم بالضغط على ارسال مرة أخرى لتأكيد القراءة التي أدخلتها  </div>";
				
                } else {
            
           $stmt = $connect->prepare("UPDATE bills SET real_value = ?, less = 1, national_id =?, mobile = ? , landline = ? ,entry_date = now(), entry_time = now() WHERE district_number = ? AND branch_no = ? AND group_no = ? AND account_no = ? AND search like ?");
            $stmt->execute(array($current_read, $nid_num, $mob_num, $land_num, $district_num, $branch_num, $group_num, $account_num, $search));
            echo "<input type='hidden' id='loReading' name='loReading' value='1' /><div class='alert alert-success'> تم ادخال قراءة عدادك بنجاح ... شكرا لزيارتكم :) </div>";
          }
        } else {
          
			$reading_deff = $current_read - $reading;
			
			if ($reading_deff >= $apt_no * 50) {
				if ($hiReading_chk == 1) {
					echo "<input type='hidden' id='hiReading' name='hiReading' value='2' /><div class='alert alert-danger'>تم ادخال قراءة باستهلاك عالي جدا !!! ... الرجاء التأكد من القراءة ثم اضغط ارسال <br/>أو قم بالضغط على ارسال مرة أخرى لتأكيد القراءة التي أدخلتها </div>";
				
                } else {
					$stmt = $connect->prepare("UPDATE bills SET real_value = ?, less = 2, national_id = ?, mobile = ?, landline = ?,entry_date = now(), entry_time = now() WHERE district_number = ? AND branch_no = ? AND group_no = ? AND account_no = ? AND search like ?");
					$stmt->execute(array($current_read, $nid_num, $mob_num, $land_num, $district_num, $branch_num, $group_num, $account_num, $search));
					echo "<input type='hidden' id='hiReading' name='hiReading' value='1' /><div class='alert alert-success'> تم ادخال قراءة عدادك بنجاح ... شكرا لزيارتكم :) </div>";
				}
				
			} else {
				$stmt = $connect->prepare("UPDATE bills SET real_value = ?, less = 0, national_id = ?, mobile = ?, landline = ?,entry_date = now(), entry_time = now() WHERE district_number = ? AND branch_no = ? AND group_no = ? AND account_no = ? AND search like ?");
				$stmt->execute(array($current_read, $nid_num, $mob_num, $land_num, $district_num, $branch_num, $group_num, $account_num, $search));
				echo "<input type='hidden' id='hiReading' name='hiReading' value='1' /><div class='alert alert-success'> تم ادخال قراءة عدادك بنجاح ... شكرا لزيارتكم :) </div>";
			}
			
		}
      }else {
  ////////////////////////////////////////العداد معطل//////////////////////////////////////
   echo "<div class='alert alert-danger'>العداد معطل ... لا يسمح بادخال قراءات للعداد ... برجاء مراجعة مركز خدمة العملاء التابع لمركزك لفحص العداد</div>";
}
	}else{
      
        echo "<div class='alert alert-danger'>
        هذا الحساب غير موجود
        </div>
        ";
    }

} else {
	
		foreach($formErrors as $error){
			echo '<div class="alert alert-danger">'.$error.'</div>';
 
	}
}


?>