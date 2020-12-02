<?php

/*---------------------------------------------------------
**  Check items Exist in DB v1.0
**  Function Accept Parameters
**  $select = select item
**  $from   = Table
**  $value  = values to be selected after where condition
----------------------------------------------------------*/
function checkItem($select, $from, $value) {
    global $connect;
    $check = $connect->prepare("SELECT $select FROM $from WHERE $select = ?");
    $check->execute(array($value));
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