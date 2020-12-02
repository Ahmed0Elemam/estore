<?php
//get url variables

$id = isset($_GET['code'])?intval($_GET['code']):-1; //-1 mean first page load

//database connection
require_once('../../../dbconnection.php');

//database query
	mysql_select_db($database_miaah);
	mysql_query("SET CHARSET utf8",$link);
	mysql_query("SET NAMES utf8",$link);
	$stage_no = 8;

	$sql = "select * from job_2016_final
				where code = {$id}" ;
	
	$sqlResult=mysql_query($sql,$link)or die(mysql_error());


//database query execution  - convert to PHP Array
$sqlData = mysql_fetch_assoc($sqlResult) or die('Record Not Found ......');

// close database connection
	mysql_close($link);
    
  	
		
		 ?>





  <html>

  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="مياه الشرب , الصرف الصحى , الدقهلية , القابضة , شركة مياه الشرب والصرف الصحى , water , sewer" />
    <meta name="description" content="نتيجة اعلان رقم 1 لسنة 2016 - شركة مياه الشرب والصرف الصحي بالدقهلية" />
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
        النتيجة النهائية للمتقدمين المستوفين لشروط الاعلان رقم (1) لسنة 2016
      </h3>
      <h4 class="alert alert-info">
        أخصائي خدمة عملاء ثالث <i class="fa fa-circle" aria-hidden="true"></i> أخصائي خط ساخن ثالث <i class="fa fa-circle" aria-hidden="true"></i> أخصائي علاقات عامة وتوعية ثالث <i class="fa fa-circle" aria-hidden="true"></i> أخصائي نظم معلومات ثالث <i class="fa fa-circle" aria-hidden="true"></i> فني مساحة
      </h4>
      <?php
	$ordering = $sqlData['ordering'];
    if(is_numeric($ordering)){
        if($sqlData['job_id'] == 3 or $sqlData['job_id'] == 5){
            $gNotes = '<div class="alert alert-danger" style="margin-bottom:0;">
                    الترتيب على مستوى الوظيفة المتقدم لها
                    </div>';
            
            
        }else{

					$gNotes = '<div class="alert alert-danger" style="margin-bottom:0;">
                            الترتيب على مستوى المركز التابع له والوظيفة المتقدم لها
                    </div>';
           
        }
							
					?>

        <table id="details" class='table table-bordered text-center'>
          <tr>
            <td class="success">الكود</td>
            <td>
              <?php echo $sqlData['code']; ?>
            </td>
          </tr>
          <tr>
            <td class="success">الاسم</td>
            <td>
              <?php echo $sqlData['person_name']; ?>
            </td>
          </tr>
          <tr>
            <td class="success">الوظيفة المتقدم لها</td>
            <td>
              <?php echo $sqlData['job']; ?>
            </td>
          </tr>
          <tr>
            <td class="success">تاريخ الميلاد</td>
            <td>
              <?php echo $sqlData['birth_date']; ?>
            </td>
          </tr>
          <tr>
            <td class="success">العنوان</td>
            <td>
              <?php echo $sqlData['city']; ?>
            </td>
          </tr>
          <tr>
            <td class="success">الترتيب</td>
            <td>
              <?php echo "<div style='padding:10px;border-radius:10px;background-color:#A2FF67;color:#000;'><strong>".$ordering."</strong></div>"; ?>
            </td>
          </tr>

          <tr>
            <td class="success">تنويه هام</td>
            <td>
              <?php echo $gNotes; ?>
            </td>
          </tr>
        </table>
        <?php
			}else{ ?>
          <table id="details" class='table table-bordered text-center'>
            <tr>
              <td class="success">الكود</td>
              <td>
                <?php echo $sqlData['code']; ?>
              </td>
            </tr>
            <tr>
              <td class="success">الاسم</td>
              <td>
                <?php echo $sqlData['person_name']; ?>
              </td>
            </tr>
            <tr>
              <td class="success">الوظيفة المتقدم لها</td>
              <td>
                <?php echo $sqlData['job']; ?>
              </td>
            </tr>
            <tr>
              <td class="success">تاريخ الميلاد</td>
              <td>
                <?php echo $sqlData['birth_date']; ?>
              </td>
            </tr>
            <tr>
              <td class="success">العنوان</td>
              <td>
                <?php echo $sqlData['city']; ?>
              </td>
            </tr>
            <tr>
              <td class="success">الترتيب</td>
              <td>
                <?php echo "<div style='padding:10px;border-radius:10px;background-color:#A2FF67;color:#000;'><strong>".$ordering."</strong></div>"; ?>
              </td>
            </tr>

            <?php
							
					} ?>

          </table>
          <hr/>



          <div id="footer">
            <a class="btn btn-success" href='http://www.dkwasc.com.eg'><i class="fa fa-home" aria-hidden="true"></i> الصفحة الرئيسية للشركة  </a>
            <a class="btn btn-success" href='index.php'><i class="fa fa-search" aria-hidden="true"></i> صفحة البحث</a>
            <a class="btn btn-success" href='../../../index.php'><i class="fa fa-home" aria-hidden="true"></i> صفحة الوظائف الكلية  </a>
            <br/>
            <br/>
            <div>جميع حقوق الطبع محفوظة - شركة مياه الشرب والصرف الصحي بالدقهلية © 2016</div>
          </div>

    </div>
  </body>