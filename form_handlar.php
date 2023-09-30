<?php
//get data from form 
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];   

$email_form = 'chitraicoating@rediffmail.com';

$email_subject = 'New form submission';

$email_body = "User Name: $name.\n".
                "User Email: $visitor_email.\n". 
                 "Subject: $subject.\n".
                 "User Message: $message.\n";

$to = 'patilabhishekn@gmail.com';

$headers = "From: $email_form";

$headers .= "Reply-To: $visitor_email";

mail($to,$email_subject,$email_body,$headers);

header("Location: contact.html");

?>