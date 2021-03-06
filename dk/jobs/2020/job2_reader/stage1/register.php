<?php session_start(); ?>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="author" content="Eng. Ahmed Elemam" />
    <meta name="keywords" content="مياه الشرب , الصرف الصحى , الدقهلية , القابضة , شركة مياه الشرب والصرف الصحى , water , sewer" />
    <meta name="description" content="الموقع الرسمي لشركة مياه الشرب والصرف الصحي بالدقهلية" />
    <meta name="author" content="Eng. Ahmed Elemam">
    <meta name="theme-color" content="#0D95D6">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all" />
    <META HTTP-EQUIV="Pragma" CONTENT="no-cache" />
    <meta property="og:image" content="http://www.dkwasc.com.eg/jobs/images/logo.png" />
    <meta property="og:type"   content="website" /> 
    <meta property="og:url"    content="dkwasc.com.eg" /> 
    <meta property="og:title"  content="اعلان رقم 2 لسنة 2020 | وظيفة محصل بنظام العمولة" /> 
    <meta property="og:description"  content="الموقع الرسمي لشركة مياه الشرب والصرف الصحي بالدقهلية" /> 
    <meta property="fb:app_id"  content="673798652822430" /> 
    <title>اعلان رقم 2 لسنة 2020 | وظيفة محصل بنظام العمولة</title>
    <link rel="SHORTCUT ICON" href="img/icon.gif" type="image/x-icon" />
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-rtl.min.css">
    <link rel="stylesheet" href="css/font-awesome.css">
    <link rel="stylesheet" href="css/datepicker.css">
    <link href="https://fonts.googleapis.com/css?family=Tajawal:500,700,800&display=swap&subset=arabic" rel="stylesheet">

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/style.css?<?php echo md5_file('css/style.css'); ?>">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script src="js/ar.js"></script>
  
    <script src="js/js.js?<?php echo md5_file('js/js.js'); ?>"></script>
</head>

