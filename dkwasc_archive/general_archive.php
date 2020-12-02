<?php
    $treatment_type = $_GET['treatment_type'];
    $type = $_GET['type'];
    $treatment_id = $_GET['treatment_id'];
    $treatment_year = $_GET['treatment_year'];
    $department = $_GET['department'];
    $treatment_cat = $_GET['treatment_cat'];
    $sys_id = $_GET['sys_id'];
    $user_id = $_GET['user_id'];
    $valid = $_GET['valid'];

$arr_treatment_type = array (
 0 => "وارد",
 1 => "صادر"
);
$arr_type = array (
    0 => "داخلي",
    1 => "خارجي"
   );


?>


    <script>
    function GetURLParameter(sParam) {
    var sPageURL = window.location.search.substring(1);
    var sURLVariables = sPageURL.split('&');
    for (var i = 0; i < sURLVariables.length; i++) {
        var sParameterName = sURLVariables[i].split('=');
        if (sParameterName[0] == sParam) {
            return sParameterName[1];
        }
    }
  }
  var treatment_type= GetURLParameter('treatment_type');
 var type = GetURLParameter('type');
 var treatment_id = GetURLParameter('treatment_id');
 var treatment_year = GetURLParameter('treatment_year');
 var department = GetURLParameter('department');
  var treatment_cat = GetURLParameter('treatment_cat');
var userid = GetURLParameter('user_id');
         
        /** Initiates a scan */
        function scanToLocalDisk() {
            var extention = document.getElementById('ext').value;
            var path = "${SCAN_HOME}\\"+userid+"\\"+treatment_type+"_"+department+"_"+treatment_year+"_"+treatment_id+"\\${TMS}${EXT}";
        if(extention == 1) {
            var ext = "jpg";
        } else {
            var ext = "pdf";
        }
            scanner.scan(displayResponseOnPage,
                {
                    "output_settings": [
                        {
                            "type": "save",
                            "format": ext,
                            "save_path": path,
                            
                        }
                    ]
                }
            );
        }
        function displayResponseOnPage(successful, mesg, response) {
            if(!successful) { // On error
                document.getElementById('response').innerHTML = 'خطأ: ' + mesg;
                return;
            }
            if(successful && mesg != null && mesg.toLowerCase().indexOf('user cancel') >= 0) { // User cancelled.
                document.getElementById('response').innerHTML = 'تم إلغاء عملية السحب بواسطة المستخدم';
                return;
            }


            //document.getElementById('log').innerHTML = scanner.getSaveResponse(response);
            document.getElementById('saved').innerHTML = 'تم سحب الملفات بنجاح';
        }


    </script>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

</head>
<body>
    <div class="container">
    <?php


    if(!file_exists('scanned/'.$user_id.'')) {
        mkdir('scanned/'.$user_id.'', 0777, true);

    if(!file_exists('scanned/'.$user_id.'/'.$treatment_type.'_'.$department.'_'.$treatment_year.'_'.$treatment_id.'')){
            mkdir('scanned/'.$user_id.'/'.$treatment_type.'_'.$department.'_'.$treatment_year.'_'.$treatment_id.'', 0777, true);
        }
      } else {
        if(!file_exists('scanned/'.$user_id.'/'.$treatment_type.'_'.$department.'_'.$treatment_year.'_'.$treatment_id.'')){
            mkdir('scanned/'.$user_id.'/'.$treatment_type.'_'.$department.'_'.$treatment_year.'_'.$treatment_id.'', 0777, true);
        }
      }
      $dir = 'scanned/'.$user_id.'/'.$treatment_type.'_'.$department.'_'.$treatment_year.'_'.$treatment_id.'/';
     $files = glob($dir . "*");
// Delete old temporary files 
     if($files && ( (date('d-m-Y',filemtime($dir))) != (date('d-m-Y')) ) ) {
            foreach($files as $file){ // iterate files
                if(is_file($file))
                  unlink($file); // delete file
              }

      }


$stmt = $connect->prepare("SELECT * FROM basic_info_vw where EMP_NO = ?");
$stmt->execute(array($user_id));
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

$stmt3 = $connect->prepare("SELECT * FROM systems where SYS_ID = ?");
$stmt3->execute(array($sys_id));
$results3 = $stmt3->fetchAll(PDO::FETCH_ASSOC);

?>

<div class="row">
    <div class="col">
    <?php 
    foreach($results3 as $result3) {
    ?>
        <h2 class="text-info"><?php echo $result3['SYS_NAME']; ?></h2>
    <?php 
        }
    ?>
    </div>

    <div class="col">
     
                <h3>الأرشيف الإلكتروني</h3>

                <img src="images/ds.png" class="img img-thumnail" width="150" height="150" />

    </div>
