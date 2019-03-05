<?php
	session_start();
	if(!isset($_SESSION['user']))
	 {
	    header("Location:index.php"); 
	 }
?>
<!DOCTYPE html>
<html>
<head>
	<title>STARTUP REGISTRATIONS</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="webmanager.css">
</head>

<body>
	<a href="logout.php" class="logout-link">Logout</a>
	<a href="webmanager_select.php" class="back-link">Back</a>
	<div class="table-control">
		<?php
			include_once('conn.php');
			$select = "SELECT * FROM startup;";
			$result = mysqli_query($con,$select);
			$check = mysqli_num_rows($result);

			if($check > 0){
				echo "<table>
						 <tr> 

						 	<th>ID</th>
						 	<th>Startup Name</th>
						 	<th>Website</th>
						 	<th>Address</th>

						 	<th>First Name</th> 
						 	<th>Last Name</th>
						 	<th>email</th> 
						 	<th>mobile</th>

						 	<th>Project_Name</th> 
						 	<th>Project_Description</th>
						 	<th>Video Link</th>
						 	<th>Category of project</th>
						 	<th>Project Status</th>
						 	<th>Accomodation</th>
						 	<th>Date of Registration</th> 

						 </tr>";
	    // output data of each row
	    while($row = mysqli_fetch_assoc($result)) {
	    	for($i=1;$i<=6;$i++){
     		 	if($row["first_name"]=="NIL"){
	      			 $row["first_name"] = ' ';
	      			 $row["last_name"] = ' ';
	      			 $row["email"] = ' ';
     			 }
     			if($row["mobile"] == 0){
	     			 $row["mobile"] = ' ';     				
     			}
  		  	}

  		  	
	        echo "<tr><td>" . $row["id"]. "</td><td> ". $row["startup_name"]. "</td><td> ". $row["website"]. "</td><td> ". $row["address"]. "</td><td>" . $row["first_name"]. "</td><td> " . $row["last_name"]. "</td><td> " . $row["email"]. "</td><td>" . $row["mobile"].  "</td><td>" . $row["project_name"]. "</td><td> " . $row["project_desc"]. "</td><td> ". $row["video_link"]. "</td><td> ". $row["category_project"]. "</td><td> ". $row["project_status"]. "</td><td> " . $row["accommodation"]. "</td><td> " . $row["date_tab"]."</td></tr>";
	        
	    }
	    echo "</table>";
			}
			
			else{
			    echo 'No data in db yet.';
			}
		?>
	</div>

	<form method="POST" action="download_startup.php">
		<button type="submit" name="export" class="export-btn">Export As Excel</button>
	</form>
	
	
</body>
</html>