<?php require_once("../common/checkLogin.php"); ?>
<?php require_once("listdb.php"); ?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>用户留言列表</title>
<style type="text/css" media="all">@import url("../css/style.css");</style>
<script type="text/javascript" src="../js/utils.js"></script>
</head>
<body>
<div id="navigator">用户留言管理  >>  用户留言列表</div>
<div id="titleMain">
    <div id="current" onclick="location.href='list.php';">用户留言列表</div>
</div>
<div id="tableMain">
    <form action="deletedb.php" method="post" id="form">
    <table id="dataTable" border="0" align="center" cellpadding="5" cellspacing="1">
		<tr class="titleTr">
			<td align="center"><input type="checkbox" id="checkboxAll" onclick="checkOrUncheckAll()" /></td>
			<td align="center">姓名</td>
			<td align="center">邮箱</td>
			<td align="center">手机</td>
			<td align="center">标题</td>
			<td align="center">内容</td>
			<td align="center">创建时间</td>
			<td align="center">操作</td>
		</tr>
		<?php foreach($dataArray as $key => $value){ ?>
		<tr>
		    <td align="center"><input type="checkbox" name="checkboxOne[]" value="<?php echo $value["id"]; ?>" /></td>
		    <td align="center"><?php echo $value["name"]; ?></td>
			<td align="center"><?php echo $value["mail"]; ?></td>
			<td align="center"><?php echo $value["phone"]; ?></td>
			<td align="center"><?php echo $value["title"]; ?></td>
			<td align="center"><?php echo $value["content"]; ?></td>
			<td align="center"><?php echo $value["creation_time"]; ?></td>
			<td align="center">
				<a href="javascript:location.href='deletedb.php?id=<?php echo $value["id"]; ?>';">删除</a>
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