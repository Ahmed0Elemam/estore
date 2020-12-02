<?php
 //get url variables

$id = isset($_GET['id']) ? intval($_GET['id']) : -1; //-1 mean first page load
$arr_study = array (
  1 => "ادارة أعمال",
  2 => "محاسبة",
  3 => "اقتصاد",
  4 => "احصاء و تأمين"
);

//database connection
include "../connect.php";

//database query
$sqlResult = $connect->prepare("select * from ad8_2019_3omla_stage2 where id = $id");
$sqlResult->execute();
$sqlData = $sqlResult->fetch(PDO::FETCH_ASSOC);



$gNotes = "<div class='text-center' style='width:100%;padding:5px;background-color:#ffe1e1;border:1px dashed red;color:red;'>
<div style='text-align:right;'>
	<ul>
		<li>ضرورة احضار اصل وصورة كلا من:
          
          <ul>
            <li>بطاقة الرقم القومي</li>
            <li>شهادة الميلاد</li>
            <li>شهادة المؤهل الدراسي</li>
            <li>شهادة الخدمة العسكرية للذكور</li>
            <li>أثبات عضوية نقابة التجاريين</li>
          </ul>
          
 
        </li>

        <li> طباعة نموذج البيانات المعروضة بعاليه من زر طباعة بالأسفل وتسليمها مع الأوراق.</li>
        <li> ضرورة الإحتفاظ بالكود الخاص بكم والمعلن على الموقع.</li>
        
        
       
	</ul>
	</div>
</div>";
$person_data = array(
    "الكود" => "<h2>" . $sqlData['id'] . "</h2>",
    "الاسم" => $sqlData['name'],
    "العنوان" => $sqlData['city_name'] . ' - ' . $sqlData['village'],
    "تاريخ الميلاد" => $sqlData['birthdate'],
    "التخصص المتقدم به" => $arr_study[intval($sqlData['study'])],
    "ميعاد تقديم الاوراق" => "<div style='padding:10px;background-color:#A2FF67;color:#000;'><strong>" . $sqlData['paper_date'] . " </strong></div>",
    "المكان" => "<div style='background-color:#e2e2e2;padding:10px;'><strong>المنصورة - نهاية مساكن العبور بالمجزر - الطريق السريع - ديوان عام الشركة</strong></div>",
    "الشروط العامة <br/>و الاوراق المطلوبة" => $gNotes
);

$adv_title = "مواعيد تقديم الأوراق لوظيفة أخصائي خدمة عملاء ثالث | اعلان رقم 8 لسنة 2019";
$adv_link = "dkwasc.com.eg/jobs/job8_2019_3omla/stage2/";
$job_no = " مواعيد تقديم الأوراق للمتقدمين للاعلان رقم 8 لسنة 2019";
$job_title = "وظيفة أخصائي خدمة عملاء ثالث";
include "../header.php";
?>

<table  id ="details" class='table table-bordered text-center' style="margin:0 aut o;">
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