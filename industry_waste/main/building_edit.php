
<?php

session_start();

$_SESSION['user_session'];

include "functions.php";


include "connect.php";

$arr_industry_name = array(
  1 => 'صناعة المنسوجات',
  2 => 'معامل الملابس والسجاد',
  3 => 'صناعة الصلب',
  4 => 'مواد البناء',
  5 => 'الخزف و الصيني',
  6 => 'الزجاجيات',
  7 => 'الصباغة و التجهيز',
  8 => 'الصناعات الغذائية',
  9 => 'المجازر',
  10 => 'المشروبات الغازية',
  11 => 'المطاعم و الفنادق',
  12 => 'الورق',
  13 => 'الدباغة',
  14 => 'المستشفيات',
  15 => 'صناعة الكيماويات',
  16 => 'صناعة الأدوية',
  17 => 'الطلاء بالمعادن و تشطيب المعادن',
  18 => 'البويات',
  19 => 'تشطيب الأثاث',
  20 => 'الطباعة',
  21 => 'البلاستيك',
  22 => 'تكرير البترول',
  23 => 'بوليمرات',
  24 => 'بتروكيماويات',
  25 => 'أسمدة ومبيدات',
  26 => 'محطات خدمة السيارات'
);

if($_SERVER['REQUEST_METHOD'] == 'GET'){ 
    
    $build_code = $_GET['bid'];
    
    $stmt = $connect->prepare("Select * from building_info where building_code = ?");
    $stmt->execute(array($build_code));
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

<script language="javascript" src="js/js1.js?<?php echo md5_file('js/js1.js') ?>" type="text/javascript"></script> 
      
 

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
        <h1 class="text-center block-head">تعديل بيانات المنشأة</h1>
      </div>

      <div class="col-md-4">
        
      </div>
    </div>

<?php foreach($rows as $row){ ?>
<form id="register-form" method="Post" >
            <div class="panel panel-primary text-center">
                <div class="panel-heading">البيانات الأساسية </div>
                <div class="panel-body">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="col-md-4">
                                    <label>كود المنشأة</label> <span class="astrik">*</span>
                                </div>
                                <div class="col-md-8">
                                    <input class="name form-control" type="text" name="code" id="code" placeholder="الرجاء ادخال كود المنشأة"  required value="<?php echo $row['building_code']; ?>" readonly />
                                    <div class="alert alert-danger custom-alert"> يجب ادخال كود المنشأة </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="col-md-4">
                                    <label>مسمى المنشأة</label> <span class="astrik">*</span>
                                </div>
                                <div class="col-md-8">
                                    <input class="form-control" id="name" type="text" name="name" placeholder="الرجاء ادخال مسمى المنشأة" required  value="<?php echo $row['building_name'];?>" />
                                    <div class="alert alert-danger custom-alert"> يجب ادخال مسمى المنشأة </div>
                                 </div>
                                                                               
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="col-md-4">
                                    <label>عنوان المنشأة</label> <span class="astrik">*</span>
                                </div>
                                <div class="col-md-8">
                                    <input class="name form-control" type="text" name="address" id="address" placeholder="الرجاء ادخال عنوان المنشأة"  required value="<?php echo $row['building_address'];?>"/>
                                    <div class="alert alert-danger custom-alert"> يجب ادخال عنوان المنشأة </div>
                                </div>

                            </div>
                            <div class="col-md-6">
                                <div class="col-md-4">
                                    <label>مسمى الصناعات</label> <span class="astrik">*</span>
                                </div>
                                <div class="col-md-8">
                                    <select class="form-control" name="industry_name" id="industry_name" >
                                       <!-- 1 ----------------------------------------------------->
                                        <?php 
                                            
                                            if($row['industry_name'] == 1){ ?>
                                               <option value="<?php echo $row['industry_name']; ?>" selected><?php echo $arr_industry_name[intval($row['industry_name'])]; ?></option>
                                               <?php
                                            $stmt1 = $connect->prepare("select * from industry_names where id != 1");
                                            $stmt1->execute();
                                            $industries1 = $stmt1->fetchAll();
                                        foreach($industries1 as $ind1){
                                        ?>
                                        <option value="<?php echo $ind1['id']; ?>"><?php echo $ind1['name']; ?></option>
                                        <!-- 2----------------------------------------------------->
                                        <?php }} elseif($row['industry_name'] == 2){ ?>
                                                 <option value="<?php echo $row['industry_name']; ?>" selected><?php echo $arr_industry_name[intval($row['industry_name'])]; ?></option>
                                                <?
                                            $stmt2 = $connect->prepare("select * from industry_names where id != 2");
                                            $stmt2->execute();
                                            $industries2 = $stmt2->fetchAll();
                                        foreach($industries2 as $ind2){
                                        ?>
                                        <option value="<?php echo $ind2['id']; ?>"><?php echo $ind2['name']; ?></option>
                                       <!-- 3----------------------------------------------------->
                                        <?php }}elseif($row['industry_name'] == 3){ ?>
                                                 <option value="<?php echo $row['industry_name']; ?>" selected><?php echo $arr_industry_name[intval($row['industry_name'])]; ?></option>
                                                <?
                                            $stmt3 = $connect->prepare("select * from industry_names where id != 3");
                                            $stmt3->execute();
                                            $industries3 = $stmt3->fetchAll();
                                        foreach($industries3 as $ind3){
                                        ?>
                                        <option value="<?php echo $ind3['id']; ?>"><?php echo $ind3['name']; ?></option>

                                        <!-- 4----------------------------------------------------->
                                        <?php }}elseif($row['industry_name'] == 4){ ?>
                                                 <option value="<?php echo $row['industry_name']; ?>" selected><?php echo $arr_industry_name[intval($row['industry_name'])]; ?></option>
                                                <?
                                            $stmt4 = $connect->prepare("select * from industry_names where id != 4");
                                            $stmt4->execute();
                                            $industries4 = $stmt4->fetchAll();
                                        foreach($industries4 as $ind4){
                                        ?>
                                        <option value="<?php echo $ind4['id']; ?>"><?php echo $ind4['name']; ?></option>
                   
                                       <!-- 5----------------------------------------------------->
                                        <?php }}elseif($row['industry_name'] == 5){ ?>
                                                 <option value="<?php echo $row['industry_name']; ?>" selected><?php echo $arr_industry_name[intval($row['industry_name'])]; ?></option>
                                                <?
                                            $stmt5 = $connect->prepare("select * from industry_names where id != 5");
                                            $stmt5->execute();
                                            $industries5 = $stmt5->fetchAll();
                                        foreach($industries5 as $ind5){
                                        ?>
                                        <option value="<?php echo $ind5['id']; ?>"><?php echo $ind5['name']; ?></option>
                   
                                        <!-- 6----------------------------------------------------->
                                        <?php }}elseif($row['industry_name'] == 6){ ?>
                                                 <option value="<?php echo $row['industry_name']; ?>" selected><?php echo $arr_industry_name[intval($row['industry_name'])]; ?></option>
                                                <?
                                            $stmt6 = $connect->prepare("select * from industry_names where id != 6");
                                            $stmt6->execute();
                                            $industries6 = $stmt6->fetchAll();
                                        foreach($industries6 as $ind6){
                                        ?>
                                        <option value="<?php echo $ind6['id']; ?>"><?php echo $ind6['name']; ?></option>
                   
                                        <!-- 7----------------------------------------------------->
                                        <?php }}elseif($row['industry_name'] == 7){ ?>
                                                 <option value="<?php echo $row['industry_name']; ?>" selected><?php echo $arr_industry_name[intval($row['industry_name'])]; ?></option>
                                                <?
                                            $stmt7 = $connect->prepare("select * from industry_names where id != 7");
                                            $stmt7->execute();
                                            $industries7 = $stmt7->fetchAll();
                                        foreach($industries7 as $ind7){
                                        ?>
                                        <option value="<?php echo $ind7['id']; ?>"><?php echo $ind7['name']; ?></option>

                                        <!-- 8 ----------------------------------------------------->
                                        <?php }}elseif($row['industry_name'] == 8){ ?>
                                                 <option value="<?php echo $row['industry_name']; ?>" selected><?php echo $arr_industry_name[intval($row['industry_name'])]; ?></option>
                                                <?
                                            $stmt8 = $connect->prepare("select * from industry_names where id != 8");
                                            $stmt8->execute();
                                            $industries8 = $stmt8->fetchAll();
                                        foreach($industries8 as $ind8){
                                        ?>
                                        <option value="<?php echo $ind8['id']; ?>"><?php echo $ind8['name']; ?></option>
                   
                                        <!-- 9 ----------------------------------------------------->
                                        <?php }}elseif($row['industry_name'] == 9){ ?>
                                                 <option value="<?php echo $row['industry_name']; ?>" selected><?php echo $arr_industry_name[intval($row['industry_name'])]; ?></option>
                                                <?
                                            $stmt9 = $connect->prepare("select * from industry_names where id != 9");
                                            $stmt9->execute();
                                            $industries9 = $stmt9->fetchAll();
                                        foreach($industries9 as $ind9){
                                        ?>
                                        <option value="<?php echo $ind9['id']; ?>"><?php echo $ind9['name']; ?></option>
            
                                        <!-- 10 ----------------------------------------------------->
                                        <?php }}elseif($row['industry_name'] == 10){ ?>
                                                 <option value="<?php echo $row['industry_name']; ?>" selected><?php echo $arr_industry_name[intval($row['industry_name'])]; ?></option>
                                                <?
                                            $stmt10 = $connect->prepare("select * from industry_names where id != 10");
                                            $stmt10->execute();
                                            $industries10 = $stmt10->fetchAll();
                                        foreach($industries10 as $ind10){
                                        ?>
                                        <option value="<?php echo $ind10['id']; ?>"><?php echo $ind10['name']; ?></option>
                   
                                        <!-- 11 ----------------------------------------------------->
                                        <?php }}elseif($row['industry_name'] == 11){ ?>
                                                 <option value="<?php echo $row['industry_name']; ?>" selected><?php echo $arr_industry_name[intval($row['industry_name'])]; ?></option>
                                                <?
                                            $stmt11 = $connect->prepare("select * from industry_names where id != 11");
                                            $stmt11->execute();
                                            $industries11 = $stmt11->fetchAll();
                                        foreach($industries11 as $ind11){
                                        ?>
                                        <option value="<?php echo $ind11['id']; ?>"><?php echo $ind11['name']; ?></option>
  
                                        <!-- 12 ----------------------------------------------------->
                                        <?php }}elseif($row['industry_name'] == 12){ ?>
                                                 <option value="<?php echo $row['industry_name']; ?>" selected><?php echo $arr_industry_name[intval($row['industry_name'])]; ?></option>
                                                <?
                                            $stmt12 = $connect->prepare("select * from industry_names where id != 12");
                                            $stmt12->execute();
                                            $industries12 = $stmt12->fetchAll();
                                        foreach($industries12 as $ind12){
                                        ?>
                                        <option value="<?php echo $ind12['id']; ?>"><?php echo $ind12['name']; ?></option>

                                        <!-- 13 ----------------------------------------------------->
                                        <?php }}elseif($row['industry_name'] == 13){ ?>
                                                 <option value="<?php echo $row['industry_name']; ?>" selected><?php echo $arr_industry_name[intval($row['industry_name'])]; ?></option>
                                                <?
                                            $stmt13 = $connect->prepare("select * from industry_names where id != 13");
                                            $stmt13->execute();
                                            $industries13 = $stmt13->fetchAll();
                                        foreach($industries13 as $ind13){
                                        ?>
                                        <option value="<?php echo $ind13['id']; ?>"><?php echo $ind13['name']; ?></option>

                                        <!-- 14 ----------------------------------------------------->
                                        <?php }}elseif($row['industry_name'] == 14){ ?>
                                                 <option value="<?php echo $row['industry_name']; ?>" selected><?php echo $arr_industry_name[intval($row['industry_name'])]; ?></option>
                                                <?
                                            $stmt14 = $connect->prepare("select * from industry_names where id != 14");
                                            $stmt14->execute();
                                            $industries14 = $stmt14->fetchAll();
                                        foreach($industries14 as $ind14){
                                        ?>
                                        <option value="<?php echo $ind14['id']; ?>"><?php echo $ind14['name']; ?></option>

                                        <!-- 15----------------------------------------------------->
                                        <?php }}elseif($row['industry_name'] == 15){ ?>
                                                 <option value="<?php echo $row['industry_name']; ?>" selected><?php echo $arr_industry_name[intval($row['industry_name'])]; ?></option>
                                                <?
                                            $stmt15 = $connect->prepare("select * from industry_names where id != 15");
                                            $stmt15->execute();
                                            $industries15 = $stmt15->fetchAll();
                                        foreach($industries15 as $ind15){
                                        ?>
                                        <option value="<?php echo $ind15['id']; ?>"><?php echo $ind15['name']; ?></option>

                                        <!-- 16 ----------------------------------------------------->
                                        <?php }}elseif($row['industry_name'] == 16){ ?>
                                                 <option value="<?php echo $row['industry_name']; ?>" selected><?php echo $arr_industry_name[intval($row['industry_name'])]; ?></option>
                                                <?
                                            $stmt16 = $connect->prepare("select * from industry_names where id != 16");
                                            $stmt16->execute();
                                            $industries16 = $stmt16->fetchAll();
                                        foreach($industries16 as $ind16){
                                        ?>
                                        <option value="<?php echo $ind16['id']; ?>"><?php echo $ind16['name']; ?></option>
  
                                        <!-- 17 ----------------------------------------------------->
                                        <?php }}elseif($row['industry_name'] == 17){ ?>
                                                 <option value="<?php echo $row['industry_name']; ?>" selected><?php echo $arr_industry_name[intval($row['industry_name'])]; ?></option>
                                                <?
                                            $stmt17 = $connect->prepare("select * from industry_names where id != 17");
                                            $stmt17->execute();
                                            $industries17 = $stmt17->fetchAll();
                                        foreach($industries17 as $ind17){
                                        ?>
                                        <option value="<?php echo $ind17['id']; ?>"><?php echo $ind17['name']; ?></option>
        
                                        <!-- 18 ----------------------------------------------------->
                                        <?php }}elseif($row['industry_name'] == 18){ ?>
                                                 <option value="<?php echo $row['industry_name']; ?>" selected><?php echo $arr_industry_name[intval($row['industry_name'])]; ?></option>
                                                <?
                                            $stmt18 = $connect->prepare("select * from industry_names where id != 18");
                                            $stmt18->execute();
                                            $industries18 = $stmt18->fetchAll();
                                        foreach($industries18 as $ind18){
                                        ?>
                                        <option value="<?php echo $ind18['id']; ?>"><?php echo $ind18['name']; ?></option>

                                        <!-- 19 ----------------------------------------------------->
                                        <?php }}elseif($row['industry_name'] == 19){ ?>
                                                 <option value="<?php echo $row['industry_name']; ?>" selected><?php echo $arr_industry_name[intval($row['industry_name'])]; ?></option>
                                                <?
                                            $stmt19 = $connect->prepare("select * from industry_names where id != 19");
                                            $stmt19->execute();
                                            $industries19 = $stmt19->fetchAll();
                                        foreach($industries19 as $ind19){
                                        ?>
                                        <option value="<?php echo $ind19['id']; ?>"><?php echo $ind19['name']; ?></option>

                                        <!-- 20 ----------------------------------------------------->
                                        <?php }}elseif($row['industry_name'] == 20){ ?>
                                                 <option value="<?php echo $row['industry_name']; ?>" selected><?php echo $arr_industry_name[intval($row['industry_name'])]; ?></option>
                                                <?
                                            $stmt20 = $connect->prepare("select * from industry_names where id != 20");
                                            $stmt20->execute();
                                            $industries20 = $stmt20->fetchAll();
                                        foreach($industries20 as $ind20){
                                        ?>
                                        <option value="<?php echo $ind20['id']; ?>"><?php echo $ind20['name']; ?></option>

                                        <!-- 21 ----------------------------------------------------->
                                        <?php }}elseif($row['industry_name'] == 21){ ?>
                                                 <option value="<?php echo $row['industry_name']; ?>" selected><?php echo $arr_industry_name[intval($row['industry_name'])]; ?></option>
                                                <?
                                            $stmt21 = $connect->prepare("select * from industry_names where id != 21");
                                            $stmt21->execute();
                                            $industries21 = $stmt21->fetchAll();
                                        foreach($industries21 as $ind21){
                                        ?>
                                        <option value="<?php echo $ind21['id']; ?>"><?php echo $ind21['name']; ?></option>

                                        <!-- 22 ----------------------------------------------------->
                                        <?php }}elseif($row['industry_name'] == 22){ ?>
                                                 <option value="<?php echo $row['industry_name']; ?>" selected><?php echo $arr_industry_name[intval($row['industry_name'])]; ?></option>
                                                <?
                                            $stmt22 = $connect->prepare("select * from industry_names where id != 22");
                                            $stmt22->execute();
                                            $industries22 = $stmt22->fetchAll();
                                        foreach($industries22 as $ind22){
                                        ?>
                                        <option value="<?php echo $ind22['id']; ?>"><?php echo $ind22['name']; ?></option>

                                        <!-- 23 ----------------------------------------------------->
                                        <?php }}elseif($row['industry_name'] == 23){ ?>
                                                 <option value="<?php echo $row['industry_name']; ?>" selected><?php echo $arr_industry_name[intval($row['industry_name'])]; ?></option>
                                                <?
                                            $stmt23 = $connect->prepare("select * from industry_names where id != 23");
                                            $stmt23->execute();
                                            $industries23 = $stmt23->fetchAll();
                                        foreach($industries23 as $ind23){
                                        ?>
                                        <option value="<?php echo $ind23['id']; ?>"><?php echo $ind23['name']; ?></option>

                                        <!-- 24 ----------------------------------------------------->
                                        <?php }}elseif($row['industry_name'] == 24){ ?>
                                                 <option value="<?php echo $row['industry_name']; ?>" selected><?php echo $arr_industry_name[intval($row['industry_name'])]; ?></option>
                                                <?
                                            $stmt24 = $connect->prepare("select * from industry_names where id != 24");
                                            $stmt24->execute();
                                            $industries24 = $stmt24->fetchAll();
                                        foreach($industries24 as $ind24){
                                        ?>
                                        <option value="<?php echo $ind24['id']; ?>"><?php echo $ind24['name']; ?></option>

                                        <!-- 25 ----------------------------------------------------->
                                        <?php }}elseif($row['industry_name'] == 25){ ?>
                                                 <option value="<?php echo $row['industry_name']; ?>" selected><?php echo $arr_industry_name[intval($row['industry_name'])]; ?></option>
                                                <?
                                            $stmt25 = $connect->prepare("select * from industry_names where id != 25");
                                            $stmt25->execute();
                                            $industries25 = $stmt25->fetchAll();
                                        foreach($industries25 as $ind25){
                                        ?>
                                        <option value="<?php echo $ind25['id']; ?>"><?php echo $ind25['name']; ?></option>

                                        <!-- 26 ----------------------------------------------------->
                                        <?php }}else { ?>
                                                 <option value="<?php echo $row['industry_name']; ?>" selected><?php echo $arr_industry_name[intval($row['industry_name'])]; ?></option>
                                                <?
                                            $stmt26 = $connect->prepare("select * from industry_names where id != 26");
                                            $stmt26->execute();
                                            $industries26 = $stmt26->fetchAll();
                                        foreach($industries26 as $ind26){
                                        ?>
                                        <option value="<?php echo $ind26['id']; ?>"><?php echo $ind26['name']; ?></option>
                   
                                        <?php }} ?> 
                                         
                                    </select>

                                    <div class="alert alert-danger custom-alert"> الرجاء اختيار مسمى الصناعات </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="col-md-4">
                                    <label>عقد ترخيص</label> <span class="astrik">*</span>
                                </div>
                                <div class="col-md-8">
                                <select class="form-control" name="contract_type" id="contract_type" required >
                                    <option value="0">الرجاء اختيار عقد الترخيص</option>
                                    <?php if ($row['contract_type'] == 1) { ?>
                                    <option value="1" selected>متعاقد</option>
                                    <option value="2">غير متعاقد</option>
                                    <?php }else { ?>
                                    <option value="1">متعاقد</option>
                                    <option value="2" selected>غير متعاقد</option>
                                    <?php }?>
                                    
                               </select>

                                    <div class="alert alert-danger custom-alert"> الرجاء اختيار عقد الترخيص </div>
                                </div>

                            </div>
                            <div class="col-md-6" id="cdate">
                                <div class="col-md-4">
                                    <label>تاريخ تحرير العقد</label> <span class="astrik">*</span>
                                </div>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" name="contract_date" id="contract_date" placeholder="اختر تاريخ تحرير العقد من القائمة التي تظهر عند الضغط" readonly  value="<?php echo $row['contract_date'];?>" />
                                    <div class="alert alert-danger custom-alert"> الرجاء اختيار التاريخ من قائمة التاريخ التي تظهر لك </div>
                                    
                                </div>

                            </div>
                </div>
            </div>
            
                </div>
            
    </div>
    
             <div class="panel panel-primary text-center">
                <div class="panel-heading">بيانات حساب المنشأة</div>
                <div class="panel-body">
                    
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-6">
                            
                            <div class="col-md-4">
                            <label>مسمى المنطقة</label> <span class="astrik">*</span> </div>
                                <div class="col-md-8">
                                    <select class="form-control" name="city" id="city" required >
                                             <?php if ($row['area'] == 1){?>
                                            <option value="1" selected>أجا</option>
                                            <option value="2">الجمالية</option>
                                            <option value="3">السنبلاوين</option>
                                            <option value="4">الكردي</option>
                                            <option value="5">المطرية</option>
                                            <option value="6">المنزلة</option>
                                            <option value="7">المنصورة</option>
                                            <option value="8">بلقاس</option>
                                            <option value="9">بني عبيد</option>
                                            <option value="10">تمي الأمديد</option>
                                            <option value="11">جمصة</option>
                                            <option value="12">دكرنس</option>
                                            <option value="13">شربين</option>
                                            <option value="14">طلخا</option>
                                            <option value="15">محلة الدمنة</option>
                                            <option value="16">منية النصر</option>
                                            <option value="17">ميت سلسيل</option>
                                            <option value="18">ميت غمر</option>
                                            <option value="19">نبروه</option>
                                            <?php }elseif ($row['area'] == 2) { ?>
                                            <option value="1">أجا</option>
                                            <option value="2" selected>الجمالية</option>
                                            <option value="3">السنبلاوين</option>
                                            <option value="4">الكردي</option>
                                            <option value="5">المطرية</option>
                                            <option value="6">المنزلة</option>
                                            <option value="7">المنصورة</option>
                                            <option value="8">بلقاس</option>
                                            <option value="9">بني عبيد</option>
                                            <option value="10">تمي الأمديد</option>
                                            <option value="11">جمصة</option>
                                            <option value="12">دكرنس</option>
                                            <option value="13">شربين</option>
                                            <option value="14">طلخا</option>
                                            <option value="15">محلة الدمنة</option>
                                            <option value="16">منية النصر</option>
                                            <option value="17">ميت سلسيل</option>
                                            <option value="18">ميت غمر</option>
                                            <option value="19">نبروه</option>
            
                                            <?php }elseif ($row['area'] == 3) { ?>
                                            <option value="1">أجا</option>
                                            <option value="2">الجمالية</option>
                                            <option value="3" selected>السنبلاوين</option>
                                            <option value="4">الكردي</option>
                                            <option value="5">المطرية</option>
                                            <option value="6">المنزلة</option>
                                            <option value="7">المنصورة</option>
                                            <option value="8">بلقاس</option>
                                            <option value="9">بني عبيد</option>
                                            <option value="10">تمي الأمديد</option>
                                            <option value="11">جمصة</option>
                                            <option value="12">دكرنس</option>
                                            <option value="13">شربين</option>
                                            <option value="14">طلخا</option>
                                            <option value="15">محلة الدمنة</option>
                                            <option value="16">منية النصر</option>
                                            <option value="17">ميت سلسيل</option>
                                            <option value="18">ميت غمر</option>
                                            <option value="19">نبروه</option>
                                            <?php }elseif ($row['area'] == 4) { ?>
                                            <option value="1">أجا</option>
                                            <option value="2">الجمالية</option>
                                            <option value="3">السنبلاوين</option>
                                            <option value="4" selected>الكردي</option>
                                            <option value="5">المطرية</option>
                                            <option value="6">المنزلة</option>
                                            <option value="7">المنصورة</option>
                                            <option value="8">بلقاس</option>
                                            <option value="9">بني عبيد</option>
                                            <option value="10">تمي الأمديد</option>
                                            <option value="11">جمصة</option>
                                            <option value="12">دكرنس</option>
                                            <option value="13">شربين</option>
                                            <option value="14">طلخا</option>
                                            <option value="15">محلة الدمنة</option>
                                            <option value="16">منية النصر</option>
                                            <option value="17">ميت سلسيل</option>
                                            <option value="18">ميت غمر</option>
                                            <option value="19">نبروه</option>
                                            <?php }elseif ($row['area'] == 5) { ?>
                                            <option value="1">أجا</option>
                                            <option value="2">الجمالية</option>
                                            <option value="3">السنبلاوين</option>
                                            <option value="4">الكردي</option>
                                            <option value="5" selected>المطرية</option>
                                            <option value="6">المنزلة</option>
                                            <option value="7">المنصورة</option>
                                            <option value="8">بلقاس</option>
                                            <option value="9">بني عبيد</option>
                                            <option value="10">تمي الأمديد</option>
                                            <option value="11">جمصة</option>
                                            <option value="12">دكرنس</option>
                                            <option value="13">شربين</option>
                                            <option value="14">طلخا</option>
                                            <option value="15">محلة الدمنة</option>
                                            <option value="16">منية النصر</option>
                                            <option value="17">ميت سلسيل</option>
                                            <option value="18">ميت غمر</option>
                                            <option value="19">نبروه</option>
                                            <?php }elseif ($row['area'] == 6) { ?>
                                            <option value="1">أجا</option>
                                            <option value="2">الجمالية</option>
                                            <option value="3">السنبلاوين</option>
                                            <option value="4">الكردي</option>
                                            <option value="5">المطرية</option>
                                            <option value="6" selected>المنزلة</option>
                                            <option value="7">المنصورة</option>
                                            <option value="8">بلقاس</option>
                                            <option value="9">بني عبيد</option>
                                            <option value="10">تمي الأمديد</option>
                                            <option value="11">جمصة</option>
                                            <option value="12">دكرنس</option>
                                            <option value="13">شربين</option>
                                            <option value="14">طلخا</option>
                                            <option value="15">محلة الدمنة</option>
                                            <option value="16">منية النصر</option>
                                            <option value="17">ميت سلسيل</option>
                                            <option value="18">ميت غمر</option>
                                            <option value="19">نبروه</option>
                                            <?php }elseif ($row['area'] == 7) { ?>
                                            <option value="1">أجا</option>
                                            <option value="2">الجمالية</option>
                                            <option value="3">السنبلاوين</option>
                                            <option value="4">الكردي</option>
                                            <option value="5">المطرية</option>
                                            <option value="6">المنزلة</option>
                                            <option value="7" selected>المنصورة</option>
                                            <option value="8">بلقاس</option>
                                            <option value="9">بني عبيد</option>
                                            <option value="10">تمي الأمديد</option>
                                            <option value="11">جمصة</option>
                                            <option value="12">دكرنس</option>
                                            <option value="13">شربين</option>
                                            <option value="14">طلخا</option>
                                            <option value="15">محلة الدمنة</option>
                                            <option value="16">منية النصر</option>
                                            <option value="17">ميت سلسيل</option>
                                            <option value="18">ميت غمر</option>
                                            <option value="19">نبروه</option>
                                            <?php }elseif ($row['area'] == 8) { ?>
                                            <option value="1">أجا</option>
                                            <option value="2">الجمالية</option>
                                            <option value="3">السنبلاوين</option>
                                            <option value="4">الكردي</option>
                                            <option value="5">المطرية</option>
                                            <option value="6">المنزلة</option>
                                            <option value="7">المنصورة</option>
                                            <option value="8" selected>بلقاس</option>
                                            <option value="9">بني عبيد</option>
                                            <option value="10">تمي الأمديد</option>
                                            <option value="11">جمصة</option>
                                            <option value="12">دكرنس</option>
                                            <option value="13">شربين</option>
                                            <option value="14">طلخا</option>
                                            <option value="15">محلة الدمنة</option>
                                            <option value="16">منية النصر</option>
                                            <option value="17">ميت سلسيل</option>
                                            <option value="18">ميت غمر</option>
                                            <option value="19">نبروه</option>
                                            <?php }elseif ($row['area'] == 9) { ?>
                                            <option value="1">أجا</option>
                                            <option value="2">الجمالية</option>
                                            <option value="3">السنبلاوين</option>
                                            <option value="4">الكردي</option>
                                            <option value="5">المطرية</option>
                                            <option value="6">المنزلة</option>
                                            <option value="7">المنصورة</option>
                                            <option value="8">بلقاس</option>
                                            <option value="9" selected>بني عبيد</option>
                                            <option value="10">تمي الأمديد</option>
                                            <option value="11">جمصة</option>
                                            <option value="12">دكرنس</option>
                                            <option value="13">شربين</option>
                                            <option value="14">طلخا</option>
                                            <option value="15">محلة الدمنة</option>
                                            <option value="16">منية النصر</option>
                                            <option value="17">ميت سلسيل</option>
                                            <option value="18">ميت غمر</option>
                                            <option value="19">نبروه</option>
                                            <?php }elseif ($row['area'] == 10) { ?>
                                            <option value="1">أجا</option>
                                            <option value="2">الجمالية</option>
                                            <option value="3">السنبلاوين</option>
                                            <option value="4">الكردي</option>
                                            <option value="5">المطرية</option>
                                            <option value="6">المنزلة</option>
                                            <option value="7">المنصورة</option>
                                            <option value="8">بلقاس</option>
                                            <option value="9">بني عبيد</option>
                                            <option value="10" selected>تمي الأمديد</option>
                                            <option value="11">جمصة</option>
                                            <option value="12">دكرنس</option>
                                            <option value="13">شربين</option>
                                            <option value="14">طلخا</option>
                                            <option value="15">محلة الدمنة</option>
                                            <option value="16">منية النصر</option>
                                            <option value="17">ميت سلسيل</option>
                                            <option value="18">ميت غمر</option>
                                            <option value="19">نبروه</option>
                                            <?php }elseif ($row['area'] == 11) { ?>
                                            <option value="1">أجا</option>
                                            <option value="2">الجمالية</option>
                                            <option value="3">السنبلاوين</option>
                                            <option value="4">الكردي</option>
                                            <option value="5">المطرية</option>
                                            <option value="6">المنزلة</option>
                                            <option value="7">المنصورة</option>
                                            <option value="8">بلقاس</option>
                                            <option value="9">بني عبيد</option>
                                            <option value="10">تمي الأمديد</option>
                                            <option value="11" selected>جمصة</option>
                                            <option value="12">دكرنس</option>
                                            <option value="13">شربين</option>
                                            <option value="14">طلخا</option>
                                            <option value="15">محلة الدمنة</option>
                                            <option value="16">منية النصر</option>
                                            <option value="17">ميت سلسيل</option>
                                            <option value="18">ميت غمر</option>
                                            <option value="19">نبروه</option>
                                            <?php }elseif ($row['area'] == 12) { ?>
                                            <option value="1">أجا</option>
                                            <option value="2">الجمالية</option>
                                            <option value="3">السنبلاوين</option>
                                            <option value="4">الكردي</option>
                                            <option value="5">المطرية</option>
                                            <option value="6">المنزلة</option>
                                            <option value="7">المنصورة</option>
                                            <option value="8">بلقاس</option>
                                            <option value="9">بني عبيد</option>
                                            <option value="10">تمي الأمديد</option>
                                            <option value="11">جمصة</option>
                                            <option value="12" selected>دكرنس</option>
                                            <option value="13">شربين</option>
                                            <option value="14">طلخا</option>
                                            <option value="15">محلة الدمنة</option>
                                            <option value="16">منية النصر</option>
                                            <option value="17">ميت سلسيل</option>
                                            <option value="18">ميت غمر</option>
                                            <option value="19">نبروه</option>
                                            <?php }elseif ($row['area'] == 13) { ?>
                                            <option value="1">أجا</option>
                                            <option value="2">الجمالية</option>
                                            <option value="3">السنبلاوين</option>
                                            <option value="4">الكردي</option>
                                            <option value="5">المطرية</option>
                                            <option value="6">المنزلة</option>
                                            <option value="7">المنصورة</option>
                                            <option value="8">بلقاس</option>
                                            <option value="9">بني عبيد</option>
                                            <option value="10">تمي الأمديد</option>
                                            <option value="11">جمصة</option>
                                            <option value="12">دكرنس</option>
                                            <option value="13" selected>شربين</option>
                                            <option value="14">طلخا</option>
                                            <option value="15">محلة الدمنة</option>
                                            <option value="16">منية النصر</option>
                                            <option value="17">ميت سلسيل</option>
                                            <option value="18">ميت غمر</option>
                                            <option value="19">نبروه</option>
                                            <?php }elseif ($row['area'] == 14) { ?>
                                            <option value="1">أجا</option>
                                            <option value="2">الجمالية</option>
                                            <option value="3">السنبلاوين</option>
                                            <option value="4">الكردي</option>
                                            <option value="5">المطرية</option>
                                            <option value="6">المنزلة</option>
                                            <option value="7">المنصورة</option>
                                            <option value="8">بلقاس</option>
                                            <option value="9">بني عبيد</option>
                                            <option value="10">تمي الأمديد</option>
                                            <option value="11">جمصة</option>
                                            <option value="12">دكرنس</option>
                                            <option value="13">شربين</option>
                                            <option value="14" selected>طلخا</option>
                                            <option value="15">محلة الدمنة</option>
                                            <option value="16">منية النصر</option>
                                            <option value="17">ميت سلسيل</option>
                                            <option value="18">ميت غمر</option>
                                            <option value="19">نبروه</option>
                                            <?php }elseif ($row['area'] == 15) { ?>
                                            <option value="1">أجا</option>
                                            <option value="2">الجمالية</option>
                                            <option value="3">السنبلاوين</option>
                                            <option value="4">الكردي</option>
                                            <option value="5">المطرية</option>
                                            <option value="6">المنزلة</option>
                                            <option value="7">المنصورة</option>
                                            <option value="8">بلقاس</option>
                                            <option value="9">بني عبيد</option>
                                            <option value="10">تمي الأمديد</option>
                                            <option value="11">جمصة</option>
                                            <option value="12">دكرنس</option>
                                            <option value="13">شربين</option>
                                            <option value="14">طلخا</option>
                                            <option value="15" selected>محلة الدمنة</option>
                                            <option value="16">منية النصر</option>
                                            <option value="17">ميت سلسيل</option>
                                            <option value="18">ميت غمر</option>
                                            <option value="19">نبروه</option>
                                            <?php }elseif ($row['area'] == 16) { ?>
                                            <option value="1">أجا</option>
                                            <option value="2">الجمالية</option>
                                            <option value="3">السنبلاوين</option>
                                            <option value="4">الكردي</option>
                                            <option value="5">المطرية</option>
                                            <option value="6">المنزلة</option>
                                            <option value="7">المنصورة</option>
                                            <option value="8">بلقاس</option>
                                            <option value="9">بني عبيد</option>
                                            <option value="10">تمي الأمديد</option>
                                            <option value="11">جمصة</option>
                                            <option value="12">دكرنس</option>
                                            <option value="13">شربين</option>
                                            <option value="14">طلخا</option>
                                            <option value="15">محلة الدمنة</option>
                                            <option value="16" selected>منية النصر</option>
                                            <option value="17">ميت سلسيل</option>
                                            <option value="18">ميت غمر</option>
                                            <option value="19">نبروه</option>
                                            <?php }elseif ($row['area'] == 17) { ?>
                                            <option value="1">أجا</option>
                                            <option value="2">الجمالية</option>
                                            <option value="3">السنبلاوين</option>
                                            <option value="4">الكردي</option>
                                            <option value="5">المطرية</option>
                                            <option value="6">المنزلة</option>
                                            <option value="7">المنصورة</option>
                                            <option value="8">بلقاس</option>
                                            <option value="9">بني عبيد</option>
                                            <option value="10">تمي الأمديد</option>
                                            <option value="11">جمصة</option>
                                            <option value="12">دكرنس</option>
                                            <option value="13">شربين</option>
                                            <option value="14">طلخا</option>
                                            <option value="15">محلة الدمنة</option>
                                            <option value="16">منية النصر</option>
                                            <option value="17" selected>ميت سلسيل</option>
                                            <option value="18">ميت غمر</option>
                                            <option value="19">نبروه</option>
                                            
                                            <?php }elseif ($row['area'] == 18) { ?>
                                            <option value="1">أجا</option>
                                            <option value="2">الجمالية</option>
                                            <option value="3">السنبلاوين</option>
                                            <option value="4">الكردي</option>
                                            <option value="5">المطرية</option>
                                            <option value="6">المنزلة</option>
                                            <option value="7">المنصورة</option>
                                            <option value="8">بلقاس</option>
                                            <option value="9">بني عبيد</option>
                                            <option value="10">تمي الأمديد</option>
                                            <option value="11">جمصة</option>
                                            <option value="12">دكرنس</option>
                                            <option value="13">شربين</option>
                                            <option value="14">طلخا</option>
                                            <option value="15">محلة الدمنة</option>
                                            <option value="16">منية النصر</option>
                                            <option value="17">ميت سلسيل</option>
                                            <option value="18" selected>ميت غمر</option>
                                            <option value="19">نبروه</option>
                                            
                                            
                                            <?php }else { ?>
                                            <option value="1">أجا</option>
                                            <option value="2">الجمالية</option>
                                            <option value="3">السنبلاوين</option>
                                            <option value="4">الكردي</option>
                                            <option value="5">المطرية</option>
                                            <option value="6">المنزلة</option>
                                            <option value="7">المنصورة</option>
                                            <option value="8">بلقاس</option>
                                            <option value="9">بني عبيد</option>
                                            <option value="10">تمي الأمديد</option>
                                            <option value="11">جمصة</option>
                                            <option value="12">دكرنس</option>
                                            <option value="13">شربين</option>
                                            <option value="14">طلخا</option>
                                            <option value="15">محلة الدمنة</option>
                                            <option value="16">منية النصر</option>
                                            <option value="17">ميت سلسيل</option>
                                            <option value="18">ميت غمر</option>
                                            <option value="19" selected>نبروه</option>
                                            <?php }?>
                                            
                                    </select>
                                    <div class="alert alert-danger custom-alert"> الرجاء اختيار المنطقة </div>
                            
                            </div>
                            </div>
                            
                            <div class="col-md-6">
                                <div class="col-md-4">
                                    <label>نوع الحساب</label> <span class="astrik">*</span>
                                </div>
                                <div class="col-md-8">
                                 <select class="form-control" name="account_type" id="account_type"  required>
                                        <?php if ($row['account_type'] == 1){?>
                                        <option value="1" selected>منزلي</option>
                                        <option value="2">قائم عمارة </option>
                                        <option value="8"> تجاري </option>
                                        <option value="10"> حكومة </option>
                                        <option value="22"> خدمي </option>
                                        <option value="23"> صناعي </option>
                                        <option value="24"> سياحي </option>
                                        <option value="25"> أخرى </option>
                                        <option value="40"> ممارسة منزلي </option>
                                        <option value="41"> ممارسة 2 غرفة </option>
                                        <option value="42"> ممارسة 3 غرفة </option>
                                        <option value="43"> ممارسة </option>
                                        <option value="44"> ممارسة تجاري </option>
                                        <option value="46"> ممارسة حكومي </option>
                                        <option value="50"> ممارسة </option>
                                        <option value="51"> ممارسة صرف صحي </option>
                                        <option value="52"> ممارسة صرف صحي </option>
                                        <option value="53"> ممارسة صرف صحي </option>
                                        <option value="54"> ممارسة صرف صحي </option>
                                        <option value="55"> ممارسة صرف صحي </option>
                                        <option value="56"> ممارسة صرف صحي </option>
                                        <option value="57"> ممارسة صرف صحي </option>
                                        <option value="58"> ممارسة صرف مغسلة </option>
                                        <option value="59"> ممارسة صرف صحي </option>
                                        <?php }elseif ($row['account_type'] == 2){?>
                                        <option value="1">منزلي</option>
                                        <option value="2" selected>قائم عمارة </option>
                                        <option value="8"> تجاري </option>
                                        <option value="10"> حكومة </option>
                                        <option value="22"> خدمي </option>
                                        <option value="23"> صناعي </option>
                                        <option value="24"> سياحي </option>
                                        <option value="25"> أخرى </option>
                                        <option value="40"> ممارسة منزلي </option>
                                        <option value="41"> ممارسة 2 غرفة </option>
                                        <option value="42"> ممارسة 3 غرفة </option>
                                        <option value="43"> ممارسة </option>
                                        <option value="44"> ممارسة تجاري </option>
                                        <option value="46"> ممارسة حكومي </option>
                                        <option value="50"> ممارسة </option>
                                        <option value="51"> ممارسة صرف صحي </option>
                                        <option value="52"> ممارسة صرف صحي </option>
                                        <option value="53"> ممارسة صرف صحي </option>
                                        <option value="54"> ممارسة صرف صحي </option>
                                        <option value="55"> ممارسة صرف صحي </option>
                                        <option value="56"> ممارسة صرف صحي </option>
                                        <option value="57"> ممارسة صرف صحي </option>
                                        <option value="58"> ممارسة صرف مغسلة </option>
                                        <option value="59"> ممارسة صرف صحي </option>
                                            <?php }elseif ($row['account_type'] == 8){?>
                                        <option value="1">منزلي</option>
                                        <option value="2">قائم عمارة </option>
                                        <option value="8" selected> تجاري </option>
                                        <option value="10"> حكومة </option>
                                        <option value="22"> خدمي </option>
                                        <option value="23"> صناعي </option>
                                        <option value="24"> سياحي </option>
                                        <option value="25"> أخرى </option>
                                        <option value="40"> ممارسة منزلي </option>
                                        <option value="41"> ممارسة 2 غرفة </option>
                                        <option value="42"> ممارسة 3 غرفة </option>
                                        <option value="43"> ممارسة </option>
                                        <option value="44"> ممارسة تجاري </option>
                                        <option value="46"> ممارسة حكومي </option>
                                        <option value="50"> ممارسة </option>
                                        <option value="51"> ممارسة صرف صحي </option>
                                        <option value="52"> ممارسة صرف صحي </option>
                                        <option value="53"> ممارسة صرف صحي </option>
                                        <option value="54"> ممارسة صرف صحي </option>
                                        <option value="55"> ممارسة صرف صحي </option>
                                        <option value="56"> ممارسة صرف صحي </option>
                                        <option value="57"> ممارسة صرف صحي </option>
                                        <option value="58"> ممارسة صرف مغسلة </option>
                                        <option value="59"> ممارسة صرف صحي </option>
                                        <?php }elseif ($row['account_type'] == 10){?>
                                        <option value="1">منزلي</option>
                                        <option value="2">قائم عمارة </option>
                                        <option value="8"> تجاري </option>
                                        <option value="10" selected> حكومة </option>
                                        <option value="22"> خدمي </option>
                                        <option value="23"> صناعي </option>
                                        <option value="24"> سياحي </option>
                                        <option value="25"> أخرى </option>
                                        <option value="40"> ممارسة منزلي </option>
                                        <option value="41"> ممارسة 2 غرفة </option>
                                        <option value="42"> ممارسة 3 غرفة </option>
                                        <option value="43"> ممارسة </option>
                                        <option value="44"> ممارسة تجاري </option>
                                        <option value="46"> ممارسة حكومي </option>
                                        <option value="50"> ممارسة </option>
                                        <option value="51"> ممارسة صرف صحي </option>
                                        <option value="52"> ممارسة صرف صحي </option>
                                        <option value="53"> ممارسة صرف صحي </option>
                                        <option value="54"> ممارسة صرف صحي </option>
                                        <option value="55"> ممارسة صرف صحي </option>
                                        <option value="56"> ممارسة صرف صحي </option>
                                        <option value="57"> ممارسة صرف صحي </option>
                                        <option value="58"> ممارسة صرف مغسلة </option>
                                        <option value="59"> ممارسة صرف صحي </option>
                                            <?php }elseif ($row['account_type'] == 22){?>
                                        <option value="1">منزلي</option>
                                        <option value="2">قائم عمارة </option>
                                        <option value="8"> تجاري </option>
                                        <option value="10"> حكومة </option>
                                        <option value="22" selected> خدمي </option>
                                        <option value="23"> صناعي </option>
                                        <option value="24"> سياحي </option>
                                        <option value="25"> أخرى </option>
                                        <option value="40"> ممارسة منزلي </option>
                                        <option value="41"> ممارسة 2 غرفة </option>
                                        <option value="42"> ممارسة 3 غرفة </option>
                                        <option value="43"> ممارسة </option>
                                        <option value="44"> ممارسة تجاري </option>
                                        <option value="46"> ممارسة حكومي </option>
                                        <option value="50"> ممارسة </option>
                                        <option value="51"> ممارسة صرف صحي </option>
                                        <option value="52"> ممارسة صرف صحي </option>
                                        <option value="53"> ممارسة صرف صحي </option>
                                        <option value="54"> ممارسة صرف صحي </option>
                                        <option value="55"> ممارسة صرف صحي </option>
                                        <option value="56"> ممارسة صرف صحي </option>
                                        <option value="57"> ممارسة صرف صحي </option>
                                        <option value="58"> ممارسة صرف مغسلة </option>
                                        <option value="59"> ممارسة صرف صحي </option> 
                                         <?php }elseif ($row['account_type'] == 23){?>
                                        <option value="1">منزلي</option>
                                        <option value="2">قائم عمارة </option>
                                        <option value="8"> تجاري </option>
                                        <option value="10"> حكومة </option>
                                        <option value="22"> خدمي </option>
                                        <option value="23" selected> صناعي </option>
                                        <option value="24"> سياحي </option>
                                        <option value="25"> أخرى </option>
                                        <option value="40"> ممارسة منزلي </option>
                                        <option value="41"> ممارسة 2 غرفة </option>
                                        <option value="42"> ممارسة 3 غرفة </option>
                                        <option value="43"> ممارسة </option>
                                        <option value="44"> ممارسة تجاري </option>
                                        <option value="46"> ممارسة حكومي </option>
                                        <option value="50"> ممارسة </option>
                                        <option value="51"> ممارسة صرف صحي </option>
                                        <option value="52"> ممارسة صرف صحي </option>
                                        <option value="53"> ممارسة صرف صحي </option>
                                        <option value="54"> ممارسة صرف صحي </option>
                                        <option value="55"> ممارسة صرف صحي </option>
                                        <option value="56"> ممارسة صرف صحي </option>
                                        <option value="57"> ممارسة صرف صحي </option>
                                        <option value="58"> ممارسة صرف مغسلة </option>
                                        <option value="59"> ممارسة صرف صحي </option>  
                                         <?php }elseif ($row['account_type'] == 24){?>
                                        <option value="1">منزلي</option>
                                        <option value="2">قائم عمارة </option>
                                        <option value="8"> تجاري </option>
                                        <option value="10"> حكومة </option>
                                        <option value="22"> خدمي </option>
                                        <option value="23"> صناعي </option>
                                        <option value="24" selected> سياحي </option>
                                        <option value="25"> أخرى </option>
                                        <option value="40"> ممارسة منزلي </option>
                                        <option value="41"> ممارسة 2 غرفة </option>
                                        <option value="42"> ممارسة 3 غرفة </option>
                                        <option value="43"> ممارسة </option>
                                        <option value="44"> ممارسة تجاري </option>
                                        <option value="46"> ممارسة حكومي </option>
                                        <option value="50"> ممارسة </option>
                                        <option value="51"> ممارسة صرف صحي </option>
                                        <option value="52"> ممارسة صرف صحي </option>
                                        <option value="53"> ممارسة صرف صحي </option>
                                        <option value="54"> ممارسة صرف صحي </option>
                                        <option value="55"> ممارسة صرف صحي </option>
                                        <option value="56"> ممارسة صرف صحي </option>
                                        <option value="57"> ممارسة صرف صحي </option>
                                        <option value="58"> ممارسة صرف مغسلة </option>
                                        <option value="59"> ممارسة صرف صحي </option>
                                         <?php }elseif ($row['account_type'] == 25){?>
                                        <option value="1">منزلي</option>
                                        <option value="2">قائم عمارة </option>
                                        <option value="8"> تجاري </option>
                                        <option value="10"> حكومة </option>
                                        <option value="22"> خدمي </option>
                                        <option value="23"> صناعي </option>
                                        <option value="24"> سياحي </option>
                                        <option value="25" selected> أخرى </option>
                                        <option value="40"> ممارسة منزلي </option>
                                        <option value="41"> ممارسة 2 غرفة </option>
                                        <option value="42"> ممارسة 3 غرفة </option>
                                        <option value="43"> ممارسة </option>
                                        <option value="44"> ممارسة تجاري </option>
                                        <option value="46"> ممارسة حكومي </option>
                                        <option value="50"> ممارسة </option>
                                        <option value="51"> ممارسة صرف صحي </option>
                                        <option value="52"> ممارسة صرف صحي </option>
                                        <option value="53"> ممارسة صرف صحي </option>
                                        <option value="54"> ممارسة صرف صحي </option>
                                        <option value="55"> ممارسة صرف صحي </option>
                                        <option value="56"> ممارسة صرف صحي </option>
                                        <option value="57"> ممارسة صرف صحي </option>
                                        <option value="58"> ممارسة صرف مغسلة </option>
                                        <option value="59"> ممارسة صرف صحي </option>
                                         <?php }elseif ($row['account_type'] == 40){?>
                                        <option value="1">منزلي</option>
                                        <option value="2">قائم عمارة </option>
                                        <option value="8"> تجاري </option>
                                        <option value="10"> حكومة </option>
                                        <option value="22"> خدمي </option>
                                        <option value="23"> صناعي </option>
                                        <option value="24"> سياحي </option>
                                        <option value="25"> أخرى </option>
                                        <option value="40" selected> ممارسة منزلي </option>
                                        <option value="41"> ممارسة 2 غرفة </option>
                                        <option value="42"> ممارسة 3 غرفة </option>
                                        <option value="43"> ممارسة </option>
                                        <option value="44"> ممارسة تجاري </option>
                                        <option value="46"> ممارسة حكومي </option>
                                        <option value="50"> ممارسة </option>
                                        <option value="51"> ممارسة صرف صحي </option>
                                        <option value="52"> ممارسة صرف صحي </option>
                                        <option value="53"> ممارسة صرف صحي </option>
                                        <option value="54"> ممارسة صرف صحي </option>
                                        <option value="55"> ممارسة صرف صحي </option>
                                        <option value="56"> ممارسة صرف صحي </option>
                                        <option value="57"> ممارسة صرف صحي </option>
                                        <option value="58"> ممارسة صرف مغسلة </option>
                                        <option value="59"> ممارسة صرف صحي </option> 
                                         <?php }elseif ($row['account_type'] == 41){?>
                                        <option value="1">منزلي</option>
                                        <option value="2">قائم عمارة </option>
                                        <option value="8"> تجاري </option>
                                        <option value="10"> حكومة </option>
                                        <option value="22"> خدمي </option>
                                        <option value="23"> صناعي </option>
                                        <option value="24"> سياحي </option>
                                        <option value="25"> أخرى </option>
                                        <option value="40"> ممارسة منزلي </option>
                                        <option value="41" selected> ممارسة 2 غرفة </option>
                                        <option value="42"> ممارسة 3 غرفة </option>
                                        <option value="43"> ممارسة </option>
                                        <option value="44"> ممارسة تجاري </option>
                                        <option value="46"> ممارسة حكومي </option>
                                        <option value="50"> ممارسة </option>
                                        <option value="51"> ممارسة صرف صحي </option>
                                        <option value="52"> ممارسة صرف صحي </option>
                                        <option value="53"> ممارسة صرف صحي </option>
                                        <option value="54"> ممارسة صرف صحي </option>
                                        <option value="55"> ممارسة صرف صحي </option>
                                        <option value="56"> ممارسة صرف صحي </option>
                                        <option value="57"> ممارسة صرف صحي </option>
                                        <option value="58"> ممارسة صرف مغسلة </option>
                                        <option value="59"> ممارسة صرف صحي </option>
                                        <?php }elseif ($row['account_type'] == 42){?>
                                        <option value="1">منزلي</option>
                                        <option value="2">قائم عمارة </option>
                                        <option value="8"> تجاري </option>
                                        <option value="10"> حكومة </option>
                                        <option value="22"> خدمي </option>
                                        <option value="23"> صناعي </option>
                                        <option value="24"> سياحي </option>
                                        <option value="25"> أخرى </option>
                                        <option value="40"> ممارسة منزلي </option>
                                        <option value="41"> ممارسة 2 غرفة </option>
                                        <option value="42" selected> ممارسة 3 غرفة </option>
                                        <option value="43"> ممارسة </option>
                                        <option value="44"> ممارسة تجاري </option>
                                        <option value="46"> ممارسة حكومي </option>
                                        <option value="50"> ممارسة </option>
                                        <option value="51"> ممارسة صرف صحي </option>
                                        <option value="52"> ممارسة صرف صحي </option>
                                        <option value="53"> ممارسة صرف صحي </option>
                                        <option value="54"> ممارسة صرف صحي </option>
                                        <option value="55"> ممارسة صرف صحي </option>
                                        <option value="56"> ممارسة صرف صحي </option>
                                        <option value="57"> ممارسة صرف صحي </option>
                                        <option value="58"> ممارسة صرف مغسلة </option>
                                        <option value="59"> ممارسة صرف صحي </option> 
                                        <?php }elseif ($row['account_type'] == 43){?>
                                        <option value="1">منزلي</option>
                                        <option value="2">قائم عمارة </option>
                                        <option value="8"> تجاري </option>
                                        <option value="10"> حكومة </option>
                                        <option value="22"> خدمي </option>
                                        <option value="23"> صناعي </option>
                                        <option value="24"> سياحي </option>
                                        <option value="25"> أخرى </option>
                                        <option value="40"> ممارسة منزلي </option>
                                        <option value="41"> ممارسة 2 غرفة </option>
                                        <option value="42"> ممارسة 3 غرفة </option>
                                        <option value="43" selected> ممارسة </option>
                                        <option value="44"> ممارسة تجاري </option>
                                        <option value="46"> ممارسة حكومي </option>
                                        <option value="50"> ممارسة </option>
                                        <option value="51"> ممارسة صرف صحي </option>
                                        <option value="52"> ممارسة صرف صحي </option>
                                        <option value="53"> ممارسة صرف صحي </option>
                                        <option value="54"> ممارسة صرف صحي </option>
                                        <option value="55"> ممارسة صرف صحي </option>
                                        <option value="56"> ممارسة صرف صحي </option>
                                        <option value="57"> ممارسة صرف صحي </option>
                                        <option value="58"> ممارسة صرف مغسلة </option>
                                        <option value="59"> ممارسة صرف صحي </option> 
                                        <?php }elseif ($row['account_type'] == 44){?>
                                        <option value="1">منزلي</option>
                                        <option value="2">قائم عمارة </option>
                                        <option value="8"> تجاري </option>
                                        <option value="10"> حكومة </option>
                                        <option value="22"> خدمي </option>
                                        <option value="23"> صناعي </option>
                                        <option value="24"> سياحي </option>
                                        <option value="25"> أخرى </option>
                                        <option value="40"> ممارسة منزلي </option>
                                        <option value="41"> ممارسة 2 غرفة </option>
                                        <option value="42"> ممارسة 3 غرفة </option>
                                        <option value="43"> ممارسة </option>
                                        <option value="44" selected> ممارسة تجاري </option>
                                        <option value="46"> ممارسة حكومي </option>
                                        <option value="50"> ممارسة </option>
                                        <option value="51"> ممارسة صرف صحي </option>
                                        <option value="52"> ممارسة صرف صحي </option>
                                        <option value="53"> ممارسة صرف صحي </option>
                                        <option value="54"> ممارسة صرف صحي </option>
                                        <option value="55"> ممارسة صرف صحي </option>
                                        <option value="56"> ممارسة صرف صحي </option>
                                        <option value="57"> ممارسة صرف صحي </option>
                                        <option value="58"> ممارسة صرف مغسلة </option>
                                        <option value="59"> ممارسة صرف صحي </option> 
                                        <?php }elseif ($row['account_type'] == 46){?>
                                        <option value="1">منزلي</option>
                                        <option value="2">قائم عمارة </option>
                                        <option value="8"> تجاري </option>
                                        <option value="10"> حكومة </option>
                                        <option value="22"> خدمي </option>
                                        <option value="23"> صناعي </option>
                                        <option value="24"> سياحي </option>
                                        <option value="25"> أخرى </option>
                                        <option value="40"> ممارسة منزلي </option>
                                        <option value="41"> ممارسة 2 غرفة </option>
                                        <option value="42"> ممارسة 3 غرفة </option>
                                        <option value="43"> ممارسة </option>
                                        <option value="44"> ممارسة تجاري </option>
                                        <option value="46" selected> ممارسة حكومي </option>
                                        <option value="50"> ممارسة </option>
                                        <option value="51"> ممارسة صرف صحي </option>
                                        <option value="52"> ممارسة صرف صحي </option>
                                        <option value="53"> ممارسة صرف صحي </option>
                                        <option value="54"> ممارسة صرف صحي </option>
                                        <option value="55"> ممارسة صرف صحي </option>
                                        <option value="56"> ممارسة صرف صحي </option>
                                        <option value="57"> ممارسة صرف صحي </option>
                                        <option value="58"> ممارسة صرف مغسلة </option>
                                        <option value="59"> ممارسة صرف صحي </option>
                                        <?php }elseif ($row['account_type'] == 50){?>
                                        <option value="1">منزلي</option>
                                        <option value="2">قائم عمارة </option>
                                        <option value="8"> تجاري </option>
                                        <option value="10"> حكومة </option>
                                        <option value="22"> خدمي </option>
                                        <option value="23"> صناعي </option>
                                        <option value="24"> سياحي </option>
                                        <option value="25"> أخرى </option>
                                        <option value="40"> ممارسة منزلي </option>
                                        <option value="41"> ممارسة 2 غرفة </option>
                                        <option value="42"> ممارسة 3 غرفة </option>
                                        <option value="43"> ممارسة </option>
                                        <option value="44"> ممارسة تجاري </option>
                                        <option value="46"> ممارسة حكومي </option>
                                        <option value="50" selected> ممارسة </option>
                                        <option value="51"> ممارسة صرف صحي </option>
                                        <option value="52"> ممارسة صرف صحي </option>
                                        <option value="53"> ممارسة صرف صحي </option>
                                        <option value="54"> ممارسة صرف صحي </option>
                                        <option value="55"> ممارسة صرف صحي </option>
                                        <option value="56"> ممارسة صرف صحي </option>
                                        <option value="57"> ممارسة صرف صحي </option>
                                        <option value="58"> ممارسة صرف مغسلة </option>
                                        <option value="59"> ممارسة صرف صحي </option>
                                        <?php }elseif ($row['account_type'] == 51){?>
                                        <option value="1">منزلي</option>
                                        <option value="2">قائم عمارة </option>
                                        <option value="8"> تجاري </option>
                                        <option value="10"> حكومة </option>
                                        <option value="22"> خدمي </option>
                                        <option value="23"> صناعي </option>
                                        <option value="24"> سياحي </option>
                                        <option value="25"> أخرى </option>
                                        <option value="40"> ممارسة منزلي </option>
                                        <option value="41"> ممارسة 2 غرفة </option>
                                        <option value="42"> ممارسة 3 غرفة </option>
                                        <option value="43"> ممارسة </option>
                                        <option value="44"> ممارسة تجاري </option>
                                        <option value="46"> ممارسة حكومي </option>
                                        <option value="50"> ممارسة </option>
                                        <option value="51" selected> ممارسة صرف صحي </option>
                                        <option value="52"> ممارسة صرف صحي </option>
                                        <option value="53"> ممارسة صرف صحي </option>
                                        <option value="54"> ممارسة صرف صحي </option>
                                        <option value="55"> ممارسة صرف صحي </option>
                                        <option value="56"> ممارسة صرف صحي </option>
                                        <option value="57"> ممارسة صرف صحي </option>
                                        <option value="58"> ممارسة صرف مغسلة </option>
                                        <option value="59"> ممارسة صرف صحي </option>
                                        <?php }elseif ($row['account_type'] == 52){?>
                                        <option value="1">منزلي</option>
                                        <option value="2">قائم عمارة </option>
                                        <option value="8"> تجاري </option>
                                        <option value="10"> حكومة </option>
                                        <option value="22"> خدمي </option>
                                        <option value="23"> صناعي </option>
                                        <option value="24"> سياحي </option>
                                        <option value="25"> أخرى </option>
                                        <option value="40"> ممارسة منزلي </option>
                                        <option value="41"> ممارسة 2 غرفة </option>
                                        <option value="42"> ممارسة 3 غرفة </option>
                                        <option value="43"> ممارسة </option>
                                        <option value="44"> ممارسة تجاري </option>
                                        <option value="46"> ممارسة حكومي </option>
                                        <option value="50"> ممارسة </option>
                                        <option value="51"> ممارسة صرف صحي </option>
                                        <option value="52" selected> ممارسة صرف صحي </option>
                                        <option value="53"> ممارسة صرف صحي </option>
                                        <option value="54"> ممارسة صرف صحي </option>
                                        <option value="55"> ممارسة صرف صحي </option>
                                        <option value="56"> ممارسة صرف صحي </option>
                                        <option value="57"> ممارسة صرف صحي </option>
                                        <option value="58"> ممارسة صرف مغسلة </option>
                                        <option value="59"> ممارسة صرف صحي </option>
                                        <?php }elseif ($row['account_type'] == 53){?>
                                        <option value="1">منزلي</option>
                                        <option value="2">قائم عمارة </option>
                                        <option value="8"> تجاري </option>
                                        <option value="10"> حكومة </option>
                                        <option value="22"> خدمي </option>
                                        <option value="23"> صناعي </option>
                                        <option value="24"> سياحي </option>
                                        <option value="25"> أخرى </option>
                                        <option value="40"> ممارسة منزلي </option>
                                        <option value="41"> ممارسة 2 غرفة </option>
                                        <option value="42"> ممارسة 3 غرفة </option>
                                        <option value="43"> ممارسة </option>
                                        <option value="44"> ممارسة تجاري </option>
                                        <option value="46"> ممارسة حكومي </option>
                                        <option value="50"> ممارسة </option>
                                        <option value="51"> ممارسة صرف صحي </option>
                                        <option value="52"> ممارسة صرف صحي </option>
                                        <option value="53" selected> ممارسة صرف صحي </option>
                                        <option value="54"> ممارسة صرف صحي </option>
                                        <option value="55"> ممارسة صرف صحي </option>
                                        <option value="56"> ممارسة صرف صحي </option>
                                        <option value="57"> ممارسة صرف صحي </option>
                                        <option value="58"> ممارسة صرف مغسلة </option>
                                        <option value="59"> ممارسة صرف صحي </option>
                                        <?php }elseif ($row['account_type'] == 54){?>
                                        <option value="1">منزلي</option>
                                        <option value="2">قائم عمارة </option>
                                        <option value="8"> تجاري </option>
                                        <option value="10"> حكومة </option>
                                        <option value="22"> خدمي </option>
                                        <option value="23"> صناعي </option>
                                        <option value="24"> سياحي </option>
                                        <option value="25"> أخرى </option>
                                        <option value="40"> ممارسة منزلي </option>
                                        <option value="41"> ممارسة 2 غرفة </option>
                                        <option value="42"> ممارسة 3 غرفة </option>
                                        <option value="43"> ممارسة </option>
                                        <option value="44"> ممارسة تجاري </option>
                                        <option value="46"> ممارسة حكومي </option>
                                        <option value="50"> ممارسة </option>
                                        <option value="51"> ممارسة صرف صحي </option>
                                        <option value="52"> ممارسة صرف صحي </option>
                                        <option value="53"> ممارسة صرف صحي </option>
                                        <option value="54" selected> ممارسة صرف صحي </option>
                                        <option value="55"> ممارسة صرف صحي </option>
                                        <option value="56"> ممارسة صرف صحي </option>
                                        <option value="57"> ممارسة صرف صحي </option>
                                        <option value="58"> ممارسة صرف مغسلة </option>
                                        <option value="59"> ممارسة صرف صحي </option>
                                        <?php }elseif ($row['account_type'] == 55){?>
                                        <option value="1">منزلي</option>
                                        <option value="2">قائم عمارة </option>
                                        <option value="8"> تجاري </option>
                                        <option value="10"> حكومة </option>
                                        <option value="22"> خدمي </option>
                                        <option value="23"> صناعي </option>
                                        <option value="24"> سياحي </option>
                                        <option value="25"> أخرى </option>
                                        <option value="40"> ممارسة منزلي </option>
                                        <option value="41"> ممارسة 2 غرفة </option>
                                        <option value="42"> ممارسة 3 غرفة </option>
                                        <option value="43"> ممارسة </option>
                                        <option value="44"> ممارسة تجاري </option>
                                        <option value="46"> ممارسة حكومي </option>
                                        <option value="50"> ممارسة </option>
                                        <option value="51"> ممارسة صرف صحي </option>
                                        <option value="52"> ممارسة صرف صحي </option>
                                        <option value="53"> ممارسة صرف صحي </option>
                                        <option value="54"> ممارسة صرف صحي </option>
                                        <option value="55" selected> ممارسة صرف صحي </option>
                                        <option value="56"> ممارسة صرف صحي </option>
                                        <option value="57"> ممارسة صرف صحي </option>
                                        <option value="58"> ممارسة صرف مغسلة </option>
                                        <option value="59"> ممارسة صرف صحي </option>
                                        <?php }elseif ($row['account_type'] == 56){?>
                                        <option value="1">منزلي</option>
                                        <option value="2">قائم عمارة </option>
                                        <option value="8"> تجاري </option>
                                        <option value="10"> حكومة </option>
                                        <option value="22"> خدمي </option>
                                        <option value="23"> صناعي </option>
                                        <option value="24"> سياحي </option>
                                        <option value="25"> أخرى </option>
                                        <option value="40"> ممارسة منزلي </option>
                                        <option value="41"> ممارسة 2 غرفة </option>
                                        <option value="42"> ممارسة 3 غرفة </option>
                                        <option value="43"> ممارسة </option>
                                        <option value="44"> ممارسة تجاري </option>
                                        <option value="46"> ممارسة حكومي </option>
                                        <option value="50"> ممارسة </option>
                                        <option value="51"> ممارسة صرف صحي </option>
                                        <option value="52"> ممارسة صرف صحي </option>
                                        <option value="53"> ممارسة صرف صحي </option>
                                        <option value="54"> ممارسة صرف صحي </option>
                                        <option value="55"> ممارسة صرف صحي </option>
                                        <option value="56" selected> ممارسة صرف صحي </option>
                                        <option value="57"> ممارسة صرف صحي </option>
                                        <option value="58"> ممارسة صرف مغسلة </option>
                                        <option value="59"> ممارسة صرف صحي </option>
                                        <?php }elseif ($row['account_type'] == 57){?>
                                        <option value="1">منزلي</option>
                                        <option value="2">قائم عمارة </option>
                                        <option value="8"> تجاري </option>
                                        <option value="10"> حكومة </option>
                                        <option value="22"> خدمي </option>
                                        <option value="23"> صناعي </option>
                                        <option value="24"> سياحي </option>
                                        <option value="25"> أخرى </option>
                                        <option value="40"> ممارسة منزلي </option>
                                        <option value="41"> ممارسة 2 غرفة </option>
                                        <option value="42"> ممارسة 3 غرفة </option>
                                        <option value="43"> ممارسة </option>
                                        <option value="44"> ممارسة تجاري </option>
                                        <option value="46"> ممارسة حكومي </option>
                                        <option value="50"> ممارسة </option>
                                        <option value="51"> ممارسة صرف صحي </option>
                                        <option value="52"> ممارسة صرف صحي </option>
                                        <option value="53"> ممارسة صرف صحي </option>
                                        <option value="54"> ممارسة صرف صحي </option>
                                        <option value="55"> ممارسة صرف صحي </option>
                                        <option value="56"> ممارسة صرف صحي </option>
                                        <option value="57" selected> ممارسة صرف صحي </option>
                                        <option value="58"> ممارسة صرف مغسلة </option>
                                        <option value="59"> ممارسة صرف صحي </option>
                                        <?php }elseif ($row['account_type'] == 58){?>
                                        <option value="1">منزلي</option>
                                        <option value="2">قائم عمارة </option>
                                        <option value="8"> تجاري </option>
                                        <option value="10"> حكومة </option>
                                        <option value="22"> خدمي </option>
                                        <option value="23"> صناعي </option>
                                        <option value="24"> سياحي </option>
                                        <option value="25"> أخرى </option>
                                        <option value="40"> ممارسة منزلي </option>
                                        <option value="41"> ممارسة 2 غرفة </option>
                                        <option value="42"> ممارسة 3 غرفة </option>
                                        <option value="43"> ممارسة </option>
                                        <option value="44"> ممارسة تجاري </option>
                                        <option value="46"> ممارسة حكومي </option>
                                        <option value="50"> ممارسة </option>
                                        <option value="51"> ممارسة صرف صحي </option>
                                        <option value="52"> ممارسة صرف صحي </option>
                                        <option value="53"> ممارسة صرف صحي </option>
                                        <option value="54"> ممارسة صرف صحي </option>
                                        <option value="55"> ممارسة صرف صحي </option>
                                        <option value="56"> ممارسة صرف صحي </option>
                                        <option value="57"> ممارسة صرف صحي </option>
                                        <option value="58" selected> ممارسة صرف مغسلة </option>
                                        <option value="59"> ممارسة صرف صحي </option>                                                                                   
                                    <?php } else {?>
                                    <option value="1">منزلي</option>
                                        <option value="2">قائم عمارة </option>
                                        <option value="8"> تجاري </option>
                                        <option value="10"> حكومة </option>
                                        <option value="22"> خدمي </option>
                                        <option value="23"> صناعي </option>
                                        <option value="24"> سياحي </option>
                                        <option value="25"> أخرى </option>
                                        <option value="40"> ممارسة منزلي </option>
                                        <option value="41"> ممارسة 2 غرفة </option>
                                        <option value="42"> ممارسة 3 غرفة </option>
                                        <option value="43"> ممارسة </option>
                                        <option value="44"> ممارسة تجاري </option>
                                        <option value="46"> ممارسة حكومي </option>
                                        <option value="50"> ممارسة </option>
                                        <option value="51"> ممارسة صرف صحي </option>
                                        <option value="52"> ممارسة صرف صحي </option>
                                        <option value="53"> ممارسة صرف صحي </option>
                                        <option value="54"> ممارسة صرف صحي </option>
                                        <option value="55"> ممارسة صرف صحي </option>
                                        <option value="56"> ممارسة صرف صحي </option>
                                        <option value="57"> ممارسة صرف صحي </option>
                                        <option value="58"> ممارسة صرف مغسلة </option>
                                        <option value="59" selected> ممارسة صرف صحي </option>  
                                    
                                    <?php } ?>
                                </select>

                                    <div class="alert alert-danger custom-alert"> الرجاء اختيار نوع الحساب </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-6">
                               <div class="col-md-4">
                                    <label>رقم الفرع</label> <span class="astrik">*</span>
                                </div>
                                <div class="col-md-8">
                                    <input class="name form-control" maxlength="2" type="text" name="branch_num" id="branch" placeholder="الرجاء ادخال رقم الفرع" required value="<?php echo $row['branch_num'];?>" />
                                    <div class="alert alert-danger custom-alert"> يجب ادخال رقم الفرع </div>
                                </div>
                                

                            </div>
                            <div class="col-md-6">
                                <div class="col-md-4">
                                    <label> رقم الحساب</label> <span class="astrik">*</span>
                                </div>
                                <div class="col-md-8">
                                <input id="account" class="form-control"  maxlength="5" type="text" name="account_num" placeholder="الرجاء ادخال رقم الحساب" id="account" required value="<?php echo $row['account_num'];?>"  />
                                    
                                    <div class="alert alert-danger custom-alert"> يجب ادخال رقم الحساب</div>
                                    
                                </div>

                            </div>
                </div>
            </div>
                  <div class="form-group">
                        <div class="row">
                            <div class="col-md-6">
                               <div class="col-md-4">
                                    <label>مصدر المياه</label> <span class="astrik">*</span>
                                </div>
                                <div class="col-md-8">
                                    <select class="form-control" name="water_source" id="water_source"  required>
                                        <?php if($row['water_sourcwe'] == 1) {?>
                                        <option value="1" selected>نيلي</option>
                                        <option value="2">جوفي</option>
                                        <option value="3"> حكومي </option>
                                        <option value="4"> أخرى </option>
                                        <?php  }elseif($row['water_sourcwe'] == 2) {?>
                                        <option value="1">نيلي</option>
                                        <option value="2" selected>جوفي</option>
                                        <option value="3"> حكومي </option>
                                        <option value="4"> أخرى </option>
                                         <?php  }elseif($row['water_sourcwe'] == 3) {?>
                                        <option value="1">نيلي</option>
                                        <option value="2">جوفي</option>
                                        <option value="3" selected> حكومي </option>
                                        <option value="4"> أخرى </option>
                                         <?php  }else {?>
                                        <option value="1">نيلي</option>
                                        <option value="2">جوفي</option>
                                        <option value="3"> حكومي </option>
                                        <option value="4" selected> أخرى </option>
                                         <?php } ?>
                                </select>

                                    <div class="alert alert-danger custom-alert"> يجب اختيار مصدر المياه </div>
                                </div>
                                

                            </div>

                </div>
            </div>
        </div>
    </div>
            
            <div class="panel panel-primary text-center">
                <div class="panel-heading">بيانات الاتصال بالمنشأة</div>
                <div class="panel-body">
                   
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="col-md-4">
                                    <label>رقم فاكس المنشأة</label>
                                </div>
                                <div class="col-md-8">
                                    <input class="form-control" maxlength="7" type="text" name="fax" placeholder="الرجاء ادخال رقم فاكس المنشأة" id="fax" value="<?php echo $row['building_fax'];?>" />
                                    <div class="alert alert-danger custom-alert"> الرجاء ادخال رقم فاكس المنشأة </div>
                                </div>

                            </div>
                            <div class="col-md-6">
                                <div class="col-md-4">
                                    <label>مسمى الحي</label> 
                                </div>
                                <div class="col-md-8">
                                    <input id="village" class="form-control" type="text" name="village" placeholder="الرجاء ادخال اسم الحي/القرية" id="village" value="<?php echo $row['state_name'];?>" />
                                    <div class="alert alert-danger custom-alert"> الرجاء ادخال مسمى الحي/القرية </div>
                                </div>

                            </div>

                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="col-md-4">
                                    <label>رقم تليفون المنشأة</label>
                                </div>
                                <div class="col-md-8">
                                    <input id="landline" class="form-control" type="text" name="landline" maxlength="7" placeholder="الرجاء ادخال رقم الأرضي 7 أرقام" id="landline" value="<?php echo $row['building_tele'];?>" />
                                    <div class="alert alert-danger custom-alert"> الرجاء ادخال رقم الأرضي ان وجد </div>
                                </div>

                            </div>
                            <div class="col-md-6">
                                <div class="col-md-4">
                                    <label>رقم موبايل المنشأة</label> <span class="astrik">*</span> </div>
                                <div class="col-md-8">
                                    <input id="mobile" class="form-control" type="text" name="mobile" maxlength="11" placeholder="الرجاء ادخال رقم الموبايل 11 رقم" id="mobile"  required value="<?php echo $row['building_mobile'];?>" />
                                    <div class="alert alert-danger custom-alert"> الرجاء ادخال رقم الموبايل 11 رقم </div>
                                </div>

                            </div>
                        </div>
                    </div>
 
                 <div class="form-group">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="col-md-4">
                                    <label>اسم المالك</label> 
                                </div>
                                <div class="col-md-8">
                                    <input class="form-control" type="text" name="owner_name" placeholder="الرجاء ادخال اسم المالك" id="owner_name" value="<?php echo $row['owner_name'];?>" />
                                    <div class="alert alert-danger custom-alert">  يجب ادخال اسم المالك </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="col-md-4">
                                    <label>رقم تليفون المالك</label>
                                </div>
                                <div class="col-md-8">
                                    <input class="form-control" maxlength="11" type="text" name="owner_mobile" placeholder="الرجاء ادخال رقم تليفون المالك" id="owner_mobile" value="<?php echo $row['owner_tele'];?>" />
                                    <div class="alert alert-danger custom-alert"> يجب ادخال رقم تليفون المالك </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    
                    
                     <div class="form-group">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="col-md-4">
                                    <label>اسم المدير</label> 
                                </div>
                                <div class="col-md-8">
                                    <input class="form-control" type="text" name="manager_name" id="manager_name" placeholder="الرجاء ادخال رقم تليفون مدير المنشأة" value="<?php echo $row['manager_name'];?>" />
                                    <div class="alert alert-danger custom-alert"> الرجاء ادخال رقم تليفون مدير المنشأة</div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="col-md-4">
                                    <label>رقم تليفون المدير</label>
                                </div>
                                <div class="col-md-8">
                                    <input class="form-control" maxlength="11" type="text" id="manager_mobile" name="manager_mobile" placeholder="الرجاء ادخال رقم تليفون مدير المنشأة" value="<?php echo $row['manager_tele'];?>" />
                                    <div class="alert alert-danger custom-alert"> الرجاء ادخال رقم تليفون مدير المنشأة</div>
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
                                    <label>نشاط المنشأة</label> <span class="astrik">*</span>
                                </div>
                                <div class="col-md-8">
                                    <input class="name form-control" type="text" name="building_activity" placeholder="الرجاء ادخال نشاط المنشأة" id="activity" required value="<?php echo $row['building_activity'];?>" />
                                    <div class="alert alert-danger custom-alert"> الرجاء ادخال نشاط المنشأة </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="col-md-4">
                                    <label>المواد المستخدمة في الصناعة</label>
                                </div>
                                <div class="col-md-8">
                                    <input class="nid form-control" maxlength="14" type="text" name="materials_used" placeholder="الرجاء ادخال المواد المستخدمة في الصناعة" id="materials"  value="<?php echo $row['materials_used'];?>" />
                                    <div class="alert alert-danger custom-alert"> يجب ادخال المواد المستخدمة في الصناعة</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    
                    
                    
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="col-md-4">
                                    <label>عدد ورادي العمل</label> 
                                </div>
                                <div class="col-md-8">
                                    <input class="name form-control" type="text" maxlength="1" name="building_shifts" placeholder="الرجاء ادخال عدد ورادي العمل" id="shifts" value="<?php echo $row['building_shifts'];?>" />
                                    <div class="alert alert-danger custom-alert"> يجب ادخال عدد ورادي العمل </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="col-md-4">
                                    <label>عدد أيام العمل</label> 
                                </div>
                                <div class="col-md-8">
                                    <input class="form-control" maxlength="2" type="text" name="building_work_days" placeholder="الرجاء ادخال عدد أيام العمل" id="work_days" value="<?php echo $row['building_work_days'];?>" />
                                    <div class="alert alert-danger custom-alert"> يجب ادخال عدد أيام العمل </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    
                    
                    
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="col-md-4">
                                    <label>عدد العاملين</label>
                                </div>
                                <div class="col-md-8">
                                    <input class="name form-control" type="text" name="building_emp_num" placeholder="الرجاء ادخال عدد العاملين" id="emp_num" value="<?php echo $row['building_emp_num'];?>"  />
                                    <div class="alert alert-danger custom-alert"> يجب ادخال عدد العاملين </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="col-md-4">
                                    <label>مساحة المنشأة م2</label> 
                                </div>
                                <div class="col-md-8">
                                    <input class="form-control" maxlength="14" type="text" name="building_area_m2" placeholder="الرجاء ادخال مساحة المنشأة (م2) " id="m2" value="<?php echo $row['building_area_m2'];?>" />
                                    <div class="alert alert-danger custom-alert"> يجب ادخال مساحة المنشأة (م2)</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    
                    
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="col-md-4">
                                    <label>أيام أجازة المنشأة</label>
                                </div>
                                <div class="col-md-8">
                                    <input class="name form-control" maxlength="14" type="text" name="building_vac" placeholder="الرجاء ادخال أيام أجازة المنشأة" id="vac" value="<?php echo $row['building_vac']; ?>" />
                                    <div class="alert alert-danger custom-alert"> يجب ادخال أيام أجازة المنشأة </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="col-md-4">
                                    <label>رقم الترخيص في الحي</label> 
                                </div>
                                <div class="col-md-8">
                                    <input class="form-control" maxlength="14" type="text" name="contract_num" placeholder="الرجاء ادخال رقم الترخيص في الحي" id="contract_num" value="<?php echo $row['contract_num'];?>" />
                                    <div class="alert alert-danger custom-alert"> يجب ادخال رقم الترخيص في الحي</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    
                    
                    
                    
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="col-md-4">
                                    <label>تاريخ الترخيص</label>
                                </div>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" name="contract_open_date" id="contract_open_date" placeholder="اختر تاريخ الترخيص من القائمة التي تظهر عند الضغط" readonly value="<?php echo $row['contract_open_date'];?>"  />
                                    <div class="alert alert-danger custom-alert"> الرجاء اختيار التاريخ من قائمة التاريخ التي تظهر لك </div>
                                    
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="col-md-4">
                                    <label>تاريخ انتهاء الترخيص</label>
                                </div>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" name="contract_end_date" id="contract_end_date" placeholder="اختر تاريخ انتهاء الترخيص من القائمة التي تظهر عند الضغط" readonly value="<?php echo $row['contract_end_date'];?>" />
                                    <div class="alert alert-danger custom-alert"> الرجاء اختيار التاريخ من قائمة التاريخ التي تظهر لك </div>
                                    
                                </div>
                            </div>
                </div>
                    </div>
                    
                    
                    
                    
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="col-md-4">
                                    <label>نوع الصرف</label> <span class="astrik">*</span>
                                </div>
                                <div class="col-md-8">
                                    <select class="form-control" name="waste_type" id="waste_type" required >
                                        <?php if($row['waste_type'] == 1) { ?>
                                        <option value="1" selected>صحي</option>
                                        <option value="2">صناعي</option>
                                        <?php } else { ?>
                                        <option value="1">صحي</option>
                                        <option value="2" selected>صناعي</option>
                                        <?php }?>
                                   </select>

                                    <div class="alert alert-danger custom-alert"> الرجاء اختيار نوع الصرف </div>
                                </div>

                            </div>
                            <div class="col-md-6">
                                <div class="col-md-4">
                                    <label>جهة الصرف</label> <span class="astrik">*</span>
                                </div>
                                <div class="col-md-8">
                                    <input class="form-control" type="text" name="waste_location" id="waste_location" placeholder="الرجاء ادخال جهة الصرف" required value="<?php echo $row['waste_location'];?>"   />
                                    <div class="alert alert-danger custom-alert"> يجب ادخال جهة الصرف</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    
                    
                    
                     <div class="form-group">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="col-md-4">
                                    <label>نوع الرخصة</label> <span class="astrik">*</span>
                                </div>
                                <div class="col-md-8">
                                    <select class="form-control" name="license_type" id="license_type" required >
                                        <?php if($row['license_type'] == 1) { ?>
                                        <option value="1" selected>دائمة</option>
                                        <option value="2">مؤقتة</option>
                                        <?php }else {?>
                                        <option value="1">دائمة</option>
                                        <option value="2" selected>مؤقتة</option>
                                        <?php } ?>
                                   </select>

                                    <div class="alert alert-danger custom-alert"> الرجاء اختيار نوع الرخصة </div>
                                </div>

                            </div>
                            <div class="col-md-6">
                                <div class="col-md-4">
                                    <label>ملاحظات</label>
                                </div>
                                <div class="col-md-8">
                                    <input class="form-control" type="text" name="notes" placeholder="الرجاء ادخال الملاحظات إن وجدت" id="notes" value="<?php echo $row['notes'];?>"   />
                             
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
<div id="build_edit"></div>
<hr/>
<a class="btn btn-success" href="index.php">الشاشة الرئيسية</a>
<hr/>


 
     <footer>
       
        <p> جميع الحقوق محفوظة  &copy;  شركة مياه الشرب والصرف الصحى بالدقهلية 2018</p>
        
      </footer>
  </div>
  <script>
      $(document).ready(function() {
          $('#edit').click(function(){
               var b_code1              = $('#code').val();
               var b_name1              = $('#name').val();
               var b_address1           = $('#address').val();
               var industry_name1       = $('#industry_name').val();
               var contract_type1       = $('#contract_type').val();
               var contract_date1       = $('#contract_date').val();
               var area1                = $('#city').val();
               var account_type1        = $('#account_type').val();
               var branch1              = $('#branch').val();
			   var account1             = $('#account').val();
			   var water_source1        = $('#water_source').val();
               var fax1                 = $('#fax').val();
               var village1             = $('#village').val();
               var landline1            = $('#landline').val();
               var mobile1              = $('#mobile').val();
               var owner_name1          = $('#owner_name').val();
               var owner_mob1           = $('#owner_mobile').val();
               var manager_name1        = $('#manager_name').val();
               var manager_mob1         = $('#manager_mobile').val();
               var activity1            = $('#activity').val();
               var materials1           = $('#materials').val();
               var shifts1              = $('#shifts').val();
               var work_days1           = $('#work_days').val();
               var emp_num1             = $('#emp_num').val();
               var m21                  = $('#m2').val();
               var vac1                 = $('#vac').val();
               var contract_num1        = $('#contract_num').val();
               var contract_open_date1  = $('#contract_open_date').val();
               var contract_end_date1   = $('#contract_end_date').val();
               var waste_type1          = $('#waste_type').val();
               var waste_location1      = $('#waste_location').val();
               var license_type1        = $('#license_type').val();
               var notes1               = $('#notes').val();


			
			var ajax_URL = "edit1.php";
			var dataString = 'b_code=' + b_code1 + '&b_name' + b_name1 + '&b_address=' + b_address1 + '&industry_name=' + industry_name + '&contract_type=' + contract_type + '&contract_date=' + contract_date1 + '&area' + area1 + '&account_type' + account_type1 + '&branch=' + branch1 + '&account=' + account1 + '&water_source' + water_source1 + '&fax=' + fax1 + '&village=' + village1 + '&landline=' + landline1 + '&mobile=' + mobile1 + '&owner_name=' + owner_name1 + '&owner_mob=' + owner_mob1 + '&manager_name=' + owner_name1 + '&manager_mob=' + owner_mob1 + '&activity=' + activity1 + '&materials=' + materials1 + '&shifts=' + shifts1 + '&work_days=' + work_days1 + '&emp_num=' + emp_num1 + '&m2=' + m21 + '&vac=' + vac1 + '&contract_num=' + contract_num1 + '&contract_open_date=' + contract_open_date1 + '&contract_end_date=' + contract_end_date1 + '&waste_type=' + waste_type1 + '&waste_location=' + waste_location1 + '&license_type=' + license_type + '&notes=' + notes1;
 
			//$('#Info').html('');
			//$('#ReadingInfo').html(hiReading_val);

			//debugger;
		if ( b_code1 != 0 && b_name1 != '' && b_address1 != ''  && contract_type != 0  && area1 != 0 && account_type1 != 0 && branch1 != 0 && account1 != 0 && water_source1 != 0 && mobile1 != 0 && activity1 != '' &&  waste_type1 != 0 &&  waste_location1 != '' &&  license_type != 0) {
               
				$('#build_edit').html('<img src="img/loading.gif" width="70"  height="70" /><p class="text-info"> جاري حفظ البيانات </p>');
				$.ajax({
					cache: false,
					type: "POST",
					dataType: "html",
					url: ajax_URL, 
					data: {
						b_code          : b_code1,
                        b_name          : b_name1,
                        b_address       : b_address1,
                        industry_name   : industry_name1,
                        contract_type   : contract_type1,
                        contract_date   : contract_date1,
                        area            : area1,
                        account_type    : account_type1,
                        branch          : branch1,
			            account         : account1,
                        water_source    : water_source1,
                        fax             : fax1,
                        village         : village1,
                        landline        : landline1,
                        mobile          : mobile1,
                        owner_name      : owner_name1,
                        owner_mob       : owner_mob1,
                        manager_name    : manager_name1,
                        manager_mob     : manager_mob1,
                        activity        : activity1,
                        materials       : materials1,
                        shifts          : shifts1,
                        work_days       : work_days1,
                        emp_num         : emp_num1,
                        m2              : m21,
                        vac             : vac1,
                        contract_num    : contract_num1,
                        contract_open_date : contract_open_date1,
                        contract_end_date  : contract_end_date1,
                        waste_type         : waste_type1,
                        waste_location     : waste_location1,
                        license_type       : license_type1,
                        notes              : notes1	
					},
					error: function() {
						//debugger;
						$('#build_edit').html('خطأ في الحفظ');
					},
					success: 
						function(result){ 
							//debugger;
							$("#build_edit").html(result);
					complete : 
						return true; 
					}
					
				});
		}
			
	  });
          
          
          
          
          
         $("#contract_date").datepicker({
                changeMonth: true,
                changeYear: true,
                regional: "ar",
                dateFormat: "yy-mm-dd",
                autoSize: true,
            });
            
             $("#contract_open_date").datepicker({
                changeMonth: true,
                changeYear: true,
                regional: "ar",
                dateFormat: "yy-mm-dd",
                autoSize: true
            });
            
             $("#contract_end_date").datepicker({
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