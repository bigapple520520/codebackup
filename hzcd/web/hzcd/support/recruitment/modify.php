<?php require_once("../common/checkLogin.php"); ?>
<?php require_once("modifyShowdb.php"); ?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>招聘信息修改</title>
<style type="text/css" media="all">@import url("../css/style.css");</style>
</head>
<body>
<div id="navigator">招聘信息管理  >>  修改招聘信息</div>
<div id="titleMain">
    <div class="other" onclick="location.href='list.php';">招聘信息列表</div>
	<div class="other" onclick="location.href='add.php';">新增招聘信息</div>
	<div id="current" class="unusable">修改招聘信息</div>
</div>
<div id="tableMain">
    <form action="modifyDodb.php" method="post">
    <table id="dataTable" border="0" cellpadding="5" cellspacing="1">
		<tr>
			<td class="titleTd">岗位名称：</td>
			<td>
				<input type="text" name="name" value="<?php echo $name; ?>" />
				<span style="color: red;padding-left: 10px;">*必填</span>
			</td>
		</tr>
		<tr>
			<td class="titleTd">岗位描述：</td>
			<td>
				<textarea name="description"><?php echo $description; ?></textarea>
				<span style="color: red;padding-left: 10px;">*必填</span>
			</td>
		</tr>
		<tr>
			<td class="titleTd">岗位要求：</td>
			<td>
				<textarea name="requirement"><?php echo $requirement; ?></textarea>
				<span style="color: red;padding-left: 10px;">*必填</span>
			</td>
		</tr>
		<tr>
			<td class="titleTd">申请途径：</td>
			<td>
				<textarea name="apply"><?php echo $apply; ?></textarea>
				<span style="color: red;padding-left: 10px;">*必填</span>
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