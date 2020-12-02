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



$arr_industry_name = array(
  1 => 'صناعة المنسوجات',
  2 => 'معامل الملابس والسجاد',
  3 => 'صناعة الصلب',
  4 => 'مواد البناء',
  5 => 'الخزف و الصيني',
  6 => 'الزجاجيات',
  7 => 'الصباغة و التجهيز',
  8 => 'الصناعات الغذائية',
  9 => 'المجازر',
  10 => 'المشروبات الغازية',
  11 => 'المطاعم و الفنادق',
  12 => 'الورق',
  13 => 'الدباغة',
  14 => 'المستشفيات',
  15 => 'صناعة الكيماويات',
  16 => 'صناعة الأدوية',
  17 => 'الطلاء بالمعادن و تشطيب المعادن',
  18 => 'البويات',
  19 => 'تشطيب الأثاث',
  20 => 'الطباعة',
  21 => 'البلاستيك',
  22 => 'تكرير البترول',
  23 => 'بوليمرات',
  24 => 'بتروكيماويات',
  25 => 'أسمدة ومبيدات',
  26 => 'محطات خدمة السيارات'
);

$arr_contract_type = array(
1 => "متعاقد",
2 => "غير متعاقد"
);

$arr_account_type = array(
            1 => 'منزلى',
            2 => 'قائم عمارة',
            8 => 'تجاري',
            10 => 'حكومة',
            22 => 'خدمي',
            23 => 'صناعي',
            24 => 'سياحي',
            25 => 'أخرى',
            40 => 'ممارسة منزلي',
            41 => 'ممارسة 2 غرفة',
            42 => 'ممارسة 3 غرفة',
            43 => 'ممارسة',
            44 => 'ممارسة تجاري',
            46 => 'ممارسة حكومي ',
            50 => 'ممارسة',
            51 => 'ممارسة صرف صحي ',
            52 => 'ممارسة صرف صحي',
            53 => 'ممارسة صرف صحي',
            54 => 'ممارسة صرف صحي',
            55 => 'ممارسة صرف صحي',
            56 => 'ممارسة صرف صحي',
            57 => 'ممارسة صرف صحي',
            58 => 'ممارسة صرف مغسلة',
            59 => 'ممارسة صرف صحي' 
    );
    
$arr_water_source = array(
1 => "نيلي",
2 => "جوفي",
3 => "حكومي",
4 => "أخرى"
);


$arr_waste_type = array(
1 => "صحي",
2 => "صناعي"
);

$arr_license_type = array(
1 => "دائمة",
2 => "مؤقتة"
);

$arr_rep_reason = array(
1 => "خطة الادارة",
2 => "حساب الأحمال الهيدروليكية",
3 => "تسوية مستحقات الشركة",
4 => "شكوى",
5 => "وصل المباني",
6 => "تعديل مطالبات الأعباء طبقاً لفاتورة المياه",
7 => "تعديل مطالبات الأحمال طبقاً لكمية المياه",
8 => "الاعتراض على نتيجة التحليل"
);


$arr_building_pos = array(
1 => "تعمل",
2 => "متوقفة"
);


$arr_meter = array(
1 => "يعمل",
2 => "لا يعمل"               
);
    
$arr_units = array(
1 => "توجد",
2 => "لا توجد"               
);

$arr_sample = array(
1 => "نعم",
2 => "لا"
);


include "connect.php";
$stmt3 = $connect->prepare("SELECT * FROM building_info");
$stmt3->execute();
$rows3 = $stmt3->fetchAll();

$stmt4 = $connect->prepare("SELECT * FROM building_report");
$stmt4->execute();
$rows4 = $stmt4->fetchAll();

?>
<!DOCTYPE html>
<html>

<head>

<link rel="stylesheet" type="text/css" href="css/datatables.min.css"/>
 
<script type="text/javascript" src="js/pdfmake.min.js"></script>
<script type="text/javascript" src="js/vfs_fonts.js"></script>
<script type="text/javascript" src="js/datatables.min.js"></script>

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
                dom: "<'row'<'col-md-4'l><'col-md-4'f><'col-md-4'B>>" +
