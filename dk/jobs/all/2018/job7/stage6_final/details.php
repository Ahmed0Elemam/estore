<?php

$arr_driver = array(
  1 => "درجة أولى مهنية",
  2 => "درجة ثانية مهنية",
  3 => "درجة ثالثة مهنية",
  4 => "سائق معدات ثقيلة"
);
//get url variables

$id = isset($_GET['id']) ? intval($_GET['id']) : -1; //-1 mean first page load

//database connection
include "../connect.php";

//database query
$sqlResult = $connect->prepare("select * from ad7_2018_driver_stage6_final where id = $id");
$sqlResult->execute();
$sqlData = $sqlResult->fetch(PDO::FETCH_ASSOC);

$adv_title = "النتيجة النهائية لوظيفة سائق | اعلان رقم 7 لسنة 2018";
$adv_link = "dkwasc.com.eg/jobs/job7_2018_driver/stage6_final/";
$job_no = "النتيجة النهائية للمتقدمين للاعلان رقم 7 لسنة 2018";
$job_title = " وظيفة سائق <br />
                    ( درجة أولى مهنية - ثانية مهنية - ثالثة مهنية - معدات ثقيلة )";
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
                    <td class='text-center info' style='color:#000;vertical-align:middle;'>درجة القيادة</td>
                    <td>
                        <?php echo $arr_driver[intval($sqlData['driver'])]; ?>
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
                            <?php echo ' ' . $sqlData['city_name']; ?> و درجة القيادة

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