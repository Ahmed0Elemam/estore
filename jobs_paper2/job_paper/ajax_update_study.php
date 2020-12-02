<?php
include "connect.php";
$id = $_REQUEST['code'];
$study = $_REQUEST['study'];
$arr_study = array(
    1 => "أعمال صحية",
    2 => "ميكانيكا",
    3 => "كهرباء"
  );

if (isset($study)  ) {

    $stmt = $connect->prepare('update job1_2020_technical_stage3_paper_result set study= ?, study_name = ? where id = ?');
    $stmt->execute(array($study, $arr_study[intval($study)], $id));

    echo "<div class='alert alert-success'>تم تحديث التخصص بنجاح</div>";

}






?>