<?php 

 if (isset($_POST['submit']))
 {

$Fname = $_POST['firstName'];
$Lname = $_POST['lastName'];
$subject = $_POST['subject'];
$mailFrom = $_POST['mail'];
$message = $_POST['message'];


 $mailTo = 'adam.sp220@gmail.com'
 $headers = "From: " . $mailFrom;
 $txt = "You have received an e-mail from: " . $Fname . $Lname . '\n\n'. $message;


mail($mailTo, $subject, $txt, $headers); 
header("location: index.html?mailsend");

 }


?>