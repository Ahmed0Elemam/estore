<?php 
if($_SERVER['REQUEST_METHOD'] == 'POST'){
     // Get variables
    
        $area                   = $_POST['area2'];
        $name                   = $_POST['name2'];
        $address                = $_POST['address2'];
        $building2              = $_POST['building2'];



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
                    <h5 class="text-center">شركة مياه الشرب والصرف الصحي بالدقهلية</h5>
                    <h5 class="text-center">   احدى الشركات التابعة  </h5>
                    <h5 class="text-center">الشركة القابضة لمياه الشرب والصرف الصحي  </h5>
                    <h5 class="text-center">الادارة العامة للصرف الصناعي</h5>
                </div>
                <div class="col-md-6 text-left">
                    <img src="img/logo.png" width="75" height="75" id="logo"  />
                </div>
            </div>
        </div>
<hr/>
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
              <h3 class="text-right">
               <strong>السيد المهندس /  مدير عام منطقة  <?php echo $area; ?>   </strong>
               </h3>
               
               
                <h4 class="text-center">تحية طيبة وبعد ،،،</h4>
                
                <h4 class="text-justify" style="line-height:1.7">

                      نحيط علم سيادتكم أنه تم معاينة المنشأة : <?php echo $building; ?> 
                     <br/>
                     باسم / 
                     <?php echo $name; ?>
                     <br/>
                      بالعنوان / 
                      <?php echo $address; ?>
                       
                </h4>

                <h4 style="line-height:1.7;" class="text-justify"> وأنه لا مانع لدينا من السير في اجراءات توصيل خدمة الصرف الصحي للمنشأة وذلك طبقا للوائح والقوانين وذلك بعد تقديم طلبات للشركة لاتخاذ اجراءات التوصيل
                طبقاً للتعليمات واللوائح المنظمة. ( صرف صحي )
              </h4>
       <br/>
                
 
                
                <h4 class="text-center" style="line-height:1.7"><u><strong>
                     وفي حالة تغيير النشاط دون الرجوع إلى الشركة يعتبر الموافقة على توصيل الصرف الصحي لاغية                    
                </strong></u></h4>

                <br/>

                <h4 class="text-center">ولسيادتكم وافر الشكر والتقدير ،،،</h4>
                
                <div class="row">
                   <div class="text-center col-md-6" id="magid" style="float:right">
                       
                    <h4 class="text-center">رئيس قسم التراخيص للمنشآت الصناعية</h4>
                    <h4 class="text-center"> ك / ماجد السيد عبد المنعم</h4>
                    <br/>
                        <h4 class="text-center"> مراجعة . مدير ادارة الصرف الصناعي</h4>
                    <h4 class="text-center"> ك / أحمد عبد الهادي شلبي</h4>
                   </div>
                   <div class="text-center col-md-6" id="boss" style="float:left">
                       <h4 class="text-center"> رئيس مجلس الادارة والعضو المنتدب</h4>
                       <h4 class="text-right">مهندس / </h4>
                    <h4 class="text-center">  عزت ابراهيم الصياد</h4>
                       
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
 

</div>

    <?php   } ?>
</body>

</html>
