<?php
    if(isset($_POST["submit"])){
    $recipient="help@iedccoet.org";
    $subject=$_POST["subject_contact"]; 
    $sender=$_POST["name_contact"];
    $email=$_POST["email_contact"];
    $from="From: $email";
    $message=$_POST["message"];
    $date = date('Y-m-d');
    include_once('conn.php');
    //inserting in db
    mysqli_query($con, "INSERT INTO contact(name, email, message, date_tab)
        VALUES('$sender','$email','$message','$date')") or die("Unable to contact.");    

    //sending to help@iedccoet.org
    $body = "From : $sender\n\nEmail id : $email\n\nMessage: $message";
    
    mail($recipient,$subject,$body,$from);
    sleep(1);

}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./css/main.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</head>
<body>
	<div class="registrationform container" id="contact">
		<h2>Contact Us</h2>
		<form method="POST" name="Form">
			<div class="input-field col s12">
                <input id="name_contact_lab" type="text" class="validate" name="name_contact" required>
                <label for="name_contact_lab">Name</label>
            </div>

            <div class="input-field col s12">
                <input id="email_contact_lab" type="text" class="validate" name="email_contact" required>
                <label for="email_contact_lab">Email</label>
            </div>

            <div class="input-field col s12">
                <input id="subject_contact_lab" type="text" class="validate" name="subject_contact" required>
                <label for="subject_contact_lab">Subject</label>
            </div>

            <div class="input-field col s12">
                <textarea id="message_lab" class="materialize-textarea" name="message"></textarea>
                <label for="message_lab">Message</label>
            </div>

            <button class="btn" type="submit" name="submit" onclick="return clicked()">Send
            <i class="material-icons right">send</i>
          </button>
		</form>
	</div>
	<br/>
</body>
</html>

<script>
    i=1;
    
    function toastit(a){
            M.Toast.dismissAll();
            M.toast({html: a});
    }
        
    function add_one(){
        ++i;
    }
    
    function reset(){
        i=1;
    }
    
    function clicked(){
        var a=document.forms["Form"]["name_contact"].value;
        var b=document.forms["Form"]["email_contact"].value;
        var c=document.forms["Form"]["subject_contact"].value;
        if (a!=null || a!="",b==null || b!="",c==null || c!=""){
        add_one();
        toastit("We will get back to you soon.");
        reset;
        }
    }
</script>
</script>
