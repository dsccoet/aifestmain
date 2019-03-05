<?php
	for ($i=1; $i <=2 ; $i++)
	{
		$id=$_POST["email$i"];
		if($id!="NIL")
		{
			mysqli_query($con,"INSERT INTO email_db(email) VALUES('$id')");
		}
	}
?>