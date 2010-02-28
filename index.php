<?php
include("smarty/Smarty.class.php");
include("config.php");
include("bbslib.php");
header("Expires", "-1");
header("Cache-Control", "no-store,no-cache,must-revalidate");
header("Pragma", "no-cache");
$smarty = new Smarty();
//タイトル
$smarty->assign("sitetitle","簡易BBS");

//サイト名
$smarty->assign("sitename","サイト名");

//サイトメニュー
$menuitems[0]['url'] = "http://...";
$menuitems[0]['text'] = "ダミー";
$smarty->assign("menuitems",$menuitems);

//ヘッダ
$smarty->assign("head"."簡易掲示板");

//メインコンテンツ
$contents=array();
$dbh = mysql_connect($db_host, $db_username, $db_password);
if($dbh !== false){
    $sqlstr = "use $db_name";
    mysql_query($sqlstr,$dbh);
	
	//削除マークのない２０件を抽出
	$sqlstr = "select * from mybbs where mark = '0' order by dt desc limit 20";
	$result = mysql_query($sqlstr,$dbh);
	while($row = mysql_fetch_assoc($result)){
		$row = sanitate(strips($row));
		$form_id = "form_".$row['id'];
		$row['caption'] = 
			'<form action="delete.php" method="get" id="'.$form_id.'>">'.
			'<input type="hidden" name="id" value="'.$row['id'].'" />'.
			'<input type="password" size="10" name="pass" />'.
			'<input type="submit" value="削除" />'.
			'</form>';
		'<div style="cusor:pointer;" onClick="javascript:document.getElementById(¥"'.$form_id.'¥").style.display=¥"block¥";¥">削除する</div>';
		array_push($contents,$row);
	}
}
//print_r($contents);
$smarty->assign("contents", $contents);

//投稿フォーム
$form['action'] = "bbswrite.php";
$form['title'] = '';
$form['body'] = 
    'Name<input type="text" name="name" /><br>'.
    'Mail<input type="text" name="mailaddr" /><Br>'.
    'Pass<input type="password" name="pass" /><br>'.
    'Subject<input type="text" name="subject" /><Br>'.
    '本文<textarea rows="5" cols="40" name="body" /></textarea><br>'.
    '<input type="submit" value="新規投稿" />';

$smarty->assign("form",$form);
$smarty->assign("contents",$contents);
$smarty->display("index.tpl");
?>
