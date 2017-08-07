<?php 

function ReAjax($data)
{
	exit(json_encode($data));
}

/**
 * [Ctime 时间格式的转换]
 * @Author   Xuebingsi
 * @DateTime 2017-07-10T08:19:55+0800
 * @param    [时间戳]                   $time [需要转换的时间戳]
 */
function Ctime($time=null)
{
	if($time==null){
		return date("Y-m-d H:i:s");
	}
	
	$diff = time()-$time;

	if($diff<60){
		return "刚刚";
	}elseif($diff<3600){
		return ceil(($diff/60))."分钟前";
	}elseif($diff<86400){
		return ceil(($diff/3600))."小时前";
	}elseif($diff<(86400*7)){
		return ceil(($diff/86400))."天前";
	}else{
		return date("Y-m-d H:i:s",$time);
	}
}


function youjian($email,$title,$content)
{

	// require 'PHPMailerAutoload.php';
	Vendor("PHPMailer.PHPMailerAutoload");

	$mail = new PHPMailer;
	// var_dump($mail);exit();

	//$mail->SMTPDebug = 3;                               // 启用详细的调试输出

	$mail->isSMTP();                                      // 设置邮件程序使用SMTP 
	$mail->Host = 'smtp.qq.com';  // 指定主服务器和备份SMTP服务器
	$mail->SMTPAuth = true;                               // 启用SMTP验证
	$mail->Username = '380494351@qq.com';                 // SMTP username
	$mail->Password = 'vjpttyszdakzbgfh';                           // SMTP password
	$mail->SMTPSecure = 'ssl';                            // 启用TLS加密，`ssl`也接受
	$mail->Port = 465;                                    // TCP port to connect to

	$mail->setFrom('380494351@qq.com', '老司机论坛站长QQ380494351');         //谁发的
	// $mail->addAddress('joe@example.net', 'Joe User');     // 添加收件人
	$mail->addAddress($email);               //名称是可选的
	// $mail->addReplyTo('info@example.com', 'Information');//回复
	// $mail->addCC('cc@example.com');//抄送
	// $mail->addBCC('bcc@example.com');//密送

	// $mail->addAttachment('/var/tmp/file.tar.gz');         // 添加附件
	// $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // 可选名称
	$mail->isHTML(true);                                  // 将电子邮件格式设置为HTML

	$mail->Subject = $title;  //邮件标题
	$mail->Body    = $content; //邮件内容
	// $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';  // 邮件内容说明

	if(!$mail->send()) {
	    echo 'Message could not be sent.';
	    echo 'Mailer Error: ' . $mail->ErrorInfo;
	} else {
	    echo 'Message has been sent';
	}





}





 ?>