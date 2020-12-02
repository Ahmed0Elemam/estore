<?php 
include 'connect.php';

$arr_city = array(
1 => "أجا",
2 => "الجمالية",
3 => "السنبلاوين",
4 => "الكردي",
5 => "المطرية",
6 => "المنزلة",
7 => "المنصورة",
8 => "بلقاس",
9 => "بني عبيد",
10 => "تمي الأمديد",
11 => "جمصة",
12 => "دكرنس",
13 => "شربين",
14 => "طلخا",
15 => "محلة الدمنة",
16 => "منية النصر",
17 => "ميت سلسيل",
18 => "ميت غمر",
19 => "نبروه"
);

?>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="author" content="Eng. Ahmed Elemam" />
    <meta name="keywords" content="مياه الشرب , الصرف الصحى , الدقهلية , القابضة , شركة مياه الشرب والصرف الصحى , water , sewer" />
    <meta name="description" content="الموقع الرسمي لشركة مياه الشرب والصرف الصحي بالدقهلية" />
    <meta name="author" content="Eng. Ahmed Elemam">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all" />
    <META HTTP-EQUIV="Pragma" CONTENT="no-cache" />
    <meta property="og:image" content="http://www.dkwasc.com.eg/jobs/images/logo.png" />
    <meta property="og:type"   content="website" /> 
    <meta property="og:url"    content="http://www.dkwasc.com.eg/jobs/2020/job3_lawer/stage1/" /> 
    <meta property="og:title"  content="تقرير اعلان رقم 3 لسنة 2020 | وظيفة محامي ثالث" /> 
    <meta property="og:description"  content="الموقع الرسمي لشركة مياه الشرب والصرف الصحي بالدقهلية" /> 
    <meta property="fb:app_id"  content="673798652822430" /> 
    <title> تقرير اعلان رقم 3 لسنة 2020 | وظيفة محامي ثالث</title>
    <link rel="SHORTCUT ICON" href="img/icon.gif" type="image/x-icon" />
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-rtl.min.css">
    <link rel="stylesheet" href="css/datepicker.css">
    <link rel="stylesheet" href="css/font-awesome.css">
    <link href="https://fonts.googleapis.com/css?family=Tajawal:400,500,700&display=swap&subset=arabic" rel="stylesheet">

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/style.css?<?php echo md5_file('css/style.css'); ?>">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="js/ar.js"></script>
    <script src="js/js.js?<?php echo md5_file('js/js.js'); ?>"></script>
</head>

<body>
    <div class="container text-center">
        <img src="img/logo.png" width="100" />
        <h4>شركة مياه الشرب والصرف الصحي بالدقهلية</h4>
        <h3>تقرير اعلان رقم 3 لسنة 2020 </h3>
        <div class="alert alert-info"><strong>وظيفة محامي ثالث</strong></div>
        <?php
        date_default_timezone_set('africa/cairo'); 
        echo "<div class='alert alert-warning'> التاريخ: ".date('Y-m-d')."<br/> الوقت: ".date('h:i:s A', time())."</div>"; ?>
        <hr/>
    <?php
   
           $stmt = $connect->prepare("select count(*) as count,city from job3_2020_lawer group by city");
          $stmt->execute();
          $rows = $stmt->fetchAll();
        $stmt2 = $connect->prepare("select count(*) as countall from job3_2020_lawer");
          $stmt2->execute();
          $rows2 = $stmt2->fetchAll();

          ?>
      <table class="table table-bordered">

        <tr class="info">
          <th>المدينة/المركز</th>

          <th> عدد المتقدمين</th>
        </tr>
        <?php foreach($rows as $row){ 

          
          ?>
        <tr>

          <td>
            <?php echo $arr_city[intval($row['city'])]; ?>
          </td>
 
            <td>
            <?php echo $row['count']; ?>
          </td>
        </tr>
        <?php   } ?>
        <!--
        <tr>
          <td><strong>الاجمالي</strong></td>
          <td><strong><?php 
                            foreach($rows2 as $row2){
                            echo $row2['countall'];  }?></strong></td>
        </tr>
        -->
      </table>


      <?php     
         

?>

      <div id="footer" class="text-center">
        <a href="javascript:print();" class="btn btn-success"> طباعة  <i class="fa fa-print" aria-hidden="true"></i></a>
        <a class="btn btn-success" href='http://www.dkwasc.com.eg'><i class="fa fa-home" aria-hidden="true"></i>  الرئيسية   </a>
        <a class="btn btn-success" href='index.php'>صفحة الاعلان </a>

      </div>
      <p style="margin-top:10px;font-size:14px;">
      <p>جميع الحقوق محفوظة © شركة مياه الشرب والصرف الصحي بالدقهلية 
      <?php echo date("Y"); ?></p>
  </div>

</body>

</html>
