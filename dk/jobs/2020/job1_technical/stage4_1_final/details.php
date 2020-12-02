<?php
$arr_study = array(
    1 => "أعمال صحية",
    2 => "ميكانيكا",
    3 => "كهرباء"
);
//get url variables

$id = isset($_GET['id']) ? intval($_GET['id']) : -1; //-1 mean first page load

//database connection
include "../connect.php";

//database query
$sqlResult = $connect->prepare("select * from job1_2020_technical_stage4_1_final where id = $id");
$sqlResult->execute();
$sqlData = $sqlResult->fetch(PDO::FETCH_ASSOC);

$adv_title = "النتيجة النهائية لوظيفة فني رابع | اعلان رقم 1 لسنة 2020";
$adv_link = "dkwasc.com.eg/jobs/2020/job1_2020_technical/stage4_1_final/";
$job_no = "النتيجة النهائية للمتقدمين للاعلان رقم 1 لسنة 2020";
$job_title = " وظيفة فني رابع ";
include "../header.php";

if ($sqlData) { 

?>

            <table id="details" class='table table-bordered text-center'>

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
                    <td class='text-center info' style='color:#000;vertical-align:middle;'>المؤهل المتقدم به</td>
                    <td>
                        <?php echo $arr_study[intval($sqlData['study'])]; ?>
                    </td>
                </tr>

                <?php 
                if (is_numeric($sqlData['ordering'])) {
                  ?>

                <tr>
                    <td class='text-center info' style='color:#000;vertical-align:middle;'>الترتيب</td>
                    <td style='padding:10px;border-radius:10px;background-color:#8fff67b5;color:#000;border-radius:0;font-size:25px;'>
                        <strong><?php echo $sqlData['ordering']; ?></strong>
                    </td>

                </tr>
                <tr>
                    <td style='color:#000' class="info">ملحوظة هامة</td>
                    <td class="alert alert-danger"><strong>الترتيب على مستوى مركز
                            <?php echo ' ' . $sqlData['city_name']; ?>
                            وتخصص 
                            <?php echo ' '. $arr_study[intval($sqlData['study'])]; ?>

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
              } ?>
           


            </table>
            <?php
        } else { ?>

        <div class="alert alert-danger">عفواً ... بيانات غير صحيحة</div>

<?php
        }
?>

        </div>
        <?php
        include "../footer3.php";
        ?> 