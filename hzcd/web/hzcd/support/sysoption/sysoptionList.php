<?php require_once("../common/checkLogin.php"); ?>
<?php require_once("sysoptionListdb.php"); ?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>系统参数列表</title>
<style type="text/css" media="all">@import url("../css/style.css");</style>
<script type="text/javascript" src="../js/utils.js"></script>
</head>
<body>
<div id="navigator">系统参数管理  >>  参数列表</div>
<div id="titleMain">
    <div id="current" onclick="location.href='sysoptionList.php';">参数列表</div>
	<div class="other" onclick="location.href='sysoptionAdd.php';">新增参数</div>
	<div class="unusable">修改参数</div>
</div>
<div id="tableMain">
    <form action="sysoptionDeletedb.php" method="post" id="form">
    <table id="dataTable" border="0" align="center" cellpadding="5" cellspacing="1">
		<tr class="titleTr">
			<td align="center"><input type="checkbox" id="checkboxAll" onclick="checkOrUncheckAll()" /></td>
			<td align="center">参数名</td>
			<td align="center">参数值</td>
			<td align="center">描述</td>
			<td align="center">修改时间</td>
			<td align="center">操作</td>
		</tr>
		<?php foreach($sysoptionArray as $key => $value){ ?>
		<tr>
		    <td align="center"><input type="checkbox" name="checkboxOne[]" value="<?php echo $value["id"]; ?>" /></td>
		    <td align="center"><?php echo $value["name"]; ?></td>
			<td align="center"><?php echo $value["nvalue"]; ?></td>
			<td align="center"><?php echo $value["description"]; ?></td>
			<td align="center"><?php echo $value["modify_time"]; ?></td>
			<td align="center">
				<a href="javascript:location.href='sysoptionDeletedb.php?id=<?php echo $value["id"]; ?>';">删除</a> | 
				<a href="javascript:location.href='sysoptionModify.php?id=<?php echo $value["id"]; ?>';">修改</a>
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