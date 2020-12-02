<!DOCTYPE HTML>

<html>
<head>
<script language="javascript" src="js/js3.js?<?php echo md5_file("js/js3.js")?>" type="text/javascript"></script>
<script>
$(document).ready(function(){
             
$('#view_info').click(function(){
               var sample_code1             = $('#sample_code').val();
               var sample_delivery_date1    = $('#sample_delivery_date').val();

			var ajax_URL = "sample_view.php";
			var dataString = 'sample_code=' + sample_code1  + '&sample_delivery_date=' + sample_delivery_date1;
 
			//$('#Info').html('');
			//$('#ReadingInfo').html(hiReading_val);

			//debugger;
		if ( sample_code1 != 0 && sample_delivery_date1 != '') {
               
				$('#sample_view').html('<img src="img/loading.gif" width="70"  height="70" /><p class="text-info"> جاري حفظ البيانات </p>');
				$.ajax({
					cache: false,
					type: "POST",
					dataType: "html",
					url: ajax_URL, 
					data: {
                        sample_code             : sample_code1,
                        sample_delivery_date    : sample_delivery_date1

				
					},
					error: function() {
						//debugger;
						$('#sample_view').html('خطأ في الحفظ');
					},
					success: 
						function(result){ 
							//debugger;
							$("#sample_view").html(result);
					complete : 
						return true; 
					}
					
				});
		}
			
	  });


     $("#sample_delivery_date").datepicker({
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

<form id="sample-form" method="POST" >
            <div class="panel panel-primary text-center">
                <div class="panel-heading"> بيانات العينة </div>
                <div class="panel-body">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="col-md-4">
                                    <label>كود العينة</label> <span class="astrik">*</span>
                                </div>
                                <div class="col-md-8">
                                    <input class="form-control" type="text" name="sample_code" id="sample_code" placeholder="الرجاء ادخال كود العينة"  required />
                                    <div class="alert alert-danger custom-alert"> يجب ادخال كود العينة </div>
                                </div>
                            </div>
                        
                            <div class="col-md-6">
                                <div class="col-md-4">
                                    <label>تاريخ تسليم العينة</label><span class="astrik">*</span>
                                </div>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" name="sample_delivery_date" id="sample_delivery_date" placeholder="اختر تاريخ تسليم العينة من قائمة التاريخ" readonly />
                                    <div class="alert alert-danger custom-alert"> الرجاء اختيار تاريخ تسليم العينة من قائمة التاريخ  </div>
                                    
                                </div>
                            </div>
                        </div>
                 
                    </div>

                </div>
            
     <input class="btn btn-info btn-lg text-center" style="width:100%" id="view_info"  value="عرض" />
            

            </div>
     
</form>

<div id="sample_view"></div>
 
</body>
</html>