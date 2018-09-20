<?php
	/* The Database Handler */
	$con = mysqli_connect("localhost", "root", "Grammy21", "myDB");

	/* If connection fails */
	if (!$con)
	{
		die("Connection failed: ".mysqli_connect_error());
	}
?>
