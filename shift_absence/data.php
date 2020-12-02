<html>
  <head>
  <meta charset="utf-8">
  <link href="css/datatables.min.css" rel="stylesheet" type="text/css" />
  <link href="css/dataTables.semanticui.min.css" rel="stylesheet" type="text/css" />
  <link href="css/style.css?<?php echo md5_file("css/style.css"); ?>" rel="stylesheet" type="text/css" />
  <link rel="SHORTCUT ICON" href="img/icon.gif" type="image/x-icon" />
  <script language="javascript" src="js/datatables.min.js" type="text/javascript"></script>
  <script language="javascript" src="js/dataTables.semanticui.min.js" type="text/javascript"></script>
  <script type="text/javascript" src="js/jszip.min.js"></script>

  <script type="text/javascript">
        $(document).ready(function() {
            var t = $('#report').DataTable({
                language: {
                        processing: 'جاري التحميل',
                        search: '_INPUT_ بحث',
                        lengthMenu: 'عرض <select>' +
                            '<option value="10">10</option>' +
                            '<option value="25">25</option>' +
                            '<option value="50">50</option>' +
                            '<option value="100">100</option>' +
                            '<option value="-1">الكل</option>' +
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
        dom: "<'ui stackable grid'"+
    "<'row'"+
        "<'four wide column'l>"+
        "<'right aligned eight wide column'f>"+
        "<'four wide column'B>"+
    ">"+
    "<'row dt-table'"+
        "<'sixteen wide column'tr>"+
    ">"+
    "<'row'"+
        "<'seven wide column'i>"+
        "<'right aligned nine wide column'p>"+
    ">"+
">",
                searching: true,
                    stateSave: true,
                    pagingType: "full_numbers",
                    responsive: true,
                    order: [
                        [1, 'asc']
                    ],
                    buttons: [{
                        extend: 'print',
                        text: 'طباعة',
                        customize: function ( win ) {
                    $(win.document.body).css('font-size','14px')
                        .prepend(
                            '<h3 class="ui header"> تقرير الحضور لموظفي الورادي بشركة مياه الشرب والصرف الصحي بالدقهلية</h3>'+
                            '<h3 style="margin-top:0;">  في الفترة من '+$('#date1').val()+'  الى  '+ $('#date3').val()+'</h3>'
                        );
 
                    $(win.document.body).find( 'table' )
                        .addClass( 'compact' )
                        .css( 'font-size', 'inherit' );
                }, title: '',
                                }],

                                
                });

                t.on('order.dt search.dt', function() {
                t.column(0, {
                    search: 'applied',
                    order: 'applied'
                }).nodes().each(function(cell, i) {
                    cell.innerHTML = i + 1;
                    t.cell(cell).invalidate('dom');
                });
            }).draw();


            });
    </script>
  

</head>
<body>
<hr/>
<table class="ui celled padded table display center aligned" id="report">
  <thead>
    <tr>
      <th scope="col">م</th>
      <th scope="col">كود الموظف</th>
      <th scope="col">اسم الموظف</th>
      <th scope="col">الادارة</th>
      <th scope="col">مجموعة العمل</th>
      <th scope="col"> تاريخ الحضور</th>
      <th scope="col"> وقت الحضور</th>
      <th scope="col"> تاريخ الانصراف</th>
      <th scope="col"> وقت الانصراف</th>


    </tr>
  </thead>
  <tbody>
    <tr>

<?php 
include "connect.php";
date_default_timezone_set('africa/cairo'); 
$date_from = strtotime($_REQUEST['date_from']);
$date_to = strtotime($_REQUEST['date_to']);

$dates = [];

for ($i=$date_from; $i<=$date_to; $i+=86400) {  
  array_push($dates,date("Y-m-d", $i));  
}


for ($j=0; $j<=count($dates); $j++) {

$day_before =  $dates[$j];//   from  date loop

$date = date('Y-m-d h:i:sa');


// Get general WORK GROUP 
$stmt0= $conn->prepare("select * from WORK_SCH_GRP where GRP_STOP = 0");
$stmt0->execute(array($date));
$results0 = $stmt0->fetchAll();
        foreach($results0 as $result0) {
                $grp_id = $result0['GRP_ID'];
                $grp_name = $result0['GRP_NAME'];


// Group   8 - 8 بداية السبت --------------- 
if ($grp_id == 117) { 


$attend_begin = date($day_before.' 19:00:00');
$attend_end = date($day_before.' 20:30:00');

$leave = date($day_before.' 08:00:00');
$leave_date = date('Y-m-d', strtotime('+1 day', strtotime($leave)));
$leave_begin = date($leave_date.' 08:00:00');

$leave_end = date($leave_date.' 23:59:00');



$stmt = $conn->prepare("select trans.EMP_ID , min(trans.TRANS_TIME) as attend, max(trans.TRANS_TIME) as leave from RAW_TRANSACTIONS as trans join EMPLOYEE_WORK_SCH_GRP as grp on trans.EMP_ID = grp.EMP_ID where trans.TRANS_TIME  >= ? AND trans.TRANS_TIME  < ? and grp.GRP_ID = ? and grp.TODATE >= ? group by trans.EMP_ID");
$stmt->execute(array($attend_begin, $leave_end, $grp_id, $date));
$results = $stmt->fetchAll();
$count = $stmt->rowCount();

foreach($results as $result) {
    $emp_id = $result['EMP_ID'];
     echo   '<td></td><td>'.$emp_id. '</td>';

// Get name and department
$stmt3 = $conn->prepare("select * from EMPLOYEES as emp  join DEPARTMENTS as dep ON emp.DEPID = dep.DEP_ID where emp.EMP_ID = ? ");
$stmt3->execute(array($emp_id));
$results3 = $stmt3->fetchAll();
        foreach($results3 as $result3) {
                echo '<td>'.$result3['EMP_FIRST_NAME'].' </td>' ;
                echo '<td>'.$result3['DEP_NAME'].' </td>'  ;

        }

// Get WORK GROUP for each emp
$stmt4 = $conn->prepare("select * from EMPLOYEE_WORK_SCH_GRP as grp  join WORK_SCH_GRP as grp_name ON grp.GRP_ID = grp_name.GRP_ID where grp.EMP_ID = ? and grp.TODATE >= ? and grp.GRP_ID = ?");
$stmt4->execute(array($emp_id, $date, $grp_id));
$results4 = $stmt4->fetchAll();
        foreach($results4 as $result4) {
                echo '<td>'.$result4['GRP_NAME'].' </td>' ;

        }


        $att= strtotime($result['attend']);
        $lv= strtotime($result['leave']);
        $leave_time = date("H:i",$lv);
        $attend_time =  date("H:i",$att);
        $dt_att =  date("Y-m-d", $att);
        $dt_lv =  date("Y-m-d", $lv);
        
          echo  '<td>'.$dt_att.' </td>';
          echo  '<td>'.$attend_time.' </td>';
          echo  '<td>'.$dt_lv.' </td>';
          echo  '<td>'.$leave_time.' </td></tr>';

}


// end group 117
 } elseif ($grp_id == 118) { 
// group 118   8 - 8 بداية الأحد


        
        
        // end group 118
        } 



// end group loop
}
// End DATE loop
}

?>
 
   </tbody>
</table>



</body>
