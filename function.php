<?php

function Send_Mail ($subject,$name_send,$email_send,$detail){

$host_smtp = "";//ระบุ host mail
$port_smtp = "";// ระบุ port hoat mail
$email_connect = "";// ระบุ email ที่ใช้เชื่อมต่อ host mail
$pass_connect = "";// ระบุ password ที่ใช้เชื่อมต่อ host mail

require_once('PHPMailer_v5_0_2/class.phpmailer.php');
$mail = new PHPMailer();
$mail->IsHTML(true);
$mail->CharSet = "utf-8";
$mail->IsSMTP();
$mail->SMTPAuth = true; // enable SMTP authentication
$mail->Host = $host_smtp; // sets GMAIL as the SMTP server
$mail->Port = $port_smtp; // set the SMTP port for the GMAIL server
$mail->Username = $email_connect; // GMAIL username
$mail->Password = $pass_connect; // GMAIL password
$mail->From = $email_connect; // "name@yourdomain.com";
$mail->FromName = $email_connect;  // set from Name
$mail->Subject = $subject; 
$mail->Body = $detail;
 
$mail->AddAddress($email_send, $name_send); // to 

if($mail->Send()){

  echo "<script>alert('ส่ง Email สำเร็จ...');</script>";
}

else {

  echo "<script>alert('ส่ง Email ไม่สำเร็จ!');</script>";
}


}


?>






