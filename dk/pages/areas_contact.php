<?php
//header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

include "connect.php";

$stmt = $connect->prepare("SELECT name, tel FROM areas_contact");
$stmt->execute();
$count = $stmt->rowCount();

$outp = "";
while($rs = $stmt->fetch(PDO::FETCH_ASSOC)) {
    if ($outp != "") {$outp .= ",";}
    $outp .= '{"area":"'.$rs["name"].'",';
    $outp .= '"tel":"'.$rs["tel"].'"}';
}
$outp ='{"records":['.$outp.']}';

echo($outp);
?>