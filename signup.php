<?php
include 'dbconnect.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
require 'vendor/autoload.php';

$msg = 0;
$style = array("inside","input","inside-no","input-no","inside","input");
$fname_value = "";
$lname_value = "";
$mail_value = "";
$pwd_value = "";
$pwd2_value = "";
$addr_value = "";
$full_phone = "";
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
if(isset($_POST['signup'])){
    $fname_value = test_input($_POST['first_name']);
    $lname_value = test_input($_POST['last_name']);
    $mail_value = test_input($_POST['email']);
    $addr_value = test_input($_POST['address']);
    $full_phone = test_input($_POST['full_number']);
    $pwd_value = test_input($_POST['pass']);
    $pwd2_value = test_input($_POST['pass2']);
    $country = test_input($_POST['country']);

    $sql1 = "SELECT * from user_details WHERE email = '$mail_value'";
    $sql2 = "SELECT * from user_details WHERE phone = '$full_phone'";
    $result1 = $con->query($sql1);
    $result2 = $con->query($sql2);
    if(($result1->num_rows>0) && ($result2->num_rows>0)){
      $style[0] = "inside-error";
      $style[1] = "input-error";
      $style[2] = "inside-no-error";
      $style[3] = "input-no-error";
    }
    else if($result1->num_rows>0){
      $style[0] = "inside-error";
      $style[1] = "input-error";
    }
    else if($result2->num_rows>0){
      $style[2] = "inside-no-error";
      $style[3] = "input-no-error";
    }
    if($pwd2_value!==$pwd_value){
      $style[4] = "inside-error";
      $style[5] = "input-error";
    }
    if(($result1->num_rows<1) && ($result2->num_rows<1) && ($pwd2_value===$pwd_value)){
      $pwd_value = password_hash($pwd_value, PASSWORD_DEFAULT);
      $evkey = md5('2418*2'.$mail_value);
      $addKey = substr(md5(uniqid(rand(),1)),3,10);
      $evkey = $evkey . $addKey;
      $expFormat = mktime(date("H"),date("i"),date("s"),date("m"),date("d")+1,date("Y"));
      $exp_time = date("Y-m-d H:i:s",$expFormat);

      $sql3 = "INSERT INTO temp_users(fname,lname,email,address,country,phone,pwd,evkey,exp_time) VALUES('$fname_value','$lname_value','$mail_value','$addr_value','$country','$full_phone','$pwd_value','$evkey','$exp_time')";
      $result3 = $con->query($sql3);
      if($result3){
        $name = "$fname_value $lname_value";
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
          $mail->Subject = "E-Mail Verification";
          $mail->AddEmbeddedImage('img/Img1_2x.jpg', 'mailimg', 'Img1_2x.jpg');
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
<table align='center' border='0' cellpadding='0' cellspacing='0' class='row-content stack' role='presentation' style='mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #1aa19c; color: #000000; width: 640px;' width='640'>
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
<table align='center' border='0' cellpadding='0' cellspacing='0' class='row row-3' role='presentation' style='mso-table-lspace: 0pt; mso-table-rspace: 0pt;' width='100%'>
<tbody>
<tr>
<td>
<table align='center' border='0' cellpadding='0' cellspacing='0' class='row-content stack' role='presentation' style='mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #fff; color: #000000; width: 640px;' width='640'>
<tbody>
<tr>
<td class='column column-1' style='mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; vertical-align: top; padding-top: 0px; padding-bottom: 0px; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;' width='100%'>
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
<div align='center' style='line-height:10px'><img class='big' src='cid:mailimg' style='display: block; height: auto; border: 0; width: 352px; max-width: 100%;' width='352'/></div>
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
<p style='margin: 0; font-size: 16px; text-align: center;'><span style='font-size:30px;color:#2b303a;'><strong>Verify Your E-Mail Account</strong></span></p>
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
<p style='margin: 0; font-size: 14px; text-align: center; mso-line-height-alt: 22.5px;'><span style='color:#808389;font-size:15px;'><strong>Dear ".$name.", click on the button given below to verify your E-Mail account.<br/><br/>Thanks.</strong></span></p>
</div>
</div>
</td>
</tr>
</table>
<table border='0' cellpadding='0' cellspacing='0' class='button_block' role='presentation' style='mso-table-lspace: 0pt; mso-table-rspace: 0pt;' width='100%'>
<tr>
<td style='padding-left:10px;padding-right:10px;padding-top:15px;text-align:center;'>
<div align='center'>
<!--[if mso]><v:roundrect xmlns:v='urn:schemas-microsoft-com:vml' xmlns:w='urn:schemas-microsoft-com:office:word' style='height:62px;width:203px;v-text-anchor:middle;' arcsize='97%' stroke='false' fillcolor='#1aa19c'><w:anchorlock/><v:textbox inset='0px,0px,0px,0px'><center style='color:#ffffff; font-family:Tahoma, sans-serif; font-size:16px'><![endif]-->
<a href='http://localhost/e-com.project-main/mailverify.php?evkey=".$evkey."&email=".$mail_value."' target='_blank'>
<div style='text-decoration:none;display:inline-block;color:#ffffff;background-color:#1aa19c;border-radius:60px;width:auto;border-top:1px solid #1aa19c;font-weight:undefined;border-right:1px solid #1aa19c;border-bottom:1px solid #1aa19c;border-left:1px solid #1aa19c;padding-top:15px;padding-bottom:15px;font-family:Montserrat, Trebuchet MS, Lucida Grande, Lucida Sans Unicode, Lucida Sans, Tahoma, sans-serif;text-align:center;mso-border-alt:none;word-break:keep-all;'><span style='padding-left:30px;padding-right:30px;font-size:16px;display:inline-block;letter-spacing:normal;'><span style='font-size: 16px; margin: 0; line-height: 2; word-break: break-word; mso-line-height-alt: 32px;'><strong>Confirm Your E-Mail</strong></span></span></div></a>
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
<td style='vertical-align: middle; padding-bottom: 5px; padding-top: 5px; color: #9d9d9d; font-family: inherit; font-size: 15px; text-align: center;'>
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
          $mail->AltBody = "Dear ".$name.", Verify your E-Mail by going to the following address: http://localhost/e-com.project-main/mailverify.php?evkey=".$evkey."&email=".$mail_value;

          $mail->send();
          $msg = 1;
        } catch(Exception $e){
            $msg = 2;
        }
      }
      else{
      header("location: signup.php");
      }
    }
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Sign Up - DigiMart</title>
  <meta charset="UTF-8" />
  <meta name="viewport" content="initial-scale=1.0,width=device-width">
  <link rel="shortcut icon" href="img/favicon.svg" type="image/x-icon">
  <link rel="stylesheet" href="css/signupStyle.css" type="text/css">
  <link rel="stylesheet" href="tel/build/css/intlTelInput.css">
