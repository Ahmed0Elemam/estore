<?php
include "connect.php";

$arr_paper_result = array(
    1 => "مستوفي",
    2 => "غير مستوفي",
    3 => "لم يتقدم بالأوراق"
);


$id = $_REQUEST['code'];


$stmt = $connect->prepare('select * from job1_2020_technical_stage3_paper_result as s3 right join job1_2020_technical_stage2 as s2 on s3.id = s2.id where s3.id = ?');
$stmt->execute(array($id));
$details = $stmt->fetchAll();

$stmt2 = $connect->prepare('select * from paper_reasons where reason_id NOT IN(6,9,16)');
$stmt2->execute();
$reasons = $stmt2->fetchAll();

foreach($details as $detail) {
// Job details from database
?>


            <div class="panel panel-primary text-center">
                <div class="panel-heading">البيانات الشخصية</div>
                <div class="panel-body">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="col-md-4">
                                    <label>الاسم</label> 
                                </div>
                                <div class="col-md-8">
                                    <input class="name form-control" type="text" name="name" value="<?php echo $detail['name']; ?>" readonly  />
                                </div>
							</div>
							
                            <div class="col-md-6">
                                <div class="col-md-4">
                                    <label>الرقم القومي</label> 
                                </div>
                                <div class="col-md-8">
                                    <input class="nid form-control" maxlength="14" type="text" name="n_id" value="<?php echo $detail['national_id'] ?>" readonly  />

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="col-md-4">
                                    <label>تاريخ الميلاد</label>
                                </div>
                                <div class="col-md-8">
                                 <input type="text" class="form-control" id="date"  name="date" value="<?php echo $detail['birthdate']; ?>" readonly>


                                </div>

                            </div>

                            <div class="col-md-6">
                                <div class="col-md-4">
									<label>المدينة/المركز</label>
								 </div>
                                <div class="col-md-8">
                                <select class="form-control" name="city" id="city" disabled >
                                             <?php if ($detail['city'] == 1){?>
                                            <option value="1" selected>أجا</option>
                                            <option value="2">الجمالية</option>
                                            <option value="3">السنبلاوين</option>
                                            <option value="4">الكردي</option>
                                            <option value="5">المطرية</option>
                                            <option value="6">المنزلة</option>
                                            <option value="7">المنصورة</option>
                                            <option value="8">بلقاس</option>
                                            <option value="9">بني عبيد</option>
                                            <option value="10">تمي الأمديد</option>
                                            <option value="11">جمصة</option>
                                            <option value="12">دكرنس</option>
                                            <option value="13">شربين</option>
                                            <option value="14">طلخا</option>
                                            <option value="15">محلة الدمنة</option>
                                            <option value="16">منية النصر</option>
                                            <option value="17">ميت سلسيل</option>
                                            <option value="18">ميت غمر</option>
                                            <option value="19">نبروه</option>
                                            <?php }elseif ($detail['city']== 2) { ?>
                                            <option value="1">أجا</option>
                                            <option value="2" selected>الجمالية</option>
                                            <option value="3">السنبلاوين</option>
                                            <option value="4">الكردي</option>
                                            <option value="5">المطرية</option>
                                            <option value="6">المنزلة</option>
                                            <option value="7">المنصورة</option>
                                            <option value="8">بلقاس</option>
                                            <option value="9">بني عبيد</option>
                                            <option value="10">تمي الأمديد</option>
                                            <option value="11">جمصة</option>
                                            <option value="12">دكرنس</option>
                                            <option value="13">شربين</option>
                                            <option value="14">طلخا</option>
                                            <option value="15">محلة الدمنة</option>
                                            <option value="16">منية النصر</option>
                                            <option value="17">ميت سلسيل</option>
                                            <option value="18">ميت غمر</option>
                                            <option value="19">نبروه</option>
            
                                            <?php }elseif ($detail['city']== 3) { ?>
                                            <option value="1">أجا</option>
                                            <option value="2">الجمالية</option>
                                            <option value="3" selected>السنبلاوين</option>
                                            <option value="4">الكردي</option>
                                            <option value="5">المطرية</option>
                                            <option value="6">المنزلة</option>
                                            <option value="7">المنصورة</option>
                                            <option value="8">بلقاس</option>
                                            <option value="9">بني عبيد</option>
                                            <option value="10">تمي الأمديد</option>
                                            <option value="11">جمصة</option>
                                            <option value="12">دكرنس</option>
                                            <option value="13">شربين</option>
                                            <option value="14">طلخا</option>
                                            <option value="15">محلة الدمنة</option>
                                            <option value="16">منية النصر</option>
                                            <option value="17">ميت سلسيل</option>
                                            <option value="18">ميت غمر</option>
                                            <option value="19">نبروه</option>
                                            <?php }elseif ($detail['city']== 4) { ?>
                                            <option value="1">أجا</option>
                                            <option value="2">الجمالية</option>
                                            <option value="3">السنبلاوين</option>
                                            <option value="4" selected>الكردي</option>
                                            <option value="5">المطرية</option>
                                            <option value="6">المنزلة</option>
                                            <option value="7">المنصورة</option>
                                            <option value="8">بلقاس</option>
                                            <option value="9">بني عبيد</option>
                                            <option value="10">تمي الأمديد</option>
                                            <option value="11">جمصة</option>
                                            <option value="12">دكرنس</option>
                                            <option value="13">شربين</option>
                                            <option value="14">طلخا</option>
                                            <option value="15">محلة الدمنة</option>
                                            <option value="16">منية النصر</option>
                                            <option value="17">ميت سلسيل</option>
                                            <option value="18">ميت غمر</option>
                                            <option value="19">نبروه</option>
                                            <?php }elseif ($detail['city']== 5) { ?>
                                            <option value="1">أجا</option>
                                            <option value="2">الجمالية</option>
                                            <option value="3">السنبلاوين</option>
                                            <option value="4">الكردي</option>
                                            <option value="5" selected>المطرية</option>
                                            <option value="6">المنزلة</option>
                                            <option value="7">المنصورة</option>
                                            <option value="8">بلقاس</option>
                                            <option value="9">بني عبيد</option>
                                            <option value="10">تمي الأمديد</option>
                                            <option value="11">جمصة</option>
                                            <option value="12">دكرنس</option>
                                            <option value="13">شربين</option>
                                            <option value="14">طلخا</option>
                                            <option value="15">محلة الدمنة</option>
                                            <option value="16">منية النصر</option>
                                            <option value="17">ميت سلسيل</option>
                                            <option value="18">ميت غمر</option>
                                            <option value="19">نبروه</option>
                                            <?php }elseif ($detail['city']== 6) { ?>
                                            <option value="1">أجا</option>
                                            <option value="2">الجمالية</option>
                                            <option value="3">السنبلاوين</option>
                                            <option value="4">الكردي</option>
                                            <option value="5">المطرية</option>
                                            <option value="6" selected>المنزلة</option>
                                            <option value="7">المنصورة</option>
                                            <option value="8">بلقاس</option>
                                            <option value="9">بني عبيد</option>
                                            <option value="10">تمي الأمديد</option>
                                            <option value="11">جمصة</option>
                                            <option value="12">دكرنس</option>
                                            <option value="13">شربين</option>
                                            <option value="14">طلخا</option>
                                            <option value="15">محلة الدمنة</option>
                                            <option value="16">منية النصر</option>
                                            <option value="17">ميت سلسيل</option>
                                            <option value="18">ميت غمر</option>
                                            <option value="19">نبروه</option>
                                            <?php }elseif ($detail['city']== 7) { ?>
                                            <option value="1">أجا</option>
                                            <option value="2">الجمالية</option>
                                            <option value="3">السنبلاوين</option>
                                            <option value="4">الكردي</option>
                                            <option value="5">المطرية</option>
                                            <option value="6">المنزلة</option>
                                            <option value="7" selected>المنصورة</option>
                                            <option value="8">بلقاس</option>
                                            <option value="9">بني عبيد</option>
                                            <option value="10">تمي الأمديد</option>
                                            <option value="11">جمصة</option>
                                            <option value="12">دكرنس</option>
                                            <option value="13">شربين</option>
                                            <option value="14">طلخا</option>
                                            <option value="15">محلة الدمنة</option>
                                            <option value="16">منية النصر</option>
                                            <option value="17">ميت سلسيل</option>
                                            <option value="18">ميت غمر</option>
                                            <option value="19">نبروه</option>
                                            <?php }elseif ($detail['city']== 8) { ?>
                                            <option value="1">أجا</option>
                                            <option value="2">الجمالية</option>
                                            <option value="3">السنبلاوين</option>
                                            <option value="4">الكردي</option>
                                            <option value="5">المطرية</option>
                                            <option value="6">المنزلة</option>
                                            <option value="7">المنصورة</option>
                                            <option value="8" selected>بلقاس</option>
                                            <option value="9">بني عبيد</option>
                                            <option value="10">تمي الأمديد</option>
                                            <option value="11">جمصة</option>
                                            <option value="12">دكرنس</option>
                                            <option value="13">شربين</option>
                                            <option value="14">طلخا</option>
                                            <option value="15">محلة الدمنة</option>
                                            <option value="16">منية النصر</option>
                                            <option value="17">ميت سلسيل</option>
                                            <option value="18">ميت غمر</option>
                                            <option value="19">نبروه</option>
                                            <?php }elseif ($detail['city']== 9) { ?>
                                            <option value="1">أجا</option>
                                            <option value="2">الجمالية</option>
                                            <option value="3">السنبلاوين</option>
                                            <option value="4">الكردي</option>
                                            <option value="5">المطرية</option>
                                            <option value="6">المنزلة</option>
                                            <option value="7">المنصورة</option>
                                            <option value="8">بلقاس</option>
                                            <option value="9" selected>بني عبيد</option>
                                            <option value="10">تمي الأمديد</option>
                                            <option value="11">جمصة</option>
                                            <option value="12">دكرنس</option>
                                            <option value="13">شربين</option>
                                            <option value="14">طلخا</option>
                                            <option value="15">محلة الدمنة</option>
                                            <option value="16">منية النصر</option>
                                            <option value="17">ميت سلسيل</option>
                                            <option value="18">ميت غمر</option>
                                            <option value="19">نبروه</option>
                                            <?php }elseif ($detail['city']== 10) { ?>
                                            <option value="1">أجا</option>
                                            <option value="2">الجمالية</option>
                                            <option value="3">السنبلاوين</option>
                                            <option value="4">الكردي</option>
                                            <option value="5">المطرية</option>
                                            <option value="6">المنزلة</option>
                                            <option value="7">المنصورة</option>
                                            <option value="8">بلقاس</option>
                                            <option value="9">بني عبيد</option>
                                            <option value="10" selected>تمي الأمديد</option>
                                            <option value="11">جمصة</option>
                                            <option value="12">دكرنس</option>
                                            <option value="13">شربين</option>
                                            <option value="14">طلخا</option>
                                            <option value="15">محلة الدمنة</option>
                                            <option value="16">منية النصر</option>
                                            <option value="17">ميت سلسيل</option>
                                            <option value="18">ميت غمر</option>
                                            <option value="19">نبروه</option>
                                            <?php }elseif ($detail['city']== 11) { ?>
                                            <option value="1">أجا</option>
                                            <option value="2">الجمالية</option>
                                            <option value="3">السنبلاوين</option>
                                            <option value="4">الكردي</option>
                                            <option value="5">المطرية</option>
                                            <option value="6">المنزلة</option>
                                            <option value="7">المنصورة</option>
                                            <option value="8">بلقاس</option>
                                            <option value="9">بني عبيد</option>
                                            <option value="10">تمي الأمديد</option>
                                            <option value="11" selected>جمصة</option>
                                            <option value="12">دكرنس</option>
                                            <option value="13">شربين</option>
                                            <option value="14">طلخا</option>
                                            <option value="15">محلة الدمنة</option>
                                            <option value="16">منية النصر</option>
                                            <option value="17">ميت سلسيل</option>
                                            <option value="18">ميت غمر</option>
                                            <option value="19">نبروه</option>
                                            <?php }elseif ($detail['city']== 12) { ?>
                                            <option value="1">أجا</option>
                                            <option value="2">الجمالية</option>
                                            <option value="3">السنبلاوين</option>
                                            <option value="4">الكردي</option>
                                            <option value="5">المطرية</option>
                                            <option value="6">المنزلة</option>
                                            <option value="7">المنصورة</option>
                                            <option value="8">بلقاس</option>
                                            <option value="9">بني عبيد</option>
                                            <option value="10">تمي الأمديد</option>
                                            <option value="11">جمصة</option>
                                            <option value="12" selected>دكرنس</option>
                                            <option value="13">شربين</option>
                                            <option value="14">طلخا</option>
                                            <option value="15">محلة الدمنة</option>
                                            <option value="16">منية النصر</option>
                                            <option value="17">ميت سلسيل</option>
                                            <option value="18">ميت غمر</option>
                                            <option value="19">نبروه</option>
                                            <?php }elseif ($detail['city']== 13) { ?>
                                            <option value="1">أجا</option>
                                            <option value="2">الجمالية</option>
                                            <option value="3">السنبلاوين</option>
                                            <option value="4">الكردي</option>
                                            <option value="5">المطرية</option>
                                            <option value="6">المنزلة</option>
                                            <option value="7">المنصورة</option>
                                            <option value="8">بلقاس</option>
                                            <option value="9">بني عبيد</option>
                                            <option value="10">تمي الأمديد</option>
                                            <option value="11">جمصة</option>
                                            <option value="12">دكرنس</option>
                                            <option value="13" selected>شربين</option>
                                            <option value="14">طلخا</option>
                                            <option value="15">محلة الدمنة</option>
                                            <option value="16">منية النصر</option>
                                            <option value="17">ميت سلسيل</option>
                                            <option value="18">ميت غمر</option>
                                            <option value="19">نبروه</option>
                                            <?php }elseif ($detail['city']== 14) { ?>
                                            <option value="1">أجا</option>
                                            <option value="2">الجمالية</option>
                                            <option value="3">السنبلاوين</option>
                                            <option value="4">الكردي</option>
                                            <option value="5">المطرية</option>
                                            <option value="6">المنزلة</option>
                                            <option value="7">المنصورة</option>
                                            <option value="8">بلقاس</option>
                                            <option value="9">بني عبيد</option>
                                            <option value="10">تمي الأمديد</option>
                                            <option value="11">جمصة</option>
                                            <option value="12">دكرنس</option>
                                            <option value="13">شربين</option>
                                            <option value="14" selected>طلخا</option>
                                            <option value="15">محلة الدمنة</option>
                                            <option value="16">منية النصر</option>
                                            <option value="17">ميت سلسيل</option>
                                            <option value="18">ميت غمر</option>
                                            <option value="19">نبروه</option>
                                            <?php }elseif ($detail['city']== 15) { ?>
                                            <option value="1">أجا</option>
                                            <option value="2">الجمالية</option>
                                            <option value="3">السنبلاوين</option>
                                            <option value="4">الكردي</option>
                                            <option value="5">المطرية</option>
                                            <option value="6">المنزلة</option>
                                            <option value="7">المنصورة</option>
                                            <option value="8">بلقاس</option>
                                            <option value="9">بني عبيد</option>
                                            <option value="10">تمي الأمديد</option>
                                            <option value="11">جمصة</option>
                                            <option value="12">دكرنس</option>
                                            <option value="13">شربين</option>
                                            <option value="14">طلخا</option>
                                            <option value="15" selected>محلة الدمنة</option>
                                            <option value="16">منية النصر</option>
                                            <option value="17">ميت سلسيل</option>
                                            <option value="18">ميت غمر</option>
                                            <option value="19">نبروه</option>
                                            <?php }elseif ($detail['city']== 16) { ?>
                                            <option value="1">أجا</option>
                                            <option value="2">الجمالية</option>
                                            <option value="3">السنبلاوين</option>
                                            <option value="4">الكردي</option>
                                            <option value="5">المطرية</option>
                                            <option value="6">المنزلة</option>
                                            <option value="7">المنصورة</option>
                                            <option value="8">بلقاس</option>
                                            <option value="9">بني عبيد</option>
                                            <option value="10">تمي الأمديد</option>
                                            <option value="11">جمصة</option>
                                            <option value="12">دكرنس</option>
                                            <option value="13">شربين</option>
                                            <option value="14">طلخا</option>
                                            <option value="15">محلة الدمنة</option>
                                            <option value="16" selected>منية النصر</option>
                                            <option value="17">ميت سلسيل</option>
                                            <option value="18">ميت غمر</option>
                                            <option value="19">نبروه</option>
                                            <?php }elseif ($detail['city']== 17) { ?>
                                            <option value="1">أجا</option>
                                            <option value="2">الجمالية</option>
                                            <option value="3">السنبلاوين</option>
                                            <option value="4">الكردي</option>
                                            <option value="5">المطرية</option>
                                            <option value="6">المنزلة</option>
                                            <option value="7">المنصورة</option>
                                            <option value="8">بلقاس</option>
                                            <option value="9">بني عبيد</option>
                                            <option value="10">تمي الأمديد</option>
                                            <option value="11">جمصة</option>
                                            <option value="12">دكرنس</option>
                                            <option value="13">شربين</option>
                                            <option value="14">طلخا</option>
                                            <option value="15">محلة الدمنة</option>
                                            <option value="16">منية النصر</option>
                                            <option value="17" selected>ميت سلسيل</option>
                                            <option value="18">ميت غمر</option>
                                            <option value="19">نبروه</option>
                                            
                                            <?php }elseif ($detail['city']== 18) { ?>
                                            <option value="1">أجا</option>
                                            <option value="2">الجمالية</option>
                                            <option value="3">السنبلاوين</option>
                                            <option value="4">الكردي</option>
                                            <option value="5">المطرية</option>
                                            <option value="6">المنزلة</option>
                                            <option value="7">المنصورة</option>
                                            <option value="8">بلقاس</option>
                                            <option value="9">بني عبيد</option>
                                            <option value="10">تمي الأمديد</option>
                                            <option value="11">جمصة</option>
                                            <option value="12">دكرنس</option>
                                            <option value="13">شربين</option>
                                            <option value="14">طلخا</option>
                                            <option value="15">محلة الدمنة</option>
                                            <option value="16">منية النصر</option>
                                            <option value="17">ميت سلسيل</option>
                                            <option value="18" selected>ميت غمر</option>
                                            <option value="19">نبروه</option>
                                            
                                            
                                            <?php }else { ?>
                                            <option value="1">أجا</option>
                                            <option value="2">الجمالية</option>
                                            <option value="3">السنبلاوين</option>
                                            <option value="4">الكردي</option>
                                            <option value="5">المطرية</option>
                                            <option value="6">المنزلة</option>
                                            <option value="7">المنصورة</option>
                                            <option value="8">بلقاس</option>
                                            <option value="9">بني عبيد</option>
                                            <option value="10">تمي الأمديد</option>
                                            <option value="11">جمصة</option>
                                            <option value="12">دكرنس</option>
                                            <option value="13">شربين</option>
                                            <option value="14">طلخا</option>
                                            <option value="15">محلة الدمنة</option>
                                            <option value="16">منية النصر</option>
                                            <option value="17">ميت سلسيل</option>
                                            <option value="18">ميت غمر</option>
                                            <option value="19" selected>نبروه</option>
                                            <?php }?>
                                            
                                    </select>

                                </div>

                            </div>

                        </div>
                    </div>


                    <div class="form-group">
                        <div class="row">

                            <div class="col-md-6">
                                <div class="col-md-4">
									<label>العنوان</label>
								</div>
                                <div class="col-md-8">
                                    <input  class="form-control" type="text" name="village" value="<?php echo $detail['village']." - ".$detail['street']; ?>" readonly  />
                                </div>

                            </div>

                            <div class="col-md-6">
                                <div class="col-md-4">
                                    <label>ميعاد تقديم الأوراق</label>
                                </div>
                                <div class="col-md-8">
                                    <input class="form-control" type="text" name="street" value="<?php echo $detail['paper_date']; ?>" readonly   >
                                </div>

                            </div>

                        </div>
                    </div>

<!--
                    <button class="btn btn-info text-center hidden"  id="update_city_btn" >تحديث المركز</button>
                    <br/>
                    <div id="city_updated"></div>
                                            -->
                </div>

            </div>
            <!-- Study info -->
            <div class="panel panel-primary text-center" style="margin-top: -40px;">
                <div class="panel-heading">البيانات الدراسية</div>
                <div class="panel-body">
                    <div class="form-group">
                        <div class="row">
                            <!--
                            <div class="col-md-6">
                                <div class="col-md-4">
                                    <label>المؤهل الحاصل عليه المتقدم</label>
                                </div>
                                <div class="col-md-8">
				  					<input id="study_type" class="form-control" type="text" name="study_type" readonly value="<?php echo $detail['study_type'] ?>"    />
                                </div>

							</div>
-->
							<div class="col-md-6">
                                <div class="col-md-6">
                                    <label> التخصص المتقدم به</label> 
                                </div>
                                <div class="col-md-6">
                    
                                    <select class="form-control" name="study" id="study" disabled  >
                                             <?php if ($detail['study'] == 1){?>
                                            <option value="1" selected>أعمال صحية</option>
                                            <option value="2">ميكانيكا</option>
                                            <option value="3">كهرباء</option>
            
                                            <?php }elseif ($detail['study']== 2) { ?>
                                                <option value="1">أعمال صحية</option>
                                            <option value="2" selected>ميكانيكا</option>
                                            <option value="3">كهرباء</option>

            
                                            <?php }elseif ($detail['study']== 3) { ?>
                                            <option value="1">أعمال صحية</option>
                                            <option value="2">ميكانيكا</option>
                                            <option value="3" selected>كهرباء</option>
                                        
                                            <?php } ?>
                                            </select>
                                </div>

                            </div>
          

                        </div>

                    </div>
       <!--             <button class="btn btn-info text-center hidden"  id="update_study_btn" >تحديث التخصص</button>
                    <br/>
                    <div id="study_updated"></div>
                                            -->
                </div>
			</div>
			
			<div class="panel panel-primary text-center" style="margin-top: -35px;">
                <div class="panel-heading">استيفاء الأوراق</div>
                <div class="panel-body">
                    <?php if ($detail['paper_result'] != null && $detail['paper_entry_date'] != null) { ?>
                <div id="old_reg">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="col-md-4">
                                    <label>نتيجة الاستيفاء</label>
                                </div>
                                <div class="col-md-8">
                                    <input class="form-control" type="text" name="paper_result" value="<?php echo $arr_paper_result[intval($detail['paper_result'])]; ?>" readonly  />
                                </div>

							</div>
							
							<div class="col-md-6">
                                <div class="col-md-4">
                                    <label> السبب الأول</label> 
                                </div>
                                <div class="col-md-8">
                                    <input class="form-control" type="text" name="r1" value="<?php echo $detail['reason1']; ?>" readonly  />
                                </div>

                            </div>
          

                        </div>

					</div>
					
					<div class="form-group">
                        <div class="row">
						<div class="col-md-6">
                                <div class="col-md-4">
                                    <label> السبب الثاني</label> 
                                </div>
                                <div class="col-md-8">
                                    <input class="form-control" type="text" name="r2" value="<?php echo $detail['reason2']; ?>" readonly  />
                                </div>

                            </div>
							
							<div class="col-md-6">
                                <div class="col-md-4">
                                    <label> السبب الثالث</label> 
                                </div>
                                <div class="col-md-8">
                                    <input class="form-control" type="text" name="r3" value="<?php echo $detail['reason3']; ?>" readonly  />
                                </div>

                            </div>
          

                        </div>

                    </div>

                    <div class="form-group">
                        <div class="row">
							
							<div class="col-md-6">
                                <div class="col-md-4">
                                    <label> ملاحظات</label> 
                                </div>
                                <div class="col-md-8">
                                    <textarea name="note" class="form-control" readonly ><?php echo $detail['notes']; ?></textarea>

                                </div>

                            </div>
          

                        </div>

                    </div>
                    </div>
                    <hr/>
                    <div class="alert alert-info">لتعديل نتيجة الاستيفاء </div>

                                    <?php }?>
                    <div id="new_reg">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="col-md-4">
                                    <label>نتيجة الاستيفاء</label>
                                </div>
                                <div class="col-md-8">
									<select id="paper_result" class="form-control" name="paper_result">
										<option value="0">ادخل نتيجة استيفاء الأوراق</option>
										<option value="1">مستوفي</option>
										<option value="2">غير مستوفي</option>
										<option value="4">تفريغ النتيجة</option>
									</select>
                                </div>

							</div>
							
							<div class="col-md-6">
                                <div class="col-md-4">
                                    <label> السبب الأول</label> 
                                </div>
                                <div class="col-md-8">
                                <select id="reason1" class="form-control" name="reason1">

										<option value="">ادخل السبب الأول</option>
                                        <?php  foreach($reasons as $reason) {?>
										<option value="<?php echo $reason['reason'] ?>"><?php echo $reason['reason'] ?></option>

                                        <?php }?>

									</select>

                                </div>

                            </div>
          

                        </div>

					</div>
					
					<div class="form-group">
                        <div class="row">
						<div class="col-md-6">
                                <div class="col-md-4">
                                    <label> السبب الثاني</label> 
                                </div>
                                <div class="col-md-8">
                                <select id="reason2" class="form-control" name="reason2">

                                    <option value="">ادخل السبب الثاني</option>
                                    <?php  foreach($reasons as $reason) {?>
                                    <option value="<?php echo $reason['reason'] ?>"><?php echo $reason['reason'] ?></option>

                                    <?php }?>

                                    </select>

                                </div>

                            </div>
							
							<div class="col-md-6">
                                <div class="col-md-4">
                                    <label> السبب الثالث</label> 
                                </div>
                                <div class="col-md-8">
                                <select id="reason3" class="form-control" name="reason3">

                                    <option value="">ادخل السبب الثالث</option>
                                    <?php  foreach($reasons as $reason) {?>
                                    <option value="<?php echo $reason['reason'] ?>"><?php echo $reason['reason'] ?></option>

                                    <?php }?>

                                    </select>

                                </div>

                            </div>
          

                        </div>

                    </div>

                    <div class="form-group">
                        <div class="row">
							
							<div class="col-md-6">
                                <div class="col-md-4">
                                    <label> ملاحظات</label> 
                                </div>
                                <div class="col-md-8">
                                    <textarea name="notes" id="notes" class="form-control" ></textarea>

                                </div>

                            </div>
          

                        </div>

                    </div>
                    </div>

                </div>
            </div>

            <button class="btn btn-info btn-lg text-center"  id="update_btn" >تسجيل نتيجة الإستيفاء</button>
        
<div id="updated"></div>





<?php




}








?>
<script src="js/script.js"></script>