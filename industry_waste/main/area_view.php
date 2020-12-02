<?php 
include 'connect.php';

include 'functions.php';

if($_SERVER['REQUEST_METHOD'] == 'POST'){

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



   $formErrors = array();

      
    // Get variables
    
        $area = $_REQUEST['area1'];
        
 
        if ($area == 0){
                $formErrors[] = "لم يتم اختيار المنطقة";
              }
   
    
    
    
 if(empty($formErrors)) {  

 // Insert to DB
     $stmt = $connect->prepare("SELECT * FROM building_info WHERE area = ?");
     $stmt->execute(array($area));
     $rows3 = $stmt->fetchAll();
     
     $count = $stmt->rowCount();

     ?>
     
     <html>

<head>

     <link rel="stylesheet" type="text/css" href="css/datatables.min.css"/>
 
<script type="text/javascript" src="js/pdfmake.min.js"></script>
<script type="text/javascript" src="js/vfs_fonts.js"></script>
<script type="text/javascript" src="js/datatables.min.js"></script>

 
    
     <script type="text/javascript">
var area = $('#area_text').html();
        $(document).ready(function() {
            var t = $('#report3').DataTable({
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
                buttons: [ {
                    extend :'excel',
                    text: 'ملف اكسيل',
                    title :  'منشآت منطقة'+area,
                }, {
                     extend:'print',
                        title: '',
                        messageTop: '<div class="container"><div class="row"><div class="col-md-6 col-md-offset-3 text-center"><img src="img/logo.png" height="80" width="80"/><h4>شركة مياه الشرب والصرف الصحي بالدقهلية </h4> <h4>نظام ادارة الصرف الصناعي</h4>  </div> </div> <div class="row"><h3 class="text-center alert alert-info" style="padding:20px;"> منشآت منطقة ' +area+ ' </h3> </div> </div>',
                        text: 'طباعة',
                        customize: function ( win ) {
                    $(win.document.body)
                        .css( 'font-size', '16px' )
                        .prepend(
                            ''
                        );
 
                    $(win.document.body).find( 'table' )
                        .addClass( 'compact' )
                        .css( 'font-size', 'inherit' );
                            
                        var last = null;
                var current = null;
                var bod = [];
 
                var css = '@page { size: landscape; }',
                    head = win.document.head || win.document.getElementsByTagName('head')[0],
                    style = win.document.createElement('style');
 
                style.type = 'text/css';
                style.media = 'print';
 
                if (style.styleSheet)
                {
                  style.styleSheet.cssText = css;
                }
                else
                {
                  style.appendChild(win.document.createTextNode(css));
                }
 
                head.appendChild(style);
                }
                                           
                                           }
                     ],
                stateSave: true,
                pagingType: "full_numbers",
                lengthMenu: [ [10, 25, 50, 100, -1], [10, 25, 50,100 , "الكل"] ],
                responsive: true,
                 order: [[ 1, 'asc' ]],
                "columnDefs": [ {
            "searchable": false,
            "orderable": false,
            "targets": 0
        } ]
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



   
</head>
<body>


<table id="report3" class="display" width="100%" cellspacing="0" dir="rtl">
                <thead>
                 
                   <h4 style="background-color: rgb(221, 249, 255);padding: 20px; margin: 20px 0;font-weight:600;"> منشآت منطقة <?php echo $arr_city[intval($area)] ?></h4>
                 
                    <tr class="text-center">
                        <th>م</th>
                        <th>المنطقة</th>
                        <th>كود المنشأة</th>
                        <th>اسم المنشأة</th>
                        <th>عنوان المنشأة</th>
                        <th>نوع الحساب</th>
                        <th>الفرع</th>
                        <th>رقم الحساب</th>
                        <th>مسمى الصناعات</th>
                        <th>موبايل المنشأة</th>
                        <th>اسم المالك</th>
                        <th>نشاط المنشأة</th>


                    </tr>
                </thead>

                <tbody>
        <?php 
           foreach($rows3 as $row3){ ?>
             <tr>
                    <td></td>
                        
                        <td class="text-center" id="area_text">
                          <?php echo $arr_city[intval($row3['area'])]; ?>
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
                          <?php echo $arr_account_type[intval($row3['account_type'])]; ?>
                        </td>
                         <td class="text-center">
                             <?php echo $row3['branch_num']; ?>
                        </td>
                        <td class="text-center">
                          <?php echo $row3['account_num']; ?>
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
                          <?php echo $row3['building_mobile']; ?>
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
                          <?php echo $row3['building_activity']; ?>
                        </td>
                        
                        
                    </tr>
                    <?php
                        } 

                    ?>
          </tbody>
    </table>
     
     
     
     
     
     <?php
      

}else {
     
  //   foreach ($formErrors as $error) {
     echo "<div class='alert alert-danger' style='margin-top:10px;font-weight:700;font-size:18px'> لم يتم اختيار المنطقة</div>";
 //    }
}
}
?>



