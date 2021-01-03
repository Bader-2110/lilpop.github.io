<?php
    $name = $POST_['name'];
    $user_email = $POST_['email'];
    $message = $POST_['message'];

    $email_from = "lilpop.bh@gmail.com";
    $email_type = 'New form';
    $email_info = "User Name: $name.\n".
                  "User Email: $user_email.\n".
                  "User Message: $message.\n";

    $to = "lilpop.bh@gmail.com";

$headers = "From: $email_from \r\n";
$headers .= "Reply-To: $user_email \r\n";

mail($to,$email_type,$email_info,$headers);

header("Location: Contact.html");
 ?>