<body>
    <div class="container text-center">
        <div class="alert alert-info"><strong>استمارة التقديم لوظيفة محصل بنظام العمولة</strong></div>
        <div class="alert alert-danger text-right">
            <strong style="font-weight:800">تعليمات التسجيل</strong>
            <ul style="font-weight:700;">
                <li> الرجاء ادخال البيانات بدقة لتفادي أخطاء التسجيل</li>
                <li> البيانات التي يوجد بجوارها علامة
                     (&nbsp;   
                    <span style="font-size: 40px;position: absolute;margin-top: -8px;margin-right: -6px;color:#f00;"> * </span>  
                    &nbsp;  )   
                     بيانات لابد من ادخالها</li>
                <li> في حالة وجود اي أخطاء سيتم عرض نوع الخطأ تحت البيان المطلوب ادخاله باللون الأحمر وعند اصلاحه ستظهر عليه حدود خضراء </li>
                <li> في حالة اختيار التاريخ الصحيح الموافق للرقم القومي وما زالت تظهر أخطاء فيرجى اختيار التاريخ مرة أخرى للتـأكيد </li>
                <li> الرجاء الضغط على زر التسجيل بعد التأكد من عدم وجود أخطاء والانتظار حتى يظهر لك انه تم التسجيل بنجاح </li>
                <li> الرجاء كتابة الأرقام باللغة الانجليزية فقط لتجنب مشكلات التسجيل </li>

            </ul>
        </div>
        <form id="register-form" method="POST" action="registered.php">
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
                                    <input class="name form-control" type="text" name="name" placeholder="الرجاء ادخال اسمك رباعي كما بالبطاقة"  />
                                    <div class="alert alert-danger custom-alert"> الاسم رباعي لا يمكن ان يكون اقل من 15 حرف </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="col-md-4">
                                    <label>الرقم القومي</label> <span class="astrik">*</span>
                                </div>
                                <div class="col-md-8">
                                    <input class="nid form-control" maxlength="14" type="text" name="n_id" placeholder="الرجاء ادخال رقمك القومي 14 رقم كما بالبطاقة"  />
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
                                 <input type="text" class="form-control" id="date" readonly placeholder="أدخل التاريخ من القائمة المنسدلة عند الضغط" name="date">

                                    <div class="alert alert-danger custom-alert"> الرجاء اختيار التاريخ من قائمة التاريخ التي تظهر لك </div>
                                    <div class="alert alert-danger custom-alert3"> سنة الميلاد في الرقم القومي غير مطابقة لسنة الميلاد في تاريخ الميلاد </div>
                                    <div class="alert alert-danger custom-alert4"> شهر الميلاد في الرقم القومي غير مطابق لشهر الميلاد في تاريخ الميلاد </div>
                                    <div class="alert alert-danger custom-alert5"> يوم الميلاد في الرقم القومي غير مطابق ليوم الميلاد في تاريخ الميلاد </div>
                                </div>

                            </div>
                            <div class="col-md-6">
                                <div class="col-md-4">
                                    <label>النوع</label>
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
                                    <select class="form-control" name="military" id="military" >
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
                                    <select class="form-control" name="marital" id="marital" >
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
            <div class="panel panel-primary text-center">
                <div class="panel-heading">معلومات الاتصال</div>
                <div class="panel-body">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="col-md-4">
                                    <label>المدينة/المركز</label> <span class="astrik">*</span> </div>
                                <div class="col-md-8">
                                <select class="form-control" name="city" id="city" required>
                                                <option value="0">الرجاء اختيار المدينة/المركز</option>
                                                <option value="3">السنبلاوين</option>
                                                <option value="5">المطرية</option>
                                                <option value="6">المنزلة</option>
                                                <option value="7">المنصورة</option>
                                                <option value="17">ميت سلسيل</option>
                                                <option value="18">ميت غمر</option>
                                                <option value="19">نبروه</option>
                   
                                    </select>

                                </div>

                            </div>
                            <div class="col-md-6">
                                <div class="col-md-4">
                                    <label>الحي/القرية</label> <span class="astrik">*</span> </div>
                                <div class="col-md-8">
                                    <input id="village" class="form-control" type="text" name="village" placeholder="الرجاء ادخال اسم الحي/القرية"  />
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
                                    <label>البريد الالكتروني</label>
                                </div>
                                <div class="col-md-8">
                                    <input class="form-control" type="email" name="email" placeholder="الرجاء ادخال البريد الالكتروني ان وجد " />
                                    <div class="alert alert-danger custom-alert"> الرجاء ادخال البريد الالكتروني ان وجد </div>
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
                                    <label>الموبايل</label> <span class="astrik">*</span> </div>
                                <div class="col-md-8">
                                    <input id="mobile" class="form-control" type="text" name="mobile" maxlength="11" placeholder="الرجاء ادخال رقم الموبايل 11 رقم"  />
                                    <div class="alert alert-danger custom-alert"> الرجاء ادخال رقم الموبايل 11 رقم </div>
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
                        <div class="row">
                            <div class="col-md-6">
                                <div class="col-md-4">
                                    <label>المؤهل الحاصل عليه المتقدم</label> <span class="astrik">*</span>
                                </div>
                                <div class="col-md-8">
                                    <select class="form-control" id="study" name="study">
				    <option value="0">الرجاء اختيار المؤهل الحاصل عليه</option>
                    <option value="1"> مؤهل متوسط </option>
                    <option value="2"> مؤهل فوق متوسط</option>
                  </select>
                                    <div class="alert alert-danger custom-alert">لم يتم اختيار المؤهل الحاصل عليه المتقدم</div>
                                </div>

                            </div>
                            <div class="col-md-6">
                                <div class="col-md-4">
                                    <label>سنة الحصول على المؤهل</label> <span class="astrik">*</span>
                                </div>
                                <div class="col-md-8">
                                    <input id="grade_year" class="form-control" type="text" name="grade_year" maxlength="4" placeholder="الرجاء ادخال سنة الحصول على المؤهل"  />
                                    <div class="alert alert-danger custom-alert"> الرجاء ادخال سنة الحصول على المؤهل </div>
                                    <div class="alert alert-danger custom-alert2"> سنة الحصول على المؤهل لا يمكن ان تقل عن 4 أرقام </div>
                                </div>

                            </div>

                        </div>
                      <div class="row">
                            <div class="col-md-6">
                                <div class="col-md-4">
                                    <label> اسم المؤهل</label> <span class="astrik">*</span>
                                </div>
                                <div class="col-md-8">
                                    <input id="study_name" class="form-control" type="text" name="study_name"  placeholder="الرجاء ادخال اسم المؤهل"  />
                                    <div class="alert alert-danger custom-alert"> الرجاء ادخال اسم المؤهل </div>

                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <input class="btn btn-primary btn-lg text-center" type="submit" value="تسجيل" />
        </form>

        <script>
            $(function() {

                $("#date").datepicker({
                    changeMonth: true,
                    changeYear: true,
                    regional: "ar",
                    dateFormat: "yy-mm-dd",
                    minDate: new Date(1991, 0, 1),
                    maxDate: new Date(2003, 0, 1),
                    yearRange: "1991:2003",
                    autoSize: true
                })

            });
        </script>
        <div id="footer" class="text-center">
            <p>جميع الحقوق محفوظة © شركة مياه الشرب والصرف الصحي بالدقهلية 2020</p>
        </div>
    </div>

</body>

</html>
