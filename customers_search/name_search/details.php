<?php session_start();
include 'connect.php';

?>
<html>

<head>
  <meta charset="utf-8">
  <meta name="description" content="الفاتورة شركة مياه الشرب والصرف الصحي بالدقهلية">
  <meta name="keywords" content="Dakahlia,Water,Sewer,Company,شركة مياه الدقهلية,شركة مياه الشرب والصرف الصحي بالدقهلية">
  <meta name="author" content="Eng. Ahmed Elemam">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>الاستعلام عن العملاء | شركة مياه الشرب والصرف الصحى بالدقهلية </title>
  <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
  <link href="css/font-awesome.css" rel="stylesheet" type="text/css" />
  <link href="https://fonts.googleapis.com/css?family=Cairo:400,600,700,900&amp;subset=arabic" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Amiri:400,700&amp;subset=arabic" rel="stylesheet">
  <link href="css/bill.css?<?php echo md5_file('css/bill.css'); ?>" rel="stylesheet" type="text/css" />
  <link rel="SHORTCUT ICON" href="graph/icon.gif" type="image/x-icon" />

</head>

<body>

  <?php 
 
  
  if(isset($_GET['area']) and isset($_GET['b']) and isset($_GET['g']) and isset($_GET['acc'])){
    
    $area = $_GET['area'];
    $branch = $_GET['b'];
    $group = $_GET['g'];
    $account = $_GET['acc'];

	$monthName = array(
            1 => "يناير",
            2 => "فبراير",
            3 => "مارس",
            4 => "أبريل",
            5 => "مايو",
            6 => "يونيو"  ,
            7 => "يوليو",
            8 => "أغسطس",
            9 => "سبتمبر",
            10 => "أكتوبر",
            11 => "نوفمبر",
            12 => "ديسمبر"
    );
	$ِmeterStat = array(
            1 => "سليم",
            2 => "متعطل",
            3 => "غير مقروء",
            4 => "متوسط سليم",
            5 => "متوسط متعطل",
            6 => "متوسط غير مقروء"

    );
    $accountType = array(
            1 => 'منزلى',
            2 => 'قائم عمارة',
            8 => 'تجاري',
            10 => 'حكومة',
            22 => 'خدمي',
            23 => 'صناعي',
            24 => 'سياحي',
            25 => 'أخرى',
            40 => 'ممارسة منزلي',
            41 => 'ممارسة 2 غرفة',
            42 => 'ممارسة 3 غرفة',
            43 => 'ممارسة',
            44 => 'ممارسة تجاري',
            46 => 'ممارسة حكومي ',
            50 => 'ممارسة',
            51 => 'ممارسة صرف صحي ',
            52 => 'ممارسة صرف صحي',
            53 => 'ممارسة صرف صحي',
            54 => 'ممارسة صرف صحي',
            55 => 'ممارسة صرف صحي',
            56 => 'ممارسة صرف صحي',
            57 => 'ممارسة صرف صحي',
            58 => 'ممارسة صرف مغسلة',
            59 => 'ممارسة صرف صحي',
            51 => 'ممارسة صرف صحى',
            52 => 'ممارسة صرف صحى',
            53 => 'ممارسة صرف صحى',
            54 => 'ممارسة صرف صحى',
            55 => 'ممارسة صرف صحى',
            56 => 'ممارسة صرف صحى',
            57 => 'ممارسة صرف',
            58 => 'ممارسة صرف صحى',
            59 => 'ممارسة صرف'
    );
    
      $arr_city = array(
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

);
       // View From DB
          
    $stmt = $connect->prepare("SELECT * FROM bills1 WHERE district_number = ? and branch_no = ? and group_no = ? and account_no = ? ");
    $stmt->execute(array($area, $branch, $group, $account));
    $data = $stmt->fetchAll(); 
    foreach($data as $row){
  
  ?>
    <div class="container-fluid text-center">
      <br/>
      <div align="center">
        <table width="100%" align="center" class="maintable">
          <tr>
            <td>
              <table class="tbl_layout">
                <tr>
                  <td width="38%" align="center" valign="bottom">

                    <div>
                      <p><img src="graph/logo.png" alt="company logo" width="85" height="85" /></p>
                      <table class="tbl_4">

                        <tr>
                          <td class="sec_1">المبلغ</td>
                          <td class="sec_1">رقم الفاتورة </td>
                          <td class="sec_1">تاريخ الاستحقاق </td>
                        </tr>

                        <tr>
                          <td class="sec_2 ar">
                            <?php echo $row['bill_net']; ?>
                          </td>
                          <td class="sec_2 ar">
                            <?php echo $row['bill_no']; ?>
                          </td>
                          <td class="sec_2 ar">قيمة الايصال الحالى </td>
                        </tr>

                        <?php if(doubleval($row['arr_bill_val']) > 0){ ?>
                          <!-- show only if there is an recent bill -->
                          <tr>
                            <td class="sec_2 ar">
                              <?php echo $row['arr_bill_val']; ?>
                            </td>
                            <td class="sec_2 ar">
                              <?php echo $row['rr_arr_bill_no']; ?>
                            </td>
                            <td class="sec_2 date ar">
                              <?php echo $row['arr_due_date']; ?>
                            </td>
                          </tr>

                          <?php }?>

                            <tr>
                              <td class="sec4 ar"><?php echo $row['bill_all']; ?> </td>
                              <td colspan="2" class="sec4">المبلغ المستحق</td>
                            </tr>
                      </table>
                    </div>


                  </td>
                  <td width="62%" align="center" valign="top">
                    <table class="tbl_1">
                      <tr>
                        <td class="tbl_1_sec_1">شركة مياة الشرب والصرف الصحي بالدقهلية </td>
                      </tr>
                      <tr>
                        <td class="tbl_1_sec_2">
                          <p>فاتورة استهلاك المياه والصرف الصحى</p>
                          <p>&nbsp;</p>
                        </td>
                      </tr>
                      <tr>
                        <td class="tbl_1_sec_3" dir="rtl"> السيد :  
							<span class="ar">
                              <?php
                            if(intval($row['temp_account']) == 1) {
                              echo "حساب مؤقت - ".$row['branch_no']." / ".$row['group_no']." / ".$row['account_no'];
                            }
                            else {
                              echo "      ".$row['customer_name'];
                                    } ?>
						</span>
                        </td>

                      </tr>
                      <tr>
                        <td class="tbl_1_sec_3" dir="rtl">العنوان : 
						<span class="ar">
                          <?php echo $arr_city[intval($row['district_number'])] ." - ".$row['building_address_1']; ?>
						</span>
                        </td>
                      </tr>
                    </table>
                  </td>
                </tr>
              </table>
              <br />
              <table class="tbl_2">
                <tr>
                  <td height="21" class="sec_1">شهر الاصدار </td>
                  <td class="sec_1">رقم الفاتورة </td>
                  <td class="sec_1">تاريخ الاستحقاق </td>
                  <td class="sec_1">عدد أشهر المحاسبة </td>
                </tr>
                <tr>
                  <td class="sec_2 ar">
                    <?php echo $monthName[intval($row['month_no'])]; ?>
                  </td>
                  <td class="sec_2 ar">
                    <?php echo $row['bill_no']; ?>
                  </td>
                  <td class="sec_2 date ar">
                    <?php echo $row['due_date']; ?>
                  </td>
                  <td class="sec_2 ar">
                    <?php echo "شهر"; ?>
                  </td>
                </tr>
              </table>
              <br />
            </td>
          </tr>
          <tr>
            <td>
              <table class="tbl_layout">
                <tr>

                  <td>
                    <table class="tbl_layout_hide">
                      <tr>
                        <td>
                          <table class="tbl_3">
                            <tr>
                              <td class="sec_1">نوع الحساب </td>
                              <td class="sec_1">المبنى</td>
                              <td class="sec_1">منطقة</td>
                              <td class="sec_1">وحدات</td>
                              <td class="sec_1">رقم الحساب </td>
                              <td class="sec_1">مجموعة</td>
                              <td class="sec_1">فرع</td>
                            </tr>
                            <tr>
                              <td class="sec_2 ar">
                                 <?php echo $accountType[intval($row['account_type_code'])];
                                  ?>
                               
                              </td>
                              <td class="sec_2 ar">
                                <?php echo $row['file_no']; ?>
                              </td>
                              <td class="sec_2 ar">
                                <?php echo $row['district_no']; ?>
                              </td>
                              <td class="sec_2 ar">
                                <?php echo $row['apartments_no']; ?>
                              </td>
                              <td class="sec_2 ar">
                                <?php echo $row['account_no']; ?>
                              </td>
                              <td class="sec_2 ar">
                                <?php echo $row['group_no']; ?>
                              </td>
                              <td class="sec_2 ar">
                                <?php echo $row['branch_no']; ?>
                              </td>
                            </tr>
                          </table>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <table class="tbl_3">
                            <tr>
                              
                              <td class="sec_1">الاستهلاك م3 </td>
                              <td class="sec_1">القراءة السابقة </td>
                              <td class="sec_1">القراءة الحالية </td>
                              <td class="sec_1">حالة العداد</td>
                              
                            </tr>
                            <tr>
                             
                              <td class="sec_2 ar">
                                <?php echo $row['consump']; ?>
                              </td>
                              <td class="sec_2 ar">
                                <?php echo $row['last_reading']; ?>
                              </td>
                              <td class="sec_2 ar">
                                <?php echo $row['new_reading']; ?>
                              </td>
                               <td class="sec_2 ar">
                                <?php echo $ِmeterStat[intval($row['meter_stat_code'])]; ?>
                              </td>
                              
                            </tr>
                          </table>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <table class="tbl_3">
                            <tr>
                              <td class="sec_1">خدمات</td>
                              <td class="sec_1">صرف صحى </td>
                              <td class="sec_1">الاستهلاك</td>
                            </tr>
                            <tr>
                              <td class="sec_2 ar">
                                <?php echo $row['mkml_val']; ?>
                              </td>
                              
                              <td class="sec_2 ar">
                                <?php echo $row['sanitary_val']; ?>
                              </td>
                              <td class="sec_2 ar">
                                <?php echo $row['consump_val']; ?>
                              </td>
                            </tr>
                          </table>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <table width="100%" border="0" cellspacing="0" cellpadding="0">
                            <tr>
                              <td>
                                <table class="tbl_3">
                                  <tr>
                                    <td class="sec_1">متأخرات</td>
                                  </tr>
                                  <tr>
                                    <td class="sec_2 ar">
                                      <?php echo $row['balance']; ?>
                                    </td>
                                  </tr>
                                </table>
                              </td>
                              <td>
                                <table class="tbl_3">
                                  <tr>
                                    <td class="sec_1">أقساط</td>
                                    <td class="sec_1">حد استدامة</td>
                                  </tr>
                                  <tr>
                                    <td class="sec_2 ar">
                                      <?php echo $row['instal_val']; ?>
                                    </td>
                                    <td class="sec_2 ar">
                                      <?php echo $row['wtr+san_srvs_chrg']; ?>
                                    </td>
                                  </tr>
                                </table>
                              </td>
                            </tr>
                          </table>
                        </td>
                      </tr>
                    </table>
                  </td>
                </tr>
              </table>
            </td>
          </tr>
        </table>
      </div>
      <?php 
 }
  } ?>
      <br/>
      <div class="btns text-center">
        <a href="javascript:print();" class="btn btn-success"> طباعة  <i class="fa fa-print" aria-hidden="true"></i></a>
        <a class="btn btn-success" href="index.php"> بحث <i class="fa fa-search" aria-hidden="true"></i> </a>
        
      </div>


      <hr/>
      <footer class="text-center">
        <img src="graph/billing-system.png" alt="billing system" width="250" height="20" style="margin-bottom:10px" />
        <p> حقوق الطبع محفوظة  &copy;  شركة مياه الشرب والصرف الصحى بالدقهلية 2017</p>
        
      </footer>
    </div>
<script src="js/jquery.min.js"></script>

<script src="js/bootstrap.min.js?<?php echo md5_file('js/bootstrap.min.js'); ?>"></script>
<script src="js/js.js?<?php echo md5_file('js/js.js'); ?>"></script>
</body>

</html>