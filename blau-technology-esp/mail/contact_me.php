<?php
// Check for empty fields
if(empty($_POST['name'])      ||
   empty($_POST['email'])     ||
   empty($_POST['phone'])     ||
   empty($_POST['message'])   ||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
   echo "No arguments Provided!";
   return false;
   }
   
$name = strip_tags(htmlspecialchars($_POST['name']));
$email_address = strip_tags(htmlspecialchars($_POST['email']));
$phone = strip_tags(htmlspecialchars($_POST['phone']));
$message = strip_tags(htmlspecialchars($_POST['message']));
   
// Create the email and send the message
$to = 'contactblautech@gmail.com'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
$email_subject = "Website Contact Form:  $name";
$email_body = "
<html>
    <head>
      <title></title>

      <meta charset='utf-8'>
      <meta name='viewport' content='width=device-width, initial-scale=1'>
      <!-- Apis to use Bootstrap -->
      <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
      <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    </head>
    <body>
      <div class='container-fluid' style='background-color: #2e5d8c; border-top-right-radius: 10px; border-top-left-radius: 10px; border-color: #2e5d8c; margin-top: 1%; width: 90%; margin-left: 5%;  height: 11%;'>
        <center>
        <img src='img/logos/full.png'  style=' margin-left: 1.5%; width: 15%;  position: relative;'>
        </center>
      </div>

      <div class='container-fluid' style='background-color: #f5f9f9; width: 90%; margin-left: 5%; font-size: 18px;'>
        <br>
        <h1 style='color: #000000;'>You have a new info request</h1><hr>
        <p>$name :<br> $message</p>   
        <br>
        $email_address
        <br>
        $phone
        <center><br>
        </div>
          

      <div class='container-fluid' style='background-color: #2e5d8c; width: 90%; margin-left: 5%; margin-bottom: 25px; border-bottom-left-radius: 10px; border-bottom-right-radius: 10px; font-size: 18px; height: 11%;'>
        <center>
          <p>All rights reserved <br>
           &copy; 2018 <img src='img/logos/small.png' width='4%'></p>
        </center>    
      </div>
    </body>
  </html> ";
$headers = "From: noreply@blautechnologies.com\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
$headers .= "Reply-To: $email_address";   
mail($to,$email_subject,$email_body,$headers);	


$to = $email_address;

$email_subject="We've received your information!";
$email_body = "<html>
    <head>
      <title></title>

      <meta charset='utf-8'>
      <meta name='viewport' content='width=device-width, initial-scale=1'>
      <!-- Apis to use Bootstrap -->
      <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
      <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    </head>
    <body>
      <div class='container-fluid' style='background-color: #2e5d8c; border-top-right-radius: 10px; border-top-left-radius: 10px; border-color: #2e5d8c; margin-top: 1%; width: 90%; margin-left: 5%;  height: 11%;'>
        <center>
        <img src='img/logos/full.png'  style=' margin-left: 1.5%; width: 15%;  position: relative;'>
        </center>
      </div>

      <div class='container-fluid' style='background-color: #f5f9f9; width: 90%; margin-left: 5%; font-size: 18px;'>
        <br>
        <h1 style='color: #000000;'>Dear $name</h1><hr>
        <p>We have received yor information, just wait a little and you will have news from us soon.</p>   
        <center><br>
        </div>    

      <div class='container-fluid' style='background-color: #2e5d8c; width: 90%; margin-left: 5%; margin-bottom: 25px; border-bottom-left-radius: 10px; border-bottom-right-radius: 10px; font-size: 18px; height: 11%;'>
        <center>
          <p>All rights reserved <br>
           &copy; 2018 <img src='img/logos/small.png' width='4%'></p>
        </center>    
      </div>
    </body>
  </html> ";
  mail($to,$email_subject,$email_body,$headers);	
return true;         
?>