<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$database = "maharaja";
	$con = new mysqli($servername, $username, $password);
	if (!$con) echo "error";
	(mysqli_select_db($con, $database));

?>
