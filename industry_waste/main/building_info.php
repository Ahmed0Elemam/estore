<?php include "connect.php"; ?>
<!DOCTYPE HTML>

<html>
<head>

<script language="javascript" src="js/js1.js?<?php echo md5_file("js/js1.js")?>" type="text/javascript">     </script> 
 <script>
$(document).ready(function() {
              
$('#save').click(function(){
               var b_code1              = $('#code').val();
               var b_name1              = $('#name').val();
               var b_address1           = $('#address').val();
               var industry_name1       = $('#industry_name').val();
               var contract_type1       = $('#contract_type').val();
               var contract_date1       = $('#contract_date').val();
               var area1                = $('#city').val();
               var account_type1        = $('#account_type').val();
               var branch1              = $('#branch').val();
			   var account1             = $('#account').val();
			   var water_source1        = $('#water_source').val();
               var fax1                 = $('#fax').val();
               var village1             = $('#village').val();
               var landline1            = $('#landline').val();
               var mobile1              = $('#mobile').val();
               var owner_name1          = $('#owner_name').val();
               var owner_mob1           = $('#owner_mobile').val();
               var manager_name1        = $('#manager_name').val();
               var manager_mob1         = $('#manager_mobile').val();
               var activity1            = $('#activity').val();
               var materials1           = $('#materials').val();
               var shifts1              = $('#shifts').val();
               var work_days1           = $('#work_days').val();
               var emp_num1             = $('#emp_num').val();
               var m21                  = $('#m2').val();
               var vac1                 = $('#vac').val();
               var contract_num1        = $('#contract_num').val();
               var contract_open_date1  = $('#contract_open_date').val();
               var contract_end_date1   = $('#contract_end_date').val();
               var waste_type1          = $('#waste_type').val();
               var waste_location1      = $('#waste_location').val();
               var license_type1        = $('#license_type').val();
               var notes1               = $('#notes').val();


			
			var ajax_URL = "save.php";
			var dataString = 'b_code=' + b_code1 + '&b_name' + b_name1 + '&b_address=' + b_address1 + '&industry_name=' + industry_name + '&contract_type=' + contract_type + '&contract_date=' + contract_date1 + '&area' + area1 + '&account_type' + account_type1 + '&branch=' + branch1 + '&account=' + account1 + '&water_source' + water_source1 + '&fax=' + fax1 + '&village=' + village1 + '&landline=' + landline1 + '&mobile=' + mobile1 + '&owner_name=' + owner_name1 + '&owner_mob=' + owner_mob1 + '&manager_name=' + owner_name1 + '&manager_mob=' + owner_mob1 + '&activity=' + activity1 + '&materials=' + materials1 + '&shifts=' + shifts1 + '&work_days=' + work_days1 + '&emp_num=' + emp_num1 + '&m2=' + m21 + '&vac=' + vac1 + '&contract_num=' + contract_num1 + '&contract_open_date=' + contract_open_date1 + '&contract_end_date=' + contract_end_date1 + '&waste_type=' + waste_type1 + '&waste_location=' + waste_location1 + '&license_type=' + license_type + '&notes=' + notes1;
 
			//$('#Info').html('');
			//$('#ReadingInfo').html(hiReading_val);

			//debugger;
		if ( b_code1 != 0 && b_name1 != '' && b_address1 != '' && industry_name1 != 0  && contract_type1 != 0  && area1 != 0 && account_type1 != 0 && branch1 != 0 && account1 != 0 && water_source1 != 0 && mobile1 != 0 && activity1 != '' &&  waste_type1 != 0 &&  waste_location1 != '' &&  license_type1 != 0) {
               
				$('#Info').html('<img src="img/loading.gif" width="70"  height="70" /><p class="text-info"> جاري حفظ البيانات </p>');
				$.ajax({
					cache: false,
					type: "POST",
					dataType: "html",
					url: ajax_URL, 
					data: {
						b_code          : b_code1,
                        b_name          : b_name1,
                        b_address       : b_address1,
                        industry_name   : industry_name1,
                        contract_type   : contract_type1,
                        contract_date   : contract_date1,
                        area            : area1,
                        account_type    : account_type1,
                        branch          : branch1,
			            account         : account1,
                        water_source    : water_source1,
                        fax             : fax1,
                        village         : village1,
                        landline        : landline1,
                        mobile          : mobile1,
                        owner_name      : owner_name1,
                        owner_mob       : owner_mob1,
                        manager_name    : manager_name1,
                        manager_mob     : manager_mob1,
                        activity        : activity1,
                        materials       : materials1,
                        shifts          : shifts1,
                        work_days       : work_days1,
                        emp_num         : emp_num1,
                        m2              : m21,
                        vac             : vac1,
                        contract_num    : contract_num1,
                        contract_open_date : contract_open_date1,
                        contract_end_date  : contract_end_date1,
                        waste_type         : waste_type1,
                        waste_location     : waste_location1,
                        license_type       : license_type1,
                        notes              : notes1	
					},
					error: function() {
						//debugger;
						$('#Info').html('خطأ في الحفظ');
					},
					success: 
						function(result){ 
							//debugger;
							$("#Info").html(result);
					complete : 
						return true; 
					}
					
				});
		}
			
	  });

     $("#contract_date").datepicker({
                changeMonth: true,
                changeYear: true,
                regional: "ar",
                dateFormat: "yy-mm-dd",
                autoSize: true,
            });
            
             $("#contract_open_date").datepicker({
                changeMonth: true,
                changeYear: true,
                regional: "ar",
                dateFormat: "yy-mm-dd",
                autoSize: true
            });
            
             $("#contract_end_date").datepicker({
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


<form id="register-form" method="POST" >
            <div class="panel panel-primary text-center">
                <div class="panel-heading">البيانات الأساسية </div>
                <div class="panel-body">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="col-md-4">
                                    <label>كود المنشأة</label> <span class="astrik">*</span>
                                </div>
                                <div class="col-md-8">
                                    <input class="name form-control" type="text" name="code" id="code" placeholder="الرجاء ادخال كود المنشأة"  required />
                                    <div class="alert alert-danger custom-alert"> يجب ادخال كود المنشأة </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="col-md-4">
                                    <label>مسمى المنشأة</label> <span class="astrik">*</span>
                                </div>
                                <div class="col-md-8">
                                    <input class="form-control" id="name" type="text" name="name" placeholder="الرجاء ادخال مسمى المنشأة" required  />
                                    <div class="alert alert-danger custom-alert"> يجب ادخال مسمى المنشأة </div>
                                 </div>
                                                                               
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="col-md-4">
                                    <label>عنوان المنشأة</label> <span class="astrik">*</span>
                                </div>
                                <div class="col-md-8">
                                    <input class="name form-control" type="text" name="address" id="address" placeholder="الرجاء ادخال عنوان المنشأة"  required/>
                                    <div class="alert alert-danger custom-alert"> يجب ادخال عنوان المنشأة </div>
                                </div>

                            </div>
                            <div class="col-md-6">
                                <div class="col-md-4">
                                    <label>مسمى الصناعات</label> <span class="astrik">*</span>
                                </div>
                                <div class="col-md-8">
                                    <select class="form-control" name="industry_name" id="industry_name" >
                                        <option value="0">الرجاء اختيار مسمى الصناعات</option>
                                        <?php 
                                            $stmt = $connect->prepare("select * from industry_names");
                                            $stmt->execute();
                                            $industries = $stmt->fetchAll();
                                        foreach($industries as $ind){
                                        ?>
                                        <option value="<?php echo $ind['id']; ?>"><?php echo $ind['name']; ?></option>
                   
                                        <?php } ?> 
                                    </select>

                                    <div class="alert alert-danger custom-alert"> الرجاء اختيار مسمى الصناعات </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="col-md-4">
                                    <label>عقد ترخيص</label> <span class="astrik">*</span>
                                </div>
                                <div class="col-md-8">
                                    <select class="form-control" name="contract_type" id="contract_type" required >
                        <option value="0">الرجاء اختيار عقد الترخيص</option>
                        <option value="1">متعاقد</option>
                        <option value="2">غير متعاقد</option>
                   </select>

                                    <div class="alert alert-danger custom-alert"> الرجاء اختيار عقد الترخيص </div>
                                </div>

                            </div>
                            <div class="col-md-6" id="cdate">
                                <div class="col-md-4">
                                    <label>تاريخ تحرير العقد</label> <span class="astrik">*</span>
                                </div>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" name="contract_date" id="contract_date"  placeholder="اختر تاريخ تحرير العقد من القائمة التي تظهر عند الضغط" readonly />
                                    <div class="alert alert-danger custom-alert"> الرجاء اختيار التاريخ من قائمة التاريخ التي تظهر لك </div>
                                    
                                </div>

                            </div>
                </div>
            </div>
            
                </div>
            
    </div>
    
             <div class="panel panel-primary text-center">
                <div class="panel-heading">بيانات حساب المنشأة</div>
                <div class="panel-body">
                    
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-6">
                            
                            <div class="col-md-4">
                            <label>مسمى المنطقة</label> <span class="astrik">*</span> </div>
                                <div class="col-md-8">
                                    <select class="form-control" name="city" id="city" required >
                                                <option value="0">الرجاء اختيار المنطقة</option>
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
                                                <option value="19">نبروه</option>
                                            </select>
                                    <div class="alert alert-danger custom-alert"> الرجاء اختيار المنطقة </div>
                            
                            </div>
                            </div>
                            
                            <div class="col-md-6">
                                <div class="col-md-4">
                                    <label>نوع الحساب</label> <span class="astrik">*</span>
                                </div>
                                <div class="col-md-8">
                                 <select class="form-control" name="account_type" id="account_type"  required>
                                        <option value="0">الرجاء اختيار نوع الحساب</option>
                                        <option value="1">منزلي</option>
                                        <option value="2">قائم عمارة </option>
                                        <option value="8"> تجاري </option>
                                        <option value="10"> حكومة </option>
                                        <option value="22"> خدمي </option>
                                        <option value="23"> صناعي </option>
                                        <option value="24"> سياحي </option>
                                        <option value="25"> أخرى </option>
                                        <option value="40"> ممارسة منزلي </option>
                                        <option value="41"> ممارسة 2 غرفة </option>
                                        <option value="42"> ممارسة 3 غرفة </option>
                                        <option value="43"> ممارسة </option>
                                        <option value="44"> ممارسة تجاري </option>
                                        <option value="46"> ممارسة حكومي </option>
                                        <option value="50"> ممارسة </option>
                                        <option value="51"> ممارسة صرف صحي </option>
                                        <option value="52"> ممارسة صرف صحي </option>
                                        <option value="53"> ممارسة صرف صحي </option>
                                        <option value="54"> ممارسة صرف صحي </option>
                                        <option value="55"> ممارسة صرف صحي </option>
                                        <option value="56"> ممارسة صرف صحي </option>
                                        <option value="57"> ممارسة صرف صحي </option>
                                        <option value="58"> ممارسة صرف مغسلة </option>
                                        <option value="59"> ممارسة صرف صحي </option> 

                                </select>

                                    <div class="alert alert-danger custom-alert"> الرجاء اختيار نوع الحساب </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-6">
                               <div class="col-md-4">
                                    <label>رقم الفرع</label> <span class="astrik">*</span>
                                </div>
                                <div class="col-md-8">
                                    <input class="name form-control" maxlength="2" type="text" name="branch_num" id="branch" placeholder="الرجاء ادخال رقم الفرع" required />
                                    <div class="alert alert-danger custom-alert"> يجب ادخال رقم الفرع </div>
                                </div>
                                

                            </div>
                            <div class="col-md-6">
                                <div class="col-md-4">
                                    <label> رقم الحساب</label> <span class="astrik">*</span>
                                </div>
                                <div class="col-md-8">
                                <input id="account" class="form-control"  maxlength="5" type="text" name="account_num" placeholder="الرجاء ادخال رقم الحساب" id="account" required  />
                                    
                                    <div class="alert alert-danger custom-alert"> يجب ادخال رقم الحساب</div>
                                    
                                </div>

                            </div>
                </div>
            </div>
                  <div class="form-group">
                        <div class="row">
                            <div class="col-md-6">
                               <div class="col-md-4">
                                    <label>مصدر المياه</label> <span class="astrik">*</span>
                                </div>
                                <div class="col-md-8">
                                    <select class="form-control" name="water_source" id="water_source"  required>
                                        <option value="0">الرجاء اختيار مصدر المياه </option>
                                        <option value="1">نيلي</option>
                                        <option value="2">جوفي</option>
                                        <option value="3" selected> حكومي </option>
                                        <option value="4"> أخرى </option>
                                </select>

                                    <div class="alert alert-danger custom-alert"> يجب اختيار مصدر المياه </div>
                                </div>
                                

                            </div>

                </div>
            </div>
        </div>
    </div>
            
            <div class="panel panel-primary text-center">
                <div class="panel-heading">بيانات الاتصال بالمنشأة</div>
                <div class="panel-body">
                   
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="col-md-4">
                                    <label>رقم فاكس المنشأة</label>
                                </div>
                                <div class="col-md-8">
                                    <input class="form-control" maxlength="7" type="text" name="fax" placeholder="الرجاء ادخال رقم فاكس المنشأة" id="fax" />
                                    <div class="alert alert-danger custom-alert"> الرجاء ادخال رقم فاكس المنشأة </div>
                                </div>

                            </div>
                            <div class="col-md-6">
                                <div class="col-md-4">
                                    <label>مسمى الحي</label> 
                                </div>
                                <div class="col-md-8">
                                    <input id="village" class="form-control" type="text" name="village" placeholder="الرجاء ادخال اسم الحي/القرية" id="village" />
                                    <div class="alert alert-danger custom-alert"> الرجاء ادخال مسمى الحي/القرية </div>
                                </div>

                            </div>

                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="col-md-4">
                                    <label>رقم تليفون المنشأة</label>
                                </div>
                                <div class="col-md-8">
                                    <input id="landline" class="form-control" type="text" name="landline" maxlength="7" placeholder="الرجاء ادخال رقم الأرضي 7 أرقام" id="landline" />
                                    <div class="alert alert-danger custom-alert"> الرجاء ادخال رقم الأرضي ان وجد </div>
                                </div>

                            </div>
                            <div class="col-md-6">
                                <div class="col-md-4">
                                    <label>رقم موبايل المنشأة</label> <span class="astrik">*</span> </div>
                                <div class="col-md-8">
                                    <input id="mobile" class="form-control" type="text" name="mobile" maxlength="11" placeholder="الرجاء ادخال رقم الموبايل 11 رقم" id="mobile"  required />
                                    <div class="alert alert-danger custom-alert"> الرجاء ادخال رقم الموبايل 11 رقم </div>
                                </div>

                            </div>
                        </div>
                    </div>
 
                 <div class="form-group">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="col-md-4">
                                    <label>اسم المالك</label> 
                                </div>
                                <div class="col-md-8">
                                    <input class="form-control" type="text" name="owner_name" placeholder="الرجاء ادخال اسم المالك" id="owner_name" />
                                    <div class="alert alert-danger custom-alert">  يجب ادخال اسم المالك </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="col-md-4">
                                    <label>رقم تليفون المالك</label>
                                </div>
                                <div class="col-md-8">
                                    <input class="form-control" maxlength="11" type="text" name="owner_mobile" placeholder="الرجاء ادخال رقم تليفون المالك" id="owner_mobile" />
                                    <div class="alert alert-danger custom-alert"> يجب ادخال رقم تليفون المالك </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    
                    
                     <div class="form-group">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="col-md-4">
                                    <label>اسم المدير</label> 
                                </div>
                                <div class="col-md-8">
                                    <input class="form-control" type="text" name="manager_name" id="manager_name" placeholder="الرجاء ادخال رقم تليفون مدير المنشأة" />
                                    <div class="alert alert-danger custom-alert"> الرجاء ادخال رقم تليفون مدير المنشأة</div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="col-md-4">
                                    <label>رقم تليفون المدير</label>
                                </div>
                                <div class="col-md-8">
                                    <input class="form-control" maxlength="11" type="text" id="manager_mobile" name="manager_mobile" placeholder="الرجاء ادخال رقم تليفون مدير المنشأة" />
                                    <div class="alert alert-danger custom-alert"> الرجاء ادخال رقم تليفون مدير المنشأة</div>
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
                                    <label>نشاط المنشأة</label> <span class="astrik">*</span>
                                </div>
                                <div class="col-md-8">
                                    <input class="name form-control" type="text" name="building_activity" placeholder="الرجاء ادخال نشاط المنشأة" id="activity" required />
                                    <div class="alert alert-danger custom-alert"> الرجاء ادخال نشاط المنشأة </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="col-md-4">
                                    <label>المواد المستخدمة في الصناعة</label>
                                </div>
                                <div class="col-md-8">
                                    <input class="nid form-control" maxlength="14" type="text" name="materials_used" placeholder="الرجاء ادخال المواد المستخدمة في الصناعة" id="materials"  />
                                    <div class="alert alert-danger custom-alert"> يجب ادخال المواد المستخدمة في الصناعة</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    
                    
                    
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="col-md-4">
                                    <label>عدد ورادي العمل</label> 
                                </div>
                                <div class="col-md-8">
                                    <input class="name form-control" type="text" maxlength="1" name="building_shifts" placeholder="الرجاء ادخال عدد ورادي العمل" id="shifts"   />
                                    <div class="alert alert-danger custom-alert"> يجب ادخال عدد ورادي العمل </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="col-md-4">
                                    <label>عدد أيام العمل</label> 
                                </div>
                                <div class="col-md-8">
                                    <input class="form-control" maxlength="2" type="text" name="building_work_days" placeholder="الرجاء ادخال عدد أيام العمل" id="work_days" />
                                    <div class="alert alert-danger custom-alert"> يجب ادخال عدد أيام العمل </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    
                    
                    
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="col-md-4">
                                    <label>عدد العاملين</label>
                                </div>
                                <div class="col-md-8">
                                    <input class="name form-control" type="text" name="building_emp_num" placeholder="الرجاء ادخال عدد العاملين" id="emp_num"  />
                                    <div class="alert alert-danger custom-alert"> يجب ادخال عدد العاملين </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="col-md-4">
                                    <label>مساحة المنشأة م2</label> 
                                </div>
                                <div class="col-md-8">
                                    <input class="form-control" maxlength="14" type="text" name="building_area_m2" placeholder="الرجاء ادخال مساحة المنشأة (م2) " id="m2" />
                                    <div class="alert alert-danger custom-alert"> يجب ادخال مساحة المنشأة (م2)</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    
                    
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="col-md-4">
                                    <label>أيام أجازة المنشأة</label>
                                </div>
                                <div class="col-md-8">
                                    <input class="name form-control" maxlength="14" type="text" name="building_vac" placeholder="الرجاء ادخال أيام أجازة المنشأة" id="vac" />
                                    <div class="alert alert-danger custom-alert"> يجب ادخال أيام أجازة المنشأة </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="col-md-4">
                                    <label>رقم الترخيص في الحي</label> 
                                </div>
                                <div class="col-md-8">
                                    <input class="form-control" maxlength="14" type="text" name="contract_num" placeholder="الرجاء ادخال رقم الترخيص في الحي" id="contract_num" />
                                    <div class="alert alert-danger custom-alert"> يجب ادخال رقم الترخيص في الحي</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    
                    
                    
                    
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="col-md-4">
                                    <label>تاريخ الترخيص</label>
                                </div>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" name="contract_open_date" id="contract_open_date" placeholder="اختر تاريخ الترخيص من القائمة التي تظهر عند الضغط" readonly  />
                                    <div class="alert alert-danger custom-alert"> الرجاء اختيار التاريخ من قائمة التاريخ التي تظهر لك </div>
                                    
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="col-md-4">
                                    <label>تاريخ انتهاء الترخيص</label>
                                </div>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" name="contract_end_date" id="contract_end_date" placeholder="اختر تاريخ انتهاء الترخيص من القائمة التي تظهر عند الضغط" readonly />
                                    <div class="alert alert-danger custom-alert"> الرجاء اختيار التاريخ من قائمة التاريخ التي تظهر لك </div>
                                    
                                </div>
                            </div>
                </div>
                    </div>
                    
                    
                    
                    
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="col-md-4">
                                    <label>نوع الصرف</label> <span class="astrik">*</span>
                                </div>
                                <div class="col-md-8">
                                    <select class="form-control" name="waste_type" id="waste_type" required >
                        <option value="0">الرجاء اختيار نوع الصرف</option>
                        <option value="1">صحي</option>
                        <option value="2" selected>صناعي</option>
                   </select>

                                    <div class="alert alert-danger custom-alert"> الرجاء اختيار نوع الصرف </div>
                                </div>

                            </div>
                            <div class="col-md-6">
                                <div class="col-md-4">
                                    <label>جهة الصرف</label> <span class="astrik">*</span>
                                </div>
                                <div class="col-md-8">
                                    <input class="form-control" type="text" name="waste_location" id="waste_location" placeholder="الرجاء ادخال جهة الصرف" required value="شبكة الصرف الصحي"  />
                                    <div class="alert alert-danger custom-alert"> يجب ادخال جهة الصرف</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    
                    
                    
                     <div class="form-group">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="col-md-4">
                                    <label>نوع الرخصة</label> <span class="astrik">*</span>
                                </div>
                                <div class="col-md-8">
                                    <select class="form-control" name="license_type" id="license_type" required >
                        <option value="0">الرجاء اختيار نوع الرخصة</option>
                        <option value="1">دائمة</option>
                        <option value="2" selected>مؤقتة</option>
                   </select>

                                    <div class="alert alert-danger custom-alert"> الرجاء اختيار نوع الرخصة </div>
                                </div>

                            </div>
                            <div class="col-md-6">
                                <div class="col-md-4">
                                    <label>ملاحظات</label>
                                </div>
                                <div class="col-md-8">
                                    <input class="form-control" type="text" name="notes" placeholder="الرجاء ادخال الملاحظات إن وجدت" id="notes"  />
                                    <div class="alert alert-danger custom-alert"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
         <input class="btn btn-info btn-lg text-center" style="width:100%;" id="save"  value="تسجيل" />
            
</form>

<div id="Info"></div>
 
</body>
</html>