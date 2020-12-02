<?php 
include 'connect.php';

$arr_city = array(
1 => "غرب المنصورة",
2 => "شرق المنصورة",
3 => "مركز المنصورة",
4 => "ميت سلسيل",
5 => "طلخا",
6 => "نبروه",
7 => "بلقاس",
8 => "الجمالية",
9 => "المطرية",
10 => "المنزلة",
11 => "بني عبيد",
12 => "جمصة",
13 => "شربين",
14 => "دكرنس",
15 => "تمي الأمديد",
16 => "منية النصر",
17 => "أجا",
18 => "ميت غمر",
19 => "السنبلاوين",
22 => "الكردي" 
);

?>
<html>

<head>
 <meta charset="utf-8">
  <meta name="description" content="الموقع الرسمي لشركة مياه الشرب والصرف الصحي بالدقهلية">
  <meta name="keywords" content="Dakahlia,Water,Sewer,Company, خدمات شركة مياه الدقهلية,شركة مياه الشرب والصرف الصحي بالدقهلية">
  <meta name="author" content="Eng. Ahmed Elemam">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta property="og:image" content="http://www.dkwasc.com.eg/jobs/images/logo.png" />
  <meta property="og:type"   content="website" /> 
  <meta property="og:url"    content="dkwasc.com.eg" /> 
  <meta property="og:title"  content="خدمة الاستعلام عن الفاتورة | شركة مياه الشرب والصرف الصحي بالدقهلية" /> 
  <meta property="og:description"  content="الموقع الرسمي لشركة مياه الشرب والصرف الصحي بالدقهلية" /> 
  <meta property="fb:app_id"  content="673798652822430" /> 
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>تقرير خدمة تسجيل قراءة العداد | شركة مياه الشرب والصرف الصحى بالدقهلية</title>
  <link rel="SHORTCUT ICON" href="img/icon.gif" type="image/x-icon" />
  <link rel="stylesheet" href="../css/bootstrap-rtl.min.css">
  <link rel="stylesheet" href="../css/fontawesome-all.min.css">


  <link rel="stylesheet" href="css/style.css?<?php echo md5_file('css/style.css'); ?>">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <script src="js/js.js?<?php echo md5_file('js/js.js'); ?>"></script>
</head>

<body>
  <div class="container text-center">
    <div class="row header">
        <div class="col-md-4">
          <img src="img/logo.png" class="logo" alt="dakahlia water and sewer company logo" title="شركة مياه الشرب والصرف الصحي بالدقهلية" />
        </div>
        <div class="col-md-4">
          <br/>
          <h1 class="text-center block-head"> تقرير تسجيل قراءة العداد</h1>
        </div>
        <div class="col-md-4">
          <img src="img/wcounter.png" class="wc" />
        </div>
      </div>
        <?php date_default_timezone_set('africa/cairo'); 
            echo "<div class='alert alert-success'> التاريخ: ".date('Y-m-d')." الوقت: ".date('h:i:s A', time())."</div>"; 
        ?>
    <hr/>
    <?php
   
           $stmt = $connect->prepare("SELECT count(*) as count, district_number, new_reading, real_value, less FROM bills WHERE national_id is not null GROUP BY district_number");
          $stmt->execute();
          $rows = $stmt->fetchAll();
          $stmt2 = $connect->prepare("select count(*) as countall from bills WHERE national_id is not null");
          $stmt2->execute();
          $rows2 = $stmt2->fetchAll();
    
                   
          
          ?>
      
    
    <table class="table table-bordered">

        <tr class="info">
          <th class="text-center">المدينة/المركز</th>
          <th class="text-center">عدد المسجلين</th>
        </tr>
        <?php foreach($rows as $row){ ?>
        <tr>

          <td class="text-center">
            <?php echo $arr_city[intval($row['district_number'])]; ?>
          </td>
          <td class="text-center">
            <?php echo $row['count']; ?>
          </td>
  
        </tr>
        <?php } ?>
        <tr>
          <td class="text-center"><strong>الاجمالي</strong></td>
          <td class="text-center"><strong><?php 
                            foreach($rows2 as $row2){
                            echo $row2['countall'];  }?></strong></td>
        </tr>
      </table>
    
    

      <?php     
         

?>
<a class="btn btn-success" href='http://www.dkwasc.com.eg'><i class="fa fa-home" aria-hidden="true"></i> الرئيسية  </a>
        <a href="javascript:print();" class="btn btn-success">   <i class="fa fa-print" aria-hidden="true"></i> طباعة </a>
        

   
      <br/>
      <br/>
      <footer>
      <img src="img/billing.png" alt="billing system" width="24%" style="margin-bottom:10px" />
        <p> حقوق الطبع محفوظة  &copy;  شركة مياه الشرب والصرف الصحى بالدقهلية <?php echo date("Y"); ?></p>
        
      </footer>
  </div>

</body>

</html>