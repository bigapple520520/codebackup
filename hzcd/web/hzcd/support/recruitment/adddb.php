<?php
require_once("../common/checkLogin.php");
require_once("../common/connectdb.php");

try{
  $name = $_POST["name"];
  $description = $_POST["description"];
  $requirement = $_POST["requirement"];
  $apply = $_POST["apply"];
  
  if(trim($name) == "" || trim($description) == "" || trim($requirement) == ""){
    echo "岗位名称或者岗位描述或者岗位要求不能为空";
	mysql_close($con);
	return;
  }
  
  $id = md5(uniqid());//随机取id
  $creation_time = date("Y/m/d H:m:s");//取当前时间，符合mysql的daetime时间格式
  
  //到这里表示库里面没有重复的name
  $sql = "insert into eb_recruitment(id,name,description,requirement,apply,creation_time) values('".$id."','".$name."','".$description."','".$requirement."','".$apply."','".$creation_time."')";

  $result = mysql_query($sql);
  mysql_close($con);
  header("Location:list.php");
  
}catch(Exception $e){
  mysql_close($con);
}
?>