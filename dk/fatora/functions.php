<?php

/* ------------------------------------------------------------
** _______________Home Redirect Function v3.0________________**
** $theMsg  = echo the Message [Error | Success | Warning]   **
** $url     = link to be directed                            **
** $seconds = seconds before redirecting                     **
** ------------------------------------------------------------
*/
function redirectHome($theMsg, $url = null, $seconds = 5)
{
  if ($url === null) {
      $url  = '../index.php';
      $link = 'الصفحة الرئيسية للشركة';
  }
  elseif (isset($_SERVER['HTTP_REFERER']) && !empty($_SERVER['HTTP_REFERER'])) {
        $url  = $_SERVER['HTTP_REFERER']; // Get the link of the previous page (where you come)
        $link = 'صفحة الاستعلام عن الفاتورة';
      }
    echo $theMsg;
    echo '<div class="alert alert-info"> سيتم تحويلك الى '.$link.' خلال '.$seconds.' ثواني...</div></div>';
    header("refresh:".$seconds.";url=".$url."");
    exit();
}
/*---------------------------------------------------------
**  Check items Exist in DB v1.0
**  Function Accept Parameters
**  $select = select item
**  $from   = Table
**  $value  = values to be selected after where condition
----------------------------------------------------------*/
function checkItem($select1, $select2, $select3, $select4 , $from, $value1, $value2,$value3,$value4) {
    global $connect;
    $check = $connect->prepare("SELECT $select1,$select2,$select3,$select4 FROM $from WHERE $select1 = ? AND $select2 = ? AND $select3 = ? AND $select4 = ?");
    $check->execute(array($value1,$value2,$value3,$value4));
    $count = $check->rowCount();
    return $count;
}
/*---------------------------------------------------------
**  Count number of items in DB function v1.0
**  $item  = to be counted
**  $table = table of content in DB
----------------------------------------------------------*/
function countItems($item, $table, $condition = '')
{
  global $connect;
  $stmt2 = $connect->prepare("SELECT COUNT($item) FROM $table $condition");
  $stmt2->execute();
  echo $stmt2->fetchColumn();
}