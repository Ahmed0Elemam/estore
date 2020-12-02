<?php 
include 'connect.php';

include 'functions.php';

if($_SERVER['REQUEST_METHOD'] == 'POST'){

$arr_rep_reason = array(
1 => "خطة الادارة",
2 => "حساب الأحمال الهيدروليكية",
3 => "تسوية مستحقات الشركة",
4 => "شكوى",
5 => "وصل المباني",
6 => "تعديل مطالبات الأعباء طبقاً لفاتورة المياه",
7 => "تعديل مطالبات الأحمال طبقاً لكمية المياه",
8 => "الاعتراض على نتيجة التحليل"
);


$arr_building_pos = array(
1 => "تعمل",
2 => "متوقفة"
);


$arr_meter = array(
1 => "يعمل",
2 => "لا يعمل"               
);
    
$arr_units = array(
1 => "توجد",
2 => "لا توجد"               
);

$arr_sample = array(
1 => "نعم",
2 => "لا"
);



   $formErrors = array();

    // Get variables
        $rep_code                = $_REQUEST['rep_code'];
        $rep_id                  = $_REQUEST['rep_id'];
        $rep_name                = $_REQUEST['rep_name'];
        $rep_reason              = $_REQUEST['rep_reason'];
        $building_position       = $_REQUEST['building_position'];
        $rep_date                = $_REQUEST['rep_date'];
        $waste_station           = $_REQUEST['waste_station'];
        $rep_team                = $_REQUEST['rep_team'];
        $rep_actions             = filter_var($_REQUEST['rep_actions'], FILTER_SANITIZE_STRING);
        $rep_actions             = nl2br(htmlentities($rep_actions, ENT_QUOTES, 'UTF-8'));
        $pump_num                = $_REQUEST['pump_num'];
        $pump_capacity           = $_REQUEST['pump_capacity'];
        $pump_run                = $_REQUEST['pump_run'];
        $meter_work              = $_REQUEST['meter_work'];
        $read_current            = $_REQUEST['read_current'];
        $read_date               = $_REQUEST['read_date'];
        $govern_quantity         = $_REQUEST['govern_quantity'];
        $underground_quantity    = $_REQUEST['underground_quantity'];
        $nile_quantity           = $_REQUEST['nile_quantity'];
        $processing_units_found  = $_REQUEST['processing_units_found'];
        $period_from             = $_REQUEST['period_from'];
        $period_to               = $_REQUEST['period_to'];
        $sample_taken            = $_REQUEST['sample_taken'];
        $sample_code             = $_REQUEST['sample_code'];
        $lab_name                = $_REQUEST['lab_name'];
        $sample_recipient        = $_REQUEST['sample_recipient'];
        $sample_given_man        = $_REQUEST['sample_given_man'];
        $result_recipient        = $_REQUEST['result_recipient'];
        $sample_delivery_date    = $_REQUEST['sample_delivery_date'];
        $result_receive_date     = $_REQUEST['result_receive_date'];

    
    
      if (empty($rep_code)){
                $formErrors[] = "كود المنشأة لا يمكن ان يكون فارغا";
              }
    if (!is_numeric($rep_code)){
                $formErrors[] = "كود المنشأة يجب ان يكون أرقاما فقط";
              }
    if (empty($rep_name)){
                $formErrors[] = "كود المنشأة المدخل غير موجود بقاعدة البيانات";
              }
    if ($rep_reason== 0){
                $formErrors[] = "لم يتم اختيار سبب المعاينة";
              }
    if ($building_position == 0){
                $formErrors[] = "لم يتم اختيار موقف المنشأة";
              }
    if (empty($rep_date)){
                $formErrors[] = "لم يتم اختيار تاريخ المعاينة";
              }
    
    
    
    
 if(empty($formErrors)) {  
    

   $check = checkItem2('rep_id', 'building_code','building_report', $rep_id, $rep_code);
     
    
      if($check > 0){
          
          echo "<div class='alert alert-danger inst' style='margin-top:10px;font-weight:700;font-size:18px'>عفوا !!!  تم تسجيل هذه البيانات من قبل !!!</div>";
      }else{
          
 // Insert to DB
      $stmt = $connect->prepare("INSERT INTO `building_report`(
      `rep_id`,
      `building_code`,
      `rep_date`,
      `building_position`,
      `rep_reason`,
      `rep_actions`,
      `rep_team`,
      `waste_station`,
      `pump_num`,
      `pump_capacity`,
      `pump_run`,
      `meter_work`,
      `read_current`,
      `read_date`,
      `govern_quantity`,
      `underground_quantity`,
      `nile_quantity`,
      `period_from`,
      `period_to`,
      `processing_units_found`,
      `sample_taken`,
      `sample_code`,
      `lab_name`,
      `sample_delivery_date`,
      `result_receive_date`,
      `sample_recipient`,
      `sample_given_man`,
      `result_recipient`) 
      VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
            $stmt->execute(array(
                $rep_id,
                $rep_code,
                $rep_date,
                $building_position,
                $rep_reason,
                $rep_actions,
                $rep_team,
                $waste_station,
                $pump_num,
                $pump_capacity,
                $pump_run,
                $meter_work ,
                $read_current,
                $read_date ,
                $govern_quantity,
                $underground_quantity,
                $nile_quantity,
                $period_from,
                $period_to ,
                $processing_units_found,
                $sample_taken,
                $sample_code,
                $lab_name,
                $sample_delivery_date,
                $result_receive_date,
                $sample_recipient,
                $sample_given_man,
                $result_recipient
                ));
            // Display Success Message
            echo "<div style='margin-top:10px;font-weight:700;font-size:20px' class='alert alert-success'>تم اضافة بيانات المعاينة بنجاح </div>";
     }

}else {
     
    foreach ($formErrors as $error) {
   //  echo "<div class='alert alert-danger' style='margin-top:10px;font-weight:700;font-size:18px'>الرجاء ادخال البيانات المطلوبة بشكل صحيح</div>";
         echo "<div class='alert alert-danger' style='margin-top:10px;font-weight:700;'>
            ".$error."
         </div>";
        
     }
}
}
?>



