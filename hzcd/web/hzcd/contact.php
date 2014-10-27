<?php require_once "action/contactDb.php" ?>
<!DOCTYPE HTML>
<html>
<head>
<title>联系我们</title>
<link href="css/common.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/contact.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript">
function checkMail(mail) {
    var pattern = /^([\.a-zA-Z0-9_-])+@([a-zA-Z0-9_-])+(\.[a-zA-Z0-9_-])+/;  
	return pattern.test(mail);
}

function checkTel(tel) {
   var mobile = /^1[3|5|8]\d{9}$/;
   var phone = /^0\d{2,3}-?\d{7,8}$/;
   return mobile.test(tel) || phone.test(tel);
}

function checkForm(){
	var name = document.getElementById('name').value;
	if('' == name || '姓名（必填）' == name){
		alert("姓名必填哦");
		return false;
	}
	
	var mail = document.getElementById('mail').value;
	if('' == mail || '邮箱（必填）' == mail){
		alert("邮箱必填哦");
		return false;
	}
	if(!checkMail(mail)){
		alert("邮箱格式不对");
		return false;
	}
	
	var phone = document.getElementById('phone').value;
	if('' == phone || '手机（必填）' == phone){
		alert("手机号码必填哦");
		return false;
	}
	if(!checkTel(phone)){
		alert("手机号码格式不对");
		return false;
	}
	
	var title = document.getElementById('title').value;
	if('' == title || '标题（必填）' == title){
		alert("标题必填哦");
		return false;
	}
	
	var content = document.getElementById('content').value;
	if('' == content || '跟我们说点什么吧...（必填）' == content){
		alert("内容必填哦，跟我们说点什么吧");
		return false;
	}

	return true;
}
</script>
</head>

<body>
<!-- 头部 -->
<?php require_once "header.php" ?>

<!--位置导航-->
<div class="main_bg"><!-- start main -->
	<div class="main_grid1">
		<h3 class="style"><a href="index.html">首页</a> / 联系我们</h3>
	</div>
</div>

<!--中间内容部分-->
<div class="main_btm1"><!-- start main_btm -->
	<div class="contact">
		<p class="style"><?php echo getSysoption('tips.contact');?></p>
		<div class="contact_main">
			<div class="company_ad">
				<h2>如何找我们</h2>
				<p>地址：<?php echo getSysoption('company.address');?></p>
				<p>电话：<?php echo getSysoption('company.tel');?></p>
				<p>手机：<?php echo getSysoption('company.phone');?></p>
				<p>传真：<?php echo getSysoption('company.fax');?></p>
				<p>邮箱：<?php echo getSysoption('company.mail');?></p>
				<p>邮编：<?php echo getSysoption('company.zipcode');?></p>
			</div>
			<div class="contact-form">
				<h2>给我们留言</h2> 
				<form method="post" action="action/contactSendMessageDb.php"  onsubmit="return checkForm()">
					<input id="name" name="name" type="text" value="姓名（必填）" onfocus="if(this.value == '姓名（必填）') {this.value = '';};" onblur="if (this.value == '') {this.value = '姓名（必填）';}">
					<input id="mail" name="mail" type="text" value="邮箱（必填）" onfocus="if(this.value == '邮箱（必填）') {this.value = '';};" onblur="if (this.value == '') {this.value = '邮箱（必填）';}">
					<input id="phone" name="phone" type="text" value="手机（必填）" onfocus="if(this.value == '手机（必填）') {this.value = '';};" onblur="if (this.value == '') {this.value = '手机（必填）';}">
					<input id="title" name="title" type="text" value="标题（必填）" onfocus="if(this.value == '标题（必填）') {this.value = '';};" onblur="if (this.value == '') {this.value = '标题（必填）';}">
					<textarea id="content" name="content" onfocus="if(this.value == '跟我们说点什么吧...（必填）') {this.value = '';};" onblur="if(this.value == '') this.value='跟我们说点什么吧...（必填）'" >跟我们说点什么吧...（必填）</textarea>
					<span><input type="submit" value="提交"></span>
				</form>
			</div>		
			<div class="clear"></div>		
		</div>
	</div>
</div>


<!--尾部-->
<?php require_once "footer.php"?></body>
</body>
</html>

