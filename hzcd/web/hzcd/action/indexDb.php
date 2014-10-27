<?php require_once "support/common/connectdb.php"; ?>
<?php
try{
  $sql = "SELECT * FROM eb_production ORDER By creation_time DESC limit 0,4";
  $result = mysql_query($sql);
  
  $i = 0;
  $dataArray = array();
  while($row = mysql_fetch_array($result)){//遍历后台用户表数据
    $dataArray[$i++] = $row;
  }
  
}catch(Exception $e){
  mysql_close($con);
  return;
}
?>

<?php
try{
	$sql = "SELECT * FROM sys_option";
	$result = mysql_query($sql);
  
	$i = 0;
	$sysoptionArray = array();
	while($row = mysql_fetch_array($result)){//遍历后台用户表数据
		$sysoptionArray[$i++] = $row;
	}
}catch(Exception $e){
	mysql_close($con);
	return;
}

mysql_close($con);
?>

<?php
function getSysoption($name){
	global $sysoptionArray;

	$ret = '';
	foreach($sysoptionArray as $key => $value){
		if($value['name'] == $name){
			$ret = $value['nvalue'];
			break;
		}
	}
	
	return $ret;
}
?>