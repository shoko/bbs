<?php
include("config.php");
include("bbslib.php");
define("COOKIE_NAME","simple_bbs");
define ("COOKIE_VALUE","hello");
if(isset($_COOKIE[COOKIE_NAME])){
	echo "連投はご遠慮ください";
} else {
$dbh = mysql_connect($db_host, $db_name, $db_username, $db_password);
if($dbh === false){
	echo "データベースに接続できません";
	exit();
}
$sqlstr = "use $db_name";
mysql_query($sqlstr,$dbh);
$mailaddr = $_POST['mailaddr'];
$name = $_POST['name'];
$pass = $_POST['pass'];
$subject = $_POST['subject'];
$body = $_POST['body'];

$mailaddr = mysql_real_escape_string(trim($mailaddr));
$name = mysql_real_escape_string(trim($name));
$pass = mysql_real_escape_string(trim($pass));
$subject = mysql_real_escape_string(trim($subject));
$body = mysql_real_escape_string(trim($body));

//if(strlen($name) && strlen($pass) && strlen($subject) && strlen($body)){
$sqlstr = "insert into mybbs values('',".
"'".$mailaddr."',".
"'".$name."',".
"'".$pass."',".
"0,".
"'".ip2long($_SERVER["REMOTE_ADDR"])."',".
"now(),".
"'".$subject."',".
"'".$body."')";
		//   exit($sqlstr);
	    $res = mysql_query($sqlstr, $dbh);
	    if( $res === false) {
	        echo "データベース登録失敗";
        } else {
         	setCookie(COOKIE_NAME,COOKIE_VALUE,time()+3600 );
         	echo "データベースに書き込み成功";
        }
//}
}
?>