<?php
//get url variables

$id = isset($_GET['id'])?intval($_GET['id']):-1; //-1 mean first page load

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
	
	$sql = "select * from ad7_2017_worker_stage6_final
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
    <meta name="author" content="Eng. Ahmed Elemam" />
    <meta name="keywords" content="مياه الشرب , الصرف الصحى , الدقهلية , القابضة , شركة مياه الشرب والصرف الصحى , water , sewer" />
    <meta name="description" content="الموقع الرسمي لشركة مياه الشرب والصرف الصحي بالدقهلية" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta property="og:image" content="http://www.dkwasc.com.eg/jobs/images/logo.png" />
    <meta property="og:type"   content="website" /> 
    <meta property="og:url"    content="dkwasc.com.eg" /> 
    <meta property="og:title"  content="النتيجة النهائية لوظيفة عامل حفر وتسليك وتطهير اعلان رقم 7 لسنة 2017 | شركة مياه الشرب والصرف الصحى بالدقهلية" /> 
    <meta property="og:description"  content="الموقع الرسمي لشركة مياه الشرب والصرف الصحي بالدقهلية" /> 
    <meta property="fb:app_id"  content="673798652822430" /> 
    
    <title>النتيجة النهائية لوظيفة عامل حفر وتسليك وتطهير اعلان رقم 7 لسنة 2017 | شركة مياه الشرب والصرف الصحى بالدقهلية</title>
    <link rel="SHORTCUT ICON" href="../img/icon.gif" type="image/x-icon" />
    <link rel="stylesheet" href="../css/bootstrap.min.css" />
    <link rel="stylesheet" href="../css/bootstrap-rtl.min.css" />
    <link rel="stylesheet" href="../css/font-awesome.css" />
    <link href="../css/social-share-kit.css" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Cairo:400,600,700&amp;subset=arabic" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="../css/style.css?<?php echo md5_file('../css/style.css'); ?>" />
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
                    النتيجة النهائية للمتقدمين المستوفين لشروط الاعلان رقم (7) لسنة 2017
                </h3>
                <h4>
                    وظيفة عامل حفر وتسليك وتطهير

                </h4>
            </div>
      <table id="details" class='table table-bordered text-center'>
        <?php
				if($sqlData){ ?>
          <tr>
            <td class='text-center success' style='color:#000;vertical-align:middle;'>الكود</td>
            <td><strong><?php echo $sqlData['id'];?></strong></td>
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
						<td style='color:#000' class='success'>الترتيب</td>
				
						<td class="alert alert-info">
					
						<strong style="font-size:25px;">
						<?php echo $sqlData['ordering']; ?>
						</strong>
			
						</td>
				</tr>
				<tr>
					<td style='color:#000' class="success">ملحوظة هامة</td>
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

    

        </div>
      <div id="footer">
                <a class="btn btn-success" href='http://www.dkwasc.com.eg'><i class="fa fa-home" aria-hidden="true"></i>  الرئيسية   </a>

                <a class="btn btn-success" href='index.php'><i class="fa fa-search" aria-hidden="true"></i>  البحث</a>
                <br/>
                <br/>
                <p>جميع حقوق الطبع محفوظة - شركة مياه الشرب والصرف الصحي بالدقهلية © 2017</p>
            </div>
    </div>

  </body>
</html>