/*jslint browser: true*/
/*global $, jQuery, alert, console, grecaptcha*/
$(function() {

    'use strict';
    // setting error status for Building Info Page
    var codeError           = true,
        nameError           = true,
        industryError       = true,
        addressError        = true,
        contract_typeError  = true,
        contract_dateError  = true,
        cityError           = true,
        account_typeError   = true,
        branchError         = true,
        accountError        = true,
        sourceError         = true, 
        mobileError         = true,
        activityError       = true,
        waste_typeError     = true,
        waste_locationError = true,
        license_typeError   = true;

// errors for Building Info Page
    $('#code').blur(function() {
        if (!$(this).val() || $(this).val() == 0) { // Show Error

            $(this).css('border', '1px solid #f00').parent().find('.custom-alert').fadeIn(200).end().find('.astrik').fadeIn(100);
            codeError = true;

        } else { // Hide Error
            $(this).css('border', '1px solid #080').parent().find('.custom-alert').fadeOut(200).end().find('.astrik').fadeOut(100);
            codeError = false;
        }

    });
    
    $('#name').blur(function() {

        if (!$(this).val()) { // Show Error

            $(this).css('border', '1px solid #f00').parent().find('.custom-alert').fadeIn(200).end().find('.astrik').fadeIn(100);
            nameError = true;

        } else { // Hide Error
            $(this).css('border', '1px solid #080').parent().find('.custom-alert').fadeOut(200).end().find('.astrik').fadeOut(100);
            nameError = false;
        }

    });
    
    $('#industry_name').blur(function() {
        if ($(this).val() == 0) { // Show Error
            $(this).css('border', '1px solid #f00').parent().find('.custom-alert').fadeIn(200).end().find('.astrik').fadeIn(100);
            industryError = true;
        } else {
            $(this).css('border', '1px solid #080').parent().find('.custom-alert').fadeOut(200).end().find('.astrik').fadeOut(100);
            industryError = false;
        }

    });
    
    $('#address').blur(function() {

        if (!$(this).val()) { // Show Error

            $(this).css('border', '1px solid #f00').parent().find('.custom-alert').fadeIn(200).end().find('.astrik').fadeIn(100);
            addressError = true;

        } else { // Hide Error
            $(this).css('border', '1px solid #080').parent().find('.custom-alert').fadeOut(200).end().find('.astrik').fadeOut(100);
            addressError = false;
        }

    });
    
    $('#city').blur(function() {
        if ($(this).val() == 0) { // Show Error
            $(this).css('border', '1px solid #f00').parent().find('.custom-alert').fadeIn(200).end().find('.astrik').fadeIn(100);
            cityError = true;
        } else {
            $(this).css('border', '1px solid #080').parent().find('.custom-alert').fadeOut(200).end().find('.astrik').fadeOut(100);
            cityError = false;
        }

    });

    $('#contract_type').blur(function() {
        if ($(this).val() == 0) { // Show Error
            $(this).css('border', '1px solid #f00').parent().find('.custom-alert').fadeIn(200).end().find('.astrik').fadeIn(100);
            contract_typeError = true;
        } else {
            $(this).css('border', '1px solid #080').parent().find('.custom-alert').fadeOut(200).end().find('.astrik').fadeOut(100);
            contract_typeError = false;
        }

    });

    $('#contract_date').blur(function() {
        if (!$(this).val()) { // Show Error
            $(this).css('border', '1px solid #f00').parent().find('.custom-alert').fadeIn(200).end().find('.astrik').fadeIn(100);
            contract_dateError = true;
        } else {
            $(this).css('border', '1px solid #080').parent().find('.custom-alert').fadeOut(200).end().find('.astrik').fadeOut(100);
            contract_dateError = false;
        }

    });
    
    $('#account_type').blur(function() {
        if ($(this).val() == 0) { // Show Error
            $(this).css('border', '1px solid #f00').parent().find('.custom-alert').fadeIn(200).end().find('.astrik').fadeIn(100);
            account_typeError = true;
        } else {
            $(this).css('border', '1px solid #080').parent().find('.custom-alert').fadeOut(200).end().find('.astrik').fadeOut(100);
            account_typeError = false;
        }
    });
    
    $('#branch').blur(function() {
        if (!$(this).val() || $(this).val() == 0) { // Show Error
            $(this).css('border', '1px solid #f00').parent().find('.custom-alert').fadeIn(200).end().find('.astrik').fadeIn(100);
            branchError = true;
        } else {
            $(this).css('border', '1px solid #080').parent().find('.custom-alert').fadeOut(200).end().find('.astrik').fadeOut(100);
            branchError = false;
        }
    });
    
    $('#account').blur(function() {
        if (!$(this).val() || $(this).val() == 0) { // Show Error
            $(this).css('border', '1px solid #f00').parent().find('.custom-alert').fadeIn(200).end().find('.astrik').fadeIn(100);
            accountError = true;
        } else {
            $(this).css('border', '1px solid #080').parent().find('.custom-alert').fadeOut(200).end().find('.astrik').fadeOut(100);
            accountError = false;
        }
    });
    
    $('#water_source').blur(function() {
        if ($(this).val() == 0) { // Show Error
            $(this).css('border', '1px solid #f00').parent().find('.custom-alert').fadeIn(200).end().find('.astrik').fadeIn(100);
            sourceError = true;
        } else {
            $(this).css('border', '1px solid #080').parent().find('.custom-alert').fadeOut(200).end().find('.astrik').fadeOut(100);
            sourceError = false;
        }
    });

    $('#mobile').blur(function() {
        if ($(this).val().length < 11 || $(this).val() == 0) { // Show Error
            $(this).css('border', '1px solid #f00').parent().find('.custom-alert').fadeIn(200).end().find('.astrik').fadeIn(100);

            mobileError = true;

        } else {

            $(this).css('border', '1px solid #080').parent().find('.custom-alert').fadeOut(200).end().find('.astrik').fadeOut(100);
            mobileError = false;
        }
    });
    
    $('#activity').blur(function() {
        if (!$(this).val()) { // Show Error
            $(this).css('border', '1px solid #f00').parent().find('.custom-alert').fadeIn(200).end().find('.astrik').fadeIn(100);
            activityError = true;
        } else {
            $(this).css('border', '1px solid #080').parent().find('.custom-alert').fadeOut(200).end().find('.astrik').fadeOut(100);
            activityError = false;
        }

    });
    
    $('#waste_type').blur(function() {
        if ($(this).val() == 0) { // Show Error
            $(this).css('border', '1px solid #f00').parent().find('.custom-alert').fadeIn(200).end().find('.astrik').fadeIn(100);
             waste_typeError = true;
        } else {
            $(this).css('border', '1px solid #080').parent().find('.custom-alert').fadeOut(200).end().find('.astrik').fadeOut(100);
             waste_typeError = false;
        }

    });
    
    $('#waste_location').blur(function() {
        if (!$(this).val()) { // Show Error
            $(this).css('border', '1px solid #f00').parent().find('.custom-alert').fadeIn(200).end().find('.astrik').fadeIn(100);
             waste_locationError = true;
        } else {
            $(this).css('border', '1px solid #080').parent().find('.custom-alert').fadeOut(200).end().find('.astrik').fadeOut(100);
             waste_locationError = false;
        }

    });
    
    $('#license_type').blur(function() {
        if ($(this).val() == 0) { // Show Error
            $(this).css('border', '1px solid #f00').parent().find('.custom-alert').fadeIn(200).end().find('.astrik').fadeIn(100);
             license_typeError = true;
        } else {
            $(this).css('border', '1px solid #080').parent().find('.custom-alert').fadeOut(200).end().find('.astrik').fadeOut(100);
             license_typeError = false;
        }

    });
    
     var Privileges2 = jQuery('#contract_type');
        Privileges2.change(function () {
      if ($(this).val() == 2) {
       $('#cdate').hide();

      contract_dateError = false;


    } else {
        $('#cdate').show();
        
    }

  });
    
    // Submit Form Validation
    $('#save').click(function(e) {
        if (codeError === true || nameError === true || industryError === true || addressError === true || contract_typeError === true || contract_dateError === true  || cityError === true || account_typeError === true || branchError === true || accountError === true || sourceError === true || mobileError === true  || activityError === true || waste_typeError === true || waste_locationError === true || license_typeError === true) {
            e.preventDefault();
            $('#code, #name, #industry_name, #address, #contract_type, #contract_date, #city, #account_type, #branch, #account, #water_source, #mobile, #activity, #waste_type, #waste_location, #license_type').blur();
        }

    });




    $("#code").keydown(function(event) {
        if (!((event.keyCode >= 48 && event.keyCode <= 57) || event.keyCode == 46 || event.keyCode == 8 || (event.keyCode >= 96 && event.keyCode <= 105))) {
            event.preventDefault();
        }
    });
    $("#mobile").keydown(function(event) {
        if (!((event.keyCode >= 48 && event.keyCode <= 57) || event.keyCode == 46 || event.keyCode == 8 || (event.keyCode >= 96 && event.keyCode <= 105))) {
            event.preventDefault();
        }
    });

    
    $("#fax").keydown(function(event) {
        if (!((event.keyCode >= 48 && event.keyCode <= 57) || event.keyCode == 46 || event.keyCode == 8 || (event.keyCode >= 96 && event.keyCode <= 105))) {
            event.preventDefault();
        }
    });
 
    $("#landline").keydown(function(event) {
        if (!((event.keyCode >= 48 && event.keyCode <= 57) || event.keyCode == 46 || event.keyCode == 8 || (event.keyCode >= 96 && event.keyCode <= 105))) {
            event.preventDefault();
        }
    });
    
     $("#branch").keydown(function(event) {
        if (!((event.keyCode >= 48 && event.keyCode <= 57) || event.keyCode == 46 || event.keyCode == 8 || (event.keyCode >= 96 && event.keyCode <= 105))) {
            event.preventDefault();
        }
    });
    
     $("#account").keydown(function(event) {
        if (!((event.keyCode >= 48 && event.keyCode <= 57) || event.keyCode == 46 || event.keyCode == 8 || (event.keyCode >= 96 && event.keyCode <= 105))) {
            event.preventDefault();
        }
    });
    
     $("#owner_mobile").keydown(function(event) {
        if (!((event.keyCode >= 48 && event.keyCode <= 57) || event.keyCode == 46 || event.keyCode == 8 || (event.keyCode >= 96 && event.keyCode <= 105))) {
            event.preventDefault();
        }
    });
    
     $("#manager_mobile").keydown(function(event) {
        if (!((event.keyCode >= 48 && event.keyCode <= 57) || event.keyCode == 46 || event.keyCode == 8 || (event.keyCode >= 96 && event.keyCode <= 105))) {
            event.preventDefault();
        }
    });
    
     $("#shifts").keydown(function(event) {
        if (!((event.keyCode >= 48 && event.keyCode <= 57) || event.keyCode == 46 || event.keyCode == 8 || (event.keyCode >= 96 && event.keyCode <= 105))) {
            event.preventDefault();
        }
    });
    
     $("#work_days").keydown(function(event) {
        if (!((event.keyCode >= 48 && event.keyCode <= 57) || event.keyCode == 46 || event.keyCode == 8 || (event.keyCode >= 96 && event.keyCode <= 105))) {
            event.preventDefault();
        }
    });
    
     $("#emp_num").keydown(function(event) {
        if (!((event.keyCode >= 48 && event.keyCode <= 57) || event.keyCode == 46 || event.keyCode == 8 || (event.keyCode >= 96 && event.keyCode <= 105))) {
            event.preventDefault();
        }
    });
    
     $("#m2").keydown(function(event) {
        if (!((event.keyCode >= 48 && event.keyCode <= 57) || event.keyCode == 46 || event.keyCode == 8 || (event.keyCode >= 96 && event.keyCode <= 105))) {
            event.preventDefault();
        }
    });
    
   

});