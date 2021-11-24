<html>
 
   <head>
      <title>Sending HTML email using PHP</title>
   </head>
   
   <body>
?>
      <?php
         $to = "dbiancarellimilano@gmail.com";
         $subject = "Message from Website";
         $message = $_POST['SubjectLine']."\r\n";
         $message .= "Email Sent By: " .$_POST['Pmail']."\r\n";
         $message .= "My name is..".$_POST['fullname']."\r\n";
         $header = "From:noreply@biancfitness.com \r\n";

         $retval = mail ($to,$subject,$message,$header);
         
         if( $retval == true ) {
            echo "Message sent successfully...";
         }else {
            echo "Message could not be sent...";
         }
      ?>
  </body>
</html>
