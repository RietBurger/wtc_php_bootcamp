<?php
	session_start();

	if (isset($_SESSION['uid']))
		echo "User ".$_SESSION['uid']." logged in";
	else
		echo "You are not logged in!";
?>

<!DOCTYPE html>
<html>
<head>
	<title> Login </title>
	<!-- Styling -->
	<link href = "../css/loginstyle.css" type = "text/css" rel = "stylesheet">
</head>

	<body>
		<!-- The login form -->
		<div class="container">
			<h2>User Login</h2>
			<form action="login.php" method="POST" style="border:1px solid #ccc">
			  <div class="form_inside">
			    <label><b>Username</b></label>
			    <input type="text" placeholder="Enter Username" name="uid">

			    <label><b>Password</b></label>
			    <input type="password" placeholder="Enter Password" name="passwd">

			    <div class="clearfix">
			      <button type="submit" class="signupbtn" name = "signin" value="OK">Sign In</button>
			      <a href=""><button type="submit" class="registerbtn" name = "register" value="OK">Register</button></a>
			    </div>
			  </div>
			</form>
		</div> <!-- form-end -->

	</body>
</html>
