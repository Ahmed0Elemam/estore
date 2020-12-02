<?php 
$adv_title = "مواعيد الاختبار التحريري للذين تخلفوا عن الاختبار التحريري الأساسي لوظيفة محصل بالعمولة | اعلان رقم 2 لسنة 2020";
$adv_link = "dkwasc.com.eg/jobs/2020/job2_reader/stage3_2/";
$job_no = " مواعيد الاختبار التحريري للذين تخلفوا عن الإختبار التحريري الأساسي - اعلان رقم 2 لسنة 2020";
$job_title = "وظيفة محصل بنظام العمولة";
include "../header.php";
?>
<div class="alert alert-danger">تنويه هام
    <br/>
    نظراً لسوء الأحوال الجوية أيام الإختبار التحريري الأساسي وعدم قدرة عدد كبير من المتقدمين على الحضور ، فقد تقرر اعطاء فرصة أخري للذين تخلفوا عن الإختبار بالمواعيد الموضحة
</div>
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