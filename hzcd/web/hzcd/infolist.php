<?php require_once "action/infolistDb.php" ?>
<!DOCTYPE HTML>
<html>
<head>
<title>新闻资讯</title>
<link href="css/common.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/infolist.css" rel="stylesheet" type="text/css" media="all" />
</head>

<body>
<!-- 头部 -->
<?php require_once "header.php" ?>

<!--导航-->
<div class="main_bg">
	<div class="main_grid1"><h3 class="style"><a href="index.html">首页</a> / 新闻资讯</h3></div>
</div>

<!--中间内容-->
<div class="main_btm1">
	<div class="infolist">
		<?php foreach($dataArray as $key => $value){ ?>
		<div class="blog_list">
			<div class="blog_date">
				<span class="date">
					<?php echo substr($value['creation_time'],2,2); ?>年<?php echo substr($value['creation_time'],5,2); ?>月
					<p><?php echo substr($value['creation_time'],8,2); ?>号</p>
				</span>
			</div>
			<div class="blog_left">
				<?php if($value['url'] != ''){?>
				<a target="_black" href="infoDetail.php?id=<?php echo $value['id']; ?>"><img src="<?php echo $value['url']; ?>" alt="" /></a>
				<?php }?>
				
				<h4><a target="_black" href="infoDetail.php?id=<?php echo $value['id']; ?>"><?php echo $value['title']?></a></h4>
				<span>发布者：<a href="#"><?php echo $value['editor']; ?></a></span>
				<p class="para"><?php $value['content']?></p>
				<div class="read_btn">
					<a target="_black" href="infoDetail.php?id=<?php echo $value['id']; ?>"><button class="btn">查看全文</button></a>
				</div>
			</div>
			<div class="clear"></div>
		</div>
		<?php }?>
	</div>
</div>

<!--尾部-->
<?php require_once "footer.php"?>
</body>
</html>

