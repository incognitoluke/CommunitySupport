<?php
    $name = $_POST['name'];
    $visitor_email = $_POST['email'];
    $message = $_POST['message'];

    $email_from = "LukeTyler.business@gmail.com";

    $email_subject = "Contact Form Submission";

    $email_body = "User Name: $name .\n".
                    "User Email: $visitor_email .\n".
                        "User Message: $message .\n";

    $to = "LukeTyler.business@gmail.com";

    $headers = "From: $email_from \r\n";
    $headers .= "Reply-To: $visitor_email \r\n";

    $headers .= "Message-ID: <".time()." TheSystem@".$_SERVER['SERVER_NAME'].">\r\n";
    $headers .= "X-Mailer: PHP v".phpversion()."\r\n";    

    mail($to, $email_subject, $email_body, $headers);

    header("Location: contact.html");


?>