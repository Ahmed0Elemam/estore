<footer>

    <div class="style-cut"></div>
  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
        <div id="links">
          <ul>
            <h4 style="margin-top:0; margin-right:-15px;color:#000;font-weight:600">روابط تهمك</h4>
            <li>
              <a href="https://www.hcww.com.eg/" target="_blank">الشركة القابضة لمياه الشرب والصرف الصحي</a>
            </li>
            <li><a href="http://www.dakahliya.gov.eg/" target="_blank">محافظة الدقهلية</a></li>
          </ul>
        </div>

      </div>
      <div class="col-lg-5 col-md-12 col-sm-12 col-xs-12">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 social text-center">
            <a href="https://bit.ly/3fR4LIy" target="_blank" ><span class="label">صفحتنا الرسمية على الفيسبوك</span><i class="fab fa-facebook-f"></i></a>

          </div>
        </div>
          <div class="row" id="apps">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
            <a href="https://goo.gl/iF4ypS" target="_blank" ><img src="img/icons/appstore.png" width="120" height="40" />></a>
            <a href="https://goo.gl/3fpW1a" target="_blank"><img src="img/icons/gapps.png" width="120" height="40"  /></a>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center rights">
            <p style="line-height:1.6" class="text-center">جميع الحقوق محفوظة &copy; <a href="http://www.dkwasc.com.eg">شركة مياه الشرب والصرف الصحي بالدقهلية</a> <?php echo date("Y"); ?></p>
          </div>
        </div>
      </div>



      <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
        <div id='visitors' class="text-center">
          <h4>زوار الموقع</h4>
          <table class="table table-bordered" dir="ltr">
            <tr>
              <th class="text-center">الاجمالي</th>
              <th class="text-center">الآن</th>

            </tr>

            <tr>
              <td class="text-center">
                <?php echo "<span style='font-size:20px;' id='counter'>$counter</span>"; ?>
              </td>
              <td class="text-center">
                <?php echo "<span style='font-size:20px; id='counter'>$count_user_online</span>"; ?>
              </td>

            </tr>

          </table>

        </div>

      </div>

    </div>

  </div>

  <a id="back-to-top" href="#" class="btn btn-primary back-to-top"><span class="glyphicon glyphicon-chevron-up"></span></a>




</footer>



<script src="js/jquery.min.js"></script>

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

<script src="js/bootstrap.min.js?<?php echo md5_file('js/bootstrap.min.js'); ?>"></script>                                                                                
<script src="js/bootstrap-dropdownhover.min.js"></script>                                                                                
<script src="js/script.js?<?php echo md5_file('js/script.js'); ?>"></script>

<!--Start of Chat Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/596ca3db6edc1c10b0346577/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>





</body>

</html>