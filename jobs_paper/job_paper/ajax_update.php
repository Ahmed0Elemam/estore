<?php
include "connect.php";
$id = $_REQUEST['code'];
$paper_result = $_REQUEST['p_result'];
$reason1 = $_REQUEST['r1'];
$reason2 = $_REQUEST['r2'];
$reason3 = $_REQUEST['r3'];
$notes = $_REQUEST['n'];



if (isset($paper_result) && $paper_result == 2 && empty($reason1) ){

    echo "<div class='alert alert-danger'>تم اختيار عدم الاستيفاء ولكن بدون السبب الأول على الأقل </div>";

/*} elseif (isset($paper_result) && $paper_result == 2 && !empty($reason1)  ){


    echo "<div class='alert alert-danger'>تم اختيار عدم الاستيفاء و السبب الأول بدون ملاحظات السبب</div>";
*/
} elseif($paper_result == 4){
    $stmt = $connect->prepare('update job1_2020_technical_stage3_paper_result set paper_result = null, reason1 = null, reason2 = null, reason3 = null, notes = null, paper_entry_date = null  where id = ?');
    $stmt->execute(array($id));

    echo "<div class='alert alert-info'>تم تفريغ نتيجة الاستيفاء بنجاح</div>
    
 <script language='javascript' src='js/script2.js?<?php echo md5_file('js/script2.js')?>' type='text/javascript'></script>";

} elseif (isset($paper_result) && $paper_result == 1) {

    $stmt = $connect->prepare('update job1_2020_technical_stage3_paper_result set paper_result = ?, reason1 = NULL, reason2 = NULL, reason3 = NULL, notes = ?, paper_entry_date = now()  where id = ?');
    $stmt->execute(array($paper_result, $notes,  $id));

    echo "<div class='alert alert-success'>تم اضافة نتيجة الاستيفاء بنجاح</div>
 <script language='javascript' src='js/script2.js?<?php echo md5_file('js/script2.js')?>' type='text/javascript'></script>";

}
elseif (isset($paper_result) && $paper_result == 3) {

    $stmt = $connect->prepare('update job1_2020_technical_stage3_paper_result set paper_result = ?, reason1 = NULL, reason2 = NULL, reason3 = NULL, notes = NULL, paper_entry_date = now()  where id = ?');
    $stmt->execute(array($paper_result,  $id));

    echo "<div class='alert alert-success'>تم اضافة نتيجة الاستيفاء بنجاح</div>

 <script language='javascript' src='js/script2.js?<?php echo md5_file('js/script2.js')?>' type='text/javascript'></script>";

}
 elseif (  $paper_result == 2 && !empty($reason1)  ) {

    $stmt = $connect->prepare('update job1_2020_technical_stage3_paper_result set paper_result = ?, reason1 = ?, reason2 = ?, reason3 = ?, notes = ?, paper_entry_date = now()  where id = ?');
    $stmt->execute(array($paper_result, $reason1, $reason2, $reason3, $notes, $id));

    echo "<div class='alert alert-success'>تم اضافة نتيجة الاستيفاء بنجاح</div>
 <script language='javascript' src='js/script2.js?<?php echo md5_file('js/script2.js')?>' type='text/javascript'></script>";



} 






?>