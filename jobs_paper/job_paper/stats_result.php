<?php
$arr_city = array(
  1 => "أجا",
  2 => "الجمالية",
  3 => "السنبلاوين",
  4 => "الكردي",
  5 => "المطرية",
  6 => "المنزلة",
  7 => "المنصورة",
  8 => "بلقاس",
  9 => "بني عبيد",
  10 => "تمي الأمديد",
  11 => "جمصة",
  12 => "دكرنس",
  13 => "شربين",
  14 => "طلخا",
  15 => "محلة الدمنة",
  16 => "منية النصر",
  17 => "ميت سلسيل",
  18 => "ميت غمر",
  19 => "نبروه"
  );

  $arr_paper_result = array(
    1 => "مستوفي",
    2 => "غير مستوفي",
    3 => "لم يتقدم بالأوراق"
  );


 $date_from = $_REQUEST['date_from'];

$date_to = $_REQUEST['date_to'];

if ((isset($date_from) && !empty($date_from)) || (isset($date_to) && !empty($date_to))) {
include 'connect.php';
$stmt4 = $connect->prepare('select * from job1_2020_technical_stage3_paper_result as s3 right join  job1_2020_technical_stage2 as s2 ON s3.id = s2.id where s3.paper_entry_date >= ? and s3.paper_entry_date <= ? ');
$stmt4->execute(array($date_from,$date_to));
$details4 = $stmt4->fetchAll();
?>
<table id="report" class="cell-border" width="100%">
		<thead>
				<tr class="text-center">
						<th class="text-center">م</th>
						<th class="text-center">الكود</th>
						<th class="text-center">الاسم</th>
						<th class="text-center">المركز</th>
						<th class="text-center">  العنوان</th>
						<th class="text-center"> التخصص</th>
						<th class="text-center"> نتيجة الاستيفاء</th>
						<th class="text-center">السبب الأول</th>
						<th class="text-center">السبب الثاني</th>
						<th class="text-center">السبب الثالث</th>
						<th class="text-center">ملاحظات</th>
						<th class="text-center">تاريخ التسجيل</th>
						<th class="text-center">موعد تقديم الأوراق</th>
						

				</tr>
		</thead>

		<tbody>
<?php
foreach ($details4 as $d) { ?>
 <tr>
            <td></td>
            <td class="text-center">
							<?php echo $d['id']; ?>
            </td>
						
						<td class="text-center">
							<?php echo $d['name']; ?>
            </td>
            <td class="text-center">
							<?php echo $d['city_name']; ?>
						</td>
						<td class="text-center">
                        <?php echo $d['village'] ." - ".$d['street']; ?>
						</td>
						 <td class="text-center">
								 <?php echo $d['study_name']; ?>
						</td>

            <td class="text-center">
								 <?php echo $arr_paper_result[intval($d['paper_result'])]; ?>
						</td>

						<td class="text-center">
							<?php echo $d['reason1']; ?>
            </td>

            <td class="text-center">
							<?php echo $d['reason2']; ?>
            </td>
            
            <td class="text-center">
							<?php echo $d['reason3']; ?>
            </td>

            <td class="text-center">
							<?php echo $d['notes']; ?>
            </td>
            
            <td class="text-center">
					<?php echo $d['paper_entry_date']; ?>
			</td>

            <td class="text-center">
					<?php echo $d['paper_date']; ?>
			</td>
            
				</tr>
				<?php
                        }


				?>
</tbody>
</table>

 <script type="text/javascript">
        $(document).ready(function() {
            var t = $('#report').DataTable({
                
                    "language": {
                        processing: 'جاري التحميل',
                        search:'_INPUT_ بحث',
                        lengthMenu: 'عرض <select>'+
      '<option value="10">10</option>'+
      '<option value="25">25</option>'+
      '<option value="50">50</option>'+
      '<option value="100">100</option>'+
      '<option value="-1">الكل</option>'+
      '</select> سجل',
                        info: "عرض _START_ إلى _END_ من مجموع _TOTAL_ سجل",
                        infoEmpty: "يعرض  0 إلى 0 من أصل 0 سجل",
                        infoFiltered: "(مفلترة من مجموع _MAX_ سجل)",
                        infoPostFix: "",
                        loadingRecords: "جاري تحميل البيانات",
                        zeroRecords: "عفوا !!! لا توجد بيانات !!!",
                        emptyTable: "عفوا ... لا توجد بيانات",
                        paginate: {
                            first: "الأولى",
                            previous: "السابقة",
                            next: "التالية",
                            last: "الأخيرة"
                        },
                        aria: {
                            sortAscending: "ترتيب تصاعدي",
                            sortDescending: "ترتيب تنازلي"
                        }
                    },
                  dom: "<'row'<'col-sm-4'B><'col-sm-4'l><'col-sm-4'f>>" +
"<'row'<'col-sm-12'tr>>" +
"<'row'<'col-sm-5'i><'col-sm-7'p>>",
                buttons: [
                    {
                extend: 'print',
                text: 'طباعة'
                ,
                exportOptions: {
                    columns: [ 0, 1, 2, 3, 4, 5,6,7,8,9,10 ]
                }
                    },'excel'
                ],
                stateSave: true,
                pagingType: "full_numbers",
                lengthMenu: [ [10, 25, 50, 100, -1], [10, 25, 50,100 , "الكل"] ],
                responsive: true
                }

            );
            
            t.on( 'order.dt search.dt', function () {
   t.column(0, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
      cell.innerHTML = i + 1;
      t.cell(cell).invalidate('dom'); 
   } );
} ).draw();
                });
            </script>


<?php
} else {
  echo '<div class="alert alert-danger">لم يتم اختيار التاريخ</div>';
}
?>