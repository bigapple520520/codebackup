<?php require_once "action/partnerDetailDb.php" ?>
<!DOCTYPE HTML>
<html>
<head>
<title>合作伙伴详情页</title>
<link href="css/common.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/single-page.css" rel="stylesheet" type="text/css" media="all" />
</head>

<body>
<!-- 头部 -->
<?php require_once "header.php" ?>

<!--位置导航-->
<div class="main_bg">
	<div class="main_grid1"><h3 class="style"><a href="index.php">首页</a> / 合作伙伴详情页</h3></div>
</div>

<!--中间内容部分-->
<div class="main_btm1">
	<div class="details">
		<h2><?php echo $data['title']; ?></h2>
		
		<?php if($data['url'] != ''){?>
		<img style="width:70%;" src="<?php echo $data['url']; ?>" alt="" />
		<?php }?>
		
		<p class="para"><?php echo $data['content']?></p>
	</div>
</div>


<!--尾部-->
<?php require_once "footer.php"?>
</body>
</html>

