
$(document).ready(function(){
  
    // Button of info page
    $("#btn_info").click(function () {
       
      ajax_URL = "building_info.php",
       $('#ResultInfo').html('<img src="img/loading.gif" width="70"  height="70" /><p class="text-info"> جاري التحميل  </p>');
        
        
        $.ajax({
        type: "POST",
        dataType: "html",
        url: ajax_URL,     
        cache: false,       
        error: function () {
          //debugger;
          $('#ResultInfo').html('خطأ في التحميل ');
        },
        success: function (response) {
           
          //debugger;
          //$("#CustomerInfo").html(response);
            // $('#CustomerInfo').html('<p class="text-info"> ghghgg </p>');
            $('#ResultInfo').html(response);
            
          complete:
             
            return true;
            
        }

      });
      
});

    // ********************************************************************************************************
    
    // Button of Search page

$("#btn_search").click(function () {
       
      ajax_URL = "building_search.php",
       $('#ResultInfo').html('<img src="img/loading.gif" width="70"  height="70" /><p class="text-info"> جاري التحميل  </p>');
        
        
        $.ajax({
        type: "POST",
        dataType: "html",
        url: ajax_URL,     
        cache: false,       
        error: function () {
          //debugger;
          $('#ResultInfo').html('خطأ في التحميل ');
        },
        success: function (response) {
           
          //debugger;
          //$("#CustomerInfo").html(response);
            $('#ResultInfo').html(response);
            
          complete:
             
            return true;
            
        }

      });
      
});
    

    // ********************************************************************************************************
    
    // Button of inspection page

$("#btn_inspection").click(function () {
       
      ajax_URL = "inspection_report.php",
       $('#ResultInfo').html('<img src="img/loading.gif" width="70"  height="70" /><p class="text-info"> جاري التحميل  </p>');
        
        
        $.ajax({
        type: "POST",
        dataType: "html",
        url: ajax_URL,     
        cache: false,       
        error: function () {
          //debugger;
          $('#ResultInfo').html('خطأ في التحميل ');
        },
        success: function (response) {
           
          //debugger;
          //$("#CustomerInfo").html(response);
            $('#ResultInfo').html(response);
            
          complete:
             
            return true;
            
        }

      });
      
});
    
    // ********************************************************************************************************
    
    // Button of Sample page

$("#sample").click(function () {
       
      ajax_URL = "sample.php",
       $('#ResultInfo').html('<img src="img/loading.gif" width="70"  height="70" /><p class="text-info"> جاري التحميل  </p>');
        
        
        $.ajax({
        type: "POST",
        dataType: "html",
        url: ajax_URL,     
        cache: false,       
        error: function () {
          //debugger;
          $('#ResultInfo').html('خطأ في التحميل ');
        },
        success: function (response) {
           
          //debugger;
          //$("#CustomerInfo").html(response);
            $('#ResultInfo').html(response);
            
          complete:
             
            return true;
            
        }

      });
      
});
    
    
    // ********************************************************************************************************
    
    // Button of a3baa page

$("#btn_a3baa").click(function () {
       
      ajax_URL = "a3baa.php",
       $('#ResultInfo').html('<img src="img/loading.gif" width="70"  height="70" /><p class="text-info"> جاري التحميل  </p>');
        
        
        $.ajax({
        type: "POST",
        dataType: "html",
        url: ajax_URL,     
        cache: false,       
        error: function () {
          //debugger;
          $('#ResultInfo').html('خطأ في التحميل ');
        },
        success: function (response) {
           
          //debugger;
          //$("#CustomerInfo").html(response);
            $('#ResultInfo').html(response);
            
          complete:
             
            return true;
            
        }

      });
      
});
    
    // trkhes button
    
$("#btn_trkhes").click(function () {
       
      ajax_URL = "trkhes.php",
       $('#ResultInfo').html('<img src="img/loading.gif" width="70"  height="70" /><p class="text-info"> جاري التحميل  </p>');
        
        
        $.ajax({
        type: "POST",
        dataType: "html",
        url: ajax_URL,     
        cache: false,       
        error: function () {
          //debugger;
          $('#ResultInfo').html('خطأ في التحميل ');
        },
        success: function (response) {
           
          //debugger;
          //$("#CustomerInfo").html(response);
            $('#ResultInfo').html(response);
            
          complete:
             
            return true;
            
        }

      });
      
});
    
    $("#btn_view_bds").click(function () {
       
      ajax_URL = "area_building.php",
       $('#ResultInfo').html('<img src="img/loading.gif" width="70"  height="70" /><p class="text-info"> جاري التحميل  </p>');
        
        
        $.ajax({
        type: "POST",
        dataType: "html",
        url: ajax_URL,     
        cache: false,       
        error: function () {
          //debugger;
          $('#ResultInfo').html('خطأ في التحميل ');
        },
        success: function (response) {
           
          //debugger;
          //$("#CustomerInfo").html(response);
            $('#ResultInfo').html(response);
            
          complete:
             
            return true;
            
        }

      });
      
});

 
 
             
    
});
    

     
     
  