<?php require_once "action/aboutDb.php" ?>
<!DOCTYPE HTML>
<html>
<head>
<title>公司介绍</title>
<link href="css/common.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/about.css" rel="stylesheet" type="text/css" media="all" />
</head>

<body>
<!-- 头部 -->
<?php require_once "header.php" ?>

<!--位置导航-->
<div class="main_bg"><!-- start main -->
	<div class="main_grid1">
		<h3 class="style"><a href="index.html">首页</a> / 公司介绍</h3>
	</div>
</div>


<div class="main_btm1"><!-- start main_btm -->
	<div class="span_of_3">
		<h3>关于我们：</h3>
		<p class="para"><?php echo getSysoption('about.info'); ?></p>
		
		<h3>发展历程：</h3>
		<p class="para"><img src="<?php echo getSysoption('about.developer.pic'); ?>"></p>
		
		<p class="phrase" style="margin-top:80px;"><?php echo getSysoption('about.tip'); ?></p>
		
		<h3 style="margin-bottom:0px;">四大业务领域：</h3>
		<div class="span1_of_3">
			<h4>工业自动化</h4>
			<p>
			生产线自动化
			</p>
			<p>
			暖通空调自动化
			</p>
			<p>
			工业信息化解决方案
			</p>
			<p>
			手机及PAD终端监控
			</p>
		</div>
		<div class="span1_of_3">
			<h4>建筑物智能化</h4>
			<p>
			楼宇自动化(BA)
			</p>
			<p>
			家居智能化
			</p>
			<p>
			信息化解决方案
			</p>
			<p>
			弱电系统集成
			</p>
			<p>
			手机及PAD终端监控
			</p>
		</div>
		<div class="span1_of_3">
			<h4>流程工业能源智慧化</h4>
			<p>
			空调系统节能控制技术
			</p>
			<p>
			供热系统节能控制技术
			</p>
			<p>
			工业循环水节能控制技术
			</p>
			<p>
			大型风机节能控制技术
			</p>
			<p>
			压缩空气系统节能控制
			</p>
		</div>
		<div class="span1_of_3">
			<h4>咨询软件及服务</h4>
			<p>
			认证咨询
			</p>
			<p>
			IT整体解决方案
			</p>
			<p>
			能源管控系统
			</p>
			<p>
			资源共享运营平台
			</p>
			<p>
			协同办公
			</p>
		</div>
		<div class="clear"></div>
		<span class="line"></span>
		<h3 style="margin-top:20px;">我们的合作伙伴：</h3>
		<div class="clear"></div>
		
		<?php foreach($partnerArray as $key => $value){ ?>
		<a target="_black" href="partnerDetail.php?id=<?php echo $value['id']; ?>"><img src="<?php echo $value['icon'];?>" height="80" style="float:left;margin-right:30px;margin-bottom:20px" /></a>
		<?php }?>
		<div class="clear"></div>
	</div>
</div>

<!--尾部-->
<?php require_once "footer.php"?>
</body>
</html>

