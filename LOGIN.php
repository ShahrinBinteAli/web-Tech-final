<?php 
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>login Page</title>
</head>
<body>
	<h2>Login Page</h2>
	<form action="logincheck.php" method="post">
		<table>
			<tr>
				<td>Username:</td>
				<td><input type="text" name="username"></td>
			</tr>
			<tr>
				<td>Password:</td>
				<td><input type="password" name="password"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="submit" value="Submit"></td>
			</tr>
		</table>
	</form>
</body>
</html>
<!--<?php //session_destroy();
//header("location: logincheck.php");
	
?>-->