<?php session_start(); ?>
<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="author" content="Eng. Ahmed Elemam" />
    <meta name="keywords" content="مياه الشرب , الصرف الصحى , الدقهلية , القابضة , شركة مياه الشرب والصرف الصحى , water , sewer" />
    <meta name="description" content="الموقع الرسمي لشركة مياه الشرب والصرف الصحي بالدقهلية" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all" />
    <META HTTP-EQUIV="Pragma" CONTENT="no-cache" />
    <meta property="og:image" content="http://www.dkwasc.com.eg/jobs/images/logo.png" />
    <meta property="og:type"   content="website" /> 
    <meta property="og:url"    content="http://www.dkwasc.com.eg/jobs/2020/job4_ITengineer/stage1/" /> 
    <meta property="og:title"  content="اعلان رقم 4 لسنة 2020 | وظيفة مهندس شبكات حاسب ثالث - مهندس برمجيات ثالث" /> 
    <meta property="og:description"  content="الموقع الرسمي لشركة مياه الشرب والصرف الصحي بالدقهلية" /> 
    <meta property="fb:app_id"  content="673798652822430" /> 
    <title>اعلان رقم 4 لسنة 2020 | وظيفة مهندس شبكات حاسب ثالث - مهندس برمجيات ثالث</title>
    <link rel="SHORTCUT ICON" href="img/icon.gif" type="image/x-icon" />
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-rtl.min.css">
    <link rel="stylesheet" href="css/datepicker.css">
    <link rel="stylesheet" href="css/font-awesome.css">
    <link href="https://fonts.googleapis.com/css?family=Tajawal:400,500,700&display=swap&subset=arabic" rel="stylesheet">
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <link href="css/social-share-kit.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="css/style.css?<?php echo md5_file('css/style.css'); ?>">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="js/ar.js"></script>
    <script src="js/social-share-kit.min.js"></script>
    <script src="js/js.js?<?php echo md5_file('js/js.js'); ?>"></script>
</head>

