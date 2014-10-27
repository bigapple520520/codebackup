<?php require_once "action/featureDetailAction.php" ?>
<?php
$id = '';
if(isset($_GET['id'])){
	$id = $_GET['id'];
}

if($id == ''){
	echo "详情页的id不能为空。";
	exit;
}

$production = getProductionById($id);
if(count($production) == 0){
	echo "id[".$id."]查询的详情不存在。";
	exit;
}
?>

<!DOCTYPE HTML>
<html>
<head>
<title>详情页</title>
<link href="css/common.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/single-page.css" rel="stylesheet" type="text/css" media="all" />
</head>

<body>
<!-- 头部 -->
<?php require_once "header.php" ?>

<!--位置导航-->
<div class="main_bg"><!-- start main -->
	<div class="main_grid1">
		<h3 class="style"><a href="index.html">首页</a> / 产品详情页</h3>
	</div>
</div>

<!--中间内容部分-->
<div class="main_btm1"><!-- start main_btm -->
	<div class="details">
		<h2><?php echo $production['title'];?></h2>
		<p class="para"><?php echo $production['content'];?></p>
		<img src="<?php echo $production['url'];?>" alt=""/>
	</div>
</div>

<!--尾部-->
<?php require_once "footer.php"?>
</body>
</html>

