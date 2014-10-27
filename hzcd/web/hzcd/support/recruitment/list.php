<?php require_once("../common/checkLogin.php"); ?>
<?php require_once("listdb.php"); ?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>招聘信息列表</title>
<style type="text/css" media="all">@import url("../css/style.css");</style>
<script type="text/javascript" src="../js/utils.js"></script>
</head>
<body>
<div id="navigator">招聘信息管理  >>  招聘信息列表</div>
<div id="titleMain">
    <div id="current" onclick="location.href='list.php';">招聘信息列表</div>
	<div class="other" onclick="location.href='add.php';">新增招聘信息</div>
	<div class="unusable">修改招聘信息</div>
</div>
<div id="tableMain">
    <form action="deletedb.php" method="post" id="form">
    <table id="dataTable" border="0" align="center" cellpadding="5" cellspacing="1">
		<tr class="titleTr">
			<td align="center"><input type="checkbox" id="checkboxAll" onclick="checkOrUncheckAll()" /></td>
			<td align="center">岗位名称</td>
			<td align="center">岗位描述</td>
			<td align="center">岗位要求</td>
			<td align="center">申请途径</td>
			<td align="center">创建时间</td>
			<td align="center">操作</td>
		</tr>
		<?php foreach($dataArray as $key => $value){ ?>
		<tr>
		    <td align="center"><input type="checkbox" name="checkboxOne[]" value="<?php echo $value["id"]; ?>" /></td>
		    <td align="center"><?php echo $value["name"]; ?></td>
			<td align="center"><?php echo $value["description"]; ?></td>
			<td align="center"><?php echo $value["requirement"]; ?></td>
			<td align="center"><?php echo $value["apply"]; ?></td>
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