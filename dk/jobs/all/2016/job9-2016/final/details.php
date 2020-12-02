<?php
//get url variables

$id = isset($_GET['id'])?intval($_GET['id']):-1; //-1 mean first page load

$arr_driver = array(
					1 => "درجة أولى مهنية" ,
					2 => "درجة ثانية مهنية" ,
					3 => "درجة ثالثة مهنية" , 
					4 => "سائق معدات"
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
	
	
	$sql = "select * from ad9_2016_driver_final
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
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Dakahlia,Water,Sewer,Company,وظائف شركة مياه الشرب والصرف الصحي بالدقهلية">
    <meta name="description" content="وظائف سائقين (درجة مهنية أولى - ثانية - ثالثة - معدات) | شركة مياه الشرب والصرف الصحي بالدقهلية" />
    <meta name="author" content="Eng. Ahmed Elemam" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="robots" content="all" />
    <META HTTP-EQUIV="Pragma" CONTENT="no-cache" />
    <title>وظائف شركة مياه الشرب والصرف الصحي بالدقهلية</title>
    <link rel="SHORTCUT ICON" href="../../../img/icon.gif" type="image/x-icon" />
    <link rel="stylesheet" href="../css/bootstrap.min.css" />
    <link rel="stylesheet" href="../css/font-awesome.css" />
    <link href="https://fonts.googleapis.com/css?family=Cairo:400,700&amp;subset=arabic" rel="stylesheet" />
    <link rel="stylesheet" href="../css/style.css?<?php echo md5_file('../css/style.css'); ?>" />

  </head>


  <body>
    <div class="container text-center">
      <img src="../../../img/logo.png" width="100" height="100" />
      <h4>شركة مياه الشرب والصرف الصحي بالدقهلية</h4>
      <h3>
        النتيجة النهائية للمتقدمين للاعلان رقم (9) لسنة 2016
      </h3>
      <h4 class="alert alert-info"><strong>
        وظيفة سائقين ( درجة مهنية اولى - ثانية - ثالثة - معدات)
      </strong></h4>
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
              <?php echo $sqlData['name'];?>
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
              <?php echo $sqlData['birthdate'];?>
            </td>
          </tr>

          <tr>
            <td class='text-center success' style='color:#000;vertical-align:middle;'>رخصة القيادة</td>
            <td>
              <?php echo $arr_driver[intval($sqlData['driver'])];?>
            </td>
          </tr>
        <?php 
			if(is_numeric($sqlData['ordering'])){
					?>
				 <tr>
						<td class='success'>الترتيب</td>
				
						<td class="alert alert-info">
					
						<strong style="font-size:25px;">
						<?php echo $sqlData['ordering']; ?>
						</strong>
			
						</td>
				</tr>
				<tr>
					<td class="success">ملحوظة هامة</td>
					<td class="alert alert-danger"><strong>الترتيب على مستوى المركز التابع له ودرجة القيادة </strong></td>
					
				</tr>
					<?php
					}else {
						?>
						<tr>
						<td class="success">الترتيب</td>
				
						<td class="alert alert-danger">
					
						<strong>
						<?php echo $sqlData['ordering']; ?>
						</strong>
			
						</td>
				</tr>
						
						<?php
						
					} } ?>
      </table>



      <div id="footer">
        <a class="btn btn-success" href='http://www.dkwasc.com.eg'><i class="fa fa-home" aria-hidden="true"></i> الصفحة الرئيسية للشركة  </a>
        <a class="btn btn-success" href='index.php'><i class="fa fa-search" aria-hidden="true"></i> صفحة البحث</a>
        <a class="btn btn-success" href='../../../index.php'><i class="fa fa-home" aria-hidden="true"></i> صفحة الوظائف الكلية  </a>
        <br/>
        <br/>
        <div>جميع حقوق الطبع محفوظة - شركة مياه الشرب والصرف الصحي بالدقهلية © 2017</div>
      </div>
    </div>

  </body>
