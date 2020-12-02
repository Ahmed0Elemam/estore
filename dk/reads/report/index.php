<?php 
include 'connect.php';

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

$stmt = $connect->prepare("SELECT count(*) as count, district_number, new_reading, real_value, less FROM bills WHERE national_id is not null GROUP BY district_number");
$stmt->execute();
$rows = $stmt->fetchAll();
$stmt2 = $connect->prepare("select count(*) as countall from bills WHERE national_id is not null");
$stmt2->execute();
$rows2 = $stmt2->fetchAll();
$stmt3 = $connect->prepare("SELECT district_number, branch_no, group_no, file_no, account_no,
          customer_name, building_address_1, new_reading, real_value, meter_stat_code, national_id, mobile, landline FROM bills WHERE national_id is not null");
$stmt3->execute();
$rows3 = $stmt3->fetchAll();



?>
<html>

<head>
    <meta charset="utf-8">
    <meta name="description" content="الموقع الرسمي لشركة مياه الشرب والصرف الصحي بالدقهلية">
    <meta name="keywords" content="Dakahlia,Water,Sewer,Company, خدمات شركة مياه الدقهلية,شركة مياه الشرب والصرف الصحي بالدقهلية">
    <meta name="author" content="Eng. Ahmed Elemam">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta property="og:image" content="http://www.dkwasc.com.eg/jobs/images/logo.png" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="dkwasc.com.eg" />
    <meta property="og:title" content="خدمة الاستعلام عن الفاتورة | شركة مياه الشرب والصرف الصحي بالدقهلية" />
    <meta property="og:description" content="الموقع الرسمي لشركة مياه الشرب والصرف الصحي بالدقهلية" />
    <meta property="fb:app_id" content="673798652822430" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> - تقرير خدمة تسجيل قراءة العداد
 <?php echo date('F') .' '. date('Y') ; ?>        
</title>
    <link rel="SHORTCUT ICON" href="img/icon.gif" type="image/x-icon" />

    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <link rel="stylesheet" href="../../css/bootstrap-rtl.min.css">
    <link rel="stylesheet" href="../../css/fontawesome-all.min.css">

    <script src="../../js/jquery.min.js"></script>
    <script src="../../js/bootstrap-rtl.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs/dt-1.10.16/af-2.2.2/b-1.5.1/b-flash-1.5.1/b-html5-1.5.1/b-print-1.5.1/r-2.2.1/sc-1.4.3/sl-1.2.4/datatables.min.css" />

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/pdfmake.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/vfs_fonts.js"></script>
    <script type="text/javascript" src="js/jszip.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs/dt-1.10.16/af-2.2.2/b-1.5.1/b-flash-1.5.1/b-html5-1.5.1/b-print-1.5.1/r-2.2.1/sc-1.4.3/sl-1.2.4/datatables.min.js"></script>


    <link rel="stylesheet" href="css/style.css?<?php echo md5_file('css/style.css'); ?>">


    <script type="text/javascript">
        $(document).ready(function() {
            $('#report tfoot th').each(function() {
                var title = $(this).text();
                $(this).html('<input type="text" placeholder="Search ' + title + '" />');
            });
            var t = $('#report').DataTable({
                        dom: 'Bfrtip',
                    "language": {
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
                    dom: "<'row'<'col-md-4'l><'col-md-4'f><'col-md-4'B>>" +
                        "<'row'<'col-md-12'tr>>" +
                        "<'row'<'col-md-8 col-md-offset-2'i>>" +
                        "<'row'<'col-md-8 col-md-offset-2'p>>",
                    buttons: [{
                        extend: 'excel',
                        text: 'ملف اكسيل',
                        title: '- تقرير تسجيل قراءة العداد - ديسمبر 2019 ',
                        autoPrint: false,
                    },
                {
                    extend: 'print',
                    text: 'طباعة',

                }
                ],
                    stateSave: true,
                    pagingType: "full_numbers",
                    lengthMenu: [
                        [10, 25, 50, 100, -1],
                        [10, 25, 50, 100, "الكل"]
                    ],
                    responsive: true,
                    order: [
                        [1, 'asc']
                    ]
                }

            );


            t.on('order.dt search.dt', function() {
                t.column(0, {
                    search: 'applied',
                    order: 'applied'
                }).nodes().each(function(cell, i) {
                    cell.innerHTML = i + 1;
                    t.cell(cell).invalidate('dom');
                });
            }).draw();
            // Apply the search
            t.columns().every(function() {
                var that = this;

                $('input', this.footer()).on('keyup change', function() {
                    if (that.search() !== this.value) {
                        that
                            .search(this.value)
                            .draw();
                    }
                });
            });
        });
    </script>
    <script src='https://www.google.com/jsapi'></script>
    <script type="text/javascript">
        google.load("visualization", "1", {
            packages: ["corechart"]
        });
        google.setOnLoadCallback(drawChart1);

        function drawChart1() {
            var data = google.visualization.arrayToDataTable([
                ['المدينة', 'عدد المسجلين'],
                <?php foreach ($rows as $row) {
                    echo "['" . $arr_city[intval($row['district_number'])] . "', " . $row['count'] . "],";
                } ?>
            ]);

            var options = {

            };

            var chart = new google.visualization.ColumnChart(document.getElementById('chart_div1'));
            chart.draw(data, options);
        }


        $(window).resize(function() {
            drawChart1();
        });
    </script>

</head>

<body>
    <div class="container text-center">
        <div class="row header">
            <div class="col-md-4">
                <img src="img/logo.png" class="logo" alt="dakahlia water and sewer company logo" title="شركة مياه الشرب والصرف الصحي بالدقهلية" />
            </div>
            <div class="col-md-4">
                <br />
                <h1 class="text-center block-head"> تقرير تسجيل قراءة العداد</h1>
            </div>
            <div class="col-md-4">
                <img src="img/wcounter.png" class="wc" />
            </div>
        </div>
        <?php date_default_timezone_set('africa/cairo');
        echo "<div class='alert alert-info' style='width:40%; margin:0 auto;' dir='rtl'> التاريخ: " . date('Y-m-d') . " الوقت: " . date('h:i:s A', time()) . "</div>";
        ?>

    </div>

    <div class="fluid-container text-center">
        <table id="report" class="display" width="100%" cellspacing="0" dir="rtl">
            <thead>
                <tr class="text-center">
                    <th>م</th>
                    <th>المركز</th>
                    <th>الفرع</th>
                    <th>المجموعة</th>
                    <th>رقم الملف</th>
                    <th>رقم الحساب</th>
                    <th>اسم العميل</th>
                    <th>عنوان العميل</th>
                    <th>القراءة الحالية</th>
                    <th>القراءة المدخلة</th>
                    <th>الفرق </th>
                    <th>الرقم القومي</th>
                    <th>الموبايل</th>
                    <th>الأرضي</th>
                </tr>
            </thead>

            <tbody>
                <?php foreach ($rows3 as $row3) { ?>
                <tr>
                    <td></td>
                    <td class="text-center" id="area_text">
                        <?php echo $arr_city[intval($row3['district_number'])]; ?>
                    </td>
                    <td class="text-center">
                        <?php echo $row3['branch_no']; ?>
                    </td>
                    <td class="text-center">
                        <?php echo $row3['group_no']; ?>
                    </td>
                    <td class="text-center">
                        <?php echo $row3['file_no']; ?>
                    </td>
                    <td class="text-center">
                        <?php echo $row3['account_no']; ?>
                    </td>
                    <td class="text-center">
                        <?php echo $row3['customer_name']; ?>
                    </td>
                    <td class="text-center">
                        <?php echo $row3['building_address_1']; ?>
                    </td>
                    <td class="text-center">
                        <?php echo $row3['new_reading']; ?>
                    </td>
                    <td class="text-center">
                        <?php echo $row3['real_value']; ?>
                    </td>
                    <td class="text-center">
                        <?php echo $row3['real_value'] - $row3['new_reading']; ?>
                    </td>
                    <td class="text-center">
                        <?php echo $row3['national_id']; ?>
                    </td>
                    <td class="text-center">
                        <?php echo $row3['mobile']; ?>
                    </td>
                    <td class="text-center">
                        <?php echo $row3['landline']; ?>
                    </td>

                </tr>
                <?php 
            } ?>


            </tbody>
            <tfoot>
                <tr class="text-center">
                    <th>م</th>
                    <th>المركز</th>
                    <th>الفرع</th>
                    <th>المجموعة</th>
                    <th>رقم الملف</th>
                    <th>رقم الحساب</th>
                    <th>اسم العميل</th>
                    <th>عنوان العميل</th>
                    <th>القراءة الحالية</th>
                    <th>القراءة المدخلة</th>
                    <th>الفرق </th>
                    <th>الرقم القومي</th>
                    <th>الموبايل</th>
                    <th>الأرضي</th>
                </tr>
            </tfoot>
        </table>
    </div>

    <div class="container">
        <div class="col-md-12">
            <div id="chart_div1" style="margin:20px 0;"></div>
        </div>


    </div>

    <footer>
        <div class="container text-center">
            <a class="btn btn-primary" href='http://www.dkwasc.com.eg'><i class="fa fa-home" aria-hidden="true"></i> الرئيسية </a>
            <hr />
            <img src="img/billing-system.png" alt="billing system" width="250" height="20" style="margin-bottom:10px" />
            <p class="text-center"> حقوق الطبع محفوظة &copy; شركة مياه الشرب والصرف الصحى بالدقهلية
                <?php echo date("Y"); ?>
            </p>
        </div>
    </footer>


    <script>
        $('#report tfoot th').each(function() {
            var title = $('#report thead th').eq($(this).index()).text();
            $(this).html('<input type="text" placeholder="Search ' + title + '" />');
        });

        datatableInstance.columns().every(function() {
            var dataTableColumn = this;

            $(this.footer()).find('input').on('keyup change', function() {
                dataTableColumn.search(this.value).draw();
            });
        });
    </script>
</body>

</html> 