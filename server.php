<?php 
	session_start();

	// initialize variables
	$id = "";
	$cgpa = "";
	$name = 0;
    $edit_state = false;
$db = mysqli_connect('localhost', 'root', '', 'teacher');

	if (isset($_POST['save'])) {
		$id = $_POST['id'];
		$cgpa = $_POST['cgpa'];

		$query = "INSERT INTO info (ID, CGPA) VALUES ('$id', '$cgpa')"; 
		mysqli_query($db,$query);
		$_SESSION['message'] = "info saved"; 
		header('location: result.php');
	}
//update
	if(isset($_POST['update'])){
		$id = $_POST['id'];
		$cgpa = $_POST['cgpa'];
		$name = $_POST['name'];

        mysqli_query($db, "UPDATE info SET ID='$id', CGPA='$cgpa' WHERE name=$name");
	    $_SESSION['message'] = "Address updated!"; 
	     header('location: result.php');

	}

//delete

	if(isset($_Get['del'])) {
	$name= $_GET['del'];
	mysqli_query($db, "DELETE FROM info WHERE name=$name");
	 $_SESSION['message'] = "info deleted"; 
	header('location: result.php');
        
	}

//retrieve data
	$results = mysqli_query($db, "SELECT * FROM info");

	?>
	<a href="home.php">go home </a></br>
	<?php session_destroy();
	
	header("location: registration.html");?>