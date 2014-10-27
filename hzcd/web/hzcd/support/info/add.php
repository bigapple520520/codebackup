<?php require_once("../common/checkLogin.php"); ?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>产品资讯</title>
<style type="text/css" media="all">@import url("../css/style.css");</style>
</head>
<body>
<div id="navigator">资讯添加  >>  添加资讯</div>
<div id="titleMain">
    <div class="other" onclick="location.href='list.php';">资讯列表</div>
	<div id="current" onclick="location.href='add.php';">新增资讯</div>
	<div class="unusable">修改资讯</div>
</div>
<div id="tableMain">
	<div class="errordiv"><?php if(isset($_GET["errorMsg"])){echo $_GET["errorMsg"];} ?></div>
    <form action="adddb.php" method="post">
    <table id="dataTable" border="0" cellpadding="5" cellspacing="1">
		<tr>
			<td class="titleTd">标题：</td>
			<td><input type="text" name="title" /><span style="color: red;padding-left: 10px;">*必填</span></td>
		</tr>
		<tr>
			<td class="titleTd">发布者：</td>
			<td><input type="text" name="editor" /></td>
		</tr>
		<tr>
			<td class="titleTd">资讯内容：</td>
			<td><textarea name="content"></textarea><span style="color: red;padding-left: 10px;">*必填</span></td>
		</tr>
		<tr>
			<td class="titleTd">图片地址：</td>
			<td><textarea name="url"></textarea></td>
		</tr>
	</table>
	<div id="buttonRight">
	    <input type="submit" class="colorButton" value="添加" />
	</div>
	</form>
</div>	
</body>
<html>