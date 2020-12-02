<?php
session_start();
include 'connect.php';
include '../counter.php';
include '../online_users.php';

?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="description" content="الموقع الرسمي لشركة مياه الشرب والصرف الصحي بالدقهلية">
        <meta name="keywords" content="Dakahlia,Water,Sewer,Company, خدمات شركة مياه الدقهلية,شركة مياه الشرب والصرف الصحي بالدقهلية">
        <meta name="author" content="Eng. Ahmed Elemam">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta property="og:image" content="http://www.dkwasc.com.eg/jobs/images/logo.png" />
        <meta property="og:type" content="website" />
        <meta property="og:url" content="http://www.dkwasc.com.eg/reads/" />
        <meta property="og:title" content="خدمة تسجيل قراءة العداد" />
        <meta property="og:description" content="الموقع الرسمي لشركة مياه الشرب والصرف الصحي بالدقهلية" />
        <meta property="fb:app_id" content="673798652822430" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>تسجيل قراءة العداد | شركة مياه الشرب والصرف الصحي بالدقهلية</title>
        <link href="../css/bootstrap.min.css" rel="stylesheet">
        <link href="../css/bootstrap-rtl.min.css" rel="stylesheet">
        <link href="../css/social-share-kit.css" rel="stylesheet">
        <link href="../css/fontawesome-all.min.css" rel="stylesheet">
        <link href="css/style.css?<?php echo md5_file('css/style.css') ?>" rel="stylesheet">
        <link rel="SHORTCUT ICON" href="img/icon.gif" type="image/x-icon" />
        <script src="../js/jquery.min.js"></script>
        <script src="../js/bootstrap.min.js"></script>
        <script src="../js/social-share-kit.min.js"></script>
        <script src="js/script.js?<?php echo md5_file('js/script.js'); ?>"></script>
        <script src="js/js2.js?<?php echo md5_file('js/js2.js'); ?>"></script>
    </head>

    <body>
        <div class="container text-center">

            <div class="row header">
                <div class="col-md-4">
                    <img src="img/logo.png" class="logo" alt="dakahlia water and sewer company logo" title="شركة مياه الشرب والصرف الصحي بالدقهلية" />
                </div>
                <div class="col-md-4">
                    <br/>
                    <h1 class="text-center block-head">تسجيل قراءة العداد</h1>
                </div>
                <div class="col-md-4">
                    <img src="img/wcounter.png" class="wc" />
                </div>
            </div>
<?php
date_default_timezone_set('africa/cairo');
$today = date("Y-m-d H:i:s"); 
$next_month = date('m', strtotime('+1 month'));
$start_date = date("Y-m-15 00:00:00"); 
$end_date = date("Y-m-26 00:00:00"); 

