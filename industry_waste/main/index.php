<?php
session_start();

if(!isset($_SESSION['user_session']))
{
	header("Location: ../index.php");
}

include_once '../dbconfig.php';

$stmt = $db_con->prepare("SELECT * FROM tbl_users WHERE user_id=:uid");
$stmt->execute(array(":uid"=>$_SESSION['user_session']));
$row=$stmt->fetch(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
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
  <title> نظام ادارة الصرف الصناعي </title>
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
  <link rel="stylesheet" type="text/css" href="css/datatables.min.css"/>
 
<script type="text/javascript" src="js/pdfmake.min.js"></script>
<script type="text/javascript" src="js/vfs_fonts.js"></script>
    <script type="text/javascript" src="js/jszip.min.js"></script>
<script type="text/javascript" src="js/datatables.min.js"></script>


 
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
			  <span class="glyphicon glyphicon-user"></span>&nbsp; مرحباً <?php echo $row['user_name']; ?>&nbsp;<span class="caret"></span></a>
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
        <h1 class="text-center block-head">الشاشة الرئيسية </h1>
      </div>

      <div class="col-md-4">
        
      </div>
    </div>

      <div class="row">
        <div class="col-md-12">
          <div class="form text-center">
             
              <div class="row">
                <div class="col-md-4">
                  <button class="btn btn-primary" id="btn_info" style="font-size: 18px;">تسجيل بيانات المنشأة</button>
                </div>
                  
                <div class="col-md-4">
                  <button class="btn btn-primary" id="btn_inspection" style="font-size: 18px;"> تسجيل بيانات المعاينة</button>
                </div>
                  
                <div class="col-md-4">
                  <button class="btn btn-primary" id="sample" style="font-size: 18px;">بيانات تكلفة العينة</button>
                </div>
              </div>
            <div class="row">
               
                <div class="col-md-4">
                  <button class="btn btn-primary" id="btn_a3baa" style="font-size: 18px;"> تكلفة أعباء التنقية </button>
                </div>
                
                <div class="col-md-4">
                  <button class="btn btn-primary" id="btn_search" style="font-size: 18px;">الاستعلام و التعديل</button>
                </div>
                
                <div class="col-md-4">
                  <button class="btn btn-primary" id="btn_trkhes" style="font-size: 18px;">مطالبات الترخيص</button>
                </div>
                
                
             </div>
             
               <div class="row">
               
                <div class="col-md-4">
                  <button class="btn btn-primary" id="btn_view_bds" style="font-size: 17px;"> المنشآت طبقا للمناطق </button>
                </div>
                               
                
             </div>
             
          
          <hr/>
        
          
 

            <div id="ResultInfo"></div>
      </div>

     </div>


 </div>
          


      <footer>
       
        <p> جميع الحقوق محفوظة  &copy;  شركة مياه الشرب والصرف الصحى بالدقهلية 2018</p>
        
      </footer>
    </div>
    

 

</body>

</html>
