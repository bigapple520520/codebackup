<?php
require_once("../common/checkLogin.php");
require_once("../common/connectdb.php");

try{
  $id = "";
  
  if(isset($_GET["id"])){//单个删除
    $id = $_GET["id"];
	$id = "'".$id."'";
  }else{//多个删除
	$id = $_POST["checkboxOne"];
	foreach($id as $key => $value){
	  $id[$key] = "'".$id[$key]."'";
	}
	
	$id = implode(",",$id);
  }
  
  if(trim($id) == ""){
    echo "要删除的用户id不能为空 ！";
	mysql_close($con);
	return;
  }
  
  $sql = "delete from su_operator where id in (".$id.")";
  
  $result = mysql_query($sql);
  mysql_close($con);
  header("Location:userList.php");
  
}catch(Exception $e){
  mysql_close($con);
}
?>