<?php

$name = $_post['name'];
$visitor_email = $_post['email'];
$meassage = $_POST['message'];


$email_from = 'gtjin1103@gmail.com';

$email_subject = "New Form Submission";

$email_body = "User Name: $name./n".
                    "User Email: $visitor_email./n".
                       "User Message: $message./n";




      $to = "533187@student.glu.nl";

$headers = "From: $email_from /r/n";

$header .= "Reply-To:$visitor_email /r/n";

mail($to,$email_subject, $email_body, $headers);

header("location: contact.html");
   

?>
