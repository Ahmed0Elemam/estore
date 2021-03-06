<?php session_start(); ?>
<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="author" content="Eng. Ahmed Elemam" />
    <meta name="keywords" content="مياه الشرب , الصرف الصحى , الدقهلية , القابضة , شركة مياه الشرب والصرف الصحى , water , sewer" />
    <meta name="description" content="الموقع الرسمي لشركة مياه الشرب والصرف الصحي بالدقهلية" />
    <meta name="author" content="Eng. Ahmed Elemam">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all" />
    <META HTTP-EQUIV="Pragma" CONTENT="no-cache" />
    <meta property="og:image" content="http://www.dkwasc.com.eg/jobs/images/logo.png" />
    <meta property="og:type"   content="website" /> 
    <meta property="og:url"    content="http://www.dkwasc.com.eg/jobs/job8_2019_3omla/stage1/" /> 
    <meta property="og:title"  content="اعلان رقم 8 لسنة 2019 | وظيفة أخصائي خدمة عملاء ثالث" /> 
    <meta property="og:description"  content="الموقع الرسمي لشركة مياه الشرب والصرف الصحي بالدقهلية" /> 
    <meta property="fb:app_id"  content="673798652822430" /> 
    <title> اعلان رقم 8 لسنة 2019 | وظيفة أخصائي خدمة عملاء ثالث</title>
    <link rel="SHORTCUT ICON" href="img/icon.gif" type="image/x-icon" />
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-rtl.min.css">
    <link rel="stylesheet" href="css/datepicker.css">
    <link rel="stylesheet" href="css/font-awesome.css">
    <link href="https://fonts.googleapis.com/css?family=Tajawal:400,500,700&display=swap&subset=arabic" rel="stylesheet">

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
        <div class="alert alert-info"><strong>استمارة التقديم لوظيفة أخصائي خدمة عملاء ثالث </strong></div>
        <div class="alert alert-danger text-right">
            <strong>تعليمات التسجيل</strong>
            <ul>
                <li> الرجاء ادخال البيانات بدقة لتفادي أخطاء التسجيل</li>
                <li> البيانات التي يوجد بجوارها علامة (*) بيانات لابد من ادخالها</li>
                <li> في حالة وجود اي أخطاء سيتم عرض نوع الخطأ تحت البيان المطلوب ادخاله باللون الأحمر وعند اصلاحه ستظهر عليه حدود خضراء </li>
                <li> في حالة اختيار التاريخ الصحيح الموافق للرقم القومي وما زالت تظهر أخطاء فيرجى اختيار التاريخ مرة أخرى للتـأكيد </li>
                <li> الرجاء الضغط على زر التسجيل بعد التأكد من عدم وجود أخطاء والانتظار حتى يظهر لك انه تم التسجيل بنجاح </li>

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
                                    <input class="name form-control" type="text" name="name" placeholder="الرجاء ادخال اسمك رباعي كما بالبطاقة" required/>
                                    <div class="alert alert-danger custom-alert"> الاسم رباعي لا يمكن ان يكون اقل من 15 حرف </div>
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
                                    <label>النوع</label><span class="astrik">*</span>
                                </div>
                                <div class="col-md-8">
                                    <select id="gender" name="gender" class="form-control" required>
                                                <option value="0">الرجاء اختيار النوع</option>
                                                <option value="1">ذكر</option>
                                                <option value="2">أنثى</option>
                                            </select>
                  <div class="alert alert-danger custom-alert"> الرجاء اختيار النوع </div>

                                </div>

                            </div>
                            
                        
                            
                            <div class="col-md-6">
                                <div class="col-md-4">
                                    <label>تاريخ الميلاد</label> <span class="astrik">*</span>
                                </div>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" id="date2" readonly placeholder="أدخل التاريخ من القائمة المنسدلة عند الضغط" name="date2" required>

                                    <div class="alert alert-danger custom-alert"> الرجاء اختيار التاريخ من قائمة التاريخ التي تظهر لك </div>
                                    <div class="alert alert-danger custom-alert3"> سنة الميلاد في الرقم القومي غير مطابقة لسنة الميلاد في تاريخ الميلاد </div>
                                    <div class="alert alert-danger custom-alert4"> شهر الميلاد في الرقم القومي غير مطابقة لشهر الميلاد في تاريخ الميلاد </div>
                                    <div class="alert alert-danger custom-alert5"> يوم الميلاد في الرقم القومي غير مطابقة ليوم الميلاد في تاريخ الميلاد </div>
                                </div>

                            </div>
                     
                        
                        </div>
                    </div>
                    <div class="form-group">

                        <div class="row">
                           
                            <div class="col-md-6" id="male">
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
                                    <select class="form-control" name="city" id="city" required>
                                                <option value="0">الرجاء اختيار المدينة/المركز</option>
                                                <option value="1">أجا</option>
                                                <option value="2">الجمالية</option>
                                                <option value="3">السنبلاوين</option>
                                                <option value="4">الكردي</option>
                                                <option value="5">المطرية</option>
                                                <option value="6">المنزلة</option>
                                                <option value="7">المنصورة</option>
                                                <option value="8">بلقاس</option>
                                                <option value="9">بني عبيد</option>
                                                <option value="10">تمي الأمديد</option>
                                                <option value="11">جمصة</option>
                                                <option value="12">دكرنس</option>
                                                <option value="13">شربين</option>
                                                <option value="14">طلخا</option>
                                                <option value="15">محلة الدمنة</option>
                                                <option value="16">منية النصر</option>
                                                <option value="17">ميت سلسيل</option>
                                                <option value="18">ميت غمر</option>
                                                <option value="19">نبروه</option>
                   
                                    </select>
                                    <div class="alert alert-danger custom-alert"> الرجاء اختيار المدينة/المركز </div>
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
                                    <label>التخصص</label> <span class="astrik">*</span>
                                </div>
                                <div class="col-md-8">
                                    <select class="form-control" name="study" id="study" required>
                                                <option value="0">الرجاء اختيار التخصص</option>
                                                <option value="1">ادارة أعمال</option>
                                                <option value="2">محاسبة</option>
                                                <option value="3">اقتصاد</option>
                                                <option value="4">احصاء و تأمين</option>
                                            </select>
                                    <div class="alert alert-danger custom-alert"> الرجاء اختيار التخصص </div>
                                </div>

                            </div>
                            
                            <div class="col-md-6">
                                <div class="col-md-4">
                                    <label>سنة التخرج</label> <span class="astrik">*</span>
                                </div>
                                <div class="col-md-8">
                                   <input id="grade_year" class="form-control" type="text" name="grade_year" placeholder="الرجاء ادخال سنة التخرج" required maxlength="4" />
                                    
                                    <div class="alert alert-danger custom-alert"> الرجاء ادخال سنة التخرج 4 أرقام فقط </div>
                                    
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
                                    <label>النسبة المئوية للتقدير</label>
                                    <span class="astrik">*</span>
                                </div>
                                <div class="col-md-8">
                                    <input id="grade_percent" class="form-control" type="text" name="grade_percent" maxlength="2" placeholder="الرجاء ادخال النسبة رقم صحيح بدون علامة %" required />
                                    <div class="alert alert-danger custom-alert"> الرجاء ادخال النسبة بدون علامة % ولا تقل عن رقمين </div>
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

                    <div class="form-group">
                        <div class="row">
                            <div class="alert alert-info">عضوية نقابة التجاريين</div>
                            <div class="col-md-6">
                                <div class="col-md-4">
                                    <label>رقم العضوية</label>
                                    <span class="astrik">*</span>
                                </div>
                                <div class="col-md-8">
                                    <input id="nekaba_id" class="form-control" type="text" name="nekaba_id" placeholder=" الرقم الموجود في منتصف رقم العضوية الكلي فقط  " required maxlength="9" />
                                    <div class="alert alert-danger custom-alert"> الرجاء  ادخال رقم العضوية الموجود في المنتصف فقط  </div>
                                </div>


                            </div>
                            <div class="col-md-6">
                                <div class="col-md-4">
                                    <label>سنة الحصول على العضوية</label>
                                    <span class="astrik">*</span>
                                </div>
                                <div class="col-md-8">
                                    <input id="nekaba_year" class="form-control" type="text" name="nekaba_year" placeholder="الرجاء ادخال سنة الحصول على العضوية" required maxlength="4" />
                                    <div class="alert alert-danger custom-alert"> الرجاء ادخال سنة الحصول على العضوية 4 أرقام فقط </div>
                                    
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

                    <div class="form-group">
                        <div class="row">
                            <div class="alert alert-info">الحاسب الآلي</div>
                            <div class="col-md-6">
                                <div class="col-md-4">
                                    <label>درجة اجادة الحاسب الآلي</label>
                                    <span class="astrik">*</span>
                                </div>
                                <div class="col-md-8">
                                    <select class="form-control" name="computer" id="computer" required>
                                                <option value="0">الرجاء اختيار درجة اجادة الحاسب الآلي</option>
                                                <option value="1">مقبول</option>
                                                <option value="2">جيد</option>
                                                <option value="3">جيد جدا</option>
                                                <option value="4">ممتاز</option>
                                            </select>
                                    <div class="alert alert-danger custom-alert">الرجاء اختيار درجة اجادة الحاسب الآلي</div>
                                </div>

                            </div>


                        </div>
                    </div>

                    <div class="form-group text-center">
                        <div class="row">
                            <div class="alert alert-info">الدورات التدريبية</div>
                            <div class="col-md-12">

                                <textarea rows="5" name="courses" class="form-control" placeholder="الرجاء ادخال كل الدورات التدريبية الحاصل عليها وافصل بينهما بعلامة (-)"></textarea>
                            </div>
                        </div>
                    </div>

                    <div class="form-group text-center">
                        <div class="row">
                            <div class="alert alert-info">الخبرات السابقة</div>
                            <div class="col-md-12">
                                <textarea rows="5" name="exp" class="form-control" placeholder="الرجاء ادخال كل الخبرات السابقة وافصل بينهما بعلامة (-)"></textarea>
                            </div>
                        </div>
                    </div>

                    <input class="btn btn-success btn-lg text-center" type="submit" value="تسجيل" />
                </div>
            </div>
        </form>


        <div id="footer" class="text-center">
        <p>جميع الحقوق محفوظة © شركة مياه الشرب والصرف الصحي بالدقهلية 
      <?php echo date("Y"); ?></p>
        </div>
    </div>
    <script>
        $(function() {
            $("#date2").datepicker({
                changeMonth: true,
                changeYear: true,
                regional: "ar",
                dateFormat: "yy-mm-dd",
                minDate: new Date(1990, 0, 1),
                maxDate: new Date(1999, 0, 1),
                yearRange: "1990:1999",
                autoSize: true
            });
             

        });

    </script>
</body>

</html>
