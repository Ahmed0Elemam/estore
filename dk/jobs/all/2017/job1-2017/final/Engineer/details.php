<?php
//get url variables

$id = isset($_GET['id'])?intval($_GET['id']):-1; //-1 mean first page load

$arr_study = array(
    1 => "كيمياء خاص",
    2 => "كيمياء ونبات",
    3 => "كيمياء وحيوان"
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
	
	
	$sql = "select * from ad1_2017_engineer_final
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
  <meta name="description" content="وظائف مهندس ميكانيكا قوى | شركة مياه الشرب والصرف الصحي بالدقهلية" />
  <meta name="author" content="Eng. Ahmed Elemam" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="robots" content="all" />
  <META HTTP-EQUIV="Pragma" CONTENT="no-cache" />
  <title>النتيجة النهائية للاعلان رقم 1 لسنة 2017 | وظائف شركة مياه الشرب والصرف الصحي بالدقهلية</title>
  <link rel="SHORTCUT ICON" href="img/icon.gif" type="image/x-icon" />
  <link rel="stylesheet" href="css/bootstrap.min.css" />
  <link rel="stylesheet" href="css/font-awesome.css" />
  <link href="https://fonts.googleapis.com/css?family=Cairo:400,600,700&amp;subset=arabic" rel="stylesheet" />
  <link rel="stylesheet" href="css/style.css?<?php echo md5_file('css/style.css'); ?>" />

</head>


<body>
  <div class="container text-center">
    <img src="img/logo.png" width="100" height="100" />
    <h4>شركة مياه الشرب والصرف الصحي بالدقهلية</h4>
    <h3>
      النتيجة النهائية للمتقدمين المستوفين لشروط الاعلان رقم 1 لسنة 2017
    </h3>
    <h4 class="alert alert-info"><strong>
        وظيفة مهندس ميكانيكا قوى
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
					<td class="alert alert-danger"><strong>الترتيب على مستوى مركز 
                      <?php echo ' '.$sqlData['city_name']; ?>
                      </strong></td>
					
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
        <br/>
        <br/>
        <p>جميع حقوق الطبع محفوظة - شركة مياه الشرب والصرف الصحي بالدقهلية © 2017</p>
      </div>
    </div>

  </body>
