/*jslint browser: true*/
/*global $, jQuery, alert, console, grecaptcha*/
$(function () {
  
    'use strict';
  // setting error status
    var nameErrors = true, nidErrors1 = true, nidErrors2 = true, mobErrors = true,  dateErrors1 = true, dateErrors2 = true, militaryErrors = true, maritalErrors = true, villageErrors = true, cityErrors = true, gradeErrors = true, studyErrors = true, gyErrors = true, gpErrors = true, nkyErrors = true, nkidErrors = true, compErrors = true;
  
  
  
  
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
        if (birthN != birthyear) { // Show Error

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
            dateErrors1 = true;
      
        } else {   // Hide Error
            $(this).css('border', '1px solid #080').parent().find('.custom-alert3').fadeOut(200).end().find('.astrik').fadeOut(100);
            dateErrors1 = false;
        }

    });
  

    $('#configPicker').blur(function () {
        if (!$(this).val()) {// Show Error
            $(this).css('border', '1px solid #f00').parent().find('.custom-alert').fadeIn(200).end().find('.astrik').fadeIn(100);
            dateErrors2 = true;
        } else {
            $(this).css('border', '1px solid #080').parent().find('.custom-alert').fadeOut(200).end().find('.astrik').fadeOut(100);
            dateErrors2 = false;
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
    $('#study').blur(function () {
        if ($(this).val() == 0) {// Show Error
            $(this).css('border', '1px solid #f00').parent().find('.custom-alert').fadeIn(200).end().find('.astrik').fadeIn(100);
            studyErrors = true;
        } else {
            $(this).css('border', '1px solid #080').parent().find('.custom-alert').fadeOut(200).end().find('.astrik').fadeOut(100);
            studyErrors = false;
        }

    });
    $('#grade_year').blur(function () {
        if (!$(this).val()) {// Show Error
            $(this).css('border', '1px solid #f00').parent().find('.custom-alert').fadeIn(200).end().find('.astrik').fadeIn(100);
            gyErrors = true;
        } else {
            $(this).css('border', '1px solid #080').parent().find('.custom-alert').fadeOut(200).end().find('.astrik').fadeOut(100);
            gyErrors = false;
        }
    });
    $('#grade_percent').blur(function () {
        if (!$(this).val()) {// Show Error
            $(this).css('border', '1px solid #f00').parent().find('.custom-alert').fadeIn(200).end().find('.astrik').fadeIn(100);
            gpErrors = true;
        } else {
            $(this).css('border', '1px solid #080').parent().find('.custom-alert').fadeOut(200).end().find('.astrik').fadeOut(100);
            gpErrors = false;
        }
    });

    $('#nekaba_year').blur(function () {
        if (!$(this).val()) {// Show Error
            $(this).css('border', '1px solid #f00').parent().find('.custom-alert').fadeIn(200).end().find('.astrik').fadeIn(100);
            nkyErrors = true;
        } else {
            $(this).css('border', '1px solid #080').parent().find('.custom-alert').fadeOut(200).end().find('.astrik').fadeOut(100);
            nkyErrors = false;
        }

    });
    $('#nekaba_id').blur(function () {
        if (!$(this).val()) {// Show Error
            $(this).css('border', '1px solid #f00').parent().find('.custom-alert').fadeIn(200).end().find('.astrik').fadeIn(100);
            nkidErrors = true;
        } else {
            $(this).css('border', '1px solid #080').parent().find('.custom-alert').fadeOut(200).end().find('.astrik').fadeOut(100);
            nkidErrors = false;
        }

    });
    $('#computer').blur(function () {
        if ($(this).val() == 0) {// Show Error
            $(this).css('border', '1px solid #f00').parent().find('.custom-alert').fadeIn(200).end().find('.astrik').fadeIn(100);
            compErrors = true;
        } else {
            $(this).css('border', '1px solid #080').parent().find('.custom-alert').fadeOut(200).end().find('.astrik').fadeOut(100);
            compErrors = false;
        }

    });
       
    // Submit Form Validation
  
    $('#register-form').submit(function (e) {
        if (nameErrors === true || nidErrors1 === true  || nidErrors2 === true || dateErrors1 === true || dateErrors2 === true || mobErrors === true || militaryErrors === true || maritalErrors === true || cityErrors === true || villageErrors === true || studyErrors === true || gradeErrors === true || gyErrors === true || gpErrors === true || nkyErrors === true || nkidErrors === true || compErrors === true) {
            e.preventDefault();
            $('.name, .nid, #configPicker, #military, #mobile, #marital, #city, #village, #grade, #study, #grade_year, #grade_percent, #nekaba_year, #nekaba_id, #computer').blur();
        }

    });
    $('#configPicker').datepick({showTrigger: '#calImg'});

    

    $(".nid").keydown(function (event) {
        if (!((event.keyCode >= 48 && event.keyCode <= 57) || event.keyCode == 46 || event.keyCode == 8 || (event.keyCode >= 96 && event.keyCode <= 105))) {
            event.preventDefault();
        }
    });
    $("#mobile").keydown(function (event) {
        if (!((event.keyCode >= 48 && event.keyCode <= 57) || event.keyCode == 46 || event.keyCode == 8 || (event.keyCode >= 96 && event.keyCode <= 105))) {
            event.preventDefault();
        }
    });
    $("#nekaba_year").keydown(function (event) {
        if (!((event.keyCode >= 48 && event.keyCode <= 57) || event.keyCode == 46 || event.keyCode == 8 || (event.keyCode >= 96 && event.keyCode <= 105))) {
            event.preventDefault();
        }
    });
    $("#nekaba_id").keydown(function (event) {
        if (!((event.keyCode >= 48 && event.keyCode <= 57) || event.keyCode == 46 || event.keyCode == 8 || (event.keyCode >= 96 && event.keyCode <= 105))) {
            event.preventDefault();
        }
    });
    $("#grade_year").keydown(function (event) {
        if (!((event.keyCode >= 48 && event.keyCode <= 57) || event.keyCode == 46 || event.keyCode == 8 || (event.keyCode >= 96 && event.keyCode <= 105))) {
            event.preventDefault();
        }
    });
    $("#grade_percent").keydown(function (event) {
        if (!((event.keyCode >= 48 && event.keyCode <= 57) || event.keyCode == 46 || event.keyCode == 8 || (event.keyCode >= 96 && event.keyCode <= 105))) {
            event.preventDefault();
        }
    });
    $("#landline").keydown(function (event) {
        if (!((event.keyCode >= 48 && event.keyCode <= 57) || event.keyCode == 46 || event.keyCode == 8 || (event.keyCode >= 96 && event.keyCode <= 105))) {
            event.preventDefault();
        }
    });
 
  
});