
$(document).ready(function(){


  $("#btn_search").click(function () {

    var name_val = $('#name').val();
    var  ajax_URL = "ajax_read.php";

      $('#CustomerInfo').html('<img src="graph/loading.gif" width="70"  height="70" /><p class="text-info"> جاري تحميل البيانات </p>');
       
       
       if (name_val != ' ') {
         
       $.ajax({
       type: "POST",
       dataType: "html",
       url: ajax_URL,

      data: "search="+name_val,    
       cache: false,       
       error: function () {
         //debugger;
         $('#CustomerInfo').html('خطأ في تحميل البيانات');
       },
       success: function (response) {
          
         //debugger;
         $("#CustomerInfo").html(response);


          
         complete:
            
           return true;
           
           
       }

     });
           
       
       } else {
        $('#CustomerInfo').html('لم يتم ادخال الاسم');
       }
      
   
});

    
});
    

     
     
  