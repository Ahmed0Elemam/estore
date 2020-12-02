<?php
$adv_title = "النتيجة النهائية لوظيفة أخصائي خدمة عملاء ثالث | اعلان رقم 8 لسنة 2019 | المرحلة الأولى";
$adv_link = "dkwasc.com.eg/jobs/job8_2019_3omla/stage5_final/";
$job_no = "النتيجة النهائية للمتقدمين للاعلان رقم 8 لسنة 2019";
$job_title = " وظيفة أخصائي خدمة عملاء ثالث ";
include "../header.php";

?>
<div class="alert alert-danger text-center" style="line-height:1.7">
    تنويه هام
    <br/>
    النتيجة للمرحلة الأولى من المسابقة مراكز  ( المنصورة - طلخا - أجا - السنبلاوين - تمي الأمديد ) فقط على أن يتم استكمال باقي الاجراءات لباقي المراكز تباعاً
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
include "../footer.php"
?> 