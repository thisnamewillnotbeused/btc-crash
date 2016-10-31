<?php
$username = "";
$password = "";
$hostname = "";

//connection to the database
$dbhandle = mysql_connect($hostname, $username, $password)
  or die("Unable to connect to MySQL database.");
echo "Connected to MySQL database.<br>";
?>
