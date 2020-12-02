<?php

include "connect.php"; ?>
<!DOCTYPE HTML>

<html>
<head>

 <script>
$(document).ready(function() {
              
$('#view_bds').click(function(){
              
            var area   = $('#area').val();
			var ajax_URL = "area_view.php";
			var dataString = 'area1=' + area ;
 
			//$('#Info').html('');
			//$('#ReadingInfo').html(hiReading_val);

			//debugger;

               
				$('#Info').html('<img src="img/loading.gif" width="70"  height="70" /><p class="text-info"> جاري عرض البيانات </p>');
				$.ajax({
					cache: false,
					type: "POST",
					dataType: "html",
					url: ajax_URL, 
					data: {
						area1          : area
                        
					},
					error: function() {
						//debugger;
						$('#Info').html('خطأ في العرض');
					},
					success: 
						function(result){ 
							//debugger;
							$("#Info").html(result);
					complete : 
						return true; 
					}
					
				});
	
			
	  })
});

    
    </script>
  


</head>
<body>


<form id="register-form" method="POST" >

    
             <div class="panel panel-primary text-center">
                <div class="panel-heading">بيانات المنشآت طبقا لكل منطقة </div>
                <div class="panel-body">
                    
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-6">
                            
                            <div class="col-md-4">
                            <label> المنطقة</label> <span class="astrik">*</span> </div>
                                <div class="col-md-8">
                                    <select class="form-control" name="area" id="area" required >
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
                        </div>
                    </div>
                 </div>
    </div>
            
        
    
         <input class="btn btn-info btn-lg text-center" style="width:100%;" id="view_bds"  value="عرض" />
            
</form>

<div id="Info"></div>
 
</body>
</html>
