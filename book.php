<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<form >
<table border="1">
	<tr>
		<td colspan="4"><center><h3>Book Details</h3></center></td>
	</tr>
	<tr>
		
		<td>
			NAME
		</td>

		<td>
			PDF LINK
		</td>
		<td>
			UPDATE
		</td>
		
		
	</tr>
	<tr>
		
		<td>
			Web Development and Design Foundations with HTML5(8TH ED)</BR>
			TERRY FELKE-MORRIS
		</td>
		
		<td>
			<a href="http://cs.franklin.edu/~crawforl/webd101/PPTS/WEEK1/week1-Ch1Ch2.pdf">go to pdf</a>
		</td>
		<td>
			 available
		</td>
   </tr>

   <tr>
		
		<td>
			The Principles of Beautiful Web Design (Second Edition)</BR>
			Jason Beaird
		</td>
		
		<td>
			<a href="https://doc.lagout.org/programmation/Design/The%20Principles%20of%20Beautiful%20Web%20Design%20-%20Beaird%20-%20Site%20Point%20%282010%29%20.pdf">go to pdf</a>
		</td>
		<td>
			 available
		</td>
   </tr>

   <tr>
		
		<td>
			HTML & CSS: Design and Build Web Sites</BR>
			John Duckett
		</td>
		
		<td>
			<a href="https://wtf.tw/ref/duckett.pdf">go to pdf</a>
		</td>
		<td>
			 available
		</td>
   </tr>

   <tr>
		
		<td>
			JavaScript and JQuery: Interactive Front-End Web Development</BR>
			Jon Duckett
		</td>
		
		<td>
			<a href="https://www.academia.edu/37702382/Jon_Duckett_JavaScript_and_jQuery_Interactive_Front-End_Web_Development_Hardcover">go to pdf</a>
		</td>
		<td>
			 available
		</td>
   </tr>

   <tr>
		
		<td>
			Learning Web Design(Fourth Edition)</BR>
			Jennifer Niederst Robbins
		</td>
		
		<td>
			<a href="http://wtf.tw/ref/robbins.pdf">go to pdf</a>
		</td>
		<td>
			 available
		</td>
   </tr>
   <tr>
		<td>
	
	<a href="home.php">go home </a>
	
	</td>
	</tr>
</table>
</form>
</body>
</html>
<?php session_destroy();
	
	header("location: registration.html");?>