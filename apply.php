
<?php
	if(isset($_POST['newsletter_submit'])){
    
    $email = pickup('email_newsletter');
    
    include_once('conn.php');

    $date = date('Y-m-d');

    mysqli_query($con, "INSERT INTO newsletter(email,date_tab)
      
      VALUES('$email','$date')") or die("<script>
      alert('Unable to register. Please try again.');
      window.location.href='index.php';
      </script>");

      if($email != "NIL"){
        $header1="From: no-reply@iedccoet.org";
          $subject1="SUBSCRIPTION SUCCESFULL - AI FEST 2.0";
          $to1 = $email;
          $message1 = "Hi,\n\nYour subscription was succesfully recorded.\nWe are excited to have you onboard.\n\nRegards,\nTeam AI FEST 2.0,\nIEDC COET.";

          mail($to1,$subject1,$message1,$header1);
      }

      


    

    echo "<script>
      alert('Subscription is succesfull.');
      window.location.href='index.php';
      </script>";

    die("Thanks for applying");

  }

  function pickup($box){
    if(!isset($_POST[$box])){
      $data = "NIL";
      return $data;
    }
    $data = $_POST[$box];
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

  
?>