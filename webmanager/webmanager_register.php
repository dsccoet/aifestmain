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
	<title>REGISTRATIONS</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="webmanager.css">
</head>

<body>
	<a href="logout.php" class="logout-link">Logout</a>
	<a href="webmanager_select.php" class="back-link">Back</a>
	<div class="table-control">
		<?php
			include_once('conn.php');
			$select = "SELECT * FROM register_stall;";
			$result = mysqli_query($con,$select);
			$check = mysqli_num_rows($result);

			if($check > 0){
				echo "<table>
						 <tr> 
						 	<th>ID</th> 
						 	<th>First_Name1</th> 
						 	<th>Last_Name1</th>
						 	<th>email1</th> 
						 	<th>mobile</th>  
						 	<th>tshirt</th>
  
						 	<th>First_Name2</th> 
						 	<th>Last_Name2</th>
						 	<th>email2</th>
						 	<th>mobile2</th> 
						 	<th>tshirt2</th>  

						 	<th>First_Name3</th> 
						 	<th>Last_Name3</th> 
						 	<th>email3</th> 
						 	<th>mobile3</th>  
						 	<th>tshirt3</th> 

						 	<th>First_Name4</th> 
						 	<th>Last_Name4</th>
						 	<th>email4</th> 
						 	<th>mobile4</th> 
						 	<th>tshirt4</th>  

						 	<th>First_Name5</th> 
						 	<th>Last_Name5</th> 
						 	<th>email5</th> 
						 	<th>mobile5</th> 
						 	<th>tshirt5</th> 

						 	<th>First_Name6</th> 
						 	<th>Last_Name6</th>
						 	<th>email6</th> 
						 	<th>mobile6</th> 
						 	<th>tshirt6</th> 

						 	<th>Project_Name</th> 
						 	<th>Project_Description</th>
						 	<th>Category of Project</th>
						 	<th>Project Status</th>
						 	<th>Link</th>
						 	<th>Accomodation</th>
						 	<th>Date</th> 

						 </tr>";
	    // output data of each row
	    while($row = mysqli_fetch_assoc($result)) {
	    	for($i=1;$i<=6;$i++){
     		 	if($row["first_name$i"]=="NIL"){
	      			 $row["first_name$i"] = ' ';
	      			 $row["last_name$i"] = ' ';
	      			 $row["email$i"] = ' ';
	    			 $row["tshirt$i"] = ' ';
     			 }
     			if($row["mobile$i"] == 0){
	     			 $row["mobile$i"] = ' ';     				
     			}
  		  	}

  		  	
	        echo "<tr><td>" . $row["id"]. "</td><td>" . $row["first_name1"]. "</td><td> " . $row["last_name1"]. "</td><td> " . $row["email1"]. "</td><td>" . $row["mobile1"].  "</td><td>" . $row["tshirt1"]. "</td><td>" . $row["first_name2"]. "</td><td> " . $row["last_name2"]. "</td><td> " . $row["email2"]. "</td><td>" . $row["mobile2"]. "</td><td>" . $row["tshirt2"]. "</td><td>" . $row["first_name3"]. "</td><td> " . $row["last_name3"]. "</td><td> " . $row["email3"]. "</td><td>" . $row["mobile3"]. "</td><td>" . $row["tshirt3"]. "</td><td>" . $row["first_name4"]. "</td><td> " . $row["last_name4"]. "</td><td> " . $row["email4"]. "</td><td>" . $row["mobile4"]. "</td><td>" . $row["tshirt4"]. "</td><td>". $row["first_name5"]. "</td><td> " . $row["last_name5"]. "</td><td> " . $row["email5"]. "</td><td>" . $row["mobile5"].  "</td><td>" . $row["tshirt5"]. "</td><td>" . $row["first_name6"]. "</td><td> " . $row["last_name6"] . "</td><td> " . $row["email6"]. "</td><td>" . $row["mobile6"].  "</td><td>" . $row["tshirt6"]. "</td><td>" . $row["project_name"]. "</td><td> " . $row["project_desc"]. "</td><td> ". $row["category_project"]. "</td><td> ". $row["current_stage"]. "</td><td> ". $row["link"]. "</td><td> " . $row["accomodation1"]. "</td><td> " . $row["date_tab"]."</td></tr>";
	        
	    }
	    echo "</table>";
			}
			
			else{
			    echo 'No data in db yet.';
			}
		?>
	</div>

	<form method="POST" action="download_register_2.php">
		<button type="submit" name="export" class="export-btn">Export As Excel</button>
	</form>
	
</body>
</html>