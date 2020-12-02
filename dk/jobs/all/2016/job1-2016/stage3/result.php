<?php
//get url variables

$id = isset($_GET['id'])?intval($_GET['id']):-1; //-1 mean first page load
$arr_studyLevel= array (
					1 => "مؤهل متوسط" ,
					2 => "مؤهل فوق متوسط" ,
					3 => "مؤهل عالى" ,
					);	

//database connection
require_once('../../../dbconnection.php');

	
	$sql = "select jas.*  from job_2016_app as ja 
				left join job_2016_stage1 as jas on ja.id = jas.id
			where ja.id = {$id}";

	//$sql = "select * from job4_20042015 where id = {$id}";
	$sqlResult=mysql_query($sql,$link)or die(mysql_error());


//database query execution  - convert to PHP Array
$sqlData = mysql_fetch_assoc($sqlResult) or die('Record Not Found ......');

// close database connection
	mysql_close($link);

		$gNotes = "<div class='center' style='padding:5px;background-color:#FBF8BD;border:1px dashed red;'>
						<div style='text-align:right'>
							
						</div>
					</div>
					";
		$person_data= array(
                "الكود" => $sqlData['id'],
                "الوظيفة المتقدم لها" => $sqlData['job'],
                "الاسم" => $sqlData['person_name'],
                "المدينة" => $sqlData['city'] ,
                "تاريخ الميلاد" => $sqlData['birth_date'],
                "نتيجة استيفاء الاوراق" => "<strong>".$sqlData['result']."</strong>",
                );							
						if( $sqlData['result']== 'غير مستوفى'){
							
							$person_data["نتيجة استيفاء الاوراق"] .="<hr><ul style='text-align:right'><strong>سبب عدم استيفاء الاوراق</strong>";
							if($sqlData['reason1'] != "") {$person_data["نتيجة استيفاء الاوراق"] .= "<li>".$sqlData['reason1']."</li>";}
							if($sqlData['reason2'] != "") {$person_data["نتيجة استيفاء الاوراق"] .= "<li>".$sqlData['reason2']."</li>";}
							if($sqlData['note'] != "") {$person_data["نتيجة استيفاء الاوراق"] .= "<li>ملاحظات:".$sqlData['note']."</li>";}
							$person_data["نتيجة استيفاء الاوراق"] .= "</ul>";
						}
					


		 ?>





  <?php header("content-type: text/html; charset=utf8");?>
  <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
  <html xmlns="http://www.w3.org/1999/xhtml">

  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="author" content="Eng. Ahmed Elemam">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all" />
    <META HTTP-EQUIV="Pragma" CONTENT="no-cache" />
    <title>أخبار الوظائف | شركة مياه الشرب والصرف الصحي بالدقهلية</title>
    <link rel="SHORTCUT ICON" href="../../img/icon.gif" type="image/x-icon" />
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
        نتيجة استيفاء الأوراق للمتقدمين للاعلان رقم (1) لسنة 2016
      </h3>
      <h4 class="alert alert-info">
        أخصائي خدمة عملاء ثالث <i class="fa fa-circle" aria-hidden="true"></i> أخصائي خط ساخن ثالث <i class="fa fa-circle" aria-hidden="true"></i> أخصائي علاقات عامة وتوعية ثالث <i class="fa fa-circle" aria-hidden="true"></i> أخصائي نظم معلومات ثالث <i class="fa fa-circle" aria-hidden="true"></i> فني مساحة
      </h4>
      <table id="details" class='table table-bordered text-center'>
        <?php
		foreach($person_data as $key => $value){
		echo "<tr><td class='success'>{$key}</td><td>{$value}</td></tr>";
		}
	?>
      </table>
      <h4>تابعونا لمعرفة الخطوات التاليه على الموقع الالكترونى للشركة </h4>


      <div id="footer">

        <div>جميع حقوق الطبع محفوظة - شركة مياه الشرب والصرف الصحي بالدقهلية © 2016</div>
      </div>
    </div>
  </body>
