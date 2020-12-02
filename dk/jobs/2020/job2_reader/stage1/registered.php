<?php 
include 'connect.php';
include "functions.php";
function notNull($row) {
    if($row == null) {
        echo "لا يوجد";
    }
}
if($_SERVER['REQUEST_METHOD'] == 'POST'){
  // Get variables
    $name           = $_POST['name'];
    $n_id           = $_POST['n_id'];
    $birthdate      = $_POST['date'];
    $military       = $_POST['military'];
    $marital        = $_POST['marital'];
    $city           = $_POST['city'];
    $village        = $_POST['village'];
    $street         = $_POST['street'];
    $email          = $_POST['email'];
    $mobile         = $_POST['mobile'];
    $landline       = $_POST['landline'];
    $study          = $_POST['study'];
    $grade_year     = $_POST['grade_year'];
    $study_name     = $_POST['study_name'];
    
    
  
$arr_military = array(
1 => "مؤجل",
2 => "معافى مؤقت",
3 => "معافى نهائي",
4 => "أدى الخدمة العسكرية"
);
$arr_marital = array(
1 => "أعزب",
2 => "متزوج",
3 => "مطلق",
4 => "أرمل"
);
$arr_gender = array(
1 => "ذكر"
);
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

$arr_study = array(
1 => "مؤهل متوسط",
2 => "مؤهل فوق متوسط",
);

     $formErrors = array();
              if (empty($name)){
                $formErrors[] = "الاسم لا يمكن ان يكون فارغا";
              }
             if (is_numeric($name)){
                $formErrors[] = "الاسم لا يمكن ان يكون أرقام";
              }
              if (strlen($name) < 15){
                $formErrors[] = "الاسم لا يمكن ان يكون اقل من 15 حرف";
              }
                if (strlen($n_id) < 14){
                $formErrors[] = "الرقم القومي لا يمكن ان يكون اقل من 14 رقم";
              }
         
            if(!is_numeric($n_id)) {
                $formErrors[] = "الرقم القومي لا يمكن ان يكون حروفا";
            }
          
            if (substr($birthdate, 0, 4) < 1991 ) {
                $formErrors[] = "تاريخ الميلاد لابد ألا يقل عن 1-1-1991";
              }
            
              if(substr($n_id, 0, 1) == 2 && substr($n_id, 1, 2) < 91  ) {
                $formErrors[] = "تاريخ الميلاد في الرقم القومي لابد ألا يقل عن 1-1-1991";
              }

              if ((substr($birthdate, 2, 2)) != (substr($n_id, 1, 2))) {
                $formErrors[] = "سنة الميلاد غير متطابقة بين الرقم القومي وتاريخ الميلاد";
              }
              if ((substr($birthdate, 5, 2)) != (substr($n_id, 3, 2))) {
                $formErrors[] = "شهر الميلاد غير متطابق بين الرقم القومي وتاريخ الميلاد";
              }
              if ((substr($birthdate, 8, 2)) != (substr($n_id, 5, 2))) {
                $formErrors[] = "يوم الميلاد غير متطابق بين الرقم القومي وتاريخ الميلاد";
              }
            
              if (empty($birthdate)){
                $formErrors[] = "تاريخ الميلاد لا يمكن ان يكون فارغا";
              }

            if ($military == 0){
                $formErrors[] = "لم يتم اختيار الموقف من التجنيد";
              }
        
            if ($marital == 0){
                $formErrors[] = "لم يتم اختيار الحالة الاجتماعية";
              }
            if (empty($village)) {
                $formErrors[] = "الحي/القرية لا يمكن ان تكون فارغة";
              }
          if (empty($mobile)){
                $formErrors[] = "رقم الموبايل لا يمكن ان يكون فارغا";
              }
          if ($mobile == 0){
                $formErrors[] = "رقم الموبايل لا يمكن ان يكون أصفارا";
              }
          if(!is_numeric($mobile)) {
                $formErrors[] = "رقم الموبايل لا يمكن ان يكون حروف";
            }
          if (strlen($mobile) < 11){
                $formErrors[] = "رقم الموبايل لا يمكن ان يكون اقل من 11 رقم";
              }
          if ($study == 0) {
                $formErrors[] = "لم يتم اختيار المؤهل الحاصل عليه المتقدم";
              }
          
          if(!is_numeric($grade_year)){
                $formErrors[] = "سنة التخرج لا يمكن ان تكون حروفا";
            }
          if($grade_year == 0){
                $formErrors[] = "سنة التخرج لا يمكن ان تكون أصفارا";
            }
          if(empty($grade_year)){
                $formErrors[] = "سنة التخرج لا يمكن ان تكون فارغة";
            }
          if (strlen($grade_year) < 4){
                $formErrors[] = "سنة الحصول على المؤهل لا يمكن ان يكون اقل من 4 أرقام";
              }
     if (empty($study_name)) {
                $formErrors[] = "اسم المؤهل لا يمكن ان يكون فارغاً";
              }
    

?>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="author" content="Eng. Ahmed Elemam" />
    <meta name="keywords" content="مياه الشرب , الصرف الصحى , الدقهلية , القابضة , شركة مياه الشرب والصرف الصحى , water , sewer" />
    <meta name="description" content="الموقع الرسمي لشركة مياه الشرب والصرف الصحي بالدقهلية" />
    <meta name="author" content="Eng. Ahmed Elemam">
    <meta name="theme-color" content="#0D95D6">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all" />
    <META HTTP-EQUIV="Pragma" CONTENT="no-cache" />
    <meta property="og:image" content="http://www.dkwasc.com.eg/jobs/images/logo.png" />
    <meta property="og:type"   content="website" /> 
    <meta property="og:url"    content="dkwasc.com.eg" /> 
    <meta property="og:title"  content="اعلان رقم 2  لسنة 2020 | وظيفة محصل بنظام العمولة" /> 
    <meta property="og:description"  content="الموقع الرسمي لشركة مياه الشرب والصرف الصحي بالدقهلية" /> 
    <meta property="fb:app_id"  content="673798652822430" /> 
    <title>اعلان رقم 2 لسنة 2020 | وظيفة محصل بنظام العمولة</title>
    <link rel="SHORTCUT ICON" href="img/icon.gif" type="image/x-icon" />
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-rtl.min.css">
    <link rel="stylesheet" href="css/font-awesome.css">
    <link href="https://fonts.googleapis.com/css?family=Tajawal:500,700,800&display=swap&subset=arabic" rel="stylesheet">

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/style.css?<?php echo md5_file('css/style.css'); ?>">
    <script src="js/js.js?<?php echo md5_file('js/js.js'); ?>"></script>
</head>

<body>
    <div class="container text-center">
        <img src="img/logo.png" width="100" />
        <h4>شركة مياه الشرب والصرف الصحي بالدقهلية</h4>
        <h4>اعلان رقم ( 2 ) لسنة 2020
        </h4>
        <h4>وظيفة محصل بنظام العمولة</h4>
        <hr/>
        <?php
     // loop throw errors array and display them
              foreach ($formErrors as $error) {
                echo "<div class='alert alert-danger inst'>".$error."</div>";

              }
    if (empty($formErrors)) {
    $check = checkItem('national_id','job2_2020_reader',$n_id);
     
    
      if($check > 0){
                            $msg = "<div class='alert alert-danger inst'>عفوا !!!  تم تسجيل هذه البيانات من قبل !!!</div>";
                            echo $msg;
          $stmt = $connect->prepare("select * from job2_2020_reader where national_id = $n_id");
          $stmt->execute();
          $rows = $stmt->fetchAll();
          foreach($rows as $row){
          ?>

<div class='alert alert-warning' style="font-size:12px;"> تاريخ التسجيل: <?php echo $row['registered_date']; ?> / وقت التسجيل: <?php echo $row['time'];  ?></div>
            <table id="registered" class="table table-bordered">
                <tr class="info">
                    <th>البيان</th>
                    <th>ما تم ادخاله</th>
                </tr>
                <tr>
                    <td>الكود</td>
                    <td><strong><h2><?php echo $row['id']; ?></h2></strong><strong>الرجاء الاحتفاظ بهذا الكود</strong></td>
                </tr>
                <tr>
                    <td>الاسم</td>
                    <td>
                        <?php echo $row['name']; ?>
                    </td>
                </tr>
                <tr>
                    <td>الرقم القومي</td>
                    <td>
                        <?php echo $row['national_id']; ?>
                    </td>
                </tr>
                <tr>
                    <td>تاريخ الميلاد</td>
                    <td>
                        <?php echo $row['birthdate']; ?>
                    </td>
                </tr>
                <tr>
                    <td>النوع</td>
                    <td>
                        <?php echo $arr_gender[intval($row['gender'])]; ?>
                    </td>
                </tr>
                <tr>
                    <td>الموقف من التجنيد</td>
                    <td>
                        <?php echo $arr_military[intval($row['military'])]; ?>
                    </td>
                </tr>
                <tr>
                    <td>الحالة الاجتماعية</td>
                    <td>
                        <?php echo $arr_marital[intval($row['marital'])]; ?>
                    </td>
                </tr>
                <tr>
                    <td>المدينة/المركز</td>
                    <td>
                        <?php echo $arr_city[intval($row['city'])]; ?>
                    </td>
                </tr>
                <tr>
                    <td>الحي/القرية</td>
                    <td>
                        <?php echo $row['village']; ?>
                    </td>
                </tr>
                <tr>
                    <td>الشارع</td>
                    <td>
                        <?php if($row['street'] == null){
                                notNull($row['street']);
                            } else {
                                echo $row['street'];
                            }
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>البريد الالكتروني</td>
                    <td>
                        <?php if($row['email'] == null){
                                notNull($row['email']);
                            } else {
                                echo $row['email'];
                            }
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>رقم الموبايل</td>
                    <td>
                        <?php echo $row['mobile']; ?>
                    </td>
                </tr>
                <tr>
                    <td>التليفون الأرضي</td>
                    <td>
                        <?php if($row['landline'] == null){
                                notNull($row['landline']);
                            } else {
                                echo $row['landline'];
                            }
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>المؤهل الحاصل عليه المتقدم</td>
                    <td>
                        <?php echo $arr_study[intval($row['study'])]; ?>
                    </td>
                </tr>
                <tr>
                    <td>سنة الحصول على المؤهل</td>
                    <td>
                        <?php echo $row['grade_year']; ?>
                    </td>
                </tr>
                
                <tr>
                    <td>اسم المؤهل</td>
                    <td>
                        <?php echo $row['study_name']; ?>
                    </td>
                </tr>

            </table>

            <?php
          };
      }else {
                            // Insert to DB
                            $stmt = $connect->prepare("
                            INSERT INTO 
                            job2_2020_reader(name, national_id, birthdate, military, marital, city, village, street, email, mobile, landline, study, grade_year, study_name, registered_date, time) 
                            VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, now(), now())
                            ");
                            $stmt->execute(array($name, $n_id, $birthdate, $military, $marital, $city, $village, $street, $email, $mobile, $landline, $study, $grade_year, $study_name));
                            // Display Success Message
                            $msg = "<div class='alert alert-success'>تم التسجيل بنجاح </div>";
                            echo $msg;
          $stmt = $connect->prepare("select * from job2_2020_reader where national_id = $n_id");
          $stmt->execute();
          $rows = $stmt->fetchAll();
          foreach($rows as $row){
          ?>

<div class='alert alert-warning' style="font-size:12px;"> تاريخ التسجيل: <?php echo $row['registered_date']; ?> / وقت التسجيل: <?php echo $row['time'];  ?></div>
                <table id="registered" class="table table-bordered">
                    <tr class="info">
                        <th>البيان</th>
                        <th>ما تم ادخاله</th>
                    </tr>
                    <tr>
                        <td>الكود</td>
                        <td><strong><h2><?php echo $row['id']; ?></h2></strong><strong>الرجاء الاحتفاظ بهذا الكود</strong></td>
                    </tr>
                    <tr>
                        <td>الاسم</td>
                        <td>
                            <?php echo $row['name']; ?>
                        </td>
                    </tr>
                    <tr>
                        <td>الرقم القومي</td>
                        <td>
                            <?php echo $row['national_id']; ?>
                        </td>
                    </tr>
                    <tr>
                        <td>تاريخ الميلاد</td>
                        <td>
                            <?php echo $row['birthdate']; ?>
                        </td>
                    </tr>
                    <tr>
                        <td>النوع</td>
                        <td>
                            <?php echo $arr_gender[intval($row['gender'])]; ?>
                        </td>
                    </tr>
                    <tr>
                        <td>الموقف من التجنيد</td>
                        <td>
                            <?php echo $arr_military[intval($row['military'])]; ?>
                        </td>
                    </tr>
                    <tr>
                        <td>الحالة الاجتماعية</td>
                        <td>
                            <?php echo $arr_marital[intval($row['marital'])]; ?>
                        </td>
                    </tr>
                    <tr>
                        <td>المدينة/المركز</td>
                        <td>
                            <?php echo $arr_city[intval($row['city'])]; ?>
                        </td>
                    </tr>
                    <tr>
                        <td>الحي/القرية</td>
                        <td>
                            <?php echo $row['village']; ?>
                        </td>
                    </tr>
                    <tr>
                        <td>الشارع</td>
                        <td>
                            <?php if($row['street'] == null){
                                notNull($row['street']);
                            } else {
                                echo $row['street'];
                            }
                        ?>
                        </td>
                    </tr>
                    <tr>
                        <td>البريد الالكتروني</td>
                        <td>
                            <?php if($row['email'] == null){
                                notNull($row['email']);
                            } else {
                                echo $row['email'];
                            }
                        ?>
                        </td>
                    </tr>
                    <tr>
                        <td>رقم الموبايل</td>
                        <td>
                            <?php echo $row['mobile']; ?>
                        </td>
                    </tr>
                    <tr>
                        <td>التليفون الأرضي</td>
                        <td>
                            <?php if($row['landline'] == null){
                                notNull($row['landline']);
                            } else {
                                echo $row['landline'];
                            }
                        ?>
                        </td>
                    </tr>
                    <tr>
                        <td>المؤهل الحاصل عليه المتقدم</td>
                        <td>
                            <?php echo $arr_study[intval($row['study'])]; ?>
                        </td>
                    </tr>
                     <tr>
                    <td>سنة الحصول على المؤهل</td>
                    <td>
                        <?php echo $row['grade_year']; ?>
                    </td>
                </tr>
                
                <tr>
                    <td>اسم المؤهل</td>
                    <td>
                        <?php echo $row['study_name']; ?>
                    </td>
                </tr>

                </table>

                <?php     
          }
}
} }
?>

                <div id="footer" class="text-center">
                    <a href="javascript:print();" class="btn btn-success"><i class="fa fa-print" aria-hidden="true"></i> طباعة  </a>
                    <a class="btn btn-success" href='http://www.dkwasc.com.eg'><i class="fa fa-home" aria-hidden="true"></i>  الرئيسية  </a>
                    <a class="btn btn-success" href='index.php'>صفحة الشروط </a>
                    

                </div>

                <p>جميع الحقوق محفوظة © شركة مياه الشرب والصرف الصحي بالدقهلية 2020</p>
    </div>
</body>

</html>
