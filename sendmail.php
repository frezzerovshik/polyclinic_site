<?php
$message = $_POST['name']." told:".$_POST['message']; 

$headers = "From: ".$_POST['email']; 

mail("neposeda99@list.ru", "Message", $message, $headers);
?>