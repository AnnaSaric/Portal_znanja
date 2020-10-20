<?php
//konfiguracija baze podataka
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname = 'portal_znanja';

$conn = mysql_connect($dbhost, $dbuser, $dbpass) or die ('Error connecting to mysql');
mysql_select_db($dbname);
mysql_query("SET NAMES utf8");
mysql_query("SET CHARACTER SET utf8");
mysql_query("SET COLLATION_CONNECTION='utf8_unicode_ci'");

?>