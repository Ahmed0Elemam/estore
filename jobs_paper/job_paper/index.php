<?php
session_start();
/*
if(time() - $_SESSION['timestamp'] > 900) { //subtract new timestamp from the old one
  
	header("Location: ../logout.php"); //redirect to index.php
} 
*/
if(!isset($_SESSION['user_session']))
{
	header("Location: ../index.php");
}

include_once '../dbconfig.php';

$stmt = $db_con->prepare("SELECT * FROM jobs_users WHERE user_id=:uid");
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
  <meta property="og:title"  content="برنامج الوظائف | شركة مياه الشرب والصرف الصحي بالدقهلية" /> 
  <meta property="og:description"  content="الموقع الرسمي لشركة مياه الشرب والصرف الصحي بالدقهلية" /> 
  <meta property="fb:app_id"  content="673798652822430" /> 
  
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title> برنامج الوظائف</title>
  <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
  <link href="css/bootstrap-rtl.min.css" rel="stylesheet" type="text/css" />
  <link href="css/font-awesome.css" rel="stylesheet" type="text/css" />
  <link href="css/jquery-ui.min.css" rel="stylesheet" type="text/css" />
   <link href="css/datatables.min.css" rel="stylesheet" type="text/css" />
 <link href="css/dataTables.bootstrap.min.css" rel="stylesheet" type="text/css" />
  <link href="css/dataTables.semanticui.min.css" rel="stylesheet" type="text/css" />
  <link href="css/buttons.dataTables.min.css" rel="stylesheet" type="text/css" />
 <link href="css/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" href="css/datepicker.css">
  <link href="css/style.css?<?php echo md5_file("css/style.css"); ?>" rel="stylesheet" type="text/css" />
  <link rel="SHORTCUT ICON" href="graph/icon.gif" type="image/x-icon" />
  <script language="javascript" src="js/jquery.min.js" type="text/javascript"></script>
  <script language="javascript" src="js/jquery-ui.min.js" type="text/javascript"></script>
  <script language="javascript" src="js/bootstrap.min.js" type="text/javascript"></script>
  <script language="javascript" src="js/jquery.dataTables.min.js" type="text/javascript"></script>
  <script language="javascript" src="js/datatables.min.js" type="text/javascript"></script>
  <script language="javascript" src="js/jszip.min.js" type="text/javascript"></script>
  <script language="javascript" src="js/script.js?<?php echo md5_file("js/script.js")?>" type="text/javascript"></script>


  
    
     
    
    
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
          <a class="navbar-brand" href="#"><img src="graph/logo.png" width="50px" height="50px" alt="dakahlia water and sewer company logo" title="شركة مياه الشرب والصرف الصحي بالدقهلية" />
              <span>شركة مياه الشرب والصرف الصحي بالدقهلية</span>

            </a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul  class="nav navbar-nav navbar-right">
          
          </ul>
          
          
          <ul class="nav navbar-nav navbar-left">
          <li><a href="#" id="entry_btn">تسجيل نتيجة </a></li>
          <li><a href="#" id="stats_btn">احصائيات </a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
			  <span class="glyphicon glyphicon-user"></span>&nbsp; مرحباً <?php echo $row['name']; ?>&nbsp;<span class="caret"></span></a>
              <ul class="dropdown-menu">
                
                <li><a href="../logout.php"><span class="glyphicon glyphicon-log-out"></span>&nbsp;تسجيل خروج</a></li>
              </ul>
            </li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

  <div class="container text-center">

<div id="page_content">
<div class="row">
        <div class="col-md-12">
          <div class="form text-center">

            <div class="form-group">
              <div class="row">
                <div class="col-md-6 col-md-offset-3">
                  <label style="font-size: 22px">كود المتقدم</label>
                </div>
              </div>
                <div class="row">
                <div class="col-md-4 col-md-offset-4">
                 <input name="code" class="form-control" id="code" dir="rtl" />
                  <div class="alert alert-danger custom-alert"> لم يتم كود المتقدم </div>
                </div>
                 
              </div>
            </div>
              


<hr/>
            <div class="form-group" id="JobInfo"></div>

                
              
        
          </div>
            
          
          
            
        </div>
          
         
      </div>



      
</div>

      

      <br/>
      <br/>
      <footer>

        <p> جميع الحقوق محفوظة  &copy;  ادارة تكنولوجيا المعلومات بشركة مياه الدقهلية 2020</p>
        
      </footer>
    </div>
 

</body>

</html>
