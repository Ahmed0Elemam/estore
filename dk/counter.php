<?php

include "connect.php";

if (!isset($_SESSION['hasVisited'])) {
    $_SESSION['hasVisited'] = "yes";
    $Query = $connect->prepare("UPDATE count SET countView = countView + 1");
    $Query->execute();
}


$select = $connect->prepare("SELECT * FROM count");
$select->execute();
$row = $select->fetch(PDO::FETCH_ASSOC);
$counter = $row['countView'];

?>