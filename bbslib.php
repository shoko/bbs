<?php
function jdialog ( $message,$url = "index.php"){
	header("Content-Type: text/html;charset=utf-8");
	exit("<script type=\"text/javascript\">\n" .
	    "<!--\n".
	    "alert(\"".$message."\");\n".
	    "window.open(\"".$url."\".\"_self\");".
	   "// -->\n</script>" );
}

//スラッシュをとる
function strips($value){
	if(is_array($value)) {
		$value = array_map("strips",$value);
	} else {
		 $value = stripslashes($value);
	} 
	return $value;
}

//無害化
function sanitate($value){
	if(is_array($value)) {
		return array_map("sanitate",$value);
	} else {
		 return htmlspecialchars($value, ENT_QUOTES);
	} 
}

?>