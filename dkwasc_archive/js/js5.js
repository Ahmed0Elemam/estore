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

 var musadqa_id = GetURLParameter('musadqa_id');
 var user_id = GetURLParameter('user_id');

 
//window.history.replaceState("", "", 'نظام_الأرشفة_الالكترونية_للملفات_ادارة_تكنولوجيا_المعلومات');


$("#move3").click(function () {

      var musadqa_id_val  = musadqa_id;
      var notes_val = $('#notes').val();
      var user_id_val = user_id;
          ajax_URL = "move3.php",
          dataString = 'musadqa' + musadqa_id_val +  '&notes' + notes_val + '&user_id'  + user_id_val ;
        
        $('#Info3').html('');
    
        //debugger;
     if ( musadqa_id_val !=0 && notes_val != ''  ) {
      
         $('#Info3').html('<br/><img src="images/loading.gif" width="70"  height="70" /><p class="text-info"> جاري تحميل البيانات </p>');
          $.ajax({
            cache: false,
            type: "POST",
            dataType: "html",
            url: ajax_URL,
            data: {
              musadqa: musadqa_id_val,
              notes: notes_val,
              user_id: user_id_val

            },
            error: function () {
              //debugger;
                
              $('#Info3').html('خطأ في تحميل البيانات');
            },
            success: function (result) {
              //debugger;
            
              $("#Info3").html(result);
              complete:
                return true;
            }
    
          });
      } else {
        $('#notes').css('border', '3px solid #f00');
      }
      });


      $('#files3').change(function(e) {
   
          var form_data = new FormData();
          var ins = document.getElementById('files3').files.length;
          var user_id_val =  document.getElementById('user').value;
          var musadqa_id_val =  document.getElementById('musadqa_id').value;

          for (var x = 0; x < ins; x++) {
            form_data.append("files3[]", document.getElementById('files3').files[x]);
           
          }
          form_data.append("user", user_id_val );
          form_data.append("musadqa_id",musadqa_id_val);

          
          ajax_URL = "upload3.php",

        
        $('#uploadmsg').html('');
    
        //debugger;
     if (  user_id_val !=0 && ins != 0 && musadqa_id_val != 0  ) {
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