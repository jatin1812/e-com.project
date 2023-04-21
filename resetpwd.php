<?php
include 'dbconnect.php';
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
$val1 = "";
$val2 = "";
$style = array("","inside","input");
$msg = 0;
if(isset($_GET['resetkey'])){
	$resetKey = test_input($_GET['resetkey']);
	$mail_value = test_input($_GET['email']);
	$sql = "SELECT * FROM pwd_reset WHERE reset_key='$resetKey' AND email='$mail_value'";
	$result = $con->query($sql);
	if($result->num_rows>0){
		$row = $result->fetch_assoc();
		$exp_date = $row['exp_time'];
		$current_date = date("Y-m-d H:i:s");
		if($current_date>$exp_date){
			$msg = 1;
		}
		else{
			$msg = 2;
		}
	}
	else{
		$msg = 3;
	}
}
if(isset($_POST['submit'])){
	$val1 = test_input($_POST['pwd']);
	$val2 = test_input($_POST['pwd2']);
	$mail_value = test_input($_POST['email']);
	if($val1!==$val2){
		$msg = 2;
		$style = array("display:block","inside-error","input-error");
	}
	else{
		$pwd_value = password_hash($val1, PASSWORD_DEFAULT);
		$sql2 = "UPDATE user_details SET pwd='$pwd_value' WHERE email='$mail_value'";
		$result2 = $con->query($sql2);
		if($result2){
			$sql3 = "DELETE FROM pwd_reset WHERE email='$mail_value'";
			$con->query($sql3);
			$msg = 4;
		}
		else{
			$msg = 5;
		}
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Reset Password</title>
	<meta charset="UTF-8" />
	<meta name="viewport" content="initial-scale=1.0,width=device-width">
	<link rel="shortcut icon" href="img/favicon.svg" type="image/x-icon">
	<link rel="stylesheet" href="css/resetStyle.css" type="text/css">
</head>
<body>
<?php
include 'header.php';
if($msg===1){
?>
<div class="msg-container">
<div class="msg">
Link Expired!<br><br>
Try <a href="forgotpwd.php">Resetting password again.</a>
</div>
</div>
<?php }
elseif($msg===2){
?>
<h1>Reset Password</h1>
<div class="form">
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
<label class="label" for="pwd">Enter New Password:</label>
<div class="inside">
<img src="img/lock.svg" class="pwd">
<input type="password" name="pwd" id="pwd" class="input" placeholder="Password" value="<?php echo $val1 ?>" minlength="8" required>
</div>
<label class="label" for="pwd2">Confirm New Password:</label>
<label class="label-error" id="error" style="<?php echo $style[0] ?>">Passwords do not match</label>
<div class="<?php echo $style[1] ?>">
<img src="img/lock.svg" class="pwd">
<input type="password" name="pwd2" id="pwd2" class="<?php echo $style[2] ?>" placeholder="Confirm Password" value="<?php echo $val2 ?>" minlength="8" required>
</div>
<input type="email" name="email" value="<?php echo $mail_value ?>" hidden>
<input type="submit" class="btn" name="submit" value="Reset Password">
</div>
<?php }
elseif($msg===3){
?>
<div class="msg-container">
<div class="msg">
Invalid Link!<br><br>
Try <a href="forgotpwd.php">Resetting password again.</a>
</div>
</div>
<?php }
elseif($msg===4){
?>
<div class="msg-container">
<div class="msg">
Your password has been reset<br><br>
Try <a href="login.php">Logging In.</a>
</div>
</div>
<?php }
elseif($msg===5){
?>
<div class="msg-container">
<div class="msg">
Oops! Some error occured<br><br>
Try <a href="forgotpwd.php">Resetting password again.</a>
</div>
</div>
<?php } ?>
</body>
</html>