"<'row'<'col-md-12'tr>>" +
"<'row'<'col-md-8 col-md-offset-2'i>>"+
                "<'row'<'col-md-8 col-md-offset-2'p>>",
                buttons: [],
                stateSave: true,
                pagingType: "full_numbers",
                lengthMenu: [ [10, 25, 50, 100, -1], [10, 25, 50,100 , "الكل"] ],
                responsive: true,
                 order: [[ 1, 'asc' ]]
                }

            );
            
            t.on( 'order.dt search.dt', function () {
        t.column(0, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
            cell.innerHTML = i+1;
        } );
    } ).draw();
        });

    </script>
    
     <script type="text/javascript">
        $(document).ready(function() {
            var t = $('#report2').DataTable({
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
                dom: "<'row'<'col-md-4'l><'col-md-4'f><'col-md-4'B>>" +
"<'row'<'col-md-12'tr>>" +
"<'row'<'col-md-8 col-md-offset-2'i>>"+
                "<'row'<'col-md-8 col-md-offset-2'p>>",
                buttons: [],
                stateSave: true,
                pagingType: "full_numbers",
                lengthMenu: [ [10, 25, 50, 100, -1], [10, 25, 50,100 , "الكل"] ],
                responsive: true,
                 order: [[ 1, 'asc' ]]
                }

            );
            
            t.on( 'order.dt search.dt', function () {
        t.column(0, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
            cell.innerHTML = i+1;
        } );
    } ).draw();
        });

    </script>



   
</head>
<body>

<h2 style="background-color: rgb(221, 249, 255);padding: 20px; margin: 20px 0;">بيانات المنشآت</h2>

