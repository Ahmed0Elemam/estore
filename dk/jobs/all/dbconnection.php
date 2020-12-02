<?php
//database connection
	$hostname_miaah = "localhost";
	$database_miaah = "dkwasc_miah1";
	$username_miaah = "appuser";
	$password_miaah = "app@user@dkwasc";
	$link = mysql_pconnect($hostname_miaah, $username_miaah, $password_miaah) or trigger_error(mysql_error(),E_USER_ERROR);


	mysql_select_db($database_miaah);
	mysql_query("SET CHARSET utf8",$link);
	mysql_query("SET NAMES utf8",$link);

?>
