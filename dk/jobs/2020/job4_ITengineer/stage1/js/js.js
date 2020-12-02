/*jslint browser: true*/
/*global $, jQuery, alert, console, grecaptcha*/
$(function () {

  'use strict';
  // setting error status
  var nameErrors = true,
    nidErrors1 = true,
    mobErrors = true,
    dateErrors1 = true,
    dateErrors2 = true,
    dateErrors3 = true,
    dateErrors4 = true,
    militaryErrors = true,
    maritalErrors = true,
    villageErrors = true,
    jobErrors = true,
    universityErrors = true,
    collegeErrors = true,
    study1Errors = true,
    study2Errors = true,
    gradeErrors = true,
    gyErrors = true,
    gyErrors2 = true,
    nkyErrors = true,
    nkidErrors = true,
    nky2Errors = true;
    





  $('.name').blur(function () {
    if ($(this).val().length < 15) { // Show Error

      $(this).css('border', '1px solid #f00').parent().find('.custom-alert').fadeIn(200).end().find('.astrik').fadeIn(100);
      nameErrors = true;

    } else { // Hide Error
      $(this).css('border', '1px solid #080').parent().find('.custom-alert').fadeOut(200).end().find('.astrik').fadeOut(100);
      nameErrors = false;
    }

  });
  $('.nid').blur(function () {

    if ($(this).val().length < 14) { // Show Error

      $(this).css('border', '1px solid #f00').parent().find('.custom-alert').fadeIn(200).end().find('.astrik').fadeIn(100);
      nidErrors1 = true;

    } else { // Hide Error
      $(this).css('border', '1px solid #080').parent().find('.custom-alert').fadeOut(200).end().find('.astrik').fadeOut(100);
      nidErrors1 = false;
    }

  });

  $('#date').blur(function () {
    var birthN = $('.nid').val().substring(1, 3),
      birthyear = $('#date').val().substring(2, 4);
    if (birthN !== birthyear) { // Show Error

      $(this).css('border', '1px solid #f00').parent().find('.custom-alert3').fadeIn(200).end().find('.astrik').fadeIn(100);
      dateErrors1 = true;

    } else { // Hide Error
      $(this).css('border', '1px solid #080').parent().find('.custom-alert3').fadeOut(200).end().find('.astrik').fadeOut(100);
      dateErrors1 = false;
    }

  });

  $('#date').blur(function () {
    var birthN2 = $('.nid').val().substring(3, 5),
      birthyear2 = $('#date').val().substring(5, 7);
    if (birthN2 !== birthyear2) { // Show Error

      $(this).css('border', '1px solid #f00').parent().find('.custom-alert4').fadeIn(200).end().find('.astrik').fadeIn(100);
      dateErrors3 = true;

    } else { // Hide Error
      $(this).css('border', '1px solid #080').parent().find('.custom-alert4').fadeOut(200).end().find('.astrik').fadeOut(100);
      dateErrors3 = false;
    }

  });
  $('#date').blur(function () {
    var birthN3 = $('.nid').val().substring(5, 7),
      birthyear3 = $('#date').val().substring(8, 10);
    if (birthN3 !== birthyear3) { // Show Error

      $(this).css('border', '1px solid #f00').parent().find('.custom-alert5').fadeIn(200).end().find('.astrik').fadeIn(100);
      dateErrors4 = true;

    } else { // Hide Error
      $(this).css('border', '1px solid #080').parent().find('.custom-alert5').fadeOut(200).end().find('.astrik').fadeOut(100);
      dateErrors4 = false;
    }

  });


  $('#date').blur(function () {
    if (!$(this).val()) { // Show Error
      $(this).css('border', '1px solid #f00').parent().find('.custom-alert').fadeIn(200).end().find('.astrik').fadeIn(100);
      dateErrors2 = true;
    } else {
      $(this).css('border', '1px solid #080').parent().find('.custom-alert').fadeOut(200).end().find('.astrik').fadeOut(100);
      dateErrors2 = false;
    }


  });
    
    
    
    ////////////////////////////////////////////////////////////////

  $('#military').blur(function () {
    if ($(this).val() == 0) { // Show Error
      $(this).css('border', '1px solid #f00').parent().find('.custom-alert').fadeIn(200).end().find('.astrik').fadeIn(100);
      militaryErrors = true;
    } else {
      $(this).css('border', '1px solid #080').parent().find('.custom-alert').fadeOut(200).end().find('.astrik').fadeOut(100);
      militaryErrors = false;
    }
  });

  $('#marital').blur(function () {
    if ($(this).val() == 0) { // Show Error
      $(this).css('border', '1px solid #f00').parent().find('.custom-alert').fadeIn(200).end().find('.astrik').fadeIn(100);
      maritalErrors = true;
    } else {
      $(this).css('border', '1px solid #080').parent().find('.custom-alert').fadeOut(200).end().find('.astrik').fadeOut(100);
      maritalErrors = false;
    }
  });
  $('#village').blur(function () {
    if (!$(this).val()) { // Show Error
      $(this).css('border', '1px solid #f00').parent().find('.custom-alert').fadeIn(200).end().find('.astrik').fadeIn(100);
      villageErrors = true;
    } else {
      $(this).css('border', '1px solid #080').parent().find('.custom-alert').fadeOut(200).end().find('.astrik').fadeOut(100);
      villageErrors = false;
    }

  });


    $('#mobile').blur(function () {
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
    /*
       $('#study1').blur(function() {
        if ($(this).val() == 0  && $(this).length) { // Show Error
            $(this).css('border', '1px solid #f00').parent().find('.custom-alert').fadeIn(200).end().find('.astrik').fadeIn(100);
            study1Errors = true;
        } else {
            $(this).css('border', '1px solid #080').parent().find('.custom-alert').fadeOut(200).end().find('.astrik').fadeOut(100);
            study1Errors = false;
        }

    });

    $('#study2').blur(function() {
      if ($(this).val() == 0) { // Show Error
          $(this).css('border', '1px solid #f00').parent().find('.custom-alert').fadeIn(200).end().find('.astrik').fadeIn(100);
          study2Errors = true;
      } else {
          $(this).css('border', '1px solid #080').parent().find('.custom-alert').fadeOut(200).end().find('.astrik').fadeOut(100);
          study2Errors = false;
      }

  });
*/

    $('#job').blur(function() {
      if ($(this).val() == 0) { // Show Error
          $(this).css('border', '1px solid #f00').parent().find('.custom-alert').fadeIn(200).end().find('.astrik').fadeIn(100);
          jobErrors = true;
      } else {
          $(this).css('border', '1px solid #080').parent().find('.custom-alert').fadeOut(200).end().find('.astrik').fadeOut(100);
          jobErrors = false;
      }

  });

  $('#grade').blur(function () {
    if ($(this).val() == 0) { // Show Error
      $(this).css('border', '1px solid #f00').parent().find('.custom-alert').fadeIn(200).end().find('.astrik').fadeIn(100);
      gradeErrors = true;
    } else {
      $(this).css('border', '1px solid #080').parent().find('.custom-alert').fadeOut(200).end().find('.astrik').fadeOut(100);
      gradeErrors = false;
    }

  });

  $('#grade_year').blur(function () {
    if (!$(this).val() || $(this).val() == 0) { // Show Error
      $(this).css('border', '1px solid #f00').parent().find('.custom-alert').fadeIn(200).end().find('.astrik').fadeIn(100);
      gyErrors = true;
    } else {
      $(this).css('border', '1px solid #080').parent().find('.custom-alert').fadeOut(200).end().find('.astrik').fadeOut(100);
      gyErrors = false;
    }
  });

  $('#grade_year').blur(function () {
    if ($(this).val().length < 4) { // Show Error
      $(this).css('border', '1px solid #f00').parent().find('.custom-alert2').fadeIn(200).end().find('.astrik').fadeIn(100);
      gyErrors2 = true;
    } else {
      $(this).css('border', '1px solid #080').parent().find('.custom-alert2').fadeOut(200).end().find('.astrik').fadeOut(100);
      gyErrors2 = false;
    }
  });

/*
  $('#nekaba_year').blur(function () {
    if (!$(this).val() || $(this).val() == 0) { // Show Error
      $(this).css('border', '1px solid #f00').parent().find('.custom-alert').fadeIn(200).end().find('.astrik').fadeIn(100);
      nkyErrors = true;
    } else {
      $(this).css('border', '1px solid #080').parent().find('.custom-alert').fadeOut(200).end().find('.astrik').fadeOut(100);
      nkyErrors = false;
    }

  });
  $('#nekaba_year').blur(function () {
    if ($(this).val().length < 4) { // Show Error
      $(this).css('border', '1px solid #f00').parent().find('.custom-alert2').fadeIn(200).end().find('.astrik').fadeIn(100);
      nky2Errors = true;
    } else {
      $(this).css('border', '1px solid #080').parent().find('.custom-alert2').fadeOut(200).end().find('.astrik').fadeOut(100);
      nky2Errors = false;
    }

  });
  $('#nekaba_id').blur(function () {
    if (!$(this).val() || $(this).val() == 0) { // Show Error
      $(this).css('border', '1px solid #f00').parent().find('.custom-alert').fadeIn(200).end().find('.astrik').fadeIn(100);
      nkidErrors = true;
    } else {
      $(this).css('border', '1px solid #080').parent().find('.custom-alert').fadeOut(200).end().find('.astrik').fadeOut(100);
      nkidErrors = false;
    }

  });
*/
    
  var study1 = $('#job1').detach();
  var study2 = $('#job2').detach();
  var nekaba = $('#nekaba').detach();


  $('#job').change(function () {
    if ($(this).val() == 1) {
      $("#jobs").append(study1);
      $('#nk_section').append(nekaba);
      $('#nekaba_year').blur(function () {
        if (!$(this).val() || $(this).val() == 0) { // Show Error
          $(this).css('border', '1px solid #f00').parent().find('.custom-alert').fadeIn(200).end().find('.astrik').fadeIn(100);
          nkyErrors = true;
        } else {
          $(this).css('border', '1px solid #080').parent().find('.custom-alert').fadeOut(200).end().find('.astrik').fadeOut(100);
          nkyErrors = false;
        }
    
      });
      $('#nekaba_year').blur(function () {
        if ($(this).val().length < 4) { // Show Error
          $(this).css('border', '1px solid #f00').parent().find('.custom-alert2').fadeIn(200).end().find('.astrik').fadeIn(100);
          nky2Errors = true;
        } else {
          $(this).css('border', '1px solid #080').parent().find('.custom-alert2').fadeOut(200).end().find('.astrik').fadeOut(100);
          nky2Errors = false;
        }
    
      });
      $('#nekaba_id').blur(function () {
        if (!$(this).val() || $(this).val() == 0) { // Show Error
          $(this).css('border', '1px solid #f00').parent().find('.custom-alert').fadeIn(200).end().find('.astrik').fadeIn(100);
          nkidErrors = true;
        } else {
          $(this).css('border', '1px solid #080').parent().find('.custom-alert').fadeOut(200).end().find('.astrik').fadeOut(100);
          nkidErrors = false;
        }
    
      });
      study2.remove();
      study2Errors = false;
      $('#study1').blur(function() {
        if ($(this).val() == 0 ) { // Show Error
            $(this).css('border', '1px solid #f00').parent().find('.custom-alert').fadeIn(200).end().find('.astrik').fadeIn(100);
            study1Errors = true;
        } else {
            $(this).css('border', '1px solid #080').parent().find('.custom-alert').fadeOut(200).end().find('.astrik').fadeOut(100);
            study1Errors = false;
        }

    });
      
    } else if ($(this).val() == 2)  {
      $("#jobs").append(study2);
      study1.remove();
      study1Errors= false;
      $('#study2').blur(function() {
        if ($(this).val() == 0) { // Show Error
            $(this).css('border', '1px solid #f00').parent().find('.custom-alert').fadeIn(200).end().find('.astrik').fadeIn(100);
            study2Errors = true;
        } else {
            $(this).css('border', '1px solid #080').parent().find('.custom-alert').fadeOut(200).end().find('.astrik').fadeOut(100);
            study2Errors = false;
        }
  
    });

    $('#study2').change(function(){
      if($(this).val() == 1 || $(this).val() == 2 ) {
        $('#nk_section').append(nekaba)

        $('#nekaba_year').blur(function () {
          if (!$(this).val() || $(this).val() == 0) { // Show Error
            $(this).css('border', '1px solid #f00').parent().find('.custom-alert').fadeIn(200).end().find('.astrik').fadeIn(100);
            nkyErrors = true;
          } else {
            $(this).css('border', '1px solid #080').parent().find('.custom-alert').fadeOut(200).end().find('.astrik').fadeOut(100);
            nkyErrors = false;
          }
      
        });
        $('#nekaba_year').blur(function () {
          if ($(this).val().length < 4) { // Show Error
            $(this).css('border', '1px solid #f00').parent().find('.custom-alert2').fadeIn(200).end().find('.astrik').fadeIn(100);
            nky2Errors = true;
          } else {
            $(this).css('border', '1px solid #080').parent().find('.custom-alert2').fadeOut(200).end().find('.astrik').fadeOut(100);
            nky2Errors = false;
          }
      
        });
        $('#nekaba_id').blur(function () {
          if (!$(this).val() || $(this).val() == 0) { // Show Error
            $(this).css('border', '1px solid #f00').parent().find('.custom-alert').fadeIn(200).end().find('.astrik').fadeIn(100);
            nkidErrors = true;
          } else {
            $(this).css('border', '1px solid #080').parent().find('.custom-alert').fadeOut(200).end().find('.astrik').fadeOut(100);
            nkidErrors = false;
          }
      
        });
      } else {
        nekaba.remove();
        nkidErrors = false;
        nky2Errors = false;
        nkyErrors = false;
      }
    });
    

        } else {
          study1.remove();
          study2.remove();
          nekaba.remove();
          nkidErrors = false;
        nky2Errors = false;
        nkyErrors = false;
        study2Errors = false;
        study1Errors = false;



        }
  });


  
 



    







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

  $("#landline").keydown(function (event) {
    if (!((event.keyCode >= 48 && event.keyCode <= 57) || event.keyCode == 46 || event.keyCode == 8 || (event.keyCode >= 96 && event.keyCode <= 105))) {
      event.preventDefault();
    }
  });

    // Submit Form Validation

    $('#register-form').submit(function (e) {
      if (nameErrors === true || nidErrors1 === true || dateErrors1 === true || dateErrors2 === true || dateErrors3 === true || dateErrors4 === true || mobErrors === true || militaryErrors === true || maritalErrors === true  || villageErrors === true || universityErrors === true || collegeErrors === true || jobErrors === true || study1Errors === true || study2Errors === true  || gradeErrors === true || gyErrors === true || gyErrors2 === true  || nkyErrors === true || nky2Errors === true || nkidErrors === true) {
        e.preventDefault();
        $('.name, .nid, #date, #military, #mobile, #marital, #city, #village, #university, #college, #job, #study1, #study2, #grade, #grade_year, #nekaba_year, #nekaba_id').blur();
      }
  
    });



});
