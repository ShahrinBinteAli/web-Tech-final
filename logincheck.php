<?php
	
	session_start();

	include('functions.php');
	

	if(isset($_POST['submit'])){

		$username = $_POST['username'];
		$password = $_POST['password'];
			
		$user = validate($username, $password);

		if( count($user) > 0 ){
			$_SESSION['user'] = $user;
			//echo "test";
			header('location: home.php');
		}else{
			echo "invalid username/password";
		}
	}	

	
	//header("location: home.php");
?>