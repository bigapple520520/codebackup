<?php require_once("common/logout.php"); ?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>网站后台登陆</title>
<style type="text/css">@import url("css/index.css");</style>
</head>
<body>
    <div class="topbar">
		<div class="topbarsmall">Support Platform</div>
		<div class="topbarbig">This is Automation Service Platform</div>
    </div>
	
	<div class="top-info-background">Welcome</div>
	
	<div>
	    <div class="welcome-pageheader">This is Automation Service Platform</div>
		<div class="dialog-info">Sign in to work with It</div>
	</div>
	
	<div>
	    <form action="common/login.php" method="post">
			<div class="errordiv"><?php if(isset($_GET["errorMsg"])){echo $_GET["errorMsg"];} ?></div>
			<div class="usernamediv">
				<span class="dialog-label">Username:</span>
				<input name="username" type="text" style="width:160px" />
			</div>
			<div class="passworddiv">
				<span class="dialog-label">Password:</span>
				<input name="password" type="text" style="width:160px" />
			</div>
			<div class="buttondiv">
				<input class="colorButton" type="submit" value="Sign In" />
			</div>
		</form>
	</div>
	
</body>
</html>