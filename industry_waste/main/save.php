<?php 
include 'connect.php';

include 'functions.php';

if($_SERVER['REQUEST_METHOD'] == 'POST'){

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

$arr_industry_name = array(
1 => "كيماويات",
2 => "مواد غذائية",
3 => "مواد بترولية"
);

$arr_contract_type = array(
1 => "متعاقد",
2 => "غير متعاقد"
);

$arr_account_type = array(
            1 => 'منزلى',
            2 => 'قائم عمارة',
            8 => 'تجاري',
            10 => 'حكومة',
            22 => 'خدمي',
            23 => 'صناعي',
            24 => 'سياحي',
            25 => 'أخرى',
            40 => 'ممارسة منزلي',
            41 => 'ممارسة 2 غرفة',
            42 => 'ممارسة 3 غرفة',
            43 => 'ممارسة',
            44 => 'ممارسة تجاري',
            46 => 'ممارسة حكومي ',
            50 => 'ممارسة',
            51 => 'ممارسة صرف صحي ',
            52 => 'ممارسة صرف صحي',
            53 => 'ممارسة صرف صحي',
            54 => 'ممارسة صرف صحي',
            55 => 'ممارسة صرف صحي',
            56 => 'ممارسة صرف صحي',
            57 => 'ممارسة صرف صحي',
            58 => 'ممارسة صرف مغسلة',
            59 => 'ممارسة صرف صحي' 
    );
    
$arr_water_source = array(
1 => "نيلي",
2 => "جوفي",
3 => "حكومي",
4 => "أخرى"
);


$arr_waste_type = array(
1 => "صحي",
2 => "صناعي"
);

$arr_license_type = array(
1 => "دائمة",
2 => "مؤقتة"
);



   $formErrors = array();

      
    // Get variables
    
        $building_code      = $_REQUEST['b_code'];
        $building_name      = $_REQUEST['b_name'];
        $building_address   = $_REQUEST['b_address'];
        $building_tele      = $_REQUEST['landline'];
        $building_mobile    = $_REQUEST['mobile'];
        $building_fax       = $_REQUEST['fax'];
        $industry_name      = $_REQUEST['industry_name'];
        $water_source       = $_REQUEST['water_source'];
        $building_activity  = $_REQUEST['activity'];
        $building_area_m2   = $_REQUEST['m2'];
        $building_emp_num   = $_REQUEST['emp_num'];
        $building_vac       = $_REQUEST['vac'];
        $building_work_days = $_REQUEST['work_days'];
        $building_shifts    = $_REQUEST['shifts'];
        $owner_name         = $_REQUEST['owner_name'];
        $owner_mob          = $_REQUEST['owner_mob'];
        $manager_name       = $_REQUEST['manager_name'];
        $manager_mob        = $_REQUEST['manager_mob'];
        $village            = $_REQUEST['village'];
        $city               = $_REQUEST['area'];
        $account_num        = $_REQUEST['account'];
        $branch_num         = $_REQUEST['branch'];
        $account_type       = $_REQUEST['account_type'];
        $materials_used     = $_REQUEST['materials'];
        $waste_type         = $_REQUEST['waste_type'];
        $waste_location     = $_REQUEST['waste_location'];
        $contract_type      = $_REQUEST['contract_type'];
        $contract_open_date = $_REQUEST['contract_open_date'];
        $contract_num       = $_REQUEST['contract_num'];
        $contract_date      = $_REQUEST['contract_date'];
        $contract_end_date  = $_REQUEST['contract_end_date'];
        $license_type       = $_REQUEST['license_type'];
        $notes              = $_REQUEST['notes'];
    
    
      if (empty($building_code)){
                $formErrors[] = "كود المنشأة لا يمكن ان يكون فارغا";
              }
    if (!is_numeric($building_code)){
                $formErrors[] = "كود المنشأة يجب ان يكون أرقاما فقط";
              }
    
    if (empty($building_name)){
                $formErrors[] = "اسم المنشأة لا يمكن ان يكون فارغا";
              }
    if (empty($building_address)){
                $formErrors[] = "عنوان المنشأة لا يمكن ان يكون فارغا";
              }
    if (empty($building_mobile)){
                $formErrors[] = "موبايل المنشأة لا يمكن ان يكون فارغا";
              }
    if (strlen($building_mobile) < 11){
                $formErrors[] = "موبايل المنشأة لا يمكن ان يكون اقل من 11 ارقام";
              }
    if (!is_numeric($building_mobile)){
                $formErrors[] = "موبايل المنشأة يجب ان يكون أرقاما فقط";
              }
    if (empty($building_activity)){
                $formErrors[] = "نشاط المنشأة لا يمكن ان يكون فارغا";
              }
    if ($water_source == 0){
                $formErrors[] = "لم يتم اختيار مصدر المياه ";
              }
        if ($city == 0){
                $formErrors[] = "لم يتم اختيار المنطقة";
              }
     if ($industry_name  == 0){
                $formErrors[] = "لم يتم اختيار مسمى الصناعات";
              }
        if (empty($account_num)){
                $formErrors[] = "رقم الحساب لا يمكن ان يكون فارغا";
              }
        if (!is_numeric($account_num)){
                $formErrors[] = "رقم الحساب يجب ان يكون ارقاما فقط";
              }
         if (empty($branch_num)){
                $formErrors[] = "رقم الفرع لا يمكن ان يكون فارغا";
              }
        if (!is_numeric($branch_num)){
                $formErrors[] = "رقم الفرع يجب ان يكون ارقاما فقط";
              }
        if ($account_type == 0){
                $formErrors[] = "لم يتم اختيار نوع الحساب";
              }
        if ($waste_type == 0){
                $formErrors[] = "لم يتم اختيار نوع الصرف";
              }
        if (empty($waste_location)){
                $formErrors[] = "جهة الصرف لا يمكن ان تكون فارغة";
              }
       
        if ($contract_type == 0){
                $formErrors[] = "لم يتم اختيار نوع التعاقد";
              }

        if ($license_type == 0){
                $formErrors[] = "لم يتم اختيار نوع الرخصة";
              }
  
    
    
    
 if(empty($formErrors)) {  
    

    $check = checkItem1('building_code','building_info',$building_code);
     
    
      if($check > 0){
          
          echo "<div class='alert alert-danger inst' style='margin-top:10px;font-weight:700;font-size:18px'>عفوا !!!  تم تسجيل هذه البيانات من قبل !!!</div>";
      }else{
          
 // Insert to DB
      $stmt = $connect->prepare("
            INSERT INTO building_info (
            building_code,
            building_name,
            building_address,
            building_tele,
            building_mobile,
            building_fax,
            industry_name,
            building_activity,
            water_source,
            building_area_m2,
            building_emp_num,
            building_vac,
            building_work_days,
            building_shifts,
            owner_name,
            owner_tele,
            manager_name,
            manager_tele,
            state_name,
            area,
            account_num,
            branch_num,
            account_type,
            materials_used,
            waste_type,
            waste_location,
            contract_type,
            contract_open_date,
            contract_num,
            contract_date,
            contract_end_date,
            license_type,
            notes) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
            $stmt->execute(array($building_code, 
                                 $building_name,
                                 $building_address,
                                 $building_tele ,
                                 $building_mobile,
                                 $building_fax,
                                 $industry_name,
                                 $building_activity,
                                 $water_source,
                                 $building_area_m2,
                                 $building_emp_num,
                                 $building_vac,
                                 $building_work_days,
                                 $building_shifts,
                                 $owner_name,
                                 $owner_mob,
                                 $manager_name,
                                 $manager_mob,
                                 $village,
                                 $city,
                                 $account_num,
                                 $branch_num,
                                 $account_type,
                                 $materials_used,
                                 $waste_type,
                                 $waste_location,
                                 $contract_type,
                                 $contract_open_date,
                                 $contract_num,
                                 $contract_date,
                                 $contract_end_date,
                                 $license_type,
                                 $notes));
            // Display Success Message
            echo "<div style='margin-top:10px;font-weight:700;font-size:20px' class='alert alert-success'>تم اضافة بيانات المنشأة بنجاح </div>";
      }

}else {
     
  //   foreach ($formErrors as $error) {
     echo "<div class='alert alert-danger' style='margin-top:10px;font-weight:700;font-size:18px'>الرجاء ادخال البيانات المطلوبة بشكل صحيح</div>";
 //    }
}
}
?>



