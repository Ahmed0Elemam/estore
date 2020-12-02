<?php
$dsn = 'oci:dbname=110.110.110.157/orcl;charset=utf8';
$user = 'billing';
$pass = 'billing';

try {
// db connection
$connect2 = new PDO($dsn, $user, $pass);
 $connect2->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
}
?>