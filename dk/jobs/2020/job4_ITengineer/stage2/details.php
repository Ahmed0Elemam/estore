<?php
//get url variables

$id = isset($_GET['id'])?intval($_GET['id']):-1; //-1 mean first page load

$arr_study = array(
1 => "ميكانيكا قوى",
2 => "كهرباء قوى"
);
 

//database connection
	$hostname_miaah = "localhost";
	$database_miaah = "dkwasc_miah1";
	$username_miaah = "appuser";
	$password_miaah = "app@user@dkwasc";
	$link = mysql_pconnect($hostname_miaah, $username_miaah, $password_miaah) or trigger_error("DB SERVER Error !!");

//database query
	mysql_select_db($database_miaah);
	mysql_query("SET CHARSET utf8",$link);
	mysql_query("SET NAMES utf8",$link);
	$stage_no = 2;
	
	$sql = "select * from ad6_2018_mengineer_stage2 where id = {$id}";

	//$sql = "select * from job4_20042015 where id = {$id}";
	$sqlResult=mysql_query($sql,$link)or die(mysql_error());


//database query execution  - convert to PHP Array
$sqlData = mysql_fetch_assoc($sqlResult) or die('Record Not Found ......');

// close database connection
	mysql_close($link);

		$gNotes = "<div class='text-center' style='width:100%;padding:5px;background-color:#F1F1F1;border:1px dashed red;color:red;'>
	<div style='text-align:right;'>
	<ul>
		<li>ضرورة احضار اصل وصورة كلا من:
          
          <ul>
            <li>بطاقة الرقم القومي</li>
            <li>شهادة الميلاد</li>
            <li>شهادة المؤهل الدراسي</li>
            <li>شهادة الخدمة العسكرية</li>
            <li>اثبات عضوية نقابة المهندسين</li>
          </ul>
 
        </li>
		<li>ضرورة الاحتفاظ بالكود الخاص بكم والمعلن على الموقع.</li>
       
	</ul>
	</div>
</div>";
							$person_data= array(
												"الكود" => "<h2>".$sqlData['id']."</h2>",
												"الاسم" => $sqlData['name'],
												"العنوان" => $sqlData['city_name'].' - '.$sqlData['village'],
												"تاريخ الميلاد" => $sqlData['birthdate'],
												"التخصص المتقدم له" => $arr_study[intval($sqlData['study'])],
												"ميعاد تقديم الاوراق" => "<div style='padding:10px;background-color:#A2FF67;color:#000;'><strong>".$sqlData['paper_date']." </strong></div>",
												"المكان" => "<div style=''><strong>المنصورة - نهاية مساكن العبور بالمجزر - الطريق السريع - ديوان عام الشركة</strong></div>",
												"الشروط العامة <br/>و الاوراق المطلوبة" => $gNotes
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
    <meta property="og:type"   content="website" /> 
    <meta property="og:url"    content="dkwasc.com.eg" /> 
    <meta property="og:title"  content="مواعيد تقديم الأوراق لوظيفة مهندس ميكانيكا قوى و كهرباء قوى | اعلان 6 لسنة 2018" /> 
    <meta property="og:description"  content="الموقع الرسمي لشركة مياه الشرب والصرف الصحي بالدقهلية" /> 
    <meta property="fb:app_id"  content="673798652822430" /> 
    <title>مواعيد تقديم الأوراق لوظيفة مهندس ميكانيكا قوى و كهرباء قوى | اعلان 6 لسنة 2018</title>
    <link rel="SHORTCUT ICON" href="../img/icon.gif" type="image/x-icon" />
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/bootstrap-rtl.min.css">
  <link rel="stylesheet" href="../css/font-awesome.css">
  <link rel="stylesheet" href="../css/jquery-ui.min.css">
  <link href="https://fonts.googleapis.com/css?family=Cairo:400,600,700&amp;subset=arabic" rel="stylesheet">
  <link rel="stylesheet" href="../css/style.css?<?php echo md5_file('../css/style.css'); ?>">
</head>

<body>
  <div class="container text-center">
           <div class="logo">
            <div class="row">
                <div class="col-md-6 col-md-offset-3 col-xs-12">
                    <div class="row">

                        <div class="col-md-2">
                            <img src="../img/logo.png" width="100" />
                        </div>
                        <div class="col-md-10">
                            <div class="content">
                                <h4>الشركة القابضة لمياه الشرب والصرف الصحي</h4>
                                <h4>شركة مياه الشرب والصرف الصحي بالدقهلية</h4>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="all">
            <div class="header">
                <h3>
                    مواعيد تقديم الأوراق للمتقدمين للاعلان رقم 6 لسنة 2018
                </h3>
                <h4>
                    وظيفة مهندس 
                    <br/>
                    ( ميكانيكا قوى - كهرباء قوى )
                </h4>
            </div>
        <table id="details" class='table table-bordered text-center' style="margin:0 auto;">
          <?php
		foreach($person_data as $key => $value){
		echo "<tr><td width='150px' class='text-center info' style='color:#000;vertical-align:middle;'>{$key}</td><td width='450px' style='color:#000;vertical-align:middle;'>{$value}</td></tr>";
		}
	?>
        </table>

        <h4>تابعونا لمعرفة الخطوات التالية على الموقع الالكترونى للشركة </h4>

      </div>
        <div id="footer">
          <a class="btn btn-success" href='http://www.dkwasc.com.eg'><i class="fa fa-home" aria-hidden="true"></i>  الرئيسية   </a>

          <a class="btn btn-success" href='index.php'><i class="fa fa-search" aria-hidden="true"></i>  البحث</a>
          <a href="javascript:print();" class="btn btn-success"><i class="fa fa-print" aria-hidden="true"></i> طباعة  </a>
          <br/>
          <br/>
          <p>جميع الحقوق محفوظة © شركة مياه الشرب والصرف الصحي بالدقهلية  <?php echo date("Y"); ?></p>
        </div>
      </div>

  </body>