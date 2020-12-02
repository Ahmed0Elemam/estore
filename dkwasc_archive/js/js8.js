$(function () {
 

    $(".delete_only_g").click(function() {

      var form_data = new FormData();
      var ins = document.getElementById('files_g').files.length;
      var user_id_val =  $('#user').val();
      var treatment_type_val =  $('#treatment_type').val();
      var department_val =  $('#department').val();
      var treatment_year_val =  $('#treatment_year').val();
      var treatment_id_val =  $('#treatment_id').val();
      var file_val =  $(this).parent().find("li").text();
      for (var x = 0; x < ins; x++) {
        form_data.append("files_g[]", document.getElementById('files_g').files[x]);
      }

      form_data.append("user", user_id_val );
      form_data.append("treatment_type", treatment_type_val  );
      form_data.append("department", department_val );
      form_data.append("treatment_year", treatment_year_val );
      form_data.append("treatment_id", treatment_id_val );
      form_data.append("file_name", file_val );
      
      ajax_URL = "delete_one_g.php",

    
    $('#delete_msg').html('');

    //debugger;
 if (  user_id_val !=0   ) {
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