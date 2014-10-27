<div class="header_bg">
	<div class="header">
		<div class="logo">
			<a href="index.php"><img src="images/logo.png" alt=""/></a>
		</div>
		<div class="h_menu">
			<ul id="menu" class="menu">
				<li><a href="index.php">创鼎首页</a></li>
				<li><a href="about.php">公司简介</a></li>
				<li><a href="infolist.php">新闻资讯</a></li>
				<li><a href="recruitment.php">招聘信息</a></li>
				<li><a href="feature.php">服务产品</a></li>
				<li><a href="contact.php">联系我们</a></li>
				<li><a target="blank" href="../cdgk2/cd_login.html">物联管控</a></li>
			</ul>
		</div>
		<div class="clear"></div>
	</div>
</div>

<script type="text/javascript">
var lis = document.getElementById('menu').getElementsByTagName('li');
var obj = lis[0];
for(i=1; i<lis.length; i++){
    if(window.location.href.indexOf(lis[i].getElementsByTagName('a')[0].href) >= 0){
		obj = lis[i];
	}
}

obj.setAttribute("class", "activate");
</script>