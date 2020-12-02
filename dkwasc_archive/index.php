<?php 
include "header.php";
include "connect.php";
include "connect2.php";

/////////////////////////////////////////////////////////////////////
// أرشفة المعاملات
///////////////////////////////////////////////////////////////////
if ((isset($_GET['treatment_type']) and is_numeric($_GET['treatment_type'])) 
and (isset($_GET['type']) and is_numeric($_GET['type']))
and (isset($_GET['treatment_id']) and is_numeric($_GET['treatment_id']) and $_GET['treatment_id'] != 0)
and (isset($_GET['treatment_year']) and is_numeric($_GET['treatment_year']) and $_GET['treatment_year'] != 0)
and (isset($_GET['department']) and is_numeric($_GET['department']) and $_GET['department'] != 0)
and (isset($_GET['treatment_cat']) and is_numeric($_GET['treatment_cat']) and $_GET['treatment_cat'] != 0)
and (isset($_GET['sys_id']) and is_numeric($_GET['sys_id']) and $_GET['sys_id'] != 0 and $_GET['sys_id'] == 4)
and (isset($_GET['user_id']) and is_numeric($_GET['user_id']) and $_GET['user_id'] != 0)
and (isset($_GET['attach_no']) and is_numeric($_GET['attach_no']) and $_GET['attach_no'] != 0)
and (isset($_GET['valid']) and is_numeric($_GET['valid']) and $_GET['valid'] == 1)
) {
    
    include "mo3mla_archive.php";
//////////////////////////////////////////////////////////////////////////////////////////////////////////
// when SYSTEM  = 4 المصالح الحكومية                             
// Letters Archive أرشفة الخطابات
/////////////////////////////////////////////////////////////////////////////////////////////////////////
 } else if ((isset($_GET['sys_id']) and is_numeric($_GET['sys_id']) and $_GET['sys_id'] != 0 and $_GET['sys_id']== 2)
 and (isset($_GET['user_id']) and is_numeric($_GET['user_id']) and $_GET['user_id'] != 0)
 and (isset($_GET['letter_no']) and is_numeric($_GET['letter_no']) and $_GET['letter_no'] != 0)
 and (isset($_GET['valid']) and is_numeric($_GET['valid']) and $_GET['valid'] == 1)
 ) {
   
    include "letter_archive.php";
//////////////////////////////////////////////////////////////////////////////////////////////////////
 // when SYSTEM  = 4 المصالح الحكومية                             
// Musadqa Archive   أرشفة المصادقات
/////////////////////////////////////////////////////////////////////////////////////////////////////
 } else if ((isset($_GET['sys_id']) and is_numeric($_GET['sys_id']) and $_GET['sys_id'] != 0 and $_GET['sys_id']== 2)
 and (isset($_GET['user_id']) and is_numeric($_GET['user_id']) and $_GET['user_id'] != 0)
 and (isset($_GET['musadqa_id']) and is_numeric($_GET['musadqa_id']) and $_GET['musadqa_id'] != 0)
 and (isset($_GET['valid']) and is_numeric($_GET['valid']) and $_GET['valid'] == 1)
 ) {

include "mosadqa_archive.php";

} else if ( (isset($_GET['treatment_type']) and $_GET['treatment_type'] == -1)
and (isset($_GET['type']) and $_GET['type'] == -1 )
and (isset($_GET['treatment_id']) and is_numeric($_GET['treatment_id']) and $_GET['treatment_id'] != 0)
and (isset($_GET['treatment_year']) and is_numeric($_GET['treatment_year']) and $_GET['treatment_year'] != 0)
and (isset($_GET['department']) and is_numeric($_GET['department']) and $_GET['department'] != 0)
and (isset($_GET['treatment_cat']) and is_numeric($_GET['treatment_cat']) and $_GET['treatment_cat'] != 0)
and (isset($_GET['sys_id']) and is_numeric($_GET['sys_id']) and $_GET['sys_id'] != 0 and $_GET['sys_id'] == 4)
and (isset($_GET['user_id']) and is_numeric($_GET['user_id']) and $_GET['user_id'] != 0)
and (isset($_GET['valid']) and is_numeric($_GET['valid']) and $_GET['valid'] == 1)
) {

include "general_archive.php";

} else {
    echo "
    <div class='container'>
    <br/><br/>
    <h4 class='alert alert-danger'>
    غير مصرح بدخول هذه الصفحة حيث تم ادخال بيانات بصلاحيات خاطئة
    </h4></div>";
}


include "footer.php";
?>


