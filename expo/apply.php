
<?php
	if(isset($_POST['submit_registration'])){
    $first_name1 = pickup('first_name1');
    $last_name1 = pickup('last_name1');
    $email1 = pickup('email1');
    $mobile1 = pickup_3('mobile1'); 
    $tshirt1 = pickup_2('group31');
    
    $first_name2 = pickup('first_name2');
    $last_name2 = pickup('last_name2');
    $email2 = pickup('email2');
    $mobile2 = pickup_3('mobile2'); 
    $tshirt2 = pickup_2('group32');

    $first_name3 = pickup('first_name3');
    $last_name3 = pickup('last_name3');
    $email3 = pickup('email3');
    $mobile3 = pickup_3('mobile3'); 
    $tshirt3 = pickup_2('group33');

    $first_name4 = pickup('first_name4');
    $last_name4 = pickup('last_name4');
    $email4 = pickup('email4');
    $mobile4 = pickup_3('mobile4'); 
    $tshirt4 = pickup_2('group34');

    $first_name5 = pickup('first_name5');
    $last_name5 = pickup('last_name5');
    $email5 = pickup('email5');
    $mobile5 = pickup_3('mobile5'); 
    $tshirt5 = pickup_2('group35');

    $first_name6 = pickup('first_name6');
    $last_name6 = pickup('last_name6');
    $email6 = pickup('email6');
    $mobile6 = pickup_3('mobile6'); 
    $tshirt6 = pickup_2('group36');

    $project = pickup('project_name');  
    $project_desc = pickup('project_desc'); 
    $accomodation = pickup('accomodation');
    $link = pickup('video_link');
    $category = pickup('category');
    $status = pickup('status');

    include_once('conn.php');

    $date = date('Y-m-d');

    mysqli_query($con, "INSERT INTO register_stall(first_name1, last_name1 , email1, mobile1, tshirt1, first_name2, last_name2 , email2, mobile2,tshirt2, first_name3, last_name3 , email3, mobile3, tshirt3, first_name4, last_name4 , email4, mobile4, tshirt4, first_name5, last_name5 , email5, mobile5, tshirt5, first_name6, last_name6 , email6, mobile6, tshirt6, project_name, project_desc,current_stage,category_project,link,accomodation1 ,date_tab)
      
      VALUES('$first_name1', '$last_name1','$email1','$mobile1', '$tshirt1','$first_name2', '$last_name2','$email2','$mobile2', '$tshirt2', '$first_name3', '$last_name3','$email3','$mobile3', '$tshirt3', '$first_name4', '$last_name4','$email4','$mobile4', '$tshirt4', '$first_name5', '$last_name5','$email5','$mobile5', '$tshirt5', '$first_name6', '$last_name6','$email6','$mobile6', '$tshirt6', '$project', '$project_desc',
      '$status','$category','$link','$accomodation','$date')") or die("<script>
      alert('Unable to register. Please try again.');
      window.location.href='index.php';
      </script>");

    include_once('email_db.php');

      if($first_name1 != "NIL"){
        $header1="From: registrations@iedccoet.org";
          $subject1="REGISTRATION SUCCESFULL - AI FEST 2.0";
          $to1 = $email1;
          $message1 = "Hi $first_name1,\n\nYour registration was succesfully recorded.\nWe are excited to have you onboard this event.\nOur team will get in touch with you soon.\nThe event is on March 22nd and 23rd of 2019.\nSee you then.\n\nRegards,\nTeam AI FEST 2.0,\nIEDC COET.";

          mail($to1,$subject1,$message1,$header1);
      }

      if($first_name2 != "NIL"){
        $header2="From: registrations@iedccoet.org";
          $subject2="REGISTRATION SUCCESFULL - AI FEST 2.0";
          $to2 = $email2;
          $message2 = "Hi $first_name2,\n\nYour registration was succesfully recorded.\nWe are excited to have you onboard this event.\nOur team will get in touch with you soon.\nThe event is on March 22nd and 23rd of 2019.\nSee you then.\n\nRegards,\nTeam AI FEST 2.0,\nIEDC COET.";


          mail($to2,$subject2,$message2,$header2);
      }

      if($first_name3 != "NIL"){
        $header3="From: registrations@iedccoet.org";
          $subject3="REGISTRATION SUCCESFULL - AI FEST 2.0";
          $to3 = $email3;
          $message3 = "Hi $first_name3,\n\nYour registration was succesfully recorded.\nWe are excited to have you onboard this event.\nOur team will get in touch with you soon.\nThe event is on March 22nd and 23rd of 2019.\nSee you then.\n\nRegards,\nTeam AI FEST 2.0,\nIEDC COET.";


          mail($to3,$subject3,$message3,$header3);
      }

      if($first_name4 != "NIL"){
        $header4="From: registrations@iedccoet.org";
          $subject4="REGISTRATION SUCCESFULL - AI FEST 2.0";
          $to4 = $email4;
          $message4 = "Hi $first_name4,\n\nYour registration was succesfully recorded.\nWe are excited to have you onboard this event.\nOur team will get in touch with you soon.\nThe event is on March 22nd and 23rd of 2019.\nSee you then.\n\nRegards,\nTeam AI FEST 2.0,\nIEDC COET.";

          mail($to4,$subject4,$message4,$header4);
      }

      if($first_name5 != "NIL"){
        $header5="From: registrations@iedccoet.org";
          $subject5="REGISTRATION SUCCESFULL - AI FEST 2.0";
          $to5 = $email5;
          $message5 = "Hi $first_name5,\n\nYour registration was succesfully recorded.\nWe are excited to have you onboard this event.\nOur team will get in touch with you soon.\nThe event is on March 22nd and 23rd of 2019.\nSee you then.\n\nRegards,\nTeam AI FEST 2.0,\nIEDC COET.";

          mail($to5,$subject5,$message5,$header5);
      }

      if($first_name6 != "NIL"){
        $header6="From: registrations@iedccoet.org";
          $subject6="REGISTRATION SUCCESFULL - AI FEST 2.0";
          $to6 = $email6;
          $message6 = "Hi $first_name6,\n\nYour registration was succesfully recorded.\nWe are excited to have you onboard this event.\nOur team will get in touch with you soon.\nThe event is on March 22nd and 23rd of 2019.\nSee you then.\n\nRegards,\nTeam AI FEST 2.0,\nIEDC COET.";

          mail($to6,$subject6,$message6,$header6);
      }


    

    echo "<script>
      alert('Registration is succesfully recorded.');
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

  function pickup_2($box){
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

  function pickup_3($box){
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