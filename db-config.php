<?php
/**
 * mysql_connect is deprecated
 * using mysqli_connect instead
 */

$databaseHost     = 'sql111.epizy.com';
$databaseName     = 'epiz_28482905_maindb';
$databaseUsername = 'epiz_28482905';
$databasePassword = '4moBzFZenh4';

$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);
?>