<?php require_once "support/common/connectdb.php"; ?>
<?php
try{
  $sql = "SELECT * FROM eb_info ORDER By creation_time DESC";
  $result = mysql_query($sql);
  
  $i = 0;
  $dataArray = array();
  while($row = mysql_fetch_array($result)){//遍历后台用户表数据
    $dataArray[$i++] = $row;
  }
  
}catch(Exception $e){
  mysql_close($con);
}

mysql_close($con);
?>