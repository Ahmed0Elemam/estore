<?php
$server_name = "110.110.110.95\\SMART";
$db_name = "hrdb";


try
{

    $conn = new PDO("sqlsrv:Server=$server_name;Database=$db_name", "amir", "amir");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}
catch(PDOException $e)
{

    $e->getMessage();

}
?>