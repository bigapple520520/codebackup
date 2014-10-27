<?php require_once("../common/checkLogin.php"); ?>
<?php require_once("userListdb.php"); ?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>后台用户列表</title>
<style type="text/css" media="all">@import url("../css/style.css");</style>
<script type="text/javascript" src="../js/utils.js"></script>
</head>
<body>
<div id="navigator">后台用户管理  >>  用户列表</div>
<div id="titleMain">
    <div id="current" onclick="location.href='userList.php';">用户列表</div>
	<div class="other" onclick="location.href='userAdd.php';">新增用户</div>
	<div class="unusable">修改用户</div>
</div>
<div id="tableMain">
    <form action="userDeletedb.php" method="post" id="form">
    <table id="dataTable" border="0" align="center" cellpadding="5" cellspacing="1">
		<tr class="titleTr">
			<td align="center"><input type="checkbox" id="checkboxAll" onclick="checkOrUncheckAll()" /></td>
			<td align="center">姓名</td>
			<td align="center">用户名</td>
			<td align="center">密码</td>
			<td align="center">创建时间</td>
			<td align="center">操作</td>
		</tr>
		<?php foreach($userArray as $key => $value){ ?>
		<tr>
		    <td align="center"><input type="checkbox" name="checkboxOne[]" value="<?php echo $value["id"]; ?>" /></td>
		    <td align="center"><?php echo $value["name"]; ?></td>
			<td align="center"><?php echo $value["username"]; ?></td>
			<td align="center"><?php echo $value["password"]; ?></td>
			<td align="center"><?php echo $value["creation_time"]; ?></td>
			<td align="center">
				<a href="javascript:location.href='userDeletedb.php?id=<?php echo $value["id"]; ?>';">删除</a> | 
				<a href="javascript:location.href='userModify.php?id=<?php echo $value["id"]; ?>';">修改</a>
		    </td>
		</tr>
		<?php } ?>
	</table>
	<div id="buttonRight">
	    <input type="button" class="colorButton" value="删除勾选用户" onclick="checkSubmit()" />
	</div>
	</form>
</div>	
</body>
<html>