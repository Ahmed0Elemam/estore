<?php


session_start();

$_SESSION['user_session'];

include "functions.php";
include "connect.php";

if($_SERVER['REQUEST_METHOD'] == 'GET'){ 
    
    $build_code = $_GET['bid'];
    $rep_code = $_GET['rep_id'];
    $building_name = $_GET['building_name'];
    
    $stmt = $connect->prepare("Select * from building_report where building_code = ? and rep_id = ?");
    $stmt->execute(array($build_code,$rep_code));
    $rows = $stmt->fetchAll();
    
   

?>


<!DOCTYPE HTML>

<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="description" content="الموقع الرسمي لشركة مياه الشرب والصرف الصحي بالدقهلية">
  <meta name="keywords" content="Dakahlia,Water,Sewer,Company, خدمات شركة مياه الدقهلية,شركة مياه الشرب والصرف الصحي بالدقهلية">
  <meta name="author" content="Eng. Ahmed Elemam">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta property="og:image" content="http://www.dkwasc.com.eg/jobs/images/logo.png" />
  <meta property="og:type"   content="website" /> 
  <meta property="og:url"    content="dkwasc.com.eg" /> 
  <meta property="og:title"  content="نظام ادارة الصرف الصناعي | شركة مياه الشرب والصرف الصحي بالدقهلية" /> 
  <meta property="og:description"  content="الموقع الرسمي لشركة مياه الشرب والصرف الصحي بالدقهلية" /> 
  <meta property="fb:app_id"  content="673798652822430" /> 
  
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title> نظام ادارة الصرف الصناعي | شركة مياه الشرب والصرف الصحي بالدقهلية</title>
  <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
  <link href="css/bootstrap-rtl.min.css" rel="stylesheet" type="text/css" />
  <link href="css/font-awesome.css" rel="stylesheet" type="text/css" />
  <link href="css/datepicker.css" rel="stylesheet" type="text/css" />
  <link href="css/social-share-kit.css" rel="stylesheet" type="text/css" />
  <link href="css/style.css?<?php echo md5_file("css/style.css"); ?>" rel="stylesheet" type="text/css" />
  <link rel="SHORTCUT ICON" href="img/icon.gif" type="image/x-icon" />
  <script src="js/jquery.min.js"></script>
  <script language="javascript" src="js/bootstrap.min.js" type="text/javascript"></script>
  <script language="javascript" src="js/script.js?<?php echo md5_file("js/script.js")?>" type="text/javascript">
    </script>

  <link rel="stylesheet" href="css/jquery-ui.css">
  <script src="js/jquery-ui.js"></script>
  <script src="js/ar.js"></script>

<script language="javascript" src="js/js2.js?<?php echo md5_file('js/js2.js') ?>" type="text/javascript"></script> 
      
 

</head>
<body>

     <nav class="navbar navbar-default">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#"><img src="img/logo.png" width="50px" height="50px" alt="dakahlia water and sewer company logo" title="شركة مياه الشرب والصرف الصحي بالدقهلية" />
              <span>شركة مياه الشرب والصرف الصحي بالدقهلية</span>

            </a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          
          <ul class="nav navbar-nav navbar-left">
            
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
			  <span class="glyphicon glyphicon-user"></span>&nbsp; مرحباً <?php echo user_name(); ?>&nbsp;<span class="caret"></span></a>
              <ul class="dropdown-menu">
                
                <li><a href="../logout.php"><span class="glyphicon glyphicon-log-out"></span>&nbsp;تسجيل خروج</a></li>
              </ul>
            </li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

  <div class="container text-center">
    <div class="row header">
      <div class="col-md-4">
       
      </div>

      <div class="col-md-4">
        <br/>
        <h1 class="text-center block-head">تعديل بيانات معاينة المنشأة</h1>
      </div>

      <div class="col-md-4">
        
      </div>
    </div>

<?php foreach($rows as $row){ ?>

    <form id="report-form" method="POST" >
            <div class="panel panel-primary text-center">
                <div class="panel-heading"> بيانات المعاينة الأساسية </div>
                <div class="panel-body">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="col-md-4">
                                    <label>كود المنشأة</label> <span class="astrik">*</span>
                                </div>
                                <div class="col-md-8">
                                    <input class="form-control" type="text" name="rep_code" id="rep_code" placeholder="الرجاء ادخال كود المنشأة"  required value="<?php echo $row['building_code']; ?>" readonly />
                                    <div class="alert alert-danger custom-alert"> يجب ادخال كود المنشأة </div>
                                </div>
                            </div>
                        
                            <div class="col-md-6">
                                <div class="col-md-4">
                                    <label>مسمى المنشأة</label> <span class="astrik">*</span>
                                </div>
                                <div class="col-md-8">
                                    <input class="form-control" id="rep_name" type="text" name="rep_name" placeholder="مسمى المنشأة" required value="<?php echo $building_name;?>" readonly  />
                                    <div class="alert alert-danger custom-alert"> يجب ادخال مسمى المنشأة </div>
                                 </div>
                                                                               
                            </div>
                        </div>
                    </div>
                
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="col-md-4">
                                    <label>رقم المعاينة</label> <span class="astrik">*</span>
                                </div>
                                <div class="col-md-8">
                                    <input class="form-control" type="text" name="rep_id" id="rep_id" placeholder="رقم المعاينة"  required value="<?php echo $row['rep_id'];?>" readonly />
                                    <div class="alert alert-danger custom-alert"> يجب ادخال رقم المعاينة </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="col-md-4">
                                    <label>سبب المعاينة</label> <span class="astrik">*</span>
                                </div>
                                <div class="col-md-8">
                                    <select class="form-control" name="rep_reason" id="rep_reason" required >
                                        
                                     <?php if ($row['rep_reason'] == 1){?>
                                        <option value="1" selected>خطة الادارة</option>
                                        <option value="2">حساب الأحمال الهيدروليكية</option>
                                        <option value="3"> تسوية مستحقات الشركة</option>
                                        <option value="4"> شكوى </option>
                                        <option value="5"> وصل المباني </option>
                                        <option value="6"> تعديل مطالبات الأعباء طبقاً لفاتورة المياه </option>
                                        <option value="7"> تعديل مطالبات الأحمال طبقاً لكمية المياه </option>
                                        <option value="8"> الاعتراض على نتيجة التحليل </option>
                                        
                                        <?php }elseif ($row['rep_reason'] == 2){?>
                                        <option value="1">خطة الادارة</option>
                                        <option value="2" selected>حساب الأحمال الهيدروليكية</option>
                                        <option value="3"> تسوية مستحقات الشركة </option>
                                        <option value="4"> شكوى </option>
                                        <option value="5"> وصل المباني </option>
                                        <option value="6"> تعديل مطالبات الأعباء طبقاً لفاتورة المياه </option>
                                        <option value="7"> تعديل مطالبات الأحمال طبقاً لكمية المياه </option>
                                        <option value="8"> الاعتراض على نتيجة التحليل </option>
                                       
                                        <?php }elseif ($row['rep_reason'] == 3){?>
                                        <option value="1">خطة الادارة</option>
                                        <option value="2">حساب الأحمال الهيدروليكية</option>
                                        <option value="3" selected> تسوية مستحقات الشركة </option>
                                        <option value="4"> شكوى </option>
                                        <option value="5"> وصل المباني </option>
                                        <option value="6"> تعديل مطالبات الأعباء طبقاً لفاتورة المياه </option>
                                        <option value="7"> تعديل مطالبات الأحمال طبقاً لكمية المياه </option>
                                        <option value="8"> الاعتراض على نتيجة التحليل </option>
                                       
                                        <?php }elseif ($row['rep_reason'] == 4){?>
                                        <option value="1">خطة الادارة</option>
                                        <option value="2">حساب الأحمال الهيدروليكية</option>
                                        <option value="3"> تسوية مستحقات الشركة </option>
                                        <option value="4" selected> شكوى </option>
                                        <option value="5"> وصل المباني </option>
                                        <option value="6"> تعديل مطالبات الأعباء طبقاً لفاتورة المياه </option>
                                        <option value="7"> تعديل مطالبات الأحمال طبقاً لكمية المياه </option>
                                        <option value="8"> الاعتراض على نتيجة التحليل </option>
                                       
                                        <?php }elseif ($row['rep_reason'] == 5){?>
                                        <option value="1">خطة الادارة</option>
                                        <option value="2">حساب الأحمال الهيدروليكية</option>
                                        <option value="3"> تسوية مستحقات الشركة </option>
                                        <option value="4"> شكوى </option>
                                        <option value="5" selected> وصل المباني </option>
                                        <option value="6"> تعديل مطالبات الأعباء طبقاً لفاتورة المياه </option>
                                        <option value="7"> تعديل مطالبات الأحمال طبقاً لكمية المياه </option>
                                        <option value="8"> الاعتراض على نتيجة التحليل </option>
                                        
                                        <?php }elseif ($row['rep_reason'] == 6){?>
                                        <option value="1">خطة الادارة</option>
                                        <option value="2">حساب الأحمال الهيدروليكية</option>
                                        <option value="3"> تسوية مستحقات الشركة </option>
                                        <option value="4"> شكوى </option>
                                        <option value="5"> وصل المباني </option>
                                        <option value="6" selected> تعديل مطالبات الأعباء طبقاً لفاتورة المياه </option>
                                        <option value="7"> تعديل مطالبات الأحمال طبقاً لكمية المياه </option>
                                        <option value="8"> الاعتراض على نتيجة التحليل </option>
                                         
                                        <?php }elseif ($row['rep_reason'] == 7){?>
                                        <option value="1">خطة الادارة</option>
                                        <option value="2">حساب الأحمال الهيدروليكية</option>
                                        <option value="3"> تسوية مستحقات الشركة </option>
                                        <option value="4"> شكوى </option>
                                        <option value="5"> وصل المباني </option>
                                        <option value="6"> تعديل مطالبات الأعباء طبقاً لفاتورة المياه </option>
                                        <option value="7" selected> تعديل مطالبات الأحمال طبقاً لكمية المياه </option>
                                        <option value="8"> الاعتراض على نتيجة التحليل </option>
                                       
                                        <?php } else {?>
                                        <option value="1">خطة الادارة</option>
                                        <option value="2">حساب الأحمال الهيدروليكية</option>
                                        <option value="3"> تسوية مستحقات الشركة </option>
                                        <option value="4"> شكوى </option>
                                        <option value="5"> وصل المباني </option>
                                        <option value="6"> تعديل مطالبات الأعباء طبقاً لفاتورة المياه </option>
                                        <option value="7"> تعديل مطالبات الأحمال طبقاً لكمية المياه </option>
                                        <option value="8" selected> الاعتراض على نتيجة التحليل </option>
                                        
                                    <?php } ?>    
                                        
                            </select>

                                    <div class="alert alert-danger custom-alert"> الرجاء اختيار سبب المعاينة </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="col-md-4">
                                    <label> موقف المنشأة</label> <span class="astrik">*</span>
                                </div>
                                <div class="col-md-8">
                                    <select class="form-control" name="building_position" id="building_position" required >
                        <?php if ($row['building_position'] == 1) { ?>
                                    <option value="1" selected>تعمل</option>
                                    <option value="2">متوقفة</option>
                                    <?php }else { ?>
                                    <option value="1">تعمل</option>
                                    <option value="2" selected>متوقفة</option>
                                    <?php }?>
                   </select>

                                    <div class="alert alert-danger custom-alert"> الرجاء اختيار موقف المنشأة </div>
                                </div>

                            </div>
                            <div class="col-md-6">
                                <div class="col-md-4">
                                    <label>تاريخ المعاينة</label> <span class="astrik">*</span>
                                </div>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" name="rep_date" id="rep_date"  placeholder="اختر تاريخ المعاينة من قائمة التاريخ" readonly required value="<?php echo $row['rep_date']; ?>"/>
                                    <div class="alert alert-danger custom-alert"> الرجاء اختيار تاريخ المعاينة من قائمة التاريخ </div>
                                    
                                </div>

                            </div>
                </div>
            </div>
            
            
            
            
            
             <div class="form-group">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="col-md-4">
                                    <label>محطة المعالجة التي يتم الصرف عليها</label>
                                </div>
                                <div class="col-md-8">
                                    <input class="form-control" type="text" name="waste_station" placeholder="الرجاء ادخال محطة المعالجة التي يتم الصرف عليها" id="waste_station" value="<?php echo $row['waste_station']; ?>"  />
                                    <div class="alert alert-danger custom-alert"> الرجاء ادخال محطة المعالجة التي يتم الصرف عليها </div>
                                </div>

                            </div>
                            <div class="col-md-6">
                                <div class="col-md-4">
                                    <label>فريق العمل</label>
                                </div>
                                <div class="col-md-8">
                                    <input class="form-control" type="text" name="rep_team" placeholder="الرجاء ادخال أسماء فريق العمل" id="rep_team" value="<?php echo $row['rep_team']; ?>" />
                                    <div class="alert alert-danger custom-alert"> الرجاء ادخال أسماء فريق العمل </div>
                                </div>

                            </div>

                        </div>
                    </div>
                    
                    
                    
                    
                     
             <div class="form-group">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="col-md-4">
                                    <label>الاجراءات المتخذة تجاه المنشآت المخالفة</label></div>
                                <div class="col-md-8">
                                    <textarea rows="5" cols="2" class="form-control" name="rep_actions" placeholder="الرجاء ادخال الاجراءات المتخذة تجاه المنشآت المخالفة" id="rep_actions">
                                        <?php echo $row['rep_actions']; ?>
                                    </textarea>
                                    <div class="alert alert-danger custom-alert"> الرجاء ادخال الاجراءات المتخذة تجاه المنشآت المخالفة </div>
                                </div>

                            </div>
                            

                        </div>
                    </div>

                </div>
    </div>
            
            
           
            
            <div class="panel panel-primary text-center">
                <div class="panel-heading">بيانات الطلمبات و العدادات</div>
                <div class="panel-body">
                   
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="col-md-4">
                                    <label>عدد الطلمبات</label>
                                </div>
                                <div class="col-md-8">
                                    <input class="form-control" type="text" name="pump_num" placeholder="الرجاء ادخال عدد الطلمبات" id="pump_num" value="<?php echo $row['pump_num']; ?>" />
                                    <div class="alert alert-danger custom-alert"> الرجاء ادخال عدد الطلمبات </div>
                                </div>

                            </div>
                            <div class="col-md-6">
                                <div class="col-md-4">
                                    <label>قدرة الطلمبة بالحصان</label> </div>
                                <div class="col-md-8">
                                    <input class="form-control" type="text" name="pump_capacity" placeholder="الرجاء ادخال قدرة الطلمبة بالحصان " id="pump_capacity" value="<?php echo $row['pump_capacity']; ?>"/>
                                    <div class="alert alert-danger custom-alert"> الرجاء ادخال قدرة الطلمبة بالحصان </div>
                                </div>

                            </div>

                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="col-md-4">
                                    <label>عدد ساعات التشغيل</label>
                                </div>
                                <div class="col-md-8">
                                    <input class="form-control" type="text" name="pump_run"  placeholder="الرجاء ادخال عدد ساعات التشغيل ساعة/اليوم" id="pump_run" value="<?php echo $row['pump_run']; ?>" />
                                    <div class="alert alert-danger custom-alert"> الرجاء ادخال عدد ساعات التشغيل ساعة/اليوم </div>
                                </div>

                            </div>
                            <div class="col-md-6">
                                <div class="col-md-4">
                                    <label>هل يعمل العداد</label> 
                                </div>
                                <div class="col-md-8">
                                    <select class="form-control" name="meter_work" id="meter_work" >
                        <option value="0">الرجاء اختيار حالة العداد</option>
                        <?php if ($row['meter_work'] == 1) { ?>
                                    <option value="1" selected>يعمل</option>
                                    <option value="2">لايعمل</option>
                                    <?php }else { ?>
                                    <option value="1">يعمل</option>
                                    <option value="2" selected>لايعمل</option>
                                    <?php }?>
                   </select>

                                    <div class="alert alert-danger custom-alert"> الرجاء اختيار حالة العداد </div>
                                </div>

                            </div>
                        </div>
                    </div>
 
                 <div class="form-group">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="col-md-4">
                                    <label>قراءة العداد الحالية</label> 
                                </div>
                                <div class="col-md-8">
                                    <input class="form-control" type="text" maxlength="5" name="read_current" placeholder="الرجاء ادخال قراءة العداد الحالية" id="read_current" value="<?php echo $row['read_current']; ?>" />
                                    <div class="alert alert-danger custom-alert">  الرجاء ادخال قراءة العداد الحالية</div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="col-md-4">
                                    <label>تاريخ قراءة العداد</label>
                                </div>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" name="read_date" id="read_date" placeholder="اختر تاريخ قراءة العداد من قائمة التاريخ" readonly required value="<?php echo $row['read_date']; ?>" />
                                    <div class="alert alert-danger custom-alert"> الرجاء اختيار تاريخ قراءة العداد من قائمة التاريخ  </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    
                
                
                

            </div>
    </div>
            
            <div class="panel panel-primary text-center">
                <div class="panel-heading">بيانات أخرى</div>
                <div class="panel-body">
                   <div class="form-group">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="col-md-4">
                                    <label>كمية المياه الحكومية شهرياً</label>
                                </div>
                                <div class="col-md-8">
                                    <input class="form-control" type="text" name="govern_quantity" placeholder="الرجاء ادخال كمية المياه الحكومية شهرياً" id="govern_quantity" value="<?php echo $row['govern_quantity']; ?>" />
                                    <div class="alert alert-danger custom-alert"> الرجاء ادخال كمية المياه الحكومية شهرياً</div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="col-md-4">
                                    <label>كمية المياه الجوفية يومياً</label>
                                </div>
                                <div class="col-md-8">
                                    <input class="form-control"  type="text" name="underground_quantity" placeholder="الرجاء ادخال كمية المياه الجوفية يومياً" id="underground_quantity" value="<?php echo $row['underground_quantity']; ?>" />
                                    <div class="alert alert-danger custom-alert"> يجب ادخال كمية المياه الجوفية يومياً</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    
                    
                    
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="col-md-4">
                                    <label> كمية المياه النيلي يومياً</label>
                                </div>
                                <div class="col-md-8">
                                    <input class="form-control" type="text" name="nile_quantity" placeholder="الرجاء ادخال كمية المياه النيلي يومياً" id="nile_quantity" value="<?php echo $row['nile_quantity']; ?>" />
                                    <div class="alert alert-danger custom-alert"> يجب ادخال كمية المياه النيلي يومياً </div>
                                </div>
                            </div>
                             <div class="col-md-6">
                                <div class="col-md-4">
                                    <label>وحدات المعالجة</label>
                                </div>
                                <div class="col-md-8">
                                    <select class="form-control" name="processing_units_found" id="processing_units_found" >
                        <option value="0">الرجاء اختيار وحدات المعالجة</option>
                       <?php if ($row['processing_units_found'] == 1) { ?>
                                    <option value="1" selected>توجد</option>
                                    <option value="2">لاتوجد</option>
                                    <?php }else { ?>
                                    <option value="1">توجد</option>
                                    <option value="2" selected>لاتوجد</option>
                                    <?php }?>
                   </select>

                                    <div class="alert alert-danger custom-alert"> الرجاء اختيار وحدات المعالجة </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    
                    
                    
                    
                    
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="col-md-4">
                                    <label>فترة المحاسبة من</label> 
                                </div>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" name="period_from" id="period_from" placeholder="اختر تاريخ بداية فترة المحاسبة من قائمة التاريخ " readonly value="<?php echo $row['period_from']; ?>" />
                                    <div class="alert alert-danger custom-alert"> الرجاء اختيار تاريخ بداية فترة المحاسبة من قائمة التاريخ</div>
                                    
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="col-md-4">
                                    <label>فترة المحاسبة إلى</label> 
                                </div>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" name="period_to" id="period_to" placeholder="اختر تاريخ نهاية المحاسبة من قائمة التاريخ" readonly value="<?php echo $row['period_to']; ?>" />
                                    <div class="alert alert-danger custom-alert"> الرجاء اختيار تاريخ نهاية المحاسبة من قائمة التاريخ التي تظهر لك </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    
                    
                    
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="col-md-4">
                                    <label>هل تم أخذ عينة</label> 
                                </div>
                                <div class="col-md-8">
                                    <select class="form-control" name="sample_taken" id="sample_taken" required >
                                        <?php if ($row['sample_taken'] == 1) { ?>
                                    <option value="1" selected>نعم</option>
                                    <option value="2">لا</option>
                                    <?php }else { ?>
                                    <option value="1">نعم</option>
                                    <option value="2" selected>لا</option>
                                    <?php }?>
                                   </select>

                                    <div class="alert alert-danger custom-alert"> الرجاء اختيار هل تم أخذ عينة </div>
                                </div>

                            </div>
                           
                         
                        </div>
                    </div>
  
                   <div id="no_sample">
                    <div class="form-group">
                        <div class="row">
                              <div class="col-md-6">
                                <div class="col-md-4">
                                    <label>كود العينة</label> <span class="astrik"></span>
                                </div>
                                <div class="col-md-8">
                                   <input class="form-control" type="text" name="sample_code" placeholder="الرجاء ادخال كود العينة" id="sample_code" value="<?php echo $row['sample_code']; ?>" />
                                    
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="col-md-4">
                                    <label>مسمى المعمل</label>
                                </div>
                                <div class="col-md-8">
                                <input class="form-control" type="text" name="lab_name" placeholder="الرجاء ادخال اسم المعمل" id="lab_name" value="<?php echo $row['lab_name']; ?>"  />

                                    <div class="alert alert-danger custom-alert"> الرجاء ادخال اسم المعمل </div>
                                </div>

                            </div>
                         
                        </div>
                    </div>
 
                    
                    <div class="form-group">
                        <div class="row">
                              <div class="col-md-6">
                                <div class="col-md-4">
                                    <label>مستلم العينة</label> 
                                </div>
                                <div class="col-md-8">
                                    <input class="form-control" type="text" name="sample_recipient" placeholder="الرجاء ادخال اسم مستلم العينة" id="sample_recipient" value="<?php echo $row['sample_recipient']; ?>"  />
                                    <div class="alert alert-danger custom-alert"> يجب ادخال اسم مستلم العينة</div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="col-md-4">
                                    <label>مسلم العينة</label>
                                </div>
                                <div class="col-md-8">
                                <input class="form-control" type="text" name="sample_given_man" placeholder="الرجاء ادخال اسم مسلم العينة" id="sample_given_man" value="<?php echo $row['sample_given_man']; ?>"  />

                                    <div class="alert alert-danger custom-alert"> الرجاء ادخال اسم مسلم العينة </div>
                                </div>

                            </div>
                          
                        </div>
                    </div>
                    
                    
                    
                    
                    
                     <div class="form-group">
                        <div class="row">
                             <div class="col-md-6">
                                <div class="col-md-4">
                                    <label>مستلم النتيجة</label> 
                                </div>
                                <div class="col-md-8">
                                    <input class="form-control" type="text" name="result_recipient" placeholder="الرجاء ادخال اسم مستلم النتيجة" id="result_recipient" value="<?php echo $row['result_recipient']; ?>" />
                                    <div class="alert alert-danger custom-alert"> يجب ادخال اسم مستلم النتيجة</div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="col-md-4">
                                    <label>تاريخ تسليم العينة</label>
                                </div>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" name="sample_delivery_date" id="sample_delivery_date" placeholder="اختر تاريخ تسليم العينة من قائمة التاريخ" readonly value="<?php echo $row['sample_delivery_date']; ?>" />
                                    <div class="alert alert-danger custom-alert"> الرجاء اختيار تاريخ تسليم العينة من قائمة التاريخ التي تظهر لك </div>
                                    
                                </div>
                            </div>


                    </div>
                   
                   </div>
                     <div class="form-group">
                        <div class="row">
                      
                            <div class="col-md-6">
                                <div class="col-md-4">
                                    <label>تاريخ استلام النتيجة</label>
                                </div>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" name="result_receive_date" id="result_receive_date" placeholder="اختر تاريخ استلام النتيجة من قائمة التاريخ" readonly value="<?php echo $row['result_receive_date']; ?>" />
                                    <div class="alert alert-danger custom-alert"> الرجاء اختيار تاريخ استلام النتيجة من قائمة التاريخ التي تظهر لك </div>
                                    
                                </div>
                            </div>

                    </div>
                   
                   </div>
                   </div>
            </div>
            
    </div>
    
    
    
    
    <div class="row">
                <div class="col-md-6">

                    <input class="btn btn-info btn-lg text-center" id="edit" value="حفظ التعديلات" />
                </div>
                <div class="col-md-6">
                    <a class="btn btn-danger btn-lg" href="index.php"><i class="fa fa-close"></i>  الغاء</a> 

                </div>
            </div>
     
    
    
</form>
<?php }
}else {
    echo "No Code";
}
 
