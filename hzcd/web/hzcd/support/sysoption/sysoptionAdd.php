<?php require_once("../common/checkLogin.php"); ?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>系统参数添加</title>
<style type="text/css" media="all">@import url("../css/style.css");</style>
</head>
<body>
<div id="navigator">系统参数添加  >>  添加参数</div>
<div id="titleMain">
    <div class="other" onclick="location.href='sysoptionList.php';">参数列表</div>
	<div id="current" onclick="location.href='sysoptionAdd.php';">新增参数</div>
	<div class="unusable">修改参数</div>
</div>
<div id="tableMain">
	<div class="errordiv"><?php if(isset($_GET["errorMsg"])){echo $_GET["errorMsg"];} ?></div>
    <form action="sysoptionAdddb.php" method="post">
    <table id="dataTable" border="0" cellpadding="5" cellspacing="1">
		<tr>
			<td class="titleTd">参数名：</td>
			<td><input type="text" name="name" /><span style="color: red;padding-left: 10px;">*必填</span></td>
		</tr>
		<tr>
			<td class="titleTd">参数值：</td>
			<td><textarea name="nvalue"></textarea><span style="color: red;padding-left: 10px;">*必填</span></td>
		</tr>
		<tr>
			<td class="titleTd">描述：</td>
			<td><textarea name="description"></textarea></td>
		</tr>
	</table>
	<div id="buttonRight">
	    <input type="submit" class="colorButton" value="添加" />
	</div>
	</form>
</div>	
</body>
<html>