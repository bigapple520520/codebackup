<?php require_once("../common/checkLogin.php"); ?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>后台用户添加</title>
<style type="text/css" media="all">@import url("../css/style.css");</style>
</head>
<body>
<div id="navigator">后台用户管理  >>  添加用户</div>
<div id="titleMain">
    <div class="other" onclick="location.href='userList.php';">用户列表</div>
	<div id="current" onclick="location.href='userAdd.php';">新增用户</div>
	<div class="unusable">修改用户</div>
</div>
<div id="tableMain">
    <form action="userAdddb.php" method="post">
    <table id="dataTable" border="0" cellpadding="5" cellspacing="1">
		<tr>
			<td class="titleTd">姓名：</td>
			<td><input type="text" name="name" /></td>
		</tr>
		<tr>
			<td class="titleTd">用户名：</td>
			<td><input type="text" name="username" /><span style="color: red;padding-left: 10px;">*必填</span></td>
		</tr>
		<tr>
			<td class="titleTd">密码：</td>
			<td><input type="text" name="password" /><span style="color: red;padding-left: 10px;">*必填</span></td>
		</tr>
	</table>
	<div id="buttonRight">
	    <input type="submit" class="colorButton" value="添加" />
	</div>
	</form>
</div>	
</body>
<html>