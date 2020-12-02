    <?php
    $sys_id = $_GET['sys_id'];
     $user_id = $_GET['user_id'];
     $letter_no = $_GET['letter_no'];
     $valid = $_GET['valid'];

     $arr_area = array(
        1 => "غرب المنصورة",
        2 => "شرق المنصورة",
        3 => "مركز المنصورة",
        4 => "ميت سلسيل",
        5 => "طلخا",
        6 => "نبروه",
        7 => "بلقاس",
        8 => "الجمالية",
        9 => "المطرية",
        10 => "المنزلة",
        11 => "بني عبيد",
        12 => "جمصة",
        13 => "شربين",
        14 => "دكرنس",
        15 => "تمي الأمديد",
        16 => "منية النصر",
        17 => "أجا",
        18 => "ميت غمر",
        19 => "السنبلاوين",
        22 => "الكردي",
        55 => "مركزي"
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

var letter_no = GetURLParameter('letter_no');
var userid = GetURLParameter('user_id');
          
         /** Initiates a scan */
         function scanToLocalDisk() {
             var extention = document.getElementById('ext').value;
             var path = "${SCAN_HOME}\\"+userid+"\\"+'L_'+letter_no+"\\${TMS}${EXT}";
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
 
     if(!file_exists('scanned/'.$user_id.'/'.'L_'.$letter_no.'')){
             mkdir('scanned/'.$user_id.'/'.'L_'.$letter_no.'', 0777, true);
         }
       } else {
         if(!file_exists('scanned/'.$user_id.'/'.'L_'.$letter_no.'')){
             mkdir('scanned/'.$user_id.'/'.'L_'.$letter_no.'', 0777, true);
         }
       }
    $dir = 'scanned/'.$user_id.'/'.'L_'.$letter_no.'/';
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
            
 <?php foreach ($results as $result) {
     ?>
               <div class="row">
             <div class="col">
                     <p>  مسئول الأرشفة : </p>  
                 </div>
             <div class="col detail">
                 <p> <?php echo $result['EMP_NAME']; ?></p>
 
                 </div>

                 <div class="col">
                 <p>   مقر العمل :  </p>  
                 </div>
             <div class="col detail">
                 <p>  <?php echo $result['MAKAR_AMAL_DESC']; }?></p>
 
                 </div>
                 
                 
             </div>
             <hr/>

             <?php 
             $stmt5 = $connect2->prepare("SELECT * FROM LETTERS_CLAIMS where LETTER_NO = ?");
             $stmt5->execute(array($letter_no));
             $results5 = $stmt5->fetchAll(PDO::FETCH_ASSOC);

             foreach($results5 as $result5){
             ?>

        <div class="row">
            <div class="col">
                     <p>  رقم الخطاب : </p>  
                 </div>
             <div class="col detail">
                 <p> <?php echo $letter_no; ?></p>
                 </div>         
   
            <div class="col">
                    <p>  المركز : </p>  
                </div>
            <div class="col detail">
                <p> <?php echo $arr_area[intval($result5['CENTER_NO_FK'])]; ?></p>

                </div>
                
                
            </div>
            <hr/>
            <div class="row">
            <div class="col">
                <p>   الفرع : </p>  
                </div>
            <div class="col detail">
                <p>  <?php echo $result5['BRANCH_NO_FK']; ?></p>

                </div>
                <div class="col">
                    <p>   المجموعة : </p>  
                </div>
                <div class="col detail">

                <p>  <?php echo $result5['GROUP_NO_FK'];  ?></p>

                </div>
            </div>
            <hr/>
            <div class="row">
                <div class="col">
                    <p>  الشهر : </p>  
                </div>
                <div class="col detail">

                <p>  <?php echo $result5['MONTH_NO']; ?></p>

                </div>

                <div class="col">
                    <p>  السنة :  </p>  
                </div>
                <div class="col detail">

                <p>  <?php echo $result5['YEAR_NO']; ?></p>

                </div>
               
                
            </div>
            <hr/>
            <?php 

              $conn = oci_connect('billing', 'billing', '110.110.110.157/orcl', 'UTF8');
              if (!$conn) {
                  $e = oci_error();
                  trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
              }
              $sql ="select PROCESS_LATTERS.get_DIRECTED_TO_Name(:cust_no, :center, :branch) from dual";

              $stid = oci_parse($conn, $sql);
              oci_bind_by_name($stid, ':cust_no', $result5['DIRECTED_TO']);
              oci_bind_by_name($stid, ':center', $result5['CENTER_NO_FK']);
              oci_bind_by_name($stid, ':branch', $result5['DIRECTING_TYPE_CODE_FK']);
              oci_execute($stid);
            $customers = oci_fetch_assoc($stid);
            ?>

            <div class="row">
                <div class="col">
                    <p>  اسم العميل : </p>  
                </div>
                <div class="col detail">
 
                <p>  <?php
                foreach($customers as $cust) {
                echo $cust;
                }
            } ?></p>

                </div>
            </div>        

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
         <input type="text" placeholder="ملاحظات"  id="notes" class="form-control" style="border:2px solid #138496;color:#138496;font-weight:bold; height:50px;" />
         <br/>
             
             <button type="submit" id="move2" class="btn btn-info" type="button">أرشفة الملفات</button>
 
             
 
         </div>
         
 </div>
         
         <strong>
             <p class="text-danger" id="response" style="margin:20px !important;"></p>
         </strong>
      <!--   <div id="log"></div> -->
      <div id="saved" class="text-success" style="margin:20px !important;"></div> 
      <div id="Info2"></div>
      <hr/>
      
 <div id="upload_section" class="bg-light">
     <div class="row">
 
 <h4>رفع ملفات</h4>
 
        <div class="col">
        <input name="files2[]" type="file" id="files2" class="form-control"  multiple="multiple" />
        <input name="user" type="hidden" id="user" class="form-control" value="<?php echo $user_id; ?>" />
        <input name="letter_no" type="hidden" id="letter_no" class="form-control" value="<?php echo $letter_no; ?>" />

        
        </div>
  
        <div class="col">
        <div class="alert alert-warning text-center">
                                                         <strong>
                                                     الصيغ المسموحة فقط 
                                                <br/>
                                                     (
                                                          jpg, jpeg, png, pdf, xls, xlsx, csv, doc, docx, zip, ppt, pptx
                                                     )
                                                     </strong>
                                                     </div>
        
        </div>
  </div>
  <div class="row" id="uploadmsg"></div>
     </div>
 </div>