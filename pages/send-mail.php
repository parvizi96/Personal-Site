<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ارسال اطلاعات به ایمیل</title>
<style type="text/css">
html,body{direction:rtl;font:.9em/1.7em tahoma;}
</style>
</head>

<body>
<?php
	//دریافت اطلاعات اولیه فرم
@$name = $_POST['name'];
@$from = $_POST['email'];
@$message = $_POST['message'];
$subject = "Parvizi96.ir" ;
$max_file_size = 1000;
$formats = array('zip','doc','docx','pdf');
	
	
if ( empty($name) || empty($from) || empty($message) ){
die("لطفا فیلدهای ستاره دار را تکمیل کنید!");
}
if (!preg_match('/[A-Za-z0-9_-]+\@[A-Za-z0-9_-]+\.[A-Za-z0-9_-]+/',$from)){
die("لطفا ایمیل معتبری وارد نمایید!");
}
	
	// فراخوانی فایلهای PHPmailer
require("phpmailer/class.phpmailer.php");
include("phpmailer/class.smtp.php");
$mail= new PHPMailer();
$mail->IsSMTP();
$mail->SMTPAuth=true;
	
	// شروع قسمتی که باید ویرایش کنید
$mail->Host       = "mail.parvizi96.ir";
$mail->Username= "webdesign@parvizi96.ir";
$mail->Password= "13751024";
$mail->AddAddress('parvizi.p96@gmail.com', "Parisa Parvizi");

	// پایان قسمتی که باید ویرایش کنید
$mail->SetFrom($from, $name);
$mail->AddReplyTo($from, $name);
$mail->Subject    = $subject;
	
	// در صورتی که فایلی پیوست شده باشد 
if (($_FILES['attachment']['name']) != "") {
$file_name = $_FILES['attachment']['name'];
$file_path = $_FILES['attachment']['tmp_name'];
$type = $_FILES['attachment']['type'];
$file_size = $_FILES['attachment']['size']/1024;
//
// بررسی حجم فایل ضمیمه
if ($file_size>$max_file_size) {
die("حجم فایل ضمیمه بیشتر از حجم مجاز است. حداکثر حجم مجاز".$max_file_size." کیلوبایت می باشد");
}
//
// بررسی فرمت فایل ضمیمه
$ext = end(explode('.',$file_name));
if(!in_array($ext,$formats)){
echo "فایل ضمیمه شده مجاز نمی باشد.تنها فرمتهای ";
foreach($formats as $value){
echo $value." , ";
}
echo " قابل ارسال هستند"; die('');
}
$mail->AddAttachment($file_path, $file_name);
}
$mail->IsHTML(true);
$body = '<html><body>';
$body .= '<p style="direction:rtl;font-family:tahoma;">'.$message.'</p>';
$body .= "</body></html>";
$mail->MsgHTML($body);
$mail->AltBody= $message;
if(!$mail->Send()) {
echo "خطا:پیام شما ارسال نشد » " . $mail->ErrorInfo;
} else {
echo "پیام ارسال شد!";
}
	
?>

</body>
</html>