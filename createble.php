<?php
include_once("config.php");
mysql_connect($db_host, $db_name, $db_username, $db_password);
$dbh = mysql_connect($db_host, $db_name, $db_username, $db_password);

$sqlstr = "use $db_name";

//echo "$sqlstr";
mysql_query($sqlstr, $dbh);

$sqlstr = "create table mybbs(".
"id INT AUTO_INCREMENT PRIMARY KEY,".
"mailaddr VARCHAR(80),".
"name VARCHAR(80),".
"password VARCHAR(20),".
"mark BOOLEAN,".
"remotehost INT,".
"dt TIMESTAMP,".
"subject TEXT,".
"body TEXT)";
$res = mysql_query($sqlstr,$dbh);

if ($res === false) echo "a";
echo $sqlstr;
?>