<body>
    <div class="container text-center">
        <div class="alert alert-info"><strong>استمارة التقديم لوظيفة [ مهندس شبكات حاسب ثالث - مهندس برمجيات ثالث ]  </strong></div>
        <div class="alert alert-danger text-right">
            <strong>تعليمات التسجيل</strong>
            <ul style="font-weight:700;">
                <li> الرجاء ادخال البيانات بدقة لتفادي أخطاء التسجيل.</li>
                <li> البيانات التي يوجد بجوارها علامة
                     (&nbsp;   
                    <span style="font-size: 40px;position: absolute;margin-top: -8px;margin-right: -6px;color:#f00;"> * </span>  
                    &nbsp;  )   
                     بيانات لابد من ادخالها.</li>
                <li> في حالة وجود اي أخطاء سيتم عرض نوع الخطأ تحت البيان المطلوب ادخاله باللون الأحمر وعند اصلاحه ستظهر عليه حدود خضراء. </li>
                <li> في حالة اختيار التاريخ الصحيح الموافق للرقم القومي وما زالت تظهر أخطاء فيرجى اختيار التاريخ مرة أخرى للتـأكيد. </li>
                <li>  الرجاء الضغط على زر التسجيل بعد التأكد من عدم وجود أخطاء والانتظار حتى يظهر لك انه تم التسجيل بنجاح وظهور الكود الخاص بك. </li>
                <li> الرجاء كتابة الأرقام باللغة الانجليزية فقط لتجنب مشكلات التسجيل. </li>

            </ul>
        </div>
        <!-- Form -->
    <form id="register-form" method="POST" action="registered.php">
      <!-- Personal info -->
      <div class="panel panel-primary text-center">
        <div class="panel-heading">البيانات الشخصية</div>
        <div class="panel-body">
          <div class="form-group">
            <div class="row">
              <div class="col-md-6">
                <div class="col-md-4">
                  <label>الاسم</label> <span class="astrik">*</span>
                </div>
                <div class="col-md-8">
                  <input class="name form-control" type="text" name="name" placeholder="الرجاء ادخال اسمك رباعي كما بالبطاقة" required />
                  <div class="alert alert-danger custom-alert"> الاسم رباعي لا يمكن ان يقل عن 15 حرفاً </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="col-md-4">
                  <label>الرقم القومي</label> <span class="astrik">*</span>
                </div>
                <div class="col-md-8">
                  <input class="nid form-control" maxlength="14" type="text" name="n_id" placeholder="الرجاء ادخال رقمك القومي 14 رقم كما بالبطاقة" required />
                  <div class="alert alert-danger custom-alert"> الرجاء ادخال الرقم القومي 14 رقم </div>
                </div>
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="row">
              <div class="col-md-6">
                <div class="col-md-4">
                  <label>تاريخ الميلاد</label> <span class="astrik">*</span>
                </div>
                <div class="col-md-8">
                  <input type="text" class="form-control" id="date" readonly placeholder="أدخل التاريخ من القائمة المنسدلة عند الضغط" name="date" required>
                  <div class="alert alert-danger custom-alert"> الرجاء اختيار التاريخ من قائمة التاريخ التي تظهر لك </div>
                  <div class="alert alert-danger custom-alert3"> سنة الميلاد في الرقم القومي غير مطابقة لسنة الميلاد في تاريخ الميلاد </div>
                  <div class="alert alert-danger custom-alert4"> شهر الميلاد في الرقم القومي غير مطابق لشهر الميلاد في تاريخ الميلاد </div>
                  <div class="alert alert-danger custom-alert5"> يوم الميلاد في الرقم القومي غير مطابق ليوم الميلاد في تاريخ الميلاد </div>
                </div>

              </div>
              <div class="col-md-6">
                <div class="col-md-4">
                  <label>النوع</label><span class="astrik">*</span>
                </div>
                <div class="col-md-8">
                                    <input readonly class="form-control" name="gender" value="ذكر" />

                                </div>

              </div>
            </div>
          </div>
          <div class="form-group">

            <div class="row">
              <div class="col-md-6">
                <div class="col-md-4">
                  <label>الموقف من التجنيد</label> <span class="astrik">*</span>
                </div>
                <div class="col-md-8">
                  <select class="form-control" name="military" id="military" required>
                      <option value="0">الرجاء اختيار الموقف من التجنيد</option>
                      <option value="1">مؤجل</option>
                      <option value="2">معافى مؤقت</option>
                      <option value="3">معافى نهائي</option>
                      <option value="4">أدى الخدمة العسكرية</option>                 
                  </select>
                  <div class="alert alert-danger custom-alert"> الرجاء اختيار الموقف من التجنيد </div>
                </div>

              </div>
              <div class="col-md-6">
                <div class="col-md-4">
                  <label>الحالة الاجتماعية</label> <span class="astrik">*</span>
                </div>
                <div class="col-md-8">
                  <select class="form-control" name="marital" id="marital" required>
                                                <option value="0">الرجاء اختيار الحالة الاجتماعية</option>
                                                <option value="1">أعزب</option>
                                                <option value="2">متزوج</option>
                                                <option value="3">مطلق</option>
                                                <option value="4">أرمل</option>
                                            </select>
                  <div class="alert alert-danger custom-alert"> الرجاء اختيار الحالة الاجتماعية </div>
                </div>

              </div>

            </div>

          </div>
        </div>
      </div>
      <!-- Contact Info -->
      <div class="panel panel-primary text-center">
        <div class="panel-heading">معلومات الاتصال</div>
        <div class="panel-body">
          <div class="form-group">
            <div class="row">
              <div class="col-md-6">
                <div class="col-md-4">
                  <label>المدينة/المركز</label> <span class="astrik">*</span>
                </div>
                <div class="col-md-8">
                                    <input readonly class="form-control" name="city" id="city" value="المنصورة" />

                                </div>

              </div>
              <div class="col-md-6">
                <div class="col-md-4">
                  <label>الحي/القرية</label> <span class="astrik">*</span>
                </div>
                <div class="col-md-8">
                  <input id="village" class="form-control" type="text" name="village" placeholder="الرجاء ادخال اسم الحي/القرية" required />
                  <div class="alert alert-danger custom-alert"> الرجاء ادخال الحي/القرية </div>
                </div>

              </div>

            </div>
          </div>
          <div class="form-group">
            <div class="row">
              <div class="col-md-6">
                <div class="col-md-4">
                  <label>الشارع</label>
                </div>
                <div class="col-md-8">
                  <input class="form-control" type="text" name="street" placeholder="الرجاء ادخال اسم الشارع" />
                  <div class="alert alert-danger custom-alert"> الرجاء ادخال اسم الشارع </div>
                </div>

              </div>
              <div class="col-md-6">
                <div class="col-md-4">
                  <label>الموبايل</label> <span class="astrik">*</span>
                </div>
                <div class="col-md-8">
                  <input id="mobile" class="form-control" type="text" name="mobile" maxlength="11" placeholder="الرجاء ادخال رقم الموبايل 11 رقم" required />
                  <div class="alert alert-danger custom-alert"> الرجاء ادخال رقم الموبايل 11 رقم </div>
                </div>

              </div>


            </div>
          </div>
          <div class="form-group">
            <div class="row">
              <div class="col-md-6">
                <div class="col-md-4">
                  <label>التليفون الأرضي</label>
                </div>
                <div class="col-md-8">
                  <input id="landline" class="form-control" type="text" name="landline" maxlength="7" placeholder="الرجاء ادخال رقم الأرضي 7 أرقام" />
                  <div class="alert alert-danger custom-alert"> الرجاء ادخال رقم الأرضي ان وجد </div>
                </div>

              </div>
              <div class="col-md-6">
                <div class="col-md-4">
                  <label>البريد الالكتروني</label>
                </div>
                <div class="col-md-8">
                  <input class="form-control" type="email" name="email" placeholder="الرجاء ادخال البريد الالكتروني ان وجد " />
                  <div class="alert alert-danger custom-alert"> الرجاء ادخال البريد الالكتروني ان وجد </div>
                </div>

              </div>

            </div>
          </div>
        </div>
      </div>
      <!-- Study info -->
      <div class="panel panel-primary text-center">
        <div class="panel-heading">البيانات الدراسية</div>
        <div class="panel-body">

        <div class="form-group">
            <div class="row" id="jobs">
              <div class="col-md-6">
                <div class="col-md-4">
                  <label>الوظيفة</label><span class="astrik">*</span>
                </div>
                <div class="col-md-8">
                  <select class="form-control" name="job" id="job">
                    <option value="0">الرجاء اختيار الوظيفة</option>
                    <option value="1">مهندس شبكات حاسب ثالث</option>
                    <option value="2">مهندس برمجيات ثالث</option>
                  </select>
                  <div class="alert alert-danger custom-alert"> الرجاء اختيار الوظيفة </div>

                </div>

              </div>

              <div class="col-md-6" id="job1">
                <div class="col-md-4">
                  <label>المؤهل</label><span class="astrik">*</span>
                </div>
                <div class="col-md-8">
                  <select class="form-control" name="study" id="study1">
                    <option value="0">الرجاء اختيار المؤهل</option>
                    <option value="1">بكالوريوس هندسة شعبة اتصالات</option>
                    <option value="2">بكالوريوس هندسة شعبة حاسبات</option>
                  </select>
                  <div class="alert alert-danger custom-alert"> الرجاء اختيار المؤهل </div>

                </div>

              </div>
              <div class="col-md-6" id="job2">
                <div class="col-md-4">
                  <label>المؤهل</label><span class="astrik">*</span>
                </div>
                <div class="col-md-8">
                  <select class="form-control" name="study" id="study2">
                    <option value="0">الرجاء اختيار المؤهل</option>
                    <option value="1">بكالوريوس هندسة شعبة اتصالات</option>
                    <option value="2">بكالوريوس هندسة شعبة حاسبات</option>
                    <option value="3">بكالوريوس حاسبات ومعلومات تخصص علوم حاسب</option>
                    <option value="4">بكالوريوس حاسبات ومعلومات تخصص نظم معلومات</option>
                  </select>
                  <div class="alert alert-danger custom-alert"> الرجاء اختيار المؤهل </div>

                </div>

              </div>
            </div>
        </div>

            <div class="form-group">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="col-md-4">
                                    <label>اسم الجامعة</label><span class="astrik">*</span>
                                </div>
                                <div class="col-md-8">
                                    <input class="form-control" type="text" name="university" placeholder="الرجاء ادخال اسم الجامعة" required id="university" />
                                    <div class="alert alert-danger custom-alert"> الرجاء ادخال اسم الجامعة </div>
                                </div>

                            </div>
                            <div class="col-md-6">
                                <div class="col-md-4">
                                    <label>اسم الكلية</label> <span class="astrik">*</span>
                                </div>
                                <div class="col-md-8">
                                    <input id="college" class="form-control" type="text" name="college" placeholder="الرجاء ادخال اسم الكلية" required />
                                    <div class="alert alert-danger custom-alert"> الرجاء ادخال اسم الكلية </div>
                                </div>

                            </div>


                        </div>
                    </div>

          <div class="form-group">
            <div class="row">

              <div class="col-md-6">
                <div class="col-md-4">
                  <label>التقدير</label> <span class="astrik">*</span>
                </div>
                <div class="col-md-8">
                  <select class="form-control" name="grade" id="grade" required>
                                                <option value="0">الرجاء اختيار التقدير</option>
                                                <option value="1">مقبول</option>
                                                <option value="2">جيد</option>
                                                <option value="3">جيد جدا</option>
                                                <option value="4">امتياز</option>
                                            </select>
                  <div class="alert alert-danger custom-alert"> الرجاء اختيار التقدير </div>
                </div>

              </div>

              <div class="col-md-6">
                <div class="col-md-4">
                  <label>سنة التخرج</label> <span class="astrik">*</span>
                </div>
                <div class="col-md-8">
                  <input id="grade_year" class="form-control" type="text" name="grade_year" maxlength="4" placeholder="الرجاء ادخال سنة التخرج" required />
                  <div class="alert alert-danger custom-alert"> الرجاء ادخال سنة التخرج </div>
                  <div class="alert alert-danger custom-alert2"> سنة التخرج لا يمكن ان تقل عن 4 أرقام </div>
                </div>

              </div>

            </div>
          </div>
          <hr/>
          <div class="form-group">
            <div class="row">
              <div class="col-md-6">
                <div class="col-md-4">
                  <label>شهادات أخرى</label>
                </div>
                <div class="col-md-8">
                  <select class="form-control" name="other_cert" id="other_cert">
                                                <option value="0">الرجاء اختيار أعلى مؤهل </option>
                                                <option value="1">دبلومة سنتان</option>
                                                <option value="2">ماجستير</option>
                                                <option value="3">دكتوراه</option>
                                            </select>
                </div>

              </div>
              <div class="col-md-6">
                <div class="col-md-4">
                  <label>عنوان مادة الشهادة</label>
                </div>
                <div class="col-md-8">
                  <input class="form-control" type="text" name="other_cert_title" placeholder="الرجاء ادخال عنوان مادة الشهادة" /> </div>

              </div>

            </div>
          </div>

          <div class="form-group" id="nk_section">
            <div class="row" id="nekaba">
              <div class="alert alert-info">عضوية نقابة المهندسين</div>
              <div class="col-md-6">
                <div class="col-md-4">
                  <label>رقم العضوية</label>
                  <span class="astrik">*</span>
                </div>
                <div class="col-md-8">
                  <input id="nekaba_id" class="form-control" type="text" name="nekaba_id" placeholder="الرجاء ادخال رقم العضوية الأوسط" required maxlength="8" />
                  <div class="alert alert-danger custom-alert"> الرجاء ادخال رقم العضوية الأوسط </div>
                </div>


              </div>
              <div class="col-md-6">
                <div class="col-md-4">
                  <label>سنة الحصول على العضوية</label>
                  <span class="astrik">*</span>
                </div>
                <div class="col-md-8">
                  <input id="nekaba_year" class="form-control" type="text" name="nekaba_year" maxlength="4" placeholder="الرجاء ادخال سنة الحصول على العضوية " required />
                  <div class="alert alert-danger custom-alert"> الرجاء ادخال سنة الحصول على العضوية
                  </div>
                  <div class="alert alert-danger custom-alert2"> سنة الحصول على العضوية لا يمكن ان تقل عن 4 أرقام </div>
                </div>

              </div>
            </div>
          </div>


          <div class="form-group">
            <div class="row">
              <div class="alert alert-info">اللغات</div>

              <div class="col-md-6">
                <div class="col-md-4">
                  <label>اللغات</label>
                </div>
                <div class="col-md-8">
                  <select class="form-control" name="langs" id="langs">
                                                <option value="0">الرجاء اختيار اللغة</option>
                                                <option value="1">الانجليزية</option>
                                                <option value="2">الفرنسية</option>
                                                <option value="3">الألمانية</option>
                                            </select>

                </div>

              </div>
              <div class="col-md-6">
                <div class="col-md-4">
                  <label>درجة الاجادة</label>
                </div>
                <div class="col-md-8">
                  <select class="form-control" name="lang" id="lang">
                                                <option value="0">الرجاء اختيار درجة اجادة اللغات</option>
                                                <option value="1">مقبول</option>
                                                <option value="2">جيد</option>
                                                <option value="3">جيد جدا</option>
                                                <option value="4">ممتاز</option>
                                            </select>

                </div>

              </div>
            </div>
          </div>

          <div class="form-group text-center">
            <div class="row">
              <div class="alert alert-info">الدورات التدريبية</div>
              <div class="col-md-12">

                <textarea rows="5" name="courses" class="form-control" placeholder="الرجاء ادخال كل الدورات التدريبية الحاصل عليها كل دورة في سطر على حده"></textarea>
              </div>
            </div>
          </div>

          <div class="form-group text-center">
            <div class="row">
              <div class="alert alert-info">الخبرات السابقة</div>
              <div class="col-md-12">
                <textarea rows="5" name="exp" class="form-control" placeholder="الرجاء ادخال كل الخبرات السابقة كل خبرة في سطر على حده"></textarea>
              </div>
            </div>
          </div>

          <input class="btn btn-success btn-lg text-center" type="submit" value="تسجيل" />
        </div>
      </div>
    </form>

        <div id="footer" class="text-center">
        <p>جميع الحقوق محفوظة © شركة مياه الشرب والصرف الصحي بالدقهلية  <?php
      date_default_timezone_set('africa/cairo'); 
      echo date("Y"); ?></p>
        </div>
    </div>
    <script>
            $(function() {

                $("#date").datepicker({
                    changeMonth: true,
                    changeYear: true,
                    regional: "ar",
                    dateFormat: "yy-mm-dd",
                    minDate: new Date(1991, 0, 1),
                    maxDate: new Date(2001, 0, 1),
                    yearRange: "1991:2001",
                    autoSize: true
                })

            });
        </script>
</body>

</html>