?>
<div id="sample_edit"></div>
<hr/>
<a class="btn btn-success" href="index.php">الشاشة الرئيسية</a>
<hr/>


 
     <footer>
       
        <p> جميع الحقوق محفوظة  &copy;  شركة مياه الشرب والصرف الصحى بالدقهلية 2018</p>
        
      </footer>
  
    </div>
  <script>
$(document).ready(function(){
              
$('#edit').click(function(){
               var rep_code1                = $('#rep_code').val();
               var rep_id1                  = $('#rep_id').val();
               var rep_name1                = $('#rep_name').val();
               var rep_reason1              = $('#rep_reason').val();
               var building_position1       = $('#building_position').val();
               var rep_date1                = $('#rep_date').val();
               var waste_station1           = $('#waste_station').val();
               var rep_team1                = $('#rep_team').val();
               var rep_actions1             = $('#rep_actions').val();
			   var pump_num1                = $('#pump_num').val();
               var pump_capacity1           = $('#pump_capacity').val();
               var pump_run1                = $('#pump_run').val();
               var meter_work1              = $('#meter_work').val();
               var read_current1            = $('#read_current').val();
               var read_date1               = $('#read_date').val();
               var govern_quantity1         = $('#govern_quantity').val();
               var underground_quantity1    = $('#underground_quantity').val();
               var nile_quantity1           = $('#nile_quantity').val();
               var processing_units_found1  = $('#processing_units_found').val();
               var period_from1             = $('#period_from').val();
               var period_to1               = $('#period_to').val();
               var sample_taken1            = $('#sample_taken').val();
               var sample_code1             = $('#sample_code').val();
               var lab_name1                = $('#lab_name').val();
               var sample_recipient1        = $('#sample_recipient').val();
               var sample_given_man1        = $('#sample_given_man').val();
               var result_recipient1        = $('#result_recipient').val();
               var sample_delivery_date1    = $('#sample_delivery_date').val();
               var result_receive_date1     = $('#result_receive_date').val();



			
			var ajax_URL = "edit2.php";
			var dataString = 'rep_code=' + rep_code1 + '&rep_id=' + rep_id1 + '&rep_reason=' + rep_reason1 + '&building_position=' + building_position1 + '&rep_date=' + rep_date1 + '&waste_station' + waste_station1 + '&rep_team' + rep_team1 + '&rep_actions=' + rep_actions1 + '&pump_num=' + pump_num1 + '&pump_capacity=' + pump_capacity1 + '&pump_run=' + pump_run1 + '&meter_work=' + meter_work1 + '&read_current=' + read_current1 + '&read_date=' + read_date1 + '&govern_quantity=' + govern_quantity1 + '&underground_quantity=' + underground_quantity1 + '&nile_quantity=' + nile_quantity1 + '&processing_units_found=' + processing_units_found1 + '&period_from=' + period_from1 + '&period_to=' + period_to1 + '&sample_taken=' + sample_taken1 + + '&sample_code=' + sample_code1 + '&lab_name=' + lab_name1 + '&sample_recipient=' + sample_recipient1 + '&sample_given_man=' + sample_given_man1 + '&result_recipient=' + result_recipient1 + '&sample_delivery_date=' + sample_delivery_date1 + '&result_receive_date=' + result_receive_date1;
 
			//$('#Info').html('');
			//$('#ReadingInfo').html(hiReading_val);

			//debugger;
		if ( rep_code1 != 0 && rep_id1 !=0 &&rep_reason1 != 0 &&building_position1 != 0 && rep_date1 != '') {
               
				$('#sample_info').html('<img src="img/loading.gif" width="70"  height="70" /><p class="text-info"> جاري حفظ البيانات </p>');
				$.ajax({
					cache: false,
					type: "POST",
					dataType: "html",
					url: ajax_URL, 
					data: {
                        rep_code                : rep_code1,
                        rep_name                : rep_name1,
                        rep_id                  : rep_id1,
                        rep_reason              : rep_reason1,
                        building_position       : building_position1,
                        rep_date                : rep_date1,
                        waste_station           : waste_station1,
                        rep_team                : rep_team1,
                        rep_actions             : rep_actions1,
			            pump_num                : pump_num1,
                        pump_capacity           : pump_capacity1,
                        pump_run                : pump_run1,
                        meter_work              : meter_work1,
                        read_current            : read_current1,
                        read_date               : read_date1,
                        govern_quantity         : govern_quantity1,
                        underground_quantity    : underground_quantity1,
                        nile_quantity           : nile_quantity1,
                        processing_units_found  : processing_units_found1,
                        period_from             : period_from1,
                        period_to               : period_to1,
                        sample_taken            : sample_taken1,
                        sample_code             : sample_code1,
                        lab_name                : lab_name1,
                        sample_recipient        : sample_recipient1,
                        sample_given_man        : sample_given_man1,
                        result_recipient        : result_recipient1,
                        sample_delivery_date    : sample_delivery_date1,
                        result_receive_date     : result_receive_date1
				
					},
					error: function() {
						//debugger;
						$('#sample_edit').html('خطأ في الحفظ');
					},
					success: 
						function(result){ 
							//debugger;
							$("#sample_edit").html(result);
					complete : 
						return true; 
					}
					
				});
		}
			
	  });

     $("#rep_date").datepicker({
                changeMonth: true,
                changeYear: true,
                regional: "ar",
                dateFormat: "yy-mm-dd",
                autoSize: true,
            });
            
     $("#read_date").datepicker({
                changeMonth: true,
                changeYear: true,
                regional: "ar",
                dateFormat: "yy-mm-dd",
                autoSize: true
            });
            
      $("#period_from").datepicker({
                changeMonth: true,
                changeYear: true,
                regional: "ar",
                dateFormat: "yy-mm-dd",
                autoSize: true
            });
    
      $("#period_to").datepicker({
                changeMonth: true,
                changeYear: true,
                regional: "ar",
                dateFormat: "yy-mm-dd",
                autoSize: true
            });
    
     $("#sample_delivery_date").datepicker({
                changeMonth: true,
                changeYear: true,
                regional: "ar",
                dateFormat: "yy-mm-dd",
                autoSize: true
            });
    $("#result_receive_date").datepicker({
                changeMonth: true,
                changeYear: true,
                regional: "ar",
                dateFormat: "yy-mm-dd",
                autoSize: true
            });
     
     });
    
</script>
  
</body>
</html>