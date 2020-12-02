<?php




session_start();

if(isset($_SESSION['user_session'])!="")
{
	header("Location: news_panel");
}

?>
    <!DOCTYPE html>
    <html>

    <head>
        <meta charset="utf-8">
        <meta name="description" content="شركة مياه الشرب والصرف الصحي بالدقهلية">
        <meta name="keywords" content="Dakahlia,Water,Sewer,Company,شركة مياه الدقهلية,شركة مياه الشرب والصرف الصحي بالدقهلية">
        <meta name="author" content="Eng. Ahmed Elemam">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>نظام أخبار شركة مياه الشرب والصرف الصحي بالدقهلية</title>
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" media="screen">
        <script type="text/javascript" src="jquery-1.11.3-jquery.min.js"></script>
        <script type="text/javascript" src="validation.min.js"></script>
        <link rel="SHORTCUT ICON" href="graph/icon.gif" type="image/x-icon" />
        <link href="style.css?<?php echo md5_file('style.css');?>" rel="stylesheet" type="text/css" media="screen">
        <script type="text/javascript" src="script.js"></script>

    </head>

    <body>

        <div class="signin-form">

            <div class="container">


                <form class="form-signin text-center" method="post" id="login-form">
                    <img src="graph/logo.png" alt="dakahlia water and sewer company logo" title="شركة مياه الشرب والصرف الصحي بالدقهلية" />

                    <h2 class="form-signin-heading"> نظام أخبار شركة مياه الشرب والصرف الصحي بالدقهلية</h2>
                    <hr />

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

        <script src="bootstrap/js/bootstrap.min.js"></script>

    </body>

    </html>
