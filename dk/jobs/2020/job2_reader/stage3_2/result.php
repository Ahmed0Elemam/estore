<?php
//get url variables
$q = isset($_GET['entered']) ? $_GET['entered'] : -1; //-1 mean first page load
if (is_numeric($q) || $q == "") $q = -1;          //numeric search or empty field not accept only alphabetic 

$code = isset($_GET['code']) ? $_GET['code'] : 0;

$re = "/[\\~\\!\\@\\#\\$\\%\\^\\&\\*\\(\\)\\_\\+\\-\\=\\{\\}\\[\\]\\;\\:\\'\\\"\\?\\<\\>\\.\\,\\\\\\/]/i";
if (preg_match($re, $q, $matches)) $q = -1;    //alphabetic character only accept - not any of special character



$pIndex = intval(isset($_GET['page']) ? $_GET['page'] : 0); // 0 : default index on first query
$limit =  5; //maximum row per page

function prepareQuery($str)
{
	$str = preg_replace('/ /', '', $str);
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
include "../connect.php";

//database query
$id = 'id';
$search = 'search';
$name = 'name';
$city = 'city_name';
$village = 'village';
$paper_result = 'result';
$exam_day = 'exam_day';
$exam_date = 'exam_date';
$exam_hour = 'exam_hour';
$text = prepareQuery($q);


//first get the total of rows without limits

$sqlResult = $connect->prepare("select * from job2_2020_reader_stage3_2
				where search like '%$text%'");
$sqlResult->execute();
$totalRow = $sqlResult->rowCount();


//second get the rows in limit to display
$index = $pIndex * $limit;

$sqlResult2 = $connect->prepare("select * from job2_2020_reader_stage3_2
				where search like '%$text%' LIMIT $index , $limit");
$sqlResult2->execute();
$result_data = $sqlResult2->fetchAll();
$currentRowCount = $sqlResult2->rowCount();


/*//database query execution  - convert to PHP Array
$result_data = array();
while ($row = mysql_fetch_assoc($sqlResult)) {
    $result_data[] = $row;
}
//close database connection
mysql_close($link);*/
//prepare paging the result - all matched rows
$pages = intval($totalRow / $limit);
$start = 0;
$previous = 0;
$next = 0;
$last = $pages;

if ($pIndex >= 0 && $pIndex < $pages) {
	if ($pIndex > 0) $previous = $pIndex - 1;
	$next = $pIndex + 1;
} else {
	$previous = $pIndex - 1;
	$next = $pIndex;
}

$adv_title = "مواعيد الاختبار التحريري للذين تخلفوا عن الاختبار التحريري الأساسي لوظيفة محصل بالعمولة | اعلان رقم 2 لسنة 2020";
$adv_link = "dkwasc.com.eg/jobs/2020/job2_reader/stage3_2/";
$job_no = " مواعيد الاختبار التحريري للذين تخلفوا عن الإختبار التحريري الأساسي - اعلان رقم 2 لسنة 2020";
$job_title = "وظيفة محصل بنظام العمولة";
include "../header.php";
?>


<h3 class="alert alert-info">نتائج البحث</h3>


<?php
if ($q != -1) {

	if (sizeof($result_data) <= 0) {
		//no result
		echo "<div class='alert alert-danger'>لايوجد نتائج للبحث .. !!!</div>";
	} else {
		//show result
		echo "<table id='results' class='table table-bordered text-center'>
					<tr class='info' style='color:#000;'>";
		if ($code == 0) echo "<th class='text-center'>كود</th>";
		echo		"<th class='text-center'>الاســـم</th>
						<th class='text-center'>العنوان</th>
						<th class='text-center'>ميعاد الإختبار التحريري</th>
						<th class='text-center'>التفاصيل</th>
					</tr>";
		foreach ($result_data as $row) {
			echo "<tr>";
			if ($code == 0) echo "<td>$row[$id]</td>";
			echo	"<td><a href='details.php?{$id}={$row[$id]}'>$row[$name]</a></td>
						 <td>$row[$city]</td>";
								 if ($row[$paper_result] == 1) {
									 echo "
									 <td>$row[$exam_day]
						 <div style='display:inline-block;'>
						 $row[$exam_date]
						</div>
						$row[$exam_hour]  </td>";
								 } elseif($row[$paper_result] == 2 or $row[$paper_result] == 0) {
									echo "<td class='text-danger'>غير مستوفي</td>";
									echo "<td> </td>";
								 }else {
									echo "<td> </td>";
									echo "<td> </td>";
								 }
								 ;
		
			echo "<td><a href='details.php?{$id}={$row[$id]}'>المزيد..</a></td>
					 </tr>";
		}
		if ($totalRow > $limit) {
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
} else { //End of if(q != -1)
	echo "<div class='alert alert-danger'>عفواً !!! لا توجد نتائج للبحث !!!</div>";
}

?>


</div>


<?php
include "../footer2.php";
?>