/*jslint browser: true*/
/*global $, jQuery, alert, console*/
$(function () {

    'use strict';
    // setting error status for Samples Info Page
    var build_codeError    = true,
        waterqError        = true;


    
    ///////////////////////////////////////////////////////////////////////////////////////////////
    ////////////////errors for Samples Info Page
    
    $('#b_code').blur(function() {
        if (!$(this).val() || $(this).val() == 0) { // Show Error

            $(this).css('border', '1px solid #f00').parent().find('.custom-alert').fadeIn(200).end().find('.astrik').fadeIn(100);
            build_codeError = true;

        } else { // Hide Error
            $(this).css('border', '1px solid #080').parent().find('.custom-alert').fadeOut(200).end().find('.astrik').fadeOut(100);
            build_codeError = false;
        }

    });
    
    $('#waterq').blur(function() {
        if (!$(this).val() || $(this).val() == 0) { // Show Error

            $(this).css('border', '1px solid #f00').parent().find('.custom-alert').fadeIn(200).end().find('.astrik').fadeIn(100);
            waterqError = true;

        } else { // Hide Error
            $(this).css('border', '1px solid #080').parent().find('.custom-alert').fadeOut(200).end().find('.astrik').fadeOut(100);
            waterqError = false;
        }

    });


 // Submit Form Validation
$('#print1-btn, #print2-btn').click(function(e) {
        if (build_codeError === true || waterqError === true ) {
            e.preventDefault();
            $('#b_code, #waterq').blur();
        }

    });
    
    
    // Ajax Code on pressing Enter Key
    
  $('#b_code').keydown(function (event) {

    var x = event.which || event.keyCode;
    if (x == 13){
        
          var b_code1 = $('#b_code').val();
			
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
                            $('#b_name').val(result);
					complete : 
						return true; 
					}
					
				});
        }
    }

  });
    
    $('#print1-btn').click(function() {
        $('#a3baa_form').attr('action', 'print1.php');
        
    });
      $('#print2-btn').click(function() {
        $('#a3baa_form').attr('action', 'print2.php');
        
    });
    
    
                       });