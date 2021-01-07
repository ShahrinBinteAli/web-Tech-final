<?php
   session_start();

	//mysql_connect();
	$con = mysqli_connect('127.0.0.1', 'root', '', 'teacher');
	
	$sql = "select * from student_detail";
	$result = mysqli_query($con, $sql);

	$data = [];


	echo " <table border=1>
	<tr>
		<td colspan= 2><center><h3>Student info- Web Tech(A)</h3></center></td>
	</tr>
	
	<tr>
		
		<td>
			NAME
		</td>
		<td>
			ID
		</td>
		<td>
			ATTENDENCE
		</td>
		<td>
			QUIZ 
		</td>
		<td>
			ASSIGNMENT
		</td>
		<td>
			CGPA
		</td>
		
	</tr>  ";

	while($row = mysqli_fetch_assoc($result)){
		//echo "Name: ".$row['username']." Id: ".$row['id']."<br>"". .";
		
		echo "<tr>
				<td>{$row['NAME']}</td>
				<td>{$row['ID']}</td>
				<td>{$row['ATTENDENCE']}</td>
				<td>{$row['QUIZ']}</td>
				<td>{$row['ASSIGNMENT']}</td>
				<td>{$row['CGPA']}</td>
				
				
		</tr>";
	}

	echo "</table>";
	mysqli_close($con);
?>

 <!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<h1 id="abc">Search Student Info</h1>

	<form >
		<input type="text" id="term" name="term" onkeyup="abc()">
	</form>

	<br>
	<div id="result">
		
	</div>

	<script type="text/javascript">
		
		function abc(){
			var search = document.getElementById("term").value;
			var xhttp = new XMLHttpRequest();	
			
			xhttp.onreadystatechange = function() {
			    if (this.readyState == 4 && this.status == 200){
			    	document.getElementById('result').innerHTML = this.responseText;
			    }
			};
			
			xhttp.open("GET", "abc.php?key="+search, true);
			xhttp.send(); 
		}
	</script>
</body>
</html>
<a href="home.php">go home </a></br>
 <a href="contact.php">go to student contact</a>
 <?php session_destroy();
	
	//header("location: home.php");?>
	