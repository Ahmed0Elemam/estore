<?php
$adv_title = "نتيجة الاختبار التحريري ومواعيد المقابلة الشخصية لوظيفة مهندس ميكانيكا قوى و كهرباء قوى | اعلان 6 لسنة 2018";
$adv_link = "dkwasc.com.eg/jobs/job6_2018_mengineer/stage5/";
$job_no = "نتيجة الاختبار التحريري ومواعيد المقابلة الشخصية للمتقدمين للاعلان رقم 6 لسنة 2018";
$job_title = " وظيفة مهندس
                    <br />
                    ( ميكانيكا قوى - كهرباء قوى )";
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
include "../footer.php"
?>