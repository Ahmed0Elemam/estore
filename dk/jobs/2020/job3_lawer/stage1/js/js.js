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
        militaryErrors = true,
        maritalErrors = true,
        villageErrors = true,
        universityErrors = true,
        collegeErrors = true,
        studyErrors = true,
        gradeErrors = true,
        gyErrors = true,
        nkdateErrors = true;




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
    $('#date').blur(function() {
        var birthN = $('.nid').val().substring(1, 3),
            birthyear = $('#date').val().substring(2, 4);

        if (birthN !== birthyear) { // Show Error

            $(this).css('border', '1px solid #f00').parent().find('.custom-alert3').fadeIn(200).end().find('.astrik').fadeIn(100);
            date2Errors1 = true;

        } else { // Hide Error
            $(this).css('border', '1px solid #080').parent().find('.custom-alert3').fadeOut(200).end().find('.astrik').fadeOut(100);
            date2Errors1 = false;
        }

    });

    $('#date').blur(function() {
        var birthN2 = $('.nid').val().substring(3, 5),
            birthyear2 = $('#date').val().substring(5, 7);

        if (birthN2 !== birthyear2) { // Show Error

            $(this).css('border', '1px solid #f00').parent().find('.custom-alert4').fadeIn(200).end().find('.astrik').fadeIn(100);
            date2Errors3 = true;

        } else { // Hide Error
            $(this).css('border', '1px solid #080').parent().find('.custom-alert4').fadeOut(200).end().find('.astrik').fadeOut(100);
            date2Errors3 = false;
        }

    });
    $('#date').blur(function() {
        var birthN3 = $('.nid').val().substring(5, 7),
            birthyear3 = $('#date').val().substring(8, 10);

        if (birthN3 !== birthyear3) { // Show Error

            $(this).css('border', '1px solid #f00').parent().find('.custom-alert5').fadeIn(200).end().find('.astrik').fadeIn(100);
            date2Errors4 = true;

        } else { // Hide Error
            $(this).css('border', '1px solid #080').parent().find('.custom-alert5').fadeOut(200).end().find('.astrik').fadeOut(100);
            date2Errors4 = false;
        }

    });


    $('#date').blur(function() {
        if (!$(this).val()) { // Show Error
            $(this).css('border', '1px solid #f00').parent().find('.custom-alert').fadeIn(200).end().find('.astrik').fadeIn(100);
            date2Errors2 = true;
        } else {
            $(this).css('border', '1px solid #080').parent().find('.custom-alert').fadeOut(200).end().find('.astrik').fadeOut(100);
            date2Errors2 = false;
        }


    });



    ////////////////////////////////////////////////////////////////

    
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
 


 
    $('#nekaba_date').blur(function() {
        if (!$(this).val() || $(this).val() == 0) { // Show Error
            $(this).css('border', '1px solid #f00').parent().find('.custom-alert').fadeIn(200).end().find('.astrik').fadeIn(100);
            nkdateErrors = true;
        } else {
            $(this).css('border', '1px solid #080').parent().find('.custom-alert').fadeOut(200).end().find('.astrik').fadeOut(100);
            nkdateErrors = false;
        }

    });
   



    // Submit Form Validation

    $('#register-form').submit(function(e) {
        if (nameErrors === true || nidErrors1 === true || date2Errors1 === true || date2Errors2 === true || date2Errors3 === true || date2Errors4 === true || mobErrors === true || militaryErrors === true || maritalErrors === true  || villageErrors === true || universityErrors === true || collegeErrors === true || studyErrors === true || gradeErrors === true || nkdateErrors === true ) {
            e.preventDefault();
            $('.name, .nid, #date, #military, #mobile, #marital,  #village, #university, #college, #study, #grade, #grade_year, #nekaba_date').blur();
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

    $("#grade_year").keydown(function(event) {
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