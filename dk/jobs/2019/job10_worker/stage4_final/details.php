<?php
$arr_study = array(
    1 => "محو أمية",
    2 => "الإبتدائية",
    3 => "الإعدادية"
);
//get url variables

$id = isset($_GET['id']) ? intval($_GET['id']) : -1; //-1 mean first page load

//database connection
include "../connect.php";

//database query
$sqlResult = $connect->prepare("select * from ad10_2019_worker_stage4_final where id = $id");
$sqlResult->execute();
$sqlData = $sqlResult->fetch(PDO::FETCH_ASSOC);

$adv_title = "النتيجة النهائية لوظيفة عامل | اعلان رقم 10 لسنة 2019";
$adv_link = "dkwasc.com.eg/jobs/2020/job10_worker/stage4_final/";
$job_no = "النتيجة النهائية للمتقدمين للاعلان رقم 10 لسنة 2019";
$job_title = " وظيفة عامل حفر و تسليك و تطهير ";
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
                    <td class='text-center info' style='color:#000;vertical-align:middle;'>الشهادة الدراسية المتقدم بها</td>
                    <td>
                        <?php echo $arr_study[intval($sqlData['study'])]; ?>
                    </td>
                </tr>

                <?php 
                if (is_numeric($sqlData['ordering'])) {
                  ?>

                <tr>
                    <td class='text-center info' style='color:#000;vertical-align:middle;'>الترتيب</td>
                    <td style='padding:10px;border-radius:10px;background-color:#67d7ff;color:#000;border-radius:0;font-size:25px;'>
                        <strong><?php echo $sqlData['ordering']; ?></strong>
                    </td>

                </tr>
                <tr>
                    <td style='color:#000' class="info">ملحوظة هامة</td>
                    <td class="alert alert-danger"><strong>الترتيب على مستوى مركز
                            <?php echo ' ' . $sqlData['city_name']; ?>

                        </strong></td>

                </tr>

                <?php 
              } else { ?>
                <tr>
                    <td class='text-center info' style='color:#000;vertical-align:middle;'>الترتيب</td>
                    <td style='padding:10px;border-radius:10px;background-color:#f47575;color:#fff;border-radius:0;font-size=22px;'>
                        <strong><?php echo $sqlData['ordering']; ?></strong>

                    </td>
                </tr>
                <?php 
              }
            } ?>


            </table>



        </div>
        <?php
        include "../footer3.php";
        ?> 