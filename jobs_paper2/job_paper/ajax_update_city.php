<?php
include "connect.php";
$id = $_REQUEST['code'];
$city = $_REQUEST['city'];
$arr_city = array(
    1 => "أجا",
    2 => "الجمالية",
    3 => "السنبلاوين",
    4 => "الكردي",
    5 => "المطرية",
    6 => "المنزلة",
    7 => "المنصورة",
    8 => "بلقاس",
    9 => "بني عبيد",
    10 => "تمي الأمديد",
    11 => "جمصة",
    12 => "دكرنس",
    13 => "شربين",
    14 => "طلخا",
    15 => "محلة الدمنة",
    16 => "منية النصر",
    17 => "ميت سلسيل",
    18 => "ميت غمر",
    19 => "نبروه"
    );

if (isset($city)  ) {

    $stmt = $connect->prepare('update job1_2020_technical_stage3_paper_result set city = ?, city_name = ?  where id = ?');
    $stmt->execute(array($city, $arr_city[intval($city)], $id));

    echo "<div class='alert alert-success'>تم تغيير المركز بنجاح</div>";

}






?>