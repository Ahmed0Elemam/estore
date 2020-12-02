<?php

/*---------------------------------------------------------
**  Check items Exist in DB v1.0 (One Item)
**  Function Accept Parameters
**  $select = select item
**  $from   = Table
**  $value  = values to be selected after where condition
----------------------------------------------------------*/
function checkItem1($select, $from, $value) {
    global $connect;
    $check = $connect->prepare("SELECT $select FROM $from WHERE $select = ?");
    $check->execute(array($value));
    $count = $check->rowCount();
    return $count;
}

/*---------------------------------------------------------
**  Check items Exist in DB v1.0 (Two items)
**  Function Accept Parameters
**  $select = select item
**  $from   = Table
**  $value  = values to be selected after where condition
----------------------------------------------------------*/
function checkItem2($select1, $select2, $from, $value1, $value2) {
    global $connect;
    $check = $connect->prepare("SELECT $select1,$select2 FROM $from WHERE $select1 = ? AND $select2 = ?");
    $check->execute(array($value1, $value2));
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

/*---------------------------------------------------------
**  
** Not Null Function v1.0
** 
----------------------------------------------------------*/

function notNull($row) {
    if($row == null or $row == 0 or $row == '') {
        echo "لا توجد بيانات";
    } else {
        echo $row;
    }
}


function user_name(){
    include_once '../dbconfig.php';
    $stmt = $db_con->prepare("SELECT * FROM tbl_users WHERE user_id=:uid");
    $stmt->execute(array(":uid"=>$_SESSION['user_session']));
    $row=$stmt->fetch(PDO::FETCH_ASSOC);
    echo $row['user_name'];    

}