</head>
<body >
<?php
include 'header.php';
if($msg===1){
?>
<div class="msg-container">
<div class="msg">
Dear <?php echo $name ?>,<br>
A verification link will be sent to your e-mail account: <?php echo $mail_value ?> shortly.<br>
Follow that link to complete the registration process.<br>
<i style="font-weight:normal;font-size:21px">(Link expires after 24 Hrs. of form submission)</i>
</div>
</div>
</body>
<?php }
elseif($msg===2){
?>
<div class="msg-container">
<div class="msg">
Oops! Some error occured.<br>
Try to <a href="signup.php">register again</a>.
</div>
</div>
</body>
<?php }
else{
?>
<h1>SIGN UP!</h1>
<div class="form">
<div style="margin:8% 0">
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
    <label class="label" for="fname">First Name</label>
    <div class="inside">
    <img src="img/person.svg" class="ico">
    <input class="input" type="text" name="first_name" id="fname" placeholder="First Name" value="<?php echo $fname_value ?>" required>
    </div>
    <label class="label" for="lname">Last Name *</label>
    <div class="inside">
    <img src="img/person.svg" class="ico">
    <input class="input" type="text" name="last_name" id="lname" placeholder="Last Name" value="<?php echo $lname_value ?>">
    </div>
    <label class="label" for="email">Email id</label>
    <label class="label-error" style="<?php if($result1->num_rows>0){echo 'display:block';} ?>">E-Mail already in use</label>
    <div class="<?php echo $style[0] ?>">
    <img src="img/mail.svg" class="ico">
    <input class="<?php echo $style[1] ?>" type="email" name="email" id="email" placeholder="E-Mail" value="<?php echo $mail_value ?>" required>
    </div>
    <label class="label" for="address">Address</label>
    <div class="inside-adr">
    <img src="img/location.svg" class="ico-adr">
    <textarea class="input-adr" name="address" id="address" placeholder="Address" required><?php echo $addr_value ?></textarea>
    </div>
    <label class="label" for="phone">Mobile Number</label>
    <label class="label-error" id="label-error" style="<?php if($result2->num_rows>0){echo 'display:block';} ?>">Number already in use</label>
    <div class="<?php echo $style[2] ?>" id="inside-no">
    <img src="img/phone.svg" class="ico">
    <input id="phone" name="phone" value="<?php echo $full_phone ?>" type="tel" class="<?php echo $style[3] ?>" required>
    </div>
    <label class="label" for="pass">Password (Min. 8 characters)</label>
    <div class="inside">
    <img src="img/lock.svg" class="ico">
    <input class="input" type="password" value="<?php echo $pwd_value ?>" name="pass" id="pass" minlength="8" placeholder="Password" required>
    </div>
    <label class="label" for="pass2">Confirm Password</label>
    <label class="label-error" for="pass2" style="<?php if($pwd_value!==$pwd2_value){echo 'display:block';} ?>">
   Passwords do not match
    </label>
    <div class="<?php echo $style[4] ?>">
    <img src="img/lock.svg" class="ico">
    <input class="<?php echo $style[5] ?>" type="password" value="<?php echo $pwd2_value ?>" name="pass2" id="pass2" minlength="8" placeholder="Confirm Password" required>
    </div>
    <label class="label">* <i>- Optional Field</i></label>
    <div class="label-term">
    <input type="checkbox" class="checkbox" id="term" required><label for="term"> I agree to DigiMart's <a href="" target="_blank">Terms and Conditions </a></label>
    </div>
    <input type="text" name="country" id="country" value="in" hidden>
    <button class="btn" id="signup" name="signup" type="submit">Sign Up</button>
</form>
</div>
</div>
<div class="footer">Already a customer? <a href="login.php">Login here!</a></div>
</body>
<script src="tel/build/js/intlTelInput.js"></script>
<script>
    var input = document.querySelector("#phone");
    var iti = window.intlTelInput(input, {
        allowDropdown: true,
        geoIpLookup: function(callback) {
          fetch("https://ipapi.co/json")
           .then(function(res) { return res.json(); })
           .then(function(data) { callback(data.country_code); })
           .catch(function() { callback("in"); });
        },
        hiddenInput: "full_number",
        initialCountry: "auto",
        separateDialCode: true,
        showFlags: true,
        utilsScript: "tel/build/js/utils.js",
    });
    input.addEventListener("countrychange", function() {
      var countryData = iti.getSelectedCountryData();
      document.getElementById('country').value = (countryData['iso2']);
    });
    input.onkeyup = function(){
      label = document.getElementById("label-error");
      div = document.getElementById("inside-no");
      var isValid = iti.isValidNumber();
      if(!isValid){
        var error = iti.getValidationError();
        label.setAttribute("style","display:block");
        input.setAttribute("class","input-no-error");
        div.setAttribute("class","inside-no-error");
        switch(error){
        case 0: label.innerHTML = "Invalid Number";
          break;
        case 1: label.innerHTML = "Invalid Country Code";
          break;
        case 2: label.innerHTML = "Too Short";
          break;
        case 3: label.innerHTML = "Too Long";
          break;
        case 4: label.innerHTML = "Invalid Number";
          break;
        case 5: label.innerHTML = "Invalid Length";
          break;
        default: label.innerHTML = "Invalid Number";
        }
        document.getElementById("signup").disabled = true;
      }
      else
      {
        label.setAttribute("style","display:none");
        input.setAttribute("class","input-no");
        div.setAttribute("class","inside-no");
        document.getElementById("signup").disabled = false;
      }
    }
  </script>
<?php } ?>
</html>
