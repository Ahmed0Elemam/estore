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
    $birthdate      = $_POST['date2']; 
    $gender         = $_POST['gender'];
    $military       = $_POST['military'];
    $marital        = $_POST['marital'];
    $city           = $_POST['city'];
    $village        = $_POST['village'];
    $street         = $_POST['street'];
    $email          = $_POST['email'];
    $mobile         = $_POST['mobile'];
    $landline       = $_POST['landline'];
    $university     = $_POST['university'];
    $college        = $_POST['college'];
    $study        = $_POST['study'];
    $grade          = $_POST['grade'];
    $grade_year     = $_POST['grade_year'];
    $grade_percent      = $_POST['grade_percent'];
    $other_cert_title   = $_POST['other_cert_title'];
    $other_cert         = $_POST['other_cert'];
    $nekaba_id          = $_POST['nekaba_id'];
    $nekaba_year        = $_POST['nekaba_year'];
    $langs              = $_POST['langs'];
    $lang               = $_POST['lang'];
    $computer           = $_POST['computer'];
    $courses            = filter_var($_POST['courses'], FILTER_SANITIZE_STRING);
    $courses            = nl2br(htmlentities($courses, ENT_QUOTES, 'UTF-8'));
    $experience         = filter_var($_POST['exp'], FILTER_SANITIZE_STRING);
    $experience         = nl2br(htmlentities($experience, ENT_QUOTES, 'UTF-8'));
    
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
$arr_marital2 = array(
1 => "أنسة",
2 => "متزوجة",
3 => "مطلقة",
4 => "أرملة"
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
$arr_gender = array(
1 => "ذكر",
2 => "أنثى"
);
$arr_grade = array(
1 => "مقبول",
2 => "جيد",
3 => "جيد جدا",
4 => "امتياز"
);

$arr_degree = array(
1 => "مقبول",
2 => "جيد",
3 => "جيد جدا",
4 => "ممتاز"
);
$arr_langs = array(
1 => "الانجليزية",
2 => "الفرنسية",
3 => "الألمانية",
);

$arr_other_cert = array (
1 => "دبلومة (سنتان)",
2 => "ماجستير",
3 => "دكتوراه"
);

$arr_study = array (
    1 => "ادارة أعمال",
    2 => "محاسبة",
    3 => "اقتصاد",
    4 => "احصاء و تأمين",

);
         $formErrors = array();
                if (empty($name)){
                $formErrors[] = "الاسم لا يمكن ان يكون فارغا";
              }
        if (is_numeric($name)){
                $formErrors[] = "الاسم لا يمكن ان يكون أرقام";
              }
              if (strlen($name) < 15){
                $formErrors[] = "الاسم رباعي لا يمكن ان يكون اقل من 15 حرف";
              }
                if (strlen($n_id) < 14){
                $formErrors[] = "الرقم القومي لا يمكن ان يكون اقل من 14 رقم";
              }

            if(!is_numeric($n_id)) {
                $formErrors[] = "الرقم القومي لا يمكن ان يكون حروف";
            }

              if (substr($birthdate, 0, 4) < 1990) {
                $formErrors[] = "سنة الميلاد لابد ألا تقل عن سنة 1990";
              }

             if((substr($birthdate, 2, 2)) != (substr($n_id,1,2))){
                $formErrors[] = "سنة الميلاد غير متطابقة بين الرقم القومي وتاريخ الميلاد";
              }
            if((substr($birthdate, 5, 2)) != (substr($n_id,3,2))){
                $formErrors[] = "شهر الميلاد غير متطابق بين الرقم القومي وتاريخ الميلاد";
              }
            if((substr($birthdate, 8, 2)) != (substr($n_id,5,2))){
                $formErrors[] = "يوم الميلاد غير متطابق بين الرقم القومي وتاريخ الميلاد";
              }
            
              if (empty($birthdate)){
                $formErrors[] = "تاريخ الميلاد لا يمكن ان يكون فارغا";
              }
            if ($gender == 0){
                $formErrors[] = "لم يتم اختيار النوع";
              }
              if ($city == 0){
                $formErrors[] = "لم يتم اختيار المركز/المدينة";
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
                $formErrors[] = "رقم الموبايل لا يمكن ان يكون حروفا";
            }
              if (strlen($mobile) < 11){
                $formErrors[] = "رقم الموبايل لا يمكن ان يكون اقل من 11 رقم";
              }
        if(empty($university)){
                $formErrors[] = "اسم الجامعة لا يمكن ان تكون فارغاً";
            }
    if(empty($college)){
                $formErrors[] = "اسم الكلية لا يمكن ان تكون فارغاً";
            }

            if ($study == 0) {
                $formErrors[] = "لم يتم اختيار التخصص";
              }
              if ($grade == 0) {
                $formErrors[] = "لم يتم اختيار التقدير";
              }
            if(empty($grade_year)){
                $formErrors[] = "سنة التخرج لا يمكن ان تكون فارغة";
            }
     if($grade_year == 0){
                $formErrors[] = "سنة التخرج لا يمكن ان تكون أصفاراً";
            }
     if(!is_numeric($grade_year)){
                $formErrors[] = "سنة التخرج لا يمكن ان تكون حروفاً";
            }
    if(strlen($grade_year) < 4){
                $formErrors[] = "سنة التخرج لا يمكن ان تكون اقل من 4 أرقام";
            }

        if(!is_numeric($grade_percent)){
                $formErrors[] = "النسبة المئوية للتقدير لا يمكن ان تكون حروفا";
            }
        if(empty($grade_percent)){
                $formErrors[] = "النسبة المئوية للتقدير لا يمكن ان تكون فارغة";
            }
        if(strlen($grade_percent) < 2){
                $formErrors[] = "النسبة المئوية للتقدير لا يمكن ان تكون أقل من رقمين";
            }
     if(!is_numeric($nekaba_id)){
                $formErrors[] = "رقم عضوية النقابة لا يمكن ان يكون حروفا";
            }
  if($nekaba_id == 0){
                $formErrors[] = "رقم عضوية النقابة لا يمكن ان يكون أصفارا";
            }
  if(empty($nekaba_id)){
                $formErrors[] = "رقم عضوية النقابة لا يمكن ان يكون فارغا";
            }
        
  if(empty($nekaba_year)){
                $formErrors[] = "سنة الحصول على عضوية النقابة لا يمكن ان تكون فارغة";
            }
     if($nekaba_year == 0){
                $formErrors[] = "سنة الحصول على عضوية النقابة لا يمكن ان تكون أصفاراً";
            }
     if(!is_numeric($nekaba_year)){
                $formErrors[] = "سنة الحصول على عضوية النقابة لا يمكن ان تكون حروفاً";
            }
    if(strlen($nekaba_year) < 4){
                $formErrors[] = "سنة الحصول على عضوية النقابة لا يمكن ان تكون اقل من 4 أرقام";
            }

     if ($computer == 0) {
                $formErrors[] = "لم يتم اختيار درجة اجادة الحاسب الآلي";
              }
    
    
?>
<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="author" content="Eng. Ahmed Elemam" />
    <meta name="keywords" content="مياه الشرب , الصرف الصحى , الدقهلية , القابضة , شركة مياه الشرب والصرف الصحى , water , sewer" />
    <meta name="description" content="الموقع الرسمي لشركة مياه الشرب والصرف الصحي بالدقهلية" />
    <meta name="author" content="Eng. Ahmed Elemam">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all" />
    <META HTTP-EQUIV="Pragma" CONTENT="no-cache" />
    <meta property="og:image" content="http://www.dkwasc.com.eg/jobs/images/logo.png" />
    <meta property="og:type"   content="website" /> 
    <meta property="og:url"    content="http://www.dkwasc.com.eg/jobs/job8_2019_3omla/stage1/" /> 
    <meta property="og:title"  content="اعلان رقم 8 لسنة 2019 | وظيفة أخصائي خدمة عملاء ثالث" /> 
    <meta property="og:description"  content="الموقع الرسمي لشركة مياه الشرب والصرف الصحي بالدقهلية" /> 
    <meta property="fb:app_id"  content="673798652822430" /> 
    <title> اعلان رقم 8 لسنة 2019 | وظيفة أخصائي خدمة عملاء ثالث</title>
    <link rel="SHORTCUT ICON" href="img/icon.gif" type="image/x-icon" />
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-rtl.min.css">
    <link rel="stylesheet" href="css/datepicker.css">
    <link rel="stylesheet" href="css/font-awesome.css">
    <link href="https://fonts.googleapis.com/css?family=Tajawal:400,500,700&display=swap&subset=arabic" rel="stylesheet">

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/style.css?<?php echo md5_file('css/style.css'); ?>">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="js/ar.js"></script>
    <script src="js/js.js?<?php echo md5_file('js/js.js'); ?>"></script>
</head>


<body>
    <div class="container text-center">
        <img src="img/logo.png" width="100" />
        <h4>شركة مياه الشرب والصرف الصحي بالدقهلية</h4>
        <h3>اعلان رقم (8) لسنة 2019</h3>
        <div class="alert alert-info"><strong>
        وظيفة أخصائي خدمة عملاء ثالث
      </strong></div>
        <hr/>
        <?php
    // loop throw errors array and display them
              foreach ($formErrors as $error) {
                echo "<div class='alert alert-danger'>".$error."</div>";

              }
    if (empty($formErrors)) {
    $check = checkItem("national_id", "ad8_2019_3omla", $n_id);
     
    
      if($check > 0){
        $msg = "<div class='alert alert-danger inst'>عفوا !!!  تم تسجيل هذه البيانات من قبل !!!</div>";
          echo $msg;
          $stmt = $connect->prepare("select * from ad8_2019_3omla where national_id = $n_id");
          $stmt->execute();
          $rows = $stmt->fetchAll();
          foreach($rows as $row){
          ?>

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
                <?php if($row['gender'] == 2){ ?>
                <tr>
                    <td>الحالة الاجتماعية</td>
                    <td>
                        <?php echo $arr_marital2[intval($row['marital'])]; ?>
                    </td>
                </tr>
                <?php }else{ ?>
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
                <?php } ?>
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
                    <td>اسم الجامعة</td>
                    <td>
                        <?php echo $row['university']; ?>
                    </td>
                </tr>
                 <tr>
                    <td>اسم الكلية</td>
                    <td>
                        <?php echo $row['college']; ?>
                    </td>
                </tr>
                <tr>
                    <td>التخصص</td>
                    <td>
                        <?php echo $arr_study[intval($row['study'])]; ?>
                    </td>
                </tr>
                <td>سنة التخرج</td>
                    <td>
                        <?php echo $row['grade_year']; ?>
                    </td>
                </tr>
                <tr>
                    <td>التقدير</td>
                    <td>
                        <?php echo $arr_grade[intval($row['grade'])]; ?>
                    </td>
                </tr>
                <tr>
                    <td>النسبة المئوية للتقدير</td>
                    <td>
                        <?php echo $row['grade_percent']; ?>
                    </td>
                </tr>
                <tr>
                
                <tr>
                    <td>شهادات أخرى</td>
                    <td>
                        <?php if($row['other_cert'] == 0){
                            echo "لا يوجد";
                        }else {
                            echo $arr_other_cert[intval($row['other_cert'])];
                        }
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>عنوان مادة الشهادة</td>
                    <td>
                        <?php if($row['other_cert_title'] == null){
                                notNull($row['other_cert_title']);
                            } else {
                                echo $row['other_cert_title'];
                            }
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>رقم عضوية نقابة التجاريين</td>
                    <td>
                        <?php echo $row['nekaba_id']; ?>
                    </td>
                </tr>
                <tr>
                    <td>سنة الحصول على العضوية</td>
                    <td>
                        <?php echo $row['nekaba_year']; ?>
                    </td>
                </tr>
                <tr>
                    <td>اللغات</td>
                    <td>
                        <?php
                            if($row['langs'] == 0) {
                                echo "لا يوجد";
                            }else {
                                echo $arr_langs[intval($row['langs'])];
                            }
                         ?>

                    </td>
                </tr>
                <tr>
                    <td>درجة اجادة اللغات</td>
                    <td>
                        <?php
                            if($row['lang'] == 0) {
                                echo "لا يوجد";
                            }else {
                                echo $arr_degree[intval($row['lang'])];
                            }
                         ?>

                    </td>
                </tr>
                <tr>
                    <td>درجة اجادة الحاسب الآلي</td>
                    <td>
                        <?php echo $arr_degree[intval($row['computer'])]; ?>
                    </td>
                </tr>
                <tr>
                    <td>الدورات الحاصل عليها</td>
                    <td>
                        <?php if($row['courses'] == null){
                                notNull($row['courses']);
                            } else {
                                echo $row['courses'];
                            }
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>الخبرات السابقة</td>
                    <td>
                        <?php if($row['exp'] == null){
                                notNull($row['exp']);
                            } else {
                                echo $row['exp'];
                            }
                        ?>
                    </td>
                </tr>
            </table>
            <?php
          };
      }else {
                            // Insert to DB
                            $stmt = $connect->prepare("
                            INSERT INTO ad8_2019_3omla(name, national_id, birthdate, gender, military, marital, city, village, street, email, mobile, landline, university, college, study, grade, grade_year, grade_percent, other_cert, other_cert_title, nekaba_id, nekaba_year, langs, lang, computer, courses, exp, registered_date, time) 
                            VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ? ,?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, now(), now())
                            ");
                            $stmt->execute(array($name, $n_id, $birthdate, $gender, $military, $marital, $city, $village, $street, $email, $mobile, $landline, $university, $college, $study , $grade, $grade_year, $grade_percent, $other_cert, $other_cert_title, $nekaba_id, $nekaba_year, $langs, $lang, $computer, $courses, $experience));
                            // Display Success Message
                            $msg = "<div class='alert alert-success'>تم التسجيل بنجاح </div>";
                            echo $msg;
          $stmt = $connect->prepare("select * from ad8_2019_3omla where national_id = $n_id");
          $stmt->execute();
          $rows = $stmt->fetchAll();
          foreach($rows as $row){
          ?>

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
                    <?php if($row['gender'] == 2){ ?>
                    <tr>
                        <td>الحالة الاجتماعية</td>
                        <td>
                            <?php echo $arr_marital2[intval($row['marital'])]; ?>
                        </td>
                    </tr>
                    <?php }else{ ?>
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
                    <?php } ?>
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
                    <td>اسم الجامعة</td>
                    <td>
                        <?php echo $row['university']; ?>
                    </td>
                </tr>
                 <tr>
                    <td>اسم الكلية</td>
                    <td>
                        <?php echo $row['college']; ?>
                    </td>
                </tr>
                    <tr>
                    <tr>
                    <td>التخصص</td>
                    <td>
                        <?php echo $arr_study[intval($row['study'])]; ?>
                    </td>
                </tr>
                <td>سنة التخرج</td>
                    <td>
                        <?php echo $row['grade_year']; ?>
                    </td>
                </tr>
                <tr>
                        <td>التقدير</td>
                        <td>
                            <?php echo $arr_grade[intval($row['grade'])]; ?>
                        </td>
                    </tr>
                    <tr>
                        <td>النسبة المئوية للتقدير</td>
                        <td>
                            <?php echo $row['grade_percent']; ?>
                        </td>
                    </tr>

                        <td>شهادات أخرى</td>
                        <td>
                            <?php if($row['other_cert'] == 0){
                            echo "لا يوجد";
                        }else {
                            echo $arr_other_cert[intval($row['other_cert'])];
                        }
                        ?>
                        </td>
                    </tr>
                    <tr>
                        <td>عنوان مادة الشهادة</td>
                        <td>
                            <?php if($row['other_cert_title'] == null){
                                notNull($row['other_cert_title']);
                            } else {
                                echo $row['other_cert_title'];
                            }
                        ?>
                        </td>
                    </tr>
                    <tr>
                        <td>رقم عضوية نقابة التجاريين</td>
                        <td>
                            <?php echo $row['nekaba_id']; ?>
                        </td>
                    </tr>
                    <tr>
                        <td>سنة الحصول على العضوية</td>
                        <td>
                            <?php echo $row['nekaba_year']; ?>
                        </td>
                    </tr>
                    <tr>
                        <td>اللغات</td>
                        <td>
                            <?php
                            if($row['langs'] == 0) {
                                echo "لا يوجد";
                            }else {
                                echo $arr_langs[intval($row['langs'])];
                            }
                         ?>

                        </td>
                    </tr>
                    <tr>
                        <td>درجة اجادة اللغات</td>
                        <td>
                            <?php
                            if($row['lang'] == 0) {
                                echo "لا يوجد";
                            }else {
                                echo $arr_degree[intval($row['lang'])];
                            }
                         ?>

                        </td>
                    </tr>
                    <tr>
                        <td>درجة اجادة الحاسب الآلي</td>
                        <td>
                            <?php echo $arr_degree[intval($row['computer'])]; ?>
                        </td>
                    </tr>
                    <tr>
                        <td>الدورات الحاصل عليها</td>
                        <td>
                            <?php if($row['courses'] == null){
                                notNull($row['courses']);
                            } else {
                                echo $row['courses'];
                            }
                        ?>
                        </td>
                    </tr>
                    <tr>
                        <td>الخبرات السابقة</td>
                        <td>
                            <?php if($row['exp'] == null){
                                notNull($row['exp']);
                            } else {
                                echo $row['exp'];
                            }
                        ?>
                        </td>
                    </tr>
                </table>
                <?php     
          }
}
}}
?>

                <div id="footer" class="text-center">
                    <a href="javascript:print();" class="btn btn-success"><i class="fa fa-print" aria-hidden="true"></i> طباعة  </a>
                    <a class="btn btn-success" href='http://www.dkwasc.com.eg'><i class="fa fa-home" aria-hidden="true"></i>  الرئيسية   </a>
                    <a class="btn btn-success" href='index.php'>صفحة الشروط </a>
                
                </div>
                <p>جميع الحقوق محفوظة © شركة مياه الشرب والصرف الصحي بالدقهلية 
      <?php echo date("Y"); ?></p>
    </div>

</body>

</html>
