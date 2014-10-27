<?php
//$con = mysql_connect("localhost","root","");//连接数据库
$con = mysql_connect("112.121.186.44","a0720151748","84203892");//连接数据库
if(!$con){
  echo "连接数据库失败！";
  mysql_close($con);
  return;
}

mysql_query("SET NAMES UTF8");//防止mysql和页面的编码不对应而产生中文的乱码

//$db = mysql_select_db("hzcd");//选择对应数据库
$db = mysql_select_db("a0720151748");//选择对应数据库
if(!$db){
  echo "选择数据库失败！";
  mysql_close($con);
  return;
}
?>