<?php 
$adv_title = "نتيجة استيفاء الأوراق ومواعيد الإختبار التحريري لوظيفة محصل بالعمولة | اعلان رقم 2 لسنة 2020";
$adv_link = "dkwasc.com.eg/jobs/2020/job2_reader/stage3/";
$job_no = " نتيجة استيفاء الأوراق ومواعيد الإختبار التحريري للمتقدمين للاعلان رقم 2 لسنة 2020";
$job_title = "وظيفة محصل بنظام العمولة";
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