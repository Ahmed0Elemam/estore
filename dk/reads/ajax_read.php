<?php
if (isset($_REQUEST['district_number'])) {
    $district_number = (int) $_REQUEST['district_number'];
}
if (isset($_REQUEST['branch_no'])) {
    $branch_no = (int) $_REQUEST['branch_no'];
}
if (isset($_REQUEST['group_no'])) {
    $group_no = (int) $_REQUEST['group_no'];
}
if (isset($_REQUEST['account_no'])) {
    $account_no = (int) $_REQUEST['account_no'];
}

if ( ($district_number > 0) AND ($branch_no > 0) AND ($group_no > 0) AND ($account_no > 0)  ) {
	include 'connect.php';
	
	global $connect;
	$stmt = $connect->prepare("SELECT * FROM `bills` WHERE `district_number` = ? AND  `branch_no` = ? AND `group_no` = ? AND `account_no` = ?");
	$stmt->execute(array($district_number, $branch_no, $group_no, $account_no));
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
			
            echo '<div class="alert alert-info"><div class="row"><div class="col-md-4 col-sm-6 col-xs-6"><label class="text-danger">اسم المشترك</label></div><div class="col-md-8 col-sm-6 col-xs-6" id="CustomerName" style="margin-top: 7px;">'.$rowData['customer_name'].'</div></div><hr/>';
            echo '<div class="row"><div class="col-md-4 col-sm-6 col-xs-6"><label class="text-danger">العنوان</label></div><div class="col-md-8 col-sm-6 col-xs-6" id="CustomerAdd" style="margin-top: 7px;">'.$rowData['building_address_1'].'</div></div>';
            
		}
	}
    else{
        echo "<div class='alert alert-danger'>
        هذا الحساب غير موجود
        </div>";
    }

}

?>