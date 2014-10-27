<?php require_once("../common/checkLogin.php"); ?>
<?php require_once("sysoptionModifyShowdb.php"); ?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>系统参数修改</title>
<style type="text/css" media="all">@import url("../css/style.css");</style>
</head>
<body>
<div id="navigator">系统参数管理  >>  修改参数</div>
<div id="titleMain">
    <div class="other" onclick="location.href='sysoptionList.php';">参数列表</div>
	<div class="other" onclick="location.href='sysoptionAdd.php';">新增参数</div>
	<div id="current" class="unusable">修改参数</div>
</div>
<div id="tableMain">
    <form action="sysoptionModifyDodb.php" method="post">
    <table id="dataTable" border="0" cellpadding="5" cellspacing="1">
		<tr>
			<td class="titleTd">参数名：</td>
			<td>
				<input type="text" disabled="disabled" name="name" value="<?php echo $name; ?>" />
				<span style="color: red;padding-left: 10px;">*必填</span>
			</td>
		</tr>
		<tr>
			<td class="titleTd">参数值：</td>
			<td>
				<textarea name="nvalue"><?php echo $nvalue; ?></textarea>
				<span style="color: red;padding-left: 10px;">*必填</span>
			</td>
		</tr>
		<tr>
			<td class="titleTd">描述：</td>
			<td>
				<textarea name="description"><?php echo $description; ?></textarea>
			</td>
		</tr>
	</table>
	<div id="buttonRight">
	    <input type="submit" class="colorButton" value="修改" />
		<input type="hidden" name="id" value="<?php echo $id; ?>" />
	</div>
	</form>
</div>	
</body>
<html>