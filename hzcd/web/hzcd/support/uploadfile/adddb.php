<?php
require_once("../common/checkLogin.php");

if ($_FILES["file"]["error"] > 0){
	echo "上传失败: " . $_FILES["file"]["error"] . "<br />";
}
else{
	if (file_exists("../../file/". $_FILES["file"]["name"])){
      echo $_FILES["file"]["name"] . "文件已经存在";
    }
    else{
		move_uploaded_file($_FILES["file"]["tmp_name"],"../../file/" . $_FILES["file"]["name"]);
		header("Location:list.php");
    }
}
?>