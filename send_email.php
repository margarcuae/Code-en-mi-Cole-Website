<?php


$to = "lqmyacs@gmail.com";
$subject = "My subject";
$txt = "Hello world!";
$headers = "From: root@ubuntu-s-1vcpu-1gb-nyc1-01";   
//."CC: somebodyelse@example.com";

// Sending email
if(mail($to,$subject,$txt,$headers)){
    echo 'Your mail has been sent successfully.';
} else{
    echo 'Unable to send email. Please try again.';
}


?>

