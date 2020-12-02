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
$sqlResult = $connect->prepare("select * from ad6_2018_mengineer_stage4 where id = $id");
$sqlResult->execute();
$sqlData = $sqlResult->fetch(PDO::FETCH_ASSOC);


$adv_title = "مواعيد الاختبار التحريري لوظيفة مهندس ميكانيكا قوى و كهرباء قوى | اعلان 6 لسنة 2018";
$adv_link = "dkwasc.com.eg/jobs/job6_2018_mengineer/stage4/";
$job_no = "مواعيد الاختبار التحريري للمتقدمين للاعلان رقم 6 لسنة 2018";
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
        <td><strong>
                <?php echo $sqlData['id']; ?></strong></td>
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
        <td class='text-center info' style='color:#000;vertical-align:middle;'>التخصص</td>
        <td>
            <?php echo $arr_study[intval($sqlData['study'])]; ?>
        </td>
    </tr>

    <?php if ($sqlData['result'] == 1) { ?>
    <tr>
        <td class='text-center info' style='color:#000;vertical-align:middle;'>ميعاد الاختبار التحريري</td>
        <td style="background-color:#3498db;color:#fff;padding:10px">
            <strong>
                <?php echo $sqlData['exam_date']; ?></strong>
        </td>
    </tr>

    <tr>
        <td class='text-center info' style='color:#000;vertical-align:middle;'>المكان </td>
        <td style="background-color:#c30000;color:#fff;padding:10px">
            <strong>المنصورة - نهاية مساكن العبور بالمجزر - الطريق السريع - ديوان عام الشركة</strong>
        </td>
    </tr>

    <tr>
        <td class='text-center info' style='color:#000;vertical-align:middle;'>تعليمات هامة</td>
        <td class="danger text-right" style="font-weight:600;color:#f00;">
            <ul>
                <li>الرجاء الاحتفاظ بالكود المعلن عنه</li>
                <li>الرجاء الالتزام بميعاد الاختبار المعلن عنه</li>
                <li>الرجاء احضار بطاقة الرقم القومي</li>
            </ul>

        </td>
    </tr>
    <?php 
}
} ?>
</table>

<h4>تابعونا لمعرفة الخطوات التالية على الموقع الالكترونى للشركة </h4>
</div>
<?php
include "../footer3.php";
?> 