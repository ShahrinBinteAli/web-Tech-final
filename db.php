<?php
   session_start();
	$host = "127.0.0.1";
	$dbuser = "root";
	$dbpass = "";
	$database = "teacher";

	function getConnection(){
		$con = mysqli_connect($GLOBALS['host'], $GLOBALS['dbuser'], $GLOBALS['dbpass'], $GLOBALS['database']);
		return $con;
	}
session_destroy();
	
	header("location: registration.html");
?>