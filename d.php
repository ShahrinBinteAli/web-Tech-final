<?php

	//mysql_connect();
	$con = mysqli_connect('127.0.0.1', 'root', '', 'teacher');
	
	$sql = "select * from section";
	$result = mysqli_query($con, $sql);

	$data = [];


	echo " <table border= 1>
	<tr>
		<td colspan= 4><center><h3>Section Details</h3></center></td>
	</tr>
	<tr>
		
		<td>
			COURSE
		</td>
		<td>
			SECTION
		</td>
		<td>
			CAPACITY
		</td>
		
		
	</tr>  ";

	while($row = mysqli_fetch_assoc($result)){
		//echo "Name: ".$row['username']." Id: ".$row['id']."<br>"". .";
		
		echo "<tr>
				<td>{$row['COURSE']}</td>
				<td>{$row['SECTION']}</td>
				<td>{$row['CAPACITY']}</td>
				
		</tr>";
	}

	echo "</table>";
	mysqli_close($con);
?>