if($today >= $start_date and $today <= $end_date ){
?>
            <div id="open">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">

                    <div class="alert alert-danger inst">
                        <ul class="text-right" style="line-height:1.7;">
                            <h4><strong>تعليمات هامة:</strong></h4>
                            <li>ميعاد تسجيل القراءات من اليوم الخامس عشر ( 15 ) إلى اليوم الخامس والعشرون ( 25 ) من كل شهر.</li>
                            <li>برجاء مراعاة تسجيل القراءة الفعلية الصحيحة من واقع قراءة العداد على الطبيعة.</li>
                            <li>يراعى أنه سيتم مراجعة القراءة المسجلة عن طريق العميل ومدى مطابقتها للطبيعة.</li>
                            <li>في حالة وجود فرق ملحوظ بين القراءة المسجلة بمعرفة العميل على الموقع الالكتروني والقراءة الفعلية على الطبيعة سيتم اتخاذ الاجراءات القانونية المترتبة على ذلك.</li>

                        </ul>

                    </div>
                </div>
            </div>
            <div class="row">

                <div class="col-md-8 col-md-offset-2">
                    <div class="form">
                        <?php
             //select all areas
      $stmt=$connect->prepare("SELECT * FROM areas");
      $stmt->execute();
      $areas = $stmt->fetchAll();
            ?>
                            <div class="form-group">
                                <div class="row">

                                    <div class="col-md-2 col-sm-6 col-xs-6">
                                        <label>المنطقة</label>
                                    </div>
                                    <div class="col-md-10 col-sm-6 col-xs-6">
                                        <select name="area" class="form-control" id="area" dir="rtl" lang="ar" xml:lang="ar">
                      <option value="0" >الرجاء اختيار المنطقة</option>
                      <?php foreach ($areas as $area){?>
                        <option value="<?php echo $area['id'];?>">
                          <?php echo $area['ar_name'];?>
                        </option>
                        <?php } 	?>
                    </select>
                                        <div class="alert alert-danger custom-alert"> لم يتم اختيار المنطقة </div>
                                    </div>

                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-2 col-sm-6 col-xs-6">
                                        <label>اسم المشترك كما بالفاتورة</label>
                                    </div>
                                    <div class="col-md-10 col-sm-6 col-xs-6">
                                        <input id="name" class="name form-control" type="text" name="name" placeholder="الرجاء ادخال اسم المشترك كما بالفاتورة" required />
                                        <div class="alert alert-danger custom-alert"> الرجاء ادخال اسم المشترك كما هو بالفاتورة </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-2 col-sm-6 col-xs-6">
                                        <label>الرقم القومي</label>
                                    </div>
                                    <div class="col-md-10 col-sm-6 col-xs-6">
                                        <input id="nid" class="nid form-control" maxlength="14" type="text" name="n_id" placeholder="الرجاء ادخال رقمك القومي 14 رقم كما بالبطاقة" required />
                                        <div class="alert alert-danger custom-alert"> الرجاء ادخال الرقم القومي 14 رقم </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-2 col-sm-6 col-xs-6">
                                        <label>رقم الموبايل</label>
                                    </div>
                                    <div class="col-md-10 col-sm-6 col-xs-6">
                                        <input id="mob" class="mob form-control" maxlength="11" type="text" name="mob" placeholder="الرجاء ادخال رقم موبايلك 11 رقم" required />
                                        <div class="alert alert-danger custom-alert"> الرجاء ادخال رقم الموبايل 11 رقم </div>
                                    </div>


                                </div>

                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-2 col-sm-6 col-xs-6">
                                        <label>رقم التليفون الأرضي</label>
                                    </div>
                                    <div class="col-md-10 col-sm-6 col-xs-6">
                                        <input id="land" class="land form-control" maxlength="7" type="text" name="land" placeholder="الرجاء ادخال رقم التليفون الأرضي 7 أرقام بدون كود المحافظة  ( ان وجد )" required />
                                        <div class="alert alert-danger custom-alert"> الرجاء ادخال رقم التليفون الأرضي 7 أرقام بدون كود المحافظة </div>
                                    </div>


                                </div>

                            </div>

                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="row">
                                            <div class="col-md-6 col-sm-6 col-xs-6">
                                                <label> الفرع </label>
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-xs-6">
                                                <input name="branch" id="branch" type="text" class="form-control" required placeholder="رقم الفرع" maxlength="2" />
                                                <div class="alert alert-danger custom-alert"> الرجاء ادخال رقم الفرع </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="row">
                                            <div class="col-md-6 col-sm-6 col-xs-6">
                                                <label>  المجموعة </label>
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-xs-6">
                                                <input name="group" id="group" type="text" class="form-control" required placeholder="رقم المجموعة" maxlength="2" />
                                                <div class="alert alert-danger custom-alert"> الرجاء ادخال رقم المجموعة </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="row">
                                            <div class="col-md-6 col-sm-6 col-xs-6">
                                                <label>رقم الحساب </label>
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-xs-6">
                                                <input name="account" id="account" type="text" class="form-control" required placeholder="رقم الحساب" maxlength="6" />
                                                <div class="alert alert-danger custom-alert"> الرجاء ادخال رقم الحساب </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>



                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-2 col-sm-6 col-xs-6">
                                        <label>القراءة الحالية</label>
                                    </div>
                                    <div class="col-md-10 col-sm-6 col-xs-6">
                                        <input type="text" id="current_read" name="current_read" class="form-control" placeholder="ادخل قراءة العداد الحالية" required maxlength="5" />
                                        <div class="alert alert-danger custom-alert"> الرجاء ادخال قراءة العداد الحالية </div>
                                    </div>


                                </div>

                            </div>
                            <div class="form-group" id="ReadingInfo">
                                <input type="hidden" id="hiReading" name="hiReading" value="1" />
                                <input type="hidden" id="loReading" name="loReading" value="1" />
                            </div>



                            <button id="ReadingSend" type="submit" value="ارسال القراءة" class="btn btn-primary btn-lg"><i class="fa fa-paper-plane" aria-hidden="true"></i> ارسال القراءة</button>
                    </div>
                </div>
            </div>

 </div>
                      <?php }  else if ($today > $end_date) { ?>
 <div class="alert alert-danger closed" id="closed">
        <h4 style="line-height:1.5;">
          <strong>
  ميعاد تسجيل القراءات يبدأ من اليوم الخامس عشر ( 15 ) حتي اليوم الخامس والعشرون ( 25 ) من كل شهر 
  </strong>
            

        </h4>
    
          <hr/>

          <h3>باقي من الزمن</h3>
  
           
            <div class="row" id="counter"></div>
   

      </div>

      <?php } else if ($today < $start_date) { ?>
        <div class="alert alert-danger closed" id="closed2">
        <h4 style="line-height:1.5;">
          <strong>
  ميعاد تسجيل القراءات يبدأ من اليوم الخامس عشر ( 15 ) حتي اليوم الخامس والعشرون ( 25 ) من كل شهر 
  </strong>
            

        </h4>
    
          <hr/>

          <h3>باقي من الزمن</h3>
  
           
            <div class="row" id="counter2"></div>
   

      </div>

     <?php }?>


            <hr/>


            <a class="btn btn-success" href="../index.php"><i class="fa fa-home" aria-hidden="true"></i> الرئيسية </a>
            <a class="btn btn-success" href="../fatora/"><i class="fa fa-search" aria-hidden="true"></i> الاستعلام عن الفاتورة </a>

            <br/>
            <br/>
            <footer>
            <img src="img/billing.png" alt="billing system" width="24%" style="margin-bottom:10px" />
                <p> حقوق الطبع محفوظة &copy; شركة مياه الشرب والصرف الصحى بالدقهلية <?php echo date("Y"); ?></p>

            </footer>
        </div>


       
        <!---------------- Share ----------------->
        <?php $actual_link = (isset($_SERVER['HTTPS']) ? "https" : "http")."://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>

        <div class="ssk-sticky ssk-left ssk-center ssk-lg">
            <a href="https://www.facebook.com/sharer/sharer.php?u=<?php  echo $actual_link;  ?>" class="ssk ssk-facebook" title="شارك عبر الفيسبوك"></a>
            <a href="https://twitter.com/home?status=<?php echo $actual_link; ?>" class="ssk ssk-twitter" title="شارك عبر تويتر"></a>
            <a href="https://plus.google.com/share?url=<?php echo $actual_link ; ?>" class="ssk ssk-google-plus" title="شارك عبر جوجل بلس"></a>
            <a href="mailto:?" class="ssk ssk-email" title="شارك عبر البريد الالكتروني"></a>

        </div>

      

        

        <script type="text/javascript">
            SocialShareKit.init();

        </script>
        <!--Start of Chat Script-->
        <script type="text/javascript">
            var Tawk_API = Tawk_API || {},
                Tawk_LoadStart = new Date();
            (function() {
                var s1 = document.createElement("script"),
                    s0 = document.getElementsByTagName("script")[0];
                s1.async = true;
                s1.src = 'https://embed.tawk.to/596ca3db6edc1c10b0346577/default';
                s1.charset = 'UTF-8';
                s1.setAttribute('crossorigin', '*');
                s0.parentNode.insertBefore(s1, s0);
            })();

        </script>
    </body>

    </html>
