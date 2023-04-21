<?php
include 'dbconnect.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
require 'vendor/autoload.php';

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
$msg = 0;
$style1 = "inside";
$style2 = "input";
$mail_value = "";
if(isset($_POST['reset'])){
	$mail_value = test_input($_POST['email']);
	$sql = "SELECT * FROM user_details WHERE email='$mail_value'";
	$result = $con->query($sql);
	if($result->num_rows>0){
		$row = $result->fetch_assoc();
		$name = $row['fname']." ".$row['lname'];
		$linkset = false;
		$resetKey = md5('2418*2'.$mail_value);
    $addKey = substr(md5(uniqid(rand(),1)),3,10);
    $resetKey = $resetKey . $addKey;
    $expFormat = mktime(date("H"),date("i"),date("s"),date("m"),date("d")+1,date("Y"));
    $exp_time = date("Y-m-d H:i:s",$expFormat);
    $sql2 = "SELECT * FROM pwd_reset WHERE email='$mail_value'";
    $result2 = $con->query($sql2);
    if($result2->num_rows>0){
    	$sql3 = "UPDATE pwd_reset SET reset_key='$resetKey',exp_time='$exp_time' WHERE email='$mail_value'";
    	$result3 = $con->query($sql3);
    	if($result3){
    		$linkset = true;
    	}
    }
    else{
    	$sql4 = "INSERT INTO pwd_reset(email,reset_key,exp_time) VALUES('$mail_value','$resetKey','$exp_time')";
    	$result4 = $con->query($sql4);
    	if($result4){
    		$linkset = true;
    	}
    }
    if($linkset){
    	$mail = new PHPMailer(true);
			try{
				$mail->SMTPOptions = array(
				'ssl' => array(
				'verify_peer' => false,
				'verify_peer_name' => false,
				'allow_self_signed' => true
				)
				);
				$mail->CharSet = "UTF-8";
				$mail->Encoding = "base64";
				$mail->isSMTP();
				$mail->Host = "smtp.hostinger.in";
				$mail->SMTPAuth = true;
				$mail->Username = "noreply@comerazi.in";
				$mail->Password = "@Uagimmick9211";
				$mail->Port = 587;
				$mail->SMTPSecure = "tls";
				$mail->setFrom("noreply@comerazi.in","DigiMart");
				$mail->addAddress("$mail_value");
				$mail->isHtml(true);
				$mail->Subject = "Password Reset";
				$mail->AddEmbeddedImage('img/Img22x.jpg', 'fpwd', 'fpwd.jpg');
				$mail->AddEmbeddedImage('img/bee.png', 'bee', 'bee.png');
				$mail->Body = "<!DOCTYPE html>

<html lang='en' xmlns:o='urn:schemas-microsoft-com:office:office' xmlns:v='urn:schemas-microsoft-com:vml'>
<head>
<title></title>
<meta content='text/html; charset=utf-8' http-equiv='Content-Type'/>
<meta content='width=device-width, initial-scale=1.0' name='viewport'/>
<!--[if mso]><xml><o:OfficeDocumentSettings><o:PixelsPerInch>96</o:PixelsPerInch><o:AllowPNG/></o:OfficeDocumentSettings></xml><![endif]-->
<style>
		* {
			box-sizing: border-box;
		}

		body {
			margin: 0;
			padding: 0;
		}

		a[x-apple-data-detectors] {
			color: inherit !important;
			text-decoration: inherit !important;
		}

		#MessageViewBody a {
			color: inherit;
			text-decoration: none;
		}

		p {
			line-height: inherit
		}

		.desktop_hide,
		.desktop_hide table {
			mso-hide: all;
			display: none;
			max-height: 0px;
			overflow: hidden;
		}

		@media (max-width:660px) {
			.desktop_hide table.icons-inner {
				display: inline-block !important;
			}

			.icons-inner {
				text-align: center;
			}

			.icons-inner td {
				margin: 0 auto;
			}

			.image_block img.big,
			.row-content {
				width: 100% !important;
			}

			.mobile_hide {
				display: none;
			}

			.stack .column {
				width: 100%;
				display: block;
			}

			.mobile_hide {
				min-height: 0;
				max-height: 0;
				max-width: 0;
				overflow: hidden;
				font-size: 0px;
			}

			.desktop_hide,
			.desktop_hide table {
				display: table !important;
				max-height: none !important;
			}
		}
	</style>
</head>
<body style='margin: 0; background-color: #f8f8f9; padding: 0; -webkit-text-size-adjust: none; text-size-adjust: none;'>
<table border='0' cellpadding='0' cellspacing='0' class='nl-container' role='presentation' style='mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #f8f8f9;' width='100%'>
<tbody>
<tr>
<td>
<table align='center' border='0' cellpadding='0' cellspacing='0' class='row row-1' role='presentation' style='mso-table-lspace: 0pt; mso-table-rspace: 0pt;' width='100%'>
<tbody>
<tr>
<td>
<table align='center' border='0' cellpadding='0' cellspacing='0' class='row-content stack' role='presentation' style='mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #f8f8f9; color: #000000; width: 640px;' width='640'>
<tbody>
<tr>
<td class='column column-1' style='mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; vertical-align: top; padding-top: 5px; padding-bottom: 5px; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;' width='100%'>
<table border='0' cellpadding='20' cellspacing='0' class='divider_block' role='presentation' style='mso-table-lspace: 0pt; mso-table-rspace: 0pt;' width='100%'>
<tr>
<td>
<div align='center'>
<table border='0' cellpadding='0' cellspacing='0' role='presentation' style='mso-table-lspace: 0pt; mso-table-rspace: 0pt;' width='100%'>
<tr>
<td class='divider_inner' style='font-size: 1px; line-height: 1px; border-top: 0px solid #BBBBBB;'><span> </span></td>
</tr>
</table>
</div>
</td>
</tr>
</table>
</td>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>
<table align='center' border='0' cellpadding='0' cellspacing='0' class='row row-2' role='presentation' style='mso-table-lspace: 0pt; mso-table-rspace: 0pt;' width='100%'>
<tbody>
<tr>
<td>
<table align='center' border='0' cellpadding='0' cellspacing='0' class='row-content stack' role='presentation' style='mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #fff; color: #000000; width: 640px;' width='640'>
<tbody>
<tr>
<td class='column column-1' style='mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; vertical-align: top; padding-top: 0px; padding-bottom: 0px; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;' width='100%'>
<table border='0' cellpadding='0' cellspacing='0' class='divider_block' role='presentation' style='mso-table-lspace: 0pt; mso-table-rspace: 0pt;' width='100%'>
<tr>
<td>
<div align='center'>
<table border='0' cellpadding='0' cellspacing='0' role='presentation' style='mso-table-lspace: 0pt; mso-table-rspace: 0pt;' width='100%'>
<tr>
<td class='divider_inner' style='font-size: 1px; line-height: 1px; border-top: 4px solid #1AA19C;'><span> </span></td>
</tr>
</table>
</div>
</td>
</tr>
</table>
<table border='0' cellpadding='0' cellspacing='0' class='divider_block' role='presentation' style='mso-table-lspace: 0pt; mso-table-rspace: 0pt;' width='100%'>
<tr>
<td style='padding-bottom:12px;padding-top:60px;'>
<div align='center'>
<table border='0' cellpadding='0' cellspacing='0' role='presentation' style='mso-table-lspace: 0pt; mso-table-rspace: 0pt;' width='100%'>
<tr>
<td class='divider_inner' style='font-size: 1px; line-height: 1px; border-top: 0px solid #BBBBBB;'><span> </span></td>
</tr>
</table>
</div>
</td>
</tr>
</table>
<table border='0' cellpadding='0' cellspacing='0' class='image_block' role='presentation' style='mso-table-lspace: 0pt; mso-table-rspace: 0pt;' width='100%'>
<tr>
<td style='padding-left:40px;padding-right:40px;width:100%;'>
<div align='center' style='line-height:10px'><img class='big' src='cid:fpwd' style='display: block; height: auto; border: 0; width: 352px; max-width: 100%;' width='352'/></div>
</td>
</tr>
</table>
<table border='0' cellpadding='0' cellspacing='0' class='divider_block' role='presentation' style='mso-table-lspace: 0pt; mso-table-rspace: 0pt;' width='100%'>
<tr>
<td style='padding-top:50px;'>
<div align='center'>
<table border='0' cellpadding='0' cellspacing='0' role='presentation' style='mso-table-lspace: 0pt; mso-table-rspace: 0pt;' width='100%'>
<tr>
<td class='divider_inner' style='font-size: 1px; line-height: 1px; border-top: 0px solid #BBBBBB;'><span> </span></td>
</tr>
</table>
</div>
</td>
</tr>
</table>
<table border='0' cellpadding='0' cellspacing='0' class='text_block' role='presentation' style='mso-table-lspace: 0pt; mso-table-rspace: 0pt; word-break: break-word;' width='100%'>
<tr>
<td style='padding-bottom:10px;padding-left:40px;padding-right:40px;padding-top:10px;'>
<div style='font-family: sans-serif'>
<div class='txtTinyMce-wrapper' style='font-size: 12px; mso-line-height-alt: 14.399999999999999px; color: #555555; line-height: 1.2; font-family: Montserrat, Trebuchet MS, Lucida Grande, Lucida Sans Unicode, Lucida Sans, Tahoma, sans-serif;'>
<p style='margin: 0; font-size: 16px; text-align: center;'><span style='font-size:30px;color:#2b303a;'><strong>Forgot Password?</strong></span></p>
</div>
</div>
</td>
</tr>
</table>
<table border='0' cellpadding='0' cellspacing='0' class='text_block' role='presentation' style='mso-table-lspace: 0pt; mso-table-rspace: 0pt; word-break: break-word;' width='100%'>
<tr>
<td style='padding-bottom:10px;padding-left:40px;padding-right:40px;padding-top:10px;'>
<div style='font-family: sans-serif'>
<div class='txtTinyMce-wrapper' style='font-size: 12px; font-family: Montserrat, Trebuchet MS, Lucida Grande, Lucida Sans Unicode, Lucida Sans, Tahoma, sans-serif; mso-line-height-alt: 18px; color: #555555; line-height: 1.5;'>
<p style='margin: 0; font-size: 14px; text-align: center; mso-line-height-alt: 22.5px;'><span style='color:#808389;font-size:15px;'><strong>Dear ".$name.", click on the button given below to reset your password.</strong><br/>If you did not request this reset link, no action is needed, your password will not be reset.<br/><br/><strong>Thanks.</strong></span></p>
</div>
</div>
</td>
</tr>
</table>
<table border='0' cellpadding='0' cellspacing='0' class='button_block' role='presentation' style='mso-table-lspace: 0pt; mso-table-rspace: 0pt;' width='100%'>
<tr>
<td style='padding-left:10px;padding-right:10px;padding-top:15px;text-align:center;'>
<div align='center'>
<!--[if mso]><v:roundrect xmlns:v='urn:schemas-microsoft-com:vml' xmlns:w='urn:schemas-microsoft-com:office:word' style='height:62px;width:174px;v-text-anchor:middle;' arcsize='97%' stroke='false' fillcolor='#1aa19c'><w:anchorlock/><v:textbox inset='0px,0px,0px,0px'><center style='color:#ffffff; font-family:Tahoma, sans-serif; font-size:16px'><![endif]-->
<a href='http://localhost/e-com.project-main/resetpwd.php?resetkey=".$resetKey."&email=".$mail_value."'><div style='text-decoration:none;display:inline-block;color:#ffffff;background-color:#1aa19c;border-radius:60px;width:auto;border-top:1px solid #1aa19c;font-weight:undefined;border-right:1px solid #1aa19c;border-bottom:1px solid #1aa19c;border-left:1px solid #1aa19c;padding-top:15px;padding-bottom:15px;font-family:Montserrat, Trebuchet MS, Lucida Grande, Lucida Sans Unicode, Lucida Sans, Tahoma, sans-serif;text-align:center;mso-border-alt:none;word-break:keep-all;'><span style='padding-left:30px;padding-right:30px;font-size:16px;display:inline-block;letter-spacing:normal;'><span style='font-size: 16px; margin: 0; line-height: 2; word-break: break-word; mso-line-height-alt: 32px;'><strong>Reset Password</strong></span></span></div></a>
<!--[if mso]></center></v:textbox></v:roundrect><![endif]-->
</div>
</td>
</tr>
</table>
<table border='0' cellpadding='0' cellspacing='0' class='divider_block' role='presentation' style='mso-table-lspace: 0pt; mso-table-rspace: 0pt;' width='100%'>
<tr>
<td style='padding-bottom:12px;padding-top:60px;'>
<div align='center'>
<table border='0' cellpadding='0' cellspacing='0' role='presentation' style='mso-table-lspace: 0pt; mso-table-rspace: 0pt;' width='100%'>
<tr>
<td class='divider_inner' style='font-size: 1px; line-height: 1px; border-top: 0px solid #BBBBBB;'><span> </span></td>
</tr>
</table>
</div>
</td>
</tr>
</table>
</td>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>
<table align='center' border='0' cellpadding='0' cellspacing='0' class='row row-3' role='presentation' style='mso-table-lspace: 0pt; mso-table-rspace: 0pt;' width='100%'>
<tbody>
<tr>
<td>
<table align='center' border='0' cellpadding='0' cellspacing='0' class='row-content stack' role='presentation' style='mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #2b303a; color: #000000; width: 640px;' width='640'>
<tbody>
<tr>
<td class='column column-1' style='mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; vertical-align: top; padding-top: 0px; padding-bottom: 0px; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;' width='100%'>
<table border='0' cellpadding='0' cellspacing='0' class='divider_block' role='presentation' style='mso-table-lspace: 0pt; mso-table-rspace: 0pt;' width='100%'>
<tr>
<td>
<div align='center'>
<table border='0' cellpadding='0' cellspacing='0' role='presentation' style='mso-table-lspace: 0pt; mso-table-rspace: 0pt;' width='100%'>
<tr>
<td class='divider_inner' style='font-size: 1px; line-height: 1px; border-top: 4px solid #1AA19C;'><span> </span></td>
</tr>
</table>
</div>
</td>
</tr>
</table>
</td>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>
<table align='center' border='0' cellpadding='0' cellspacing='0' class='row row-4' role='presentation' style='mso-table-lspace: 0pt; mso-table-rspace: 0pt;' width='100%'>
<tbody>
<tr>
<td>
<table align='center' border='0' cellpadding='0' cellspacing='0' class='row-content stack' role='presentation' style='mso-table-lspace: 0pt; mso-table-rspace: 0pt; color: #000000; width: 640px;' width='640'>
<tbody>
<tr>
<td class='column column-1' style='mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; vertical-align: top; padding-top: 5px; padding-bottom: 5px; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;' width='100%'>
<table border='0' cellpadding='0' cellspacing='0' class='icons_block' role='presentation' style='mso-table-lspace: 0pt; mso-table-rspace: 0pt;' width='100%'>
<tr>
<td style='vertical-align: middle; color: #9d9d9d; font-family: inherit; font-size: 15px; padding-bottom: 5px; padding-top: 5px; text-align: center;'>
<table cellpadding='0' cellspacing='0' role='presentation' style='mso-table-lspace: 0pt; mso-table-rspace: 0pt;' width='100%'>
<tr>
<td style='vertical-align: middle; text-align: center;'>
<!--[if vml]><table align='left' cellpadding='0' cellspacing='0' role='presentation' style='display:inline-block;padding-left:0px;padding-right:0px;mso-table-lspace: 0pt;mso-table-rspace: 0pt;'><![endif]-->
<!--[if !vml]><!-->
<table cellpadding='0' cellspacing='0' class='icons-inner' role='presentation' style='mso-table-lspace: 0pt; mso-table-rspace: 0pt; display: inline-block; margin-right: -4px; padding-left: 0px; padding-right: 0px;'>
<!--<![endif]-->
<tr>
<td style='vertical-align: middle; text-align: center; padding-top: 5px; padding-bottom: 5px; padding-left: 5px; padding-right: 6px;'><a href='https://www.designedwithbee.com/' style='text-decoration: none;' target='_blank'><img align='center' class='icon' height='32' src='cid:bee' style='display: block; height: auto; margin: 0 auto; border: 0;' width='34'/></a></td>
<td style='font-family: Montserrat, Trebuchet MS, Lucida Grande, Lucida Sans Unicode, Lucida Sans, Tahoma, sans-serif; font-size: 15px; color: #9d9d9d; vertical-align: middle; letter-spacing: undefined; text-align: center;'><a href='https://www.designedwithbee.com/' style='color: #9d9d9d; text-decoration: none;' target='_blank'>Designed with BEE</a></td>
</tr>
</table>
</td>
</tr>
</table>
</td>
</tr>
</table>
</td>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table><!-- End -->
</body>
</html>";
				$mail->AltBody = "Dear ".$name.", reset your password by going to the following address: http://localhost/e-com.project-main/pwdreset.php?resetkey=".$resetKey."&email=".$mail_value;

	      $mail->send();
	      $msg = 1;
   		} catch(Exception $e){
   			$msg = 2;
   			}
		}
	}
	else{
		$style1 = "inside-error";
		$style2 = "input-error";
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Forgot Password</title>
	<link rel ="shortcut icon" href="img/favicon.svg" type="image/x-icon">
	<link rel="stylesheet" href="css/fpStyle.css" type="text/css">
	<meta name="viewport" content="initial-scale=1.0,width=device-width">
</head>
<body>
<?php
include 'header.php';
if($msg===0){?>
<h1>Forgot Password</h1>
<div class="form">
	<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
	<label class="label" for="email">Enter your E-Mail:</label>
	<label class="label-error" style="<?php if(isset($_POST['email'])){ if($result->num_rows<1){echo 'display:block';} } ?>">No such E-Mail registered</label>
	<div class="<?php echo $style1 ?>">
		<img class="mail" src="img/mail.svg">
		<input type="email" id="email" name="email" class="<?php echo $style2 ?>" value="<?php echo $mail_value ?>" placeholder="E-Mail" required>
	</div>
	<input type="submit" name="reset" class="btn" value="Reset Password">
	</form>
</div>
<?php }
elseif($msg===1){
?>
<div class="msg-container">
<div class="msg">
Dear user,<br>
A password reset link will be sent to your e-mail account: <?php echo $mail_value ?> shortly.<br>
Follow that link to reset your password.<br>
<i style="font-weight:normal;font-size:21px">(Link expires after 24 Hrs. of form submission)</i>
</div>
</div>
<?php }
elseif($msg===2){
?>
<div class="msg-container">
<div class="msg">
Oops! Some error occured.<br>
<a href="forgotpwd.php">Go Back</a>.
</div>
</div>
<?php } ?>
</body>
</html>