<?php
$dsn = 'oci:dbname=110.110.110.157/orcl;charset=utf8';
$user = 'cts';
$pass = 'cts';

try {
// db connection
$connect = new PDO($dsn, $user, $pass);
 $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
}
?>