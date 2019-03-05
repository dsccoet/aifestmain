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
	<title>WEBMANAGER - AIFEST 2.0</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="webmanager.css">
</head>
<body>
	<?php 
	if(!isset($_SESSION['user']))
		 {
		    header("Location:index.php"); 
		 }
	?>
        <a href="logout.php" class="login-link">Logout</a>
		<div class="container">
			<button onclick="location.href='webmanager_register.php'" class="btn btn-info button-control">REGISTER DB</button>
			<button onclick="location.href='webmanager_startup.php'" class="btn btn-info button-control">STARTUP DB</button>
			<button onclick="location.href='search_group.php'" class="btn btn-info button-control">SEARCH REGISTER DB</button>
			<button onclick="location.href='search_startup.php'" class="btn btn-info button-control">SEARCH STARTUP DB</button
		</div>

</body>
</html>