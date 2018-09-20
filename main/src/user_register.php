<?php
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title> Register</title>
	<!-- Styling -->
	<link href = "../css/loginstyle.css" type = "text/css" rel = "stylesheet">
</head>

	<body>
		<!-- The Registration form -->
		<div class="container">
			<h2>User Registration</h2>
			<form action="register.php" method="POST" style="border:1px solid #ccc">
			  <div class="form_inside">
			  	<label><b>First Name</b></label>
			    <input type="text" placeholder="Enter First Name" name="first_name" >
			    <label><b>Last Name</b></label>
			    <input type="text" placeholder="Enter Last Name" name="last_name" >
			    <label><b>Username</b></label>
			    <input type="text" placeholder="Enter Username" name="uid" >
			    <label><b>Password</b></label>
			    <input type="password" placeholder="Enter Password" name="passwd" >

			    <div class="clearfix">
			    	<a href=""><button type="submit" class="signupbtn" name = "signin" value="OK">Sign In</button></a>
			      <button type="submit" class="registerbtn" name = "register" value="OK">Register</button>
			    </div>
			  </div>
			</form>
		</div> <!-- form-end -->

	</body>
</html>
