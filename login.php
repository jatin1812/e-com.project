<?php
include 'dbconnect.php';
$style = array("inside","input","inside","input");
$mailvalue = "";
$pwdvalue = "";
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
if(isset($_POST['login'])){
    $email = test_input($_POST['email']);
    $pwd = test_input($_POST['pass']);
    
    $sql="SELECT pwd,fname,lname from user_details WHERE email = '$email'";
    $result = $con->query($sql);
    if($result->num_rows>0){
        $row = $result->fetch_assoc();
        $check_pwd = password_verify($pwd, $row['pwd']);
        if($check_pwd===true){
            session_start();
            $_SESSION["name"] = $row['fname']." ".$row['lname'];
            header("location: test.php");
        }
        else{
            $style[2] = "inside-error";
            $style[3] = "input-error";
            $pwdvalue = $pwd;
            $mailvalue = $email;
        }
    }
    else{
        $style[0] = "inside-error";
        $style[1] = "input-error";
        $mailvalue = $email;
        $pwdvalue = $pwd;
    }
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Log In - DigiMart</title>
<meta charset="UTF-8" />
<meta name="viewport" content="initial-scale=1.0,width=device-width">
<link rel="shortcut icon" href="img/favicon.svg" type="image/x-icon">
<link rel="stylesheet" href="css/loginStyle.css" type="text/css">
<style>
</style>
</head>

<body>
    <?php include 'header.php' ?>
    <h1>Login to DigiMart</h1>
    <div class="form">
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
    
    <label class="label" for="email">Enter your email:</label>
    <label class="label-error" style="<?php if(isset($_POST['login'])){ if($result->num_rows<1){echo 'display:block';} }?>">Incorrect E-Mail</label>
    <div class="<?php echo $style[0] ?>">
    <img class="mail" src="img/mail.svg">
    <input type="email" class="<?php echo $style[1] ?>" id="email" name="email" placeholder="E-Mail" value="<?php echo $mailvalue ?>" required>
    </div>

    <label class="label"  for="pass">Enter your password:</label>
    <label class="label-error" style="<?php if($check_pwd===false){echo 'display:block';} ?>">Incorrect Password</label>
    <div class="<?php echo $style[2] ?>">
    <img class="pwd" src="img/lock.svg">
    <input class="<?php echo $style[3] ?>" type="password" value="<?php echo $pwdvalue ?>" name="pass" placeholder="Password" id="pass" required>
    </div>
    <button class="btn" name="login" type="submit">Log In</button>
    <a  class="fp" href="forgotpwd.php">Forgot password?</a>
    </form>
    </div>
   
    <div class="footer">
        <footer>New to DigiMart? <a href="signup.php">Sign Up here!</a></footer>
    </div>
</body>
</html>
