<?php
$dsn = 'mysql:host=localhost;dbname=dkwasc_miah1';
$username = 'appuser';
$pass = 'app@user@dkwasc';
$option = array (
    PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'
);
try {
// db connection
$connect = new PDO($dsn, $username, $pass, $option);
 $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
}
?>