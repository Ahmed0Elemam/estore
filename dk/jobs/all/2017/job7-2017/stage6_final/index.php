<?php session_start(); 

?>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="author" content="Eng. Ahmed Elemam" />
    <meta name="keywords" content="مياه الشرب , الصرف الصحى , الدقهلية , القابضة , شركة مياه الشرب والصرف الصحى , water , sewer" />
    <meta name="description" content="الموقع الرسمي لشركة مياه الشرب والصرف الصحي بالدقهلية" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta property="og:image" content="http://www.dkwasc.com.eg/jobs/images/logo.png" />
    <meta property="og:type"   content="website" /> 
    <meta property="og:url"    content="dkwasc.com.eg" /> 
    <meta property="og:title"  content="النتيجة النهائية لوظيفة عامل حفر وتسليك وتطهير اعلان رقم 7 لسنة 2017 | شركة مياه الشرب والصرف الصحى بالدقهلية" /> 
    <meta property="og:description"  content="الموقع الرسمي لشركة مياه الشرب والصرف الصحي بالدقهلية" /> 
    <meta property="fb:app_id"  content="673798652822430" /> 
    
    <title>النتيجة النهائية لوظيفة عامل حفر وتسليك وتطهير اعلان رقم 7 لسنة 2017 | شركة مياه الشرب والصرف الصحى بالدقهلية</title>
    <link rel="SHORTCUT ICON" href="../img/icon.gif" type="image/x-icon" />
    <link rel="stylesheet" href="../css/bootstrap.min.css" />
    <link rel="stylesheet" href="../css/bootstrap-rtl.min.css" />
    <link rel="stylesheet" href="../css/font-awesome.css" />
    <link href="../css/social-share-kit.css" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Cairo:400,600,700&amp;subset=arabic" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="../css/style.css?<?php echo md5_file('../css/style.css'); ?>" />
</head>


<body>
    <div class="container text-center">

        <div class="logo">
            <div class="row">
                <div class="col-md-6 col-md-offset-3 col-xs-12">
                    <div class="row">

                        <div class="col-md-2">
                            <img src="../img/logo.png" width="100" />
                        </div>
                        <div class="col-md-10">
                            <div class="content">
                                <h4>الشركة القابضة لمياه الشرب والصرف الصحي</h4>
                                <h4>شركة مياه الشرب والصرف الصحي بالدقهلية</h4>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="all">
            <div class="header">
                <h3>
                    النتيجة النهائية للمتقدمين المستوفين لشروط الاعلان رقم (7) لسنة 2017
                </h3>
                <h4>
                    وظيفة عامل حفر وتسليك وتطهير

                </h4>
            </div>


            <form action="result.php" method="GET">

                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <input class="form-control" type="text" id="q" name="entered" size="50" placeholder="الاسـم" required/>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        <button width="100%" class="btn btn-primary" type="submit" id="submit"><i class="fa fa-search" aria-hidden="true"></i> بحث</button>
                    </div>
                </div>
            </form>

        </div>
        <!---------------- Share ----------------->
        <?php $actual_link = (isset($_SERVER['HTTPS']) ? "https" : "http")."://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>

        <div class="ssk-sticky ssk-left ssk-center ssk-lg">
            <a href="https://www.facebook.com/sharer/sharer.php?u=<?php  echo $actual_link;  ?>" class="ssk ssk-facebook" title="شارك عبر الفيسبوك"></a>
            <a href="https://twitter.com/home?status=<?php echo $actual_link; ?>" class="ssk ssk-twitter" title="شارك عبر تويتر"></a>
            <a href="https://plus.google.com/share?url=<?php echo $actual_link ; ?>" class="ssk ssk-google-plus" title="شارك عبر جوجل بلس"></a>
            <a href="mailto:?" class="ssk ssk-email" title="شارك عبر البريد الالكتروني"></a>
        </div>
        <script src="../js/social-share-kit.min.js"></script>


        <script type="text/javascript">
            SocialShareKit.init();

        </script>

        <div id="footer">
            <a class="btn btn-success" href='http://www.dkwasc.com.eg'><i class="fa fa-home" aria-hidden="true"></i> الصفحة الرئيسية للشركة  </a>
            <br/>
            <br/>
            <p>جميع حقوق الطبع محفوظة - شركة مياه الشرب والصرف الصحي بالدقهلية © 2017</p>
        </div>
    </div>
</body>

</html>
