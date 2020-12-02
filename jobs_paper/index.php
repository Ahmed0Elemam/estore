<?php


session_start();

if(isset($_SESSION['user_session'])!="")
{
	header("Location: job_paper");
}

?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>تسجيل الدخول الى برنامج الوظائف</title>
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
<script type="text/javascript" src="jquery-1.11.3-jquery.min.js"></script>
<script type="text/javascript" src="validation.min.js"></script>
<link href="https://fonts.googleapis.com/css?family=Cairo:400,600,700,900&amp;subset=arabic" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Amiri:400,700&amp;subset=arabic" rel="stylesheet">
<link href="style.css?<?php echo md5_file('style.css');?>" rel="stylesheet" type="text/css" media="screen">
<script src="bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="script.js?<?php echo md5_file('script.js')?>"></script>
<link rel="SHORTCUT ICON" href="icon.gif" type="image/x-icon" />

</head>

<body>
    
<div class="signin-form">

	<div class="container">
     
        
       <form class="form-signin text-center" method="post" id="login-form">
           <img src="graph/logo.png"  alt="dakahlia water and sewer company logo" title="شركة مياه الشرب والصرف الصحي بالدقهلية" />
      
        <h2 class="form-signin-heading"> برنامج الوظائف</h2><hr />
        
        <div id="error">
        <!-- error will be shown here ! -->
        </div>
        
        <div class="form-group">
        <input type="text" class="form-control" placeholder="اسم المستخدم" name="user_name" id="user_name" />
        <span id="check-e"></span>
        </div>
        
        <div class="form-group">
        <input type="password" class="form-control" placeholder="كلمة المرور" name="password" id="password" />
        </div>
       
     	<hr />
        
        <div class="form-group">
            <button type="submit" class="btn btn-default" name="btn-login" id="btn-login">
    		<span class="glyphicon glyphicon-log-in"></span> &nbsp; تسجيل دخول
			</button> 
        </div>  
      
      </form>

    </div>
    
</div>
    


</body>
</html>