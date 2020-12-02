/*jslint browser: true*/
/*global $, jQuery, alert*/
$(function () {

  'use strict';
  var areaErrors = true,
    bErrors = true,
    gErrors = true,
    accErrors = true,
    nameErrors = true,
    district_val;

  $("#view").click(function () {
    district_val = $('#area').val();
  var branch_val = $('#branch').val(),
      group_val = $('#group').val(),
      name_val = $('#name').val(),
      account_val = $('#account').val(),
      ajax_URL = "ajax_read.php",
      dataString = 'district_number=' + district_val + '&branch_no=' + branch_val + '&group_no=' + group_val + '&account_no=' + account_val + '&search=' + name_val;
    
    $('#CustomerInfo').html('');

    //debugger;
 if (district_val != 0 && branch_val != '' && group_val != '' && account_val != ''  && name_val != '') {
     $('#CustomerInfo').html('<br/><img src="graph/loading.gif" width="70"  height="70" /><p class="text-info"> جاري تحميل البيانات </p>');
      $.ajax({
        cache: false,
        type: "POST",
        dataType: "html",
        url: ajax_URL,
        data: {
          district_number: district_val,
          search: name_val,
          branch_no: branch_val,
          group_no: group_val,
          account_no: account_val

        },
        error: function () {
          //debugger;
            
          $('#CustomerInfo').html('خطأ في تحميل البيانات');
        },
        success: function (result) {
          //debugger;
        
          $("#CustomerInfo").html(result);
          complete:
            return true;
        }

      });
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
   $('#name').blur(function () {

    if (!$(this).val()) { // Show Error

      $(this).css('border', '1px solid #f00').parent().find('.custom-alert').fadeIn(200).end().find('.astrik').fadeIn(100);
      nameErrors = true;

    } else { // Hide Error
      $(this).css('border', '1px solid #080').parent().find('.custom-alert').fadeOut(200).end().find('.astrik').fadeOut(100);
      nameErrors = false;
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
  $('#view').click(function (e) {
    if (nameErrors === true  || areaErrors === true || bErrors === true || gErrors === true || accErrors === true) {
      e.preventDefault();
      $('#area, #name, #branch, #group, #account').blur();
    }
    });

});