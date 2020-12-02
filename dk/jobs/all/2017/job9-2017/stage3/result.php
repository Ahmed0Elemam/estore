<?php
//get url variables
	$q = isset($_GET['entered'])?$_GET['entered']:-1; //-1 mean first page load
	if(is_numeric($q) || $q == "") $q = -1 ;          //numeric search or empty field not accept only alphabetic 
	
	$code= isset($_GET['code'])?$_GET['code']:0;
	
	$re = "/[\\~\\!\\@\\#\\$\\%\\^\\&\\*\\(\\)\\_\\+\\-\\=\\{\\}\\[\\]\\;\\:\\'\\\"\\?\\<\\>\\.\\,\\\\\\/]/i"; 
	if(preg_match($re, $q, $matches)) $q = -1;    //alphabetic character only accept - not any of special character
	

	
	$pIndex =intval( isset($_GET['page'])?$_GET['page']:0); // 0 : default index on first query
	$limit =  10; //maximum row per page


	function prepareQuery($str){
		$str = preg_replace('/ /','',$str);
		$patterns[0] = '/(أ|إ|ا|آ)/';
		$patterns[1] = '/(ة|ه)/';
		$patterns[2] = '/(ى|ي|ئ)/';
		$patterns[3] = '/(و|ؤ)/';
		
		$replacements[0] = 'ا';
		$replacements[1] = 'ه';
		$replacements[2] = 'ى';
		$replacements[3] = 'و';
		$str =  preg_replace($patterns, $replacements, $str);
		return $str;
    }



	
//database connection
	$hostname_miaah = "localhost";
	$database_miaah = "dkwasc_miah1";
	$username_miaah = "appuser";
	$password_miaah = "app@user@dkwasc";
	$link = mysql_pconnect($hostname_miaah, $username_miaah, $password_miaah) or trigger_error("DB SERVER Error !!");


	mysql_select_db($database_miaah);
	mysql_query("SET CHARSET utf8",$link);
	mysql_query("SET NAMES utf8",$link);
		

//database query
	$id = 'id';
	$search = 'search';
	$name = 'name';
	$city = 'city_name';
	$village = 'village';
	$paper_result = 'paper_result';
	$exam_date = 'exam_date';
	$sql = "select * from ad9_2017_driver_stage3
				where ".$search." like '%".prepareQuery($q)."%'";
	
	
//first get the total of rows without limits
	$sqlResult=mysql_query($sql,$link)or die(mysql_error());
	$totalRow = mysql_num_rows($sqlResult);

//second get the rows in limit to display
	$sql = $sql." LIMIT ".($pIndex * $limit)." , ".$limit;
	$sqlResult = mysql_query($sql,$link)or die(mysql_error());
	$currentRowCount = mysql_num_rows($sqlResult);

//database query execution  - convert to PHP Array
	$result_data= array();
	while($row = mysql_fetch_assoc($sqlResult)){
		$result_data[] = $row;
	}
//close database connection
	mysql_close($link);
//prepare paging the result - all matched rows
	$pages = intval($totalRow / $limit ) ; 
	$start = 0;
	$previous = 0 ;
	$next = 0 ;
	$last = $pages ;

	 if($pIndex >= 0 && $pIndex < $pages){ 
		if($pIndex > 0 )$previous = $pIndex -1 ; 
		$next = $pIndex + 1;
	 }else{
		$previous = $pIndex -1 ;
		$next = $pIndex;
	 }
 
 
 /**
    ------------------------------------------
	 data transfer from php code to HTML code
	------------------------------------------
	
	$q : search item - name
	$result_data : rows which match with the search item
	$totalRow : represent the total number of rows matches without using limit - all possible row matches
	$start , $previous , $next , $last : control navigation for paging the result determined by limit of rows per page
 
 */
?>


    <?php 
