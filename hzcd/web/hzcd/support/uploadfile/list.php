<?php require_once("../config.php"); ?>
<?php require_once("../common/checkLogin.php"); ?>
<?php
$fileNameArray = scandir('../../file');
arrayRemove($fileNameArray, 0);
arrayRemove($fileNameArray, 0);
?>

<?php
function arrayRemove(&$arr, $offset){ 
	array_splice($arr, $offset, 1); 
}

function getExtend($fileName) { 
	$extend = explode("." , $fileName); 
	$va = count($extend)-1;
	if($va < 1){
		return '';
	}else{
		return $extend[$va];
	}
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
<div id="navigator">上传文件管理  >>  上传文件列表</div>
<div id="titleMain">
    <div id="current" onclick="location.href='list.php';">上传文件列表</div>
	<div class="other" onclick="location.href='add.php';">上传文件</div>
</div>
<div id="tableMain">
    <form action="deletedb.php" method="post" id="form">
    <table id="dataTable" border="0" align="center" cellpadding="5" cellspacing="1">
		<tr class="titleTr">
			<td align="center"><input type="checkbox" id="checkboxAll" onclick="checkOrUncheckAll()" /></td>
			<td align="center">文件访问网址</td>
			<td align="center">图片预览</td>
			<td align="center">操作</td>
		</tr>
		<?php foreach($fileNameArray as $key => $value){ ?>
		<tr>
		    <td align="center"><input type="checkbox" name="checkboxOne[]" value="<?php echo $value; ?>" /></td>
		    <td align="center"><?php echo $website.'/hzcd/file/'.$value; ?></td>
			<?php if(getExtend($value) == "jpg" || getExtend($value) == "png"){?>
				<td align="center"><a href="detail.php?fileName=<?php echo $value; ?>"><img src="<?php echo $website.'/hzcd/file/'.$value; ?>" width="40" height="40" /></a></td>
			<?php }else{?>
				<td align="center">不是图片</td>
			<?php }?>
			<td align="center">
				<a href="javascript:location.href='deletedb.php?id=<?php echo $value; ?>';">删除</a>
		    </td>
		</tr>
		<?php } ?>
	</table>
	<div id="buttonRight">
	    <input type="button" class="colorButton" value="删除勾选参数" onclick="checkSubmit()" />
	</div>
	</form>
</div>	
</body>
<html>