<?php
require_once("connectdb.php");
$username = $_POST["username"];
$password = $_POST["password"];

$result = mysql_query("select name from su_operator where username='".$username."' and password='".$password."'");//查询后台用户表

//遍历后台用户表数据
while($row = mysql_fetch_array($result)){
	$name = $row["name"];
	break;
}

//登陆成功后给session设值,并跳转
if(isset($name)){
	session_start();
	$_SESSION["admin"] = true;
	header("Location:../frame.php");
}else{
	header("Location:../index.php?errorMsg=username or password is wrong!");
}
?>