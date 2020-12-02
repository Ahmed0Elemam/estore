<?php
//get url variables

$id = isset($_GET['id'])?intval($_GET['id']):-1; //-1 mean first page load
$arr_studyLevel= array (
					4 => "دبلوم متوسط" ,
					5 => "دبلوم فوق متوسط" ,
					6 => "معهد سنتان" ,
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
	
	$sql = "select * from job_reader_11_2016_stage3
			where id = {$id}";

	//$sql = "select * from job4_20042015 where id = {$id}";
	$sqlResult=mysql_query($sql,$link)or die(mysql_error());


//database query execution  - convert to PHP Array
$sqlData = mysql_fetch_assoc($sqlResult) or die('Record Not Found ......');

// close database connection
	mysql_close($link);

					
				


		 ?>
  <html>

  <head>
    <meta charset="utf-8">
    <meta name="keywords" content="مسابقة المحصلين بنظام العمولة,أخبار الوظائف,Dakahlia,Water,Sewer,Company,شركة مياه الشرب والصرف الصحي بالدقهلية">
    <meta name="description" content="وظيفة محصلين بنظام العمولة - شركة مياه الشرب والصرف الصحى بالدقهلية" />
    <meta name="author" content="Eng. Ahmed Elemam">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all" />
    <META HTTP-EQUIV="Pragma" CONTENT="no-cache" />
    <title>أخبار الوظائف | شركة مياه الشرب والصرف الصحي بالدقهلية</title>
    <link rel="SHORTCUT ICON" href="../../../img/icon.gif" type="image/x-icon" />
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/font-awesome.css">
    <link href="https://fonts.googleapis.com/css?family=Cairo:400,700&amp;subset=arabic" rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css?<?php echo md5_file('../css/style.css'); ?>">
  </head>

  <body>
    <div class="container text-center">
      <img src="../../../img/logo.png" width="100" height="100" />
      <h4>شركة مياه الشرب والصرف الصحي بالدقهلية</h4>
      <h3>
        نتيجة استيفاء الأوراق ومواعيد الاختبار التحريري للمتقدمين للاعلان رقم (6) لسنة 2016
      </h3>
      <h4 class="alert alert-info">
        وظيفة محصلين بنظام العمولة
      </h4>
      <hr/>

      <table id="details" class='table table-bordered text-center'>
        <?php
				if($sqlData){ ?>
          <tr>
            <td class='text-center success' style='color:#000;vertical-align:middle;'>الكود</td>
            <td>
              <?php echo $sqlData['id'];?>
            </td>
          </tr>
          <tr>
            <td class='text-center success' style='color:#000;vertical-align:middle;'>الاسم</td>
            <td>
              <?php echo $sqlData['person_name'];?>
            </td>
          </tr>
          <tr>
            <td class='text-center success' style='color:#000;vertical-align:middle;'>العنوان</td>
            <td>
              <?php echo $sqlData['city_name'].' - '. $sqlData['village'];?>
            </td>
          </tr>
          <tr>
            <td class='text-center success' style='color:#000;vertical-align:middle;'>تاريخ الميلاد</td>
            <td>
              <?php echo $sqlData['birth_date'];?>
            </td>
          </tr>
          <tr>
            <td class='text-center success' style='color:#000;vertical-align:middle;'>المؤهل</td>
            <td>
              <?php echo $sqlData['s_qualification'];?>
            </td>
          </tr>
          <tr>
            <td class='text-center success' style='color:#000;vertical-align:middle;'>نتيجة استيفاء الاوراق</td>
            <?php 
						if($sqlData['result'] == 1){		 
						?>
            <td>
              <div style='padding:10px;border-radius:10px;background-color:#A2FF67;color:#000;'><strong><?php echo $sqlData['paper_result']; ?></strong></div>
            </td>
            <?php }else{ ?>
            <td>
              <div style='padding:10px;border-radius:10px;background-color:#f47575;color:#fff;'><strong><?php echo $sqlData['paper_result']; ?></strong>
              </div>
            </td>
            <?php } ?>
          </tr>
          <?php
				 if($sqlData['reason1'] != NULL || $sqlData['reason2'] != NULL || $sqlData['notes'] != NULL || $sqlData['result'] != 0 && $sqlData['result'] != 1 ){
				 ?>
            <tr>
              <td class='text-center success' style='color:#000;vertical-align:middle;'>السبب</td>
              <td><strong><?php echo $sqlData['reason1']."  ".$sqlData['reason2']; ?></strong>
                <p style="margin-top:10px; border-radius:10px;">
                  <?php echo $sqlData['notes']; ?>
                </p>
              </td>
            </tr>


            <?php
				
				}elseif($sqlData['result'] == 1){
					 ?>
              <tr>
                <td class='text-center success' style='color:#000;vertical-align:middle;'>ميعاد الاختبار التحريري</td>
                <td>
                  <div style='padding:10px;border-radius:10px;background-color:#A2FF67;color:#000;'><strong><?php echo $sqlData['exam_date']; ?></strong></div>
                </td>
              </tr>
              <?php
				 }else{
					 echo '';
				 }
										
										}
			?>
      </table>

      <h2>تابعونا لمعرفة الخطوات التالية على الموقع الالكترونى للشركة </h2>


      <div id="footer">
        <a class="btn btn-success" href='http://www.dkwasc.com.eg'><i class="fa fa-home" aria-hidden="true"></i> الصفحة الرئيسية للشركة  </a>

        <a class="btn btn-success" href='index.php'><i class="fa fa-search" aria-hidden="true"></i>
  صفحة البحث </a>
        <a class="btn btn-success" href='../../../index.php'><i class="fa fa-home" aria-hidden="true"></i> صفحة الوظائف الكلية  </a>
        <br/>
        <br/>
        <p>جميع حقوق الطبع محفوظة &copy; شركة مياه الشرب والصرف الصحي بالدقهلية 2017</p>
      </div>
    </div>

  </body>
