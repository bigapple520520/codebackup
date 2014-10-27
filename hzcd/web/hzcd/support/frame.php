<?php require("common/checkLogin.php"); ?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>后台管理中心</title>
<style type="text/css">
html,body{
  height:100%;
}
</style>
</head>
<body style="margin-left:0px;margin-top:0px;overflow:hidden;" scroll="no">
<iframe src="mainMenu.php" name="leftFrame" id="leftFrame" scrolling="auto" frameborder="0" height="100%" width="175"></iframe>
<iframe src="welcome.php" name="mainFrame" id="mainFrame" scrolling="auto" frameborder="0" height="100%" width="83%" style="position: absolute; top: 0px; left: 175px;"></iframe>
</body>
<html>