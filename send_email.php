<?php


$to = "lqmyacs@gmail.com";
$subject = "My subject";
$txt = "Hello world!";
$headers = "CC: lqmyacs@gmail.com"; 
//."CC: somebodyelse@example.com";

// Sending email
if(mail($to,$subject,$txt,$headers)){
    echo 'Your mail has been sent successfully.';
} else{
    echo 'Unable to send email. Please try again.';
}


?>

