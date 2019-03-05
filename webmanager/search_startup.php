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
	<meta charset="utf-8" />
	<title>SEARCH STARTUP</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="webmanager.css">
</head>
<body>
	<a href="logout.php" class="logout-link">Logout</a>
	<a href="webmanager_select.php" class="back-link">Back To Menu</a>

	<br/><br/>
	<form action="search_startup_print.php" method="post">  
		Search: <input type="text" name="term" />
		<input type="submit" value="Submit"/>
	</form>
	<br/>
	</body>
</html>