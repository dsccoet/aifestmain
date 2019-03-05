<?php 
	session_start();

	if(isset($_SESSION['user']))   // Checking whether the session is already there or not if 
	                              // true then header redirect it to the home page directly 
	 {
	    header("Location:webmanager_select.php"); 
	 }

	if(isset($_POST['submit']))  
	{
	     $user = $_POST['uname'];
	     $pass = $_POST['psw'];

	     include_once('conn.php');
		 $select = "SELECT * FROM login;";
		 $result = mysqli_query($con,$select);

		 while($row = mysqli_fetch_array($result)){
		      if($user == $row["username"] && $pass == $row["password"])   {

		          $_SESSION['user']=$user;

		          header("Location:webmanager_select.php"); 
		         //echo '<script type="text/javascript"> window.open("webmanager_select.php","_self");</script>';            

		        }

		        else
		        {
		            echo "<script>
							alert('Incorrect username or password');
							window.location.href='index.php';
							</script>";       
		        }
	     }
	}
 ?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>

<div class="container">
  <form action="" method="POST">
    

      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="uname" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>
          
      <button type="submit" name='submit'>Login</button>
    
  </form>
</div>

</body>
</html>


