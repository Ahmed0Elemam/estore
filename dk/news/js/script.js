/*jslint browser: true*/
/*global $, jQuery, alert*/
$(function () {

    'use strict';

  $('#Send').click(function(){
		   
		   var title_val = $('#title').val();
			var date_val = $('#date').val();
			var content_val = $('#content').val();
			
            
			
			var ajax_URL = "ajax_send.php";
			var dataString = 'title=' + title_val + '&date=' + date_val + '&content=' + content_val;
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
						date : date_val,
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

    

});