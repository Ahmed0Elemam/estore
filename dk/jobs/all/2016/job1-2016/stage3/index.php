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



	
//database connection $link
		
require_once('../../../dbconnection.php');

//database query
	$col_id = 'id';
	$col_search = 'txtSearch';
	$col_name = 'person_name';
	$col_oracle_id =  'id';
	$col_address_city = 'city';
	$col_job = 'job';
	$col_result = 'result';
	//$col_stage1_Date = 'stage1_date';
	//$col_stage1_Day = 'stage1_day';

	$sql = "select jas.* from job_2016_app as ja 
				left join job_2016_stage1 as jas on ja.id = jas.id
				where ".$col_search." like '%".prepareQuery($q)."%'";
	
	
//first get the total of rows without limits
	$sqlResult=mysql_query($sql,$link)or die(mysql_error());
	$totalRow = mysql_num_rows($sqlResult);

//second get the rows in limit to dispalay
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


  <?php header("content-type: text/html; charset=utf8");?>
  <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
  <html xmlns="http://www.w3.org/1999/xhtml">

  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="مياه الشرب , الصرف الصحى , الدقهلية , القابضة , شركة مياه الشرب والصرف الصحى , water , sewer" />
    <meta name="description" content="شركة مياه الشرب والصرف الصحى بالدقهلية- مسابقة وظائف 2016" />
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
        نتيجة استيفاء الأوراق للمتقدمين للاعلان رقم (1) لسنة 2016 
      </h3>
      <h4 class="alert alert-info">
        أخصائي خدمة عملاء ثالث <i class="fa fa-circle" aria-hidden="true"></i> أخصائي خط ساخن ثالث <i class="fa fa-circle" aria-hidden="true"></i> أخصائي علاقات عامة وتوعية ثالث <i class="fa fa-circle" aria-hidden="true"></i> أخصائي نظم معلومات ثالث <i class="fa fa-circle" aria-hidden="true"></i> فني مساحة
      </h4>
      <form action="" method="GET">
        <div class="row">
          <div class="col-md-6 col-md-offset-3">
            <label>نص البحث</label>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 col-md-offset-3">
            <input class="form-control" type="text" id="q" name="q" size="50" placeholder="الاسـم" required/>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 col-md-offset-3">
            <button width="100%" class="btn btn-primary" type="submit" name="submit" id="submit"><i class="fa fa-search" aria-hidden="true"></i> بحث</button>
          </div>
        </div>
      </form>
      <br />

      <?php 
	if($q != -1) {

		if( sizeof($result_data) <= 0){
			//no result
			echo"<br>لايوجد نتائج للبحث .. !!!<br>";
		}else{
			//show result
			echo "<table id='results' class='table table-bordered text-center'>
					<tr class='info' style='color:#000;'>";
			if($code==0) echo "<th width='30px'>كود</th>";
			echo		"<th class='text-center'>الاســـم</th>
						<th class='text-center'>العنوان</th>
						<th class='text-center'>الوظيفة المتقدم لها</th>
						<th class='text-center'>نتيجة استيفاء الأوراق</th>
						<th class='text-center'>التفاصيل</th>
					</tr>";
			foreach($result_data as $row){
				echo "<tr>";
				if($code==0) echo "<td>{$row[$col_oracle_id]}</td>";
				echo	"<td style='text-align:right;';><a href='result.php?{$col_id}={$row[$col_id]}'>{$row[$col_name]}</a></td>
						 <td>{$row[$col_address_city]}</td>
						 <td>{$row[$col_job]}</td>
						<td>{$row[$col_result]}</td>";
						
				
				echo "<td><a href='result.php?{$col_id}={$row[$col_id]}'>للمزيد..</a></td>
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


      <div id="footer">
         <a class="btn btn-success" href='http://www.dkwasc.com.eg'><i class="fa fa-home" aria-hidden="true"></i> الصفحة الرئيسية للشركة  </a>
        <a class="btn btn-success" href='../../../index.php'><i class="fa fa-home" aria-hidden="true"></i> صفحة الوظائف الكلية  </a>
        <br/>
        <br/>
        <div>جميع حقوق الطبع محفوظة - شركة مياه الشرب والصرف الصحي بالدقهلية © 2016</div>
      </div>
    </div>
  </body>