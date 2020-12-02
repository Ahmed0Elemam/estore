<?php
global $arr_city;
$arr_city = array(
1 => "غرب المنصورة",
2 => "شرق المنصورة",
3 => "مركز المنصورة",
4 => "ميت سلسيل",
5 => "طلخا",
6 => "نبروه",
7 => "بلقاس",
8 => "الجمالية",
9 => "المطرية",
10 => "المنزلة",
11 => "بني عبيد",
12 => "جمصة",
13 => "شربين",
14 => "دكرنس",
15 => "تمي الأمديد",
16 => "منية النصر",
17 => "أجا",
18 => "ميت غمر",
19 => "السنبلاوين",
22 => "الكردي"
);


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



if (isset($_REQUEST['search'])) {
    $search =  $_REQUEST['search'];
    $_search = prepareQuery($search);
}

if (!empty($_search)) {
    include('connect.php');

    $stmt = $connect->prepare("SELECT * FROM bills1 WHERE search like '%".$_search."%' ORDER BY district_number ASC");
    $stmt->execute();
    $rows = $stmt->fetchAll(); ?>
		<table id="report" class="cell-border" width="100%">
		<thead>
				<tr class="text-center">
						<th class="text-center">م</th>
						<th class="text-center">الاسم</th>
						<th class="text-center">العنوان</th>
						<th class="text-center">  الفرع</th>
						<th class="text-center"> المجموعة</th>
						<th class="text-center"> الحساب</th>
						<th class="text-center">التفاصيل</th>
						

				</tr>
		</thead>

		<tbody>
<?php
foreach ($rows as $row3) { ?>
 <tr>
						<td></td>
						
						<td class="text-center">
							<?php echo $row3['customer_name']; ?>
						</td>
						<td class="text-center">
                        <?php echo $arr_city[intval($row3['district_number'])] ." - ".$row3['building_address_1']; ?>
						</td>
						 <td class="text-center">
								 <?php echo $row3['branch_no']; ?>
						</td>

                        <td class="text-center">
								 <?php echo $row3['group_no']; ?>
						</td>

						<td class="text-center">
							<?php echo $row3['account_no']; ?>
						</td>
                         <td class="text-center">
                                <?php
                            echo "
                            <a target='_blank' href='details.php?area={$row3['district_number']}&b={$row3['branch_no']}&g={$row3['group_no']}&acc={$row3['account_no']}'>المزيد</a>
                            ";
                            ?>
                         </td>
				</tr>
				<?php
                        }


				?>
</tbody>
</table>
<?php 
} else {
    echo "<div class='alert alert-danger'>لم يتم ادخال الاسم</div>";
}
?>

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
                text: 'طباعة',
                exportOptions: {
                    columns: [ 0, 1, 2, 3, 4, 5 ]
                }
                    }
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
