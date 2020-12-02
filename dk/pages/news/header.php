<?php session_start();
// Visitors Counter
include "../../counter.php";

// online visitors
include "../../online_users.php";



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="description" content="الموقع الرسمي لشركة مياه الشرب والصرف الصحي بالدقهلية">
    <meta name="keywords" content="Dakahlia,Water,Sewer,Company,شركة مياه الدقهلية,شركة مياه الشرب والصرف الصحي بالدقهلية">
    <meta name="author" content="Eng. Ahmed Elemam">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:image" content="<?php echo $img; ?>" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="dkwasc.com.eg" />
    <meta property="og:title" content="<?php echo $title; ?>" />
    <meta property="og:description" content="الموقع الرسمي لشركة مياه الشرب والصرف الصحي بالدقهلية" />
    <meta property="fb:app_id" content="673798652822430" />
    <meta name="theme-color" content="#0D95D6">
    <title>
        <?php echo $title; ?>
    </title>

    <link href="../../css/bootstrap.min.css?<?php echo md5_file('../../css/bootstrap.min.css'); ?>" rel="stylesheet">
    <link href="../../css/bootstrap-rtl.min.css" rel="stylesheet">


    <link href="../../css/fontawesome-all.min.css" rel="stylesheet">
    <link href="../../css/lightbox.min.css" rel="stylesheet">
    <link href="../../css/social-share-kit.css" rel="stylesheet">
    <link href="../../css/animate.min.css" rel="stylesheet">
    <link href="../../css/bootstrap-dropdownhover.min.css" rel="stylesheet">
    

    <!-- Custom style  -->
    <link href="../../css/style.css?<?php echo md5_file('../../css/style.css'); ?>" rel="stylesheet">
    <link rel="SHORTCUT ICON" href="../../img/icons/icon.gif" type="image/x-icon" />

</head>

<body>
    <div class="container">
        <a class="logo" href="../../index.php"><img src="../../img/sherka/logo.png?<?php echo
md5_file('../../img/sherka/logo.png'); ?>" /> </a>
    </div>
    <nav class="navbar navbar-inverse">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="menu">القائمة</span>
                        </button>

            </div>
            <div id="navbar" class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-left">
                    <li><a href="../../pages/jobs.php"> أخبار الوظائف</a></li>
                    <li><a href="../../pages/news.php" class="active">أخبار الشركة</a></li>

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" role="button" aria-haspopup="true" aria-expanded="false">خدمات الشركة <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="../../pages/3omla.php">خدمة العملاء</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a target="_blank" href="../../fatora/">الفواتير</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a target="_blank" href="../../reads/">تسجيل قراءة العداد</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="../../pages/shakwa.php"> الشكاوى </a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="../../pages/monaqsa.php"> المناقصات</a></li>

                        </ul>
                    </li>

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" role="button" aria-haspopup="true" aria-expanded="false">عن الشركة <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="../../pages/nabza.php">نبذة عن الشركة</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="../../pages/ingazat.php">انجازات الشركة</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="../../pages/ansheta.php">أنشطة الشركة</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="../../pages/nozom.php">مركز المعلومات</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="../../pages/labs.php">المعامل</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="../../pages/training.php">مركز التدريب</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="../../pages/integrity.php">دعم النزاهة</a></li>
                        </ul>
                    </li>
                    <li><a href="../../pages/contact.php">تواصل معنا</a></li>




                </ul>
            </div>
            <!--/.nav-collapse -->
        </div>
    </nav>
