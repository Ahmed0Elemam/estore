$(function () {
 

    $("#delete_only_2").click(function() {

      var form_data = new FormData();
      var ins = document.getElementById('files2').files.length;
      var user_id_val =  $('#user').val();
      var letter_no_val =  $('#letter_no').val();
      var file_val =  $(this).parent().find("li").text();
      for (var x = 0; x < ins; x++) {
        form_data.append("files2[]", document.getElementById('files2').files[x]);
      }

      form_data.append("user", user_id_val );
      form_data.append("letter_no", letter_no_val  );
      form_data.append("file_name", file_val );
      
      ajax_URL = "delete_one2.php",

    
    $('#delete_msg').html('');

    //debugger;
 if (  user_id_val !=0 && letter_no_val !=0  ) {
     $('#delete_msg').html('<br/><img src="images/loading.gif" width="70"  height="70" /><p class="text-info"> جاري تحميل البيانات </p>');
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
            
          $('#delete_msg').html('خطأ في تحميل البيانات');
        },
        success: function (result) {
          //debugger;
        
          $('#delete_msg').html(result);
          
          complete:

            return true;
        }

      });
  } 
  $(this).parent("div").fadeOut(300);
  

  
    
});


});