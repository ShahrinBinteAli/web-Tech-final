<?php  
session_start();
include('server.php'); 

if(isset($_Get['edit'])) {
	$name = $_GET['edit'];
	$edit_state = true;
		
		$rec = mysqli_query($db, "SELECT * FROM info WHERE name=$name");
         $record= mysqli_fetch_array($rec);
		
			$id = $record['id'];
			$cgpa = $record['cgpa'];
			$name = $record['name'];		
	}


?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="styelesheet" type="text/css" href="stl.css">
</head>
   <body>

     <?php if (isset($_SESSION['message'])): ?>
	<div class="msg" >
		<?php 
			echo $_SESSION['message']; 
			unset($_SESSION['message']);
		?>
    </div>
      <?php endif ?>

   	 <table>  
   	 	       <thead>
                  <tr>
		            <th>
			           ID
		               </th>
		               <th>
			           CGPA
		                </th>
		               <th colspan="2">Action</th>
	                      </tr>
	                    </thead>
	                     <tbody>

	                     	<?php while ($row = mysqli_fetch_array($results)) { ?>
                        <tr>
		                   <td>
		                     	<?php echo $row['ID']; ?></td>
		                         <td> <?php echo $row['CGPA']; ?></td>
			               
		                       <td>
	                     <a href="result.php?edit=<?php echo $row['name']; ?>">edit</a>
	
	                           </td>
	                        <td>
	                      <a href="server.php?del=<?php echo $row['name']; ?>">delete</a>
	
	                         </td>
	                       </tr>
	                   <?php } ?>
	                   </tbody>
                           </table>

	<form method="post" action="server.php" >
		<input type="hidden" name="name" value="<?php echo $name; ?>" >
		<div >
			<label>ID</label>
			<input type="text" name="id" value="<?php echo $id; ?>"  >
		</div>
		<div >
			<label>CGPA</label>
			<input type="text" name="cgpa" value="<?php echo $cgpa; ?>"  >
		</div>
		<div >
			<?php if($edit_state == false): ?>
			<button type="submit" name="save" >Save</button>
			<?php else: ?>
			<button type="submit" name="update" >update</button>
			<?php endif ?>
				
				
		</div>
	</form>
</body>
</html>
<?php session_destroy();
	
	header("location: registration.html");?>
