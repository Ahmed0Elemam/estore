<?php
//get url variables
$q = isset($_GET['entered']) ? $_GET['entered'] : -1; //-1 mean first page load
if (is_numeric($q) || $q == "") $q = -1;          //numeric search or empty field not accept only alphabetic 

$code = isset($_GET['code']) ? $_GET['code'] : 0;

$re = "/[\\~\\!\\@\\#\\$\\%\\^\\&\\*\\(\\)\\_\\+\\-\\=\\{\\}\\[\\]\\;\\:\\'\\\"\\?\\<\\>\\.\\,\\\\\\/]/i";
if (preg_match($re, $q, $matches)) $q = -1;    //alphabetic character only accept - not any of special character



$pIndex = intval(isset($_GET['page']) ? $_GET['page'] : 0); // 0 : default index on first query
$limit = 5; //maximum row per page



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
	$str = preg_replace($patterns, $replacements, $str);
	return $str;
}
include "../connect.php";

//database query
$id = 'id';
$search = 'search';
$name = 'name';
$city = 'city_name';
$village = 'village';
$degree = 'degree';
$interview_date = 'interview_date';
$interview_day = 'interview_day';
$interview_hour = 'interview_hour';
$text = prepareQuery($q);


//first get the total of rows without limits
//$sqlResult = mysql_query($sql, $link) or die(mysql_error());
$sqlResult = $connect->prepare("select * from ad6_2019_worker_stage4
				where search like '%$text%'");
$sqlResult->execute();
$totalRow = $sqlResult->rowCount();


//second get the rows in limit to display
$index = $pIndex * $limit;
//$sql = $sql . " LIMIT " . ($pIndex * $limit) . " , " . $limit;
//$sqlResult = mysql_query($sql, $link) or die(mysql_error());
$sqlResult2 = $connect->prepare("select * from ad6_2019_worker_stage4
				where search like '%$text%' LIMIT $index , $limit");
$sqlResult2->execute();
$result_data = $sqlResult2->fetchAll();
$currentRowCount = $sqlResult2->rowCount();

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

$adv_title = "نتيجة الاختبار التحريري ومواعيد المقابلة الشخصية لوظيفة عامل حفر وتسليك وتطهير | اعلان 6 لسنة 2019";
$adv_link = "dkwasc.com.eg/jobs/2019/job6_2019_worker/stage4/";
$job_no = "نتيجة الاختبار التحريري ومواعيد المقابلة الشخصية للمتقدمين للاعلان رقم 6 لسنة 2019";
$job_title = " وظيفة عامل حفر وتسليك وتطهير";
include "../header.php";

?>

<h3 class="alert alert-info">نتائج البحث</h3>


<?php
if ($q != -1) {

	if (sizeof($result_data) <= 0) {
		//no result
		echo "<div class='alert alert-danger'>عفواً !!! لا توجد نتائج للبحث !!!</div>";
	} else {
		//show result
		echo "<table id='results' class='table table-bordered text-center'>
					<tr class='info' style='color:#000;'>";
		if ($code == 0) echo "<th class='text-center'>كود</th>";
		echo		"<th class='text-center'>الاســـم</th>
						<th class='text-center'>العنوان</th>
						<th class='text-center'>نتيجة الاختبار التحريري</th>
						<th class='text-center'>ميعاد المقابلة الشخصية</th>
						<th class='text-center'>التفاصيل</th>
					</tr>";
		foreach ($result_data as $row) {
			if (is_numeric($row[$degree]) and $row[$degree] >= 25 and $row[$degree] != NULL) {
				$result = "<strong class='text-success'>
                    ناجح
                    </strong>";
			} elseif (is_numeric($row[$degree]) and $row[$degree] < 25 and $row[$degree] != NULL) {
				$result = "<strong class='text-danger'>   
                    لم يتجاوز الحد الأدنى المطلوب
                    </strong>";
			} elseif ( empty($row[$degree]) or $row[$degree] == NULL) {
				$result = "<strong class='text-danger'>
                  تغيب عن حضور الإختبار التحريري
                  </strong>";
			}
			echo "<tr>";
			if ($code == 0) echo "<td>{$row[$id]}</td>";
			echo	"<td><a href='details.php?{$id}={$row[$id]}'>{$row[$name]}</a></td>
						 <td>{$row[$city]}</td>
                         <td>{$result}</td>
                         <td>{$row[$interview_day]}
												 <div style='display:inline-block;'>
												 {$row[$interview_date]}
												</div>
											   $row[$interview_hour]  </td>
                         ";
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
}     ?>


</div>
<?php
include "../footer2.php";
?>