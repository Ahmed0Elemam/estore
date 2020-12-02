<?php session_start();

function setActive($name){
	global $pageName;
	if(isset($pageName) && $pageName == $name){
		echo " active";
	}
	
}
// online visitors
include "../../online_users.php";
// Visitors Counter
include "../../counter.php";


?>


<!DOCTYPE html>
<html>

<head>

  <meta charset="utf-8">
  <meta name="description" content="الموقع الرسمي لشركة مياه الشرب والصرف الصحي بالدقهلية">
  <meta name="keywords" content="Dakahlia,Water,Sewer,Company,شركة مياه الدقهلية,شركة مياه الشرب والصرف الصحي بالدقهلية">
  <meta name="author" content="Eng. Ahmed Elemam">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta property="og:image" content="http://www.dkwasc.com.eg/jobs/images/logo.png" /> 
  <meta property="og:type"   content="website" /> 
  <meta property="og:url"    content="dkwasc.com.eg" /> 
  <meta property="og:title"  content="<?php echo $title; ?>" /> 
  <meta property="og:description"  content="الموقع الرسمي لشركة مياه الشرب والصرف الصحي بالدقهلية" /> 
  <meta property="fb:app_id"  content="673798652822430" /> 
  <title>
    <?php echo $title; ?>
  </title>
  <!-- Bootstrap core CSS -->
  <link href="../../css/bootstrap.min.css?<?php echo md5_file('../../css/bootstrap.min.css'); ?>" rel="stylesheet">
  <link href="../../css/bootstrap-rtl.min.css" rel="stylesheet">
  <link href="../../css/lightbox.min.css" rel="stylesheet">
  <link href="../../css/social-share-kit.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.13/components/divider.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.13/components/card.min.css" />
  

  <link href="../../css/style.css?<?php echo md5_file('../../css/style.css'); ?>" rel="stylesheet">

 <link href="../../css/font-awesome.css" rel="stylesheet" >
    <!--
  <link href="https://fonts.googleapis.com/css?family=Cairo:400,600,700,900&amp;subset=arabic" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Amiri:400,700&amp;subset=arabic" rel="stylesheet">
-->
  <link rel="SHORTCUT ICON" href="../../img/icons/icon.gif" type="image/x-icon" />

</head>

<body>
   
  <div class="container">
    <a class="logo" href="../../index.php"><img src="../../img/sherka/logo.png?<?php echo
md5_file('../../img/sherka/logo.png'); ?>"  /> </a>
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
          <li><a href="jobs.php" class="<?php setActive('jobs'); ?>"> أخبار الوظائف</a></li>

          <li><a href="news.php" class="<?php setActive('news'); ?>">أخبار الشركة</a></li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle<?php setActive('khdma'); ?>" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">خدمات الشركة <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="../3omla.php">خدمة العملاء</a></li>
              <li role="separator" class="divider"></li>
              <li><a target="_blank" href="../../fatora/">الفواتير</a></li>
              <li role="separator" class="divider"></li>
              <li><a target="_blank" href="../../reads/">تسجيل قراءة العداد</a></li>
              <li role="separator" class="divider"></li>
              <li><a href="../shakwa.php"> الشكاوى والمقترحات</a></li>
              <li role="separator" class="divider"></li>
              <li><a href="../monaqsa.php"> المناقصات</a></li>


            </ul>
          </li>
            <li class="dropdown">
            <a href="#" class="dropdown-toggle<?php setActive('about'); ?>" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">عن الشركة <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="../nabza.php">نبذة عن الشركة</a></li>
              <li role="separator" class="divider"></li>
              <li><a href="../ingazat.php">انجازات الشركة</a></li>
              <li role="separator" class="divider"></li>
              <li><a href="../ansheta.php">أنشطة الشركة</a></li>
              <li role="separator" class="divider"></li>
              <li><a href="../nozom.php">مركز المعلومات</a>
              </li>
              <li role="separator" class="divider"></li>
              <li><a href="../labs.php">المعامل</a></li>
              <li role="separator" class="divider"></li>
              <li><a href="../training.php">مركز التدريب</a></li>
              <li role="separator" class="divider"></li>
              <li><a href="../integrity.php">دعم النزاهة</a></li>
            </ul>
          </li>
          <li><a href="../contact.php" class="<?php setActive('contact'); ?>">تواصل معنا</a></li>
          
          
        
         
        </ul>


      </div>
      <!--/.nav-collapse -->
    </div>
  </nav>
