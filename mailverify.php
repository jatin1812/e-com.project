<!DOCTYPE html>
<html>
<head>
  <title>E-Mail Verification</title>
  <meta charset="UTF-8" />
  <meta name="viewport" content="initial-scale=1.0,width=device-width">
  <link rel="shortcut icon" href="img/favicon.svg" type="image/x-icon">
  <link rel="stylesheet" href="css/mailVerifyStyle.css" type="text/css">
</head>
<body>
<?php
include 'dbconnect.php';
include 'header.php';
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
if(isset($_GET['evkey'])){
   $mail_value = test_input($_GET['email']);
   $evkey = test_input($_GET['evkey']);
   $sql = "SELECT * FROM temp_users WHERE evkey='$evkey' AND email='$mail_value'";
   $result = $con->query($sql);
   if($result->num_rows>0){
      $row = $result->fetch_assoc();
      $current_date = date("Y-m-d H:i:s");
      $exp_date = $row['exp_time'];
      if($current_date>$exp_date){
         echo '<div class="msg-container">
               <div class="msg">
                  Link Expired!<br><br>
                  Try to <a href="signup.php">Sign-Up again.</a>
               </div>
               </div>';
      }
      else{
         $sql2 = "INSERT INTO user_details(fname,lname,email,address,country,phone,pwd) VALUES('$row[fname]','$row[lname]','$row[email]','$row[address]','$row[country]','$row[phone]','$row[pwd]')";
         $result2 = $con->query($sql2);
         if($result2){
         echo '<div class="msg-container">
               <div class="msg">
                  You have been registered successfully!<br><br>
                  You can <a href="login.php">Login Now</a>.
               </div>
               </div>';
         $sql3 = "DELETE FROM temp_users WHERE email='$mail_value'";
         $con->query($sql3);
         }
         else{
            echo '<div class="msg-container">
                  <div class="msg">
                     Oops! Some error occured<br><br>
                     Try to <a href="login.php">Sign Up again.</a>.
                  </div>
                  </div>';
         }
      }
   }
   else{
      echo '<div class="msg-container">
            <div class="msg">
               Invalid link!<br><br>
               Try to <a href="signup.php">Sign-Up again.</a>
            </div>
            </div>';
   }
}
?>
</body>
</html>