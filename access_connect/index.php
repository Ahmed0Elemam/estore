<html>
<head>
<meta charset="utf-8">

</head>



<body>
<?php
 
// Database Connection
    $dbName = $_SERVER["DOCUMENT_ROOT"] . "/access_connect/db/atmida.mdb";

    if (!file_exists($dbName)) {
        die("Could not find database file.");
    }
    $db = new PDO("odbc:DRIVER={Microsoft Access Driver (*.mdb)}; DBQ=$dbName; Uid=; Pwd=;");


    $sql  = "SELECT * FROM Assets";


$result = $db->query($sql);
$row = $result->fetch();

echo iconv('windows-1256','utf-8',$row['AssetName']);


?>

</body>
</html>



