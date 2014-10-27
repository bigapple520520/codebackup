<?php
require_once("../common/checkLogin.php");
require_once("../common/connectdb.php");

try{
  $sql = "SELECT * FROM sys_option ORDER By modify_time DESC";
  $result = mysql_query($sql);
  
  $i = 0;
  $sysoptionArray = array();
  while($row = mysql_fetch_array($result)){//遍历后台用户表数据
    $sysoptionArray[$i++] = $row;
  }
  
}catch(Exception $e){
  mysql_close($con);
}

mysql_close($con);
?>