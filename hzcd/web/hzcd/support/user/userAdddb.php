<?php
require_once("../common/checkLogin.php");
require_once("../common/connectdb.php");

try{
  $name = $_POST["name"];
  $username = $_POST["username"];
  $password = $_POST["password"];
  
  if(trim($username) == "" || trim($password) == ""){
    echo "用户名和密码不能为空！";
	mysql_close($con);
	return;
  }
  
  $id = md5(uniqid());//随机取id
  $creation_time = date("Y/m/d H:m:s");//取当前时间，符合mysql的daetime时间格式

  $sql = "insert into su_operator(id,name,username,password,creation_time) values('".$id."','".$name."','".$username."','".$password."','".$creation_time."')";

  $result = mysql_query($sql);
  mysql_close($con);
  header("Location:userList.php");
  
}catch(Exception $e){
  mysql_close($con);
}
?>