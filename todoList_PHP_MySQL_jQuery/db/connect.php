<?php

/* Database config */

$db_host		= 'localhost';
$db_user		= 'root';
$db_pass		= 'password';
$db_database	= 'tz_TODOapps';

/* End config */

// $link = @mysql_connect($db_host,$db_user,$db_pass) or die('Unable to establish a DB connection');
$conn = mysql_connect($db_host, $db_user, $db_pass);

if (!($conn)){
  die('Unable to establish a DB connection: ' . mysql_error());
}

mysql_set_charset('utf8');
mysql_select_db($db_database, $conn);

?>
