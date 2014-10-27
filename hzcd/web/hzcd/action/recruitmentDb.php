<?php
require_once("support/common/connectdb.php");

//查询招聘信息
$recruitmentArray = array();
try{
	$sql = "SELECT * FROM eb_recruitment";
	$result = mysql_query($sql);
  
	$i = 0;
	while($row = mysql_fetch_array($result)){//遍历后台用户表数据
		$recruitmentArray[$i++] = $row;
	}
}catch(Exception $e){
	mysql_close($con);
	return;
}

//查询系统参数
$sysoptionArray = array();
try{
	$sql = "SELECT * FROM sys_option";
	$result = mysql_query($sql);
  
	$i = 0;
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
//方法区域
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