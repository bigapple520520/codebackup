<?php
require_once("../common/checkLogin.php");
require_once("../common/connectdb.php");

try{
  $title = $_POST["title"];
  $content = $_POST["content"];
  $url = $_POST["url"];
  
  if(trim($title) == "" || trim($content) == ""){
    echo "产品的标题或者描述或者图片地址不能为空";
	mysql_close($con);
	return;
  }
  
  $id = md5(uniqid());//随机取id
  $creation_time = date("Y/m/d H:m:s");//取当前时间，符合mysql的daetime时间格式
  
  //到这里表示库里面没有重复的name
  $sql = "insert into eb_production(id,title,content,url,creation_time) values('".$id."','".$title."','".$content."','".$url."','".$creation_time."')";

  $result = mysql_query($sql);
  mysql_close($con);
  header("Location:list.php");
  
}catch(Exception $e){
  mysql_close($con);
}
?>