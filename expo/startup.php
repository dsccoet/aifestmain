<?php
	if(isset($_POST['submit_startup'])){
    $startup_name = pickup_stp('stpname');
    $website = pickup_stp('website');
    $address = pickup_stp('address');
    $first_name = pickup_stp('first_name');
    $last_name = pickup_stp('last_name');
    $mobile = pickup_3_stp('mobile');
    $email= pickup_stp('email');

    $project = pickup_stp('project_name');  
    $project_desc = pickup_stp('project_desc'); 
    $accomodation = pickup_stp('accomodation');
    $category = pickup_stp('category');
    $status = pickup_stp('status');
    $link = pickup_stp('video_link');

    include_once('conn.php');

    $date = date('Y-m-d');

    mysqli_query($con, "INSERT INTO startup(startup_name,website,address,first_name,last_name,mobile,email,project_name,project_desc,video_link,category_project,project_status,accommodation,date_tab)
      
      VALUES('$startup_name','$website','$address','$first_name','$last_name','$mobile','$email','$project','$project_desc','$link','$category','$status','$accomodation','$date')") or die("<script>
      alert('Unable to register. Please try again.');
      window.location.href='index.php';
      </script>");

    include_once('email_db.php');

      if($first_name != "NIL"){
        $header1="From: registrations@iedccoet.org";
          $subject1="REGISTRATION SUCCESFULL - AI FEST 2.0";
          $to1 = $email;
          $message1 = "Hi $first_name,\n\nYour registration as a startup was succesfully recorded.\nWe are excited to have you onboard this event.\nOur team will get in touch with you soon.\nThe event is on March 22nd and 23rd of 2019.\nSee you then.\n\nRegards,\nTeam AI FEST 2.0,\nIEDC COET.";

          mail($to1,$subject1,$message1,$header1);
      }


    

    echo "<script>
      alert('Registration is succesfully recorded.');
      window.location.href='index.php';
      </script>";

    die("Thanks for applying");

  }

  function pickup_stp($box){
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

  function pickup_2_stp($box){
    if(isset($_POST[$box])){
      $data = $_POST[$box];
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }
    $data ="NIL";
    return $data;
  }

  function pickup_3_stp($box){
    if(!isset($_POST[$box])){
      $data = 000;
      return $data;
    }
    $data = $_POST[$box];
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
?>