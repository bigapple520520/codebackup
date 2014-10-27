<?php
require_once("../common/checkLogin.php");
require_once("../common/connectdb.php");

try{
  $sql = "SELECT * FROM su_operator ORDER By creation_time DESC";
  $result = mysql_query($sql);
  
  $i = 0;
  $userArray = array();
  while($row = mysql_fetch_array($result)){//遍历后台用户表数据
    $userArray[$i++] = $row;
  }
  
}catch(Exception $e){
  mysql_close($con);
}

mysql_close($con);
?>