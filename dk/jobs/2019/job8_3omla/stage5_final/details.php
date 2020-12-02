<?php
$arr_study = array (
    1 => "ادارة أعمال",
    2 => "محاسبة",
    3 => "اقتصاد",
    4 => "احصاء و تأمين"
  );
//get url variables

$id = isset($_GET['id']) ? intval($_GET['id']) : -1; //-1 mean first page load

//database connection
include "../connect.php";

//database query
$sqlResult = $connect->prepare("select * from ad8_2019_3omla_stage5_final where id = $id");
$sqlResult->execute();
$sqlData = $sqlResult->fetch(PDO::FETCH_ASSOC);

$adv_title = "النتيجة النهائية لوظيفة أخصائي خدمة عملاء ثالث | اعلان رقم 8 لسنة 2019 | المرحلة الأولى";
$adv_link = "dkwasc.com.eg/jobs/job8_2019_3omla/stage5_final/";
$job_no = "النتيجة النهائية للمتقدمين للاعلان رقم 8 لسنة 2019";
$job_title = " وظيفة أخصائي خدمة عملاء ثالث ";
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