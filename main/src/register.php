<?php
	session_start();

	include 'dbh.php';  /* Establish connection */

	$first = $_POST['first_name'];
	$last = $_POST['last_name'];
	$uid = $_POST['uid'];
	$passwd = $_POST['passwd'];

	/* Load the stuff into the database table */
	if ($_POST['register'] == "OK")
	{
	    /* Only insert staff if fields are not left blank */
		/* This is to prevent creating empty rows */
		if ($first && $last && $uid && $passwd)
		{
			/* Encrypt the passwd before storing it */
			$passwd_encrypt = serialize(hash('whirlpool', $passwd));

			$sql = "INSERT INTO users (first_name, last_name, uid, passwd) VALUES ('$first', '$last', '$uid', '$passwd_encrypt')";
			/* return results */
			$result = $con->query($sql);

		}

		/* jump to back registration page */
		header("Location: user_register.php");

	}

	//else /* Go to the sign in page if the signin button is pressed */
		header("Location: user_login.php")

?>