<?php
//get data from form
$name = $_POST['fullname'];
$email= $_POST['Pmail'];
$message= $_POST['SubjectLine'];
$to = "dmb12121@vsc.edu";
$subject = "Mail From website form";

$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Message =" . $message;
$headers = "From: noreply@biancfitness.com" . "\r\n" .
"CC:";

if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:C:\Users\Devon Biancarelli\Desktop\Capstone Project\HTML\ThankYou.html");
?>
