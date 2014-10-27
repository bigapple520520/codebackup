<?php
require_once 'class.phpmailer.php';

$name = '';
$mail = '';
$phone = '';
$title = '';
$content = '';

if(isset($_POST['name'])){
	$name = $_POST['name'];
}else{
	echo '姓名不能为空';
	exit;
}

if(isset($_POST['mail'])){
	$mail = $_POST['mail'];
}else{
	echo '邮箱不能为空';
	exit;
}

if(isset($_POST['phone'])){
	$phone = $_POST['phone'];
}else{
	echo '手机不能为空';
	exit;
}

if(isset($_POST['title'])){
	$title = $_POST['title'];
}else{
	echo '标题不能为空';
	exit;
}

if(isset($_POST['content'])){
	$content = $_POST['content'];
}else{
	echo '内容不能为空';
	exit;
}

$mailContent = '姓名：'.$name.'。邮箱：'.$mail.'。手机：'.$phone.'。标题：'.$title.'。内容：'.$content.'。';

/**
* 发送邮件
* @fromMail     发送人邮箱
* @fromUsername 发送人用户名
* @fromPassword 发送人密码
* @toMail       接收人邮箱
* @fromName     发送人名称
* @subject      主题
* @content      文本内容
*/
function sendMail($fromMail, $fromUsername, $fromPassword, $toMail, $fromName, $subject, $content){
	try {
		$mail = new PHPMailer(true);
		
		$mail->CharSet ="UTF-8";

		$mail->IsSMTP();
		$mail->SMTPAuth   = true;
		$mail->Port       = 25;
		$mail->Host       = "smtp.163.com";
		$mail->Username   = $fromUsername; 
		$mail->Password   = $fromPassword;
		
		$mail->From       = $fromMail;
		$mail->FromName   = $fromName;

		$mail->AddAddress($toMail);
		
		$mail->Subject  = $subject;
		$mail->WordWrap   = 80; // set word wrap
		$mail->MsgHTML($content);
		
		$mail->Send();
		echo "留言已发送，我们很快就会联系你：<a href='../contact.php'>点我返回</a>";
	} catch (phpmailerException $e) {
		echo $e->errorMessage();
	}
}

sendMail("hzchuangding@163.com","hzchuangding@163.com","hzcd2014","hzchuangding@163.com",$name,$title,$mailContent);

?>