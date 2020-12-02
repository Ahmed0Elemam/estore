<?php session_start();
// Visitors Counter
include "../counter.php";
// online visitors
include "../online_users.php";

include "connect.php";

$arr_area = array(
  1 => "غرب المنصورة",
  2 => "شرق المنصورة",
  3 => "مركز المنصورة",
  4 => "ميت سلسيل",
  5 => "طلخا",
  6 => "نبروه",
  7 => "بلقاس",
  8 => "الجمالية",
  9 => "المطرية",
  10 => "المنزلة",
  11 => "بني عبيد",
  12 => "جمصة",
  13 => "شربين",
  14 => "دكرنس",
  15 => "تمي الأمديد",
  16 => "منية النصر",
  17 => "أجا",
  18 => "ميت غمر",
  19 => "السنبلاوين",
  22 => "الكردي"
);

$stmt0 = $connect->prepare("SELECT district_number FROM bills group by district_number order by district_number ASC ");
$stmt0->execute();
$areas0 = $stmt0->fetchAll();


?>

<html>

<head>
  <meta charset="utf-8">
  <meta name="keywords" content="Dakahlia,Water,Sewer,Company, خدمات شركة مياه الدقهلية,شركة مياه الشرب والصرف الصحي بالدقهلية">
  <meta name="author" content="Eng. Ahmed Elemam">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta property="og:image" content="http://www.dkwasc.com.eg/jobs/images/logo.png" />
  <meta property="og:type" content="website" />
  <meta property="og:url" content="http://www.dkwasc.com.eg/fatora/" />
  <meta property="og:title" content="خدمة الاستعلام عن الفاتورة" />
  <meta property="og:description" content="الموقع الرسمي لشركة مياه الشرب والصرف الصحي بالدقهلية" />
  <meta property="fb:app_id" content="673798652822430" />

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>خدمة الاستعلام عن الفاتورة</title>
  <link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css" />
  <link href="../css/bootstrap-rtl.min.css" rel="stylesheet" type="text/css" />
  <link href="../css/fontawesome-all.min.css" rel="stylesheet" type="text/css" />
  <link href="../css/social-share-kit.css" rel="stylesheet" type="text/css" />
  <link href="css/style.css?<?php echo md5_file("css/style.css"); ?>" rel="stylesheet" type="text/css" />
  <link rel="SHORTCUT ICON" href="graph/icon.gif" type="image/x-icon" />

</head>

<body>
<!--
    <div class="overlay text-center">
      <h2>  جاري اضافة فواتير شهر نوفمبر  ...  تابعونا  </h2>
      <img src="graph/dot.gif"  />
    </div>
-->
  <div class="container text-center">
    <div class="row header">
      <div class="col-md-4">
        <img src="graph/logo.png" class="logo" alt="dakahlia water and sewer company logo" title="شركة مياه الشرب والصرف الصحي بالدقهلية" />
      </div>

      <div class="col-md-4">
        <br />
        <h1 class="text-center block-head">الاستعلام عن الفاتورة</h1>
      </div>

      <div class="col-md-4">
        <img src="graph/fatora.gif" class="fatora" alt="dkwasc bills" />
      </div>
    </div>

    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <div class="form">
          <div class="form-group">
            <div class="row">
              <div class="col-md-2 col-sm-6 col-xs-6">
                <label>المنطقة</label>
              </div>
              <div class="col-md-10 col-sm-6 col-xs-6">
                <select id="area" name="area" class="form-control" required>
                  <option value="0">الرجاء اختيار المنطقة</option>
                  <?php
                  foreach ($areas0 as $area) { ?>
                    <option value="<?php echo $area['district_number']; ?>">
                      <?php echo $arr_area[intval($area['district_number'])]; ?>
                    </option>
                  <?php }   ?>
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
                <input id="name" name="name" type="text" class="form-control" placeholder="أدخل اسم المشترك كما بالفاتورة" required />
                <div class="alert alert-danger custom-alert"> الرجاء ادخال اسم المشترك كما بالفاتورة </div>
              </div>


            </div>
          </div>

          <div class="form-group">
            <div class="row">
              <div class="col-md-4">
                <div class="row">
                  <div class="col-md-6 col-sm-6 col-xs-6">
                    <label>الفرع </label>
                  </div>
                  <div class="col-md-6 col-sm-6 col-xs-6">
                    <input maxlength="2" id="branch" name="branch" type="text" class="form-control" placeholder="رقم الفرع" required />
                    <div class="alert alert-danger custom-alert"> الرجاء ادخال رقم الفرع </div>
                  </div>

                </div>
              </div>
              <div class="col-md-4">
                <div class="row">
                  <div class="col-md-6 col-sm-6 col-xs-6">
                    <label>المجموعة </label>
                  </div>
                  <div class="col-md-6 col-sm-6 col-xs-6">
                    <input max="2" id="group" name="group" type="text" class="form-control" placeholder="رقم المجموعة" required />
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
                    <input id="account" name="account" type="text" class="form-control" placeholder="رقم الحساب" required maxlength="6" />
                    <div class="alert alert-danger custom-alert"> الرجاء ادخال رقم الحساب </div>
                  </div>

                </div>
              </div>
            </div>
          </div>
          <br />
          <button id="view" style="width:35%;" type="submit" value="بحث" class="btn btn-primary btn-lg"><i class="fa fa-search" aria-hidden="true"></i> بحث</button>

          <div class="form-group" id="CustomerInfo"></div>

        </div>



      </div>
    </div>

    <hr />

    <a class="btn btn-success" href="../index.php"><i class="fa fa-home" aria-hidden="true"></i> الرئيسية </a>
    <a class="btn btn-success" href="../reads/"><i class="fa fa-paper-plane"></i> تسجيل قراءة العداد </a>



    <br />
    <br />
    <footer>
      <img src="graph/billing.png" alt="billing system" width="24%" style="margin-bottom:10px" />
      <p> جميع الحقوق محفوظة &copy; شركة مياه الشرب والصرف الصحى بالدقهلية <?php echo date("Y"); ?></p>

    </footer>
    <!---------------- Share ----------------->
    <?php $actual_link = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST] $_SERVER[REQUEST_URI]"; ?>

    <div class="ssk-sticky ssk-left ssk-center ssk-lg">
      <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $actual_link;  ?>" class="ssk ssk-facebook" title="شارك عبر الفيسبوك"></a>
      <a href="https://twitter.com/home?status=<?php echo $actual_link; ?>" class="ssk ssk-twitter" title="شارك عبر تويتر"></a>
      <a href="https://plus.google.com/share?url=<?php echo $actual_link; ?>" class="ssk ssk-google-plus" title="شارك عبر جوجل بلس"></a>
      <a href="mailto:?" class="ssk ssk-email" title="شارك عبر البريد الالكتروني"></a>

    </div>
  </div>
  <script language="javascript" src="../js/jquery.min.js" type="text/javascript"></script>
  <script language="javascript" src="../js/bootstrap.min.js" type="text/javascript"></script>
  <script src="../js/social-share-kit.min.js"></script>
  <script src="js/js.js?<?php echo md5_file('js/js.js'); ?>"></script>

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