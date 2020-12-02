<?php
//get url variables

$id = isset($_GET['id']) ? intval($_GET['id']) : -1; //-1 mean first page load
$arr_study = array(
  1 => "محو أمية",
  2 => "الإبتدائية",
  3 => "الإعدادية"
);


//database connection
include "../connect.php";

//database query
$sqlResult = $connect->prepare("select * from ad6_2019_worker_stage2 where id = $id");
$sqlResult->execute();
$sqlData = $sqlResult->fetch(PDO::FETCH_ASSOC);



$gNotes = "<div class='text-center' style='width:100%;padding:5px;background-color:#ffe1e1;border:1px dashed red;color:red;'>
	<div style='text-align:right;'>
	<ul>
		<li>ضرورة احضار اصل وصورة كلا من:
          
          <ul>
            <li>بطاقة الرقم القومي</li>
            <li>شهادة الميلاد</li>
            <li>الشهادة الدراسية</li>
            <li>شهادة الخدمة العسكرية</li>
          </ul>
          
 
        </li>

            <li> ضرورة طباعة البيانات المعروضة أمامكم لتقديمها مع الأوراق بالضغط على زر طباعة الموجود أسفل الشاشة .</li>
            <li> ضرورة الإحتفاظ بالكود الخاص بكم والمعلن على الموقع.</li>
       

       
	</ul>
	</div>
</div>";
$person_data = array(
  "الكود" => "<h2>" . $sqlData['id'] . "</h2>",
  "الاسم" => $sqlData['name'],
  "العنوان" => $sqlData['city_name'] . ' - ' . $sqlData['village'],
  "تاريخ الميلاد" => $sqlData['birthdate'],
  "الشهادة الدراسية المتقدم بها" => $arr_study[intval($sqlData['study'])],
  "ميعاد تقديم الاوراق" => "<div style='padding:10px;background-color:#b5f08f;color:#000;'><strong>" . $sqlData['paper_date'] . " </strong></div>",
  "المكان" => "<div style='background-color:#e2e2e2;padding:10px;'><strong>المنصورة - نهاية مساكن العبور بالمجزر - الطريق السريع - ديوان عام الشركة</strong></div>",
  "الشروط العامة <br/>و الاوراق المطلوبة" => $gNotes
);

$adv_title = "مواعيد تقديم الأوراق لوظيفة عامل | اعلان رقم 6 لسنة 2019";
$adv_link = "dkwasc.com.eg/jobs/job6_2019_worker/stage2/";
$job_no = " مواعيد تقديم الأوراق للمتقدمين للاعلان رقم 6 لسنة 2019";
$job_title = "وظيفة عامل حفر وتسليك وتطهير";
include "../header.php";
?>

<table id="details" class='table table-bordered text-center' style="margin:0 aut o;">
  <?php
  foreach ($person_data as $key => $value) {
    echo "<tr><td width='150px' class='text-center info' style='color:#000;vertical-align:middle;'>{$key}</td><td width='450px' style='color:#000;vertical-align:middle;'>{$value}</td></tr>";
  }
  ?>
</table>

<h4 class="no-print">تابعونا لمعرفة الخطوات التالية على الموقع الالكترونى للشركة </h4>

</div>
<?php
include "../footer3.php";
?>