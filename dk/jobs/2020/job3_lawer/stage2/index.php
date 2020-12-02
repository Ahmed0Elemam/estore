<?php 
$adv_title = "مواعيد تقديم الأوراق لوظيفة محامي ثالث | اعلان رقم 3 لسنة 2020";
$adv_link = "dkwasc.com.eg/jobs/2020/job3_lawer/stage2/";
$job_no = " مواعيد تقديم الأوراق للمتقدمين للاعلان رقم 3 لسنة 2020";
$job_title = "وظيفة محامي ثالث";
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