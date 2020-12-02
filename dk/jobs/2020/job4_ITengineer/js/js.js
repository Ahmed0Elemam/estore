/*jslint browser: true*/
/*global $, jQuery, alert, console, grecaptcha*/
$(function () {
  
    'use strict';
  // setting error status
    var nameErrors = true, nidErrors1 = true, nidErrors2 = true, mobErrors = true,  dateErrors = true, dateErrors3 = true, militaryErrors = true, maritalErrors = true, villageErrors = true, cityErrors = true, gradeErrors = true, driverErrors = true;
  
  
  
  
    $('.name').blur(function () {
        if ($(this).val().length < 10) { // Show Error

            $(this).css('border', '1px solid #f00').parent().find('.custom-alert').fadeIn(200).end().find('.astrik').fadeIn(100);
            nameErrors = true;
      
        } else {   // Hide Error
            $(this).css('border', '1px solid #080').parent().find('.custom-alert').fadeOut(200).end().find('.astrik').fadeOut(100);
            nameErrors = false;
        }

    });
    $('.nid').blur(function () {

        if ($(this).val().length < 14) { // Show Error

            $(this).css('border', '1px solid #f00').parent().find('.custom-alert').fadeIn(200).end().find('.astrik').fadeIn(100);
            nidErrors1 = true;
      
        } else {   // Hide Error
            $(this).css('border', '1px solid #080').parent().find('.custom-alert').fadeOut(200).end().find('.astrik').fadeOut(100);
            nidErrors1 = false;
        }

    });
    $('.nid').blur(function () {
        var birthN = $('.nid').val().substring(1, 3), birthyear = $('#configPicker').val().substring(2, 4);
        if (birthN !== birthyear) { // Show Error

            $(this).css('border', '1px solid #f00').parent().find('.custom-alert3').fadeIn(200).end().find('.astrik').fadeIn(100);
            nidErrors2 = true;
      
        } else {   // Hide Error
            $(this).css('border', '1px solid #080').parent().find('.custom-alert3').fadeOut(200).end().find('.astrik').fadeOut(100);
            nidErrors2 = false;
        }

    });
    $('#configPicker').blur(function () {
        var birthN = $('.nid').val().substring(1, 3), birthyear = $('#configPicker').val().substring(2, 4);
        if (birthN !== birthyear) { // Show Error

            $(this).css('border', '1px solid #f00').parent().find('.custom-alert3').fadeIn(200).end().find('.astrik').fadeIn(100);
            dateErrors3 = true;
      
        } else {   // Hide Error
            $(this).css('border', '1px solid #080').parent().find('.custom-alert3').fadeOut(200).end().find('.astrik').fadeOut(100);
            dateErrors3 = false;
        }

    });
  

    $('#configPicker').blur(function () {
        if (!$(this).val()) {// Show Error
            $(this).css('border', '1px solid #f00').parent().find('.custom-alert').fadeIn(200).end().find('.astrik').fadeIn(100);
            dateErrors = true;
        } else {
            $(this).css('border', '1px solid #080').parent().find('.custom-alert').fadeOut(200).end().find('.astrik').fadeOut(100);
            dateErrors = false;
        }


    });
 
    $('#military').blur(function () {
        if ($(this).val() == 0) {// Show Error
            $(this).css('border', '1px solid #f00').parent().find('.custom-alert').fadeIn(200).end().find('.astrik').fadeIn(100);
            militaryErrors = true;
        } else {
            $(this).css('border', '1px solid #080').parent().find('.custom-alert').fadeOut(200).end().find('.astrik').fadeOut(100);
            militaryErrors = false;
        }


    });
    $('#marital').blur(function () {
        if ($(this).val() == 0) {// Show Error
            $(this).css('border', '1px solid #f00').parent().find('.custom-alert').fadeIn(200).end().find('.astrik').fadeIn(100);
            maritalErrors = true;
        } else {
            $(this).css('border', '1px solid #080').parent().find('.custom-alert').fadeOut(200).end().find('.astrik').fadeOut(100);
            maritalErrors = false;
        }
    });
    $('#village').blur(function () {
        if (!$(this).val()) {// Show Error
            $(this).css('border', '1px solid #f00').parent().find('.custom-alert').fadeIn(200).end().find('.astrik').fadeIn(100);
            villageErrors = true;
        } else {
            $(this).css('border', '1px solid #080').parent().find('.custom-alert').fadeOut(200).end().find('.astrik').fadeOut(100);
            villageErrors = false;
        }

    });
    $('#city').blur(function () {
        if ($(this).val() == 0) {// Show Error
            $(this).css('border', '1px solid #f00').parent().find('.custom-alert').fadeIn(200).end().find('.astrik').fadeIn(100);
            cityErrors = true;
        } else {
            $(this).css('border', '1px solid #080').parent().find('.custom-alert').fadeOut(200).end().find('.astrik').fadeOut(100);
            cityErrors = false;
        }

    });
    
    $('#mobile').blur(function () {
        if ($(this).val().length < 11) {// Show Error
            $(this).css('border', '1px solid #f00').parent().find('.custom-alert').fadeIn(200).end().find('.astrik').fadeIn(100);

            mobErrors = true;
      
        } else {
      
            $(this).css('border', '1px solid #080').parent().find('.custom-alert').fadeOut(200).end().find('.astrik').fadeOut(100);
            mobErrors = false;
        }


    });
    $('#grade').blur(function () {
        if ($(this).val() == 0) {// Show Error
            $(this).css('border', '1px solid #f00').parent().find('.custom-alert').fadeIn(200).end().find('.astrik').fadeIn(100);
            gradeErrors = true;
        } else {
            $(this).css('border', '1px solid #080').parent().find('.custom-alert').fadeOut(200).end().find('.astrik').fadeOut(100);
            gradeErrors = false;
        }

    });
    $('#driver').blur(function () {
        if ($(this).val() == 0) {// Show Error
            $(this).css('border', '1px solid #f00').parent().find('.custom-alert').fadeIn(200).end().find('.astrik').fadeIn(100);
            driverErrors = true;
        } else {
            $(this).css('border', '1px solid #080').parent().find('.custom-alert').fadeOut(200).end().find('.astrik').fadeOut(100);
            driverErrors = false;
        }

    });
    
// Submit Form Validation
  
    $('.register-form').submit(function (e) {
        if (nameErrors === true || nidErrors1 === true  || nidErrors2 === true || dateErrors === true || dateErrors3 === true || mobErrors === true || militaryErrors === true || cityErrors === true || maritalErrors === true || villageErrors === true || gradeErrors === true || driverErrors === true) {
            e.preventDefault();
            $('.name, .nid, #configPicker, #military, #city, .mobile, #marital, #village, #grade, #driver').blur();
        }

    });
  
    $('#configPicker').datepick({showTrigger: '#calImg'});
 $(".nid").keydown(function (event) {
        if (!((event.keyCode >= 48 && event.keyCode <= 57) || event.keyCode == 46 || event.keyCode == 8 || (event.keyCode >= 96 && event.keyCode <= 105)))
            event.preventDefault();
    });
    $("#mobile").keydown(function (event) {
        if (!((event.keyCode >= 48 && event.keyCode <= 57) || event.keyCode == 46 || event.keyCode == 8 || (event.keyCode >= 96 && event.keyCode <= 105)))
            event.preventDefault();
    });
    $("#landline").keydown(function (event) {
        if (!((event.keyCode >= 48 && event.keyCode <= 57) || event.keyCode == 46 || event.keyCode == 8 || (event.keyCode >= 96 && event.keyCode <= 105)))
            event.preventDefault();
    });
});