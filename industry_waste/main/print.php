<?php 
if($_SERVER['REQUEST_METHOD'] == 'POST'){
     // Get variables
    
        $code                   = $_POST['bc'];
        $name                   = $_POST['bn'];
        $industry_name          = $_POST['industry_name'];
        $analysis_cost1         = $_POST['analysis_cost1'];
        $analysis_cost2         = $_POST['analysis_cost2'];
        $analysis_cost_all      = $_POST['analysis_cost_all'];
        $addons                 = $_POST['addons'];
        $addons_cost            = $_POST['addons_cost'];
        $cost_all               = $_POST['all_cost'];
    
    $arr_cost_addons = array(
        250 => 'داخل المدن',
        450 => 'خارج المدن',
        1400 => 'العينات المركبة',
        2400 => 'العينات المركبة بالمدن العمرانية الجديدة'
    );
    

    


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

                <h4 class="text-justify">الرجاء من سيادتكم التكرم بالموافقة على أن يتم سداد رسوم تحليل عينة المنشأة التالية بياناتها</h4>
  
                <h4><strong> كود المنشأة / </strong> <span><?php echo $code ?></span></h4>
                <h4><strong> مسمى المنشأة / </strong> <span><?php echo $name ?></span></h4>
                <h4><strong> مسمى الصناعات / </strong> <span><?php echo $industry_name ?></span></h4>

                
             
               <h4><strong>التحاليل المطلوبة </strong></h4>
                 <ul>
                       <?php foreach($_POST['list'] as $check) { ?>
                    <li><?php echo $check ?></li>
                    <?php } ?>
                </ul>   
                       
                
                
              
                
                <h4><strong> تكلفة التحاليل / </strong> <span><?php echo $analysis_cost1 ?></span><span class="price-currency"> جنيهاً مصرياً. </span></h4>
                <h4><strong> ضريبة القيمة المضافة / </strong> <span><?php echo $analysis_cost2 ?></span><span class="price-currency"> جنيهاً مصرياً. </span></h4>
                <h4><strong> اجمالي تكلفة التحاليل / </strong> <span><?php echo $analysis_cost_all  ?></span><span class="price-currency"> جنيهاً مصرياً. </span></h4>
                <h4><strong> مقابل أخد العينة / </strong> <span><?php echo $arr_cost_addons[intval($addons)] ?></span></h4>
                <h4><strong> التكلفة مقابل أخذ العينة / </strong> <span><?php echo $addons_cost ?></span><span class="price-currency"> جنيهاً مصرياً. </span></h4>
                <h4><strong>   اجمالي التكلفة الكلية / </strong> <span><?php echo $cost_all ?></span><span class="price-currency"> جنيهاً مصرياً. </span></h4>



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
 

</div>

    <?php   } ?>
</body>

</html>
