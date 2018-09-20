<?php
	session_start();

	include 'dbh.php';  /* link to data base handler */

	$uid = $_POST['uid'];
	$passwd = $_POST['passwd'];

	/* Load the stuff from the database table */
	if ($_POST['signin'] == "OK")
	{

		/* encrypt the passwd and compare */
		$passwd_encrypt = serialize(hash('whirlpool', $passwd));	

		$sql = "SELECT * FROM users WHERE uid='$uid' AND passwd='$passwd_encrypt'";
		/* connect to the table*/
		$result = $con->query($sql);

		/* Search the table */
		if (!$row = $result->fetch_assoc())
		{
			echo "Login details incorrect!";		
		}
		else
		{
			$_SESSION['id'] = $row['id'];
			header("Location: ../index.php"); /* Jump to home page if login is successfull */
		}	
	}
	elseif ($_POST['register'] == "OK") /* redirect to registration page */
		header("Location: user_register.php");

	//header("Location: user_login.php");
?>