<?php require_once("../common/checkLogin.php"); ?>
<?php require_once("modifyShowdb.php"); ?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>合作伙伴修改</title>
<style type="text/css" media="all">@import url("../css/style.css");</style>
</head>
<body>
<div id="navigator">合作伙伴管理  >>  修改合作伙伴</div>
<div id="titleMain">
    <div class="other" onclick="location.href='list.php';">合作伙伴列表</div>
	<div class="other" onclick="location.href='add.php';">新增合作伙伴</div>
	<div id="current" class="unusable">修改合作伙伴</div>
</div>
<div id="tableMain">
    <form action="modifyDodb.php" method="post">
    <table id="dataTable" border="0" cellpadding="5" cellspacing="1">
		<tr>
			<td class="titleTd">标题：</td>
			<td>
				<input type="text" name="title" value="<?php echo $title; ?>" />
				<span style="color: red;padding-left: 10px;">*必填</span>
			</td>
		</tr>
		<tr>
			<td class="titleTd">图标地址：</td>
			<td>
				<textarea name="icon"><?php echo $icon; ?></textarea>
				<span style="color: red;padding-left: 10px;">*必填</span>
			</td>
		</tr>
		<tr>
			<td class="titleTd">资讯正文：</td>
			<td>
				<textarea name="content"><?php echo $content; ?></textarea>
				<span style="color: red;padding-left: 10px;">*必填</span>
			</td>
		</tr>
		<tr>
			<td class="titleTd">图片地址：</td>
			<td>
				<textarea name="url"><?php echo $url; ?></textarea>
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