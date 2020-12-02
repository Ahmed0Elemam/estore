<?php
session_start();
include 'connect.php';
include '../../counter.php';
include '../../online_users.php';
if(!isset($_SESSION['user_session']))
{
	header("Location: ../index.php");
}

include_once 'connect.php';

$stmt = $connect->prepare("SELECT * FROM news_users WHERE user_id=:uid");
$stmt->execute(array(":uid"=>$_SESSION['user_session']));
$row=$stmt->fetch(PDO::FETCH_ASSOC);

?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="description" content="شركة مياه الشرب والصرف الصحي بالدقهلية">
        <meta name="keywords" content="Dakahlia,Water,Sewer,Company,شركة مياه الدقهلية,شركة مياه الشرب والصرف الصحي بالدقهلية">
        <meta name="author" content="Eng. Ahmed Elemam">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>أخبار شركة مياه الشرب والصرف الصحي بالدقهلية</title>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/bootstrap-rtl.min.css" rel="stylesheet">
        <link href="css/s.css?<?php echo md5_file('css/s.css') ?>" rel="stylesheet">
        <link href="css/datedropper.min.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Cairo:400,600,700&amp;subset=arabic" rel="stylesheet">
        <link href="css/style.css?<?php echo md5_file('css/style.css') ?>" rel="stylesheet">
        <link href="css/font-awesome.css" rel="stylesheet">
        <link rel="SHORTCUT ICON" href="img/icon.gif" type="image/x-icon" />
    </head>

    <body>
        <div class="container text-center">
     <nav class="navbar navbar-default navbar-fixed-top" style="height:70px">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar" style="margin-top:20px">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#"><img src="img/logo.png" width="60px" height="60px" alt="dakahlia water and sewer company logo" title="شركة مياه الشرب والصرف الصحي بالدقهلية" />
            

            </a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          
          <ul class="nav navbar-nav navbar-left">
            
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
			  <span class="glyphicon glyphicon-user"></span>&nbsp; مرحباً <?php echo $row['user_name']; ?>&nbsp;<span class="caret"></span></a>
              <ul class="dropdown-menu">
                
                <li><a href="../logout.php"><span class="glyphicon glyphicon-log-out"></span>&nbsp;تسجيل خروج</a></li>
              </ul>
            </li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

            <div class="row header">
                
                <div class="col-md-8 col-md-offset-2">

                    <h1 class="text-center block-head">أخبار شركة مياه الشرب والصرف الصحي بالدقهلية</h1>
                </div>

            </div>

            <div class="row">


                <div class="col-md-8 col-md-offset-2">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#photos" aria-controls="photos" role="tab" data-toggle="tab">رفع الصور</a></li>
                        <li role="presentation"><a href="#news" aria-controls="news" role="tab" data-toggle="tab">تفاصيل الخبر</a></li>

                    </ul>
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane fade in active" id="photos">
                            <div class="form">
                                <form enctype="multipart/form-data" action="" method="post">
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-2 col-sm-6 col-xs-6">
                                                <label>التاريخ</label>
                                            </div>
                                            <div class="col-md-10 col-sm-6 col-xs-6">
                                                <input type="text" class="form-control" name="date" id="date" data-lang="ar" data-large-mode="true" data-large-default="true" data-format="j-n-Y"  />
                                                <div class="alert alert-danger custom-alert"> لم يتم اختيار التاريخ </div>
                                            </div>


                                        </div>

                                    </div>
                                    <hr/>

                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-2 col-sm-6 col-xs-6">
                                                <label>الصور</label>
                                            </div>
                                            <div class="col-md-10 col-sm-6 col-xs-6">
                                                <div id="formdiv">



                                                    الصيغ المسموحة فقط "JPEG,PNG,JPG" . حجم الصورة لا يزيد عن 500kb.
                                                    <hr/>
                                                    <div id="filediv"><input name="file[]" type="file" id="file" class="form-control" /></div><br/>

                                                    <input type="button" id="add_more" class="upload" value="اضافة صورة" />
                                                    <input type="submit" value="رفع الصور" name="upload" id="upload" class="upload" />


                                                    <!-------Including PHP Script here------>
                                                    <?php include "upload.php"; ?>


                                                </div>

                                            </div>



                                        </div>

                                    </div>

                                </form>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="news">
                            <div class="form">

                                <div class="form-group">
                                    <div class="row">

                                        <div class="col-md-2 col-sm-6 col-xs-6">
                                            <label>العنوان</label>
                                        </div>
                                        <div class="col-md-10 col-sm-6 col-xs-6">
                                            <input id="title" class="title form-control" type="text" name="title" placeholder="الرجاء ادخال عنوان الخبر" required />

                                            <div class="alert alert-danger custom-alert"> لم يتم ادخال عنوان الخبر </div>
                                        </div>




                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-2 col-sm-6 col-xs-6">
                                            <label>نص الخبر</label>
                                        </div>
                                        <div class="col-md-10 col-sm-6 col-xs-6">
                                            <textarea class="form-control" name="content" id="content" placeholder="الرجاء ادخال نص الخبر" rows="10"></textarea>
                                            <div class="alert alert-danger custom-alert"> الرجاء ادخال نص الخبر </div>
                                        </div>


                                    </div>

                                </div>
                                 <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-2 col-sm-6 col-xs-6">
                                                <label>التاريخ</label>
                                            </div>
                                            <div class="col-md-10 col-sm-6 col-xs-6">
                                                <input type="text" class="form-control" name="date2" id="date2" data-lang="ar" data-large-mode="true" data-large-default="true" data-format="j-n-Y" />
                                                <div class="alert alert-danger custom-alert"> لم يتم اختيار التاريخ </div>
                                            </div>


                                        </div>

                                    </div>


                                <button id="Send" type="submit" value="ارسال الخبر" class="btn btn-primary btn-lg"><i class="fa fa-paper-plane" aria-hidden="true"></i> ارسال الخبر</button>
                                <div id="info"></div>
                            </div>



                        </div>

                    </div>







                </div>
            </div>
        </div>


        <hr/>

        <footer class="text-center">

            <p> حقوق الطبع محفوظة &copy; شركة مياه الشرب والصرف الصحى بالدقهلية 2017</p>

        </footer>



        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/datedropper.min.js"></script>
        <script src="js/script.js?<?php echo md5_file('js/script.js'); ?>"></script>
        <script src="js/js.js?<?php echo md5_file('js/js.js'); ?>"></script>



        <script>
            $('#date').dateDropper();
            $('#date2').dateDropper();
        </script>
    </body>

    </html>
