<?php require_once("../common/checkLogin.php"); ?>
<?php require_once("listdb.php"); ?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>产品列表</title>
<style type="text/css" media="all">@import url("../css/style.css");</style>
<script type="text/javascript" src="../js/utils.js"></script>
</head>
<body>
<div id="navigator">产品管理  >>  产品列表</div>
<div id="titleMain">
    <div id="current" onclick="location.href='list.php';">产品列表</div>
	<div class="other" onclick="location.href='add.php';">新增产品</div>
	<div class="unusable">修改参数</div>
</div>
<div id="tableMain">
    <form action="deletedb.php" method="post" id="form">
    <table id="dataTable" border="0" align="center" cellpadding="5" cellspacing="1">
		<tr class="titleTr">
			<td align="center"><input type="checkbox" id="checkboxAll" onclick="checkOrUncheckAll()" /></td>
			<td align="center">标题</td>
			<td align="center">产品描述</td>
			<td align="center">图片地址</td>
			<td align="center">创建时间</td>
			<td align="center">操作</td>
		</tr>
		<?php foreach($dataArray as $key => $value){ ?>
		<tr>
		    <td align="center"><input type="checkbox" name="checkboxOne[]" value="<?php echo $value["id"]; ?>" /></td>
		    <td align="center"><?php echo $value["title"]; ?></td>
			<td align="center"><?php echo $value["content"]; ?></td>
			<td align="center"><?php echo $value["url"]; ?></td>
			<td align="center"><?php echo $value["creation_time"]; ?></td>
			<td align="center">
				<a href="javascript:location.href='deletedb.php?id=<?php echo $value["id"]; ?>';">删除</a> | 
				<a href="javascript:location.href='modify.php?id=<?php echo $value["id"]; ?>';">修改</a>
		    </td>
		</tr>
		<?php } ?>
	</table>
	<div id="buttonRight">
	    <input type="button" class="colorButton" value="删除勾选参数" onclick="checkSubmit()" />
	</div>
	</form>
</div>	
</body>
<html>