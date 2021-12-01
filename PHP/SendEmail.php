<html>
   
   <head>
        <title>Thank you for contacting</title>
   </head>
   
   <body>
      
    ?>
      <?php
      //variable "to" which determines where the email is sent 
         $to = "dbiancarellimilano@gmail.com";
      //The text in the subjectline when the email is sent to my email
         $subject = "Message from Website";
      //Variable takes the text inside the subjectLine box inputted by the user and stores it
         $message = $_POST['SubjectLine']."\r\n";
      //Varible takes the email entered by the user 
         $message .= "Email Sent By: " .$_POST['Pmail']."\r\n";
      //Varble take the name of the user inputted
         $message .= "My name is..".$_POST['fullname']."\r\n";
      //The header when the email is sent to me/who its sent by
         $header = "From:noreply@biancfitness.com \r\n";
   //mail function that sends the email
      //to is the reciever
      //subject is the subject of the email being sent
      //message is what the email contains
      //header is what email appears to send this message to me 
         $retval = mail ($to,$subject,$message,$header);
         //help determines if email was successfully sent
         //good to help me test/alert the user that everything worked
         if( $retval == true ) {
            echo "Message sent successfully...";
         }else {
            echo "Message could not be sent...";
         }
      ?>
        <h1>Thank you for contacting us </h1>
        <p>A represenative will be in touch shortly</p>
        <a href="\">Return to home page </a>
         </body>
</html>
