<?php
	$host = "localhost";
	$db = "mshop";
	$user = "root";
	$pass = "";

	$conn = mysqli_connect($host, $user, $pass, $db);

	if(!$conn){
  		die("Connection failed: " . mysqli_connect_error());
	}
?>