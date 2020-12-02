<?php
//get url variables
	$q = isset($_GET['q'])?$_GET['q']:-1; //-1 mean first page load
	if(is_numeric($q) || $q == "") $q = -1 ;          //numeric search or empty field not accept only alphabetic 
	
	$code= isset($_GET['code'])?$_GET['code']:0;
	
	$re = "/[\\~\\!\\@\\#\\$\\%\\^\\&\\*\\(\\)\\_\\+\\-\\=\\{\\}\\[\\]\\;\\:\\'\\\"\\?\\<\\>\\.\\,\\\\\\/]/i"; 
	if(preg_match($re, $q, $matches)) $q = -1;    //alphabetic character only accept - not any of special character
	

	
	$pIndex =intval( isset($_GET['pIndex'])?$_GET['pIndex']:0); // 0 : default index on first query
	$limit =  10 ; //maximum row per page



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
	$id 			 = 'id';
	$search 		 = 'search';
	$name 			 = 'name';
	$city 			 = 'city_name';
	$village 		 = 'village';
	$ordering		 = 'ordering';
	$sql = "select * from ad9_2016_driver_final
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
      <h3 class="alert alert-warning">نتائج البحث</h3>




      <?php 
	if($q != -1) {

		if( sizeof($result_data) <= 0){
			//no result
			echo"<div class='alert alert-danger'>لايوجد نتائج للبحث .. !!!</div>";
		}else{
			//show result
			echo "<table id='result' class='table table-bordered text-center'>
					<tr class='info' style='color:#000;'>";
			if($code==0) echo "<th class='text-center'>كود</th>";
			echo		"<th class='text-center'>الاســـم</th>
						<th class='text-center'>العنوان</th>
						<th class='text-center'>الترتيب</th>
						<th class='text-center'>التفاصيل</th>
					</tr>";
			foreach($result_data as $row){
				echo "<tr>";
				if($code==0) echo "<td>{$row[$id]}</td>";
				echo	"<td><a href='details.php?{$id}={$row[$id]}'>{$row[$name]}</a></td>
						 <td>{$row[$city]}</td>
                         <td>{$row[$ordering]}</td>
                         ";								
				echo "<td><a href='details.php?{$id}={$row[$id]}'>المزيد..</a></td>
					 </tr>";
			
			}
			if($totalRow > $limit){
				echo "<tr>
						
						<td colspan='6'><div class='center'>
							<a href='?q={$q}&pIndex=0'>الاول</a>&nbsp; | &nbsp;
							<a href='?q={$q}&pIndex={$previous}'>السابق</a>&nbsp; | &nbsp;
							<a href='?q={$q}&pIndex={$next}'>التالى</a>&nbsp; | &nbsp;
							<a href='?q={$q}&pIndex={$pages}'>الاخير</a>
						<div></td>
						
					 </tr>";
			}
			echo "</table>";
		}
	} //End of if(q != -1)  ?>




      <br/>
      <br/>

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
