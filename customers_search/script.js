
$('document').ready(function()
{ 
     /* validation */
	 $("#login-form").validate({
      rules:
	  {
			password: {
			required: true,
			},
			user_name: {
            required: true
            },
	   },
       messages:
	   {
            password:{
                      required: "من فضلك أدخل كلمة المرور"
                     },
            user_name:{ required:"من فضلك أدخل اسم المستخدم"}
       },
	   submitHandler: submitForm	
       });  
	   /* validation */
	   
	   /* login submit */
	   function submitForm()
	   {		
			var data = $("#login-form").serialize();
				
			$.ajax({
				
			type : 'POST',
			url  : 'login_process.php',
			data : data,
			beforeSend: function()
			{	
				$("#error").fadeOut();
				$("#btn-login").html('<span class="glyphicon glyphicon-transfer"></span> &nbsp; ارسال ...');
			},
			success :  function(response)
			   {						
					if(response=="ok"){
									
						$("#btn-login").html('<img src="btn-ajax-loader.gif" /> &nbsp; يتم تسجيل الدخول الآن ...');
						setTimeout(' window.location.href = "name_search"; ',4000);
					}
					else{
									
						$("#error").fadeIn(1000, function(){						
				$("#error").html('<div class="alert alert-danger"> <span class="glyphicon glyphicon-info-sign"></span> &nbsp; '+response+' !</div>');
											$("#btn-login").html('<span class="glyphicon glyphicon-log-in"></span> &nbsp; تسجيل الدخول');
									});
					}
			  }
			});
				return false;
		}
	   /* login submit */
});