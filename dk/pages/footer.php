<!---------------- Share ----------------->
<?php $actual_link = (isset($_SERVER['HTTPS']) ? "https" : "http")."://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>

<div class="ssk-sticky ssk-left ssk-center ssk-lg">
    <a href="https://www.facebook.com/sharer/sharer.php?u=<?php  echo $actual_link;  ?>" class="ssk ssk-facebook" title="شارك عبر الفيسبوك"></a>
    <a href="https://twitter.com/home?status=<?php echo $actual_link; ?>" class="ssk ssk-twitter" title="شارك عبر تويتر"></a>
    <a href="https://plus.google.com/share?url=<?php echo $actual_link ; ?>" class="ssk ssk-google-plus" title="شارك عبر جوجل بلس"></a>
    <a href="mailto:?" class="ssk ssk-email" title="شارك عبر البريد الالكتروني"></a>
<!--
    <a href="https://www.facebook.com/dialog/send?app_id=673798652822430&link=<?php echo $actual_link; ?>&redirect_uri=<?php echo $actual_link; ?>&display=popup" class="ssk ssk-fbm" title="شارك عبر ماسنجر الفيسبوك"><img src="../img/icons/fbm.png" height="28" width="28" /></a>-->
</div>
<!--------- Footer ------------------>
<footer>
    <div class="container">



        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                <div id="links" class="pull-right">

                    <ul>
                        <h4 style="margin-top:0; margin-right:-15px;color:#000;font-weight:600;border-bottom:3px double #fff; width:130px;padding-bottom:8px;">أخبار</h4>
                        <li>
                            <a href="../pages/jobs.php" target="_blank"> أخبار الوظائف</a>
                        </li>

                        <li><a href="../pages/news.php" target="_blank">أخبار الشركة</a></li>


                    </ul>
                </div>
            </div>

            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                <div id="links" class="pull-right">

                    <ul>
                        <h4 style="margin-top:0; margin-right:-15px;color:#000;font-weight:600;border-bottom:3px double #fff; width:130px;padding-bottom:8px;">خدمات الشركة</h4>
                        <li><a href="3omla.php">خدمة العملاء</a></li>
                        <li><a target="_blank" href="../fatora/">الفواتير</a></li>
                        <li><a target="_blank" href="../reads/">تسجيل قراءة العداد</a></li>
                        <li><a href="shakwa.php"> الشكاوى</a></li>
                        <li><a href="monaqsa.php"> المناقصات</a></li>
                        <li><a href="layha.php"> لائحة العقود والمشتريات</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                <div id="links" class="pull-right">

                    <ul>
                        <h4 style="margin-top:0; margin-right:-15px;color:#000;font-weight:600;border-bottom:3px double #fff; width:130px;padding-bottom:8px;">عن الشركة</h4>
                        <li><a href="nabza.php">نبذة عن الشركة</a></li>
                        <li><a href="ingazat.php">انجازات الشركة</a></li>
                        <li><a href="ansheta.php">أنشطة الشركة</a></li>
                        <li><a href="nozom.php">مركز المعلومات</a></li>
                        <li><a href="labs.php">المعامل</a></li>
                        <li><a href="training.php">مركز التدريب</a></li>
                        <li><a href="integrity.php">دعم النزاهة</a></li>


                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                <div id="links" class="pull-right">

                    <ul>
                        <h4 style="margin-top:0; margin-right:-15px;color:#000;font-weight:600;border-bottom:3px double #fff; width:130px;padding-bottom:8px;">روابط تهمك</h4>
                        <li>
                            <a href="http://www.hcww.com.eg/" target="_blank">الشركة القابضة لمياه الشرب والصرف الصحي</a>
                        </li>

                        <li><a href="http://www.dakahliya.gov.eg/" target="_blank">محافظة الدقهلية</a></li>


                    </ul>
                </div>

            </div>




        </div>
        <hr/>
        <div class="row">

            <div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-12 col-xs-12">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 social text-center">
                        <a href="https://bit.ly/3fR4LIy" target="_blank" ><span class="label">صفحتنا الرسمية على الفيسبوك</span><i class="fab fa-facebook-f"></i></a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-12 col-xs-12 text-center rights">
                        <p class="text-center">جميع الحقوق محفوظة &copy; <a href="http://www.dkwasc.com.eg">شركة مياه الشرب والصرف الصحي بالدقهلية </a>  <?php echo date("Y"); ?></p>
                    </div>
                </div>
            </div>






        </div>

        <a id="back-to-top" href="#" class="btn btn-primary back-to-top"><span class="glyphicon glyphicon-chevron-up"></span></a>

    </div>

</footer>
<script src="../js/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>



<script>
    $(document).ready(function() {
        $(window).scroll(function() {
            if ($(this).scrollTop() > 50) {
                $('#back-to-top').fadeIn();
            } else {
                $('#back-to-top').fadeOut(100);
            }
        });
        // scroll body to 0px on click
        $('#back-to-top').click(function() {
            $('body,html').animate({
                scrollTop: 0
            }, 800);
            return false;
        });



    });

</script>


<script src="../js/bootstrap.min.js?<?php echo md5_file('../js/bootstrap.min.js'); ?>"></script>
<script src="../js/lightbox.min.js"></script>
<script src="../js/social-share-kit.min.js"></script>
<script src="../js/bootstrap-dropdownhover.min.js"></script>
<script src="../js/script.js?<?php echo md5_file('../js/script.js'); ?>"></script>
<script type="text/javascript">
     SocialShareKit.init();

</script>


    <!--Start of Chat Script-->
    <script type = "text/javascript" >
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
<script>
    var app = angular.module('myApp', []);
    app.controller('areasCtrl', function($scope, $http) {
        $http.get("areas_contact.php")
            .then(function(response) {
                $scope.names = response.data.records;


                $scope.update = function() {
                    console.log($scope.names);
                }



            });
    });

</script>






</body>

</html>
