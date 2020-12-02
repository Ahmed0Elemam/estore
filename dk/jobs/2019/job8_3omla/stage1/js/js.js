/*jslint browser: true*/
/*global $, jQuery, alert, console, grecaptcha*/
$(function() {

    'use strict';
    // setting error status
    var nameErrors = true,
        nidErrors1 = true,
        mobErrors = true,
        date2Errors1 = true,
        date2Errors2 = true,
        date2Errors3 = true,
        date2Errors4 = true,
        genderErrors = true,
        militaryErrors = true,
        maritalErrors = true,
        villageErrors = true,
        cityErrors = true,
        universityErrors = true,
        collegeErrors = true,
        studyErrors = true,
        gradeErrors = true,
        gyErrors = true,
        gpErrors = true,
        nkyErrors = true,
        nkidErrors = true,
        compErrors = true;




    $('.name').blur(function() {
        if ($(this).val().length < 15) { // Show Error

            $(this).css('border', '1px solid #f00').parent().find('.custom-alert').fadeIn(200).end().find('.astrik').fadeIn(100);
            nameErrors = true;

        } else { // Hide Error
            $(this).css('border', '1px solid #080').parent().find('.custom-alert').fadeOut(200).end().find('.astrik').fadeOut(100);
            nameErrors = false;
        }

    });
    $('.nid').blur(function() {

        if ($(this).val().length < 14) { // Show Error

            $(this).css('border', '1px solid #f00').parent().find('.custom-alert').fadeIn(200).end().find('.astrik').fadeIn(100);
            nidErrors1 = true;

        } else { // Hide Error
            $(this).css('border', '1px solid #080').parent().find('.custom-alert').fadeOut(200).end().find('.astrik').fadeOut(100);
            nidErrors1 = false;
        }

    });



    /////////////////////////////////////////////////////////////////////////
    $('#date2').blur(function() {
        var birthN = $('.nid').val().substring(1, 3),
            birthyear = $('#date2').val().substring(2, 4);

        if (birthN !== birthyear) { // Show Error

            $(this).css('border', '1px solid #f00').parent().find('.custom-alert3').fadeIn(200).end().find('.astrik').fadeIn(100);
            date2Errors1 = true;

        } else { // Hide Error
            $(this).css('border', '1px solid #080').parent().find('.custom-alert3').fadeOut(200).end().find('.astrik').fadeOut(100);
            date2Errors1 = false;
        }

    });

    $('#date2').blur(function() {
        var birthN2 = $('.nid').val().substring(3, 5),
            birthyear2 = $('#date2').val().substring(5, 7);

        if (birthN2 !== birthyear2) { // Show Error

            $(this).css('border', '1px solid #f00').parent().find('.custom-alert4').fadeIn(200).end().find('.astrik').fadeIn(100);
            date2Errors3 = true;

        } else { // Hide Error
            $(this).css('border', '1px solid #080').parent().find('.custom-alert4').fadeOut(200).end().find('.astrik').fadeOut(100);
            date2Errors3 = false;
        }

    });
    $('#date2').blur(function() {
        var birthN3 = $('.nid').val().substring(5, 7),
            birthyear3 = $('#date2').val().substring(8, 10);

        if (birthN3 !== birthyear3) { // Show Error

            $(this).css('border', '1px solid #f00').parent().find('.custom-alert5').fadeIn(200).end().find('.astrik').fadeIn(100);
            date2Errors4 = true;

        } else { // Hide Error
            $(this).css('border', '1px solid #080').parent().find('.custom-alert5').fadeOut(200).end().find('.astrik').fadeOut(100);
            date2Errors4 = false;
        }

    });


    $('#date2').blur(function() {
        if (!$(this).val()) { // Show Error
            $(this).css('border', '1px solid #f00').parent().find('.custom-alert').fadeIn(200).end().find('.astrik').fadeIn(100);
            date2Errors2 = true;
        } else {
            $(this).css('border', '1px solid #080').parent().find('.custom-alert').fadeOut(200).end().find('.astrik').fadeOut(100);
            date2Errors2 = false;
        }


    });



    ////////////////////////////////////////////////////////////////
    $('#gender').blur(function() {
        if ($(this).val() == 0) { // Show Error
            $(this).css('border', '1px solid #f00').parent().find('.custom-alert').fadeIn(200).end().find('.astrik').fadeIn(100);
            genderErrors = true;
        } else {
            $(this).css('border', '1px solid #080').parent().find('.custom-alert').fadeOut(200).end().find('.astrik').fadeOut(100);
            genderErrors = false;
        }
    });
    
    $('#military').blur(function() {
        if ($(this).val() == 0) { // Show Error
            $(this).css('border', '1px solid #f00').parent().find('.custom-alert').fadeIn(200).end().find('.astrik').fadeIn(100);
            militaryErrors = true;
        } else {
            $(this).css('border', '1px solid #080').parent().find('.custom-alert').fadeOut(200).end().find('.astrik').fadeOut(100);
            militaryErrors = false;
        }
    });

    $('#marital').blur(function() {
        if ($(this).val() == 0) { // Show Error
            $(this).css('border', '1px solid #f00').parent().find('.custom-alert').fadeIn(200).end().find('.astrik').fadeIn(100);
            maritalErrors = true;
        } else {
            $(this).css('border', '1px solid #080').parent().find('.custom-alert').fadeOut(200).end().find('.astrik').fadeOut(100);
            maritalErrors = false;
        }
    });
    
    $('#village').blur(function() {
        if (!$(this).val()) { // Show Error
            $(this).css('border', '1px solid #f00').parent().find('.custom-alert').fadeIn(200).end().find('.astrik').fadeIn(100);
            villageErrors = true;
        } else {
            $(this).css('border', '1px solid #080').parent().find('.custom-alert').fadeOut(200).end().find('.astrik').fadeOut(100);
            villageErrors = false;
        }

    });
    
    $('#city').blur(function() {
        if ($(this).val() == 0) { // Show Error
            $(this).css('border', '1px solid #f00').parent().find('.custom-alert').fadeIn(200).end().find('.astrik').fadeIn(100);
            cityErrors = true;
        } else {
            $(this).css('border', '1px solid #080').parent().find('.custom-alert').fadeOut(200).end().find('.astrik').fadeOut(100);
            cityErrors = false;
        }

    });

    $('#mobile').blur(function() {
        if ($(this).val().length < 11 || $(this).val() == 0) { // Show Error
            $(this).css('border', '1px solid #f00').parent().find('.custom-alert').fadeIn(200).end().find('.astrik').fadeIn(100);

            mobErrors = true;

        } else {

            $(this).css('border', '1px solid #080').parent().find('.custom-alert').fadeOut(200).end().find('.astrik').fadeOut(100);
            mobErrors = false;
        }
    });
    
    $('#university').blur(function() {
        if (!$(this).val()) { // Show Error
            $(this).css('border', '1px solid #f00').parent().find('.custom-alert').fadeIn(200).end().find('.astrik').fadeIn(100);
            universityErrors = true;
        } else {
            $(this).css('border', '1px solid #080').parent().find('.custom-alert').fadeOut(200).end().find('.astrik').fadeOut(100);
            universityErrors = false;
        }

    });
    
    $('#college').blur(function() {
        if (!$(this).val()) { // Show Error
            $(this).css('border', '1px solid #f00').parent().find('.custom-alert').fadeIn(200).end().find('.astrik').fadeIn(100);
            collegeErrors = true;
        } else {
            $(this).css('border', '1px solid #080').parent().find('.custom-alert').fadeOut(200).end().find('.astrik').fadeOut(100);
            collegeErrors = false;
        }

    });

    $('#study').blur(function() {
        if ($(this).val() == 0) { // Show Error
            $(this).css('border', '1px solid #f00').parent().find('.custom-alert').fadeIn(200).end().find('.astrik').fadeIn(100);
            studyErrors = true;
        } else {
            $(this).css('border', '1px solid #080').parent().find('.custom-alert').fadeOut(200).end().find('.astrik').fadeOut(100);
            studyErrors = false;
        }

    });
    
    $('#grade').blur(function() {
        if ($(this).val() == 0) { // Show Error
            $(this).css('border', '1px solid #f00').parent().find('.custom-alert').fadeIn(200).end().find('.astrik').fadeIn(100);
            gradeErrors = true;
        } else {
            $(this).css('border', '1px solid #080').parent().find('.custom-alert').fadeOut(200).end().find('.astrik').fadeOut(100);
            gradeErrors = false;
        }

    });

    $('#grade_year').blur(function() {
        if ($(this).val() == 0 || !$(this).val() || $(this).val().length < 4 ) { // Show Error
            $(this).css('border', '1px solid #f00').parent().find('.custom-alert').fadeIn(200).end().find('.astrik').fadeIn(100);
            gyErrors = true;
        } else {
            $(this).css('border', '1px solid #080').parent().find('.custom-alert').fadeOut(200).end().find('.astrik').fadeOut(100);
            gyErrors = false;
        }
    });
 
    $('#grade_percent').blur(function() {
        if (!$(this).val() || $(this).val().length < 2) { // Show Error
            $(this).css('border', '1px solid #f00').parent().find('.custom-alert').fadeIn(200).end().find('.astrik').fadeIn(100);
            gpErrors = true;
        } else {
            $(this).css('border', '1px solid #080').parent().find('.custom-alert').fadeOut(200).end().find('.astrik').fadeOut(100);
            gpErrors = false;
        }
    });

    $('#nekaba_year').blur(function() {
        if ($(this).val() == 0 || !$(this).val() || $(this).val().length < 4) { // Show Error
            $(this).css('border', '1px solid #f00').parent().find('.custom-alert').fadeIn(200).end().find('.astrik').fadeIn(100);
            nkyErrors = true;
        } else {
            $(this).css('border', '1px solid #080').parent().find('.custom-alert').fadeOut(200).end().find('.astrik').fadeOut(100);
            nkyErrors = false;
        }

    });
 
    $('#nekaba_id').blur(function() {
        if (!$(this).val() || $(this).val() == 0) { // Show Error
            $(this).css('border', '1px solid #f00').parent().find('.custom-alert').fadeIn(200).end().find('.astrik').fadeIn(100);
            nkidErrors = true;
        } else {
            $(this).css('border', '1px solid #080').parent().find('.custom-alert').fadeOut(200).end().find('.astrik').fadeOut(100);
            nkidErrors = false;
        }

    });
    $('#computer').blur(function() {
        if ($(this).val() == 0) { // Show Error
            $(this).css('border', '1px solid #f00').parent().find('.custom-alert').fadeIn(200).end().find('.astrik').fadeIn(100);
            compErrors = true;
        } else {
            $(this).css('border', '1px solid #080').parent().find('.custom-alert').fadeOut(200).end().find('.astrik').fadeOut(100);
            compErrors = false;
        }

    });


    var Privileges = jQuery('#gender');
    Privileges.change(function() {
        if ($(this).val() == 2) {
            $('#male').hide();
            $('#military').append('<option value="5" hidden selected="selected">لا يوجد</option>');

            militaryErrors = false;
        } else {
            $('#male').show();
            $('#military').val(0);

            militaryErrors = true;


        }
    });



    // Submit Form Validation

    $('#register-form').submit(function(e) {
        if (nameErrors === true || nidErrors1 === true || date2Errors1 === true || date2Errors2 === true || date2Errors3 === true || date2Errors4 === true || genderErrors === true || mobErrors === true || militaryErrors === true || maritalErrors === true || cityErrors === true || villageErrors === true || universityErrors === true || collegeErrors === true || studyErrors === true || gradeErrors === true || gyErrors === true || gpErrors === true || nkyErrors === true || nkidErrors === true || compErrors === true) {
            e.preventDefault();
            $('.name, .nid, #date2, #gender, #military, #mobile, #marital, #city, #village, #university, #college, #study, #grade, #grade_year, #grade_percent, #nekaba_year, #nekaba_id, #computer').blur();
        }

    });




    $(".nid").keydown(function(event) {
        if (!((event.keyCode >= 48 && event.keyCode <= 57) || event.keyCode == 46 || event.keyCode == 8 || (event.keyCode >= 96 && event.keyCode <= 105))) {
            event.preventDefault();
        }
    });
    $("#mobile").keydown(function(event) {
        if (!((event.keyCode >= 48 && event.keyCode <= 57) || event.keyCode == 46 || event.keyCode == 8 || (event.keyCode >= 96 && event.keyCode <= 105))) {
            event.preventDefault();
        }
    });

    $("#nekaba_id").keydown(function(event) {
        if (!((event.keyCode >= 48 && event.keyCode <= 57) || event.keyCode == 46 || event.keyCode == 8 || (event.keyCode >= 96 && event.keyCode <= 105))) {
            event.preventDefault();
        }
    });
    
    $("#nekaba_year").keydown(function(event) {
        if (!((event.keyCode >= 48 && event.keyCode <= 57) || event.keyCode == 46 || event.keyCode == 8 || (event.keyCode >= 96 && event.keyCode <= 105))) {
            event.preventDefault();
        }
    });
    
    $("#grade_year").keydown(function(event) {
        if (!((event.keyCode >= 48 && event.keyCode <= 57) || event.keyCode == 46 || event.keyCode == 8 || (event.keyCode >= 96 && event.keyCode <= 105))) {
            event.preventDefault();
        }
    });

    $("#grade_percent").keydown(function(event) {
        if (!((event.keyCode >= 48 && event.keyCode <= 57) || event.keyCode == 46 || event.keyCode == 8 || (event.keyCode >= 96 && event.keyCode <= 105))) {
            event.preventDefault();
        }
    });
    $("#landline").keydown(function(event) {
        if (!((event.keyCode >= 48 && event.keyCode <= 57) || event.keyCode == 46 || event.keyCode == 8 || (event.keyCode >= 96 && event.keyCode <= 105))) {
            event.preventDefault();
        }
    });



});