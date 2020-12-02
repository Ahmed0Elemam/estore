<!DOCTYPE HTML>

<html>
<head>
<script language="javascript" src="js/js4.js?<?php echo md5_file("js/js4.js")?>" type="text/javascript"></script>

  


</head>
<body>

<form id="a3baa_form" method="POST">
    <div class="panel panel-primary text-center">
        <div class="panel-heading"> مقابل أعباء التنقية </div>
        <div class="panel-body">

            <div class="form-group">
                <div class="row">
                    <div class="col-md-6">
                        <div class="col-md-4">
                            <label>كود المنشأة</label> <span class="astrik">*</span>
                        </div>
                        <div class="col-md-8">
                            <input class="form-control" type="text" name="b_code" id="b_code" placeholder="الرجاء ادخال كود المنشأة" required />
                            <div class="alert alert-danger custom-alert"> يجب ادخال كود المنشأة </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="col-md-4">
                            <label>مسمى المنشأة</label>
                        </div>
                        <div class="col-md-8">
                            <input class="form-control" id="b_name" type="text" name="b_name" placeholder="مسمى المنشأة" readonly />
                           
                        </div>

                    </div>
                </div>
            </div>
            
            <div class="form-group">
                <div class="row">
                    <div class="col-md-6">
                        <div class="col-md-4">
                            <label>كمية المياه المنصرفة م3 </label> <span class="astrik">*</span>
                        </div>
                        <div class="col-md-8">
                            <input class="form-control" type="text" name="waterq" id="waterq" placeholder="الرجاء ادخال كمية المياه المنصرفة م3 " required />
                            <div class="alert alert-danger custom-alert"> يجب ادخال كمية المياه المنصرمة م3  </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr/>
            <h3 class="text-info">نتائج الملوثات</h3>
            <hr/>
            <div class="form-group">
                <div class="row">
                    <div class="col-md-6">
                        <div class="col-md-4">
                            <label> BOD </label>
                        </div>
                        <div class="col-md-8">
                            <input class="form-control" type="text" name="bod" id="bod" placeholder="BOD"  />
                         
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col-md-6">
                        <div class="col-md-4">
                            <label>COD</label> 
                        </div>
                        <div class="col-md-8">
                            <input class="form-control" type="text" name="cod" id="cod" placeholder="COD"  />
                     
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col-md-6">
                        <div class="col-md-4">
                            <label>TSS</label>
                        </div>
                        <div class="col-md-8">
                            <input class="form-control" type="text" name="tss" id="tss" placeholder="TSS"  />
                     
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col-md-6">
                        <div class="col-md-4">
                            <label>PH</label>
                        </div>
                        <div class="col-md-8">
                            <input class="form-control" type="text" name="ph" id="ph" placeholder="PH"  />
                     
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col-md-6">
                        <div class="col-md-4">
                            <label>O &amp; G</label> 
                        </div>
                        <div class="col-md-8">
                            <input class="form-control" type="text" name="og" id="og" placeholder="O&G"  />
                     
                        </div>
                    </div>
                </div>
            </div>
      

           <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="col-md-6 text-center">
                <input type="submit" class="btn btn-info text-center" id="print1-btn" value="طباعة مطالبة القطاع المالي" />
            </div>
            <div class="col-md-6 text-center">
                 <input type="submit" class="btn btn-info text-center" id="print2-btn" value="طباعة مطالبة مدير المنشأة " />
            </div>
        </div>
    </div>


        </div>
    </div>

</form>

<div id="sample_info"></div>
 
     </body>
</html>