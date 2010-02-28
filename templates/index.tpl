<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="ja">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>ページタイトル</title>
<meta name="keywords" content="">
<meta name="description" content="">
<meta http-equiv="Content-Style-Type" content="text/css">
<link href="stylet.css" rel="stylesheet" type="text/css">
</head>
<body>
<div id="page">
	<!-- #headerer 画面上部のヘッド部分 -->
	<div id="header">
		<div id="sitename">{$sitename}</div>
	</div>
	<div id="menu">
		<ul class="menu_f02">
		    <!-- {foreach from=$menuitems item=menu} -->
		    <li><a href="{$menu.url}">{$menu.text}</a></li>
		    <!--  {/foreach} -->
		</ul>
	</div>
	<h1>{$head}</h1>
  	<div id="main">
  		<br>
  		<!-- 投稿フォーム -->
  		<form method="post" action="{$form.action}">
  		    <div id="inputArea">
  		    	{$form.title}
  			    {$form.body}
  		    </div>
	    </form>
  		
  		<!-- {foreach from=$contents item=content} -->
  		<h2>{$content.subject}</h2>
  		<p>{$content.body}</p>
  		<div class="caption" style="text-align:right;">{$content.caption}</div>
  		<!-- {/foreach} -->
  		<p class="linkbtm"><a href="{$linkbtm.url}">{$linkbtm.text}</a></p>
   	</div>
</div>
</body>
</html>
