<?php
         $field1 = $_POST["field1"];
         $field2 = $_POST["field2"];
         $field3 = $_POST["field3"];
         $field4 = $_POST["field4"];
         $field5 = $_POST["field5"];
         $field6 = $_POST["field6"];
         
         $to = "your_email_address";
         $subject = "Form Submission";
         $message = "Field 1: " . $field1 . "\nField 2: " . $field2 . "\nField 3: " . $field3 . "\nField 4: " . $field4 . "\nField 5: " . $field5 . "\nField 6: " . $field6;
         $headers = "From: noreply@yourdomain.com" . "\r\n";
         
         if (mail($to,$subject,$message,$headers)) {
             echo "The email was sent.";
         } else {
             echo "There was an error sending the email.";
         }
       ?>