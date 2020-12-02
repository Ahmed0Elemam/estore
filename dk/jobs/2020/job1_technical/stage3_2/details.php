<?php
//get url variables

$id = isset($_GET['id']) ? intval($_GET['id']) : -1; //-1 mean first page load
$arr_study = array(
    1 => "أعمال صحية",
    2 => "ميكانيكا",
    3 => "كهرباء"
);



//database connection
include "../connect.php";

//database query
$sqlResult = $connect->prepare("select * from job1_2020_technical_stage3_paper_result_1 where id = $id");
$sqlResult->execute();
$sqlData = $sqlResult->fetch(PDO::FETCH_ASSOC);

$adv_title = "نتيجة استيفاء الأوراق لوظيفة فني رابع | اعلان رقم 1 لسنة 2020";
$adv_link = "dkwasc.com.eg/jobs/2020/job1_2020_technical/stage3/";
$job_no = " نتيجة استيفاء الأوراق للمتقدمين للاعلان رقم 1 لسنة 2020";
$job_title = "وظيفة فني رابع";
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
            <td class='text-center info' style='color:#000;vertical-align:middle;'>التخصص المتقدم به</td>
            <td>
                <?php echo $arr_study[intval($sqlData['study'])]; ?>
            </td>
        </tr>
        <?php
            if ($sqlData['paper_result'] == 1) {
                ?>
        <tr>     
            <td class='text-center info' style='color:#000;vertical-align:middle;'>نتيجة استيفاء الاوراق</td>
            
                <td style='padding:10px;background-color:#A2FF67;color:#000;'>
                    <strong>مستوفي</strong>
                </td>

        </tr>

        <?php
      } elseif($sqlData['paper_result'] == 2 && ($sqlData['reason1'] != NULL || $sqlData['reason2'] != NULL || $sqlData['reason3'] != NULL|| $sqlData['notes'] != NULL)) {
            ?>
            <tr>     
            <td class='text-center info' style='color:#000;vertical-align:middle;'>نتيجة استيفاء الاوراق</td>
            
                <td style='padding:10px;color:#fff;background-color:#e74c3c;'>
                    <strong>غير مستوفي</strong>
                </td>

        </tr>
            <tr>
                <td class='text-center info' style='color:#000;vertical-align:middle;'>الأسباب</td>
                <td class="danger"><strong>
                        <ul class="list-unstyled">
                            <li><?php echo $sqlData['reason1'] ?></li>
                            <li><?php echo $sqlData['reason2'] ?></li>
                            <li><?php echo $sqlData['reason3'] ?></li>
                        </ul>
                    </strong>
                    <p style="margin-top:10px; border-radius:10px;">
                        <?php echo $sqlData['notes']; ?>
                    </p>
                </td>
            </tr>


        <?php


    } elseif( $sqlData['paper_result'] == 3) {
        ?>
        <tr>     
        <td class='text-center info' style='color:#000;vertical-align:middle;'>نتيجة استيفاء الاوراق</td>
        
            <td style='padding:10px;color:#fff;background-color:#e74c3c;'>
                <strong>غير مستوفي</strong>
            </td>

    </tr>
        <tr>
            <td class='text-center info' style='color:#000;vertical-align:middle;'>الأسباب</td>
            <td class="danger">
                 لم يتقدم بالأوراق المطلوبة

            </td>
        </tr>
        <?php
    } else {
        echo "";

    }
}
?>
</table>

<h4>تابعونا لمعرفة الخطوات التالية على الموقع الالكترونى للشركة </h4>

</div>

<?php
include "../footer3.php";
?>