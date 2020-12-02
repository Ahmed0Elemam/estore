<?php
 //get url variables

$id = isset($_GET['id']) ? intval($_GET['id']) : -1; //-1 mean first page load
$arr_study = array(
    1 => "مؤهل متوسط",
    2 => "مؤهل فوق متوسط"
);


//database connection
include "../connect.php";

//database query
$sqlResult = $connect->prepare("select * from job2_2020_reader_stage2 where id = $id");
$sqlResult->execute();
$sqlData = $sqlResult->fetch(PDO::FETCH_ASSOC);



$gNotes = "<div class='text-center' style='width:100%;padding:5px;background-color:#F1F1F1;border:1px dashed red;color:red;'>
	<div style='text-align:right;'>
	<ul>
		<li>ضرورة احضار اصل وصورة كلا من:
          
          <ul>
            <li>بطاقة الرقم القومي</li>
            <li>شهادة الميلاد</li>
            <li>شهادة المؤهل الدراسي</li>
            <li>شهادة الخدمة العسكرية</li>
          </ul>
          
 
        </li>
        <li>تقديم اقرار ضامن من أحد العاملين بالجهات الحكومية أو احدى شركات القطاع العام أو قطاع الأعمال العام ويكون معتمد ومختوم بختم الجهة وبشرط أن يكون متبقي للضامن سنتين على الأقل قبل الإحالة للمعاش وألا يكون ضامناً لأكثر من متقدم. 
        <br/>
        <p class='no-print'>
        يمكنك تحميل نموذج اقرار الضامن وطباعته وملؤه من الرابط التالي
        <a style='font-weight:700' href='../eqrar_damn.pdf'>اضغط هنا للتحميل </a>
        </p>
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
    "المؤهل الدراسي المتقدم به" => $arr_study[intval($sqlData['study'])],
    "ميعاد تقديم الاوراق" => "<div style='padding:10px;background-color:#A2FF67;color:#000;'><strong>" . $sqlData['paper_date'] . " </strong></div>",
    "المكان" => "<div style='padding:10px;background-color:#ddd;color:#000;''><strong>المنصورة - نهاية مساكن العبور بالمجزر - الطريق السريع - ديوان عام الشركة</strong></div>",
    "الشروط العامة <br/>و الاوراق المطلوبة" => $gNotes
);

$adv_title = "مواعيد تقديم الأوراق لوظيفة محصل بالعمولة | اعلان رقم 2 لسنة 2020";
$adv_link = "dkwasc.com.eg/jobs/2020/job2_2020_reader/stage2/";
$job_no = " مواعيد تقديم الأوراق للمتقدمين للاعلان رقم 2 لسنة 2020";
$job_title = "وظيفة محصل بنظام العمولة";
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