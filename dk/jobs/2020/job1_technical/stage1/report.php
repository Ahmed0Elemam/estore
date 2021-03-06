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

$arr_study = array(
    1 => "أعمال صحية",
    2 => "ميكانيكا",
    3 => "كهرباء"
);

?>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="author" content="Eng. Ahmed Elemam" />
    <meta name="keywords" content="مياه الشرب , الصرف الصحى , الدقهلية , القابضة , شركة مياه الشرب والصرف الصحى , water , sewer" />
    <meta name="description" content="الموقع الرسمي لشركة مياه الشرب والصرف الصحي بالدقهلية" />
    <meta name="author" content="Eng. Ahmed Elemam">
    <meta name="theme-color" content="#0D95D6">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all" />
    <META HTTP-EQUIV="Pragma" CONTENT="no-cache" />
    <meta property="og:image" content="http://www.dkwasc.com.eg/jobs/images/logo.png" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="dkwasc.com.eg" />
    <meta property="og:title" content="اعلان رقم 1 لسنة 2020 | وظيفة فني رابع" />
    <meta property="og:description" content="الموقع الرسمي لشركة مياه الشرب والصرف الصحي بالدقهلية" />
    <meta property="fb:app_id" content="673798652822430" />
    <title>اعلان رقم 1 لسنة 2020 | وظيفة فني رابع</title>
    <link rel="SHORTCUT ICON" href="img/icon.gif" type="image/x-icon" />
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-rtl.min.css">
    <link href="css/datedropper.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="css/font-awesome.css">
    <link href="https://fonts.googleapis.com/css?family=Tajawal:400,500,700&display=swap&subset=arabic" rel="stylesheet">

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/datedropper.min.js"></script>
    <link rel="stylesheet" href="css/style.css?<?php echo md5_file('css/style.css'); ?>">
    <script src="js/js.js?<?php echo md5_file('js/js.js'); ?>"></script>
</head>

<body>
    <div class="container text-center">
        <img src="img/logo.png" width="100" />
        <h4>شركة مياه الشرب والصرف الصحي بالدقهلية</h4>
        <h3>تقرير اعلان رقم (1) لسنة 2020 </h3>
        <div class="alert alert-info"><strong>فني رابع</strong></div>
        <?php
        date_default_timezone_set('africa/cairo');
        echo "<div class='alert alert-warning'> التاريخ: " . date('Y-m-d') . " الوقت: " . date('h:i:s A', time()) . "</div>"; ?>
        <hr />
        <?php

        $stmt = $connect->prepare("select count(*) as count,city from job1_2020_technical group by city");
        $stmt->execute();
        $rows = $stmt->fetchAll();

        $stmt2 = $connect->prepare("select count(*) as countall from job1_2020_technical");
        $stmt2->execute();
        $rows2 = $stmt2->fetchAll();
////////////////////////////
        $stmt3 = $connect->prepare("select count(*) as count3,city from job1_2020_technical where study = 1 group by city ");
        $stmt3->execute();
        $rows3 = $stmt3->fetchAll();

        $stmt6 = $connect->prepare("select count(*) as countall3 from job1_2020_technical where study = 1");
        $stmt6->execute();
        $rows6 = $stmt6->fetchAll();
//////////////////////////////
        $stmt4 = $connect->prepare("select count(*) as count4,city from job1_2020_technical where study = 2  group by city");
        $stmt4->execute();
        $rows4 = $stmt4->fetchAll();

        $stmt7 = $connect->prepare("select count(*) as countall4 from job1_2020_technical where study = 2");
        $stmt7->execute();
        $rows7 = $stmt7->fetchAll();
//////////////////////////////
        $stmt5 = $connect->prepare("select count(*) as count5,city from job1_2020_technical  where study = 3 group by city");
        $stmt5->execute();
        $rows5 = $stmt5->fetchAll();

        $stmt8 = $connect->prepare("select count(*) as countall5 from job1_2020_technical where study = 3");
        $stmt8->execute();
        $rows8 = $stmt8->fetchAll();





        ?>

        <table class="table table-bordered">

            <tr class="info">
                <th>المدينة/المركز</th>
                <th>عدد المتقدمين</th>
            </tr>
            <?php foreach ($rows as $row) { ?>
            <tr>

                <td><?php echo $arr_city[intval($row['city'])]; ?></td>
                <td> <?php echo $row['count']; ?></td>
            </tr>
            <?php 
        } ?>
            <tr>
                <td><strong>الاجمالي</strong></td>
                <td><strong><?php 
                            foreach ($rows2 as $row2) {
                                echo $row2['countall'];
                            } ?></strong></td>
            </tr>
        </table>
        <hr />
        <h3>تخصص أعمال صحية</h3>
        <table class="table table-bordered">

            <tr class="info">
                <th>المدينة/المركز</th>
                <th>عدد المتقدمين</th>
            </tr>
            <?php foreach ($rows3 as $row3) { ?>
            <tr>

                <td><?php echo $arr_city[intval($row3['city'])]; ?></td>
                <td> <?php echo $row3['count3']; ?></td>
            </tr>
            <?php 
        } ?>
            <tr>
                <td><strong>الاجمالي</strong></td>
                <td><strong><?php 
                            foreach ($rows6 as $row6) {
                                echo $row6['countall3'];
                            } ?></strong></td>
            </tr>
        </table>
        <hr />
        <h3>تخصص ميكانيكا</h3>
        <table class="table table-bordered">

            <tr class="info">
                <th>المدينة/المركز</th>
                <th>عدد المتقدمين</th>
            </tr>
            <?php foreach ($rows4 as $row4) { ?>
            <tr>

                <td><?php echo $arr_city[intval($row4['city'])]; ?></td>
                <td> <?php echo $row4['count4']; ?></td>
            </tr>
            <?php 
        } ?>
            <tr>
                <td><strong>الاجمالي</strong></td>
                <td><strong><?php 
                            foreach ($rows7 as $row7) {
                                echo $row7['countall4'];
                            } ?></strong></td>
            </tr>
        </table>

        <hr />
        <h3>تخصص كهرباء</h3>
        <table class="table table-bordered">

            <tr class="info">
                <th>المدينة/المركز</th>
                <th>عدد المتقدمين</th>
            </tr>
            <?php foreach ($rows5 as $row5) { ?>
            <tr>

                <td><?php echo $arr_city[intval($row5['city'])]; ?></td>
                <td> <?php echo $row5['count5']; ?></td>
            </tr>
            <?php 
        } ?>
            <tr>
                <td><strong>الاجمالي</strong></td>
                <td><strong><?php 
                            foreach ($rows8 as $row8) {
                                echo $row8['countall5'];
                            } ?></strong></td>
            </tr>
        </table>



        <?php 


        ?>

        <div id="footer" class="text-center">
            <a href="javascript:print();" class="btn btn-success"> طباعة <i class="fa fa-print" aria-hidden="true"></i></a>
            <a class="btn btn-success" href='http://www.dkwasc.com.eg'><i class="fa fa-home" aria-hidden="true"></i> الصفحة الرئيسية للشركة </a>
            <a class="btn btn-success" href='index.php'>صفحة الاعلان </a>

        </div>
      <br/>
            <p>جميع الحقوق محفوظة © شركة مياه الشرب والصرف الصحي بالدقهلية 2020</p>
    
    </div>

</body>

</html> 