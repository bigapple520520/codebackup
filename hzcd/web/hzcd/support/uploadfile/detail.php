<?php require_once("../config.php"); ?>
<?php require_once("../common/checkLogin.php"); ?>
<?php
$fileName = '';
if(isset($_GET['fileName'])){
	$fileName = $_GET['fileName'];
}

if($fileName == ''){
	echo "图片不存在";
	exit;
}
?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>上传文件管理</title>
<style type="text/css" media="all">@import url("../css/style.css");</style>
<script type="text/javascript" src="../js/utils.js"></script>
</head>
<body>
<div id="navigator">上传文件管理  >>  查看大图</div>
<div id="titleMain">
    <div id="current" onclick="location.href='list.php';">回到列表列表</div>
</div>
<div id="tableMain">
<img src="<?php echo $website.'/hzcd/file/'.$fileName; ?>" />
</div>	
</body>
<html>