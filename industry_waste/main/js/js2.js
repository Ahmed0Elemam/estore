/*jslint browser: true*/
/*global $, jQuery, alert, console, grecaptcha*/
$(function() {

    'use strict';
    // setting error status for Samples Info Page
    var rep_codeError           = true,
        rep_reasonError         = true,
        building_positionError  = true,
        rep_dateError           = true;


    
    ///////////////////////////////////////////////////////////////////////////////////////////////
    ////////////////errors for Samples Info Page
    
    $('#rep_code').blur(function() {
        if (!$(this).val() || $(this).val() == 0) { // Show Error

            $(this).css('border', '1px solid #f00').parent().find('.custom-alert').fadeIn(200).end().find('.astrik').fadeIn(100);
            rep_codeError = true;

        } else { // Hide Error
            $(this).css('border', '1px solid #080').parent().find('.custom-alert').fadeOut(200).end().find('.astrik').fadeOut(100);
            rep_codeError = false;
        }

    });
    
    $('#rep_reason').blur(function() {

        if ($(this).val() == 0) { // Show Error

            $(this).css('border', '1px solid #f00').parent().find('.custom-alert').fadeIn(200).end().find('.astrik').fadeIn(100);
            rep_reasonError = true;

        } else { // Hide Error
            $(this).css('border', '1px solid #080').parent().find('.custom-alert').fadeOut(200).end().find('.astrik').fadeOut(100);
            rep_reasonError = false;
        }

    });
    
    $('#building_position').blur(function() {

        if ($(this).val() == 0) { // Show Error

            $(this).css('border', '1px solid #f00').parent().find('.custom-alert').fadeIn(200).end().find('.astrik').fadeIn(100);
            building_positionError = true;

        } else { // Hide Error
            $(this).css('border', '1px solid #080').parent().find('.custom-alert').fadeOut(200).end().find('.astrik').fadeOut(100);
            building_positionError = false;
        }

    });
    
    $('#rep_date').blur(function() {
        if (!$(this).val()) { // Show Error
            $(this).css('border', '1px solid #f00').parent().find('.custom-alert').fadeIn(200).end().find('.astrik').fadeIn(100);
            rep_dateError = true;
        } else {
            $(this).css('border', '1px solid #080').parent().find('.custom-alert').fadeOut(200).end().find('.astrik').fadeOut(100);
            rep_dateError = false;
        }

    });
    
    // Submit Form Validation
    $('#rep_save').click(function(e) {
        if ( rep_codeError === true || rep_reasonError === true || building_positionError === true || rep_dateError === true ) {
            e.preventDefault();
            $('#rep_code, #rep_reason, #building_position, #rep_date').blur();
        }

    });
    
    $("#rep_code").keydown(function(event) {
        if (!((event.keyCode >= 48 && event.keyCode <= 57) || event.keyCode == 46 || event.keyCode == 8 || (event.keyCode >= 96 && event.keyCode <= 105))) {
            event.preventDefault();
        }
    });
    
    // Numeric Only inputs
    
    $("#pump_num").keydown(function(event) {
        if (!((event.keyCode >= 48 && event.keyCode <= 57) || event.keyCode == 46 || event.keyCode == 8 || (event.keyCode >= 96 && event.keyCode <= 105))) {
            event.preventDefault();
        }
    });
    
    $("#pump_capacity").keydown(function(event) {
        if (!((event.keyCode >= 48 && event.keyCode <= 57) || event.keyCode == 46 || event.keyCode == 8 || (event.keyCode >= 96 && event.keyCode <= 105))) {
            event.preventDefault();
        }
    });
    
    $("#pump_run").keydown(function(event) {
        if (!((event.keyCode >= 48 && event.keyCode <= 57) || event.keyCode == 46 || event.keyCode == 8 || (event.keyCode >= 96 && event.keyCode <= 105))) {
            event.preventDefault();
        }
    });
    
    $("#read_current").keydown(function(event) {
        if (!((event.keyCode >= 48 && event.keyCode <= 57) || event.keyCode == 46 || event.keyCode == 8 || (event.keyCode >= 96 && event.keyCode <= 105))) {
            event.preventDefault();
        }
    });
    
    $("#govern_quantity").keydown(function(event) {
        if (!((event.keyCode >= 48 && event.keyCode <= 57) || event.keyCode == 46 || event.keyCode == 8 || (event.keyCode >= 96 && event.keyCode <= 105))) {
            event.preventDefault();
        }
    });
    
    $("#underground_quantity").keydown(function(event) {
        if (!((event.keyCode >= 48 && event.keyCode <= 57) || event.keyCode == 46 || event.keyCode == 8 || (event.keyCode >= 96 && event.keyCode <= 105))) {
            event.preventDefault();
        }
    });
    
    $("#nile_quantity").keydown(function(event) {
        if (!((event.keyCode >= 48 && event.keyCode <= 57) || event.keyCode == 46 || event.keyCode == 8 || (event.keyCode >= 96 && event.keyCode <= 105))) {
            event.preventDefault();
        }
    });
    
    
    // Ajax Code on pressing Enter Key
    
  $('#rep_code').keydown(function (event) {

    var x = event.which || event.keyCode;
    if (x == 13){
        
          var b_code1 = $('#rep_code').val();
			
			var ajax_URL = "query_ajax.php";
			var dataString = 'b_code=' + b_code1 ;
 
			//$('#Info').html('');
			//$('#ReadingInfo').html(hiReading_val);

			//debugger;
		if ( b_code1 != 0 ) {
               
				$('#q').html('<img src="img/loading.gif" width="70"  height="70" /><p class="text-info"> جاري استرجاع البيانات </p>');
				$.ajax({
					cache: false,
					type: "POST",
					dataType: "html",
					url: ajax_URL, 
					data: {
						b_code    : b_code1
        
					},
					error: function() {
						//debugger;
						$('#q').html('خطأ');
					},
					success: 
						function(result){ 
							//debugger;
                            
							//$("#q").html(result);
                            $('#rep_name').val(result);
					complete : 
						return true; 
					}
					
				});
		
        
            var build_code = $('#rep_code').val();
			var ajax_URL2 = "query2_ajax.php";
			var dataString = 'bcode=' + build_code;
 
			//$('#Info').html('');
			//$('#ReadingInfo').html(hiReading_val);

			//debugger;
	
               
				$('#q2').html('<img src="img/loading.gif" width="70"  height="70" /><p class="text-info"> جاري استرجاع البيانات </p>');
				$.ajax({
					cache: false,
					type: "POST",
					dataType: "html",
					url: ajax_URL2, 
					data: {
						bcode    : build_code
        
					},
					error: function() {
						//debugger;
						$('#q2').html('خطأ');
					},
					success: 
						function(result){ 
							//debugger;
                            
							//$("#q2").html(result);
                            $('#rep_id').val(result);
					complete : 
						return true; 
					}
					
				});
		}
        
    }
  });
    
    var Privileges3 = jQuery('#sample_taken');
        Privileges3.change(function () {
      if ($(this).val() == 2) {
       $('#no_sample').fadeOut();



    } else {
        $('#no_sample').fadeIn();
        
    }

  });
    

});