<table id="report" class="display" width="100%" cellspacing="0" dir="rtl">
                <thead>
                    <tr class="text-center">
                        <th>م</th>
                        <th>تعديل</th>
                        <th>الكود</th>
                        <th>الاسم</th>
                        <th>العنوان</th>
                        <th>المنطقة</th>
                        <th>نوع الحساب</th>
                        <th>الفرع</th>
                        <th>رقم الحساب</th>
                        <th>عقد الترخيص</th>
                        <th>تاريخ تحرير العقد</th>
                        <th>مسمى الصناعات</th>
                        <th>مسمى الحي</th>
                        <th>موبايل المنشأة</th>
                        <th>تليفون المنشأة</th>
                        <th>فاكس المنشأة</th>
                        <th>اسم المالك</th>
                        <th>تليفون المالك</th>
                        <th>اسم المدير</th>
                        <th>تليفون المدير</th>
                        <th>نشاط المنشأة</th>
                        <th>المواد المستخدمة في الصناعة</th>
                        <th>عدد ورادي العمل</th>
                        <th>عدد أيام العمل</th>
                        <th>عدد العاملين</th>
                        <th>مساحة المنشأة</th>
                        <th>أيام الأجازة</th>
                        <th>رقم الترخيص</th>
                        <th>تاريخ الترخيص</th>
                        <th>تاريخ انتهاء الترخيص</th>
                        <th>نوع الصرف</th>
                        <th>جهة الصرف</th>
                        <th>نوع الرخصة</th>
                        <th>ملاحظات</th>

                    </tr>
                </thead>

                <tbody>
        <?php 
           foreach($rows3 as $row3){ ?>
             <tr>
                        <td></td>
                        <td>
                            <a class="btn btn-danger" href="building_edit.php?bid=<?php echo $row3['building_code']; ?>"><i class="fa fa-edit"></i> تعديل</a>
                        </td>
                        <td class="text-center">
                            <?php echo $row3['building_code']; ?>
                        </td>
                        
                        <td class="text-center">
                          <?php echo $row3['building_name']; ?>
                        </td>
                        <td class="text-center">
                             <?php echo $row3['building_address']; ?>
                        </td>
                        <td class="text-center">
                          <?php echo $arr_city[intval($row3['area'])]; ?>
                       </td>
                        <td class="text-center">
                          <?php echo $arr_account_type[intval($row3['account_type'])]; ?>
                        </td>
                         <td class="text-center">
                             <?php echo $row3['branch_num']; ?>
                        </td>
                        <td class="text-center">
                          <?php echo $row3['account_num']; ?>
                        </td>
                         <td class="text-center">
                           <?php echo $arr_contract_type[intval($row3['contract_type'])]; ?>
                        </td>
                        <td class="text-center">
                          <?php echo $row3['contract_date']; ?>
                        </td>
                        <td class="text-center">
                        <?php 
                              if($row3['industry_name'] == null or empty($row3['industry_name'])) {
                                    echo "بيانات لم تضاف";
                                } else {
                                    echo $arr_industry_name[intval($row3['industry_name'])];
                                }
                          ?>
    
                        </td>

                        <td class="text-center">
                        <?php 
                              if(empty($row3['state_name'])) {
                                    echo "بيانات لم تضاف";
                                } else {
                                    echo $row3['state_name'];
                                }

                          ?>
                        </td>
                        <td class="text-center">
                          <?php echo $row3['building_mobile']; ?>
                        </td>
                        <td class="text-center">
                          <?php 
                              if($row3['building_tele'] == null or empty($row3['building_tele'] )) {
                                    echo "بيانات لم تضاف";
                                } else {
                                    echo $row3['building_tele'];
                                }

                          ?>
                       </td>
                        <td class="text-center">
                              <?php 
                              if($row3['building_fax'] == null or empty($row3['building_fax'])) {
                                    echo "بيانات لم تضاف";
                                } else {
                                    echo $row3['building_fax'];
                                }

                                ?>
                        </td>
                        <td class="text-center">
                              <?php 
                              if($row3['owner_name'] == null or empty($row3['owner_name'])) {
                                    echo "بيانات لم تضاف";
                                } else {
                                    echo $row3['owner_name'];
                                }

                              ?>
                        </td>
                        <td class="text-center">
                          <?php 
                              if($row3['owner_tele'] == null or empty($row3['owner_tele'])) {
                                    echo "بيانات لم تضاف";
                                } else {
                                    echo $row3['owner_tele'];
                                }

                              ?>
                        </td>
                         <td class="text-center">
                             <?php 
                              if($row3['manager_name'] == null or empty($row3['manager_name'] == '')) {
                                    echo "بيانات لم تضاف";
                                } else {
                                    echo $row3['manager_name'];
                                }

                              ?>
                         </td>
                        <td class="text-center">
                          <?php 
                              if($row3['manager_tele'] == null or empty($row3['manager_tele'])) {
                                    echo "بيانات لم تضاف";
                                } else {
                                    echo $row3['manager_tele'];
                                }

                            ?>
                        </td>
                        <td class="text-center">
                          <?php echo $row3['building_activity']; ?>
                        </td>
                        <td class="text-center">
                          <?php 
                              if($row3['materials_used'] == null or empty($row3['materials_used'])) {
                                    echo "بيانات لم تضاف";
                                } else {
                                    echo $row3['materials_used'];
                                }

                            ?>
                        </td>
                        <td class="text-center">
                            <?php 
                              if($row3['building_shifts'] == null or empty($row3['building_shifts'])) {
                                    echo "بيانات لم تضاف";
                                } else {
                                    echo $row3['building_shifts'];
                                }

                            ?>
                         
                        </td>
                        <td class="text-center">
                          <?php 
                              if($row3['building_work_days'] == null or empty($row3['building_work_days'])) {
                                    echo "بيانات لم تضاف";
                                } else {
                                    echo $row3['building_work_days'];
                                }

                            ?>
                        </td>
                        <td class="text-center">
                          <?php 
                              if($row3['building_emp_num'] == null or empty($row3['building_emp_num'])) {
                                    echo "بيانات لم تضاف";
                                } else {
                                    echo $row3['building_emp_num'];
                                }

                            ?>
                        </td>
                        <td class="text-center">
                          <?php 
                              if($row3['building_area_m2'] == null or empty($row3['building_area_m2'])) {
                                    echo "بيانات لم تضاف";
                                } else {
                                    echo $row3['building_area_m2'];
                                }

                            ?>

                        </td>
                        <td class="text-center">
                          <?php 
                              if($row3['building_vac'] == null or empty($row3['building_vac'])) {
                                    echo "بيانات لم تضاف";
                                } else {
                                    echo $row3['building_vac'];
                                }

                            ?>
                        </td>
                        <td class="text-center">
                           <?php 
                              if($row3['contract_num'] == null or empty($row3['contract_num'])) {
                                    echo "بيانات لم تضاف";
                                } else {
                                    echo $row3['contract_num'];
                                }

                            ?>
                        </td>
                        <td class="text-center">
                          <?php 
                              if($row3['contract_open_date'] == null or empty($row3['contract_open_date'])) {
                                    echo "بيانات لم تضاف";
                                } else {
                                    echo $row3['contract_open_date'];
                                }

                            ?>
                        </td>
                        <td class="text-center">
                          <?php 
                              if($row3['contract_end_date'] == null or empty($row3['contract_end_date'])) {
                                    echo "بيانات لم تضاف";
                                } else {
                                    echo $row3['contract_end_date'];
                                }
                            ?>
                        </td>
                        <td class="text-center">
                           <?php echo $arr_waste_type[intval($row3['waste_type'])]; ?>
                        </td>
                        <td class="text-center">
                           <?php echo $row3['waste_location']; ?>
                        </td>
                        <td class="text-center">
                           <?php echo $arr_license_type[intval($row3['license_type'])]; ?>
                        </td>
                        <td class="text-center">
                          <?php 
                              if($row3['notes'] == null or empty($row3['notes'])) {
                                    echo "بيانات لم تضاف";
                                } else {
                                    echo $row3['notes'];
                                }
                            ?>
         
                        </td>
                    </tr>
                    <?php
                        } 

                    ?>
          </tbody>
    </table>
   
    
    <h2 style="background-color: rgb(221, 249, 255);padding: 20px; margin: 20px 0;">بيانات المعاينات</h2>

    
    <table id="report2" class="display" width="100%" cellspacing="0" dir="rtl">
                <thead>
                    <tr class="text-center">
                        <th>م</th>
                        <th>تعديل</th>
                        <th>كود المنشأة</th>
                        <th>رقم المعانية</th>
                        <th>سبب المعاينة</th>
                        <th>موقف المنشأة</th>
                        <th>تاريخ المعاينة</th>
                        <th>محطة الصرف</th>
                        <th>فريق العمل</th>
                        <th>عدد الطلمبات</th>
                        <th>عدد ساعات التشغيل</th>
                        <th>قدرة الطلمبات بالحصان</th>
                        <th>العداد</th>
                        <th>قراءة العداد</th>
                        <th>تاريخ قراءة العداد</th>
                        <th>كمية المياه الحكومية شهريا</th>
                        <th>كمية المياه الجوفية يومياً</th>
                        <th>كمية المياه النيلي يومياً</th>
                        <th>وحدات المعالجة</th>
                        <th>فترة المحاسبة من</th>
                        <th>فترة المحاسبة الى</th>
                        <th>أخذ عينة</th>
                        <th>اسم المعمل</th>
                        <th>مسلم العينة</th>
                        <th>مستلم العينة</th>
                        <th>تاريخ تسليم العينة</th>
                        <th>مستلم النتيجة</th>
                        <th>تاريخ استلام النتيجة</th>
                        <th>الاجراءات للمخالفين</th>


                    </tr>
                </thead>

                <tbody>
        <?php 
           foreach($rows4 as $row4){ ?>
             <tr>
                        <td></td>
                        <td>
                            <a class="btn btn-danger" href="inspection_edit.php?bid=<?php echo $row4['building_code']."&rep_id=".$row4['rep_id']."&building_name=".$row3['building_name']; ?>"><i class="fa fa-edit"></i> تعديل</a>
                        </td>
                        <td class="text-center">
                            <?php echo $row4['building_code']; ?>
                        </td>
                        <td class="text-center">
                          <?php echo $row4['rep_id']; ?>
                        </td>
                        <td class="text-center">
                             <?php echo $arr_rep_reason[intval($row4['rep_reason'])]; ?>
                        </td>
                        <td class="text-center">
                          <?php echo $arr_building_pos[intval($row4['building_position'])]; ?>
                       </td>
                        <td class="text-center">
                          <?php echo $row4['rep_date']; ?>
                        </td>
                         <td class="text-center">
                          <?php echo $row4['waste_station']; ?>
                        </td>
                        <td class="text-center">
                          <?php echo $row4['rep_team']; ?>
                        </td>
                         <td class="text-center">
                             <?php echo $row4['pump_num']; ?>
                        </td>
                         <td class="text-center">
                           <?php echo $row4['pump_run']; ?>
                        </td>
                        <td class="text-center">
                          <?php echo $row4['pump_capacity']; ?>
                        </td>

                        <td class="text-center">
                        <?php echo $arr_meter[intval($row4['meter_work'])]; ?>
                        </td>
                        <td class="text-center">
                          <?php echo $row4['read_current']; ?>
                        </td>
                        <td class="text-center">
                          <?php echo $row4['read_date']; ?>
                       </td>
                        <td class="text-center">
                          <?php echo $row4['govern_quantity']; ?>
                        </td>
                        <td class="text-center">
                          <?php echo $row4['underground_quantity']; ?>
                        </td>
                        <td class="text-center">
                          <?php echo $row4['nile_quantity']; ?>
                        </td>
                         <td class="text-center">
                             <?php echo $arr_units[intval($row4['processing_units_found'])]; ?>
                         </td>
                        <td class="text-center">
                          <?php echo $row4['period_from']; ?>
                        </td>
                        <td class="text-center">
                          <?php echo $row4['period_to']; ?>
                        </td>
                        <td class="text-center">
                          <?php echo $arr_sample[intval($row4['sample_taken'])]; ?>
                        </td>
                        <td class="text-center">
                          <?php echo $row4['lab_name']; ?>
                        </td>
                        <td class="text-center">
                           <?php echo $row4['sample_given_man']; ?>
                        </td>
                        <td class="text-center">
                           <?php echo $row4['sample_recipient']; ?>
                        </td>
                        <td class="text-center">
                           <?php echo $row4['sample_delivery_date']; ?>
                        </td>
                        <td class="text-center">
                           <?php echo $row4['result_recipient']; ?>
                        </td>
                        <td class="text-center">
                           <?php echo $row4['result_receive_date']; ?>
                        </td>
                        <td class="text-center">
                           <?php echo $row4['rep_actions']; ?>
                        </td>
                  
                    </tr>
                        <?php
             } 

?>
          </tbody>
    </table>

    </body>
</html>