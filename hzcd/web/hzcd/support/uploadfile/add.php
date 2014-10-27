<?php require_once("../common/checkLogin.php"); ?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>上传文件</title>
<style type="text/css" media="all">@import url("../css/style.css");</style>
</head>
<body>
<div id="navigator">上传文件管理  >>  上传文件</div>
<div id="titleMain">
    <div class="other" onclick="location.href='list.php';">上传文件列表</div>
	<div id="current" onclick="location.href='add.php';">上传文件</div>
</div>
<div id="tableMain">
	<div class="errordiv"><?php if(isset($_GET["errorMsg"])){echo $_GET["errorMsg"];} ?></div>
    <form action="adddb.php" method="post" enctype="multipart/form-data">
    <table id="dataTable" border="0" cellpadding="5" cellspacing="1">
		<tr>
			<td class="titleTd">文件名</td>
			<td><input type="file" name="file" id="file" /></td>
		</tr>
	</table>
	<div id="buttonRight">
	    <input type="submit" class="colorButton" value="点击上传" />
	</div>
	</form>
</div>	
</body>
<html>