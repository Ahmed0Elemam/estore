<?php
$title = " المناقصات | شركة مياه الشرب والصرف الصحي بالدقهلية";
$pageName = 'khdma';
include "connect.php";
include "header.php"; ?>
<div id="monaqsa" class="container">
    <div class="well well-lg">
    <div class="panel panel-primary">
            <div class="panel-heading">
                المناقصات الأخيرة
            </div>
            <div class="panel-body">
                <!--
                    <div class="alert alert-danger text-center">عفوا !!! لا توجد عمليات جديدة الآن !!!</div> -->
                
                    <table class="table table-bordered text-center">
                        <tr class="info">
                            <th class="text-center">م</th>
                            <th class="text-center">البيان</th>
                            <th width="110" class="text-center">تاريخ الجلسة</th>
                            <th class="text-center">طريقة الطرح</th>
                            <th class="text-center">التأمين</th>
                            <th class="text-center">الكراسة</th>
                        </tr>
                        <?php
                        $stmt = $connect->prepare("SELECT * FROM deals order by id ASC");
                        $stmt->execute();
                        $deals = $stmt->fetchAll();
                        $count = $stmt->rowCount();

                        if ($count > 0) {

                            foreach ($deals as $deal) { ?>

                                <tr>
                                    <td>
                                        <?php echo $deal['id']; ?>
                                    </td>
                                    <td>
                                        <?php echo $deal['name']; ?>
                                    </td>
                                    <td>
                                        <?php echo $deal['date']; ?>
                                    </td>
                                    <td>
                                        <?php echo $deal['tar7']; ?>
                                    </td>
                                    <td >
                                        <?php echo $deal['tamen']; ?>
                                    </td>
                                    <td >
                                        <?php echo $deal['paper']; ?>
                                    </td>

                                </tr>

                            <?php }
                    } ?>
                    </table>

                    <ul>
                       

                    </ul>

                <p class="text-justify">سعر الكراسة شامل ضريبة القيمة المضافة وتطلب من قطاع العقود بالشركة وتقدم العطاءات إليه في موعد غايته الساعة الثانية عشر من ظهر يوم الجلسة على أن يستكمل التأمين النهائي ليصبح 5% بعد الرسوم ولائحة مشتريات الشركة مكملة لهذا الإعلان .
                </p>
            </div>
        </div>
        
        <div class="panel panel-primary">
            <div class="panel-heading">
                المستندات المطلوبة
            </div>
            <div class="panel-body">
                <p> المستندات المطلوبة للقيد بسجل قيد المقاولين والموردين:</p>
                <ul>
                    <li>صورة البطاقة الضريبية - سارية .</li>
                    <li>صورة السجل التجارى سارى او مستخرج رسمى منه (وليس طلب قيد بالسجل ) .</li>
                    <li>صورة شهادة الضريبة العامة على المبيعات .</li>
                    <li>صورة سابقة الاعمال من الجهات المنفذ بها الاعمال او المورد لها الاصناف .</li>
                    <li>بالنسبة للمقاولين و أعمال التركيبات ( صورة شهادة اتحاد المقاولين + أصل شهادة البيانات المؤقتة ) .</li>
                    <li>صورة عقد الشركة (للشركات فقط ) .</li>
                    <li>صورة اخر ميزانية للشركة ( مركز مالى ) صادرة من مكتب محاسب قانونى .</li>
                    <li>طلب القيد او تجديد القيد باسم السيد المهندس / رئيس مجلس ادارة شركة مياه الشرب والصرف الصحي بالدقهلية - موضح به العنوان والتليفونات وكافة البيانات عن الشركة </li>
                    <li>ملف بلاستيك.</li>
                    <li>سداد رسوم التسجيل وقدرها 456 جنيه شاملة ضريبة المبيعات .</li>
                    <li>يتم تقدم أصل المستندات المذكورة عاليه للاطلاع عليها و اعادتها .</li>
                </ul>
            </div>
        </div>
        
    </div>
</div>


<?php include "footer.php"; ?>