<?php
$adv_title = "نتيجة استيفاء الأوراق ومواعيد الاختبار التحريري لوظيفة عامل | اعلان رقم 3 لسنة 2019";
$adv_link = "dkwasc.com.eg/jobs/job3_2019_worker/stage3/";
$job_no = " نتيجة استيفاء الأوراق ومواعيد الاختبار التحريري للمتقدمين للاعلان رقم 3 لسنة 2019";
$job_title = "وظيفة عامل حفر وتسليك وتطهير";
include "../header.php";
?>

<form action="result.php" method="GET">

    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <input class="form-control" type="text" id="q" name="entered" size="50" placeholder="الاسـم" required />
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <button width="100%" class="btn btn-primary" type="submit" id="submit"><i class="fa fa-search" aria-hidden="true"></i> بحث</button>
        </div>
    </div>
</form>



<?php 
include "../footer.php";
 ?>