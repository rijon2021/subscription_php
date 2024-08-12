<?php
define('DB_SERVER','localhost');
define('DB_USER','websuppo_rijon');
define('DB_PASS' ,'rijon@2023#');
define('DB_NAME', 'websuppo_wsbd');
$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);

// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
 }

?>

