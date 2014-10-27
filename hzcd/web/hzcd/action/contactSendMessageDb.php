<?php
require_once("../support/common/connectdb.php");

$name = '';
$mail = '';
$phone = '';
$title = '';
$content = '';

if(isset($_POST['name'])){
	$name = $_POST['name'];
}else{
	echo '姓名不能为空';
	exit;
}

if(isset($_POST['mail'])){
	$mail = $_POST['mail'];
}else{
	echo '邮箱不能为空';
	exit;
}

if(isset($_POST['phone'])){
	$phone = $_POST['phone'];
}else{
	echo '手机不能为空';
	exit;
}

if(isset($_POST['title'])){
	$title = $_POST['title'];
}else{
	echo '标题不能为空';
	exit;
}

if(isset($_POST['content'])){
	$content = $_POST['content'];
}else{
	echo '内容不能为空';
	exit;
}

try{
  $id = md5(uniqid());//随机取id
  $creation_time = date("Y/m/d H:m:s");//取当前时间，符合mysql的daetime时间格式
  
  //到这里表示库里面没有重复的name
  $sql = "insert into eb_message(id,name,mail,phone,title,content,creation_time) values('".$id."','".$name."','".$mail."','".$phone."','".$title."','".$content."','".$creation_time."')";

  $result = mysql_query($sql);
  mysql_close($con);
  echo "留言已发送，我们很快就会联系你：<a href='../contact.php'>点我返回</a>";
  
}catch(Exception $e){
  mysql_close($con);
}
?>