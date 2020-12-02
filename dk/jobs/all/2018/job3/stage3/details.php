<?php
//get url variables

$id = isset($_GET['id'])?intval($_GET['id']):-1; //-1 mean first page load
$arr_study = array(
    1 => "كيمياء خاص",
    2 => "كيمياء ونبات",
    3 => "كيمياء وحيوان",
    4 => "كيمياء حيوي",
    5 => "كيمياء ميكروبيولوجي"
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
	
	$sql = "select * from ad3_2018_chemist_stage3
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
    <meta name="keywords" content="أخبار الوظائف,Dakahlia,Water,Sewer,Company,وظائف شركة مياه الشرب والصرف الصحي بالدقهلية">
    <meta name="description" content="الموقع الرسمي لشركة مياه الشرب والصرف الصحي بالدقهلية" />
    <meta name="author" content="Eng. Ahmed Elemam">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:image" content="http://www.dkwasc.com.eg/jobs/images/logo.png" />
    <meta property="og:type"   content="website" /> 
    <meta property="og:url"    content="http://www.dkwasc.com.eg/jobs/ad3_2018_chemist/stage3/" />
    <meta property="og:title"  content="نتيجة استيفاء الأوراق لوظيفة كيميائي | اعلان رقم 3 لسنة 2018" /> 
    <meta property="og:description"  content="الموقع الرسمي لشركة مياه الشرب والصرف الصحي بالدقهلية" /> 
    <meta property="fb:app_id"  content="673798652822430" /> 
    <meta name="robots" content="all" />
    <META HTTP-EQUIV="Pragma" CONTENT="no-cache" />
    <title>نتيجة استيفاء الأوراق لوظيفة كيميائي | اعلان رقم 3 لسنة 2018 </title>
    <link rel="SHORTCUT ICON" href="../img/icon.gif" type="image/x-icon" />
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/bootstrap-rtl.min.css">
    <link rel="stylesheet" href="../css/font-awesome.css">
    <link href="../css/social-share-kit.css" rel="stylesheet" type="text/css" />
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
                    نتيجة استيفاء الأوراق للمتقدمين للاعلان رقم (3) لسنة 2018
                </h3>
                 <h4>
                    
                    وظيفة كيميائي
                    <br/>
                ( كيمياء خاص - كيمياء ونبات - كيمياء وحيوان - كيمياء حيوي - كيمياء ميكروبيولوجي )
                </h4>
            </div>
                <table id="details" class='table table-bordered text-center'>
                    <?php
				if($sqlData){ ?>
                        <tr>
                            <td class='text-center info' style='color:#000;vertical-align:middle;'>الكود</td>
                            <td><strong><?php echo $sqlData['id'];?></strong></td>
                        </tr>
                        <tr>
                            <td class='text-center info' style='color:#000;vertical-align:middle;'>الاسم</td>
                            <td>
                                <?php echo $sqlData['name'];?>
                            </td>
                        </tr>
                        <tr>
                            <td class='text-center info' style='color:#000;vertical-align:middle;'>  العنوان</td>
                            <td>
                                <?php echo $sqlData['city_name'].' - '. $sqlData['village'];?>
                            </td>
                        </tr>
                        <tr>
                            <td class='text-center info' style='color:#000;vertical-align:middle;'>تاريخ الميلاد</td>
                            <td>
                                <?php echo $sqlData['birthdate'];?>
                            </td>
                        </tr>
                        <tr>
                            <td class='text-center info' style='color:#000;vertical-align:middle;'>التخصص المتقدم له</td>
                            <td>
                                <?php echo $arr_study[intval($sqlData['study'])];?>
                            </td>
                        </tr>
                    
 
                        <tr>
                            <td class='text-center info' style='color:#000;vertical-align:middle;'>نتيجة استيفاء الاوراق</td>
                            <?php 
		if($sqlData['result'] == 1){		 
						?>
                            <td style='padding:10px;background-color:#A2FF67;color:#000;'>
                                <strong><?php echo $sqlData['paper_result']; ?></strong>
                            </td>

                            <?php }else{ ?>
                            <td style="color:#fff;background-color:#e74c3c;">
                                <strong><?php echo $sqlData['paper_result']; ?></strong>
                            </td>
                            <?php } ?>
                        </tr>
                        <?php if($sqlData['result'] == 1){ ?>
                        
                  <!--
                        <tr>
                            <td class='text-center info' style='color:#000;vertical-align:middle;'>تعليمات هامة</td>
                            <td class="danger text-right" style="font-weight:600;color:#f00;">
                            <ul>
                                <li>الرجاء الاحتفاظ بالكود المعلن عنه</li>
                                <li>الرجاء الالتزام بميعاد الاختبار المعلن عنه</li>
                                <li>الرجاء احضار بطاقة الرقم القومي</li>
                            </ul>

                            </td>
                        </tr> 
                        -->
                        <?php }?>

                        <?php 
				 if($sqlData['reason1'] != NULL || $sqlData['reason2'] != NULL || $sqlData['notes'] != NULL || $sqlData['result'] != 0 && $sqlData['result'] != 1 ){
				 ?>
                        <tr>
                            <td class='text-center info' style='color:#000;vertical-align:middle;'>السبب</td>
                            <td class="danger"><strong><?php echo " - ".$sqlData['reason1']." - ".$sqlData['reason2']; ?></strong>
                                <p style="margin-top:10px; border-radius:10px;">
                                    <?php echo $sqlData['notes']; ?>
                                </p>
                            </td>
                        </tr>


                        <?php
				
				
				 }else{
					 echo '';
				 }
										
										}
			?>
                </table>

                <h4>تابعونا لمعرفة الخطوات التالية على الموقع الالكترونى للشركة </h4>
            </div>

            <div id="footer">
                <a class="btn btn-success" href='http://www.dkwasc.com.eg'><i class="fa fa-home" aria-hidden="true"></i>  الرئيسية   </a>

                <a class="btn btn-success" href='index.php'><i class="fa fa-search" aria-hidden="true"></i>  البحث</a>
                <br/>
                <br/>
                <p>جميع الحقوق محفوظة - شركة مياه الشرب والصرف الصحي بالدقهلية © 2018</p>
            </div>
        </div>

    </body>
