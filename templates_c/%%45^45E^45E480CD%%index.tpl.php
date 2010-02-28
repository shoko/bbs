<?php /* Smarty version 2.6.25, created on 2010-02-28 11:53:25
         compiled from index.tpl */ ?>
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
		<div id="sitename"><?php echo $this->_tpl_vars['sitename']; ?>
</div>
	</div>
	<div id="menu">
		<ul class="menu_f02">
		    <!-- <?php $_from = $this->_tpl_vars['menuitems']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['menu']):
?> -->
		    <li><a href="<?php echo $this->_tpl_vars['menu']['url']; ?>
"><?php echo $this->_tpl_vars['menu']['text']; ?>
</a></li>
		    <!--  <?php endforeach; endif; unset($_from); ?> -->
		</ul>
	</div>
	<h1><?php echo $this->_tpl_vars['head']; ?>
</h1>
  	<div id="main">
  		<br>
  		<!-- 投稿フォーム -->
  		<form method="post" action="<?php echo $this->_tpl_vars['form']['action']; ?>
">
  		    <div id="inputArea">
  		    	<?php echo $this->_tpl_vars['form']['title']; ?>

  			    <?php echo $this->_tpl_vars['form']['body']; ?>

  		    </div>
	    </form>
  		
  		<!-- <?php $_from = $this->_tpl_vars['contents']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['content']):
?> -->
  		<h2><?php echo $this->_tpl_vars['content']['subject']; ?>
</h2>
  		<p><?php echo $this->_tpl_vars['content']['body']; ?>
</p>
  		<div class="caption" style="text-align:right;"><?php echo $this->_tpl_vars['content']['caption']; ?>
</div>
  		<!-- <?php endforeach; endif; unset($_from); ?> -->
  		<p class="linkbtm"><a href="<?php echo $this->_tpl_vars['linkbtm']['url']; ?>
"><?php echo $this->_tpl_vars['linkbtm']['text']; ?>
</a></p>
   	</div>
</div>
</body>
</html>