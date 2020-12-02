/*jslint browser: true*/
/*global $, jQuery, alert, console, grecaptcha*/
$(function() {

    'use strict';
    // setting error status for Samples Info Page
    var sample_codeError    = true,
        sample_dateError    = true,
        addonsError         = true;


    
    ///////////////////////////////////////////////////////////////////////////////////////////////
    ////////////////errors for Samples Info Page
    
    $('#sample_code').blur(function() {
        if (!$(this).val() || $(this).val() == 0) { // Show Error

            $(this).css('border', '1px solid #f00').parent().find('.custom-alert').fadeIn(200).end().find('.astrik').fadeIn(100);
            sample_codeError = true;

        } else { // Hide Error
            $(this).css('border', '1px solid #080').parent().find('.custom-alert').fadeOut(200).end().find('.astrik').fadeOut(100);
            sample_codeError = false;
        }

    });


    
    $('#sample_delivery_date').blur(function() {
        if (!$(this).val()) { // Show Error
            $(this).css('border', '1px solid #f00').parent().find('.custom-alert').fadeIn(200).end().find('.astrik').fadeIn(100);
            sample_dateError = true;
        } else {
            $(this).css('border', '1px solid #080').parent().find('.custom-alert').fadeOut(200).end().find('.astrik').fadeOut(100);
            sample_dateError = false;
        }

    });
    
    
    

 // Submit Form Validation
$('#view_info').click(function(e) {
        if (sample_codeError === true || sample_dateError === true) {
            e.preventDefault();
            $('#sample_code, #sample_delivery_date').blur();
        }

    });

$('input[type="checkbox"]:checked').each(function() {
    var price1 = eval($('#analysis_cost1').val()) + eval($(this).data('value'));
    $('#analysis_cost1').val(price1);
});
    
    var cost = $('#analysis_cost1').val(); 
    var price2 = eval(cost) * 0.14;
    var price = eval(cost) + eval(price2);
    $('#analysis_cost2').val(price2);
    $('#analysis_cost_all').val(price);



$('input[type="checkbox"]:checked').change(function() {
    if($(this).is(':checked')){
        
        var price = eval($('#analysis_cost1').val()) + eval($(this).data('value'));
        var price1 = eval(price) * 0.14;
        var price2 = eval(price) + eval(price1);
        
        $('#analysis_cost1').val(price);
        $('#analysis_cost2').val(price1);
        $('#analysis_cost_all').val(price2);



    } else {
        
        var price = eval($('#analysis_cost1').val()) - eval($(this).data('value'));
        var price1 = eval(price) * 0.14;
        var price2 = eval(price) + eval(price1);
        
        $('#analysis_cost1').val(price);
        $('#analysis_cost2').val(price1);
        $('#analysis_cost_all').val(price2);


    }
});
    
$('#addons').change(function() {
    
    var cost1 = eval($(this).val());
    var cost2 = eval(cost1) * 0.2;
    var cost3 = eval(cost1) + eval(cost2);
    var cost4 = eval(cost3) * 0.14;
    var addons_cost = eval(cost3) + eval(cost4);
    
    $('#addons_cost').val(addons_cost);
    var all_cost =  eval($('#analysis_cost_all').val()) + eval(addons_cost);
    $('#all_cost').val(all_cost);

});
    
       $('#addons').blur(function() {
        if ($(this).val() == 0) { // Show Error

            $(this).css('border', '1px solid #f00').parent().find('.custom-alert').fadeIn(200).end().find('.astrik').fadeIn(100);
            addonsError = true;

        } else { // Hide Error
            $(this).css('border', '1px solid #080').parent().find('.custom-alert').fadeOut(200).end().find('.astrik').fadeOut(100);
            addonsError = false;
        }

    });
    
 // Submit Form Validation
$('#print').click(function(e) {
        if (addonsError === true) {
            e.preventDefault();
            $('#addons').blur();
        }

    });
    


});