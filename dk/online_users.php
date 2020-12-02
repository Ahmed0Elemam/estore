<?php
include "connect.php";

$session = session_id();
$time = time();
$time_check = $time - 300; //We Have Set Time 5 Minutes
$tbl_name = "online_users";


$stmt = $connect->prepare( "SELECT * FROM  $tbl_name WHERE session = ?");
$stmt->execute(array($session));
$count = $stmt->rowCount();


//If count is 0 , then enter the values
if ($count == "0") {

    $stmt1 =  $connect->prepare("INSERT INTO $tbl_name(session, time)VALUES(?, ?)");
    $stmt1->execute(array($session, $time));
}

// else update the values
else {
    $stmt2 = $connect->prepare("UPDATE $tbl_name SET time = ? WHERE session = ?");
    $stmt2->execute(array($time, $session));
}

$stmt3 = $connect->prepare("SELECT * FROM $tbl_name");
$stmt3->execute();
$count_user_online = $stmt3->rowCount();


// after 5 minutes, session will be deleted
$stmt4 = $connect->prepare("DELETE FROM $tbl_name WHERE time < ?");
$stmt4->execute(array($time_check));

