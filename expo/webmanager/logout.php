<?php
 session_start();
  session_destroy();   // function that Destroys Session 
    echo "<script>
	    	alert('LOGGED OUT SUCCESSFULLY.');
			window.location.href='index.php';
		</script>";
?>