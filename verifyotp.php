<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Login</title>
    <link rel="stylesheet" href="style.css"/>
</head>
<body>
<?php
    require('db.php');
    session_start();
   
?>
    <form class="form" method="post" name="login">
        <h1 class="login-title">Enter OTP</h1>
        <input type="text" class="login-input" name="otp" placeholder="Enter OTP here" autofocus="true"/>
        
        <input type="submit" value="Login" name="submit" class="login-button"/>
  </form>
<?php
    
?>
</body>
</html>
