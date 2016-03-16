<?php
$dbhost = "localhost";
$dbname = "artcamera";
$dbuser = "admin";
$dbpass = "admin";
$connect = @mysql_connect($dbhost, $dbuser, $dbpass) or die (mysql_error());
@mysql_select_db($dbname) or die (mysql_error());
?>