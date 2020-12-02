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
$sqlResult = $connect->prepare("select * from ad8_2019_3omla_stage3 where id = $id");
$sqlResult->execute();
$sqlData = $sqlResult->fetch(PDO::FETCH_ASSOC);

$adv_title = "نتيجة استيفاء الأوراق ومواعيد الاختبار التحريري لوظيفة أخصائي خدمة عملاء ثالث | اعلان رقم 8 لسنة 2019";
$adv_link = "dkwasc.com.eg/jobs/job8_2019_3omla/stage3/";
$job_no = " نتيجة استيفاء الأوراق ومواعيد الاختبار التحريري للمتقدمين للاعلان رقم 8 لسنة 2019";
$job_title = "وظيفة أخصائي خدمة عملاء ثالث";
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
            <td class='text-center info' style='color:#000;vertical-align:middle;'>التخصص</td>
            <td>
                <?php echo $arr_study[intval($sqlData['study'])]; ?>
            </td>
        </tr>
        <tr>
            <td class='text-center info' style='color:#000;vertical-align:middle;'>نتيجة استيفاء الاوراق</td>
            <?php
            if ($sqlData['result'] == 1) {

                if ($sqlData['city'] == 7 or $sqlData['city'] == 14 or $sqlData['city'] == 1 or $sqlData['city'] == 3 or $sqlData['city'] == 10) {
                ?>
                <td style='padding:10px;background-color:#A2FF67;color:#000;'>
                    <strong><?php echo $sqlData['paper_result']; ?></strong>
                </td>

            <?php 
                } else { ?>
                <td style='padding:10px;background-color:#68bbf2;color:#000;'>
                    <strong>سيتم اعلان نتيجة استيفاء الأوراق وميعاد الاختبار التحريري لاحقاً ... تابعنا على الموقع الالكتروني للشركة</strong>
                </td>
                   
             <?php   }
        } else {  ?>
                <td style="color:#fff;background-color:#e74c3c;">
                    <strong><?php echo $sqlData['paper_result']; ?></strong>
                </td>
            <?php } ?>
        </tr>

        <?php 
              if ($sqlData['result'] == 1 and ($sqlData['city'] == 7 or $sqlData['city'] == 14 or $sqlData['city'] == 1 or $sqlData['city'] == 3 or $sqlData['city'] == 10)) { ?>
                <tr>
                    <td class='text-center info' style='color:#000;vertical-align:middle;'>ميعاد الاختبار التحريري</td>
                    <td style="background-color:#3498db;color:#fff;padding:10px">
                        <strong><?php echo $sqlData['exam_date']; ?></strong>
                    </td>
                </tr>

                <tr>
                    <td class='text-center info' style='color:#000;vertical-align:middle;'>مكان الاختبار التحريري</td>
                    <td style="background-color:#ccc;color:#000;padding:10px">
                    <strong>كلية التجارة - جامعة المنصورة - بدروم 2
                    <br/>
                    ( الدخول من بوابة كلية حقوق )
                    </strong>
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

               
            <?php }
    if ($sqlData['reason1'] != NULL || $sqlData['reason2'] != NULL || $sqlData['notes'] != NULL && $sqlData['result'] != 1) {
        ?>
            <tr>
                <td class='text-center info' style='color:#000;vertical-align:middle;'>الأسباب</td>
                <td class="danger"><strong>
                        <ul class="list-unstyled">
                            <li><?php echo $sqlData['reason1'] ?></li>
                            <li><?php echo $sqlData['reason2'] ?></li>
                        </ul>
                    </strong>
                    <p style="margin-top:10px; border-radius:10px;">
                        <?php echo $sqlData['notes']; ?>
                    </p>
                </td>
            </tr>


        <?php


    } else {
        echo '';
    }
}
?>
</table>

<h4>تابعونا لمعرفة الخطوات التالية على الموقع الالكترونى للشركة </h4>

</div>

<?php
include "../footer3.php";
?>