<?php

	$first_name = $_GET["first_name"];

	$last_name = $_GET["last_name"];

	$password = $_GET["password"];

	$user_phone = $_GET["user_phone"];

	$username = $_GET["username"];

	

	require_once('dbcont.php');

	$connect = mysqli_connect( HOST, USER, PASS, DB )

		or die("Can not connect");



	mysqli_query( $connect, "INSERT INTO users VALUES ( '$first_name', '$last_name ', '$password','$user_phone','$username', NULL )" )

		or die("Can not execute query");



	

	header('Location:index.php');
	

?>