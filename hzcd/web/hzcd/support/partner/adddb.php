<?php
require_once("../common/checkLogin.php");
require_once("../common/connectdb.php");

try{
  $title = $_POST["title"];
  $icon = $_POST["icon"];
  $content = $_POST["content"];
  $url = $_POST["url"];
  
  if(trim($title) == "" || trim($content) == "" || trim($icon) == ""){
    echo "合作伙伴的标题或者内容或者图标不能为空";
	mysql_close($con);
	return;
  }
  
  $id = md5(uniqid());//随机取id
  $creation_time = date("Y/m/d H:m:s");//取当前时间，符合mysql的daetime时间格式
  
  //到这里表示库里面没有重复的name
  $sql = "insert into eb_partner(id,title,icon,content,url,creation_time) values('".$id."','".$title."','".$icon."','".$content."','".$url."','".$creation_time."')";

  $result = mysql_query($sql);
  mysql_close($con);
  header("Location:list.php");
  
}catch(Exception $e){
  mysql_close($con);
}
?>