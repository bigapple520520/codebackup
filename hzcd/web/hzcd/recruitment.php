<?php require_once "action/recruitmentDb.php" ?>
<!DOCTYPE HTML>
<html>
<head>
<title>招聘信息</title>
<link href="css/common.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/recruitment.css" rel="stylesheet" type="text/css" media="all" />
</head>

<body>
<!-- 头部 -->
<?php require_once "header.php" ?>

<!--位置导航-->
<div class="main_bg"><!-- start main -->
	<div class="main_grid1">
		<h3 class="style"><a href="index.html">首页</a> / 招聘信息</h3>
	</div>
</div>

<!--中间内容部分-->
<div class="main_btm1"><!-- start main_btm -->
	<div class="pricing2"><!-- start pricing2 -->
		<h5>求贤若渴</h5>
		<h6><?php echo getSysoption('tips.recruitment'); ?> </h6>
		<ul class="pricing_table">
			<table id="dataTable" border="0" align="center" cellpadding="5" cellspacing="1">
				<tr class="titleTr">
					<td align="center">岗位名称</td>
					<td align="center">岗位描述</td>
					<td align="center">岗位要求</td>
					<td align="center">如何申请</td>
				</tr>
				<?php foreach($recruitmentArray as $key => $value){ ?>
				<tr>
					<td align="center"><?php echo $value['name']; ?></td>
					<td align="center"><?php echo $value['description']; ?></td>
					<td align="center"><?php echo $value['requirement']; ?></td>
					<td align="center"><?php echo $value['apply']; ?></td>
				</tr>
				<?php }?>
			</table>
		<div class="clearfix"></div>
	</ul>
	<div class="clear"></div>
	</div><!-- end pricing2 -->
</div>


<!--尾部-->
<?php require_once "footer.php"?>
</body>
</html>

