<?php
require_once("support/common/connectdb.php");

//��ѯ��Ƹ��Ϣ
$recruitmentArray = array();
try{
	$sql = "SELECT * FROM eb_recruitment";
	$result = mysql_query($sql);
  
	$i = 0;
	while($row = mysql_fetch_array($result)){//������̨�û�������
		$recruitmentArray[$i++] = $row;
	}
}catch(Exception $e){
	mysql_close($con);
	return;
}

//��ѯϵͳ����
$sysoptionArray = array();
try{
	$sql = "SELECT * FROM sys_option";
	$result = mysql_query($sql);
  
	$i = 0;
	while($row = mysql_fetch_array($result)){//������̨�û�������
		$sysoptionArray[$i++] = $row;
	}
}catch(Exception $e){
	mysql_close($con);
	return;
}

mysql_close($con);
?>

<?php
//��������
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