//---------------------------------------------------------------------------------------------------------------------------
//--------------------------------------------------------HTML SECTION-------------------------------------------------------
//---------------------------------------------------------------------------------------------------------------------------
?>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="أخبار الوظائف,Dakahlia,Water,Sewer,Company,وظائف شركة مياه الشرب والصرف الصحي بالدقهلية">
    <meta name="description" content="الموقع الرسمي لشركة مياه الشرب والصرف الصحي بالدقهلية" />
    <meta name="author" content="Eng. Ahmed Elemam">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all" />
    <META HTTP-EQUIV="Pragma" CONTENT="no-cache" />
    <meta property="og:image" content="http://www.dkwasc.com.eg/jobs/images/logo.png" />
    <meta property="og:type"   content="website" /> 
    <meta property="og:url"    content="dkwasc.com.eg" /> 
    <meta property="og:title"  content="نتيجة استيفاء الأوراق ومواعيد الاختبار التحريري اوظيفة سائق اعلان رقم 9 لسنة 2017" /> 
    <meta property="og:description"  content="الموقع الرسمي لشركة مياه الشرب والصرف الصحي بالدقهلية" /> 
    <meta property="fb:app_id"  content="673798652822430" /> 
    <title>نتيجة استيفاء الأوراق ومواعيد الاختبار التحريري اوظيفة سائق اعلان رقم 9 لسنة 2017 </title>
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
                     نتيجة استيفاء الأوراق ومواعيد الاختبار التحريري للمتقدمين للاعلان رقم 9 لسنة 2017
                </h3>
                
                <h4>
                    <strong>سائق </strong><br/>
                    (درجة أولى مهنية - ثانية مهنية - ثالثة مهنية - سائق معدات ثقيلة)
                </h4>
  
            </div>

                <h3 class="alert alert-warning">نتائج البحث</h3>




                <?php 
	if($q != -1) {

		if( sizeof($result_data) <= 0){
			//no result
			echo"<div class='alert alert-danger'>لايوجد نتائج للبحث .. !!!</div>";
		}else{
			//show result
			echo "<table id='results' class='table table-bordered text-center'>
					<tr class='info' style='color:#000;'>";
			if($code==0) echo "<th class='text-center'>كود</th>";
			echo		"<th class='text-center'>الاســـم</th>
						<th class='text-center'>العنوان</th>
						<th class='text-center'>نتيجة استيفاء الأوراق</th>
						<th class='text-center'>ميعاد الاختبار التحريري</th>
						<th class='text-center'>التفاصيل</th>
					</tr>";
			foreach($result_data as $row){
				echo "<tr>";
				if($code==0) echo "<td>{$row[$id]}</td>";
				echo	"<td><a href='details.php?{$id}={$row[$id]}'>{$row[$name]}</a></td>
						 <td>{$row[$city]}</td>
                         <td>{$row[$paper_result]}</td>
                         <td>{$row[$exam_date]}</td>
                         ";								
				echo "<td><a href='details.php?{$id}={$row[$id]}'>المزيد..</a></td>
					 </tr>";
			
			}
			if($totalRow > $limit){
				echo "<tr>
						
						<td colspan='6' class='alert alert-info'><div class='center'>
							<a href='?entered={$q}&page=0'>الأولى</a>&nbsp; | &nbsp;
							<a href='?entered={$q}&page={$previous}'>السابقة</a>&nbsp; | &nbsp;
							<a href='?entered={$q}&page={$next}'>التالية</a>&nbsp; | &nbsp;
							<a href='?entered={$q}&page={$pages}'>الأخيرة</a>
						<div></td>
						
					 </tr>";
			}
			echo "</table>";
		}
	} //End of if(q != -1)  ?>


            </div>

            <div id="footer">
                <a class="btn btn-success" href='http://www.dkwasc.com.eg'><i class="fa fa-home" aria-hidden="true"></i>  الرئيسية   </a>
                <a class="btn btn-success" href='index.php'><i class="fa fa-search" aria-hidden="true"></i>
                     البحث</a>
                <br/>
                <br/>
                <p>جميع حقوق الطبع محفوظة - شركة مياه الشرب والصرف الصحي بالدقهلية © 2017</p>
            </div>
        </div>
    </body>