</div>


<hr/>
<div id="details" class="alert alert-info">
    <p>
       رقم المعاملة:  <?php echo $treatment_id ?>
    </p>
<hr/>
<?php foreach ($results as $result) {
    ?>
            <div class="row">
            <div class="col">
                    <p>  مسئول الأرشفة </p>  
                </div>
            <div class="col">
                <p> <?php echo $result['EMP_NAME']; ?></p>

                </div>
                
                
            </div>
            <hr/>
            <div class="row">
            <div class="col">
                <p>  مقر العمل  </p>  
                </div>
            <div class="col">
                <p>  <?php echo $result['MAKAR_AMAL_DESC'];  }?></p>

                </div>
               
                
            </div>
            <hr/>
            <?php 

$stmt2 = $connect->prepare("select LOOKUPS_DATA_CTS.get_TREATMENT_CATEGORIES(?, ?) as category from dual");
$stmt2->execute(array($treatment_cat, $department));
$results2 = $stmt2->fetchAll(PDO::FETCH_ASSOC);
     
            ?>


            <div class="row">
                <div class="col">
                    <p>  التصنيف  </p>  
                </div>
                <div class="col">

                    <p> <?php
                    foreach($results2 as $result2){
                    echo $result2['CATEGORY']; 
                    }
                    ?></p>

                </div>
            </div>
    <!--        <hr/>
            <div class="row">
                <div class="col">
                    <p>  عدد المرفقات  </p>  
                </div>
                <div class="col">
                    <p> <?php echo $attach_no; ?></p>

                </div>
            </div>

            -->
        </div>
        <hr/>
        <div class="alert alert-danger">
        <h4 style="font-weight:bold;" class="text-right">تنويه هام</h4>
        <p style="font-weight:bold;" class="text-right">
          سوف يتم حذف أي ملفات لم يتم أرشفتها اليوم التالي مباشرة ، الرجاء التأكد من الضغط على زر أرشفة الملفات بعد سحب أو رفع أي ملفات
        </p>
        </div>
     <hr/>

<div class="row">
            <div class="col">

                <select id="ext" class="form-control" style="height:50px;border:2px solid #0069D9;color:#0069D9;font-weight:bold;">
                            <option value="1">JPG</option>
                            <option value="2">PDF</option>
                </select>
                <br/>
            <button class="btn btn-primary" type="button" onclick="scanToLocalDisk();">سحب الملفات</button>
            
  
            
            
        </div>
        <div class="col">
    <!--    <input type="text" placeholder="ملاحظات"  id="notes" class="form-control" style="border:2px solid #138496;color:#138496;font-weight:bold; height:50px;" />
        <br/>
            -->
            <button type="submit" id="move_g" class="btn btn-info" type="button">أرشفة الملفات</button>

            

        </div>
        
</div>
        
        <strong>
            <p class="text-danger" id="response" style="margin:20px !important;"></p>
        </strong>
     <!--   <div id="log"></div> -->
     <div id="saved" class="text-success" style="margin:20px !important;"></div> 
     <div id="Info"></div>
     <hr/>
     
<div id="upload_section" class="bg-light">
    <div class="row">

<h4>رفع ملفات</h4>

       <div class="col">
       <input name="files_g[]" type="file" id="files_g" class="form-control"  multiple="multiple" />
       <input name="user" type="hidden" id="user" class="form-control" value="<?php echo $user_id; ?>" />
       <input name="treatment_type" type="hidden" id="treatment_type" class="form-control" value="<?php echo $treatment_type; ?>" />
       <input name="department" type="hidden" id="department" class="form-control" value="<?php echo $department; ?>" />
       <input name="treatment_year" type="hidden" id="treatment_year" class="form-control" value="<?php echo $treatment_year; ?>" />
       <input name="treatment_id" type="hidden" id="treatment_id" class="form-control" value="<?php echo $treatment_id; ?>" />
       
       </div>
 
       <div class="col">
       <div class="alert alert-warning text-center">
                                                        <strong>
                                                    الصيغ المسموحة فقط 
                                               <br/>
                                                    (
                                                         jpg, jpeg, png, pdf, xls, xlsx, csv, xer, doc, docx, zip, rar, iso, ppt, pptx, dwg, kml, kmz 
                                                    )
                                                    </strong>
                                                    </div>
       
       </div>
 </div>
 <div class="row" id="uploadmsg"></div>
    </div>
</div>