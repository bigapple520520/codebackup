<?php
require_once("../common/checkLogin.php");

try{
	$id = "";
	if(isset($_GET["id"])){//单个删除
		$id = $_GET["id"];
		unlink('../../file/'.$id);
	}else{//多个删除
		$id = $_POST["checkboxOne"];
		foreach($id as $key => $value){
			unlink('../../file/'.$value);
		}
	}

	header("Location:list.php");
}catch(Exception $e){
}
?>