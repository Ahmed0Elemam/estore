/*jslint browser: true*/
/*global $, jQuery, alert*/
$(function () {

    'use strict';
    var titleError = true,
        contentError = true;

  $('#Send').click(function(){
		   
		   var title_val = $('#title').val();
			var date_val = $('#date2').val();
			var content_val = $('#content').val();
			
            
			
			var ajax_URL = "ajax_send.php";
			var dataString = 'title=' + title_val + '&date2=' + date_val + '&content=' + content_val;
			$('#info').html('');
			//$('#ReadingInfo').html(hiReading_val);
			
			//debugger;
			if ( title_val !=  '' && date_val != '' && content_val != '' ) {
				$('#info').html('<img src="img/loading.gif" width="70"  height="70" /><p class="text-info"> جاري تحميل البيانات... </p>');
				$.ajax({
					cache: false,
					type: "POST",
					dataType: "html",
					url: ajax_URL, 
					data: {
						title : title_val,
						date2 : date_val,
						content : content_val,
						
					},
					error: function() {
						//debugger;
						$('#info').html(' خطأ في تحميل البيانات ');
					},
					success: 
						function(result){ 
							//debugger;
							$("#info").html(result);
					complete : 
						return true; 
					}
					
				})
		}
			
	  });
 $('#title').blur(function () {

    if (!$(this).val()) { // Show Error

      $(this).css('border', '1px solid #f00').parent().find('.custom-alert').fadeIn(200).end().find('.astrik').fadeIn(100);
      titleError = true;

    } else { // Hide Error
      $(this).css('border', '1px solid #080').parent().find('.custom-alert').fadeOut(200).end().find('.astrik').fadeOut(100);
      titleError = false;
    }

  });
     $('#content').blur(function () {

    if (!$(this).val()) { // Show Error

      $(this).css('border', '1px solid #f00').parent().find('.custom-alert').fadeIn(200).end().find('.astrik').fadeIn(100);
      contentError = true;

    } else { // Hide Error
      $(this).css('border', '1px solid #080').parent().find('.custom-alert').fadeOut(200).end().find('.astrik').fadeOut(100);
      contentError = false;
    }

  });
      $('#Send').click(function (e) {
    if (titleError === true || contentError === true ) {
      e.preventDefault();
      $('#title, #content').blur();
    }

  });
    

});