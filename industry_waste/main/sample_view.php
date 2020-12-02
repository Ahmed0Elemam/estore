<html>
<head>
    
 <script language="javascript" src="js/js3.js?<?php echo md5_file("js/js3.js")?>" type="text/javascript"></script>   
</head>
<body>
<?php 
    

include 'connect.php';

include 'functions.php';

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
         
// ِ Analysis Lists
         
$basics = '<div class="row">
                    <div class="col-md-4">
                        <input type="checkbox" name="list[]" value="درجة الحرارة" data-value="10" checked readonly /> درجة الحرارة
                    </div>
                  <div class="col-md-4">
                        <input type="checkbox" name="list[]" value="الرقم الهيدروجيني" data-value="15" checked readonly /> الرقم الهيدروجيني
                    </div>
                    <div class="col-md-4">
                        <input type="checkbox" name="list[]" data-value="75" value="الأكسجين الكيميائي" checked readonly /> الأكسجين الكيميائي
                    </div>
                </div>
                   <div class="row">
                    <div class="col-md-4">
                        <input type="checkbox" name="list[]" value="الأكسجين الحيوي" data-value="75" checked readonly /> الأكسجين الحيوي
                    </div>

                    <div class="col-md-4">
                        <input type="checkbox" name="list[]" data-value="50" value="المواد العالقة" checked readonly /> المواد العالقة
                    </div>
                    <div class="col-md-4">
                        <input type="checkbox" name="list[]" data-value="65" value="الزيوت و الشحوم" checked readonly /> الزيوت و الشحوم
                    </div> 
                   
                </div>';
         
$metals = '<div class="row">
                    <div class="col-md-4">
                        <input type="checkbox" name="list[]" data-value="200" value="الزئبق" checked  /> الزئبق
                    </div>

                    <div class="col-md-4">
                        <input type="checkbox" name="list[]" data-value="125" value="الزرنيخ" checked  /> الزرنيخ
                    </div>
                    <div class="col-md-4">
                        <input type="checkbox" name="list[]" data-value="100" value="الرصاص" checked  /> الرصاص
                    </div>
                </div>
                    <div class="row">
                    <div class="col-md-4">
                        <input type="checkbox" name="list[]" data-value="100" value="الكاديوم" checked  /> الكاديوم
                    </div>

                    <div class="col-md-4">
                        <input type="checkbox" name="list[]" data-value="100" value="الكروم" checked  /> الكروم
                    </div>
                    <div class="col-md-4">
                        <input type="checkbox" name="list[]" data-value="150" value="بورن" checked  /> بورن
                    </div>
                </div>';

