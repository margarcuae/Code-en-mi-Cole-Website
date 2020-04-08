<?php
$to = "lqmyacs@gmail.com";
$subject = "My subject";
$txt = "Hello world!";
$headers = "From: lquincho@unsa.edu.pe" . "\r\n"; 
//."CC: somebodyelse@example.com";

mail($to,$subject,$txt,$headers);
?>

Envio