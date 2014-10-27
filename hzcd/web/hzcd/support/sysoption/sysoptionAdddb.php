<?php
require_once("../common/checkLogin.php");
require_once("../common/connectdb.php");

try{
  $name = $_POST["name"];
  $nvalue = $_POST["nvalue"];
  $description = $_POST["description"];
  
  if(trim($name) == "" || trim($nvalue) == ""){
    echo "参数名和参数值不能为空";
	mysql_close($con);
	return;
  }
  
  $id = md5(uniqid());//随机取id
  $modify_time = date("Y/m/d H:m:s");//取当前时间，符合mysql的daetime时间格式

  //先查询是否有重复的
  $sql = "SELECT name FROM sys_option WHERE name='".$name."'";
  $temp_result = mysql_query($sql);
  
  $i = 0;
  while($row = mysql_fetch_array($temp_result)){
    $i++;
  }
  
  if($i > 0){
	mysql_close($con);
	header("Location:sysoptionAdd.php?errorMsg=The name of sysoption is repeat!!!");
	return;
  }
  
  //到这里表示库里面没有重复的name
  $sql = "insert into sys_option(id,name,nvalue,description,modify_time) values('".$id."','".$name."','".$nvalue."','".$description."','".$modify_time."')";

  $result = mysql_query($sql);
  mysql_close($con);
  header("Location:sysoptionList.php");
  
}catch(Exception $e){
  mysql_close($con);
}
?>