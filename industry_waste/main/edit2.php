<?php 
include 'connect.php';

include 'functions.php';

if($_SERVER['REQUEST_METHOD'] == 'POST'){




   $formErrors = array();

      
    // Get variables
    
        $building_code           =  $_REQUEST['rep_code'];
        $rep_id                  =  $_REQUEST['rep_id'];
        $rep_date                =  $_REQUEST['rep_date'];
        $building_position       =  $_REQUEST['building_position'];
        $rep_reason              =  $_REQUEST['rep_reason'];
        $rep_actions             =  $_REQUEST['rep_actions'];
        $rep_team                =  $_REQUEST['rep_team'];
        $waste_station           =  $_REQUEST['waste_station'];
        $pump_num                =  $_REQUEST['pump_num'];
        $pump_capacity           =  $_REQUEST['pump_capacity'];
        $pump_run                =  $_REQUEST['pump_run'];
        $meter_work              =  $_REQUEST['meter_work'];
        $read_current            =  $_REQUEST['read_current'];
        $read_date               =  $_REQUEST['read_date'];
        $govern_quantity         =  $_REQUEST['govern_quantity'];
        $underground_quantity    =  $_REQUEST['underground_quantity'];
        $nile_quantity           =  $_REQUEST['nile_quantity'];
        $period_from             =  $_REQUEST['period_from'];
        $period_to               =  $_REQUEST['period_to'];
        $processing_units_found  =  $_REQUEST['processing_units_found'];
        $sample_taken            =  $_REQUEST['sample_taken'];
        $sample_code             =  $_REQUEST['sample_code'];
        $lab_name                =  $_REQUEST['lab_name'];
        $sample_delivery_date    =  $_REQUEST['sample_delivery_date'];
        $result_receive_date     =  $_REQUEST['result_receive_date'];
        $sample_recipient        =  $_REQUEST['sample_recipient'];
        $sample_given_man        =  $_REQUEST['sample_given_man'];
        $result_recipient        =  $_REQUEST['result_recipient'];
       
    
    
  
    
 if(empty($formErrors)) {  
    
          
 // Insert to DB
      $stmt2 = $connect->prepare("UPDATE `building_report` SET 
      `rep_date`= ?,
      `building_position`= ?,
      `rep_reason`=?,
      `rep_actions`=?,
      `rep_team`=?,
      `waste_station`= ?,
      `pump_num`=?,
      `pump_capacity`=?,
      `pump_run`=?,
      `meter_work`= ?,
      `read_current`=?,
      `read_date`= ?,
      `govern_quantity`=?,
      `underground_quantity`= ?,
      `nile_quantity`=?,
      `period_from`=?,
      `period_to`=?,
      `processing_units_found`=?,
      `sample_taken`= ?,
      `sample_code`=?,
      `lab_name`=?,
      `sample_delivery_date`= ?,
      `result_receive_date`=?,
      `sample_recipient`=?,
      `sample_given_man`=?,
      `result_recipient`=?
      
      Where building_code = ? and rep_id = ?");
        $stmt2->execute(array($rep_date,
                                 $building_position,
                                 $rep_reason,
                                 $rep_actions,
                                 $rep_team,
                                 $waste_station,
                                 $pump_num,
                                 $pump_capacity,
                                 $pump_run,
                                 $meter_work,
                                 $read_current,
                                 $read_date,
                                 $govern_quantity,
                                 $underground_quantity,
                                 $nile_quantity,
                                 $period_from,
                                 $period_to,
                                 $processing_units_found,
                                 $sample_taken,
                                 $sample_code,
                                 $lab_name,
                                 $sample_delivery_date,
                                 $result_receive_date,
                                 $sample_recipient,
                                 $sample_given_man,
                                 $result_recipient,
                                 $building_code,
                                 $rep_id
                                
                                 ));
            // Display Success Message
            echo "<div style='margin-top:10px;font-weight:700;font-size:20px' class='alert alert-success'>تم تعديل بيانات المعاينة بنجاح </div>";
      

}else {
     
  //   foreach ($formErrors as $error) {
     echo "<div class='alert alert-danger' style='margin-top:10px;font-weight:700;font-size:18px'>الرجاء ادخال البيانات المطلوبة بشكل صحيح</div>";
 //    }
}
}
?>



