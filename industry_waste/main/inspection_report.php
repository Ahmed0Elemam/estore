<!DOCTYPE HTML>

<html>
<head>
<script language="javascript" src="js/js2.js?<?php echo md5_file("js/js2.js")?>" type="text/javascript"></script>
<script>
$(document).ready(function(){
              
$('#rep_save').click(function(){
               var rep_code1                = $('#rep_code').val();
               var rep_id1                  = $('#rep_id').val();
               var rep_name1                = $('#rep_name').val();
               var rep_reason1              = $('#rep_reason').val();
               var building_position1       = $('#building_position').val();
               var rep_date1                = $('#rep_date').val();
               var waste_station1           = $('#waste_station').val();
               var rep_team1                = $('#rep_team').val();
               var rep_actions1             = $('#rep_actions').val();
			   var pump_num1                = $('#pump_num').val();
               var pump_capacity1           = $('#pump_capacity').val();
               var pump_run1                = $('#pump_run').val();
               var meter_work1              = $('#meter_work').val();
               var read_current1            = $('#read_current').val();
               var read_date1               = $('#read_date').val();
               var govern_quantity1         = $('#govern_quantity').val();
               var underground_quantity1    = $('#underground_quantity').val();
               var nile_quantity1           = $('#nile_quantity').val();
               var processing_units_found1  = $('#processing_units_found').val();
               var period_from1             = $('#period_from').val();
               var period_to1               = $('#period_to').val();
               var sample_taken1            = $('#sample_taken').val();
               var sample_code1             = $('#sample_code').val();
               var lab_name1                = $('#lab_name').val();
               var sample_recipient1        = $('#sample_recipient').val();
               var sample_given_man1        = $('#sample_given_man').val();
               var result_recipient1        = $('#result_recipient').val();
               var sample_delivery_date1    = $('#sample_delivery_date').val();
               var result_receive_date1     = $('#result_receive_date').val();



			
			var ajax_URL = "save2.php";
			var dataString = 'rep_code=' + rep_code1 + '&rep_id=' + rep_id1 + '&rep_reason=' + rep_reason1 + '&building_position=' + building_position1 + '&rep_date=' + rep_date1 + '&waste_station' + waste_station1 + '&rep_team' + rep_team1 + '&rep_actions=' + rep_actions1 + '&pump_num=' + pump_num1 + '&pump_capacity=' + pump_capacity1 + '&pump_run=' + pump_run1 + '&meter_work=' + meter_work1 + '&read_current=' + read_current1 + '&read_date=' + read_date1 + '&govern_quantity=' + govern_quantity1 + '&underground_quantity=' + underground_quantity1 + '&nile_quantity=' + nile_quantity1 + '&processing_units_found=' + processing_units_found1 + '&period_from=' + period_from1 + '&period_to=' + period_to1 + '&sample_taken=' + sample_taken1 + + '&sample_code=' + sample_code1 + '&lab_name=' + lab_name1 + '&sample_recipient=' + sample_recipient1 + '&sample_given_man=' + sample_given_man1 + '&result_recipient=' + result_recipient1 + '&sample_delivery_date=' + sample_delivery_date1 + '&result_receive_date=' + result_receive_date1;
 
			//$('#Info').html('');
			//$('#ReadingInfo').html(hiReading_val);

			//debugger;
		if ( rep_code1 != 0 && rep_id1 !=0 &&rep_reason1 != 0 &&building_position1 != 0 && rep_date1 != '') {
               
				$('#sample_info').html('<img src="img/loading.gif" width="70"  height="70" /><p class="text-info"> جاري حفظ البيانات </p>');
				$.ajax({
					cache: false,
					type: "POST",
					dataType: "html",
					url: ajax_URL, 
					data: {
                        rep_code                : rep_code1,
                        rep_name                : rep_name1,
                        rep_id                  : rep_id1,
                        rep_reason              : rep_reason1,
                        building_position       : building_position1,
                        rep_date                : rep_date1,
                        waste_station           : waste_station1,
                        rep_team                : rep_team1,
                        rep_actions             : rep_actions1,
			            pump_num                : pump_num1,
                        pump_capacity           : pump_capacity1,
                        pump_run                : pump_run1,
                        meter_work              : meter_work1,
                        read_current            : read_current1,
                        read_date               : read_date1,
                        govern_quantity         : govern_quantity1,
                        underground_quantity    : underground_quantity1,
                        nile_quantity           : nile_quantity1,
                        processing_units_found  : processing_units_found1,
                        period_from             : period_from1,
                        period_to               : period_to1,
                        sample_taken            : sample_taken1,
                        sample_code             : sample_code1,
                        lab_name                : lab_name1,
                        sample_recipient        : sample_recipient1,
                        sample_given_man        : sample_given_man1,
                        result_recipient        : result_recipient1,
                        sample_delivery_date    : sample_delivery_date1,
                        result_receive_date     : result_receive_date1
				
					},
					error: function() {
						//debugger;
						$('#sample_info').html('خطأ في الحفظ');
					},
					success: 
						function(result){ 
							//debugger;
							$("#sample_info").html(result);
					complete : 
						return true; 
					}
					
				});
		}
			
	  });

     $("#rep_date").datepicker({
                changeMonth: true,
                changeYear: true,
                regional: "ar",
                dateFormat: "yy-mm-dd",
                autoSize: true,
            });
            
     $("#read_date").datepicker({
                changeMonth: true,
                changeYear: true,
                regional: "ar",
                dateFormat: "yy-mm-dd",
                autoSize: true
            });
            
      $("#period_from").datepicker({
                changeMonth: true,
                changeYear: true,
                regional: "ar",
                dateFormat: "yy-mm-dd",
                autoSize: true
            });
    
      $("#period_to").datepicker({
                changeMonth: true,
                changeYear: true,
                regional: "ar",
                dateFormat: "yy-mm-dd",
                autoSize: true
            });
    
     $("#sample_delivery_date").datepicker({
                changeMonth: true,
                changeYear: true,
                regional: "ar",
                dateFormat: "yy-mm-dd",
                autoSize: true
            });
    $("#result_receive_date").datepicker({
                changeMonth: true,
                changeYear: true,
                regional: "ar",
                dateFormat: "yy-mm-dd",
                autoSize: true
            });
     
     });
    
