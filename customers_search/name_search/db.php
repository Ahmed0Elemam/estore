

<?php
$limit = 50;
$adjacent = 2;
$con = mysqli_connect("localhost","appuser","app@user@dkwasc","dkwasc_miah1");
mysqli_set_charset($con,"utf8");
if(mysqli_connect_errno()){
echo "Database did not connect";
exit();
}

?>