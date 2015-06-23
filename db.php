<?php

	$db_host = "localhost";
	$db_user = "root";
	$db_password = "";
	$db_name="holdem";
	
	$dbc = mysqli_connect($db_host, $db_user, $db_password, $db_name)
	OR die('Could not connect to MYSQL ' . 
	mysqli_connect_error());
	
	?>