if($_SERVER['REQUEST_METHOD'] == 'POST'){

   $formErrors = array();

      
    // Get variables
    
        $sample_code      = $_REQUEST['sample_code'];

        $delivery_date    = $_REQUEST['sample_delivery_date'];

        
    
    
      if (empty($sample_code)){
                $formErrors[] = "كود العينة لا يمكن ان يكون فارغا";
              }
    
    if (empty($delivery_date)){
                $formErrors[] = "تاريخ تسليم العينة لا يمكن ان يكون فارغا";
              }

 
      
  
    
    
    
 if(empty($formErrors)) {  
 
          
 // Insert to DB
      $stmt = $connect->prepare("SELECT * FROM building_report where sample_code = ? AND sample_delivery_date = ?");
            $stmt->execute(array($sample_code, $delivery_date));
     
            $details = $stmt->fetchAll();
            
     foreach($details as $detail){
         $build_code = $detail['building_code'];
         
         
     }
     
     $stmt1 = $connect->prepare("Select * from building_info where building_code = ?");
     
       $stmt1->execute(array($build_code));
     
       $build_details = $stmt1->fetchAll();
     
      foreach($build_details as $b_detail){  ?>
<form class="form" id="" method="post" action="print.php">
<div class="form-group">
    <div class="row">
        <div class="col-md-6">
            <div class="col-md-4">
                <label>مسمى الصناعات</label>
            </div>
            <div class="col-md-8">
                <input class="form-control" type="text" name="industry_name" readonly value="<?php
         echo $arr_industry_name[intval($b_detail['industry_name'])]; ?>" />
            
            <input class="hidden" name="bc" type="text" value="<?php echo $b_detail['building_code'];  ?>" />
            <input class="hidden" name="bn" type="text" value="<?php echo $b_detail['building_name'];  ?>" />


            </div>
        </div>


    </div>

</div>


<div class="form-group">
    <div class="row">
        <div class="col-md-12">
            <div class="col-md-2">
                <label>التحاليل المطلوبة</label>
            </div>
            <div class="col-md-10">
               <?php echo $basics; 
             
                if($b_detail['industry_name'] >= 1 and $b_detail['industry_name'] <= 6 or $b_detail['industry_name'] == 20 or $b_detail['industry_name'] == 21  ) {
                    
                    echo $metals;

                }elseif ($b_detail['industry_name'] == 7) { 
                 echo $metals;
                ?>
                                
                 <div class="row">
                    <div class="col-md-4">
                        <input type="checkbox" name="list[]" data-value="75" checked  /> النيتروجين الكلي
                    </div>

                    <div class="col-md-4">
                        <input type="checkbox" name="list[]" data-value="45" checked  /> الفسفور الكلي
                    </div>
          
                </div>
                  
                    
                <?php   
                }elseif($b_detail['industry_name'] == 8 or $b_detail['industry_name'] == 9) { ?>
                   
                <div class="row">
                    <div class="col-md-4">
                        <input type="checkbox" name="list[]" data-value="75" checked  /> النيتروجين الكلي
                    </div>

                    <div class="col-md-4">
                        <input type="checkbox" name="list[]" data-value="40" checked  /> الكبريتيدات
                    </div>
          
                </div>
                    
                    
                    <?php
                }elseif($b_detail['industry_name'] == 13) { ?>
                   <div class="row">
                    <div class="col-md-4">
                        <input type="checkbox" name="list[]" data-value="100" checked  /> الكروم السداسي
                    </div>

                    <div class="col-md-4">
                        <input type="checkbox" name="list[]" data-value="40" checked  /> الكبريتيدات
                    </div>
                    
                    <div class="col-md-4">
                        <input type="checkbox" name="list[]" data-value="50" checked  /> المواد الصلبة الذائبة
                    </div>
          
                </div>
                    
                <?php 
                }elseif ($b_detail['industry_name'] == 14 or $b_detail['industry_name'] == 15 or $b_detail['industry_name'] == 16) { 
                 echo $metals;
                ?>
        
                 
                 <div class="row">
                    <div class="col-md-4">
                        <input type="checkbox" name="list[]" value="الفينول" data-value="100" checked  /> الفينول
                    </div>

                    <div class="col-md-4">
                        <input type="checkbox" name="list[]" value="السيانيد" data-value="100" checked  /> السيانيد
                    </div>
          
                </div>
                  
                    
                <?php  
                }elseif ($b_detail['industry_name'] == 17 or $b_detail['industry_name'] == 18 or $b_detail['industry_name'] == 19) {
                
                    echo $metals;
                ?>
                 
                 <div class="row">

                    <div class="col-md-4">
                        <input type="checkbox" name="list[]" value="السيانيد" data-value="100" checked  /> السيانيد
                    </div>
          
                </div>
                  
                    
                <?php  
                }elseif ($b_detail['industry_name'] == 22 or $b_detail['industry_name'] == 23 or $b_detail['industry_name'] == 24) { 
                    echo $metals;
                ?>
                 
          
                 
                 <div class="row">
                    <div class="col-md-4">
                        <input type="checkbox" name="list[]" value="الفينول" data-value="100" checked  /> الفينول
                    </div>

                    <div class="col-md-4">
                        <input type="checkbox" name="list[]" value="الكبريتيدات" data-value="40" checked  /> الكبريتيدات
                    </div>
          
                </div>
                  
                    
                <?php  
                }elseif ($b_detail['industry_name'] == 25) { 
                     echo $metals;
                ?>
           
                 
                 <div class="row">
                    <div class="col-md-4">
                        <input type="checkbox" name="list[]" value="النيتروجين الكلي" data-value="75" checked  /> النيتروجين الكلي
                    </div>
                     <div class="col-md-4">
                        <input type="checkbox" name="list[]" value="السيانيد" data-value="100" checked  /> السيانيد
                    </div>
                     <div class="col-md-4">
                        <input type="checkbox" name="list[]" value="الفسفور الكلي"  data-value="45" checked /> الفسفور الكلي 
                    </div>
          
                </div>
                 <div class="row">
                    <div class="col-md-4">
                        <input type="checkbox" name="list[]" value="الكبريتيدات" data-value="40" checked  /> الكبريتيدات
                    </div>
          
                </div>
                  
                    
                <?php  
                } elseif ($b_detail['industry_name'] == 26) { ?>
                
                <div class="row">
                    <div class="col-md-4">
                        <input type="checkbox" name="list[]" value="الكبريتيدات" data-value="40" checked  /> الكبريتيدات
                    </div>
                </div>
                
                <?php
                }
               
                ?>
                
                


            </div>
        </div>

    </div>

</div>
<div class="form-group">
    <div class="row">
        <div class="col-md-6">
            <div class="col-md-4">
                <label>  تكلفة التحاليل </label>
            </div>
            <div class="col-md-8">
                <input class="form-control" type="text" readonly value="0" readonly name="analysis_cost1" id="analysis_cost1" />

            </div>
        </div>
        
          <div class="col-md-6">
            <div class="col-md-4">
                <label>  قيمة القيمة المضافة </label>
            </div>
            <div class="col-md-8">
                <input class="form-control" type="text" readonly value="0" readonly name="analysis_cost2" id="analysis_cost2" />

            </div>
        </div>


    </div>

</div>
<div class="form-group">
    <div class="row">
        <div class="col-md-6">
            <div class="col-md-4">
                <label>   اجمالي تكلفة التحاليل </label>
            </div>
            <div class="col-md-8">
                <input class="form-control" type="text" readonly value="0" readonly id="analysis_cost_all" name="analysis_cost_all" />

            </div>
        </div>



    </div>

</div>
<hr/>

<?php 
    $stmt2 = $connect->prepare('select * from cost_addons');
    $stmt2->execute();
    $addons = $stmt2->fetchAll();
          
    
    
    ?>
<div class="form-group">
    <div class="row">
        <div class="col-md-6">
            <div class="col-md-4">
                <label> مقابل أخذ العينة</label>
            </div>
            <div class="col-md-8">
                <select class="form-control" name="addons" id="addons" >
                        <option value="0">الرجاء اختيار التكلفة مقابل أخذ العينة </option>
                        
                        <?php foreach($addons as $addon){ ?>
                        <option value="<?php echo $addon['price']; ?>"><?php echo $addon['name']; ?></option>           
                        <?php } ?>

                 </select>
                 <div class="alert alert-danger custom-alert"> لم يتم اختيار مقابل أخذ العينة </div>

            </div>
        </div>
        
         <div class="col-md-6">
            <div class="col-md-4">
                <label> التكلفة الكلية مقابل اخذ العينة </label>
            </div>
            <div class="col-md-8">
                <input class="form-control" type="text" readonly value="0" readonly id="addons_cost" name="addons_cost" />

            </div>
        </div>


    </div>

</div>

<div class="form-group">
    <div class="row">
        <div class="col-md-6">
            <div class="col-md-4">
                <label>  اجمالي التكلفة الكلية </label>
            </div>
            <div class="col-md-8">
                <input class="form-control" type="text" readonly value="0" readonly id="all_cost" name="all_cost" />

            </div>
        </div>


    </div>

</div>

<input class="btn btn-info" type="submit" value="طباعة نموذج المطالبة" id="print" />

</form>





<?php
         
         
     }
            
     
  

}else {
     
  //   foreach ($formErrors as $error) {
     echo "<div class='alert alert-danger' style='margin-top:10px;font-weight:700;font-size:18px'>الرجاء ادخال البيانات المطلوبة بشكل صحيح</div>";
 //    }
}
}
?>
    </body>
</html>