<?php require_once "support/common/connectdb.php"; ?>
<?php
$id = '';
if(isset($_GET['id'])){
	$id = $_GET['id'];
}

if($id == ''){
	echo "详情页的id不能为空。";
	exit;
}

$data = getDataById($id);
if(count($data) == 0){
	echo "id[".$id."]查询的详情不存在。";
	exit;
}
?>

<?php 
function getDataById($id){
	global $con;
	try{
		$sql = "SELECT * FROM eb_info WHERE id='".$id."'";
		$result = mysql_query($sql);

		$data = array();
		while($row = mysql_fetch_array($result)){//遍历后台用户表数据
			$data = $row;
			break;
		}
	}catch(Exception $e){
		mysql_close($con);
		return $data;
	}

	mysql_close($con);
	return $data;
}
?>