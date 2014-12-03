<?php

include('inc/config.php');
session_start();

if($_SERVER["REQUEST_METHOD"] == "POST")
{
	// username and password sent from form 
	$myusername=addslashes($_POST['username']); 
	$mypassword=addslashes($_POST['password']);

	$sql="SELECT id FROM admin WHERE username='$myusername' and password=md5('$mypassword')";
	$result=mysql_query($sql);
	$row=mysql_fetch_array($result);
	$active=$row['active'];

	$count=mysql_num_rows($result);

	// If result matched $myusername and $mypassword, table row must be 1 row
	if($count==1) {
		$_SESSION['login_user']=$myusername;
		header('location:index.php?mod=home');
    exit();
    ## set last login
	}
	else {
		$error="Your Login Name or Password is invalid";
	}
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Administrator Login Form</title>
<link type="text/css" rel="stylesheet" href="css/style.css">
</head>
<body>
<div id="stylized">
	<div class="loginform">
    <div class="logo"><img src="img/logo2.png" height="80" width="80"><br><br><br>
    <p><b>Badan Pelayanan Perizinan Terpadu dan Penanaman Modal</b><br><font size="2">KOTA BOGOR</font></p>
    </div>
    <form action="" method="post">
    	<div class="form">
    	<ul>
          <li><h2>Username</h2>&nbsp;<input name="username" id="username" type="text"></li>
          <li><h2>Password</h2>&nbsp;<input name="password" id="password" type="password"></li>
          <li><button type="submit">Log In</button></li>

      </ul>
			</div>
		</form>

  </div>
  <p style="margin-bottom: 10px;margin-left: 40px;"><span style="color: red;font-style: italic;"></span></p>
  <div class="footer">
    <h3>Copyright | 2014 Aplikasi Pelayanan Perizinan Terpadu</h3>
  </div>
</div>

</body>
</html>