$(function () {

function GetURLParameter(sParam) {
    var sPageURL = window.location.search.substring(1);
    var sURLVariables = sPageURL.split('&');
    for (var i = 0; i < sURLVariables.length; i++) {
        var sParameterName = sURLVariables[i].split('=');
        if (sParameterName[0] == sParam) {
            return sParameterName[1];
        }
    }
  }
  
  
 var treatment_type= GetURLParameter('treatment_type');
 var type = GetURLParameter('type');
 var treatment_id = GetURLParameter('treatment_id');
 var treatment_year = GetURLParameter('treatment_year');
 var department = GetURLParameter('department');
 var treatment_cat = GetURLParameter('treatment_cat');
 var attach_no = GetURLParameter('attach_no');
 var user_id = GetURLParameter('user_id');

 
//window.history.replaceState("", "", 'نظام_الأرشفة_الالكترونية_للملفات_ادارة_تكنولوجيا_المعلومات');


    $("#move").click(function () {
      var treatment_type_val = treatment_type;
      var type_val = type;
      var treatment_id_val  = treatment_id;
      var treatment_year_val  = treatment_year;
      var department_val  = department;
      var treatment_cat_val  = treatment_cat;
      var attach_no_val  = attach_no;
      var notes_val = $('#notes').val();
      var user_id_val = user_id;
          ajax_URL = "move.php",
          dataString = 'tr_type=' + treatment_type_val + '&type=' + type_val + '&tr_id' + treatment_id_val + '&tr_year' + treatment_year_val + '&dept' + department_val + '&cat' + treatment_cat_val  + '&attach' + attach_no_val +  '&notes' + notes_val + '&user_id'  + user_id_val ;
        
        $('#Info').html('');
    
        //debugger;
     if ( treatment_id_val !=0 && treatment_year_val !=0 && department_val !=0 && treatment_cat_val !=0 && attach_no_val !=0 && notes_val != ''  ) {


      
         $('#Info').html('<br/><img src="images/loading.gif" width="70"  height="70" /><p class="text-info"> جاري تحميل البيانات </p>');
          $.ajax({
            cache: false,
            type: "POST",
            dataType: "html",
            url: ajax_URL,
            data: {
              tr_type: treatment_type_val,
              type: type_val,
              tr_id: treatment_id_val,
              tr_year: treatment_year_val,
              dept: department_val,
              cat: treatment_cat_val,
              attach: attach_no_val,
              notes: notes_val,
              user_id: user_id_val

            },
            error: function () {
              //debugger;
                
              $('#Info').html('خطأ في تحميل البيانات');
            },
            success: function (result) {
              //debugger;
            
              $("#Info").html(result);
              complete:
                return true;
            }
    
          });
      } else {
        $('#notes').css('border', '3px solid #f00');
      }
      });


      $('#files').change(function(e) {
   
          var form_data = new FormData();
          var ins = document.getElementById('files').files.length;
          var user_id_val =  document.getElementById('user').value;
          var treatment_type_val =  document.getElementById('treatment_type').value;
          var department_val =  document.getElementById('department').value;
          var treatment_year_val =  document.getElementById('treatment_year').value;
          var treatment_id_val =  document.getElementById('treatment_id').value;

          for (var x = 0; x < ins; x++) {
            form_data.append("files[]", document.getElementById('files').files[x]);
           
          }
          form_data.append("user", user_id_val );
          form_data.append("treatment_type", treatment_type_val  );
          form_data.append("department", department_val );
          form_data.append("treatment_year", treatment_year_val );
          form_data.append("treatment_id", treatment_id_val );
          
          ajax_URL = "upload.php",

        
        $('#uploadmsg').html('');
    
        //debugger;
     if (  user_id_val !=0 && ins != 0  ) {
         $('#uploadmsg').html('<br/><img src="images/loading.gif" width="70"  height="70" /><p class="text-info"> جاري تحميل البيانات </p>');
          $.ajax({
            cache: false,
            type: "POST",
            dataType: "text",
            contentType: false,
				    processData: false,
            url: ajax_URL,
            data: form_data,
            error: function () {
              //debugger;
                
              $('#uploadmsg').html('خطأ في تحميل البيانات');
            },
            success: function (result) {
              //debugger;
            
              $("#uploadmsg").html(result);
              complete:
                return true;
            }
    
          });
      } 
      $(this).val('');
    });

    

});