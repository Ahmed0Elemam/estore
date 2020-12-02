<!DOCTYPE HTML>

<html>

<head>

 <script language="javascript" src="js/js5.js?<?php echo md5_file("js/js5.js")?>" type="text/javascript"></script> 

</head>

<body>


    <div class="panel panel-primary text-center">
        <div class="panel-heading"> مطالبات الترخيص</div>
        <div class="panel-body">
            <div class="col-md-6">
                <form id="t1" method="POST" action="t1.php">
                    <div class="form-group">
                      
                       <div class="row">

                            <div class="col-md-4">
                                <label> المنطقة </label>
                            </div>
                            <div class="col-md-8">
                                <input class="form-control" type="text" name="area1" id="area1" placeholder="الرجاء ادخال اسم المنطقة " />
                                <div class="alert alert-danger custom-alert"> الرجاء ادخال اسم المنطقة  </div>

                            </div>
                        </div>
                       
                           <div class="row">
                            <div class="col-md-4">
                                <label>المنشأة </label>
                            </div>
                            <div class="col-md-8">
                                <input class="form-control" id="building1" type="text" name="building1" placeholder="الرجاء ادخال اسم المنشأة" />
                                <div class="alert alert-danger custom-alert"> الرجاء ادخال اسم المنشأة  </div>

                            </div>

                        </div>
                       
                       

                        <div class="row">
                            <div class="col-md-4">
                                <label>الاسم </label>
                            </div>
                            <div class="col-md-8">
                                <input class="form-control" id="name1" type="text" name="name1" placeholder="الرجاء ادخال الاسم" />
                                <div class="alert alert-danger custom-alert"> الرجاء ادخال الاسم   </div>

                            </div>

                        </div>

                        <div class="row">

                            <div class="col-md-4">
                                <label> العنوان </label>
                            </div>
                            <div class="col-md-8">
                                <input class="form-control" type="text" name="address1" id="address1" placeholder="الرجاء ادخال العنوان " />
                                <div class="alert alert-danger custom-alert"> الرجاء ادخال العنوان  </div>

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <label> مساحة المكان </label>
                            </div>
                            <div class="col-md-8">
                                <input class="form-control" type="text" name="m2" id="m2" placeholder="الرجاء ادخال مساحة المكان " />
                                <div class="alert alert-danger custom-alert"> الرجاء ادخال مساحة المكان   </div>

                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <div class="col-md-12 text-center">
                                <input type="submit" class="btn btn-info text-center" id="btn_t1" value="طباعة مطالبة الترخيص الموجهة لرئيس مجلس الادارة" />
                            </div>

                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-6">
                <form id="t2" method="POST" action="t2.php">
                    <div class="form-group">
                        <div class="row">

                            <div class="col-md-4">
                                <label> المنطقة </label>
                            </div>
                            <div class="col-md-8">
                                <input class="form-control" type="text" name="area2" id="area2" placeholder="الرجاء ادخال اسم المنطقة " />
                                <div class="alert alert-danger custom-alert"> الرجاء ادخال اسم المنطقة  </div>

                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <label>المنشأة </label>
                            </div>
                            <div class="col-md-8">
                                <input class="form-control" id="building2" type="text" name="building2" placeholder="الرجاء ادخال اسم المنشأة" />
                                <div class="alert alert-danger custom-alert"> الرجاء ادخال اسم المنشأة  </div>

                            </div>

                        </div>

                        <div class="row">

                            <div class="col-md-4">
                                <label> الاسم </label>
                            </div>
                            <div class="col-md-8">
                                <input class="form-control" type="text" name="name2" id="name2" placeholder="الرجاء ادخال الاسم" />
                                <div class="alert alert-danger custom-alert"> الرجاء ادخال الاسم   </div>

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <label> العنوان  </label>
                            </div>
                            <div class="col-md-8">
                                <input class="form-control" type="text" name="address2" id="address2" placeholder="الرجاء ادخال العنوان" />
                                <div class="alert alert-danger custom-alert"> الرجاء ادخال العنوان  </div>

                            </div>
                        </div>
                    </div>
                    <br/>
                    <br/>
         
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <div class="col-md-12 text-center">
                                <input type="submit" class="btn btn-info text-center" id="btn_t2" value="طباعة مطالبة الترخيص الموجهة لمدير المنطقة" />
                            </div>

                        </div>
                    </div>
                </form>


            </div>

        </div>
    </div>



</body>

</html>