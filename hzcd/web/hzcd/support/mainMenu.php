<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>主菜单</title>
<style type="text/css">
body {
  margin: 0px;
  background-color: #eee;
}

#menu {
  padding: 10px 20px 10px 20px;
  background: #dfdfdf;
  color: #666;
  border: #fff 2px solid;
}

#menu ul {
  margin: 0px;
  padding: 0px;
  border: medium none;
  line-height: normal;
  list-style-type: none;
}

#menu li {
  margin: 0px;
}

#menu li a {
  padding: 5px 0px 5px 15px;
  border-top: #fff 1px solid;
  display: list-item;
  font-weight: bold;
  font-size: 12px;
  width: 100%;
  text-decoration: none;
}

#menu li a:hover {
  background: url("images/menu_dot1.gif") #c61c18 no-repeat 2px 8px;
  color: #fff;
}

.normal{
  background: url("images/menu_dot.gif") transparent no-repeat 2px 8px;
  color: #444;
}
</style>
</head>
<body>
    <div><a href="#"><img src="images/mainMenu.jpg" width="100%" height="60" border="0" /></a></div>
	<div id="menu">
	    <ul>
		    <li><a class="normal" href="user/userList.php" target="mainFrame">后台用户管理</a></li>
			<li><a class="normal" href="sysoption/sysoptionList.php" target="mainFrame">系统参数管理</a></li>
			<li><a class="normal" href="production/list.php" target="mainFrame">产品管理</a></li>
			<li><a class="normal" href="info/list.php" target="mainFrame">资讯管理</a></li>
			<li><a class="normal" href="partner/list.php" target="mainFrame">合作伙伴管理</a></li>
			<li><a class="normal" href="recruitment/list.php" target="mainFrame">招聘信息管理</a></li>
			<li><a class="normal" href="uploadfile/list.php" target="mainFrame">上传文件管理</a></li>
			<li><a class="normal" href="message/list.php" target="mainFrame">用户留言管理</a></li>
			<li><a class="normal" href="javascript:top.window.location.href='index.php';">退出平台</a></li>
		</ul>
	</div>
</body>
<html>