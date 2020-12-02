/*jslint browser: true*/
/*global $, jQuery, alert, console*/
$(function () {

    'use strict';
    // setting error status for  Page
    var area1Error       = true,
        name1Error       = true,
        address1Error    = true,
        m2Error          = true,
        area2Error       = true,
        name2Error       = true,
        address2Error    = true,
        building1Error   = true,
        building2Error   = true;


    
    ///////////////////////////////////////////////////////////////////////////////////////////////
    ////////////////errors for Trkhes Page
    
    $('#area1').blur(function() {
        if (!$(this).val()) { // Show Error
            $(this).css('border', '1px solid #f00').parent().find('.custom-alert').fadeIn(200).end().find('.astrik').fadeIn(100);
            area1Error = true;

        } else { // Hide Error
            $(this).css('border', '1px solid #080').parent().find('.custom-alert').fadeOut(200).end().find('.astrik').fadeOut(100);
            area1Error = false;
        }

    });
    
    $('#area2').blur(function() {
        if (!$(this).val()) { // Show Error

            $(this).css('border', '1px solid #f00').parent().find('.custom-alert').fadeIn(200).end().find('.astrik').fadeIn(100);
            area2Error = true;

        } else { // Hide Error
            $(this).css('border', '1px solid #080').parent().find('.custom-alert').fadeOut(200).end().find('.astrik').fadeOut(100);
            area2Error = false;
        }

    });
    
    $('#name1').blur(function() {
        if (!$(this).val()) { // Show Error

            $(this).css('border', '1px solid #f00').parent().find('.custom-alert').fadeIn(200).end().find('.astrik').fadeIn(100);
            name1Error = true;

        } else { // Hide Error
            $(this).css('border', '1px solid #080').parent().find('.custom-alert').fadeOut(200).end().find('.astrik').fadeOut(100);
            name1Error = false;
        }

    });
    
    $('#name2').blur(function() {
        if (!$(this).val()) { // Show Error

            $(this).css('border', '1px solid #f00').parent().find('.custom-alert').fadeIn(200).end().find('.astrik').fadeIn(100);
            name2Error = true;

        } else { // Hide Error
            $(this).css('border', '1px solid #080').parent().find('.custom-alert').fadeOut(200).end().find('.astrik').fadeOut(100);
            name2Error = false;
        }

    });
    
        $('#address1').blur(function() {
        if (!$(this).val()) { // Show Error

            $(this).css('border', '1px solid #f00').parent().find('.custom-alert').fadeIn(200).end().find('.astrik').fadeIn(100);
            address1Error = true;

        } else { // Hide Error
            $(this).css('border', '1px solid #080').parent().find('.custom-alert').fadeOut(200).end().find('.astrik').fadeOut(100);
            address1Error = false;
        }

    });
    
    $('#address2').blur(function() {
        if (!$(this).val()) { // Show Error

            $(this).css('border', '1px solid #f00').parent().find('.custom-alert').fadeIn(200).end().find('.astrik').fadeIn(100);
            address2Error = true;

        } else { // Hide Error
            $(this).css('border', '1px solid #080').parent().find('.custom-alert').fadeOut(200).end().find('.astrik').fadeOut(100);
            address2Error = false;
        }

    });

    
       $('#m2').blur(function() {
        if (!$(this).val()) { // Show Error

            $(this).css('border', '1px solid #f00').parent().find('.custom-alert').fadeIn(200).end().find('.astrik').fadeIn(100);
            m2Error = true;

        } else { // Hide Error
            $(this).css('border', '1px solid #080').parent().find('.custom-alert').fadeOut(200).end().find('.astrik').fadeOut(100);
            m2Error = false;
        }

    });
    
      $('#building1').blur(function() {
        if (!$(this).val()) { // Show Error

            $(this).css('border', '1px solid #f00').parent().find('.custom-alert').fadeIn(200).end().find('.astrik').fadeIn(100);
            building1Error = true;

        } else { // Hide Error
            $(this).css('border', '1px solid #080').parent().find('.custom-alert').fadeOut(200).end().find('.astrik').fadeOut(100);
            building1Error = false;
        }

    });
    
      $('#building2').blur(function() {
        if (!$(this).val()) { // Show Error

            $(this).css('border', '1px solid #f00').parent().find('.custom-alert').fadeIn(200).end().find('.astrik').fadeIn(100);
            building2Error = true;

        } else { // Hide Error
            $(this).css('border', '1px solid #080').parent().find('.custom-alert').fadeOut(200).end().find('.astrik').fadeOut(100);
            building2Error = false;
        }

    });
    


 // Submit t1 Form Validation
$('#btn_t1').click(function(e) {
        if (area1Error === true || name1Error === true || address1Error === true || m2Error === true ) {
            e.preventDefault();
            $('#name1, #address1, #area1, #m2, #building1').blur();
        }

    });
    
 // Submit t1 Form Validation
$('#btn_t2').click(function(e) {
        if (area2Error === true || name2Error === true || address2Error === true || buildingError === true ) {
            e.preventDefault();
            $('#name2, #address2, #area2, #building2').blur();
        }

    });
    
 
    
    
});