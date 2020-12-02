
$(document).ready(function(){
  

$("#code").keyup(function(e){
  if(e.keyCode == 13)
  {
  
  var code_val = $('#code').val(),
  ajax_URL = "ajax_read.php",
  dataString ="code="+code_val;
   
    if (code_val != '') {
            
    $.ajax({
    type: "POST",
    dataType: "html",
    url: ajax_URL,
    //data: "actionfunction="+$actionfunction+"&page=1&search="+name_val,
    data: "code="+code_val,    
    cache: false,       
    error: function () {
      //debugger;
      $('#JobInfo').html('خطأ في تحميل البيانات');
    },
    success: function (response) {
       
      //debugger;
      //$("#CustomerInfo").html(response);
         $('#JobInfo').html(response);
        
       
      complete:
         
        return true;
        
        
    }

  });
        
    
    } else {
      $('#JobInfo').html('<p class="text-danger"> لم يتم ادخال كود المتقدم</p>');
    }
  }
});

$("#update_btn").click(function() {
  
  var code_val = $('#code').val();
  var paper_result = $("#paper_result").val();
  var reason1 = $("#reason1").val();
  var reason2 = $("#reason2").val();
  var reason3 = $("#reason3").val();
  var notes = $("#notes").val();



  if (paper_result != 0) {
  
    ajax_URL = "ajax_update.php",
                
        $.ajax({
        type: "POST",
        dataType: "html",
        url: ajax_URL,
        //data: "actionfunction="+$actionfunction+"&page=1&search="+name_val,
        data: {
         code: code_val,
         p_result: paper_result,
        r1: reason1,
        r2: reason2,
        r3: reason3,
        n: notes
      } ,    
        cache: false,       
        error: function () {
          //debugger;
          $('#updated').html('خطأ في تحميل البيانات');
        },
        success: function (response) {
           
          //debugger;
          //$("#CustomerInfo").html(response);
             $('#updated').html(response);
            
           
          complete:
             
            return true;
            
            
        }

      });
            



  } else {
    alert("لم يتم اختيار نتيجة الاستيفاء");
  }


});

$("#update_city_btn").click(function() {
  var city_val = $('#city').val();
  var code_val = $('#code').val();


  if (city_val != 0) {
  
    ajax_URL = "ajax_update_city.php",
                
        $.ajax({
        type: "POST",
        dataType: "html",
        url: ajax_URL,
        //data: "actionfunction="+$actionfunction+"&page=1&search="+name_val,
        data: {
          code: code_val,
         city: city_val
      } ,    
        cache: false,       
        error: function () {
          //debugger;
          $('#city_updated').html('خطأ في تحميل البيانات');
        },
        success: function (response) {
           
          //debugger;
          //$("#CustomerInfo").html(response);
             $('#city_updated').html(response);
            
           
          complete:
             
            return true;
            
            
        }

      });
            



  } 

});

$("#update_study_btn").click(function() {
  var study_val = $('#study').val();
  var code_val = $('#code').val();


  if (study_val != 0) {
  
    ajax_URL = "ajax_update_study.php",
                
        $.ajax({
        type: "POST",
        dataType: "html",
        url: ajax_URL,
        //data: "actionfunction="+$actionfunction+"&page=1&search="+name_val,
        data: {
          code: code_val,
         study: study_val
      } ,    
        cache: false,       
        error: function () {
          //debugger;
          $('#study_updated').html('خطأ في تحميل البيانات');
        },
        success: function (response) {
           
          //debugger;
          //$("#CustomerInfo").html(response);
             $('#study_updated').html(response);
            
           
          complete:
             
            return true;
            
            
        }

      });
            



  } 


});

$("#entry_btn").click(function(e) {
e.preventDefault();
    ajax_URL = "entry.php",
                
        $.ajax({
        type: "POST",
        dataType: "html",
        url: ajax_URL,
  
        cache: false,       
        error: function () {
          //debugger;
          $('#page_content').html('خطأ في تحميل البيانات');
        },
        success: function (response) {
           
          //debugger;
          //$("#CustomerInfo").html(response);
             $('#page_content').html(response);
            
           
          complete:
             
            return true;
            
            
        }

      });
            





});

$("#stats_btn").click(function(e) {
  e.preventDefault();
      ajax_URL = "stats.php",
                  
          $.ajax({
          type: "POST",
          dataType: "html",
          url: ajax_URL,
    
          cache: false,       
          error: function () {
            //debugger;
            $('#page_content').html('خطأ في تحميل البيانات');
          },
          success: function (response) {
             
            //debugger;
            //$("#CustomerInfo").html(response);
               $('#page_content').html(response);
              
             
            complete:
               
              return true;
              
              
          }
  
        });
              
  
  
  
  
  
  });

  $('#date1').datepicker({
    changeMonth: true,
    changeYear: true,
    regional: "ar",
    dateFormat: "yy-mm-dd",
    autoSize: true
});

$('#date2').datepicker({
  changeMonth: true,
  changeYear: true,
  regional: "ar",
  dateFormat: "yy-mm-dd",
  autoSize: true
});

  $("#stats_results_btn").click(function() {
    var stats_from_date_val = $('#date1').val();
    var stats_to_date_val = $('#date2').val();

    if (stats_from_date_val == '' || stats_to_date_val == '' ) {
      alert("لم يتم اختيار التاريخ");

    }  else {
    
      ajax_URL = "stats_result.php",
                  
          $.ajax({
          type: "POST",
          dataType: "html",
          url: ajax_URL,
          //data: "actionfunction="+$actionfunction+"&page=1&search="+name_val,
          data: "date_from="+stats_from_date_val+"&date_to="+stats_to_date_val ,    
          cache: false,       
          error: function () {
            //debugger;
            $('#stats_result').html('خطأ في تحميل البيانات');
          },
          success: function (response) {
            //debugger;
               $('#stats_result').html(response);
            complete:
               
              return true;
              
              
          }
  
        });
              
      }
  
  
  });


    


});
    

     
     
  