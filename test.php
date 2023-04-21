<html>
<head>
  <title>Test File</title>
  <meta name="viewport" content="initial-scale=1.0,width=device-width">
</head>
<body>
<?php
include 'dbconnect.php';
session_start();
if(isset($_SESSION['name'])){
  echo "Logged in as: ".$_SESSION['name'];
  session_unset();
  session_destroy();
}
else{
  echo "Not Logged In";
  session_destroy(); 
}
?>
</body>
</html>