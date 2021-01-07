<?php
	session_start();
	//require_once('db.php');

	$search = $_GET['key'];

	$con = mysqli_connect('127.0.0.1', 'root', '', 'teacher');
	$sql = "select * from student_detail where 	NAME like '%{$search}%'";
	$result = mysqli_query($con, $sql);
	$count =mysqli_num_rows($result);

	//echo $sql;

	if($count > 0){

		$data = "<table border=1>
				<tr>
					<td>NAME</td>
					<td>ID</td>
					<td>ATTENDENCE</td>
					<td>QUIZ</td>
					<td>ASSIGNMENT</td>
					<td>CGPA</td>
				</tr>";

		while($row = mysqli_fetch_assoc($result)){
			$data .= "<tr>
					<td>{$row['NAME']}</td>
					<td>{$row['ID']}</td>
					<td>{$row['ATTENDENCE']}</td>
					<td>{$row['QUIZ']}</td>
					<td>{$row['ASSIGNMENT']}</td>
					<td>{$row['CGPA']}</td>
			</tr>";
		}

		$data .= "</table>";
		echo $data;

	}else{
		echo "No result found!";
	}
	session_destroy();
	
	
?>