<?php 
if($_SERVER['REQUEST_METHOD'] == 'POST'){
     // Get variables
    
        $code                   = $_POST['b_code'];
        $name                   = $_POST['b_name'];
        $wq                     = $_POST['waterq'];
    if(isset($_POST['bod'])){
        $bod                    = $_POST['bod'];
    }
        $bodcost                = 0;
    if(isset($_POST['cod'])){
        $cod                    = $_POST['cod'];
    }
        $codcost                = 0;
    if(isset($_POST['tss'])){
        $tss                    = $_POST['tss'];
    }
        $tsscost                = 0;
    if(isset($_POST['ph'])) {
        $ph                     = $_POST['ph'];
    }
        $phcost                 = 0;
    if(isset($_POST['og'])){
        $og                     = $_POST['og'];
    }
        $ogcost                 = 0;
   
        
        if(empty($bod)) {
            $bod = 0;
        }
        if(empty($cod)) {
            $cod = 0;
        }
        if(empty($tss)) {
            $tss = 0;
        }
        if(empty($ph)) {
            $ph = 0;
        }
        if(empty($og)) {
            $og = 0;
        }
    
     
    
        // BOD COST 
        if($bod >= 300 and $bod <= 600) {
            $bodcost = $bodcost + 1;
        }elseif ($bod >= 601 and $bod <= 659) {
            $bodcost = $bodcost + 3;
        }elseif ($bod >= 660 and $bod <= 1999) {
            $bodcost = $bodcost + 9;
        }elseif ($bod >= 2000) {
            $bodcost = $bodcost + 18;
        }else {
            $bodcost = 0;
        }
        
      $bodcost1 = $wq * $bodcost;
        // COD COST
        if($cod >= 1101 and $cod <= 1999) {
            $codcost = $codcost + 6;
        }elseif ($cod >= 2000 and $cod <= 4999) {
            $codcost = $codcost + 18;
        }elseif ($cod >= 5000) {
            $codcost = $codcost + 30;
        }else {
            $codcost = 0;
        }
     $codcost1 = $wq * $codcost;
         // TSS COST
        if($tss >= 500 and $tss <= 800) {
            $tsscost = $tsscost + 0.5;
        }elseif ($tss >= 801 and $tss <= 879) {
            $tsscost = $tsscost + 2;
        }elseif ($tss >= 880 and $tss <= 2999) {
            $tsscost = $tsscost + 5;
        }elseif ($tss >= 3000) {
             $tsscost = $tsscost + 15;
        }else {
            $tsscost = 0;
        }
     $tsscost1 = $wq * $tsscost;
    
        // PH COST
        if($ph >= 2 and $ph <= 6) {
            $phcost = $phcost + 30;
        }elseif ($ph >= 9.5 and $ph <= 12) {
            $phcost = $phcost + 30;
        }elseif ($ph < 2 or $ph > 12) {
            $phcost = $phcost + 60;
        } else {
            $phcost = 0;
        }
    
     $phcost1 = $wq * $phcost;
        // O&G COST
        if($og >= 101 and $og <= 999) {
            $ogcost = $ogcost + 10;
        }elseif ($og >= 1000) {
            $ogcost = $ogcost + 25;
        }else {
            $ogcost = 0;
        }
   $ogcost1 = $wq * $ogcost;
    
      $cost = $bodcost1 + $codcost1 + $tsscost1 + $phcost1 + $ogcost1;
    
     $qima = $cost * 0.14;
    
      $all_cost = $cost + $qima;
    
?>



<!DOCTYPE html>
<html lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="description" content="الموقع الرسمي لشركة مياه الشرب والصرف الصحي بالدقهلية">
    <meta name="keywords" content="Dakahlia,Water,Sewer,Company, خدمات شركة مياه الدقهلية,شركة مياه الشرب والصرف الصحي بالدقهلية">
    <meta name="author" content="Eng. Ahmed Elemam">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta property="og:image" content="http://www.dkwasc.com.eg/jobs/images/logo.png" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="dkwasc.com.eg" />
    <meta property="og:title" content="نظام ادارة الصرف الصناعي | شركة مياه الشرب والصرف الصحي بالدقهلية" />
    <meta property="og:description" content="الموقع الرسمي لشركة مياه الشرب والصرف الصحي بالدقهلية" />
    <meta property="fb:app_id" content="673798652822430" />

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> نظام ادارة الصرف الصناعي | شركة مياه الشرب والصرف الصحي بالدقهلية</title>
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="css/bootstrap-rtl.min.css" rel="stylesheet" type="text/css" />
    <link href="css/font-awesome.css" rel="stylesheet" type="text/css" />
    <link href="css/datepicker.css" rel="stylesheet" type="text/css" />
    <link href="css/social-share-kit.css" rel="stylesheet" type="text/css" />
    <link href="css/style.css?<?php echo md5_file("css/style.css"); ?>" rel="stylesheet" type="text/css" />
    <link rel="SHORTCUT ICON" href="img/icon.gif" type="image/x-icon" />

    <!--[if IE]>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="col-md-6" id="sh">
                    <h4 class="text-center">شركة مياه الشرب والصرف الصحي بالدقهلية</h4>
                    <h4 class="text-center">ادارة الصرف الصناعي</h4>
                </div>
                <div class="col-md-6 text-left">
                    <img src="img/logo.png" width="75" height="75" id="logo"  />
                </div>
            </div>
        </div>
<hr/>
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <h3>السيد المحاسب / رئيس القطاع المالي</h3>
               
                <h4 class="text-center">تحية طيبة وبعد ،،،</h4>

                <h4 class="text-justify">الرجاء من سيادتكم التكرم بالموافقة على أن يتم سداد رسوم أعباء التنقية للمنشأة التالية بياناتها</h4>
  
                <h4><strong> كود المنشأة / </strong> <span><?php echo $code ?></span></h4>
                <h4><strong> مسمى المنشأة / </strong> <span><?php echo $name ?></span></h4>

                
                <h4><strong> تكلفة اعباء التنقية / </strong> <span><?php echo $cost; ?></span><span class="price-currency"> جنيهاً مصرياً. </span></h4>
                <h4><strong> ضريبة القيمة المضافة / </strong> <span><?php echo $qima; ?></span><span class="price-currency"> جنيهاً مصرياً. </span></h4>
                <h4><strong> التكلفة الكلية / </strong> <span><?php echo $all_cost;  ?></span><span class="price-currency"> جنيهاً مصرياً. </span></h4>
                
                <br/>
                <br/>
                <br/>
                <br/>
                

                <h4 class="text-center">ولسيادتكم وافر الشكر والتقدير</h4>
                
                <div class="row">
                   <div class="text-center col-md-6" id="magid" style="float:right">
                       
                    <h4 class="text-center">رئيس قسم الرقابة على المنشآت الصناعية</h4>
                    <h4 class="text-center"> ك / سامح محمد فتحي</h4>
                   </div>
                   <div class="text-center col-md-6" id="shalabi" style="float:left">
                       <h4 class="text-center">مدير ادارة الصرف الصناعي</h4>
                    <h4 class="text-center"> ك / أحمد عبد الهادي شلبي</h4>
                       
                   </div>
                    
                    
                </div>
                
                

            </div>

        </div>
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="col-md-6 text-center">
                <a href="javascript:print();" class="btn btn-info text-center" id="print-btn"><i class="fa fa-print" aria-hidden="true"></i>  تأكيد الطباعة   </a>
            </div>
            <div class="col-md-6 text-center">
                <a href="index.php" class="btn btn-danger text-center" id="close"><i class="fa fa-close"></i>  الغاء</a>
            </div>
        </div>
    </div>
    <br/>
    <br/>
 

</div>

    <?php   } ?>
</body>

</html>
