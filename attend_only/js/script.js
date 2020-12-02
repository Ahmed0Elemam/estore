/*jslint browser: true*/
/*global $, jQuery, alert, console, grecaptcha*/
$(function () {
    $('#date').calendar({
        type: 'date',
        formatInput: true,
        text: {
            days: ['احد', 'اثنين', 'ثلاثاء', 'اربعاء', 'خميس', 'جمعة', 'سبت'],
            months: ['يناير', 'فبراير', 'مارس', 'ابريل', 'مايو', 'يونيو', 'يوليو', 'أغسطس', 'سبتمبر', 'أكتوبر', 'نوفمبر', 'ديسمبر'],
            today: 'اليوم'
          },
          formatter: {
            date: function (date, settings) {
                if (!date) return '';
                var day = date.getDate() + '';
                if (day.length < 2) {
                    day = '0' + day;
                }
                var month = (date.getMonth() + 1) + '';
                if (month.length < 2) {
                    month = '0' + month;
                }
                var year = date.getFullYear();
                return year + '-' + month + '-' + day;
            }
        }
      });

      $('#date2').calendar({
        type: 'date',
        formatInput: true,
        text: {
            days: ['احد', 'اثنين', 'ثلاثاء', 'اربعاء', 'خميس', 'جمعة', 'سبت'],
            months: ['يناير', 'فبراير', 'مارس', 'ابريل', 'مايو', 'يونيو', 'يوليو', 'أغسطس', 'سبتمبر', 'أكتوبر', 'نوفمبر', 'ديسمبر'],
            today: 'اليوم'
          },
          formatter: {
            date: function (date, settings) {
                if (!date) return '';
                var day = date.getDate() + '';
                if (day.length < 2) {
                    day = '0' + day;
                }
                var month = (date.getMonth() + 1) + '';
                if (month.length < 2) {
                    month = '0' + month;
                }
                var year = date.getFullYear();
                return year + '-' + month + '-' + day;
            }
        }
      });

      $("#view").click(function () {
        var date_from = $('#date1').val();
        var date_to = $('#date3').val();
          var ajax_URL = "data.php";
        $('#data').html('');
    
        //debugger;
     if (date_from != '' && date_to != '' && date_from <= date_to) {
         $('#data').html('<div class="ui loading form"></div> ');
          $.ajax({
            cache: false,
            type: "POST",
            dataType: "html",
            url: ajax_URL,
            data: {
                date_from: date_from,
                date_to: date_to
    
            },
            error: function () {
              //debugger;
                
              $('#data').html('خطأ في تحميل البيانات');
            },
            success: function (result) {
              //debugger;
            
              $("#data").html(result);
              complete:
                return true;
            }
    
          });
      } else {
          alert(' لم يتم ادخال التاريخ بطريقة صحيحة')
      }
      });




});