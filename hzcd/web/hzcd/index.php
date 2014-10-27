<?php require_once "action/indexDb.php" ?>
<!DOCTYPE HTML>
<html>
<head>
<title>创鼎首页</title>
<link href="css/common.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/index.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="js/jquery.min.js"></script>

<!--start slider -->
<link rel="stylesheet" href="css/fwslider.css" media="all">
<script src="js/jquery-ui.min.js"></script>
<script src="js/css3-mediaqueries.js"></script>
<script src="js/fwslider.js"></script>
<!--end slider -->
</head>

<body>
<!-- 头部 -->
<?php require_once "header.php" ?>

<!--幻灯片轮播部分-->
<div id="fwslider"><!-- start fwslider -->
	<div class="slider_container">
		<div class="slide"> 
			<img src="images/slider1.jpg">
			<div class="slide_content">
				<div class="slide_content_wrap">
					<h4 class="title">中国梦！创鼎梦！</h4>
					<p class="description">杭州创鼎将一如既往地为建设智慧中国、绿色中国贡献力量！</p>
				</div>
			</div>
		</div>
		<div class="slide">
			<img src="images/slider2.jpg">
			<div class="slide_content">
				<div class="slide_content_wrap">
					<h4 class="title">我们的价值观</h4>
					<p class="description">我们取得引领最佳绩效的同时秉承最高道德标准。</p>
				</div>
			</div>
		</div>
	</div>
	<div class="timers"></div>
	<div class="slidePrev"><span></span></div>
	<div class="slideNext"><span></span></div>
</div><!--end fwslider -->

<!--中间内容-->
<div class="main_bg">
	<div class="main_grid">
		<!--关于我们部分介绍-->
		<div class="top_grid"><!-- start top_grid -->
			<div class="span1_of_1">
					<h3>关于我们</h3>
					<p><?php echo getSysoption('about.info'); ?></p>
			</div>
			<div class="span1_of_2">
				<a class="btn" href="about.php">了解更多</a>
			</div>
			<div class="clear"></div>
		</div>
		
		<!--产品服务介绍-->
		<div class="span_of_4">
			<?php foreach($dataArray as $key => $value){ ?>
			<div class="span1_of_4">
				<div class="span4_of_list">
					<h3><?php echo $value['title']; ?></h3>
					<p><?php echo $value['content']; ?></p>
					<div class="read_more">
						<a target="_black" class="btn" href="feature-detail.php?id=<?php echo $value['id']; ?>">了解更多</a>
					</div>
				</div>
			</div>
			<?php }?>
			<div class="clear"></div>
		</div>
	</div>
</div>

<!--尾部-->
<?php require_once "footer.php"?>
</body>
</html>