</script>
  


</head>
<body>

<form id="report-form" method="POST" >
            <div class="panel panel-primary text-center">
                <div class="panel-heading"> بيانات المعاينة الأساسية </div>
                <div class="panel-body">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="col-md-4">
                                    <label>كود المنشأة</label> <span class="astrik">*</span>
                                </div>
                                <div class="col-md-8">
                                    <input class="form-control" type="text" name="rep_code" id="rep_code" placeholder="الرجاء ادخال كود المنشأة"  required />
                                    <div class="alert alert-danger custom-alert"> يجب ادخال كود المنشأة </div>
                                </div>
                            </div>
                        
                            <div class="col-md-6">
                                <div class="col-md-4">
                                    <label>مسمى المنشأة</label> <span class="astrik">*</span>
                                </div>
                                <div class="col-md-8">
                                    <input class="form-control" id="rep_name" type="text" name="rep_name" placeholder="مسمى المنشأة" required readonly  />
                                    <div class="alert alert-danger custom-alert"> يجب ادخال مسمى المنشأة </div>
                                 </div>
                                                                               
                            </div>
                        </div>
                    </div>
                
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="col-md-4">
                                    <label>رقم المعاينة</label> <span class="astrik">*</span>
                                </div>
                                <div class="col-md-8">
                                    <input class="form-control" type="text" name="rep_id" id="rep_id" placeholder="رقم المعاينة"  required readonly />
                                    <div class="alert alert-danger custom-alert"> يجب ادخال رقم المعاينة </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="col-md-4">
                                    <label>سبب المعاينة</label> <span class="astrik">*</span>
                                </div>
                                <div class="col-md-8">
                                    <select class="form-control" name="rep_reason" id="rep_reason" required >
                        <option value="0">الرجاء اختيار سبب المعاينة</option>
                        <option value="1">خطة الادارة</option>
                        <option value="2">حساب الأحمال الهيدروليكية</option>
                        <option value="3">تسوية مستحقات الشركة</option>
                        <option value="4">شكوى</option>
                        <option value="5">وصل المباني</option>
                        <option value="6">تعديل مطالبات الأعباء طبقاً لفاتورة المياه</option>
                        <option value="7">تعديل مطالبات الأحمال طبقاً لكمية المياه</option>
                        <option value="8">الاعتراض على نتيجة التحليل</option>
                   </select>

                                    <div class="alert alert-danger custom-alert"> الرجاء اختيار سبب المعاينة </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="col-md-4">
                                    <label> موقف المنشأة</label> <span class="astrik">*</span>
                                </div>
                                <div class="col-md-8">
                                    <select class="form-control" name="building_position" id="building_position" required >
                        <option value="0">الرجاء اختيار موقف المنشأة</option>
                        <option value="1">تعمل</option>
                        <option value="2">متوقفة</option>
                   </select>

                                    <div class="alert alert-danger custom-alert"> الرجاء اختيار موقف المنشأة </div>
                                </div>

                            </div>
                            <div class="col-md-6">
                                <div class="col-md-4">
                                    <label>تاريخ المعاينة</label> <span class="astrik">*</span>
                                </div>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" name="rep_date" id="rep_date"  placeholder="اختر تاريخ المعاينة من قائمة التاريخ" readonly required />
                                    <div class="alert alert-danger custom-alert"> الرجاء اختيار تاريخ المعاينة من قائمة التاريخ </div>
                                    
                                </div>

                            </div>
                </div>
            </div>
            
            
            
            
            
             <div class="form-group">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="col-md-4">
                                    <label>محطة المعالجة التي يتم الصرف عليها</label>
                                </div>
                                <div class="col-md-8">
                                    <input class="form-control" type="text" name="waste_station" placeholder="الرجاء ادخال محطة المعالجة التي يتم الصرف عليها" id="waste_station"  />
                                    <div class="alert alert-danger custom-alert"> الرجاء ادخال محطة المعالجة التي يتم الصرف عليها </div>
                                </div>

                            </div>
                            <div class="col-md-6">
                                <div class="col-md-4">
                                    <label>فريق العمل</label>
                                </div>
                                <div class="col-md-8">
                                    <input class="form-control" type="text" name="rep_team" placeholder="الرجاء ادخال أسماء فريق العمل" id="rep_team"  />
                                    <div class="alert alert-danger custom-alert"> الرجاء ادخال أسماء فريق العمل </div>
                                </div>

                            </div>

                        </div>
                    </div>
                    
                    
                    
                    
                     
             <div class="form-group">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="col-md-4">
                                    <label>الاجراءات المتخذة تجاه المنشآت المخالفة</label></div>
                                <div class="col-md-8">
                                    <textarea rows="5" class="form-control" name="rep_actions" placeholder="الرجاء ادخال الاجراءات المتخذة تجاه المنشآت المخالفة" id="rep_actions" >
                                    </textarea>
                                    <div class="alert alert-danger custom-alert"> الرجاء ادخال الاجراءات المتخذة تجاه المنشآت المخالفة </div>
                                </div>

                            </div>
                            

                        </div>
                    </div>

                </div>
    </div>
            
            
           
            
            <div class="panel panel-primary text-center">
                <div class="panel-heading">بيانات الطلمبات و العدادات</div>
                <div class="panel-body">
                   
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="col-md-4">
                                    <label>عدد الطلمبات</label>
                                </div>
                                <div class="col-md-8">
                                    <input class="form-control" type="text" name="pump_num" placeholder="الرجاء ادخال عدد الطلمبات" id="pump_num" />
                                    <div class="alert alert-danger custom-alert"> الرجاء ادخال عدد الطلمبات </div>
                                </div>

                            </div>
                            <div class="col-md-6">
                                <div class="col-md-4">
                                    <label>قدرة الطلمبة بالحصان</label> </div>
                                <div class="col-md-8">
                                    <input class="form-control" type="text" name="pump_capacity" placeholder="الرجاء ادخال قدرة الطلمبة بالحصان " id="pump_capacity"/>
                                    <div class="alert alert-danger custom-alert"> الرجاء ادخال قدرة الطلمبة بالحصان </div>
                                </div>

                            </div>

                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="col-md-4">
                                    <label>عدد ساعات التشغيل</label>
                                </div>
                                <div class="col-md-8">
                                    <input class="form-control" type="text" name="pump_run"  placeholder="الرجاء ادخال عدد ساعات التشغيل ساعة/اليوم" id="pump_run" />
                                    <div class="alert alert-danger custom-alert"> الرجاء ادخال عدد ساعات التشغيل ساعة/اليوم </div>
                                </div>

                            </div>
                            <div class="col-md-6">
                                <div class="col-md-4">
                                    <label>هل يعمل العداد</label> 
                                </div>
                                <div class="col-md-8">
                                    <select class="form-control" name="meter_work" id="meter_work" >
                        <option value="0">الرجاء اختيار حالة العداد</option>
                        <option value="1">يعمل</option>
                        <option value="2">لايعمل</option>
                   </select>

                                    <div class="alert alert-danger custom-alert"> الرجاء اختيار حالة العداد </div>
                                </div>

                            </div>
                        </div>
                    </div>
 
                 <div class="form-group">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="col-md-4">
                                    <label>قراءة العداد الحالية</label> 
                                </div>
                                <div class="col-md-8">
                                    <input class="form-control" type="text" maxlength="5" name="read_current" placeholder="الرجاء ادخال قراءة العداد الحالية" id="read_current"  />
                                    <div class="alert alert-danger custom-alert">  الرجاء ادخال قراءة العداد الحالية</div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="col-md-4">
                                    <label>تاريخ قراءة العداد</label>
                                </div>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" name="read_date" id="read_date" placeholder="اختر تاريخ قراءة العداد من قائمة التاريخ" readonly required />
                                    <div class="alert alert-danger custom-alert"> الرجاء اختيار تاريخ قراءة العداد من قائمة التاريخ  </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    
                
                
                

            </div>
    </div>
            
            <div class="panel panel-primary text-center">
                <div class="panel-heading">بيانات أخرى</div>
                <div class="panel-body">
                   <div class="form-group">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="col-md-4">
                                    <label>كمية المياه الحكومية شهرياً</label>
                                </div>
                                <div class="col-md-8">
                                    <input class="form-control" type="text" name="govern_quantity" placeholder="الرجاء ادخال كمية المياه الحكومية شهرياً" id="govern_quantity" />
                                    <div class="alert alert-danger custom-alert"> الرجاء ادخال كمية المياه الحكومية شهرياً</div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="col-md-4">
                                    <label>كمية المياه الجوفية يومياً</label>
                                </div>
                                <div class="col-md-8">
                                    <input class="form-control"  type="text" name="underground_quantity" placeholder="الرجاء ادخال كمية المياه الجوفية يومياً" id="underground_quantity" />
                                    <div class="alert alert-danger custom-alert"> يجب ادخال كمية المياه الجوفية يومياً</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    
                    
                    
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="col-md-4">
                                    <label> كمية المياه النيلي يومياً</label>
                                </div>
                                <div class="col-md-8">
                                    <input class="form-control" type="text" name="nile_quantity" placeholder="الرجاء ادخال كمية المياه النيلي يومياً" id="nile_quantity" />
                                    <div class="alert alert-danger custom-alert"> يجب ادخال كمية المياه النيلي يومياً </div>
                                </div>
                            </div>
                             <div class="col-md-6">
                                <div class="col-md-4">
                                    <label>وحدات المعالجة</label>
                                </div>
                                <div class="col-md-8">
                                    <select class="form-control" name="processing_units_found" id="processing_units_found" >
                        <option value="0">الرجاء اختيار وحدات المعالجة</option>
                        <option value="1">توجد</option>
                        <option value="2">لاتوجد</option>
                   </select>

                                    <div class="alert alert-danger custom-alert"> الرجاء اختيار وحدات المعالجة </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    
                    
                    
                    
                    
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="col-md-4">
                                    <label>فترة المحاسبة من</label> 
                                </div>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" name="period_from" id="period_from" placeholder="اختر تاريخ بداية فترة المحاسبة من قائمة التاريخ " readonly />
                                    <div class="alert alert-danger custom-alert"> الرجاء اختيار تاريخ بداية فترة المحاسبة من قائمة التاريخ</div>
                                    
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="col-md-4">
                                    <label>فترة المحاسبة إلى</label> 
                                </div>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" name="period_to" id="period_to" placeholder="اختر تاريخ نهاية المحاسبة من قائمة التاريخ" readonly />
                                    <div class="alert alert-danger custom-alert"> الرجاء اختيار تاريخ نهاية المحاسبة من قائمة التاريخ التي تظهر لك </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    
                    
                    
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="col-md-4">
                                    <label>هل تم أخذ عينة</label> 
                                </div>
                                <div class="col-md-8">
                                    <select class="form-control" name="sample_taken" id="sample_taken" required >
                                        <option value="1">نعم</option>
                                        <option value="2">لا</option>
                                   </select>

                                    <div class="alert alert-danger custom-alert"> الرجاء اختيار هل تم أخذ عينة </div>
                                </div>

                            </div>
                           
                         
                        </div>
                    </div>
  
                   <div id="no_sample">
                    <div class="form-group">
                        <div class="row">
                              <div class="col-md-6">
                                <div class="col-md-4">
                                    <label>كود العينة</label> <span class="astrik"></span>
                                </div>
                                <div class="col-md-8">
                                   <input class="form-control" type="text" name="sample_code" placeholder="الرجاء ادخال كود العينة" id="sample_code" />
                                    
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="col-md-4">
                                    <label>مسمى المعمل</label>
                                </div>
                                <div class="col-md-8">
                                <input class="form-control" type="text" name="lab_name" placeholder="الرجاء ادخال اسم المعمل" id="lab_name"  />

                                    <div class="alert alert-danger custom-alert"> الرجاء ادخال اسم المعمل </div>
                                </div>

                            </div>
                         
                        </div>
                    </div>
 
                    
                    <div class="form-group">
                        <div class="row">
                              <div class="col-md-6">
                                <div class="col-md-4">
                                    <label>مستلم العينة</label> 
                                </div>
                                <div class="col-md-8">
                                    <input class="form-control" type="text" name="sample_recipient" placeholder="الرجاء ادخال اسم مستلم العينة" id="sample_recipient"  />
                                    <div class="alert alert-danger custom-alert"> يجب ادخال اسم مستلم العينة</div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="col-md-4">
                                    <label>مسلم العينة</label>
                                </div>
                                <div class="col-md-8">
                                <input class="form-control" type="text" name="sample_given_man" placeholder="الرجاء ادخال اسم مسلم العينة" id="sample_given_man"  />

                                    <div class="alert alert-danger custom-alert"> الرجاء ادخال اسم مسلم العينة </div>
                                </div>

                            </div>
                          
                        </div>
                    </div>
                    
                    
                    
                    
                    
                     <div class="form-group">
                        <div class="row">
                             <div class="col-md-6">
                                <div class="col-md-4">
                                    <label>مستلم النتيجة</label> 
                                </div>
                                <div class="col-md-8">
                                    <input class="form-control" type="text" name="result_recipient" placeholder="الرجاء ادخال اسم مستلم النتيجة" id="result_recipient"  />
                                    <div class="alert alert-danger custom-alert"> يجب ادخال اسم مستلم النتيجة</div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="col-md-4">
                                    <label>تاريخ تسليم العينة</label>
                                </div>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" name="sample_delivery_date" id="sample_delivery_date" placeholder="اختر تاريخ تسليم العينة من قائمة التاريخ" readonly />
                                    <div class="alert alert-danger custom-alert"> الرجاء اختيار تاريخ تسليم العينة من قائمة التاريخ التي تظهر لك </div>
                                    
                                </div>
                            </div>


                    </div>
                   
                   </div>
                     <div class="form-group">
                        <div class="row">
                      
                            <div class="col-md-6">
                                <div class="col-md-4">
                                    <label>تاريخ استلام النتيجة</label>
                                </div>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" name="result_receive_date" id="result_receive_date" placeholder="اختر تاريخ استلام النتيجة من قائمة التاريخ" readonly />
                                    <div class="alert alert-danger custom-alert"> الرجاء اختيار تاريخ استلام النتيجة من قائمة التاريخ التي تظهر لك </div>
                                    
                                </div>
                            </div>

                    </div>
                   
                   </div>
                   </div>
            </div>
            
    </div>
            <input class="btn btn-info btn-lg text-center" style="width:100%" id="rep_save"  value="تسجيل" />
            
</form>

<div id="sample_info"></div>
 
     </body>
</html>