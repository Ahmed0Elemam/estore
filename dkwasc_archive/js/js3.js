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
  

 var letter_no = GetURLParameter('letter_no');
 var user_id = GetURLParameter('user_id');

 


    $("#move2").click(function () {

      var letter_no_val  = letter_no;
      var notes_val = $('#notes').val();
      var user_id_val = user_id;
          ajax_URL = "move2.php",
          dataString = 'letter' + letter_no_val +  '&notes' + notes_val + '&user_id'  + user_id_val ;
        
        $('#Info2').html('');
    
        //debugger;
     if ( letter_no_val !=0 && notes_val != ''  ) {


      
         $('#Info2').html('<br/><img src="images/loading.gif" width="70"  height="70" /><p class="text-info"> جاري تحميل البيانات </p>');
          $.ajax({
            cache: false,
            type: "POST",
            dataType: "html",
            url: ajax_URL,
            data: {
              letter: letter_no_val,
              notes: notes_val,
              user_id: user_id_val

            },
            error: function () {
              //debugger;
                
              $('#Info2').html('خطأ في تحميل البيانات');
            },
            success: function (result) {
              //debugger;
            
              $("#Info2").html(result);
              complete:
                return true;
            }
    
          });
      } else {
        $('#notes').css('border', '3px solid #f00');
      }
      });


      $('#files2').change(function(e) {
   
          var form_data = new FormData();
          var ins = document.getElementById('files2').files.length;
          var user_id_val =  document.getElementById('user').value;
          var letter_no_val =  document.getElementById('letter_no').value;

          for (var x = 0; x < ins; x++) {
            form_data.append("files2[]", document.getElementById('files2').files[x]);
           
          }
          form_data.append("user", user_id_val );
          form_data.append("letter_no",letter_no_val);

          
          ajax_URL = "upload2.php",

        
        $('#uploadmsg').html('');
    
        //debugger;
     if (  user_id_val !=0 && ins != 0 && letter_no_val != 0  ) {
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