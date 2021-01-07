<?php
	session_start();

session_destroy();
	
		
?>


<!DOCTYPE html>
<html>
<head>
	<title>Profiles</title>
	
	<style>
		body{
			background-color: rgb(0,139,139); 
			border: 3px solid #000;	
		}
	</style>
</head>
<body>   
	    
		<img src="studentportal.PNG" width="1200px" height="500px">
	   
		<h1>Welcome Home!</h1>

		<a href="section.php"> See Sections</a> | 
		<a href="student.php"> Student details</a> | 
		<a href="result.php"> Student Results</a> | 
		<a href="course.php"> course details</a> | 
		<a href="book.php">  Books</a> | 
		<a href="contact.php"> Student contacts</a> | 
		<a href="logout.php"> logout</a> 
		<br>
       
		Name: <?=$_SESSION['username']?> <br>
		Type: <?=$_SESSION['usertype']?> <br>
		Email: <?=$_SESSION['email']?>
</body>
</html>

	
	//print_r($_SESSION['user']);
