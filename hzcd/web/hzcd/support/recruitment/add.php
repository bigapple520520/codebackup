<?php require_once("../common/checkLogin.php"); ?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>招聘信息管理</title>
<style type="text/css" media="all">@import url("../css/style.css");</style>
</head>
<body>
<div id="navigator">招聘信息添加  >>  添加招聘信息</div>
<div id="titleMain">
    <div class="other" onclick="location.href='list.php';">招聘信息列表</div>
	<div id="current" onclick="location.href='add.php';">新增招聘信息</div>
	<div class="unusable">修改招聘信息</div>
</div>
<div id="tableMain">
	<div class="errordiv"><?php if(isset($_GET["errorMsg"])){echo $_GET["errorMsg"];} ?></div>
    <form action="adddb.php" method="post">
    <table id="dataTable" border="0" cellpadding="5" cellspacing="1">
		<tr>
			<td class="titleTd">岗位名称：</td>
			<td><input type="text" name="name" /><span style="color: red;padding-left: 10px;">*必填</span></td>
		</tr>
		<tr>
			<td class="titleTd">岗位描述：</td>
			<td><textarea name="description"></textarea><span style="color: red;padding-left: 10px;">*必填</span></td>
		</tr>
		<tr>
			<td class="titleTd">岗位要求：</td>
			<td><textarea name="requirement"></textarea><span style="color: red;padding-left: 10px;">*必填</span></td>
		</tr>
		<tr>
			<td class="titleTd">申请途径：</td>
			<td><textarea name="apply"></textarea>
		</tr>
	</table>
	<div id="buttonRight">
	    <input type="submit" class="colorButton" value="添加" />
	</div>
	</form>
</div>	
</body>
<html>