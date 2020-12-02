<?php
$arr_study = array(
  1 => "ميكانيكا قوى",
  2 => "كهرباء قوى"
);
//get url variables

$id = isset($_GET['id']) ? intval($_GET['id']) : -1; //-1 mean first page load

//database connection
include "../connect.php";

//database query
$sqlResult = $connect->prepare("select * from ad6_2018_mengineer_stage5 where id = $id");
$sqlResult->execute();
$sqlData = $sqlResult->fetch(PDO::FETCH_ASSOC);


$adv_title = "نتيجة الاختبار التحريري ومواعيد المقابلة الشخصية لوظيفة مهندس ميكانيكا قوى و كهرباء قوى | اعلان 6 لسنة 2018";
$adv_link = "dkwasc.com.eg/jobs/job6_2018_mengineer/stage5/";
$job_no = "نتيجة الاختبار التحريري ومواعيد المقابلة الشخصية للمتقدمين للاعلان رقم 6 لسنة 2018";
$job_title = " وظيفة مهندس
                    <br />
                    ( ميكانيكا قوى - كهرباء قوى )";
include "../header.php";

?>



<table id="details" class='table table-bordered text-center'>
  <?php
  if ($sqlData) { ?>
    <tr>
      <td class='text-center info' style='color:#000;vertical-align:middle;'>الكود</td>
      <td><strong><?php echo $sqlData['id']; ?></strong></td>
    </tr>
    <tr>
      <td class='text-center info' style='color:#000;vertical-align:middle;'>الاسم</td>
      <td>
        <?php echo $sqlData['name']; ?>
      </td>
    </tr>
    <tr>
      <td class='text-center info' style='color:#000;vertical-align:middle;'>العنوان</td>
      <td>
        <?php echo $sqlData['city_name'] . ' - ' . $sqlData['village']; ?>
      </td>
    </tr>
    <tr>
      <td class='text-center info' style='color:#000;vertical-align:middle;'>تاريخ الميلاد</td>
      <td>
        <?php echo $sqlData['birthdate']; ?>
      </td>
    </tr>

    <tr>
      <td class='text-center info' style='color:#000;vertical-align:middle;'>التخصص المتقدم له</td>
      <td>
        <?php echo $arr_study[intval($sqlData['study'])]; ?>
      </td>
    </tr>

    <?php
    if (is_numeric($sqlData['degree']) and $sqlData['degree'] >= 35 and $sqlData['degree'] != 0) {
      ?>
      <tr>
        <td class='text-center info' style='color:#000;vertical-align:middle;'>نتيجة الاختبار التحريري</td>

        <td style='padding:10px;border-radius:10px;background-color:#A2FF67;color:#000;border-radius:0;'>
          <strong><?php echo "ناجح"; ?></strong>
        </td>
      </tr>
      <tr>
        <td class='text-center info' style='color:#000;vertical-align:middle;'>ميعاد المقابلة الشخصية</td>
        <td style='padding:10px;border-radius:10px;background-color:#67d7ff;color:#000;border-radius:0;'>
          <strong><?php echo $sqlData['interview_date']; ?></strong>
        </td>

      <tr>
        <td class='text-center info' style='color:#000;vertical-align:middle;'>المكان </td>
        <td style="background-color:#333;color:#fff;padding:10px;line-height:1.7;">
          <strong>المنصورة - نهاية مساكن العبور بالمجزر - الطريق السريع - ديوان عام الشركة</strong>
        </td>
      </tr>

      </tr>
      <tr>
        <td class='text-center info' style='color:#000;vertical-align:middle;'>تعليمات هامة</td>
        <td class="danger text-right" style="font-weight:600;color:#f00">
          <p>الرجاء الالتزام بميعاد المقابلة المعلن عنه</p>

          <p>الرجاء احضار أصل وصورة كل من:</p>
          <ul>
            <li>بطاقة الرقم القومي</li>
            <li>شهادة الميلاد</li>
            <li>شهادة المؤهل الدراسي</li>
            <li>شهادة الخدمة العسكرية</li>
            <li>شهادات الدورات الحاصل عليها</li>
            <li>شهادات الخبرة الحاصل عليها</li>

          </ul>

        </td>
      </tr>

    <?php } elseif (is_numeric($sqlData['degree']) and $sqlData['degree'] < 35 and $sqlData['degree'] != 0) { ?>
      <tr>
        <td class='text-center info' style='color:#000;vertical-align:middle;'>نتيجة الاختبار التحريري</td>
        <td style='padding:10px;border-radius:10px;background-color:#f47575;color:#fff;border-radius:0;'>
          <strong><?php echo "لم يتجاوز الحد الأدنى المطلوب"; ?></strong>

        </td>
      </tr>
    <?php } elseif (is_numeric($sqlData['degree']) and $sqlData['degree'] == 0) { ?>
      <tr>
        <td class='text-center info' style='color:#000;vertical-align:middle;'>نتيجة الاختبار التحريري</td>
        <td style='padding:10px;border-radius:10px;background-color:#f47575;color:#fff;border-radius:0;'>
          <strong><?php echo "تغيب عن حضور الإختبار التحريري"; ?></strong>

        </td>
      </tr>
    <?php }
} ?>


</table>


<h4>تابعونا لمعرفة الخطوات التالية على الموقع الالكترونى للشركة </h4>
</div>
<?php
include "../footer3.php";
?>

</html>