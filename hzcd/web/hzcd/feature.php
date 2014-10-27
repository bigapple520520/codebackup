<?php require_once "action/featureAction.php" ?>
<!DOCTYPE HTML>
<html>
<head>
<title>产品展示</title>
<link href="css/common.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/feature.css" rel="stylesheet" type="text/css" media="all" />
</head>

<body>
<!-- 头部 -->
<?php require_once "header.php" ?>

<!--位置导航-->
<div class="main_bg"><!-- start main -->
	<div class="main_grid1">
		<h3 class="style"><a href="index.html">首页</a> / 服务产品</h3>
	</div>
</div>

<!--中间内容部分-->
<div class="main_btm1"><!-- start main_btm -->
	<div class="technology">
		<?php foreach($dataArray as $key => $value){ ?>
		<div class="technology_list">
			<h4><?php echo $value['title']; ?></h4>
			<div class="tech_para">
				<p class="para"><?php echo $value['content']; ?></p>
			</div>
			<div class="clear"></div>
			<a target="_black" href="feature-detail.php?id=<?php echo $value['id'];?>" class="btn">了解详情</a>
		</div>
		<?php }?>
		<div class="clear" />
	</div>
</div>


<!--尾部-->
<?php require_once "footer.php"?>
</body>
</html>

