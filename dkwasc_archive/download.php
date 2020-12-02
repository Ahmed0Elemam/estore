<!DOCTYPE html>
<head>
    <title>DKWASC ARCHIVE</title>
    <meta charset='utf-8'>
    <meta name="author" content="Eng. Ahmed Elemam">
    <link rel="SHORTCUT ICON" href="icon.gif" type="image/x-icon" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

</head>
<body dir="ltr">

<?php
ini_set('default_charset', 'UTF-8');

if(isset($_GET['path']) && isset( $_GET['name']) && isset($_GET['valid']) && $_GET['valid'] == 1) {
$path = $_GET['path'];
//$path = iconv('WINDOWS-1256', 'UTF-8', $path1);
$file_name = $_GET['name'];
$file =  $path.$file_name;
/*
echo '<a target="_blank" href='.$file.' download>
    <img src="images/download.png" width="100" height="100" />
</a>';*/
function DownloadFile($file) { // $file = include path
    if(file_exists($file)) {
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename='.basename($file));
        header('Content-Transfer-Encoding: binary');
        header('Expires: 0');
        header('Cache-Control: no-cache');
        header('Pragma: no-cache');
        header('Content-Length: ' . filesize($file));
        ob_clean();
        flush();
        readfile($file);
        exit;
    }
}

if (preg_match('/MSIE\s(?P<v>\d+)/i', @$_SERVER['HTTP_USER_AGENT'], $B) && $B['v'] <= 8) {
    // Browsers IE 8 and below
    echo '<a target="_blank" href='.$file.' download>
    <img src="images/download.png" width="100" height="100" />
</a>';
} else {
    // All other browsers
    DownloadFile($file);
}


} else {
    echo "
    <h2 class='alert alert-danger'>غير مصرح لك بتحميل هذا الملف
    <br/>
    انت لم تدخل عن طريق النظام الموحد للشركة
    </h2>'
    ";
}




?>

<script src="js/jquery.min.js" type="text/javascript"></script>
<script src="js/bootstrap.min.js" type="text/javascript"></script>
</body>
</html>