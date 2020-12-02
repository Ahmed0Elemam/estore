/*jslint browser: true*/
/*global $, jQuery, alert*/
$(function () {

    'use strict';
    var nameErrors = true,
        nidErrors = true,
        areaErrors = true,
        bErrors = true,
        gErrors = true,
        accErrors = true,
        readErrors = true,
        mobErrors = true,
        district_val;

  $('#ReadingSend').click(function(){
		   district_val = $('#area').val();
		   var branch_val = $('#branch').val();
			var group_val = $('#group').val();
			var name_val = $('#name').val();
			var account_val = $('#account').val();
			var current_read = $('#current_read').val();
			var hiReading_val  = $('#hiReading').val();
			var loReading_val  = $('#loReading').val();
			var nid_val  = $('#nid').val();
			var mob_val  = $('#mob').val();
			var land_val  = $('#land').val();
    
			
			var ajax_URL = "ajax_send_read.php";
			var dataString = 'district_num=' + district_val + '&branch_num=' + branch_val + '&group_num=' + group_val + '&account_num=' + account_val + '&current_read=' + current_read + '&nid_val=' + nid_val + '&mob_val' + mob_val + '&land_val' + land_val + '&search=' + name_val;
			$('#ReadingInfo').html('');
			//$('#ReadingInfo').html(hiReading_val);
			
			//debugger;
			if ( district_val != 0 && branch_val != '' && group_val != '' && account_val != '' && current_read != '' && nid_val != '' && mob_val !='' && name_val != '' ) {
				$('#ReadingInfo').html('<img src="img/loading.gif" width="70"  height="70" /><p class="text-info"> جاري تحميل البيانات </p>');
				$.ajax({
					cache: false,
					type: "POST",
					dataType: "html",
					url: ajax_URL, 
					data: {
						district_num : district_val,
						branch_num : branch_val,
						group_num : group_val,
						account_num : account_val,
						current_read : current_read,
						hiReading_chk : hiReading_val,
						loReading_chk : loReading_val,
                        nid_num : nid_val,
                        mob_num : mob_val,
                        land_num : land_val,
                        search: name_val
                    		
					},
					error: function() {
						//debugger;
						$('#ReadingInfo').html(' خطأ في تحميل البيانات ');
					},
					success: 
						function(result){ 
							//debugger;
							$("#ReadingInfo").html(result);
					complete : 
						return true; 
					}
					
				})
		}
			
	  });

    $('.nid').blur(function () {

    if (!$(this).val() || $(this).val().length < 14 || $(this).val() == 0) { // Show Error

      $(this).css('border', '1px solid #f00').parent().find('.custom-alert').fadeIn(200).end().find('.astrik').fadeIn(100);
      nidErrors = true;

    } else { // Hide Error
      $(this).css('border', '1px solid #080').parent().find('.custom-alert').fadeOut(200).end().find('.astrik').fadeOut(100);
      nidErrors = false;
    }

  });
      $('#name').blur(function () {

    if (!$(this).val()) { // Show Error

      $(this).css('border', '1px solid #f00').parent().find('.custom-alert').fadeIn(200).end().find('.astrik').fadeIn(100);
      accErrors = true;

    } else { // Hide Error
      $(this).css('border', '1px solid #080').parent().find('.custom-alert').fadeOut(200).end().find('.astrik').fadeOut(100);
      accErrors = false;
    }

  });
    $('#mob').blur(function () {

    if (!$(this).val() || $(this).val().length < 11 || $(this).val() == 0) { // Show Error

      $(this).css('border', '1px solid #f00').parent().find('.custom-alert').fadeIn(200).end().find('.astrik').fadeIn(100);
      mobErrors = true;

    } else { // Hide Error
      $(this).css('border', '1px solid #080').parent().find('.custom-alert').fadeOut(200).end().find('.astrik').fadeOut(100);
      mobErrors = false;
    }

  });

  $('#area').blur(function () {

    if ($(this).val() == 0) { // Show Error

      $(this).css('border', '1px solid #f00').parent().find('.custom-alert').fadeIn(200).end().find('.astrik').fadeIn(100);
      areaErrors = true;

    } else { // Hide Error
      $(this).css('border', '1px solid #080').parent().find('.custom-alert').fadeOut(200).end().find('.astrik').fadeOut(100);
      areaErrors = false;
    }

  });
  $('#branch').blur(function () {

    if (!$(this).val() || $(this).val() == 0) { // Show Error

      $(this).css('border', '1px solid #f00').parent().find('.custom-alert').fadeIn(200).end().find('.astrik').fadeIn(100);
      bErrors = true;

    } else { // Hide Error
      $(this).css('border', '1px solid #080').parent().find('.custom-alert').fadeOut(200).end().find('.astrik').fadeOut(100);
      bErrors = false;
    }

  });
  $('#group').blur(function () {

    if (!$(this).val() || $(this).val() == 0) { // Show Error

      $(this).css('border', '1px solid #f00').parent().find('.custom-alert').fadeIn(200).end().find('.astrik').fadeIn(100);
      gErrors = true;

    } else { // Hide Error
      $(this).css('border', '1px solid #080').parent().find('.custom-alert').fadeOut(200).end().find('.astrik').fadeOut(100);
      gErrors = false;
    }

  });
  $('#account').blur(function () {

    if (!$(this).val() || $(this).val() == 0) { // Show Error

      $(this).css('border', '1px solid #f00').parent().find('.custom-alert').fadeIn(200).end().find('.astrik').fadeIn(100);
      accErrors = true;

    } else { // Hide Error
      $(this).css('border', '1px solid #080').parent().find('.custom-alert').fadeOut(200).end().find('.astrik').fadeOut(100);
      accErrors = false;
    }

  });
  $('#current_read').blur(function () {

    if (!$(this).val() || $(this).val() == 0) { // Show Error

      $(this).css('border', '1px solid #f00').parent().find('.custom-alert').fadeIn(200).end().find('.astrik').fadeIn(100);
      readErrors = true;

    } else { // Hide Error
      $(this).css('border', '1px solid #080').parent().find('.custom-alert').fadeOut(200).end().find('.astrik').fadeOut(100);
      readErrors = false;
    }

  });
  $('#ReadingSend').click(function (e) {
    if (nameErrors === true || nidErrors === true || areaErrors === true || bErrors === true || gErrors === true || accErrors === true || readErrors === true) {
      e.preventDefault();
      $('#area, #name, .nid, #branch, #group, #account, #current_read, #mob').blur();
    }

  });

  $("#nid").keydown(function (event) {
    if (!((event.keyCode >= 48 && event.keyCode <= 57) || event.keyCode == 46 || event.keyCode == 8 || (event.keyCode >= 96 && event.keyCode <= 105))) {
      event.preventDefault();
    }
  });
    $("#mob").keydown(function (event) {
    if (!((event.keyCode >= 48 && event.keyCode <= 57) || event.keyCode == 46 || event.keyCode == 8 || (event.keyCode >= 96 && event.keyCode <= 105))) {
      event.preventDefault();
    }
  });
    $("#land").keydown(function (event) {
    if (!((event.keyCode >= 48 && event.keyCode <= 57) || event.keyCode == 46 || event.keyCode == 8 || (event.keyCode >= 96 && event.keyCode <= 105))) {
      event.preventDefault();
    }
  });
  $("#account").keydown(function (event) {
    if (!((event.keyCode >= 48 && event.keyCode <= 57) || event.keyCode == 46 || event.keyCode == 8 || (event.keyCode >= 96 && event.keyCode <= 105))) {
      event.preventDefault();
    }
  });
  $("#group").keydown(function (event) {
    if (!((event.keyCode >= 48 && event.keyCode <= 57) || event.keyCode == 46 || event.keyCode == 8 || (event.keyCode >= 96 && event.keyCode <= 105))) {
      event.preventDefault();
    }
  });
  $("#branch").keydown(function (event) {
    if (!((event.keyCode >= 48 && event.keyCode <= 57) || event.keyCode == 46 || event.keyCode == 8 || (event.keyCode >= 96 && event.keyCode <= 105))) {
      event.preventDefault();
    }
  });
  $("#current_read").keydown(function (event) {
    if (!((event.keyCode >= 48 && event.keyCode <= 57) || event.keyCode == 46 || event.keyCode == 8 || (event.keyCode >= 96 && event.keyCode <= 105))) {
      event.preventDefault();
    }
  });
 
});