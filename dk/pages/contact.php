<?php
$title = "تواصل معنا | شركة مياه الشرب والصرف الصحي بالدقهلية";
$pageName = "contact";
include "header.php"; ?>
<div id="contact" class="container">
  <div class="well well-lg">
    <div class="panel panel-primary">
      <div class="panel-heading">
        كيف تصل الينا
      </div>
      <div class="panel-body">
        <div class="row">

          <div class="col-md-6 text-center">
            <p class="text-primary"><strong><i class="fa fa-map-marker" aria-hidden="true"></i> العنوان</strong></p>
            <p style="text-indent:20px" class="text-warning">الديوان العام للشركة</p>
            <p style="text-indent:20px"> المجزر- نهاية عمارات العبور - الطريق السريع </p>

            <p><strong><i class="fa fa-clock" aria-hidden="true"></i>  ساعات العمل الرسمية</strong> </p>

            <p style="text-indent:20px"><strong class="text-warning">الأحد - الخميس:</strong>

                8:00
          
          ص -


                3:00
          م

            </p>

            <p style="text-indent:20px"><strong class="text-warning">الجمعة - السبت :</strong> أجازة أسبوعية

            </p>


            <p><strong><i class="fa fa-fax" aria-hidden="true"></i> فاكس</strong></p>

            <p style="text-indent:20px" class="ar">2219530 (050)</p>

          </div>
          <div class="col-md-6">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3418.914101675347!2d31.3557777151449!3d31.02864278153501!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14f79c28e470ec9b%3A0xd566c8ec30afeb8d!2sAdministration+Drinking+Water+Company%2C+Mansoura!5e0!3m2!1sen!2s!4v1501053614664" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
          </div>
        </div>
      </div>
    </div>


        <div class="panel panel-primary">
          <div class="panel-heading">
            خدمة الخط الساخن
          </div>
          <div class="panel-body">
            <h3 class="text-center">الآن يمكنكم تبليغ شكواكم أو تقديم مقترحاتكم لنا من خلال خدمة الخط الساخن بالاتصال على الرقم المجاني <span style="color:red;">125</span> من أي تليفون أرضي وذلك لخدمتكم على مدار ال 24 ساعة طوال أيام الأسبوع.</h3>
          </div>
        </div>

        <div class="panel panel-primary">
          <div class="panel-heading">
            خدمة التواصل الاجتماعي

          </div>
          <div class="panel-body text-right">
            <ul class="list-unstyled">
              <li>
                <a target="_blank" href="https://bit.ly/3fR4LIy"><i class="fab fa-facebook-square" aria-hidden="true"></i> الصفحة الرسمية على الفيسبوك </a>
              </li>
              <li>
              </li>
            </ul>
          </div>
        </div>
  


    <div class="panel panel-primary">
      <div class="panel-heading">
        تليفونات الشركة
      </div>
      <div class="panel-body">



        <div ng-app="myApp" ng-controller="areasCtrl">
          <div class="row">
            <div class="col-md-6">
              <select class="form-control" ng-model="name" ng-options="item.tel as item.area for item in names">
                <option value="" selected="selected">الرجاء اختيار المنطقة</option>
              </select>
            </div>
            <div class="col-md-6">
              <div class="alert alert-success">
                تليفون المنطقة:
                <span style="color:#000;margin-right:10px;"> {{name}}</span>
              </div>
            </div>


          </div>
        </div>



      </div>
    </div>


  </div>
</div>



<?php include "footer.php"; ?>